<?php
	if ( strlen($this->show_sidebar($position)) > 0 ) {
		$this->get_script( 'sidebar_'.$position )->set_is_enqueued();
		?>
		<aside class="<?php echo $this->get_prefix( 'sidebar_'.$position ); ?> <?php echo $this->get_prefix( 'wrapper_blocks' ); ?>">
			<?php echo $this->get_module( 'sv_sidebar' )->load( $this->show_sidebar($position) ); ?>
		</aside>
		<?php
	}