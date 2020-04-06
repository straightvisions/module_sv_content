<?php
	// Loads Thumbnail
	$thumbnail 	= false;
	
	if ( $this->get_module( 'sv_featured_image' ) && ! empty( $this->get_module( 'sv_featured_image' )->load() ) ) {
		$thumbnail 	= $this->get_module( 'sv_featured_image' )->load( array( 'size' => 'full' ) );
		$class .= ' with-thumbnail';
	} else if ( has_post_thumbnail() && strlen(  get_the_post_thumbnail( null, 'full' ) ) > 0 ) {
		$thumbnail = get_the_post_thumbnail( null, 'full' );
		$class .= ' with-thumbnail';
	}