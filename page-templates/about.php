<?php

/*
 * Template Name: about template
 * Description: about page
 */

/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 30/06/2017
 * Time: 16:07
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-about.twig', 'page.twig' ), $context );
