<?php
bt_get_tour_options_data();
bt_get_tour_single_data( get_the_ID() );

$tour_contact_form_booking_shortcode = '';
if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking != 0 ) {
    $args = array('p' => BoldThemesFrameworkTemplate::$tour_contact_form_booking, 'post_type' => 'wpcf7_contact_form');
    $tour_contact_form_booking = new WP_Query($args);
    $tour_contact_form_booking_id       = isset($tour_contact_form_booking->posts[0]) ? $tour_contact_form_booking->posts[0]->ID : '';
    $tour_contact_form_booking_title    = isset($tour_contact_form_booking->posts[0]) ? $tour_contact_form_booking->posts[0]->post_title : '';
    $tour_contact_form_booking_shortcode = '[contact-form-7 id="' . esc_attr($tour_contact_form_booking_id) . '" title="' . esc_attr($tour_contact_form_booking_title) . '"]';
}

$tour_contact_form_enquiry_shortcode = '';
if ( BoldThemesFrameworkTemplate::$tour_contact_form_enquiry != 0 ) {
    $args = array('p' => BoldThemesFrameworkTemplate::$tour_contact_form_enquiry, 'post_type' => 'wpcf7_contact_form');
    $tour_contact_form_enquiry = new WP_Query($args);
    $tour_contact_form_enquiry_id       = isset($tour_contact_form_enquiry->posts[0]) ? $tour_contact_form_enquiry->posts[0]->ID : '';
    $tour_contact_form_enquiry_title    = isset($tour_contact_form_enquiry->posts[0]) ? $tour_contact_form_enquiry->posts[0]->post_title : '';
    $tour_contact_form_enquiry_shortcode = '[contact-form-7 id="' . esc_attr($tour_contact_form_enquiry_id) . '" title="' . esc_attr($tour_contact_form_enquiry_title) . '"]';
}

if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_enquiry_show ) {
?>
    <div id="bt-forms-container-modal-overlay" class="bt-forms-container-modal-overlay"></div>
    <div id="bt-forms-container-modal" class="bt-forms-container-modal">
        <span class="bt-forms-container-modal-close"><a href="#">Close</a></span>

        <div class="bt-forms-container-modal-inner">
                    <div class="bt-forms-container-modal-inner-sleeve">
                            <h3><?php echo BoldThemesFrameworkTemplate::$title;?></h3>
                            <div class="btSingleTourInfo">
                                    <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_regular_price != '' ) { ?>
                                        <div class="btTourIcon btTourPrice">
                                                <div class="btIcon"><span class="iconHolder"></span></div>
                                                <div class="btTourInfo">
                                                        <div class="btTourTitle"><?php echo esc_html__( 'Price', 'travelicious' );?></div>
                                                        <div class="btTourDesc"><?php echo esc_html(bt_get_tour_regular_price());?> <em><?php echo esc_html__( 'per', 'travelicious' );?> <span><?php echo esc_html__( 'person', 'travelicious' );?></span></em></div>
                                                </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_duration ) { ?>
                                        <div class="btTourIcon btTourDuration">
                                           <div class="btIcon"><span class="iconHolder"></span></div>
                                           <div class="btTourInfo">
                                                   <div class="btTourTitle"><?php echo esc_html__( 'Duration', 'travelicious' );?></div>
                                                   <div class="btTourDesc"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_duration);?></div>
                                           </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_destination_text ) { ?>
                                        <div class="btTourIcon btTourDestination">
                                           <div class="btIcon"><span class="iconHolder"></span></div>
                                           <div class="btTourInfo">
                                                   <div class="btTourTitle"><?php echo esc_html__( 'Destination', 'travelicious' );?></div>
                                                   <div class="btTourDesc"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_destination_text);?></div>
                                           </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_travellers ) { ?>
                                        <div class="btTourIcon btTourTravellers">
                                                <div class="btIcon"><span class="iconHolder"></span></div>
                                                <div class="btTourInfo">
                                                        <div class="btTourTitle"><?php echo esc_html__( 'Travellers', 'travelicious' );?></div>
                                                        <div class="btTourDesc"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_travellers);?></div>
                                                </div>
                                        </div>
                                    <?php } ?>
                            </div>
                            <?php if ( ($tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show) || ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) ) { ?>
                                <div class="btFormTabs">
                                    <?php if ( $tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show ) { ?>
                                        <a href="#bt-form-booking-container" class="bt-forms-container-toggle bt-forms-container-toggle-booking-container bt-tab-on"><span><?php echo esc_html__( 'Book this Tour', 'travelicious' ); ?></span></a>
                                    <?php } ?>
                                    <?php if ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) { ?>
                                        <a href="#bt-form-enquiry-container"  class="bt-forms-container-toggle bt-forms-container-toggle-enquiry-container"><span><?php echo esc_html__( 'Enquiry about the Tour', 'travelicious' ); ?></span></a>
                                    <?php } ?>
                                </div>
                                <div class="bt_bb_text btForms">				
                                       <?php 
                                            if ( $tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show) {
                                                echo '<div id="bt-form-booking-container"  class="bt-form-booking-container">';
                                                    echo do_shortcode( $tour_contact_form_booking_shortcode );
                                                echo '</div>';
                                            }                                                                 
                                            if ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) {
                                                echo '<div id="bt-form-enquiry-container" class="bt-form-enquiry-container">';
                                                    echo do_shortcode( $tour_contact_form_enquiry_shortcode );
                                                echo '</div>';
                                            }
                                        ?>
                                </div>
                            <?php }else{ ?>
                                <div class="btFormTabs">
                                    <p><?php echo esc_html__( 'Sorry! There are no enabled booking or enquiry forms.', 'travelicious' )?></p>
                                </div>
                            <?php } ?>
                    </div>
        </div>
    </div>
<?php
}

