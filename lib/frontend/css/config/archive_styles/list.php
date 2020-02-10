<?php
	// List - Title
	$font_family_title_list		= $module->get_setting( 'font_family_title_list' )->run_type()->get_data();
	if ( $font_family_title_list ) {
		$font_title_list		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_list );
	} else {
		$font_title_list        = false;
	}
	$font_size_title_list		= $module->get_setting( 'font_size_title_list' )->run_type()->get_data();
	$line_height_title_list		= $module->get_setting( 'line_height_title_list' )->run_type()->get_data();
	$text_color_title_list		= $module->get_setting( 'text_color_title_list' )->get_rgb( $module->get_setting( 'text_color_title_list' )->run_type()->get_data() );
	
	// List - Excerpt
	$font_family_excerpt_list	= $module->get_setting( 'font_family_excerpt_list' )->run_type()->get_data();
	if ( $font_family_excerpt_list ) {
		$font_excerpt_list		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_list );
	} else {
		$font_excerpt_list		= false;
	}
	$font_size_excerpt_list		= $module->get_setting( 'font_size_excerpt_list' )->run_type()->get_data();
	$line_height_excerpt_list	= $module->get_setting( 'line_height_excerpt_list' )->run_type()->get_data();
	$text_color_excerpt_list	= $module->get_setting( 'text_color_excerpt_list' )->get_rgb( $module->get_setting( 'text_color_excerpt_list' )->run_type()->get_data() );
	
	// List - Read More
	$font_family_more_list		= $module->get_setting( 'font_family_more_list' )->run_type()->get_data();
	if ( $font_family_more_list ) {
		$font_more_list			= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_more_list );
	} else {
		$font_more_list			= false;
	}
	$font_size_more_list		= $module->get_setting( 'font_size_more_list' )->run_type()->get_data();
	$line_height_more_list		= $module->get_setting( 'line_height_more_list' )->run_type()->get_data();
	$text_color_more_list		= $module->get_setting( 'text_color_more_list' )->get_rgb( $module->get_setting( 'text_color_more_list' )->run_type()->get_data() );
	
	// List - Color Settings
	$text_color_info_list		= $module->get_setting( 'text_color_info_list' )->get_rgb( $module->get_setting( 'text_color_info_list' )->run_type()->get_data() );
	$highlight_color_list		= $module->get_setting( 'highlight_color_list' )->get_rgb( $module->get_setting( 'highlight_color_list' )->run_type()->get_data() );
?>

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_title a {
	<?php echo ( $font_title_list ? 'font-family: "' . $font_title_list['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_title_list ? $font_title_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_list; ?>px;
	color: rgba(<?php echo $text_color_title_list; ?>);
	line-height: <?php echo $line_height_title_list; ?>;
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_excerpt p {
	<?php echo ( $font_excerpt_list ? 'font-family: "' . $font_excerpt_list['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_excerpt_list ? $font_excerpt_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_list; ?>px;
	color: rgba(<?php echo $text_color_excerpt_list; ?>);
	line-height: <?php echo $line_height_excerpt_list; ?>;
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_read_more {
	<?php echo ( $font_more_list ? 'font-family: "' . $font_more_list['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_more_list ? $font_more_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_more_list; ?>px;
	color: rgba(<?php echo $text_color_more_list; ?>);
	line-height: <?php echo $line_height_more_list; ?>;
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_read_more:hover,
.sv100_sv_content_archive_style_list .sv100_sv_content_archive_read_more:focus {
	color: rgba(<?php echo $text_color_more_list; ?>);
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_info a {
	color: rgba(<?php echo $text_color_info_list; ?>);
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_info > div::before {
	background-color: rgba(<?php echo $text_color_info_list; ?>);
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_title:hover a,
.sv100_sv_content_archive_style_list .sv100_sv_content_archive_title:focus a,
.sv100_sv_content_archive_style_list .sv100_sv_content_archive_info a:hover,
.sv100_sv_content_archive_style_list .sv100_sv_content_archive_info a:focus {
	color: rgba(<?php echo $highlight_color_list; ?>);
}

.sv100_sv_content_archive_style_list .sv100_sv_content_archive_read_more::after,
.sv100_sv_content_archive_style_list .sv100_sv_content_archive_thumbnail > a {
	background-color: rgba(<?php echo $highlight_color_list; ?>);
}