<?php
$btnText = wp_kses_post($instance['buttonText']);
$tagline = wp_kses_post($instance['tagline']);
$heading = wp_kses_post($instance['heading']);
$description = wp_kses_post($instance['description']);
$imageUrl = wp_get_attachment_image_url($instance['image'], 'full');
?>


<section class="page-section">
    <div class="container">

    <div class="team-block bg-faded rounded p-5 d-flex">
    <div class="team-block-left">
    <?php if($imageUrl) { ?>
        <img class="team-block-img img-fluid rounded" src="<?php echo $imageUrl ?>" alt="<?php echo $heading ?>" />
                <?php }
                else {
                  echo '<img class="team-block-img img-fluid rounded" src="#" alt="Image" />';
                }
                ?>
    <h2 class="section-heading">
              <?php if($tagline) { ?>
                    <span class="section-heading-upper"><?php echo $tagline ?></span>
                <?php } ?>

                <?php if($heading) { ?>
                    <span class="section-heading-lower"><?php echo $heading ?></span>
                <?php } ?>
              </h2>
    </div>
    <div class="team-block-right">
    <?php if($description) echo $description; ?>
    </div>
    </div>

    </div>
    </section>