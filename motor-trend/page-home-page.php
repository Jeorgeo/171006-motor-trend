<?php
/**
 * Template Name: Главная страница
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package motor-trend
 */

get_header(); ?>

<!-- MAIN ================================================================== -->
<main class="site-main">

	<section class="sec-intro" id="sec-intro">
		<div class="sec-intro__back"></div>
		<div class="sec-intro__front">
			<div class="container sec-intro__row">
				<div class="sec-intro__col-lt">
					<h1 class="sec-intro__title">Разработка и производство самых эффективных асинхронных двигателей в&nbsp;мире</h1>
					<div class="sec-intro__lead">Стань участником уникального инвестиционного проекта</div>
					<div class="sec-intro__video">
						<div class="video-unit">
							<div class="video-unit__screen">
								<div class="video-unit__poster js-youtube-init" data-youtube="xSQKyNR7Tvo">
									<img class="video-unit__img" src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/img/poster_850x478.jpg" alt="Youtube video">
									<a class="video-unit__start" role="button"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sec-intro__col-rt">
					<div class="form all-sections__form sec-intro__form">
						<div class="form__title"><?php the_field('button_article'); ?></div>
						<div class="form__line for-sumbmit">
							<a class="btn btn_red" role="button" href="https://reg.solargroup.pro/user/register" target="_blank" onclick="yaCounter46156305.reachGoal('2'); return true;">Присоединиться <i class="btn__icon-rt icon-more-red"></i></a>
						</div>
						<div class="form__note">
							Пройдите регистрацию в 3 простых шага, для Вас станут
							доступны все материалы и действующие предложения.
						</div>
					</div>
					<div class="sec-intro__note">
					</div>
				</div>
			</div><!-- END container -->
		</div><!-- END sec-intro__front -->
	</section><!-- END sec-intro -->

	<section class="sec-benefits" id="benefits-wrap">
		<div class="sec-benefits__back" id="benefits-back"></div>
		<div class="sec-benefits__front">
			<div class="container">
				<div class="sec-benefits__info">
					<h2 class="all-sections__title sec-benefits__title">В чем <strong>уникальность</strong> технологии Дуюнова</h2>
					<div class="all-sections__text">
						<p>
							Мотор-колесо по технологии Дуюнова — это первый в мире асинхронный
							электромотор с обмоткой типа «Славянка»,
							обладающий уникальным соотношением мощности с энергопотреблением.
						</p>
						<p>
							Новая технология основана на разработанной нами инновационной технологии
							совмещённых обмоток двигателей (параллельно соединённые звезда и треугольник).
						</p>
						<p>
							Благодаря совмещённым обмоткам параметры мотор-колеса значительно улучшаются
							и повышается энергоэффективность.
						</p>
					</div>
					<ul class="all-sections__list sec-benefits__list">
						<li class="all-sections__list-item icon-list-wheel">Увеличение крутящего момента до 50%</li>
						<li class="all-sections__list-item icon-list-road">Увеличение дальности поездки до 25%</li>
						<li class="all-sections__list-item icon-list-gage">Увеличение максимальной скорости на 10%</li>
						<li class="all-sections__list-item icon-list-watch">Улучшение разгонных характеристик на 30%</li>
					</ul>
				</div>
			</div><!-- END container -->
		</div><!-- END sec-benefits__front -->
	</section><!-- END sec-benefits -->

	<section class="sec-usage">
		<div class="container">
			<h2 class="all-sections__title sec-usage__title">Область <strong>применения</strong> асинхронных двигателей Дуюнова</h2>
			<div class="sec-usage__cards" id="usage-cards">
				<div class="sec-usage__card">
					<div class="info-card">
						<img class="info-card__img" src="<?php bloginfo('template_url'); ?>/img/info-card_01.jpg" data-action="zoom" alt="Производственные машины">
						<div class="info-card__text">
							<ul class="info-card__list">
								<li>Производственные машины</li>
								<li>Ручной электроинструмент</li>
								<li>Насосы</li>
								<li>Взрывозащищенные</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="sec-usage__card">
					<div class="info-card">
						<img class="info-card__img" src="<?php bloginfo('template_url'); ?>/img/info-card_02.jpg" data-action="zoom" alt="Электромобили">
						<div class="info-card__text">
							<ul class="info-card__list">
								<li>Электромобили</li>
								<li>Электровелосипеды</li>
								<li>Электрокатера</li>
								<li>Электросамолёты</li>
								<li>Электролокомотивы</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="sec-usage__card">
					<div class="info-card">
						<img class="info-card__img" src="<?php bloginfo('template_url'); ?>/img/info-card_03.jpg" data-action="zoom" alt="Ветровая энергетика">
						<div class="info-card__text">
							<ul class="info-card__list">
								<li>Ветровая энергетика</li>
								<li>Гидроэнергетика</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- END sec-usage__cards -->
		</div><!-- END container -->
	</section><!-- END sec-usage -->

	<section class="sec-history" id="history-wrap">
		<div class="sec-history__back" id="history-back"></div>
		<div class="sec-history__front">
			<div class="container">
				<h3 class="sec-history__title">Для справки:</h3>
				<ul class="sec-history__facts">
					<li class="sec-history__fact">1881 год — начало производства электродвигателей.</li>
					<li class="sec-history__fact">60% всей вырабатываемой электроэнергии в мире потребляют электродвигатели, 21% — освещение.</li>
					<li class="sec-history__fact">Во всем мире в год производится
