<?php 

function mokuslak_register_styles() {
    wp_enqueue_style('mokuslak-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css' , array(), '4.3.0', 'all');
    wp_enqueue_style('mokuslak-style', get_template_directory_uri() . '/style.css' , array('mokuslak-bootstrap'), '1.0', 'all');
    wp_enqueue_style('mokuslak-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif|Rufina:700' , array(), '1.0', 'all');
    
    wp_enqueue_script('mokuslak-jquery','https://code.jquery.com/jquery-3.3.1.js', array(), $ver = false, $in_footer = true);
    wp_enqueue_script('mokuslak-flip','https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js', array(), '1.0', false);
    wp_enqueue_script('mokuslak-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js', array(), '1.0', 'all');
    wp_enqueue_script('mokuslak-recaptcha','https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key', array(), '1.0', 'all');
    

}

add_action( 'wp_enqueue_scripts', 'mokuslak_register_styles');

?>