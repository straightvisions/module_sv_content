<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'home' ); ?>">
	<?php
	if ( have_posts() ) {
		if ( isset( $this->get_root()->sv_posts ) && isset( $this->get_root()->sv_slick ) ) {
			$i = 0;
			$posts = '';

			// Highlighted posts
			while ( have_posts() ) {
				the_post();

				if ( $i < 5 ) {
					$posts .= get_the_ID() . ',';
				}

				$i++;
			}

			echo do_shortcode( '[sv_posts posts="' . $posts . '" slider="1" slider_theme="fade" image="1" show_image="1" show_category="0" show_excerpt="1" max_length="80"]' );
		}

		echo '<div class="' . $this->get_prefix( 'posts' ) . '">';
		echo '<h1>' . __( 'Recent Posts', $this->get_module_name() ) . '</h1>';
		echo '<div class="' . $this->get_prefix( 'content_wrapper' ) . ' ' . $this->get_prefix( 'posts_masonry' ) . '">';

		// All posts
		while ( have_posts() ) {
			the_post();

			// Loads Thumbnail
			$thumbnail = do_shortcode( '[sv_featured_image]' );
			?>
			<div class="<?php echo $this->get_prefix( 'post_wrapper' ); ?>">
				<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
					<?php if( !empty( $thumbnail ) ) { ?>
						<div class="<?php echo $this->get_prefix( 'post_thumbnail' ); ?>">
							<div class="<?php echo $this->get_prefix( 'post_categories' ); ?>">
								<?php
								$categories = get_the_category();
								$separator  = ' ';
								$output     = '';

								if ( ! empty( $categories ) ) {
									foreach ( $categories as $category ) {
										$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="'
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
					<div class="<?php echo $this->get_prefix( 'post_content' ); ?>">
						<div class="<?php echo $this->get_prefix( 'post_info' ); ?>">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<span><?php echo get_the_date(); ?></span>
						</div>
						<div class="<?php echo $this->get_prefix( 'post_excerpt' ); ?>">
							<p><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix('read_more')?>">
								<?php _e( 'Read more', $this->get_module_name() );?>
							</a>
						</div>
					</div>
				</article>
			</div>
			<?php
		}

		echo '</div>';
	}
	?>
</div>