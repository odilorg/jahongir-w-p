<?php
$images  = BoldThemesFrameworkTemplate::$tour_rwmb_featured_images;
$images_ids = array();
foreach ( $images as $image ) {
    array_push($images_ids,$image['ID']);
}
?>
<section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btTourHeadline btTourImageSlider">
    <?php
        $images = is_array( $images_ids ) ? implode( ',', $images_ids ) : $images_ids;
	echo do_shortcode( '[bt_header_slider el_id="tour_carousel_header" images="' . esc_attr( $images ) . '"]' );
    ?>
</section>

