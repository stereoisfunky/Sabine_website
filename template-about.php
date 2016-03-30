<?php
/**
 * @package WordPress
 * Template Name: About
 */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php if($post->post_content=="") : ?>

<?php else : ?>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-sm-6">
        <?php if ( has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
          <?php if( rwmb_meta( 'wtf_about_title' ) !== '' ) { ?>
          <?php echo rwmb_meta( 'wtf_about_title' ); ?>
          <?php } ?>  
           <?php the_content(); ?>
           </div>

                     <!-- About Left Text-->
          <?php if( rwmb_meta( 'wtf_about_left_txt' ) !== '' ) { ?>
          <div class="col-xs-12 col-md-6 col-sm-6">
                <?php echo rwmb_meta( 'wtf_about_left_txt' ); ?>
              </div>
          <?php } ?>  


          <!-- About Right Text-->
          <?php if( rwmb_meta( 'wtf_about_right_txt' ) !== '' ) { ?>
          <div class="col-xs-12 col-sm-12 col-md-6">
                <?php echo rwmb_meta( 'wtf_about_right_txt' ); ?>
              </div> 
          <?php } ?>  

      </div>

      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php endwhile; ?>	


<div class="container pt">

<!-- Columns Section -->
<?php if( rwmb_meta( 'wtf_about_col' ) !== '' ) { ?>
<div class="row mt centered">
    <?php 
    $about_col = rwmb_meta( 'wtf_about_col' );
    foreach ( $about_col as $value ) { ?>

    <div class="col-lg-3">
      <?php echo $value; ?>
    </div>

    <?php } ?>
  </div><!-- /row -->
<?php } ?> 



<div class="row mt">


</div><!-- /row -->

</div><!-- /container -->





<?php get_footer(); ?>