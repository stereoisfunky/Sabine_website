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


       jQuery('.blue').hoverZoom({
                overlayColor: '#3498db',
                zoom: 0
            });
            
            jQuery('.green').hoverZoom({
                overlayColor: '#00aa86',
                zoom: 0
            });
            
            jQuery('.pink').hoverZoom({
                overlayColor: '#bd2e75',
                zoom: 0
            });
            
            jQuery('.black').hoverZoom({
                overlayColor: '#2f2f2f',
                zoom: 0
            });
            
            jQuery('.alizarin').hoverZoom({
                overlayColor: '#e74c3c',
                zoom: 0
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