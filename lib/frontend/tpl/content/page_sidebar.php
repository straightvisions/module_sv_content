<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'page' ); ?>">
	<?php
		$class = $this->get_prefix( 'header' );
	
		// Loads Thumbnail
		if ( $this->get_module( 'sv_featured_image' ) && ! empty( $this->get_module( 'sv_featured_image' )->load() ) ) {
			$thumbnail 	= $this->get_module( 'sv_featured_image' )->load( array( 'size' => 'sv100_thumbnail' ) );
			$class .= ' with-thumbnail';
		} else if ( has_post_thumbnail() ) {
			$thumbnail .= get_the_post_thumbnail( null, 'sv100_thumbnail' );
			$class .= ' with-thumbnail';
		} else {
			$thumbnail 	= false;
		}
	?>
	<div class="<?php echo $class; ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1><?php the_title()?></h1>
			<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
		</div>
		<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
			<?php echo $thumbnail; ?>
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
				echo $this->get_module( 'sv_sidebar' )
					? $this->get_module( 'sv_sidebar' )->load( array( 'id' => $this->get_module_name() . '_page' ) )
					: '';
			?>
        </aside>
    </div>
</div>