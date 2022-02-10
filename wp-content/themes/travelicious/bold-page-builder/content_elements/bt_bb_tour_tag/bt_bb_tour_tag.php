<?php
class bt_bb_tour_tag extends BT_BB_Element {
    
        function __construct() {
		parent::__construct();
	}

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
                        'tag_text'              => '',
                        'horizontal_position'   => '',
                        'vertical_position'     => '',
                        'style'                 => '',
		) ), $atts, $this->shortcode ) );
                
                $tag_text               = sanitize_text_field( $tag_text );
                $horizontal_position    = sanitize_text_field( $horizontal_position );
                $vertical_position      = sanitize_text_field( $vertical_position );
                $style                  = sanitize_text_field( $style );
                
                $class = array( $this->shortcode );
                $style_tag = array();
                
                $class[] = 'btColumnTag';
                
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
		
		if ( $el_style != '' ) {
                        $style_tag[] = $el_style;
		}                
                
                if ( $style != '' ) {
                        $class[] = 'bt_bb_color_' . $style;
		}
                
                if ( $horizontal_position != '' ) {
			$class[] = $this->prefix . 'horizontal_position' . '_' . $horizontal_position;
		}
		
		if ( $vertical_position != '' ) {
			$class[] = $this->prefix . 'vertical_position' . '_' . $vertical_position;
		}
                
                $class = apply_filters( $this->shortcode . '_class', $class, $atts );
                
                $output = '';
                $output .= '<span>' . $tag_text . '</span>';
                
                $output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '" style="' . implode( ' ', $style_tag ) . '">' . $output . '</div>';
                
                $output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
        }
        
        function map_shortcode() {
            bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Ribbon', 'travelicious' ), 'description' => esc_html__( 'Ribbon used for displaying Tour or Destination feature / discount.', 'travelicious' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_headline' => true, 'bt_bb_text' => true, 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_service_icon' => true, 'bt_bb_image' => true, 'bt_bb_separator' => true, 'bt_bb_service' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
                    'params' => array(
                            array( 'param_name' => 'tag_text', 'type' => 'textfield', 'heading' => esc_html__( 'Label for Keyword', 'travelicious' ), 'preview' => true ),
                            array( 'param_name' => 'horizontal_position', 'type' => 'dropdown', 'heading' => esc_html__( 'Horizontal position', 'travelicious' ),
                                    'value' => array(
                                            esc_html__( 'Left', 'travelicious' ) => 'left',
                                            esc_html__( 'Right', 'travelicious' ) => 'right'
                                    )
                            ),
                            array( 'param_name' => 'vertical_position', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical position', 'travelicious' ),
                                    'value' => array(
                                            esc_html__( 'Top', 'travelicious' ) => 'top',
                                            esc_html__( 'Bottom', 'travelicious' ) => 'bottom'
                                    )
                            ),
                            array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'travelicious' ),
                                    'value' => array(
                                            esc_html__( 'Accent', 'travelicious' ) => 'accent',
                                            esc_html__( 'Alternate', 'travelicious' ) => 'alternate'
                                    )
                            ),
                            
                    )
            ) );
	}
}


