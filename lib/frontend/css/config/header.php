<?php
// SV Header - Position
$header_fixed				= (
	$script->get_parent()->get_module( 'sv_header' )
	&& $script->get_parent()->get_module( 'sv_header' )->get_setting( 'position' )->run_type()->get_data()
	&& $script->get_parent()->get_module( 'sv_header' )->get_setting( 'position' )->run_type()->get_data() === 'fixed'
) ? true : false;

$bg_color					= $script->get_parent()->get_setting( 'bg_color' )->run_type()->get_data();
?>
body.admin-bar .sv100_sv_content{
	margin-top: 0;
}
@media ( min-width: 850px ) {
	body.admin-bar .sv100_sv_content{
		margin-top: <?php echo ( $header_fixed === true ) ? 100 : 0; ?>px;
	}
}

/* Content Header Settings */
.sv100_sv_content_header {
background-color: <?php echo $bg_color; ?>;
}

.sv100_sv_content_wrapper pre, .sv100_sv_content_wrapper pre.wp-block-code {
border-color: <?php echo $bg_color; ?>;
}