<?php

/**
 * Default header dash
 */
if ( ! function_exists( 'boldthemes_header_headline_size' ) ) {
	function boldthemes_header_headline_size( $size ) {
		return 'large';
	}
}
add_filter( 'boldthemes_header_headline_size', 'boldthemes_header_headline_size' );

/**
 * Listing image sizes
 */
if ( ! function_exists( 'boldthemes_tour_image_sizes' ) ) {
	function boldthemes_tour_image_sizes() {
		add_image_size( 'boldthemes_tour_medium_rectangle', 800, 533, true );
                add_image_size( 'boldthemes_tour_medium_portrait', 800, 904, true );
                add_image_size( 'boldthemes_tour_header_slider_rectangle', 1920, 770, true );
	}
}
add_action( 'after_setup_theme', 'boldthemes_tour_image_sizes' );

/**
 * Default header dash
 */
if ( ! function_exists( 'boldthemes_header_headline_dash' ) ) {
	function boldthemes_header_headline_dash() {
		return "top"; 
	}
}
add_filter( 'boldthemes_header_headline_dash', 'boldthemes_header_headline_dash' );

if ( ! function_exists( 'boldthemes_header_headline' ) ) {
	function boldthemes_header_headline( $arg = array() ) {
		
		$extra_class = 'btPageHeadline';
		
		$dash  = '';
		$use_dash = boldthemes_get_option( 'sidebar_use_dash' );
		if ( is_singular( 'post' ) ) {
			$use_dash = boldthemes_get_option( 'blog_use_dash' );
		} else if ( is_singular( 'product' ) ) {
			$use_dash = boldthemes_get_option( 'shop_use_dash' );
		}  else if ( is_singular( 'portfolio' ) ) {
			$use_dash = boldthemes_get_option( 'pf_use_dash' );
		} 
		if ( $use_dash ) $dash  = apply_filters( 'boldthemes_header_headline_dash', 'top' );		
		
		
		if ( is_front_page() ) {
			$title = get_bloginfo( 'description' );
		} else if ( is_singular() ) {
			$title = get_the_title();
		} else {
			$title = wp_title( '', false );
		}
                
		// yoast not to override title                
		if (  in_array('wordpress-seo/wp-seo.php', apply_filters('active_plugins', get_option('active_plugins'))) ){ 
			//$title = get_the_title( BoldThemesFramework::$page_for_header_id);
		} 
        
		$excerpt = '';

		if ( BoldThemesFramework::$page_for_header_id != '' ) {
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id( BoldThemesFramework::$page_for_header_id ) );			
			$excerpt = boldthemes_get_the_excerpt( BoldThemesFramework::$page_for_header_id );
			if ( ! $feat_image ) {
				if ( is_singular() &&  !is_singular( "product" ) ) {
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
				} else {
					$feat_image = false;
				}
			}
		} else {
			if ( is_singular() ) {
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
			} else {
				$feat_image = false;
			}
			if ( is_singular() ) {
				$excerpt = boldthemes_get_the_excerpt( get_the_ID() );
			}
		}
		
		$parallax = isset( $arg['parallax'] ) ? $arg['parallax'] : apply_filters( 'boldthemes_header_headline_parallax', '0.8' );
		$parallax_class = 'bt_bb_parallax';
		if ( wp_is_mobile() ) {
			$parallax = 0;
			$parallax_class = '';
		}
		
		$supertitle = '';
		$subtitle = $excerpt;
		
		$breadcrumbs = isset( $arg['breadcrumbs'] ) ? $arg['breadcrumbs'] : true;
		
		
		if ( $breadcrumbs ) {
			$heading_args = boldthemes_breadcrumbs( false, $title, $subtitle ); 
			$supertitle = $heading_args['supertitle'];
			$title = $heading_args['title'];
			$subtitle = $heading_args['subtitle'];
		}
                
		if ( is_singular( "tour" ) ){
			$tour_single_list_header_view = boldthemes_get_option( 'tour_single_list_header_view' );
			
			if ( $tour_single_list_header_view != '' ) {

				$excerpt = boldthemes_get_the_excerpt( get_the_ID() );

				BoldThemesFrameworkTemplate::$title				= $title;
				BoldThemesFrameworkTemplate::$supertitle		= $supertitle;
				BoldThemesFrameworkTemplate::$subtitle			= $subtitle;
				BoldThemesFrameworkTemplate::$feat_image		= $feat_image;
				BoldThemesFrameworkTemplate::$extra_class		= $extra_class;
				BoldThemesFrameworkTemplate::$parallax			= $parallax;
				BoldThemesFrameworkTemplate::$dash				= $dash;
				BoldThemesFrameworkTemplate::$parallax_class    = $parallax_class;
				BoldThemesFrameworkTemplate::$excerpt			= $excerpt;

				get_template_part( 'views/tour/header/' . $tour_single_list_header_view );
			} 
		} else {
				if ( $title != '' || $supertitle != '' || $subtitle != '' ) {
						$extra_class .= $feat_image ? ' bt_bb_background_image bt_bb_background_overlay_gradient ' . $parallax_class . ' btDarkSkin ' : ' ';

						echo '<section class="bt_bb_section gutter bt_bb_vertical_align_top ' . esc_attr( $extra_class ) . '" style="background-image:url(' . esc_url_raw( $feat_image ) . ')" data-parallax="' . esc_attr( $parallax ) . '" data-parallax-offset="0">';
								echo '<div class="bt_bb_port port">';
										echo '<div class="bt_bb_cell">';
												echo '<div class="bt_bb_cell_inner">';
														echo '<div class = "bt_bb_row">';
																echo '<div class="bt_bb_column bt_bb_align_center">';
																		echo '<div class="bt_bb_column_content">';
																				echo boldthemes_get_heading_html( 
																						array(
																								'superheadline' => $supertitle,
																								'headline' => $title,
																								'subheadline' => $subtitle,
																								'html_tag' => "h1",
																								'size' => apply_filters( 'boldthemes_header_headline_size', 'extra_large' ),
																								'dash' => $dash,
																								'el_style' => '',
																								'el_class' => ''
																						)
																				);
																				echo '</div><!-- /rowItemContent -->' ;
																		echo '</div><!-- /rowItem -->';
														echo '</div><!-- /boldRow -->';
												echo '</div><!-- boldCellInner -->';	
										echo '</div><!-- boldCell -->';			
								echo '</div><!-- port -->';
						echo '</section>';
				}
		}		
	}
}

/**
 * Breadcrumbs : original boldthemes_functions.php 1561
 */
