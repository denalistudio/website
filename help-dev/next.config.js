module.exports = {
    assetPrefix: './',
    async rewrites() {
        return [
          {
            source: '/blog/',
            destination: './blog/',
          },
        ]
      },
    trailingSlash: true,
    reactStrictMode: true
}