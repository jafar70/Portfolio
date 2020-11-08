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
// $(document).ready(function() {
// 	var tabWrapper = $('#tab-block'),
// 		tabMnu = tabWrapper.find('.tab-mnu  li'),
// 		tabContent = tabWrapper.find('.tab-cont > .tab-pane');
// 	tabContent.not(':first-child').hide();
// 	tabMnu.each(function(i) {
// 		$(this).attr('data-tab', 'tab' + i);
// 	});
// 	tabContent.each(function(i) {
// 		$(this).attr('data-tab', 'tab' + i);
// 	});
// 	tabMnu.click(function() {
// 		var tabData = $(this).data('tab');
// 		tabWrapper.find(tabContent).hide();
// 		tabWrapper.find(tabContent).filter('[data-tab=' + tabData + ']').fadeIn(1000);
// 	});
// 	$('.tab-mnu > li').click(function() {
// 		var before = $('.tab-mnu li.active');
// 		before.removeClass('active');
// 		$(this).addClass('active');
// 	});
// });
// var InstagramToken = 'IGQVJXZAmhwZATVJMy1ZAOTVDSEl0bUtaVTI5SGlOZAUxGbmNMU3c5N00ydzd1SWI2X3BsWHdMOEFRbENHRlF3Wk9uQ3FFNWZAIYldscHRhWXdrMzBZAaExwbXFMTklZATndPN1l3eFEyUDBoTUl5V25MWGlfXwZDZD';
//     var galleryFeed = new Instafeed({
//       accessToken: InstagramToken,
//       resolution: "standard_resolution",
//       limit: 6,
//       template: '<div class="grid__item desk-one-third lap-one-half palm-one-whole mb-20"> <div class="content insta-img" style="background:url({{image}})"> <a href="{{link}}"></a> </div></div>\x3c!-- --\x3e',
//       target: "instafeed-gallery-feed",
//     });
//     galleryFeed.run();
//     var loadMoreIcon = document.getElementById("load-more-icon");
"use strict";
"use strict";

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top - 50
  }, 500);
});