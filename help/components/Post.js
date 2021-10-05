import Link from 'next/Link'

export default function Post({post}) {
    return (
        <div class='card'>
            <img src={post.frontmatter.cover_image} />
            <div className='post-date'>Posted on {post.frontmatter.date}</div>
            <h3>{post.frontmatter.title}</h3>
            <p>{post.frontmatter.excerpt}</p>
            <Link href={`/blog/${post.slug}`}>
                <a className='btn'>Read more</a>
            </Link>
        </div>
    )
}