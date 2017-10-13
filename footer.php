<footer>
   <?php echo do_shortcode("[pt_view id=e661e21p5j]"); ?>
    <br /> <br />
</footer>

<!-- END DIV OF MAIN CONTAINER -->
</div>

<div class="footer">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
      <?php dynamic_sidebar('slider2');?>
      <div id="map" style="margin-top:-130px;width: 560px;height: 170px;margin-left:420px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d566.280163151212!2d106.92223994899365!3d47.924081786687466!2m2!1f108.17336728170243!2f44.8996100575694!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x0%3A0x237570324b19a2ec!2sUnited+Work+and+Travel+Mongolia!5e1!3m2!1sko!2smn!4v1506427562010" width="560" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
</div>
<script type="text/javascript">
  $('footer').backgroundMove({
  movementStrength:'50'
});

  $(function(){
     var doc = $(document),
    fadeElement = $('footer.mounthain');
    doc.on('scroll',function(){
        var cursorScrollPosition = doc.scrollTop();

        fadeElement.each(function(){
            var $this = $(this),
            elemOffSetTop = $this.offset().top;
            if(cursorScrollPosition > elemOffSetTop) 
              $this.css('background-position', '0'  + -cursorScrollPosition/4 + 'px');
        });
    });
  });
</script>
<script type="text/javascript">
	function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.2),
        zoom: 10
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAeMZE-ObwXurhouRQDmAuykxzvu17vW8o&sensor=false"></script>
</body>
</html>