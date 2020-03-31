<?php
$upperHeading = wp_kses_post($instance['upperHeading']);
$lowerHeading = wp_kses_post($instance['lowerHeading']);
$address = wp_kses_post($instance['address']);
$phone = wp_kses_post($instance['phone']);
?>


<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <?php if($upperHeading) { ?>
                    <span class="section-heading-upper"><?php echo $upperHeading ?></span>
                <?php } ?>

                <?php if($lowerHeading) { ?>
                    <span class="section-heading-lower"><?php echo $lowerHeading ?></span>
                <?php } ?>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

              <?php foreach ($instance['a_repeater'] as $slide): ?>

                <li class="list-unstyled-item list-hours-item d-flex">
                  <?php echo $slide['Day']; ?>
                  <span class="ml-auto"><?php echo $slide['Timing']; ?></span>
                </li>

                <?php endforeach; ?>

              </ul>
              
              <?php if($address) { ?>
                <div class="address mb-5">
                
                <?php echo $address ?>
                
              </div>
                <?php } ?>

                <?php if($phone) { ?>
                  <div>
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                <?php echo $phone ?>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>