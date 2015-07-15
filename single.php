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

<?php get_footer(); ?>

