<?php
	namespace sv100;

	class sv_content extends init {
		public function init() {
			$this->set_module_title( __( 'SV Content', 'sv100' ) )
				->set_module_desc( __( 'Manages content output.', 'sv100' ) )
				->load_settings()
				->set_css_cache_active()
				->set_section_title( $this->get_module_title() )
				->set_section_desc( $this->get_module_desc() )
				->set_section_template_path()
				->register_scripts()
				->register_sidebars()
				->set_section_order(3000)
				->set_section_icon('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm11 22h-9v-16h9v16zm11 0h-9v-7h9v7zm0-9h-9v-7h9v7z"/></svg>')
				->get_root()
				->add_section( $this );
			
			// Action Hooks
			add_action( 'wp_print_styles', array( $this, 'wp_print_styles' ), 100 );
			add_action( 'wp', array( $this, 'load_gutenberg_css' ) );
			add_filter('sv_core_has_block_frontend_queried_object', function ($post) {
				if ( is_404() ) {
					return get_post($this->get_setting('404_page')->get_data());
				}else{
					return $post;
				}
			});
		}
		
		protected function load_settings(): sv_content {
			$this->get_setting( 'stack_active', 'sv100' )
				->set_title( __( 'Stack Columns', 'sv100' ) )
				->set_description( __( 'You may want to stack Columns on narrow viewports.', 'sv100' ) )
				->set_is_responsive(true)
				->set_default_value(array(
					'mobile'						=> 1,
					'mobile_landscape'				=> 1,
					'tablet'						=> 1,
					'tablet_landscape'				=> 0,
					'tablet_pro'					=> 0,
					'tablet_pro_landscape'			=> 0,
					'desktop'						=> 0
				))
				->load_type( 'checkbox' );

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
			parent::register_scripts();

			// Styles - Sidebar
			$this->get_script( 'sidebar_right' )
				 ->set_path( 'lib/css/sidebar/right.css' )
				 ->set_inline( true );
			
			$this->get_script( 'sidebar_bottom' )
				 ->set_path( 'lib/css/sidebar/bottom.css' )
				 ->set_inline( false );
			
			// Styles - Content
			$this->get_script( 'content_single' )
				 ->set_path( 'lib/css/common/single.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_page' )
				 ->set_path( 'lib/css/common/page.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_frontpage' )
				 ->set_path( 'lib/css/common/frontpage.css' )
				 ->set_inline( true );
			
			$this->get_script( 'content_404' )
				 ->set_path( 'lib/css/common/404.css' )
				 ->set_inline( true );
			
			// Gutenberg Default Styles
			$this->get_script( 'block-library' )
				 ->set_path( ABSPATH . 'wp-includes/css/dist/block-library/style.min.css', true )
				 ->set_inline( true );

			$this->get_script( 'block-library-theme' )
				->set_path( ABSPATH . 'wp-includes/css/dist/block-library/theme.min.css', true )
				->set_inline( true );

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

			$template	= $settings['template'];

			// Loads scripts
			foreach ( $this->get_scripts() as $script ) {
				$script->set_is_enqueued();
			}

			ob_start();
			// Loads the header
			get_header();

			// Loads the template
			require ( $this->get_path('lib/tpl/frontend/' . $template . '.php' ) );

			// Loads the footer
			get_footer();

			$output	= ob_get_contents();
			ob_end_clean();

			return $output;
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