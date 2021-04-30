<?php

	if($this->has_sidebar_content()) {
		$type = is_single() ? 'post' : 'page';

		if ( $this->show_right_sidebar() ) {
			$this->get_script( 'widgets' )->set_inline( true )->set_is_enqueued();
		}

		if (
			$this->show_right_sidebar()
			&& ! empty(
			$this->get_module( 'sv_sidebar' )
				 ->load( $this->get_prefix($type . '_right') )
			)
		) {
			$this->has_sidebar = true;
			$this->get_script( 'sidebar_right' )->set_is_enqueued();
			?>
			<aside class="<?php echo $this->get_prefix( 'sidebar_right' ); ?>">
				<?php
					echo $this->get_module( 'sv_sidebar' )
							  ->load( $this->get_prefix($type . '_right' ));
				
					if ( $this->get_setting( 'sidebar_right_' . $type . '_sticky' )->get_data() ) {
						$this->get_script( 'sidebar_js' )->set_is_enqueued();
					}
				?>
			</aside>
		<?php }
	}
