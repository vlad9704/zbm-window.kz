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
					<div class="logo"><a href="/"><img src="<?bloginfo('template_directory')?>/images/dest/logo.png" alt=""></a></div>
				</div>
				<div class="col-lg-3 col-sm-6 col-7">
					<div class="header_location"><span>Ул. Н. Островского, д. 115 к. 1</span></div>
				</div>
				<div class="col-xl-2 col-lg-3 col-sm-6 col-7 d-flex flex-column">
					<a class="phone_one" href="tel:+77077777077">+7(707) 777 70 77</a>
					<a class="phone_two" href="tel:+77077777077">+7(707) 777 70 77</a>
				</div>
				<div class="col-lg-2 col-sm-6 col-5">
					<div class="header_social d-flex">
						<a href="facebook.com"><img src="<?bloginfo('template_directory')?>/images/dest/facebook.svg" alt="facebook" title="facebook"></a>
						<a href="instagram.com"><img src="<?bloginfo('template_directory')?>/images/dest/instagram.svg" alt="instagram" title="instagram"></a>
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
					<?/*<ul class="nav justify-content-around">
							<li class="nav-item">
								<div class="dropdown open">
									<a href="javascript:void(0)" class="btn dropdown-toggle" type="button" id="dropdownMenuButton_main" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Главная
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton_main">
										<a class="dropdown-item" href="#">О компании</a>
										<a class="dropdown-item" href="#">Миссия и ценности</a>
										<a class="dropdown-item" href="#">Реализованные проекты</a>
										<a class="dropdown-item" href="#">Карьера</a>
										<a class="dropdown-item" href="#">Контакты</a>
									</div>
								</div>
							</li>
							<li class="nav-item"><a href="#" class="nav-link">Партнеры</a></li>
							<li class="nav-item">
								<div class="dropdown open">
									<a href="javascript:void(0)" class="btn dropdown-toggle" type="button" id="dropdownMenuButton_osteklenie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Остекление
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton_osteklenie">
										<a class="dropdown-item" href="#">Толщина стекла</a>
										<a class="dropdown-item" href="#">Разновидности стекла</a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown open">
									<a href="javascript:void(0)" class="btn dropdown-toggle" type="button" id="dropdownMenuButton_pvh" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										ПВХ
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton_pvh">
										<a class="dropdown-item" href="#">Виды профиля</a>
										<a class="dropdown-item" href="#">Ламинированный профиль</a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown open">
									<a href="javascript:void(0)" class="btn dropdown-toggle" type="button" id="dropdownMenuButton_window" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Алюминевые окна
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton_window">
										<a class="dropdown-item" href="#">Виды</a>
									</div>
								</div>
							</li>
							<li class="nav-item"><a href="" class="nav-link">Новости</a></li>
						</ul>*/?>
				</div>
			</div>
		</div>
	</div>
</header>