if ( ! function_exists( 'boldthemes_breadcrumbs' ) ) {
	function boldthemes_breadcrumbs( $simple = false, $title, $subtitle ) {

		$home_link = home_url( '/' );
		$output  = '';
		$item_prefix = '<span>';
		$item_suffix = '</span>';
		if ( $simple ) {
			$item_prefix = '';
			$item_suffix = ' / ';
		}

		if ( ! is_404() && ! is_front_page() ) {
		
			if ( ! $simple ) {
				$output .= '<span class="btBreadCrumbs">';
				if ( ! is_singular() || is_page() ) {
					$output .= '<span><a href="' . esc_url_raw( $home_link ) . '">' . esc_html__( 'Home', 'travelicious' ) . '</a></span>';
				}
			} else {
				if ( ! is_singular() || is_page() ) {
					$output .= '<a href="' . esc_url_raw( $home_link ) . '">' . esc_html__( 'Home', 'travelicious' ) . '</a>';
				}
			}
			
			if ( is_home() ) {
				
				$subtitle = '';
				
				$page_for_posts = get_option( 'page_for_posts' );
				if ( $page_for_posts ) {
					$page = get_post( $page_for_posts );
					$subtitle = $page->post_excerpt;
				}
			
			} else if ( is_page() ) {

				$ancestors = get_ancestors( get_the_ID(), 'page' );
				$ancestors = array_reverse( $ancestors );
			
				foreach( $ancestors as $ancestor ) {
					$output .= wp_kses_post( $item_prefix ) . '<a href="' . esc_url_raw( get_permalink( $ancestor ) ) . '">' . wp_kses_post( get_the_title( $ancestor ) ) . '</a>' . wp_kses_post( $item_suffix );
				}
				
				$page = get_post( get_the_ID() );
				$subtitle = $page->post_excerpt;
		  
			} else if ( is_singular( 'post' ) ) {
				
				$output .= boldthemes_get_post_categories();
				
				$subtitle = boldthemes_get_post_meta();

			
			} else if ( is_singular( 'portfolio' ) ) {
				
				$categories = wp_get_post_terms( get_the_ID(), 'portfolio_category' );
				$output .= boldthemes_get_post_categories( array( 'categories' => $categories ) );
				
				$subtitle = boldthemes_get_the_excerpt( get_the_ID() );
				
			} else if ( is_singular( 'product' ) ) {
				
				$id = get_queried_object_id();
				$categories = wp_get_post_terms( $id, 'product_cat' );
				$output .= boldthemes_get_post_categories( array( 'categories' => $categories ) );
				
				$pf = new WC_Product_Factory();
				$product = $pf->get_product( $id );
				$rating_count = $product->get_rating_count();
				if ( $rating_count > 0 ) {
					$subtitle = wc_get_rating_html( $product->get_average_rating() );
				}
				
			} else if ( is_post_type_archive( 'portfolio' ) ) {
				if ( ! is_null( boldthemes_get_option( 'pf_slug' ) ) && boldthemes_get_option( 'pf_slug' ) != '' ) {
					$title = get_the_title( boldthemes_get_id_by_slug( boldthemes_get_option( 'pf_slug' ) ) );
                    if ( $title == '' ) {
						$title = ucwords( boldthemes_get_option( 'pf_slug' ) );
                    }
					$output .= $item_prefix . ucwords( str_replace( array( '-', '_' ), ' ', $title ) ) . $item_suffix;
				} else if ( ! is_null( boldthemes_get_id_by_slug( 'portfolio' ) ) && boldthemes_get_id_by_slug( 'portfolio' ) != '' ) {
					$output .= $item_prefix . esc_html__( 'Portfolio', 'travelicious' ) . $item_suffix;
				} else {
					$output .= $item_prefix . esc_html__( 'Portfolio', 'travelicious' ) . $item_suffix;
				}
				
				if ( ! is_null( boldthemes_get_id_by_slug( 'portfolio' ) ) && boldthemes_get_id_by_slug( 'portfolio' ) != '' ) {
					$title = get_the_title( boldthemes_get_id_by_slug( 'portfolio' ) );
				}

			} else if ( is_post_type_archive( 'tour' ) ) {
				if ( ! is_null( boldthemes_get_option( 'tour_slug' ) ) && boldthemes_get_option( 'tour_slug' ) != '' ) {
                                        $title = get_the_title( boldthemes_get_id_by_slug( boldthemes_get_option( 'tour_slug' ) ) );
                                        if ( $title == '' ) {
                                            $title = ucwords( boldthemes_get_option( 'tour_slug' ) );
                                        }
					$output .= $item_prefix . ucwords( str_replace( array( '-', '_' ), ' ', $title ) ) . $item_suffix;
				} else if ( ! is_null( boldthemes_get_id_by_slug( 'tour' ) ) && boldthemes_get_id_by_slug( 'tour' ) != '' ) {
					$output .= $item_prefix . esc_html__( 'Tour', 'travelicious' ) . $item_suffix;
				} else {
					$output .= $item_prefix . esc_html__( 'Tour', 'travelicious' ) . $item_suffix;
				}
				
				if ( ! is_null( boldthemes_get_id_by_slug( 'tour' ) ) && boldthemes_get_id_by_slug( 'tour' ) != '' ) {
					$title = get_the_title( boldthemes_get_id_by_slug( 'tour' ) );
				}

			}  else if ( is_attachment() ) {
			
				$output .= $item_prefix . get_the_title() . $item_suffix;
				
			} else if ( is_category() ) {

				$output .= $item_prefix . esc_html__( 'Category', 'travelicious' ) . $item_suffix;

				$subtitle = '';
				
			} else if ( is_tax() ) {
				
				$output .= $item_prefix . esc_html__( 'Category', 'travelicious' ) . $item_suffix;
				
				$title = single_term_title( '', false );
				$subtitle = '';				
		  
			} else if ( is_tag() ) {
			
				$output .= $item_prefix . esc_html__( 'Tag', 'travelicious' ) . $item_suffix;
				
				$subtitle = '';
		  
			} else if ( is_author() ) {
			
				$output .= $item_prefix . esc_html__( 'Author', 'travelicious' ) . $item_suffix;
				
				$subtitle = '';
				
			} else if ( is_day() ) {

				$output .= $item_prefix . get_the_time( 'Y/m ' ) . $item_suffix;
		  
			} else if ( is_month() ) {
			
				$output .= $item_prefix . get_the_time( 'Y' ) . $item_suffix;
		  
			} else if ( is_year() ) {
			
				$output .= $item_prefix . $item_suffix;			
				
			} else if ( is_search() ) {
				
				$output .= $item_prefix . esc_html__( 'Search', 'travelicious' ) . $item_suffix;

				$title = get_query_var( 's' );
				$subtitle = '';
				
			}
			
			if ( ! $simple ) {
				$output .= '</span>';
			}
			
		}
                
		return array( 'supertitle' => $output, 'title' => $title, 'subtitle' => $subtitle );
	
	}
}

