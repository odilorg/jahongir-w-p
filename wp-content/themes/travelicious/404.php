<?php 

get_header(); ?>

		<section class="btErrorPage gutter bt_bb_section bt_bb_background_overlay_gradient bt_bb_background_image btDarkSkin" style = "background-image: url(<?php echo esc_url_raw( get_parent_theme_file_uri( 'gfx/404.jpg' ) ) ;?>)">
			<div class="port">
				<div class="bt_bb_cell">
					<div class="bt_bb_cell_inner">
						<div class="bt_bb_row">
							<div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6"></div>
							<div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6">
								<?php echo boldthemes_get_heading_html( 
									array ( 
										'superheadline' => esc_html__( 'WE ARE SORRY YOU GOT LOST', 'travelicious' ), 
										'headline' => esc_html__( 'Error 404.', 'travelicious' ),
										'subheadline' => '<div class="bt_bb_button bt_bb_icon_position_left bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_normal bt_bb_width_inline bt_bb_shape_inherit bt_bb_align_inherit"><a class="bt_bb_link" href="' . esc_url_raw( site_url() ) . '"><span class="bt_bb_button_text">' . esc_html__( 'Go back to homepage', 'travelicious' ) . '</span></a></div>',
										'size' => 'extralarge',
										'dash' => 'top',
										'align' => 'left'
										) 
									)
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer();