<?php get_header(); ?>

<div id="body-content">

<?php

while(have_posts()) {
the_post(); ?>
<?php the_content() ?>

<?php }
?>

</div>

<?php get_footer(); ?>