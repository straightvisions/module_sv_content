jQuery( document ).ready( function() {

	if ( wp.blocks ) {
		// Block Styles - Left & Right
		var blocks = [ 'paragraph', 'heading', 'list', 'quote' ];

		blocks.forEach( function( block ) {
			wp.blocks.registerBlockStyle( 'core/' + block, {
				name: 'block-left',
				label: 'Block Align - Left'
			});

			wp.blocks.registerBlockStyle( 'core/' + block, {
				name: 'block-right',
				label: 'Block Align - Right'
			});
		});

		// Block Styles - Image Cover
		wp.blocks.registerBlockStyle( 'core/image', {
			name: 'cover',
			label: 'Cover'
		});
	}
} );