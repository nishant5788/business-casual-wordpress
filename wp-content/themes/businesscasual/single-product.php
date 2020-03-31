<?php get_header(); ?>


<section class="page-section about-heading mt-0">
    <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-5">
    <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('product'); ?>">Return to Products</a></li>    
    <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
  </ol>
</nav>


<?php

while(have_posts()) {
the_post(); ?>

      <?php the_post_thumbnail('productImage', array(
          'class' => "img-fluid rounded aligncenter mb-3 mb-lg-0",
          'alt' => get_the_title()
        )); ?>
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                <span class="section-heading-lower"><?php the_title(); ?></span>
              </h2>
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </div>
      
      
      
<?php }


$relatedPosts = get_field('related_posts');

if($relatedPosts) {

  echo '<div class="related-post-section mt-50">';
  echo '<h2 class="text-white">Related Post(s):-</h2>';
  echo '<ul class="related-posts-list">';

  foreach($relatedPosts as $relatedPost) { ?>

    <li class="list-item text-white">
      <a href="<?php echo get_the_permalink($relatedPost); ?>" class="list-item-link text-white"><?php echo get_the_title($relatedPost); ?></a>
      </li>
    
    <?php }
  
  echo '</ul>';
  echo '</div>';

}

?>

</div>
  </section>
  

<?php get_footer(); ?>