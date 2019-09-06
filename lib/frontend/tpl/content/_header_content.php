<div class="<?php echo $class; ?>">
	<div class="<?php echo $this->get_prefix( 'header_content_wrapper' ); ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1><?php the_title()?></h1>
			<div class="<?php echo $this->get_prefix( 'excerpt' ); ?>"><?php the_excerpt(); ?></div>
			<?php include( $this->get_path( 'lib/frontend/tpl/content/_meta_info.php' ) ); ?>
		</div>
	</div>
	<div class="<?php echo $this->get_prefix( 'header_background' ); ?>">
		<?php echo $thumbnail; ?>
	</div>
</div>