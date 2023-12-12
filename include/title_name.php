<?php
    function wpb_change_title_text( $title ){
         $screen = get_current_screen();
         if  ( 'post' == $screen->post_type ) {
              $title = 'type heading... image size : width: 767px; height: 404px';
         }
        if  ( 'special' == $screen->post_type ) {
              $title = 'বিজ্ঞাপনের ওয়েবসাইট বা ফেসবুক পেইজের লিংক দিন (যদি থাকে)';
         }
         if  ( 'website_link' == $screen->post_type ) {
          $title = 'logo image size width: 220px; height: 60px';
     }
         return $title;
    }
    add_filter( 'enter_title_here', 'wpb_change_title_text' );