/**
 * Override header options
 */
 if ( ! function_exists( 'boldthemes_customize_header_style' ) ) {
	function boldthemes_customize_header_style( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[header_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['header_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'header_style', array(
			'label'     => esc_html__( 'Header Style', 'travelicious' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[header_style]',
			'priority'  => 62,
			'type'      => 'select',
			'choices'   => array(
				'transparent-light'  	=> esc_html__( 'Transparent Light', 'travelicious' ),
				'transparent-dark'   	=> esc_html__( 'Transparent Dark', 'travelicious' ),
				'accent-dark' 			=> esc_html__( 'Accent + Dark', 'travelicious' ),
				'accent-light' 			=> esc_html__( 'Light + Accent ', 'travelicious' ),
				'light-accent' 			=> esc_html__( 'Accent + Light', 'travelicious' ),
				'light-dark' 			=> esc_html__( 'Light + Dark', 'travelicious' ),
				'accent-gradient'		=> esc_html__( 'Accent + Light with Gradient', 'travelicious' ),
				'alternate-gradient' 	=> esc_html__( 'Alternate + Light with Gradient', 'travelicious' )
			)
		));
	}
}

/**
 * WooCommerce share small icons
 */

add_filter( 'boldthemes_shop_share_settings', 'boldthemes_shop_share_settings_function' );
if ( ! function_exists( 'boldthemes_shop_share_settings_function' ) ) {
	function boldthemes_shop_share_settings_function( $extra_class ) {		
		return array( 'xsmall', 'filled', 'circle' );
	}
}

/**
 * WooCommerce related products
 */

if ( ! function_exists( 'boldthemes_related_products_args' ) ) {
	function boldthemes_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // n related products
		$args['columns'] = 3; // arranged in n columns
		return $args;
	}
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
	function woocommerce_output_upsells() {
	    woocommerce_upsell_display( 3,3 ); // Display 3 products in rows of 3
	}
}

/**
 * WooCommerce headline size
 */
if ( ! function_exists( 'boldthemes_product_list_headline_size' ) ) {
	function boldthemes_product_list_headline_size ( ) {
		return 'small';
	}
}
add_filter( 'boldthemes_product_list_headline_size', 'boldthemes_product_list_headline_size' );

if ( ! function_exists( 'boldthemes_customize_register' ) ) {
	function boldthemes_customize_register( $wp_customize ) {
		
		global $wpdb;
		
		if ( isset( $_GET['boldthemes_reset'] ) && $_GET['boldthemes_reset'] == 'reset' ) {
			$wpdb->query( 'delete from ' . $wpdb->options . ' where option_name = "' . BoldThemesFramework::$pfx . '_theme_options"' );
			header( 'Location: ' . wp_customize_url());
		}

		$wp_customize->remove_section( 'colors' );
		
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_general_section' , array(
			'title'      => esc_html__( 'General Settings', 'travelicious' ),
			'priority'   => 10,
		));
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_header_footer_section' , array(
			'title'      => esc_html__( 'Header and Footer', 'travelicious' ),
			'priority'   => 20,
		));
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_typo_section' , array(
			'title'      => esc_html__( 'Typography', 'travelicious' ),
			'priority'   => 30,
		));
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_blog_section' , array(
			'title'      => esc_html__( 'Blog', 'travelicious' ),
			'priority'   => 40,
		));
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_pf_section' , array(
			'title'      => esc_html__( 'Destinations', 'travelicious' ),
			'priority'   => 50,
		));
                $wp_customize->add_section( BoldThemesFramework::$pfx . '_tour_section' , array(
			'title'      => esc_html__( 'Tour Single', 'travelicious' ),
			'priority'   => 60,
		));
                $wp_customize->add_section( BoldThemesFramework::$pfx . '_tour_tabs_section' , array(
			'title'      => esc_html__( 'Tour Single Tabs', 'travelicious' ),
			'priority'   => 65,
		));
                $wp_customize->add_section( BoldThemesFramework::$pfx . '_tour_search_section' , array(
			'title'      => esc_html__( 'Tour Search', 'travelicious' ),
			'priority'   => 70,
		));
                $wp_customize->add_section( BoldThemesFramework::$pfx . '_tour_booking_section' , array(
			'title'      => esc_html__( 'Tour Booking', 'travelicious' ),
			'priority'   => 80,
		));
                $wp_customize->add_section( BoldThemesFramework::$pfx . '_tour_map_section' , array(
			'title'      => esc_html__( 'Tour Map', 'travelicious' ),
			'priority'   => 90,
		));
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_shop_section' , array(
			'title'      => esc_html__( 'Shop', 'travelicious' ),
			'priority'   => 100,
		));
                

		require_once( get_parent_theme_file_path( 'framework/web_fonts.php' ) );
	}
}

