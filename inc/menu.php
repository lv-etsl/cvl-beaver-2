<?php
// need some menu

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'header-menu' => 'menu en tete',
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


 ?>
