<?php

/**
 * Check if the Timber plugin is loaded.
 */
if(!class_exists('Timber')) {
    add_action( 'admin_notices', function() {
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
 * Load the style.css file.
 */
function tini_enqueue_style() {
    wp_enqueue_style( 'tini-style', get_stylesheet_uri() ); 
}

add_action( 'wp_enqueue_scripts', 'tini_enqueue_style' );