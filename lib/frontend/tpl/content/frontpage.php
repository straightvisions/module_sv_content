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
		<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'frontpage' ) . $post_classes; ?>">
			<?php
				$class = $this->get_prefix( 'header' );
				include( $this->get_path( 'lib/frontend/tpl/content/featured_image.php' ) );
			?>
			<div class="<?php echo $class; ?>">
				<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
					<h1><?php the_title()?></h1>
					<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
					<?php include( $this->get_path( 'lib/frontend/tpl/content/_meta_info.php' ) ); ?>
				</div>
				<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
					<?php echo $thumbnail; ?>
				</div>
			</div>
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
					?>
				</article>
				<?php include( $this->get_path( 'lib/frontend/tpl/content/_meta_sidebar.php' ) ); ?>
			</div>
		</div>
		<?php
	}
?>