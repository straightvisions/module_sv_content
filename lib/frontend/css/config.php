<?php
	// SV Header - Position
	$header_fixed				= (
		$script->get_parent()->get_module( 'sv_header' )
		&& $script->get_parent()->get_module( 'sv_header' )->get_setting( 'position' )->run_type()->get_data()
		&& $script->get_parent()->get_module( 'sv_header' )->get_setting( 'position' )->run_type()->get_data() === 'fixed'
	) ? true : false;
	
	// SV Common - Color
	$sv_common_text_color		= false;
	
	if ( $script->get_parent()->get_module( 'sv_common' ) ) {
		$sv_common_text_color 	= $script->get_parent()->get_module( 'sv_common' )->get_setting( 'text_color' )->run_type()->get_data();
	}
	
	// ### Content Settings ###
	// H1
	$font_family_h1				= $script->get_parent()->get_setting( 'font_family_h1' )->run_type()->get_data();
	
	if ( $font_family_h1 ) {
		$font_h1				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h1 );
	} else {
		$font_h1                = false;
	 }

	$font_size_h1				= $script->get_parent()->get_setting( 'font_size_h1' )->run_type()->get_data();
	$text_color_h1				= $script->get_parent()->get_setting( 'text_color_h1' )->run_type()->get_data();
	$line_height_h1				= $script->get_parent()->get_setting( 'line_height_h1' )->run_type()->get_data();
	
	// H2
	$font_family_h2				= $script->get_parent()->get_setting( 'font_family_h2' )->run_type()->get_data();
	
	if ( $font_family_h2 ) {
		$font_h2				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h2 );
	} else {
		$font_h2                = false;
	}
	
	$font_size_h2				= $script->get_parent()->get_setting( 'font_size_h2' )->run_type()->get_data();
	$text_color_h2				= $script->get_parent()->get_setting( 'text_color_h2' )->run_type()->get_data();
	$line_height_h2				= $script->get_parent()->get_setting( 'line_height_h2' )->run_type()->get_data();
	
	// H3
	$font_family_h3				= $script->get_parent()->get_setting( 'font_family_h3' )->run_type()->get_data();
	
	if ( $font_family_h3 ) {
		$font_h3				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h3 );
	} else {
		$font_h3              	= false;
	}
	
	$font_size_h3				= $script->get_parent()->get_setting( 'font_size_h3' )->run_type()->get_data();
	$text_color_h3				= $script->get_parent()->get_setting( 'text_color_h3' )->run_type()->get_data();
	$line_height_h3				= $script->get_parent()->get_setting( 'line_height_h3' )->run_type()->get_data();
	
	// H4
	$font_family_h4				= $script->get_parent()->get_setting( 'font_family_h4' )->run_type()->get_data();
	
	if ( $font_family_h4 ) {
		$font_h4				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h4 );
	} else {
		$font_h4                = false;
	}
	
	$font_size_h4				= $script->get_parent()->get_setting( 'font_size_h4' )->run_type()->get_data();
	$text_color_h4				= $script->get_parent()->get_setting( 'text_color_h4' )->run_type()->get_data();
	$line_height_h4				= $script->get_parent()->get_setting( 'line_height_h4' )->run_type()->get_data();
	
	// H5
	$font_family_h5				= $script->get_parent()->get_setting( 'font_family_h5' )->run_type()->get_data();
	
	if ( $font_family_h5 ) {
		$font_h5				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h5 );
	} else {
		$font_h5                = false;
	}
	
	$font_size_h5				= $script->get_parent()->get_setting( 'font_size_h5' )->run_type()->get_data();
	$text_color_h5				= $script->get_parent()->get_setting( 'text_color_h5' )->run_type()->get_data();
	$line_height_h5				= $script->get_parent()->get_setting( 'line_height_h5' )->run_type()->get_data();
	
	// H6
	$font_family_h6				= $script->get_parent()->get_setting( 'font_family_h6' )->run_type()->get_data();
	
	if ( $font_family_h6 ) {
		$font_h6				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h6 );
	} else {
		$font_h6                = false;
	}
	
	$font_size_h6				= $script->get_parent()->get_setting( 'font_size_h5' )->run_type()->get_data();
	$text_color_h6				= $script->get_parent()->get_setting( 'text_color_h6' )->run_type()->get_data();
	$line_height_h6				= $script->get_parent()->get_setting( 'line_height_h6' )->run_type()->get_data();
	
	// Color Settings
	$highlight_color			= $script->get_parent()->get_setting( 'highlight_color' )->run_type()->get_data();
	
	// ### Content Header Settings ###
	// Content Header - Title
	$font_family_title			= $script->get_parent()->get_setting( 'font_family_title' )->run_type()->get_data();
	
	if ( $font_family_title ) {
		$font_title				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title );
	} else {
		$font_title             = false;
	}
	
	$font_size_title			= $script->get_parent()->get_setting( 'font_size_title' )->run_type()->get_data();
	$text_color_title			= $script->get_parent()->get_setting( 'text_color_title' )->run_type()->get_data();
	$line_height_title			= $script->get_parent()->get_setting( 'line_height_title' )->run_type()->get_data();
	
	// Content Header - Excerpt
	$font_family_excerpt		= $script->get_parent()->get_setting( 'font_family_excerpt' )->run_type()->get_data();
	
	if ( $font_family_excerpt ) {
		$font_excerpt			= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt );
	} else {
		$font_excerpt           = false;
	}
	
	$font_size_excerpt			= $script->get_parent()->get_setting( 'font_size_excerpt' )->run_type()->get_data();
	$text_color_excerpt			= $script->get_parent()->get_setting( 'text_color_excerpt' )->run_type()->get_data();
	$line_height_excerpt		= $script->get_parent()->get_setting( 'line_height_excerpt' )->run_type()->get_data();
	
	// Content Header - Color Settings
	$bg_color					= $script->get_parent()->get_setting( 'bg_color' )->run_type()->get_data();
	$text_color_info			= $script->get_parent()->get_setting( 'text_color_info' )->run_type()->get_data();
	
	// Content Header - Color Settings (with Thumbnail)
	$text_color_title_image		= $script->get_parent()->get_setting( 'text_color_title_image' )->run_type()->get_data();
	$text_color_excerpt_image	= $script->get_parent()->get_setting( 'text_color_excerpt_image' )->run_type()->get_data();
	$bg_color_image				= sscanf( $script->get_parent()->get_setting( 'bg_color_image' )->run_type()->get_data(), "#%02x%02x%02x" );
	$text_color_info_image		= $script->get_parent()->get_setting( 'text_color_info_image' )->run_type()->get_data();
	
	// ### Post Listing Settings ###
	// List - Title
	$font_family_title_list		= $script->get_parent()->get_setting( 'font_family_title_list' )->run_type()->get_data();
	
	if ( $font_family_title_list ) {
		$font_title_list		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_list );
	} else {
		$font_title_list        = false;
	}
	
	$font_size_title_list		= $script->get_parent()->get_setting( 'font_size_title_list' )->run_type()->get_data();
	$text_color_title_list		= $script->get_parent()->get_setting( 'text_color_title_list' )->run_type()->get_data();
	$line_height_title_list		= $script->get_parent()->get_setting( 'line_height_title_list' )->run_type()->get_data();
	
	// List - Excerpt
	$font_family_excerpt_list		= $script->get_parent()->get_setting( 'font_family_excerpt_list' )->run_type()->get_data();
	
	if ( $font_family_excerpt_list ) {
		$font_excerpt_list		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_list );
	} else {
		$font_excerpt_list        = false;
	}
	
	$font_size_excerpt_list		= $script->get_parent()->get_setting( 'font_size_excerpt_list' )->run_type()->get_data();
	$text_color_excerpt_list		= $script->get_parent()->get_setting( 'text_color_excerpt_list' )->run_type()->get_data();
	$line_height_excerpt_list		= $script->get_parent()->get_setting( 'line_height_excerpt_list' )->run_type()->get_data();
	
	// List - Read More
	$font_family_more_list		= $script->get_parent()->get_setting( 'font_family_more_list' )->run_type()->get_data();
	
	if ( $font_family_more_list ) {
		$font_more_list		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_more_list );
	} else {
		$font_more_list        = false;
	}
	
	$font_size_more_list		= $script->get_parent()->get_setting( 'font_size_more_list' )->run_type()->get_data();
	$text_color_more_list		= $script->get_parent()->get_setting( 'text_color_more_list' )->run_type()->get_data();
	$line_height_more_list		= $script->get_parent()->get_setting( 'line_height_more_list' )->run_type()->get_data();
	
	// List - Color Settings
	$text_color_info_list		= $script->get_parent()->get_setting( 'text_color_info_list' )->run_type()->get_data();
	$highlight_color_list		= $script->get_parent()->get_setting( 'highlight_color_list' )->run_type()->get_data();
	
	// Masonry - Title
	$font_family_title_masonry	= $script->get_parent()->get_setting( 'font_family_title_masonry' )->run_type()->get_data();
	
	if ( $font_family_title_masonry ) {
		$font_title_masonry		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_masonry );
	} else {
		$font_title_masonry     = false;
	}
	
	$font_size_title_masonry	= $script->get_parent()->get_setting( 'font_size_title_masonry' )->run_type()->get_data();
	$text_color_title_masonry	= $script->get_parent()->get_setting( 'text_color_title_masonry' )->run_type()->get_data();
	$line_height_title_masonry	= $script->get_parent()->get_setting( 'line_height_title_masonry' )->run_type()->get_data();
	
	// Masonry - Excerpt
	$font_family_excerpt_masonry= $script->get_parent()->get_setting( 'font_family_excerpt_masonry' )->run_type()->get_data();
	
	if ( $font_family_excerpt_masonry ) {
		$font_excerpt_masonry	= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_masonry );
	} else {
		$font_excerpt_masonry   = false;
	}
	
	$font_size_excerpt_masonry	= $script->get_parent()->get_setting( 'font_size_excerpt_masonry' )->run_type()->get_data();
	$text_color_excerpt_masonry	= $script->get_parent()->get_setting( 'text_color_excerpt_masonry' )->run_type()->get_data();
	$line_height_excerpt_masonry= $script->get_parent()->get_setting( 'line_height_excerpt_masonry' )->run_type()->get_data();
	
	// Masonry - Read More
	$font_family_more_masonry	= $script->get_parent()->get_setting( 'font_family_more_masonry' )->run_type()->get_data();
	
	if ( $font_family_more_masonry ) {
		$font_more_masonry		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_more_masonry );
	} else {
		$font_more_masonry      = false;
	}
	
	$font_size_more_masonry		= $script->get_parent()->get_setting( 'font_size_more_masonry' )->run_type()->get_data();
	$text_color_more_masonry	= $script->get_parent()->get_setting( 'text_color_more_masonry' )->run_type()->get_data();
	$line_height_more_masonry	= $script->get_parent()->get_setting( 'line_height_more_masonry' )->run_type()->get_data();
	
	// Masonry - Color Settings
	$bg_color_masonry			= $script->get_parent()->get_setting( 'bg_color_masonry' )->run_type()->get_data();
	$text_color_category_masonry= $script->get_parent()->get_setting( 'text_color_category_masonry' )->run_type()->get_data();
	$bg_color_category_masonry	= $script->get_parent()->get_setting( 'bg_color_category_masonry' )->run_type()->get_data();
	$text_color_info_masonry	= $script->get_parent()->get_setting( 'text_color_info_masonry' )->run_type()->get_data();
	$highlight_color_masonry	= $script->get_parent()->get_setting( 'highlight_color_masonry' )->run_type()->get_data();
	
	// Grid - Title
	$font_family_title_grid	= $script->get_parent()->get_setting( 'font_family_title_grid' )->run_type()->get_data();
	
	if ( $font_family_title_grid ) {
		$font_title_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title_grid );
	} else {
		$font_title_grid     	= false;
	}
	
	$font_size_title_grid		= $script->get_parent()->get_setting( 'font_size_title_grid' )->run_type()->get_data();
	$text_color_title_grid		= $script->get_parent()->get_setting( 'text_color_title_grid' )->run_type()->get_data();
	$line_height_title_grid		= $script->get_parent()->get_setting( 'line_height_title_grid' )->run_type()->get_data();
	
	// Grid - Excerpt
	$font_family_excerpt_grid	= $script->get_parent()->get_setting( 'font_family_excerpt_grid' )->run_type()->get_data();
	
	if ( $font_family_excerpt_grid ) {
		$font_excerpt_grid		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt_grid );
	} else {
		$font_excerpt_grid   	= false;
	}
	
	$font_size_excerpt_grid		= $script->get_parent()->get_setting( 'font_size_excerpt_grid' )->run_type()->get_data();
	$text_color_excerpt_grid	= $script->get_parent()->get_setting( 'text_color_excerpt_grid' )->run_type()->get_data();
	$line_height_excerpt_grid	= $script->get_parent()->get_setting( 'line_height_excerpt_grid' )->run_type()->get_data();
	
	// Grid - Color Settings
	$bg_color_grid				= $script->get_parent()->get_setting( 'bg_color_grid' )->run_type()->get_data();
	$text_color_category_grid	= $script->get_parent()->get_setting( 'text_color_category_grid' )->run_type()->get_data();
	$bg_color_category_grid		= $script->get_parent()->get_setting( 'bg_color_category_grid' )->run_type()->get_data();
	$text_color_info_grid		= $script->get_parent()->get_setting( 'text_color_info_grid' )->run_type()->get_data();
	$highlight_color_grid		= sscanf( $script->get_parent()->get_setting( 'highlight_color_grid' )->run_type()->get_data(), "#%02x%02x%02x" );
	
	if ( $script->get_parent()->has_sidebar() ) {
		// ### Widget Settings ###
		// Widget Titles
		$font_family_widget_title	= $script->get_parent()->get_setting( 'font_family_widget_title' )->run_type()->get_data();
		
		if ( $font_family_widget_title ) {
			$font_widget_title		= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_widget_title );
		} else {
			$font_widget_title      = false;
		}
		
		$font_size_widget_title		= $script->get_parent()->get_setting( 'font_size_widget_title' )->run_type()->get_data();
		$text_color_widget_title	= $script->get_parent()->get_setting( 'text_color_widget_title' )->run_type()->get_data();
		$line_height_widget_title	= $script->get_parent()->get_setting( 'line_height_widget_title' )->run_type()->get_data();
		
		// Widget Color
		$text_color_widget			= $script->get_parent()->get_setting( 'text_color_widget' )->run_type()->get_data();
		$bg_color_widget			= $script->get_parent()->get_setting( 'bg_color_widget' )->run_type()->get_data();
	}
