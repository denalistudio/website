import Image from 'next/image'

export default function CoverImage({ src, width, height }) {
    const image = (
        <Image
            src={src}
            className="post-image"
            layout="fill"
            width={width}
            height={height}
        />
    )
    return (image)
}