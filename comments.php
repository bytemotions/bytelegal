<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<?php if ( have_comments() ) : ?>
    <h4 class="main-heading-4">
        <?php
            printf(
                _nx('One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title', 'bytelegal'),
                number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
        ?>
    </h4>
<?php endif; // have_comments() ?>

<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?> 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'short_ping'  => true,
                    'avatar_size' => 54,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php  // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'bytelegal' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'bytelegal' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'bytelegal' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'bytelegal' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
	<!-- Comments Form Starts -->
    <?php 

        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
                
        $fields =  array(

            'author' =>
                '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) .
                ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . $aria_req . ' /></p>',
          
            'email' =>
                '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) .
                ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' /></p>',
          
            'url' =>
                '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
                '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '" size="30" /></p>',
            );

            $args = array(
                'id_form'           => 'commentform',
                'class_form'      => 'comment-form',
                'id_submit'         => 'submit',
                'class_submit'      => 'submit',
                'name_submit'       => 'submit',
                'title_reply'       => __( 'Leave a Reply' ),
                'title_reply_to'    => __( 'Leave a Reply to %s' ),
                'cancel_reply_link' => __( 'Cancel Reply' ),
                'label_submit'      => __( 'Post Comment' ),
                'format'            => 'xhtml',
              
                'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
                  '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                  '</textarea></p>',
              
                'must_log_in' => '<p class="must-log-in">' .
                  sprintf(
                    __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                    wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                  ) . '</p>',
              
                'logged_in_as' => '<p class="logged-in-as">' .
                  sprintf(
                  __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                    admin_url( 'profile.php' ),
                    $user_identity,
                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                  ) . '</p>',
              
                'comment_notes_before' => '<p class="comment-notes">' .
                  __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
                  '</p>',
              
                'comment_notes_after' => '<p class="form-allowed-tags">' .
                  sprintf(
                    __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
                    ' <code>' . allowed_tags() . '</code>'
                  ) . '</p>',
              
                'fields' => apply_filters( 'comment_form_default_fields', $fields ),
              );
              

        comment_form($args);

    ?>
    <!-- Comments Form Ends -->
 
</div><!-- #comments -->