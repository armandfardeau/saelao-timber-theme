<?php
/*
 * Template Name: Downloadable resources
 * Description: Downloadable resources
 */
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 28/06/2017
 * Time: 23:33
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-downloadable-resources.twig' ), $context );