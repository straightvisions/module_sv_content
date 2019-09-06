<?php
	$type = is_single() ? 'post' : 'page';
	
	if ( $this->show_right_sidebar() ) {
		$this->get_script( 'widgets' )->set_inline( true );
	}
	
	$this->get_script( 'widgets' )->set_is_enqueued();

	if (
		$this->show_right_sidebar()
		 && ! empty(
			$this->get_module( 'sv_sidebar' )
				 ->load( array( 'id' => $this->get_module_name() . '_' . $type . '_right' ) )
		)
	) {
		$this->has_sidebar = true;
		$this->get_script( 'sidebar_right' )->set_is_enqueued();
	?>
	<aside class="<?php echo $this->get_prefix( 'sidebar_right' ); ?>">
		<?php
			echo $this->get_module( 'sv_sidebar' )
					  ->load( array( 'id' => $this->get_module_name() . '_' . $type . '_right' ) );
			
			if ( $this->get_setting( 'sidebar_right_' . $type . '_sticky' )->run_type()->get_data() ) {
				$this->get_script( 'sidebar_js' )->set_is_enqueued();
			}
		?>
	</aside>
<?php }
