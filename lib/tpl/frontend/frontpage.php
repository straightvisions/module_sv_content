<?php
	while ( have_posts() ) {
		the_post();
		
		$post_classes = ' ';
		
		if ( $this->show_right_sidebar() && empty($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('frontpage_right' ))) === false) {
			$post_classes .= $this->get_prefix( 'has_sidebar_right' );
		}
		
		if ( $this->show_bottom_sidebar() && empty($this->get_module( 'sv_sidebar' )->load( $this->get_prefix('frontpage_bottom' ))) === false) {
			$post_classes .= ' ' . $this->get_prefix( 'has_sidebar_bottom' );
		}
		?>
		<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'frontpage' ) . $post_classes; ?>">
			<?php echo $this->get_module('sv_header_content') ? $this->get_module('sv_header_content')->load() : ''; ?>
			<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
				<article id="post-<?php echo the_ID(); ?>" <?php post_class($this->get_prefix( 'wrapper_inner' )); ?>>
					<?php
						the_content();
						wp_link_pages(
							array(
								'before'	  => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
								'after'	   => '</div>',
								'link_before' => '',
								'link_after'  => '',
								'pagelink'	=> __( 'Page', 'sv100' ) . ' %',
								'separator'   => '',
							)
						);

						include( $this->get_path( 'lib/tpl/frontend/_meta_sidebar_bottom.php' ) );
					?>
				</article>
				<?php include( $this->get_path( 'lib/tpl/frontend/_meta_sidebar.php' ) ); ?>
			</div>
		</div>
		<?php
	}
?>