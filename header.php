<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--
        <link rel="dns-prefetch" href="//www.google-analytics.com">
    -->

    <script>
        var WebFontConfig = {
            google: {
                families: [ 'Merriweather:400,700,400italic', 'Raleway:700' ]
            },
            timeout: 2000
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
</header>
