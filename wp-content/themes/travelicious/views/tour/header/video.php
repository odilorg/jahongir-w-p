<?php
$videos     = BoldThemesFrameworkTemplate::$tour_rwmb_featured_video;
?>
<section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btTourHeadline btTourVideo">
    <?php
    foreach ( $videos as $video ) {
        echo  do_shortcode( '[bt_header_video el_id="tour_carousel_header" video="' . esc_attr( $video ) . '"]' );
    }
    ?>
</section>
