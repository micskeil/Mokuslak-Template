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
    
    require get_template_directory() . '/bootstrap-navwalker.php';
    
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
}

add_action( 'wp_enqueue_scripts', 'mokuslak_register_scripts');

// HEADER MENU REG AND DESIGN CHANGE ADD CLASS TO LIs

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );


  function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
  


 function mokuslak_widgets_init() {
     register_sidebar( array(
         'name'          => __( 'primary', 'mokuslak' ),
         'id'            => 'sidebar-1',
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget'  => '</aside>',
         'before_title'  => '<h5 class="widget-title font-weight-bold pb-3">',
         'after_title'   => '</h5>',
     ) );
 }

 add_action( 'widgets_init', 'mokuslak_widgets_init' );

?>