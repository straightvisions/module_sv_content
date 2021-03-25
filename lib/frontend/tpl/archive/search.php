<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'search' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
			<h1>
				<?php _e( 'Search results for', 'sv100' ); ?>:
				<span><?php echo get_search_query(); ?></span>
			</h1>
		</div>
	</div>
	
	<?php if ( have_posts() ) { ?>
		<div class="<?php  echo $this->get_global_wrapper_class(); ?> <?php echo $this->get_prefix( 'wrapper' ); ?>">
			<div class="<?php echo $this->get_global_wrapper_class( 'inner' ); ?> <?php echo $this->get_prefix( 'wrapper_inner' ); ?>">
				<?php
					$archive_theme = 'lib/frontend/tpl/archive/themes/';
					$archive_theme .= $this->get_setting( 'search_theme' )->get_data()
						? $this->get_setting( 'search_theme' )->get_data()
						: 'list';
					$archive_theme .= '.php';
					
					include( $this->get_path( $archive_theme ) );
				?>
			</div>
		</div>
		<?php
	}
		
		echo $this->get_module( 'sv_pagination' ) ? $this->get_module( 'sv_pagination' )->load() : '';
	?>
</div>