<?php
	if($this->has_sidebar_content()) {
		$type = is_single() ? 'post' : 'page';
		
		if (
			$this->show_bottom_sidebar()
			&& ! empty(
			$this->get_module( 'sv_sidebar' )
				 ->load( $this->get_prefix($type . '_bottom') )
			)
		) {
			$this->has_sidebar = true;
			$this->get_script( 'sidebar_bottom' )->set_is_enqueued();
			?>
			<aside class="<?php echo $this->get_prefix( 'sidebar_bottom' ); ?>">
				<?php
					echo $this->get_module( 'sv_sidebar' )
							  ->load( $this->get_prefix($type . '_bottom') );
				?>
			</aside>
		<?php }
	}