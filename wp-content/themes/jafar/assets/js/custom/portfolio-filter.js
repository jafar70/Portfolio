// Mixitup setup.
const portfolioList = document.querySelector('#portfoliolist');
if (typeof (portfolioList) != 'undefined' && portfolioList != null) {
	// As we have no server-side application or routes, we will use
	// a URL "hash" for this demo, but we chould just as easily use
	// a URL route segment.

	// As we will use the target selector in several parts of the demo,
	// we will declare it as a variable here.

	const targetSelector = '.m05__grid__item';

	/**
	 * Reads a hash from the URL (if present), and converts it into a class
	 * selector string. E.g "#green" -> ".green". Otherwise, defaults
	 * to the targetSelector, equivalent to "all"
	 *
	 * @return {string}
	 */

	function getSelectorFromHash() {
		const hash = window.location.hash.replace(/^#/g, '');

		const selector = hash ? '.' + hash : targetSelector;

		return selector;
	}

	/**
	 * Updates the URL whenever the current filter changes.
	 *
	 * @param   {mixitup.State} state
	 * @return  {void}
	 */

	function setHash(state) {
		const selector = state.activeFilter.selector;
		const newHash = '#' + selector.replace(/^\./g, '');

		if (selector === targetSelector && window.location.hash) {
			// Equivalent to filter "all", remove the hash

			history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
		} else if (newHash !== window.location.hash && selector !== targetSelector) {
			// Change the hash

			history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
		}
	}

	// Instantiate and configure the mixer

	const mixer = mixitup('.m05__list', {
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
			elementFilter: 'filter',
		},
		load: {
			filter: getSelectorFromHash() // Ensure that the mixer's initial filter matches the URL on startup
		},
		callbacks: {
			onMixEnd: setHash // Call the setHash() method at the end of each operation
		}
	});

	// Add an "onhashchange" handler to keep the mixer in sync as the user goes
	// back and forward through their history.

	// NB: This may or may not be the desired behavior for your project. If you don't
	// want MixItUp operations to count as individual history items, simply use
	// 'replaceState()' instead of 'pushState()' within the 'setHash()' function above.
	// In which case this handler would no longer be neccessary.

	window.onhashchange = function () {
		const selector = getSelectorFromHash();

		if (selector === mixer.getState().activeFilter.selector) return; // no change

		mixer.filter(selector);
	};
}
