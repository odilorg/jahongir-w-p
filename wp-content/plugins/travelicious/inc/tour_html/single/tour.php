<?php
// SINGLE TOUR : INFO
if ( ! function_exists( 'boldthemes_get_tour_single_info_html' ) ) {
	function boldthemes_get_tour_single_info_html() {
            
            ?>
            <div class="btSingleTourInfo">
                <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_discount_title ) { ?>
                    <div class="btPromoPrice"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_discount_title);?></div>
                <?php } ?>
                <div class="btSingleTourInfoInner">
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_regular_price != '' ) { ?>
                            <div class="btTourIcon btTourPrice">
                                    <div class="btIcon"><span class="iconHolder"></span></div>
                                    <div class="btTourInfo">
                                            <div class="btTourTitle"><?php echo esc_html__( 'Price', 'bt_plugin' );?></div>
                                            <div class="btTourDesc"><?php echo esc_html(bt_get_tour_regular_price());?> <em><?php echo esc_html__( 'per', 'bt_plugin' );?> <span><?php echo esc_html__( 'person', 'bt_plugin' );?></span></em></div>
                                    </div>
                            </div>
                        <?php } ?>
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_duration ) { ?>
                           <div class="btTourIcon btTourDuration">
                                   <div class="btIcon"><span class="iconHolder"></span></div>
                                   <div class="btTourInfo">
                                           <div class="btTourTitle"><?php echo esc_html__( 'Duration', 'bt_plugin' );?></div>
                                           <div class="btTourDesc"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_duration);?></div>
                                   </div>
                           </div>
                        <?php } ?>
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_destination_text ) { ?>
                           <div class="btTourIcon btTourDestination">
                                   <div class="btIcon"><span class="iconHolder"></span></div>
                                   <div class="btTourInfo">
                                           <div class="btTourTitle"><?php echo esc_html__( 'Destination', 'bt_plugin' );?></div>
                                           <div class="btTourDesc">
                                                   <?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_destination_text);?>
                                           </div>
                                   </div>
                           </div>
                        <?php } ?>
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_travellers ) { ?>
                            <div class="btTourIcon btTourTravellers">
                                    <div class="btIcon"><span class="iconHolder"></span></div>
                                    <div class="btTourInfo">
                                            <div class="btTourTitle"><?php echo esc_html__( 'Travellers', 'bt_plugin' );?></div>
                                            <div class="btTourDesc"><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_travellers);?></div>
                                    </div>
                            </div>
                        <?php } ?>
                        <?php
                            $tour_show_rating	= boldthemes_get_option( 'tour_show_rating' ); 
                        ?>
                        <?php if ( BoldThemesFrameworkTemplate::$post_user_rating['rating'] > 0 && $tour_show_rating ) { ?>
                        <div class="btTourIcon btTourReviews">
                                <div class="btIcon"><span class="iconHolder"></span></div>
                                <div class="btTourInfo">
                                        <div class="btTourTitle"><?php echo BoldThemesFrameworkTemplate::$tour_comments_number;?> <?php echo esc_html__( 'Reviews', 'bt_plugin' );?></div>
                                        <div class="btTourDesc">
                                                <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo sprintf( esc_attr__( 'Rated %d out of 5', 'bt_plugin' ), BoldThemesFrameworkTemplate::$post_user_rating['rating'] ) ?>">
                                                        <span style="width:<?php echo wp_kses_post(BoldThemesFrameworkTemplate::$post_user_rating['percent']);?>%"><strong itemprop="ratingValue"><?php echo BoldThemesFrameworkTemplate::$post_user_rating['rating'];?></strong> <?php echo esc_html__( 'out of 5', 'bt_plugin' );?></span>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <?php } ?>
                        <?php if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_enquiry_show ) { ?>
                            <?php
                                $tour_rwmb_booking_link = BoldThemesFrameworkTemplate::$tour_rwmb_booking_link != '' ? BoldThemesFrameworkTemplate::$tour_rwmb_booking_link : '#';
                            ?>
                            <div class="btTourBook">
                                <a href="<?php echo esc_attr($tour_rwmb_booking_link);?>"  target="_blank">
                                    <span class="btnInnerText">
                                        <?php 
                                        if ( function_exists( 'boldthemes_get_book_this_tour_button_label' ) ){
                                            echo boldthemes_get_book_this_tour_button_label();
                                        }else{
                                            echo esc_html__( 'Book this Tour', 'bt_plugin' );
                                        }
                                        ?>
                                    </span>
                                </a>
                            </div>
                        <?php } ?>
                </div>
        </div>
            <?php
        }
}

