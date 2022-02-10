<?php

class bt_bb_tour_single extends BT_BB_Element {
    
        function __construct() {
		parent::__construct();
	}
        
        function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
                        'tour_id'           => '',
                        'view_type'         => '',
		) ), $atts, $this->shortcode ) );
                
		if ( ! function_exists( 'bt_get_tour_options_data' ) ) {
			return '';
		}


		$view_type      = sanitize_text_field( $view_type );
		$tour_id        = sanitize_text_field( $tour_id );

		$class = array( $this->shortcode );
		$class_type = array( );

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
                
        if ( $view_type != '' ) {
			$class_type[] = $view_type;
		}
                
                
		$output = '';
		$html   = '';

		if ( $view_type == 'btListDesignList' ) {
			ob_start();
			boldthemes_get_tour_single_block_list_html( $tour_id, $view_type );
			$html = ob_get_clean();
			//if( ob_get_level() > 0 ) ob_flush();
		}else{
			ob_start();
			boldthemes_get_tour_single_block_square_html( $tour_id, $view_type );
			$html = ob_get_clean();
			//if( ob_get_level() > 0 ) ob_flush();
		}
		$output .= $html;

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '><div class="btTourList ' . implode( ' ', $class_type ) . '">' . $output . '</div></div>';
                
        $output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
                
        }
        
        function map_shortcode() {
            
            $tours = get_posts([
                'post_type' => 'tour',
                'post_status' => 'publish',
                'numberposts' => -1,
                'orderby'    => 'post_title',
                'order'    => 'ASC'
            ]);             
            $tours_arr = array();
            
            foreach( $tours as $tour ) {  
                $tours_arr[ $tour->post_title ] = $tour->ID;
            }
            
            bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Tour Single', 'travelicious' ), 'description' => esc_html__( 'Single Tour Presentation', 'travelicious' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_headline' => true, 'bt_bb_text' => true, 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_service_icon' => true, 'bt_bb_image' => true, 'bt_bb_separator' => true, 'bt_bb_service' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
                    'params' => array(                        
                            array( 'param_name' => 'tour_id', 'type' => 'dropdown', 'heading' => esc_html__( 'Select Single Tour', 'travelicious' ), 'preview' => true,
                                    'value' => $tours_arr
                            ),
                            array( 'param_name' => 'view_type', 'type' => 'dropdown', 'heading' => esc_html__( 'Tour View Type', 'travelicious' ), 'preview' => true,
                                    'value' => array(
                                            esc_html__( 'List', 'travelicious' ) => 'btListDesignList',
                                            esc_html__( 'Regular', 'travelicious' ) => 'btListDesignRegular',
                                            esc_html__( 'Gallery', 'travelicious' ) => 'btListDesignGallery',
                                            esc_html__( 'Tiles', 'travelicious' ) => 'btListDesignTiles'
                                    )
                            ),     
                    )
            ) );
	}
        
}
