"use strict";

var lazyLoadInstance = new LazyLoad({// Your custom settings go here
});
"use strict";

$(window).on('load', function () {
  $(".gm03").fadeOut("slow");
});
"use strict";

$(document).ready(function () {
  $('#toggle').click(function () {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
    $('.gm01').toggleClass('gm01--transparent');
  });
});

function myFunction(x) {
  x.classList.toggle("change");
}
"use strict";

$(function () {
  var filterList = {
    init: function init() {
      $('#portfoliolist').mixItUp({
        selectors: {
          target: '.m05__grid__item',
          filter: '.filter'
        },
        load: {}
      });
    }
  };
  filterList.init();
});
$(document).ready(function () {
  $("#filters > li:nth-child(1) > span").addClass('active');
});
"use strict";

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top - 50
  }, 500);
});