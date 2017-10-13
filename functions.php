<?php 
function css(){
	wp_enqueque_style('style',get_stylesheet_uri());
}
add_action('wp_enqueque_scripts','css');
//menu 

function ourWidgetsInit() {
register_nav_menus(
	array(
		'primary' => __('navigation menu'),
		'middle' => __('middle menu'),
		'news' => __('news menu'),
		'month' => __('month menu'),
		'footer' => __('footer menu'),
		'social' => __('social menu'),
		'sub menu' => __('sub menu')
	)
);
	register_sidebar( array(
		'name' => 'Sidebar',
		'id'=> 'sidebar1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded">',
		'after_title'   => '</p>',
	
	) );
	register_sidebar( array(
		'name' => 'slider2',
		'id'=> 'sidebar2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded">',
		'after_title'   => '</p>',
	
	) );
	register_sidebar( array(
		'name' => 'social',
		'id'=> 'social',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded">',
		'after_title'   => '</p>',
	
	) );

}
add_action( 'widgets_init', 'ourWidgetsInit' )
?>
