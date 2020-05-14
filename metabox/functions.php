<?php 

function custom_metabox($metabox){
	
	
	$metabox [] = array(
		
		'id' => 'metabox',
		'title' => 'Your contact info start form here',
		'object_types' => array('post'),
		'fields' => array(
			array(
				'name' => 'your full name',
				'type' => 'text',
				'id' => 'info',
			)
		)
	);
	
	
	return $metabox;
}
add_filter('cmb2_meta_boxes','custom_metabox');