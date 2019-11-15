<?php
	$font_title			= $font_family_title ? $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title ) : false;
	$font_excerpt 		= $font_family_excerpt ? $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt ) : false;
	
	// Those can be overwritten by metabox settings
	$text_color_title 	= $script->get_parent()->get_header_content_title_color();
	$text_color_excerpt = $script->get_parent()->get_header_content_excerpt_color();
	$text_color_info 	= $script->get_parent()->get_header_content_info_color();
?>

.sv100_sv_content_header h1 {
	<?php echo ( $font_title ? 'font-family: "' . $font_title['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_title ? $font_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_mobile; ?>px;
	color: rgba(<?php echo $text_color_title; ?>);
	line-height: <?php echo $line_height_title_mobile; ?>;
}

@media ( min-width: 850px ) {
	.sv100_sv_content_header h1 {
		font-size: <?php echo $font_size_title; ?>px;
		line-height: <?php echo $line_height_title; ?>;
	}
}

.sv100_sv_content_header .sv100_sv_content_excerpt p,
.sv100_sv_content_header .sv100_sv_content_header_content > p,
.sv100_sv_content_header .sv100_sv_content_header_content a {
	<?php echo ( $font_excerpt ? 'font-family: "' . $font_excerpt['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_excerpt ? $font_excerpt['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_mobile; ?>px;
	color: rgba(<?php echo $text_color_excerpt; ?>);
	line-height: <?php echo $line_height_excerpt_mobile; ?>;
}

@media ( min-width: 850px ) {
	.sv100_sv_content_header .sv100_sv_content_excerpt p,
	.sv100_sv_content_header .sv100_sv_content_header_content > p,
	.sv100_sv_content_header .sv100_sv_content_header_content a {
		font-size: <?php echo $font_size_excerpt; ?>px;
		line-height: <?php echo $line_height_excerpt; ?>;
	}
}

.sv100_sv_content_header span,
.sv100_sv_content_header .sv100_sv_content_meta {
	color: rgba(<?php echo $text_color_info; ?>);
}

.sv100_sv_content_header .sv100_sv_content_header_content > * {
	text-align: <?php echo $text_align_title; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content > .sv100_sv_content_excerpt,
.sv100_sv_content_header .sv100_sv_content_header_content > p {
	text-align: <?php echo $text_align_excerpt; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content_wrapper {
	width: 100%;
	margin: 0 auto;
	max-width: <?php echo $content_header_wrapper_max_width; ?>;
}
.sv100_sv_content_header .sv100_sv_content_header_content {
	align-items: 
	<?php
		switch ( $block_align_title ) {
			case 'left':
				echo 'flex-start';
				break;
			case 'center':
				echo 'center';
				break;
			case 'right':
				echo 'flex-end';
		}; 
	?>;
	margin: <?php echo $content_header_align; ?>;
	max-width: <?php echo $content_header_max_width; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content .sv100_sv_content_excerpt,
.sv100_sv_content_header .sv100_sv_content_header_content > p {
	<?php
		switch ( $block_align_excerpt ) {
			case 'left':
				echo 'margin-left: 0;';
				break;
			case 'right':
				echo 'margin-right: 0;';
		};
	?>
}