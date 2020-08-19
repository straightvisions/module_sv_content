<div class="<?php echo $this->get_prefix() . ' ' .$this->get_prefix( 'author' ); ?>">
	<div class="<?php echo $this->get_prefix( 'header' ); ?>">
        <div class="<?php echo $this->get_prefix( 'header_content' ); ?>">
		    <h1>
				<?php _e( 'Posts from', 'sv100' ); ?>:
				<span><?php the_author_meta( 'display_name' ); ?></span>
			</h1>
        </div>
	</div>
	
	<?php if ( have_posts() ) { ?>
        <div class="<?php  echo $this->get_global_wrapper_class(); ?> <?php echo $this->get_prefix( 'wrapper' ); ?>">
            <div class="<?php echo $this->get_global_wrapper_class( 'inner' ); ?>  <?php echo $this->get_prefix( 'wrapper_inner' ); ?>">
                <?php
                    $archive_theme = 'lib/frontend/tpl/archive/themes/';
                    $archive_theme .= $this->get_setting( 'author_theme' )->get_data()
                        ? $this->get_setting( 'author_theme' )->get_data()
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