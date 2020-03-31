<?php
$btnText = wp_kses_post($instance['buttonText']);
$tagline = wp_kses_post($instance['tagline']);
$heading = wp_kses_post($instance['heading']);
$description = wp_kses_post($instance['description']);
$imageUrl = wp_get_attachment_image_url($instance['image'], 'pageSectionImg');
?>

<section class="page-section about-heading">
    <div class="container">
    <?php if($imageUrl) { ?>
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $imageUrl ?>" alt="<?php echo $heading ?>" />
                <?php }
                else {
                    echo "<div class='mb-150'></div>";
                }
                ?>

      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
              <?php if($tagline) { ?>
                    <span class="section-heading-upper"><?php echo $tagline ?></span>
                <?php } ?>

                <?php if($heading) { ?>
                    <span class="section-heading-lower"><?php echo $heading ?></span>
                <?php } ?>
              </h2>
         
              <?php
         if($description) echo $description;
             
             if($btnText) { ?>
                 <a class="btn btn-secondary" href="<?php echo wp_kses_post($instance['buttonLink']) ?>"><?php echo $btnText; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>