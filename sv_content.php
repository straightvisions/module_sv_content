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
		public $content_metabox = false;
		
		public function init() {
			require_once($this->get_path('lib/modules/metabox.php'));
			$this->content_metabox				= new sv_content_metabox();
			$this->content_metabox->set_root( $this->get_root() );
			$this->content_metabox->set_parent( $this );
			$this->content_metabox->init();
			
			$this->set_module_title( 'SV Content' )
				 ->set_module_desc( __( 'Manages content output.', 'sv100' ) )
				 ->add_theme_support()
				 ->load_settings()
				 ->register_scripts()
				 ->register_sidebars()
				 ->set_section_title( __( 'Content', 'sv100' ) )
				 ->set_section_desc( __( 'Content settings', 'sv100' ) )
				 ->set_section_type( 'settings' )
				 ->set_section_template_path( $this->get_path( 'lib/backend/tpl/settings.php' ) )
				 ->get_root()
				 ->add_section( $this );
			
			// Action Hooks
			add_action( 'wp_print_styles', array( $this, 'wp_print_styles' ), 100 );
			add_action( 'wp', array( $this, 'load_gutenberg_css' ) );
		}
		
		protected function add_theme_support(): sv_content {
			add_theme_support( 'align-wide' );
			add_theme_support( 'editor-font-sizes', array(
				array(
					'name' => __( 'Small', 'sv100' ),
					'size' => 14,
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
			$this->get_settings_component( 'text_color_h1','text_color', '#1e1e1e' );
			
			// H1 (Mobile)
			$this->get_settings_component( 'font_size_h1_mobile','font_size', 38 );
			$this->get_settings_component( 'line_height_h1_mobile','line_height', 57 );
			
			// H2
			$this->get_settings_component( 'font_family_h2','font_family' );
			$this->get_settings_component( 'font_size_h2','font_size', 40 );
			$this->get_settings_component( 'line_height_h2','line_height', 60 );
			$this->get_settings_component( 'text_color_h2','text_color', '#1e1e1e' );
			
			// H2 (Mobile)
			$this->get_settings_component( 'font_size_h2_mobile','font_size', 32 );
			$this->get_settings_component( 'line_height_h2_mobile','line_height', 48 );
			
			// H3
			$this->get_settings_component( 'font_family_h3','font_family' );
			$this->get_settings_component( 'font_size_h3','font_size', 32 );
			$this->get_settings_component( 'line_height_h3','line_height', 48 );
			$this->get_settings_component( 'text_color_h3','text_color', '#1e1e1e' );
			
			// H3 (Mobile)
			$this->get_settings_component( 'font_size_h3_mobile','font_size', 24 );
			$this->get_settings_component( 'line_height_h3_mobile','line_height', 36 );
			
			// H4
			$this->get_settings_component( 'font_family_h4','font_family' );
			$this->get_settings_component( 'font_size_h4','font_size', 24 );
			$this->get_settings_component( 'line_height_h4','line_height', 36 );
			$this->get_settings_component( 'text_color_h4','text_color', '#1e1e1e' );
			
			// H4 (Mobile)
			$this->get_settings_component( 'font_size_h4_mobile','font_size', 19 );
			$this->get_settings_component( 'line_height_h4_mobile','line_height', 29 );
			
			// H5
			$this->get_settings_component( 'font_family_h5','font_family' );
			$this->get_settings_component( 'font_size_h5','font_size', 19 );
			$this->get_settings_component( 'line_height_h5','line_height', 29 );
			$this->get_settings_component( 'text_color_h5','text_color', '#1e1e1e' );
			
			// H5 (Mobile)
			$this->get_settings_component( 'font_size_h5_mobile','font_size', 16 );
			$this->get_settings_component( 'line_height_h5_mobile','line_height', 23 );
			
			// H6
			$this->get_settings_component( 'font_family_h6','font_family' );
			$this->get_settings_component( 'font_size_h6','font_size', 16 );
			$this->get_settings_component( 'line_height_h6','line_height', 23 );
			$this->get_settings_component( 'text_color_h6','text_color', '#1e1e1e' );
			
			// H6 (Mobile)
			$this->get_settings_component( 'font_size_h6_mobile','font_size', 14 );
			$this->get_settings_component( 'line_height_h6_mobile','line_height', 21 );
			
			// Color Settings
			$this->get_settings_component( 'highlight_color','highlight_color', '#328ce6' );
			
			// ### Content Header Settings ###
			// Alignment
			$this->get_setting( 'text_align_title' )
			     ->set_title( __( 'Text Alignment', 'sv100' ) )
			     ->set_description( __( 'Defines the alignment of the title inside the content header.', 'sv100' ) )
			     ->set_options( array(
				     'left'      => __( 'Left', 'sv100' ),
				     'center'    => __( 'Center', 'sv100' ),
				     'right'     => __( 'Right', 'sv100' )
			     ) )
			     ->set_default_value( 'center' )
			     ->load_type( 'select' );

			$this->get_setting( 'block_align_title' )
			     ->set_title( __( 'Block Alignment', 'sv100' ) )
			     ->set_description( __( 'Defines the alignment of the title block inside the content header.', 'sv100' ) )
			     ->set_options( array(
				     'left'      => __( 'Left', 'sv100' ),
				     'center'    => __( 'Center', 'sv100' ),
				     'right'     => __( 'Right', 'sv100' )
			     ) )
			     ->set_default_value( 'center' )
			     ->load_type( 'select' );

			$this->get_setting( 'text_align_excerpt' )
			     ->set_title( __( 'Text Alignment', 'sv100' ) )
			     ->set_description( __( 'Defines the alignment of the excerpt inside the content header.', 'sv100' ) )
			     ->set_options( array(
				     'left'      => __( 'Left', 'sv100' ),
				     'center'    => __( 'Center', 'sv100' ),
				     'right'     => __( 'Right', 'sv100' )
			     ) )
			     ->set_default_value( 'left' )
			     ->load_type( 'select' );

			$this->get_setting( 'block_align_excerpt' )
			     ->set_title( __( 'Block Alignment', 'sv100' ) )
			     ->set_description( __( 'Defines the alignment of the excerpt block inside the content header.', 'sv100' ) )
			     ->set_options( array(
			     	'left'      => __( 'Left', 'sv100' ),
			        'center'    => __( 'Center', 'sv100' ),
			        'right'     => __( 'Right', 'sv100' )
			     ) )
			     ->set_default_value( 'center' )
			     ->load_type( 'select' );

			// Title
			$this->get_settings_component( 'font_family_title','font_family' );
			$this->get_settings_component( 'font_size_title','font_size', 48 );
			$this->get_settings_component( 'line_height_title','line_height', 72 );
			$this->get_settings_component( 'text_color_title','text_color', '#1e1e1e' );
			
			// Title (Mobile)
			$this->get_settings_component( 'font_size_title_mobile','font_size', 38 );
			$this->get_settings_component( 'line_height_title_mobile','line_height', 57 );
			
			// Excerpt
			$this->get_settings_component( 'font_family_excerpt','font_family' );
			$this->get_settings_component( 'font_size_excerpt','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt','text_color', '#828282' );
			
			// Excerpt (Mobile)
			$this->get_settings_component( 'font_size_excerpt_mobile','font_size', 14 );
			$this->get_settings_component( 'line_height_excerpt_mobile','line_height', 21 );
			
			// Color Settings
			$this->get_settings_component( 'bg_color','background_color', '#f5f5f5' );
			
			$this->get_setting( 'text_color_info' )
				 ->set_title( __( 'Author & Date color', 'sv100' ) )
				 ->set_description( __( 'Color for the post author and date in the header.', 'sv100' ) )
				 ->set_default_value( '#828282' )
				 ->load_type( 'color' );
			
			// Color Settings with Thumbnail
			$this->get_settings_component( 'bg_color_image','background_color', '#1e1e1e' );
			
			$this->get_setting( 'text_color_title_image' )
				 ->set_title( __( 'Title color', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'text_color_excerpt_image' )
				 ->set_title( __( 'Excerpt color', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'text_color_info_image' )
				 ->set_title( __( 'Author & Date color', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			// ### Post Listing Settings ###
			// Pagination Settings
			$this->get_settings_component( 'font_family_pagination','font_family' );
			$this->get_settings_component( 'font_size_pagination','font_size', 16 );
			$this->get_settings_component( 'line_height_pagination','line_height', 23 );
			$this->get_settings_component( 'text_color_pagination','text_color', '#1e1e1e' );
			$this->get_settings_component( 'text_deco_pagination','text_decoration', 'none' );
			$this->get_setting( 'text_deco_pagination_color' )
				 ->set_title( __( 'Text underline color', 'sv100' ) )
				 ->set_description( __( 'Set the color of the underline.' ) )
				 ->set_default_value( '#328ce6' )
				 ->load_type( 'color' );
			$this->get_setting( 'text_deco_pagination_thickness' )
				 ->set_title( __( 'Text underline thickness', 'sv100' ) )
				 ->set_description( __( 'Set the thickness of the underline, in pixel.' ) )
				 ->set_default_value( 2 )
				 ->set_min( 1 )
				 ->load_type( 'number' );
			
			// Pagination Settings (Hover/Focus)
			$this->get_settings_component( 'text_color_pagination_hover','text_color', '#1e1e1e' );
			$this->get_settings_component( 'text_deco_pagination_hover','text_decoration', 'underline' );
			$this->get_setting( 'text_deco_pagination_color_hover' )
				 ->set_title( __( 'Text underline color (Hover/Focus)', 'sv100' ) )
				 ->set_description( __( 'Set the color of the underline.' ) )
				 ->set_default_value( '#328ce6' )
				 ->load_type( 'color' );
			$this->get_setting( 'text_deco_pagination_thickness_hover' )
				 ->set_title( __( 'Text underline thickness (Hover/Focus)', 'sv100' ) )
				 ->set_description( __( 'Set the thickness of the underline, in pixel.' ) )
				 ->set_default_value( 2 )
				 ->set_min( 1 )
				 ->load_type( 'number' );
			
			//  List - Title
			$this->get_settings_component( 'font_family_title_list','font_family' );
			$this->get_settings_component( 'font_size_title_list','font_size', 32 );
			$this->get_settings_component( 'line_height_title_list','line_height', 48 );
			$this->get_settings_component( 'text_color_title_list','text_color', '#1e1e1e' );
			
			// List - Excerpt
			$this->get_settings_component( 'font_family_excerpt_list','font_family' );
			$this->get_settings_component( 'font_size_excerpt_list','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_list','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_list','text_color', '#1e1e1e' );
			
			// List - Read More
			$this->get_settings_component( 'font_family_more_list','font_family' );
			$this->get_settings_component( 'font_size_more_list','font_size', 16 );
			$this->get_settings_component( 'line_height_more_list','line_height', 23 );
			$this->get_settings_component( 'text_color_more_list','text_color', '#1e1e1e' );
			
			$this->get_setting( 'text_more_list' )
				 ->set_title( __( 'Read more text', 'sv100' ) )
				 ->set_default_value( __( 'Read more', 'sv100' ) )
				 ->load_type( 'text' );
			
			// List - Colors Settings
			$this->get_settings_component( 'highlight_color_list','highlight_color', '#328ce6' );
			
			$this->get_setting( 'text_color_info_list' )
				 ->set_title( __( 'Info text color', 'sv100' ) )
				 ->set_description( __( 'Color for the post info.', 'sv100' ) )
				 ->set_default_value( '#828282' )
				 ->load_type( 'color' );
			
			// Masonry - Title
			$this->get_settings_component( 'font_family_title_masonry','font_family' );
			$this->get_settings_component( 'font_size_title_masonry','font_size', 32 );
			$this->get_settings_component( 'line_height_title_masonry','line_height', 48 );
			$this->get_settings_component( 'text_color_title_masonry','text_color', '#1e1e1e' );
			
			// Masonry - Excerpt
			$this->get_settings_component( 'font_family_excerpt_masonry','font_family' );
			$this->get_settings_component( 'font_size_excerpt_masonry','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_masonry','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_masonry','text_color', '#1e1e1e' );
			
			// Masonry - Read More
			$this->get_settings_component( 'font_family_more_masonry','font_family' );
			$this->get_settings_component( 'font_size_more_masonry','font_size', 16 );
			$this->get_settings_component( 'line_height_more_masonry','line_height', 23 );
			$this->get_settings_component( 'text_color_more_masonry','text_color', '#1e1e1e' );
			
			$this->get_setting( 'text_more_masonry' )
				 ->set_title( __( 'Read more text', 'sv100' ) )
				 ->set_default_value( __( 'Read more', 'sv100' ) )
				 ->load_type( 'text' );
			
			// Masonry - Colors Settings
			$this->get_settings_component( 'highlight_color_masonry','highlight_color', '#328ce6' );
			$this->get_settings_component( 'bg_color_masonry','background_color', '#f5f5f5' );
			
			$this->get_setting( 'text_color_category_masonry' )
				 ->set_title( __( 'Category text color', 'sv100' ) )
				 ->set_description( __( 'Color for the post categories.', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'bg_color_category_masonry' )
				 ->set_title( __( 'Category background color', 'sv100' ) )
				 ->set_description( __( 'Background color for the post categories.', 'sv100' ) )
				 ->set_default_value( '#1e1e1e' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'text_color_info_masonry' )
				 ->set_title( __( 'Info text color', 'sv100' ) )
				 ->set_description( __( 'Color for the post info.', 'sv100' ) )
				 ->set_default_value( '#828282' )
				 ->load_type( 'color' );
			
			// Grid - Title
			$this->get_settings_component( 'font_family_title_grid','font_family' );
			$this->get_settings_component( 'font_size_title_grid','font_size', 32 );
			$this->get_settings_component( 'line_height_title_grid','line_height', 48 );
			$this->get_settings_component( 'text_color_title_grid','text_color', '#ffffff' );
			
			// Grid - Excerpt
			$this->get_settings_component( 'font_family_excerpt_grid','font_family' );
			$this->get_settings_component( 'font_size_excerpt_grid','font_size', 16 );
			$this->get_settings_component( 'line_height_excerpt_grid','line_height', 23 );
			$this->get_settings_component( 'text_color_excerpt_grid','text_color', '#ffffff' );
			
			// Grid - Color Settings
			$this->get_settings_component( 'highlight_color_grid','highlight_color', '#1e1e1e' );
			$this->get_settings_component( 'bg_color_grid','background_color', '#828282' );
			
			$this->get_setting( 'text_color_category_grid' )
				 ->set_title( __( 'Category text color', 'sv100' ) )
				 ->set_description( __( 'Color for the post categories.', 'sv100' ) )
				 ->set_default_value( '#ffffff' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'bg_color_category_grid' )
				 ->set_title( __( 'Category background color', 'sv100' ) )
				 ->set_description( __( 'Background color for the post categories.', 'sv100' ) )
				 ->set_default_value( '#1e1e1e' )
				 ->load_type( 'color' );
			
			$this->get_setting( 'text_color_info_grid' )
				 ->set_title( __( 'Info text color', 'sv100' ) )
				 ->set_description( __( 'Color for the post info.', 'sv100' ) )
				 ->set_default_value( '#f5f5f5' )
				 ->load_type( 'color' );
			
			// Post Listing Styles
			$this->get_setting( 'home_theme' )
				 ->set_title( __( 'Home listing', 'sv100' ) )
				 ->set_description( __( 'Defines how posts on the homepage will be displayed.', 'sv100' ) )
				 ->set_options( array(
					 'list' 		=> __( 'List (Default)', 'sv100' ),
					 'masonry' 	=> __( 'Masonry', 'sv100' ),
					 'grid' 		=> __( 'Grid', 'sv100' ),
				 ))
				 ->load_type( 'select' );
			
			$this->get_setting( 'search_theme' )
				 ->set_title( __( 'Search listing', 'sv100' ) )
				 ->set_description( __( 'Defines how the search results will be displayed.', 'sv100' ) )
				 ->set_options( array(
					 'list' 		=> __( 'List (Default)', 'sv100' ),
					 'masonry' 	=> __( 'Masonry', 'sv100' ),
					 'grid' 		=> __( 'Grid', 'sv100' ),
				 ))
				 ->load_type( 'select' );
			
			$this->get_setting( 'category_theme' )
				 ->set_title( __( 'Category listing', 'sv100' ) )
				 ->set_description( __( 'Defines how posts filtered by category will be displayed.', 'sv100' ) )
				 ->set_options( array(
					 'list' 		=> __( 'List (Default)', 'sv100' ),
					 'masonry' 	=> __( 'Masonry', 'sv100' ),
					 'grid' 		=> __( 'Grid', 'sv100' ),
				 ))
				 ->load_type( 'select' );
			
			$this->get_setting( 'tag_theme' )
				 ->set_title( __( 'Tag listing', 'sv100' ) )
				 ->set_description( __( 'Defines how posts filtered by tags will be displayed.', 'sv100' ) )
				 ->set_options( array(
					 'list' 		=> __( 'List (Default)', 'sv100' ),
					 'masonry' 	=> __( 'Masonry', 'sv100' ),
					 'grid' 		=> __( 'Grid', 'sv100' ),
				 ))
				 ->load_type( 'select' );
			
			$this->get_setting( 'author_theme' )
				 ->set_title( __( 'Author listing', 'sv100' ) )
				 ->set_description( __( 'Defines how posts created by an author will be displayed.', 'sv100' ) )
				 ->set_options( array(
					 'list' 		=> __( 'List (Default)', 'sv100' ),
					 'masonry' 	=> __( 'Masonry', 'sv100' ),
					 'grid' 		=> __( 'Grid', 'sv100' ),
				 ))
				 ->load_type( 'select' );
			
			// ### Widgets Settings ###
			// Widgets Title
			$this->get_settings_component( 'font_family_widget_title','font_family' );
			$this->get_settings_component( 'font_size_widget_title','font_size', 32 );
			$this->get_settings_component( 'text_color_widget_title','text_color', '#828282' );
			$this->get_settings_component( 'line_height_widget_title','line_height', 48 );
			
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
			
			// ### Date Settings ###
			// Post
			$this->get_setting( 'show_date_post' )
				 ->set_title( __( 'Show date on posts', 'sv100' ) )
				 ->set_default_value( 1 )
				 ->load_type( 'checkbox' );
			
			// Page
			$this->get_setting( 'show_date_page' )
				 ->set_title( __( 'Show date on pages', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
			// ### Author Settings ###
			// Post
			$this->get_setting( 'show_author_post' )
				 ->set_title( __( 'Show author on posts', 'sv100' ) )
				 ->set_default_value( 1 )
				 ->load_type( 'checkbox' );
			
			// Page
			$this->get_setting( 'show_author_page' )
				 ->set_title( __( 'Show author on pages', 'sv100' ) )
				 ->set_default_value( 0 )
				 ->load_type( 'checkbox' );
			
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
			// Styles - Common
			$this->get_script( 'form' )
				 ->set_path( 'lib/frontend/css/form.css' )
				 ->set_inline( true );
			
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
				 ->set_inline( true );
			
			$this->get_script( 'content_gutenberg' )
				 ->set_path( 'lib/frontend/css/content/gutenberg.css' )
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
			
			// Styles - Archive
			$this->get_script( 'archive_common' )
				 ->set_path( 'lib/frontend/css/archive/common.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_home' )
				 ->set_path( 'lib/frontend/css/archive/home.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_archive' )
				 ->set_path( 'lib/frontend/css/archive/archive.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_category' )
				 ->set_path( 'lib/frontend/css/archive/category.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_tag' )
				 ->set_path( 'lib/frontend/css/archive/tag.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_author' )
				 ->set_path( 'lib/frontend/css/archive/author.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_search' )
				 ->set_path( 'lib/frontend/css/archive/search.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_no_post' )
				 ->set_path( 'lib/frontend/css/archive/no_post.css' )
				 ->set_inline( true );
			
			// Styles - Archive Themes
			$this->get_script( 'archive_theme_list' )
				 ->set_path( 'lib/frontend/css/archive/themes/list.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_theme_masonry' )
				 ->set_path( 'lib/frontend/css/archive/themes/masonry.css' )
				 ->set_inline( true );
			
			$this->get_script( 'archive_theme_grid' )
				 ->set_path( 'lib/frontend/css/archive/themes/grid.css' )
				 ->set_inline( true );
			
			// Gutenberg Default Styles
			$this->get_script( 'bodhi-svgs-attachment' )
				 ->set_path( ABSPATH . '/wp-includes/css/dist/block-library/style.min.css', true )
				 ->set_inline( true );
			
			// Inline Config
			$this->get_script( 'inline_config' )
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
					 ->create( $this )
					 ->set_ID( 'frontpage_right' )
					 ->set_title( __( 'Frontpage - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on the frontpage/landingpage, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'frontpage_bottom' )
					 ->set_title( __( 'Frontpage - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on the frontpage/landingpage, below the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'page_right' )
					 ->set_title( __( 'Pages - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on pages, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'page_bottom' )
					 ->set_title( __( 'Pages - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on pages, below the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'post_right' )
					 ->set_title( __( 'Posts - right', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on posts, next to the content.', 'sv100' ) )
					 ->load_sidebar()
					 ->create( $this )
					 ->set_ID( 'post_bottom' )
					 ->set_title( __( 'Posts - bottom', 'sv100' ) )
					 ->set_desc( __( 'Widgets in this sidebar will be shown on posts, below the content.', 'sv100' ) )
					 ->load_sidebar();
			}
			
			return $this;
		}
		
		public function wp_print_styles() {
			// Gutenberg: load Styles inline for Pagespeed purposes
			wp_dequeue_style( 'wp-block-library' );
		}
		
		public function load_gutenberg_css(): sv_content {
			if ( is_single() || is_page() ) {
				$this->get_script( 'bodhi-svgs-attachment' )
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
			if ( have_posts() ) {
				$slider_support = has_filter( 'sv100_post_header_slider' );
				
				// Home: The last posts
				if ( is_front_page() && is_home() ) {
					$archive_theme = 'archive_theme_';
					$archive_theme .=
						$this->get_setting( 'home_theme' )->run_type()->get_data()
							? $this->get_setting( 'home_theme' )->run_type()->get_data()
							: 'list';
					
					$template = array(
						'path'      => 'archive/home',
						'scripts'   => array(
							$this->get_script( 'form' )->set_inline( $settings['inline'] ),
							$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
							$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
							$this->get_script( 'archive_home' )->set_inline( $settings['inline'] ),
						),
					);
					
					if ( $slider_support && $this->get_setting( 'home_slider' )->run_type()->get_data() === '1' ) {
						$template['header'] = 'slider';
					}
				}
				
				// Home: A static page
				elseif ( ( is_front_page() && !is_home() ) || ( ! is_front_page() && is_home() ) ) {
					$template = array(
						'path'      => 'content/frontpage',
						'scripts'   => array(
							$this->get_script( 'form' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
							$this->get_script( 'content_frontpage' )->set_inline( $settings['inline'] ),
						),
					);
					
					if ( $slider_support ) {
						$template[ 'header' ] = 'slider';
					}
				}
				
				// Template Management
				elseif ( $settings['template'] ) {
					switch ( $settings['template'] ) {
						case 'single':
							$template = array(
								'path'      => 'content/single',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_single' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'single_slider':
							$template = array(
								'path'      => 'content/single',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_single' )->set_inline( $settings['inline'] ),
								),
							);
							
							if ( $slider_support ) {
								$template[ 'header' ] = 'slider';
							}
							break;
						case 'page':
							$template = array(
								'path'      => 'content/page',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'page_slider':
							$template = array(
								'path'      => 'content/page',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
									$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
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
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_theme_list' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_archive' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'category':
							$archive_theme = 'archive_theme_';
							$archive_theme .=
								$this->get_setting( 'category_theme' )->run_type()->get_data()
									? $this->get_setting( 'category_theme' )->run_type()->get_data()
									: 'list';
							
							$template = array(
								'path'      => 'archive/category',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
									$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_category' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'tag':
							$archive_theme = 'archive_theme_';
							$archive_theme .=
								$this->get_setting( 'tag_theme' )->run_type()->get_data()
									? $this->get_setting( 'tag_theme' )->run_type()->get_data()
									: 'list';
							
							$template = array(
								'path'      => 'archive/tag',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
									$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_tag' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'search':
							$archive_theme = 'archive_theme_';
							$archive_theme .=
								$this->get_setting( 'search_theme' )->run_type()->get_data()
									? $this->get_setting( 'search_theme' )->run_type()->get_data()
									: 'list';
							
							$template = array(
								'path'      => 'archive/search',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
									$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_search' )->set_inline( $settings['inline'] ),
								),
							);
							break;
						case 'author':
							$archive_theme = 'archive_theme_';
							$archive_theme .=
								$this->get_setting( 'author_theme' )->run_type()->get_data()
									? $this->get_setting( 'author_theme' )->run_type()->get_data()
									: 'list';
							
							$template = array(
								'path'      => 'archive/author',
								'scripts'   => array(
									$this->get_script( 'form' )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
									$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
									$this->get_script( 'archive_author' )->set_inline( $settings['inline'] ),
								),
							);
							break;
					}
				}
			} elseif ( is_404() ) {
				$template = array(
					'path'      => 'content/404',
					'scripts'   => array(
						$this->get_script( 'form' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_common' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_gutenberg' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_page' )->set_inline( $settings['inline'] ),
						$this->get_script( 'content_404' )->set_inline( $settings['inline'] ),
					),
				);
			} else {
				$template = array(
					'path'      => 'archive/no_post',
					'scripts'   => array(
						$this->get_script( 'form' )->set_inline( $settings['inline'] ),
						$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
						$this->get_script( 'archive_no_post' )->set_inline( $settings['inline'] ),
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
			
			$this->get_script( 'inline_config' )->set_is_enqueued();
			
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
		
		public function show_date(): bool{
			return $this->get_visibility('date');
		}
		
		public function show_author(): bool{
			return $this->get_visibility('author');
		}
		
		public function show_right_sidebar(): bool{
			return $this->get_visibility('sidebar_right');
		}
		
		public function show_bottom_sidebar(): bool{
			return $this->get_visibility('sidebar_bottom');
		}
		public function get_visibility(string $field): int{
			global $post;

			if ( $post ) {
				$metabox_data = get_post_meta( $post->ID, $this->content_metabox->get_setting( 'show_'.$field )->get_prefix( $this->get_setting( 'show_'.$field )->get_ID() ), true );

				if($metabox_data == 'hidden'){
					$data = 0;
				}elseif($metabox_data == 'show'){
					$data = 1;
				}
			}

			if(!isset($data)){
				$data = $this->content_metabox->get_setting('show_'.$field)->run_type()->get_data();
			}

			return boolval($data);
		}
	}