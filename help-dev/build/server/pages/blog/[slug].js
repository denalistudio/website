"use strict";
(() => {
var exports = {};
exports.id = 492;
exports.ids = [492];
exports.modules = {

/***/ 127:
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// EXPORTS
__webpack_require__.d(__webpack_exports__, {
  "default": () => (/* binding */ PostPage),
  "getStaticPaths": () => (/* binding */ getStaticPaths),
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
;// CONCATENATED MODULE: external "marked"
const external_marked_namespaceObject = require("marked");
var external_marked_default = /*#__PURE__*/__webpack_require__.n(external_marked_namespaceObject);
// EXTERNAL MODULE: external "next/Link"
var Link_ = __webpack_require__(847);
// EXTERNAL MODULE: external "react/jsx-runtime"
var jsx_runtime_ = __webpack_require__(282);
;// CONCATENATED MODULE: ./pages/blog/[slug].js








function PostPage({
  frontmatter: {
    title,
    date,
    cover_image,
    category
  },
  slug,
  content
}) {
  return /*#__PURE__*/(0,jsx_runtime_.jsxs)(jsx_runtime_.Fragment, {
    children: [/*#__PURE__*/jsx_runtime_.jsx("img", {
      src: cover_image
    }), /*#__PURE__*/jsx_runtime_.jsx("h4", {
      children: category
    }), /*#__PURE__*/jsx_runtime_.jsx("h1", {
      children: title
    }), /*#__PURE__*/(0,jsx_runtime_.jsxs)("div", {
      className: "post-date",
      children: ["Posted on ", date]
    }), /*#__PURE__*/jsx_runtime_.jsx("div", {
      className: "post-body",
      children: /*#__PURE__*/jsx_runtime_.jsx("div", {
        dangerouslySetInnerHTML: {
          __html: external_marked_default()(content)
        }
      })
    })]
  });
} // <Link href='/'><a className='btn btn-back'>Go Back</a></Link>

async function getStaticPaths() {
  const files = external_fs_default().readdirSync(external_path_default().join('posts'));
  const paths = files.map(filename => ({
    params: {
      slug: filename.replace('.md', '')
    }
  }));
  return {
    paths,
    fallback: false
  };
}
async function getStaticProps({
  params: {
    slug
  }
}) {
  const markdownWithMeta = external_fs_default().readFileSync(external_path_default().join('posts', slug + '.md'), 'utf-8');
  const {
    data: frontmatter,
    content
  } = external_gray_matter_default()(markdownWithMeta);
  return {
    props: {
      frontmatter,
      slug,
      content
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
var __webpack_require__ = require("../../webpack-runtime.js");
__webpack_require__.C(exports);
var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
var __webpack_exports__ = (__webpack_exec__(127));
module.exports = __webpack_exports__;

})();