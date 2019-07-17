<div class="<?php echo $this->get_prefix( 'archive' ) . ' ' .$this->get_prefix( 'grid' ); ?>">
	<?php
		while ( have_posts() ) {
			the_post();
			
			include('featured_image.php');
			?>
			<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( $thumbnail ) { ?>
					<div class="<?php echo $this->get_prefix( 'thumbnail' ); ?>">
						<div class="<?php echo $this->get_prefix( 'categories' ); ?>">
							<?php
								$categories = get_the_category();
								$separator  = ' ';
								$output     = '';
								
								if ( ! empty( $categories ) ) {
									foreach ( $categories as $category ) {
										$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="'
												   . esc_attr( sprintf( __( 'View all posts in %s', 'sv100' ), $category->name ) ) .
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
						<h3 class="<?php echo $this->get_prefix( 'title' ); ?>"><?php the_title(); ?></h3>
						<div class="<?php echo $this->get_prefix( 'author' ); ?>">
							<?php echo get_the_author_meta( 'display_name' ); ?>
						</div>
						<div class="<?php echo $this->get_prefix( 'date' ); ?>">
							<?php echo get_the_date(); ?>
						</div>
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
