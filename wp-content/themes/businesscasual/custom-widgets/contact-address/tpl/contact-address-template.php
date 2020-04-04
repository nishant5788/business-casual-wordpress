<?php
$contactForm = wp_kses_post($instance['contactForm']);
?>


<section class="page-section">
<div class="container">
  <div class="bg-faded p-5">
<div class="row">

<div class="col-md-12 text-center">
<h2 class="page-heading bold-font"><?php the_title(); ?></h2>
<p class="page-tagline mb-0"><?php echo get_field('contact_us_tagline'); ?></p>
</div>

<?php foreach ($instance['a_repeater'] as $slide):
  
$heading = $slide['heading'];
$address = $slide['address'];
$email = $slide['email'];
$phone = $slide['phone'];
?>
  
<div class="contact-block <?php echo wp_kses_post($instance['Rows']) ?>">
<h4 class="contact-block-heading"><?php echo $heading; ?></h4>
<ul class="contact-block-list">
<?php if($address) { ?> <li class="contact-block-list-item"><i class="fa fa-home list-item-icon"></i><?php echo $address; ?></li> <?php } ?>
<?php if($phone) { ?> <li class="contact-block-list-item"><i class="fa fa-phone list-item-icon"></i><?php echo $phone; ?></li> <?php } ?>
<?php if($email) { ?> <li class="contact-block-list-item"><i class="fa fa-envelope list-item-icon"></i><?php echo $email; ?></li> <?php } ?>
</ul>
</div>

<?php endforeach; ?>

<div class="contact-form-wrapper col-md-12 mt-50">
<div class="centered">  
<?php echo $contactForm; ?></div>
</div>

</div>
</div>
</div>
</section>