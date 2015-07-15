<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <script>
        var WebFontConfig = {
            google: {
                families: [ 'Merriweather:400,700,400italic', 'Raleway:700' ]
            },
            timeout: 3000
        };

        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];;
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
            wf.async = 'true';
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="o-wrapper c-site-header">
    <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="c-site-title">
            <a class="c-site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
    <?php else: ?>
        <p class="c-site-title">
            <a class="c-site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
        </p>
    <?php endif; ?>

    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
        <p class="c-site-description"><?php echo $description; ?></p>
    <?php endif; ?>
</header>