if ( ! class_exists( 'BoldThemesFrameworkTemplate' ) ) {
	// Override BoldThemesFrameworkTemplate class
	class BoldThemesFrameworkTemplate {
		public static $blog_author;
		public static $blog_date;
		public static $author_url;
		public static $show_comments_number;
		public static $blog_use_dash;
		public static $class_array;
		public static $blog_side_info;
		public static $media_html;
		public static $categories_html;
		public static $tags_html;
		public static $content_final_html;
		public static $post_format;
		public static $content_html;
		public static $meta_html;
		public static $dash;
		public static $cf;
		public static $pf_use_dash;
		public static $tour_use_dash;
                
		public static $tour_single_author_review;
		
		public static $tour_grid_gallery_columns;
		public static $tour_grid_gallery_gap;

		public static $media_image_html;
		public static $media_video_html;
		public static $media_audio_html;

		public static $title;
		public static $author;
		public static $status;
		public static $name;
		public static $parent;
		public static $guid;
		public static $supertitle;
		public static $subtitle;
		public static $extra_class;
		public static $parallax;
		public static $parallax_class;
		public static $excerpt;
		public static $content;
		public static $tour_price;
		public static $tour_faq;
                
		public static $feat_image;
		public static $feat_image_tour_list;
		public static $feat_image_large_square;
		public static $feat_image_boldthemes_tour_medium_rectangle;

		public static $tour_category;
		public static $tour_categories;
		public static $tour_tag;
		public static $tour_tags;
		public static $tour_region;
		public static $tour_regions;
		public static $tour_destination;
		public static $tour_destinations;
		public static $tours;
		public static $tours_similar;
		public static $found;
		public static $posts_per_page;
		public static $max_page;
		public static $limit;
		public static $custom_map_style;
		public static $tour_custom_map_style;
		public static $order_by;

		public static $tour_pin_normal;
		public static $tour_pin_selected;
		public static $tour_default_image;

		public static $tour_list_view;
		public static $tour_list_grid_view;
		public static $tour_grid_columns;
		public static $tour_search_action_type;
		public static $tour_listing_pagination;
		public static $paged;

		public static $keyword;
		public static $location;

		public static $tour_gets = array();
		public static $tour_grid_nearby_category;

		public static $tour_search_distance_unit;
		public static $tour_distance_max;

		public static $tour_search_autocomplete;
		public static $location_autocomplete_distance;

		public static $bt_bb_tour_field_my_lat;
		public static $bt_bb_tour_field_my_lng;
		public static $bt_bb_tour_field_my_lat_default;
		public static $bt_bb_tour_field_my_lng_default;
		public static $bt_bb_tour_field_distance;
		public static $bt_bb_tour_field_location_autocomplete;

		public static $tour_root_slug;                
		public static $currency_symbol;
		public static $tour_currency_before_price;

		public static $tour_comments_number;

		public static $post_user_rating;

		public static $tour_list_count;
		public static $tour_similar_tours_list_count;
		public static $tour_similar_tours_list_number;

		public static $tour_single_design;

		public static $tour_similar_tours_list_gap;
		public static $tour_similar_tours_list_columns;
		public static $tour_similar_tours_list_by_type;
		
		public static $similar_tours_list_gap;
		public static $similar_tours_list_columns;
		public static $similar_tours_list_by_type;
		public static $tour_single_similar_list_design;

		public static $tour_api_key;
		public static $tour_gmap_zoom;
		public static $tour_gmap_lat;
		public static $tour_gmap_lng;

		public static $tour_currency;

		public static $tour_search_show_categories;
		public static $tour_search_show_only_months;
		public static $tour_search_date_before_after_days;

		public static $tour_contact_form_booking;
		public static $tour_contact_form_enquiry;
		public static $tour_contact_form_booking_show;
		public static $tour_contact_form_enquiry_show;
		public static $tour_contact_form_booking_enquiry_show;

		public static $datepicker_format;
		public static $search_date_format;
		public static $search_show_months;

		public static $tour_single_user_review;
		public static $tour_show_other_times;

		public static $tour_search_open_single_new_window;
                
		// tour meta boxes
		
		public static $tour_rwmb_map;
		public static $tour_rwmb_lat;
		public static $tour_rwmb_lng;
		public static $tour_rwmb_zoom;
		public static $tour_rwmb_map_embed;
		public static $tour_rwmb_map_file;
		public static $tour_rwmb_start_location;
		public static $tour_rwmb_departure_location;
		public static $tour_rwmb_return_location;
		public static $tour_rwmb_destination;
		public static $tour_rwmb_destination_text;                
		
		public static $tour_rwmb_supertitle;
		public static $tour_rwmb_title;
		public static $tour_rwmb_subtitle;
		public static $tour_rwmb_regular_price;
		public static $tour_rwmb_original_price;
		public static $tour_rwmb_discount_title;
		public static $tour_rwmb_travellers;
		public static $tour_rwmb_time;
		public static $tour_rwmb_duration;
                public static $tour_rwmb_booking_link;
		
		public static $tour_rwmb_images;
		public static $tour_rwmb_featured_images;
		public static $tour_rwmb_featured_video;
		
		public static $tour_rwmb_dt;
		public static $tour_rwmb_dt_text;
		public static $tour_rwmb_dt_format;
		public static $tour_rwmb_price_include;
		public static $tour_rwmb_price_no_include;
		public static $tour_rwmb_plan;
		public static $tour_rwmb_location_description;
		
		public static $tour_rwmb_plan_title;
		public static $tour_rwmb_plan_headline;
		public static $tour_rwmb_plan_description;
		
		public static $tour_rwmb_additional_prices;
		public static $tour_rwmb_additional_info;
		public static $tour_rwmb_additional_custom;
                
                public static $tour_rwmb_custom_tab_title;
                public static $tour_rwmb_custom_tab_content;                
		
		public static $search_limit;
		public static $search_orderby;
		public static $search_order;
		public static $search_keyword;
		public static $search_destination;
		public static $search_start_date;
		public static $search_price_from;
		public static $search_price_to;
		public static $search_categories;
		public static $search_sorting;
                
                
	}
}

/**
 * Returns custom header class
 *
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_body_class' ) ) {
	function boldthemes_get_body_class( $extra_class ) {
		
		$extra_class[] = 'bodyPreloader'; 
		
		if ( boldthemes_get_option( 'alt_logo' ) ) {
			$extra_class[] = 'btHasAltLogo';
		}
		
		$menu_type = boldthemes_get_option( 'menu_type' );
		if ( $menu_type == 'horizontal-center' ) {
			$extra_class[] = 'btMenuCenterEnabled'; 
		} else if ( $menu_type == 'horizontal-left' ) {
			$extra_class[] = 'btMenuLeftEnabled';
		}  else if ( $menu_type == 'horizontal-right' ) {
			$extra_class[] = 'btMenuRightEnabled';
		} else if ( $menu_type == 'horizontal-below-left' ) {
			$extra_class[] = 'btMenuLeftEnabled';
			$extra_class[] = 'btMenuBelowLogo';
		} else if ( $menu_type == 'horizontal-below-center' ) {
			$extra_class[] = 'btMenuCenterBelowEnabled';
			$extra_class[] = 'btMenuBelowLogo';
		} else if ( $menu_type == 'horizontal-below-right' ) {
			$extra_class[] = 'btMenuRightEnabled';
			$extra_class[] = 'btMenuBelowLogo';
		} else if ( $menu_type == 'vertical-left' ) {
			$extra_class[] = 'btMenuVerticalLeftEnabled';
		} else if ( $menu_type == 'vertical-right' ) {
			$extra_class[] = 'btMenuVerticalRightEnabled';
		} else {
			$extra_class[] = 'btMenuRightEnabled';
		}

		if ( boldthemes_get_option( 'sticky_header' ) ) {
			$extra_class[] = 'btStickyEnabled';
		}

		if ( boldthemes_get_option( 'hide_menu' ) ) {
			$extra_class[] = 'btHideMenu';
		}

		if ( boldthemes_get_option( 'hide_headline' ) ) {
			$extra_class[] = 'btHideHeadline';
		}

		if ( boldthemes_get_option( 'template_skin' ) == 'dark' ) {
			$extra_class[] = 'btDarkSkin';
		} else {
			$extra_class[] = 'btLightSkin';
		}

		if ( boldthemes_get_option( 'below_menu' ) ) {
			$extra_class[] = 'btBelowMenu';
		}

		if ( ! boldthemes_get_option( 'sidebar_use_dash' ) ) {
			$extra_class[] = 'btNoDashInSidebar';
		}

		if ( boldthemes_get_option( 'disable_preloader' ) ) {
			$extra_class[] = 'btRemovePreloader';
		}
		
		$buttons_shape = boldthemes_get_option( 'buttons_shape' );
		if ( $buttons_shape != '' ) {
			$extra_class[] = 'bt' . boldthemes_convert_param_to_camel_case( $buttons_shape ) . 'Buttons';
		}
		
		$header_style = boldthemes_get_option( 'header_style' );
		if ( $header_style != '' ) {
			$extra_class[] =  'bt' . boldthemes_convert_param_to_camel_case( $header_style ) . 'Header';
		} else {
			$extra_class[] =  'btTransparentDarkHeader';
		}
		
		if ( boldthemes_get_option( 'page_width' ) == 'boxed' ) {
			$extra_class[] = 'btBoxedPage';
		}
               
		BoldThemesFramework::$sidebar = boldthemes_get_option( 'sidebar' );
		
		if ( ! ( ( BoldThemesFramework::$sidebar == 'left' || BoldThemesFramework::$sidebar == 'right' ) && ! is_404() )
			|| 
			( function_exists( 'is_woocommerce' ) && is_woocommerce() && ! is_active_sidebar( 'bt_shop_sidebar' ) )
			||
			! is_active_sidebar( 'primary_widget_area' )
			) {
			BoldThemesFramework::$has_sidebar = false;
			$extra_class[] = 'btNoSidebar';
		} else {
			BoldThemesFramework::$has_sidebar = true;
			if ( BoldThemesFramework::$sidebar == 'left' ) {
				$extra_class[] = 'btWithSidebar btSidebarLeft';
			} else {
				$extra_class[] = 'btWithSidebar btSidebarRight';
			}
		}
		
		$animations = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_animations' );
		if ( $animations == 'half_page' ) {
			$extra_class[] = 'btHalfPage';
		}

		if ( is_singular( "tour" ) ){
			if ( boldthemes_get_option( 'tour_single_list_header_view' ) ) {
				$extra_class[] = 'btSingleListHeaderStyle_' . boldthemes_get_option( 'tour_single_list_header_view' );
			}
		}
               
                if ( boldthemes_get_option( 'heading_style' ) ) {
			$extra_class[] =  'btHeadingStyle_' . boldthemes_get_option( 'heading_style' );
		}
                
                if ( boldthemes_get_option( 'tour_reverse_gradient_on_elements' ) ) {
			$extra_class[] = 'btReverseGradient';
		}

                if ( boldthemes_get_option( 'tour_gradient_on_elements_opacity' ) ) {
			$extra_class[] = 'btGradientOpacity_' . boldthemes_get_option( 'tour_gradient_on_elements_opacity' );
		}

                if ( boldthemes_get_option( 'tour_gradient_on_page_headline_opacity' ) ) {
			$extra_class[] = 'btHeadlineOpacity_' . boldthemes_get_option( 'tour_gradient_on_page_headline_opacity' );
		}
		
		if ( is_active_sidebar( 'header_left_widgets' ) || is_active_sidebar( 'header_right_widgets' ) ) {
			$extra_class[] = 'btHeaderWidgetsLeftRightOn';
		}
		
		$extra_class = apply_filters( 'boldthemes_extra_class', $extra_class );
		
		return $extra_class;
	}
}

/**
 * Creates override of global options for individual posts
 */
