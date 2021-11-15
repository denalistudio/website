import { useEffect } from "react";

export default function Math() {
    useEffect(() => {
        function width() {
            var bodyWidth = document.body.clientWidth;
            var fractionWidth = (bodyWidth - 100) / 10
            return () => {
                bodyWidth,
                fractionWidth
            }
        }
        window.addEventListener('resize', width);
    }, []);
    document.documentElement.style.setProperty('--bodyWidth', bodyWidth + 'px'),
    document.documentElement.style.setProperty('--fractionWidth', fractionWidth + 'px');
}