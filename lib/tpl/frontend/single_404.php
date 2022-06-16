<?php
	if ( ! $this->get_setting( '404_page' )->get_data() ) {
	?>
	<div class="<?php echo $this->get_prefix(); ?>">
		<div class="<?php echo $this->get_prefix( 'header' ); ?>">
			<div class="<?php echo $this->get_prefix( 'header_content' ); ?>"></div>
			<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
				<article>
					<div class="wp-block-group">
						<div class="wp-block-group__inner-container">
							<h1><?php _e( 'Page not found', 'sv100' ); ?></h1>
							<h3>
								<a href="<?php echo home_url(); ?>">
									<?php _e( 'Bring me back to the homepage', 'sv100' ); ?>
								</a>
							</h3>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
	<?php
	} else {
		global $post;
		$post = get_post( $this->get_setting( '404_page' )->get_data() );
		setup_postdata($post);

		require_once( $this->get_path( 'lib/tpl/frontend/single.php' ) );
	}