<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'single' ); ?>">
	<?php
		$class = $this->get_prefix( 'header' );
		
		if ( has_post_thumbnail() ||
			 ( $this->get_root()->get_module( 'sv_featured_image' )
			   && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]' ) ) {
			$class .= ' with-thumbnail';
		}
	?>
	<div class="<?php echo $class; ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1><?php the_title()?></h1>
			<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
			<span><?php echo get_the_date(); ?></span>
		</div>
		<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
			<?php
				// Loads Thumbnail
				if ( $this->get_root()->get_module( 'sv_featured_image' )
					 && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]'  ) {
					echo $this->get_root()->get_module( 'sv_featured_image' )->load();
				} else if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( null, 'large' );
				}
			?>
		</div>
	</div>
	<?php
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
                        'pagelink'    => __( 'Page', 'sv_100' ) . ' %',
                        'separator'   => '',
                    )
                );
					
					echo $this->get_root()->get_module( 'sv_tags' )
						? $this->get_root()->get_module( 'sv_tags' )->load()
						: '';
					echo $this->get_root()->get_module( 'sv_comments' )
						? $this->get_root()->get_module( 'sv_comments' )->load()
						: '';
				?>
			</article>
			<?php
		}
	?>
</div>