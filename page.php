<style type="text/css">


      
</style>
<?php 
/* Template Name: theme1 Template */
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
        
            <div class="real_content">
              <?php the_content();?>
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