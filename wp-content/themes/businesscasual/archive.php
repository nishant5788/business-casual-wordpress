<?php get_header(); ?>


<section class="page-section">
<div class="container">


<h2 class="section-heading text-white"> <?php the_archive_title(); ?></h2>
<p class="text-white mb-0"><?php the_archive_description(); ?></p>

<?php

while(have_posts()) {
the_post(); ?>

    <div class="bg-faded rounded p-5 mt-50">
    <h2 class="section-heading">
    <a class="section-heading-lower" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h2>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Continue Reading</a>
    </div>

<?php }

?>

</div>
  </section>

<?php get_footer(); ?>