if ( ! function_exists( 'boldthemes_set_override' ) ) {
	function boldthemes_set_override() {
		global $boldthemes_options;
		$boldthemes_options = get_option( BoldThemesFramework::$pfx . '_theme_options' );

		global $boldthemes_page_options;
		$boldthemes_page_options = array();
		
		if ( ! is_404() ) {
			$tmp_boldthemes_page_options = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override' );
			if ( ! is_array( $tmp_boldthemes_page_options ) ) $tmp_boldthemes_page_options = array();
			$tmp_boldthemes_page_options = boldthemes_transform_override( $tmp_boldthemes_page_options );
			$tmp_boldthemes_page_options1 = '';
			
			if ( ( is_search() || is_archive() || is_home() ) && get_option( 'page_for_posts' ) != 0 ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'page_for_posts' ) );
			} 

			if ( is_singular( 'post' ) && isset( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug'] ) && $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug'] != '' ) { 
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug'] ) );
			} else if ( is_singular( 'post' ) && isset( $boldthemes_options['blog_settings_page_slug'] ) && $boldthemes_options['blog_settings_page_slug'] != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['blog_settings_page_slug'] ) );
			} else if ( BoldThemes_Customize_Default::$data['blog_settings_page_slug'] != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( BoldThemes_Customize_Default::$data['blog_settings_page_slug'] ) );
			}
                        
                        if ( is_singular( 'portfolio' ) && isset( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_pf_settings_page_slug'] ) && $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_pf_settings_page_slug'] != '' ) { 
				// override with override
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_pf_settings_page_slug'] ) );
			} else if ( is_singular( 'portfolio' ) && isset( $boldthemes_options['pf_settings_page_slug'] ) && $boldthemes_options['pf_settings_page_slug'] != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['pf_settings_page_slug'] ) );
			}
				
			if ( is_post_type_archive( 'portfolio' ) ) {
				if ( isset( $boldthemes_options['pf_slug'] ) && !is_null( $boldthemes_options['pf_slug'] ) && $boldthemes_options['pf_slug'] != "" && !is_null( boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) ) && boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) );
				} else if ( !is_null( boldthemes_get_id_by_slug('portfolio') ) && boldthemes_get_id_by_slug('portfolio') != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'portfolio' ) );
				} else if ( get_option( 'page_for_posts' ) ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'page_for_posts' ) );
				}
			}
                        
                        if ( is_tax( 'portfolio_category' ) ) {
                                if ( isset( $boldthemes_options['pf_category_slug'] ) && !is_null( $boldthemes_options['pf_category_slug'] ) && $boldthemes_options['pf_category_slug'] != "" && !is_null( boldthemes_get_id_by_slug( $boldthemes_options['pf_category_slug'] ) ) && boldthemes_get_id_by_slug( $boldthemes_options['pf_category_slug'] ) != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['pf_category_slug'] ) );
				} else if ( isset( $boldthemes_options['pf_slug'] ) && !is_null( $boldthemes_options['pf_slug'] ) && $boldthemes_options['pf_slug'] != "" && !is_null( boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) ) && boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['pf_slug'] ) );
				} else if ( !is_null( boldthemes_get_id_by_slug('portfolio') ) && boldthemes_get_id_by_slug('portfolio') != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'portfolio' ) );
				} else if ( get_option( 'page_for_posts' ) ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'page_for_posts' ) );
				}
			}

			if ( is_singular( 'tour' ) && isset( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug'] ) && $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug'] != '' ) { 
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_tour_settings_page_slug'] ) );
			} else if ( is_singular( 'tour' ) && isset( $boldthemes_options['tour_settings_page_slug'] ) && $boldthemes_options['tour_settings_page_slug'] != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['tour_settings_page_slug'] ) );
			}
			
			if ( is_post_type_archive( 'tour' ) ) { 
                                $tour_slug = isset($boldthemes_options['tour_slug']) ? $boldthemes_options['tour_slug'] : '';
                                if ( !is_null( boldthemes_get_id_by_slug($tour_slug) ) && boldthemes_get_id_by_slug($tour_slug) != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug($tour_slug) );
				} else  if ( !is_null( boldthemes_get_id_by_slug('tour') ) && boldthemes_get_id_by_slug('tour') != '' ) {
					$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'tour' ) );
				} else {
                                        if ( get_option( 'page_for_posts' ) != 0 ) {
                                            $tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'page_for_posts' ) );
                                        }
                                }
			}
		
			if ( function_exists( 'bt_is_tour_category' ) && bt_is_tour_category() && boldthemes_get_id_by_slug('tour') != '' ) {                               
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'tour' ) );
			}
                        
			if ( function_exists( 'bt_is_tour_destination' ) && bt_is_tour_destination() && boldthemes_get_id_by_slug('tour') != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( 'tour' ) );
			}
			
			if ( function_exists( 'is_shop' ) && is_shop() && get_option( 'woocommerce_shop_page_id' ) ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'woocommerce_shop_page_id' ) );
			}

			if ( function_exists( 'is_product_category' ) && is_product_category() && get_option( 'woocommerce_shop_page_id' ) ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), get_option( 'woocommerce_shop_page_id' ) );
			}
		
			if ( function_exists( 'is_product' ) && is_product() && isset( $boldthemes_options['shop_settings_page_slug'] ) && $boldthemes_options['shop_settings_page_slug'] != '' ) {
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['shop_settings_page_slug'] ) );
			}
			
			$post_type = get_post_type();

			if ( ( $post_type == 'tribe_events' || $post_type == 'tribe_venue' || $post_type == 'tribe_organizer' ) && isset( $boldthemes_options['events_settings_page_slug'] ) && $boldthemes_options['events_settings_page_slug'] != '' ) {
				BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['events_settings_page_slug'] );
				$tmp_boldthemes_page_options1 = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override', array(), boldthemes_get_id_by_slug( $boldthemes_options['events_settings_page_slug'] ) );
			} 

			if ( is_array( $tmp_boldthemes_page_options1 ) ) {
				if ( is_singular() ) {
					$tmp_boldthemes_page_options = array_merge( boldthemes_transform_override( $tmp_boldthemes_page_options1 ), $tmp_boldthemes_page_options );
				} else {
					$tmp_boldthemes_page_options = boldthemes_transform_override( $tmp_boldthemes_page_options1 );
				}
			}

			foreach ( $tmp_boldthemes_page_options as $key => $value ) {
				$boldthemes_page_options[ $key ] = $value;
			}
                        
		}
	}
}

