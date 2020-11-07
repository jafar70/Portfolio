
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

