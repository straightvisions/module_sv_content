<div class="<?php echo $this->get_prefix() . ' ' . $this->get_prefix( '404' ); ?>">
	<div class="<?php echo $this->get_prefix( 'content_wrapper' ); ?>">
		<?php
		if ( get_post( $this->s['404_page']->run_type()->get_data() ) ) {
			$post = get_post($this->s['404_page']->run_type()->get_data());
			setup_postdata( $post );

			echo '<div class="' . $this->get_prefix( 'post_content' ) . '">';
			the_content();
			wp_link_pages(
				array(
					'before'      => '<div class="' . $this->get_prefix( 'page_links' ) . '">',
					'after'       => '</div>',
					'link_before' => '',
					'link_after'  => '',
					'pagelink'    => __( 'Page', $this->get_module_name() ) . ' %',
					'separator'   => '',
				)
			);
			echo '</div>';
		}

		// Fallback when no 404 page is selected
		else {
			$output = '<div class="' . $this->get_prefix( 'post_content' ) . ' ' . $this->get_prefix( 'no_page' ) . '">';
			$output .= '<h1>' . __( 'Page not found', $this->get_module_name() ) . '</h1>';
			$output .= '<a href="' . get_home_url() . '">' . __( 'Take me back to the homepage!', $this->get_module_name() ) . '</a>';
			$output .= '</div>';

			echo $output;
		}
		?>
	</div>
</div>