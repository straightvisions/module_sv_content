<?php
namespace sv_100;

/**
 * @version         1.00
 * @author			straightvisions
 * @package			sv_100
 * @copyright		2019 straightvisions GmbH
 * @link			https://straightvisions.com
 * @since			1.0
 * @license			See license.txt or https://straightvisions.com
 */

class sv_content extends init {
	public function __construct() {

	}

	public function init() {
		// Translates the module
		load_theme_textdomain( $this->get_module_name(), $this->get_path( 'languages' ) );

		// Module Info
		$this->set_module_title( 'SV Content' );
		$this->set_module_desc( __( 'This module defines and manages content output, via the "[sv_content]" shortcode.', $this->get_module_name() ) );

		// Section Info
		$this->set_section_title( 'Content' );
		$this->set_section_desc( __( 'Settings', $this->get_module_name() ) );
		$this->set_section_type( 'settings' );
		$this->get_root()->add_section( $this );

		// Load settings, register scripts and sidebars
		$this->add_theme_support()->load_settings()->register_scripts()->register_sidebars();

		// Shortcodes
		add_shortcode( $this->get_module_name(), array( $this, 'shortcode' ) );
	}

	protected function add_theme_support(): sv_content {
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => __( 'Small', $this->get_module_name() ),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => __( 'Normal', $this->get_module_name() ),
				'size' => 16,
				'slug' => 'normal'
			),
			array(
				'name' => __( 'Medium', $this->get_module_name() ),
				'size' => 24,
				'slug' => 'normal'
			),
			array(
				'name' => __( 'Large', $this->get_module_name() ),
				'size' => 32,
				'slug' => 'large'
			),
			array(
				'name' => __( 'Huge', $this->get_module_name() ),
				'size' => 64,
				'slug' => 'huge'
			)
		) );

		return $this;
	}
	
	protected function load_settings(): sv_content {
		$this->s['home_slider'] =
			static::$settings->create( $this )
							 ->set_ID( 'home_slider' )
							 ->set_title( __( 'Home Slider', $this->get_module_name() ) )
							 ->set_description( __( 'Activate or deactivate the slider on the home page.', $this->get_module_name() ) )
							 ->set_default_value( 1 )
							 ->load_type( 'checkbox' );
		
		$this->s['home_slider_transition'] =
			static::$settings->create( $this )
							 ->set_ID( 'home_slider_transition' )
							 ->set_title( __( 'Home Slider - Transition', $this->get_module_name() ) )
							 ->set_description( __( 'Choose a transition style for the slider.', $this->get_module_name() ) )
							 ->set_options( array(
							 	'fade'		=> 'Fade',
								'slide'		=> 'Slide'
							 ) )
							 ->load_type( 'select' );
		
		$this->s['home_slider_max'] =
			static::$settings->create( $this )
							 ->set_ID( 'home_slider_max' )
							 ->set_title( __( 'Home Slider - Max posts', $this->get_module_name() ) )
							 ->set_description( __( 'Set the maximum number of posts that will be shown in the slider.<br>1 = single image', $this->get_module_name() ) )
							 ->set_default_value( 5 )
							 ->set_min( 1 )
							 ->set_max( 20 )
							 ->load_type( 'number' );
		
		$this->s['home_theme'] =
			static::$settings->create( $this )
							 ->set_ID( 'home_theme' )
							 ->set_title( __( 'Home Listing', $this->get_module_name() ) )
							 ->set_description( __( 'Defines how posts on the homepage will be displayed.', $this->get_module_name() ) )
							 ->set_options( array(
								 'list' => __( 'List (Default)', $this->get_module_name() ),
								 'masonry' => __( 'Masonry', $this->get_module_name() ),
								 'grid' => __( 'Grid', $this->get_module_name() ),
							 ))
							 ->load_type( 'select' );
		
		$this->s['category_theme'] =
			static::$settings->create( $this )
							 ->set_ID( 'category_theme' )
							 ->set_title( __( 'Category Listing', $this->get_module_name() ) )
							 ->set_description( __( 'Defines how posts filtered by category will be displayed.', $this->get_module_name() ) )
							 ->set_options( array(
								 'list' => __( 'List (Default)', $this->get_module_name() ),
								 'masonry' => __( 'Masonry', $this->get_module_name() ),
								 'grid' => __( 'Grid', $this->get_module_name() ),
							 ))
							 ->load_type( 'select' );
		
		$this->s['tag_theme'] =
			static::$settings->create( $this )
							 ->set_ID( 'tag_theme' )
							 ->set_title( __( 'Tag Listing', $this->get_module_name() ) )
							 ->set_description( __( 'Defines how posts filtered by tags will be displayed.', $this->get_module_name() ) )
							 ->set_options( array(
								 'list' => __( 'List (Default)', $this->get_module_name() ),
								 'masonry' => __( 'Masonry', $this->get_module_name() ),
								 'grid' => __( 'Grid', $this->get_module_name() ),
							 ))
							 ->load_type( 'select' );
		
		$this->s['author_theme'] =
			static::$settings->create( $this )
							 ->set_ID( 'author_theme' )
							 ->set_title( __( 'Author Listing', $this->get_module_name() ) )
							 ->set_description( __( 'Defines how posts created by an author will be displayed.', $this->get_module_name() ) )
							 ->set_options( array(
								 'list' => __( 'List (Default)', $this->get_module_name() ),
								 'masonry' => __( 'Masonry', $this->get_module_name() ),
								 'grid' => __( 'Grid', $this->get_module_name() ),
							 ))
							 ->load_type( 'select' );
		
		$this->s['search_theme'] =
			static::$settings->create( $this )
							 ->set_ID( 'search_theme' )
							 ->set_title( __( 'Search Listing', $this->get_module_name() ) )
							 ->set_description( __( 'Defines how the search results will be displayed.', $this->get_module_name() ) )
							 ->set_options( array(
								 'list' => __( 'List (Default)', $this->get_module_name() ),
								 'masonry' => __( 'Masonry', $this->get_module_name() ),
								 'grid' => __( 'Grid', $this->get_module_name() ),
							 ))
							 ->load_type( 'select' );
		
		$this->s['404_page'] =
			static::$settings->create( $this )
							 ->set_ID( '404_page' )
							 ->set_title( __( '404 Page', $this->get_module_name() ) )
							 ->set_description( __( 'Select a page for showing custom content in error 404 / not found cases', $this->get_module_name() ) )
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

		return $this;
	}

	protected function register_sidebars(): sv_content {
		if ( isset( $this->get_root()->sv_sidebar ) ) {
			$this->get_root()
				->sv_sidebar
				->create( $this )
				->set_ID( 'frontpage' )
				->set_title( __( 'Sidebar - Frontpage', $this->get_module_name() ) )
				->set_desc( __( 'Widgets in this area will be shown in the sidebar of the frontpage/landingpage.', $this->get_module_name() ) )
				->load_sidebar()
				->create( $this )
				->set_ID( 'page' )
				->set_title( __( 'Sidebar - Pages', $this->get_module_name() ) )
				->set_desc( __( 'Widgets in this area will be shown in the sidebar of a page.', $this->get_module_name() ) )
				->load_sidebar()
				->create( $this )
				->set_ID( 'single' )
				->set_title( __( 'Sidebar - Posts', $this->get_module_name() ) )
				->set_desc( __( 'Widgets in this area will be shown in the sidebar of single posts.', $this->get_module_name() ) )
				->load_sidebar();
		}

		return $this;
	}

	public function shortcode( $settings, $content = '' ): string {
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
			// Home: The last posts
			if ( is_front_page() && is_home() ) {
				$archive_theme = 'archive_theme_';
				$archive_theme .= $this->s['home_theme']->run_type()->get_data()
					? $this->s['home_theme']->run_type()->get_data()
					: 'list';
				
				$template = array(
					'path'      => 'archive/home',
					'header'    => 'home',
					'scripts'   => array(
						$this->scripts_queue['form']->set_inline( $settings['inline'] ),
						$this->scripts_queue['archive_common']->set_inline( $settings['inline'] ),
						$this->scripts_queue[ $archive_theme ]->set_inline( $settings['inline'] ),
						$this->scripts_queue['archive_home']->set_inline( $settings['inline'] ),
					),
				);
			}

			// Home: A static page
			else if ( ( is_front_page() && !is_home() ) || ( !is_front_page() && is_home() ) ) {
				if ( is_page_template( 'page-sidebar.php' ) ) {
					$template = array(
						'path'      => 'content/frontpage_sidebar',
						'header'    => 'frontpage',
						'scripts'   => array(
							$this->scripts_queue['form']->set_inline( $settings['inline'] ),
							$this->scripts_queue['sidebar']->set_inline( $settings['inline'] ),
							$this->scripts_queue[ 'content_common' ]->set_inline( $settings['inline'] ),
							$this->scripts_queue[ 'content_gutenberg' ]->set_inline( $settings['inline'] ),
							$this->scripts_queue[ 'content_page' ]->set_inline( $settings['inline'] ),
							$this->scripts_queue[ 'content_frontpage' ]->set_inline( $settings['inline'] ),
						),
					);
				} else {
					$template = array(
						'path'      => 'content/frontpage',
						'header'    => 'frontpage',
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

		// @filter: sv_100_sv_content_template
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


		// Loads the template
		include ( $this->get_path('lib/frontend/tpl/' . $template['path'] . '.php' ) );

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