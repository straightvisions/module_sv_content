<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'home' ); ?>">
    <div class="<?php echo $this->get_global_wrapper_class(); echo $this->get_prefix( 'wrapper' ); ?>">
        <div class="<?php echo $this->get_prefix( 'wrapper_inner' ); ?>">
            <h1><?php _e( 'Recent Posts', 'sv100' ); ?></h1>
            <?php
                $archive_theme = 'lib/frontend/tpl/archive/themes/';
                $archive_theme .= $this->get_setting( 'home_theme' )->get_data()
                    ? $this->get_setting( 'home_theme' )->get_data()
                    : 'list';
                $archive_theme .= '.php';
                
                include( $this->get_path( $archive_theme ) );
    
                echo $this->get_module( 'sv_pagination' ) ? $this->get_module( 'sv_pagination' )->load() : '';
            ?>
        </div>
	</div>
</div>