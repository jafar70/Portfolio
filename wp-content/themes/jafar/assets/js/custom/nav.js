// Site Navigation
const desktopNav = document.querySelector('.gm01');
const hamburgerIcon = document.querySelector('.hamburger');
const mobileNav = document.querySelector('.overlay');

hamburgerIcon.addEventListener('click', (e) => {
	e.currentTarget.classList.toggle('change');
	mobileNav.classList.toggle('open');
	desktopNav.classList.toggle('gm01--transparent');
});

