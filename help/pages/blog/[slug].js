import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import marked from 'marked'

import Container from '../../components/container'
import PostLayout from '../../components/post-layout'
import PostBody from '../../components/post-body'
import PostHeader from '../../components/post-header'
import Head from 'next/head'
import Link from 'next/Link'

export default function Post({
    frontmatter: { title, date, coverImage, category },
    slug,
    content
}) {
    return (
        <PostLayout>
            <Container>
                <article>
                    <Head>
                        <title>{title} | Studio Denali</title>
                    </Head>
                    <PostHeader
                        title={title}
                        date={date}
                        category={category}
                        coverImage={coverImage}
                    />
                    <PostBody content={content} />
                </article>
            </Container>
        </PostLayout>
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