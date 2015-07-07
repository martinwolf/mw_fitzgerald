<?php

/**
 * Fitzgerald functions and definitions
 */

if ( ! function_exists( 'fitzgerald_setup' ) ) :

/**
 * Set up theme defaults and register support for various WordPress features.
 */
function fitzgerald_setup() {
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Let WordPress manage the document title
     */
    add_theme_support( 'title-tag' );

    /**
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
}
endif;
add_action( 'after_setup_theme', 'fitzgerald_setup' );


/**
 * Enqueue scripts and styles.
 */
function fitzgerald_scripts() {
    /**
     * Load main stylesheet
     */
    wp_enqueue_style( 'fitzgerald-style', get_template_directory_uri() . '/dist/css/style.min.css' );
}
add_action( 'wp_enqueue_scripts', 'fitzgerald_scripts' );

?>
