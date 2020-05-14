<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-image" href="<?php global $shagor; echo $shagor['fav']['url'] ?>"/>
	<!-- Main css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" />
	<style type="text/css">
		#header {
			background: <?php echo $shagor['header'] ?>
		}
		#nav li a {
			background: <?php echo $shagor['menubg'] ?>
		}
		#nav li a:hover {
			background: <?php echo $shagor['menu-bg-hover'] ?>
		}
		.heading {
			background: <?php echo $shagor['widget-bg'] ?>
		}
		.readmore a {
			background: <?php echo $shagor['read-more'] ?>
		}
		.readmore a:hover {
			background: <?php echo $shagor['read-more-bg'] ?>
		}
		#footer_top {
			background: <?php echo $shagor['footer-top'] ?>
		}
		#footer_top {
			color: <?php echo $shagor['footer-top-color'] ?>
		}
		#footer_bottom {
			background: <?php echo $shagor['footer-bottom'] ?>
		}
		#footer_bottom {
			color: <?php echo $shagor['footer-bottom-color'] ?>
		}
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<section id="header">
		<div class="container">
			<div class="header_top">
				<div class="logo">
					<a href="<?php bloginfo('home'); ?>">
						<img src="<?php global $shagor; echo $shagor['logo']['url'] ?>"/>
					</a>
				</div>
				<div class="menu">
					<ul id="nav">
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'main',
							));
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>