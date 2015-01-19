<?php 
function estilo_temas() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('fontawsome_css', get_template_directory_uri() . '/css/font-awesome.min.css');

}

add_action ('wp_enqueue_scripts', 'estilo_temas');

?>