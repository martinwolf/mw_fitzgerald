<footer class="o-wrapper c-site-footer">
    <div class="o-grid">
        <div class="o-grid__item w-1-2--m w-1-2--l">
            <div class="c-site-footer__module">
                <h3 class="c-site-footer__headline">Pages</h3>
                <ul class="c-site-footer__list">
                    <?php wp_list_pages('title_li='); ?>
                </ul>
            </div>
        </div><!--

     --><div class="o-grid__item w-1-2--m w-1-2--l">
            <div class="c-site-footer__module">
                <h3 class="c-site-footer__headline">Categories</h3> <ul class="c-site-footer__list">
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
