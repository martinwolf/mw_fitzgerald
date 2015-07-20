<?php get_header(); ?>

<main>
<?php
if ( have_posts() ) :

    the_archive_title( '<h1 class="o-wrapper c-archive__title">', '</h1>' );

    while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    endwhile;

else:

    get_template_part( 'content', 'none' );

endif;
?>
</main>

<?php get_footer(); ?>
