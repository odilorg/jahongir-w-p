<?php

class bt_bb_openmap_location extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'latitude'  => '',
			'longitude' => '',
			'icon'      => ''
		) ), $atts, $this->shortcode ) );
                
                $output = do_shortcode( '[bt_bb_leaflet_map_location '
                        . 'el_style="'.($el_style).'" '
                        . 'el_class="'.($el_class).'" '
                        . 'el_id="'.($el_id).'" '
                        . 'latitude="'.($latitude).'" '
                        . 'longitude="'.($longitude).'" '
                        . 'icon="'.($icon).'" ignore_fe_editor="true"]' . ( $content ) .'[/bt_bb_leaflet_map_location]' ) ;
                
                $output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
                
                return $output;		
        }
        
        function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'OSM Maps Location', 'travelicious' ), 'description' => esc_html__( 'OpenStreetMap Maps location', 'travelicious' ), 'container' => 'vertical', 'as_child' => array( 'only' => 'bt_bb_openmap' ), 'accept' => array( 'bt_bb_headline' => true, 'bt_bb_text' => true, 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_service_icon' => true, 'bt_bb_image' => true, 'bt_bb_separator' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'latitude', 'type' => 'textfield', 'heading' => esc_html__( 'Latitude', 'travelicious' ), 'preview' => true ),
				array( 'param_name' => 'longitude', 'type' => 'textfield', 'heading' => esc_html__( 'Longitude', 'travelicious' ), 'preview' => true ),
				array( 'param_name' => 'icon', 'type' => 'attach_image', 'heading' => esc_html__( 'Icon', 'travelicious' ), 'preview' => true )
			)
		) );
	}
}

