<?php get_header(); ?>

<?php require_once(dirname(__FILE__) . '/includes/breadcrumb.php'); ?>

<section class="page-section mt-0">
    <div class="container">
<?php

while(have_posts()) {
the_post(); ?>

    <div class="bg-faded rounded p-5">
      

      <?php
    if(has_post_thumbnail()) { ?>
    <div class="text-center mb-50">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php the_post_thumbnail_url('productImage'); ?>" alt="<?php the_title(); ?>" />
    </div>
    <?php }
    ?>
      
    <h2 class="section-heading"><?php the_title(); ?></h2>
    <?php the_content() ?>
    </div>

<?php }

?>

<?php 
        $relatedPosts = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'product',
          'orderby' => 'title',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'related_posts',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            )
          )
        ));

        if ($relatedPosts->have_posts()) {
        echo '<h2 class="text-white mt-50">Related Product(s)</h2>';
        echo '<ul class="text-white">';

        while($relatedPosts->have_posts()) {
          $relatedPosts->the_post(); ?>
          <li><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php }
        echo '</ul>';
        }

        wp_reset_postdata();
        ?>


</div>
  </section>
  

<?php get_footer(); ?>