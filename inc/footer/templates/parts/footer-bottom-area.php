<?php if ( einar_is_footer_bottom_area_enabled() ) { ?>
	<div id="qodef-page-footer-bottom-area">
		<div id="qodef-page-footer-bottom-area-inner" class="<?php echo esc_attr( einar_get_footer_bottom_area_classes() ); ?>">
			<div class="<?php echo esc_attr( einar_get_footer_bottom_area_columns_classes() ); ?>" <?php echo einar_get_footer_bottom_area_grid_gutter_styles(); ?>>
				<div class="qodef-grid-inner">
					<?php for ( $i = 1; $i <= intval( einar_get_page_footer_sidebars_config_by_key( 'footer_bottom_sidebars_number' ) ); $i ++ ) { ?>
						<div class="qodef-grid-item">
							<?php einar_get_footer_widget_area( 'bottom', $i ); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
