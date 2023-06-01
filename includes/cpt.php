<?php

function twomiles_custom_post(){

    $Posts_label = array(
        'name' => __('All Post', 'textdomain'),
        'singular_name' => __('All Post', 'textdomain'),
        'add_new' => __(' Add All Post', 'textdomain'),
        'add_new_item' => __('Add New All', 'textdomain'),
        'edit_item' => __('Edit All Post', 'textdomain'),
        'all_items' => __('All Post', 'textdomain')

    );

    $Posts_args = array(
        'labels'  => $Posts_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt','author')
    );

    register_post_type('Posts' , $Posts_args);

    $Category_label = array(
        'name' => __('Category Post', 'textdomain'),
        'singular_name' => __('Category Post', 'textdomain'),
        'add_new' => __(' Add Category Post', 'textdomain'),
        'add_new_item' => __('Add New Category', 'textdomain'),
        'edit_item' => __('Edit Category Post', 'textdomain'),
        'all_items' => __('Category  Post', 'textdomain')

    );

    $Category_args = array(
        'labels'  => $Category_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('Category' , $Category_args);

    $tags_label = array(
        'name' => __('Tags Post', 'textdomain'),
        'singular_name' => __('Tags Post', 'textdomain'),
        'add_new' => __(' Add Tags Post', 'textdomain'),
        'add_new_item' => __('Add New Tags', 'textdomain'),
        'edit_item' => __('Edit Tags Post', 'textdomain'),
        'all_items' => __('Tags  Post', 'textdomain')

    );

    $tags_args = array(
        'labels'  => $tags_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'tags'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('Tags' , $tags_args);
}

add_action('init','twomiles_custom_post');