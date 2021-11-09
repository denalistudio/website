import CoverImage from './cover-image'
import PostTitle from './post-title'
import PostExcerpt from './post-excerpt'
import Image from 'next/Image'
import Link from 'next/Link'

export default function Post({ post }) {
    return (
        <div className="card">
            <Link href={`./blog/${post.slug}`}>
                <a>
                    <Image
                        src={post.frontmatter.coverImage}
                        layout="responsive"
                    />
                    <PostTitle>{post.frontmatter.title}</PostTitle>
                    <PostExcerpt>{post.frontmatter.excerpt}</PostExcerpt>
                </a>
            </Link>
        </div>
    )
}

// <div className='post-date'>Posted on {post.frontmatter.date}</div>