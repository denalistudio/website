import Image from 'next/image'

export default function CoverImage({ src, width, height }) {
    return (
        <Image
            src={src}
            className="post-image"
            layout="responsive"
            width = {width}
            height = {height}
        />
    )
}