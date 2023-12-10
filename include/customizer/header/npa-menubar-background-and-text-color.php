<?php

$wp_customize->add_section('npa_menubar_bg_text_color', array(
  'title'   => __('Menubar Background and text color'),
  'panel'   => 'npa_header_panel'
));

// Menubar Background Color
$wp_customize->add_setting('npa_menubar_bg_text_color_setting', array(
  'default'   => '#006400',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menubar_bg_text_color_setting', array(
  'label'     => 'Menubar Background Color',
  'settings'  => 'npa_menubar_bg_text_color_setting',
  'section'   => 'npa_menubar_bg_text_color',
)));

// Menubar Text Color
$wp_customize->add_setting('npa_menubar_text_color_setting', array(
  'default'   => '#ffffff',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menubar_text_color_setting', array(
  'label'     => 'Menubar Text Color',
  'settings'  => 'npa_menubar_text_color_setting',
  'section'   => 'npa_menubar_bg_text_color',
)));

// Menubar Active Background Color
$wp_customize->add_setting('npa_menubar_active_background_setting', array(
  'default'   => '#FF0000',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menubar_active_background_setting', array(
  'label'     => 'Active menu\'s Background Color',
  'settings'  => 'npa_menubar_active_background_setting',
  'section'   => 'npa_menubar_bg_text_color',
)));

// Menubar Active Text Color
$wp_customize->add_setting('npa_menubar_active_text_setting', array(
  'default'   => '#ffffff',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menubar_active_text_setting', array(
  'label'     => 'Active Menu\'s Text Color',
  'settings'  => 'npa_menubar_active_text_setting',
  'section'   => 'npa_menubar_bg_text_color',
)));

// Menu Left border
$wp_customize->add_setting('npa_menu_left_border', array(
  'default'     => '#004D24',
  'capability'  => 'edit_theme_options',
  'transport'   => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menu_left_border', array(
  'label'     => 'Menu\'s left border',
  'settings'  => 'npa_menu_left_border',
  'section'   => 'npa_menubar_bg_text_color',
)));

// Menu Right border
$wp_customize->add_setting('npa_menu_right_border', array(
  'default'   => '#057A05',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menu_right_border', array(
  'label'     => 'Menu\'s Right border',
  'settings'  => 'npa_menu_right_border',
  'section'   => 'npa_menubar_bg_text_color',
)));