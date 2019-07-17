<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'page' ); ?>">
	<?php
		$class = $this->get_prefix( 'header' );
		include('featured_image.php');
	?>
	<div class="<?php echo $class; ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1><?php the_title() ?></h1>
			<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
		</div>
		<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
			<?php echo $thumbnail; ?>
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
						'pagelink'    => __( 'Page', 'sv100' ) . ' %',
						'separator'   => '',
					)
				);
				?>
			</article>
			<?php
		}
	?>
</div>