<?php
if ( post_password_required() ) {
	return;
}
if ( !is_singular( 'tour' ) ) {
	return;
}
?>
<div id="comments" class="btCommentsBox">

	<?php if ( have_comments() ) : ?>

		<h4><?php echo esc_html__( 'User Reviews &amp; Comments', 'travelicious' );?></h4>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                        <?php 
                        $prev_html = get_previous_comments_link( esc_html__( 'Older Comments', 'travelicious' ) );
                        $next_html = get_next_comments_link( esc_html__( 'Newer Comments', 'travelicious' ) );
                        if ( $prev_html != '' && $next_html != '' ) {
                                echo get_previous_comments_link( esc_html__( 'Older Comments', 'travelicious' ) );
                                echo '<span></span>';
                                echo get_next_comments_link( esc_html__( 'Newer Comments', 'travelicious' ) );
                        } else {
                                echo get_previous_comments_link( esc_html__( 'Older Comments', 'travelicious' ) );
                                echo '<span></span>';
                                echo get_next_comments_link( esc_html__( 'Newer Comments', 'travelicious' ) );
                        }
                        ?>
                    </nav><!-- #comment-nav-above -->
		<?php endif;?>

		<ul class="comments">
                    <?php
                        wp_list_comments( array(
                                'style'      => 'ul',
                                'short_ping' => true,
                                'reverse_top_level' => true,
                                'callback'   => 'boldthemes_theme_comment_tour'
                        ) );
                    ?>
		</ul><!-- .comments -->
                
                <?php if ( ! comments_open() ) : ?>
                    <p class="no-comments"><?php echo esc_html__( 'Comments are closed.', 'travelicious' ); ?></p>
                <?php endif; ?>

		<?php if ( get_comments_number() > 5 ) : ?>
			<div class="show-more-comments">
				<div class="bt_bb_button bt_bb_size_small bt_bb_icon_position_right">
					<a href="#" target="_self" class="bt_bb_link" id="tour_single_comment_show_more_reviews">
						<span class="bt_bb_button_text"><?php echo  esc_html__( 'Show more reviews', 'travelicious' );?></span><span class="bt_bb_icon_holder"></span>
					</a>
				</div>
			</div>
		<?php endif; ?>

	<?php else : ?>

		<p class="woocommerce-noreviews"><?php echo esc_html__( 'There are no comments yet.', 'travelicious' ); ?></p>

	<?php endif;  ?>
                
	<a id="btCommentsForm"></a>
	<?php 
	
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
	
		$fields =  array(
			'author' =>
				'<div class="pcItem btCommentAuthor">
				<p><input id="author" name="author" type="text" tabindex="2" placeholder="' . esc_attr__( 'Name *', 'travelicious' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
				'" ' . $aria_req . ' /></p></div>',

			'email' =>
				'<div class="pcItem btCommentEmail">
				<p><input id="email" name="email" type="text" tabindex="3" placeholder="' . esc_attr__( 'Email *', 'travelicious' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" ' . $aria_req . ' /></p></div>',
                        'website' =>
				'<div class="pcItem btCommentWebsite">
                                <p><input id="url" name="url" type="text" tabindex="4" placeholder="' . esc_attr__( 'Website', 'travelicious' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .'"/></p></div>',

			'comment_field' =>  
				'<div class="pcItem btComment"><p><textarea id="comment" name="comment" tabindex="4" cols="30" rows="8" placeholder="' . esc_attr__( 'Comment *', 'travelicious' ) . '" aria-required="true">' .'</textarea></p></div>'

		);
	
		$args = array(
		  'id_form'           => 'commentform',
		  'class_form'	      => 'comment-form',
		  'id_submit'         => 'submit',
		  'title_reply'       => esc_html__( 'Write your Review', 'travelicious' ),
		  'title_reply_to'    => esc_html__( 'Leave a review to %s', 'travelicious' ),
		  'cancel_reply_link' => esc_html__( 'Cancel review', 'travelicious' ),
		  'label_submit'      => esc_html__( 'Submit review', 'travelicious' ),
		  
		  'submit_button' => '<span class="pcItem"><button type="submit" value="' . esc_attr__( 'Post Comment', 'travelicious' ) . '" id="btSubmit" class="btCommentSubmit" name="submit" data-ico-fa="&#xf1d8;"><span class="btnInnerText">' . esc_html__( 'Submit Your Review', 'travelicious' ) . '</span></button></span>',

		  'must_log_in' => '<p class="must-log-in">' .
			sprintf(
				wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'travelicious' ), array( 'a' => array( 'href' => array() ) ) ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

		  'logged_in_as' => '<p class="logged-in-as">' .
			sprintf(
				wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">%5$s</a>', 'travelicious' ), array( 'a' => array( 'href' => array() ) ) ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ),
                                esc_attr__( 'Log out of this account', 'travelicious' ),
                                esc_html__( 'Log out?', 'travelicious' )
			) . '</p>',

		  'comment_notes_before' => '<p class="comment-notes">' .
			esc_html__( 'Your email address will not be published.', 'travelicious' ) . ' ' . ( $req ? esc_html__( 'Required fields are marked *', 'travelicious' ) : '' ) .
			'</p>',

		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		  
		);

		
		comment_form( $args );

	?>

</div><!-- #comments -->
