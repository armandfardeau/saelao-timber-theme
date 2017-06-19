<?php
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 16/06/2017
 * Time: 14:04
 */
$context               = Timber::get_context();
$context['categories'] = Timber::get_terms( 'category' );
Timber::render( 'category.twig', $context );