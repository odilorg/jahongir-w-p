<?php
require_once( 'config-meta-boxes.php' );

// TOUR METABOXES SETTINGS
add_action('admin_init', 'bt_tour_settings');
if (!function_exists('bt_tour_settings')) {
     function bt_tour_settings() {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
         
        $tour_general_options = Array(
                Array(
                        'name'          => __('Author Review Summary', 'bt_plugin'),
                        'id'            => 'tour_review_summary',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'          => '',
                        'desc'          => sprintf( __('Describe your own Review Summary for the Tour.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'), 
														$documentationurl . 'tour-reviews' ),
                        'rows'          => 5),
                Array(
                        'name'          => __('Author Reviews', 'bt_plugin'),
                        'id'            => 'tour_review',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'          => '',
                        'desc'          => sprintf( __('Set grades for your Tour Review.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
														$documentationurl . 'tour-reviews' ),
                        'rows'          => 5),
				Array(
                        'name'          => __('User Reviews', 'bt_plugin'),
                        'id'            => 'tour_user_review',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'desc'          => sprintf( __('Set or override basic settings on what users can rate in the comments.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
													$documentationurl . 'tour-reviews' ),
                        'match'          => '',
                        'rows'          => 5)
              );
         
         add_meta_box(
                'tour_general_settings',
                __( 'Tour Reviews', 'bt_plugin' ), 
                'bt_metabox_render', 
                'tour', 
                'normal', 
                'high', 
                $tour_general_options
        );
        
        $tour_options = Array(
                Array(
                        'name'          => __('Departure Location', 'bt_plugin'),
                        'id'            => 'tour_departure_location',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'         => '',
						'rows'			=> '7',
                        'desc'          => sprintf( __('Describe departure location, with address or more.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'departure-return-location' )
										),
                Array(
                        'name'          => __('Return Location', 'bt_plugin'),
                        'id'            => 'tour_return_location',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'         => '',
						'rows'			=> '7',
                        'desc'          => sprintf( __('Describe return location, with address or more.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'departure-return-location' )
										),
                               Array(
                        'name'          => __('Promo Super Title', 'bt_plugin'),
                        'id'            => 'tour_supertitle',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'          => '',
						'rows'			=> '7',
                        'desc'          => sprintf( __('Promo Super Title shows at the start of the Tour info, above Promo Title.<br />Allowed html tags: s, b, i, em, strong.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'promo-title' )
										),
                Array(
                        'name'          => __('Promo Title', 'bt_plugin'),
                        'id'            => 'tour_title',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'         => '',
						'rows'			=> '7',
                        'desc'          => sprintf( __('Promo Title shows at the start of the Tour info.<br />Allowed html tags: s, b, i, em, strong.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'promo-title' )
										),
                Array(
                        'name'          => __('Promo Subtitle', 'bt_plugin'),
                        'id'            => 'tour_subtitle',
                        'type'          => 'textarea',
                        'child_of'      => '',
                        'match'         => '',
						'rows'			=> '7',
                        'desc'          => sprintf( __('Promo Subtitle shows at the start of the Tour info, below Promo Title.<br />Allowed html tags: p, s, b, i, em, strong, ul, ol, li, a.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'promo-title' )
										),
                Array(
                        'name'          => __('Current Price', 'bt_plugin'),
                        'id'            => 'tour_regular_price',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('The current price of the Tour per person, eg. the price users will search for.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'prices' )
										),
                Array(
                        'name'          => __('Old Price', 'bt_plugin'),
                        'id'            => 'tour_original_price',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('Old, striketrough price of the Tour. For information and discount purposes.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'prices' )
										),
                Array(
                        'name'          => __('Discount Title', 'bt_plugin'),
                        'id'            => 'tour_discount_title',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('Discount or promo title shown in alternate color, above the Tour price.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'prices' )
										),
                Array(
                        'name'          => __('Travellers', 'bt_plugin'),
                        'id'            => 'tour_travellers',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('The minimum number of travellers required for the tour.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'travellers-duration' )
										),
                Array(
                        'name'          => __('Duration', 'bt_plugin'),
                        'id'            => 'tour_duration',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('Write the duration of the tour, in days or hours.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'travellers-duration' )
										),
				Array(
                        'name'          => __('Booking link', 'bt_plugin'),
                        'id'            => 'tour_booking_link',
                        'type'          => 'static',
                        'child_of'      => '',
                        'match'         => '',
                        'desc'          => sprintf( __('Instead of using booking and enquiry Contact form 7 forms, you can use this field to override it and take users to a specific link when they click on <b>Book this tour</b> button. This link will open up in a new window.<br><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'travellers-duration' )
										),
        );
         
        add_meta_box(
                'tour_meta_settings',
                __( 'Tour Settings', 'bt_plugin' ), 
                'bt_metabox_render', 
                'tour', 
                'normal', 
                'high', 
                $tour_options
         );
   }  
}

add_filter( 'rwmb_meta_boxes', 'bt_register_meta_boxes' );
function bt_register_meta_boxes( $meta_boxes ) {
    
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
    $terms = get_terms(array( 'taxonomy' => 'tour_includes', 'hide_empty' => false, ));    
    $tour_includes = array();
    foreach ( $terms as $term ){
        $name = $term->name; 
		//$id = $term->term_id;
		//$tour_includes[$id] = wp_kses_post($name);
		$tour_includes[$name] = wp_kses_post($name);
    }  
	foreach ($tour_includes as $key=>$val){
		$val = str_replace( "&amp;" , "and" , $val );
		$val = str_replace( "'" , "`" , $val );
		$tour_includes[$key] = $val;
	}
    $meta_boxes[] = array(
        'id'         => 'tour_media',
        'title'      => __('Tour Media', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'id'					=> 'tour_images',
                'name'					=> __('Gallery Images', 'bt_plugin'),
                'label_description'		=> sprintf( __('Select images that will shown up in Tour Gallery tab.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
											$documentationurl . 'media-images' ),
                'type'					=> 'image_advanced',
                'force_delete'			=> false,
                'max_file_uploads'		=> 15,
                'max_status'			=> true,
                'image_size'			=> 'thumbnail',
            ),
            array(
                'id'					=> 'tour_featured_images',
                'name'					=> __('Featured Images', 'bt_plugin'),
                'label_description'		=> sprintf( __('Select images that will shown up in a Tour Header slider.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
											$documentationurl . 'media-featured' ),
                'type'					=> 'image_advanced',
                'force_delete'			=> false,
                'max_file_uploads'		=> 5,
                'max_status'			=> true,
                'image_size'			=> 'thumbnail',
            ),
            array(
                'name'              => __('Featured Videos', 'bt_plugin'),
                'label_description' => sprintf( __('Youtube video URLs that will shown up in a Tour Header and in Tour Gallery tab.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
											$documentationurl . 'media-featured' ),
                'id'                => 'tour_featured_video',
                'desc'              => '',
                'type'              => 'text',
                'clone'             => true,
                'placeholder'       => __('Enter Video URL', 'bt_plugin'),
                'size'              => 50,
            ),

        )
    );
    
    
    $meta_boxes[] = array(
        'id'         => 'tour_start_fields',
        'title'      =>  __('Tour Start Dates & Times', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
             array(
                'name'		=> __('Everyday Tour', 'bt_plugin'),
                'label_description' => __('Tour is Everyday Tour.', 'bt_plugin'),
                'id'		=> 'tour_dt_everyday_show',
                'type'		=> 'checkbox',
                'inline'            => true,
                'select_all_none'   => true,
            ),
            array(
                'id'         => 'tour_dt_everyday',
                'name'       => __('Everyday Tour Start Time', 'bt_plugin'),
                'label_description' => __('Enter Everyday Tour Start Time that will show up on tour details. It will overwrite Start Dates & Times for the tour.', 'bt_plugin'),
                'type'       => 'time',
                'clone'      => false,
                'js_options' => array(
                        'stepMinute'      => 5,
                        'showTimepicker'  => true,
                        'controlType'     => 'select',
                        'showButtonPanel' => false,
                        'oneLine'         => true,
                ),
                'inline'     => false,
                'timestamp'  => false,
            ),
            array(
                'id'         => 'tour_dt',
                'name'       => __('Start Dates & Times', 'bt_plugin'),
                'label_description' => sprintf( __('Enter dates and times for a Tour that will show up on details. You can add more than one, simply click <b>+Add more button</b>.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
											$documentationurl . 'tour-dates' ),
                'type'       => 'datetime',
                'clone'      => true,
                'js_options' => array(
                        'stepMinute'      => 5,
                        'showTimepicker'  => true,
                        'controlType'     => 'select',
                        'showButtonPanel' => false,
                        'oneLine'         => true,
                ),
                //'save_format' => 'd-m-Y H:i',
                'inline'     => false,
                'timestamp'  => false,
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'tour_custom_fields',
        'title'      =>  __('Tour Information', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                    'name'		=> __('Price include', 'bt_plugin'),
					'label_description' => sprintf( __('The properties that a Single Tour includes.<br><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
													$documentationurl . 'tour-information' ),
                    'id'		=> 'tour_price_include',
                    'type'		=> 'checkbox_list',
                    'options'           => $tour_includes,
                    'inline'            => true,
                    'select_all_none'   => true,
            ),
            array(
                    'name'		=> __('Price don\'t include', 'bt_plugin'),
					'label_description' => sprintf( __('The properties that a Single Tour does not include.<br><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'tour-information' ),
                    'id'		=> 'tour_price_no_include',
                    'type'		=> 'checkbox_list',
                    'options'           => $tour_includes,
                    'inline'            => true,
                    'select_all_none'   => true,
            ),
            array(
                    'name'    => __('Location Description/More About Tour', 'bt_plugin'),
					'label_description' => sprintf( __('This is the content that appears in Additional Info tab o na Single Tour. You can leave it out if it\'s not required.<br><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'location-information' ),
                    'id'      => 'tour_location_description',
                    'type'    => 'wysiwyg',
                    'raw'     => false,
                    'options' => array(
                        'textarea_rows' => 15,
                        'teeny'         => true,
                    ),
            ),

        )
    );
    
   $meta_boxes[] =  array(
         'id'           => 'tour_plan',
         'title'        => __('Tour Plan', 'bt_plugin'),
         'post_types'   => 'tour',
         'context'      => 'normal',
         'priority'     => 'high',
         'type'         => 'group',
         'clone' => true,
         'fields' => array(              
            array(
                'name'   => __('Tour Plan Contents', 'bt_plugin'),
				'label_description' => sprintf( __('Create a Tour Plan by adding days with their titles and descriptions.<br><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
						$documentationurl . 'tour-plan' ),
                'id'     => 'tour_plan_plan',
                'type'   => 'boldthemestourplan',
            ),
         ),
    );
    
    


    $meta_boxes[] = array(
        'id'         => 'tour_additional',
        'title'      => __('Tour Additional', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                    'id'      => 'tour_additional_prices',
                    'name'    => __('Additional Prices', 'bt_plugin'),
					'label_description' => sprintf( __('Set additional tour prices that your Tour might have. They will appear at the end of the Tour basic information.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
							$documentationurl . 'tour-additional' ),
                    'type'    => 'fieldset_text',
                    'clone' => true,
                    'options' => array(
                            'title' =>  __('Title', 'bt_plugin'),
                            'price' =>  __('Price', 'bt_plugin')
                    ),
            ),
            array(
                    'id'      => 'tour_additional_info',
                    'name'    => __('Additional Info', 'bt_plugin'),
 					'label_description' => sprintf( __('Set additional information about the Tour. They will appear above what the Price includes.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
							$documentationurl . 'tour-additional' ),
                   'type'    => 'fieldset_text',
                    'clone' => true,
                    'options' => array(
                            'title' =>  __('Title', 'bt_plugin'),
                            'description' =>  __('Description', 'bt_plugin')
                    ),
            ),
            array(
                    'id'      => 'tour_additional_custom',
                    'name'    => __('Complementaries', 'bt_plugin'),
 					'label_description' => sprintf( __('Set Complementaries about the Tour. They will appear below what the Price doesn\'t include.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
							$documentationurl . 'tour-additional' ),
                    'type'    => 'fieldset_text',
                    'clone' => true,
                    'options' => array(
                            'title' =>  __('Title', 'bt_plugin'),
                            'description' =>  __('Description', 'bt_plugin')
                    ),
                    
            ),
        )
    );
    

    
    $meta_boxes[] = array(
        'id'         => 'tour_google_map',
        'title'      => __('Tour Google Map Routes', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                    'id'      => 'tour_map_embed',
                    'name'    => __('Google Map Embed', 'bt_plugin'),
					'label_description' => sprintf( __('Enter the URL of the IFRAME SRC tag Google Mape gave you when sharing a public map to embed it in the Tour.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
							$documentationurl . 'tour-map' ),
                    'type'    => 'textarea',
                    'placeholder'       => __('Enter IFRAME src', 'bt_plugin'),
                    'cols'              => 140,
                    'rows'              => 1
            ),
            array(
                    'id'      => 'tour_map_file',
                    'name'    => __('Google Map KMZ or KML File', 'bt_plugin'),
 					'label_description' => sprintf( __('Add a KMZ or KML file Google Maps or Google Earth exported to embed it in the Tour.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
							$documentationurl . 'tour-map' ),
                    'type'    => 'file_upload',
                    'force_delete'     => true,
                    'max_file_uploads' => 1
            ),
        )
    );
        
    $meta_boxes[] = array(
        'id'         => 'tour_custom_tab',
        'title'      => __('Tour Custom Tab', 'bt_plugin'),
        'post_types' => 'tour',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                    'id'      => 'tour_custom_tab_title',
                    'name'    => __('Tour Custom Tab Title', 'bt_plugin'),
                    'label_description' => sprintf( __('Set custom tab title. It will appear as title in tour single view tabs.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
												$documentationurl . 'tour-additional' ),
                    'type'    => 'textarea',
                    'placeholder'       => __('Enter Tour Custom Tab Title', 'bt_plugin'),
                    'cols'              => 140,
                    'rows'              => 1
            ),
            array(
                    'id'      => 'tour_custom_tab_contnet',
                    'name'    => __('Tour Custom Tab Content', 'bt_plugin'),
                    'label_description' => sprintf( __('Set custom tab content. It will appear as content in tour single view tabs.<br /><a href="%s" target="_blank" ><span class="dashicons dashicons-editor-help"></span> Learn more</a>', 'bt_plugin'),
											$documentationurl . 'tour-additional' ),
                    'type'    => 'wysiwyg',
                    'sanitize_callback' => 'none',
                    'raw'     => false,
                    'options' => array(
                        'textarea_rows' => 15,
                        'teeny'         => true,
                    ),
            ),
        )
    );

    
   
    
    return $meta_boxes;
}


	
// TOUR DESTINATION TAXONOMY META BOXES
// 
// Add tour destination more about
function bt_tour_destination_taxonomy_add_new_meta_more_about() {
       
        $editor_id = 'tour_destination_meta_more_about';
    
        $args = array (
            'tinymce' => false,
            'quicktags' => true,
            'media_buttons' => false,
            'tinymce'       => true,
            'textarea_name' => 'term_meta[tour_destination_meta_more_about]'
        );
      
        wp_editor( '', $editor_id, $args );
}
add_action( 'tour_destination_add_form_fields', 'bt_tour_destination_taxonomy_add_new_meta_more_about', 10, 2 );

// Edit tour destination more about
function bt_tour_destination_taxonomy_edit_meta_more_about($term) {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
	$t_id = $term->term_id;
        $term_meta = get_option( "taxonomy_$t_id" ); 
        
        $editor_id = 'tour_destination_meta_more_about';
       
        $args = array (
            'tinymce'       => false,
            'quicktags'     => true,
            'media_buttons' => false,
            'tinymce'       => true,
            'textarea_name' => 'term_meta[tour_destination_meta_more_about]'
        ); 
        
        $field_value =   isset($term_meta['tour_destination_meta_more_about']) ?  $term_meta['tour_destination_meta_more_about']  : ''; 
        ?>
		<tr class="form-field tour-destination-more-about">
			<th scope="row" valign="top"><label for="term_meta[tour_destination_meta_more_about]"><?php _e( 'Tour Destination More About', 'bt_plugin' ); ?></label></th>
			<td>
				<?php echo wp_editor( $field_value, $editor_id, $args );;?>
				<p class="description"><?php _e( 'Enter more description for this Tour Destination, to promote it on the Single Tour. It will be shown below the map on the Single Tour, on Location tab.','bt_plugin' ); ?></p>
				<hr>
				<p class="bt-admin-description bt-link-underline-bold">
					<a href="<?php echo $documentationurl; ?>destination-about" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>
					<?php _e( 'For more help with this setting, please', 'bt_plugin' ); ?> <a href="<?php echo $documentationurl; ?>destination-about" target="_blank"><?php _e( 'click here', 'bt_plugin' ); ?></a>.
				</p>
			</td>
		</tr>
        <?php

}
add_action( 'tour_destination_edit_form_fields', 'bt_tour_destination_taxonomy_edit_meta_more_about', 10, 2 );

// Add tour destination page slug
function bt_tour_destination_taxonomy_add_new_meta_page_slug() {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";

	?>
	<div class="form-field bt-tour-destination-page-slug">
		<label for="term_meta[tour_destination_meta_page_slug]"><?php _e( 'Tour Destination Page Slug', 'bt_plugin' ); ?></label>
			<input type="text" name="term_meta[tour_destination_meta_page_slug]" id="term_meta[custom_term_meta]" value="">
			<p class="description"><?php _e( 'Enter a valid Page Slug for This Tour Destination. It will be used to link to a Destination page from Single Tour page. If not added, the link will not be shown.','bt_plugin' ); ?></p>
			<hr>
			<p class="bt-admin-description bt-link-underline-bold">
				<a href="<?php echo $documentationurl; ?>destination-slug" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>
				<?php _e( 'For more help with this setting, please', 'bt_plugin' ); ?> <a href="<?php echo $documentationurl; ?>destination-slug" target="_blank"><?php _e( 'click here', 'bt_plugin' ); ?></a>.
			</p>
	</div>
        <?php
}
add_action( 'tour_destination_add_form_fields', 'bt_tour_destination_taxonomy_add_new_meta_page_slug', 10, 2 );

// Edit tour destination page slug
function bt_tour_destination_taxonomy_edit_meta_page_slug($term) {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
	$t_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$t_id" ); ?>
	<tr class="form-field bt-tour-destination-page-slug">
		<th scope="row" valign="top"><label for="term_meta[tour_destination_meta_page_slug]"><?php _e( 'Tour Destination Page Slug', 'bt_plugin' ); ?></label></th>
		<td>
			<input type="text" name="term_meta[tour_destination_meta_page_slug]" id="term_meta[tour_destination_meta_page_slug]" value="<?php echo isset( $term_meta['tour_destination_meta_page_slug'] ) ? esc_attr( $term_meta['tour_destination_meta_page_slug'] ) : ''; ?>">
			<p class="description"><?php _e( 'Enter a valid Page Slug for This Tour Destination. It will be used to link to a Destination page from Single Tour page. If not added, the link will not be shown.','bt_plugin' ); ?></p>
			<hr>
			<p class="bt-admin-description bt-link-underline-bold">
				<a href="<?php echo $documentationurl; ?>destination-slug" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>
				<?php _e( 'For more help with this setting, please', 'bt_plugin' ); ?> <a href="<?php echo $documentationurl; ?>destination-slug" target="_blank"><?php _e( 'click here', 'bt_plugin' ); ?></a>.
			</p>
		</td>
	</tr>
<?php
}
add_action( 'tour_destination_edit_form_fields', 'bt_tour_destination_taxonomy_edit_meta_page_slug', 10, 2 );

// Add tour destination location
function bt_tour_destination_taxonomy_add_new_meta_map() {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
        $gmap_std = BoldThemes_Customize_Default::$data['tour_gmap_lat'] . ',' . BoldThemes_Customize_Default::$data['tour_gmap_lng'] . ',' . BoldThemes_Customize_Default::$data['tour_gmap_zoom'];
        $std = explode(',',$gmap_std);
        $lat    = $std[0];
        $lng    = $std[1];
        $zoom   = $std[2];
       
        BoldThemesFrameworkTemplate::$tour_api_key              = boldthemes_get_option( 'tour_api_key' )   != '' 
                    ? boldthemes_get_option( 'tour_api_key' )     : BoldThemes_Customize_Default::$data['tour_api_key'];
         
        if ( BoldThemesFrameworkTemplate::$tour_api_key != '' ){
            wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&key='.wp_kses_post(BoldThemesFrameworkTemplate::$tour_api_key).'');
        }else{
           wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
        }
        
        $helper = array(
            'lat' => $lat,
            'lng' => $lng,
            'zoom'=> $zoom
        );
        
       
        
        wp_enqueue_style('gmaps-meta-box-css', plugins_url() . '/travelicious/assets/css/map-meta-box.css');
        wp_register_script('bt-gmaps-meta-box-js', plugins_url() . '/travelicious/assets/js/map-meta-box.js');
        wp_localize_script('bt-gmaps-meta-box-js','helper',$helper);
        wp_enqueue_script( 'bt-gmaps-meta-box-js' );
        ?>        
	<div class="form-field bt-tour-destination-location">
		<label for="term_meta[tour_destination_meta_page_slug]"><?php _e( 'Tour Destination Location', 'bt_plugin' ); ?></label>
		<div class="type_listing add_item_medium" style="margin-bottom:10px;">
			<input type="text" name="term_meta[tour_destination_meta_lat]" id="tour_destination_meta_lat" value="" placeholder="<?php echo esc_attr( 'Enter Latitude Value', 'meta-box' );?>" />
		</div>
		<div class="type_listing add_item_medium" style="margin-bottom:10px;">
			<input type="text" name="term_meta[tour_destination_meta_lng]" id="tour_destination_meta_lng" value="" placeholder="<?php echo esc_attr( 'Enter Longitude Value', 'meta-box' );?>" />
			<p class="description"><?php _e( 'Get both values, latitude and longitude from Google Maps. When you search for a location, right click on once you found it it and select \'What\'s here\' and then you\'ll get the valued in the bottom of the Google Maps screen.','bt_plugin' ); ?></p>
		</div>
		<div class="type_listing add_item_medium">
			<div class="maparea" id="map-canvas"></div>
			<input type="hidden" name="term_meta[tour_destination_meta_map_lat]" id="latitude" value="<?php echo $lat; ?>">
			<input type="hidden" name="term_meta[tour_destination_meta_map_lng]" id="longitude" value="<?php echo $lng; ?>">
		</div>
		<p class="description"><?php _e( 'Select this Tour Destination on Map. Drag the Pin across the map or search for the location on the map with a search field.','bt_plugin' ); ?></p>
		<hr>
		<p class="bt-admin-description bt-link-underline-bold">
			<a href="<?php echo $documentationurl; ?>destination-map" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>
			<?php _e( 'For more help with this setting, please', 'bt_plugin' ); ?> <a href="<?php echo $documentationurl; ?>destination-map" target="_blank"><?php _e( 'click here', 'bt_plugin' ); ?></a>.
		</p>
	</div>
        <?php

}
add_action( 'tour_destination_add_form_fields', 'bt_tour_destination_taxonomy_add_new_meta_map', 10, 2 );

// Edit tour destination location
function bt_tour_destination_taxonomy_edit_meta_map($term) {
	$documentationurl = "http://documentation.bold-themes.com/travelicious/creating-pages-and-posts#";
	$t_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$t_id" );  
        
        $lat = '';
        $lng = '';

        if ( isset($term_meta['tour_destination_meta_map_lat']) && $term_meta['tour_destination_meta_map_lat'] != '' ){
            $lat = $term_meta['tour_destination_meta_map_lat'];
        }
        if ( isset($term_meta['tour_destination_meta_map_lng']) && $term_meta['tour_destination_meta_map_lng'] != '' ){
            $lng = $term_meta['tour_destination_meta_map_lng'];
        }
        
        $lat = isset($term_meta['tour_destination_meta_lat']) ? $term_meta['tour_destination_meta_lat'] : $lat;
        $lng = isset($term_meta['tour_destination_meta_lng']) ? $term_meta['tour_destination_meta_lng'] : $lng;  
        
        $gmap_std = BoldThemes_Customize_Default::$data['tour_gmap_lat'] . ',' . BoldThemes_Customize_Default::$data['tour_gmap_lng'] . ',' . BoldThemes_Customize_Default::$data['tour_gmap_zoom'];
        $std = explode(',',$gmap_std);

        $lat    = $lat == '' ? $std[0] : $lat;
        $lng    = $lng == '' ? $std[1] : $lng;
        $zoom   = $std[2];
        
        BoldThemesFrameworkTemplate::$tour_api_key              = boldthemes_get_option( 'tour_api_key' )   != '' 
                    ? boldthemes_get_option( 'tour_api_key' )     : BoldThemes_Customize_Default::$data['tour_api_key'];

        if ( BoldThemesFrameworkTemplate::$tour_api_key != '' ){
            wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&key='.wp_kses_post(BoldThemesFrameworkTemplate::$tour_api_key));
        }else{
           wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
        }
        
        $helper = array(
            'lat' => $lat,
            'lng' => $lng,
            'zoom'=> $zoom
        );
        
        wp_enqueue_style('gmaps-meta-box-css', plugins_url() . '/travelicious/assets/css/map-meta-box.css');
        wp_register_script('bt-gmaps-meta-box-js', plugins_url() . '/travelicious/assets/js/map-meta-box.js');
        wp_localize_script('bt-gmaps-meta-box-js','helper',$helper);
        wp_enqueue_script( 'bt-gmaps-meta-box-js' );
        ?>
	<tr class="form-field bt-tour-destination-location">
            <th scope="row" valign="top"><label for="term_meta[tour_destination_meta_page_slug]"><?php _e( 'Tour Destination Location', 'bt_plugin' ); ?></label></th>
            <td>
                <div class="type_listing add_item_medium" style="margin-bottom:10px;">
					<?php echo esc_html__( 'Destination Latitude', 'bt_plugin' );?>
                    <input type="text" name="term_meta[tour_destination_meta_lat]" id="tour_destination_meta_lat" value="<?php echo $lat; ?>" placeholder="<?php echo esc_attr( 'Enter Destination Latitude Value', 'meta-box' );?>" />
                </div>
                <div class="type_listing add_item_medium" style="margin-bottom:10px;">
					<?php echo esc_html__( 'Destination Longitude', 'bt_plugin' );?>
                    <input type="text" name="term_meta[tour_destination_meta_lng]" id="tour_destination_meta_lng" value="<?php echo $lng; ?>" placeholder="<?php echo esc_attr( 'Enter Destination Longitude Value', 'meta-box' );?>" />
                    <p class="description"><?php _e( 'Get both values, latitude and longitude from Google Maps. When you search for a location, right click on once you found it it and select \'What\'s here\' and then you\'ll get the valued in the bottom of the Google Maps screen.','bt_plugin' ); ?></p>
                </div>
                <div class="type_listing add_item_medium">
                    <div class="maparea" id="map-canvas"></div>
                    <input type="hidden" name="term_meta[tour_destination_meta_map_lat]" id="latitude" value="<?php echo $lat; ?>">
                    <input type="hidden" name="term_meta[tour_destination_meta_map_lng]" id="longitude" value="<?php echo $lng; ?>">
                </div>
                <p class="description"><?php _e( 'Select this Tour Destination on Map. Drag the Pin across the map or search for the location on the map with a search field.','bt_plugin' ); ?></p>
                <hr>
                <p class="bt-admin-description bt-link-underline-bold">
                    <a href="<?php echo $documentationurl; ?>destination-map" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>
                    <?php _e( 'For more help with this setting, please', 'bt_plugin' ); ?> <a href="<?php echo $documentationurl; ?>destination-map" target="_blank"><?php _e( 'click here', 'bt_plugin' ); ?></a>.
                </p>
            </td>
	</tr>
<?php
}
add_action( 'tour_destination_edit_form_fields', 'bt_tour_destination_taxonomy_edit_meta_map', 10, 2 );

// Save extra taxonomy fields callback function.
function bt_save_tour_destination_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
                            if ( $key == 'tour_destination_meta_more_about' ){
                                $term_meta[$key] = wp_kses_post(stripslashes($_POST['term_meta'][$key]));
                            }else{
                                $term_meta[$key] = sanitize_text_field( $_POST['term_meta'][$key] );
                            }
			}
		}
		update_option( "taxonomy_$t_id", $term_meta );
	}
}  
add_action( 'edited_tour_destination', 'bt_save_tour_destination_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_tour_destination', 'bt_save_tour_destination_taxonomy_custom_meta', 10, 2 );






