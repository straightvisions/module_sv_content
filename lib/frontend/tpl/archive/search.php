<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'search' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<h1><?php _e( 'Search results for', 'sv_content' ); ?>: <span><?php echo get_search_query(); ?></span></h1>
	</div>
	
	<?php if ( have_posts() ) { ?>
		<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
			<?php
				$archive_theme = 'lib/frontend/tpl/archive/themes/';
				$archive_theme .= $this->s['search_theme']->run_type()->get_data()
					? $this->s['search_theme']->run_type()->get_data()
					: 'list';
				$archive_theme .= '.php';
				
				include( $this->get_path( $archive_theme ) );
			?>
		</div>
		<?php
	}
		
		echo do_shortcode( '[sv_pagination]' );
	?>
</div>