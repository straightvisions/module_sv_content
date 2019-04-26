<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'single' ); ?>">
	<?php
		$class = $this->get_prefix( 'header' );
		
		if ( has_post_thumbnail() ||
			 ( shortcode_exists( '[sv_featured_image]' )
			   && do_shortcode( '[sv_featured_image]' ) !== '[sv_featured_image]' ) ) {
			$class .= ' with-thumbnail';
		}
	?>
	<div class="<?php echo $class; ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1><?php the_title()?></h1>
		</div>
		<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
			<?php
				// Loads Thumbnail
				if ( do_shortcode( '[sv_featured_image]' ) && do_shortcode( '[sv_featured_image]' ) !== '[sv_featured_image]' ) {
					echo do_shortcode( '[sv_featured_image]' );
				} else if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( null, 'large' );
				}
			?>
		</div>
	</div>
	<?php
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php echo the_ID(); ?>" <?php post_class( $this->get_prefix( 'wrapper' ) ); ?>>
				<?php
					the_content();
					wp_link_pages(
						array(
							'before'      => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
							'after'       => '</div>',
							'link_before' => '',
							'link_after'  => '',
							'pagelink'    => __( 'Page', $this->get_module_name() ) . ' %',
							'separator'   => '',
						)
					);
					
					echo do_shortcode( '[sv_comments]' );
				?>
			</article>
			<?php
		}
	?>
</div>