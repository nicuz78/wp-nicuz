<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <!-- My styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
		function activadorDeBanner()
		{
		    $('.carousel-item:first').addClass('active');
		}
    </script>

    <title>Hello, world!</title>
  </head>
  <body>
  	<header>
  		<div class="container-fluid bg-base fixed-top">
				<nav class="navbar navbar-expand-lg bg-base container">
				  	<a class="navbar-brand" href="#">
						<img src="images/bootstrap-solid.svg" width="30" height="30" alt="">
					</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <?php wp_nav_menu(array(
				  	'theme_location' => 'menu-superior',
				  	'container' => 'div',
				  	'container_class' => 'collapse navbar-collapse',
				  	'container_id' => 'navbarSupportedContent',
				  	'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
				  	'menu_class' => 'nav-item'
				  ) ); ?>
				</nav>
  		</div>
  	</header>