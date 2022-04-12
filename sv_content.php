<?php
	namespace sv100;

	class sv_content extends init {
		private $sidebar_positions		= array();

		public function init() {
			$this->sidebar_positions		= array(
				'top'		=> __('Top', 'sv100'),
				'right'		=> __('Right', 'sv100'),
				'bottom'	=> __('Bottom', 'sv100'),
				'left'		=> __('Left', 'sv100'),
			);

			$this->set_module_title( __( 'SV Content', 'sv100' ) )
				->set_module_desc( __( 'Manages content output.', 'sv100' ) )
				->load_settings()
				->set_css_cache_active()
				->set_section_title( $this->get_module_title() )
				->set_section_desc( $this->get_module_desc() )
				->set_section_template_path()
				->register_scripts()
				->set_section_order(3000)
				->set_section_icon('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm11 22h-9v-16h9v16zm11 0h-9v-7h9v7zm0-9h-9v-7h9v7z"/></svg>')
				->get_root()
				->add_section( $this );

			add_action('init', function(){
				$this->load_settings()->add_metaboxes();
			});
			
			// Action Hooks
			add_action( 'wp_print_styles', array( $this, 'wp_print_styles' ), 100 );
			add_filter('sv_core_has_block_frontend_queried_object', function ($post) {
				if ( is_404() ) {
					return get_post($this->get_setting('404_page')->get_data());
				}else{
					return $post;
				}
			});
		}

		public function get_sidebar_positions(): array{
			return $this->sidebar_positions;
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

			// 404 Page
			$this->get_setting( '404_page' )
				 ->set_title( __( '404 Page', 'sv100' ) )
				 ->set_description( __( 'Select a page for showing custom content in error 404 / not found cases', 'sv100' ) )
				 ->load_type( 'select_page' );

			// ### Post Type Settings ###
			foreach(get_post_types(array('public' => true)) as $post_type) {
				$this->get_setting( 'outer_wrapper_max_width_'.$post_type )
					->set_title( __( 'Outer Wrapper Max Width', 'sv100' ) )
					->set_description( __( 'Set the max width of the wrapper for the content including sidebars', 'sv100' ) )
					->set_options( $this->get_module('sv_common') ? $this->get_module('sv_common')->get_max_width_options() : array('' => __('Please activate module SV Common for this Feature.', 'sv100')) )
					->set_default_value( '100%' )
					->set_is_responsive(true)
					->load_type( 'select' );

				$this->get_setting( 'article_wrapper_max_width_'.$post_type )
					->set_title( __( 'Article Wrapper Max Width', 'sv100' ) )
					->set_description( __( 'Set the max width of the wrapper for the content article wrapper', 'sv100' ) )
					->set_options( $this->get_module('sv_common') ? $this->get_module('sv_common')->get_max_width_options() : array('' => __('Please activate module SV Common for this Feature.', 'sv100')) )
					->set_default_value( '100%' )
					->set_is_responsive(true)
					->load_type( 'select' );

				$this->get_setting( 'column_gap_'.$post_type )
					->set_title( __( 'Column Gap', 'sv100' ) )
					->set_description( __( 'Gap between Sidebars and Content in Pixel', 'sv100' ) )
					->set_default_value( '20' )
					->set_is_responsive(true)
					->load_type( 'text' );
			}

			// ### Sidebar Settings ###
			foreach(get_post_types(array('public' => true)) as $post_type) {
				foreach ($this->get_sidebar_positions() as $position => $position_label) {
					$this->get_setting('sidebar_'.$position.'_'.$post_type)
						->set_title( __( 'Sidebar', 'sv100' ).' '.$position_label )
						->set_description( __( 'Select Sidebar.', 'sv100' ) )
						->set_options( $this->get_module('sv_sidebar') ? $this->get_module('sv_sidebar')->get_sidebars_for_settings_options() : array('' => __('Please activate module SV Sidebar for this Feature.', 'sv100')) )
						->load_type( 'select' );

					$this->get_setting('sidebar_max_width_'.$position.'_'.$post_type)
						->set_title( __( 'Sidebar Max Width', 'sv100' ).' '.$position_label )
						->set_description( __( 'Set max width with unit (e.g. px, vw etc.)', 'sv100' ) )
						->set_is_responsive(true)
						->load_type( 'text' );
				}
			}

			return $this;
		}
		
		public function has_sidebar_content(string $location): bool{
			if(!$this->get_module( 'sv_sidebar' )){
				return false;
			}

			if( $this->get_module( 'sv_sidebar' )->load( $this->get_metabox_data_by_post_type('sidebar_'.$location) ) ) {
				return true;
			}

			return false;
		}
		public function has_active_sidebar(){
			foreach($this->get_sidebar_positions() as $position => $position_value){
				if($this->show_sidebar($position) === true){
					return true;
				}
			}

			return false;
		}
		
		public function wp_print_styles() {
			// Gutenberg: load Styles inline for Pagespeed purposes
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-theme' );
		}

		public function enqueue_scripts(): sv_content {
			$this->get_script( 'common' )->set_is_enqueued();
			$this->get_script( 'config' )->set_is_enqueued();

			return $this;
		}
		
		public function load( $settings = array() ): string {
			$this->enqueue_scripts();

			$settings = shortcode_atts(
				array(
					'inline'	=> true,
					'template'	=> 'default',
				),
				$settings,
				$this->get_module_name()
			);

			ob_start();
			// Loads the header
			get_header();

			// Loads the template
			require ( $this->get_path('lib/tpl/frontend/single_' . $settings['template'] . '.php' ) );

			// Loads the footer
			get_footer();

			$output	= ob_get_contents();
			ob_end_clean();

			return $output;
		}

		public function show_sidebar(string $location): string{
			return $this->has_sidebar_content($location) ? $this->get_metabox_data_by_post_type('sidebar_'.$location) : '';
		}
		
		public function get_global_wrapper_class(string $suffix = ''){
			/* global wrapper style should be inherited to all sub page types and overwritten there if needed */
			$wrapper = 'wrapper';
			if($suffix != ''){
				$wrapper .= '_'.$suffix;
			}
			return $this->get_parent()->get_prefix($wrapper);
		}
		private function add_metaboxes(): sv_content{
			$this->metaboxes			= $this->get_root()->get_module('sv_metabox');

			$states						= $this->get_module('sv_sidebar') ? $this->get_module('sv_sidebar')->get_sidebars_for_metabox_options() : array('' => __('Please activate module SV Sidebar for this Feature.', 'sv100'));

			foreach($this->get_sidebar_positions() as $position => $position_label){
				$this->metaboxes->get_setting( $this->get_prefix('sidebar_'.$position) )
					->set_title( __('Select Sidebar', 'sv100').' '.$position_label )
					->set_description( __('Override Default Settings', 'sv100') )
					->load_type( 'select' )
					->set_options($states);
			}

			return $this;
		}
	}