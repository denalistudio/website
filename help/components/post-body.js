import { useEffect } from 'react'

export default function PostBody({ clean }) {
    useEffect(() => {
        const toc = document.querySelector('.toc');
        const postToc = document.querySelector('.post-toc');
        postToc.innerHTML = toc.innerHTML;
        toc.remove();
    }, []);
    return (
        <main className="post-body">
            <aside className="post-toc-container">
                <nav className="post-toc" />
            </aside>
            <article className={["post"]} dangerouslySetInnerHTML={{ __html: clean }} />
        </main>
    )
}