<?php
	if ( ! get_post( $this->get_setting( '404_page' )->run_type()->get_data() ) ) {
	?>
	<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( '404' ); ?>">
		<div class="<?php echo $this->get_prefix( 'header' ); ?>">
			<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
				<h1><?php _e( 'Page not found', 'sv100' ); ?></h1>
				<h3>
					<a href="<?php echo home_url(); ?>">
						<?php _e( 'Bring me back to the homepage', 'sv100' ); ?>
					</a>
				</h3>
			</div>
		</div>
	</div>
	<?php
	} else {
		$p = get_post( $this->get_setting( '404_page' )->run_type()->get_data() );
		wp_redirect(  $p->guid );
	}