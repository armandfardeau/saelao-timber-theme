<?php
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 14/05/2017
 * Time: 23:37
 */

register_post_type('Projects', array(

    'label' => __('Projects', 'text_domain'),
    'description' => __('Post Type Description', 'text_domain'),

    'labels' => array(
        'name' => _x('Projects', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Project', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Projects', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Projects', 'text_domain'),
        'view_item' => __('View Project', 'text_domain'),
        'add_new_item' => __('Add New Project', 'text_domain'),
        'add_new' => __('Add New Project', 'text_domain'),
        'edit_item' => __('Edit Project', 'text_domain'),
        'update_item' => __('Update Project', 'text_domain'),
        'search_items' => __('Search Project', 'text_domain'),
        'not_found' => __('Project Not found', 'text_domain'),
        'not_found_in_trash' => __('Project Not found in Trash', 'text_domain'),
    ),
    'supports' => array(),
    'taxonomies' => array('category', 'post_tag'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-store',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
));


register_post_type('Programms', array(

    'label' => __('Programms', 'text_domain'),
    'description' => __('Post Type Description', 'text_domain'),

    'labels' => array(
        'name' => _x('Programms', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Programm', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Programms', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Programms', 'text_domain'),
        'view_item' => __('View Programm', 'text_domain'),
        'add_new_item' => __('Add New Programm', 'text_domain'),
        'add_new' => __('Add New Programm', 'text_domain'),
        'edit_item' => __('Edit Programm', 'text_domain'),
        'update_item' => __('Update Programm', 'text_domain'),
        'search_items' => __('Search Programm', 'text_domain'),
        'not_found' => __('Programm Not found', 'text_domain'),
        'not_found_in_trash' => __('Programm Not found in Trash', 'text_domain'),
    ),
    'supports' => array(),
    'taxonomies' => array('category', 'post_tag'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-book',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
));
