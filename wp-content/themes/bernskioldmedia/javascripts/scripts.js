jQuery(document).ready(function($) {

	/**
	 * Header Search Area Toggle
	 */
	jQuery('.header-search-box').click(function() {
		jQuery('.header-search-area').slideToggle();
	});

	/**
	 * Add Grid Mixitup for Case Studies
	 */
	jQuery('.case-studies-grid').mixitup({
		targetSelector: '.case-study-list-item',
	});

	// Prevent click action on filter link
	jQuery('.case-study-filter a').click(function(e) {
		e.preventDefault();
	});

	/**
	 * Responsive Menu Toggle
	 */
	jQuery('.responsive-navigation-toggle').click(function(e) {
		e.preventDefault();

		jQuery('.responsive-menu').slideToggle();
	});

});