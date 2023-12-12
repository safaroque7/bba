<?php
    function website_link_post_type(){
        register_post_type('website_link', array(
            	'label'     	=>  'ওয়েবসাইট লিংক',
                'public'		=>  true,
                'menu_position' =>  13,
				'supports'		=>  array('title', 'thumbnail')
        ));
		
		register_taxonomy('institutionLink', 'website_link', array(
			'labels'		=>	array(
				'name'		=> 'important Links Category Name',
				'query_var'	=>	true
			),
			'hierarchical'	=> true
		));
    }
        add_action('init', 'website_link_post_type');