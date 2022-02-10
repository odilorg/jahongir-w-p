<?php
// Register action/filter callbacks
add_action('after_switch_theme','travelicious_check_theme_plugin');
add_action('switch_theme','travelicious_check_theme_plugin');

add_action( 'after_setup_theme', 'travelicious_register_menus' );
add_action( 'wp_enqueue_scripts', 'travelicious_enqueue_scripts_styles' );
add_action( 'tgmpa_register', 'travelicious_register_plugins' );
add_action( 'wp_enqueue_scripts', 'travelicious_load_fonts' );

add_action( 'admin_enqueue_scripts', 'travelicious_load_admin_style' );

add_action( 'widgets_init', 'travelicious_widget_area' );

add_filter( 'bt_bb_color_scheme_arr', 'travelicious_color_schemes' );

add_theme_support( 'customize-selective-refresh-widgets' );

add_editor_style( 'admin-style.css' );

function travelicious_check_theme_plugin(){
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
    $current_theme = wp_get_theme();    
    if ( 'Travelicious' == $current_theme->name || 'Travelicious' == $current_theme->parent_theme ) {        
        if ( !function_exists('bt_load_plugin_textdomain') ) {
            activate_plugin('travelicious/travelicious.php'); 
        }
    }else{
        if ( function_exists('bt_load_plugin_textdomain') ) {
            deactivate_plugins('travelicious/travelicious.php');    
        }
    }
}

/**
 * Register navigation menus
 */
if ( ! function_exists( 'travelicious_register_menus' ) ) {
	function travelicious_register_menus() {
		register_nav_menus( array (
			'primary' => esc_html__( 'Primary Menu', 'travelicious' ),
			'footer'  => esc_html__( 'Footer Menu', 'travelicious' )
		));
	}
}

/**
 * Enqueue scripts and styles
 */
