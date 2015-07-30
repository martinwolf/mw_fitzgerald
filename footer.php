<footer class="o-wrapper c-site-footer">
    <?php if (get_theme_mod( 'about_img', 'default_value' ) && get_theme_mod( 'about_text', 'default_value' )) { ?>
    <div class="o-media c-about-box c-site-footer__module">
        <div class="o-media__img">
            <img class="c-about-box__img" src="<?php echo get_theme_mod( 'about_img', 'default_value' ); ?>" alt="<?php bloginfo('author'); ?>">
        </div>
        <div class="o-media__body">
            <p><?php echo get_theme_mod( 'about_text', 'default_value' ); ?></p>
        </div>
    </div>
    <?php } ?>

    <div class="c-site-footer__module">
        <h3 class="c-site-footer__headline">
            <?php _e( 'Search the blog', 'mw_fitzgerald' ); ?>
        </h3>
        <?php get_search_form(); ?>
    </div>

    <div class="o-grid">
        <div class="o-grid__item w-1-2--m w-1-2--l">
            <div class="c-site-footer__module">
                <h3 class="c-site-footer__headline">
                    <?php _e( 'Pages', 'mw_fitzgerald' ); ?>
                </h3>
                <ul class="c-site-footer__list">
                    <?php wp_list_pages('title_li='); ?>
                </ul>
            </div>
        </div><!--

     --><div class="o-grid__item w-1-2--m w-1-2--l">
            <div class="c-site-footer__module">
                <h3 class="c-site-footer__headline">
                    <?php _e( 'Categories', 'mw_fitzgerald' ); ?>
                </h3>
                <ul class="c-site-footer__list">
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
        </div>
    </div>

    <p class="c-site-footer__module">&copy; <?php bloginfo('author'); ?></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>
