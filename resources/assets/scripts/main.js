// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import postTypeArchiveProducts from './routes/products-archive'

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // Product Archive
  postTypeArchiveProducts,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