if ( ! function_exists( 'travelicious_enqueue_scripts_styles' ) ) {
	function travelicious_enqueue_scripts_styles() {
		
		BoldThemesFramework::$crush_vars_def = array( 'accentColor', 'alternateColor', 'bodyFont', 'menuFont', 'headingFont', 'headingSuperTitleFont', 'headingSubTitleFont', 'logoHeight' );
		
		// Custom accent color and font style
		$boldthemes_add_override_css = false;		
		
		$accent_color = boldthemes_get_option( 'accent_color' );
		$alternate_color = boldthemes_get_option( 'alternate_color' );
		$body_font = urldecode( boldthemes_get_option( 'body_font' ) );
		$menu_font = urldecode( boldthemes_get_option( 'menu_font' ) );
		$heading_font = urldecode( boldthemes_get_option( 'heading_font' ) );
		$heading_supertitle_font = urldecode( boldthemes_get_option( 'heading_supertitle_font' ) );
		$heading_subtitle_font = urldecode( boldthemes_get_option( 'heading_subtitle_font' ) );
		$logo_height = urldecode( boldthemes_get_option( 'logo_height' ) );

		if ( $accent_color != '' ) {
			BoldThemesFramework::$crush_vars['accentColor'] = $accent_color;
			if ( $accent_color != BoldThemes_Customize_Default::$data['accent_color'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $alternate_color != '' ) {
			BoldThemesFramework::$crush_vars['alternateColor'] = $alternate_color;
			if ( $alternate_color != BoldThemes_Customize_Default::$data['alternate_color'] ) {
				$boldthemes_add_override_css = true;
			}
		}
		if ( $body_font != '' ) {
			if ( $body_font == 'no_change' ) {
				$body_font = BoldThemes_Customize_Default::$data['body_font'];
			}
			BoldThemesFramework::$crush_vars['bodyFont'] = $body_font;
			if ( $body_font != BoldThemes_Customize_Default::$data['body_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $menu_font != '' ) {
			if ( $menu_font == 'no_change' ) {
				$menu_font = BoldThemes_Customize_Default::$data['menu_font'];
			}
			BoldThemesFramework::$crush_vars['menuFont'] = $menu_font;
			if ( $menu_font != BoldThemes_Customize_Default::$data['menu_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_font != '' ) {
			if ( $heading_font == 'no_change' ) {
				$heading_font = BoldThemes_Customize_Default::$data['heading_font'];
			}
			BoldThemesFramework::$crush_vars['headingFont'] = $heading_font;
			if ( $heading_font != BoldThemes_Customize_Default::$data['heading_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_supertitle_font != '' ) {
			if ( $heading_supertitle_font == 'no_change' ) {
				$heading_supertitle_font = BoldThemes_Customize_Default::$data['heading_supertitle_font'];
			}
			BoldThemesFramework::$crush_vars['headingSuperTitleFont'] = $heading_supertitle_font;
			if ( $heading_supertitle_font != BoldThemes_Customize_Default::$data['heading_supertitle_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_subtitle_font != '' ) {
			if ( $heading_subtitle_font == 'no_change' ) {
				$heading_subtitle_font = BoldThemes_Customize_Default::$data['heading_subtitle_font'];
			}
			BoldThemesFramework::$crush_vars['headingSubTitleFont'] = $heading_subtitle_font;
			if ( $heading_subtitle_font != BoldThemes_Customize_Default::$data['heading_subtitle_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}
		
		if ( $logo_height != '' ) {
			BoldThemesFramework::$crush_vars['logoHeight'] = $logo_height;
			if ( $logo_height != BoldThemes_Customize_Default::$data['logo_height'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		// Create override file without local settings
		if ( function_exists( 'boldthemes_csscrush_file' ) ) {
			boldthemes_csscrush_file( get_theme_file_path( 'style.crush.css' ), array( 'source_map' => true, 'minify' => false, 'output_file' => 'style', 'formatter' => 'block', 'boilerplate' => false, 'vars' => BoldThemesFramework::$crush_vars, 'plugins' => array( 'loop', 'ease' ) ) );
		}

		// custom theme css
		wp_enqueue_style( 'travelicious-style', get_parent_theme_file_uri( 'style.css' ), array(), false, 'screen' );
		wp_enqueue_style( 'travelicious-print', get_parent_theme_file_uri( 'print.css' ), array(), false, 'print' );

		// external js
		wp_enqueue_script( 'fancySelect', get_parent_theme_file_uri( 'framework/js/fancySelect.js' ), array( 'jquery' ), '', true );

		// custom theme js
		wp_enqueue_script( 'travelicious-header', get_parent_theme_file_uri( 'framework/js/header.misc.js' ), array( 'jquery' ), '', true );
		wp_enqueue_script( 'travelicious-misc', get_parent_theme_file_uri( 'framework/js/misc.js' ), array( 'jquery' ), '', true );
		
		wp_add_inline_script( 'travelicious-header', boldthemes_set_global_uri(), 'before' );
		
		if ( file_exists( get_parent_theme_file_path( 'css-override.php' ) ) && $boldthemes_add_override_css ) {
			require_once( get_parent_theme_file_path( 'css-override.php' ) );
			wp_add_inline_style( 'travelicious-style', $css_override );
		}
		
		if ( file_exists( get_parent_theme_file_path( 'icons.php' ) ) ) {
			require_once( get_parent_theme_file_path( 'icons.php' ) );
			wp_add_inline_style( 'travelicious-style', $icons );
		}
                
		if ( file_exists( get_parent_theme_file_path( '/php/style.php' ) ) ) {
			require_once( get_parent_theme_file_path( '/php/style.php' ) );
			wp_add_inline_style( 'travelicious-style', $prev_next_style_css );
		}

		if ( boldthemes_get_option( 'custom_js' ) != '' ) {
			wp_add_inline_script( 'travelicious-misc', boldthemes_get_option( 'custom_js' ) );
		}
                
		$bt_tour_search_date_format = isset($_GET['bt_tour_search_date_format']) && $_GET['bt_tour_search_date_format'] != '' ? sanitize_text_field( $_GET['bt_tour_search_date_format'] ) : '';
		
		BoldThemesFrameworkTemplate::$tour_search_show_only_months      = boldthemes_get_option( 'tour_search_show_only_months' ) != ''
			? boldthemes_get_option( 'tour_search_show_only_months' ) : BoldThemes_Customize_Default::$data['tour_search_show_only_months'];
		$tour_search_show_only_months = BoldThemesFrameworkTemplate::$tour_search_show_only_months ? 1 : 0;
		
		BoldThemesFrameworkTemplate::$datepicker_format = bt_set_wp_to_datepicker_format( get_option( 'date_format' ), $tour_search_show_only_months );
		wp_register_script( 'travelicious-js', get_parent_theme_file_uri( 'js/travelicious.js'), array( 'jquery' ), '', true );
		wp_localize_script( 'travelicious-js', 'travelicious_js_object', array(
					'show_only_months'      => $tour_search_show_only_months,
					'label_current_month'   => esc_html__( 'Current month', 'travelicious' ),
					'label_clear'           => esc_html__( 'Clear', 'travelicious' ),
					'date_format'           => bt_set_wp_to_datepicker_format( get_option( 'date_format' ), $tour_search_show_only_months ),
					'label_day'             => esc_html__( 'Day', 'travelicious' ),
					'label_month'           => esc_html__( 'Month', 'travelicious' ),
					'label_year'            => esc_html__( 'Year', 'travelicious' ),
				)
		);
		wp_enqueue_script( 'travelicious-js' );                
		
		wp_enqueue_script( 'travelicious-tour-js', get_parent_theme_file_uri( 'views/tour/js/tour.js' ), array( 'jquery' ), '', true );
		
		wp_register_script( 'markerclusterer', get_template_directory_uri() . '/views/tour/js/markerclusterer.js' );
		wp_localize_script( 'markerclusterer', 'gmaps_markerclusterer_object', array( 'image_path' => get_template_directory_uri() . '/gfx/m' ) );
		wp_enqueue_script( 'markerclusterer' );
                
	}
}

/**
 * Register the required plugins for this theme
 */
if ( ! function_exists( 'travelicious_register_plugins' ) ) {
	function travelicious_register_plugins() {

		$plugins = array(
	 
			array(
				'name'               => esc_html__( 'Travelicious', 'travelicious' ), // The plugin name.
				'slug'               => 'travelicious', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/travelicious.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '1.4.4', ///!do not change this comment! E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Cost Calculator', 'travelicious' ), // The plugin name.
				'slug'               => 'bt' . '_cost_calculator', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/' . 'bt' . '_cost_calculator.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '2.2.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Bold Timeline', 'travelicious' ), // The plugin name.
				'slug'               => 'bold-timeline', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/' . 'bold-timeline.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '1.0.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Bold Builder', 'travelicious' ), // The plugin name.
				'slug'               => 'bold-page-builder', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'BoldThemes WordPress Importer', 'travelicious' ), // The plugin name.
				'slug'               => 'bt' . '_wordpress_importer', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/' . 'bt' . '_wordpress_importer.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '2.5.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Meta Box', 'travelicious' ), // The plugin name.
				'slug'               => 'meta-box', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'Contact Form 7', 'travelicious' ), // The plugin name.
				'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'Lightweight Sidebar Manager', 'travelicious' ), // The plugin name.
				'slug'               => 'sidebar-manager', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			)
		);
	 
		$config = array(
			'default_path' => '',                      // Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'travelicious' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'travelicious' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'travelicious' ), // %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'travelicious' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'travelicious' ), // %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'travelicious' ), // %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'travelicious' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'travelicious' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'travelicious' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'travelicious' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'travelicious' ), // %s = dashboard link.
				'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);
	 
		tgmpa( $plugins, $config );
	 
	}
}

/**
 * Loads custom Google Fonts
 */
if ( ! function_exists( 'travelicious_load_fonts' ) ) {
	function travelicious_load_fonts() {
		$body_font = urldecode( boldthemes_get_option( 'body_font' ) );
		$heading_font = urldecode( boldthemes_get_option( 'heading_font' ) );
		$menu_font = urldecode( boldthemes_get_option( 'menu_font' ) );
		$heading_subtitle_font = urldecode( boldthemes_get_option( 'heading_subtitle_font' ) );
		$heading_supertitle_font = urldecode( boldthemes_get_option( 'heading_supertitle_font' ) );
		
		$font_families = array();
		
		if ( $body_font != '' ) {
			if ( $body_font == 'no_change' ) {
				$body_font = BoldThemes_Customize_Default::$data['body_font'];
			}
			$font_families[] = $body_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			/*
			Translators: If there are characters in your language that are not supported
			by chosen font(s), translate this to 'off'. Do not translate into your own language.
			 */
			if ( 'off' !== _x( 'on', 'Lato font: on or off', 'travelicious' ) ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}
		
		if ( $heading_font != '' ) {
			if ( $heading_font == 'no_change' ) {
				$heading_font = BoldThemes_Customize_Default::$data['heading_font'];
			}
			$font_families[] = $heading_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			/*
			Translators: If there are characters in your language that are not supported
			by chosen font(s), translate this to 'off'. Do not translate into your own language.
			 */
			if ( 'off' !== _x( 'on', 'Lato font: on or off', 'travelicious' ) ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}
		
		if ( $menu_font != '' ) {
			if ( $menu_font == 'no_change' ) {
				$menu_font = BoldThemes_Customize_Default::$data['menu_font'];
			}
			$font_families[] = $menu_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			/*
			Translators: If there are characters in your language that are not supported
			by chosen font(s), translate this to 'off'. Do not translate into your own language.
			 */
			if ( 'off' !== _x( 'on', 'Lato font: on or off', 'travelicious' ) ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( $heading_subtitle_font != '' ) {
			if ( $heading_subtitle_font == 'no_change' ) {
				$heading_subtitle_font = BoldThemes_Customize_Default::$data['heading_subtitle_font'];
			}
			$font_families[] = $heading_subtitle_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			/*
			Translators: If there are characters in your language that are not supported
			by chosen font(s), translate this to 'off'. Do not translate into your own language.
			 */
			if ( 'off' !== _x( 'on', 'Lato font: on or off', 'travelicious' ) ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( $heading_supertitle_font != '' ) {
			if ( $heading_supertitle_font == 'no_change' ) {
				$heading_supertitle_font = BoldThemes_Customize_Default::$data['heading_supertitle_font'];
			}
			$font_families[] = $heading_supertitle_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			/*
			Translators: If there are characters in your language that are not supported
			by chosen font(s), translate this to 'off'. Do not translate into your own language.
			 */
			if ( 'off' !== _x( 'on', 'Lato font: on or off', 'travelicious' ) ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( count( $font_families ) > 0 ) {
			$query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);
			$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
			wp_enqueue_style( 'travelicious-fonts', $font_url, array(), '1.0.0' );
		}
	}
}

if ( ! function_exists( 'travelicious_load_admin_style' ) ) {
	function travelicious_load_admin_style() {
		if ( function_exists( 'boldthemes_csscrush_file' ) ) {
			boldthemes_csscrush_file( get_stylesheet_directory() . '/admin-style.crush.css', array( 'source_map' => true, 'minify' => false, 'output_file' => 'admin-style', 'formatter' => 'block', 'boilerplate' => false, 'vars' => BoldThemesFramework::$crush_vars, 'plugins' => array( 'loop', 'ease' ) ) );
		}
		wp_enqueue_style( 'travelicious-admin-style', get_parent_theme_file_uri( 'admin-style.css' ) );
		require_once( get_parent_theme_file_path( 'admin-style.php' ) );
		wp_add_inline_style( 'travelicious-admin-style', $admin_style );
	}
}

if ( ! function_exists( 'travelicious_widget_area' ) ) {
	function travelicious_widget_area() {
		if ( class_exists( 'woocommerce' ) ) {
			register_sidebar( array (
				'name' 			=> esc_html__( 'Shop Sidebar', 'travelicious' ),
				'id' 			=> 'bt_shop_sidebar',
				'description'   => 'WooCommerce sidebar',
				'before_widget' => '<div class="btBox %2$s">',
				'after_widget' 	=> '</div>',
				'before_title' 	=> '<h4><span>',
				'after_title' 	=> '</span></h4>',
			));
		}
	}
}

if ( ! function_exists( 'bt_map_is_osm' ) ) {
    function bt_map_is_osm() {  
        if ( function_exists( 'boldthemes_get_option' ) ) {   
            $tour_map_type = boldthemes_get_option( 'tour_map_type' ) != '' ? boldthemes_get_option( 'tour_map_type' ) : 'google';
            if ( $tour_map_type == 'osm' ){
                return 1;
            }
        }
        return 0;
    }
}


require_once( get_parent_theme_file_path( 'php/before_framework.php' ) );
require_once( get_parent_theme_file_path( 'framework/framework.php' ) );
require_once( get_parent_theme_file_path( 'php/config.php' ) );
require_once( get_parent_theme_file_path( 'php/after_framework.php' ) );
require_once( get_template_directory() . '/amp/amp.php' );
