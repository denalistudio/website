"use strict";
(() => {
var exports = {};
exports.id = 405;
exports.ids = [405];
exports.modules = {

/***/ 917:
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// EXPORTS
__webpack_require__.d(__webpack_exports__, {
  "default": () => (/* binding */ Home),
  "getStaticProps": () => (/* binding */ getStaticProps)
});

// EXTERNAL MODULE: external "fs"
var external_fs_ = __webpack_require__(826);
var external_fs_default = /*#__PURE__*/__webpack_require__.n(external_fs_);
// EXTERNAL MODULE: external "path"
var external_path_ = __webpack_require__(622);
var external_path_default = /*#__PURE__*/__webpack_require__.n(external_path_);
// EXTERNAL MODULE: external "gray-matter"
var external_gray_matter_ = __webpack_require__(64);
var external_gray_matter_default = /*#__PURE__*/__webpack_require__.n(external_gray_matter_);
;// CONCATENATED MODULE: external "next/head"
const head_namespaceObject = require("next/head");
var head_default = /*#__PURE__*/__webpack_require__.n(head_namespaceObject);
// EXTERNAL MODULE: external "next/Link"
var Link_ = __webpack_require__(847);
var Link_default = /*#__PURE__*/__webpack_require__.n(Link_);
// EXTERNAL MODULE: external "react/jsx-runtime"
var jsx_runtime_ = __webpack_require__(282);
;// CONCATENATED MODULE: ./components/Post.js



function Post({
  post
}) {
  return /*#__PURE__*/jsx_runtime_.jsx("div", {
    class: "card",
    children: /*#__PURE__*/jsx_runtime_.jsx((Link_default()), {
      href: `/blog/${post.slug}`,
      children: /*#__PURE__*/(0,jsx_runtime_.jsxs)("a", {
        children: [/*#__PURE__*/jsx_runtime_.jsx("img", {
          src: post.frontmatter.cover_image
        }), /*#__PURE__*/jsx_runtime_.jsx("h4", {
          children: post.frontmatter.category
        }), /*#__PURE__*/jsx_runtime_.jsx("h3", {
          children: post.frontmatter.title
        }), /*#__PURE__*/jsx_runtime_.jsx("p", {
          children: post.frontmatter.description
        })]
      })
    })
  });
} // <div className='post-date'>Posted on {post.frontmatter.date}</div>
// <Link href={`/blog/${post.slug}`}><a className='btn'>Read more</a></Link>
;// CONCATENATED MODULE: ./utils/index.js
const sortByDate = (a, b) => {
  return new Date(b.frontmatter.date) - new Date(a.frontmatter.date);
};
;// CONCATENATED MODULE: ./pages/index.js








function Home({
  posts
}) {
  return /*#__PURE__*/(0,jsx_runtime_.jsxs)("div", {
    children: [/*#__PURE__*/jsx_runtime_.jsx((head_default()), {
      children: /*#__PURE__*/jsx_runtime_.jsx("title", {
        children: "Znalostn\xED b\xE1ze | Studio Denali"
      })
    }), /*#__PURE__*/jsx_runtime_.jsx("div", {
      className: "posts",
      children: posts.map((post, index) => /*#__PURE__*/jsx_runtime_.jsx(Post, {
        post: post
      }, index))
    })]
  });
}
async function getStaticProps() {
  const files = external_fs_default().readdirSync(external_path_default().join('posts')); // Get slug and frontmatter from posts

  const posts = files.map(filename => {
    const slug = filename.replace('.md', '');
    const markdownWithMeta = external_fs_default().readFileSync(external_path_default().join('posts', filename), 'utf-8');
    const {
      data: frontmatter
    } = external_gray_matter_default()(markdownWithMeta);
    return {
      slug,
      frontmatter
    };
  });
  return {
    props: {
      posts: posts.sort(sortByDate)
    }
  };
}

/***/ }),

/***/ 826:
/***/ ((module) => {

module.exports = require("fs");

/***/ }),

/***/ 64:
/***/ ((module) => {

module.exports = require("gray-matter");

/***/ }),

/***/ 847:
/***/ ((module) => {

module.exports = require("next/Link");

/***/ }),

/***/ 622:
/***/ ((module) => {

module.exports = require("path");

/***/ }),

/***/ 282:
/***/ ((module) => {

module.exports = require("react/jsx-runtime");

/***/ })

};
;

// load runtime
var __webpack_require__ = require("../webpack-runtime.js");
__webpack_require__.C(exports);
var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
var __webpack_exports__ = (__webpack_exec__(917));
module.exports = __webpack_exports__;

})();