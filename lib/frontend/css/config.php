<?php
	// SV Header - Position
	$header_fixed				= (
		$script->get_root()->get_module('sv_header')
		&& $script->get_root()->get_module('sv_header')->get_setting( 'position' )->run_type()->get_data()
		&& $script->get_root()->get_module('sv_header')->get_setting( 'position' )->run_type()->get_data() === 'fixed'
	) ? true : false;
	
	// ##### Content Settings #####
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
	$color_highlight			= $script->get_parent()->get_setting( 'color_highlight' )->run_type()->get_data();
	
	// ##### Post Listing Settings #####
	// ##### LIST #####
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
	$color_highlight_list		= $script->get_parent()->get_setting( 'color_highlight_list' )->run_type()->get_data();
	
	// ##### MASONRY #####
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
	$color_highlight_masonry	= $script->get_parent()->get_setting( 'color_highlight_masonry' )->run_type()->get_data();
	
	// ##### GRID #####
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
	$color_highlight_grid		= sscanf( $script->get_parent()->get_setting( 'color_highlight_grid' )->run_type()->get_data(), "#%02x%02x%02x" );
?>

/* ##### Content Settings ##### */
.sv100_sv_content {
	margin-top: <?php echo $header_fixed ? 80 : 0; ?>px;
}

@media ( min-width: 850px ) {
	.sv100_sv_content {
		margin-top: <?php echo $header_fixed ? 100 : 0; ?>px;
	}
}

.sv100_sv_content a:hover,
.sv100_sv_content a:focus,
.sv100_sv_content_header > h1 > span {
	color: <?php echo $color_highlight; ?>;
}

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

/* ##### Post Listing Settings ##### */
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
	color: <?php echo $color_highlight_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_read_more::after,
.sv100_sv_content_list .sv100_sv_content_thumbnail > a {
	background-color: <?php echo $color_highlight_list; ?>
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
	color: <?php echo $color_highlight_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_read_more::after,
.sv100_sv_content_masonry .sv100_sv_content_thumbnail > a {
	background-color: <?php echo $color_highlight_masonry; ?>;
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
	background-color: rgba( <?php echo $color_highlight_grid[0] . ',' . $color_highlight_grid[1] . ',' . $color_highlight_grid[2]; ?>, .7 );
}

.sv100_sv_content_grid .sv100_sv_content_excerpt p {
	font-family: <?php echo ( $font_excerpt_grid ? '"' . $font_excerpt_grid['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt_grid ? $font_excerpt_grid['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_grid; ?>px;
	color: <?php echo $text_color_excerpt_grid; ?>;
	line-height: <?php echo $line_height_excerpt_grid; ?>px;
}
