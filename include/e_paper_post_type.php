<?php
    function magazine_view_post_type(){
        register_post_type('e_paper', array(
            'label'     =>  'ই-পেপার', array(
                'name'                  =>  __('ePaper'),
                'singular_name'         =>  __('ePaper'),
                'add_new'               =>  __('add new'),
                'add_new_item'          =>  __('add New ePaper'),
                'edit_item'             =>  __('Edit ePaper'),
                'view_item'             =>  __('view ePaper'),
                'new_item'              =>  __('new ePaper'),
                'not_found'             =>  __('sorry, we couln\'t find anything which you are looking for')
            ),
            'public'                =>  true,
            'publicity_queryable'   =>  true,
            'exclude_from_search'   =>  false,
            'has_archive'           =>  true,
            'hierarchical'          =>  false,
            'capability_type'       =>  'page',
            'menu_position'         =>  10,
            'rewrite'               =>  array('slug'=>'ePaper'),
            // 'supports'              =>  array('title', 'custom-fiels', 'thumbnail')
            'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
    add_action('init', 'magazine_view_post_type');