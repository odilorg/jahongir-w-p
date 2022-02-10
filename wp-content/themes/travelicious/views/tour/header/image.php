<?php
$title			= BoldThemesFrameworkTemplate::$title;
$supertitle		= BoldThemesFrameworkTemplate::$supertitle;
$subtitle		= BoldThemesFrameworkTemplate::$subtitle;
$extra_class	= BoldThemesFrameworkTemplate::$extra_class;
$feat_image		= BoldThemesFrameworkTemplate::$feat_image;
$parallax		= BoldThemesFrameworkTemplate::$parallax;
$parallax_class	= BoldThemesFrameworkTemplate::$parallax_class;
$dash			= BoldThemesFrameworkTemplate::$dash;
$images         = BoldThemesFrameworkTemplate::$tour_rwmb_featured_images;

$feat_image_meta = '';
foreach ( $images as $image ) {
    $feat_image_meta = $image['full_url'];
}

if ( $title != '' ) {
    $extra_class .= $feat_image ? ' bt_bb_background_image btDarkSkin ' . apply_filters( 'boldthemes_header_headline_gradient', '' ) . $parallax_class  : '';
    ?>
    <section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btTourHeadline btTourImageHeadline <?php echo esc_attr( $extra_class );?>" style="background-image:url(<?php echo esc_url_raw( $feat_image_meta );?>);" data-parallax="<?php echo esc_attr( $parallax );?>" data-parallax-offset="-350">
		<?php
				echo boldthemes_get_heading_html( 
						array(
								'superheadline' => $supertitle,
								'headline' => $title,
								//'subheadline' => $subtitle,
								'html_tag' => "h1",
								'size' => apply_filters( 'boldthemes_header_headline_size', 'extra_large' ),
								'dash' => $dash,
								'el_style' => '',
								'el_class' => ''
						)
				);
		?>
    </section>
    <?php
}


	



