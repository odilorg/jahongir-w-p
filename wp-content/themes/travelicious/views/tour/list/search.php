<?php
$listing_form_action_page   = get_post_type_archive_link( 'tour' ) ? get_post_type_archive_link( 'tour' ) : '#' ;

$tour_single_design                 = boldthemes_get_tour_list_type();
$tour_similar_tours_list_gap        = boldthemes_get_tour_list_gap();
$tour_similar_tours_list_columns    = boldthemes_get_tour_list_columns();

BoldThemesFrameworkTemplate::$search_show_months      = boldthemes_get_option( 'tour_search_show_only_months' ) != ''
                    ? boldthemes_get_option( 'tour_search_show_only_months' ) : BoldThemes_Customize_Default::$data['tour_search_show_only_months'];
$tour_search_show_only_months = BoldThemesFrameworkTemplate::$search_show_months ? 1 : 0;

BoldThemesFrameworkTemplate::$datepicker_format = bt_set_wp_to_datepicker_format( get_option( 'date_format' ), $tour_search_show_only_months );
?>
<form id="tour_search_form" name="tour_search_form"  action="<?php echo esc_attr($listing_form_action_page);?>" method='get'>
    <input type="hidden" name="bt_tour_search_list_count" id="bt_tour_search_list_count" value="<?php echo esc_attr(BoldThemesFrameworkTemplate::$tour_list_count);?>" />
    <input type="hidden" name="bt_tour_search_list_view"  id="bt_tour_search_list_view"  value="<?php echo esc_attr(BoldThemesFrameworkTemplate::$tour_list_view);?>" />
    <input type="hidden" name="bt_tour_search_type"  id="bt_tour_search_type"  value="<?php echo esc_attr(BoldThemesFrameworkTemplate::$tour_search_action_type);?>" />    
    <input type="hidden" name="bt_tour_single_design"  id="bt_tour_single_design"  value="<?php echo esc_attr($tour_single_design);?>" />
    <input type="hidden" name="bt_tour_search_list_gap"  id="bt_tour_search_list_gap"  value="<?php echo esc_attr($tour_similar_tours_list_gap);?>" />
    <input type="hidden" name="bt_tour_search_list_columns"  id="bt_tour_search_list_columns"  value="<?php echo esc_attr($tour_similar_tours_list_columns);?>" />
    <input type="hidden" name="bt_tour_search_show_months"  id="bt_tour_search_show_months"  value="<?php echo esc_attr($tour_search_show_only_months);?>" />
    <input type="hidden" name="bt_tour_search_date_format"  id="bt_tour_search_date_format"  value="<?php echo esc_attr(BoldThemesFrameworkTemplate::$datepicker_format);?>" />
    <div class="tour_search gutter">
            <div class="port">
                    <div class="btSearchToursRow">
                            <div class="btSearchField btFieldKeyword">
                                    <label for="bt_tour_search_keyword"><?php echo esc_html__( 'Tour Keywords', 'travelicious' ); ?></label>
                                    <div class="btFieldWrapper">
                                            <input id="bt_tour_search_keyword" name="bt_tour_search_keyword" type="text" value='<?php echo esc_attr( BoldThemesFrameworkTemplate::$search_keyword, 'travelicious' );?>' placeholder="<?php echo esc_attr__( 'Tour Keywords', 'travelicious' ); ?>" />
                                    </div>
                            </div>
                            <div class="btSearchField btFieldDestination">
                                    <label for="bt_tour_search_destination"><?php echo esc_html__( 'Select your Destination', 'travelicious' ); ?></label>
                                    <div class="btFieldWrapper">
                                            <span class="bt_tour_search_destination_span"></span>
                                            <input id="bt_tour_search_destination" name="bt_tour_search_destination" type="text" value='<?php echo esc_attr( BoldThemesFrameworkTemplate::$search_destination );?>' placeholder="<?php echo esc_attr__( 'Select your Destination', 'travelicious' ); ?>" />
                                            <div id="auto-bt_tour_search_destination"></div>
                                    </div>
                            </div>
                            <div class="btSearchField btFieldDate">
                                    <label for="bt_tour_search_date"><?php echo esc_html__( 'Departure Date', 'travelicious' ); ?></label>
                                    <div class="btFieldWrapper">
                                            <span class="bt_tour_search_date_span"></span>
                                            <input id="bt_tour_search_date" name="bt_tour_search_date" type="text"  autocomplete="off" placeholder="<?php echo esc_attr__( 'Departure Date', 'travelicious' ); ?>" value='<?php echo esc_attr( BoldThemesFrameworkTemplate::$search_start_date ); ?>' onfocus="" onblur="" />
                                     </div>
                            </div>
                            <div class="btSearchField btFieldPrice btFieldPriceFrom">
                                    <label for="bt_tour_search_price_from"><?php echo esc_html__( 'Price From', 'travelicious' ); ?></label>
                                    <input id="bt_tour_search_price_from" name="bt_tour_search_price_from" type="number" value='<?php echo esc_attr( BoldThemesFrameworkTemplate::$search_price_from ); ?>' min="0" placeholder="<?php echo esc_attr__( 'Price From', 'travelicious' ); ?>" step="any" />
                            </div>
                            <div class="btSearchField btFieldPrice btFieldPriceTo">
                                    <label for="bt_tour_search_price_to"><?php echo esc_html__( 'Price To', 'travelicious' ); ?></label>
                                    <input id="bt_tour_search_price_to" name="bt_tour_search_price_to" type="number" value='<?php echo esc_attr( BoldThemesFrameworkTemplate::$search_price_to ); ?>' min="0" placeholder="<?php echo esc_attr__( 'Price To', 'travelicious' ); ?>" step="any" />
                            </div>
                            <div class="btSearchField btSearchButton">
                                    <button  id="bt_bb_tour_search_submit"><span><?php echo esc_html__( 'Find Your Tour', 'travelicious' ); ?></span></button>
                            </div>
                    </div>
                    <div class="btSearchToursRow btSearchCategories">
                            <?php if ( BoldThemesFrameworkTemplate::$tour_search_show_categories ) { ?>
                                <div class="btCategories">
                                        <div class="btLabelCategories"><?php echo esc_html__( 'Categories', 'travelicious' ); ?>:</div>
                                        <?php 
                                        foreach ( BoldThemesFrameworkTemplate::$tour_categories as $tour_category ) { 
                                            $category_link = get_term_link($tour_category);
                                            $checked =  is_array(BoldThemesFrameworkTemplate::$search_categories) && in_array($tour_category->term_id , BoldThemesFrameworkTemplate::$search_categories ) ? ' checked' : '';
                                            
                                            $tour_category_name = preg_replace('/\s+/', '_', $tour_category->name);
                                            ?>
                                                <div class="btSingleCategory">
                                                       <input type="checkbox" id="bt_tour_search_category_<?php echo esc_attr($tour_category_name);?>" name="bt_tour_search_category[]"  value="<?php echo esc_attr($tour_category->term_id);?>" <?php echo esc_attr($checked);?>/>
                                                       <label for="bt_tour_search_category_<?php echo esc_attr($tour_category_name);?>"><?php echo esc_attr($tour_category->name);?></label>
                                               </div>
                                            <?php
                                        } ?>
                                </div>
                            <?php } ?>
                            <div class="btLastSorting">
                                    <label for="bt_tour_search_sorting"><?php echo esc_html__( 'Sort by', 'travelicious' ); ?></label>
                                    <select id="bt_tour_search_sorting" name="bt_tour_search_sorting">
                                            <option value="0" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 0 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by date ascending', 'travelicious' ); ?></option>
                                            <option value="1" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 1 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by date descending', 'travelicious' ); ?></option>
                                            <option value="2" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 2 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by name - A to Z', 'travelicious' ); ?></option>
                                            <option value="3" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 3 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by name - Z to A', 'travelicious' ); ?></option>
                                            <option value="4" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 4 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by price - low to high', 'travelicious' ); ?></option>
                                            <option value="5" <?php if ( BoldThemesFrameworkTemplate::$search_sorting == 5 ) { echo 'selected';}?>><?php echo esc_html__( 'Sort by price - high to low', 'travelicious' ); ?></option>
                                    </select>
                            </div>
                    </div>
            </div>
    </div>
</form>