<?php

function my_assets() {
  
    wp_enqueue_script('tailwind','https://unpkg.com/@tailwindcss/browser@4',  true);
}

add_action('wp_enqueue_scripts', 'my_assets');

	function sliderLookAround() {
	   ob_start();
	   get_template_part('template/sliderLookAround');
	   return ob_get_clean();   
	} 
	add_shortcode( 'sliderLookAround', 'sliderLookAround' );


	function recentClients() {
	   ob_start();
	   get_template_part('template/recentClients');
	   return ob_get_clean();   
	} 
	add_shortcode( 'recentClients', 'recentClients' );
			
	function twoSliderRow() {
	   ob_start();
	   get_template_part('template/twoSliderRow');
	   return ob_get_clean();   
	} 
	add_shortcode( 'twoSliderRow', 'twoSliderRow' );

	function customMcHeader() {
	   ob_start();
	   get_template_part('template/customMcHeader');
	   return ob_get_clean();   
	} 
	add_shortcode( 'customMcHeader', 'customMcHeader' );

	function customMcFooter() {
	   ob_start();
	   get_template_part('template/customMcFooter');
	   return ob_get_clean();   
	} 
	add_shortcode( 'customMcFooter', 'customMcFooter' );

	function contactTabs() {
	   ob_start();
	   get_template_part('template/contactTabs');
	   return ob_get_clean();   
	} 
	add_shortcode( 'contactTabs', 'contactTabs' );


	add_action('wp_footer', 'show_template');
	function show_template() {
		global $template;
		if(is_user_logged_in()) {
		echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
		}
	}

	add_filter( 'manage_edit-supplier_columns', function( $columns ) {
		// Store the new columns here
		$new_columns = array();

		foreach ( $columns as $key => $label ) {
			if ( $key == 'date' ) {
				// Insert custom column before the date column
				$new_columns['is-wedding-supplier'] = 'Is Wedding Supplier';
			}
			$new_columns[$key] = $label;
		}

		return $new_columns;
	});
	
	add_action( 'manage_supplier_posts_custom_column', function( $column_name, $post_id ) {
		if ( $column_name == 'is-wedding-supplier' ) {
			$terms = get_the_terms( $post_id, 'is-wedding-supplier' );
			if ( !empty( $terms ) ) {
				echo implode( ', ', wp_list_pluck( $terms, 'name' ) );
			} else {
				echo '—';
			}
		}
	}, 10, 2);


	add_action('init', 'update_my_taxonomy_labels', 100); // priority 100 to make sure it's called after registration
	function update_my_taxonomy_labels() {
		$taxonomy = get_taxonomy('supplier-category');
		if ($taxonomy) {
			$taxonomy->labels->name = 'Wedding Supplier Category';
			$taxonomy->labels->menu_name = 'Wedding Supplier Category';
			$taxonomy->labels->add_new_item = 'Add Wedding Supplier Category';
			// ... add any other labels you want to update
		}
		$texonomyB = get_taxonomy('supplier-type');
		if ($texonomyB) {
			$texonomyB->labels->name = 'General Supplier Category';
			$texonomyB->labels->menu_name = 'General Supplier Category';
			$texonomyB->labels->add_new_item = 'Add General Supplier Category';
			// ... add any other labels you want to update
		}
	}



function load_dashicons_front_end() {
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'load_dashicons_front_end');

	require_once get_template_directory() . '/includes/rename-cpt/rename-cpt.php';





