<?php
/*
 * Template Name: Home template
 * Description: Our home model
 */

/**
 * Created by PhpStorm.
 * User: astronaught
 * Date: 23/06/2017
 * Time: 19:59
 */

$context            = Timber::get_context();
$context['posts']   = Timber::get_posts();
$home_lo_id         = get_page_by_title( 'home-laotian' );
$context['home_lo'] = $context['home'];
$templates          = array( 'index.twig' );
$lang               = get_bloginfo( "language" );
if ( $lang == 'lo' ) {
	Timber::render( 'home-lo.twig', $context );
} else {
	Timber::render( $templates, $context );
}