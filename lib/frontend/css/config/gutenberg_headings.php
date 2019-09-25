<?php
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
	?>

/* Headings */
.sv100_sv_content_wrapper h1 {
<?php echo ( $font_h1 ? 'font-family: "' . $font_h1['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h1 ?  $font_h1['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h1_mobile; ?>px;
color: <?php echo $text_color_h1; ?>;
line-height: <?php echo $line_height_h1_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_wrapper h1 {
font-size: <?php echo $font_size_h1; ?>px;
line-height: <?php echo $line_height_h1; ?>;
}
}

.sv100_sv_content_wrapper h2 {
<?php echo ( $font_h2 ? 'font-family: "' . $font_h2['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h2 ? $font_h2['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h2_mobile; ?>px;
color: <?php echo $text_color_h2; ?>;
line-height: <?php echo $line_height_h2_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_header h2,
.sv100_sv_content_wrapper h2 {
font-size: <?php echo $font_size_h2; ?>px;
line-height: <?php echo $line_height_h2; ?>;
}
}

.sv100_sv_content_wrapper h3 {
<?php echo ( $font_h3 ? 'font-family: "' . $font_h3['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h3 ? $font_h3['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h3_mobile; ?>px;
color: <?php echo $text_color_h3; ?>;
line-height: <?php echo $line_height_h3_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_header h3,
.sv100_sv_content_wrapper h3 {
font-size: <?php echo $font_size_h3; ?>px;
line-height: <?php echo $line_height_h3; ?>;
}
}

.sv100_sv_content_wrapper h4 {
<?php echo ( $font_h4 ? 'font-family: "' . $font_h4['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h4 ? $font_h4['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h4_mobile; ?>px;
color: <?php echo $text_color_h4; ?>;
line-height: <?php echo $line_height_h4_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_header h4,
.sv100_sv_content_wrapper h4 {
font-size: <?php echo $font_size_h4; ?>px;
line-height: <?php echo $line_height_h4; ?>;
}
}

.sv100_sv_content_wrapper h5 {
<?php echo ( $font_h5 ? 'font-family: "' . $font_h5['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h5 ? $font_h5['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h5_mobile; ?>px;
color: <?php echo $text_color_h5; ?>;
line-height: <?php echo $line_height_h5_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_header h5,
.sv100_sv_content_wrapper h5 {
font-size: <?php echo $font_size_h5; ?>px;
line-height: <?php echo $line_height_h5; ?>;
}
}

.sv100_sv_content_wrapper h6 {
<?php echo ( $font_h6 ? 'font-family: "' . $font_h6['family'] . '", sans-serif;' : '' ); ?>
font-weight: <?php echo ( $font_h6 ? $font_h6['weight'] : '400' ); ?>;
font-size: <?php echo $font_size_h6_mobile; ?>px;
color: <?php echo $text_color_h6; ?>;
line-height: <?php echo $line_height_h6_mobile; ?>;
}

@media( min-width: 850px ) {
.sv100_sv_content_header h6,
.sv100_sv_content_wrapper h6 {
font-size: <?php echo $font_size_h6; ?>px;
line-height: <?php echo $line_height_h6; ?>;
}
}