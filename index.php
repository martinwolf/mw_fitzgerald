<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :

        while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;

    else:

        get_template_part( 'content', 'none' );

    endif;
    ?>
</main>

<div class="o-wrapper c-pagination">
    <?php posts_nav_link('&nbsp; | &nbsp;', __( 'Previous Page', 'mw_fitzgerald' ), __( 'Next Page', 'mw_fitzgerald' )); ?>
</div>

<?php get_footer(); ?>
