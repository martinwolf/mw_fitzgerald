<article class="o-wrapper c-article">
    <header class="c-article__header">
        <p class="c-article__category">
            <?php
            echo sprintf(
                __( 'Published in  %s' ),
                get_the_category_list( __( ', ' ) )
            );
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

    <div class="c-text">
        <?php
            the_content( sprintf(
                __( 'Continue reading %s' ),
                the_title()
            ) );
        ?>
    </div>
</article>
