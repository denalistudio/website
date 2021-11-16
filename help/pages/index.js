import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import Head from 'next/head'
import Link from 'next/link'
import { sortByDate } from '../utils'
import Footer from '../components/footer'

export default function Index({ posts }) {
    return (
        <div className="container">
            <Head>
                <title>Znalostní báze | Studio Denali</title>
            </Head>
            <header className="navbar">
                <nav>
                    <p>Znalostní báze</p>
                </nav>
            </header>
            <main className="posts">
                {posts.map((post, index) => (
                    <article className="card" key={index} post={post}>
                        <Link href={`./posts/${post.slug}`}>
                            <a>
                                <img src={post.frontmatter.coverImage} />
                                <h3>{post.frontmatter.title}</h3>
                                <p>{post.frontmatter.description}</p>
                            </a>
                        </Link>
                    </article>
                ))}
            </main>
            <Footer />
        </div>
    )
}

export async function getStaticProps() {
    const files = fs.readdirSync(path.join('posts'))
    const posts = files.map((filename) => {
        const slug = filename.replace('.md', '')
        const markdownWithMeta = fs.readFileSync(
            path.join('posts', filename),
            'utf-8'
        )
        const { data: frontmatter } = matter(markdownWithMeta)
        return {
            slug,
            frontmatter,
        }
    })
    return {
        props: {
            posts: posts.sort(sortByDate),
        },
    }
}