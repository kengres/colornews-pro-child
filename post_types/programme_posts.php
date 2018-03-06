<?php
	function color_child_programme_posts() {
		$labels = array(
			'name' => 'Programmes',
			'singular_name' => 'Programme',
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item'  => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_items' => 'Search Programmes',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		);

		$args = array(
			'labels' => $labels, 
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array (
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				

			),
			'menu_position' => 6,
			'exclude_from_search' => false,
		);


		register_post_type( 'programmes', $args );
	}

	// Hook
	add_action( 'init', 'color_child_programme_posts');