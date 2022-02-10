<?php
$boldthemes_options = get_option( BoldThemesFramework::$pfx . '_theme_options' );

if ( isset( $boldthemes_options['tour_slug'] ) && !is_null( $boldthemes_options['tour_slug'] ) && $boldthemes_options['tour_slug'] != "" && !is_null( boldthemes_get_id_by_slug( $boldthemes_options['tour_slug'] ) ) && boldthemes_get_id_by_slug( $boldthemes_options['tour_slug'] ) != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['tour_slug'] );
} else if ( !is_null( boldthemes_get_id_by_slug('tour') ) && boldthemes_get_id_by_slug('tour') != '' ) {
	$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'tour' ) );
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( 'tour' );
} else if ( get_option( 'page_for_posts' ) ) {
	$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['tour_settings_page_slug'] ) );
	BoldThemesFramework::$page_for_header_id = get_option( 'page_for_posts' );
}

$tour_list_view_option = isset($boldthemes_options['tour_list_view']) && $boldthemes_options['tour_list_view'] != '' ?  
                $boldthemes_options['tour_list_view'] : BoldThemes_Customize_Default::$data['tour_list_view'];        
BoldThemesFrameworkTemplate::$tour_list_view = isset($_GET['bt_tour_search_list_view']) && $_GET['bt_tour_search_list_view'] != '' ? 
                sanitize_text_field( $_GET['bt_tour_search_list_view'] ) : $tour_list_view_option;

get_header();

if ( have_posts() ) {
        
        if ( BoldThemesFrameworkTemplate::$tour_list_view == 'standard' ) {
            get_template_part( 'views/tour/list/standard' );		
	} else {
            get_template_part( 'views/tour/list/standard' );		
	}       
       
} else {
	if ( is_search() ) { ?>
		<article class="btNoSearchResults boldSection gutter bottomSemiSpaced topSemiSpaced ">
			<div class="port">
			<?php 
			echo boldthemes_get_heading_html(
				array(
					'headline' => esc_html__( 'We are sorry, no results for: ', 'travelicious' ) . get_search_query(),
					'subheadline' => esc_html__( 'Back to homepage', 'travelicious' ),
					'url' => site_url(),
					'size' => 'medium'
				)									 
			);
			?>
			</div>
		</article>
	<?php }
}

get_footer();

