<div class="<?php echo $this->get_prefix( 'archive' ) . ' ' .$this->get_prefix( 'grid' ); ?>">
	<?php
		while ( have_posts() ) {
			the_post();
			
			// Loads Thumbnail
			if ( $this->get_root()->get_module( 'sv_featured_image' )
				 && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]' ) {
				$thumbnail = $this->get_root()->get_module( 'sv_featured_image' )->load( array( 'size' => 'sv_100_thumbnail' ) );
			} else if ( has_post_thumbnail() ) {
				$thumbnail .= get_the_post_thumbnail( null, 'sv_100_thumbnail' );
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
												   . esc_attr( sprintf( __( 'View all posts in %s', 'straightvisions_100' ), $category->name ) ) .
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
						<h4><?php the_title(); ?></h4>
                        <span><?php echo get_the_date(); ?></span>
					</div>
					<a href="<?php the_permalink(); ?>">
						<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>">
							<p><?php echo get_the_excerpt(); ?></p>
						</div>
					</a>
				</div>
			</article>
			<?php
		}
	?>
</div>
