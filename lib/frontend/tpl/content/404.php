<?php
	if ( !get_post( $this->s['404_page']->run_type()->get_data() ) ) {
	?>
		<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( '404' ); ?>">
			<div class="<?php echo $this->get_prefix( 'header' ); ?>">
				<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
					<h1><?php _e( 'Page not found', $this->get_module_name() ); ?></h1>
					<h3>
						<a href="<?php echo home_url(); ?>">
							<?php _e( 'Bring me back to the homepage', $this->get_module_name() ); ?>
						</a>
					</h3>
				</div>
			</div>
		</div>
	<?php
	} else {
		$post = get_post( $this->s['404_page']->run_type()->get_data() );
		wp_redirect(  $post->guid );
	}