// SINGLE TOUR : PROMO TITLE
if ( ! function_exists( 'boldthemes_get_tour_single_promo_title_html' ) ) {
	function boldthemes_get_tour_single_promo_title_html() {
            if ( BoldThemesFrameworkTemplate::$tour_rwmb_supertitle != '' || BoldThemesFrameworkTemplate::$tour_rwmb_title != '' || BoldThemesFrameworkTemplate::$tour_rwmb_subtitle != '' ) { 
                ?>
                    <div class="btTourPromoTitle">
                            <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_size_large bt_bb_superheadline bt_bb_subheadline bt_bb_align_center">
                                    <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_supertitle != '' || BoldThemesFrameworkTemplate::$tour_rwmb_title != '' ) { ?>
                                        <h2>
                                                <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_supertitle != '' ) { ?>
                                                    <span class="bt_bb_headline_superheadline"><?php echo BoldThemesFrameworkTemplate::$tour_rwmb_supertitle;?></span>
                                                <?php } ?>
                                                <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_title != '' ) { ?>
                                                    <span class="bt_bb_headline_content"><span><?php echo BoldThemesFrameworkTemplate::$tour_rwmb_title;?></span></span>
                                                <?php } ?>
                                        </h2>
                                     <?php } ?>
                                     <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_subtitle != '' ) { ?>
                                        <div class="bt_bb_headline_subheadline"><?php echo BoldThemesFrameworkTemplate::$tour_rwmb_subtitle;?></div>
                                     <?php } ?>
                            </header>
                    </div>
                <?php                 
            }
        }
}
    
