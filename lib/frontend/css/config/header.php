<?php
$bg_color					= $script->get_parent()->get_setting( 'bg_color' )->run_type()->get_data();
?>
/* Content Header Settings */
.sv100_sv_content_header {
background-color: <?php echo $bg_color; ?>;
}