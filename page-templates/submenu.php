<?php
/*
 * Template Name: Submenu pages
 * Description: A Page Template with submenu for parent pages
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
Timber::render( array( 'submenu-template.twig', 'page.twig' ), $context );

// notre controleur est TERMINE.