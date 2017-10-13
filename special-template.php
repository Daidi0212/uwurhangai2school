
<?php 
/* Template Name: Special2 Template */
 get_header();
 if(have_posts()):
  while (have_posts()):the_post(); ?>
  <div class="content1">
    <article class="content2" id="them1">
       
          <h2 id="title1"><?php the_title(); ?></h2>
          <span class="line" style="margin-bottom:25px;" data-reactid=".0.2.1.0.1.$0.0.1"></span>
          <hr style="color:#3e4095">
         
          <!-- info -box -->
        

          <?php the_content();?>
     
       
     </article>
  </div>
  <br>
  <br>
 
    <?php  endwhile;

    
     endif;
     get_footer();
  

 ?>
