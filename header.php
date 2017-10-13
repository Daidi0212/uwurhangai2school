<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fontawe/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/default.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.backgroundMove.js"></script>
	 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style1.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style2.css">


	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-1000">
		<div class="white"></div>
		<div class="room"><p>Дотуур байрны цахим бүртгэл</p></div>
		<div class="head">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
			<p class="left">Өвөрхангай аймгийн тэргүүний  Хоёр дугаар сургууль</p>
			<p class="right">Бид Монгол Соёлыг Дэлхийд түгээнэ.</p>
			<?php dynamic_sidebar('social');?>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<div class="navbar">
			<?php $args = array(
				'primary' => 'navigation menu' , 
				'container_id' => 'nav'
			) ?>
			<?php wp_nav_menu($args); ?>
		</div>

