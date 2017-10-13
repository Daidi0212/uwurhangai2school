
<?php get_header(); ?>
<?php wp_head(); ?>
<div class="post1">
	<?php if ( have_posts() ) {
		while ( have_posts() ) 
			{the_post(); 
				?>
		

		 <h2 id="title1"><?php the_title(); ?></h2>
          <span class="line" style="margin-bottom:25px;" data-reactid=".0.2.1.0.1.$0.0.1"></span>
          <hr style="color:#3e4095">

			 
			 <div class="time">
				<?php the_time('l, F jS, Y') ?> 
				</div>
			    <?php the_content();
									//
									// Post Content here
									//
								} // end while
							} // end if
				?> 
				
</div>
<br>

<?php get_footer(); ?>