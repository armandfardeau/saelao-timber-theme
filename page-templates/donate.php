<?php
/*
 * Template Name: donate template
 * Description: donate model
 */
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 22/05/2017
 * Time: 11:40
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-donate.twig'), $context );
