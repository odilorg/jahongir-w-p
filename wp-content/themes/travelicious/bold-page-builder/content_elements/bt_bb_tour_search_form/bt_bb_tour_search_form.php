<?php

class bt_bb_tour_search_form extends BT_BB_Element {
    
        function __construct() {
		parent::__construct();
	}

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(                        
			'label_keyword'         => '',
			'label_destination'     => '',
			'label_departure_date'  => '',
                        'label_price_from'      => '',
                        'label_price_to'        => '',
                        'label_search_button'   => '',
                        'show_keyword'          => '',
                        'show_departure_date'   => '',
                        'show_prices_filters'   => '',
                        'show_categories'       => '',                        
		) ), $atts, $this->shortcode ) ); 
               
                if ( ! function_exists( 'bt_get_tour_options_data' ) ) {
                    return '';
                }
                
                $label_keyword          = sanitize_text_field( $label_keyword );
                $label_destination      = sanitize_text_field( $label_destination );                
                $label_departure_date   = sanitize_text_field( $label_departure_date );                
                $label_price_from       = sanitize_text_field( $label_price_from );
                $label_price_to         = sanitize_text_field( $label_price_to );
                $label_search_button    = sanitize_text_field( $label_search_button );
                $show_keyword           = sanitize_text_field( $show_keyword );
                $show_departure_date    = sanitize_text_field( $show_departure_date );
                $show_prices_filters    = sanitize_text_field( $show_prices_filters );
                $show_categories        = sanitize_text_field( $show_categories );                
                
                $el_style       = sanitize_text_field( $el_style );
		$el_class       = sanitize_text_field( $el_class );                
                
                $class = array( $this->shortcode );               
                
                if ( $el_class != '' ) {
			$class[] = $el_class;
		}	
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
                
                $class = apply_filters( $this->shortcode . '_class', $class, $atts );                
                
                $output = $this->get_html( $atts, $id_attr, $class, $style_attr );
		
		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
                
        }
        
        function map_shortcode() {
            bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Tour Search Form', 'travelicious' ), 'description' => esc_html__( 'Tour Search Form', 'travelicious' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_headline' => true, 'bt_bb_text' => true, 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_service_icon' => true, 'bt_bb_image' => true, 'bt_bb_separator' => true, 'bt_bb_service' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
                    'params' => array(
                            array( 'param_name' => 'label_keyword', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Keyword', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'label_destination', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Destination', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'label_departure_date', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Departure Date', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'label_price_from', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Price From', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'label_price_to', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Price To', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'label_search_button', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Search Button', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'show_keyword',  'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'travelicious' ) => 'show_keyword' ), 'heading' => esc_html__( 'Show Keyword Filter', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Filters', 'travelicious' ) ),
                            array( 'param_name' => 'show_departure_date',  'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'travelicious' ) => 'show_departure_date' ), 'heading' => esc_html__( 'Show Departure Date Filter', 'travelicious' ), 'preview' => true ,'group' => esc_html__( 'Filters', 'travelicious' ) ),
                            array( 'param_name' => 'show_prices_filters',  'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'travelicious' ) => 'show_prices_filters' ), 'heading' => esc_html__( 'Show Prices Filter', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Filters', 'travelicious' ) ),                           
                            array( 'param_name' => 'show_categories',  'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'travelicious' ) => 'show_categories' ), 'heading' => esc_html__( 'Show Categories Filter', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Filters', 'travelicious' ) ),
                            
                    )
            ) );
	}
                
        function get_html( $atts, $id_attr, $class, $style_attr ) {             
            $label_keyword          = $atts['label_keyword'];
            $label_destination      = $atts['label_destination'];            
            $label_departure_date   = $atts['label_departure_date'];            
            $label_price_from       = $atts['label_price_from'];
            $label_price_to         = $atts['label_price_to'];
            $label_search_button    = $atts['label_search_button'];
            $show_keyword           = $atts['show_keyword'];
            $show_departure_date    = $atts['show_departure_date'];
            $show_prices_filters    = $atts['show_prices_filters'];
            $show_categories        = $atts['show_categories'];
            
            $el_style               = $atts['el_style'];
            $el_class               = $atts['el_class'];
             
            $form_code =  md5( $label_keyword . $label_destination . $label_departure_date . $label_price_from . $label_price_to . $label_search_button . mt_rand() );            
            
            $listing_form_action_page   = get_post_type_archive_link( 'tour' ) ? get_post_type_archive_link( 'tour' ) : '#' ;

            $tour_single_design                 = function_exists( 'boldthemes_get_tour_list_type' ) ? boldthemes_get_tour_list_type() : '';
            $tour_similar_tours_list_gap        = function_exists( 'boldthemes_get_tour_list_gap' ) ? boldthemes_get_tour_list_gap() : '';
            $tour_similar_tours_list_columns    = function_exists( 'boldthemes_get_tour_list_columns' ) ? boldthemes_get_tour_list_columns() : 'btList2PerRow';
            
            bt_get_tour_options_data();
            bt_get_tour_list_data();
            
            $paged = bt_tour_get_current_page();
            
            BoldThemesFrameworkTemplate::$tour_search_show_only_months      = boldthemes_get_option( 'tour_search_show_only_months' ) != ''
                    ? boldthemes_get_option( 'tour_search_show_only_months' ) : BoldThemes_Customize_Default::$data['tour_search_show_only_months'];
            $tour_search_show_only_months = BoldThemesFrameworkTemplate::$tour_search_show_only_months ? 1 : 0;            
           
            BoldThemesFrameworkTemplate::$datepicker_format = bt_set_wp_to_datepicker_format( get_option( 'date_format' ), $tour_search_show_only_months );
            if ( wp_script_is( 'travelicious-js', 'enqueued' ) ) {
                wp_dequeue_script( 'travelicious-js' );
                wp_register_script( 'travelicious-js-shortcode', get_parent_theme_file_uri( 'js/travelicious.js'), array( 'jquery' ), '', true );
                wp_localize_script( 'travelicious-js-shortcode', 'travelicious_js_object_shortcode', array(
                            'show_only_months'      => $tour_search_show_only_months,
                            'label_current_month'   => esc_html__( 'Current month', 'travelicious' ),
                            'label_clear'           => esc_html__( 'Clear', 'travelicious' ),
                            'date_format'           => bt_set_wp_to_datepicker_format( get_option( 'date_format' ),$tour_search_show_only_months ),
                        )
                );
                wp_enqueue_script( 'travelicious-js-shortcode' ); 
            }
            
            if ( !wp_script_is( 'tour-search-js', 'enqueued' ) ) {
                wp_register_script( 'tour-search-js', get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_tour_search_form/bt_bb_tour_search_form.js' );
                wp_localize_script( 'tour-search-js', 'ajax_object', array(
                            'ajax_url'                  => admin_url( 'admin-ajax.php' ), 
                            'search_limit'              => BoldThemesFrameworkTemplate::$search_limit,
                            'search_type'               => BoldThemesFrameworkTemplate::$tour_search_action_type,
                            'search_order'              => BoldThemesFrameworkTemplate::$search_order,
                            'search_orderby'            => BoldThemesFrameworkTemplate::$search_orderby,
                            'paged'                     => $paged,
                            'listing_view'              => BoldThemesFrameworkTemplate::$search_orderby,                            
                        )
                );
                wp_enqueue_script( 'tour-search-js' );
            }
            
            if ( !wp_style_is( 'tour-jquery-ui-css', 'enqueued' ) ){
                wp_enqueue_style( 'tour-jquery-ui-css', "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css", array(), false, 'screen' );
            }
            if ( !wp_script_is( 'tour-jquery-ui-js', 'enqueued' ) ) {
                wp_enqueue_script( 'tour-jquery-ui-js', "https://code.jquery.com/ui/1.12.1/jquery-ui.js", array( 'jquery' ), '', true );
            }
            
            $output = '';
            
            
        $output .= '
            <form id="tour_search_form" name="tour_search_form" class="btSearchFormShortcode"  action="'. esc_attr($listing_form_action_page).'" method="get">
                <input type="hidden" name="bt_tour_search_list_count" id="bt_tour_search_list_count" value="'. BoldThemesFrameworkTemplate::$tour_list_count.'" />
                <input type="hidden" name="bt_tour_search_list_view"  id="bt_tour_search_list_view"  value="'. BoldThemesFrameworkTemplate::$tour_list_view.'" />
                <input type="hidden" name="bt_tour_search_type"  id="bt_tour_search_type"  value="'. BoldThemesFrameworkTemplate::$tour_search_action_type.'" />    
                <input type="hidden" name="bt_tour_single_design"  id="bt_tour_single_design"  value="'. esc_attr( $tour_single_design ) .'" />
                <input type="hidden" name="bt_tour_search_list_gap"  id="bt_tour_search_list_gap"  value="'. esc_attr( $tour_similar_tours_list_gap ) .'" />
                <input type="hidden" name="bt_tour_search_list_columns"  id="bt_tour_search_list_columns"  value="'. esc_attr( $tour_similar_tours_list_columns ) .'" />
                <input type="hidden" name="bt_tour_search_show_months"  id="bt_tour_search_show_months"  value="'. esc_attr( $tour_search_show_only_months ) .'" />
                <input type="hidden" name="bt_tour_search_date_format"  id="bt_tour_search_date_format"  value="'. bt_set_wp_to_datepicker_format( get_option( 'date_format' ),$tour_search_show_only_months ).'" />
                <div class="tour_search gutter">
                        <div class="port">
                                <div class="btSearchToursRow">';
                                        if ( $show_keyword ){ 
                                           $output .= '<div class="btSearchField btFieldKeyword">
                                                   <label for="bt_tour_search_keyword">'. $label_keyword.'</label>
                                                   <div class="btFieldWrapper">
                                                           <input id="bt_tour_search_keyword" name="bt_tour_search_keyword" type="text" value="" placeholder="' . esc_attr( $label_keyword ) . '" />
                                                   </div>
                                           </div>';
                                        } 
                                        $output .= '<div class="btSearchField btFieldDestination">
                                                <label for="bt_tour_search_destination">'. $label_destination.'</label>
                                                <div class="btFieldWrapper">
                                                        <span class="bt_tour_search_destination_span"></span>
                                                        <input id="bt_tour_search_destination" name="bt_tour_search_destination" type="text" value="" placeholder="' . esc_attr( $label_destination ) . '" />
                                                        <div id="auto-bt_tour_search_destination"></div>
                                                </div>
                                        </div>';
                                        if ( $show_departure_date ){ 
                                             $output .= '<div class="btSearchField btFieldDate">
                                                    <label for="bt_tour_search_date">'. $label_departure_date.'</label>
                                                    <div class="btFieldWrapper">
                                                            <span class="bt_tour_search_date_span"></span>
                                                            <input id="bt_tour_search_date" name="bt_tour_search_date" type="text" placeholder="' . esc_attr( $label_departure_date ) . '" value="" onfocus="" onblur="" />
                                                    </div>
                                            </div>';
                                         } 
                                        if ( $show_prices_filters ){
                                            $output .= '<div class="btSearchField btFieldPrice btFieldPriceFrom">
                                                    <label for="bt_tour_search_price_from">'.  $label_price_from.'</label>
                                                    <input id="bt_tour_search_price_from" name="bt_tour_search_price_from" type="number" value="" min="0" placeholder="' . esc_attr( $label_price_from ) . '" step="any" />
                                            </div>
                                            <div class="btSearchField btFieldPrice btFieldPriceTo">
                                                    <label for="bt_tour_search_price_to">'.  $label_price_to .'</label>
                                                    <input id="bt_tour_search_price_to" name="bt_tour_search_price_to" type="number" value="" min="0" placeholder="' . esc_attr( $label_price_to ) . '" step="any" />
                                            </div>';
                                         } 
                                        $output .= '<div class="btSearchField btSearchButton">
                                                <button  id="bt_bb_tour_search_submit"><span>'. $label_search_button.'</span></button>
                                        </div>
                                </div>';
                                if ( $show_categories ){ 
                                    $output .= '<div class="btSearchToursRow btSearchCategories">';
                                            
                                                $output .= '<div class="btCategories">
                                                        <div class="btLabelCategories">'. esc_html__( 'Categories', 'travelicious' ).':</div>';
                                                       
                                                        foreach ( BoldThemesFrameworkTemplate::$tour_categories as $tour_category ) { 
                                                            $category_link = get_term_link($tour_category);
                                                            $checked =  '';
                                                            $tour_category_name = preg_replace('/\s+/', '_', $tour_category->name);
                                                                $output .= '<div class="btSingleCategory">
                                                                       <input type="checkbox" id="bt_tour_search_category_'. $tour_category_name.'" name="bt_tour_search_category[]"  value="'. esc_attr($tour_category->term_id).'" '. $checked.'/>
                                                                       <label for="bt_tour_search_category_'. $tour_category_name.'">'.$tour_category->name.'</label>
                                                               </div>';
                                                           
                                                        }
                                                $output .= '</div>';
                                                                              
                                    $output .= '</div>';
                                  } 
                        $output .= '</div>';
                $output .= '</div>';
             $output .= '</form>';
        
        return $output;
    }
}
