/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
document.addEventListener('DOMContentLoaded', function() {
	( function() {
	
		const siteNavigation = document.getElementById( 'site-navigation' );
		const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];
		const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];
		const body = document.body;

		// return early if the navigation doesn't exist
		if ( ! siteNavigation ) {
			return;
		}
	
		// return early if the button doesn't exist
		if ( 'undefined' === typeof button ) {
			return;
		}

		// hide menu toggle button if menu is empty and return early.
		if ( 'undefined' === typeof menu ) {
			button.style.display = 'none';
			return;
		}
		
		// if nav-menu class isn't present, add it
		if ( ! menu.classList.contains( 'nav-menu' ) ) {
			menu.classList.add( 'nav-menu' );
		}
	
		// empty inner text of button to replace with hamburger
		button.innerText = "";

		// toggle the .toggled class and the aria-expanded value each time the button is clicked
		button.addEventListener( 'click', function() {
	
			siteNavigation.classList.toggle( 'toggled' );
			// toggle the .fixed class onto body so it won't scroll behind the opened mobile nav menu
			body.classList.toggle('fixed');
	
			if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
				button.setAttribute( 'aria-expanded', 'false' );
			} else {
				button.setAttribute( 'aria-expanded', 'true' );
			}
		} );
	
		// get all the link elements within the menu
		const links = menu.getElementsByTagName( 'a' );

		// toggle focus each time a menu link is focused or blurred.
		for ( const link of links ) {
			link.addEventListener( 'focus', toggleFocus, true );
			link.addEventListener( 'blur', toggleFocus, true );
		}
	
		// toggle focus each time a menu link with children receive a touch event
		for ( const link of linksWithChildren ) {
			link.addEventListener( 'touchstart', toggleFocus, false );
		}
	
		/**
		 * Sets or removes .focus class on an element.
		 */
		function toggleFocus(event) {
			if ( event.type === 'focus' || event.type === 'blur' ) {
				let self = this;
				// Move up through the ancestors of the current link until we hit .nav-menu.
				while ( ! self.classList.contains( 'nav-menu' ) ) {
					// On li elements toggle the class .focus.
					if ( 'li' === self.tagName.toLowerCase() ) {
						self.classList.toggle( 'focus' );
					}
					self = self.parentNode;
				}
			}
	
			if ( event.type === 'touchstart' ) {
				const menuItem = this.parentNode;
				event.preventDefault();
				for ( const link of menuItem.parentNode.children ) {
					if ( menuItem !== link ) {
						link.classList.remove( 'focus' );
					}
				}
				menuItem.classList.toggle( 'focus' );
			}
		}
	}() );
	
})
