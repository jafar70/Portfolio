"use strict";

// Lenis Smooth Scroll
var lenis = new Lenis();
lenis.on('scroll', function (e) {
  console.log(e);
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf); // Split Animation

var lettering = new Lettering('.letters');
lettering.words();
setTimeout(function () {
  var effects = document.querySelectorAll(".letters");
  effectsInit(effects, window);
}, 200);
"use strict";

var lazyLoadInstance = new LazyLoad({// Your custom settings go here
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

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".gm01").classList.add("gm01--onscroll");
  } else {
    document.querySelector(".gm01").classList.remove("gm01--onscroll");
  }
}
"use strict";

// Mixitup setup.
var portfolioList = document.querySelector('#portfoliolist');

if (typeof portfolioList != 'undefined' && portfolioList != null) {
  /**
   * Reads a hash from the URL (if present), and converts it into a class
   * selector string. E.g "#green" -> ".green". Otherwise, defaults
   * to the targetSelector, equivalent to "all"
   *
   * @return {string}
   */
  var getSelectorFromHash = function getSelectorFromHash() {
    var hash = window.location.hash.replace(/^#/g, '');
    var selector = hash ? '.' + hash : targetSelector;
    return selector;
  };
  /**
   * Updates the URL whenever the current filter changes.
   *
   * @param   {mixitup.State} state
   * @return  {void}
   */


  var setHash = function setHash(state) {
    var selector = state.activeFilter.selector;
    var newHash = '#' + selector.replace(/^\./g, '');

    if (selector === targetSelector && window.location.hash) {
      // Equivalent to filter "all", remove the hash
      history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
    } else if (newHash !== window.location.hash && selector !== targetSelector) {
      // Change the hash
      history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
    }
  }; // Instantiate and configure the mixer


  // As we have no server-side application or routes, we will use
  // a URL "hash" for this demo, but we chould just as easily use
  // a URL route segment.
  // As we will use the target selector in several parts of the demo,
  // we will declare it as a variable here.
  var targetSelector = '.m05__grid__item';
  var mixer = mixitup('.m05__list', {
    selectors: {
      target: targetSelector
    },
    animation: {
      effectsIn: 'fade translate(0px, 0)',
      effectsOut: 'fade translate(0px, 0)',
      duration: 600
    },
    classNames: {
      block: 'm05__filters',
      elementFilter: 'filter'
    },
    load: {
      filter: getSelectorFromHash() // Ensure that the mixer's initial filter matches the URL on startup

    },
    callbacks: {
      onMixEnd: setHash // Call the setHash() method at the end of each operation

    }
  }); // Add an "onhashchange" handler to keep the mixer in sync as the user goes
  // back and forward through their history.
  // NB: This may or may not be the desired behavior for your project. If you don't
  // want MixItUp operations to count as individual history items, simply use
  // 'replaceState()' instead of 'pushState()' within the 'setHash()' function above.
  // In which case this handler would no longer be neccessary.

  window.onhashchange = function () {
    var selector = getSelectorFromHash();
    if (selector === mixer.getState().activeFilter.selector) return; // no change

    mixer.filter(selector);
  };
}
"use strict";

/*  ==========================================================================
    Scroll effects
    ========================================================================== */
var effectsInit = function effectsInit(effects, context) {
  if (!effects) {
    return;
  }

  effects.forEach(function (val) {
    var waypoints = new Waypoint({
      element: val,
      handler: function handler(direction) {
        if (direction === "down") {
          val.classList.add("effect--ready");
        }
      },
      context: context,
      offset: "92%"
    });
  });
}; // effectsInit();


setTimeout(function () {
  var effects = document.querySelectorAll(".effect");
  effectsInit(effects, window);
}, 200);