import Link from 'next/Link'

export default function Post({ post }) {
    return (
        <div className="card">
            <Link href={`./blog/${post.slug}`}>
                <a>
                    <img src={post.frontmatter.coverImage} />
                    <h3>{post.frontmatter.title}</h3>
                    <p>{post.frontmatter.description}</p>
                </a>
            </Link>
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>