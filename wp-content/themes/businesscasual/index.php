<?php get_header(); ?>


<?php

while(have_posts()) {
the_post(); 

$hasPostImg = 'no-post-img';
if(has_post_thumbnail()) {
  $hasPostImg = 'has-post-img';
}

?>

<section class="page-section">
    <div class="container">

    <div class="bg-faded rounded post-block <?php echo $hasPostImg; ?>">
    <?php
    if(has_post_thumbnail()) { ?>
    <img class="img-fluid rounded post-block-img mb-3 mb-lg-0" src="<?php the_post_thumbnail_url(array(150,150)); ?>" alt="<?php the_title(); ?>" />
    <?php }
    ?>
    <h2 class="section-heading">
    <span class="section-heading-upper">Posted by <?php the_author_posts_link(); ?> on <?php the_time('d M Y'); ?> in <?php echo get_the_category_list(','); ?></span>
    <a class="section-heading-lower" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h2>
    <p>
    <?php
    if (has_excerpt()) {
      echo get_the_excerpt();
    }
    else {
      echo wp_trim_words(get_the_content(), 28);
    }
      ?>
      </p>
    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Continue Reading</a>
    </div>

    </div>
  </section>
  

<?php }

?>
<div class="mb-30">
  <?php require_once(dirname(__FILE__) . '/includes/pagination.php'); ?>
  </div>

<?php get_footer(); ?>