if ( ! function_exists( 'bt_is_tour_category' ) ) {
	function bt_is_tour_category( $term = '' ) {
		return is_tax( 'tour-category', $term );
	}
}

if ( ! function_exists( 'bt_is_tour_destination' ) ) {
	function bt_is_tour_destination( $term = '' ) {
		return is_tax( 'tour-destination', $term );
	}
}

function bt_get_location( $latitude, $longitude ) {
        $address = '';
	$request  = wp_remote_get( 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim( $latitude ) . ',' . trim( $longitude ) . '&sensor=false' ); 
	$response = wp_remote_retrieve_body( $request );
        
        if ( 'OK' !== wp_remote_retrieve_response_message( $response ) || 200 !== wp_remote_retrieve_response_code( $response )){
            $address = '';
        }else{
            $output = json_decode( $response ); 
            if ( isset($output->status) && isset($output->results) && isset($output->results[1]) ){
                $status = $output->status;
                if ( isset($output->results[1]->formatted_address) ){
                    $address = ( $status=='OK' ) ? $output->results[1]->formatted_address : '';
                }
            }
        }
	return $address; 
}

if ( ! function_exists( 'bt_bb_get_permalink_by_slug_tour' ) ) {
	function bt_bb_get_permalink_by_slug_tour( $page_slug, $post_type = 'page' ) {
                if ( $page_slug == '' )
                    return '';
            
		global $wpdb;
		$page = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s", $page_slug, $post_type ) );
		if ( $page ) {
			return get_permalink( $page );
		}
		return '';
	}
}

// convert a WP date format to a jQuery UI DatePicker format  
if ( ! function_exists( 'bt_set_wp_to_datepicker_format' ) ) {
    function bt_set_wp_to_datepicker_format( $wp_date_format, $show_only_months ) 
    {
        $returnValue = '';
        if ( $show_only_months ) {
            $chars = array( 
                'd' => '', 'j' => '', 'l' => '', 'D' => '',
                'm' => 'mm', 'n' => 'm', 'F' => 'MM', 'M' => 'M', 
                'Y' => 'yy', 'y' => 'y', 
            );
            $returnValue = trim(strtr((string)$wp_date_format, $chars));
        }else{
            $chars = array( 
                'd' => 'dd', 'j' => 'd', 'l' => 'DD', 'D' => 'D',
                'm' => 'mm', 'n' => 'm', 'F' => 'MM', 'M' => 'M', 
                'Y' => 'yy', 'y' => 'y', 
            );
            $returnValue = trim(strtr((string)$wp_date_format, $chars));
        }
         return $returnValue; 
    }
}

if ( ! function_exists( 'bt_set_datepicker_to_wp_format' ) ) {
    function bt_set_datepicker_to_wp_format( $wp_date_format ) 
    {
        $returnValue = '';
        $chars = array( 
                'dd' => 'd', 'd' => 'j', 'DD' => 'l', 'D' => 'D',
                'mm' => 'm', 'm' => 'n', 'MM' => 'F', 'M' => 'M', 
                'yy' => 'Y', 'y' => 'y', 
        );
        $returnValue = trim(strtr((string)$_wp_date_format, $chars));
        return $returnValue; 
    }
}

if ( ! function_exists( 'boldthemes_custom_controls_separator' ) ) {
    function boldthemes_custom_controls_separator() {       
        class Travelicious_Separator_Control extends WP_Customize_Control {
                public function render_content() {
                        ?>
                        <label> 
                            <hr> 
                            <span class="customize-control-title" style="color:#1976bc;font-size: 16px;"><?php echo esc_html( $this->label ); ?></span>

                        </label>
                        <?php
                }
        }       
    }
}

add_action( 'customize_register', 'boldthemes_custom_controls_separator' );
add_action( 'boldthemes_customize_register', 'boldthemes_custom_controls_separator' );

