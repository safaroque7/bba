<?php
    function magazineViewPostType(){
        register_post_type('e_paper', array(
            'label'     =>  'ই-পেপার', array(
                'name'                  =>  __('e_paper'),
                'singular_name'         =>  __('e_paper'),
                'add_new'               =>  __('add new'),
                'add_new_item'          =>  __('add New e_paper'),
                'edit_item'             =>  __('Edit e_paper'),
                'view_item'             =>  __('view e_paper'),
                'new_item'              =>  __('new e_paper'),
                'not_found'             =>  __('sorry, we couln\'t find anything which you are looking for')
            ),
            'public'                =>  true,
            'publicity_queryable'   =>  true,
            'exclude_from_search'   =>  false,
            'has_archive'           =>  true,
            'hierarchical'          =>  false,
            'capability_type'       =>  'page',
            'menu_position'         =>  10,
            'rewrite'               =>  array('slug'=>'e_paper'),
            'supports'              =>  array('title', 'editor', 'custom-fiels', 'thumbnail')
        ));
    }
    add_action('init', 'magazineViewPostType');