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

			return $this;
		}
		public function load_metabox(): sv_content{
			static::$metabox
				->create( $this )
				->set_title( __('SV100', 'sv100') );
			
			return $this;
		}
	}