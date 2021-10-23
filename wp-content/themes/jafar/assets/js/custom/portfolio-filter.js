// Mixitup setup.
const portfolioList = document.querySelector('#portfoliolist');
if (typeof(portfolioList) != 'undefined' && portfolioList != null){
  mixitup('#portfoliolist', {
		animation: {
			effectsIn: 'fade translate(0px, 0)',
			effectsOut: 'fade translate(0px, 0)',
			duration: 600
		},
		classNames: {
			block: 'm05__filters',
			elementFilter: 'filter',
		},
		selectors: {
			target: '.m05__grid__item'
		}
	});
}

// Toogle filter tabs.
const filterTabs = document.querySelectorAll('.m05__filters > li > span');
filterTabs.forEach(filterTab => {
	filterTab.addEventListener('click', (e) => {
		const active = document.querySelector('.active');
		if (active) {
			active.classList.remove('active');
		}
		e.currentTarget.classList.add('active');
	});
});