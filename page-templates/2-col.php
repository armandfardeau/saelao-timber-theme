<?php
/*
 * Template Name: 2 col
 * Description: A Page Template with a 2 col design.
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
//On va chercher que le template twig avec 2 col, vaec un fallback sur le layout général
Timber::render( array( 'layout-two-col.twig', 'page.twig' ), $context );

