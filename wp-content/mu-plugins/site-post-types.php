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
}

add_action('init', 'site_post_types');

?>