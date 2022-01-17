<?php
	$post_classes = array();

	foreach($this->get_sidebar_positions() as $position => $position_label){
		if ( $this->show_sidebar($position)) {
			$post_classes[]		= $this->get_prefix( 'has_sidebar_'.$position );
		}
	}
?>
<div class="<?php echo $this->get_prefix() . ' ' . implode(' ', $post_classes); ?>">
	<?php echo $this->get_module('sv_header_content')->load(); ?>
	<?php include( $this->get_path( 'lib/tpl/frontend/sidebar_top.php' ) ); ?>
	<div class="<?php echo $this->get_prefix( 'wrapper' ); ?>">
		<?php include( $this->get_path( 'lib/tpl/frontend/sidebar_left.php' ) ); ?>
		<article id="post-<?php echo the_ID(); ?>" <?php post_class($this->get_prefix( 'wrapper_inner' ).' '.$this->get_prefix( 'wrapper_blocks' )); ?>>
			<?php
				the_content();
				wp_link_pages(
					array(
						'before'	  => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
						'after'	   => '</div>',
						'link_before' => '',
						'link_after'  => '',
						'pagelink'	=> __( 'Page', 'sv100' ) . ' %',
						'separator'   => '',
					)
				);
				echo $this->get_module( 'sv_tags' ) ? $this->get_module( 'sv_tags' )->load() : '';
				comments_template();
			?>
		</article>
		<?php include( $this->get_path( 'lib/tpl/frontend/sidebar_right.php' ) ); ?>
	</div>
	<?php include( $this->get_path( 'lib/tpl/frontend/sidebar_bottom.php' ) ); ?>
</div>