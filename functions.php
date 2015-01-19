<?php 
function estilo_temas() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
}

add_action ('wp_enqueue_scripts', 'estilo_temas');

?>