<?php get_header(); ?>


<section class="page-section">
<div class="container-fluid">
<div class="row">
<?php



while(have_posts()) {
the_post();
$facebook = get_field('team_member_facebook');
$twitter = get_field('team_member_twitter');
$linkedin = get_field('team_member_linkedin');
$designation = get_field('designation');
?>

<div class="col-lg-6">
<div class="team-block bg-faded rounded">
    <div class="team-block-left">
            <?php the_post_thumbnail('Team Image', array(
          'class' => "team-block-img img-fluid rounded",
          'alt' => get_the_title()
        )); ?>
      <h2 class="section-heading">
      <?php if($designation) { ?>
      <span class="section-heading-upper"><?php echo $designation; ?></span>
      <?php } ?>
      
      <span class="section-heading-lower"><?php the_title(); ?></span>
       </h2>
       <ul class="social-icons justify-content-center">
       <?php if($facebook) { ?>
        <li><a data-toggle="tooltip" data-placement="bottom" title="facebook" href="<?php echo $facebook; ?>" class="social-icon fa fa-facebook" target="_blank"></a></li>
       <?php } ?>

       <?php if($twitter) { ?>
        <li><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="<?php echo $twitter; ?>" class="social-icon fa fa-twitter" target="_blank"></a></li>
       <?php } ?>

       <?php if($linkedin) { ?>
        <li><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="<?php echo $linkedin; ?>" class="social-icon fa fa-linkedin" target="_blank"></a></li>
       <?php } ?>
       </ul>
    </div>
    <div class="team-block-right">
    <?php the_content(); ?>
    </div>
    </div>
    </div>
      <?php } ?>


<?php require_once(dirname(__FILE__) . '/includes/pagination.php'); ?>

</div>
</div>
  </section>

<?php get_footer(); ?>