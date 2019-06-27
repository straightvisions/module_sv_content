<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'page' ); ?>">
	<?php
		$class = $this->get_prefix( 'header' );
		
		if ( strpos( $settings['template'], 'slider' ) && $this->get_root()->get_module( 'sv_posts' ) ) {
			echo do_shortcode( '[sv_posts slider="1" slider_theme="fade" image="1" show_image="1" show_category="0" show_excerpt="1" show_date="0" max_length="80"]' );
		} else {
			if ( has_post_thumbnail() ||
				 ( $this->get_root()->get_module( 'sv_featured_image' )
				   && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]' ) ) {
				$class .= ' with-thumbnail';
			}
			?>
			<div class="<?php echo $class; ?>">
				<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
					<h1><?php the_title() ?></h1>
					<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
				</div>
				<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
					<?php
						// Loads Thumbnail
						if ( $this->get_root()->get_module( 'sv_featured_image' )
							 && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]' ) {
							echo $this->get_root()->get_module( 'sv_featured_image' )->load( array( 'size' => 'sv100_large' ) );
						} else if ( has_post_thumbnail() ) {
							echo get_the_post_thumbnail( null, 'sv100_large' );
						}
					?>
				</div>
			</div>
			<?php
		}
		
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
						'pagelink'    => __( 'Page', 'sv100' ) . ' %',
						'separator'   => '',
					)
				);
				?>
			</article>
			<?php
		}
	?>
</div>