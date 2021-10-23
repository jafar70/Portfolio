"use strict";

var lazyLoadInstance = new LazyLoad({// Your custom settings go here
});
"use strict";

var loader = document.querySelector('.gm03');
window.addEventListener('load', function () {
  loader.style.opacity = '0';
  loader.style.pointerEvents = "none";
});
"use strict";

// Site Navigation
var desktopNav = document.querySelector('.gm01');
var hamburgerIcon = document.querySelector('.hamburger');
var mobileNav = document.querySelector('.overlay');
hamburgerIcon.addEventListener('click', function (e) {
  e.currentTarget.classList.toggle('change');
  mobileNav.classList.toggle('open');
  desktopNav.classList.toggle('gm01--transparent');
});
"use strict";

// Mixitup setup.
var portfolioList = document.querySelector('#portfoliolist');

if (typeof portfolioList != 'undefined' && portfolioList != null) {
  mixitup('#portfoliolist', {
    animation: {
      effectsIn: 'fade translate(0px, 0)',
      effectsOut: 'fade translate(0px, 0)',
      duration: 600
    },
    classNames: {
      block: 'm05__filters',
      elementFilter: 'filter'
    },
    selectors: {
      target: '.m05__grid__item'
    }
  });
} // Toogle filter tabs.


var filterTabs = document.querySelectorAll('.m05__filters > li > span');
filterTabs.forEach(function (filterTab) {
  filterTab.addEventListener('click', function (e) {
    var active = document.querySelector('.active');

    if (active) {
      active.classList.remove('active');
    }

    e.currentTarget.classList.add('active');
  });
});