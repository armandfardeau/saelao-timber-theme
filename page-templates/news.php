<?php
/*
 * Template Name: news template
 * Description: news model
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
$context['news'] = Timber::get_posts('post_type=post&numberposts=10');
Timber::render( array( 'page-news.twig' ), $context );