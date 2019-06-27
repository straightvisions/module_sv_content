<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'frontpage' ); ?>">
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
		</div>
		<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
			<?php
				// Loads Thumbnail
				if ( $this->get_root()->get_module( 'sv_featured_image' )
					 && $this->get_root()->get_module( 'sv_featured_image' )->load() !== '[sv_featured_image]'  ) {
					echo $this->get_root()->get_module( 'sv_featured_image' )->load( array( 'size' => 'sv100_large' ) );
				} else if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( null, 'sv100_large' );
				}
			?>
		</div>
	</div>
	<div class="<?php echo $this->get_prefix( 'wrapper' ) . ' ' . $this->get_prefix( 'with_sidebar' ); ?>">
		<?php
			while ( have_posts() ) {
				the_post();
				?>
				<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
					<?php
						the_content();
						wp_link_pages(
							array(
								'before'      => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
								'after'       => '</div>',
								'link_before' => '',
								'link_after'  => '',
								'pagelink'    => __( 'Page', 'sv100' ) . ' %',
								'separator'   => '',
							)
						);
					?>
				</article>
				<?php
			}
		?>
		<aside class="<?php echo $this->get_prefix( 'sidebar' ); ?>">
			<?php
				echo $this->get_root()->get_module( 'sv_sidebar' )
					? $this->get_root()->get_module( 'sv_sidebar' )->load( array(
							'id' => $this->get_module_name() . '_frontpage'
					) )
					: '';
			?>
		</aside>
	</div>
</div>