<?php

BoldThemes_Customize_Default::$data['body_font'] = 'Barlow';
BoldThemes_Customize_Default::$data['heading_supertitle_font'] = 'Barlow Semi Condensed';
BoldThemes_Customize_Default::$data['heading_font'] = 'Montserrat';
BoldThemes_Customize_Default::$data['heading_subtitle_font'] = 'Barlow';
BoldThemes_Customize_Default::$data['menu_font'] = 'Montserrat';

BoldThemes_Customize_Default::$data['accent_color'] = '#1976bc';
BoldThemes_Customize_Default::$data['alternate_color'] = '#8dc645';
BoldThemes_Customize_Default::$data['logo_height'] = '100';

BoldThemes_Customize_Default::$data['template_skin'] = false;
BoldThemes_Customize_Default::$data['heading_style'] = 'default';

// GENERAL
BoldThemes_Customize_Default::$data['tour_reverse_gradient_on_elements'] = false;
BoldThemes_Customize_Default::$data['tour_gradient_on_elements_opacity'] = '100';
BoldThemes_Customize_Default::$data['tour_gradient_on_page_headline_opacity'] = '70';

// TOUR
BoldThemes_Customize_Default::$data['tour_list_view']               = 'standard';
BoldThemes_Customize_Default::$data['tour_search_action_type']      = 'standard';
BoldThemes_Customize_Default::$data['tour_listing_pagination']      = 'paged';
BoldThemes_Customize_Default::$data['tour_single_author_review']    = false;
BoldThemes_Customize_Default::$data['tour_single_list_header_view'] = 'standard';
$listing_default_image = get_template_directory_uri() . '/gfx/no-image-camera.jpg'; 
BoldThemes_Customize_Default::$data['tour_default_image'] = $listing_default_image;

BoldThemes_Customize_Default::$data['tour_grid_gallery_columns']    = '3';
BoldThemes_Customize_Default::$data['tour_grid_gallery_gap']        = 'small';
BoldThemes_Customize_Default::$data['similar_tours_list_columns']   = '3';
BoldThemes_Customize_Default::$data['similar_tours_list_gap']        = 'small';
BoldThemes_Customize_Default::$data['tour_single_similar_list_design']        = 'btListDesignRegular';

BoldThemes_Customize_Default::$data['tour_search_show_categories']  = false;
BoldThemes_Customize_Default::$data['tour_search_show_only_months']  = false;
BoldThemes_Customize_Default::$data['tour_search_open_single_new_window']  = false;

BoldThemes_Customize_Default::$data['tour_search_date_before_after_days']  = 5;

BoldThemes_Customize_Default::$data['tour_similar_tours_list_number']    = '12';
BoldThemes_Customize_Default::$data['tour_similar_tours_list_by_type']   = 'category';
BoldThemes_Customize_Default::$data['tour_single_design']      = 'btListDesignRegular';
BoldThemes_Customize_Default::$data['tour_similar_tours_list_gap']       = 'btTourListGapNoGap';
BoldThemes_Customize_Default::$data['tour_similar_tours_list_columns']   = 'btList2PerRow';

BoldThemes_Customize_Default::$data['tour_currency']    = '$';
BoldThemes_Customize_Default::$data['tour_currency_before_price'] = false;

BoldThemes_Customize_Default::$data['tour_show_rating'] = true;
BoldThemes_Customize_Default::$data['tour_share_facebook'] = false;
BoldThemes_Customize_Default::$data['tour_share_twitter'] = false;
BoldThemes_Customize_Default::$data['tour_share_google_plus'] = false;
BoldThemes_Customize_Default::$data['tour_share_linkedin'] = false;
BoldThemes_Customize_Default::$data['tour_share_vk'] = false;
BoldThemes_Customize_Default::$data['tour_share_whatsapp'] = false;
BoldThemes_Customize_Default::$data['tour_single_user_review'] = '';

// TOUR MAP
BoldThemes_Customize_Default::$data['tour_api_key']         = '';
BoldThemes_Customize_Default::$data['tour_gmap_zoom']       = 12;
//greenwich 51.4825891,-0.0164351
BoldThemes_Customize_Default::$data['tour_gmap_lat']        = '51.4825891';
BoldThemes_Customize_Default::$data['tour_gmap_lng']        = '-0.0164351';

$tour_pin_normal = get_template_directory_uri() . '/gfx/map-pin.png'; 
BoldThemes_Customize_Default::$data['tour_pin_normal']       = '';
BoldThemes_Customize_Default::$data['tour_pin_selected']     = '';
BoldThemes_Customize_Default::$data['tour_custom_map_style'] = '';
BoldThemes_Customize_Default::$data['custom_map_style'] = '';

BoldThemes_Customize_Default::$data['tour_tours_per_page']   = '10';

BoldThemes_Customize_Default::$data['tour_contact_form_booking']   = '';
BoldThemes_Customize_Default::$data['tour_contact_form_enquiry']   = '';
BoldThemes_Customize_Default::$data['tour_contact_form_booking_show']  = false;
BoldThemes_Customize_Default::$data['tour_contact_form_enquiry_show']  = false;
BoldThemes_Customize_Default::$data['tour_contact_form_booking_enquiry_show']  = false;

BoldThemes_Customize_Default::$data['tour_map_type']  = 'google';
BoldThemes_Customize_Default::$data['osm_map_style']   = '1';

// tour page slugs
BoldThemes_Customize_Default::$data['tour_settings_page_slug']      = 'tour-single';
BoldThemes_Customize_Default::$data['tour_slug']      = 'tours';
BoldThemes_Customize_Default::$data['tour_category_slug']      = 'tour_category';

BoldThemes_Customize_Default::$data['tour_show_other_times']  = false;

// tour single tabs
BoldThemes_Customize_Default::$data['tour_tabs_information_title']  = '';

BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_order']    = '1';

BoldThemes_Customize_Default::$data['tour_tabs_location_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_location_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_location_order']    = '2';

BoldThemes_Customize_Default::$data['tour_tabs_gallery_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_gallery_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_gallery_order']    = '3';

BoldThemes_Customize_Default::$data['tour_tabs_reviews_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_reviews_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_reviews_order']    = '4';

BoldThemes_Customize_Default::$data['tour_tabs_additional_info_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_additional_info_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_additional_info_order']    = '5';

BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_order']    = '6';

BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_hide']     = false;
BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_title']    = '';
BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_order']    = '7';

// OVERLAY LINES
BoldThemes_Customize_Default::$data['heading_style'] = 'default';

