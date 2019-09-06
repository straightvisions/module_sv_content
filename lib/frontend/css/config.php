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
	$font_size_h1_mobile		= $script->get_parent()->get_setting( 'font_size_h1_mobile' )->run_type()->get_data();
	$text_color_h1				= $script->get_parent()->get_setting( 'text_color_h1' )->run_type()->get_data();
	$line_height_h1				= $script->get_parent()->get_setting( 'line_height_h1' )->run_type()->get_data();
	$line_height_h1_mobile		= $script->get_parent()->get_setting( 'line_height_h1_mobile' )->run_type()->get_data();
	
	// H2
	$font_family_h2				= $script->get_parent()->get_setting( 'font_family_h2' )->run_type()->get_data();
	
	if ( $font_family_h2 ) {
		$font_h2				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h2 );
	} else {
		$font_h2                = false;
	}
	
	$font_size_h2				= $script->get_parent()->get_setting( 'font_size_h2' )->run_type()->get_data();
	$font_size_h2_mobile		= $script->get_parent()->get_setting( 'font_size_h2_mobile' )->run_type()->get_data();
	$text_color_h2				= $script->get_parent()->get_setting( 'text_color_h2' )->run_type()->get_data();
	$line_height_h2				= $script->get_parent()->get_setting( 'line_height_h2' )->run_type()->get_data();
	$line_height_h2_mobile		= $script->get_parent()->get_setting( 'line_height_h2_mobile' )->run_type()->get_data();
	
	// H3
	$font_family_h3				= $script->get_parent()->get_setting( 'font_family_h3' )->run_type()->get_data();
	
	if ( $font_family_h3 ) {
		$font_h3				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h3 );
	} else {
		$font_h3              	= false;
	}
	
	$font_size_h3				= $script->get_parent()->get_setting( 'font_size_h3' )->run_type()->get_data();
	$font_size_h3_mobile		= $script->get_parent()->get_setting( 'font_size_h3_mobile' )->run_type()->get_data();
	$text_color_h3				= $script->get_parent()->get_setting( 'text_color_h3' )->run_type()->get_data();
	$line_height_h3				= $script->get_parent()->get_setting( 'line_height_h3' )->run_type()->get_data();
	$line_height_h3_mobile		= $script->get_parent()->get_setting( 'line_height_h3_mobile' )->run_type()->get_data();
	
	// H4
	$font_family_h4				= $script->get_parent()->get_setting( 'font_family_h4' )->run_type()->get_data();
	
	if ( $font_family_h4 ) {
		$font_h4				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h4 );
	} else {
		$font_h4                = false;
	}
	
	$font_size_h4				= $script->get_parent()->get_setting( 'font_size_h4' )->run_type()->get_data();
	$font_size_h4_mobile		= $script->get_parent()->get_setting( 'font_size_h4_mobile' )->run_type()->get_data();
	$text_color_h4				= $script->get_parent()->get_setting( 'text_color_h4' )->run_type()->get_data();
	$line_height_h4				= $script->get_parent()->get_setting( 'line_height_h4' )->run_type()->get_data();
	$line_height_h4_mobile		= $script->get_parent()->get_setting( 'line_height_h4_mobile' )->run_type()->get_data();
	
	// H5
	$font_family_h5				= $script->get_parent()->get_setting( 'font_family_h5' )->run_type()->get_data();
	
	if ( $font_family_h5 ) {
		$font_h5				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h5 );
	} else {
		$font_h5                = false;
	}
	
	$font_size_h5				= $script->get_parent()->get_setting( 'font_size_h5' )->run_type()->get_data();
	$font_size_h5_mobile		= $script->get_parent()->get_setting( 'font_size_h5_mobile' )->run_type()->get_data();
	$text_color_h5				= $script->get_parent()->get_setting( 'text_color_h5' )->run_type()->get_data();
	$line_height_h5				= $script->get_parent()->get_setting( 'line_height_h5' )->run_type()->get_data();
	$line_height_h5_mobile		= $script->get_parent()->get_setting( 'line_height_h5_mobile' )->run_type()->get_data();
	
	// H6
	$font_family_h6				= $script->get_parent()->get_setting( 'font_family_h6' )->run_type()->get_data();
	
	if ( $font_family_h6 ) {
		$font_h6				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_h6 );
	} else {
		$font_h6                = false;
	}
	
	$font_size_h6				= $script->get_parent()->get_setting( 'font_size_h6' )->run_type()->get_data();
	$font_size_h6_mobile		= $script->get_parent()->get_setting( 'font_size_h6_mobile' )->run_type()->get_data();
	$text_color_h6				= $script->get_parent()->get_setting( 'text_color_h6' )->run_type()->get_data();
	$line_height_h6				= $script->get_parent()->get_setting( 'line_height_h6' )->run_type()->get_data();
	$line_height_h6_mobile		= $script->get_parent()->get_setting( 'line_height_h6_mobile' )->run_type()->get_data();
	
	// Color Settings
	$highlight_color			= $script->get_parent()->get_setting( 'highlight_color' )->run_type()->get_data();
	
	// ### Content Header Settings ###
    // Content Header - Alignment
    $text_align_title		    = $script->get_parent()->get_setting( 'text_align_title' )->run_type()->get_data();
    $block_align_title		    = $script->get_parent()->get_setting( 'block_align_title' )->run_type()->get_data();
    $text_align_excerpt		    = $script->get_parent()->get_setting( 'text_align_excerpt' )->run_type()->get_data();
    $block_align_excerpt		= $script->get_parent()->get_setting( 'block_align_excerpt' )->run_type()->get_data();

	// Content Header - Title
	$font_family_title			= $script->get_parent()->get_setting( 'font_family_title' )->run_type()->get_data();
	
	if ( $font_family_title ) {
		$font_title				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title );
	} else {
		$font_title             = false;
	}
	
	$font_size_title			= $script->get_parent()->get_setting( 'font_size_title' )->run_type()->get_data();
	$font_size_title_mobile		= $script->get_parent()->get_setting( 'font_size_title_mobile' )->run_type()->get_data();
	$text_color_title			= $script->get_parent()->get_header_content_title_color();
	$line_height_title			= $script->get_parent()->get_setting( 'line_height_title' )->run_type()->get_data();
	$line_height_title_mobile	= $script->get_parent()->get_setting( 'line_height_title_mobile' )->run_type()->get_data();
	
	// Content Header - Excerpt
	$font_family_excerpt		= $script->get_parent()->get_setting( 'font_family_excerpt' )->run_type()->get_data();
	
	if ( $font_family_excerpt ) {
		$font_excerpt			= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_excerpt );
	} else {
		$font_excerpt           = false;
	}
	
	$font_size_excerpt			= $script->get_parent()->get_setting( 'font_size_excerpt' )->run_type()->get_data();
	$font_size_excerpt_mobile	= $script->get_parent()->get_setting( 'font_size_excerpt_mobile' )->run_type()->get_data();
	$text_color_excerpt			= $script->get_parent()->get_header_content_excerpt_color();
	$line_height_excerpt		= $script->get_parent()->get_setting( 'line_height_excerpt' )->run_type()->get_data();
	$line_height_excerpt_mobile	= $script->get_parent()->get_setting( 'line_height_excerpt_mobile' )->run_type()->get_data();
	
	// Content Header - Color Settings
	$bg_color					= $script->get_parent()->get_setting( 'bg_color' )->run_type()->get_data();
	$text_color_info			= $script->get_parent()->get_header_content_author_date_color();

	// Content Header - Image Overlay Settings
	$image_overlay_color     = $script->get_parent()->get_setting( 'image_overlay_color' )->run_type()->get_data();
	$image_overlay_opacity   = $script->get_parent()->get_setting( 'image_overlay_opacity' )->run_type()->get_data();
	// Value is a hex color
	list( $r, $g, $b ) = sscanf( $image_overlay_color, "#%02x%02x%02x" );
	$image_overlay_color_rgb = $r . ',' . $g . ',' . $b;

	$header_content_overlay_color     = $script->get_parent()->get_header_content_overlay_color();
	$header_content_overlay_opacity   = $script->get_parent()->get_header_content_overlay_opacity();
	// Value is a hex color
	list( $r, $g, $b ) = sscanf( $header_content_overlay_color, "#%02x%02x%02x" );
	$header_content_overlay_color_rgb = $r . ',' . $g . ',' . $b;

	
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
		// ### Sidebar Settings ###
		$sidebar_right_post_sticky	= $script->get_parent()->get_setting( 'sidebar_right_post_sticky' )->run_type()->get_data();
		$sidebar_right_page_sticky	= $script->get_parent()->get_setting( 'sidebar_right_page_sticky' )->run_type()->get_data();
		
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
.sv100_sv_content_wrapper .sv100_sv_content_page_links > .post-page-numbers,
.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers,
.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:hover,
.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:focus,
.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:visited,
.sv100_sv_content_wrapper .sv100_sv_content_page_links > a.post-page-numbers:active,
input,
button {
	color: <?php echo $sv_common_text_color; ?>;
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
	border-color: <?php echo $sv_common_text_color; ?>;
}

