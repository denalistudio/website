import { unified } from 'unified'
import remarkParse from 'remark-parse'
import remarkRehype from 'remark-rehype'
import rehypeRaw from 'rehype-raw'
import rehypeSlug from 'rehype-slug'
import rehypeToc from 'rehype-toc'
import rehypeStringify from 'rehype-stringify'

export default async function markdownToHtml(markdown) {
    const result = await unified()
        .use(remarkParse)
        .use(remarkRehype, {allowDangerousHtml: true})
        .use(rehypeRaw)
        .use(rehypeSlug)
        .use(rehypeToc, {
            nav: true,
            headings: ["h2"],
        })
        .use(rehypeStringify)
        .process(markdown)
    return result.toString()
}