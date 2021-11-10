import CoverImage from './cover-image'

export default function PostHeader({ title, coverImage}) {
    return (
        <div className="post-header">
            <h1>{title}</h1>
        </div>
    )
}