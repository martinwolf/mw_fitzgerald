<?php get_header(); ?>

<main>
<?php
while ( have_posts() ) : the_post();

    get_template_part( 'content', get_post_format() );

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile;
?>
</main>

<nav class="c-article-nav">
    <span class="c-article-nav__item c-article-nav__item--prev">
        <?php previous_post_link('%link', 'Previous Article'); ?>
    </span>
    <span class="c-article-nav__item c-article-nav__item--next">

        <?php next_post_link('%link', 'Next Article'); ?>
    </span>
</nav>

<?php get_footer(); ?>

