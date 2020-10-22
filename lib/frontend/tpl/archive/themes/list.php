<div class="<?php echo $this->get_prefix( 'style_list' ); ?>">
	<?php
		while ( have_posts() ) {
			the_post();

			include( $this->get_path( 'lib/frontend/tpl/archive/themes/featured_image.php' ) );
			?>
			<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
				<?php if( $thumbnail ) { ?>
					<div class="<?php echo $this->get_prefix( 'thumbnail' ); ?>">
						<?php echo $thumbnail; ?>
					</div>
				<?php } ?>
					<h3 class="<?php echo $this->get_prefix( 'title' ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>">
						<p><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="<?php echo $this->get_prefix( 'read_more' )?>">
							<?php _e( 'Read more', 'sv100' );?>
						</a>
					</div>
					<div class="<?php echo $this->get_prefix( 'info' ); ?>">
						<?php if($this->get_module('sv_header_content') && $this->get_module('sv_header_content')->show_author()){ ?>
						<div class="<?php echo $this->get_prefix( 'author' ); ?>">
							<?php echo get_the_author_posts_link( get_the_author_meta( 'ID' ) ); ?>
						</div>
						<?php } ?>
						<?php if($this->get_module('sv_header_content') && $this->get_module('sv_header_content')->show_date()){ ?>
						<div class="<?php echo $this->get_prefix( 'date' ); ?>">
							<?php echo get_the_date(); ?>
						</div>
						<?php } ?>
						<?php if($this->get_module('sv_header_content') && $this->get_module('sv_header_content')->show_date_modified()){ ?>
							<div class="<?php echo $this->get_prefix( 'date_modified' ); ?>">
								<?php echo get_the_modified_date(); ?>
							</div>
						<?php } ?>
						<div class="<?php echo $this->get_prefix( 'category' ); ?>">
							<?php
								$categories = get_the_category();
								$separator  = ',&nbsp;';
								$output	 = '';
								
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
					</div>
			</article>
			<?php
		}
		
		wp_reset_postdata();
	?>
</div>
