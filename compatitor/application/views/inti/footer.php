<footer class="site-footer">
        <div class="container">
            <div class="row">
                
               
                
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>Contact Us</h4>
                    <p class="text">PT Traktor Nusantara. JL. Pulogadung No. 32 Kawasan Industri Pulogadung, Jakarta 13930.</p>
                    <p><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(021)4608836/4608840</a></p>
                    
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2017 PT Traktor Nusantara . All Rights Reserved.</p>
                    </div>
                    
                </div>
            </div>
        </div>        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <!-- <script type='text/javascript' src='<?php echo base_url(); ?>nivo/js/jquery-1.7.2.min.js'></script>  -->
    <!-- <script type='text/javascript' src='<?php echo base_url(); ?>nivo/js/jquery.nivo.slider.min.js'></script>  -->

    <script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    <!-- <script>
      $(window).load(function() {
        $('#nivoSlider').nivoSlider({
        directionNavHide: false
        });
      });
    </script>
    
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script> -->
 <script type="text/javascript">
$(document).ready(function() {
  $('#slide_flip_controls').on('click', 'span', function(){
    $("#slide_flip_images").css("transform","translateX("+$(this).index() * -600+"px)");
    $("#slide_flip_controls span").removeClass("selected");
    $(this).addClass("selected");
  });
});
</script>




