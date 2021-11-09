import markdownStyles from './markdown-styles.module.css'

export default function PostBody({ content }) {
    return (
        <article>
            <div className={markdownStyles['markdown']} dangerouslySetInnerHTML={{ __html: content }} />
        </article>
    )
}