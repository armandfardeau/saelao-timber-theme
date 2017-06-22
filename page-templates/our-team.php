<?php
/*
 * Template Name: Our team
 * Description: Our team model
 */
/**
 * Created by PhpStorm.
 * User: astronaught
 * Date: 22/05/2017
 * Time: 11:40
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-our-team.twig', 'page.twig' ), $context );
