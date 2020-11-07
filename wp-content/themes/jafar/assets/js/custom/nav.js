$(document).ready(function() {
	$('#toggle').click(function() {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
		$('.gm01').toggleClass('gm01--transparent');
	});
});

function myFunction(x) {
	x.classList.toggle("change");
}