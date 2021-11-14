import Head from 'next/head'
import CoverImage from '../../components/cover-image'
import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import DOMPurify from 'dompurify'
import { JSDOM } from 'jsdom'

const window = new JSDOM('').window

export default function Post({
    frontmatter: { title, coverImage },
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
            <div className="post-header">
                <CoverImage src={coverImage} width={1920} height={1080} />
                <h1>{title}</h1>
            </div>
            <article className={["post-body"]} dangerouslySetInnerHTML={{ __html: DOMPurify(window).sanitize(content) }} />
        </main>
    )
}

export async function getStaticPaths() {
    const files = fs.readdirSync(path.join('posts'))
    const paths = files.map((filename) => ({
        params: {
            slug: filename.replace('.md', ''),
        },
    }))
    return {
        paths,
        fallback: false,
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