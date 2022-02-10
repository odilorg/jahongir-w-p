<?php
bt_get_tour_single_data_single_view();
bt_get_tour_options_data( );

$title			= BoldThemesFrameworkTemplate::$title;
$supertitle		= BoldThemesFrameworkTemplate::$supertitle;
$subtitle		= BoldThemesFrameworkTemplate::$subtitle;
$extra_class	= BoldThemesFrameworkTemplate::$extra_class;
$feat_image		= BoldThemesFrameworkTemplate::$feat_image;
$parallax		= BoldThemesFrameworkTemplate::$parallax;
$parallax_class	= BoldThemesFrameworkTemplate::$parallax_class;
$dash			= BoldThemesFrameworkTemplate::$dash;

BoldThemesFrameworkTemplate::$supertitle = '';
BoldThemesFrameworkTemplate::$tour_categories = array_unique( BoldThemesFrameworkTemplate::$tour_categories , SORT_REGULAR );
if ( !empty(BoldThemesFrameworkTemplate::$tour_categories) ){ 
        foreach ( BoldThemesFrameworkTemplate::$tour_categories as $tour_category) { 
            $category_link = get_term_link($tour_category);
            BoldThemesFrameworkTemplate::$supertitle .= '<a href="' . esc_url( $category_link ) . '">' . $tour_category->name . '</a> '; 
        } 
} 

$featured_images_count = count(BoldThemesFrameworkTemplate::$tour_rwmb_featured_images);
$featured_videos_count = count(BoldThemesFrameworkTemplate::$tour_rwmb_featured_video);

if ( $featured_images_count == 1 && $featured_videos_count == 0 ){
    get_template_part( 'views/tour/header/image' );
} else if ($featured_images_count > 1  && $featured_videos_count == 0 ){
    get_template_part( 'views/tour/header/image_slider' );
} else if ($featured_videos_count == 1 && $featured_images_count == 0 ){
    get_template_part( 'views/tour/header/video' );
} else if ( $featured_videos_count > 1 && $featured_images_count == 0){
    get_template_part( 'views/tour/header/video_slider' );
} else if ( $featured_videos_count > 0 && $featured_images_count > 0){
    get_template_part( 'views/tour/header/video_slider' );
}else{
    get_template_part( 'views/tour/header/standard' );
}
