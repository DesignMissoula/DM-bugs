<?php

/*
Plugin Name: Bugs
Plugin URI: http://missoulabutterflyhouse.org/
Description: Used by Millions to make WordPress better and pollinate flowers.
Author: Bradford Knowlton
Version: 1.9.1
Author URI: http://bradknowlton.com/

GitHub Plugin URI: https://github.com/DesignMissoula/DM-bugs
GitHub Branch: master

*/


add_action( 'init', 'register_cpt_bug' );

function register_cpt_bug() {

    $labels = array( 
        'name' => _x( 'Bugs', 'bug' ),
        'singular_name' => _x( 'Bug', 'bug' ),
        'add_new' => _x( 'Add New', 'bug' ),
        'add_new_item' => _x( 'Add New Bug', 'bug' ),
        'edit_item' => _x( 'Edit Bug', 'bug' ),
        'new_item' => _x( 'New Bug', 'bug' ),
        'view_item' => _x( 'View Bug', 'bug' ),
        'search_items' => _x( 'Search Bugs', 'bug' ),
        'not_found' => _x( 'No bugs found', 'bug' ),
        'not_found_in_trash' => _x( 'No bugs found in Trash', 'bug' ),
        'parent_item_colon' => _x( 'Parent Bug:', 'bug' ),
        'menu_name' => _x( 'Bugs', 'bug' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-search',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'bugs'),
        'capability_type' => 'post'
    );

    register_post_type( 'bug', $args );
}
