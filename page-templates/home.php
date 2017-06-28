<?php
/*
 * Template Name: Home template
 * Description: Our home model
 */

/**
 * Created by PhpStorm.
 * User: astronaught
 * Date: 23/06/2017
 * Time: 19:59
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'index.twig', 'page.twig' ), $context );