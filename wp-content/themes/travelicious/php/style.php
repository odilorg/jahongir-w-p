<?php

   $prev_text = esc_html__( 'Previous', 'travelicious' );
   $next_text = esc_html__( 'Next', 'travelicious' );
   
   $prev_next_style_css = sanitize_text_field('
		button.mfp-arrow.mfp-arrow-left:after,
		.bt_bb_slider button.slick-arrow.slick-prev:after,
		.bt_bb_content_slider button.slick-arrow.slick-prev:after,
		nav.woocommerce-pagination ul li.woo-first-page a:after,
		button.pswp__button.pswp__button--arrow--left:after {
			content: "' . $prev_text . '";
		}
        button.mfp-arrow.mfp-arrow-right:after,
		.bt_bb_slider button.slick-arrow.slick-next:after,
		.bt_bb_content_slider button.slick-arrow.slick-next:after,
		nav.woocommerce-pagination ul li.woo-last-page a:after,
		button.pswp__button.pswp__button--arrow--right:after {
			content: "' . $next_text . '";
        }
', array() );
