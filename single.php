<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::get_context();
$post            = Timber::query_post();
$context['post'] = $post;
$args            = array(
	'numberposts'      => 30,
	'offset'           => 0,
	'category'         => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_status'      => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$context['news'] = wp_get_recent_posts( $args );

if ( in_category( 'project' ) ) {
	Timber::render( 'single-category-project.twig', $context );
} elseif ( in_category( 'program' ) ) {
	Timber::render( 'single-category-program.twig', $context );
} else {
	if ( post_password_required( $post->ID ) ) {
		Timber::render( 'single-password.twig', $context );
	} else {
		Timber::render( array(
			'single-' . $post->ID . '.twig',
			'single-' . $post->post_type . '.twig',
			'single.twig'
		), $context );
	}
}