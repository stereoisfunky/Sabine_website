<?php
/**
 * Blog Template
 *
   Template Name: Blog
 *
 * @file           blog.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */



   ?>
   <?php get_header(); ?>
    <ul>
    <?php wp_list_categories( array(
        'order' => 'DESC',
        'parent' => 0,
        'title_li' => " ", 
        ) ); ?> 
    </ul>


  <!--  THIS IS THE PAGE WITH ALL THE POSTS COMING FROM THE SAME CATEGORY -->   

  <?php if (have_posts()) : ?>
<div class="container_posts col-xs-12">
  <?php while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0px">
                <div class="col-lg-9 col-centered">
                  <?php the_content(); ?>
                </div>
          </article>

          <?php endwhile; else : ?>

         </div>

<div class="error-not-found">Sorry, at the moment I am busy restyling the portfolio.</div>

<?php endif; ?>

</div><!-- end of container -->

   <?php get_footer(); ?>