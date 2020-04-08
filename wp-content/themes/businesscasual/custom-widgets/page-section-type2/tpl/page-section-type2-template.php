<?php
$btnText = wp_kses_post($instance['buttonText']);
$tagline = wp_kses_post($instance['tagline']);
$heading = wp_kses_post($instance['heading']);
$description = wp_kses_post($instance['description']);
$imageUrl = wp_get_attachment_image_url($instance['image'], 'pageSectionImg');

if(!$imageUrl) {
  $imageUrl = get_theme_file_uri('/img/intro.jpg');
}
?>

<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo $imageUrl ?>" alt="<?php echo $heading ?>" />
    
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
              <?php if($tagline) { ?>
                    <span class="section-heading-upper"><?php echo $tagline ?></span>
                <?php } ?>

                <?php if($heading) { ?>
                    <span class="section-heading-lower"><?php echo $heading ?></span>
                <?php } ?>
              </h2>
              <p class="mb-3">
                <?php if($description) echo $description; ?>
              </p>
          <?php 
          if($btnText) { ?>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="<?php echo wp_kses_post($instance['buttonLink']) ?>"><?php echo $btnText; ?></a>
          </div>
        <?php } ?>
        
        </div>
      </div>
    </div>
  </section>