// Site Navigation
const desktopNav = document.querySelector('.gm01');
const hamburgerIcon = document.querySelector('.hamburger');
const mobileNav = document.querySelector('.overlay');

hamburgerIcon.addEventListener('click', (e) => {
	e.currentTarget.classList.toggle('change');
	mobileNav.classList.toggle('open');
	desktopNav.classList.toggle('gm01--transparent');
});


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".gm01").classList.add("gm01--onscroll");
  } else {
    document.querySelector(".gm01").classList.remove("gm01--onscroll");
  }
}