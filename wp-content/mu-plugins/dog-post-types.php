<?php

function create_custom_post_types() {
	register_post_type('dogs',
		array(
			'labels'=>array(
				'name'=>__('Dogs'),
				'singular_name'=>__('Dog'),
				'add_new_item' => 'Add New Dog',
				'edit_item' => 'Edit Dog',
				'all_items' => 'All Dogs'
			),
			'public'=> true,
			'has_archive'=> true,
			'rewrite'=>array('slug'=>'dogs')
		),
		
	);
}

add_action('init','create_custom_post_types');