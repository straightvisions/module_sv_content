<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( 'home' ); ?>">
	<?php
		if ( has_filter( 'sv100_post_header_slider' ) && $this->get_setting( 'home_slider' )->run_type()->get_data() === '1' ) {
			$max 	= $this->get_setting( 'home_slider_max' )->run_type()->get_data()
				? $this->get_setting( 'home_slider_max' )->run_type()->get_data()
				: 5;
			$theme 	= $this->get_setting( 'home_slider_transition' )->run_type()->get_data()
				? $this->get_setting( 'home_slider_transition' )->run_type()->get_data()
				: 'fade';
			
			echo apply_filters( 'sv100_post_header_slider', $theme, $max );
		}
	?>
	
	<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
		<h1><?php _e( 'Recent Posts', 'sv100' ); ?></h1>
		<?php
			$archive_theme = 'lib/frontend/tpl/archive/themes/';
			$archive_theme .= $this->get_setting( 'home_theme' )->run_type()->get_data()
				? $this->get_setting( 'home_theme' )->run_type()->get_data()
				: 'list';
			$archive_theme .= '.php';
			
			include( $this->get_path( $archive_theme ) );

			echo $this->get_module( 'sv_pagination' ) ? $this->get_module( 'sv_pagination' )->load() : '';
		?>
	</div>
</div>