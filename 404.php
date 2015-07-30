<?php get_header(); ?>

<article class="c-article">
    <header class="o-wrapper">
        <h1 class="c-article__title">
            <?php _e( 'Error 404 - Page not found', 'mw_fitzgerald' ); ?>
        </h1>
    </header>

    <div class="o-wrapper c-text">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mw_fitzgerald' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</article>

<?php get_footer(); ?>
