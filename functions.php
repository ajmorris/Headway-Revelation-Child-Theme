<?php

add_action('headway_setup_child_theme', 'hyt_remove_theme_support');

function hyt_remove_theme_support() {
	remove_theme_support('headway-design-editor');
	remove_theme_support('headway-structure-css');
}

add_action('headway_html_open', 'aj_add_header');

function aj_add_header() {
	echo '<div class="aj-header">Hello from our new header!</div>';
}

add_action('headway_whitewrap_close', 'aj_add_footer');

function aj_add_footer() {
	echo '<div class="aj-footer">Hello from our new footer!</div>';
}