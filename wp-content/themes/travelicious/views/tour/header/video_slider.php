<?php
$images  = BoldThemesFrameworkTemplate::$tour_rwmb_featured_images;
$videos  = BoldThemesFrameworkTemplate::$tour_rwmb_featured_video;

$images_ids = array();
foreach ( $images as $image ) {
    array_push( $images_ids, $image['ID'] );
}
$images = is_array( $images_ids ) ? implode( ',', $images_ids ) : $images_ids;

$videos_urls = array();
$videos_urls = is_array( $videos ) ? implode( ',', $videos ) : $videos;
?>
<section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btTourHeadline btTourVideoImageSlider">
    <?php
        echo do_shortcode( '[bt_header_video_slider el_id="tour_carousel_header" images="' . esc_attr( $images ) . '" videos="' . esc_attr( $videos_urls ) . '"]' );
    ?>
</section>

