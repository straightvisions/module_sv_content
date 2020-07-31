<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'category' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
        <div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
		    <h1><?php _e( 'Archive', 'sv100' ); ?></h1>
        </div>
	</div>
	
	<?php if ( have_posts() ) { ?>
		<div class="<?php  echo $this->get_global_wrapper_class(); ?> <?php echo $this->get_prefix( 'wrapper' ); ?>">
            <div class="<?php echo $this->get_global_wrapper_class( 'inner' ); ?>">
                <?php
                    $archive_theme = 'lib/frontend/tpl/archive/themes/list.php';
                    
                    include( $this->get_path( $archive_theme ) );
                ?>
            </div>
		</div>
		<?php
	}
		
		echo $this->get_module( 'sv_pagination' ) ? $this->get_module( 'sv_pagination' )->load() : '';
	?>
</div>