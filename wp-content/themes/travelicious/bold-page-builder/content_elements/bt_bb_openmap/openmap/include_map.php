<?php
 /* osm map bb framework */

bt_include_scripts_osm();
function bt_include_scripts_osm() {
    wp_enqueue_script( 'jquery' );
    
    $osm_framework_path_new	= WP_PLUGIN_URL . '/travelicious/openmap/'; 
    $osm_framework_dir_new      = WP_PLUGIN_DIR . '/travelicious/openmap/';
    
    /* js */
    if ( file_exists( $osm_framework_dir_new . 'lib/OpenLayers.js' ) && file_exists( $osm_framework_dir_new . 'theme-openmap-source.js' ) ) {
        wp_enqueue_script( 'openmap-framework-js', $osm_framework_path_new . 'lib/OpenLayers.js' );
        wp_enqueue_script( 'openmap-source-js', $osm_framework_path_new . 'theme-openmap-source.js' ); 
    }
}