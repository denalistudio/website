import CoverImage from './cover-image'

export default function PostHeader({ title, coverImage}) {
    return (
        <div className="post-header">
            <CoverImage src={coverImage} width={1920} height={1080} />
            <h1>{title}</h1>
        </div>
    )
}