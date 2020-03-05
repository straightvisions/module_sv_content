<?php
	// SV Common - Color
	$sv_common_text_color		= false;

	if ( $script->get_parent()->get_module( 'sv_common' ) ) {
		$sv_common_text_color 	= $script->get_parent()->get_module( 'sv_common' )->get_setting( 'text_color' )->get_data();
	}
	?>
<?php if ( $sv_common_text_color ) { ?>
	/* Text Color */
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > .post-page-numbers,
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers,
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:hover,
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:focus,
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:visited,
	.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:active,
	input,
	button {
		color: rgba(<?php echo $sv_common_text_color; ?>);
	}

	blockquote::before, blockquote.wp-block-quote::before,
	table th, table.wp-block-table th,
	table td, table.wp-block-table td,
	table tfoot td, table.wp-block-table tfoot td,
	input,
	input[type="checkbox"]:hover,
	input[type="checkbox"]:focus,
	input[type="checkbox"]:checked,
	input[type="radio"]:hover,
	input[type="radio"]:focus,
	input[type="radio"]:checked {
		border-color: rgba(<?php echo $sv_common_text_color; ?>);
	}

	input[type="checkbox"]::before,
	input[type="radio"]::before {
		background-color: rgba(<?php echo $sv_common_text_color; ?>);
	}
<?php } ?>