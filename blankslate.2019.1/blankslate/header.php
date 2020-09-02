<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button, .primary-nav").toggleClass("open");
			});    
		});
        </script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
<link href="https://www.holisticpronerd.com/KaiNanfelt_Music/wp-content/themes/blankslate.2019.1/blankslate/style.css?ver=5.5" type='text/css' media='all'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
<nav id="menu" class="main-navigation">
<h1 class="title"><a href="https://www.holisticpronerd.com/KaiNanfelt_Music/">KAI NANFELT<a></h1>
<div id="site-title">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
<!-- <div id="search"><?php get_search_form(); ?></div> -->
<button class="nav-button">Toggle Navigation</button>
<ul class="primary-nav">
<?php wp_nav_menu(array(
   'menu' => 'Main Menu', 
   'items_wrap'=>'%3$s', 
   'container' => false
)); ?>
</ul>
</nav>
</header>
