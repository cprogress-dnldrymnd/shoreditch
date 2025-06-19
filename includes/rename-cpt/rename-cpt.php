<?php

function rename_custom_post_types() {
    global $wp_post_types;

    if (isset($wp_post_types['client'])) {
        $labels = &$wp_post_types['client']->labels;
        $labels->name = 'Clients';
        $labels->singular_name = 'Clients';
		$labels->menu_name = 'Clients'; // ← for admin menu
    }
	
	if (isset($wp_post_types['supplier'])) {
        $labels = &$wp_post_types['supplier']->labels;
        $labels->name = 'Suppliers';
        $labels->singular_name = 'Suppliers';
		$labels->menu_name = 'Suppliers'; // ← for admin menu
    }
	
	if (isset($wp_post_types['portfolio-item'])) {
        $labels = &$wp_post_types['portfolio-item']->labels;
        $labels->name = 'Event Types';
        $labels->singular_name = 'Event Types';
		$labels->menu_name = 'Event Types'; // ← for admin menu
    }
	
	if (isset($wp_post_types['couple-testimonial'])) {
        $labels = &$wp_post_types['couple-testimonial']->labels;
        $labels->name = 'Wedding Testimonials';
        $labels->singular_name = 'Wedding Testimonials';
		$labels->menu_name = 'Wedding Testimonials'; // ← for admin menu
    }

}
add_action('init', 'rename_custom_post_types', 100);

//removing the other post types 

add_action('init', function () {
    unregister_post_type('clients'); // Replace with actual CPT key
}, 100); // High priority ensures it's registered first

add_action('init', function () {
    unregister_post_type('team'); // Replace with actual CPT key
}, 100); // High priority ensures it's registered first

add_action('init', function () {
    unregister_post_type('testimonials'); // Replace with actual CPT key
}, 100); // High priority ensures it's registered first