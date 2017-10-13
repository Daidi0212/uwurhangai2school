<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fontawe/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/ninja-slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/default.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/ninja-slider.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.backgroundMove.js"></script>
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/default.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style1.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style2.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/animate.css">

</head>
<body>
	<div class="container-1000">
		<div class="white"></div>
		<div class="room"><p>Дотуур байрны цахим бүртгэл</p></div>
		<div class="head">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
			<p class="left">Өвөрхангай аймгийн тэргүүний  Хоёр дугаар сургууль</p>
			<p class="right">Бид Монгол Соёлыг Дэлхийд түгээнэ.</p>
			<?php dynamic_sidebar('social');?>
			<div class="menu-social-container">
				<ul>
					<li class="social-icon"><a href=""><i class="fa fa-facebook"></i></a></li>
					<li class="social-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
					<li class="social-icon"><a href=""><i class="fa fa-youtube"></i></a></li>
					<li class="social-icon"><a href=""><i class="fa fa-instagram"></i></a></li>
					<li class="social-icon"><a href=""><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<i class="fa fa-bars" aria-hidden="true"></i>
			<?php dynamic_sidebar('slider2');?>
		</div>
		<div class="navbar">
			<?php $args = array(
				'primary' => 'navigation menu' , 
				'container_id' => 'nav'
			) ?>
			<?php wp_nav_menu($args); ?>
		</div>
