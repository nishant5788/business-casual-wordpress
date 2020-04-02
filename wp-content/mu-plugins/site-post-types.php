<?php

function site_post_types() {
register_post_type('product', array(
  'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
  'rewrite' => array('slug' => 'products'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Products',
    'add_new_item' => 'Add New Product',
    'edit_item' => 'Edit Product',
    'all_items' => 'All Products',
    'singular_name' => 'Product'
  ),
  'menu_icon' => 'dashicons-cart'
));

register_post_type('team', array(
  'supports' => array('title', 'editor', 'thumbnail'),
  'rewrite' => array('slug' => 'about/team'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Teams',
    'add_new_item' => 'Add New Team Member',
    'edit_item' => 'Edit Team Member',
    'all_items' => 'All Team Members',
    'singular_name' => 'Team'
  ),
  'menu_icon' => 'dashicons-businessperson'
));

}

add_action('init', 'site_post_types');

?>