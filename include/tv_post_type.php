<?php
    function tv_post_type(){
        register_post_type('tv', array(
            'label'     =>  'টিভি', array(
                'name'                  =>  __('tv'),
                'singular_name'         =>  __('tv'),
                'add_new'               =>  __('add new'),
                'add_new_item'          =>  __('add New tv'),
                'edit_item'             =>  __('Edit tv'),
                'view_item'             =>  __('view tv'),
                'new_item'              =>  __('new tv'),
                'not_found'             =>  __('sorry, we couln\'t find anything which you are looking for')
            ),
            'public'                =>  true,
            'publicity_queryable'   =>  true,
            'exclude_from_search'   =>  false,
            'has_archive'           =>  true,
            'hierarchical'          =>  false,
            'capability_type'       =>  'page',
            'menu_position'         =>  12,
            'rewrite'               =>  array('slug'=>'tv'),
            'supports'              =>  array('title')
        ));
    }
    add_action('init', 'tv_post_type');