// SINGLE TOUR TAB: INFORMATION
if ( ! function_exists( 'boldthemes_show_tour_information_tab' ) ) {
	function boldthemes_show_tour_information_tab() {
            $show = false;
            if (   
                    trim(BoldThemesFrameworkTemplate::$tour_rwmb_destination_text) != '' || 
                    trim(BoldThemesFrameworkTemplate::$content) != '' ||
                    BoldThemesFrameworkTemplate::$tour_rwmb_start_location ||
                    BoldThemesFrameworkTemplate::$tour_rwmb_departure_location ||
                    BoldThemesFrameworkTemplate::$tour_rwmb_return_location ||
                    ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_dt) && count(BoldThemesFrameworkTemplate::$tour_rwmb_dt) > 0 ) ||
                    ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_price_include) && count(BoldThemesFrameworkTemplate::$tour_rwmb_price_include) > 0 ) ||
                    ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_price_no_include) && count(BoldThemesFrameworkTemplate::$tour_rwmb_price_no_include) > 0 ) ||
                    ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices) > 0 ) ||
                    ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info) > 0 ) ||
                    ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom) > 0 ) 
            ){
                $show = true;
            }           
            return $show;
        }
}
if ( ! function_exists( 'boldthemes_get_tour_information_tab_html' ) ) {
	function boldthemes_get_tour_information_tab_html() {
            ?>
                <?php if ( BoldThemesFrameworkTemplate::$excerpt ) { ?>
                    <div class="btTourExcerpt"><?php echo BoldThemesFrameworkTemplate::$excerpt;?></div>
                <?php } ?>
                <?php
                    $show = boldthemes_show_tour_information_tab();
                    if ( !$show ){
                        return '';
                    }
                ?>
                <div class="btTourIncludes">
                        <h3><?php echo esc_html__( 'What\'s included', 'bt_plugin' );?></h3>
                        
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_destination_text ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Destination', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">                                            
                                            <?php 
                                            if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_destination) && count(BoldThemesFrameworkTemplate::$tour_rwmb_destination) > 1  ){
                                                $destination_arr = array();
                                                foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_destination as $destination ){
                                                    array_push($destination_arr,$destination->name);
                                                }
                                                if ( is_array($destination_arr) ) {
                                                    BoldThemesFrameworkTemplate::$tour_rwmb_destination_text = implode(' , ', $destination_arr);
                                                }
                                            }
                                            
                                            echo '<span>' . esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_destination_text) . '</span>';
                                            
                                            $page_link = '';
                                            $text_link = esc_html__( 'Discover Destinations', 'bt_plugin' );
                                            if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_destination) && count(BoldThemesFrameworkTemplate::$tour_rwmb_destination) == 1  ){
                                                if ( isset(BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]) ){
                                                    if ( isset( BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->slug) &&  BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->slug != '' ){														
                                                        $destination_page_slug = BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->slug;													
														$page_link = bt_bb_get_permalink_by_slug_tour( $destination_page_slug, 'portfolio' ) != '' ? bt_bb_get_permalink_by_slug_tour( $destination_page_slug, 'portfolio' ) : '';
                                                    }
													
                                                    if ( isset( BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->name) &&  BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->name != '' ){
                                                        $text_link = sprintf( esc_html__( 'Discover %1$s', 'bt_plugin' ), BoldThemesFrameworkTemplate::$tour_rwmb_destination[0]->name );
                                                    }
                                                 }                                                
                                            }
                                            ?>
                                            <span class="btTourSingleIncludeLink"><a href="#" class="btDiscoverDestinationLink" data-link="<?php echo esc_attr($page_link);?>"><?php echo esc_html__( $text_link, 'bt_plugin' );?></a></span>
                                    </div>
                            </div>
                        <?php } ?>
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_start_location ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Tour Start Location', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <span><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_start_location);?></span>
                                    </div>
                            </div>
                        <?php } ?>
                        
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_departure_location ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Departure Location', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <span><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_departure_location);?></span>
                                    </div>
                            </div>
                        <?php } ?>
                        
                        <?php if ( BoldThemesFrameworkTemplate::$tour_rwmb_return_location ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Return Location', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <span><?php echo esc_html(BoldThemesFrameworkTemplate::$tour_rwmb_return_location);?></span>
                                    </div>
                            </div>
                        <?php } ?>
                        <?php if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_dt) && count(BoldThemesFrameworkTemplate::$tour_rwmb_dt) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Tour Start Date &amp; Time', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <span><?php echo BoldThemesFrameworkTemplate::$tour_rwmb_dt_text;?></span>
                                            <?php if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_dt) && count(array_slice(BoldThemesFrameworkTemplate::$tour_rwmb_dt, 1)) > 0 ){ ?>
                                                <span class="btTourSingleIncludeLink btTourSingleIncludeLinkViewOtherTime"><a href="#"><?php echo esc_html__( 'View other Times', 'bt_plugin' );?></a></span>                                                                                        
                                                <?php
                                                    $tour_show_other_times_style = BoldThemesFrameworkTemplate::$tour_show_other_times ?  '' : "style='display:none;'";
                                                ?>                                                
                                                <div class="btTourSingleIncludeContentOtherTimes" id="btTourSingleIncludeContentOtherTimes" <?php echo $tour_show_other_times_style;?>>
                                                    <?php
                                                    echo "<ul>";
                                                        foreach ( array_slice(BoldThemesFrameworkTemplate::$tour_rwmb_dt, 1) as $tour_rwmb_dt ) {
                                                            $tour_date_fromated = bt_get_tour_date_formated( $tour_rwmb_dt );
                                                            echo '<li><span>' . $tour_date_fromated . '</span></li>';
                                                        }
                                                    echo "</ul>";
                                                    ?>
                                                </div>
                                            <?php } ?>
                                    </div>
                            </div>
                        <?php } ?>
                        
                        <?php if ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_info) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Additional Information', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">                                        
                                            <?php foreach( BoldThemesFrameworkTemplate::$tour_rwmb_additional_info as $tour_rwmb_additional_info) { ?>
                                                <span class="btTourSingleIncludeContentAdditionalInformation"><strong><?php echo $tour_rwmb_additional_info['title'];?>:</strong> <?php echo $tour_rwmb_additional_info['description'];?></span>
                                            <?php } ?>                                       
                                    </div>
                            </div>
                        <?php } ?>
                        
                        <?php if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_price_include) && count(BoldThemesFrameworkTemplate::$tour_rwmb_price_include) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Price includes', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <ul class="btIncludedItems">
                                                <?php foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_price_include as $tour_rwmb_price_include ) { ?>
                                                    <li><span><?php echo $tour_rwmb_price_include;?></span></li>
                                                <?php } ?>
                                            </ul>
                                    </div>
                            </div>
                        <?php } ?>
                        
                        <?php if ( is_array(BoldThemesFrameworkTemplate::$tour_rwmb_price_no_include) && count(BoldThemesFrameworkTemplate::$tour_rwmb_price_no_include) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Price does not include', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <ul class="btExcludedItems">
                                                 <?php foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_price_no_include as $tour_rwmb_price_no_include ) { ?>
                                                    <li><span><?php echo $tour_rwmb_price_no_include;?></span></li>
                                                    <?php } ?>
                                            </ul>
                                    </div>
                            </div>
                         <?php } ?>
                        
                        <?php if ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Complementaries', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                           <?php foreach( BoldThemesFrameworkTemplate::$tour_rwmb_additional_custom as $tour_rwmb_additional_custom) { ?>                                                
                                                    <span class="btTourSingleIncludeContentAdditionalCustomInformation">
														<span>
                                                        <?php if ( $tour_rwmb_additional_custom['title'] != '' ) { ?>
                                                            <strong><?php echo $tour_rwmb_additional_custom['title'];?>:</strong> 
                                                        <?php } ?>
                                                        <?php if ( $tour_rwmb_additional_custom['description'] != '' ) { ?>
                                                            <?php echo $tour_rwmb_additional_custom['description'];?>
                                                        <?php } ?>
														</span>
                                                    </span>                                                
                                          <?php } ?>
                                    </div>
                            </div>
                        <?php } ?>
                       
                        <?php if ( array_filter(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices,  'bt_filter_array_empty') && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices) && count(BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices) > 0 ) { ?>
                            <div class="btTourSingleInclude">
                                    <div class="btTourSingleIncludeTitle"><?php echo esc_html__( 'Additional Prices', 'bt_plugin' );?></div>
                                    <div class="btTourSingleIncludeContent">
                                            <?php foreach( BoldThemesFrameworkTemplate::$tour_rwmb_additional_prices as $tour_rwmb_additional_prices) { ?>
                                                <?php if ( $tour_rwmb_additional_prices['title'] != '' ) { ?>
                                                <span class="btTourSingleIncludeContentAdditionalPrice">
                                                        <strong><?php echo $tour_rwmb_additional_prices['title'];?>:</strong> 
                                                        <?php echo bt_get_tour_price($tour_rwmb_additional_prices['price']);?>
                                                </span>
                                                <?php } ?>
                                            <?php } ?>
                                    </div>
                            </div>
                        <?php } ?>
                        
     
                        
                       
                        
                </div>
                <div class="btTourMainContent">
                        <?php echo BoldThemesFrameworkTemplate::$content;?>
                </div>
                <?php
        }
}