?>
/* Common Settings *//
<?php if ( $sv_common_text_color ) { ?>
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > .post-page-numbers,
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers,
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:hover,
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:focus,
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:visited,
.sv100_sv_content .sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:active,
.sv100_sv_content input,
.sv100_sv_content button {
	color: <?php echo $sv_common_text_color; ?>;
}

.sv100_sv_content blockquote::before, .sv100_sv_content blockquote.wp-block-quote::before,
.sv100_sv_content table th, .sv100_sv_content table.wp-block-table th,
.sv100_sv_content table td, .sv100_sv_content table.wp-block-table td,
.sv100_sv_content table tfoot td, .sv100_sv_content table.wp-block-table tfoot td,
.sv100_sv_content input,
.sv100_sv_content input[type="checkbox"]:hover,
.sv100_sv_content input[type="checkbox"]:focus,
.sv100_sv_content input[type="checkbox"]:checked,
.sv100_sv_content input[type="radio"]:hover,
.sv100_sv_content input[type="radio"]:focus,
.sv100_sv_content input[type="radio"]:checked {
	border-color: <?php echo $sv_common_text_color; ?>;
}

.sv100_sv_content input[type="checkbox"]::before,
.sv100_sv_content input[type="radio"]::before {
	background-color: <?php echo $sv_common_text_color; ?>;
}
<?php } ?>

