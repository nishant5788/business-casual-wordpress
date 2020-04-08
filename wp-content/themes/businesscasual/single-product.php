<?php get_header(); ?>


<nav aria-label="breadcrumb" class="container mb-50 mt-50">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo site_url('/products') ?>">All Products</a></li>    
    <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
  </ol>
</nav>

<section class="page-section">
<div class="container">
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
              <span class="section-heading-upper">
                <?php foreach((get_the_category()) as $category){
                echo $category->name.", ";
                }	?></span>
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

  echo '<div class="related-post-section container mt-50">';
  echo '<h2 class="text-white">Related Post(s):-</h2>';
  echo '<ul class="related-posts-list mb-0">';

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