import fs from 'fs'
import path from 'path'
import matter from 'gray-matter'
import Head from 'next/head'

export default function Home({ posts }) {
    console.log(posts)
    return (
        <div>
            <Head>
                <title>Dev Blog</title>
            </Head>
            <div className="posts">
                {posts.map((post, index) => (
                    <h3>{post.frontmatter.title}</h3>
                ))}
            </div>
        </div>
    )
}

export async function getStaticProps() {
    const files = fs.readdirSync(path.join('posts'))

    // Get slug and frontmatter from posts
    const posts = files.map(filename => {
        const slug = filename.replace('.md', '')
        const markdownWithMeta = fs.readFileSync(
            path.join('posts', filename),
            'utf-8'
        )
        const {data: frontmatter} = matter(markdownWithMeta)
        return {
            slug,
            frontmatter
        }

    })

    return {
        props: {
            posts,
        }
    }
}