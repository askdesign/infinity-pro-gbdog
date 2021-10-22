<?php
// conditional code included
// Add services navigation menu - only on services page - ASK Design
// Mike Hemberger method
function register_services_genesis_menus() {
	register_nav_menu( 'services-menu' ,
	__( 'Services Navigation Menu' ));
	}
	add_action( 'init', 'register_services_genesis_menus' );
	 
	add_action( 'genesis_before_content', 'ask_add_services_nav' );
	function ask_add_services_nav() {
		if ( ! is_page( 9 ) ) {
			return;
		}
		// My code
	
		echo'<div class="nav-services">';
		wp_nav_menu( array( 
		'theme_location' => 'services-menu', 
		'container_class' => 'genesis-nav-menu' ) );
		echo'</div>';
		
	}

// end of third nav menu custom code - ASK Design

// Sallie Goetsch method - doesn't work
if (is_page('9') {
    add_action( 'genesis_before_content', 'add_services_nav' );
   function add_services_nav() {
     //function code
   }
 }

// Mike Hemberger method - used above - works!
add_action( 'genesis_before_content', 'prefix_add_services_nav' );
function prefix_add_services_nav() {
	if ( ! is_page( 9 ) ) {
		return;
	}
	// My code
}