input[type="checkbox"]::before,
input[type="radio"]::before {
	background-color: <?php echo $sv_common_text_color; ?>;
}
<?php } ?>

/* Color Settings */
a:hover,
a:focus,
.sv100_sv_content_header > h1 > span,
code, pre.wp-block-code > code,
button:hover,
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus,
input[type="reset"]:hover,
input[type="reset"]:focus {
	color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content_page_links .post-page-numbers::after {
	background-color: <?php echo $highlight_color; ?>;
}

button:hover,
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus,
input[type="reset"]:hover,
input[type="reset"]:focus {
	border-color: <?php echo $highlight_color; ?>;
}

{
	margin-top: <?php echo ( $header_fixed === true ) ? 80 : 0; ?>px;
}

body.admin-bar {
	margin-top: 0;
}

@media ( min-width: 850px ) {
	body.admin-bar .sv100_sv_content,
	{
		margin-top: <?php echo ( $header_fixed === true ) ? 100 : 0; ?>px;
	}
}

/* Headings */
.sv100_sv_content_header h1,
.sv100_sv_content_wrapper h1 {
	font-family: <?php echo ( $font_h1 ? '"' . $font_h1['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h1 ?  $font_h1['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h1_mobile; ?>px;
	color: <?php echo $text_color_h1; ?>;
	line-height: <?php echo $line_height_h1_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h1,
	.sv100_sv_content_wrapper h1 {
		font-size: <?php echo $font_size_h1; ?>px;
		line-height: <?php echo $line_height_h1; ?>px;
	}
}

.sv100_sv_content_wrapper h2 {
	font-family: <?php echo ( $font_h2 ? '"' . $font_h2['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h2 ? $font_h2['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h2_mobile; ?>px;
	color: <?php echo $text_color_h2; ?>;
	line-height: <?php echo $line_height_h2_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h2,
	.sv100_sv_content_wrapper h2 {
		font-size: <?php echo $font_size_h2; ?>px;
		line-height: <?php echo $line_height_h2; ?>px;
	}
}

.sv100_sv_content_wrapper h3 {
	font-family: <?php echo ( $font_h3 ? '"' . $font_h3['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h3 ? $font_h3['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h3_mobile; ?>px;
	color: <?php echo $text_color_h3; ?>;
	line-height: <?php echo $line_height_h3_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h3,
	.sv100_sv_content_wrapper h3 {
		font-size: <?php echo $font_size_h3; ?>px;
		line-height: <?php echo $line_height_h3; ?>px;
	}
}

.sv100_sv_content_wrapper h4 {
	font-family: <?php echo ( $font_h4 ? '"' . $font_h4['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h4 ? $font_h4['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h4_mobile; ?>px;
	color: <?php echo $text_color_h4; ?>;
	line-height: <?php echo $line_height_h4_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h4,
	.sv100_sv_content_wrapper h4 {
		font-size: <?php echo $font_size_h4; ?>px;
		line-height: <?php echo $line_height_h4; ?>px;
	}
}

.sv100_sv_content_wrapper h5 {
	font-family: <?php echo ( $font_h5 ? '"' . $font_h5['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h5 ? $font_h5['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h5_mobile; ?>px;
	color: <?php echo $text_color_h5; ?>;
	line-height: <?php echo $line_height_h5_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h5,
	.sv100_sv_content_wrapper h5 {
		font-size: <?php echo $font_size_h5; ?>px;
		line-height: <?php echo $line_height_h5; ?>px;
	}
}

.sv100_sv_content_wrapper h6 {
	font-family: <?php echo ( $font_h6 ? '"' . $font_h6['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_h6 ? $font_h6['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_h6_mobile; ?>px;
	color: <?php echo $text_color_h6; ?>;
	line-height: <?php echo $line_height_h6_mobile; ?>px;
}

@media( min-width: 850px ) {
	.sv100_sv_content_header h6,
	.sv100_sv_content_wrapper h6 {
		font-size: <?php echo $font_size_h6; ?>px;
		line-height: <?php echo $line_height_h6; ?>px;
	}
}

/* Content Header Settings */
.sv100_sv_content_header {
	background-color: <?php echo $bg_color; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content > * {
    text-align: <?php echo $text_align_title; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content > .sv100_sv_content_excerpt,
.sv100_sv_content_header .sv100_sv_content_header_content > p {
    text-align: <?php echo $text_align_excerpt; ?>;
}

.sv100_sv_content_header .sv100_sv_content_header_content_wrapper {
	width:100%;
	margin:0 auto;
	max-width:<?php echo $script->get_parent()->get_setting( 'content_header_wrapper_max_width' )->run_type()->get_data(); ?>;
}
.sv100_sv_content_header .sv100_sv_content_header_content {
    align-items: <?php
        switch ( $block_align_title ) {
            case 'left':
                echo 'flex-start';
                break;
            case 'center':
                echo 'center';
                break;
            case 'right':
                echo 'flex-end';
        }; ?>;

	margin:<?php echo $script->get_parent()->get_setting( 'content_header_align' )->run_type()->get_data(); ?>;


	max-width:<?php echo $script->get_parent()->get_setting( 'content_header_max_width' )->run_type()->get_data(); ?>;
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

.sv100_sv_content_wrapper pre, .sv100_sv_content_wrapper pre.wp-block-code {
    border-color: <?php echo $bg_color; ?>;
}

.sv100_sv_content_header h1 {
	font-family: <?php echo ( $font_title ? '"' . $font_title['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title ? $font_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title_mobile; ?>px;
	color: <?php echo $text_color_title; ?>;
	line-height: <?php echo $line_height_title_mobile; ?>px;
}

@media ( min-width: 750px ) {
	.sv100_sv_content_header h1 {
		font-size: <?php echo $font_size_title; ?>px;
		line-height: <?php echo $line_height_title; ?>px;
	}
}

.sv100_sv_content_header .sv100_sv_content_excerpt p,
.sv100_sv_content_header .sv100_sv_content_header_content > p,
.sv100_sv_content_header .sv100_sv_content_header_content a {
	font-family: <?php echo ( $font_excerpt ? '"' . $font_excerpt['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_excerpt ? $font_excerpt['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_excerpt_mobile; ?>px;
	color: <?php echo $text_color_excerpt; ?>;
	line-height: <?php echo $line_height_excerpt_mobile; ?>px;
}

@media ( min-width: 750px ) {
	.sv100_sv_content_header .sv100_sv_content_excerpt p,
    .sv100_sv_content_header .sv100_sv_content_header_content > p,
    .sv100_sv_content_header .sv100_sv_content_header_content a {
		font-size: <?php echo $font_size_excerpt; ?>px;
		line-height: <?php echo $line_height_excerpt; ?>px;
	}
}

.sv100_sv_content_header span,
.sv100_sv_content_header .sv100_sv_content_meta {
	color: <?php echo $text_color_info; ?>;
}

/* Content Header Settings (with Thumbnail) */
.sv100_sv_content_header.with-thumbnail .sv100_sv_content_header_background::before {
	background-color: rgba( <?php echo $image_overlay_color_rgb . ',' . $image_overlay_opacity / 100; ?> );
}

.sv100_sv_content_header_content {
background-color: rgba( <?php echo $header_content_overlay_color_rgb . ',' . $header_content_overlay_opacity / 100; ?> );
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

.sv100_sv_content_grid .sv100_sv_content_info > div,
.sv100_sv_content_grid .sv100_sv_content_info > p {
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
/* Sidebar Settings */
<?php if ( $sidebar_right_post_sticky ) { ?>
.sv100_sv_content_wrapper .sv100_sv_sidebar_sv_content_post_right {
	position: sticky;
}
<?php
}

if ( $sidebar_right_page_sticky ) {
?>
.sv100_sv_content_wrapper .sv100_sv_sidebar_sv_content_page_right {
	position: sticky;
}
<?php } ?>

/* Widget Settings */
.sv100_sv_content_wrapper .sv100_sv_sidebar {
	border-color: <?php echo $bg_color_widget; ?>;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget a,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget a:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget a:focus {
	color: <?php echo $text_color_widget; ?>;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget h3 {
	font-family: <?php echo ( $font_widget_title ? '"' . $font_widget_title['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_widget_title ? $font_widget_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_widget_title; ?>px;
	color: <?php echo $text_color_widget_title; ?>;
	line-height: <?php echo $line_height_widget_title; ?>px;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget ul li,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget.widget_recent_comments li:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget.widget_recent_comments li:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_nav_menu ul > li.menu-item-has-children:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_nav_menu ul > li.menu-item-has-children:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget.widget_rss ul li:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget.widget_rss ul li:focus {
	background-color: <?php echo $bg_color_widget; ?>;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget ul li:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget ul li:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_nav_menu ul > li.menu-item-has-children:hover > a,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_nav_menu ul > li.menu-item-has-children:focus > a {
	background-color: <?php echo $highlight_color; ?>;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_recent_comments a:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_recent_comments a:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_text a:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_text a:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_tag_cloud a:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_tag_cloud a:focus,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_rss ul li > a:hover,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_rss ul li > a:focus {
	color: <?php echo $highlight_color; ?>;
}

<?php if ( $sv_common_text_color ) { ?>
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget input[type="search"],
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget input::placeholder {
	color: <?php echo $sv_common_text_color; ?>;
}

.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_calendar table td,
.sv100_sv_content_wrapper .sv100_sv_sidebar .widget_calendar table th {
	border-color: <?php echo $sv_common_text_color; ?>;
}
<?php } } ?>

/* Sidebar - Alignment */
<?php
    if ( count( $script->get_parent()->get_module( 'sv_sidebar' )->get_sidebars( $script->get_parent() ) ) > 0 ) {
        foreach ( $script->get_parent()->get_module( 'sv_sidebar' )->get_sidebars( $script->get_parent() ) as $sidebar ) {
            $value = $script->get_parent()->get_setting( $sidebar['id'] )->run_type()->get_data();
            
            switch ( $value ) {
                case 'left':
                    $value = 'flex-start';
                    break;
				case 'right':
					$value = 'flex-end';
					break;
            }
            
            echo '.' . $sidebar['id'] . '{';
            echo 'align-items: ' . $value . ';';
            echo '}';
		}
	}
?>
