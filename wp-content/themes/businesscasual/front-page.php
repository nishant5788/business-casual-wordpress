<?php get_header(); ?>

<?php

while(have_posts()) {
the_post();
the_content();
}
 ?>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">From Our</span>
              <span class="section-heading-lower">Blog</span>
            </h2>
            
            <?php
            $homepagePosts = new WP_Query(array(
              'posts_per_page' => 3
            ));

            while ($homepagePosts -> have_posts()) {
              $homepagePosts -> the_post(); ?>

<ul class="list-group list-group-flush posts-group-list">
  <li class="list-group-item">
  <a href="<?php the_permalink(); ?>">
  <span class="badge badge-secondary badge-pill"><?php the_time('d M Y'); ?></span>
  <span class="list-content d-block">
    <strong class="d-block"><?php the_title(); ?></strong> 
    <span class="d-block"><?php echo wp_trim_words(get_the_content(),28); ?></span> 
    </span>
    </a>
  </li>
</ul>

            <?php }
            wp_reset_postdata();
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>