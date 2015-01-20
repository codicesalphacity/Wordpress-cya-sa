<?php
	require_once('wp_bootstrap_navwalker.php');

	function estilos_temas(){

		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('fontawsome_css', get_template_directory_uri() . '/css/font-awesome.min.css');

	}
	add_action('wp_enqueue_scripts','estilos_temas');

	function temas_js(){

		global $wp_scripts;

		wp_register_script('html5_shiv','https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js','','',false);
		wp_register_script('respond_js','https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js','','',false);
	
		$wp_scripts->add_data('html5_shiv','conditional','lt IE 9');
		$wp_scripts->add_data('respond_js','conditional','lt IE 9');

		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'',true);
	}

	
	add_action('wp_enqueue_scripts','temas_js');
	add_theme_support( 'post-thumbnails' ); 
	/* add_filter('show_admin_bar',_return_false); */ /* Apagar barra de Wordpress*/

	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'Wordpress-cya-sa' ),
	) );


	function crear_widget( $nombre, $id, $descripcion ) {
		register_sidebar(array(
			'name' => __( $nombre ),	 
			'id' => $id, 
			'description' => __( $descripcion ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
	crear_widget('Banner Pagina Principal Medio','principal-medio','Se mostrará en el medio de la página principal del sitio.');
	crear_widget('Pagina Principal Izquierda','principal-izquierda','Se mostrará en la parte izquierda de la página principal del sitio.');
	crear_widget('Pagina Principal Centro',   'principal-centro','Se mostrará en el centro de la página principal del sitio.');
	crear_widget('Pagina Principal Derecha',  'principal-derecha','Se mostrará en la parte derecha de la página principal del sitio.');
	crear_widget('Pagina Principal Abajo',  'principal-abajo','Se mostrará en la parte de abajo  de la página principal del sitio.');


?>