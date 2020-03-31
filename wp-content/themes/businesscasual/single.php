<?php get_header(); ?>



<nav aria-label="breadcrumb" class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo site_url('/blog') ?>">Return to Posts</a></li>    
    <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
  </ol>
</nav>

<section class="page-section">
    <div class="container">
<?php

while(have_posts()) {
the_post(); ?>

    <div class="bg-faded rounded p-5">
    <h2 class="section-heading"><?php the_title() ?></h2>
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
        echo '<h2 class="text-white mt-50">Related Products</h2>';
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