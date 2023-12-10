<?php
    function npa_calendar(){
        register_sidebar(array(
            'name'          =>  'calendar widget',
            'id'            =>  'calender',
            'description'   =>  'ক্যালেন্ডার ডিজাইন',
            'before_widget' =>  '<div class="border border-outline mb-md-4 mb-3">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<p class="bg-calender text-white py-1 px-2 mb-2">',
            'after_title'   =>  '</p>'
        ));
    }
    add_action('widgets_init', 'npa_calendar');