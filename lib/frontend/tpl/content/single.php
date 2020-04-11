<?php
	while ( have_posts() ) {
		the_post();
		
		$post_classes = ' ';
		
		if ( $this->show_right_sidebar() ) {
			$post_classes .= $this->get_prefix( 'has_sidebar_right' );
		}
		
		if ( $this->show_bottom_sidebar() ) {
			$post_classes .= ' ' . $this->get_prefix( 'has_sidebar_bottom' );
		}
		?>
		<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'single' ) . $post_classes; ?>">
			<?php
                if(!$this->hide_header()) {
                    $class = $this->get_prefix( 'header' );
                    include( $this->get_path( 'lib/frontend/tpl/content/featured_image.php' ) );
                    include( $this->get_path( 'lib/frontend/tpl/content/default.php' ) );
                }
			?>
			<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
				<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
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
						
						echo $this->get_module( 'sv_tags' ) ? $this->get_module( 'sv_tags' )->load() : '';
						comments_template();

					include( $this->get_path( 'lib/frontend/tpl/content/_meta_sidebar_bottom.php' ) );
					?>
				</article>
				<?php include( $this->get_path( 'lib/frontend/tpl/content/_meta_sidebar.php' ) ); ?>
			</div>
		</div>
		<?php
	}
?>