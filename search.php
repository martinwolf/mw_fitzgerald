<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) : ?>

        <h1 class="o-wrapper c-archive__title">
            <?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?>
        </h1>

        <?php while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;

    else:

        get_template_part( 'content', 'none' );

    endif;
    ?>
</main>

<div class="o-wrapper c-pagination">
    <?php posts_nav_link('&nbsp; | &nbsp;','Previous Page','Next Page'); ?>
</div>

<?php get_footer(); ?>

