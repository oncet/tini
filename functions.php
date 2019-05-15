<?php

/**
 * Check if the Timber plugin is loaded.
 */
if(!class_exists('Timber')) {
    add_action('admin_notices', function() {
        echo '<div class="error"><p><strong>Tini</strong> requires the <a href="https://github.com/timber/timber">Timber</a> plugin.</p></div>';
    });

    return;
}

/**
 * Set the templates directory.
 * @var array
 */
Timber::$dirname = ['views'];

/**
 * Load style.css and jQuery.
 */
function tini_enqueue_scripts_and_styles() {
    wp_enqueue_style('tini-style', get_stylesheet_uri()); 
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'tini_enqueue_scripts_and_styles');

/**
 * Register navigation menu.
 */
function tini_register_menus() {
  register_nav_menu('main-menu',__( 'Main menu' ));
}

add_action('init', 'tini_register_menus');

/**
 * Add post thumbnails support.
 */
add_theme_support('post-thumbnails');