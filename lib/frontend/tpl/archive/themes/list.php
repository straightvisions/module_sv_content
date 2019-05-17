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
					</div>
					<div class="<?php echo $this->get_prefix( 'info' ); ?>">
						<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix( 'read_more' )?>">
							<?php _e( 'Read more', $this->get_module_name() );?>
						</a>
						<span><?php echo get_the_date(); ?></span>
					</div>
				</div>
			</article>
			<?php
		}
	?>
</div>
