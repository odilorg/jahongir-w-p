<?php
$review		= boldthemes_rwmb_meta( 'tour_review' );
$review_arr	= explode( PHP_EOL, $review );
$review_summary = boldthemes_rwmb_meta( 'tour_review_summary' );

if ( $review != '' && $review_summary != '' ) { 
    $overall_score          = boldthemes_get_post_rating();
    $overall_score_rating   = intval($overall_score) > 0 ? intval($overall_score) / 10 : 0;
    $overall_score_stars    = intval($overall_score) > 0 ? intval($overall_score) / 20 : 0;
    ?>
    <div class="btSiteAdminReview">
        <h3><?php echo esc_html__( 'Travelicious Review', 'travelicious' );?></h3>
	<div class="btSiteAdminReviewGrades">
                <div class="btTotalGrade">
                        <div class="btGradeHolder">
                                <div class="btGrade"><?php echo wp_kses_post($overall_score_rating);?></div>
                                <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo esc_attr( sprintf( esc_attr( 'Rated %d out of 5', 'travelicious' ), $overall_score_stars ) ); ?>">
                                    <span style="width:<?php echo esc_attr( $overall_score ); ?>%"><strong itemprop="ratingValue"><?php echo wp_kses_post( $overall_score_stars ); ?></strong><?php echo esc_html__( 'out of 5', 'travelicious' ); ?></span>
                                </div>
                        </div>
                </div>
                <div class="btSingleGrades">
                    <?php
                        foreach( $review_arr as $r ) {
                                $r_arr = explode( ';', $r );
                                if ( isset( $r_arr[1] ) ) {
                                        $rating = round( floatval( $r_arr[1] ) );
                                } else {
                                        $rating = 0;
                                }
                        ?>
                            <div class="bt_bb_progress_bar bt_bb_align_inherit bt_bb_size_normal bt_bb_style_line bt_bb_shape_square">
                                    <div class="bt_bb_progress_bar_bg"></div>
                                    <div class="bt_bb_progress_bar_inner animate animated" style="width:<?php echo wp_kses_post( $rating ); ?>%">
                                            <span class="bt_bb_progress_bar_text"><?php echo wp_kses_post( $r_arr[0] ); ?></span>
                                    </div>
                            </div>
                        <?php } ?>
                </div>
                <div class="btReviewSummary">
                        <div class="btSummaryTitle"><?php echo esc_html__( 'Summary', 'travelicious' );?></div>
                        <div class="btSummaryContent">
                                <p><?php echo wp_kses_post( $review_summary ); ?></p>
                        </div>
                </div>
        </div>
    </div>
<?php } ?>

