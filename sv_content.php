<?php
	namespace sv100;
	
	/**
	 * @version         4.000
	 * @author			straightvisions GmbH
	 * @package			sv100
	 * @copyright		2019 straightvisions GmbH
	 * @link			https://straightvisions.com
	 * @since			1.000
	 * @license			See license.txt or https://straightvisions.com
	 */
	
	class sv_content extends init {
		public function init() {
			// Module Info
			$this->set_module_title( 'SV Content' );
			$this->set_module_desc( __( 'This module defines and manages content output, via the "[sv_content]" shortcode.', 'sv100' ) );
			
			// Section Info
			$this->set_section_title( __( 'Content', 'sv100' ) )
			     ->set_section_desc( __( 'Settings', 'sv100' ) )
			     ->set_section_type( 'settings' )
			     ->set_section_template_path( $this->get_path( 'lib/backend/tpl/settings.php' ) );

			$this->get_root()->add_section( $this );
			
			// Load settings, register scripts and sidebars
			$this->add_theme_support()->load_settings()->register_scripts()->register_sidebars();
			
			// Action Hooks
			add_action( 'wp_print_styles', array( $this, 'wp_print_styles' ), 100 );
			add_action( 'wp', array( $this, 'load_gutenberg_css' ) );
		}
		
		public function wp_print_styles() {
			// Gutenberg: load Styles inline for Pagespeed purposes
			wp_dequeue_style( 'wp-block-library' );
		}
		
		public function load_gutenberg_css(): sv_content{
			if ( is_single() || is_page() ) {
				$this->scripts_queue['gutenberg']->set_is_enqueued( true );
			}
			
			return $this;
		}
		
		protected function add_theme_support(): sv_content {
			add_theme_support( 'align-wide' );
			add_theme_support( 'editor-font-sizes', array(
				array(
					'name' => __( 'Small', 'sv100' ),
					'size' => 12,
					'slug' => 'small'
				),
				array(
					'name' => __( 'Normal', 'sv100' ),
					'size' => 16,
					'slug' => 'normal'
				),
				array(
					'name' => __( 'Medium', 'sv100' ),
					'size' => 24,
					'slug' => 'normal'
				),
				array(
					'name' => __( 'Large', 'sv100' ),
					'size' => 32,
					'slug' => 'large'
				),
				array(
					'name' => __( 'Huge', 'sv100' ),
					'size' => 64,
					'slug' => 'huge'
				)
			) );
			
			add_image_size( 'sv100_thumbnail', 400, 400 );
			add_image_size( 'sv100_large', 1350, 650 );
			
			return $this;
		}
		
		protected function load_settings(): sv_content {
			// ### Content Settings ###
			// H1
			$this->get_settings_component( 'font_family_h1','font_family' );
			$this->get_settings_component( 'font_size_h1','font_size', 48 );
			$this->get_settings_component( 'line_height_h1','line_height', 72 );
			$this->get_settings_component( 'text_color_h1','text_color', '#1e1f22' );
			
			// H2
			$this->get_settings_component( 'font_family_h2','font_family' );
			$this->get_settings_component( 'font_size_h2','font_size', 40 );
			$this->get_settings_component( 'line_height_h2','line_height', 60 );
			$this->get_settings_component( 'text_color_h2','text_color', '#1e1f22' );
			
			// H3
			$this->get_settings_component( 'font_family_h3','font_family' );
			$this->get_settings_component( 'font_size_h3','font_size', 32 );
			$this->get_settings_component( 'line_height_h3','line_height', 48 );
			$this->get_settings_component( 'text_color_h3','text_color', '#1e1f22' );
			
			// H4
			$this->get_settings_component( 'font_family_h4','font_family' );
			$this->get_settings_component( 'font_size_h4','font_size', 24 );
			$this->get_settings_component( 'line_height_h4','line_height', 36 );
			$this->get_settings_component( 'text_color_h4','text_color', '#1e1f22' );
			
			// H5
			$this->get_settings_component( 'font_family_h5','font_family' );
			$this->get_settings_component( 'font_size_h5','font_size', 19 );
			$this->get_settings_component( 'line_height_h5','line_height', 29 );
			$this->get_settings_component( 'text_color_h5','text_color', '#1e1f22' );
			
			// H6
			$this->get_settings_component( 'font_family_h6','font_family' );
			$this->get_settings_component( 'font_size_h6','font_size', 16 );
			$this->get_settings_component( 'line_height_h6','line_height', 23 );
			$this->get_settings_component( 'text_color_h6','text_color', '#1e1f22' );
			
			// Highlight Color
			$this->s['color_highlight'] =
				$this->get_setting()
					 ->set_ID( 'color_highlight' )
					 ->set_title( __( 'Highlight Color', 'sv100' ) )
					 ->set_description( __( 'This color is used to highlight elements, like links (on hover/focus).', 'sv100' ) )
					 ->set_default_value( '#358ae9' )
					 ->load_type( 'color' );
			
			// ### Post Listing Settings ###
			//  List - Title
			$this->get_settings_component( 'font_family_title_list','font_family' );
			$this->get_settings_component( 'font_size_title_list','font_size', 32 );
			$this->get_settings_component( 'line_height_title_list','line_height', 48 );
			$this->get_settings_component( 'text_color_title_list','text_color', '#1e1f22' );
			
			// List - Excerpt
			$this->get_settings_component( 'font_family_excerpt_list','font_family' );
			$this->get_settings_component( 'font_size_excerpt_list','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_list','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_list','text_color', '#1e1f22' );
			
			// List - Read More
			$this->s['text_more_list'] =
				$this->get_setting()
					 ->set_ID( 'text_more_list' )
					 ->set_title( __( 'Read More Text', 'sv100' ) )
					 ->set_default_value( __( 'Read more', 'sv100' ) )
					 ->load_type( 'text' );
			$this->get_settings_component( 'font_family_more_list','font_family' );
			$this->get_settings_component( 'font_size_more_list','font_size', 16 );
			$this->get_settings_component( 'line_height_more_list','line_height', 23 );
			$this->get_settings_component( 'text_color_more_list','text_color', '#1e1f22' );
			
			// List - Colors Settings
			$this->s['text_color_info_list'] =
				$this->get_setting()
					 ->set_ID( 'text_color_info_list' )
					 ->set_title( __( 'Info Text Color', 'sv100' ) )
					 ->set_description( __( 'The color for the post info.', 'sv100' ) )
					 ->set_default_value( '#85868c' )
					 ->load_type( 'color' );
			$this->s['color_highlight_list'] =
				$this->get_setting()
					 ->set_ID( 'color_highlight_list' )
					 ->set_title( __( 'Highlight Color', 'sv100' ) )
					 ->set_description( __( 'This color is used to highlight elements, like links (on hover/focus).', 'sv100' ) )
					 ->set_default_value( '#358ae9' )
					 ->load_type( 'color' );
			
			// Masonry - Title
			$this->get_settings_component( 'font_family_title_masonry','font_family' );
			$this->get_settings_component( 'font_size_title_masonry','font_size', 32 );
			$this->get_settings_component( 'line_height_title_masonry','line_height', 48 );
			$this->get_settings_component( 'text_color_title_masonry','text_color', '#1e1f22' );
			
			// Masonry - Excerpt
			$this->get_settings_component( 'font_family_excerpt_masonry','font_family' );
			$this->get_settings_component( 'font_size_excerpt_masonry','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_masonry','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_masonry','text_color', '#1e1f22' );
			
			// Masonry - Read More
			$this->s['text_more_masonry'] =
				$this->get_setting()
					 ->set_ID( 'text_more_masonry' )
					 ->set_title( __( 'Read More Text', 'sv100' ) )
					 ->set_default_value( __( 'Read more', 'sv100' ) )
					 ->load_type( 'text' );
			$this->get_settings_component( 'font_family_more_masonry','font_family' );
			$this->get_settings_component( 'font_size_more_masonry','font_size', 16 );
			$this->get_settings_component( 'line_height_more_masonry','line_height', 23 );
			$this->get_settings_component( 'text_color_more_masonry','text_color', '#1e1f22' );
			
			// Masonry - Colors Settings
			$this->get_settings_component( 'bg_color_masonry','background_color', '#f7f7f7' );
			$this->s['text_color_category_masonry'] =
				$this->get_setting()
					 ->set_ID( 'text_color_category_masonry' )
					 ->set_title( __( 'Category Text Color', 'sv100' ) )
					 ->set_description( __( 'The color for the post categories.', 'sv100' ) )
					 ->set_default_value( '#ffffff' )
					 ->load_type( 'color' );
			$this->s['bg_color_category_masonry'] =
				$this->get_setting()
					 ->set_ID( 'bg_color_category_masonry' )
					 ->set_title( __( 'Category Background Color', 'sv100' ) )
					 ->set_description( __( 'The background color for the post categories.', 'sv100' ) )
					 ->set_default_value( '#1e1f22' )
					 ->load_type( 'color' );
			$this->s['text_color_info_masonry'] =
				$this->get_setting()
					 ->set_ID( 'text_color_info_masonry' )
					 ->set_title( __( 'Info Text Color', 'sv100' ) )
					 ->set_description( __( 'The color for the post info.', 'sv100' ) )
					 ->set_default_value( '#85868c' )
					 ->load_type( 'color' );
			$this->s['color_highlight_masonry'] =
				$this->get_setting()
					 ->set_ID( 'color_highlight_masonry' )
					 ->set_title( __( 'Highlight Color', 'sv100' ) )
					 ->set_description( __( 'This color is used to highlight elements, like links (on hover/focus).', 'sv100' ) )
					 ->set_default_value( '#358ae9' )
					 ->load_type( 'color' );
			
			// Grid - Title
			$this->get_settings_component( 'font_family_title_grid','font_family' );
			$this->get_settings_component( 'font_size_title_grid','font_size', 32 );
			$this->get_settings_component( 'line_height_title_grid','line_height', 48 );
			$this->get_settings_component( 'text_color_title_grid','text_color', '#1e1f22' );
			
			// Grid - Excerpt
			$this->get_settings_component( 'font_family_excerpt_grid','font_family' );
			$this->get_settings_component( 'font_size_excerpt_grid','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_grid','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_grid','text_color', '#ffffff' );
			
			// Grid - Color Settings
			$this->get_settings_component( 'bg_color_grid','background_color', '#f7f7f7' );
			$this->s['text_color_category_grid'] =
				$this->get_setting()
					 ->set_ID( 'text_color_category_grid' )
					 ->set_title( __( 'Category Text Color', 'sv100' ) )
					 ->set_description( __( 'The color for the post categories.', 'sv100' ) )
					 ->set_default_value( '#ffffff' )
					 ->load_type( 'color' );
			$this->s['bg_color_category_grid'] =
				$this->get_setting()
					 ->set_ID( 'bg_color_category_grid' )
					 ->set_title( __( 'Category Background Color', 'sv100' ) )
					 ->set_description( __( 'The background color for the post categories.', 'sv100' ) )
					 ->set_default_value( '#1e1f22' )
					 ->load_type( 'color' );
			$this->s['text_color_info_grid'] =
				$this->get_setting()
					 ->set_ID( 'text_color_info_grid' )
					 ->set_title( __( 'Info Text Color', 'sv100' ) )
					 ->set_description( __( 'The color for the post info.', 'sv100' ) )
					 ->set_default_value( '#85868c' )
					 ->load_type( 'color' );
			$this->s['color_highlight_grid'] =
				$this->get_setting()
					 ->set_ID( 'color_highlight_grid' )
					 ->set_title( __( 'Highlight Color', 'sv100' ) )
					 ->set_description( __( 'The background color on hover/focus.', 'sv100' ) )
					 ->set_default_value( '#1e1f22' )
					 ->load_type( 'color' );
			
			
			$this->s[ 'home_theme' ] =
				$this->get_setting()
					 ->set_ID( 'home_theme' )
					 ->set_title( __( 'Home Listing', 'sv100' ) )
					 ->set_description( __( 'Defines how posts on the homepage will be displayed.', 'sv100' ) )
					 ->set_options( array(
						 'list' => __( 'List (Default)', 'sv100' ),
						 'masonry' => __( 'Masonry', 'sv100' ),
						 'grid' => __( 'Grid', 'sv100' ),
					 ))
					 ->load_type( 'select' );

			$this->s[ 'search_theme' ] =
				$this->get_setting()
				     ->set_ID( 'search_theme' )
				     ->set_title( __( 'Search Listing', 'sv100' ) )
				     ->set_description( __( 'Defines how the search results will be displayed.', 'sv100' ) )
				     ->set_options( array(
					     'list' => __( 'List (Default)', 'sv100' ),
					     'masonry' => __( 'Masonry', 'sv100' ),
					     'grid' => __( 'Grid', 'sv100' ),
				     ))
				     ->load_type( 'select' );
			
			$this->s[ 'category_theme' ] =
				$this->get_setting()
					 ->set_ID( 'category_theme' )
					 ->set_title( __( 'Category Listing', 'sv100' ) )
					 ->set_description( __( 'Defines how posts filtered by category will be displayed.', 'sv100' ) )
					 ->set_options( array(
						 'list' => __( 'List (Default)', 'sv100' ),
						 'masonry' => __( 'Masonry', 'sv100' ),
						 'grid' => __( 'Grid', 'sv100' ),
					 ))
					 ->load_type( 'select' );
			
			$this->s[ 'tag_theme' ] =
				$this->get_setting()
					 ->set_ID( 'tag_theme' )
					 ->set_title( __( 'Tag Listing', 'sv100' ) )
					 ->set_description( __( 'Defines how posts filtered by tags will be displayed.', 'sv100' ) )
					 ->set_options( array(
						 'list' => __( 'List (Default)', 'sv100' ),
						 'masonry' => __( 'Masonry', 'sv100' ),
						 'grid' => __( 'Grid', 'sv100' ),
					 ))
					 ->load_type( 'select' );
			$this->s[ 'author_theme' ] =
				$this->get_setting()
					 ->set_ID( 'author_theme' )
					 ->set_title( __( 'Author Listing', 'sv100' ) )
					 ->set_description( __( 'Defines how posts created by an author will be displayed.', 'sv100' ) )
					 ->set_options( array(
						 'list' => __( 'List (Default)', 'sv100' ),
						 'masonry' => __( 'Masonry', 'sv100' ),
						 'grid' => __( 'Grid', 'sv100' ),
					 ))
					 ->load_type( 'select' );
			
			// 404 Page
			$this->s[ '404_page' ] =
				$this->get_setting()
					 ->set_ID( '404_page' )
					 ->set_title( __( '404 Page', 'sv100' ) )
					 ->set_description( __( 'Select a page for showing custom content in error 404 / not found cases', 'sv100' ) )
					 ->load_type( 'select_page' );
			
			return $this;
		}
		
		protected function register_scripts(): sv_content {
			// Styles - Common
			$this->scripts_queue['form'] =
				static::$scripts->create( $this )
								->set_ID( 'form' )
								->set_path( 'lib/frontend/css/form.css' )
								->set_inline( true );
			
			$this->scripts_queue['sidebar'] =
				static::$scripts->create( $this )
								->set_ID( 'sidebar' )
								->set_path( 'lib/frontend/css/sidebar.css' )
								->set_inline( true );
			
			// Styles - Content
			$this->scripts_queue['content_common'] =
				static::$scripts->create( $this )
								->set_ID( 'content_common' )
								->set_path( 'lib/frontend/css/content/common.css' )
								->set_inline( true );
			
			$this->scripts_queue['content_gutenberg'] =
				static::$scripts->create( $this )
								->set_ID( 'content_gutenberg' )
								->set_path( 'lib/frontend/css/content/gutenberg.css' )
								->set_inline( true );
			
			$this->scripts_queue['content_single'] =
				static::$scripts->create( $this )
								->set_ID( 'content_single' )
								->set_path( 'lib/frontend/css/content/single.css' )
								->set_inline( true );
			
			$this->scripts_queue['content_page'] =
				static::$scripts->create( $this )
								->set_ID( 'content_page' )
								->set_path( 'lib/frontend/css/content/page.css' )
								->set_inline( true );
			
			$this->scripts_queue['content_frontpage'] =
				static::$scripts->create( $this )
								->set_ID( 'content_frontpage' )
								->set_path( 'lib/frontend/css/content/frontpage.css' )
								->set_inline( true );
			
			$this->scripts_queue['content_404'] =
				static::$scripts->create( $this )
								->set_ID( 'content_404' )
								->set_path( 'lib/frontend/css/content/404.css' )
								->set_inline( true );
			
			// Styles - Archive
			$this->scripts_queue['archive_common'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_common' )
								->set_path( 'lib/frontend/css/archive/common.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_home'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_home' )
								->set_path( 'lib/frontend/css/archive/home.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_archive'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_archive' )
								->set_path( 'lib/frontend/css/archive/archive.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_category'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_category' )
								->set_path( 'lib/frontend/css/archive/category.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_tag'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_tag' )
								->set_path( 'lib/frontend/css/archive/tag.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_author'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_author' )
								->set_path( 'lib/frontend/css/archive/author.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_search'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_search' )
								->set_path( 'lib/frontend/css/archive/search.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_no_post'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_no_post' )
								->set_path( 'lib/frontend/css/archive/no_post.css' )
								->set_inline( true );
			
			// Styles - Archive Themes
			$this->scripts_queue['archive_theme_list'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_theme_list' )
								->set_path( 'lib/frontend/css/archive/themes/list.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_theme_masonry'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_theme_masonry' )
								->set_path( 'lib/frontend/css/archive/themes/masonry.css' )
								->set_inline( true );
			
			$this->scripts_queue['archive_theme_grid'] =
				static::$scripts->create( $this )
								->set_ID( 'archive_theme_grid' )
								->set_path( 'lib/frontend/css/archive/themes/grid.css' )
								->set_inline( true );
			
			// Gutenberg Default Styles
			$this->scripts_queue['gutenberg'] =
				static::$scripts->create( $this )
								->set_ID( 'bodhi-svgs-attachment' )
								->set_path( ABSPATH.'/wp-includes/css/dist/block-library/style.min.css', true)
								->set_inline( true );
			
			// Scripts - Backend
			$this->scripts_queue['backend_gutenberg'] =
				static::$scripts->create( $this )
								->set_ID( 'gutenberg_block_styles' )
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
					 ->create( $this )
					 ->set_ID( 'frontpage' )
					 ->set_title( __( 'Sidebar - Frontpage', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this area will be shown in the sidebar of the frontpage/landingpage.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'page' )
					 ->set_title( __( 'Sidebar - Pages', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this area will be shown in the sidebar of a page.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'single' )
					 ->set_title( __( 'Sidebar - Posts', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this area will be shown in the sidebar of single posts.', 'sv100' ) )
					 ->load_sidebar();
			}
			
			return $this;
		}
		
		public function load( $settings = array() ): string {
			$settings								= shortcode_atts(
				array(
					'inline'						=> true,
					'template'						=> 'single',
				),
				$settings,
				$this->get_module_name()
			);
			
			return $this->router( $settings );
		}
		
		// Handles the routing of the templates
		protected function router( array $settings ): string {
			if( have_posts() ) {
				$slider_support = has_filter( 'sv100_post_header_slider' );

				// Home: The last posts
				if ( is_front_page() && is_home() ) {
					$archive_theme = 'archive_theme_';
					$archive_theme .= $this->get_setting( 'home_theme' )->run_type()->get_data()
						? $this->get_setting( 'home_theme' )->run_type()->get_data()
						: 'list';
					$template = array(
						'path'      => 'archive/home',
						'scripts'   => array(
							$this->scripts_queue['form']->set_inline( $settings['inline'] ),
							$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
							$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
							$this->scripts_queue['archive_home']->set_inline( $settings['inline'] ),
						),
					);
					
					if ( $slider_support && $this->get_setting( 'home_slider' )->run_type()->get_data() === '1' ) {
						$template['header'] = 'slider';
					}
				}
				
				// Home: A static page
				else if ( ( is_front_page() && !is_home() ) || ( !is_front_page() && is_home() ) ) {
					if ( is_page_template( 'page-sidebar.php' ) ) {
						$template = array(
							'path'      => 'content/frontpage_sidebar',
							'scripts'   => array(
								$this->scripts_queue['form']->set_inline( $settings['inline'] ),
								$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_frontpage' ]->set_inline( $settings['inline'] ),
							),
						);
					} else if ( is_page_template( 'page-slider.php' ) ) {
						$template = array(
							'path'      => 'content/frontpage',
							'scripts'   => array(
								$this->scripts_queue['form']->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_frontpage' ]->set_inline( $settings['inline'] ),
							),
						);
						
						if ( $slider_support ) {
							$template[ 'header' ] = 'slider';
						}
					} else if ( is_page_template( 'page-slider-and-sidebar' ) ) {
						$template = array(
							'path'      => 'content/frontpage_sidebar',
							'scripts'   => array(
								$this->scripts_queue['form']->set_inline( $settings['inline'] ),
								$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_frontpage' ]->set_inline( $settings['inline'] ),
							),
						);
						
						if ( $slider_support ) {
							$template[ 'header' ] = 'slider';
						}
					} else {
						$template = array(
							'path'      => 'content/frontpage',
							'scripts'   => array(
								$this->scripts_queue['form']->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								$this->scripts_queue[ 'content_frontpage' ]->set_inline( $settings['inline'] ),
							),
						);
					}
				}
				
				// Template Management
				else if ( $settings['template'] ) {
					switch ( $settings['template'] ) {
						case 'single':
							$template = array(
								'path'      => 'content/single',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_single' ]->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'single_sidebar':
							$template = array(
								'path'      => 'content/single_sidebar',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_single' ]->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'page':
							$template = array(
								'path'      => 'content/page',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'page_sidebar':
							$template = array(
								'path'      => 'content/page_sidebar',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'page_slider':
							$template = array(
								'path'      => 'content/page',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								),
							);
							
							if ( $slider_support ) {
								$template[ 'header' ] = 'slider';
							}
							break;
						case 'page_slider_and_sidebar':
							$template = array(
								'path'      => 'content/page_sidebar',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
									$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
								),
							);
							
							if ( $slider_support ) {
								$template[ 'header' ] = 'slider';
							}
							break;
						case 'archive':
							$template = array(
								'path'      => 'archive/default',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_theme_list']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_archive']->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'category':
							$archive_theme = 'archive_theme_';
							$archive_theme .= $this->s['category_theme']->run_type()->get_data()
								? $this->s['category_theme']->run_type()->get_data()
								: 'list';
							
							$template = array(
								'path'      => 'archive/category',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_category']->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'tag':
							$archive_theme = 'archive_theme_';
							$archive_theme .= $this->s['tag_theme']->run_type()->get_data()
								? $this->s['tag_theme']->run_type()->get_data()
								: 'list';
							
							$template = array(
								'path'      => 'archive/tag',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_tag']->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'search':
							$archive_theme = 'archive_theme_';
							$archive_theme .= $this->s['search_theme']->run_type()->get_data()
								? $this->s['search_theme']->run_type()->get_data()
								: 'list';
							
							$template = array(
								'path'      => 'archive/search',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_search']->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'author':
							$archive_theme = 'archive_theme_';
							$archive_theme .= $this->s['author_theme']->run_type()->get_data()
								? $this->s['author_theme']->run_type()->get_data()
								: 'list';
							
							$template = array(
								'path'      => 'archive/author',
								'scripts'   => array(
									$this->scripts_queue['form']->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
									$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
									$this->scripts_queue['archive_author']->set_inline( $settings['inline'] ),
								),
							);
							break;
					}
				}
			} else if ( is_404() ) {
				$template = array(
					'path'      => 'content/404',
					'scripts'   => array(
						$this->scripts_queue['form']->set_inline( $settings['inline'] ),
						$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
						$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
						$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
						$this->scripts_queue[ 'content_404' ]->set_inline( $settings['inline'] ),
					),
				);
			} else {
				$template = array(
					'path'      => 'archive/no_post',
					'scripts'   => array(
						$this->scripts_queue['form']->set_inline( $settings['inline'] ),
						$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
						$this->scripts_queue['archive_no_post']->set_inline( $settings['inline'] ),
					),
				);
			}
			
			// @filter: sv100_sv_content_template
			return $this->load_template( apply_filters( $this->get_prefix( 'template' ), $template, $settings, $this ), $settings );
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
			
			$this->scripts_queue['config'] =
				static::$scripts->create( $this )
								->set_ID( 'config' )
								->set_path( 'lib/frontend/css/config.php' )
								->set_inline( true )
								->set_is_enqueued();
			
			
			// Loads the template
			include ( $this->get_path('lib/frontend/tpl/' . $template['path'] . '.php' ) );

			// Loads SV Scroll To Top
			if (
				$this->get_module( 'sv_scroll_to_top' )
				&& $this->get_module( 'sv_scroll_to_top' )->get_setting( 'activate' )->run_type()->get_data() === '1'
			) {
				echo $this->get_module( 'sv_scroll_to_top' )->load();
			}

			// Loads the footer
			$this->get_footer( $template );
			$output							        = ob_get_contents();
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
	}