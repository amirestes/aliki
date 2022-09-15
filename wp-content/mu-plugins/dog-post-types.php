<?php

function create_custom_post_types() {
    //Dog Post Type
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
			// 'has_archive'=> true,
			// 'rewrite'=>array('slug'=>'dogs'),
            'menu-icon' => 'dashicons-pets'
		),
		
	);

    //Litter Post Type
    register_post_type('litters',
		array(
			'labels'=>array(
				'name'=>__('Litters'),
				'singular_name'=>__('Litter'),
				'add_new_item' => 'Add New Litter',
				'edit_item' => 'Edit Litter',
				'all_items' => 'All Litters'
			),
			'public'=> true,
			'has_archive'=> true,
			'rewrite'=>array('slug'=>'litters')
		),
		
	);
}

add_action('init','create_custom_post_types');