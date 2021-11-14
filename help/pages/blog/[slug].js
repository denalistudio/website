import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'

import PostBody from '../../components/post-body'
import PostHeader from '../../components/post-header'
import Head from 'next/head'

export default function PostPage({
    frontmatter: { title, coverImage },
    slug,
    content,
}) {
    return (
        <main className="post-container">
            <Head>
                <title>{title} | Studio Denali</title>
            </Head>
            <header className="post-navbar">
                <nav>
                    <p>Znalostní báze</p>
                </nav>
            </header>
            <PostHeader
                title={title}
                coverImage={coverImage}
            />
            <PostBody content={content} />
        </main>
    )
}

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
    const markdownWithMeta = fs.readFileSync(
        path.join('posts', slug + '.md'),
        'utf-8'
    )
    const { data: frontmatter, content } = matter(markdownWithMeta)
    return {
        props: {
            frontmatter,
            slug,
            content,
        },
    }
}