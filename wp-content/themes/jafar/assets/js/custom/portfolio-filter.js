$(function() {
	var filterList = {
		init: function() {
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
// $(document).ready(function() {
// 	$("#filters > li:nth-child(1) > span").addClass('active');
// });