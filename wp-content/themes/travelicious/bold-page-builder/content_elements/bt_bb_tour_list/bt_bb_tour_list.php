<?php

class bt_bb_tour_list extends BT_BB_Element {
    
        function __construct() {
		parent::__construct();
	}
        
        function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'view_type'     => '',
			'tour'          => '',
			'category'      => '',
			'destination'   => '',
			'number'        => '',
			'columns'       => '',
			'gap'           => '',
			'format'        => '',
			'sorting'       => '',
		) ), $atts, $this->shortcode ) );
                
		if ( ! function_exists( 'bt_get_tour_options_data' ) ) {
			return '';
		}

		$view_type      = sanitize_text_field( $view_type );
		$tour           = sanitize_text_field($tour);//slugs
		$category       = sanitize_text_field( $category );//slugs
		$destination    = sanitize_text_field( $destination );//ids
		$number         = sanitize_text_field( $number );
		$columns        = sanitize_text_field( $columns );
		$gap            = sanitize_text_field( $gap );
		$format         = sanitize_text_field( $format );
		$sorting        = sanitize_text_field( $sorting );
                
                
                
		if ( $number > 1000 || $number == '' ) {
				$number = 1000;
		} else if ( $number < 1 ) {
				$number = 1;
		} 
                
		wp_enqueue_script( 'jquery-masonry' );
		wp_enqueue_script( 
				'bt_bb_tour_list',
				get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_tour_list/bt_bb_tour_list.js',
				array( 'jquery' )
		);
		wp_localize_script( 'bt_bb_tour_list', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

		wp_enqueue_style( 
				'bt_bb_post_tiles', 
				get_template_directory_uri() . '/bold-page-builder/content_elements_misc/css/bt_bb_tour_list.css', 
				array(), 
				false, 
				'screen' 
		);
                
		if ( $view_type == 'btListDesignTiles' ) {
			$class[] = 'bt_bb_grid_container';
			$class[] = 'bt_bb_masonry_tour_tiles';

		}else{
			$class = array( $this->shortcode );
			$class[] = 'btTourList';
                    
			if ( $view_type != '' ) {
				$class[] = $view_type;
			}
		}
                
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
                
		if ( $view_type == 'btListDesignList' ) {
			$columns = '';
		}
                                
		BoldThemesFrameworkTemplate::$search_categories     = bt_get_tour_categories_by_slugs( $category );
		BoldThemesFrameworkTemplate::$search_destination    = bt_get_tour_destinations_by_slugs( $destination );

		BoldThemesFrameworkTemplate::$search_orderby        = 'post_date';
		BoldThemesFrameworkTemplate::$search_order          = 'DESC';
                
		if ( $sorting != '' && intval($sorting) > -1 ){
				switch ( $sorting ){
						case '0':	$listing_orderby = 'post_date';	
										$listing_order = 'ASC';break;
						case '1':	$listing_orderby = 'post_date';	
										$listing_order = 'DESC';break;
						case '2':	$listing_orderby = 'post_title';
										$listing_order = 'ASC';	break;
						case '3':	$listing_orderby = 'post_title';
										$listing_order = 'DESC';break;
						case '4':	$listing_orderby = 'price_from';     
										$listing_order = 'ASC';break;
						case '5':	$listing_orderby = 'price_from';     
										$listing_order = 'DESC';break;
						default:	$listing_orderby = 'post_date';
										$listing_order = 'DESC';break;
				}

				BoldThemesFrameworkTemplate::$search_orderby    = $listing_orderby;
				BoldThemesFrameworkTemplate::$search_order      = $listing_order;
		}
			//serach tours
			BoldThemesFrameworkTemplate::$tours  = boldthemes_get_query_items(
					array(
							'posts_per_page'     => $number,
							'search_orderby'     => BoldThemesFrameworkTemplate::$search_orderby,
							'search_order'       => BoldThemesFrameworkTemplate::$search_order,            
							'search_destination' => BoldThemesFrameworkTemplate::$search_destination,//slugs
							'search_categories'  => BoldThemesFrameworkTemplate::$search_categories,//ids
							'search_tour_slug'   => $tour//slugs
					) 
			);
                
		if ( $tour != '' ) {
			global $search_tour_names;
			$search_tour_names = explode( ';', $tour );                        
			$search_tour_names = array_filter($search_tour_names, function($value) { return $value !== ''; });
			usort( BoldThemesFrameworkTemplate::$tours, "bt_tour_list_cmp"); 
		}
                                        
		$output = '';  
		if ( $view_type == 'btListDesignTiles' ){                    

			$columns = substr_replace($columns, '', 0, 6);
			$columns = substr_replace($columns, '', 1, 6);

			$gap = strtolower	(substr_replace($gap, '', 0, 13));

			if ( $columns != '' ) {
				$class[] = $this->prefix . 'columns' . '_' . $columns;
			}

			if ( $gap != '' ) {
					$class[] = $this->prefix . 'gap' . '_' . $gap;
			}

			$style_attr = ' ' . 'style="height: auto;"';
			$output .= '<div class="bt_bb_post_grid_loader"></div>';
			$output .= '<div class="bt_bb_grid_hide bt_bb_masonry_tour_list_content" data-number-posts="' . esc_attr( $number ) . '" data-format-posts="' . esc_attr( $format ) . '" data-category-posts="' . esc_attr( $category ) . '"><div class="bt_bb_grid_sizer bt_bb_grid_sizer masonry-brick"></div>';
				ob_start();
					   boldthemes_get_tour_tiles_html( $view_type, $gap, $columns, $format, false);
				   $output .= ob_get_clean();
				  //if( ob_get_level() > 0 ) ob_flush();
			$output .= '</div>';

			$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-columns="' . esc_attr( $columns ) . '">' . $output . '</div>';                
		 }else{                   
			$output .= '<div class="listing_results gutter" id="bt_bb_tour_list_container">';
					ob_start();
							boldthemes_get_tour_list_html( $view_type, $gap, $columns, false);
						$output .= ob_get_clean();
						//if( ob_get_level() > 0 ) ob_flush();
			$output .= '</div>';

			$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-columns="' . esc_attr( $columns ) . '">' . $output . '</div>';
		}
                
        $output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
                
        }
        
        function map_shortcode() {
            
            $tours = get_posts([
                'post_type' => 'tour',
                'post_status' => 'publish',
                'numberposts' => -1,
                'orderby'    => 'post_name',
                'order'    => 'ASC'
            ]);             
            $tours_slug_arr = array();
            foreach( $tours as $tour ) {  
                $tours_slug_arr[ $tour->post_name ] = $tour->ID;
            }
            
            bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Tour List', 'travelicious' ), 'description' => esc_html__( 'List of Tours Presentation', 'travelicious' ), 'container' => 'vertical', 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
                    'params' => array(
                            array( 'param_name' => 'view_type', 'type' => 'dropdown', 'heading' => esc_html__( 'Tour View Type', 'travelicious' ), 'preview' => true,
                                    'value' => array(
                                            esc_html__( 'List', 'travelicious' ) => 'btListDesignList',
                                            esc_html__( 'Regular', 'travelicious' ) => 'btListDesignRegular',
                                            esc_html__( 'Gallery', 'travelicious' ) => 'btListDesignGallery',
                                            esc_html__( 'Tiles', 'travelicious' ) => 'btListDesignTiles'
                                    )
                            ),
                            array( 'param_name' => 'tour', 'type' => 'textfield', 'heading' => esc_html__( 'Tour', 'travelicious' ), 'description' => esc_html__( 'Enter tour slug or tour slugs separated by ; or leave empty to show all. If tour slug is entered, categories and destinations leave empty. Order for list will be by entered slugs.', 'travelicious' ) ),
                            array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'travelicious' ), 'description' => esc_html__( 'Enter category slug or categories slugs separated by ; or leave empty to show all', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'destination', 'type' => 'textfield', 'heading' => esc_html__( 'Destination', 'travelicious' ), 'description' => esc_html__( 'Enter destination slug or destinations slugs separated by ; or leave empty to show all', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => esc_html__( 'Number of items', 'travelicious' ), 'description' => esc_html__( 'Enter number of items or leave empty to show all (up to 1000)', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Format', 'travelicious' ) ),
                            array( 'param_name' => 'columns', 'type' => 'dropdown', 'heading' => esc_html__( 'Columns', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Format', 'travelicious' ),
					'value' => array(
						esc_html__( '2', 'travelicious' ) => 'btList2PerRow',
                                                esc_html__( '3', 'travelicious' ) => 'btList3PerRow',
                                                esc_html__( '4', 'travelicious' ) => 'btList4PerRow',
                                                esc_html__( '5', 'travelicious' ) => 'btList5PerRow'
					)
                            ),
                            array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'travelicious' ),'preview' => true, 'group' => esc_html__( 'Format', 'travelicious' ),
                                    'value' => array(
                                            esc_html__( 'No Gap', 'travelicious' )   => 'btTourListGapNoGap',
                                            esc_html__( 'Small', 'travelicious' )    => 'btTourListGapSmall',
                                            esc_html__( 'Normal', 'travelicious' )   => 'btTourListGapNormal',
                                            esc_html__( 'Large', 'travelicious' )    => 'btTourListGapLarge'
                                    )
                            ),
                            array( 'param_name' => 'format', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'Tiles format', 'travelicious' ), 'description' => esc_html__( 'e.g. 11, 21, 12, 22', 'travelicious' ), 'preview' => true, 'group' => esc_html__( 'Format', 'travelicious' )
                            ),
                            array( 'param_name' => 'sorting', 'type' => 'dropdown', 'heading' => esc_html__( 'Sort by', 'travelicious' ),'preview' => true,
                                    'value' => array(
                                            esc_html__( 'Sort by date ascending', 'travelicious' )       => '0',
                                            esc_html__( 'Sort by date descending', 'travelicious' )      => '1',
                                            esc_html__( 'Sort by name - A to Z', 'travelicious' )        => '2',
                                            esc_html__( 'Sort by name - Z to A', 'travelicious' )        => '3',
                                            esc_html__( 'Sort by price - low to high', 'travelicious' )  => '4',
                                            esc_html__( 'Sort by price - high to low', 'travelicious' )  => '5'
                                    )
                            ),
                    )
            ) );
             
            
        }
        
}

