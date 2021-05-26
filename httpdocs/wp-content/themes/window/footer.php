<footer>
	<div class="row no-gutters">
		<div class="col-lg-5 col-md-6">
			<div class="contact_block">
				<div class="title">Контакты</div>
				<div class="contact_items">
					<div class="contact_item"><?the_field('header_address', 2)?></div>
					<div class="contact_item"><?the_field('work_time', 2)?></div>
					<div class="contact_item"><a href="mailto: <?the_field('mail_address', 2)?>"><?the_field('mail_address', 2)?></a></div>
					<div class="contact_item">
						<a class="phone_one" href="tel:<?the_field('header_phone_one', 2)?>"><?the_field('header_phone_one', 2)?></a>
						<a class="phone_two" href="tel:<?the_field('header_phone_two', 2)?>"><?the_field('header_phone_two', 2)?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-6">
			<div class="map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5cc928e977e97aca4290cc7f6d8c8a35a937ccbeea41ec6af9994c7513600c14&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="f_bottom_menu_block">
					<div class="f_bottom_menu_cont">
						<span class="requsitess">
							<?the_field('footer_iin', 2)?> <br>
							<?the_field('footer_ogrn', 2)?>
						</span>
						<?
						wp_nav_menu( array(
							'theme_location'  => 'footer',
							'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'ul',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => 'bottom_menu',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
						?>
					</div>
					<div class="f_bottom_contact_block">
						<ul>
							<li>Политика конфиденциальности</li>
							<li><a class="mail" href="mailto: <?the_field('mail_address', 2)?>"><?the_field('mail_address', 2)?></a></li>
							<li>
								<div class="numbers">
									<a class="phone_one" href="tel:<?the_field('header_phone_one', 2)?>"><?the_field('header_phone_one', 2)?></a>
									<a class="phone_two" href="tel:<?the_field('header_phone_two', 2)?>"><?the_field('header_phone_two', 2)?></a>
								</div>
							</li>
							<li>
								<div class="f_bottom_social">
									<a target="_blank" href="<?the_field('facebook_link', 2)?>"><img src="<?bloginfo('template_directory')?>/images/dest/facebook_footer.svg" alt="facebook" title="facebook"></a>
									<a target="_blank" href="https://www.instagram.com/<?the_field('instagram_link', 2)?>"><img src="<?bloginfo('template_directory')?>/images/dest/instagram_footer.svg" alt="instagram" title="instagram"></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- UNIVERSAL-FOR-LANDING -->
<div id="modal">
	<div class="container">
		<h4 class="text-center">
			Оставить заявку
		</h4>
		<div class="row align-items-center">
			<div class="col-md-6">
				<form class="form flex-column">
					<input type="text" name="mfbName" placeholder="Имя">
					<input type="text" name="mfbPhone" placeholder="Телефон">
					<div class="d-flex"><button type="submit">Отправить</button></div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="mobilemenu-block d-flex d-lg-none">
	<div id="burger-box" class="">
		<div class="burger"></div>
	</div>
	<div class="mobile-menu">
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

<div class="scroll"><img src="<?bloginfo('template_directory')?>/images/dest/scroll.png" alt="scroll"></div>

<? wp_footer(); ?>

<script src="<?bloginfo('template_directory')?>/js/plugins/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script src="<?bloginfo('template_directory')?>/js/jquery.maskedinput.js"></script>
<script src="<?bloginfo('template_directory')?>/js/app.js"></script>

</body>
</html>