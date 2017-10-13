<style type="text/css">
    #container1{
   margin-top: 230px;
    width: 980px;
    background-color: white;
}
  </style>
<?php get_header(); ?>
<?php wp_head(); ?>
<?php 
if(have_posts()){
		the_content();
?>

<!-- container-->
<section id="container1">
  
 
    <!-- row-->
    <div class="row">
      <div class="col-sm-8">
      <!--carousel-->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/slid1.jpg" alt="Los Angeles" style="width: 100%" >
                </div>

                <div class="item">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/sli2.jpg" alt="Chicago" style="width: 100%" >
                </div>
              
                <div class="item">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/slid3.jpg" alt="New york" style="width: 100%" >
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
       </div>
      <!--/carousel-->
    </div>
  
    <div class="col-sm-4 side">
   
   <?php echo do_shortcode("[pt_view id=ada1951vdj]"); ?>

    </div>
    </div>
    <!-- row-->
</section>
<!-- /carousel-->
<br />


<section id="section-1" style="margin-top: 20px"> 
    <div class="container">    
     <?php echo do_shortcode("[pt_view id=fba08cd417]"); ?>

    </div>
</section>

<br />
<br />

<section id="section-2">
    <div id="bg-grey" style="color: red">
        <p style="padding:15px 10px 0px 10px; font-size: 20px;" class="photo_ug">БИДНИЙ ЖАРГАЛТАЙ МӨЧҮҮД
        <a href="#" class="btn btn-success" style="float:right" id="btn2">Зургын Цомог Үзэх</a>
         </p>
         <hr>
      </div>
    
    <div class="photo1">
    
      <?php echo do_shortcode("[pt_view id=090e1d56p8]"); ?>
    </div>
</section>


<?php } ?>
<?php get_footer(); ?>

