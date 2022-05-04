<?php
	while ( have_posts() ) {
		the_post();
		require( $this->get_path( 'lib/tpl/frontend/single.php' ) );
	}