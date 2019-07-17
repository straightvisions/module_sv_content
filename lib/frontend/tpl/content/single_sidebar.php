<?php
	while ( have_posts() ) {
	the_post();
	?>
	<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'single' ); ?>">
		<?php
			$class = $this->get_prefix( 'header' );
			
			include( $this->get_path( 'lib/frontend/tpl/content/featured_image.php' ) );
		?>
		<div class="<?php echo $class; ?>">
			<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
				<h1><?php the_title()?></h1>
				<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
				<div>
					<span><?php echo get_the_author(); ?></span>
					<span><?php echo get_the_date(); ?></span>
				</div>
			</div>
			<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
				<?php echo $thumbnail; ?>
			</div>
		</div>
		<div class="<?php echo $this->get_prefix( 'wrapper' ) . ' ' . $this->get_prefix( 'with_sidebar' ); ?>">
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
					
					echo $this->get_module( 'sv_tags' ) ? $this->get_module( 'sv_tags' )->load() : '';
					echo $this->get_module( 'sv_comments' ) ? $this->get_module( 'sv_comments' )->load() : '';
				?>
			</article>
			<aside class="<?php echo $this->get_prefix( 'sidebar' ); ?>">
				<?php
					echo $this->get_module( 'sv_sidebar' )->load( array( 'id' => $this->get_module_name() . '_single' ) );
				?>
			</aside>
		</div>
	</div>
	<?php
	}
?>