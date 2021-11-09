import CoverImage from './cover-image'

export default function PostHeader({ title, coverImage}) {
    return (
        <>
            <h1>{title}</h1>
            <CoverImage src={coverImage} />
        </>
    )
}