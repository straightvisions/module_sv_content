<?php
	if ( ! $this->get_setting( '404_page' )->get_data() ) {
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
		global $post;
		$post = get_post( $this->get_setting( '404_page' )->get_data() );
		setup_postdata($post);
		
		$post_classes = ' ';

		if ( $this->show_right_sidebar() ) {
			$post_classes .= $this->get_prefix( 'has_sidebar_right' );
		}

		if ( $this->show_bottom_sidebar() ) {
			$post_classes .= ' ' . $this->get_prefix( 'has_sidebar_bottom' );
		}
		?>
		<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'page' ) . $post_classes; ?>">
			<?php echo $this->get_module('sv_header_content')->load(); ?>
			<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
				<article id="post-<?php echo the_ID(); ?>" <?php post_class($this->get_prefix( 'wrapper_inner' )); ?>>
					<?php
						the_content();
						wp_link_pages(
							array(
								'before'      => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
								'after'       => '</div>',
								'link_before' => '',
								'link_after'  => '',
								'pagelink'    => __( 'Page', 'sv100' ) . ' %',
								'separator'   => '',
							)
						);

						include( $this->get_path( 'lib/frontend/tpl/content/_meta_sidebar_bottom.php' ) );
					?>
				</article>
				<?php include( $this->get_path( 'lib/frontend/tpl/content/_meta_sidebar.php' ) ); ?>
			</div>
		</div>
<?php

	}