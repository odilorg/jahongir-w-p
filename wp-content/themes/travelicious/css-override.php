<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#1976bc";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#8dc645";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Barlow";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Barlow Semi Condensed";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Barlow";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "100";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor." -35" );$accentColorVeryVeryDark = CssCrush\fn__l_adjust( $accentColor." -42" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -15" );$alternateColorVeryDark = CssCrush\fn__l_adjust( $alternateColor." -25" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -40" );$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\";}
input[type=\"file\"]::-webkit-file-upload-button{background: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
input[type=\"file\"]::-webkit-file-upload-button:hover{background: {$alternateColor} !important;}
input[type=\"file\"]::-ms-browse{background: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
input[type=\"file\"]::-ms-browse:hover{background: {$alternateColor} !important;}
.fancy-select ul.options li:before,
.fancy-select ul.options li:first-child:before,
.fancy-select ul.options li:last-child:before{
    background: -webkit-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,#fff 0%,{$alternateColor} 100%);}
.fancy-select ul.options li:hover{background: {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\";}
blockquote{
    font-family: \"{$headingFont}\";}
blockquote:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient blockquote:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentDarkHeader .btPreloader .animation > div:first-child,
.btLightAccentHeader .btPreloader .animation > div:first-child,
.btTransparentLightHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
.btLoader{
    border-top: 2px solid {$accentColor} !important;
    border-bottom: 2px solid {$accentColor} !important;}
.btLoader:before{
    border-left: 2px solid {$alternateColor} !important;
    border-right: 2px solid {$alternateColor} !important;}
.btErrorPage{min-height: -webkit-calc(100vh - {$logoHeight}px);
    min-height: -moz-calc(100vh - {$logoHeight}px);
    min-height: calc(100vh - {$logoHeight}px);}
.btMenuBelowLogo .btErrorPage{height: -webkit-calc(100vh - 50px - {$logoHeight}px - 1px);
    height: -moz-calc(100vh - 50px - {$logoHeight}px - 1px);
    height: calc(100vh - 50px - {$logoHeight}px - 1px);}
.btErrorPage .bt_bb_row .bt_bb_column[data-width=\"6\"] .bt_bb_button a{background: {$accentColor};}
.btErrorPage .bt_bb_row .bt_bb_column[data-width=\"6\"] .bt_bb_button a:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.btBelowMenu .btPageHeadline.btTourHeadline .bt_bb_headline h1{padding-top: {$logoHeight}px;}
.btBelowMenu .btPageHeadline.btTourHeadline .bt_bb_headline .bt_bb_headline_superheadline{padding-top: -webkit-calc({$logoHeight}px + 1.22em);
    padding-top: -moz-calc({$logoHeight}px + 1.22em);
    padding-top: calc({$logoHeight}px + 1.22em);}
.btHeaderWidgetsLeftRightOn.btBelowMenu .btPageHeadline.btTourHeadline .bt_bb_headline .bt_bb_headline_superheadline{padding-top: -webkit-calc({$logoHeight}px + 1.22em + 1.83em);
    padding-top: -moz-calc({$logoHeight}px + 1.22em + 1.83em);
    padding-top: calc({$logoHeight}px + 1.22em + 1.83em);}
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourHeadline .bt_bb_headline .bt_bb_headline_superheadline{padding-top: -webkit-calc({$logoHeight}px + 50px + 1.22em);
    padding-top: -moz-calc({$logoHeight}px + 50px + 1.22em);
    padding-top: calc({$logoHeight}px + 50px + 1.22em);}
.btHeaderWidgetsLeftRightOn.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourHeadline .bt_bb_headline .bt_bb_headline_superheadline{padding-top: -webkit-calc({$logoHeight}px + 50px + 1.22em + 1.83em);
    padding-top: -moz-calc({$logoHeight}px + 50px + 1.22em + 1.83em);
    padding-top: calc({$logoHeight}px + 50px + 1.22em + 1.83em);}
.btBelowMenu .btPageHeadline.btTourStandardHeadline,
.btBelowMenu .btPageHeadline.btTourImageHeadline{height: -webkit-calc({$logoHeight}px + 35em);
    height: -moz-calc({$logoHeight}px + 35em);
    height: calc({$logoHeight}px + 35em);}
.btBelowMenu.btMenuBelowLogo .btPageHeadline.btTourStandardHeadline,
.btBelowMenu.btMenuBelowLogo .btPageHeadline.btTourImageHeadline{height: -webkit-calc({$logoHeight}px + 50px + 35em);
    height: -moz-calc({$logoHeight}px + 50px + 35em);
    height: calc({$logoHeight}px + 50px + 35em);}
.btPageHeadline.btTourStandardHeadline[style=\"background-image:url()\"] .bt_bb_headline .bt_bb_headline_superheadline a:first-child:before{color: {$accentColor};}
.btPageHeadline.btTourStandardHeadline[style=\"background-image:url()\"] .bt_bb_headline .bt_bb_headline_superheadline a:hover{color: {$accentColor};}
.btBelowMenu .btPageHeadline.btTourVideo .bt-video-container{height: -webkit-calc({$logoHeight}px + 40em);
    height: -moz-calc({$logoHeight}px + 40em);
    height: calc({$logoHeight}px + 40em);}
.btHeaderWidgetsLeftRightOn.btBelowMenu .btPageHeadline.btTourVideo .bt-video-container{height: -webkit-calc({$logoHeight}px + 40em + 1.83em);
    height: -moz-calc({$logoHeight}px + 40em + 1.83em);
    height: calc({$logoHeight}px + 40em + 1.83em);}
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideo .bt-video-container{height: -webkit-calc({$logoHeight}px + 50px + 40em);
    height: -moz-calc({$logoHeight}px + 50px + 40em);
    height: calc({$logoHeight}px + 50px + 40em);}
.btHeaderWidgetsLeftRightOn.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideo .bt-video-container{height: -webkit-calc({$logoHeight}px + 50px + 40em + 1.83em);
    height: -moz-calc({$logoHeight}px + 50px + 40em + 1.83em);
    height: calc({$logoHeight}px + 50px + 40em + 1.83em);}
.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container{height: -webkit-calc({$logoHeight}px + 40em);
    height: -moz-calc({$logoHeight}px + 40em);
    height: calc({$logoHeight}px + 40em);}
.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container .mejs-container .mejs-layers .mejs-overlay-loading,
.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container .mejs-container .mejs-layers .mejs-overlay-play{padding-top: {$logoHeight}px;}
.btHeaderWidgetsLeftRightOn.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container{height: -webkit-calc({$logoHeight}px + 40em + 1.83em);
    height: -moz-calc({$logoHeight}px + 40em + 1.83em);
    height: calc({$logoHeight}px + 40em + 1.83em);}
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container{height: -webkit-calc({$logoHeight}px + 50px + 40em);
    height: -moz-calc({$logoHeight}px + 50px + 40em);
    height: calc({$logoHeight}px + 50px + 40em);}
.btHeaderWidgetsLeftRightOn.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt-video-container{height: -webkit-calc({$logoHeight}px + 50px + 40em + 1.83em);
    height: -moz-calc({$logoHeight}px + 50px + 40em + 1.83em);
    height: calc({$logoHeight}px + 50px + 40em + 1.83em);}
.btBelowMenu .btPageHeadline.btTourVideo .bt_bb_separator,
.btBelowMenu .btPageHeadline.btTourImageSlider .bt_bb_separator,
.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt_bb_separator{margin-top: -webkit-calc({$logoHeight}px + 40em);
    margin-top: -moz-calc({$logoHeight}px + 40em);
    margin-top: calc({$logoHeight}px + 40em);}
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideo .bt_bb_separator,
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourImageSlider .bt_bb_separator,
.btMenuBelowLogo.btBelowMenu .btPageHeadline.btTourVideoImageSlider .bt_bb_separator{margin-top: -webkit-calc({$logoHeight}px + 50px + 40em);
    margin-top: -moz-calc({$logoHeight}px + 50px + 40em);
    margin-top: calc({$logoHeight}px + 50px + 40em);}
.mainHeader{
    font-family: \"{$menuFont}\";}
.mainHeader a:hover{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\";}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{font-family: \"{$menuFont}\";
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li > a:before{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient.btMenuHorizontal .menuPort ul ul li > a:before{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort > nav > ul > li > a:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient.btMenuHorizontal .menuPort > nav > ul > li > a:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.btMenuHorizontal .menuPort > nav > ul ul{
    top: -webkit-calc({$logoHeight}px - {$logoHeight}px*.25);
    top: -moz-calc({$logoHeight}px - {$logoHeight}px*.25);
    top: calc({$logoHeight}px - {$logoHeight}px*.25);
    font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.btStickyHeaderActive.btMenuHorizontal .menuPort > nav > ul ul{top: -webkit-calc({$logoHeight}px * .6 - {$logoHeight}px*.05);
    top: -moz-calc({$logoHeight}px * .6 - {$logoHeight}px*.05);
    top: calc({$logoHeight}px * .6 - {$logoHeight}px*.05);}
.btMenuBelowLogo.btMenuHorizontal .menuPort > nav > ul ul{top: -webkit-calc(50px - {$logoHeight}px*.05);
    top: -moz-calc(50px - {$logoHeight}px*.05);
    top: calc(50px - {$logoHeight}px*.05);}
html:not(.touch) body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a{
    font-family: {$menuFont},Arial,Helvetica,sans-serif;}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInMenu .topBarInMenuCell{line-height: -webkit-calc({$logoHeight}px/2 - 2px);
    line-height: -moz-calc({$logoHeight}px/2 - 2px);
    line-height: calc({$logoHeight}px/2 - 2px);}
.btMenuBelowLogo.btMenuHorizontal .topBarInMenu .topBarInMenuCell{line-height: -webkit-calc(50px - {$logoHeight}px*.05 - 2px);
    line-height: -moz-calc(50px - {$logoHeight}px*.05 - 2px);
    line-height: calc(50px - {$logoHeight}px*.05 - 2px);}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea .btAccentIconWidget.btIconWidget .btIconWidgetIcon,
.btAccentLightHeader .topBar .btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea a.btIconWidget:hover,
.btAccentLightHeader .topBar a.btIconWidget:hover{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.btAccentLightHeader .topBar .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{background: {$alternateColor} !important;}
.btAccentLightHeader .btBelowLogoArea .widget_shopping_cart_content .btCartWidgetIcon:hover,
.btAccentLightHeader .topBar .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$alternateColor} !important;}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea .btAccentIconWidget.btIconWidget .btIconWidgetIcon,
.btAccentDarkHeader .topBar .btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea a.btIconWidget:hover,
.btAccentDarkHeader .topBar a.btIconWidget:hover{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.btAccentDarkHeader .topBar .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{background: {$alternateColor} !important;}
.btAccentDarkHeader .btBelowLogoArea .widget_shopping_cart_content .btCartWidgetIcon:hover,
.btAccentDarkHeader .topBar .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$alternateColor} !important;}
.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader .btLogoArea .topBarInMenu a:hover,
.btLightAccentHeader .btLogoArea .topBarInLogoArea a:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea .topBarInMenu .btAccentIconWidget.btIconWidget .btIconWidgetIcon,
.btLightAccentHeader .btLogoArea .topBarInLogoArea .btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea .topBarInMenu a.btIconWidget:hover,
.btLightAccentHeader .btLogoArea .topBarInLogoArea a.btIconWidget:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea .topBarInMenu .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.btLightAccentHeader .btLogoArea .topBarInLogoArea .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{background: {$alternateColor} !important;}
.btLightAccentHeader .btLogoArea .topBarInMenu .widget_shopping_cart_content .btCartWidgetIcon:hover,
.btLightAccentHeader .btLogoArea .topBarInLogoArea .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$alternateColor} !important;}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btAccentGradientHeader .btLogoArea,
.btAccentGradientHeader .btVerticalHeaderTop{background-color: {$accentColor} !important;}
.btAccentGradientHeader .btLogoArea{
    -webkit-box-shadow: 0 -5px 0 0 {$alternateColor} inset;
    box-shadow: 0 -5px 0 0 {$alternateColor} inset;}
.btAccentGradientHeader .btLogoArea:before{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,transparent 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,transparent 100%);
    background: linear-gradient(to right,{$accentColor} 0%,transparent 100%);}
.btAccentGradientHeader .btLogoArea .topBarInMenu a:hover,
.btAccentGradientHeader .btLogoArea .topBarInLogoArea a:hover{color: {$alternateColor};}
.btAccentGradientHeader .btLogoArea .topBarInMenu .btAccentIconWidget.btIconWidget .btIconWidgetIcon,
.btAccentGradientHeader .btLogoArea .topBarInLogoArea .btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$alternateColor};}
.btAccentGradientHeader .btLogoArea .topBarInMenu a.btIconWidget:hover,
.btAccentGradientHeader .btLogoArea .topBarInLogoArea a.btIconWidget:hover{color: {$alternateColor};}
.btAccentGradientHeader .btLogoArea .topBarInMenu .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.btAccentGradientHeader .btLogoArea .topBarInLogoArea .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{background: {$alternateColor} !important;}
.btAccentGradientHeader .btLogoArea .topBarInMenu .widget_shopping_cart_content .btCartWidgetIcon:hover,
.btAccentGradientHeader .btLogoArea .topBarInLogoArea .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$alternateColor} !important;}
.btAccentGradientHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btAlternateGradientHeader .btLogoArea,
.btAlternateGradientHeader .btVerticalHeaderTop{background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%) !important;}
.btAlternateGradientHeader .btLogoArea{
    -webkit-box-shadow: 0 -5px 0 0 {$accentColor} inset;
    box-shadow: 0 -5px 0 0 {$accentColor} inset;}
.btAlternateGradientHeader .btLogoArea:before{
    background: -webkit-linear-gradient(left,{$alternateColor} 0%,transparent 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,transparent 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,transparent 100%);}
.btAlternateGradientHeader .btLogoArea a:hover,
.btAlternateGradientHeader .btLogoArea a.btIconWidget:hover{color: {$accentColor};}
.btAlternateGradientHeader .btLogoArea .btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btAlternateGradientHeader .btLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$accentColor};}
.btAlternateGradientHeader .btLogoArea .menuPort nav > ul > li.current-menu-ancestor > a:after,
.btAlternateGradientHeader .btLogoArea .menuPort nav > ul > li.current-menu-item > a:after{background: {$accentColor};}
.btAlternateGradientHeader .btLogoArea .menuPort nav > ul > li.current-menu-ancestor.on > a:after,
.btAlternateGradientHeader .btLogoArea .menuPort nav > ul > li.current-menu-item.on > a:after{background: {$accentColor};}
.btAlternateGradientHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .logo img{height: -webkit-calc({$logoHeight}px*0.6);
    height: -moz-calc({$logoHeight}px*0.6);
    height: calc({$logoHeight}px*0.6);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .btTextLogo{
    line-height: -webkit-calc({$logoHeight}px*0.6);
    line-height: -moz-calc({$logoHeight}px*0.6);
    line-height: calc({$logoHeight}px*0.6);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > a,
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > .subToggler{line-height: -webkit-calc({$logoHeight}px*0.6);
    line-height: -moz-calc({$logoHeight}px*0.6);
    line-height: calc({$logoHeight}px*0.6);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .topBarInMenu{height: -webkit-calc({$logoHeight}px*0.6);
    height: -moz-calc({$logoHeight}px*0.6);
    height: calc({$logoHeight}px*0.6);}
.btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btLightAccentHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentGradientHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAlternateGradientHeader.btMenuVerticalLeft .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightAccentHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentGradientHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAlternateGradientHeader.btMenuVerticalLeft .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$alternateColor};}
.btAlternateGradientHeader.btMenuVerticalright .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAlternateGradientHeader.btMenuVerticalright .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btLightAccentHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentGradientHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAlternateGradientHeader.btMenuVerticalLeft .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$alternateColor};}
.btAlternateGradientHeader.btMenuVerticalright .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuVertical .mainHeader nav ul li li{
    font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.btSiteFooter .bt_bb_custom_menu.footerVerticalMenu ul li.moreLink a:hover,
.btSiteFooter .bt_bb_custom_menu.footerHorizontalMenu ul li.moreLink a:hover{color: {$accentColor};}
.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before{background-color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a{
    background: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a:after{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.btPostSingleItemStandard .btArticleShareEtc .btTags ul a:hover{background: {$accentColor};}
.btArticleSuperMeta dl dt{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btAboutAuthor .aaTxt .btArticleAuthor{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background-color: {$accentColor};}
.btMediaBox.btQuote blockquote:after,
.btMediaBox.btLink blockquote:after{background: -webkit-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,#fff 0%,{$alternateColor} 100%);}
.btReverseGradient .btMediaBox.btQuote blockquote:after,
.btReverseGradient .btMediaBox.btLink blockquote:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,#fff 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,#fff 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,#fff 100%);}
.btPostSingleItemColumns .btTags ul a:hover{background: {$accentColor};}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.post-password-form p:first-child{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    background-color: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background-image: -webkit-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background-image: linear-gradient(to bottom,{$accentColor} 50%,{$alternateColor} 100%);}
.btPagination{font-family: \"{$headingFont}\";}
.btPrevNextNav .btPrevNext .btPrevNextItem{
    font-family: \"{$headingFont}\";}
.btLinkPages{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btLinkPages ul a{
    background: {$accentColor};}
.btLinkPages ul a:hover{background: {$alternateColor};}
.btArticleListItem .btArticleCategories a:hover{color: {$accentColor};}
.btArticleDate,
.btArticleAuthor,
.btArticleComments,
.btArticleCategories{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.btArticleListItem .btArticleAuthor a:hover{color: {$accentColor};}
.btArticleDate:before,
.btArticleAuthor:before,
.btArticleComments:before,
.btArticleCategories:before{
    color: {$accentColor};}
.btLightSkin .btArticleAuthor:hover,
.btLightSkin .btArticleComments:hover,
.btDarkSkin .btLightSkin .btArticleAuthor:hover,
.btDarkSkin .btLightSkin .btArticleComments:hover,
.btLightSkin .btDarkSkin .btLightSkin .btArticleAuthor:hover,
.btLightSkin .btDarkSkin .btLightSkin .btArticleComments:hover{color: {$accentColor};}
.btDarkSkin .btArticleAuthor:hover,
.btDarkSkin .btArticleComments:hover,
.btLightSkin .btDarkSkin .btArticleAuthor:hover,
.btLightSkin .btDarkSkin .btArticleComments:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btArticleAuthor:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btArticleComments:hover{color: {$accentColor};}
.btArticleAuthor:hover,
.btArticleAuthor a:hover,
.btArticleComments:hover{color: {$accentColor};}
.btArticleAuthor:hover:hover,
.btArticleAuthor a:hover:hover,
.btArticleComments:hover:hover{color: {$accentColor};}
.bt-comments-box ul.comments li.pingback p a:not(.comment-edit-link),
.btCommentsBox ul.comments li.pingback p a:not(.comment-edit-link){font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt-comments-box ul.comments li.pingback p a:not(.comment-edit-link):hover,
.btCommentsBox ul.comments li.pingback p a:not(.comment-edit-link):hover{color: {$accentColor};}
.bt-comments-box ul.comments li.pingback p .edit-link:before,
.btCommentsBox ul.comments li.pingback p .edit-link:before{
    color: {$accentColor};}
.bt-comments-box ul.comments li.pingback p .edit-link .comment-edit-link:hover,
.btCommentsBox ul.comments li.pingback p .edit-link .comment-edit-link:hover{color: {$accentColor};}
.bt-comments-box .vcard h1.author a:hover,
.bt-comments-box .vcard h2.author a:hover,
.bt-comments-box .vcard h3.author a:hover,
.bt-comments-box .vcard h4.author a:hover,
.bt-comments-box .vcard h5.author a:hover,
.bt-comments-box .vcard h6.author a:hover,
.bt-comments-box .vcard h7.author a:hover,
.bt-comments-box .vcard h8.author a:hover,
.btCommentsBox .vcard h1.author a:hover,
.btCommentsBox .vcard h2.author a:hover,
.btCommentsBox .vcard h3.author a:hover,
.btCommentsBox .vcard h4.author a:hover,
.btCommentsBox .vcard h5.author a:hover,
.btCommentsBox .vcard h6.author a:hover,
.btCommentsBox .vcard h7.author a:hover,
.btCommentsBox .vcard h8.author a:hover{color: {$accentColor};}
.bt-comments-box .vcard .posted:before,
.btCommentsBox .vcard .posted:before{
    color: {$accentColor};}
.bt-comments-box .commentTxt p.edit-link a:hover,
.btCommentsBox .commentTxt p.edit-link a:hover,
.bt-comments-box .commentTxt p.reply a:hover,
.btCommentsBox .commentTxt p.reply a:hover{color: {$accentColor};}
.bt-comments-box .commentTxt p.edit-link a:before,
.btCommentsBox .commentTxt p.edit-link a:before,
.bt-comments-box .commentTxt p.reply a:before,
.btCommentsBox .commentTxt p.reply a:before{
    color: {$accentColor};}
.bt-comments-box .comment-form .review-by .commentratingbox .commentrating input[type=\"radio\"]:checked + label:after,
.btCommentsBox .comment-form .review-by .commentratingbox .commentrating input[type=\"radio\"]:checked + label:after{color: {$accentColor} !important;}
.bt-comments-box .comment-form .review-by .commentratingbox .commentrating:hover input[type=\"radio\"] + label:after,
.btCommentsBox .comment-form .review-by .commentratingbox .commentrating:hover input[type=\"radio\"] + label:after{color: {$accentColor} !important;}
.bt-comments-box .comment-navigation,
.btCommentsBox .comment-navigation{font-family: \"{$headingFont}\";}
.comment-awaiting-moderation{color: {$accentColor};}
.btCommentSubmit{font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btCommentSubmit:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.no-comments,
.woocommerce-noreviews{
    font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.btBox > h4,
.btCustomMenu > h4,
.btTopBox > h4{
    color: {$accentColor};}
body:not(.btNoDashInSidebar) .btBox > h4:after,
body:not(.btNoDashInSidebar) .btCustomMenu > h4:after,
body:not(.btNoDashInSidebar) .btTopBox > h4:after{
    border-bottom: 2px solid {$accentColor};}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.btBox.woocommerce p.posted,
.btBox.woocommerce .quantity{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.widget_calendar table caption{background: {$accentColor};
    background: {$accentColor};
    font-family: \"{$headingFont}\";}
.btBox.widget_archive ul li a:before,
.btBox.widget_categories ul li a:before,
.btBox.widget_meta ul li a:before,
.btBox.widget_recent_entries ul li a:before,
.btBox.widget_product_categories ul li a:before,
.btBox.widget_top_rated_products ul li a:before{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .btBox.widget_archive ul li a:before,
.btReverseGradient .btBox.widget_categories ul li a:before,
.btReverseGradient .btBox.widget_meta ul li a:before,
.btReverseGradient .btBox.widget_recent_entries ul li a:before,
.btReverseGradient .btBox.widget_product_categories ul li a:before,
.btReverseGradient .btBox.widget_top_rated_products ul li a:before{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.widget_recent_comments{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.widget_recent_comments a{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.widget_recent_comments .comment-author-link a{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.widget_recent_comments .comment-author-link a:before{
    color: {$accentColor};}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.widget_rss li .rss-date{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.widget_rss li .rss-date:before{
    color: {$accentColor};}
.btBox .btSearchToursWidget .tour_search .port .btSearchToursRow.btSearchCategories .btSearchCategoriesIncludeLinkViewOtherCategories{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    color: {$alternateColor};}
.btBox .btNewToursWidget ul li .btImageTextWidget .btImageTextWidgetText .bt_bb_headline .bt_bb_headline_subheadline,
.btBox .btGreatDestinationsWidget ul li .btImageTextWidget .btImageTextWidgetText .bt_bb_headline .bt_bb_headline_subheadline{
    color: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total{
    font-family: \"{$headingFont}\";}
.widget_shopping_cart .buttons .button{
    background-image: -webkit-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%) !important;
    background-image: -moz-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%) !important;
    background-image: linear-gradient(to bottom,{$accentColor} 50%,{$alternateColor} 100%) !important;}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background-color: {$alternateColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background: {$accentColor};
    font: normal .6rem {$menuFont};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover{color: {$accentColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon:hover span.cart-contents{background: {$alternateColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty{
    font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after{color: {$accentColor};}
.widget_recent_reviews{font-family: \"{$headingFont}\";}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    background: {$accentColor};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{background: {$alternateColor};}
.topTools a.btIconWidget:hover,
.topBarInMenu a.btIconWidget:hover{color: {$accentColor};}
.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
footer .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetTitle{
    font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btSiteFooterWidgets .btSearch button,
.btSiteFooterWidgets .btSearch input[type=submit],
.btSidebar .btSearch button,
.btSidebar .btSearch input[type=submit],
.btSidebar .widget_product_search button,
.btSidebar .widget_product_search input[type=submit],
.woocommerce .btSidebar .widget_product_search button,
.woocommerce .btSidebar .widget_product_search input[type=submit],
.woocommerce-page .btSidebar .widget_product_search button,
.woocommerce-page .btSidebar .widget_product_search input[type=submit]{
    background: {$accentColor} !important;}
.btSiteFooterWidgets .btSearch button:before,
.btSidebar .btSearch button:before,
.btSidebar .widget_product_search button:before,
.woocommerce .btSidebar .widget_product_search button:before,
.woocommerce-page .btSidebar .widget_product_search button:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btDarkSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce .btSidebar .widget_product_search button:hover,
.btLightSkin .woocommerce-page .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .woocommerce-page .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .woocommerce-page .btSidebar .widget_product_search button:hover,
.btDarkSkin .woocommerce-page .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .woocommerce-page .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-page .btSidebar .widget_product_search button:hover{background: {$accentColor} !important;
    border-color: {$accentColor} !important;}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$accentColorDark};}
.btSearchInner.btFromTopBox input[type=\"text\"]{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor};}
@media (max-width: 768px){.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor} !important;}
}.bt_bb_section.bt_bb_color_scheme_11{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_section.bt_bb_color_scheme_12{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_section.bt_bb_color_scheme_13{
    background-image: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_section.bt_bb_color_scheme_14{
    background-image: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_section[class*=\"gradient\"]:before{background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_section[class*=\"gradient\"]:before{background-image: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_headline .bt_bb_headline_superheadline{
    font-family: \"{$headingSuperTitleFont}\";}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{font-family: \"{$headingSubTitleFont}\";}
.bt_bb_headline h1 s:after,
.bt_bb_headline h2 s:after,
.bt_bb_headline h3 s:after,
.bt_bb_headline h4 s:after,
.bt_bb_headline h5 s:after,
.bt_bb_headline h6 s:after{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_headline h1 s:after,
.btReverseGradient .bt_bb_headline h2 s:after,
.btReverseGradient .bt_bb_headline h3 s:after,
.btReverseGradient .bt_bb_headline h4 s:after,
.btReverseGradient .bt_bb_headline h5 s:after,
.btReverseGradient .bt_bb_headline h6 s:after{background-image: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_headline h1 strong,
.bt_bb_headline h2 strong,
.bt_bb_headline h3 strong,
.bt_bb_headline h4 strong,
.bt_bb_headline h5 strong,
.bt_bb_headline h6 strong{
    color: {$accentColor};}
.bt_bb_headline h1 u,
.bt_bb_headline h2 u,
.bt_bb_headline h3 u,
.bt_bb_headline h4 u,
.bt_bb_headline h5 u,
.bt_bb_headline h6 u{
    color: {$alternateColor};}
.bt_bb_progress_bar{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{
    background: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_progress_bar .bt_bb_progress_bar_inner{
    background: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_color_scheme_11.bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_12.bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_13.bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{background: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_14.bt_bb_style_line.bt_bb_progress_bar .bt_bb_progress_bar_inner:after{background: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_latest_posts .bt_bb_latest_posts_item_image:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_latest_posts .bt_bb_latest_posts_item_image:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category:before{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl .bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category:before{
    border-color: {$alternateColorDark} transparent transparent transparent;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category .post-categories{background: {$alternateColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > span:before{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > span.bt_bb_latest_posts_item_author a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title a:hover{color: {$accentColor};}
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item{
    font-family: \"{$menuFont}\";}
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_thumbnail a:after,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_thumbnail a:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_masonry_post_grid .bt_bb_grid_item_post_thumbnail a:after,
.btReverseGradient .bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_thumbnail a:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl .bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before,
.rtl .bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before{
    border-color: {$alternateColorDark} transparent transparent transparent;}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover{color: {$accentColor};}
.bt_bb_post_grid_loader{
    border-top: 2px solid {$accentColor} !important;
    border-bottom: 2px solid {$accentColor} !important;}
.bt_bb_post_grid_loader:before{
    border-left: 2px solid {$alternateColor} !important;
    border-right: 2px solid {$alternateColor} !important;}
.bt_bb_masonry_image_grid .bt_bb_grid_item_inner > .bt_bb_grid_item_inner_content:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_masonry_image_grid .bt_bb_grid_item_inner > .bt_bb_grid_item_inner_content:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_separator.btGradientSeparator{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_separator.btGradientSeparator{background-image: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background-image: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_title_init:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_post_title_init:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourOffer{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
.bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourOffer:after{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl .bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourOffer:after{
    border-color: {$alternateColorDark} transparent transparent transparent;}
.bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourPrice{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourPrice:after{
    border-color: transparent {$accentColorDark} transparent transparent;}
.rtl .bt_bb_masonry_tour_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .btSingleTourPrice .btTourPrice:after{
    border-color: {$accentColorDark} transparent transparent transparent;}
button.mfp-close:hover{
    color: {$accentColor};}
button.mfp-arrow{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_button .bt_bb_button_text{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_button a,
.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_button a:hover{
    background: {$accentColor};}
.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_button a:after{background: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_button a,
.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_button a:hover{
    background: {$accentColor};}
.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_button a:after{background: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_button a,
.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_button a:hover{
    background: {$alternateColor};}
.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_button a:after{background: -webkit-linear-gradient(top,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(top,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to bottom,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_button a,
.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_button a:hover{
    background: {$alternateColor};}
.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_button a:after{background: -webkit-linear-gradient(top,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(top,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to bottom,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_service:hover .bt_bb_service_content_title a{color: {$accentColor};}
.bt_bb_color_scheme_11.bt_bb_service.bt_bb_style_filled .bt_bb_icon_holder{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_12.bt_bb_service.bt_bb_style_filled .bt_bb_icon_holder{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_13.bt_bb_service.bt_bb_style_filled .bt_bb_icon_holder{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_color_scheme_14.bt_bb_service.bt_bb_style_filled .bt_bb_icon_holder{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_slider .slick-dots li.slick-active,
.bt_bb_slider .slick-dots li:hover,
.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_content_slider .slick-dots li:hover{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
.bt_bb_slider button.slick-arrow,
.bt_bb_content_slider button.slick-arrow{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_custom_menu ul li a:hover{color: {$accentColor};}
.bt_bb_custom_menu ul li:before{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_custom_menu ul li:before{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_custom_menu ul li.current-menu-item > a{color: {$accentColor};}
.bt_bb_color_scheme_11 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_11 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_11 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_11 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_11 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_11 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_11 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_11 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_12 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_12 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_12 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_12 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_12 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_12 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_12 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_12 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_color_scheme_13 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_13 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_13 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_13 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_13 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_13 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_13 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_13 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_color_scheme_14 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_14 .bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_14 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_14 .bt_bb_map .bt_bb_map_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_14 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_14 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_map_content_wrapper .bt_bb_google_maps_location,
.bt_bb_color_scheme_14 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_map_location,
.bt_bb_color_scheme_14 .bt_bb_google_maps .bt_bb_google_maps_content .bt_bb_google_maps_content_wrapper .bt_bb_google_maps_location{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_tabs > .bt_bb_tabs_header{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_tabs.bt_bb_style_simple > .bt_bb_tabs_header li span:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_tabs.bt_bb_style_simple > .bt_bb_tabs_header li span:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.bt_bb_counter_holder{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btCounterHolder{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btCounterHolder .btCountdownHolder span[class$=\"_text\"]{font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder span[class^=\"n\"],
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:first-child,
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:nth-child(2),
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:nth-child(3){color: {$accentColor};}
.bt_bb_price_list .bt_bb_price_list_title{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_price{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_price_list.bt_bb_color_scheme_11{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%) !important;}
.bt_bb_price_list.bt_bb_color_scheme_12{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%) !important;
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%) !important;}
.bt_bb_price_list.bt_bb_color_scheme_13{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%) !important;
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%) !important;
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%) !important;}
.bt_bb_price_list.bt_bb_color_scheme_14{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%) !important;
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%) !important;
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%) !important;}
.bt_bb_progress_bar_advanced .progressbar-text{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.wpcf7-form input:not([type='checkbox']):not([type='radio']).wpcf7-submit{
    background-color: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background-image: -webkit-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background-image: linear-gradient(to bottom,{$accentColor} 50%,{$alternateColor} 100%);}
div.wpcf7-mail-sent-ok{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_required:after{
    color: {$accentColor} !important;}
.required{color: {$accentColor} !important;}
.btTourList.bt_bb_tour_list_empty{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourList .btSingleTourBlock .btSingleTourImage .btImageWrapper:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .btTourList .btSingleTourBlock .btSingleTourImage .btImageWrapper:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.btTourList .btSingleTourBlock .btSingleTourPrice .btTourOffer{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
.btTourList .btSingleTourBlock .btSingleTourPrice .btTourOffer:after{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl .btTourList .btSingleTourBlock .btSingleTourPrice .btTourOffer:after{
    border-color: {$alternateColorDark} transparent transparent transparent;}
.btTourList .btSingleTourBlock .btSingleTourPrice .btTourPrice{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btTourList .btSingleTourBlock .btSingleTourPrice .btTourPrice:after{
    border-color: transparent {$accentColorDark} transparent transparent;}
.rtl .btTourList .btSingleTourBlock .btSingleTourPrice .btTourPrice:after{
    border-color: {$accentColorDark} transparent transparent transparent;}
.btListDesignGallery.btTourList .btSingleTourBlock .btSingleTourPrice .btTourPrice{
    color: {$accentColor};}
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourHeadline{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourHeadline a:hover{color: {$accentColor};}
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourCategories a:hover{color: {$accentColor};}
.btListDesignList.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourCategories:before{
    color: {$accentColor};}
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourMeta .btTourDuration:before,
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourMeta .btTourLocation:before,
.btTourList .btSingleTourBlock .btSingleTourContent .btSingleTourMeta .btTourTravellers:before{
    color: {$accentColor};}
.btTourList .btSingleTourBlock .btSingleTourContent .btListWrapper .btViewDetails a{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset,0 0 0 rgba(24,24,24,.15);
    box-shadow: 0 0 0 2px {$accentColor} inset,0 0 0 rgba(24,24,24,.15);}
.btTourList .btSingleTourBlock .btSingleTourContent .btListWrapper .btViewDetails a:hover{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 3px 10px rgba(24,24,24,.15);
    box-shadow: 0 0 0 2em {$accentColor} inset,0 3px 10px rgba(24,24,24,.15);}
body.single-tour .btPageHeadline.btTourVideo .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-loading .mejs-overlay-loading-bg-img,
body.single-tour .btPageHeadline.btTourVideoImageSlider .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-loading .mejs-overlay-loading-bg-img{
    border-top: 2px solid {$accentColor} !important;
    border-bottom: 2px solid {$accentColor} !important;}
body.single-tour .btPageHeadline.btTourVideo .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-loading .mejs-overlay-loading-bg-img:before,
body.single-tour .btPageHeadline.btTourVideoImageSlider .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-loading .mejs-overlay-loading-bg-img:before{
    border-left: 2px solid {$alternateColor} !important;
    border-right: 2px solid {$alternateColor} !important;}
body.single-tour .btPageHeadline.btTourVideo .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-play .mejs-overlay-button,
body.single-tour .btPageHeadline.btTourVideoImageSlider .bt_bb_video .mejs-container .mejs-layers .mejs-overlay-play .mejs-overlay-button{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
body.single-tour .btPageHeadline.btTourVideo .bt_bb_video .mejs-container .mejs-controls .mejs-time-rail .mejs-time-current,
body.single-tour .btPageHeadline.btTourVideo .bt_bb_video .mejs-container .mejs-controls.mejs-offscreen .mejs-time-rail .mejs-time-current,
body.single-tour .btPageHeadline.btTourVideoImageSlider .bt_bb_video .mejs-container .mejs-controls .mejs-time-rail .mejs-time-current,
body.single-tour .btPageHeadline.btTourVideoImageSlider .bt_bb_video .mejs-container .mejs-controls.mejs-offscreen .mejs-time-rail .mejs-time-current{background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
body.single-tour.btWithSidebar.btBelowMenu .btSidebar{padding-top: -webkit-calc(4.5em + {$logoHeight}px);
    padding-top: -moz-calc(4.5em + {$logoHeight}px);
    padding-top: calc(4.5em + {$logoHeight}px);}
body.single-tour.btWithSidebar.btBelowMenu.btMenuBelowLogo .btSidebar{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 50px);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 50px);
    padding-top: calc(4.5em + {$logoHeight}px + 50px);}
body.single-tour.btWithSidebar.btBelowMenu.btHeaderWidgetsLeftRightOn .btSidebar{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 1.875em);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 1.875em);
    padding-top: calc(4.5em + {$logoHeight}px + 1.875em);}
body.single-tour.btWithSidebar.btBelowMenu.btMenuBelowLogo.btHeaderWidgetsLeftRightOn .btSidebar{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 50px + 1.875em);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 50px + 1.875em);
    padding-top: calc(4.5em + {$logoHeight}px + 50px + 1.875em);}
.btTourSingleItemStandard .btSingleTourInfo{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.btTourSingleItemStandard .btSingleTourInfo .btPromoPrice{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
.btTourSingleItemStandard .btSingleTourInfo .btPromoPrice:before{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice:before{border-color: transparent {$accentColorDark} transparent transparent;}
.rtl .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice:before{
    border-color: {$accentColorDark} transparent transparent transparent;}
.btReverseGradient.rtl .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice:before{border-color: {$alternateColorDark} transparent transparent transparent;}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice{background: {$accentColor};}
.rtl .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice{
    background: {$accentColor};}
.btReverseGradient.rtl .btTourSingleItemStandard .btSingleTourInfo .btPromoPrice{background: {$alternateColor};}
.btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourIcon .btTourInfo .btTourDesc{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a{font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a{background: {$alternateColor};}
.rtl .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a{background: {$alternateColor};}
.btReverseGradient.rtl .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a{background: {$accentColor};}
.btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a:before{background: -webkit-linear-gradient(bottom,{$accentColor} 0%,{$alternateColor} 90%);
    background: -moz-linear-gradient(bottom,{$accentColor} 0%,{$alternateColor} 90%);
    background: linear-gradient(to top,{$accentColor} 0%,{$alternateColor} 90%);}
.rtl .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a:before{background: -webkit-linear-gradient(bottom,{$accentColor} 0%,{$alternateColor} 90%);
    background: -moz-linear-gradient(bottom,{$accentColor} 0%,{$alternateColor} 90%);
    background: linear-gradient(to top,{$accentColor} 0%,{$alternateColor} 90%);}
.btReverseGradient.rtl .btTourSingleItemStandard .btSingleTourInfo .btSingleTourInfoInner .btTourBook a:before{background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.btBelowMenu.btHideHeadline .btTourSingleItemStandard .btTourPromoTitle{padding-top: -webkit-calc(4.5em + {$logoHeight}px);
    padding-top: -moz-calc(4.5em + {$logoHeight}px);
    padding-top: calc(4.5em + {$logoHeight}px);}
.btBelowMenu.btMenuBelowLogo.btHideHeadline .btTourSingleItemStandard .btTourPromoTitle{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 50px);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 50px);
    padding-top: calc(4.5em + {$logoHeight}px + 50px);}
.btBelowMenu.btHeaderWidgetsLeftRightOn.btHideHeadline .btTourSingleItemStandard .btTourPromoTitle{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 1.8753em);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 1.8753em);
    padding-top: calc(4.5em + {$logoHeight}px + 1.8753em);}
.btBelowMenu.btMenuBelowLogo.btHeaderWidgetsLeftRightOn.btHideHeadline .btTourSingleItemStandard .btTourPromoTitle{padding-top: -webkit-calc(4.5em + {$logoHeight}px + 50px + 1.8753em);
    padding-top: -moz-calc(4.5em + {$logoHeight}px + 50px + 1.8753em);
    padding-top: calc(4.5em + {$logoHeight}px + 50px + 1.8753em);}
.btTourSingleItemStandard .btTourIncludes h3{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeTitle{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btTourSingleIncludeContentAdditionalCustomInformation span:before{
    color: {$accentColor};}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a{color: {$alternateColor};}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent > .btTourSingleIncludeLink a:hover{color: {$accentColor};}
.btTourSingleItemStandard .btTourIncludes .btTourSingleInclude .btTourSingleIncludeContent .btIncludedItems li span:before{color: {$accentColor};}
.btTourSingleItemStandard .btTourMainContent h1,
.btTourSingleItemStandard .btTourMainContent h2,
.btTourSingleItemStandard .btTourMainContent h3,
.btTourSingleItemStandard .btTourMainContent h4,
.btTourSingleItemStandard .btTourMainContent h5,
.btTourSingleItemStandard .btTourMainContent h6,
.btTourSingleItemStandard .btTourMainContent h7,
.btTourSingleItemStandard .btTourMainContent h8{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btTourMainContent .btDiscoverLocation{color: {$alternateColor};}
.btTourSingleItemStandard .btTourMainContent .btDiscoverLocation:hover{color: {$accentColor};}
.btTourSingleItemStandard .btTourPlan .btTourPlanPaging ul li.on,
.btTourSingleItemStandard .btTourPlan .btTourPlanPaging ul li:hover{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
.btTourSingleItemStandard .btTourPlan .btTourPlanDay .btDayTitle{
    color: {$accentColor};}
.btTourSingleItemStandard .btTourPlan .btTourPlanDay .btDayHeadline h3{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btSiteAdminReview h3{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btSiteAdminReview .btSiteAdminReviewGrades .btTotalGrade .btGradeHolder{
    background: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 90%);
    background: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 90%);
    background: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 90%);}
.btTourSingleItemStandard .btSiteAdminReview .btSiteAdminReviewGrades .btTotalGrade .btGradeHolder .btGrade{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btSiteAdminReview .btSiteAdminReviewGrades .btReviewSummary .btSummaryTitle{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btTourSingleItemStandard .btComments .show-more-comments .bt_bb_button .bt_bb_link{background: {$accentColor};}
.btTourSingleItemStandard .btComments .show-more-comments .bt_bb_button .bt_bb_link:before{
    background-image: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.btTourSingleItemStandard .btComments .btCommentsBox ul.comments li > article .commentTxt .commentMeta .commentOptions p.posted span:before{
    color: {$accentColor};}
.btTourSingleItemStandard .btArticleShareEtc .btTags ul a:hover{background: {$accentColor};}
.btTourSingleItemStandard .btTourBookBottom a{font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btTourSingleItemStandard .btTourBookBottom a:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
@media (max-width: 480px){.btTourSingleItemStandard .btSingleTourInfo{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .btTourSingleItemStandard .btSingleTourInfo{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.rtl .btTourSingleItemStandard .btSingleTourInfo{background: -webkit-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(315deg,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(135deg,{$alternateColor} 0%,{$accentColor} 100%);}
.btReverseGradient.rtl .btTourSingleItemStandard .btSingleTourInfo{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
}.btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDestination .btFieldWrapper > span:hover,
.btLightSkin .btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDestination .btFieldWrapper > span:hover,
.btDarkSkin.btLightSkin .btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDestination .btFieldWrapper > span:hover,
.btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDate .btFieldWrapper > span:hover,
.btLightSkin .btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDate .btFieldWrapper > span:hover,
.btDarkSkin.btLightSkin .btDarkSkin .tour_search .btSearchToursRow .btSearchField.btFieldDate .btFieldWrapper > span:hover{color: {$accentColor};}
.tour_search .btSearchToursRow .btSearchField.btFieldDestination .btFieldWrapper > span:hover,
.tour_search .btSearchToursRow .btSearchField.btFieldDate .btFieldWrapper > span:hover{color: {$accentColor};}
.tour_search .btSearchToursRow .btSearchField.btSearchButton button{font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.tour_search .btSearchToursRow .btSearchField.btSearchButton button:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.tour_search .btSearchToursRow.btSearchCategories .btLabelCategories{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.tour_search .btSearchToursRow.btSearchCategories .btSingleCategory input[type=\"checkbox\"]:checked{background: {$accentColor};}
.tour_search .btSearchToursRow.btSearchCategories .btSingleCategory input[type=\"checkbox\"]:checked::-ms-check{background: {$accentColor};
    border-color: {$accentColor};}
.bt_bb_loadmore_box .bt_bb_loadmore{font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.bt_bb_loadmore_box .bt_bb_loadmore:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.listing_results .btPagination .port .page-numbers{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btLightSkin .listing_results .btPagination .port .page-numbers.current,
.btDarkSkin .btLightSkin .listing_results .btPagination .port .page-numbers.current,
.btLightSkin .btDarkSkin .btLightSkin .listing_results .btPagination .port .page-numbers.current,
.btDarkSkin .listing_results .btPagination .port .page-numbers.current,
.btLightSkin .btDarkSkin .listing_results .btPagination .port .page-numbers.current,
.btDarkSkin.btLightSkin .btDarkSkin .listing_results .btPagination .port .page-numbers.current{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
.listing_results .btPagination .port a.page-numbers.next,
.listing_results .btPagination .port a.page-numbers.prev{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
#bt_listing_loading{
    border-top: 2px solid {$accentColor} !important;
    border-bottom: 2px solid {$accentColor} !important;}
#bt_listing_loading:before{
    border-left: 2px solid {$alternateColor} !important;
    border-right: 2px solid {$alternateColor} !important;}
.ui-widget.ui-autocomplete{font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.ui-widget.ui-autocomplete li .ui-menu-item-wrapper:before{
    background: -webkit-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,#fff 0%,{$alternateColor} 100%);}
.ui-widget.ui-autocomplete li .ui-menu-item-wrapper.ui-state-active{background: {$accentColor};}
.btSidebarNewsletterForm{background: -webkit-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(315deg,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(135deg,{$accentColor} 0%,{$alternateColor} 100%);}
.bt_bb_tour_tag.bt_bb_color_accent{background: {$accentColor};}
.bt_bb_tour_tag.bt_bb_color_accent:before{border-color: transparent {$accentColorDark} transparent transparent;}
.bt_bb_tour_tag.bt_bb_color_alternate{background: {$alternateColor};}
.bt_bb_tour_tag.bt_bb_color_alternate:before{border-color: transparent {$alternateColorDark} transparent transparent;}
.bt_bb_tour_tag > span{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
::selection{background: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total{background: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt_bb_widget_select_items > div[data-value]:before{
    background: -webkit-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,#fff 0%,{$alternateColor} 100%);}
.bt_bb_widget_select_items > div[data-value]:hover{background: {$accentColor};}
.on.bt_bb_widget_switch > div{background: {$accentColor};}
.ui-datepicker.tour-datepicker-div-widget,
.ui-datepicker.tour-datepicker-div{font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-header .ui-datepicker-title,
.ui-datepicker.tour-datepicker-div .ui-datepicker-header .ui-datepicker-title{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-header .ui-datepicker-title select,
.ui-datepicker.tour-datepicker-div .ui-datepicker-header .ui-datepicker-title select{
    font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-calendar th,
.ui-datepicker.tour-datepicker-div .ui-datepicker-calendar th{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-calendar td a.ui-state-highlight,
.ui-datepicker.tour-datepicker-div .ui-datepicker-calendar td a.ui-state-highlight{background: {$alternateColor};}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-calendar td a.ui-state-hover,
.ui-datepicker.tour-datepicker-div .ui-datepicker-calendar td a.ui-state-hover{background: {$accentColor} !important;}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-calendar td.up-datepicker-today a,
.ui-datepicker.tour-datepicker-div .ui-datepicker-calendar td.up-datepicker-today a{background: {$alternateColor};}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-calendar td.ui-datepicker-current-day a,
.ui-datepicker.tour-datepicker-div .ui-datepicker-calendar td.ui-datepicker-current-day a{background: {$accentColorDark};}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-buttonpane button,
.ui-datepicker.tour-datepicker-div .ui-datepicker-buttonpane button{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.ui-datepicker.tour-datepicker-div-widget .ui-datepicker-buttonpane button:before,
.ui-datepicker.tour-datepicker-div .ui-datepicker-buttonpane button:before{
    background: -webkit-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: -moz-linear-gradient(bottom,{$alternateColor} 0%,{$accentColor} 90%);
    background: linear-gradient(to top,{$alternateColor} 0%,{$accentColor} 90%);}
.ui-tooltip.ui-widget-content{
    font-family: {$bodyFont},Arial,Helvetica,sans-serif;}
.bt-forms-container-modal .bt-forms-container-modal-close a{color: {$accentColor};}
.bt-forms-container-modal .bt-forms-container-modal-close a:hover:before{
    color: {$accentColorDark};}
.bt-forms-container-modal .bt-forms-container-modal-inner h3{
    background-image: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt-forms-container-modal .bt-forms-container-modal-inner h3{background-image: -webkit-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(right,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to left,{$accentColor} 0%,{$alternateColor} 100%);}
.bt-forms-container-modal .bt-forms-container-modal-inner .btSingleTourInfo .btTourIcon .btTourInfo .btTourDesc{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt-forms-container-modal .bt-forms-container-modal-inner .btFormTabs{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.bt-forms-container-modal .bt-forms-container-modal-inner .btFormTabs .bt-forms-container-toggle span:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .bt-forms-container-modal .bt-forms-container-modal-inner .btFormTabs .bt-forms-container-toggle span:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
@media screen and (-ms-high-contrast: active),(-ms-high-contrast: none){.bt-forms-container-modal .bt-forms-container-modal-inner h3{
    color: {$accentColor};}
}.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_title a:hover{
    color: {$accentColor};}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_supertitle_date:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_subtitle_date:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_supertitle_date:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_subtitle_date:before{
    color: {$accentColor};}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_supertitle_date a:hover,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_subtitle_date a:hover,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_supertitle_date a:hover,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_subtitle_date a:hover{
    color: {$accentColor};}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_supertitle_cats:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_subtitle_cats:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_supertitle_cats:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_subtitle_cats:before{
    color: {$accentColor};}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_supertitle_comments:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle .bold_timeline_item_posts_subtitle_comments:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_supertitle_comments:before,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle .bold_timeline_item_posts_subtitle_comments:before{
    color: {$accentColor};}
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_supertitle a:hover,
.bold_timeline_item .bold_timeline_item_inner .bold_timeline_item_header .bold_timeline_item_header_subtitle a:hover{
    color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_image:after,
ul.products li.product .btWooShopLoopItemInner .bt_bb_image:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .products ul li.product .btWooShopLoopItemInner .bt_bb_image:after,
.btReverseGradient ul.products li.product .btWooShopLoopItemInner .bt_bb_image:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_subheadline .star-rating span:before,
ul.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_subheadline .star-rating span:before{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover,
ul.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .price,
ul.products li.product .btWooShopLoopItemInner .price{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    border-top: 2px solid {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .added:after{
    background: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.products ul li.product .btWooShopLoopItemInner .added_to_cart:hover,
ul.products li.product .btWooShopLoopItemInner .added_to_cart:hover{color: {$accentColor};}
.products ul li.product .onsale,
ul.products li.product .onsale{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
.products ul li.product .onsale:before,
ul.products li.product .onsale:before{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl .products ul li.product .onsale:before,
.rtl ul.products li.product .onsale:before{
    border-color: {$alternateColorDark} transparent transparent transparent;}
.products ul li.product.product-category a:before,
ul.products li.product.product-category a:before{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .products ul li.product.product-category a:before,
.btReverseGradient ul.products li.product.product-category a:before{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.products ul li.product.product-category a:hover,
ul.products li.product.product-category a:hover{color: {$accentColor};}
nav.woocommerce-pagination ul li a,
nav.woocommerce-pagination ul li span{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btLightSkin nav.woocommerce-pagination ul li span.current,
.btDarkSkin .btLightSkin nav.woocommerce-pagination ul li span.current,
.btLightSkin .btDarkSkin .btLightSkin nav.woocommerce-pagination ul li span.current,
.btDarkSkin nav.woocommerce-pagination ul li span.current,
.btLightSkin .btDarkSkin nav.woocommerce-pagination ul li span.current,
.btDarkSkin.btLightSkin .btDarkSkin nav.woocommerce-pagination ul li span.current{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
nav.woocommerce-pagination ul li.woo-first-page a,
nav.woocommerce-pagination ul li.woo-last-page a{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
div.product .onsale{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$alternateColor};}
div.product .onsale:before{
    border-color: transparent {$alternateColorDark} transparent transparent;}
.rtl div.product .onsale:before{
    border-color: {$alternateColorDark} transparent transparent transparent;}
div.product div.images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient div.product div.images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
div.product div.images .woocommerce-product-gallery__trigger:after{
    background: {$accentColor};}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{background: {$alternateColor};}
div.product div.summary .price{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
table.shop_table td.product-name a{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
table.shop_table td.product-name a:hover{color: {$accentColor};}
table.shop_table td .amount{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
table.shop_table th{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
table.shop_table td.product-remove a.remove{
    background: {$accentColor};}
table.shop_table td.product-remove a.remove:hover{background: {$alternateColor};}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul{
    font-family: \"{$menuFont}\";}
.woocommerce-MyAccount-navigation ul li a{
    font-family: \"{$menuFont}\";}
.woocommerce-MyAccount-navigation ul li a:after{
    background: -webkit-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,{$accentColor} 0%,{$alternateColor} 100%);}
.btReverseGradient .woocommerce-MyAccount-navigation ul li a:after{background: -webkit-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: -moz-linear-gradient(left,{$alternateColor} 0%,{$accentColor} 100%);
    background: linear-gradient(to right,{$alternateColor} 0%,{$accentColor} 100%);}
.reset_variations{font-family: {$headingFont},Arial,Helvetica,sans-serif;}
form fieldset legend{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
form .form-row .required{color: {$accentColor};}
.select2-dropdown.select2-dropdown--below .select2-results__option--highlighted{background: {$accentColor};}
.blockUI.blockOverlay:before,
.loader:before{
    border-top: 2px solid {$accentColor} !important;
    border-bottom: 2px solid {$accentColor} !important;}
.blockUI.blockOverlay:after,
.loader:after{
    border-left: 2px solid {$alternateColor} !important;
    border-right: 2px solid {$alternateColor} !important;}
.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button){color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before{
    color: {$accentColor};}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar :not(.widget_product_search) button[type=\"submit\"],
.woocommerce .btContent :not(.widget_product_search) button[type=\"submit\"],
.woocommerce-page .btSidebar :not(.widget_product_search) button[type=\"submit\"],
.woocommerce-page .btContent :not(.widget_product_search) button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce :not(.widget_product_search) button[type=\"submit\"],
div.woocommerce input.button{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background-color: {$accentColor};}
.woocommerce .btSidebar a.button:before,
.woocommerce .btContent a.button:before,
.woocommerce-page .btSidebar a.button:before,
.woocommerce-page .btContent a.button:before,
.woocommerce .btSidebar input[type=\"submit\"]:before,
.woocommerce .btContent input[type=\"submit\"]:before,
.woocommerce-page .btSidebar input[type=\"submit\"]:before,
.woocommerce-page .btContent input[type=\"submit\"]:before,
.woocommerce .btSidebar :not(.widget_product_search) button[type=\"submit\"]:before,
.woocommerce .btContent :not(.widget_product_search) button[type=\"submit\"]:before,
.woocommerce-page .btSidebar :not(.widget_product_search) button[type=\"submit\"]:before,
.woocommerce-page .btContent :not(.widget_product_search) button[type=\"submit\"]:before,
.woocommerce .btSidebar input.button:before,
.woocommerce .btContent input.button:before,
.woocommerce-page .btSidebar input.button:before,
.woocommerce-page .btContent input.button:before,
div.woocommerce a.button:before,
div.woocommerce input[type=\"submit\"]:before,
div.woocommerce :not(.widget_product_search) button[type=\"submit\"]:before,
div.woocommerce input.button:before{
    background-image: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background-image: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce input.button{background-image: -webkit-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%) !important;
    background-image: -moz-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%) !important;
    background-image: linear-gradient(to bottom,{$accentColor} 50%,{$alternateColor} 100%) !important;}
.woocommerce .btSidebar a.button:hover,
.woocommerce .btContent a.button:hover,
.woocommerce-page .btSidebar a.button:hover,
.woocommerce-page .btContent a.button:hover,
.woocommerce .btSidebar input[type=\"submit\"]:hover,
.woocommerce .btContent input[type=\"submit\"]:hover,
.woocommerce-page .btSidebar input[type=\"submit\"]:hover,
.woocommerce-page .btContent input[type=\"submit\"]:hover,
.woocommerce .btSidebar :not(.widget_product_search) button[type=\"submit\"]:hover,
.woocommerce .btContent :not(.widget_product_search) button[type=\"submit\"]:hover,
.woocommerce-page .btSidebar :not(.widget_product_search) button[type=\"submit\"]:hover,
.woocommerce-page .btContent :not(.widget_product_search) button[type=\"submit\"]:hover,
.woocommerce .btSidebar input.button:hover,
.woocommerce .btContent input.button:hover,
.woocommerce-page .btSidebar input.button:hover,
.woocommerce-page .btContent input.button:hover,
div.woocommerce a.button:hover,
div.woocommerce input[type=\"submit\"]:hover,
div.woocommerce :not(.widget_product_search) button[type=\"submit\"]:hover,
div.woocommerce input.button:hover{
    background: {$accentColor};}
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
.woocommerce .btSidebar .shipping-calculator-button,
.woocommerce .btContent .shipping-calculator-button,
.woocommerce-page .btSidebar .shipping-calculator-button,
.woocommerce-page .btContent .shipping-calculator-button,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt,
div.woocommerce .shipping-calculator-button{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset,0 0 0 rgba(24,24,24,.15);
    box-shadow: 0 0 0 2px {$accentColor} inset,0 0 0 rgba(24,24,24,.15);}
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
.woocommerce .btSidebar .shipping-calculator-button:hover,
.woocommerce .btContent .shipping-calculator-button:hover,
.woocommerce-page .btSidebar .shipping-calculator-button:hover,
.woocommerce-page .btContent .shipping-calculator-button:hover,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover,
div.woocommerce .shipping-calculator-button:hover{-webkit-box-shadow: 0 0 0 2.5em {$accentColor} inset,0 3px 10px rgba(24,24,24,.15);
    box-shadow: 0 0 0 2.5em {$accentColor} inset,0 3px 10px rgba(24,24,24,.15);}
.woocommerce .btSidebar a.edit,
.woocommerce .btContent a.edit,
.woocommerce-page .btSidebar a.edit,
.woocommerce-page .btContent a.edit,
div.woocommerce a.edit{
    font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.woocommerce .btSidebar a.edit:before,
.woocommerce .btContent a.edit:before,
.woocommerce-page .btSidebar a.edit:before,
.woocommerce-page .btContent a.edit:before,
div.woocommerce a.edit:before{
    color: {$accentColor};}
.woocommerce .btSidebar a.edit:hover,
.woocommerce .btContent a.edit:hover,
.woocommerce-page .btSidebar a.edit:hover,
.woocommerce-page .btContent a.edit:hover,
div.woocommerce a.edit:hover{color: {$accentColor};}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.widget_price_filter .price_slider_amount .price_label{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.star-rating span:before{
    color: {$accentColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
body .woocommerce input[type=\"checkbox\"]:checked{background: {$accentColor};}
button.pswp__button.pswp__button--arrow--left,
button.pswp__button.pswp__button--arrow--right{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btQuoteBooking .btContactNext{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btQuoteBooking .btContactNext:before{
    background: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btQuoteBooking .ddChild ul li:before{
    background: -webkit-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(left,#fff 0%,{$alternateColor} 100%);
    background: linear-gradient(to right,#fff 0%,{$alternateColor} 100%);}
.btQuoteBooking .ddChild ul li:hover{background: {$accentColor};}
.btQuoteBooking .ui-slider .ui-slider-handle{background: -webkit-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background: -moz-linear-gradient(top,{$accentColor} 50%,{$alternateColor} 100%);
    background: linear-gradient(to bottom,{$accentColor} 50%,{$alternateColor} 100%);
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText,
.btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText,
.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText,
.btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btQuoteBooking .btContactSubmit{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;
    background: {$accentColor};}
.btQuoteBooking .btContactSubmit:after{
    background: -webkit-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: -moz-linear-gradient(top,{$accentColor} 0%,{$alternateColor} 100%);
    background: linear-gradient(to bottom,{$accentColor} 0%,{$alternateColor} 100%);}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor};
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btDatePicker table.ui-datepicker-calendar th{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btDatePicker a.ui-datepicker-prev,
.btDatePicker a.ui-datepicker-next{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btQuoteBooking .btPayPalButton:hover{-webkit-box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.bt_cc_email_confirmation_container [type=\"checkbox\"]:checked + label:before{border-color: {$accentColor};
    background: {$accentColor};}
.btDatePicker .ui-datepicker-header{background-color: {$accentColor};}
.btQuoteBooking .btTotalNextWrapper{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.wp-block-button__link:hover{color: {$accentColor} !important;}
", array() );