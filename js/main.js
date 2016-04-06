/*!
 * All the javascript functions
 */


/*  Hover - Effect on portfolio homepage  */
jQuery(document).ready(function($){

      //Shortcode Popover
     jQuery("a[rel=popover]").popover()
      .click(function(e) {
        e.preventDefault()
      });

      //Shortcode Tooltip
      jQuery("a[rel=tooltip]").tooltip();

      //Data Tooltip
      jQuery("[data-toggle='tooltip']").tooltip();

            jQuery('.green').hoverZoom({
                overlay: true,
                overlayColor: '#000000',
                overlayOpacity: 0.5,
                zoom: 0,
                speed: 300
            });     
});

/*  Force reload function of hover when clicking in any element of the menu */
jQuery("#menu-item").click(function() {
  jQuery('.green').hoverZoom();
});

jQuery("#logo").click(function() {
  jQuery('.green').hoverZoom();
});



/*  Button for scrolling bottom to top Content in pages which are long */

jQuery(document).ready(function($){
    var offset = 1400; //Pixel needed before button shows up
    var speed = 250;  //Speed in which button shows up
    var duration = 500; //Speed in which scroll to up happens
     jQuery(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
           jQuery('.topbutton') .fadeOut(duration);
            } else {
           jQuery('.topbutton') .fadeIn(duration);
            }
        });
  $('.topbutton').on('click', function(){
    jQuery('html, body').animate({scrollTop:0}, speed);
    return false;
    });
});

/*  Change Picture landing page everyloading */
jQuery(document).ready(function($){
  var images = [
      "http://localhost:8888/Wordpress/wp-content/uploads/2016/04/©Sabine_Zoltnere_2016_Landing.jpg",
      "http://localhost:8888/Wordpress/wp-content/uploads/2016/04/©Sabine_Zoltnere_2016_8.jpg",
      "http://localhost:8888/Wordpress/wp-content/uploads/2016/04/©Sabine_Zoltnere_2016_7.jpg",];

  function landingImg() {
      var size = images.length
      var x = Math.floor(size * Math.random())
      $('#landPicBackground').attr('src', images[x]);
  }

  landingImg();

});
