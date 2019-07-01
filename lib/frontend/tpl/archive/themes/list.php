<div class="<?php echo $this->get_prefix( 'archive' ) . ' ' .$this->get_prefix( 'list' ); ?>">
	<?php
		while ( have_posts() ) {
			the_post();
			
			// Loads Thumbnail
			if ( $this->get_module( 'sv_featured_image' ) && ! empty( $this->get_module( 'sv_featured_image' )->load() ) ) {
				$thumbnail 	= $this->get_module( 'sv_featured_image' )->load( array( 'size' => 'sv100_thumbnail' ) );
			} else if ( has_post_thumbnail() && strlen(  get_the_post_thumbnail( null, 'sv100_thumbnail' ) ) > 0 ) {
				$thumbnail 	= get_the_post_thumbnail( null, 'sv100_thumbnail' );
			} else {
				$thumbnail 	= false;
			}
			?>
			<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
				<?php if( $thumbnail ) { ?>
					<div class="<?php echo $this->get_prefix( 'thumbnail' ); ?>">
						<?php echo $thumbnail; ?>
					</div>
				<?php } ?>
				<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>">
						<p><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix( 'read_more' )?>">
							<?php _e( 'Read more', 'sv100' );?>
						</a>
					</div>
					<div class="<?php echo $this->get_prefix( 'info' ); ?>">
						<div class="<?php echo $this->get_prefix( 'author' ); ?>">
							<?php echo get_the_author_posts_link( get_the_author_meta( 'ID' ) ); ?>
						</div>
						<div class="<?php echo $this->get_prefix( 'date' ); ?>">
							<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
						</div>
						<div class="<?php echo $this->get_prefix( 'category' ); ?>">
							<?php
								$categories = get_the_category();
								$separator  = ', ';
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
						<?php
							if ( current_user_can( 'edit_post', get_the_ID() ) ) {
								echo '<div class="' . $this->get_prefix( 'edit' ) . '">';
								echo '<a href="' . get_edit_post_link() . '">' . __( 'Edit', 'sv100' ) . '</a>';
								echo '</div>';
							}
						?>
					</div>
				</div>
			</article>
			<?php
		}
	?>
</div>
