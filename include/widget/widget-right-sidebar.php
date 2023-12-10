<?php
    function rightSidebar()
    {
        //right-sidebar
        register_sidebar(array(
            'name'          =>  'Right Sidebar',
            'id'            =>  'right-sidebar',
            'description'   =>  'Home page right side all ads',
            'before_widget' =>  '<div class="overflow-hidden">',
            'after_widget'  =>  '</div>'
        ));
    }
    add_action('widgets_init', 'rightSidebar');