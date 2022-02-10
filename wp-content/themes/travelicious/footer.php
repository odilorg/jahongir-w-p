		</div><!-- /boldthemes_content -->
               
<?php

if ( BoldThemesFramework::$has_sidebar ) {
	include( get_parent_theme_file_path( 'sidebar.php' ) );
}

?>
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

<div class="btSiteFooter">

<?php

$page_slug = boldthemes_get_option( 'footer_page_slug' );
if ( $page_slug != '' ) {
	$page_id = boldthemes_get_id_by_slug( $page_slug );
	$page = get_post( $page_id );
	$content = $page->post_content;
	$content = do_shortcode($content);
	$content = preg_replace( '/data-edit_url="(.*?)"/s', 'data-edit_url="' . get_edit_post_link( $page_id, '' ) . '"', $content );
	echo str_replace( ']]>', ']]&gt;', $content );
}

$custom_text_html = '';
$custom_text = boldthemes_get_option( 'custom_text' );
if ( $custom_text != '' ) {
	$custom_text_html = '<p class="copyLine">' . $custom_text . '</p>';
} 

if ( boldthemes_get_option( 'footer_dark_skin' ) ) {
	echo '<footer class="btDarkSkin">';
} else {
	echo '<footer class="btLightSkin">';
}

?>

<?php if ( is_active_sidebar( 'footer_widgets' ) ) {
	echo '
		<section class="btSiteFooterWidgets gutter">
			<div class="port">
				<div class="bt_bb_row" id="boldSiteFooterWidgetsRow">';dynamic_sidebar( 'footer_widgets' );echo '</div>
			</div>
		</section>
		';
}

?>
         
<?php if ( $custom_text_html != '' || has_nav_menu( 'footer' )) { ?>
	<section class="gutter btSiteFooterCopyMenu">
		<div class="port">
			<div class="">
				<div class="btFooterCopy">
					<div class="bt_bb_column_content">
						<?php echo wp_kses_post( $custom_text_html ); ?>
					</div>
				</div><!-- /copy -->
				<div class="btFooterMenu">
					<div class="bt_bb_column_content">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'ul', 'depth' => 1, 'fallback_cb' => false ) ); ?>
					</div>
				</div>
			</div><!-- /boldRow -->
		</div><!-- /port -->
	</section>
<?php } ?>
</footer>

</div><!-- /btSiteFooter -->

</div><!-- /pageWrap -->

<?php
if ( function_exists( 'bt_get_tour_options_data' ) ) {
    if ( is_single() && 'tour' == get_post_type() ) {
          get_template_part( 'views/forms' );
    }
}

wp_footer();

?>
<div id="bt_autocomplete_footer"></div>

</body>
</html>