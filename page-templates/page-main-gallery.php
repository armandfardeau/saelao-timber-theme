<?php
/*
 * Template Name: Main gallery template
 * Description: Main gallery template
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
Timber::render( array( 'page-main-gallery.twig' ), $context );