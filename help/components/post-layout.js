export default function PostLayout({ children }) {
    return (
        <>
            <div className="screen-h">
                <main>{children}</main>
            </div>
        </>
    )
}