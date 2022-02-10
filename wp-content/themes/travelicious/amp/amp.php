<?php
/*
*
*	Custom Styles in AMP
*
*/

/*
'light' => array(
	// Convert colors to greyscale for light theme color; see http://goo.gl/2gDLsp
	'theme_color'      => '#fff',
	'text_color'       => '#353535',
	'muted_text_color' => '#696969',
	'border_color'     => '#c2c2c2',
),
'dark' => array(
	// Convert and invert colors to greyscale for dark theme color; see http://goo.gl/uVB2cO
	'theme_color'      => '#0a0a0a',
	'text_color'       => '#dedede',
	'muted_text_color' => '#b1b1b1',
	'border_color'     => '#707070',
)
*/

add_action( 'amp_post_template_css', 'boldthemes_amp_additional_css_styles' );
if ( ! function_exists( 'boldthemes_amp_additional_css_styles' ) ) {
	function boldthemes_amp_additional_css_styles( $amp_template ) {
		
		// Get Customize CSS 

		$logo = boldthemes_get_option('logo');
		if ( '' === $logo) {
			$logo	= boldthemes_get_option('alt_logo');
		}

		$body_font	=  urldecode(boldthemes_get_option('body_font'));
		if (  $body_font == 'no_change' ){
			$body_font	= "Barlow";
		}

		$heading_font =  urldecode(boldthemes_get_option('heading_font'));
		if (  $heading_font == 'no_change' ){
			$heading_font	= "Montserrat";
		}

		$accent_color	 =  boldthemes_get_option('accent_color');
		if ( '' === $accent_color ){
			$accent_color = '#1976bc';
		}

		$alternate_color =  boldthemes_get_option('alternate_color');
		if ( '' === $alternate_color ){
			$alternate_color = '#8dc645';
		}

		$accent_color_amp		 = boldthemes_sanitize_hex_text_color( 'text_color' );	
		$alternate_color_amp	 = boldthemes_sanitize_hex_text_color( 'text_color' );	

		$theme_color             = boldthemes_sanitize_hex_text_color( 'theme_color' );
		$text_color              = boldthemes_sanitize_hex_text_color( 'text_color' );
		$muted_text_color        = boldthemes_sanitize_hex_text_color( 'muted_text_color' );
		$border_color            = boldthemes_sanitize_hex_text_color( 'border_color' );
		$link_color              = boldthemes_sanitize_hex_text_color( 'link_color' );
		$header_background_color = boldthemes_sanitize_hex_text_color( 'header_background_color' );
		$header_color            = boldthemes_sanitize_hex_text_color( 'header_color' );

		?>
		body {
			font: 16px/1.75em <?php echo wp_kses_post( $body_font ); ?>;
		}
		/* Header
		----------------------*/
		header.amp-wp-header {
			box-shadow: 0 0 30px 0 rgba(24,24,24,.15);
			position: relative;
		}
		.amp-wp-header .amp-wp-site-icon {
			display: none;
		}
		.amp-wp-header div {
			padding: .625em;
			max-width: 840px;
		}
		<?php
			if ( $logo ) {
		?>
				header.amp-wp-header a {
					background: url( '<?php echo esc_url( $logo);?>' ) no-repeat;
					background-size: contain;
					display: block;
					height: 50px;
					margin: 0 auto;
					text-indent: -9999px;
				}
		<?php
			}
		?>
		.amp-wp-meta,
		.amp-wp-header div,
		.amp-wp-title,
		.wp-caption-text,
		.amp-wp-tax-category,
		.amp-wp-tax-tag,
		.amp-wp-comments-link,
		.amp-wp-footer p,
		.back-to-top {
			font-family: <?php echo wp_kses_post( $body_font ); ?>;
			color: currentColor;
		}
		.amp-wp-article {
			color: currentColor;
		}
		/* Post headline
		----------------------*/
		.amp-wp-article-header {
			padding: 3em 10px 5em;
			background-image: linear-gradient(to right, <?php echo wp_kses_post( $accent_color ); ?> 0%, <?php echo wp_kses_post( $alternate_color ); ?> 100%);
			margin: 0;
		}
		.amp-wp-article > .amp-wp-article-header:first-child {
			padding-bottom: 3em;
		}
		.amp-wp-article > .amp-wp-article-header + .amp-wp-article-featured-image {
			margin-top: 1.5em;
		}
		.amp-wp-title {
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			line-height: 1em;
			font-size: 2.5em;
			letter-spacing: -.05em;
			margin: 0 auto 0;
			padding: 0 0 0;
			max-width: 840px;
			color: #FFF;
			text-shadow: 0 2px 5px rgba(24,24,24,.2);
			font-weight: 700;
			font-weight: 800;
			text-align: center;
		}
		.amp-wp-article-header .amp-wp-meta {
			display: none;
		}
		
		/* Featured image
		----------------------*/
		.amp-wp-article-featured-image .wp-caption-text {
			display: none;
		}
		.amp-wp-article-featured-image {
			margin-top: -4em;
			box-shadow: 0 5px 15px 0 rgba(24,24,24,.15);
		}
		.amp-wp-article-featured-image amp-img {
			display: block;
		}
		.amp-wp-article-content {
			margin: 0 1em 30px;
		}
		
		/* Heading sizes
		----------------------*/
		.amp-wp-article-content h1, 
		.amp-wp-article-content h2,
		.amp-wp-article-content h3,
		.amp-wp-article-content h4,
		.amp-wp-article-content h5,
		.amp-wp-article-content h6 {
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 700;
			font-weight: 800;
			letter-spacing: -.05em;
			font-size: 1.875em;
			line-height: 1.4;
			margin: 0;
			padding: 0 0 .4em;
		}
		.amp-wp-article-content h1 strong,
		.amp-wp-article-content h2 strong,
		.amp-wp-article-content h3 strong,
		.amp-wp-article-content h4 strong,
		.amp-wp-article-content h5 strong,
		.amp-wp-article-content h6 strong {
			font-weight: 700;
			font-weight: 800;
		}

		/* Promo title
		----------------------*/
		.amp-wp-article-content .btTourPromoTitleAmp {
			text-align: center;
			padding: 3em 0;
			max-width: 80%;
			margin: 0 auto;
		}
		.amp-wp-article-content .btTourPromoTitleAmp h2 {
			font-size: 2.5em;
			font-weight: 500;
		}
		.amp-wp-article-content .btTourPromoTitleAmp h2 s {
			font-weight: 700;
			font-weight: 800;
			text-decoration: none;
			position: relative;
			margin-left: .08em;
			margin-right: .08em;
			display: inline-block;
		}
		.amp-wp-article-content .btTourPromoTitleAmp h2 b {
			font-weight: 700;
			font-weight: 800;
			color: inherit;
			position: relative;
			z-index: 1;
		}
		.amp-wp-article-content .btTourPromoTitleAmp h2 s:after {
			display: block;
			position: absolute;
			background-image: linear-gradient(to right, <?php echo wp_kses_post( $accent_color ); ?> 0%, <?php echo wp_kses_post( $alternate_color ); ?> 100%);
			left: -.16em;
			right: -.16em;
			height: .5em;
			bottom: .1em;
			content: "";
		}
		.amp-wp-article-content .btTourPromoTitleAmp .bt_bb_headline_superheadline {
			display: block;
			font-size: .35em;
			font-family: <?php echo wp_kses_post( $body_font ); ?>;
			text-transform: uppercase;
			letter-spacing: 0;
			font-weight: 400;
		}

		/* Main tour data
		----------------------*/
		.amp-wp-article-content .btSingleTourInfoAmp {
			background-image: linear-gradient(to right, <?php echo wp_kses_post( $accent_color ); ?> 0%, <?php echo wp_kses_post( $alternate_color ); ?> 100%);
			color: #FFF;
			position: relative;
			padding: 1.875em;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btPromoPrice {
			position: absolute;
			left: -5px;
			top: -5px;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 700;
			font-weight: 800;
			padding: 0;
			z-index: 10;
			background: <?php echo wp_kses_post( $alternate_color ); ?>;
			color: #FFF;
			text-shadow: 0 1px 3px rgba(24,24,24,.2);
			font-size: .75em;
			text-transform: uppercase;
			padding: .1666666em 1.666666em;
			line-height: 2;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btPromoPrice:before,
		.amp-wp-article-content .btSingleTourInfoAmp .btPromoPrice:after {
			content: "";
			display: block;
			position: absolute;
			left: 0;
			bottom: -5px;
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 0 5px 5px 0;
			border-color: transparent <?php echo wp_kses_post( $alternate_color ); ?> transparent transparent;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btPromoPrice:after {
			border-color: transparent #181818 transparent transparent;
			opacity: .2;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btSingleTourInfoInner {
			display: flex;
			flex-direction: column;
			line-height: 1.25;
			align-items: center;
			flex-wrap: wrap;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btTourIcon {
			flex: 1 1 100%;
			max-width: 100%;
			display: flex;
			margin-bottom: .5em;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btTourIcon:last-child {
			margin-bottom: 0;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btTourInfo .btTourDesc {
			font-size: 1.25em;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 700;
			font-weight: 800;
		}
		.amp-wp-article-content .btSingleTourInfoAmp .btTourInfo .btTourDesc em {
			font-size: .5em;
			font-weight: 500;
			font-style: normal;
		}
		
		/* Tour Excerpt
		----------------------*/
		.amp-wp-article-content .btTourExcerptAmp  {
			margin: 3em 0 0;
		}

		/* Tour Includes
		----------------------*/
		.amp-wp-article-content .btTourIncludes {
			padding: 0;
			margin: 3em 0;
		}
		.amp-wp-article-content .btTourIncludes h3 {
			font-size: 1.875em;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 700;
			font-weight: 800;
			letter-spacing: -.05em;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude {
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude:after {
			clear: both;
			border-bottom: 1px solid;
			display: block;
			content:  "";
			margin: 1em 0;
			flex: 1 1 100%;
			opacity: .1;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude:last-child:after {
			display: none;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeTitle {
			flex: 1 1 100%;
			max-width: 100%;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 800;
			letter-spacing: -.05em;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent {
			display: flex;
			justify-content: space-between;
			flex-direction: row;
			flex: 1 1 100%;
			max-width: 100%;
			flex-wrap: wrap;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink {
			font-size: .875em;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 700;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a {
			color: <?php echo wp_kses_post( $alternate_color ); ?>;
			white-space: nowrap;
			text-decoration: none;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a:hover {
			color: <?php echo wp_kses_post( $accent_color ); ?>;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a:before {
			width: 1em;
			display: inline-block;
			content: "";
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a:after {
			content: "\203a";
			padding: 0 .5em;
			font-weight: 800;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btTourSingleIncludeContentOtherTimes {
			font-size: .875em;
			width: 100%;
			flex: 0 0 100%;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btTourSingleIncludeContentOtherTimes ul {
			list-style: none;
			margin: 1em 0 0;
			padding: 1em 0 0;
			position: relative;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btTourSingleIncludeContentOtherTimes ul:before {
			display: block;
			content: "";
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			background: currentColor;
			height: 1px;
			opacity: .1;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btTourSingleIncludeContentOtherTimes ul li:before {
			content: "\01F4C5";
			opacity: .2;
			margin-right: .2em;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btIncludedItems,
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btExcludedItems {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btIncludedItems li span:before,
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btExcludedItems li span:before {
			font-size: .8;
			margin-right: .2em;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btIncludedItems li span:before {
			content: "\2713";
			color: <?php echo wp_kses_post( $accent_color ); ?>;
			font-weight: 800;
		}
		.amp-wp-article-content .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btExcludedItems li span:before {
			content: "\2716";
			opacity: .2;
		}

		/* Tour Plan
		----------------------*/
		.amp-wp-article-content .btTourPlanTab .btTourPlan .btTourPlanDay:first-child:before {
			clear: both;
			border-bottom: 1px solid currentColor;
			display: block;
			content: "";
			margin: 2.25em 0;
			opacity: .1;
		}
		.amp-wp-article-content .btTourPlanTab .btTourPlan .btTourPlanDay:after {
			clear: both;
			border-bottom: 1px solid currentColor;
			display: block;
			content: "";
			margin: 2.25em 0;
			opacity: .1;
		}
		.amp-wp-article-content .btTourPlanTab .btTourPlan .btTourPlanDay .btDayTitle {
			color: <?php echo wp_kses_post( $accent_color ); ?>;
			text-transform: uppercase;
		}

		/* Meta
		----------------------*/
		.amp-wp-meta {
			font-size: .6875em;
		}
		.amp-wp-byline amp-img {
			border: 2px solid rgba(0,0,0,.1);
		}
		.amp-wp-article-content amp-img {
			margin-bottom: 1em;
		}

		/* Quotes
		----------------------*/
		blockquote {
			display: block;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			letter-spacing: -.05em;
			margin: 0;
			font-size: 1.2em;
			font-weight: 600;
			line-height: 2em;
			position: relative;
			padding: calc(2em + .75rem) 2.4em 2em;
			color: currentColor;
			background: transparent;
			border: 0;
		}
		blockquote b, blockquote strong {
			font-weight: 700;
			font-weight: 800;
		}
		blockquote:after {
			display: block;
			height: .75rem;
			background-image: linear-gradient(to right, <?php echo wp_kses_post( $accent_color ); ?> 0%, <?php echo wp_kses_post( $alternate_color ); ?> 100%);
			content: "";
			position: absolute;
			top: 0;
			left: 15%;
			right: 15%;
		}
		blockquote:before {
			content: '\201e';
			color: inherit;
			display: inline-block; 
			font-size: 1.875rem;
			font-weight: 800;
			line-height: 0;
			margin-right: 7px;
			transform: translateY(-10px);
		}
		blockquote p:first-child, blockquote div:first-child {
			display: inline;
		}
		blockquote cite {
			font-style: normal;
			font-size: .8em;
			opacity: .4;
		}


		/* Links
		----------------------*/
		a {
			color: <?php echo wp_kses_post( $accent_color ); ?>;
			transition: color 300ms ease;
		}
		a:hover,
		a:active,
		a:focus {
			color: <?php echo wp_kses_post( $alternate_color ); ?>;
			transition: color 300ms ease;
		}

		/* Categories, Tags
		----------------------*/
		.amp-wp-tax-category, .amp-wp-tax-tag {
			margin: 1.5em 30px;
		}
		.amp-wp-tax-category a {
			background: <?php echo wp_kses_post( $alternate_color ); ?>;
			color: #FFF;
			text-decoration: none;
			text-transform: uppercase;
			padding: .625em 1em;
			border-radius: 2px;
			transition: opacity 300ms ease;
			margin-right: -3px;
		}
		.amp-wp-tax-category a:hover,
		.amp-wp-tax-category a:active,
		.amp-wp-tax-category a:focus {
			opacity: .5;
		}
		.amp-wp-tax-tag a {
			color: currentColor;
			background: rgba(0,0,0,.1);
			text-decoration: none;
			padding: .625em 1em;
			border-radius: 2px;
			transition: background 300ms ease, color 300ms ease;
			margin-right: -3px;
		}
		.amp-wp-tax-tag a:hover,
		.amp-wp-tax-tag a:active,
		.amp-wp-tax-tag a:focus {
			background: #181818;
			color: #FFF;
			transition: background 300ms ease, color 300ms ease;
		}
		.amp-wp-comments-link a {
			background: <?php echo wp_kses_post( $accent_color ); ?>;
			color: #FFF;
			border: 0;
			transition: background 300ms ease;
			padding: 1.2em 1em;
			font-size: 12px;
			font-weight: 700;
			border-radius: 0;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
		}
		.amp-wp-comments-link a:hover,
		.amp-wp-comments-link a:active,
		.amp-wp-comments-link a:focus {
			background: <?php echo wp_kses_post( $alternate_color ); ?>;
			transition: background 300ms ease;
			text-shadow: 0 1px 3px rgba(24,24,24,.15);
		}

		/* Footer
		----------------------*/
		.amp-wp-footer {
			box-shadow: 0 0 30px rgba(24,24,24,.15);
			color: currentColor;
			border: 0;
			margin-top: 3em;
		}
		.amp-wp-footer div {
			padding: 1.5em 30px .5em;
		}
		.amp-wp-footer h2 {
			text-indent: -999999px;
			background: url( '<?php echo esc_url( $logo);?>' ) no-repeat 50%;
			background-size: contain;
			height: 35px;
			margin: 0 0 1em;
			padding: 0 0 1em;
			position: relative;
		}
		.amp-wp-footer h2:after {
			position: absolute;
			content: "";
			background: currentColor;
			left: 0;
			right: 0;
			height: 1px;
			bottom: 0;
			display: block;
			opacity: .1;
		}
		.amp-wp-footer p {
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 600;
		}
		.amp-wp-footer a {
			color: currentColor;
			font-family: <?php echo wp_kses_post( $heading_font ); ?>;
			font-weight: 600;
		}
		.back-to-top {
			text-transform: uppercase;
			position: relative;
			display: block;
			text-align: center;
			right: auto;
			bottom: 4px;
		}
		.bt_bb_fe_preview_toggler, .bt_bb_fe_count {
			display: none !important;
		}
		
		<?php
	}
}

/*
*
*	Loading fonts in AMP
*
*/

add_action( 'amp_post_template_head', 'boldthemes_amp_post_template_add_fonts' );

if ( ! function_exists( 'boldthemes_amp_post_template_add_fonts' ) ) {
	function boldthemes_amp_post_template_add_fonts( ) {

		$body_font		= urldecode(boldthemes_get_option('body_font'));
		$heading_font	= urldecode(boldthemes_get_option('heading_font'));

		if ( $body_font != 'no_change' ) {
			$url_body_font = $body_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$body_font_state = _x( 'on', 'Barlow font: on or off', 'travelicious' );
			if ( 'off' !== $body_font_state ) {
				$url_body_font = 'Barlow' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( $heading_font != 'no_change' ) {
			$url_heading_font = $heading_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$heading_font_state = _x( 'on', 'Montserrat font: on or off', 'travelicious' );
			if ( 'off' !== $heading_font_state ) {
				$url_heading_font = 'Montserrat' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}
		
		$url_body_font		= 'https://fonts.googleapis.com/css?family=' . $url_body_font;
		$url_heading_font	= 'https://fonts.googleapis.com/css?family=' . $url_heading_font;
		
		?>
			<link rel="stylesheet" href="<?php echo  esc_url( $url_body_font ); ?>" type='text/css'>
			<link rel="stylesheet" href="<?php echo  esc_url( $url_heading_font ); ?>" type='text/css'>
		<?php

		$meta_tags = array(
			sprintf( '<link rel="icon" href="%s" sizes="32x32" />', esc_url( get_site_icon_url( 32 ) ) ),
			sprintf( '<link rel="icon" href="%s" sizes="192x192" />', esc_url( get_site_icon_url( 192 ) ) ),
			sprintf( '<link rel="apple-touch-icon-precomposed" href="%s" />', esc_url( get_site_icon_url( 180 ) ) ),
			sprintf( '<meta name="msapplication-TileImage" content="%s" />', esc_url( get_site_icon_url( 270 ) ) ),
		);
		
		foreach ( $meta_tags as $meta_tag ) {
			echo "$meta_tag\n";
		}
	}
}

/*
*
*	Helper function for colors in AMP
*
*/

if ( ! function_exists( 'boldthemes_sanitize_hex_text_color' ) ) {
	function boldthemes_sanitize_hex_text_color( $amp_customizer_setting = 'text_color' ) {
	
		$template = new AMP_Post_Template( get_queried_object_id() );
		$color	  = $template->get_customizer_setting( $amp_customizer_setting );
		
		// 3 or 6 hex digits, or the empty string.
		if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
			return $color;
		}else{
			return '';
		}
		
	}
}







