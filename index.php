<?php get_header(); ?>
<?php wp_head(); ?>
<?php 
if(have_posts()){
		the_content();
?>

<section id="section-1" style="margin-top: 230px"> 
    <div class="container">    
        <br />
        <?php echo do_shortcode("[pt_view id=97a55c29m8]"); ?>
    </div>
</section>

<br />
<br />

<section id="section-2">
    <div id="bg-grey" style="color: red">
        <p style="padding: 5px">БИДНИЙ ЖАРГАЛТАЙ МӨЧҮҮД <a href="#" class="btn btn-success" style="float:right">Зургын Цомог Үзэх</a></p>
        
    </div>
    <?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
</section>
<br />
<br />

<?php } ?>
<?php get_footer(); ?>

