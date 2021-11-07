import Image from 'next/image'

export default function CoverImage({ src, height, width }) {
    const image = (
        <Image
            src={src}
            width={width}
            height={height}
        />
    )
    return (image)
}