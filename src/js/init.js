var HeadroomOptions = {
	tolerance: {
		down: 0,
		up: 0
	},
	offset: 530,
	classes: {
		initial: "fixed",
		pinned: "slide-down",
		unpinned: "slide-up",
		top: "top",
		notTop: "not-top",
		notBottom: "not-bottom"
	}
};

// grab an element
var HeadroomElement = document.getElementsByClassName("site-header")[0];
// construct an instance of Headroom, passing the element
var headroom = new Headroom(HeadroomElement, HeadroomOptions);
// initialise
headroom.init();


// Balance text
balanceText();

//Touch navigation
jQuery(document).ready(function($){

	
	$('.wrapper').on('dbltap', function(){
		
			jQuery(location).attr('href', gestures.destination );
	
		}
	).on('swipeleft', function() {

			var post_nav = jQuery('link[rel="next"]');
		
			if ( post_nav ) {
				jQuery(location).attr('href', post_nav.attr('href'));
			}		
	
		}	
	).on('swiperight', function() {

			var post_nav = jQuery('link[rel="prev"]');
		
			if ( post_nav ) {
				jQuery(location).attr('href', post_nav.attr('href'));
			}		
	
		}
	);

});