/* Color Settings */
.sv100_sv_content a:hover,
.sv100_sv_content a:focus,
.sv100_sv_content_header > h1 > span,
.sv100_sv_content code, .sv100_sv_content pre.wp-block-code > code,
.sv100_sv_content button:hover,
.sv100_sv_content button:focus,
.sv100_sv_content input[type="button"]:hover,
.sv100_sv_content input[type="button"]:focus,
.sv100_sv_content input[type="submit"]:hover,
.sv100_sv_content input[type="submit"]:focus,
.sv100_sv_content input[type="reset"]:hover,
.sv100_sv_content input[type="reset"]:focus {
	color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content .sv100_sv_content_page_links .post-page-numbers::after {
	background-color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content button:hover,
.sv100_sv_content button:focus,
.sv100_sv_content input[type="button"]:hover,
.sv100_sv_content input[type="button"]:focus,
.sv100_sv_content input[type="submit"]:hover,
.sv100_sv_content input[type="submit"]:focus,
.sv100_sv_content input[type="reset"]:hover,
.sv100_sv_content input[type="reset"]:focus {
	border-color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content {
	margin-top: <?php echo ( $header_fixed === true ) ? 80 : 0; ?>px;
}

body.admin-bar .sv100_sv_content {
	margin-top: 0;
}

@media ( min-width: 850px ) {
	body.admin-bar .sv100_sv_content,
	.sv100_sv_content {
		margin-top: <?php echo ( $header_fixed === true ) ? 100 : 0; ?>px;
	}
}

/* Headings */
.sv100_sv_content_header h1,
.sv100_sv_content_wrapper h1 {
	font-family: <?php echo ( $font_h1 ? '"' . $font_h1['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h1 ?  $font_h1['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h1; ?>px;
	color: <?php echo $text_color_h1; ?>;
	line-height: <?php echo $line_height_h1; ?>px;
}

.sv100_sv_content_wrapper h2 {
	font-family: <?php echo ( $font_h2 ? '"' . $font_h2['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h2 ? $font_h2['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h2; ?>px;
	color: <?php echo $text_color_h2; ?>;
	line-height: <?php echo $line_height_h2; ?>px;
}

.sv100_sv_content_wrapper h3 {
	font-family: <?php echo ( $font_h3 ? '"' . $font_h3['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h3 ? $font_h3['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h3; ?>px;
	color: <?php echo $text_color_h3; ?>;
	line-height: <?php echo $line_height_h3; ?>px;
}

.sv100_sv_content_wrapper h4 {
	font-family: <?php echo ( $font_h4 ? '"' . $font_h4['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h4 ? $font_h4['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h4; ?>px;
	color: <?php echo $text_color_h4; ?>;
	line-height: <?php echo $line_height_h4; ?>px;
}

.sv100_sv_content_wrapper h5 {
	font-family: <?php echo ( $font_h5 ? '"' . $font_h5['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h5 ? $font_h5['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h5; ?>px;
	color: <?php echo $text_color_h5; ?>;
	line-height: <?php echo $line_height_h5; ?>px;
}

.sv100_sv_content_wrapper h6 {
	font-family: <?php echo ( $font_h6 ? '"' . $font_h6['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h6 ? $font_h6['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h6; ?>px;
	color: <?php echo $text_color_h6; ?>;
	line-height: <?php echo $line_height_h6; ?>px;
}

/* Content Header Settings */
.sv100_sv_content_header {
	background-color: <?php echo $bg_color; ?>;
}

.sv100_sv_content_wrapper pre, .sv100_sv_content_wrapper pre.wp-block-code {
    border-color: <?php echo $bg_color; ?>;
}

.sv100_sv_content_header h1 {
	font-family: <?php echo ( $font_title ? '"' . $font_title['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title ? $font_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title; ?>px;
	color: <?php echo $text_color_title; ?>;
	line-height: <?php echo $line_height_title; ?>px;
}

.sv100_sv_content_header .sv100_sv_content_excerpt p {
	font-family: <?php echo ( $font_excerpt ? '"' . $font_excerpt['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt ? $font_excerpt['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt; ?>px;
	color: <?php echo $text_color_excerpt; ?>;
	line-height: <?php echo $line_height_excerpt; ?>px;
}

.sv100_sv_content_header span {
	color: <?php echo $text_color_info; ?>;
}

/* Content Header Settings (with Thumbnail) */
.sv100_sv_content_header.with-thumbnail .sv100_sv_content_header_background::before {
	background-color: rgba( <?php echo $bg_color_image[0] . ',' . $bg_color_image[1] . ',' . $bg_color_image[2]; ?>, .5 );
}

.sv100_sv_content_header.with-thumbnail h1 {
	color: <?php echo $text_color_title_image; ?>;
}

.sv100_sv_content_header.with-thumbnail .sv100_sv_content_excerpt p {
	color: <?php echo $text_color_excerpt_image; ?>;
}

.sv100_sv_content_header.with-thumbnail span {
	color: <?php echo $text_color_info_image; ?>;
}

/* List */
.sv100_sv_content_list .sv100_sv_content_title a {
	font-family: <?php echo ( $font_title_list ? '"' . $font_title_list['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title_list ? $font_title_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_list; ?>px;
	color: <?php echo $text_color_title_list; ?>;
	line-height: <?php echo $line_height_title_list; ?>px;
}

.sv100_sv_content_list .sv100_sv_content_excerpt p {
	font-family: <?php echo ( $font_excerpt_list ? '"' . $font_excerpt_list['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt_list ? $font_excerpt_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_list; ?>px;
	color: <?php echo $text_color_excerpt_list; ?>;
	line-height: <?php echo $line_height_excerpt_list; ?>px;
	max-height: calc( 4 * <?php echo $line_height_excerpt_list; ?>px );
}

.sv100_sv_content_list .sv100_sv_content_read_more {
	font-family: <?php echo ( $font_more_list ? '"' . $font_more_list['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_more_list ? $font_more_list['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_more_list; ?>px;
	color: <?php echo $text_color_more_list; ?>;
	line-height: <?php echo $line_height_more_list; ?>px;
}

.sv100_sv_content_list .sv100_sv_content_read_more:hover,
.sv100_sv_content_list .sv100_sv_content_read_more:focus {
	color: <?php echo $text_color_more_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_info a {
	color: <?php echo $text_color_info_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_info > div::before {
	background-color: <?php echo $text_color_info_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_title:hover a,
.sv100_sv_content_list .sv100_sv_content_title:focus a,
.sv100_sv_content_list .sv100_sv_content_info a:hover,
.sv100_sv_content_list .sv100_sv_content_info a:focus {
	color: <?php echo $highlight_color_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_read_more::after,
.sv100_sv_content_list .sv100_sv_content_thumbnail > a {
	background-color: <?php echo $highlight_color_list; ?>
}

/* Masonry */
.sv100_sv_content_masonry .sv100_sv_content_wrapper {
	background-color: <?php echo $bg_color_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_categories a,
.sv100_sv_content_masonry .sv100_sv_content_categories a:hover,
.sv100_sv_content_masonry .sv100_sv_content_categories a:focus {
	color: <?php echo $text_color_category_masonry; ?>;
	background-color: <?php echo $bg_color_category_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_title a {
	font-family: <?php echo ( $font_title_masonry ? '"' . $font_title_masonry['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title_masonry ? $font_title_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_masonry; ?>px;
	color: <?php echo $text_color_title_masonry; ?>;
	line-height: <?php echo $line_height_title_masonry; ?>px;
}

.sv100_sv_content_masonry .sv100_sv_content_excerpt p {
	font-family: <?php echo ( $font_excerpt_masonry ? '"' . $font_excerpt_masonry['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt_masonry ? $font_excerpt_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_masonry; ?>px;
	color: <?php echo $text_color_excerpt_masonry; ?>;
	line-height: <?php echo $line_height_excerpt_masonry; ?>px;
}

.sv100_sv_content_masonry .sv100_sv_content_read_more {
	font-family: <?php echo ( $font_more_masonry ? '"' . $font_more_masonry['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_more_masonry ? $font_more_masonry['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_more_masonry; ?>px;
	color: <?php echo $text_color_more_masonry; ?>;
	line-height: <?php echo $line_height_more_masonry; ?>px;
}

.sv100_sv_content_masonry .sv100_sv_content_read_more:hover,
.sv100_sv_content_masonry .sv100_sv_content_read_more:focus {
	color: <?php echo $text_color_more_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_info a {
	color: <?php echo $text_color_info_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_info > div::before {
	background-color: <?php echo $text_color_info_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_title:hover a,
.sv100_sv_content_masonry .sv100_sv_content_title:focus a,
.sv100_sv_content_masonry .sv100_sv_content_info a:hover,
.sv100_sv_content_masonry .sv100_sv_content_info a:focus {
	color: <?php echo $highlight_color_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_read_more::after,
.sv100_sv_content_masonry .sv100_sv_content_thumbnail > a {
	background-color: <?php echo $highlight_color_masonry; ?>;
}

/* Grid */
.sv100_sv_content_grid article {
	background-color: <?php echo $bg_color_grid; ?>;
}

.sv100_sv_content_grid .sv100_sv_content_categories a,
.sv100_sv_content_grid .sv100_sv_content_categories a:hover,
.sv100_sv_content_grid .sv100_sv_content_categories a:focus {
	color: <?php echo $text_color_category_grid; ?>;
	background-color: <?php echo $bg_color_category_grid; ?>;
}

.sv100_sv_content_grid .sv100_sv_content_title {
	font-family: <?php echo ( $font_title_grid ? '"' . $font_title_grid['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title_grid ? $font_title_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_grid; ?>px;
	color: <?php echo $text_color_title_grid; ?>;
	line-height: <?php echo $line_height_title_grid; ?>px;
}

.sv100_sv_content_grid .sv100_sv_content_info > div {
	color: <?php echo $text_color_info_grid; ?>;
}

.sv100_sv_content_grid .sv100_sv_content_info > div::before {
	background-color: <?php echo $text_color_info_grid; ?>;
}

.sv100_sv_content_grid .sv100_sv_content_excerpt {
	background-color: rgba( <?php echo $highlight_color_grid[0] . ',' . $highlight_color_grid[1] . ',' . $highlight_color_grid[2]; ?>, .7 );
}

.sv100_sv_content_grid .sv100_sv_content_excerpt p {
	font-family: <?php echo ( $font_excerpt_grid ? '"' . $font_excerpt_grid['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt_grid ? $font_excerpt_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_grid; ?>px;
	color: <?php echo $text_color_excerpt_grid; ?>;
	line-height: <?php echo $line_height_excerpt_grid; ?>px;
}

<?php if ( $script->get_parent()->has_sidebar() ) { ?>
/* Widget Settings */
.sv100_sv_content_sidebar {
	border-color: <?php echo $bg_color_widget; ?>;
}

.sv100_sv_content_sidebar .widget,
.sv100_sv_content_sidebar .widget a,
.sv100_sv_content_sidebar .widget a:hover,
.sv100_sv_content_sidebar .widget a:focus {
	color: <?php echo $text_color_widget; ?>;
}

.sv100_sv_content_sidebar .widget h3 {
	font-family: <?php echo ( $font_widget_title ? '"' . $font_widget_title['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_widget_title ? $font_widget_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_widget_title; ?>px;
	color: <?php echo $text_color_widget_title; ?>;
	line-height: <?php echo $line_height_widget_title; ?>px;
}

.sv100_sv_content_sidebar .widget ul li,
.sv100_sv_content_sidebar .widget.widget_recent_comments li:hover,
.sv100_sv_content_sidebar .widget.widget_recent_comments li:focus,
.sv100_sv_content_sidebar .widget_nav_menu ul > li.menu-item-has-children:hover,
.sv100_sv_content_sidebar .widget_nav_menu ul > li.menu-item-has-children:focus,
.sv100_sv_content_sidebar .widget.widget_rss ul li:hover,
.sv100_sv_content_sidebar .widget.widget_rss ul li:focus {
	background-color: <?php echo $bg_color_widget; ?>;
}

.sv100_sv_content_sidebar .widget ul li:hover,
.sv100_sv_content_sidebar .widget ul li:focus,
.sv100_sv_content_sidebar .widget_nav_menu ul > li.menu-item-has-children:hover > a,
.sv100_sv_content_sidebar .widget_nav_menu ul > li.menu-item-has-children:focus > a {
	background-color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content_sidebar .widget_recent_comments a:hover,
.sv100_sv_content_sidebar .widget_recent_comments a:focus,
.sv100_sv_content_sidebar .widget_text a:hover,
.sv100_sv_content_sidebar .widget_text a:focus,
.sv100_sv_content_sidebar .widget_tag_cloud a:hover,
.sv100_sv_content_sidebar .widget_tag_cloud a:focus,
.sv100_sv_content_sidebar .widget_rss ul li > a:hover,
.sv100_sv_content_sidebar .widget_rss ul li > a:focus {
	color: <?php echo $highlight_color; ?>;
}

<?php if ( $sv_common_text_color ) { ?>
.sv100_sv_content_sidebar .widget input[type="search"],
.sv100_sv_content_sidebar .widget input::placeholder {
	color: <?php echo $sv_common_text_color; ?>;
}

.sv100_sv_content_sidebar .widget_calendar table td,
.sv100_sv_content_sidebar .widget_calendar table th {
	border-color: <?php echo $sv_common_text_color; ?>;
}
<?php } } ?>