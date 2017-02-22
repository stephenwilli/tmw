<?php

/* CUSTOM POST TYPES
/===================================================== */

add_action( 'init', 'create_post_type' );

	function create_post_type() {

	register_post_type( 'portfolio',
			array (	'label' => 'Portfolio',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'has_archive' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','editor','thumbnail','page-attributes'),
				'taxonomies' => array('category'),
				'menu_icon' => 'dashicons-images-alt2',

				'labels' =>
					array (
	  					'name' => 'Portfolio', /* This is the Title of the Group */
	  					'singular_name' => 'Partner', /* This is the individual type */
						'menu_name' => 'Portfolio', /* The add new menu item */
						'add_new' => 'Add Portfolio', /* Add New Display Title */
						'add_new_item' => 'Add New Portfolio',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Portfolio', /* Edit Display Title */
						'new_item' => 'New Portfolio', /* New Display Title */
						'view_item' => 'View Portfolio', /* View Display Title */
						'search_items' => 'Search Portfolio', /* Search Custom Type Title */
						'not_found' => 'No Portfolio Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No Portfolio Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End portfolio

}