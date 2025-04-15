<?php
/*
Plugin Name: MI Scroll To Top
Plugin URI: https://tonmoy.top/plugins/mi-scroll-to-top/readme.txt
Author: Moyeenul Islam Tonmoy
Author URI: https://tonmoy.top
Description: Just add Scroll To Top functionality in any wordpress website.
Version: 1.0.0
*/

add_action('wp_footer', 'scroll_to_top_functionality');

function scroll_to_top_functionality() {
	?>
	
	<div class="scroll-to-top">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<?php
}

add_action('wp_enqueue_scripts', 'scroll_to_top_styles');

function scroll_to_top_styles() {
	wp_enqueue_style('plugin-font-awesome', PLUGINS_URL('css/all.min.css', __FILE__));
	wp_enqueue_style('plugin-custom', PLUGINS_URL('css/custom.css', __FILE__));

	wp_enqueue_script('plugin-main-js', PLUGINS_URL('js/main.js', __FILE__), array('jquery'), '', false );
}



?>