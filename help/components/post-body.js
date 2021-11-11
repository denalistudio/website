import marked from "marked";

export default function PostBody({ content }) {
    return (
        <article className={["post-body"]} dangerouslySetInnerHTML={{ __html: marked(content) }} />
    )
}