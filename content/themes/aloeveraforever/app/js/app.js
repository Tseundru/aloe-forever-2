import {ProductGallery , ProductCarousel} from './carousel';
import lazyload from './lazyload'


//const carousel = require('./carousel');

const burgerMenu = require('./burgerMenu');
const searchBar = require('./searchBar');
const instaFeed = require('./instaFeed');
const popup = require('./popup');
const accordion = require('./accordion');
const loadmore = require('./loadmore');
const rates = require('./rates');
const app = {
  init: function() {
    console.log('init app');
    burgerMenu.init();
    searchBar.init();
    //instaFeed.init();
    popup.init();
    accordion.init();
    lazyload.init();
    loadmore.init();
    rates.init();
  },
};

$(app.init);