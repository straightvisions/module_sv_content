<?php
$header_content_overlay_color     = $script->get_parent()->get_header_content_overlay_color();
$header_content_overlay_opacity   = $script->get_parent()->get_header_content_overlay_opacity();
// Value is a hex color
list( $r, $g, $b ) = sscanf( $header_content_overlay_color, "#%02x%02x%02x" );
$header_content_overlay_color_rgb = $r . ',' . $g . ',' . $b;
?>

.sv100_sv_content_header_content {
background-color: rgba( <?php echo $header_content_overlay_color_rgb . ',' . $header_content_overlay_opacity / 100; ?> );
}