if ( ! class_exists( 'Einar_Handler' ) ) {
	/**
	 * Main theme class with configuration
	 */
	class Einar_Handler {
		private static $instance;

		public function __construct() {

			// Include required files
			require_once get_template_directory() . '/constants.php';
			require_once EINAR_ROOT_DIR . '/helpers/helper.php';

			// Include theme's style and inline style
			add_action( 'wp_enqueue_scripts', array( $this, 'include_css_scripts' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_inline_style' ) );

			// Include theme's script and localize theme's main js script
			add_action( 'wp_enqueue_scripts', array( $this, 'include_js_scripts' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'localize_js_scripts' ) );

			// Include theme's 3rd party plugins styles
			add_action( 'einar_action_before_main_css', array( $this, 'include_plugins_styles' ) );

			// Include theme's 3rd party plugins scripts
			add_action( 'einar_action_before_main_js', array( $this, 'include_plugins_scripts' ) );

			// Add pingback header
			add_action( 'wp_head', array( $this, 'add_pingback_header' ), 1 );

			// Include theme's skip link
			add_action( 'einar_action_after_body_tag_open', array( $this, 'add_skip_link' ), 5 );

			// Include theme's Google fonts
			add_action( 'einar_action_before_main_css', array( $this, 'include_google_fonts' ) );

			// Add theme's supports feature
			add_action( 'after_setup_theme', array( $this, 'set_theme_support' ) );

			// Enqueue supplemental block editor styles
			add_action( 'enqueue_block_editor_assets', array( $this, 'editor_customizer_styles' ) );

			// Add theme's body classes
			add_filter( 'body_class', array( $this, 'add_body_classes' ) );

			// Include modules
			add_action( 'after_setup_theme', array( $this, 'include_modules' ) );
		}

		/**
		 * @return Einar_Handler
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		function include_css_scripts() {
			// CSS dependency variable
			$main_css_dependency = apply_filters( 'einar_filter_main_css_dependency', array( 'swiper' ) );

			// Hook to include additional scripts before theme's main style
			do_action( 'einar_action_before_main_css' );

			// Enqueue theme's main style
			wp_enqueue_style( 'einar-main', EINAR_ASSETS_CSS_ROOT . '/main.min.css', $main_css_dependency );

			// Enqueue theme's style
			wp_enqueue_style( 'einar-style', EINAR_ROOT . '/style.css' );

			// Hook to include additional scripts after theme's main style
			do_action( 'einar_action_after_main_css' );
		}

		function add_inline_style() {
			$style = apply_filters( 'einar_filter_add_inline_style', '' );

			if ( ! empty( $style ) ) {
				wp_add_inline_style( 'einar-style', $style );
			}
		}

		function include_js_scripts() {
			// JS dependency variable
			$main_js_dependency = apply_filters( 'einar_filter_main_js_dependency', array( 'jquery' ) );

			// Hook to include additional scripts before theme's main script
			do_action( 'einar_action_before_main_js', $main_js_dependency );

			// Enqueue theme's main script
			wp_enqueue_script( 'einar-main-js', EINAR_ASSETS_JS_ROOT . '/main.min.js', $main_js_dependency, false, true );

			// Hook to include additional scripts after theme's main script
			do_action( 'einar_action_after_main_js' );

			// Include comment reply script
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

		function localize_js_scripts() {
			$global = apply_filters(
				'einar_filter_localize_main_js',
				array(
					'adminBarHeight' => is_admin_bar_showing() ? 32 : 0,
					'iconArrowLeft'  => einar_get_svg_icon( 'slider-arrow-left' ),
					'iconArrowRight' => einar_get_svg_icon( 'slider-arrow-right' ),
					'iconClose'      => einar_get_svg_icon( 'close' ),
				)
			);

			wp_localize_script(
				'einar-main-js',
				'qodefGlobal',
				array(
					'vars' => $global,
				)
			);
		}

		function include_plugins_styles() {

			// Enqueue 3rd party plugins style
			wp_enqueue_style( 'swiper', EINAR_ASSETS_ROOT . '/plugins/swiper/swiper.min.css' );

            if ( ! einar_is_installed( 'core' ) && einar_is_woo_page( 'single' ) ) {
                wp_enqueue_style( 'magnific-popup', EINAR_ASSETS_ROOT . '/plugins/magnific-popup/magnific-popup.css' );
            }
		}

		function include_plugins_scripts() {

			// JS dependency variables
			$js_3rd_party_dependency = apply_filters( 'einar_filter_js_3rd_party_dependency', 'jquery' );

			// Enqueue 3rd party plugins script
			wp_enqueue_script( 'swiper', EINAR_ASSETS_ROOT . '/plugins/swiper/swiper.min.js', array( $js_3rd_party_dependency ), false, true );
            if ( ! einar_is_installed( 'core' ) && einar_is_woo_page( 'single' ) ) {
                wp_enqueue_script( 'jquery-magnific-popup', EINAR_ASSETS_ROOT . '/plugins/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
            }
		}

		function add_pingback_header() {
			if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
				<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
				<?php
			}
		}

		function add_skip_link() {
			echo '<a class="skip-link screen-reader-text" href="#qodef-page-content">' . esc_html__( 'Skip to the content', 'einar' ) . '</a>';
		}

		function include_google_fonts() {
			$is_enabled = boolval( apply_filters( 'einar_filter_enable_google_fonts', true ) );

			if ( $is_enabled ) {
				$font_subset_array = array(
					'latin-ext',
				);

				$font_weight_array = array(
					'300',
					'400',
					'500',
					'600',
					'700',
				);

				$default_font_family = array(
					'Inter',
					'Reenie Beanie',
				);

				$font_weight_str = implode( ',', array_unique( apply_filters( 'einar_filter_google_fonts_weight_list', $font_weight_array ) ) );
				$font_subset_str = implode( ',', array_unique( apply_filters( 'einar_filter_google_fonts_subset_list', $font_subset_array ) ) );
				$fonts_array     = apply_filters( 'einar_filter_google_fonts_list', $default_font_family );

				if ( ! empty( $fonts_array ) ) {
					$modified_default_font_family = array();

					foreach ( $fonts_array as $font ) {
						$modified_default_font_family[] = $font . ':' . $font_weight_str;
					}

					$default_font_string = implode( '|', $modified_default_font_family );

					$fonts_full_list_args = array(
						'family'  => urlencode( $default_font_string ),
						'subset'  => urlencode( $font_subset_str ),
						'display' => 'swap',
					);

					$google_fonts_url = add_query_arg( $fonts_full_list_args, 'https://fonts.googleapis.com/css' );
					wp_enqueue_style( 'einar-google-fonts', esc_url_raw( $google_fonts_url ), array(), '1.0.0' );
				}
			}
		}

		function set_theme_support() {

			// Make theme available for translation
			load_theme_textdomain( 'einar', EINAR_ROOT_DIR . '/languages' );

			// Add support for feed links
			add_theme_support( 'automatic-feed-links' );

			// Add support for title tag
			add_theme_support( 'title-tag' );

			// Add support for post thumbnails
			add_theme_support( 'post-thumbnails' );

			// Add theme support for Custom Logo
			add_theme_support( 'custom-logo' );

			// Add support for full and wide align images.
			add_theme_support( 'align-wide' );

			// Set the default content width
			global $content_width;
			if ( ! isset( $content_width ) ) {
				$content_width = apply_filters( 'einar_filter_set_content_width', 1300 );
			}

			// Add support for post formats
			add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'link', 'quote' ) );

			// Add theme support for editor style
			add_editor_style( EINAR_ASSETS_CSS_ROOT . '/editor-style.min.css' );
		}

		function editor_customizer_styles() {

			// Include theme's Google fonts for Gutenberg editor
			$this->include_google_fonts();

			// Add editor customizer style
			wp_enqueue_style( 'einar-editor-customizer-styles', EINAR_ASSETS_CSS_ROOT . '/editor-customizer-style.css' );

			// Add Gutenberg blocks style
			wp_enqueue_style( 'einar-gutenberg-blocks-style', EINAR_INC_ROOT . '/gutenberg/assets/admin/css/gutenberg-blocks.min.css' );
		}

		function add_body_classes( $classes ) {
			$current_theme = wp_get_theme();
			$theme_name    = esc_attr( str_replace( ' ', '-', strtolower( $current_theme->get( 'Name' ) ) ) );
			$theme_version = esc_attr( $current_theme->get( 'Version' ) );

			// Check is child theme activated
			if ( $current_theme->parent() ) {

				// Add child theme version
				$child_theme_suffix = strpos( $theme_name, 'child' ) === false ? '-child' : '';

				$classes[] = $theme_name . $child_theme_suffix . '-' . $theme_version;

				// Get main theme variables
				$current_theme = $current_theme->parent();
				$theme_name    = esc_attr( str_replace( ' ', '-', strtolower( $current_theme->get( 'Name' ) ) ) );
				$theme_version = esc_attr( $current_theme->get( 'Version' ) );
			}

			if ( $current_theme->exists() ) {
				$classes[] = $theme_name . '-' . $theme_version;
			}

			// Set default grid size value
			$classes['grid_size'] = 'qodef-content-grid-1100';

			return apply_filters( 'einar_filter_add_body_classes', $classes );
		}

		function include_modules() {

			// Hook to include additional files before modules inclusion
			do_action( 'einar_action_before_include_modules' );

			foreach ( glob( EINAR_INC_ROOT_DIR . '/*/include.php' ) as $module ) {
				include_once $module; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			}

			// Hook to include additional files after modules inclusion
			do_action( 'einar_action_after_include_modules' );
		}
	}

	Einar_Handler::get_instance();
}



