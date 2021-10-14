import Link from 'next/Link'

export default function Post({post}) {
    return (
        <div class='card'>
            <p className='card-post-category'>{post.frontmatter.category}</p>
            <h3 className='card-post-title'>{post.frontmatter.title}</h3>
            <p className='card-post-description'>{post.frontmatter.description}</p>
            <img className='card-cover-image' src={post.frontmatter.cover_image} /> 
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>
// <Link href={`/blog/${post.slug}`}><a className='btn'>Read more</a></Link>