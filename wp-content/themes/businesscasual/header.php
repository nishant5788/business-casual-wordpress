<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <a href="/" class="site-heading-lower"><?php  the_custom_logo(); ?></a>
    <span class="site-heading-upper text-primary mb-3"><?php bloginfo('description'); ?></span>
  </h1>
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       
      <?php require_once(dirname(__FILE__) . '/includes/navigation.php'); ?>

      <div class="btn-group searchform-trigger d-none">
      <i class="fa fa-search searchform-trigger-icon"></i>
      </div>

    </div>
  </nav>


 
