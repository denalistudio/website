import Header from '../components/Header'
import '../styles/style.css'

function MyApp({ Component, pageProps }) {
    return (
        <>
        <Header />
        <main className='container'>
            <Component {...pageProps} />
        </main>
        </>
    )
}

export default MyApp