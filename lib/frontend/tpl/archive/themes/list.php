<?php
	// Load Icons
	if ( isset( $this->get_root()->sv_icon ) ) {
		echo do_shortcode( '[sv_icon id="sv_user" css_var="1"]' );
		echo do_shortcode( '[sv_icon id="sv_clock" css_var="1"]' );
		echo do_shortcode( '[sv_icon id="sv_folder" css_var="1"]' );
		echo do_shortcode( '[sv_icon id="sv_pen" css_var="1"]' );
	}
?>

<div class="<?php echo $this->get_prefix( 'archive' ) . ' ' .$this->get_prefix( 'list' ); ?>">
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
			<article id="post-<?php echo the_ID(); ?>" <?php
				if ( ! empty( $thumbnail ) ) {
					post_class();
				} else {
					post_class( $this->get_prefix( 'no_thumbnail' ) );
				}
				?>>
				<?php if( !empty( $thumbnail ) ) { ?>
					<div class="<?php echo $this->get_prefix( 'thumbnail' ); ?>">
						<?php echo $thumbnail; ?>
					</div>
				<?php } ?>
				<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>">
						<p><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix( 'read_more' )?>">
							<?php _e( 'Read more', 'sv_100' );?>
						</a>
					</div>
					<div class="<?php echo $this->get_prefix( 'info' ); ?>">
						<div class="<?php echo $this->get_prefix( 'author' ); ?>">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php the_author_meta( 'display_name' ); ?>
							</a>
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
												   . esc_attr( sprintf( __( 'View all posts in %s', 'sv_100' ), $category->name ) ) .
												   '" class="' . $this->get_prefix( 'category' ) .'">'
												   . esc_html( $category->name ) . '</a>' . $separator;
									}
									
									echo trim( $output, $separator );
								}
							?>
						</div>
						<?php
						if ( current_user_can( 'edit_post' ) ) {
							echo '<div class="' . $this->get_prefix( 'edit' ) . '">';
							echo '<a href="' . get_edit_post_link() . '">' . __( 'Edit', 'sv_100' ) . '</a>';
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
