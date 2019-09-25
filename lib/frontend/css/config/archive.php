<?php
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

?>

/* List */
.sv100_sv_content_list .sv100_sv_content_title a {
<?php echo ( $font_title_list ? 'font-family: "' . $font_title_list['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_title_list ? $font_title_list['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_title_list; ?>px;
color: <?php echo $text_color_title_list; ?>;
line-height: <?php echo $line_height_title_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_excerpt p {
<?php echo ( $font_excerpt_list ? 'font-family: "' . $font_excerpt_list['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_excerpt_list ? $font_excerpt_list['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_excerpt_list; ?>px;
color: <?php echo $text_color_excerpt_list; ?>;
line-height: <?php echo $line_height_excerpt_list; ?>;
}

.sv100_sv_content_list .sv100_sv_content_read_more {
<?php echo ( $font_more_list ? 'font-family: "' . $font_more_list['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_more_list ? $font_more_list['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_more_list; ?>px;
color: <?php echo $text_color_more_list; ?>;
line-height: <?php echo $line_height_more_list; ?>;
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
<?php echo ( $font_title_masonry ? 'font-family: "' . $font_title_masonry['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_title_masonry ? $font_title_masonry['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_title_masonry; ?>px;
color: <?php echo $text_color_title_masonry; ?>;
line-height: <?php echo $line_height_title_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_excerpt p {
<?php echo ( $font_excerpt_masonry ? 'font-family: "' . $font_excerpt_masonry['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_excerpt_masonry ? $font_excerpt_masonry['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_excerpt_masonry; ?>px;
color: <?php echo $text_color_excerpt_masonry; ?>;
line-height: <?php echo $line_height_excerpt_masonry; ?>;
}

.sv100_sv_content_masonry .sv100_sv_content_read_more {
<?php echo ( $font_more_masonry ? 'font-family: "' . $font_more_masonry['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_more_masonry ? $font_more_masonry['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_more_masonry; ?>px;
color: <?php echo $text_color_more_masonry; ?>;
line-height: <?php echo $line_height_more_masonry; ?>;
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
<?php echo ( $font_title_grid ? 'font-family: "' . $font_title_grid['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_title_grid ? $font_title_grid['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_title_grid; ?>px;
color: <?php echo $text_color_title_grid; ?>;
line-height: <?php echo $line_height_title_grid; ?>;
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
<?php echo ( $font_excerpt_grid ? 'font-family: "' . $font_excerpt_grid['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_excerpt_grid ? $font_excerpt_grid['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_excerpt_grid; ?>px;
color: <?php echo $text_color_excerpt_grid; ?>;
line-height: <?php echo $line_height_excerpt_grid; ?>;
}