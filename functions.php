<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function () {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
	} );

	add_filter( 'template_include', function ( $template ) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	} );

	return;
}

Timber::$dirname = array( 'templates', 'views' );

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );

		//unload jQuery when not admin
		add_filter( 'wp_default_scripts', array( $this, 'removejQuery' ) );

		//load and save custom field directly from json
		add_filter( 'acf/settings/load_json', array( $this, 'acf_json_load_point' ) );
		add_filter( 'acf/settings/save_json', array( $this, 'acf_json_save_point' ) );
		add_action( 'after_setup_theme', array( $this, 'register_my_menu' ) );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );

		parent::__construct();
	}

	function register_my_menu() {
		register_nav_menu( 'header-menu', 'header Menu' );
		register_nav_menu( 'footer-menu', 'footer Menu' );
	}

	function acf_json_load_point( $paths ) {

		// remove original path (optional)
		unset( $paths[0] );


		// append path
		$paths[] = get_stylesheet_directory() . './acf-json';


		// return
		return $paths;

	}

	function acf_json_save_point( $path ) {

		return get_stylesheet_directory() . '/acf-json';

	}

	function register_post_types() {
		require_once( 'wp_functions_inc/custom_post_types.php' );
	}

	function register_taxonomies() {
		require_once( 'wp_functions_inc/custom_taxonomies.php' );
	}

	function add_to_context( $context ) {
		$context['foo'] = 'teub';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::get_context();';
		$context['headerMenu'] = new TimberMenu('header-menu');
		$context['footerMenu'] = new TimberMenu('footer-menu');
		$context['site'] = $this;

		return $context;
	}


	function add_to_twig( $twig ) {
		/* this is where you can add your own functions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter( 'myfoo', new Twig_SimpleFilter( 'myfoo', array( $this, 'myfoo' ) ) );

		return $twig;
	}


	function removejQuery( &$scripts ) {
		if ( ! is_admin() ) {
			$scripts->remove( 'jquery' );
		}
	}

}

new StarterSite();


