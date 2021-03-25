<?php
	// Grid - Title
	$font_family_title_grid		= $module->get_setting( 'font_family_title_grid' )->get_data();
	if ( $font_family_title_grid ) {
		$font_title_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_grid );
	} else {
		$font_title_grid	 	= false;
	}
	$font_size_title_grid		= $module->get_setting( 'font_size_title_grid' )->get_data();
	$line_height_title_grid		= $module->get_setting( 'line_height_title_grid' )->get_data();
	$text_color_title_grid		= $module->get_setting( 'text_color_title_grid' )->get_rgb( $module->get_setting( 'text_color_title_grid' )->get_data() );
	
	// Grid - Excerpt
	$font_family_excerpt_grid	= $module->get_setting( 'font_family_excerpt_grid' )->get_data();
	if ( $font_family_excerpt_grid ) {
		$font_excerpt_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_grid );
	} else {
		$font_excerpt_grid   	= false;
	}
	$font_size_excerpt_grid		= $module->get_setting( 'font_size_excerpt_grid' )->get_data();
	$line_height_excerpt_grid	= $module->get_setting( 'line_height_excerpt_grid' )->get_data();
	$text_color_excerpt_grid	= $module->get_setting( 'text_color_excerpt_grid' )->get_rgb( $module->get_setting( 'text_color_excerpt_grid' )->get_data() );
	
	// Grid - Color Settings
	$bg_color_grid				= $module->get_setting( 'bg_color_grid' )->get_rgb( $module->get_setting( 'bg_color_grid' )->get_data() );
	$text_color_category_grid	= $module->get_setting( 'text_color_category_grid' )->get_rgb( $module->get_setting( 'text_color_category_grid' )->get_data() );
	$bg_color_category_grid		= $module->get_setting( 'bg_color_category_grid' )->get_rgb( $module->get_setting( 'bg_color_category_grid' )->get_data() );
	$text_color_info_grid		= $module->get_setting( 'text_color_info_grid' )->get_rgb( $module->get_setting( 'text_color_info_grid' )->get_data() );
	$highlight_color_grid		= $module->get_setting( 'highlight_color_grid' )->get_rgb( $module->get_setting( 'highlight_color_grid' )->get_data() );
?>

.sv100_sv_content_archive_style_grid article {
	background-color: rgba(<?php echo $bg_color_grid; ?>);
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_categories a,
.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_categories a:hover,
.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_categories a:focus {
	color: rgba(<?php echo $text_color_category_grid; ?>);
	background-color: rgba(<?php echo $bg_color_category_grid; ?>);
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_title {
	<?php echo ( $font_title_grid ? 'font-family: "' . $font_title_grid['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_title_grid ? $font_title_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_grid; ?>px;
	color: rgba(<?php echo $text_color_title_grid; ?>);
	line-height: <?php echo $line_height_title_grid; ?>;
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_info > div,
.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_info > p {
	color: rgba(<?php echo $text_color_info_grid; ?>);
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_info > div::before {
	background-color: rgba(<?php echo $text_color_info_grid; ?>);
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_excerpt {
	background-color: rgba( <?php echo $highlight_color_grid; ?> );
}

.sv100_sv_content_archive_style_grid .sv100_sv_content_archive_excerpt p {
	<?php echo ( $font_excerpt_grid ? 'font-family: "' . $font_excerpt_grid['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_excerpt_grid ? $font_excerpt_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_grid; ?>px;
	color: rgba(<?php echo $text_color_excerpt_grid; ?>);
	line-height: <?php echo $line_height_excerpt_grid; ?>;
}