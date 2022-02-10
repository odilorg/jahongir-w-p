<?php
$share_html = boldthemes_get_share_html( get_permalink(), 'tour', 'xsmall' );
bt_get_tour_options_data();
bt_get_tour_single_data_single_view( get_the_ID() );
$tour_rwmb_booking_link = BoldThemesFrameworkTemplate::$tour_rwmb_booking_link != '' ? BoldThemesFrameworkTemplate::$tour_rwmb_booking_link : '#';

$tour_tabs = boldthemes_customize_tour_single_tabs();
?>
<article class="btTourSingleItemStandard gutter">
	<div class="port">
		<div class="btPostContentHolder">
			<div class="btArticleContent">
                                <?php 
                                $hide_headline = boldthemes_get_option( 'hide_headline' );
                                if ($hide_headline) {
                                    echo  boldthemes_get_tour_single_promo_title_html();
                                    echo  boldthemes_get_tour_single_info_html();                                    
                                }else{
                                    echo  boldthemes_get_tour_single_info_html();
                                    echo  boldthemes_get_tour_single_promo_title_html();
                                }
                                
                                ?>                            
				<div class="btTourTabs bt_bb_tabs bt_bb_style_simple bt_bb_shape_square">
					<ul class="bt_bb_tabs_header">
                                                <?php
                                                    foreach( $tour_tabs as $tour_tab ){
                                                        ?>
                                                            <li id="<?php echo esc_attr($tour_tab['id']);?>" class="on"><span><?php echo esc_html($tour_tab['title']);?></span></li>
                                                        <?php
                                                    }
                                                ?>
					</ul>
                                    
					<div class="bt_bb_tabs_tabs"> 
                                                <?php
                                                    foreach( $tour_tabs as $tour_tab ){
                                                        ?>
                                                            <div class="bt_bb_tab_item <?php echo esc_attr($tour_tab['id']);?>">
                                                                    <div class="bt_bb_tab_content">
                                                                            <?php echo boldthemes_set_tab_html($tour_tab['id']);?>
                                                                    </div>
                                                            </div>
                                                        <?php
                                                    }
                                                ?>                                                
					</div>
				</div>
			</div>
			<div class="btArticleShareEtc">
				<div class="btTagsColumn">
					<div class="btTags">
                                                <?php echo wp_kses_post( boldthemes_get_post_tags_html() ); ?>
					</div>
				</div> 
                                <?php if ( $share_html != '' ) { ?>
                                    <div class="btShareColumn">
                                            <span class="btShareTitle"><?php echo esc_html__( 'Share on social networks', 'travelicious' );?></span>
                                            <?php echo '<div class="btShareColumn">' . wp_kses_post( $share_html ) . '</div><!-- /btShareColumn -->';?>
                                    </div>
                                <?php } ?>
			</div>                        
                        <div class="btTourBookBottom">
                            <?php if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_enquiry_show ) { ?>
                                <a href="<?php echo esc_attr($tour_rwmb_booking_link);?>"  target="_blank">
                                    <span class="btnInnerText">
                                        <?php 
                                        if ( function_exists( 'boldthemes_get_book_this_tour_button_label' ) ){
                                            echo boldthemes_get_book_this_tour_button_label();
                                        }else{
                                            echo esc_html__( 'Book this Tour', 'travelicious' );
                                        }
                                        ?>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
		</div>
	</div>
</article>