if ( ! function_exists( 'boldthemes_custom_controls' ) ) {
	function boldthemes_custom_controls() {
		class BoldThemes_Customize_Textarea_Control extends WP_Customize_Control {                    
                        public $tooltip;
                        public $example;      
                        
			public function render_content() {
				wp_register_style( 'boldthemes-custom-controls-style', false );
				wp_enqueue_style( 'boldthemes-custom-controls-style' );
				wp_add_inline_style( 'boldthemes-custom-controls-style', '.customize-control-example { display: none; padding: 5px; background-color: #008ec2; color: #fff; margin-bottom: 10px; width: 98%; font-size: .9em; box-sizing: border-box; word-wrap: break-word; }' );
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                                        <?php if ( $this->example ) { ?>
                                            <span id="<?php echo esc_attr($this->id);?>" class="tooltip customize-control-example"><?php echo esc_attr($this->example); ?></span>
                                        <?php } ?>
                                        <?php if ( $this->description != '' ) { ?>
                                            <span id="customize-media-control-description-<?php echo esc_attr( $this->priority ); ?>" class="description customize-control-description"><?php echo  wp_kses_post($this->description); ?></span>
                                        <?php } ?>
                                        <textarea rows="5" style="width:98%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value()); ?></textarea>
                                         <?php if ( $this->tooltip ) { ?>
                                            <span  id="<?php echo esc_attr($this->id);?>" class="tooltip customize-control-tooltip"><?php echo esc_attr($this->tooltip); ?></span>
                                        <?php } ?>
				</label>
				<?php
			}
		}
		
		class BoldThemes_Reset_Control extends WP_Customize_Control {
			public function render_content() {
				?>
				<div style="margin: 5px 0px 10px 0px">
				<label><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span></label>			
					<input type="submit" onclick="var c = confirm('<?php echo esc_js( esc_html__( 'Reset theme settings to default values?', 'travelicious' ) ); ?>'); if (c != true) return false;var href=window.location.href;if (href.indexOf('?') > -1) {window.location.replace(href + '&boldthemes_reset=reset')} else {window.location.replace(href + '?boldthemes_reset=reset')};return false;" name="boldthemes_reset" id="boldthemes_reset" class="button" value="<?php echo esc_attr__( 'Reset' , 'travelicious'); ?>">
				</div>
				<?php
			}
		}
	}
}


