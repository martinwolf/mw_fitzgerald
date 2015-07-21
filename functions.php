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

    /**
     * Add Image Sizes to Add Media Dialog
     */
    add_filter( 'image_size_names_choose', 'fitzgerald_image_sizes' );

    function fitzgerald_image_sizes( $sizes ) {
        return array_merge( $sizes, array(
            'fitzgerald_content-img' => __('Content Image'),
        ) );
    }

    /**
    * Theme Customize Options
    */
    function fitzgerald_customize_register( $wp_customize ) {
        /**
         * Textarea Customize Module
         */
        class fitzgerald_Customize_Textarea_Control extends WP_Customize_Control {
            public $type = 'textarea';
            public function render_content() { ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                </label>
            <?php }
        }

        /**
         * About Image
         */
        $wp_customize->add_setting('about_img');
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'about_img',
                array(
                    'label' => 'About Image',
                    'description' => 'Upload a square image with 100x100px',
                    'section' => 'about_box',
                    'settings' => 'about_img'
                )
            )
        );

        /**
         * About Text
         */
        $wp_customize->add_setting('about_text', array('default' => '',));
        $wp_customize->add_control(
            new fitzgerald_Customize_Textarea_Control(
                $wp_customize,
                'about_text',
                array(
                    'label' => 'About Text',
                    'section' => 'about_box',
                    'settings' => 'about_text',
                )
            )
        );

        $wp_customize->add_section('about_box' , array(
            'title' => __('About Box','fitzgerald'),
        ));
    }
    add_action( 'customize_register', 'fitzgerald_customize_register' );
}
endif;
add_action( 'after_setup_theme', 'fitzgerald_setup' );


/**
 * Enqueue scripts and styles
 */
function fitzgerald_assets() {
    /**
     * Load main stylesheet
     */
    wp_enqueue_style( 'fitzgerald-style', get_template_directory_uri() . '/dist/css/style.min.css' );
}
add_action( 'wp_enqueue_scripts', 'fitzgerald_assets' );

?>
