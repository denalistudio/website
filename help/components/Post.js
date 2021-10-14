import Link from 'next/Link'

export default function Post({post}) {
    return (
        <div class='card'>
            <p>{post.frontmatter.category}</p>
            <h3>{post.frontmatter.title}</h3>
            <p>{post.frontmatter.description}</p>
            <img src={post.frontmatter.cover_image} /> 
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>
// <Link href={`/blog/${post.slug}`}><a className='btn'>Read more</a></Link>