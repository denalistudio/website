import Link from 'next/Link'

export default function Post({ post }) {
    return (
        <div className="card">
            <Link href={`./blog/${post.slug}`}>
                <a>
                    <img className="card-img" src={post.frontmatter.coverImage} />
                    <h3 className="card-title">{post.frontmatter.title}</h3>
                    <p className="card-description">{post.frontmatter.description}</p>
                </a>
            </Link>
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>