// SINGLE TOUR TAB: TOUR PLAN
if ( ! function_exists( 'boldthemes_show_tour_plan_tab' ) ) {
	function boldthemes_show_tour_plan_tab() {
            $show = false;
            if (  !empty(BoldThemesFrameworkTemplate::$tour_rwmb_plan_title) && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_plan_title) ){
                $show = true;
            }
            return $show;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_plan_tab_html' ) ) {
	function boldthemes_get_tour_plan_tab_html() {
            ?>
            <div class="btTourPlan">
                    <div class="btTourPlanPaging" id="btTourPlanPaging">
                            <ul>
                                <?php 
                                    $i_tour_rwmb_plan_title = 1;                                                                                       
                                    foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_plan_title as $tour_rwmb_plan_title ) { 
                                         $tourPlanDayOn = $i_tour_rwmb_plan_title == 1 ? ' class="on"' : '';
                                         ?>
                                            <li<?php echo $tourPlanDayOn;?>  title="<?php echo $tour_rwmb_plan_title;?>" data-tab="tourPlanDay<?php echo $i_tour_rwmb_plan_title;?>" data-href="#tourPlanDay<?php echo $i_tour_rwmb_plan_title;?>"><span><?php echo $tour_rwmb_plan_title;?></span></li>
                                        <?php 
                                         $i_tour_rwmb_plan_title++;
                                    } ?>
                            </ul>
                    </div>
                    <?php
                     $i_tour_rwmb_plan_title = 1;             
                     for ( $i =0; $i < count(BoldThemesFrameworkTemplate::$tour_rwmb_plan_title); $i++) {
                         $title         = isset(BoldThemesFrameworkTemplate::$tour_rwmb_plan_title[$i]) ? BoldThemesFrameworkTemplate::$tour_rwmb_plan_title[$i] : '';
                         $headline      = isset(BoldThemesFrameworkTemplate::$tour_rwmb_plan_headline[$i]) ? BoldThemesFrameworkTemplate::$tour_rwmb_plan_headline[$i] : '';;
                         $description   = isset(BoldThemesFrameworkTemplate::$tour_rwmb_plan_description[$i]) ? BoldThemesFrameworkTemplate::$tour_rwmb_plan_description[$i] : '';
                         
                         if ( has_shortcode( $description, 'bold_timeline' ) ) {
                            $description = do_shortcode($description);
                         }
                         ?>
                            <div class="btTourPlanDay">
                                    <div class="btPlanDay" id="tourPlanDay<?php echo $i_tour_rwmb_plan_title;?>"></div>
                                    <div class="btDayTitle"><?php echo $title;?></div>
                                    <div class="btDayHeadline"><h3><?php echo $headline;?></h3></div>
                                    <div class="btDayContent"><?php echo $description;?></div>
                            </div>
                         <?php
                         $i_tour_rwmb_plan_title++;
                     }
                    ?>
            </div>    
            <?php
        }
}

