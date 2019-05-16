<div class="<?php echo $this->get_prefix( 'archive' ) . ' ' .$this->get_prefix( 'masonry' ); ?>">
	<?php
	while ( have_posts() ) {
		the_post();

		// Loads Thumbnail
		if ( do_shortcode( '[sv_featured_image]' ) && do_shortcode( '[sv_featured_image]' ) !== '[sv_featured_image]' ) {
			$thumbnail = do_shortcode( '[sv_featured_image]' );
		} else if ( has_post_thumbnail() ) {
			$thumbnail	= '<a href="' . get_the_permalink() . '">';
			$thumbnail .= get_the_post_thumbnail( null, 'medium_large' );
			$thumbnail .= '</a>';
		}
		?>
		<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
			<?php if( !empty( $thumbnail ) ) { ?>
				<div class="<?php echo $this->get_prefix( 'thumbnail' ); ?>">
					<div class="<?php echo $this->get_prefix( 'categories' ); ?>">
						<?php
						$categories = get_the_category();
						$separator  = ' ';
						$output     = '';

						if ( ! empty( $categories ) ) {
							foreach ( $categories as $category ) {
								$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="'
										   . esc_attr( sprintf( __( 'View all posts in %s', $this->get_module_name() ), $category->name ) ) .
										   '" class="' . $this->get_prefix( 'category' ) .'">'
										   . esc_html( $category->name ) . '</a>' . $separator;
							}

							echo trim( $output, $separator );
						}
						?>
					</div>
					<?php echo $thumbnail; ?>
				</div>
			<?php } ?>
			<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
				<div class="<?php echo $this->get_prefix( 'info' ); ?>">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <span><?php echo get_the_date(); ?></span>
				</div>
				<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>">
					<p><?php echo get_the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix( 'read_more' )?>">
						<?php _e( 'Read more', $this->get_module_name() );?>
					</a>
				</div>
			</div>
		</article>
		<?php
	}
	?>
</div>
