<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'wnd_npa';

//
// Create options
//
CSF::createOptions($prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'npa-theme-option',
  'framework_title' => 'webnewsdesign.com Theme Options'
));

//
// Create a section
//
CSF::createSection($prefix, array(
  'title'  => 'Category list',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    // category no switcher
    array(
      'id'      => 'cat_no_switchere', //Changable
      'type'    => 'switcher',
      'title'   => __('Category No. Show'), //Changable
    ),
    
    // epaper_off
    array(
      'id'      => 'epaper_off', //Changable
      'type'    => 'switcher',
      'title'   => __('ePaper ON/OFF'), //Changable
    ),

    // cat_no_1 //Changable
    array(
      'id'      => 'cat_no_1', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 1', //Changable
      'options' => 'categories'
    ),
    // cat_no_2 //Changable
    array(
      'id'      => 'cat_no_2', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 2', //Changable
      'options' => 'categories'
    ),
    // cat_no_3 //Changable
    array(
      'id'      => 'cat_no_3', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 3', //Changable
      'options' => 'categories'
    ),
    // cat_no_3 //Changable
    array(
      'id'      => 'cat_no_3_bg', //Changable
      'type'    => 'color',
      'title'   => 'Choose background color',
    ),
    // cat_no_4 //Changable
    array(
      'id'      => 'cat_no_4', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 4', //Changable
      'options' => 'categories'
    ),
    // cat_no_5 //Changable
    array(
      'id'      => 'cat_no_5', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 5', //Changable
      'options' => 'categories'
    ),
    // cat_no_6 //Changable
    array(
      'id'      => 'cat_no_6', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 6', //Changable
      'options' => 'categories'
    ),
    // cat_no_7 //Changable
    array(
      'id'      => 'cat_no_7', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 7', //Changable
      'options' => 'categories'
    ),
    // cat_no_8 //Changable
    array(
      'id'      => 'cat_no_8', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 8', //Changable
      'options' => 'categories'
    ),
    // cat_no_9 //Changable
    array(
      'id'      => 'cat_no_9', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 9', //Changable
      'options' => 'categories'
    ),
    // cat_no_10 //Changable
    array(
      'id'      => 'cat_no_10', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 10', //Changable
      'options' => 'categories'
    ),
    // cat_no_11 //Changable
    array(
      'id'      => 'cat_no_11', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 11', //Changable
      'options' => 'categories'
    ),
    // cat_no_12 //Changable
    array(
      'id'      => 'cat_no_12', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 12', //Changable
      'options' => 'categories'
    ),
    // cat_no_13 //Changable
    array(
      'id'      => 'cat_no_13', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 13', //Changable
      'options' => 'categories'
    ),
    // cat_no_14 //Changable
    array(
      'id'      => 'cat_no_14', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 14', //Changable
      'options' => 'categories'
    ),
    // cat_no_15 //Changable
    array(
      'id'      => 'cat_no_15', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 15', //Changable
      'options' => 'categories'
    ),
    // cat_no_16 //Changable
    array(
      'id'      => 'cat_no_16', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 16', //Changable
      'options' => 'categories'
    ),
    // cat_no_17 //Changable
    array(
      'id'      => 'cat_no_17', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 17', //Changable
      'options' => 'categories'
    ),
    // cat_no_18 //Changable
    array(
      'id'      => 'cat_no_18', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 18', //Changable
      'options' => 'categories'
    ),
    // cat_no_19 //Changable
    array(
      'id'      => 'cat_no_19', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 19', //Changable
      'options' => 'categories'
    ),
    // cat_no_20 //Changable
    array(
      'id'      => 'cat_no_20', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 20', //Changable
      'options' => 'categories'
    ),
    // cat_no_21 //Changable
    array(
      'id'      => 'cat_no_21', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 21', //Changable
      'options' => 'categories'
    ),
    // cat_no_22 //Changable
    array(
      'id'      => 'cat_no_22', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 22', //Changable
      'options' => 'categories'
    ),
    // cat_no_23 //Changable
    array(
      'id'      => 'cat_no_23', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 23', //Changable
      'options' => 'categories'
    ),
    // cat_no_24 //Changable
    array(
      'id'      => 'cat_no_24', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 24', //Changable
      'options' => 'categories'
    ),
    // cat_no_25 //Changable
    array(
      'id'      => 'cat_no_25', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 25', //Changable
      'options' => 'categories'
    ),
    // cat_no_26 //Changable
    array(
      'id'      => 'cat_no_26', //Changable
      'type'    => 'select',
      'title'   => 'Select Category No 26', //Changable
      'options' => 'categories'
    )

  )
));


//
// Create a section
//
CSF::createSection($prefix, array(
  'title'  => 'Another Title',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    // cat_no_1
    array(
      'id'      => 'ad_no_1',
      'type'    => 'text',
      'title'   => 'Another title'
    ),

  )
));
