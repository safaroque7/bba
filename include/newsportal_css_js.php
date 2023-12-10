<?php
function npa_css_js()
{
    wp_register_style('npm-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0 ', 'all');
    wp_register_style('npa-animate', get_template_directory_uri() . '/css/animate.css', array(), 'null', 'screen');
    wp_register_style('npa-bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_register_style('npa-responsive', get_template_directory_uri() . '/responsive.css', array(), 'null', 'all');

    wp_enqueue_style('npm-font-awesome');
    wp_enqueue_style('npa-animate');
    wp_enqueue_style('npa-bootstrapmin');
    wp_enqueue_style('npa-stylecss', get_stylesheet_uri());
    wp_enqueue_style('npa-responsive');

    wp_enqueue_script('npa-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', 'false');
    wp_enqueue_script('npa-wow-js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.3.0', true);
    wp_enqueue_script('npa-jquery-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.1.2', 'false');
    wp_enqueue_script('npa-my-js', get_template_directory_uri() . '/js/my.js', array('jquery'), '1.0.0', 'false');
}

add_action('wp_enqueue_scripts', 'npa_css_js');