более 7 миллиардов новых электродвигателей, еще порядка 7 миллиардов
проходят капитальный ремонт.</li>
					<li class="sec-history__fact">Общий мировой парк электродвигателей составляет 82,5 млрд двигателей, при этом износ парка порядка 80%.</li>
					<li class="sec-history__fact">Существует более 10 000 типов электродвигателей, 80 % из них — асинхронные.</li>
					<li class="sec-history__fact">Более 60 лет не происходило существенных обновление и модернизации в данной отрасли.</li>
				</ul>
			</div><!-- END container -->
		</div><!-- END sec-history__front -->
	</section><!-- END sec-history -->

	<section class="sec-features" id="technology">
		<div class="container">
			<h2 class="all-sections__title sec-features__title">
				В чем главные <strong>отличия</strong> мотор-колес Дуюнова <strong>от BLDC</strong>?
			</h2>
			<div class="all-sections__text sec-features__text">
				С каждым годом популярность мотор-колес возрастает. Но из-за
				использования в производстве редкоземельных&nbsp;магнитов, стоимость
				выпуска мотор-колес выходит дорогим. В мотор-колесах по технологии
				Дуюнова используется метод совемещенных обмоток, поэтому уменьшается
				применение дорогостоящих электротехнических материалов при производстве.
			</div>
		</div><!-- END container -->

		<div class="sec-features__stage" id="compare-wrap">
			<div class="sec-features__stage-back scroll-pos-undefined window-width-0-to-infinity" id="compare-move" style="top: 0px; position: absolute;">
				<div class="container">
					<div class="sec-features__back"></div>
				</div>
			</div>
			<div class="sec-features__stage-front">
				<div class="container">
					<div class="compare sec-features__compare">
						<h3 class="compare__title">Сравнение типов мотор-колес:</h3>
						<div class="compare__wrap">
							<div class="compare__row">
								<div class="compare__heading">Асинхронные по технологии Дуюнова</div>
								<div class="compare__heading">С постоянными магнитами — BLDC</div>
							</div>
							<div class="compare__unit">
								<h4 class="compare__property">Общее сравнение</h4>
								<div class="compare__row">
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Отсутствие тормозящих сил при отключенном питании:</li>
											<li>– возможность двигаться накатом;</li>
											<li>– легко крутить педали.</li>
											<li>2. Высокоэффективная рекуперация.</li>
										</ul>
									</div>
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Наличие мощного тормозящего момента при отключенном питании:</li>
											<li>– нет возможности двигаться накатом;</li>
											<li>– сложно крутить педали.</li>
											<li>2. Рекуперация затруднена.</li>
										</ul>
									</div>
								</div>
							</div><!-- END compare__unit -->

							<div class="compare__unit">
								<h4 class="compare__property">Характеристики</h4>
								<div class="compare__row">
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Сохранение вращающего момента при любых оборотах.</li>
											<li>2. Управляемая перегрузочная способность, зависит от токов.</li>
											<li>3. Сохранение коэрцитивной силы в течение всего срока службы, независимо от эксплуатации.</li>
										</ul>
									</div>
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Существенное падение вращающего момента с увеличением оборотов.</li>
											<li>2. Перегрузочная способность ограничена индукцией магнитов.</li>
											<li>3. Потеря коэрцитивной силы со временем. Скорость потери зависима от условий эксплуатации:</li>
											<li>– со временем мощность двигателя будет уменьшаться.</li>
										</ul>
									</div>
								</div>
							</div><!-- END compare__unit -->

							<div class="compare__unit">
								<h4 class="compare__property">Надежность</h4>
								<div class="compare__row">
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Практически не уязвимы при физических воздействиях.</li>
											<li>2. Не боятся ферромагнитной пыли.</li>
											<li>3. Не боятся воздействия влаги.</li>
											<li>4. Половина двигателя находится в неподвижном состоянии, хорошая система охлаждения.</li>
											<li>5. Возможность использовать кабель любой толщины.</li>
										</ul>
									</div>
									<div class="compare__col">
										<ul class="compare__list">
											<li> 1. Уязвим при физических воздействиях. Магниты — хрупкий материал. При ударах размагничиваются и могут раскрошиться.</li>
											<li>2. Боятся ферромагнитной пыли: <br> – часто повреждаются при эксплуатации; <br> – сложен ремонт.</li>
											<li>3. Боятся воздействия влаги: <br> – ржавеют, могут отклеиваться.</li>
											<li>4. Необходимость в герметичности усложняет организацию системы охлаждения.</li>
											<li>5. Ограниченность толщины кабеля питания диаметром.</li>
										</ul>
									</div>
								</div>
							</div><!-- END compare__unit -->

							<div class="compare__unit">
								<h4 class="compare__property">Доступность</h4>
								<div class="compare__row">
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Низкая стоимость.</li>
											<li>2. Доступность материалов и поставщиков российского сырья, независимость от других стран.</li>
											<li>3. Простота в производстве.</li>
										</ul>
									</div>
									<div class="compare__col">
										<ul class="compare__list">
											<li>1. Дороже стоят.</li>
											<li>2. Малое количество поставщиков сырья. Все запатентовано и монополизировано, зависимость от Китая.</li>
											<li>3. Дефицит сырья на рынке, сложность добычи этого сырья и его переработки.</li>
										</ul>
									</div>
								</div>
							</div><!-- END compare__unit -->
						</div><!-- END compare__wrap -->
					</div><!-- END compare -->
				</div><!-- END container -->
			</div><!-- END sec-features__stage-front -->
		</div><!-- END sec-features__stage -->
	</section><!-- END sec-features -->

	<section class="sec-show">
		<div class="container sec-show__container">
			<div class="sec-show__info">
				<h2 class="all-sections__title sec-show__title">
					Открыта запись на посещение <strong>ШОУ-РУМ</strong>а проекта Дуюнова!
				</h2>
				<div class="sec-show__join">
					<div class="sec-show__join-slogan">Записывайтесь на посещение!</div>
					<div class="sec-show__join-button">
						<a class="btn btn_red" href="https://goo.gl/forms/ciiqItHGTcS6H7Pf2" target="_blank" onclick="yaCounter46156305.reachGoal('3'); return true;">Записаться <i class="btn__icon-rt icon-more-red"></i></a>
					</div>
				</div>
				<ul class="sec-show__picts">
					<li class="sec-show__pict">
						<img class="sec-show__img" src="<?php bloginfo('template_url'); ?>/img/show_01.jpg" data-action="zoom" alt="Шоу-рум проекта Дуюнова">
					</li>
					<li class="sec-show__pict">
						<img class="sec-show__img" src="<?php bloginfo('template_url'); ?>/img/show_02.jpg" data-action="zoom" alt="Шоу-рум проекта Дуюнова">
					</li>
					<li class="sec-show__pict">
						<img class="sec-show__img" src="<?php bloginfo('template_url'); ?>/img/show_03.jpg" data-action="zoom" alt="Шоу-рум проекта Дуюнова">
					</li>
				</ul>
			</div>
			<div class="sec-show__map js-map-here" id="showroom-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2230.431410951745!2d37.1990813154467!3d56.01120098062325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b514458fc9afc1%3A0xe7f0e3e06153fdff!2z0J_QsNC90YTQuNC70L7QstGB0LrQuNC5INC_0YAuLCAxMCwg0JfQtdC70LXQvdC-0LPRgNCw0LQsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMjQ0NjA!5e0!3m2!1sru!2sve!4v1507752056219" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		</div><!-- END container -->
	</section><!-- END sec-show -->

	<section class="sec-subscribe">
		<div class="container">
			<h2 class="all-sections__title sec-subscribe__title">
				Запишись на <strong>бесплатный вебинар</strong>, <br>
				где мы подробно расскажем о нашем проекте
			</h2>
			<div class="sec-subscribe__wrap" id="subscribe-wrap">
				<div class="sec-subscribe__back">
					<div class="sec-subscribe__back-rotate" id="subscribe-rotate"></div>
				</div>
				<div class="form all-sections__form sec-subscribe__form">
					<div class="form__title">Зарегистрируйтесь в проекте и получите доступ к расписанию новых вебинаров и записям прошедших вебинаров</div>
					<!--div class="form__line">
						<input class="form__input" name="name" type="text" placeholder="Имя">
					</div>
					<div class="form__line">
						<input class="form__input" name="mail" type="text" placeholder="E-mail">
					</div -->
					<div class="form__line for-sumbmit">
						<a class="btn btn_red" href="https://reg.solargroup.pro/user/register" target="_blank" onclick="yaCounter46156305.reachGoal('4'); return true;">Зарегистрироваться <i class="btn__icon-rt icon-more-red"></i></a>
					</div>
					<div class="form__note">
						Пройдите регистрацию в 3 простых шага, для Вас станут
						доступны все материалы и действующие предложения.
					</div>
				</div>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-subscribe -->

	<section class="sec-progress">
		<div class="container">
			<h2 class="all-sections__title sec-progress__title">Как развивался наш проект</h2>
			<div class="stage sec-progress__stage">
				<div class="stage__wrap">
					<div class="stage__picts">
						<div class="stage__pict _pict-to-left _pict-half-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_01.jpg" data-action="zoom" alt="Наш проект">
						</div>
						<div class="stage__pict _pict-to-left _pict-half-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_02.jpg" data-action="zoom" alt="Наш проект">
						</div>
						<div class="stage__pict _pict-to-left _pict-half-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_03.jpg" data-action="zoom" alt="Наш проект">
						</div>
						<div class="stage__pict _pict-to-left _pict-half-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_04.jpg" data-action="zoom" alt="Наш проект">
						</div>
						<div class="stage__pict _pict-to-left _pict-half-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_05.jpg" data-action="zoom" alt="Наш проект">
						</div>
						<div class="stage__pict _pict-to-left _pict-full-wide">
							<img class="stage__img" src="<?php bloginfo('template_url'); ?>/img/progress_06.jpg" data-action="zoom" alt="Наш проект">
						</div>
					</div>
					<div class="stage__text">
						<dl class="stage__steps">
							<dt>1995</dt>
							<dd>
								Исследования и разработка технологии начались 20 лет назад.
							</dd>
							<dt>2011</dt>
							<dd>
								Начало широкого практического применения моторов с совмещёнными
								обмотками и получение первого патента.
							</dd>
							<dt>2012</dt>
							<dd>
								Приз за лучший инновационный проект в XI-конкурсе русских Инноваций.
							</dd>
							<dt>2013</dt>
							<dd>
								Донецк: испытания электровоза «Эра». После модификации
								вместо 5-ти вагонов «Эра» тянет 11 вагонов.
							</dd>
							<dt>2014</dt>
							<dd>
								Тюмень: модифицированный ветровой синхронный генератор уже
								при скорости ветра 2 м/c вырабатывает столько электричества,
								сколько оригинал давал при 5 м/с.
							</dd>
							<dt>2015</dt>
							<dd>
								Луцк и Киев: успешное внедрение технологии в электроавтобусе.<br>
								Германия — Монако: переоборудованный полноприводной электромобиль Renault
								Kangoo дает рекордные данные превосходящие все электромобили своего класса. <br>
								Выпуск 3-го прототипа МК. С поддержкой Глобальной Волны участие в выставке в Москве в ЦДХ <br>
							</dd>
							<dt>2017</dt>
							<dd>
								Старт народного инвестирования.
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-progress -->

	<section class="sec-gallery">
		<div class="container">
			<div class="sec-gallery__slider js-gallery-slider slick-initialized slick-slider slick-dotted"><button type="button" class="slick-arrow slick-prev" aria-disabled="true" style="display: block;"></button>
				<div class="slick-list draggable">
					<div class="slick-track" style="opacity: 1; width: 15580px; transform: translate3d(0px, 0px, 0px);">
						<div class="sec-gallery__slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 779px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_01.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Первый этап финансирования: завершился 22.09.2017 г., дисконт на этапе - от 525 до 875.
					</div>
				</div>
				<div class="sec-gallery__slide slick-slide" data-slick-index="1" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_02.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Второй этап финансирования: продлится с сентября по октябрь 2017 г., дисконт на этапе - от 480 до 800.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_03.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Третий этап финансирования: продлится с ноября по декабрь 2017 г., дисконт на этапе - от 440 до 730.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="3" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_04.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Четвертый этап нвестирования: продлится с января по февраль 2018, дисконт на этапе - от 400 до 670.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="4" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_05.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Пятый этап финансирования: продлится с марта по апрель 2018 г., дисконт на этапе - от 365 до 605.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="5" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_06.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Шестой этап финансирования: продлится с мая по июнь 2018 г., дисконт на этапе - от 325 до 545.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="6" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide06" aria-describedby="slick-slide-control06">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_07.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Седьмой этап финансирования: продлится с июля по август 2018 г., дисконт на этапе - от 290 до 490.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="7" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide07" aria-describedby="slick-slide-control07">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_08.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Восьмой этап финансирования: продлится с сентября по октябрь 2018 г., дисконт на этапе - от 260 до 440.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="8" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide08" aria-describedby="slick-slide-control08">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_09.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Девятый этап финансирования: продлится с ноября по декабрь 2018 г., дисконт на этапе - от 235 до 395.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="9" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide09" aria-describedby="slick-slide-control09">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_10.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Десятый этап финансирования: продлится с января по февраль 2019 г., дисконт на этапе - от 210 до 350.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="10" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide010" aria-describedby="slick-slide-control010">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_11.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Одиннадцатый этап финансирования: продлится с марта по апрель 2019 г., дисконт на этапе - от 185 до 305.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="11" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide011" aria-describedby="slick-slide-control011">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_12.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Двенадцатый этап финансирования: продлится с мая по июнь 2019 г., дисконт на этапе - от 160 до 265.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="12" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide012" aria-describedby="slick-slide-control012">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_13.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Тринадцатый этап финансирования: продлится с июля по август 2019 г., дисконт на этапе - от 130 до 220.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="13" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide013" aria-describedby="slick-slide-control013">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_14.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Четырнадцатый этап финансирования: продлится с сентября по октябрь 2019 г., дисконт на этапе - от 110 до 180.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="14" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide014" aria-describedby="slick-slide-control014">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_15.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Пятнадцатый этап финансирования: продлится с ноября по декабрь 2019 г., дисконт на этапе - от 90 до 150.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="15" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide015" aria-describedby="slick-slide-control015">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_16.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Шестнадцатый этап финансирования: продлится с января по февраль 2020 г., дисконт на этапе - от 75 до 125.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="16" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide016" aria-describedby="slick-slide-control016">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_17.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Семнадцатый этап инвесирования: продлится с марта по апрель 2020 г., дисконт на этапе - от 60 до 100.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="17" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide017" aria-describedby="slick-slide-control017">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_18.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Восемнадцатый этап финансирования: продлится с мая по июнь 2020 г., дисконт на этапе - от 45 до 75.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="18" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide018" aria-describedby="slick-slide-control018">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_19.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Девятнадцатый этап финансирования: продлится с июля по август 2020 г., дисконт на этапе - от 30 до 50.
					</div>
				</div><div class="sec-gallery__slide slick-slide" data-slick-index="19" aria-hidden="true" style="width: 779px;" tabindex="-1" role="tabpanel" id="slick-slide019" aria-describedby="slick-slide-control019">
					<div class="sec-gallery__slide-pict">
						<img class="sec-gallery__slide-img" src="<?php bloginfo('template_url'); ?>/img/step_20.jpg" alt="Lorem ipsum">
					</div>
					<div class="sec-gallery__slide-text">
						Двадцатый этап финансирования: продлится с сентября по октябрь 2020 г., дисконт на этапе - от 15 до 25.
					</div>
				</div></div></div><!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->
				<!-- END sec-gallery__slide -->

			<button type="button" class="slick-arrow slick-next" style="display: block;" aria-disabled="false"></button>
			<ul class="slick-dots" role="tablist">
				<li class="slick-active slick-li" role="presentation"><a class="slick-num" role="button">1</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">2</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">3</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">4</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">5</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">6</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">7</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">8</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">9</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">10</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">11</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">12</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">13</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">14</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">15</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">16</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">17</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">18</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">19</a></li>
				<li class="slick-li" role="presentation"><a class="slick-num" role="button">20</a></li>
			</ul></div><!-- END sec-gallery__slider -->
		</div><!-- END container -->
	</section><!-- END sec-gallery -->

	<section class="sec-about" id="company">
		<div class="container">
			<h2 class="all-sections__title sec-about__title">О компании</h2>
			<div class="sec-about__row">
				<div class="sec-about__text">
					<p>
						<strong>ООО «СовЭлМаш»</strong> — созданная в 2017 году компания
						для коммерциализации инновационного проекта участника Сколково
						«Асинхронный двигатель с совмещенными обмотками».
					</p>
					<p>
						Коллективом предприятия — инициатора проекта ООО «АС и ПП»
						разработаны и протестированы в течении десятка лет как на стендах,
						так и в реальных условиях эксплуатации сотни схем совмещённых обмоток
						для различных сочетаний пар полюсов, чисел пазов и мощностей.
					</p>
				</div>
				<div class="sec-about__pict">
					<img class="sec-about__img" src="<?php bloginfo('template_url'); ?>/img/about_01.jpg" data-action="zoom" alt="Коллектив предприятия">
				</div>
			</div>

			<div class="sec-about__info">
				<h3 class="sec-about__info-title">На чем будет зарабатывать компания:</h3>
				<ul class="all-sections__list">
					<li class="all-sections__list-item icon-list-page">
						Продажи лицензий на право производства асинхронных двигателей Дуюнова
					</li>
					<li class="all-sections__list-item icon-list-gear">
						Продажи технологического оборудования и оснастки для производства продукта
					</li>
					<li class="all-sections__list-item icon-list-plant">
						Мультиплицирования и расширенного производства продукции
					</li>
					<li class="all-sections__list-item icon-list-bill">
						Реализации готовой <br> продукции
					</li>
				</ul>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-about -->

	<section class="sec-invest" id="invest">
		<div class="container">
			<h2 class="all-sections__title sec-invest__title">Что предлагается инвестору</h2>
			<div class="sec-invest__pict">
				<img class="sec-invest__img" src="<?php bloginfo('template_url'); ?>/img/graphic.svg" alt="Инвестору">
			</div>
		</div><!-- END container -->
	</section><!-- END sec-invest -->

	<section class="sec-moment">
		<div class="container sec-moment__wrap">
			<h3 class="sec-moment__title">Окно возможностей для успешного развития проекта обеспечивается:</h3>
			<ul class="sec-moment__facts">
				<li class="sec-moment__fact">Существенным дефицитом
