<?php
$paged = bt_tour_get_current_page();   

bt_get_tour_options_data();
bt_get_tour_list_data();

// tour list - no columns if btListDesignList
if ( BoldThemesFrameworkTemplate::$tour_single_design == 'btListDesignList' ) {
    BoldThemesFrameworkTemplate::$tour_similar_tours_list_columns = '';
}

// search get params
$params = array();
if (isset($_GET)){	
	foreach($_GET as $field => $value) {
		$params[$field] = $value;
	}
} 

bt_get_tour_params_data( $params );

BoldThemesFrameworkTemplate::$tours  = boldthemes_get_query_items(
        array(
                'search_limit'       => 0,
                'search_orderby'     => BoldThemesFrameworkTemplate::$search_orderby,
                'search_order'       => BoldThemesFrameworkTemplate::$search_order,
                'search_keyword'     => BoldThemesFrameworkTemplate::$search_keyword,            
                'search_destination' => BoldThemesFrameworkTemplate::$search_destination,
                'search_start_date'  => BoldThemesFrameworkTemplate::$search_start_date,
                'search_price_from'  => BoldThemesFrameworkTemplate::$search_price_from,
                'search_price_to'    => BoldThemesFrameworkTemplate::$search_price_to,
                'search_categories'  => BoldThemesFrameworkTemplate::$search_categories,
                'paged'              => $paged,
                'posts_per_page'     => BoldThemesFrameworkTemplate::$posts_per_page,
                'search_show_months' => BoldThemesFrameworkTemplate::$search_show_months,
                'search_date_format' => BoldThemesFrameworkTemplate::$search_date_format
        ) 
);

wp_register_script( 'tour-search-js', get_template_directory_uri() . '/views/tour/js/search.js' );
wp_localize_script( 'tour-search-js', 'ajax_object', array(
            'ajax_url'			=> admin_url( 'admin-ajax.php' ), 
            'search_limit'              => BoldThemesFrameworkTemplate::$search_limit,
            'search_type'               => BoldThemesFrameworkTemplate::$tour_search_action_type,
            'search_order'              => BoldThemesFrameworkTemplate::$search_order,
            'search_orderby'            => BoldThemesFrameworkTemplate::$search_orderby,
            'paged'                     => $paged,
            'listing_view'              => BoldThemesFrameworkTemplate::$search_orderby,
            'posts_per_page'            => BoldThemesFrameworkTemplate::$posts_per_page,
	)
);
wp_enqueue_script( 'tour-search-js' );





