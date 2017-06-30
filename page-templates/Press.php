<?php

/*
 * Template Name: press template
 * Description: press page
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
Timber::render( array( 'page-press.twig', 'page.twig' ), $context );
