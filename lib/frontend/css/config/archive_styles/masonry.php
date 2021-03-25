<?php
	// Masonry - Title
	$font_family_title_masonry	= $module->get_setting( 'font_family_title_masonry' )->get_data();
	if ( $font_family_title_masonry ) {
		$font_title_masonry		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_masonry );
	} else {
		$font_title_masonry	 = false;
	}
	$font_size_title_masonry	= $module->get_setting( 'font_size_title_masonry' )->get_data();
	$line_height_title_masonry	= $module->get_setting( 'line_height_title_masonry' )->get_data();
	$text_color_title_masonry	= $module->get_setting( 'text_color_title_masonry' )->get_rgb( $module->get_setting( 'text_color_title_masonry' )->get_data() );
	
	// Masonry - Excerpt
	$font_family_excerpt_masonry= $module->get_setting( 'font_family_excerpt_masonry' )->get_data();
	if ( $font_family_excerpt_masonry ) {
		$font_excerpt_masonry	= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_masonry );
	} else {
		$font_excerpt_masonry   = false;
	}
	$font_size_excerpt_masonry	= $module->get_setting( 'font_size_excerpt_masonry' )->get_data();
	$line_height_excerpt_masonry= $module->get_setting( 'line_height_excerpt_masonry' )->get_data();
	$text_color_excerpt_masonry = $module->get_setting( 'text_color_excerpt_masonry' )->get_rgb( $module->get_setting( 'text_color_excerpt_masonry' )->get_data() );
	
	// Masonry - Read More
	$font_family_more_masonry	= $module->get_setting( 'font_family_more_masonry' )->get_data();
	if ( $font_family_more_masonry ) {
		$font_more_masonry		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_more_masonry );
	} else {
		$font_more_masonry	  = false;
	}
	$font_size_more_masonry		= $module->get_setting( 'font_size_more_masonry' )->get_data();
	$line_height_more_masonry	= $module->get_setting( 'line_height_more_masonry' )->get_data();
	$text_color_more_masonry	= $module->get_setting( 'text_color_more_masonry' )->get_rgb( $module->get_setting( 'text_color_more_masonry' )->get_data() );
	
	// Masonry - Color Settings
	$bg_color_masonry			= $module->get_setting( 'bg_color_masonry' )->get_rgb( $module->get_setting( 'bg_color_masonry' )->get_data() );
	$text_color_category_masonry= $module->get_setting( 'text_color_category_masonry' )->get_rgb( $module->get_setting( 'text_color_category_masonry' )->get_data() );
	$bg_color_category_masonry	= $module->get_setting( 'bg_color_category_masonry' )->get_rgb( $module->get_setting( 'bg_color_category_masonry' )->get_data() );
	$text_color_info_masonry	= $module->get_setting( 'text_color_info_masonry' )->get_rgb( $module->get_setting( 'text_color_info_masonry' )->get_data() );
	$highlight_color_masonry	= $module->get_setting( 'highlight_color_masonry' )->get_rgb( $module->get_setting( 'highlight_color_masonry' )->get_data() );
?>

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_wrapper {
	background-color: rgba(<?php echo $bg_color_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_categories a,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_categories a:hover,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_categories a:focus {
	color: rgba(<?php echo $text_color_category_masonry; ?>);
	background-color: rgba(<?php echo $bg_color_category_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_title a {
	<?php echo ( $font_title_masonry ? 'font-family: "' . $font_title_masonry['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_title_masonry ? $font_title_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_masonry; ?>px;
	color: rgba(<?php echo $text_color_title_masonry; ?>);
	line-height: <?php echo $line_height_title_masonry; ?>;
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_excerpt p {
	<?php echo ( $font_excerpt_masonry ? 'font-family: "' . $font_excerpt_masonry['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_excerpt_masonry ? $font_excerpt_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_masonry; ?>px;
	color: rgba(<?php echo $text_color_excerpt_masonry; ?>);
	line-height: <?php echo $line_height_excerpt_masonry; ?>;
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_read_more {
	<?php echo ( $font_more_masonry ? 'font-family: "' . $font_more_masonry['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_more_masonry ? $font_more_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_more_masonry; ?>px;
	color: rgba(<?php echo $text_color_more_masonry; ?>);
	line-height: <?php echo $line_height_more_masonry; ?>;
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_read_more:hover,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_read_more:focus {
	color: rgba(<?php echo $text_color_more_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_info a {
	color: rgba(<?php echo $text_color_info_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_info > div::before {
	background-color: rgba(<?php echo $text_color_info_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_title:hover a,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_title:focus a,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_info a:hover,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_info a:focus {
	color: rgba(<?php echo $highlight_color_masonry; ?>);
}

.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_read_more::after,
.sv100_sv_content_archive_style_masonry .sv100_sv_content_archive_thumbnail > a {
	background-color: rgba(<?php echo $highlight_color_masonry; ?>);
}