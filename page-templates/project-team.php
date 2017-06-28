<?php
/*
 * Template Name: project team
 * Description: Our project team
 */
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 29/06/2017
 * Time: 01:15
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-project-team.twig', 'page.twig' ), $context );
