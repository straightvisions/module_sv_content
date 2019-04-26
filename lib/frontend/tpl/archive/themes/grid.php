<div class="<?php echo $this->get_prefix( 'archive' ); ?>">
    <div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<h1><?php echo __( 'Category', $this->get_module_name() ); ?>: <span><?php single_cat_title(); ?></span></h1>
    </div>

	<?php if ( have_posts() ) { ?>
        <div class="<?php echo $this->get_prefix( 'content_wrapper' ) . ' ' . $this->get_prefix( 'posts_grid' ); ?>">
            <?php
			while ( have_posts() ) {
				the_post();
				
				// Loads Thumbnail
				if ( do_shortcode( '[sv_featured_image]' ) && do_shortcode( '[sv_featured_image]' ) !== '[sv_featured_image]' ) {
					$thumbnail = do_shortcode( '[sv_featured_image]' );
				} else if ( has_post_thumbnail() ) {
					$thumbnail = get_the_post_thumbnail( null, 'medium_large' );
				}
				?>
                <div class="<?php echo $this->get_prefix( 'post_wrapper' ); ?>">
	                <?php echo empty( $thumbnail ) ? '<a href="' . get_the_permalink() . '">' : ''; ?>
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
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php echo get_the_date(); ?></span>
                                </div>
                                <div class="<?php echo $this->get_prefix( 'post_excerpt' ); ?>">
                                    <p><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        </article>
	                <?php echo empty( $thumbnail ) ? '</a>' : ''; ?>
                </div>
				<?php
			}
			?>
        </div>
	<?php
		}
		
		echo do_shortcode( '[sv_pagination]' );
	?>
</div>