<?php
$boldthemes_options = get_option( BoldThemesFramework::$pfx . '_theme_options' );
$tour_single_view   = 'standard';

$tmp_boldthemes_page_options = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override' );
if ( ! is_array( $tmp_boldthemes_page_options ) ) $tmp_boldthemes_page_options = array();
$tmp_boldthemes_page_options = boldthemes_transform_override( $tmp_boldthemes_page_options );
 
if ( isset( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug'] ) && $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug'] != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug' ] );
} else if ( isset( $boldthemes_options['tour_settings_page_slug'] ) && $boldthemes_options['tour_settings_page_slug'] != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['tour_settings_page_slug'] );
}

BoldThemesFrameworkTemplate::$cf = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_custom_fields' );
$pf_use_dash = boldthemes_get_option( 'pf_use_dash' );
BoldThemesFrameworkTemplate::$dash = $pf_use_dash ? 'bottom' : '';
$gallery_type = intval( boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_grid_gallery' ) ) == 0 ? 'carousel' : 'grid'; 



if ( bt_map_is_osm() ) {
    require_once( 'bold-page-builder/content_elements/bt_bb_openmap/openmap/include_map.php' );
}
get_header();
 
if ( have_posts() ) {
	
	while ( have_posts() ) {
	
		the_post();
                
        $featured_image = '';
		if ( has_post_thumbnail() && boldthemes_get_option( 'hide_headline' ) ) {
			$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$image = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
			$featured_image = $image[0];		
		}
               
                
        $permalink	= get_permalink();
		$post_format	= get_post_format();

		$content_html = apply_filters( 'the_content', get_the_content() );
		$content_html = str_replace( ']]>', ']]&gt;', $content_html );
	
		BoldThemesFrameworkTemplate::$content_html = $content_html;
                
        $post_categories = get_the_terms( get_the_ID(), 'tour_category' );
		BoldThemesFrameworkTemplate::$categories_html = boldthemes_get_post_categories( array( 'categories' => $post_categories ) );
		
		$comments_open = comments_open();
		$comments_number = get_comments_number();
		BoldThemesFrameworkTemplate::$show_comments_number = true;
		if ( ! $comments_open && $comments_number == 0 ) {
			BoldThemesFrameworkTemplate::$show_comments_number = false;
		}
                
        BoldThemesFrameworkTemplate::$meta_html = boldthemes_get_post_meta();
          
         if ( $tour_single_view == 'columns' ) {
			get_template_part( 'views/tour/single/columns' );	
		} else {
			get_template_part( 'views/tour/single/standard' );
		}
		
		get_template_part( 'views/prev_next' );                
    }
}
get_footer();