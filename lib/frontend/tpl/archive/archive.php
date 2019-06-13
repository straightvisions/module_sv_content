<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'category' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
		<h1><?php _e( 'Archive', 'sv_100' ); ?></h1>
	</div>
	
	<?php if ( have_posts() ) { ?>
		<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
			<?php
				$archive_theme = 'lib/frontend/tpl/archive/themes/list.php';
				
				include( $this->get_path( $archive_theme ) );
			?>
		</div>
		<?php
	}
		
		echo $this->get_root()->get_module( 'sv_pagination' ) ? $this->get_root()->get_module( 'sv_pagination' )->load() : '';
	?>
</div>