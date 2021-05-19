<? get_header() ?>

	<div class="container">
		<? the_post(); ?>
		<? the_content(); ?>
	</div>

	<section id="osteklenie">
		<div class="row align-items-xl-end no-gutters justify-content-end flex-column-reverse flex-sm-column-reverse flex-lg-row">
			<div class="col-lg-5 col-sm-12">
				<div class="info_block">
					<div class="title">
						<h1>Остекление</h1>
						<h2>Балконов, лоджий, квартир, домов и коттеджей</h2>
					</div>
					<div class="more_info_cont">
						<a class="more_info" href="#modal" data-fancybox="">Узнать стоимость</a>
						<div class="img_mouse">
							<img src="<?bloginfo('template_directory')?>/images/dest/mouse.svg" alt="mouse" title="mouse">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-sm-12">
				<div class="img_osteklenie">
					<img src="<?bloginfo('template_directory')?>/images/dest/osteklenie.jpg" alt="image" title="image">
				</div>
			</div>
		</div>
	</section>

	<section id="calculation">
		<div class="row no-gutters ">
			<div class="col-xl-5 col-md-12">
				<div class="img_calculation">
					<img src="<?bloginfo('template_directory')?>/images/dest/calculation_block.png" alt="image" title="image">
				</div>
			</div>
			<div class="col-xl-7 col-md-12">
				<div class="calculation_block">
					<div class="calculation_title">
						Рассчитать стоимость
					</div>
					<div class="calculation_fields">
						<div class="calculation_item">
							<p>Ширина:</p>
							<input placeholder="ширина/м²" class="width_size j_width_size" type="number">
						</div>
						<div class="calculation_item">
							<p>Высота:</p>
							<input placeholder="высота/м²" class="height_size j_height_size" type="number">
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="25000">
								<input type="radio">
								<span>Одностворчатое</span>
							</div>
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="28000">
								<input type="radio">
								<span>Двухстворчатое ( три секции )</span>
							</div>
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="0">
								<input type="radio">
								<span>Простое открывание</span>
							</div>
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="7000">
								<input type="radio">
								<span>Сложное открывание</span>
							</div>
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="35000">
								<input type="radio">
								<span>Ламинированный профиль</span>
							</div>
						</div>
						<div class="calculation_item">
							<div class="j_type_window i_type_window" data-price="70000">
								<input type="radio">
								<span>Алюминиевый профиль</span>
							</div>
						</div>
					</div>
					<div class="order_block">
						<div class="total">Итого: <span class="jq_total"></span></div>
						<a class="to_order j_count_btn" href="javascript:void(0)">Рассчитать</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">Портфолио</div>
					<div id="gallery_slider">
						<a href="<?bloginfo('template_directory')?>/images/dest/gallery_1.jpg" data-fancybox="gallery" class="slide">
							<img src="<?bloginfo('template_directory')?>/images/dest/gallery_1.jpg" alt="">
						</a>
						<a href="<?bloginfo('template_directory')?>/images/dest/gallery_2.jpg" data-fancybox="gallery" class="slide">
							<img src="<?bloginfo('template_directory')?>/images/dest/gallery_2.jpg" alt="">
						</a>
						<a href="<?bloginfo('template_directory')?>/images/dest/gallery_3.jpg" data-fancybox="gallery" class="slide">
							<img src="<?bloginfo('template_directory')?>/images/dest/gallery_3.jpg" alt="">
						</a>
						<a href="<?bloginfo('template_directory')?>/images/dest/gallery_3.jpg" data-fancybox="gallery" class="slide">
							<img src="<?bloginfo('template_directory')?>/images/dest/gallery_3.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">О нас</div>
					<div class="movie">
						<img src="<?bloginfo('template_directory')?>/images/dest/video.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="call_personal">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="call_personal_container">
						<div class="call_personal_block">
							<div class="title">Вызвать замерщика</div>
							<div class="description">
								Замерщик подстроится под удобное для Вас время. <br>
								Замер займет не более 10 минут. <br>
								Это <span>БЕСПЛАТНО</span> и ни к чему Вас не обязывает
							</div>
							<div class="request_personal_block">
								<a data-fancybox href="#modal">Вызвать замерщика</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="personal_img_block">
						<div class="personal_img"><img src="<?bloginfo('template_directory')?>/images/dest/personal.png" alt="personal" title="personal"></div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

<? get_footer() ?>
