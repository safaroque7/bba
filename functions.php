<?php

/**
 * My Theme Functions
 */

//Theme Title
add_theme_support('title-tag');

//for css and js
include_once('include/newsportal_css_js.php');

//theme options
include_once('include/npa-theme-option/codestar-framework.php');

// coderstar framework
include_once('include/npa-theme-option/samples/npa-theme-options.php');

// customizer
include_once('include/customizer/npa-customizer.php');

//for counter viewer
include_once('include/viewer_counter.php');

//for tv post type
//include_once('include/tv_post_type.php');

//for class-tgm-plugin-activation
include_once('include/class-tgm-plugin-activation.php');

//for tgm
include_once('include/tgm.php');

//time ago 
include_once('include/time_ago.php');

//short_title
include_once('include/short_title.php');

//for excerpt
include_once('include/excerpt.php');

//for images size
include_once('include/default.php');

//for bangla
include_once('include/bangla_date.php');

//for title name
include_once('include/title_name.php');

//for photogellary
//include_once('include/photogellary.php');

//for calender widget
include_once('include/calendar_widget.php');

//for e_paper_post_type
include_once('include/e_paper_post_type.php');

//for menu
include_once('include/menu.php');

//for content_below_tag
include_once('include/content_below_tag.php');

//for special advertisement
//include_once('include/special_advertisement.php');

//for facebook widget
include_once('include/facebook_widget.php');

//home page unlimited advertisement spaces
include_once('include/widget/widget-right-sidebar.php');

// all category names, background and color
include_once('include/customizer/npa-all-categories_bg_color/npa-all-categories_bg_color.php');



function custom_admin_js()
{
  $url = get_bloginfo('template_directory') . '/js/wp-admin.js';
  echo '"<script type="text/javascript" src="' . $url . '"></script>"';
}
add_action('admin_footer', 'custom_admin_js');

require_once('class-wp-bootstrap-navwalker.php');