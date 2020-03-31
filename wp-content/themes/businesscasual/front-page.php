<?php get_header(); ?>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo get_theme_file_uri('/img/intro.jpg') ?>" alt="Fresh Coffee" />
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Fresh Coffee</span>
            <span class="section-heading-lower">Worth Drinking</span>
          </h2>
          <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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