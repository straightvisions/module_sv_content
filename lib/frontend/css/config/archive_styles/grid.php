<?php
	// Grid - Title
	if ( $font_family_title_grid ) {
		$font_title_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_grid );
	} else {
		$font_title_grid     	= false;
	}

	// Grid - Excerpt
	if ( $font_family_excerpt_grid ) {
		$font_excerpt_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_grid );
	} else {
		$font_excerpt_grid   	= false;
	}
?>

.sv100_sv_content_archive_grid article {
	background-color: rgba(<?php echo $bg_color_grid; ?>);
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_categories a,
.sv100_sv_content_archive_grid .sv100_sv_content_archive_categories a:hover,
.sv100_sv_content_archive_grid .sv100_sv_content_archive_categories a:focus {
	color: rgba(<?php echo $text_color_category_grid; ?>);
	background-color: rgba(<?php echo $bg_color_category_grid; ?>);
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_title {
	<?php echo ( $font_title_grid ? 'font-family: "' . $font_title_grid['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_title_grid ? $font_title_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_grid; ?>px;
	color: rgba(<?php echo $text_color_title_grid; ?>);
	line-height: <?php echo $line_height_title_grid; ?>;
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_info > div,
.sv100_sv_content_archive_grid .sv100_sv_content_archive_info > p {
	color: rgba(<?php echo $text_color_info_grid; ?>);
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_info > div::before {
	background-color: rgba(<?php echo $text_color_info_grid; ?>);
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_excerpt {
	background-color: rgba( <?php echo $highlight_color_grid; ?> );
}

.sv100_sv_content_archive_grid .sv100_sv_content_archive_excerpt p {
	<?php echo ( $font_excerpt_grid ? 'font-family: "' . $font_excerpt_grid['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_excerpt_grid ? $font_excerpt_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_grid; ?>px;
	color: rgba(<?php echo $text_color_excerpt_grid; ?>);
	line-height: <?php echo $line_height_excerpt_grid; ?>;
}