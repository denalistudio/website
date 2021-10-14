import Link from 'next/Link'

export default function Post({ post }) {
    return (
        <div class='card'>
            <Link href={`https://www.studiodenali.cz/help/blog/${post.slug}`}>
                <a>
                    <img src={post.frontmatter.cover_image} />
                    <h4>{post.frontmatter.category}</h4>
                    <h3>{post.frontmatter.title}</h3>
                    <p>{post.frontmatter.description}</p>
                </a>
            </Link>
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>