//destinations - portfolio
if ( ! function_exists( 'boldthemes_customize_pf_settings_page_slug' ) ) {
	function boldthemes_customize_pf_settings_page_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_settings_page_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_settings_page_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'pf_settings_page_slug', array(
			'label'    => esc_html__( 'Settings Page Slug', 'travelicious' ),
			'description'    => esc_html__( 'Use this page to create template for the single destination post. For destination list create page with slug \'destination\'.', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_settings_page_slug]',
			'priority' => 60,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_settings_page_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_pf_settings_page_slug' );

// PORTFOLIO SLUG
if ( ! function_exists( 'boldthemes_customize_pf_slug' ) ) {
	function boldthemes_customize_pf_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'pf_slug', array(
			'label'    => esc_html__( 'Destination Slug', 'travelicious' ),
			'description'    => esc_html__( 'This value will be used to generate urls for Destination custom post type. To apply changes, go to Settings > Permalinks and click Save Changes', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_slug]',
			'priority' => 70,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_pf_slug' );

// PORTFOLIO CATEGORY SLUG
if ( ! function_exists( 'boldthemes_customize_pf_category_slug' ) ) {
	function boldthemes_customize_pf_category_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_category_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_category_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'pf_category_slug', array(
			'label'    => esc_html__( 'Destination Category Slug', 'travelicious' ),
			'description'    => esc_html__( 'This value will be used to generate urls for Destination category custom post type. To apply changes, go to Settings > Permalinks and click Save Changes', 'travelicious' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_category_slug]',
			'priority' => 80,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_category_slug' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_pf_category_slug' );



if ( ! function_exists( 'boldthemes_customize_tour_single_tabs' ) ) {
    function boldthemes_customize_tour_single_tabs() {
        $tour_tabs = array();
        $tour_tabs_information_title = boldthemes_get_option( 'tour_tabs_information_title' );
        
        $tour_tabs_tour_plan_hide = boldthemes_get_option( 'tour_tabs_tour_plan_hide' ) == '' ? 0 : 1;
        $tour_tabs_tour_plan_title = boldthemes_get_option( 'tour_tabs_tour_plan_title' );
        $tour_tabs_tour_plan_order = boldthemes_get_option( 'tour_tabs_tour_plan_order' );

        $tour_tabs_location_hide = boldthemes_get_option( 'tour_tabs_location_hide' ) == '' ? 0 : 1;
        $tour_tabs_location_title = boldthemes_get_option( 'tour_tabs_location_title' );
        $tour_tabs_location_order = boldthemes_get_option( 'tour_tabs_location_order' );

        $tour_tabs_gallery_hide = boldthemes_get_option( 'tour_tabs_gallery_hide' ) == '' ? 0 : 1;
        $tour_tabs_gallery_title = boldthemes_get_option( 'tour_tabs_gallery_title' );
        $tour_tabs_gallery_order = boldthemes_get_option( 'tour_tabs_gallery_order' );

        $tour_tabs_reviews_hide = boldthemes_get_option( 'tour_tabs_reviews_hide' ) == '' ? 0 : 1;
        $tour_tabs_reviews_title = boldthemes_get_option( 'tour_tabs_reviews_title' );
        $tour_tabs_reviews_order = boldthemes_get_option( 'tour_tabs_reviews_order' );

        $tour_tabs_additional_info_hide = boldthemes_get_option( 'tour_tabs_additional_info_hide' ) == '' ? 0 : 1;
        $tour_tabs_additional_info_title = boldthemes_get_option( 'tour_tabs_additional_info_title' );
        $tour_tabs_additional_info_order = boldthemes_get_option( 'tour_tabs_additional_info_order' );

        $tour_tabs_similar_tours_hide = boldthemes_get_option( 'tour_tabs_similar_tours_hide' ) == '' ? 0 : 1;
        $tour_tabs_similar_tours_title = boldthemes_get_option( 'tour_tabs_similar_tours_title' );
        $tour_tabs_similar_tours_order = boldthemes_get_option( 'tour_tabs_similar_tours_order' );

        $tour_tabs_custom_tab_hide = boldthemes_get_option( 'tour_tabs_custom_tab_hide' ) == '' ? 0 : 1;		
        $tour_tabs_custom_tab_title = boldthemes_get_option( 'tour_tabs_custom_tab_title' );
        $tour_tabs_custom_tab_order = boldthemes_get_option( 'tour_tabs_custom_tab_order' );
		
		$tour_rwmb_custom_tab_content  = bt_check_get_tour_rwmb_data('tour_custom_tab_contnet', get_the_ID() );
		if ( $tour_rwmb_custom_tab_content == "" ){
			$tour_tabs_custom_tab_hide = 1;			
		}
		
        
        $tour_tabs_information_title = $tour_tabs_information_title   != '' 
                    ? esc_html__( $tour_tabs_information_title . '', 'travelicious' ) : esc_html__( 'Information', 'travelicious' );               
        $tour_tabs_tour_plan_title = $tour_tabs_tour_plan_title   != '' 
                    ? esc_html__( $tour_tabs_tour_plan_title . '', 'travelicious' ) : esc_html__( 'Tour Plan', 'travelicious' );
        $tour_tabs_location_title = $tour_tabs_location_title   != '' 
                    ? esc_html__( $tour_tabs_location_title . '', 'travelicious' ) : esc_html__( 'Location', 'travelicious' );
        $tour_tabs_gallery_title = $tour_tabs_gallery_title   != '' 
                    ? esc_html__( $tour_tabs_gallery_title . '', 'travelicious' ) : esc_html__( 'Gallery', 'travelicious' );
        $tour_tabs_reviews_title = $tour_tabs_reviews_title   != '' 
                    ? esc_html__( $tour_tabs_reviews_title . '', 'travelicious' ) : esc_html__( 'Reviews', 'travelicious' );
        $tour_tabs_additional_info_title = $tour_tabs_additional_info_title   != '' 
                    ? esc_html__( $tour_tabs_additional_info_title . '', 'travelicious' ) : esc_html__( 'Additional Info', 'travelicious' );
        $tour_tabs_similar_tours_title = $tour_tabs_similar_tours_title   != '' 
                    ? esc_html__( $tour_tabs_similar_tours_title . '', 'travelicious' ) : esc_html__( 'Similar Tours', 'travelicious' );
        
        
        if ( $tour_tabs_custom_tab_title   != '' ){
            $tour_tabs_custom_tab_title = esc_html__( $tour_tabs_custom_tab_title . '', 'travelicious' ); //customizer
        }else{
            if ( BoldThemesFrameworkTemplate::$tour_rwmb_custom_tab_title   != '' ){
                $tour_tabs_custom_tab_title = esc_html__( BoldThemesFrameworkTemplate::$tour_rwmb_custom_tab_title . '', 'travelicious' ); // meta box
            }else{
                $tour_tabs_custom_tab_title = esc_html__( 'More Information', 'travelicious' ); //default
            }
        }       
                    
        //information
        $boldthemes_show_tour_information_tab = boldthemes_show_tour_information_tab(); // show tab content
        $boldthemes_show_tour_information_tab = $boldthemes_show_tour_information_tab ? 0 : 1;
            
        $tour_tabs['tour_tab_information']['hide']    = $boldthemes_show_tour_information_tab;
        $tour_tabs['tour_tab_information']['title']   = $tour_tabs_information_title;
        $tour_tabs['tour_tab_information']['order']   = 0;
        $tour_tabs['tour_tab_information']['id']      = 'btTourInformationTab';
        
        //tour plan
        if ( $tour_tabs_tour_plan_hide == 0 ){ // show tab customizer
            $boldthemes_show_tour_plan_tab = boldthemes_show_tour_plan_tab(); // show tab content
            $tour_tabs_tour_plan_hide = $boldthemes_show_tour_plan_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_plan']['hide']      = $tour_tabs_tour_plan_hide;
        $tour_tabs['tour_tab_plan']['title']     = $tour_tabs_tour_plan_title;
        $tour_tabs['tour_tab_plan']['order']     = $tour_tabs_tour_plan_order;
        $tour_tabs['tour_tab_plan']['id']       = 'btTourPlanTab';
        
        //location
        if ( $tour_tabs_location_hide == 0 ){
            $boldthemes_show_tour_location_tab = boldthemes_show_tour_location_tab();
            $tour_tabs_location_hide = $boldthemes_show_tour_location_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_location']['hide'] = $tour_tabs_location_hide;
        $tour_tabs['tour_tab_location']['title'] = $tour_tabs_location_title;
        $tour_tabs['tour_tab_location']['order'] = $tour_tabs_location_order;
        $tour_tabs['tour_tab_location']['id']      = 'btTourLocationTab';
        
        //gallery
        if ( $tour_tabs_gallery_hide == 0 ){
            $boldthemes_show_tour_gallery_tab = boldthemes_show_tour_gallery_tab();
            $tour_tabs_gallery_hide = $boldthemes_show_tour_gallery_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_gallery']['hide'] = $tour_tabs_gallery_hide;
        $tour_tabs['tour_tab_gallery']['title'] = $tour_tabs_gallery_title;
        $tour_tabs['tour_tab_gallery']['order']  = $tour_tabs_gallery_order;
        $tour_tabs['tour_tab_gallery']['id']      = 'btTourGalleryTab';
        
        //reviews
        if ( $tour_tabs_reviews_hide == 0 ){
            $boldthemes_show_tour_reviews_tab = boldthemes_show_tour_reviews_tab();
            $tour_tabs_reviews_hide = $boldthemes_show_tour_reviews_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_reviews']['hide'] = $tour_tabs_reviews_hide;
        $tour_tabs['tour_tab_reviews']['title'] = $tour_tabs_reviews_title;
        $tour_tabs['tour_tab_reviews']['order']  = $tour_tabs_reviews_order;
        $tour_tabs['tour_tab_reviews']['id']      = 'btTourReviewsTab';
        
        //additional info
        if ( $tour_tabs_additional_info_hide == 0 ){
            $boldthemes_show_tour_additional_info_tab = boldthemes_show_tour_additional_info_tab();
            $tour_tabs_additional_info_hide = $boldthemes_show_tour_additional_info_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_additional_info']['hide'] = $tour_tabs_additional_info_hide;
        $tour_tabs['tour_tab_additional_info']['title'] = $tour_tabs_additional_info_title;
        $tour_tabs['tour_tab_additional_info']['order']  = $tour_tabs_additional_info_order;
        $tour_tabs['tour_tab_additional_info']['id']      = 'btTourAdditionalInfoTab';
        
        //similar tours
        if ( $tour_tabs_similar_tours_hide == 0 ){
            $boldthemes_show_tour_similar_tours_tab = boldthemes_show_tour_similar_tours_tab();
            $tour_tabs_similar_tours_hide = $boldthemes_show_tour_similar_tours_tab ? 0 : 1;
        }
        $tour_tabs['tour_tab_similar_tours']['hide'] = $tour_tabs_similar_tours_hide;
        $tour_tabs['tour_tab_similar_tours']['title'] = $tour_tabs_similar_tours_title;
        $tour_tabs['tour_tab_similar_tours']['order']  = $tour_tabs_similar_tours_order;
        $tour_tabs['tour_tab_similar_tours']['id']      = 'btTourSimilarToursTab';
        
        $tour_tabs['tour_tab_custom_tab']['hide'] = $tour_tabs_custom_tab_hide;
        $tour_tabs['tour_tab_custom_tab']['title'] = $tour_tabs_custom_tab_title;
        $tour_tabs['tour_tab_custom_tab']['order']  = $tour_tabs_custom_tab_order;    
        $tour_tabs['tour_tab_custom_tab']['id']      = 'btTourCustomTab';
               
        usort($tour_tabs, function($a, $b) {  
            if ( is_numeric($a['order']) && is_numeric($b['order']) ) {
                return $a['order'] - $b['order'];
            }
        });
        
        $ret_tour_tabs = array();
        foreach( $tour_tabs as $tour_tab ){
            if ( $tour_tab['hide'] == 0 ){
                array_push($ret_tour_tabs, $tour_tab);
            }
        }
        
       return $ret_tour_tabs;         
    }
}

if ( ! function_exists( 'boldthemes_get_book_this_tour_button_label' ) ) {
        function boldthemes_get_book_this_tour_button_label(){
            if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_show) {
                return esc_html__( 'Book this Tour', 'travelicious' );
            } else if ( BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) {
                return esc_html__( 'Enquiry about the Tour', 'travelicious' );
            } else{
                return esc_html__( 'Sorry! There are no enabled booking or enquiry forms.', 'travelicious' );
            }
       }
}




