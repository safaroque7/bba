<?php
    function photogellary_post_type(){
        register_post_type('photogellary', array(
            'label'     =>  'ফটোগ্যালারি', array(
                'name'                  =>  __('photogellary'),
                'singular_name'         =>  __('photogellary'),
                'add_new'               =>  __('add new'),
                'add_new_item'          =>  __('add New photogellary'),
                'edit_item'             =>  __('Edit photogellary'),
                'view_item'             =>  __('view photogellary'),
                'new_item'              =>  __('new photogellary'),
                'not_found'             =>  __('sorry, we couln\'t find anything which you are looking for')
            ),
            'public'                =>  true,
            'publicity_queryable'   =>  true,
            'exclude_from_search'   =>  false,
            'has_archive'           =>  true,
            'hierarchical'          =>  false,
            'capability_type'       =>  'page',
            'menu_position'         =>  8,
            'rewrite'               =>  array('slug'=>'photogellary'),
            'supports'              =>  array('title', 'thumbnail')
        ));
    }
    add_action('init', 'photogellary_post_type');