<?php


function site_files() {
    wp_enqueue_style('font_family1','https://fonts.googleapis.com/css?family=Raleway:100,300,400,700');
    wp_enqueue_style('font_family2','https://fonts.googleapis.com/css?family=Lora:400,700');
    wp_enqueue_style('font_awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('site_styles',get_theme_file_uri('/css/business-casual.css'));
    wp_enqueue_style('main_styles',get_stylesheet_uri());
    wp_enqueue_script('jquery',get_theme_file_uri('/vendor/jquery/jquery.min.js'), NULL, '3.4.1', true) ;
    wp_enqueue_script('bootstrap',get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js'), NULL, '4.3.1', true );
    wp_enqueue_script('main_script',get_theme_file_uri('/js/main.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'site_files');



function site_features() {
    register_nav_menu('headerLocation', 'Header Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('productImage', '900', '505', true);
    add_image_size('pageSectionImg', '1100', '414', true);
    add_image_size('Team Image', '800', '800', true);
}

add_action('after_setup_theme', 'site_features');


function headerMenuLiClass ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item px-lg-4';
  return $classes;
}
add_filter ( 'nav_menu_css_class', 'headerMenuLiClass', 10, 4 );

function headerMenuAnchorClass ($atts){
    $atts['class'] = "nav-link text-uppercase text-expanded";
  return $atts;
  }
  add_filter ( 'nav_menu_link_attributes', 'headerMenuAnchorClass');



// custom widgets register
add_filter('siteorigin_widgets_widget_folders', function($folders){
  $path = get_template_directory() . '/custom-widgets/';
  $folders[] = $path;
  return $folders;
});


function team_post_order($query) {

  if ($query->get('post_type') == 'team')
  {
    $query->set('order', 'ASC');
  }

return $query;
}
add_filter('pre_get_posts', 'team_post_order');


?>