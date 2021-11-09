import PostTitle from './post-title'
import PostDescription from './post-description'
import Link from 'next/Link'

export default function Post({ post }) {
    return (
        <div className="card">
            <Link href={`./blog/${post.slug}`}>
                <a>
                    <img src={post.frontmatter.coverImage} />
                    <PostTitle>{post.frontmatter.title}</PostTitle>
                    <PostDescription>{post.frontmatter.description}</PostDescription>
                </a>
            </Link>
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>