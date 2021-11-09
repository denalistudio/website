export default function PostHeader({ title, date, category, coverImage}) {
    return (
        <>
            <PostTitle>{title}</PostTitle>
            <PostDate>{date}</PostDate>
            <PostCategory>{category}</PostCategory>
            <coverImage src={`./blog/${coverImage}`} />
        </>
    )
}