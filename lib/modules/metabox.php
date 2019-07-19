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
			if(is_page()) {
				$this->post_type = 'page';
			}elseif(is_single()){
				$this->post_type = 'post';
			}else{
				return;
			}
			
			$this->load_settings()->load_metabox();
		}
		public function get_post_type(): string{
			return $this->post_type;
		}
		public function load_settings(): sv_content{
			global $post;

			$this->get_setting( 'show_date' )
				 ->set_title( __( 'Show Date', 'sv100' ) )
				 ->set_default_value( $this->get_post_type() === 'page' ? $this->get_parent()->get_setting('show_date_page')->run_type()->get_data() : $this->get_parent()->get_setting('show_date_post')->run_type()->get_data() )
				 ->load_type( 'checkbox' );

			if($post) {
				$this->get_setting('show_date')
					->run_type()
					->set_data(get_post_meta($post->ID, $this->get_setting('show_date')->get_prefix($this->get_setting('show_date')->get_ID()), true));
			}

			$this->get_setting( 'show_author' )
				 ->set_title( __( 'Show Author', 'sv100' ) )
				 ->set_default_value( $this->get_post_type() === 'page' ? $this->get_parent()->get_setting('show_author_page')->run_type()->get_data() : $this->get_parent()->get_setting('show_author_post')->run_type()->get_data() )
				 ->load_type( 'checkbox' );

			if($post) {
				$this->get_setting('show_author')
					->run_type()
					->set_data(get_post_meta($post->ID, $this->get_setting('show_author')->get_prefix($this->get_setting('show_author')->get_ID()), true));
			}
			
			return $this;
		}
		public function load_metabox(): sv_content{
			static::$metabox
				->create( $this )
				->set_title( __('SV100') );
			
			return $this;
		}
	}