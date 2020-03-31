<?php get_header(); ?>


<section class="page-section">
<div class="container">

<?php

while(have_posts()) {
the_post(); ?>

<div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <a href="#" class="section-heading-upper">Categories here</a>
              <a href="<?php the_permalink(); ?>" class="section-heading-lower"><?php the_title(); ?></a>
            </h2>
          </div>
        </div>
        <?php the_post_thumbnail('productImage', array(
          'class' => "product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0",
          'alt' => get_the_title()
        )); ?>
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <?php the_excerpt(); ?>
            <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Continue Reading</a>
          </div>
        </div>
      </div>

<?php }

?>

<?php require_once(dirname(__FILE__) . '/includes/pagination.php'); ?>

</div>
  </section>

<?php get_footer(); ?>