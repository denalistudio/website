import PostTitle from './post-title'
import CoverImage from './cover-image'

export default function PostHeader({ title, coverImage}) {
    return (
        <>
            <PostTitle>{title}</PostTitle>
            <CoverImage src={coverImage} />
        </>
    )
}