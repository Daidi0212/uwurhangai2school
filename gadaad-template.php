  <?php
  /* Template Name: gadaad Template */

 get_header(); ?>


<?php 
 if(have_posts()):
  while (have_posts()):the_post(); ?>
  <div class="content1">
    <article class="content2" id="them1">
       
          <h2 id="title1"><?php the_title(); ?></h2>
          <span class="line" style="margin-bottom:25px;" data-reactid=".0.2.1.0.1.$0.0.1"></span>
          <hr style="color:#3e4095">
         
          <!-- info -box -->
      <div class="row">
         <div  class="col-sm-9">
        
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
                              <div class="w1">
                               <h3 class="w1">Олон улсын хөрөнгө оруулалтын хэлэлцээрүүдийг шинэчлэх олон улсын бага хурал 2017 оны 10 дугаар сарын 9-ний өдөр Женев хотноо эхэллээ. </h3 class="w1">
                              </div>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/slid1.jpg" alt="Los Angeles" style="width: 100%; height: 350px;" >
                          
                                   
                            
                          </div>

                          <div class="item">
                              <div class="w1">
                            <h3 class="w1">Олон улсын хөрөнгө оруулалтын хэлэлцээрүүдийг шинэчлэх олон улсын бага хурал 2017 оны 10 дугаар сарын 9-ний өдөр Женев хотноо эхэллээ. </h3 class="w1">
                          </div>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/slid2.jpg" alt="Chicago" style="width: 100%; height: 350px;" >

                           
                                 
                             
                          </div>
                        
                          <div class="item">
                            <div class="w1">
                            <h3 class="w1">Олон улсын хөрөнгө оруулалтын хэлэлцээрүүдийг шинэчлэх олон улсын бага хурал 2017 оны 10 дугаар сарын 9-ний өдөр Женев хотноо эхэллээ. </h3 class="w1">
                             </div>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/slid3.jpg" alt="New york" style="width: 100%; height: 350px;" >
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
                 
            </div>
          
          <div  class="col-sm-3">
               <div class="sanal" >
                  <?php dynamic_sidebar('sanal');?>
                </div>
                  <div class="video1" >
                  <?php dynamic_sidebar('Timetable');?>
                </div>
          </div>
      </div>
     
       
     </article>
  </div>
  <br>
  <br>
 
    <?php  endwhile;

    
     endif; ?>
<?php     
     get_footer();
  

 ?>