/*!
 * All the javascript functions
 */
 
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


/*  Function to enlarge single post on diary and center scroll on top */
jQuery(document).ready(function($){

  $( ".diary-post-container").click(function(event) {
    var allPics = $(".diary-post-container");
    for (var i  in allPics) {
      if (allPics[i].id != $(this).attr('id')) {
        $('#' + allPics[i].id).removeClass('full-width-content');
      }
    }
    $(this).toggleClass('full-width-content');
    var offset = jQuery(this).offset().top - 107;
    $('html, body').animate({scrollTop: offset}, 500);
  });
});
