/*!
 * JS Scripts
 */
// Placeholder
jQuery(function(){

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
                overlayColor: '#00aa86',
                overlayOpacity: 0.5,
                zoom: 0,
                speed: 300
            });
            
});

jQuery(document).ready(function($){
    var offset = 100;
    var speed = 250;
    var duration = 500;
     $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
           $('.topbutton') .fadeOut(duration);
            } else {
           $('.topbutton') .fadeIn(duration);
            }
        });
  $('.topbutton').on('click', function(){
    $('html, body').animate({scrollTop:0}, speed);
    return false;
    });
});
// jQuery(document).ready(function() {  
//   //jQuery('.fullscreen-landing').width(window.innerWidth);
//   //jQuery('.fullscreen-landing').height(window.innerHeight);
// });