import '../styles/style.css'

function MyApp({ Component, pageProps }) {
    return (
        <>
        <nav>
            <p>Znalostní báze</p>
        </nav>
        <main className='container'>
            <Component {...pageProps} />
        </main>
        </>
    )
}

export default MyApp