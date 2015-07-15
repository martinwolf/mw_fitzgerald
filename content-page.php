<article class="c-article">
    <?php
    if ( has_post_thumbnail() ) {
        $imageOptions = array(
            'class' => 'c-article__featured-img'
        );
        the_post_thumbnail('fitzgerald_featured-img', $imageOptions);
    }
    ?>

    <header class="o-wrapper">
        <?php
            the_title( '<h1 class="c-article__title">', '</h1>' );
        ?>
    </header>

    <div class="o-wrapper c-text">
        <?php the_content(); ?>
    </div>
</article>
