<?php
	/* @todo: rebuild */
	namespace sv100;

	class sv_content extends init {
		public function init() {
			$this->set_module_title( __( 'SV Content', 'sv100' ) )
				->set_module_desc( __( 'Manages content output.', 'sv100' ) )
				->load_settings()
				->register_scripts()
				->register_sidebars()
				->set_section_title( __( 'Content', 'sv100' ) )
				->set_section_desc( __( 'Content settings', 'sv100' ) )
				->set_section_template_path( 'lib/backend/tpl/settings.php' )
				->set_section_order(3000)
				->set_section_icon('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm11 22h-9v-16h9v16zm11 0h-9v-7h9v7zm0-9h-9v-7h9v7z"/></svg>')
				->get_root()
				->add_section( $this );
			
			// Action Hooks
			add_action( 'wp_print_styles', array( $this, 'wp_print_styles' ), 100 );
			add_action( 'wp', array( $this, 'load_gutenberg_css' ) );
			add_filter( 'posts_orderby', array( $this, 'posts_orderby' ), 10, 2 );

			add_filter('sv_core_has_block_frontend_queried_object', function ($post) {
				if ( is_404() ) {
					return get_post($this->get_setting('404_page')->get_data());
				}else{
					return $post;
				}
			});
		}
		public function posts_orderby( $orderby_statement, $wp_query ) {
			global $wpdb;

			if ( !is_admin() && is_category() ) {
				$cat_ID = get_cat_ID( $wp_query->query['category_name'] );
				$order_by = get_term_meta( $cat_ID, 'sv100_companion_sv_categories_order_by', true )
					? get_term_meta( $cat_ID, 'sv100_companion_sv_categories_order_by', true )
					: 'date';
				$order = get_term_meta( $cat_ID, 'sv100_companion_sv_categories_order', true )
					? get_term_meta( $cat_ID, 'sv100_companion_sv_categories_order', true )
					: 'DESC';

				$orderby_statement = $wpdb->prefix.'posts.post_' . $order_by . ' ' . $order;

				return $orderby_statement;
			} else {
				return $orderby_statement;
			}
		}
		
		protected function load_settings(): sv_content {
			$this->get_setting( 'bg_color' )
				->set_title( __( 'Background Color', 'sv100' ) )
				->set_default_value( '255,255,255,0' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->set_default_value(
					array(
						'top'=>'40px',
						'right'=>'20px',
						'left'=>'20px',
						'bottom'=>'40px'
					)
				)
				->load_type( 'margin' );

			$this->get_setting( 'border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			// ### Widgets Settings ###
			// Widgets Title
			$this->get_setting( 'font_family_widget_title' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' ) ? $this->get_module( 'sv_webfontloader' )->get_font_options() : array('' => __('Please activate module SV Webfontloader for this Feature.', 'sv100')) )
				 ->load_type( 'select' );

			$this->get_setting( 'font_size_widget_title' )
				 ->set_title( __( 'Font Size', 'sv100' ) )
				 ->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				 ->set_default_value( 32 )
				 ->load_type( 'number' );

			$this->get_setting( 'line_height_widget_title' )
				 ->set_title( __( 'Line Height', 'sv100' ) )
				 ->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				 ->set_default_value( '1.3' )
				 ->load_type( 'text' );

			$this->get_setting( 'text_color_widget_title' )
				 ->set_title( __( 'Text Color', 'sv100' ) )
				 ->set_default_value( '#828282' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'text_color_widget' )
				 ->set_title( __( 'Widget text color', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'bg_color_widget' )
				 ->set_title( __( 'Widget background color', 'sv100' ) )
				 ->set_default_value( '#323232' )
				 ->load_type( 'color' );
			
			// 404 Page
			$this->get_setting( '404_page' )
				 ->set_title( __( '404 Page', 'sv100' ) )
				 ->set_description( __( 'Select a page for showing custom content in error 404 / not found cases', 'sv100' ) )
				 ->load_type( 'select_page' );
			
			// ### Sidebar Settings ###
			// Post
			$this->get_setting( 'show_sidebar_right_post' )
				 ->set_title( __( 'Show right sidebar on posts', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			$this->get_setting( 'sidebar_right_post_sticky' )
				 ->set_title( __( 'Make right sidebar on posts sticky', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			$this->get_setting( 'show_sidebar_bottom_post' )
				 ->set_title( __( 'Show bottom sidebar on posts', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			// Page
			$this->get_setting( 'show_sidebar_right_page' )
				 ->set_title( __( 'Show right sidebar on pages', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			$this->get_setting( 'sidebar_right_page_sticky' )
				 ->set_title( __( 'Make right sidebar on pages sticky', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			$this->get_setting( 'show_sidebar_bottom_page' )
				 ->set_title( __( 'Show bottom sidebar on pages', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			return $this;
		}
		
		protected function register_scripts(): sv_content {
			// Styles - Sidebar
			$this->get_script( 'widgets' )
				 ->set_path( 'lib/frontend/css/sidebar/widgets.css' )
				 ->set_inline( false );
			
			$this->get_script( 'sidebar_right' )
				 ->set_path( 'lib/frontend/css/sidebar/sidebar_right.css' )
				 ->set_inline( true );
			
			$this->get_script( 'sidebar_bottom' )
				 ->set_path( 'lib/frontend/css/sidebar/sidebar_bottom.css' )
				 ->set_inline( false );
			
			// Styles - Content
			$this->get_script( 'content_common' )
				 ->set_path( 'lib/frontend/css/content/common.css' )
				->set_is_gutenberg()
				 ->set_inline( true );

			$this->get_script( 'content_single' )
				 ->set_path( 'lib/frontend/css/content/single.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_page' )
				 ->set_path( 'lib/frontend/css/content/page.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_frontpage' )
				 ->set_path( 'lib/frontend/css/content/frontpage.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_404' )
				 ->set_path( 'lib/frontend/css/content/404.css' )
				 ->set_inline( true );
			
			// Gutenberg Default Styles
			$this->get_script( 'block-library' )
				 ->set_path( ABSPATH . 'wp-includes/css/dist/block-library/style.min.css', true )
				 ->set_inline( true );

			$this->get_script( 'block-library-theme' )
				->set_path( ABSPATH . 'wp-includes/css/dist/block-library/theme.min.css', true )
				->set_inline( true );

			// Inline Config
			$this->get_script( 'config' )
				 ->set_path( 'lib/frontend/css/config.php' )
				 ->set_inline( true );
			
			// Scripts - Frontend
			$this->get_script( 'sidebar_js' )
				 ->set_path( 'lib/frontend/js/sidebar.js' )
				 ->set_type( 'js' )
				 ->set_deps( array(  'jquery' ) );
			
			// Scripts - Backend
			$this->get_script( 'gutenberg_block_styles' )
				 ->set_path( 'lib/backend/js/gutenberg_block_styles.js' )
				 ->set_type( 'js' )
				 ->set_deps( array(  'jquery' ) )
				 ->set_is_gutenberg()
				 ->set_is_backend()
				 ->set_is_enqueued();
			
			return $this;
		}
		
		protected function register_sidebars(): sv_content {
			if ( $this->get_module( 'sv_sidebar' ) ) {
				$this->get_module( 'sv_sidebar' )
					 ->create( $this, $this->get_prefix('frontpage_right') )
					 ->set_title( __( 'Frontpage - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on the frontpage/landingpage, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this, $this->get_prefix('frontpage_bottom') )
					 ->set_ID( 'frontpage_bottom' )
					 ->set_title( __( 'Frontpage - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on the frontpage/landingpage, below the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this, $this->get_prefix('page_right') )
					 ->set_title( __( 'Pages - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on pages, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this, $this->get_prefix('page_bottom') )
					 ->set_title( __( 'Pages - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on pages, below the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this, $this->get_prefix('post_right') )
					 ->set_title( __( 'Posts - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on posts, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this, $this->get_prefix('post_bottom') )
					 ->set_title( __( 'Posts - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on posts, below the content.', 'sv100' ) )
					 ->load_sidebar();
			}
			
			return $this;
		}
		
		public function has_sidebar_content(): bool{
			if(!$this->get_module( 'sv_sidebar' )){
				return false;
			}

			$i = false;
			
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('frontpage_right' )) ){
				$i = true;
			}
			
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('frontpage_bottom') ) ){
				$i = true;
			}
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('page_right') ) ){
				$i = true;
			}
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('page_bottom') ) ){
				$i = true;
			}
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('post_right') ) ){
				$i = true;
			}
			if($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('post_bottom') ) ){
				$i = true;
			}

			return $i;
		}
		
		public function wp_print_styles() {
			// Gutenberg: load Styles inline for Pagespeed purposes
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-theme' );
		}
		
		public function load_gutenberg_css(): sv_content {
			if ( is_single() || is_page() || is_404() ) {
				$this->get_script( 'block-library' )
					 ->set_is_enqueued( true );

				$this->get_script( 'block-library-theme' )
					->set_is_enqueued( true );
			}
			
			return $this;
		}
		
		public function load( $settings = array() ): string {
			$settings = shortcode_atts(
				array(
					'inline'	=> true,
					'template'	=> 'single',
				),
				$settings,
				$this->get_module_name()
			);

			return $this->router( $settings );
		}
		
		// Handles the routing of the templates
		protected function router( array $settings ): string {
			$template = false;

			if ( is_404() ) {
				global $post;
				$post = get_post( $this->get_setting( '404_page' )->get_data() );
				setup_postdata($post);

				$template = array(
					'path'	  => 'content/404',
					'scripts'   => array(
						$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_404' )->set_inline( $settings['inline'] ),
					),
				);
			}elseif ( have_posts() ) {
				// Home: A static page
				if ( ( is_front_page() && !is_home() ) || ( ! is_front_page() && is_home() ) ) {
					$template = array(
						'path'	  => 'content/frontpage',
						'scripts'   => array(
							$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_frontpage' )->set_inline( $settings['inline'] ),
						),
					);
				}
				
				// Template Management
				elseif ( $settings['template'] ) {
					switch ( $settings['template'] ) {
						case 'single':
							$template = array(
								'path'	  => 'content/single',
								'scripts'   => array(
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_single' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'page':
							$template = array(
								'path'	  => 'content/page',
								'scripts'   => array(
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
								),
							);
							break;
					}
				}
			}

			// @filter: sv100_sv_content_template
			if($template) {
				return $this->load_template(
					apply_filters(
						$this->get_prefix('template'),
						$template, $settings, $this
					), $settings
				);
			}else{
				return '';
			}
		}
		
		// Loads the templates
		protected function load_template( array $template, array $settings ): string {
			ob_start();
			
			// Loads the header
			$this->get_header( $template );
			
			// Loads scripts
			foreach ( $template['scripts'] as $script ) {
				$script->set_is_enqueued();
			}
			
			// Loads the config CSS
			$this->get_module( 'sv_content' )->get_script( 'config' )->set_is_enqueued();
			
			// Loads the template
			require ( $this->get_path('lib/frontend/tpl/' . $template['path'] . '.php' ) );
			
			// Loads the footer
			$this->get_footer( $template );
			
			$output	= ob_get_contents();
			ob_end_clean();
			
			return $output;
		}
		
		protected function get_header( array $template ): sv_content {
			if ( isset( $template['header'] ) && locate_template( 'header-' . $template['header'] . '.php' ) ) {
				get_header( $template['header'] );
			} else {
				get_header();
			}
			
			return $this;
		}
		
		protected function get_footer( array $template ): sv_content {
			if ( isset( $template['footer'] ) && locate_template( 'footer-' . $template['footer'] . '.php' ) ) {
				get_footer( $template['footer'] );
			} else {
				get_footer();
			}
			
			return $this;
		}

		public function show_right_sidebar(): bool{
			return $this->has_sidebar_content() ? $this->get_visibility('sidebar_right') : false;
		}
		
		public function show_bottom_sidebar(): bool{
			return $this->has_sidebar_content() ? $this->get_visibility('sidebar_bottom') : false;
		}
		
		public function get_global_wrapper_class(string $suffix = ''){
			/* global wrapper style should be inherited to all sub page types and overwritten there if needed */
			$wrapper = 'wrapper';
			if($suffix != ''){
				$wrapper .= '_'.$suffix;
			}
			return $this->get_parent()->get_prefix($wrapper);
		}
		public function get_visibility(string $field): bool{
			$status = $this->get_setting( 'show_'.$field.'_' . get_post_type() )->get_data();

			return $status;
		}
	}