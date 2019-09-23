jQuery( document ).ready( function() {
	if ( wp.blocks ) {
		// Block Styles - Image Cover
		wp.blocks.registerBlockStyle( 'core/image', {
			name: 'cover',
			label: 'Cover'
		});

		// Block Styles - Columns
		wp.blocks.registerBlockStyle( 'core/columns', {
			name: 'stretch',
			label: 'Stretch'
		});
	}
} );