<?php

function hawk_post_type() {

    register_post_type('option', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'options'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Options',
           'add_new_item' => 'Add New Option',
           'edit_item' => 'Edit Option',
           'all_items' => 'All Options',
           'singular_name' => 'Option'
       ),
        'menu_icon' => 'dashicons-admin-multisite'
   ));


    register_post_type('security', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'securities'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Securities',
           'add_new_item' => 'Add New Security',
           'edit_item' => 'Edit Security',
           'all_items' => 'All Securities',
           'singular_name' => 'Securities'
       ),
        'menu_icon' => 'dashicons-visibility'
   ));



}

add_action('init', 'hawk_post_type');