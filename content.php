<article class="c-article">
    <?php
    if ( is_single() && has_post_thumbnail() ) {
        $imageOptions = array(
            'class' => 'c-article__featured-img'
        );
        the_post_thumbnail('fitzgerald_featured-img', $imageOptions);
    }
    ?>

    <header class="o-wrapper">
        <p class="c-article__meta">
            <?php
            echo sprintf(
                __( 'Published in  %s', 'mw_fitzgerald' ),
                get_the_category_list( __( ', ' ) )
            );
            ?>
            |
            <?php
                the_time('F j, Y');
            ?>
        </p>

        <?php
        if ( is_single() ) :
            the_title( '<h1 class="c-article__title">', '</h1>' );
        else :
            the_title( sprintf( '<h2 class="c-article__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        endif;
        ?>
    </header>

    <div class="o-wrapper c-text">
        <?php the_content( sprintf(__( 'Continue reading...', 'mw_fitzgerald' )) ); ?>
    </div>

    <?php if ( is_single() && has_tag() ) { ?>
    <footer class="o-wrapper c-article__footer">
        <p class="c-article__meta">
            <?php
            echo sprintf(
                __( 'Tagged with %s.', 'mw_fitzgerald' ),
                get_the_tag_list('',', ','')
            );
            ?>
        </p>
    </footer>
    <?php } ?>
</article>
