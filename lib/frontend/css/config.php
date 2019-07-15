<?php
	// H1
	$h1_font_family				= $script->get_parent()->get_setting( 'h1_font_family' )->run_type()->get_data();
	
	if ( $h1_font_family ) {
		$h1_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h1_font_family );
	} else {
		$h1_font                = false;
	 }

	$h1_font_size				= $script->get_parent()->get_setting( 'h1_font_size' )->run_type()->get_data();
	$h1_text_color				= $script->get_parent()->get_setting( 'h1_text_color' )->run_type()->get_data();
	$h1_line_height				= $script->get_parent()->get_setting( 'h1_line_height' )->run_type()->get_data();
	
	// H2
	$h2_font_family				= $script->get_parent()->get_setting( 'h2_font_family' )->run_type()->get_data();
	
	if ( $h2_font_family ) {
		$h2_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h2_font_family );
	} else {
		$h2_font                = false;
	}
	
	$h2_font_size				= $script->get_parent()->get_setting( 'h2_font_size' )->run_type()->get_data();
	$h2_text_color				= $script->get_parent()->get_setting( 'h2_text_color' )->run_type()->get_data();
	$h2_line_height				= $script->get_parent()->get_setting( 'h2_line_height' )->run_type()->get_data();
	
	// H3
	$h3_font_family				= $script->get_parent()->get_setting( 'h3_font_family' )->run_type()->get_data();
	
	if ( $h3_font_family ) {
		$h3_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h3_font_family );
	} else {
		$h3_font                = false;
	}
	
	$h3_font_size				= $script->get_parent()->get_setting( 'h3_font_size' )->run_type()->get_data();
	$h3_text_color				= $script->get_parent()->get_setting( 'h3_text_color' )->run_type()->get_data();
	$h3_line_height				= $script->get_parent()->get_setting( 'h3_line_height' )->run_type()->get_data();
	
	// H4
	$h4_font_family				= $script->get_parent()->get_setting( 'h4_font_family' )->run_type()->get_data();
	
	if ( $h4_font_family ) {
		$h4_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h4_font_family );
	} else {
		$h4_font                = false;
	}
	
	$h4_font_size				= $script->get_parent()->get_setting( 'h4_font_size' )->run_type()->get_data();
	$h4_text_color				= $script->get_parent()->get_setting( 'h4_text_color' )->run_type()->get_data();
	$h4_line_height				= $script->get_parent()->get_setting( 'h4_line_height' )->run_type()->get_data();
	
	// H5
	$h5_font_family				= $script->get_parent()->get_setting( 'h5_font_family' )->run_type()->get_data();
	
	if ( $h5_font_family ) {
		$h5_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h5_font_family );
	} else {
		$h5_font                = false;
	}
	
	$h5_font_size				= $script->get_parent()->get_setting( 'h5_font_size' )->run_type()->get_data();
	$h5_text_color				= $script->get_parent()->get_setting( 'h5_text_color' )->run_type()->get_data();
	$h5_line_height				= $script->get_parent()->get_setting( 'h5_line_height' )->run_type()->get_data();
	
	// H6
	$h6_font_family				= $script->get_parent()->get_setting( 'h6_font_family' )->run_type()->get_data();
	
	if ( $h6_font_family ) {
		$h6_font				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $h6_font_family );
	} else {
		$h6_font                = false;
	}
	
	$h6_font_size				= $script->get_parent()->get_setting( 'h6_font_size' )->run_type()->get_data();
	$h6_text_color				= $script->get_parent()->get_setting( 'h6_text_color' )->run_type()->get_data();
	$h6_line_height				= $script->get_parent()->get_setting( 'h6_line_height' )->run_type()->get_data();
	
	// SV Header - Position
	$header_fixed				= (
		$script->get_root()->get_module('sv_header')
		&& $script->get_root()->get_module('sv_header')->get_setting( 'position' )->run_type()->get_data()
		&& $script->get_root()->get_module('sv_header')->get_setting( 'position' )->run_type()->get_data() === 'fixed'
	) ? true : false;
	
?>

.sv100_sv_content {
	margin-top: <?php echo $header_fixed ? 80 : 0; ?>px;
}

@media ( min-width: 850px ) {
	.sv100_sv_content {
		margin-top: <?php echo $header_fixed ? 100 : 0; ?>px;
	}
}

.sv100_sv_content_header_content h1,
.sv100_sv_content_wrapper h1 {
	font-family: <?php echo ( $h1_font ? '"' . $h1_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h1_font ?  $h1_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h1_font_size; ?>px;
	color: <?php echo $h1_text_color; ?>;
	line-height: <?php echo $h1_line_height; ?>px;
}

.sv100_sv_content_wrapper h2 {
	font-family: <?php echo ( $h2_font ? '"' . $h2_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h2_font ? $h2_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h2_font_size; ?>px;
	color: <?php echo $h2_text_color; ?>;
	line-height: <?php echo $h2_line_height; ?>px;
}

.sv100_sv_content_wrapper h3 {
	font-family: <?php echo ( $h3_font ? '"' . $h3_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h3_font ? $h3_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h3_font_size; ?>px;
	color: <?php echo $h3_text_color; ?>;
	line-height: <?php echo $h3_line_height; ?>px;
}

.sv100_sv_content_wrapper h4 {
	font-family: <?php echo ( $h4_font ? '"' . $h4_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h4_font ? $h4_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h4_font_size; ?>px;
	color: <?php echo $h4_text_color; ?>;
	line-height: <?php echo $h4_line_height; ?>px;
}

.sv100_sv_content_wrapper h5 {
	font-family: <?php echo ( $h5_font ? '"' . $h5_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h5_font ? $h5_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h5_font_size; ?>px;
	color: <?php echo $h5_text_color; ?>;
	line-height: <?php echo $h5_line_height; ?>px;
}

.sv100_sv_content_wrapper h6 {
	font-family: <?php echo ( $h6_font ? '"' . $h6_font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $h6_font ? $h6_font['weight'] : '400' ); ?>;
	font-size: <?php echo $h6_font_size; ?>px;
	color: <?php echo $h6_text_color; ?>;
	line-height: <?php echo $h6_line_height; ?>px;
}
