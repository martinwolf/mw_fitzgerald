<article class="c-article">
    <header class="o-wrapper">
        <h1 class="c-article__title">
            <?php _e( 'Nothing Found', 'mw_fitzgerald' ); ?>
        </h1>
    </header>

    <div class="o-wrapper c-text">
        <?php if ( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mw_fitzgerald' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mw_fitzgerald' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div>
</article>