// SINGLE TOUR TAB: LOCATION
if ( ! function_exists( 'boldthemes_show_tour_location_tab' ) ) {
	function boldthemes_show_tour_location_tab() {
            $show = false;
            if (  !empty(BoldThemesFrameworkTemplate::$tour_rwmb_destination) && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_destination) ){
                $show = true;
            }
            return $show;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_location_tab_html' ) ) {
	function boldthemes_get_tour_location_tab_html() { 
            if ( !bt_map_is_osm() ) {
                if ( BoldThemesFrameworkTemplate::$tour_api_key != '' ){
                    wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&key='.wp_kses_post(BoldThemesFrameworkTemplate::$tour_api_key).'&callback=bt_tour_location_init_map#asyncload');
                }else{
                   wp_enqueue_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&callback=bt_tour_location_init_map#asyncload');
                }
            }
            
            if ( bt_map_is_osm() ) {
                require_once( 'openmap.php' ); 
            }else{
                require_once( 'map.php' ); 
            }
            ?>
                <div class="btTourMainContent">
                    <?php
                        foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_destination as $tour_rwmb_destination){                             
                            $page_link = bt_bb_get_permalink_by_slug_tour( $tour_rwmb_destination->page_slug, 'portfolio' ) != '' ? bt_bb_get_permalink_by_slug_tour( $tour_rwmb_destination->page_slug, 'portfolio' ) : '#';
                            ?>
                                <h3 class="btTourLocationHeading" id="tour_destination_<?php echo $tour_rwmb_destination->term_id;?>">
                                    <span><?php esc_html_e( 'More about', 'bt_plugin' )?> <?php echo $tour_rwmb_destination->name;?></span>
                                    <?php if ( $page_link != '#') { ?>
                                        <a href="<?php echo $page_link; ?>" class="btDiscoverLocation"><?php esc_html_e( 'Discover', 'bt_plugin' )?> <?php echo $tour_rwmb_destination->name;?></a>
                                    <?php } ?>
                                </h3>
                                <div><?php echo $tour_rwmb_destination->more_about;?></div>
                            <?php
                        }
                    ?>
                </div>
            <?php
        }
}

