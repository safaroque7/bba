<?php

function facebook_widget()
{
    register_sidebar(array(
        'name'          =>  'np_archieve',
        'id'            =>  'np_archieve_id',
        'description'   =>  'archieve for news',
        'before_title'   => '<h2 class="bg-calender text-white py-1 px-2 mb-2">',
        'after_title'    => "</h2>\n",
        'before'        =>  '<div class="faceboo_code">',
        'after'         =>  '</div>'
    ));
}
add_action('widgets_init', 'facebook_widget');
