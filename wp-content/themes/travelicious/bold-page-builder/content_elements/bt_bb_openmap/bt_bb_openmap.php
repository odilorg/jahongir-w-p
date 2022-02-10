<?php

class bt_bb_openmap extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'zoom'                  => '',
			'height'                => '',
			'center_map'            => '',
			'custom_style'          => '',
			'scroll_wheel'          => ''
		) ), $atts, $this->shortcode ) );
                
                $max_zoom           = 12;
                $max_zoom           = $max_zoom > $zoom ? $max_zoom : $zoom;
		$zoom_control       = 'yes';  
                $predefined_style   = $custom_style;
                
                $output = do_shortcode( '[bt_bb_leaflet_map '
                        . 'el_class="'.($el_class).'" '
                        . 'el_id="'.($el_id).'" '
                        . 'el_style="'.($el_style).'" '                        
                        . 'zoom='.($zoom).' '
                        . 'max_zoom='.($max_zoom).' '
                        . 'height='.($height).' '
                        . 'center_map="'.($center_map).'" '
                        . 'predefined_style="'.($predefined_style).'" '
                        . 'custom_style="" '
                        . 'scroll_wheel="'.($scroll_wheel).'" '
                        . 'zoom_control="'.($zoom_control).'" ignore_fe_editor="true"]' . ( $content ) .'[/bt_bb_leaflet_map]' ) ;
                               
                $output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
                
                return $output;               
        }
        
       function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'OSM Maps', 'travelicious' ), 'description' => esc_html__( 'OpenStreetMap Maps with custom content ( Deprecated, use OpenStreetMap )', 'travelicious' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_openmap_location' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'zoom', 'type' => 'textfield', 'heading' => esc_html__( 'Zoom (e.g. 14)', 'travelicious' ), 'preview' => true ),
				array( 'param_name' => 'height', 'type' => 'textfield', 'heading' => esc_html__( 'Height (e.g. 250px)', 'travelicious' ), 'description' => esc_html__( 'Used when there is no content', 'travelicious' ) ),
				array( 'param_name' => 'custom_style', 'type' => 'dropdown', 'heading' => esc_html__( 'OSM Map Style', 'travelicious' ), 'preview' => true, 
					'value' => array(
						esc_html__( 'Style 1 - Mapnik OSM', 'travelicious' ) => '1',
						esc_html__( 'Style 2 - Wikimedia', 'travelicious' ) => '2',
						esc_html__( 'Style 3 - OSM Hot', 'travelicious' ) => '3',
						esc_html__( 'Style 4 - Stamen Watercolor', 'travelicious' ) => '4',
						esc_html__( 'Style 5 - Stamen Terrain', 'travelicious' ) => '5',
						esc_html__( 'Style 6 - Stamen Toner', 'travelicious' ) => '6',
						esc_html__( 'Style 7 - Carto Dark', 'travelicious' ) => '7',
						esc_html__( 'Style 8 - Carto Light', 'travelicious' ) => '8'
					)
				),
				array( 'param_name' => 'center_map', 'type' => 'dropdown', 'heading' => esc_html__( 'Center map', 'travelicious' ),
					'value' => array(
						esc_html__( 'No', 'travelicious' ) => 'no',
						esc_html__( 'Yes', 'travelicious' ) => 'yes',
						esc_html__( 'Yes (without overlay initially)', 'travelicious' ) => 'yes_no_overlay'
					)
				),
				array( 'param_name' => 'scroll_wheel',  'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'travelicious' ) => 'scroll_wheel' ), 'heading' => esc_html__( 'Scroll Wheel Zoom', 'travelicious' ), 'preview' => true
				),
				
			)
		) );
	}
}
