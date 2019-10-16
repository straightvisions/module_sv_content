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
	
	class sv_content_metabox extends sv_content {
		protected $post_type		= '';

		public function init() {
			if(is_admin()){
				add_action('current_screen', array($this, 'admin_post_type'));
			}else{
				add_action('wp', array($this, 'wp_init'));
			}
		}
		public function admin_post_type(): sv_content{
			if(is_object(get_current_screen()) && isset(get_current_screen()->post_type)){
				$this->post_type		= get_current_screen()->post_type;
			}
			$this->load_settings()->load_metabox();
			
			return $this;
		}
		public function wp_init(){
			$this->load_settings()->load_metabox();
		}
		public function load_settings(): sv_content{
			$states = array(
				''				=> __('Default', 'sv100'),
				'hidden'		=> __('Hidden', 'sv100'),
				'show'			=> __('Show', 'sv100')
			);


			$this->get_setting( 'show_date' )
				 ->set_title( __( 'Show date', 'sv100' ) )
				 ->set_default_value(
					 (get_post_type() && $this->get_parent()->get_setting( 'show_date_' . get_post_type() )->get_type())
						? $this->get_parent()->get_setting( 'show_date_' . get_post_type() )->run_type()->get_data()
						: false
				 )
				 ->load_type( 'radio' )
				->set_options($states);

			$this->get_setting( 'show_date_modified' )
				->set_title( __( 'Show modified date', 'sv100' ) )
				->set_default_value(
					(get_post_type() && $this->get_parent()->get_setting( 'show_date_modified_' . get_post_type() )->get_type())
						? $this->get_parent()->get_setting( 'show_date_modified_' . get_post_type() )->run_type()->get_data()
						: false
				)
				->load_type( 'radio' )
				->set_options($states);

			$this->get_setting( 'show_author' )
				 ->set_title( __( 'Show author', 'sv100' ) )
				->set_default_value(
					(get_post_type() && $this->get_parent()->get_setting( 'show_author_' . get_post_type() )->get_type())
							? $this->get_parent()->get_setting('show_author_'.get_post_type())->run_type()->get_data()
						: false
				)
				->load_type( 'radio' )
				->set_options($states);

			$this->get_setting( 'show_sidebar_right' )
				 ->set_title( __( 'Show right sidebar', 'sv100' ) )
				 ->set_default_value(
					 (get_post_type() && $this->get_parent()->get_setting( 'show_sidebar_right_' . get_post_type() )->get_type())
							 ? $this->get_parent()->get_setting('show_sidebar_right_'.get_post_type())->run_type()->get_data()
						: false
				 )
				->load_type( 'radio' )
				->set_options($states);

			$this->get_setting( 'show_sidebar_bottom' )
				 ->set_title( __( 'Show bottom sidebar', 'sv100' ) )
				 ->set_default_value(
					 (get_post_type() && $this->get_parent()->get_setting( 'show_sidebar_bottom_' . get_post_type() )->get_type())
							 ? $this->get_parent()->get_setting('show_sidebar_bottom_'.get_post_type())->run_type()->get_data()
						: false
				 )
				->load_type( 'radio' )
				->set_options($states);

			$this->get_setting( 'header_content_override' )
				->set_title( __( 'Override Default Header Content Settings', 'sv100' ) )
				->set_default_value(0)
				->load_type( 'radio' )
				->set_options(array(__('no','sv100'), __('yes','sv100')));

			$this->get_setting( 'header_content_overlay_color' )
				->set_title( $this->get_parent()->get_setting('header_content_overlay_color')->get_title() )
				->set_description( $this->get_parent()->get_setting('header_content_overlay_color')->get_description() )
				->set_default_value($this->get_parent()->get_setting('header_content_overlay_color')->run_type()->get_data())
				->load_type( 'color' );

			$this->get_setting('header_content_overlay_opacity')
				->set_title( $this->get_parent()->get_setting('header_content_overlay_opacity')->get_title() )
				->set_description( $this->get_parent()->get_setting('header_content_overlay_opacity')->get_description() )
				->set_default_value( $this->get_parent()->get_setting('header_content_overlay_opacity')->run_type()->get_data() )
				->set_min( 0 )
				->set_max( 100 )
				->load_type( 'number' );

			$this->get_setting( 'text_color_title' )
				->set_title( __('Header Title: ','sv100').$this->get_parent()->get_setting('text_color_title')->get_title() )
				->set_description( $this->get_parent()->get_setting('text_color_title')->get_description() )
				->set_default_value($this->get_parent()->get_setting('text_color_title')->run_type()->get_data())
				->load_type( 'color' );

			$this->get_setting( 'text_color_excerpt' )
				->set_title( __('Header Excerpt: ','sv100').$this->get_parent()->get_setting('text_color_excerpt')->get_title() )
				->set_description( $this->get_parent()->get_setting('text_color_excerpt')->get_description() )
				->set_default_value($this->get_parent()->get_setting('text_color_excerpt')->run_type()->get_data())
				->load_type( 'color' );

			$this->get_setting( 'text_color_info' )
				->set_title( $this->get_parent()->get_setting('text_color_info')->get_title() )
				->set_description( $this->get_parent()->get_setting('text_color_info')->get_description() )
				->set_default_value($this->get_parent()->get_setting('text_color_info')->run_type()->get_data())
				->load_type( 'color' );
			
			$this->get_setting( 'hide_header' )
				 ->set_title( __('Hide Header', 'sv100') )
				 ->set_description( __('No Content Header will be shown on this post.', 'sv100') )
				 ->load_type( 'checkbox' );
			
			return $this;
		}
		public function load_metabox(): sv_content{
			static::$metabox
				->create( $this )
				->set_title( __('SV100', 'sv100') );
			
			return $this;
		}
	}