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
     * Remove p tags from img, noscript, video and iframes elements
     */
    function filter_ptags_on_images($content){
        return preg_replace(
            '/<p>\s*(<(?:img|noscript|video|iframe).*>)\s*<\/p>/iU',
            '$1',
            $content
        );
    }
    add_filter('the_content', 'filter_ptags_on_images');

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
     * Switch default core markup for search form, comment form, comments,
     * gallery and captions to output valid HTML5
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /**
     * Add Content Width Variable
     */
    if ( !isset( $content_width ) ) {
        $content_width = 580;
    }

    /**
     * Add Image Sizes
     */
    add_image_size( 'fitzgerald_content-img', 580);
    add_image_size( 'fitzgerald_featured-img', 640);
    add_image_size( 'fitzgerald_featured-img_2x', 1280);
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
