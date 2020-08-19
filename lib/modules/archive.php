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

class archive extends sv_content {
	protected $post_type = '';

	public function init() {
		$this->set_is_child_module()
			->load_settings()
			->register_scripts()
			->set_section_title( __( 'Archive', 'sv100' ) )
			->set_section_desc( __( 'Archive settings', 'sv100' ) )
			->set_section_type( 'settings' )
			->set_section_template_path( $this->get_path( 'lib/backend/tpl/archives.php' ) )
			->set_section_order(33)
			->get_root()
			->add_section( $this );
	}

	protected function load_settings(): sv_content {
		// ### Post Listing Settings ###
		//  List - Title
		$this->get_setting( 'font_family_title_list' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

			$this->get_setting( 'font_size_title_list' )
				 ->set_title( __( 'Font Size', 'sv100' ) )
				 ->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				 ->set_default_value( 32 )
				 ->load_type( 'number' );

			$this->get_setting( 'line_height_title_list' )
				 ->set_title( __( 'Line Height', 'sv100' ) )
				 ->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				 ->set_default_value( 1.3 )
				 ->load_type( 'text' );

			$this->get_setting( 'text_color_title_list' )
				 ->set_title( __( 'Text Color', 'sv100' ) )
				 ->set_default_value( '#1e1e1e' )
				 ->load_type( 'color' );

		// List - Excerpt
		$this->get_setting( 'font_family_excerpt_list' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_excerpt_list' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_excerpt_list' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_excerpt_list' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->load_type( 'color' );

		// List - Read More
		$this->get_setting( 'font_family_more_list' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_more_list' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_more_list' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_more_list' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->load_type( 'color' );

		$this->get_setting( 'text_more_list' )
			->set_title( __( 'Read more text', 'sv100' ) )
			->set_default_value( __( 'Read more', 'sv100' ) )
			->load_type( 'text' );

		// List - Colors Settings
		$this->get_setting( 'highlight_color_list' )
				 ->set_title( __( 'Highlight Color', 'sv100' ) )
				 ->set_description( __( 'This color is used for highlighting elements, like links on hover/focus.', 'sv100' ) )
				 ->set_default_value( '#328ce6' )
				 ->load_type( 'color' );

		$this->get_setting( 'text_color_info_list' )
			->set_title( __( 'Info text color', 'sv100' ) )
			->set_description( __( 'Color for the post info.', 'sv100' ) )
			->set_default_value( '#828282' )
			->load_type( 'color' );

		// Masonry - Title
		$this->get_setting( 'font_family_title_masonry' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_title_masonry' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 32 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_title_masonry' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_title_masonry' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->load_type( 'color' );

		// Masonry - Excerpt
		$this->get_setting( 'font_family_excerpt_masonry' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_excerpt_masonry' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_excerpt_masonry' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_excerpt_masonry' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->load_type( 'color' );

		$this->get_setting( 'text_more_list' )
			->set_title( __( 'Read more text', 'sv100' ) )
			->set_default_value( __( 'Read more', 'sv100' ) )
			->load_type( 'text' );

		// Masonry - Read More
		$this->get_setting( 'font_family_more_masonry' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_more_masonry' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_more_masonry' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_more_masonry' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->load_type( 'color' );

		$this->get_setting( 'text_more_masonry' )
			->set_title( __( 'Read more text', 'sv100' ) )
			->set_default_value( __( 'Read more', 'sv100' ) )
			->load_type( 'text' );

		// Masonry - Colors Settings
		$this->get_setting( 'highlight_color_masonry' )
				 ->set_title( __( 'Highlight Color', 'sv100' ) )
				 ->set_description( __( 'This color is used for highlighting elements, like links on hover/focus.', 'sv100' ) )
				 ->set_default_value( '#328ce6' )
				 ->load_type( 'color' );

		$this->get_setting( 'bg_color_masonry' )
				 ->set_title( __( 'Background Color', 'sv100' ) )
				 ->set_default_value( '#f5f5f5' )
				 ->load_type( 'color' );

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
		$this->get_setting( 'font_family_title_grid' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_title_grid' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 32 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_title_grid' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_title_grid' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#ffffff' )
				->load_type( 'color' );

		// Grid - Excerpt
		$this->get_setting( 'font_family_excerpt_grid' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

		$this->get_setting( 'font_size_excerpt_grid' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->load_type( 'number' );

		$this->get_setting( 'line_height_excerpt_grid' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_default_value( 1.3 )
				->load_type( 'text' );

		$this->get_setting( 'text_color_excerpt_grid' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#ffffff' )
				->load_type( 'color' );

		// Grid - Color Settings
		$this->get_setting( 'highlight_color_grid' )
			->set_title( __( 'Highlight Color', 'sv100' ) )
			->set_description( __( 'This color is used for highlighting elements, like links on hover/focus.', 'sv100' ) )
			->set_default_value( '#1e1e1e' )
			->load_type( 'color' );

		$this->get_setting( 'bg_color_grid' )
			->set_title( __( 'Background Color', 'sv100' ) )
			->set_default_value( '#828282' )
			->load_type( 'color' );

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
				'masonry' 		=> __( 'Masonry', 'sv100' ),
				'grid' 		=> __( 'Grid', 'sv100' ),
			))
			->load_type( 'select' );

		$this->get_setting( 'search_theme' )
			->set_title( __( 'Search listing', 'sv100' ) )
			->set_description( __( 'Defines how the search results will be displayed.', 'sv100' ) )
			->set_options( array(
				'list' 		=> __( 'List (Default)', 'sv100' ),
				'masonry' 		=> __( 'Masonry', 'sv100' ),
				'grid' 		=> __( 'Grid', 'sv100' ),
			))
			->load_type( 'select' );

		$this->get_setting( 'category_theme' )
			->set_title( __( 'Category listing', 'sv100' ) )
			->set_description( __( 'Defines how posts filtered by category will be displayed.', 'sv100' ) )
			->set_options( array(
				'list' 		=> __( 'List (Default)', 'sv100' ),
				'masonry' 		=> __( 'Masonry', 'sv100' ),
				'grid' 		=> __( 'Grid', 'sv100' ),
			))
			->load_type( 'select' );

		$this->get_setting( 'tag_theme' )
			->set_title( __( 'Tag listing', 'sv100' ) )
			->set_description( __( 'Defines how posts filtered by tags will be displayed.', 'sv100' ) )
			->set_options( array(
				'list' 		=> __( 'List (Default)', 'sv100' ),
				'masonry' 		=> __( 'Masonry', 'sv100' ),
				'grid' 		=> __( 'Grid', 'sv100' ),
			))
			->load_type( 'select' );

		$this->get_setting( 'author_theme' )
			->set_title( __( 'Author listing', 'sv100' ) )
			->set_description( __( 'Defines how posts created by an author will be displayed.', 'sv100' ) )
			->set_options( array(
				'list' 		=> __( 'List (Default)', 'sv100' ),
				'masonry' 		=> __( 'Masonry', 'sv100' ),
				'grid' 		=> __( 'Grid', 'sv100' ),
			))
			->load_type( 'select' );

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

		return $this;
	}

	protected function register_scripts(): sv_content {
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

		return $this;
	}

	// Handles the routing of the templates
	protected function router( array $settings ): string {
		$template = false;

		if ( have_posts() ) {
			// Home: The last posts
			if ( is_front_page() && is_home() ) {

				$archive_theme = 'archive_theme_';
				$archive_theme .=
					$this->get_setting( 'home_theme' )->get_data()
						? $this->get_setting( 'home_theme' )->get_data()
						: 'list';

				$template = array(
					'path'      => 'archive/home',
					'scripts'   => array(
						$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
						$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
						$this->get_script( 'archive_home' )->set_inline( $settings['inline'] ),
					),
				);
			}
			// Template Management
			elseif ( $settings['template'] ) {
				switch ( $settings['template'] ) {
					case 'archive':
						$template = array(
							'path'      => 'archive/default',
							'scripts'   => array(
								$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_theme_list' )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_archive' )->set_inline( $settings['inline'] ),
							),
						);
						break;
					case 'category':
						$archive_theme = 'archive_theme_';
						$archive_theme .=
							$this->get_setting( 'category_theme' )->get_data()
								? $this->get_setting( 'category_theme' )->get_data()
								: 'list';

						$template = array(
							'path'      => 'archive/category',
							'scripts'   => array(
								$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
								$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_category' )->set_inline( $settings['inline'] ),
							),
						);
						break;
					case 'tag':
						$archive_theme = 'archive_theme_';
						$archive_theme .=
							$this->get_setting( 'tag_theme' )->get_data()
								? $this->get_setting( 'tag_theme' )->get_data()
								: 'list';

						$template = array(
							'path'      => 'archive/tag',
							'scripts'   => array(
								$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
								$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_tag' )->set_inline( $settings['inline'] ),
							),
						);
						break;
					case 'search':
						$archive_theme = 'archive_theme_';
						$archive_theme .=
							$this->get_setting( 'search_theme' )->get_data()
								? $this->get_setting( 'search_theme' )->get_data()
								: 'list';

						$template = array(
							'path'      => 'archive/search',
							'scripts'   => array(
								$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
								$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_search' )->set_inline( $settings['inline'] ),
							),
						);
						break;
					case 'author':
						$archive_theme = 'archive_theme_';
						$archive_theme .=
							$this->get_setting( 'author_theme' )->get_data()
								? $this->get_setting( 'author_theme' )->get_data()
								: 'list';

						$template = array(
							'path'      => 'archive/author',
							'scripts'   => array(
								$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
								$this->get_script( $archive_theme )->set_inline( $settings['inline'] ),
								$this->get_script( 'archive_author' )->set_inline( $settings['inline'] ),
							),
						);
						break;
				}
			}
		} else {
			$template = array(
				'path'      => 'archive/no_post',
				'scripts'   => array(
					$this->get_script( 'archive_common' )->set_inline( $settings['inline'] ),
					$this->get_script( 'archive_no_post' )->set_inline( $settings['inline'] ),
				),
			);
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
			return $this->get_prefix().': '.__('No Template found.', 'sv100');
		}
	}
}