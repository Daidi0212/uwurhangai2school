
<footer>

    <div class="container">
        <br />
        <div class="row">
            <div class="col-md-3">
                <div class="footer-head">
                    <p>СУРГУУЛИЙН ТУХАЙ БАРИМТУУД</p>
                </div>

                <div class="footer-body">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/footer-img-1.png" alt="" style="float:left; padding-left: 10px;">
                        <p style="text-align: justify; padding-right: 15px;">Манай сургуулиас <strong>2000</strong> сурагчид, <strong>200</strong> гаруй багш ажилчидтай, <strong>88</strong> доктор, 32 профессор төрөн гарсан.</p>
                    </div>
                    
                    <p style="padding:10px">Мэргэжлийн сумо бөхийн 69 дах их аварга Хакухо М.Даваажаргал суралцаж байсан.</p>    
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-head">
                    <p>НЭЭЛТТЭЙ АЖЛЫН БАЙР</p>
                </div>

                <div class="footer-body">
                    <img style="padding: 10px; max-width: 100%; max-height: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/footer-img-2.png" alt="">
                    <br /> <br />
                    <a href="#" style="color: black"><i class="fa fa-caret-right" aria-hidden="true"></i> TESOL зэрэгтэй Англи хэлний багш</a>    
                    <br />
                    <br />
                    <a href="#" style="color: black"><i class="fa fa-caret-right" aria-hidden="true"></i> CMA шалгалтын зэрэгтэй нягтлан бодогч</a>    

                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-head">
                    <p>ХЭРЭГТЭЙ ХОЛБООСУУД</p>
                </div>

                <div class="footer-body">
                    <div style="padding: 10px">
                        <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Ministry of Education, culture and Science</a>    
                        <br /> <br />
                        <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Department of Arts and Culture</a>    
                        <br /> <br />
                        <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Physical Education And Sports Development Center</a>    
                        <br /> <br />
                        <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Family, Youth and Child Development Agency</a>    
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-head">
                    <p>ХОЛБОО БАРИХ</p>
                </div>

                <div class="footer-body">
                    <img style="padding: 10px; max-width: 100%; max-height: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/footer-img-3.png" alt="">
                    <br /> <br />
                    <span>Утас: <span style="color: blue">(+976) 99119999</span></span>
                    <br /> <br />
                    <span>Факс: <span style="color: blue">11-328888</span></span>
                    <br /> <br />
                    <span>И-мэйл: <span style="color: blue">uvurkhangai.school1@edu.mn</span></span>
                </div>
            </div>
        </div>
    </div>
    <br /> <br />
</footer>

<!-- END DIV OF MAIN CONTAINER -->
</div>

<div class="footer">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">

      <!---->
      <div id="map" style="margin-top:20px;width: 860px;height: 170px;margin-left:120px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d566.280163151212!2d106.92223994899365!3d47.924081786687466!2m2!1f108.17336728170243!2f44.8996100575694!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x0%3A0x237570324b19a2ec!2sUnited+Work+and+Travel+Mongolia!5e1!3m2!1sko!2smn!4v1506427562010" width="860" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<script type="text/javascript">
    $('.side').niceScroll();
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAeMZE-ObwXurhouRQDmAuykxzvu17vW8o&sensor=false"></script>
</body>
</html>