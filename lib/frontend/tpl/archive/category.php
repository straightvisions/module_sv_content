<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'category' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
        <div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
            <h1><?php single_cat_title(); ?></span></h1>
            <?php echo category_description(); ?>
        </div>
	</div>
	
	<?php if ( have_posts() ) { ?>
    <div class="<?php echo $this->get_global_wrapper_class(); ?> <?php echo $this->get_prefix( 'wrapper' ); ?>">
        <div class="<?php echo $this->get_global_wrapper_class( 'inner' ); ?> <?php echo $this->get_prefix( 'wrapper_inner' ); ?>">
			<?php
				$archive_theme = 'lib/frontend/tpl/archive/themes/';
				$archive_theme .= $this->get_setting( 'category_theme' )->get_data()
					? $this->get_setting( 'category_theme' )->get_data()
					: 'list';
				$archive_theme .= '.php';
				
				include( $this->get_path( $archive_theme ) );
			?>
                </div>
            </div>
		</div>
	<?php
	}
		
		echo $this->get_module( 'sv_pagination' ) ? $this->get_module( 'sv_pagination' )->load() : '';
	?>
</div>