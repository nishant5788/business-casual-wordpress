<?php get_header(); ?>

<?php
$theParent = wp_get_post_parent_id(get_the_ID());
?>

<nav aria-label="breadcrumb" class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <?php if($theParent) { ?>
<li class="breadcrumb-item"><?php echo get_the_title($theParent); ?></li>
    <?php } ?>
    
    <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
  </ol>
</nav>

<div id="body-content">

<?php

while(have_posts()) {
the_post(); ?>
<section class="page-section">
<div class="container">
<h2><?php the_title() ?></h2>
<p><?php the_content() ?></p>
</div>
</section>
<?php }
?>

</div>

<?php get_footer(); ?>