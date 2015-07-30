<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="o-wrapper c-comments">

    <?php if ( have_comments() ) : ?>
        <h2 class="c-comments__title">
            <?php
            $comment_count = get_comments_number();
            printf( _n( 'One Comment', '%s Comments', $comment_count, 'mw_fitzgerald' ), $comment_count );
            ?>
        </h2>

        <ol class="c-comments__list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 0,
                ) );
            ?>
        </ol>

    <?php endif; ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'mw_fitzgerald' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
