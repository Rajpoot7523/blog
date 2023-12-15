<?php
function followandrew_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme','followandrew_theme_support');
function followandrew_register_styles(){

    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/styles.css", array(), '1.0', 'all');
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('followandrew-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueu_scripts', 'followandrew_register_styles');
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

?>