if ( ! function_exists( 'boldthemes_customize_heading_style' ) ) {
	function boldthemes_customize_heading_style( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[heading_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['heading_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'heading_style', array(
			'label'     => esc_html__( 'Heading Style', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_typography_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[heading_style]',
			'priority'  => 95,
			'type'      => 'select',
			'choices'   => array(
				'default' => esc_html__( 'Default', 'travelicious' ),
				'compact' => esc_html__( 'Compact (small line height + bold)', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_heading_style' );

// GENERAL SETTINGS
// REVERSE GRADIENT ON ELEMENTS
if ( ! function_exists( 'boldthemes_customize_tour_reverse_gradient_on_elements' ) ) {
	function boldthemes_customize_tour_reverse_gradient_on_elements( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_reverse_gradient_on_elements]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_reverse_gradient_on_elements'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_reverse_gradient_on_elements', array(
			'label'    => esc_html__( 'Reverse Gradient on chosen Elements (heading underlines, backgrounds, menu underlines, etc)', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_reverse_gradient_on_elements]',
			'priority' => 98,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_reverse_gradient_on_elements' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_reverse_gradient_on_elements' );

// GRADIENT ON ELEMENTS OPACITY
if ( ! function_exists( 'boldthemes_customize_tour_gradient_on_elements_opacity' ) ) {
	function boldthemes_customize_tour_gradient_on_elements_opacity( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_gradient_on_elements_opacity]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_gradient_on_elements_opacity'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_gradient_on_elements_opacity', array(
			'label'     => esc_html__( 'Opacity for header gradient', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_general_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_gradient_on_elements_opacity]',
			'priority'  => 98,
			'description' => esc_html__( 'Choose a percent of visibility for underline gradients used on headlines.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'100' => esc_html__( '100%', 'travelicious' ),
				'90' => esc_html__( '90%', 'travelicious' ),
				'80' => esc_html__( '80%', 'travelicious' ),
				'70' => esc_html__( '70%', 'travelicious' ),
				'60' => esc_html__( '60%', 'travelicious' ),
				'50' => esc_html__( '50%', 'travelicious' ),
				'40' => esc_html__( '40%', 'travelicious' ),
				'30' => esc_html__( '30%', 'travelicious' ),
				'20' => esc_html__( '20%', 'travelicious' ),
				'10' => esc_html__( '10%', 'travelicious' ),
				'none' => esc_html__( '0%', 'travelicious' ),
			)
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_gradient_on_elements_opacity' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_gradient_on_elements_opacity' );

// GRADIENT ON ELEMENTS OPACITY
if ( ! function_exists( 'boldthemes_customize_tour_gradient_on_page_headline_opacity' ) ) {
	function boldthemes_customize_tour_gradient_on_page_headline_opacity( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_gradient_on_page_headline_opacity]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_gradient_on_page_headline_opacity'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_gradient_on_page_headline_opacity', array(
			'label'     => esc_html__( 'Opacity for default page headline gradient', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_general_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_gradient_on_page_headline_opacity]',
			'priority'  => 99,
			'description' => esc_html__( 'Choose a percent of visibility for gradients that are shown in the default page headline, covering the featured image.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'100' => esc_html__( '100%', 'travelicious' ),
				'90' => esc_html__( '90%', 'travelicious' ),
				'80' => esc_html__( '80%', 'travelicious' ),
				'70' => esc_html__( '70%', 'travelicious' ),
				'60' => esc_html__( '60%', 'travelicious' ),
				'50' => esc_html__( '50%', 'travelicious' ),
				'40' => esc_html__( '40%', 'travelicious' ),
				'30' => esc_html__( '30%', 'travelicious' ),
				'20' => esc_html__( '20%', 'travelicious' ),
				'10' => esc_html__( '10%', 'travelicious' ),
				'none' => esc_html__( '0%', 'travelicious' ),
			)
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_gradient_on_page_headline_opacity' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_gradient_on_page_headline_opacity' );


// TOUR

// TOUR ARCHIVE LAYOUT - deactivated

if ( ! function_exists( 'boldthemes_customize_tour_list_view' ) ) {
	function boldthemes_customize_tour_list_view( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_list_view]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_list_view'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_list_view', array(
			'label'     => esc_html__( 'Archive Layout', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_list_view]',
			'priority'  => 10,
			'description' => esc_html__( 'Choose a view type for Tour Archive Layout, used for list by category, destination or by tag.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'standard' => esc_html__( 'Standard', 'travelicious' ),
				'columns' => esc_html__( 'Columns', 'travelicious' )
			)
		));
	}
}
//add_action( 'customize_register', 'boldthemes_customize_tour_list_view' );
//add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_list_view' );

// Tour SINGLE LIST HEADER VIEW
if ( ! function_exists( 'boldthemes_customize_tour_search_type' ) ) {
	function boldthemes_customize_tour_search_type( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_action_type]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_action_type'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_search_action_type', array(
			'label'     => esc_html__( 'Tour Search Type', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_search_action_type]',
			'priority'  => 15,
			'description' => esc_html__( 'Set preferred Search type - standard search with page reload on each click, or ajax without page reload.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'standard'	 => esc_html__( 'Standard', 'travelicious' ),
				'ajax'		 => esc_html__( 'Ajax', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_search_type' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_type' );

// TOUR LISTINGS PAGINATION
if ( ! function_exists( 'boldthemes_customize_tour_listing_pagination' ) ) {
	function boldthemes_customize_tour_listing_pagination( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_listing_pagination]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_listing_pagination'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_listing_pagination', array(
			'label'     => esc_html__( 'Tour Search Pagination', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_listing_pagination]',
			'priority'  => 17,
			'description' => esc_html__( 'Set pagination type - standard pagination with page numbers and previous / next links, or with ajax Load more button.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'loadmore' => esc_html__( 'Load More', 'travelicious' ),
				'paged' => esc_html__( 'Standard Pages', 'travelicious' )				
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_listing_pagination' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_listing_pagination' );

// TOUR SINGLE LIST HEADER VIEW
if ( ! function_exists( 'boldthemes_customize_tour_single_list_header_view' ) ) {
	function boldthemes_customize_tour_single_list_header_view( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_single_list_header_view]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_single_list_header_view'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_single_list_header_view', array(
			'label'     => esc_html__( 'Single Tour Header Layout', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_single_list_header_view]',
			'priority'  => 20,
			'description' => esc_html__( 'Use a standard headline behaviour for a Tour page (as for blog posts or page headlines), or the one based on the content you insert in it - featured image, image slider, video or both.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'standard'          => esc_html__( 'Standard', 'travelicious' ),
                                'based_on_content'  => esc_html__( 'Based on the Content', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_single_list_header_view' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_single_list_header_view' );


// Tour Similar List Columns
if ( ! function_exists( 'boldthemes_customize_similar_tours_list_columns' ) ) {
	function boldthemes_customize_similar_tours_list_columns( $wp_customize ) {		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[similar_tours_list_columns]', array(
			'default'           => BoldThemes_Customize_Default::$data['similar_tours_list_columns'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'similar_tours_list_columns', array(
			'label'     => esc_html__( 'Tour Similar List Columns', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[similar_tours_list_columns]',
			'priority'  => 26,
			'description' => esc_html__( 'Select a number of Columns used for Similar Tours Tab.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                'btList2PerRow'		=> esc_html__( '2', 'travelicious' ),
				'btList3PerRow'		=> esc_html__( '3', 'travelicious' ),
				'btList4PerRow'		=> esc_html__( '4', 'travelicious' ),
                'btList5PerRow'		=> esc_html__( '5', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_similar_tours_list_columns' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_similar_tours_list_columns' );

// Tour Similar List Gap
if ( ! function_exists( 'boldthemes_customize_similar_tours_list_gap' ) ) {
	function boldthemes_customize_similar_tours_list_gap( $wp_customize ) {		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[similar_tours_list_gap]', array(
			'default'           => BoldThemes_Customize_Default::$data['similar_tours_list_gap'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'similar_tours_list_gap', array(
			'label'     => esc_html__( 'Tour Similar List Gap', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[similar_tours_list_gap]',
			'priority'  => 27,
			'description' => esc_html__( 'Set a gap between each Tours on the Tour Similar Tab.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                'btTourListGapNoGap'		=> esc_html__( 'No Gap', 'travelicious' ),
				'btTourListGapSmall'		=> esc_html__( 'Small', 'travelicious' ),
				'btTourListGapNormal'		=> esc_html__( 'Normal', 'travelicious' ),
                'btTourListGapLarge'		=> esc_html__( 'Large', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_similar_tours_list_gap' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_similar_tours_list_gap' );

// Tour Similar List Number of Items
if ( ! function_exists( 'boldthemes_customize_tour_similar_tours_list_number' ) ) {
	function boldthemes_customize_tour_similar_tours_list_number( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_number]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_similar_tours_list_number'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_similar_tours_list_number', array(
			'label'     => esc_html__( 'Number of Similar Tours', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_number]',
			'priority'  => 28,
			'description' => esc_html__( 'Set a maximum number of Tours to Show in Similar Tours Tab on a Single Tour.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_tour_similar_tours_list_number' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_similar_tours_list_number' );

// SIMILAR TOUR BY TYPE
if ( ! function_exists( 'boldthemes_customize_tour_similar_tours_list_by_type' ) ) {
	function boldthemes_customize_tour_similar_tours_list_by_type( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_by_type]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_similar_tours_list_by_type'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_similar_tours_list_by_type', array(
			'label'     => esc_html__( 'Show Similar Tours By', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_by_type]',
			'priority'  => 29,
			'description' => esc_html__( 'Set by which criteria to show Similar Tours on the single tour.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                                'category'		=> esc_html__( 'Category', 'travelicious' ),
                                'destination'		=> esc_html__( 'Destination', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_similar_tours_list_by_type' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_similar_tours_list_by_type' );

// Tour Similar List Type
if ( ! function_exists( 'boldthemes_customize_tour_single_similar_list_design' ) ) {
	function boldthemes_customize_tour_single_similar_list_design( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_single_similar_list_design]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_single_similar_list_design'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_single_similar_list_design', array(
			'label'     => esc_html__( 'Similar Tours Type', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_single_similar_list_design]',
			'priority'  => 29,
			'description' => esc_html__( 'Set how a Similar Tours will look on Similar Tours tab on a Single Tour.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                'btListDesignList'		=> esc_html__( 'List', 'travelicious' ),
                'btListDesignRegular'	=> esc_html__( 'Regular', 'travelicious' ),
				'btListDesignGallery'	=> esc_html__( 'Gallery', 'travelicious' ),
                'btListDesignTiles'		=> esc_html__( 'Tiles', 'travelicious' ) 
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_single_similar_list_design' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_single_similar_list_design' );

// TOUR  GRID GALLERY COLUMNS
if ( ! function_exists( 'boldthemes_customize_tour_grid_gallery_columns' ) ) {
	function boldthemes_customize_tour_grid_gallery_columns( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_grid_gallery_columns]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_grid_gallery_columns'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_grid_gallery_columns', array(
			'label'     => esc_html__( 'Tour Gallery Grid Columns', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_grid_gallery_columns]',
			'priority'  => 30,
			'description' => esc_html__( 'Select a number of columns used for Gallery tab on a Single Tour.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' )				
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_grid_gallery_columns' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_grid_gallery_columns' );

// TOUR  GRID GALLERY GAP
if ( ! function_exists( 'boldthemes_customize_tour_grid_gallery_gap' ) ) {
	function boldthemes_customize_tour_grid_gallery_gap( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_grid_gallery_gap]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_grid_gallery_gap'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_grid_gallery_gap', array(
			'label'     => esc_html__( 'Tour Gallery Grid  Gap', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_grid_gallery_gap]',
			'priority'  => 40,
			'description' => esc_html__( 'Set a gap for the grid on the Gallery tab on a Single Tour.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'no_gap' => esc_html__( 'No gap', 'travelicious' ),
				'small' => esc_html__( 'Small', 'travelicious' ),
				'normal' => esc_html__( 'Normal', 'travelicious' ),
				'large' => esc_html__( 'Large', 'travelicious' )
			)
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_grid_gallery_gap' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_grid_gallery_gap' );

// TOUR SEARCH SHOW CATEGORIES
if ( ! function_exists( 'boldthemes_customize_tour_search_show_categories' ) ) {
	function boldthemes_customize_tour_search_show_categories( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_show_categories]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_show_categories'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_search_show_categories', array(
			'label'    => esc_html__( 'Show Categories on Search Form', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_search_show_categories]',
			'priority' => 45,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_search_show_categories' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_show_categories' );



// TOUR SEARCH ONLY MONTHS, NOT DAYS
if ( ! function_exists( 'boldthemes_customize_tour_search_show_only_months' ) ) {
	function boldthemes_customize_tour_search_show_only_months( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_show_only_months]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_show_only_months'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_search_show_only_months', array(
			'label'    => esc_html__( 'Show just Months and Years instead of full Calendar across Tour Search Forms', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_search_show_only_months]',
			'priority' => 47,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_search_show_only_months' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_show_only_months' );

// TOUR SEARCH ONLY MONTHS, NOT DAYS
if ( ! function_exists( 'boldthemes_customize_tour_search_show_only_months' ) ) {
	function boldthemes_customize_tour_search_show_only_months( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_show_only_months]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_show_only_months'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_search_show_only_months', array(
			'label'    => esc_html__( 'Show just Months and Years instead of full Calendar across Tour Search Forms', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_search_show_only_months]',
			'priority' => 47,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_search_show_only_months' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_show_only_months' );

// TOUR SEARCH ONLY MONTHS, NOT DAYS
if ( ! function_exists( 'boldthemes_customize_tour_search_open_single_new_window' ) ) {
	function boldthemes_customize_tour_search_open_single_new_window( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_open_single_new_window]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_open_single_new_window'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_search_open_single_new_window', array(
			'label'    => esc_html__( 'Open tour single view in new window from search tour lists and widget tour lists', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_search_open_single_new_window]',
			'priority' => 47,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_search_open_single_new_window' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_open_single_new_window' );

// TOUR SINGLE SHOW AUTHOR REVIEW ON FRONTEND
if ( ! function_exists( 'boldthemes_customize_tour_show_author_review' ) ) {
	function boldthemes_customize_tour_show_author_review( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_single_author_review]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_single_author_review'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_single_author_review', array(
			'label'    => esc_html__( 'Show Author Review Summary for a Single Tour (includes the Tour Grade, single percentages and Author Review Summary)', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_single_author_review]',
			'priority' => 48,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_show_author_review' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_show_author_review' );

//tour_search_date_before_after_days

if ( ! function_exists( 'boldthemes_customize_tour_search_date_before_after_days' ) ) {
	function boldthemes_customize_tour_search_date_before_after_days( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_search_date_before_after_days]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_search_date_before_after_days'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_search_date_before_after_days', array(
			'label'     => esc_html__( 'Days to Search before and after the Date User selected', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_search_date_before_after_days]',
			'priority'  => 41,
			'description' => esc_html__( 'Set a number of days that will create a more flexible interval when user selects a precise date of the tour. Ex. If user selects 15th June, and you\'ve set a parameter to 5, the search will include all tours between 10th and 20th June.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_tour_search_date_before_after_days' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_search_date_before_after_days' );






// Tour List Number of Items
if ( ! function_exists( 'boldthemes_customize_tour_tours_per_page' ) ) {
	function boldthemes_customize_tour_tours_per_page( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tours_per_page]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tours_per_page'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tours_per_page', array(
			'label'     => esc_html__( 'Default Number of Tours on Search Page', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_tours_per_page]',
			'priority'  => 59,
			'description' => esc_html__( 'Set a default number of Tours to show per page in Tour Search. This is also the number of tours that will show up each time when Load More Button is clicked.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_tour_tours_per_page' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tours_per_page' );

// Tour List Type
if ( ! function_exists( 'boldthemes_customize_tour_single_design' ) ) {
	function boldthemes_customize_tour_single_design( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_single_design]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_single_design'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_single_design', array(
			'label'     => esc_html__( 'Tour look and feel on Search', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_single_design]',
			'priority'  => 60,
			'description' => esc_html__( 'Set how a single Tour will look on Tour Search. List is always full width with one column, most informative. Regular is with the right amount of information. Gallery has a portrait image and price, whilst Tiles has Tour title, image and price. This design will also be used for Similar Tours tab on a Single Tour.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                                'btListDesignList'		=> esc_html__( 'List', 'travelicious' ),
                                'btListDesignRegular'		=> esc_html__( 'Regular', 'travelicious' ),
				'btListDesignGallery'		=> esc_html__( 'Gallery', 'travelicious' ),
                                'btListDesignTiles'		=> esc_html__( 'Tiles', 'travelicious' ) 
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_single_design' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_single_design' );

// Tour List Gap
if ( ! function_exists( 'boldthemes_customize_tour_similar_tours_list_gap' ) ) {
	function boldthemes_customize_tour_similar_tours_list_gap( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_gap]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_similar_tours_list_gap'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_similar_tours_list_gap', array(
			'label'     => esc_html__( 'Tour List Gap', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_gap]',
			'priority'  => 70,
			'description' => esc_html__( 'Set a gap between each Tours on the Tour Search list.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                                'btTourListGapNoGap'		=> esc_html__( 'No Gap', 'travelicious' ),
				'btTourListGapSmall'		=> esc_html__( 'Small', 'travelicious' ),
				'btTourListGapNormal'		=> esc_html__( 'Normal', 'travelicious' ),
                                'btTourListGapLarge'		=> esc_html__( 'Large', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_similar_tours_list_gap' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_similar_tours_list_gap' );

// Tour List Columns
if ( ! function_exists( 'boldthemes_customize_tour_similar_tours_list_columns' ) ) {
	function boldthemes_customize_tour_similar_tours_list_columns( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_columns]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_similar_tours_list_columns'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_similar_tours_list_columns', array(
			'label'     => esc_html__( 'Tour List Columns', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_similar_tours_list_columns]',
			'priority'  => 80,
			'description' => esc_html__( 'Select a number of Columns used for Tours on Tour Search list.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
                                'btList2PerRow'		=> esc_html__( '2', 'travelicious' ),
				'btList3PerRow'		=> esc_html__( '3', 'travelicious' ),
				'btList4PerRow'		=> esc_html__( '4', 'travelicious' ),
                                'btList5PerRow'		=> esc_html__( '5', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_similar_tours_list_columns' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_similar_tours_list_columns' );

// TOUR LISTING DEFAULT IMAGE
if ( ! function_exists( 'boldthemes_customize_tour_default_image' ) ) {
	function boldthemes_customize_tour_default_image( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_default_image]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_default_image'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_image'
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tour_default_image', array(
			'label'    => esc_html__( 'Tour Default Image', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_default_image]',
			'description' => esc_html__( 'Set a default image used when a tour doesn\'t have a featured image. Used only for Tour Search and shortcodes.', 'travelicious' ),
			'priority' => 90,
			'context'  => BoldThemesFramework::$pfx . '_tour_default_image'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_default_image' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_default_image' );

$listing_default_image = get_template_directory_uri() . '/gfx/no-image-camera.jpg';
BoldThemes_Customize_Default::$data['listing_default_image'] = $listing_default_image;

// TOUR SETTINGS PAGE SLUG
if ( ! function_exists( 'boldthemes_customize_tour_settings_currency' ) ) {
	function boldthemes_customize_tour_settings_currency( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_currency]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_currency'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_currency', array(
			'label'    => esc_html__( 'Currency across site', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_currency]',
			'description' => esc_html__( 'Set a currency symbol that you\'ll use for a Tour Price on Tour Search and Single Tour.', 'travelicious' ),
			'priority' => 95,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_settings_currency' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_settings_currency' );

//Tour currency before price
if ( ! function_exists( 'boldthemes_customize_tour_currency_before_price' ) ) {
	function boldthemes_customize_tour_currency_before_price( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_currency_before_price]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_currency_before_price'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_currency_before_price', array(
			'label'    => esc_html__( 'Show Currency before Price (otherwise it will show after Price)', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_currency_before_price]',
			'priority' => 96,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_currency_before_price' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_currency_before_price' );

// TOUR SINGLE SHOW RATING ON FRONTEND
if ( ! function_exists( 'boldthemes_customize_tour_show_rating' ) ) {
	function boldthemes_customize_tour_show_rating( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_show_rating]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_show_rating'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_show_rating', array(
			'label'    => esc_html__( 'Enable Ratings in Comments and Reviews for all Tours', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_show_rating]',
			'priority' => 100,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_show_rating' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_show_rating' );


// TOUR SINGLE SHOW OTHER TIMES
if ( ! function_exists( 'boldthemes_customize_tour_show_other_times' ) ) {
	function boldthemes_customize_tour_show_other_times( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_show_other_times]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_show_other_times'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_show_other_times', array(
			'label'    => esc_html__( 'Open Other Times on the Tour Single Page', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_show_other_times]',
			'priority' => 101,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_show_other_times' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_show_other_times' );

// SHARE ON FACEBOOK
if ( ! function_exists( 'boldthemes_customize_tour_share_facebook' ) ) {
	function boldthemes_customize_tour_share_facebook( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_facebook]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_facebook'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_facebook', array(
			'label'    => esc_html__( 'Enable Tour Sharing on Facebook', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_facebook]',
			'priority' => 110,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_facebook' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_facebook' );
	
// SHARE ON TWITTER
if ( ! function_exists( 'boldthemes_customize_tour_share_twitter' ) ) {
	function boldthemes_customize_tour_share_twitter( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_twitter]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_twitter'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_twitter', array(
			'label'    => esc_html__( 'Enable Tour Sharing on Twitter', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_twitter]',
			'priority' => 120,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_twitter' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_twitter' );

// SHARE ON LINKEDIN
if ( ! function_exists( 'boldthemes_customize_tour_share_linkedin' ) ) {
	function boldthemes_customize_tour_share_linkedin( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_linkedin]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_linkedin'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_linkedin', array(
			'label'    => esc_html__( 'Enable Tour Sharing on LinkedIn', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_linkedin]',
			'priority' => 130,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_linkedin' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_linkedin' );

// SHARE ON GOOGLE PLUS
/*if ( ! function_exists( 'boldthemes_customize_tour_share_google_plus' ) ) {
	function boldthemes_customize_tour_share_google_plus( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_google_plus]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_google_plus'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_google_plus', array(
			'label'    => esc_html__( 'Enable Tour Sharing on Google Plus', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_google_plus]',
			'priority' => 140,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_google_plus' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_google_plus' );*/

// SHARE ON VK
if ( ! function_exists( 'boldthemes_customize_tour_share_vk' ) ) {
	function boldthemes_customize_tour_share_vk( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_vk]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_vk'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_vk', array(
			'label'    => esc_html__( 'Enable Tour Sharing on VKontakte', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_vk]',
			'priority' => 150,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_vk' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_vk' );

// SHARE ON whatsapp
if ( ! function_exists( 'boldthemes_customize_tour_share_whatsapp' ) ) {
	function boldthemes_customize_tour_share_whatsapp( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_share_whatsapp]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_share_whatsapp'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_share_whatsapp', array(
			'label'    => esc_html__( 'Enable Tour Sharing on WhatsApp', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_share_whatsapp]',
			'priority' => 150,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_share_whatsapp' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_share_whatsapp' );

// SINGLE TOUR USER REVIEW
if ( ! function_exists( 'boldthemes_customize_tour_single_user_review' ) ) {
	function boldthemes_customize_tour_single_user_review( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_single_user_review]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_single_user_review'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_single_user_review', array(
			'label'    => esc_html__( 'Tour User Review Categories', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_single_user_review]',
			'description'    => esc_html__( 'Set on what Users can rate in the comments for all Tours, separate them with ";". This can be overriden in a Single Tour.', 'travelicious' ),
			'priority' => 102,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_single_user_review' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_single_user_review' );

// TOUR SETTINGS PAGE SLUG - tour single
if ( ! function_exists( 'boldthemes_customize_tour_settings_page_slug' ) ) {
	function boldthemes_customize_tour_settings_page_slug( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_settings_page_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_settings_page_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_settings_page_slug', array(
			'label'    => esc_html__( 'Settings Page Slug', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_settings_page_slug]',
			'description'    => esc_html__( 'Choose a single page that you will use to show your single page. This is required if you would like to customize your page furthermore with it\'s settings. It works across all settings used in the theme.', 'travelicious' ),
			'priority' => 160,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_settings_page_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_settings_page_slug' );

// TOUR SLUG - tour search
if ( ! function_exists( 'boldthemes_customize_tour_slug' ) ) {
	function boldthemes_customize_tour_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_slug]', array(
			'type'              => 'option',
			'default'           => BoldThemes_Customize_Default::$data['tour_slug'],
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_slug', array(
			'label'    => esc_html__( 'Tour Slug', 'travelicious' ),
			'description'    => esc_html__( 'This value will be used to generate URLs for your Tour custom post type. To apply changes, go to Settings > Permalinks and click Save Changes.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_slug]',
			'priority' => 170,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_slug' );

// TOUR CATEGORY SLUG
if ( ! function_exists( 'boldthemes_customize_tour_category_slug' ) ) {
	function boldthemes_customize_tour_category_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_category_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_category_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_category_slug', array(
			'label'    => esc_html__( 'Tour Category Slug', 'travelicious' ),
			'description'    => esc_html__( 'This value will be used to generate urls for Tour category custom post type. To apply changes, go to Settings > Permalinks and click Save Changes', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_search_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_category_slug]',
			'priority' => 180,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_category_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_category_slug' );

// SHOW BUTTON FOR POPUP BOOKING AND ENQIRY FORM
if ( ! function_exists( 'boldthemes_customize_tour_contact_form_booking_enquiry_show' ) ) {
	function boldthemes_customize_tour_contact_form_booking_enquiry_show( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking_enquiry_show]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_contact_form_booking_enquiry_show'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_contact_form_booking_enquiry_show', array(
			'label'    => esc_html__( 'Enable Booking & Enquiry Forms - disabling will remove Book This Tour button on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_booking_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking_enquiry_show]',
			'priority' => 175,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_contact_form_booking_enquiry_show' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_contact_form_booking_enquiry_show' );

// TOUR BOOKING FORM
if ( ! function_exists( 'boldthemes_customize_tour_contact_form_booking' ) ) {
	function boldthemes_customize_tour_contact_form_booking( $wp_customize ) {
                    
                $forms = get_posts(array(
                    'post_type'     => 'wpcf7_contact_form',
                    'post_status'   => 'publish',
                    'numberposts'   => -1,
                    'orderby'       => 'post_title',
                    'order'         => 'ASC'
                ));                
                $forms_arr = array();
                $forms_arr[ 0 ] = '';
                foreach( $forms as $form ) {                
                    $forms_arr[ $form->ID ] = $form->post_title;
                }
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_contact_form_booking'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_contact_form_booking', array(
			'label'     => esc_html__( 'Tour Booking Form', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_booking_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking]',
			'priority'  => 180,
			'description' => esc_html__( 'Choose a form you created in Contact Form 7 plugin you would like to use for Booking form. If no form is selected or created it will disable it. Please note that forms defined in Contact > Contact Forms must contain two hidden parameters - [tour tour-id id:booking-tour-id] and [tour_title tour-title id:booking-tour-title]
 in order for mail to be informative for you.', 'travelicious' ),
			'type'      => 'select',
                        'choices'   => $forms_arr
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_contact_form_booking' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_contact_form_booking' );

// SHOW BOOKING FORM
if ( ! function_exists( 'boldthemes_customize_tour_contact_form_booking_show' ) ) {
	function boldthemes_customize_tour_contact_form_booking_show( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking_show]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_contact_form_booking_show'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_contact_form_booking_show', array(
			'label'    => esc_html__( 'Enable Booking Form on Single Tour page', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_booking_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_booking_show]',
			'priority' => 185,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_contact_form_booking_show' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_contact_form_booking_show' );

// TOUR ENQUIRY FORM
if ( ! function_exists( 'boldthemes_customize_tour_contact_form_enquiry' ) ) {
	function boldthemes_customize_tour_contact_form_enquiry( $wp_customize ) {
                    
                $forms = get_posts(array(
                    'post_type'     => 'wpcf7_contact_form',
                    'post_status'   => 'publish',
                    'numberposts'   => -1,
                    'orderby'       => 'post_title',
                    'order'         => 'ASC'
                ));                
                $forms_arr = array();
                $forms_arr[ 0 ] = '';
                foreach( $forms as $form ) {                
                    $forms_arr[ $form->ID ] = $form->post_title;
                }
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_enquiry]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_contact_form_enquiry'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_contact_form_enquiry', array(
			'label'     => esc_html__( 'Tour Enquiry Form', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_booking_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_enquiry]',
			'priority'  => 190,
			'description' => esc_html__( 'Choose a form you created in Contact Form 7 plugin you would like to use for Enquiry form. If no form is selected or created it will disable it. Please note that forms defined in Contact > Contact Forms must contain two hidden parameters - [tour tour-id id:enquiry-tour-id] and [tour_title tour-title id:enquiry-tour-title]
 in order for mail to be informative for you.', 'travelicious' ),
			'type'      => 'select',
                        'choices'   => $forms_arr
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_contact_form_enquiry' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_contact_form_enquiry' );

// SHOW ENQUIRY FORM
if ( ! function_exists( 'boldthemes_customize_tour_contact_form_enquiry_show' ) ) {
	function boldthemes_customize_tour_contact_form_enquiry_show( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_enquiry_show]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_contact_form_enquiry_show'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_contact_form_enquiry_show', array(
			'label'    => esc_html__( 'Enable Enquiry Form on Single Tour page', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_booking_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_contact_form_enquiry_show]',
			'priority' => 195,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_contact_form_enquiry_show' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_contact_form_enquiry_show' );



// TOUR MAP

// LISTING MAP TYPE
if ( ! function_exists( 'boldthemes_customize_tour_map_type' ) ) {
	function boldthemes_customize_tour_map_type( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_map_type]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_map_type'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'tour_map_type', array(
			'label'     => esc_html__( 'Choose Map Type in the Frontend', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[tour_map_type]',
			'description' => esc_html__( 'Select the type of map in the Frontend. Google type displays Google Map with integrated pins, while OpenStreetMap type diplays OSM Map with integrated pins.', 'travelicious' ),
			'priority'  => 1,
			'type'      => 'select',
			'choices'   => array(
				'google' => esc_html__( 'Google Map', 'travelicious' ),
				'osm' => esc_html__( 'OpenStreetMap', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_map_type' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_map_type' );

// GOOGLE MAP API KEY
if ( ! function_exists( 'boldthemes_customize_tour_api_key' ) ) {
	function boldthemes_customize_tour_api_key( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_api_key]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_api_key'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_api_key', array(
			'label'    => esc_html__( 'Google Map Api Key', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_api_key]',
			'priority' => 1,
                        'description' => esc_html__( 'Please set your own google map API key for your site. Get your API key at Google Maps Developer site, at http://developers.google.com.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_api_key' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_api_key' );

// TOUR DEFAULT ZOOM VALUE
if ( ! function_exists( 'boldthemes_customize_tour_max_zoom' ) ) {
	function boldthemes_customize_tour_max_zoom( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_gmap_zoom]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_gmap_zoom'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_gmap_zoom', array(
			'label'    => esc_html__( 'Google Map Default Zoom Level', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_gmap_zoom]',
			'priority' => 2,
			'description' => esc_html__( 'Default zoom level will be used when there\'s one location, if there\'s more then one map will show them all at once. It varies from 0 - zoomed out max, to 18 - zoomed in max.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_max_zoom' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_max_zoom' );

// TOUR DEFAULT LAT VALUE
if ( ! function_exists( 'boldthemes_customize_tour_distance_lat' ) ) {
	function boldthemes_customize_tour_distance_lat( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_gmap_lat]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_gmap_lat'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_gmap_lat', array(
			'label'    => esc_html__( 'Google Map Default Latitude Value', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_gmap_lat]',
			'priority' => 3,
			'description' => esc_html__( 'This is the default Latitude value for your map, when you\'re adding Tour Destinations.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_distance_lat' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_distance_lat' );

// TOUR DEFAULT LNG VALUE
if ( ! function_exists( 'boldthemes_customize_tour_distance_lng' ) ) {
	function boldthemes_customize_tour_distance_lng( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_gmap_lng]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_gmap_lng'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_gmap_lng', array(
			'label'    => esc_html__( 'Google Map Default Longitude Value', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_gmap_lng]',
			'priority' => 4,
			'description' => esc_html__( 'This is the default Longitude value for your map, when you\'re adding Tour Destinations.', 'travelicious' ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_distance_lng' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_distance_lng' );

// LISTING MAP PIN NORMAL
if ( ! function_exists( 'boldthemes_customize_pin_normal' ) ) {
	function boldthemes_customize_pin_normal( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_pin_normal]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_pin_normal'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_image'
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tour_pin_normal', array(
			'label'    => esc_html__( 'Goggle Map Pin Destination', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_pin_normal]',
			'priority' => 5,
			'description' => esc_html__( 'Set a custom image for a map pin that will be used on a Tour Map.', 'travelicious' ),
			'context'  => BoldThemesFramework::$pfx . '_tour_pin_normal'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pin_normal' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_pin_normal' );

// LISTING CUSTOM MAP STYLE
if ( ! function_exists( 'boldthemes_customize_tour_custom_map_style' ) ) {
	function boldthemes_customize_tour_custom_map_style( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[custom_map_style]', array(
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_custom_js'
		));
		$wp_customize->add_control( new BoldThemes_Customize_Textarea_Control( 
			$wp_customize, 
			'custom_map_style', array(
			'label'    => esc_html__( 'Custom Map Style Array', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_map_section',
			'priority' => 7,
                        'description' => esc_html__( 'Set a custom map style by using a custom map style array, find more custom styles at ' , 'travelicious' )
                                                . sprintf(
                                                '<a target="_blank" href="%s">%s</a>.',
                                                esc_url( 'https://snazzymaps.com/' ),
                                                esc_html__( 'snazzymaps.com', 'travelicious' )
                                            ),
			'settings' => BoldThemesFramework::$pfx . '_theme_options[custom_map_style]'
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_custom_map_style' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_custom_map_style' );

// TOUR single TAB information
if ( ! function_exists( 'boldthemes_customize_tour_tabs_information_title' ) ) {
	function boldthemes_customize_tour_tabs_information_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_information_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_information_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_information_title', array(
			'label'    => esc_html__( 'Information Tab Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_information_title]',
			'priority' => 1,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Information', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_information_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_information_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator' ) ) {
	function boldthemes_customize_tour_tabs_separator( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator',
                            array(
                                    'label'    => esc_html__( 'Tour Plan Tab', 'travelicious' ),
                                    'priority' => 1,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator' );

// TOUR single TAB tour plan
if ( ! function_exists( 'boldthemes_customize_tour_tabs_tour_plan_title' ) ) {
	function boldthemes_customize_tour_tabs_tour_plan_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_tour_plan_title', array(
			'label'    => esc_html__( 'Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_title]',
			'priority' => 2,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Tour Plan', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_tour_plan_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_tour_plan_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_tour_plan_hide' ) ) {
	function boldthemes_customize_tour_tabs_tour_plan_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_tour_plan_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_hide]',
			'priority' => 3,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_tour_plan_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_tour_plan_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_tour_plan_order' ) ) {
	function boldthemes_customize_tour_tabs_tour_plan_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_tour_plan_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_tour_plan_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_tour_plan_order]',
			'priority' => 4,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_tour_plan_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_tour_plan_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator4' ) ) {
	function boldthemes_customize_tour_tabs_separator4( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator4', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator4',
                            array(
                                    'label'    => esc_html__( 'Location Tab', 'travelicious' ),
                                    'priority' => 4,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator4' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator4' );

// TOUR single TAB location
if ( ! function_exists( 'boldthemes_customize_tour_tabs_location_title' ) ) {
	function boldthemes_customize_tour_tabs_location_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_location_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_location_title', array(
			'label'    => esc_html__( 'Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_title]',
			'priority' => 5,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Location', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_location_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_location_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_location_hide' ) ) {
	function boldthemes_customize_tour_tabs_location_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_location_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_location_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_hide]',
			'priority' => 6,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_location_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_location_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_location_order' ) ) {
	function boldthemes_customize_tour_tabs_location_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_location_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_location_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_location_order]',
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'priority' => 7,
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_location_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_location_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator7' ) ) {
	function boldthemes_customize_tour_tabs_separator7( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator7', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator7',
                            array(
                                    'label'    => esc_html__( 'Gallery Tab', 'travelicious' ),
                                    'priority' => 7,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator7' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator7' );

// TOUR single TAB gallery
if ( ! function_exists( 'boldthemes_customize_tour_tabs_gallery_title' ) ) {
	function boldthemes_customize_tour_tabs_gallery_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_gallery_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_gallery_title', array(
			'label'    => esc_html__( 'Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_title]',
			'priority' => 8,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Gallery', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_gallery_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_gallery_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_gallery_hide' ) ) {
	function boldthemes_customize_tour_tabs_gallery_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_gallery_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_gallery_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_hide]',
			'priority' => 9,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_gallery_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_gallery_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_gallery_order' ) ) {
	function boldthemes_customize_tour_tabs_gallery_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_gallery_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_gallery_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_gallery_order]',
			'priority' => 10,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_gallery_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_gallery_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator10' ) ) {
	function boldthemes_customize_tour_tabs_separator10( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator10', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator10',
                            array(
                                    'label'    => esc_html__( 'Reviews Tab', 'travelicious' ),
                                    'priority' => 10,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator10' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator10' );

// TOUR single TAB reviews
if ( ! function_exists( 'boldthemes_customize_tour_tabs_reviews_title' ) ) {
	function boldthemes_customize_tour_tabs_reviews_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_reviews_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_reviews_title', array(
			'label'    => esc_html__( 'Reviews Tab Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_title]',
			'priority' => 11,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Reviews', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_reviews_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_reviews_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_reviews_hide' ) ) {
	function boldthemes_customize_tour_tabs_reviews_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_reviews_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_reviews_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_hide]',
			'priority' => 12,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_reviews_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_reviews_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_reviews_order' ) ) {
	function boldthemes_customize_tour_tabs_reviews_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_reviews_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_reviews_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_reviews_order]',
			'priority' => 13,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_reviews_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_reviews_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator13' ) ) {
	function boldthemes_customize_tour_tabs_separator13( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator13', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator13',
                            array(
                                    'label'    => esc_html__( 'Additional Info Tab', 'travelicious' ),
                                    'priority' => 13,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator13' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator13' );

// TOUR single TAB additiona info
if ( ! function_exists( 'boldthemes_customize_tour_tabs_additional_info_title' ) ) {
	function boldthemes_customize_tour_tabs_additional_info_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_additional_info_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_additional_info_title', array(
			'label'    => esc_html__( 'Additional Info Tab Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_title]',
			'priority' => 14,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Additional Info', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_additional_info_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_additional_info_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_additional_info_hide' ) ) {
	function boldthemes_customize_tour_tabs_additional_info_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_additional_info_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_additional_info_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_hide]',
			'priority' => 15,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_additional_info_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_additional_info_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_additional_info_order' ) ) {
	function boldthemes_customize_tour_tabs_additional_info_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_additional_info_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_additional_info_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_additional_info_order]',
			'priority' => 16,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_additional_info_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_additional_info_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator16' ) ) {
	function boldthemes_customize_tour_tabs_separator16( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator16', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator16',
                            array(
                                    'label'    => esc_html__( 'Similar Tours Tab', 'travelicious' ),
                                    'priority' => 16,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator16' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator16' );

// TOUR single TAB similar tours
if ( ! function_exists( 'boldthemes_customize_tour_tabs_similar_tours_title' ) ) {
	function boldthemes_customize_tour_tabs_similar_tours_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_similar_tours_title', array(
			'label'    => esc_html__( 'Similar Tours Tab Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_title]',
			'priority' => 17,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Similar Tours', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_similar_tours_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_similar_tours_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_similar_tours_hide' ) ) {
	function boldthemes_customize_tour_tabs_similar_tours_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_similar_tours_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_hide]',
			'priority' => 18,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_similar_tours_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_similar_tours_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_similar_tours_order' ) ) {
	function boldthemes_customize_tour_tabs_similar_tours_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_similar_tours_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_similar_tours_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_similar_tours_order]',
			'priority' => 19,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_similar_tours_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_similar_tours_order' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_separator19' ) ) {
	function boldthemes_customize_tour_tabs_separator19( $wp_customize ) {
            $wp_customize->add_setting( BoldThemesFramework::$pfx . '_tabs_separator19', array(
                    'sanitize_callback' => 'themename_sanitize',
            ) );
            $wp_customize->add_control(                    
                    new Travelicious_Separator_Control(
                            $wp_customize,
                            BoldThemesFramework::$pfx . '_tabs_separator19',
                            array(
                                    'label'    => esc_html__( 'Custom Tab', 'travelicious' ),
                                    'priority' => 19,
                                    'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
                            )
                    )
            );
        }
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_separator19' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_separator19' );

// TOUR single TAB custom
if ( ! function_exists( 'boldthemes_customize_tour_tabs_custom_tab_title' ) ) {
	function boldthemes_customize_tour_tabs_custom_tab_title( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_title]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_title'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_custom_tab_title', array(
			'label'    => esc_html__( 'Custom Tab Title', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_title]',
			'priority' => 20,
			'description' => esc_html__( 'You can rename this tab here by changing it\'s name. If you\'re having multilanguage site, preferred option would be to translate this tab.', 'travelicious' ),
                        'input_attrs' => array(
                            'placeholder' => esc_html__( 'Custom', 'travelicious' ),
                        ),
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_custom_tab_title' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_custom_tab_title' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_custom_hide' ) ) {
	function boldthemes_customize_tour_tabs_custom_hide( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_hide]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_hide'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'tour_tabs_custom_tab_hide', array(
			'label'    => esc_html__( 'Hide this Tab on all Single Tour pages.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_hide]',
			'priority' => 21,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_custom_hide' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_custom_hide' );

if ( ! function_exists( 'boldthemes_customize_tour_tabs_custom_order' ) ) {
	function boldthemes_customize_tour_tabs_custom_order( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_order]', array(
			'default'           => BoldThemes_Customize_Default::$data['tour_tabs_custom_tab_order'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'tour_tabs_custom_tab_order', array(
			'label'    => esc_html__( 'Tab Order', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_tour_tabs_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[tour_tabs_custom_tab_order]',
			'priority' => 22,
			'description' => esc_html__( 'Select value from 1-7 for tab sorting (1 - first, 7 - last).', 'travelicious' ),                        
			'type'      => 'select',
			'choices'   => array(
                                '1' => esc_html__( '1', 'travelicious' ),
				'2' => esc_html__( '2', 'travelicious' ),
				'3' => esc_html__( '3', 'travelicious' ),
				'4' => esc_html__( '4', 'travelicious' ),
				'5' => esc_html__( '5', 'travelicious' ),
				'6' => esc_html__( '6', 'travelicious' ),
                                '7' => esc_html__( '7', 'travelicious' )	
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_tour_tabs_custom_order' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_tour_tabs_custom_order' );

// osm_map_style
if ( ! function_exists( 'boldthemes_customize_osm_map_style' ) ) {
	function boldthemes_customize_osm_map_style( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[osm_map_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['osm_map_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'osm_map_style', array(
			'label'     => esc_html__( 'Choose OSM Map Style', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_tour_map_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[osm_map_style]',
			'priority'  => 8,
			'description' => esc_html__( 'Set a OSM Map Style by choosing one of the predefined ones.', 'travelicious' ),
			'type'      => 'select',
			'choices'   => array(
				'1'		=> esc_html__( 'Style 1 - Mapnik OSM', 'travelicious' ),
				'2'		=> esc_html__( 'Style 2 - Wikimedia', 'travelicious' ),
                                '3'		=> esc_html__( 'Style 3 - OSM Hot', 'travelicious' ),
				'4'		=> esc_html__( 'Style 4 - Stamen Watercolor', 'travelicious' ),
                                '5'		=> esc_html__( 'Style 5 - Stamen Terrain', 'travelicious' ),
                                '6'		=> esc_html__( 'Style 6 - Stamen Toner', 'travelicious' ),
                                '7'		=> esc_html__( 'Style 7 - Carto Dark', 'travelicious' ),
                                '8'		=> esc_html__( 'Style 8 - Carto Light', 'travelicious' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_osm_map_style' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_osm_map_style' );

boldthemes_add_mb( array( 'id' => 'tour', 'title' => esc_html__( 'Override Settings', 'travelicious' ), 'post_type' => 'tour', 'autosave' => true ) );
boldthemes_add_mb_field( 
	array(
		'mb_id'    => 'tour',
		'field_id' => 'override',
		'name'     => esc_html__( 'Override Global Settings', 'travelicious' ),
		'type'     => 'boldthemestext',
		'clone'    => true
	)
);


