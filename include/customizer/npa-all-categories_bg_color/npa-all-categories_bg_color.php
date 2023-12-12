<?php

add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{
  //Get an array with the category list
  $rjs_categories_full_list = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html__($rjs_single_cat->name, 'npa');
  }

  $wp_customize->add_section('npa_acd', array(
    'title' => __('All Category names, Background and Color', 'npa'),
    'priority'  => 10,
  ));

  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/npa-cat-serial_no.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/1_no_only_category.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/2_no_only_category.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/3_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/4_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/5_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/6_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/7_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/8_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/9_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/10_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/11_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/12_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/13_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/14_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/15_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/photo-gallery.php';



  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/16_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/17_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/18_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/19_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/20_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/21_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/22_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/23_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/24_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/25_no_category_bg_color.php';
  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/26_no_category_bg_color.php';

}