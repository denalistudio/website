import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import Head from 'next/head'
import Image from 'next/image'
import markdownToHtml from '../../lib/markdownToHtml'
import PostBody from '../../components/post-body'
import Footer from '../../components/footer'

export default function Post({
    frontmatter: {
        title,
        coverImage
    },
    clean,
}) {
    return (
        <div className="post-container">
            <Head>
                <title>{title} | Studio Denali</title>
            </Head>
            <header className="post-navbar">
                <nav>
                    <p>Znalostní báze</p>
                </nav>
            </header>
            <div className="post-header">
                <Image
                    src={coverImage}
                    className="post-image"
                    layout="responsive"
                    width = {1920}
                    height = {1080}
                />
                <h1>{title}</h1>
            </div>
            <PostBody clean={clean} />
            <Footer />
        </div>
    )
}

export async function getStaticProps({ params: { slug } }) {
    const markdownWithMeta = fs.readFileSync(
        path.join('posts', slug + '.md'),
        'utf-8'
    )
    const { data: frontmatter, content } = matter(markdownWithMeta)
    const clean = await markdownToHtml(content || '')
    return {
        props: {
            frontmatter,
            slug,
            clean,
        },
    }
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