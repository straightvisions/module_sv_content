<?php
	$highlight_color			= $script->get_parent()->get_setting( 'highlight_color' )->run_type()->get_data();
?>

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