редкоземельных материалов, сдерживающим возможность наращивания объемов
производства тяговых двигателей Китаем.</li>
				<li class="sec-moment__fact">Действующими в Европе стандартами на энергоэффективность асинхронных двигателей.</li>
				<li class="sec-moment__fact">Запрет введения в оборот на территории Евросоюза электроинструмента с коллекторными двигателями.</li>
				<li class="sec-moment__fact">Провозглашенная президентом РФ программа импортозамещения.</li>
				<li class="sec-moment__fact">Бурное развитие электротранспорта в странах юго-востояной Азии и Индии.</li>
				<li class="sec-moment__fact">Законодательное принуждение к повышению энергоэффективности в РФ и Евросоюзе.</li>
			</ul>
		</div><!-- END container -->
	</section><!-- END sec-moment -->

	<section class="sec-present">
		<div class="container">
			<h2 class="all-sections__title sec-present__title">Первая <strong>презентация</strong> колесо-мотора Дуюнова</h2>
			<div class="sec-present__wrap">
				<div class="sec-present__video">
					<div class="video-unit">
						<div class="video-unit__screen" id="video-wrap">
							<div class="video-unit__poster js-youtube-init" data-youtube="WrE6r0LQD0M">
								<img class="video-unit__img" src="<?php bloginfo('template_url'); ?>/img/poster_01_850x478.jpg" alt="Youtube video">
								<a class="video-unit__start" role="button"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sec-present__text">
					<div class="sec-present__text-cntr">
						<p>
							24 июня на ВДНХ прошла первая встреча участников проекта Дуюнова.
						</p>
						<p>
							Участники познакомились и выслушали выступления Дмитрия Александровича
							Дуюнова, его команды, а также с инженеров и разработчиков асинхронных
							двигателей.
						</p>
						<p>
							На встрече участники покатались на электровелосипеде с мотор-колесом
							Дуюнова и познакомились с другими разработками Дмитрия Александровича.
						</p>
						<ul class="sec-present__thumbs">
							<li class="sec-present__thumbs-item">
								<img class="sec-present__thumbs-img" src="<?php bloginfo('template_url'); ?>/img/poster_01_850x478.jpg" alt="Презентация колесо-мотора Дуюнова">
								<a class="sec-present__thumbs-link js-video-set" data-video="WrE6r0LQD0M" data-poster="<?php bloginfo('template_url'); ?>/images/sec-present/poster_01_850x478.jpg" role="button"></a>
							</li>
							<li class="sec-present__thumbs-item">
								<img class="sec-present__thumbs-img" src="<?php bloginfo('template_url'); ?>/img/poster_02_850x478.jpg" alt="Презентация колесо-мотора Дуюнова">
								<a class="sec-present__thumbs-link js-video-set" data-video="mCfoUmFuHKc" data-poster="<?php bloginfo('template_url'); ?>/images/sec-present/poster_02_850x478.jpg" role="button"></a>
							</li>
							<li class="sec-present__thumbs-item">
								<img class="sec-present__thumbs-img" src="<?php bloginfo('template_url'); ?>/img/poster_03_850x478.jpg" alt="Презентация колесо-мотора Дуюнова">
								<a class="sec-present__thumbs-link js-video-set" data-video="jjDEWWf9hRk" data-poster="<?php bloginfo('template_url'); ?>/images/sec-present/poster_03_850x478.jpg" role="button"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-present -->

	<section class="sec-send">
		<div class="container sec-send__wrap">

			<div class="form all-sections__form sec-send__form">
				<div class="form__title"><?php the_field('button_article'); ?></div>
				<!--div class="form__line">
					<input class="form__input" name="name" placeholder="Имя" type="text">
				</div>
				<div class="form__line">
					<input class="form__input" name="mail" placeholder="E-mail" type="text">
				</div -->
				<div class="form__line for-sumbmit">
					<a class="btn btn_red" href="https://reg.solargroup.pro/user/register" target="_blank" onclick="yaCounter46156305.reachGoal('5'); return true;">Присоединиться <i class="btn__icon-rt icon-more-red"></i></a>
				</div>
				<div class="form__note">
					Пройдите регистрацию в 3 простых шага, для Вас станут
					доступны все материалы и действующие предложения.
				</div>
			</div>
			<div class="sec-send__text">
				<h2 class="all-sections__title sec-send__title">
					Присоединяйтесь к проекту и вам станут доступна информация о стратегических
					<strong>перспективах, технологии и план</strong> развития проекта
				</h2>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-send -->

	<section class="sec-about">
		<div class="container">
			<h2 class="all-sections__title sec-about__title"><strong>Разработчик</strong> технологии Дуюнова</h2>
			<div class="sec-about__row">
				<div class="sec-about__text">
					<h3>Дмитрий Александрович Дуюнов</h3>
					<p>
						Российский изобретатель асинхронного мотор-колеса, в котором вместо пояса сильных
						редкоземельных магнитов, как в классических электродвигателях,
						используется широкое кольцо из медной обмотки.
					</p>
					<p>
						Руководитель научно-производственного предприятия
						технико-внедренческого типа — компании «АС и ПП»
					</p>
				</div>
				<div class="sec-about__pict">
					<img class="sec-about__img" src="<?php bloginfo('template_url'); ?>/img/about_02.jpg" data-action="zoom" alt="Дмитрий Александрович Дуюнов">
				</div>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-about -->

	<section class="sec-patents">
		<div class="container sec-patents__wrap">
			<h2 class="all-sections__title sec-patents__title">Награды, дипломы, патенты</h2>
			<ul class="sec-patents__thumbs">
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_01_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_01.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_02_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_02.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_03_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_03.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_04_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_04.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_05_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_05.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_06_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_06.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/award_07_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/award_07.jpg" data-action="zoom" alt="Награды Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_01_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_01.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_02_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_02.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_03_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_03.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_04_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_04.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_05_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_05.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_06_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_06.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_07_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_07.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_08_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_08.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_09_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_09.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_10_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_10.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_11_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_11.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_12_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_12.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_13_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_13.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_14_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_14.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
				<li class="sec-patents__thumbs-item">
					<img class="sec-patents__thumbs-img lazyload blur-up" data-expand="-70" src="<?php bloginfo('template_url'); ?>/img/patent_15_low.jpg" data-src="<?php bloginfo('template_url'); ?>/images/patent_15.jpg" data-action="zoom" alt="Патенты Дуюнова">
				</li>
			</ul>
		</div><!-- END container -->
	</section><!-- END sec-patents -->

	<section class="sec-increase">
		<div class="container">
			<h2 class="all-sections__title sec-increase__title">
				<strong>Увеличим мощность</strong> вашего электродвигателя на 15-50%
			</h2>
			<div class="sec-increase__lead">Модернизируем ваш двигатель по технологии Дуюнова</div>
			<div class="sec-increase__wrap">
				<img class="sec-increase__img" src="<?php bloginfo('template_url'); ?>/img/increase_01.jpg" data-action="zoom" alt="обмотка Славянка">
				<div class="sec-increase__note">
					Мы предлагаем модернизировать находящиеся в эксплуатации электродвигатели
					любой мощности за счет смены обмоток по запатентованному нами методу
					совмещенных обмоток «Славянка».
				</div>
				<div class="sec-increase__subtitle">Простое изменение обмоток даёт впечатляющие результаты:</div>
				<ul class="sec-increase__list">
					<li>Снижение удельного потребления <br> электроэнергии на 10-40%</li>
					<li>Улучшение вибро-шумовых характеристик, <br> в&nbsp;среднем уровень звука ниже на 5Дб</li>
					<li>Повышенная надежность: <br> сервис&nbsp;фактор 2,5</li>
					<li>Более высокий пусковой <br> момент на 40%</li>
					<li>Уменьшение кратности пускового <br> тока на 40%</li>
					<li>Больший минимальный <br> момент на 40%</li>
					<li>Больший максимальный <br> момент на 20%</li>
					<li>Получение КПД и cos, близкий к номинальному <br> в диапазоне нагрузок от 20 до 140%</li>
				</ul>
				<a class="btn btn_black sec-increase__more-btn" href="https://reg.solargroup.pro/user/register" onclick="yaCounter46156305.reachGoal('6'); return true;">Узнать подробнее <i class="btn__icon-rt icon-more-black"></i></a>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-increase -->

	<section class="sec-mailing">
		<div class="container sec-mailing__wrap">
			<div class="sec-mailing__text">
				<h2 class="all-sections__title sec-mailing__title">
					Хочу получать <strong>свежие новости</strong> и материалы по развитию проекта
				</h2>
				<div class="sec-mailing__note">
					Зарегистрируйся в нашем личном кабинете и будь в курсе
					последних событий, а также расписания наших вебинаров.
				</div>
			</div>
			<div class="form all-sections__form sec-mailing__form">
				<div class="form__title"><?php the_field('button_article'); ?></div>
				<!--div class="form__line">
					<input class="form__input" name="name" placeholder="Имя" type="text">
				</div>
				<div class="form__line">
					<input class="form__input" name="mail" placeholder="E-mail" type="text">
				</div -->
				<div class="form__line for-sumbmit">
					<a class="btn btn_red" href="https://reg.solargroup.pro/user/register" target="_blank" onclick="yaCounter46156305.reachGoal('7'); return true;">Регистрация <i class="btn__icon-rt icon-more-red"></i></a>
				</div>
				<div class="form__note">
					Пройдите регистрацию в 3 простых шага, для Вас станут
					доступны все материалы и действующие предложения.
				</div>
			</div>
		</div><!-- END container -->
	</section><!-- END sec-mailing -->

	<section class="sec-partners">

	</section><!-- END sec-partners -->

</main><!-- END site-main --></div><!-- END site-wrapper -->

<?php
get_footer();
