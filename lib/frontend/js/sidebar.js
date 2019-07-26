jQuery( document ).ready( function() {
	let sv_header_height = jQuery( '.sv100_sv_header' ).height();
	let content_wrapper_padding_top = parseInt( jQuery( '.sv100_sv_content_wrapper' ).css( 'padding-top' ) );

	jQuery( '.sv100_sv_sidebar_sv_content_page_right' ).css( 'top', sv_header_height + content_wrapper_padding_top );
} );