<?php
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
$text_color_info			= $script->get_parent()->get_header_content_author_date_color();
?>
.sv100_sv_content_header h1 {
<?php echo ( $font_title ? 'font-family: "' . $font_title['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_title ? $font_title['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_title_mobile; ?>px;
color: <?php echo $text_color_title; ?>;
line-height: <?php echo $line_height_title_mobile; ?>px;
}

@media ( min-width: 850px ) {
.sv100_sv_content_header h1 {
font-size: <?php echo $font_size_title; ?>px;
line-height: <?php echo $line_height_title; ?>px;
}
}

.sv100_sv_content_header .sv100_sv_content_excerpt p,
.sv100_sv_content_header .sv100_sv_content_header_content > p,
.sv100_sv_content_header .sv100_sv_content_header_content a {
<?php echo ( $font_excerpt ? 'font-family: "' . $font_excerpt['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_excerpt ? $font_excerpt['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_excerpt_mobile; ?>px;
color: <?php echo $text_color_excerpt; ?>;
line-height: <?php echo $line_height_excerpt_mobile; ?>px;
}

@media ( min-width: 850px ) {
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