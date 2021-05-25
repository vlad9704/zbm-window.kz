<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>Bant-Diyar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?bloginfo('template_directory')?>/images/dest/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?bloginfo('template_directory')?>/css/app.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<header>
	<div class="container">
		<div class="top_bar">
			<div class="row align-items-center justify-content-between">
				<div class="col-xl-3 col-lg-3 col-sm-6 col-5">
					<div class="logo">
<!--						<a href="/"><img src="--><?//bloginfo('template_directory')?><!--/images/dest/logo.png" alt=""></a>-->
						<a href="/">
							<?php
							$logo_img = '';
							if ($custom_logo_id = get_theme_mod('custom_logo')) {
								$logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
									'itemprop' => 'logo',
								));
								echo $logo_img;
							} else {
								echo '<span class="logo-name">' . get_bloginfo('name') . '</span>';
							}
							?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-7">
					<div class="header_location"><span><?the_field('header_address', 2)?></span></div>
				</div>
				<div class="col-xl-2 col-lg-3 col-sm-6 col-7 d-flex flex-column">
					<a class="phone_one" href="tel:<?the_field('header_phone_one', 2)?>"><?the_field('header_phone_one', 2)?></a>
					<a class="phone_two" href="tel:<?the_field('header_phone_two', 2)?>"><?the_field('header_phone_two', 2)?></a>
				</div>
				<div class="col-lg-2 col-sm-6 col-5">
					<div class="header_social d-flex">
						<a target="_blank" href="<?the_field('facebook_link', 2)?>"><img src="<?bloginfo('template_directory')?>/images/dest/facebook.svg" alt="facebook" title="facebook"></a>
						<a target="_blank" href="https://www.instagram.com/<?the_field('instagram_link', 2)?>"><img src="<?bloginfo('template_directory')?>/images/dest/instagram.svg" alt="instagram" title="instagram"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 justify-content-center">
				<div class="main_menu">
					<?
					wp_nav_menu( array(
						'theme_location'  => 'top',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'nav justify-content-around',
						'menu_id'         => 'top_menu',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
					?>
				</div>
			</div>
		</div>
	</div>
</header>