<?php
// Content Header - Image Overlay Settings
$image_overlay_color     = $script->get_parent()->get_setting( 'image_overlay_color' )->run_type()->get_data();
$image_overlay_opacity   = $script->get_parent()->get_setting( 'image_overlay_opacity' )->run_type()->get_data();
// Value is a hex color
list( $r, $g, $b ) = sscanf( $image_overlay_color, "#%02x%02x%02x" );
$image_overlay_color_rgb = $r . ',' . $g . ',' . $b;
?>

.sv100_sv_content_header.with-thumbnail .sv100_sv_content_header_background::before{
background-color: rgba( <?php echo $image_overlay_color_rgb . ',' . $image_overlay_opacity / 100; ?> );
}