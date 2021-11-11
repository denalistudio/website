export default function CoverImage({ src, width, height }) {
    return (
        <img
            src={src}
            className="post-image"
            layout="fill"
            width={width}
            height={height}
        />
    )
}