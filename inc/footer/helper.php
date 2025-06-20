<?php

if ( ! function_exists( 'einar_is_page_footer_enabled' ) ) {
	/**
	 * Function that check is module enabled
	 *
	 * @return bool
	 */
	function einar_is_page_footer_enabled() {
		$is_enabled = einar_is_footer_top_area_enabled() || einar_is_footer_bottom_area_enabled();

		return apply_filters( 'einar_filter_enable_page_footer', $is_enabled );
	}
}

if ( ! function_exists( 'einar_load_page_footer' ) ) {
	/**
	 * Function which loads page template module
	 */
	function einar_load_page_footer() {

		if ( einar_is_page_footer_enabled() ) {
			// Include footer template
			echo apply_filters( 'einar_filter_footer_template', einar_get_template_part( 'footer', 'templates/footer' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}

	add_action( 'einar_action_page_footer_template', 'einar_load_page_footer' );
}

if ( ! function_exists( 'einar_get_page_footer_sidebars_config' ) ) {
	/**
	 * Function that return config variables for page footer
	 *
	 * @return array
	 */
	function einar_get_page_footer_sidebars_config() {

        if ( ! einar_is_installed( 'core' ) ) {
            $footer_top_sidebars_number = 3;
            $footer_bottom_sidebars_number = 0;
        } else {
            $footer_top_sidebars_number = 3;
            $footer_bottom_sidebars_number = 2;
        }

		// Config variables
		return apply_filters(
			'einar_filter_page_footer_sidebars_config',
			array(
				'title_class'                   => 'qodef-widget-title',
				'footer_logo_title_tag'         => 'h5',
				'footer_logo_sidebars_number'   => 1,
				'footer_top_sidebars_number'    => $footer_top_sidebars_number,
				'footer_top_title_tag'          => 'h5',
				'footer_bottom_sidebars_number' =>  $footer_bottom_sidebars_number,
				'footer_bottom_title_tag'       => 'h5',
			)
		);
	}
}

if ( ! function_exists( 'einar_get_page_footer_sidebars_config_by_key' ) ) {
	/**
	 * Function that return page footer config variable value by key
	 *
	 * @param string $key - key of config variables array value
	 *
	 * @return string | mixed
	 */
	function einar_get_page_footer_sidebars_config_by_key( $key ) {
		$config = einar_get_page_footer_sidebars_config();
		$value  = '';

		if ( ! empty( $key ) && isset( $config[ $key ] ) ) {
			$value = $config[ $key ];
		}

		return $value;
	}
}

if ( ! function_exists( 'einar_register_footer_sidebars' ) ) {
	/**
	 * Function that registers theme's footer sidebars area
	 */
	function einar_register_footer_sidebars() {

		// Config variables
		$config                 = einar_get_page_footer_sidebars_config();
		$footer_top_sidebars    = array();
		$footer_bottom_sidebars = array();

		if ( ! empty( $config ) ) {
			for ( $i = 1; $i <= intval( $config['footer_top_sidebars_number'] ); $i ++ ) {
				$footer_top_sidebars[ 'column_' . $i ] = array(
					// translators: %s - added sidebar title increment value
					'name'        => sprintf( esc_html__( 'Footer Top Area - Column %s', 'einar' ), $i ),
					// translators: %s - added sidebar description increment value
					'description' => sprintf( esc_html__( 'Widgets added here will appear in the %s column of top footer area', 'einar' ), $i ),
					'title_tag'   => $config['footer_top_title_tag'],
				);
			}

			for ( $i = 1; $i <= intval( $config['footer_bottom_sidebars_number'] ); $i ++ ) {
				$footer_bottom_sidebars[ 'column_' . $i ] = array(
					// translators: %s - added sidebar title increment value
					'name'        => sprintf( esc_html__( 'Footer Bottom Area - Column %s', 'einar' ), $i ),
					// translators: %s - added sidebar description increment value
					'description' => sprintf( esc_html__( 'Widgets added here will appear in the %s column of bottom footer area', 'einar' ), $i ),
					'title_tag'   => $config['footer_bottom_title_tag'],
				);
			}
		}

		$sidebars = array(
			'footer_top_area'    => $footer_top_sidebars,
			'footer_bottom_area' => $footer_bottom_sidebars,
		);

		if ( ! empty( $sidebars ) ) {
			foreach ( $sidebars as $sidebar_area => $sidebar_area_value ) {
				foreach ( $sidebar_area_value as $key => $value ) {
					$sidebar_id = 'qodef-' . str_replace( '_', '-', $sidebar_area . '_' . $key );

					register_sidebar(
						array(
							'id'            => $sidebar_id,
							'name'          => $value['name'],
							'description'   => $value['description'],
							'before_widget' => '<div id="%1$s" class="widget %2$s" data-area="' . esc_attr( $sidebar_id ) . '">',
							'after_widget'  => '</div>',
							'before_title'  => '<' . esc_attr( $value['title_tag'] ) . ' class="' . esc_attr( $config['title_class'] ) . '">',
							'after_title'   => '</' . esc_attr( $value['title_tag'] ) . '>',
						)
					);
				}
			}
		}
	}

	add_action( 'widgets_init', 'einar_register_footer_sidebars' );
}

if ( ! function_exists( 'einar_get_footer_widget_area' ) ) {
	/**
	 * This function return footer widgets area
	 *
	 * @param string $widget_area
	 * @param string $column
	 */
	function einar_get_footer_widget_area( $widget_area, $column ) {
		$widget_id = 'qodef-footer-' . esc_attr( $widget_area ) . '-area-column-' . esc_attr( $column );
		$widget_id = apply_filters( 'einar_filter_footer_widget_area', $widget_id, $widget_area, $column );

		if ( ! empty( $widget_id ) && is_active_sidebar( $widget_id ) && 'none' !== $widget_id ) {
			dynamic_sidebar( $widget_id );
		}
	}
}

if ( ! function_exists( 'einar_is_footer_logo_area_enabled' ) ) {
	/**
	 * Function that check if page footer bottom area widgets are empty
	 *
	 * @return bool
	 */
	function einar_is_footer_logo_area_enabled() {
		$flag = false;

		for ( $i = 1; $i <= intval( einar_get_page_footer_sidebars_config_by_key( 'footer_logo_sidebars_number' ) ); $i ++ ) {
			$sidebar_id = apply_filters( 'einar_filter_footer_widget_area', 'qodef-footer-logo-area-column-' . $i, 'logo', $i );

			$logo_area_enabled = einar_get_post_value_through_levels( 'qodef_enable_logo_footer_area' );
			if ( ! empty( $logo_area_enabled ) && 'yes' === $logo_area_enabled ) {
				$flag = true;
				break;
			}
		}

		return apply_filters( 'einar_filter_enable_footer_logo_area', $flag );
	}
}

if ( ! function_exists( 'einar_get_footer_logo_area_classes' ) ) {
	/**
	 * Function that return classes for page footer top area
	 *
	 * @return string
	 */
	function einar_get_footer_logo_area_classes() {
		return apply_filters( 'einar_filter_footer_logo_area_classes', 'qodef-content-full-width' );
	}
}

if ( ! function_exists( 'einar_get_footer_logo_area_columns_classes' ) ) {
	/**
	 * Function that return columns classes for page footer bottom area
	 *
	 * @return string
	 */
	function einar_get_footer_logo_area_columns_classes() {
		$columns_number = einar_get_page_footer_sidebars_config_by_key( 'footer_logo_sidebars_number' );

		switch ( $columns_number ) {
			case '2':
				$responsive_columns_number = array(
					'qodef-col-num--1024--2',
					'qodef-col-num--768--2',
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			default:
				$responsive_columns_number = array();
				break;
		}

		$classes = apply_filters(
			'einar_filter_footer_logo_area_columns_classes',
			array_merge(
				array(
					'qodef-grid',
					'qodef-layout--columns',
					'qodef-responsive--custom',
					'qodef-col-num--' . intval( $columns_number ),
				),
				$responsive_columns_number
			)
		);

		return implode( ' ', $classes );
	}
}

if ( ! function_exists( 'einar_is_footer_top_area_enabled' ) ) {
	/**
	 * Function that check if page footer top area widgets are empty
	 *
	 * @return bool
	 */
	function einar_is_footer_top_area_enabled() {
		$flag = false;

		for ( $i = 1; $i <= intval( einar_get_page_footer_sidebars_config_by_key( 'footer_top_sidebars_number' ) ); $i ++ ) {
			$sidebar_id = apply_filters( 'einar_filter_footer_widget_area', 'qodef-footer-top-area-column-' . $i, 'top', $i );

			if ( is_active_sidebar( $sidebar_id ) ) {
				$flag = true;
				break;
			}
		}

		return apply_filters( 'einar_filter_enable_footer_top_area', $flag );
	}
}

if ( ! function_exists( 'einar_is_footer_bottom_area_enabled' ) ) {
	/**
	 * Function that check if page footer bottom area widgets are empty
	 *
	 * @return bool
	 */
	function einar_is_footer_bottom_area_enabled() {
		$flag = false;

		for ( $i = 1; $i <= intval( einar_get_page_footer_sidebars_config_by_key( 'footer_bottom_sidebars_number' ) ); $i ++ ) {
			$sidebar_id = apply_filters( 'einar_filter_footer_widget_area', 'qodef-footer-bottom-area-column-' . $i, 'bottom', $i );

			if ( is_active_sidebar( $sidebar_id ) ) {
				$flag = true;
				break;
			}
		}

		return apply_filters( 'einar_filter_enable_footer_bottom_area', $flag );
	}
}

if ( ! function_exists( 'einar_get_footer_top_area_classes' ) ) {
	/**
	 * Function that return classes for page footer top area
	 *
	 * @return string
	 */
	function einar_get_footer_top_area_classes() {
		return apply_filters( 'einar_filter_footer_top_area_classes', 'qodef-content-grid' );
	}
}

if ( ! function_exists( 'einar_get_footer_top_area_columns_classes' ) ) {
	/**
	 * Function that return columns classes for page footer top area
	 *
	 * @return string
	 */
	function einar_get_footer_top_area_columns_classes() {
		$columns_number = einar_get_page_footer_sidebars_config_by_key( 'footer_top_sidebars_number' );

		switch ( $columns_number ) {
			case '4':
				$responsive_columns_number = array(
					'qodef-col-num--1024--2',
					'qodef-col-num--768--2',
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			case '3':
				$responsive_columns_number = array(
					'qodef-col-num--768--1',
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			case '2':
				$responsive_columns_number = array(
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			default:
				$responsive_columns_number = array();
				break;
		}

		$classes = apply_filters(
			'einar_filter_footer_top_area_columns_classes',
			array_merge(
				array(
					'qodef-grid',
					'qodef-layout--columns',
					'qodef-responsive--custom',
					'qodef-col-num--' . intval( $columns_number ),
				),
				$responsive_columns_number
			)
		);

		return implode( ' ', $classes );
	}
}

if ( ! function_exists( 'einar_get_footer_top_area_grid_gutter_styles' ) ) {
	/**
	 * Function that returns grid gutter styles
	 *
	 * @return string
	 */
	function einar_get_footer_top_area_grid_gutter_styles() {
		return einar_get_inline_style( apply_filters( 'einar_filter_footer_top_area_grid_gutter_styles', array() ) );
	}
}

if ( ! function_exists( 'einar_get_footer_bottom_area_classes' ) ) {
	/**
	 * Function that return classes for page footer bottom area
	 *
	 * @return string
	 */
	function einar_get_footer_bottom_area_classes() {
		return apply_filters( 'einar_filter_footer_bottom_area_classes', 'qodef-content-grid' );
	}
}

if ( ! function_exists( 'einar_get_footer_bottom_area_columns_classes' ) ) {
	/**
	 * Function that return columns classes for page footer bottom area
	 *
	 * @return string
	 */
	function einar_get_footer_bottom_area_columns_classes() {
		$columns_number = einar_get_page_footer_sidebars_config_by_key( 'footer_bottom_sidebars_number' );

		switch ( $columns_number ) {
			case '3':
				$responsive_columns_number = array(
					'qodef-col-num--768--1',
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			case '2':
				$responsive_columns_number = array(
					'qodef-col-num--680--1',
					'qodef-col-num--480--1',
				);
				break;
			default:
				$responsive_columns_number = array();
				break;
		}

		$classes = apply_filters(
			'einar_filter_footer_bottom_area_columns_classes',
			array_merge(
				array(
					'qodef-grid',
					'qodef-layout--columns',
					'qodef-responsive--custom',
					'qodef-col-num--' . intval( $columns_number ),
				),
				$responsive_columns_number
			)
		);

		return implode( ' ', $classes );
	}
}

if ( ! function_exists( 'einar_get_footer_bottom_area_grid_gutter_styles' ) ) {
	/**
	 * Function that returns grid gutter styles
	 *
	 * @return string
	 */
	function einar_get_footer_bottom_area_grid_gutter_styles() {
		return einar_get_inline_style( apply_filters( 'einar_filter_footer_bottom_area_grid_gutter_styles', array() ) );
	}
}
