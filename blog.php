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
<div class="container_posts col-xs-12">
  <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="row col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin:0px">
                <div class="col-lg-12">
                  <?php echo '<div class="single_post_grid">';
                        the_content(); 
                        echo '</div>';
                  ?>
          </article>

    <?php endwhile; ?> 
      <?php if (  $wp_query->max_num_pages > 1 ) : ?>
          <div class="row col-lg-4">
        
                <div class="col-lg-12 col-centered ">
                  <hr>
              <nav>
               <ul class="pager">
                 <li class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'gents' ) ); ?></li>
                 <li class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'gents' ) ); ?></li>
               </ul><!-- end of .navigation -->
             </nav>
           </div>
           </div>
       </div>
       <?php endif; ?>
         <?php else : ?>
          <article id="post-not-found" class="hentry clearfix">
            <div class="row col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <header>
                    <h1 class="title-404"><?php _e('404 &#8212; Opsy! :) Fancy meeting you here!', 'gents'); ?></h1>
                  </header>
                  <section>
                     <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents'); ?></p>
                  </section>

                   <footer>
                     <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
                     <?php get_search_form(); ?>
                   </footer>
                 </div>
                </div>
            </div>
          </article>
</div> <!-- /col-lg-8 -->
  
  <?php endif; ?>  

  <?php get_footer(); ?>