import './pageblocks/products-swiper';
import './pageblocks/review-swiper';
import './pageblocks/blog-swiper';
import './pageblocks/menu';

import domReady from '@roots/sage/client/dom-ready'; 


/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
