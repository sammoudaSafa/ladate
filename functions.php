<?php
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_styles() {
   wp_enqueue_style( 'style-ladate', get_template_directory_uri().'/style.css' );
}
?>