<?php

function mokuslak_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}

add_action('after_setup_theme','mokuslak_theme_support');

function mokuslak_register_styles() {

    $version = wp_get_theme()->get( 'Version'); 
    wp_enqueue_style('mokuslak-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css' , array(), '4.3.0', 'all');
    wp_enqueue_style('mokuslak-style', get_template_directory_uri() . '/style.css' , array('mokuslak-bootstrap'), $version, 'all');
    wp_enqueue_style('mokuslak-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif|Rufina:700' , array(), '1.0', 'all');    
}

add_action( 'wp_enqueue_scripts', 'mokuslak_register_styles');

function mokuslak_register_scripts() {

  $version = wp_get_theme()->get( 'Version'); 
  wp_enqueue_script('mokuslak-jquery','https://code.jquery.com/jquery-3.3.1.js', array(), null, true);
  wp_enqueue_script('mokuslak-flip','https://cdn.rawgit.com/nnattawat/flip/master/dis t/jquery.flip.min.js', array(), null, true);
  wp_enqueue_script('mokuslak-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js',array(), null, true);
  wp_enqueue_script('mokuslak-recaptcha','https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key',array(), null , true);
}

add_action( 'wp_enqueue_scripts', 'mokuslak_register_scripts');

?>