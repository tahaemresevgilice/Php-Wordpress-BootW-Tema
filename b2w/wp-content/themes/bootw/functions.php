<?php
function bootw_scripts() {
    wp_enqueue_style( 'fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', false, '1.1', 'all');
    wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() , array(),rand(111,9999),'all');
    wp_enqueue_style( 'lightbox-style', get_template_directory_uri().'/css/lightbox.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',array('jquery'),'2.11.8',true);
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js',array('jquery'),'5.3.3',true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri().'/js/lightbox-plus-jquery.js' ,array('jquery'),'1.0.0',true);
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/bootW.js' ,array('jquery'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','bootw_scripts');

function remove_admin_bar(){
    show_admin_bar(false);
}
add_action('after_setup_theme','remove_admin_bar');

require_once('class-wp-bootstrap-navwalker.php');

function register_my_menu(){
    register_nav_menu('primary',__('Primary Menu'));
}
add_action('init','register_my_menu');
?>
