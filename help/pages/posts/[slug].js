import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import Head from 'next/head'
import markdownToHtml from '../../lib/markdownToHtml'
import Gallery from '../../lib/gallery'
import PostBody from '../../components/post-body'
import Footer from '../../components/footer'

export default function Post({
    frontmatter: {
        title,
        coverImage,
        gallery
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
                <img
                    className="post-image"
                    src={coverImage}
                    width="100%"
                />
                <h1>{title}</h1>
            </div>
            <PostBody clean={clean} />
            <Footer />
            <Gallery gallery={gallery} />
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