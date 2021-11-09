import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'

import Container from '../components/container'
import Layout from '../components/layout'
import Post from '../components/post'
import Head from 'next/head'

import { sortByDate } from '../utils'

export default function Index({ posts }) {
    return (
        <Layout>
            <Head>
                <title>Znalostní báze | Studio Denali</title>
            </Head>
                <Container>
                    <nav>
                        <p>Znalostní báze</p>
                    </nav>
                    <div className="posts">
                        {posts.map((post, index) => (
                            <Post key={index} post={post} />
                        ))}
                    </div>
                </Container>
        </Layout>
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
            frontmatter
        }

    })
    return {
        props: {
            posts: posts.sort(sortByDate)
        }
    }
}