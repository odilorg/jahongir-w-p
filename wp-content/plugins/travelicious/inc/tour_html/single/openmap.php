<?php 

$tour_pin_normal         = BoldThemesFrameworkTemplate::$tour_pin_normal;
$osm_map_style           = boldthemes_get_option( 'osm_map_style' )  != '' ?  boldthemes_get_option( 'osm_map_style' )     : '1';
$custom_osm_map_style    = '';
$zoom = BoldThemesFrameworkTemplate::$tour_gmap_zoom;
               
$lat = BoldThemesFrameworkTemplate::$tour_gmap_lat;
$lng = BoldThemesFrameworkTemplate::$tour_gmap_lng;   

foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_destination as $destination){
    if ( $destination->map_lat != '' && $destination->map_lng != '' ) {
        $lat = $destination->map_lat;
        $lng = $destination->map_lng;   
    }
}
?>
<style>
     .bt_bb_tab_item.on image{
        visibility: visible;
    }
    .bt_bb_tab_item image{
        visibility: hidden;
    }
</style>
<div class="btTourLocationMap">
    <div class="type_listing add_item_medium">
    <?php
    $osm_framework_dir_new      = WP_PLUGIN_DIR . '/travelicious/openmap/';
    if ( file_exists( $osm_framework_dir_new . 'lib/OpenLayers.js' ) && file_exists( $osm_framework_dir_new . 'theme-openmap-source.js' ) ) {
        ?>    
            <div class="maparea" id="tour_map_locations"></div>  
            <script>
                            var mapOptions = {controls: [
                                    new OpenLayers.Control.Navigation(),             
                                    new OpenLayers.Control.Zoom()
                            ]};
                            var map = new OpenLayers.Map("tour_map_locations", mapOptions);
                            var style = setVectorSource( <?php echo $osm_map_style;?> );
                            <?php 
                                if ( $osm_map_style == 0 ){
                                    if ( $custom_osm_map_style != '' ){
                                        ?>
                                        style = [<?php echo $custom_osm_map_style;?>];  
                                        <?php
                                    }
                                } 
                            ?>                           
                            var g = new OpenLayers.Layer.OSM("Simple OSM Map", style, {layers: 'basic'});
                            map.addLayers([g]);   
                            
                            var lat     = <?php echo $lat;?>;
                            var lon     = <?php echo $lng;?>;
                            var zoom    = <?php echo $zoom;?>;                            

                            var fromProjection = new OpenLayers.Projection("EPSG:4326");  
                            var toProjection   = new OpenLayers.Projection("EPSG:900913");
                            var lonLat         = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

                            map.setCenter (lonLat, zoom);
                        
                            var defaultStyle = new OpenLayers.Style({ 'cursor': 'pointer'});
                            var selectStyle = new OpenLayers.Style({'cursor': ''});

                            var styleMap  = new OpenLayers.StyleMap({
                                'default': defaultStyle,
                                'select': selectStyle
                             });

                            var vectorLayer = new OpenLayers.Layer.Vector("VectorLayer", {
                                styleMap: styleMap,
                                strategies: []
                            });                            
                        
                            var features = new Array(1);

                            var lonMarker = <?php echo $lng;?>;
                            var latMarker = <?php echo $lat;?>;
                            features[0] =  new OpenLayers.Feature.Vector(
                                new OpenLayers.Geometry.Point( lonMarker, latMarker  ).transform(fromProjection, toProjection),
                                {
                                    id:'<?php echo get_the_ID();?>',
                                    description:<?php echo json_encode(get_the_title());?>
                                } ,                                                    
                                { 
                                    title: "Open in Google Map: " + <?php echo json_encode(get_the_title());?>,
                                    cursor:'pointer', 
                                    externalGraphic: '<?php echo esc_html($tour_pin_normal);?>', 
                                    graphicHeight: 58, 
                                    graphicWidth: 45, 
                                    graphicXOffset:-12, 
                                    graphicYOffset:-25 
                                }
                            ); 
                
                            vectorLayer.addFeatures(features);     
                            map.addLayer(vectorLayer);
                        
                            var controls = {
                                  selector: new OpenLayers.Control.SelectFeature(vectorLayer, {
                                      onSelect: openGetDirectionLink
                                  })
                            };
                            map.addControl(controls['selector']);
                            controls['selector'].activate();
                        
                            function openGetDirectionLink(features){
                                var link = "https://www.google.com/maps/dir//<?php echo $lat;?>,<?php echo $lng;?>/@<?php echo $lat;?>,<?php echo $lng;?>,<?php echo $zoom;?>z";
                                window.location.href = link;
                            }
                            
                            function setVectorSource( custom_style ) { 
                                var style = map_openmap_source_arr[custom_style];
                                return style;
                            }
                </script>
           <?php
           }else{
               echo esc_html__( 'Please update Travelicious Plugin', 'bt_plugin' );
           }
          ?>
        </div>
</div> 
<?php



