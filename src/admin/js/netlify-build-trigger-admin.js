(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

// <li id="wp-admin-bar-updates">
// 	<a class="ab-item" href="http://localhost:8000/wp-admin/update-core.php">
// 		<span class="ab-icon" aria-hidden="true"></span>
// 		<span class="ab-label" aria-hidden="true">1</span>
// 		<span class="screen-reader-text updates-available-text">1 update available</span>
// 	</a>
// </li>

	$(function() {
		const buildBtn = document.createElement("li")
		buildBtn.id = "netlify-build-btn"
		buildBtn.innerHTML = `<a class="ab-item" href="#">
				<span class="ab-label" aria-hidden="true">Build Netlify Site</span>
			</a>`
		const toolbar = document.getElementById("wp-admin-bar-root-default")
		toolbar.appendChild(buildBtn)
	});

})( jQuery );
