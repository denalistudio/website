import Link from 'next/link'

export default function Footer() {
    return (
        <footer>
            <p>
                <Link href="https://cs.wikipedia.org/wiki/Autorsk%C3%A9_pr%C3%A1vo">
                    <a>&copy; </a>
                </Link>
                2021 Studio Denali, David Brzý &amp; Jakub Klapka
            </p>
        </footer>
    )
}