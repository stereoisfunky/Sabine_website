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
   <?php global $more; $more = 0; ?>


   <?php
   global $wp_query;
   if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
  } elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
  } else {
    $paged = 1;
  }

  query_posts( array( 'post_type' => 'post', 'paged' => $paged ) );
  ?>   
  
  <!-- SHOW THE CATEGORIES (YEAR), NEEDED FOR THE FILTERING OF ALL THE POST ACCORDING WITH THE TIME -->   

    <ul>
    <?php wp_list_categories( array(
        'order' => 'DESC',
        'parent' => 0,
        'title_li' => " ", 
        ) ); ?> 
    </ul>



<?php if (have_posts()) : ?>
<div class="container_posts container">
  <?php while (have_posts()) : the_post(); ?>
    <?php $index = $wp_query->current_post + 1;
    if (($index-1) % 3 == 0) { ?>
      <div class="row">
    <?php }?>  


      <article  <?php post_class(); ?>>
          <div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 diary-post-container">
            <?php the_content(); ?>
          </div>

      </article>
    <?php if ($index % 3 == 0) {?>
      </div>
    <?php }?>  
  <?php endwhile; ?> 
</div> <!-- /col-lg-8 -->
  
  <?php endif; ?>  

  <?php get_footer(); ?>