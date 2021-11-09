import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import marked from 'marked'

import PostBody from '../../components/post-body'
import PostHeader from '../../components/post-header'
import Head from 'next/head'
import Link from 'next/Link'

export default function Post({
    frontmatter: { title, coverImage },
    slug,
    content
}) {
    return (
        <main className="post-container">
            <Head>
                <title>{title} | Studio Denali</title>
            </Head>
            <PostHeader
                title={title}
                coverImage={coverImage}
            />
            <PostBody content={content} />
        </main>
    )

    /*<img src={`./../..${cover_image}`} />
    <article>
        <h4>{category}</h4>
        <h1>{title}</h1>
        <div className='post-date'>Posted on {date}</div>
        <div className='post-body'>
            <div dangerouslySetInnerHTML={{ __html: marked(content) }}></div>
        </div>
    </article>*/
}

// <Link href='/'><a className='btn btn-back'>Go Back</a></Link>

export async function getStaticPaths() {
    const files = fs.readdirSync(path.join('posts'))
    const paths = files.map(filename => ({
        params: {
            slug: filename.replace('.md', '')
        }
    }))
    return {
        paths,
        fallback: false
    }
}

export async function getStaticProps({ params: { slug } }) {
    const markdownWithMeta = fs.readFileSync(path.join('posts', slug + '.md'), 'utf-8')
    const { data: frontmatter, content } = matter(markdownWithMeta)
    return {
        props: {
            frontmatter,
            slug,
            content
        }
    }
}