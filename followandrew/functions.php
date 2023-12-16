<?php
function followandrew_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnail');
    }
add_action('after_setup_theme','followandrew_theme_support');

function followandrew_menu(){
   register_nav_menus(
    array(
        'primary-menu' => 'Desktop Menu',
        'footer-menu' => 'Footer Menu'
    )
   )
}

add_action('init',"register_menu");

function followandrew_register_styles(){
    $version = wp_get_theme()->get('Vrsion');
    wp_enqueue_style('followandrew-style', get_template_directory_uri('followandrew-bootstrap'),$version , 'all');
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueu_scripts', 'followandrew_register_styles');
function followndrew_register_scripts(){
    wp_enqueu_script('followandrew-jquery','https://code.jquery.co/jquery-3.4.1.slim.min.js',array(), '3.4.1',true);
    wp_enqueu_script('followandrew-popper','https://cdn.jsdeliver.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(), '1.16.0',true);
}
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

?>