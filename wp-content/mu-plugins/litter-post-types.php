<?php

function litter_post_types() {
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

add_action('init','litter_post_types');