//** New functions */
function action_admin_head()
{
?>
	<style>
		#toplevel_page_qi_blocks_setup_wizard,
		#toplevel_page_qi_addons_for_elementor_welcome,
		#toplevel_page_einar_core_dashboard,
		#toplevel_page_qode_woocommerce_general_menu,
		#toplevel_page_qode_optimizer_general_menu,
		#toplevel_page_einar_core_menu {
			display: none !important;
		}
	</style>
<?php
}
add_action('admin_head', 'action_admin_head');


function elementor_template($atts)
{
    extract(
        shortcode_atts(
            array(
                'id' => '',
            ),
            $atts
        )
    );
    return \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($id);
}

add_shortcode('elementor_template', 'elementor_template');



/**
 * Adds a shortcode to display a WordPress navigation menu.
 *
 * Usage:
 * [dynamic_menu menu_id="2" container_class="my-custom-menu-container"]
 * [dynamic_menu menu_slug="main-menu" menu_class="footer-nav"]
 * [dynamic_menu menu_name="Top Navigation"]
 *
 * @param array $atts Shortcode attributes.
 * @return string The HTML output of the navigation menu.
 */
function dynamic_menu_shortcode( $atts ) {
    // Define default attributes
    $atts = shortcode_atts(
        array(
            'menu_id'         => '',   // Numeric ID of the menu
            'menu_slug'       => '',   // Slug of the menu (e.g., 'main-navigation')
            'menu_name'       => '',   // Name of the menu (e.g., 'Main Menu')
            'container'       => 'div', // Tag name for the nav menu's container.
            'container_class' => 'dynamic-menu-container', // Class for the nav menu's container.
            'menu_class'      => 'dynamic-menu',     // Class for the ul element.
            'echo'            => false, // Set to false to return the menu as a string.
            'fallback_cb'     => false, // Do not display a fallback page list if menu is not found.
            'depth'           => 0,    // How many levels of the menu to display. 0 means all.
        ),
        $atts,
        'dynamic_menu'
    );

    $menu_args = array(
        'echo'            => (bool) $atts['echo'],
        'container'       => $atts['container'],
        'container_class' => esc_attr( $atts['container_class'] ),
        'menu_class'      => esc_attr( $atts['menu_class'] ),
        'fallback_cb'     => $atts['fallback_cb'],
        'depth'           => intval( $atts['depth'] ),
    );

    // Prioritize menu_id, then menu_slug, then menu_name
    if ( ! empty( $atts['menu_id'] ) ) {
        $menu_args['menu'] = intval( $atts['menu_id'] ); // Use numeric ID
    } elseif ( ! empty( $atts['menu_slug'] ) ) {
        $menu_args['menu'] = sanitize_title( $atts['menu_slug'] ); // Use slug
    } elseif ( ! empty( $atts['menu_name'] ) ) {
        $menu_args['menu'] = sanitize_text_field( $atts['menu_name'] ); // Use name
    } else {
        // If no menu identifier is provided, return an empty string or an error message.
        return '<!-- dynamic_menu shortcode: No menu ID, slug, or name provided. -->';
    }

    // Check if the menu exists before trying to display it
    $menu_exists = false;
    if ( is_nav_menu( $menu_args['menu'] ) ) {
        $menu_exists = true;
    } else {
        // If menu was specified by ID/slug/name, try to get its object to verify existence.
        $menu_object = wp_get_nav_menu_object( $menu_args['menu'] );
        if ( $menu_object && ! is_wp_error( $menu_object ) ) {
            $menu_exists = true;
            // Ensure the menu argument is the ID if we found it by slug/name
            $menu_args['menu'] = $menu_object->term_id;
        }
    }

    if ( $menu_exists ) {
        return wp_nav_menu( $menu_args );
    } else {
        // Return a comment indicating the menu was not found.
        // This is useful for debugging in the page source.
        return '<!-- dynamic_menu shortcode: Menu "' . esc_attr( $menu_args['menu'] ) . '" not found. -->';
    }
}

/**
 * Register the shortcode.
 *
 * 'dynamic_menu' is the shortcode tag that users will type in.
 * 'dynamic_menu_shortcode' is the function that will be executed when the shortcode is found.
 */
add_shortcode( 'dynamic_menu', 'dynamic_menu_shortcode' );