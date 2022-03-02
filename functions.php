<?php

function load_stylesheets() { // nazwa moze byc dowolna
    // https://developer.wordpress.org/reference/functions/wp_register_style/
    wp_register_style('bootstrapik', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapik');

    wp_register_style('stylki', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('stylki');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/jquery.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'load_jquery');


function load_js() {
    wp_register_script('skrypcik', get_template_directory_uri().'/scripts.js', '', 1, true);
    wp_enqueue_script('skrypcik');
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('post-thumbnails');
add_theme_support('menus'); // dodaje opcje Menu w zakładce Wygląd
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_image_size('smallest', 300, 300, true); // true - automatycznie przycinanie do wybranego rozmiaru w momencie wgrywania na serwer
add_image_size('normal', 800, 800, true);