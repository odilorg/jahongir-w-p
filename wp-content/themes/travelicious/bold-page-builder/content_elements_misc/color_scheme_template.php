<?php

$custom_css = "

	/* Icons */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset !important;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
		background-color: {$color_scheme[1]};
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset !important;
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset !important;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset !important;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	

	/* Buttons */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a:hover {
		box-shadow: 0 0 0 2.5em {$color_scheme[1]} inset, 0 1px 3px rgba(24,24,24,.15);
		color: {$color_scheme[2]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a {
		box-shadow: 0 0 0 2.5em {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[1]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a:hover {
		box-shadow: 0 0 0 0 {$color_scheme[2]} inset, 0 1px 3px rgba(24,24,24,.15);
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a {
		color: {$color_scheme[2]};
	}

	/* Services */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder	{
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder	{
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}
	
	/* Headline */
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h1 s:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h2 s:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h3 s:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h4 s:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h5 s:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline h6 s:after {
		background: {$color_scheme[1]};
		opacity: .15;
	}
	
	/* Price List */
	
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} {
		background: {$color_scheme[2]};
	}
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} .bt_bb_price_list_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} .bt_bb_price_list_price {
		color: {$color_scheme[1]};
	}

	/* Progress Bars */
	
	.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_{$scheme_id} .bt_bb_progress_bar_inner:after {
		background: {$color_scheme[1]};
	}
	
	/* Section */
	
	.bt_bb_section.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	
	/* Google map */
	.bt_bb_section.bt_bb_color_scheme_{$scheme_id} .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location {
		background-color: {$color_scheme[2]};
	}
	
";