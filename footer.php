<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>


<?php gents_container_end(); // after container hook ?>


  <!-- +++++ Footer Section +++++ -->
<footer id="footer">
    <div class="container-footer">  <!-- changed from container to container-footer -->
      <div class="row">
        <div class="col-lg-12">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>
        <div class="col-lg-12">
          <div class="footer-links">
            <a href="https://www.behance.net/zoltnere" target="_blank"><i class="fa fa-behance fa-lg fa-fw"></i></a>
            <a href="https://lv.linkedin.com/in/sabīne-zoltnere-b17ba153" target="_blank"><i class="fa fa-linkedin fa-lg fa-fw"></i></a>
            <a href="https://www.facebook.com/sabine.zoltnere" target="_blank"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
          </div>
          <?php dynamic_sidebar('footer-middle'); ?>
        </div>
        <div class="col-lg-12">
          <?php dynamic_sidebar('footer-right'); ?>
        </div>
      </div><!-- /row -->
    </div><!-- /container -->
    <a href="http://localhost:8888/Wordpress/wp-content/uploads/2016/03/toTopButton-1.png" class="topbutton"></a>
</footer><!-- end #footer -->

<?php wp_footer(); ?>

</body>
</html>