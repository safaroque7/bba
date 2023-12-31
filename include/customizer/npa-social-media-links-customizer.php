<?php
//Social Media Link
$wp_customize->add_section('npa_social_media', array(
  'title'         =>  __('Social Media Links', 'npa'),
  'description'   => __('If you want to update social media links, you can do it here.')
));

// Social Media Link 1
$npa_social_media_1 = 'npa_social_media_1';

$wp_customize->add_setting($npa_social_media_1, array(
  'default' => '#',
  'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_1, array(
  'label'         => __('Facebook', 'npa'),
  'description'   => __('Paste Facebook link here'),
  'settings'      => $npa_social_media_1,
  'section'       => 'npa_social_media',
  'type'          => 'text'
)));


// Social Media Link 2
$npa_social_media_2 = 'npa_social_media_2';

$wp_customize->add_setting($npa_social_media_2, array(
  'default' => '#',
  'transport' => 'postMessage',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_2, array(
  'label'         => __('Twitter', 'npa'),
  'description'   => __('Paste Twitter link here'),
  'settings'      => $npa_social_media_2,
  'section'       => 'npa_social_media',
  'type'          => 'url'
)));

// Social Media Link 3
$npa_social_media_3 = 'npa_social_media_3';

$wp_customize->add_setting($npa_social_media_3, array(
  'default' => '#',
  'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_3, array(
  'label'         => __('Youtube', 'npa'),
  'description'   => __('Paste Youtube link here'),
  'settings'      => $npa_social_media_3,
  'section'       => 'npa_social_media',
  'type'          => 'text'
)));