<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'author' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<h1><?php _e( 'Posts from', 'straightvisions-100' ); ?>: <span><?php the_author_meta( 'display_name' ); ?></span></h1>
	</div>
	
	<?php if ( have_posts() ) { ?>
		<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
			<?php
				$archive_theme = 'lib/frontend/tpl/archive/themes/';
				$archive_theme .= $this->s['author_theme']->run_type()->get_data()
					? $this->s['author_theme']->run_type()->get_data()
					: 'list';
				$archive_theme .= '.php';
				
				include( $this->get_path( $archive_theme ) );
			?>
		</div>
	<?php
	}
	
	echo $this->get_root()->get_module( 'sv_pagination' ) ? $this->get_root()->get_module( 'sv_pagination' )->load() : '';
	?>
</div>