// SINGLE TOUR TAB: GALLERY
if ( ! function_exists( 'boldthemes_show_tour_gallery_tab' ) ) {
	function boldthemes_show_tour_gallery_tab() {
            $show = false;
            if (  !empty(BoldThemesFrameworkTemplate::$tour_rwmb_images) && is_array(BoldThemesFrameworkTemplate::$tour_rwmb_images) ){
                $show = true;
            }
            return $show;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_gallery_tab_html' ) ) {
	function boldthemes_get_tour_gallery_tab_html() { 
            $images  = BoldThemesFrameworkTemplate::$tour_rwmb_images;  
			
            $images_ids = array();
            foreach ( $images as $image ) {
                array_push($images_ids,$image['ID']);
            }
            
            $images = is_array( $images_ids ) ? implode( ',', $images_ids ) : $images_ids;
            
            $gallery_html = do_shortcode( '[bt_masonry_image_grid el_id="tour_gallery" images="' . $images . '" columns="' . BoldThemesFrameworkTemplate::$tour_grid_gallery_columns . '" format="" gap="' . BoldThemesFrameworkTemplate::$tour_grid_gallery_gap . '" no_lightbox=""]' );
            echo $gallery_html;
        }
}


// SINGLE TOUR TAB: REVIEWS
if ( ! function_exists( 'boldthemes_show_tour_reviews_tab' ) ) {
	function boldthemes_show_tour_reviews_tab() {
		if ( BoldThemesFrameworkTemplate::$tour_single_author_review ) {
            $show = true;
		} else {
			$show = false;
		}

            return $show;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_reviews_tab_html' ) ) {
	function boldthemes_get_tour_reviews_tab_html() {             
            if ( BoldThemesFrameworkTemplate::$excerpt != '' ) { 
                ?>
                <div class="btTourExcerpt">
                    <?php echo BoldThemesFrameworkTemplate::$excerpt;?>
                </div>
                <?php                 
            } 
            
            if ( BoldThemesFrameworkTemplate::$tour_single_author_review ) {
                    get_template_part( 'views/author_reviews' );
            }
            ?>							
            <section class="btComments gutter">
                    <div class="port">
                            <div class="btCommentsContent">
                                    <?php get_template_part( 'views/comments_tour' ); ?>
                            </div>
                    </div>
            </section>
            <?php            
        }
}


// SINGLE TOUR TAB: ADDITIONAL INFO
if ( ! function_exists( 'boldthemes_show_tour_additional_info_tab' ) ) {
	function boldthemes_show_tour_additional_info_tab() {
            $show = false;
            if (   BoldThemesFrameworkTemplate::$tour_rwmb_location_description != '' ){
                $show = true;
            }
            return $show;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_additional_info_tab_html' ) ) {
	function boldthemes_get_tour_additional_info_tab_html() {
           ?>
                <div class="btTourMainContent">
                        <h3><?php echo esc_html__( 'More about this tour', 'bt_plugin' );?></h3>
                        <div><?php echo BoldThemesFrameworkTemplate::$tour_rwmb_location_description;?></div>
                 </div>
            <?php
        }
}


// SINGLE TOUR TAB: SIMILAR TOURS
if ( ! function_exists( 'boldthemes_show_tour_similar_tours_tab' ) ) {
	function boldthemes_show_tour_similar_tours_tab() {
		
            //show tab
            BoldThemesFrameworkTemplate::$search_orderby	= 'post_date';
            BoldThemesFrameworkTemplate::$search_order		= 'DESC';
            BoldThemesFrameworkTemplate::$search_limit		= boldthemes_get_tour_similar_list_limit();
			BoldThemesFrameworkTemplate::$posts_per_page	= boldthemes_get_tour_similar_list_limit();
           
           //tour search by categories
            if ( BoldThemesFrameworkTemplate::$tour_similar_tours_list_by_type == 'category'){
                    $tour_categories = array();
                    foreach ( BoldThemesFrameworkTemplate::$tour_categories as $tour_category ){                
                        array_push( $tour_categories, $tour_category->slug );
                    }            
                    $category_slugs = '';
                    foreach ( $tour_categories as $key=>$value){
                        $category_slugs .= $value . '; ';
                    } 

                    BoldThemesFrameworkTemplate::$search_categories     = bt_get_tour_categories_by_slugs( $category_slugs );
                    BoldThemesFrameworkTemplate::$search_destination    = array();
            }
            
            //tour search by destinations
            if ( BoldThemesFrameworkTemplate::$tour_similar_tours_list_by_type == 'destination'){
                    $tour_destinations = array();
                    foreach ( BoldThemesFrameworkTemplate::$tour_rwmb_destination as $tour_destination ){                
                        array_push( $tour_destinations, $tour_destination->slug );
                    }
                    
                    BoldThemesFrameworkTemplate::$search_categories     = array();
                    BoldThemesFrameworkTemplate::$search_destination    = $tour_destinations; 
            }            
            
            if ( (is_array(BoldThemesFrameworkTemplate::$search_categories) && empty(BoldThemesFrameworkTemplate::$search_categories) ) && 
                    (is_array(BoldThemesFrameworkTemplate::$search_destination) && empty(BoldThemesFrameworkTemplate::$search_destination) )){
                    return false;
            }
                
			
            BoldThemesFrameworkTemplate::$tours_similar  = boldthemes_get_query_items(
                    array(
                            'posts_per_page'     => BoldThemesFrameworkTemplate::$posts_per_page,
                            'search_limit'       => BoldThemesFrameworkTemplate::$search_limit,
                            'search_orderby'     => BoldThemesFrameworkTemplate::$search_orderby,
                            'search_order'       => BoldThemesFrameworkTemplate::$search_order,
                            'search_categories'  => BoldThemesFrameworkTemplate::$search_categories,
                            'search_destination' => BoldThemesFrameworkTemplate::$search_destination,
                    ) 
            );  
            
            $ret_tours_similar = array();
            $s = 0;
            if (  !empty(BoldThemesFrameworkTemplate::$tours_similar) && is_array(BoldThemesFrameworkTemplate::$tours_similar) ){                
                foreach ( BoldThemesFrameworkTemplate::$tours_similar as $tour ) { 
                    if ( $tour->ID != get_the_ID() ) { 
                        $s++; 
                        array_push( $ret_tours_similar, $tour );
                    }
                }   
            } 
            BoldThemesFrameworkTemplate::$tours_similar = $ret_tours_similar;
            if ( $s > 0 ){
               return true;
            }
            return false;
        }
}

if ( ! function_exists( 'boldthemes_get_tour_similar_tours_tab_html' ) ) {
	function boldthemes_get_tour_similar_tours_tab_html( $type = '', $gap = '', $columns = '' ) {  
            if ( !empty( BoldThemesFrameworkTemplate::$tours_similar ) ) { 
				
                $tour_list_type       = boldthemes_get_tour_similar_list_type( $type );
                $tour_list_gap        = boldthemes_get_tour_similar_list_gap( $gap );
                $tour_list_columns    = boldthemes_get_tour_similar_list_columns( $columns );
				
                ?>
                    <div class="btTourList <?php echo $tour_list_type;?> <?php echo $tour_list_gap;?>  <?php echo $tour_list_columns;?>" style="padding-top:0em;">
                        <?php 
                            $s = 0;
                            foreach ( BoldThemesFrameworkTemplate::$tours_similar as $tour ) {                               
                                if ( $tour->ID != get_the_ID() ) {
                                    if ( BoldThemesFrameworkTemplate::$tour_single_design == 'btListDesignList' ) {
                                        echo boldthemes_get_tour_single_block_list_html( $tour->ID, BoldThemesFrameworkTemplate::$tour_single_design );
                                    }else{
                                        echo boldthemes_get_tour_single_block_square_html( $tour->ID, BoldThemesFrameworkTemplate::$tour_single_design );
                                    }
                                    $s++;
                                }
                            }                             
                            if ( $s == 0 ){
                                ?>
                                    <div class="btTourList bt_bb_tour_list_empty bt_bb_tour_list_similar_empty">
                                        <p><?php esc_html_e( 'Sorry! There are no similar tours.', 'bt_plugin' )?></p>
                                    </div>
                                <?php
                            }
                        ?>
                    </div> 
                <?php
            }else{
                 ?>
                    <div class="btTourList bt_bb_tour_list_empty bt_bb_tour_list_similar_empty">
                        <p><?php esc_html_e( 'Sorry! There are no similar tours.', 'bt_plugin' )?></p>
                    </div>
                <?php
            }
        }
}

if ( ! function_exists( 'boldthemes_set_tab_html' ) ) {
    function boldthemes_set_tab_html($tab_id) {
        switch($tab_id){
            case 'btTourInformationTab':
                $html = boldthemes_get_tour_information_tab_html();
                break;
            case 'btTourPlanTab':
                $html = boldthemes_get_tour_plan_tab_html();
                break;
            case 'btTourLocationTab':
                $html = boldthemes_get_tour_location_tab_html();
                break;
            case 'btTourGalleryTab':
                $html = boldthemes_get_tour_gallery_tab_html();
                break;
            case 'btTourReviewsTab':
                $html = boldthemes_get_tour_reviews_tab_html();
                break;
            case 'btTourAdditionalInfoTab':
                $html = boldthemes_get_tour_additional_info_tab_html();
                break;
            case 'btTourSimilarToursTab':
                $html = boldthemes_get_tour_similar_tours_tab_html();
                break;
            case 'btTourCustomTab':   
                $tour_rwmb_custom_tab_content  = bt_check_get_tour_rwmb_data('tour_custom_tab_contnet', get_the_ID() );
                $html = '<div class="btTourMainContent">' . do_shortcode($tour_rwmb_custom_tab_content) . '</div>';
                break;
            default :
                $html = '';
                break;
        }
        echo $html;
    }
}