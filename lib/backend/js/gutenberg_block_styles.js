jQuery( document ).ready( function() {
	if ( wp.blocks ) {
		// Block Styles - Image Cover
		wp.blocks.registerBlockStyle( 'core/image', {
			name: 'cover',
			label: 'Cover'
		});
	}
} );