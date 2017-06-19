<?php
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 16/06/2017
 * Time: 14:06
 *
 */
$context               = Timber::get_context();
$args = array(
	'category'    => 'projects',
);
$context['categories'] = new WP_Query( $args );
Timber::render( array( 'category-project.twig', 'category.twig' ), $context );
