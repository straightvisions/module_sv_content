<?php if ( $script->get_parent()->has_sidebar() ) {
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

?>
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
	<?php echo ( $font_widget_title ? 'font-family: "' . $font_widget_title['family'] . '", sans-serif;' : '' ); ?>
	font-weight: <?php echo ( $font_widget_title ? $font_widget_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_widget_title; ?>px;
	color: <?php echo $text_color_widget_title; ?>;
	line-height: <?php echo $line_height_widget_title; ?>;
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