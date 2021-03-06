<?php
/*
Template Name: Template for Main Page
*/
?>


<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Steel Work Group</title>
        <meta name="description" content="Barebones HTML project">
        <meta name="viewport" content="width=1280, minimal-ui">

        <!-- Favicon block -->
        <!-- Images generated from a single 260x260 image by http://realfavicongenerator.net/ -->
        <link rel="shortcut icon" href="<?php popel_theme_uri(); ?>favicon.ico">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php popel_theme_uri(); ?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php popel_theme_uri(); ?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php popel_theme_uri(); ?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php popel_theme_uri(); ?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php popel_theme_uri(); ?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php popel_theme_uri(); ?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php popel_theme_uri(); ?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php popel_theme_uri(); ?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php popel_theme_uri(); ?>/apple-touch-icon-180x180.png">

        <link rel="icon" type="image/png" href="<?php popel_theme_uri(); ?>/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php popel_theme_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php popel_theme_uri(); ?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php popel_theme_uri(); ?>/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php popel_theme_uri(); ?>/manifest.json">

        <meta name="apple-mobile-web-app-title" content="SWG">
        <meta name="application-name" content="SWG">
        <meta name="msapplication-TileColor" content="#1e242b">
        <meta name="msapplication-TileImage" content="<?php popel_theme_uri(); ?>/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- / Favicon block -->

        <link rel="stylesheet" href="<?php popel_theme_uri(); ?>/styles/main.css">




        <!-- Cached build -->
        <script src="<?php popel_theme_uri(); ?>/scripts/vendor/modernizr-2.8.3.min.js"></script>
        <!-- /

        <!-- -->

	<style>
		.page-preloader {
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			background: rgb(27,35,43);
			z-index: 9999991005000;
		}
		.page-preloader .preloader-itself {
			width: 128px;
			height: 128px;
			position: absolute;
			left: 50%;
			top: 50%;
			background: url('<?php popel_theme_uri(); ?>/preloader.gif') no-repeat 50% 50%;
			margin: -64px 0 0 -64px;
		}
	</style>
</head>
<body data-spy="scroll" data-offset="120" data-target="#navbar">

<div class="page-preloader"><div class="preloader-itself"></div></div>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="skrollr-body">

<div class="layout-header">
	<div class="top-header-bg"></div>
	<a href="http://swg.popel-studio.com/" class="main-logo">
		<div class="swg-logo">
			<svg version="1.1" id="Layer_1" width="63px" height="51px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 57.4 44.3" enable-background="new 0 0 57.4 44.3" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M0.3,44.3c-0.1,0-0.1,0-0.2-0.1C0,44.2,0,44.1,0,43.9L8.9,8C8.9,7.9,9,7.8,9,7.8l10.1-6.7
		c0.1-0.1,0.3-0.1,0.4,0.1c0.1,0.1,0.1,0.3-0.1,0.4l-10,6.6L0.8,43.3l37.3-22.8c0.2-0.1,0.4,0,0.4,0.1c0.1,0.2,0,0.4-0.1,0.4
		L0.5,44.3C0.4,44.3,0.4,44.3,0.3,44.3"/>
	<path fill="#FFFFFF" d="M45.4,44.3H0.3C0.1,44.3,0,44.2,0,44c0-0.2,0.1-0.3,0.3-0.3h45l11.4-7.3L51.7,14c0-0.2,0.1-0.3,0.2-0.4
		c0.2,0,0.3,0.1,0.4,0.2l5.1,22.6c0,0.1,0,0.3-0.1,0.3l-11.7,7.5C45.5,44.3,45.5,44.3,45.4,44.3"/>
	<path fill="#FFFFFF" d="M57.1,36.8H12.7c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.3l7.8-33.9c0-0.2,0.2-0.3,0.4-0.2
		c0.2,0,0.3,0.2,0.2,0.4l-7.7,33.5h43.3l-15.4-15c-0.1-0.1-0.1-0.3,0-0.5c0.1-0.1,0.3-0.1,0.5,0l16,15.5c0.1,0.1,0.1,0.2,0.1,0.4
		C57.4,36.7,57.3,36.8,57.1,36.8"/>
	<path fill="#FFFFFF" d="M45.4,44.3c-0.1,0-0.2,0-0.2-0.1L9,8.3C8.9,8.2,8.9,8,9,7.9C9,7.8,9.2,7.7,9.3,7.8l27,10.5
		c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2L10.5,8.9l34.3,34l-5.2-21.2c0-0.2,0.1-0.3,0.2-0.4c0.2,0,0.3,0.1,0.4,0.2
		l5.4,22.3c0,0.1,0,0.3-0.2,0.4C45.5,44.3,45.5,44.3,45.4,44.3"/>
	<path fill="#26A9E0" d="M22,1.2l18,18.4l10.8-7.3L22,1.2z M40,20.3c-0.1,0-0.2,0-0.2-0.1L20.5,0.5c-0.1-0.1-0.1-0.3,0-0.4
		C20.6,0,20.7,0,20.9,0l30.8,12c0.1,0,0.2,0.1,0.2,0.3s0,0.2-0.1,0.3l-11.5,7.7C40.1,20.3,40,20.3,40,20.3"/>
</g>
</svg>
		</div>
		<div class="logo-text">STEEL WORK GROUP</div>
	</a>
	<div class="nav-bar">
		<ul>
			<li><a href="http://swg.popel-studio.com/proektirovanie/">Проектирование</a></li>
			<li><a href="http://swg.popel-studio.com/izgotovlenie/">Изготовление</a></li>
			<li><a href="http://swg.popel-studio.com/montazh/">Монтаж</a></li>
			<!--<li><a href="portfolio.html">Наши работы</a></li>-->
		</ul>
	</div>
	<div class="header-tel">
		<span class="tel-span">+38 044 270 25 89</span>
		<a class="arrow-down-link" href="#application-section">


		<div class="arrow-down-cont">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60.2px"
					 height="40.9px" viewBox="0 0 130.2 64.9" enable-background="new 0 0 130.2 64.9" xml:space="preserve">
				<g id="Layer_1">
				</g>
				<g id="Layer_4">
				</g>
				<g id="Layer_3">
				</g>
				<g id="Layer_2">
				</g>
				<g id="Layer_5">
					<g>
				<polygon fill="none" stroke="#3E95E9" stroke-width="3" stroke-miterlimit="10" points="65.1,0.6 129.1,32.5 65.1,64.4 1.1,32.5 		"/>
				<polyline fill="none" stroke="#3E95E9" stroke-width="4" stroke-miterlimit="10" points="88.2,28.5 64.2,40.4 40.2,28.5 		"/>
					</g>
				</g>
				</svg>
		</div>
		</a>
		<!--<div class="contact-us"><span>Связаться с нами</span></div>-->
		<!--<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
								 <!--width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833"-->
								 <!--xml:space="preserve">-->
							<!--<rect x="10.125" y="0.497" fill="none" stroke="#FFFFFF" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"/>-->
							<!--<polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 "/>-->
							<!--<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"/>-->
							<!--<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"/>-->
							<!--<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"/>-->
							<!--</svg>-->
	</div>
</div>

<div class="layout-content">
    <div class="content-wrapper">

        <section class="head-block" id="head-block">
			<div class="head-wrap">
			<div id="myCarousel" class="carousel slide carousel-top" data-ride="carousel">

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="container">
							<div class="layout-container">
							<div class="head-content" data-0="opacity:1; transform:translateY(0%)" data-100p="opacity:0; transform:translateY(100%)">
								<h1>STEEL WORK GROUP</h1>
								<p>Проектируем, изготавливаем и монтируем металлоконструкции<br> на отечественном и экспортных рынках с 2005 года</p>
							</div>
							</div>

						</div>
					</div>
					<div class="item">
						<div class="container">
							<div class="layout-container">
								<div class="head-content additional-margin-top"data-0="opacity:1; transform:translateY(0%)" data-100p="opacity:0; transform:translateY(100%)">
									<h1>SWG В ЦИФРАХ</h1>
									<div class="head-table">
										<div class="head-table-cell">
											<h2>10</h2>
											<span>лет на рынке</span>
										</div>
										<div class="head-table-cell">
											<h2>6000</h2>
											<span>тонн производим</span>
										</div>
										<div class="head-table-cell">
											<h2>22000</h2>
											<span>тонны в год проектируем</span>
										</div>
										<div class="head-table-cell">
											<h2>3600</h2>
											<span>тонн в год монтируем</span>
										</div>
										<div class="head-table-cell">
											<h2>8600</h2>
											<span>м2 собственных производственных площадей</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="item">
						<div class="container">
							<div class="layout-container">
								<div class="head-content additional-margin-top" data-0="opacity:1; transform:translateY(0%)" data-100p="opacity:0; transform:translateY(100%)">
									<h1>ГАРАНТИИ КАЧЕСТВА</h1>
									<div class="head-table">
										<div class="head-table-cell">
											<span class="quality-table-span">Положительные отзывы клиентов</span>
										</div>
										<div class="head-table-cell">
											<span class="quality-table-span">Аттестованные специалисты</span>
										</div>
										<div class="head-table-cell">
											<span class="quality-table-span">
												Сертифицированная продукция
											</span>
										</div>
										<div class="head-table-cell">
											<span class="quality-table-span">
												Система контроля на всех этапах
											</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="item">
						<div class="container">
							<div class="layout-container">
								<div class="head-content additional-margin-top-more" data-0="opacity:1; transform:translateY(0%)" data-100p="opacity:0; transform:translateY(100%)">
									<h1 class="header-less-size-top">Новые еффективные решения</h1>
									<div class="head-table">
										<div class="head-table-cell"><span>Современные наддорожные  конструкции</span></div>
										<div class="head-table-cell"><span>Системы шумозащиты</span></div>
										<div class="head-table-cell"><span>Барьерные ограждения</span></div>

									</div>
									<div class="head-table">
										<div class="head-table-cell"><span>Вентилируемые фасады<br></span></div>
										<div class="head-table-cell"><span>Системы крепления <br>гелиомодулей</span></div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<a class="left carousel-control hidden" href="#myCarousel" role="button" data-slide="prev">
					<span class="prev-proj-head"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="next-proj-head"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="slide-background-wrap" data-smooth-scrolling="on">
				<div style="background-image: url('<?php popel_theme_uri(); ?>/images/main-slide-1.jpg');
    					background-size: cover; background-position: bottom" class="slide-background active" ></div>
				<div style="background-image: url('<?php popel_theme_uri(); ?>/images/main-slide-2.jpg');
    					background-size: cover; background-position: bottom"  class="slide-background"></div>
				<div style="background-image: url('<?php popel_theme_uri(); ?>/images/main-slide-3.jpg');
    					background-size: cover; background-position: bottom"  class="slide-background" ></div>
				<div style="background-image: url('<?php popel_theme_uri(); ?>/images/swg-device.jpg');
    					background-size: cover; background-position: bottom"  class="slide-background" ></div>
			</div>
			</div>

			<!--<img class="bg-image-head" src="images/main_background.jpg" alt=""/>-->

        </section>
		<div class="arrow-bottom-block">
		<div class="arrow-bottom"><div class="arrow-down"></div></div>
		</div>
        <section class="scope-block homepage-scope" >
			<div id="navbar" >
				<ul class="nav scroll-spy">
					<li class="active"><a href="#head-block" class="js-scroll"></a></li>

					<li><a href="#projecting-section" class="js-scroll"></a></li>


					<li><a href="#manufactoring-section" class="js-scroll"></a></li>


					<li><a href="#assembly-section" class="js-scroll"></a></li>

					<li><a href="#works-section" class="js-scroll"></a></li>


					<li><a href="#application-section" class="js-scroll"></a></li>
				</ul>
			</div>
            <div class="layout-container">
                <div class="scope-content homepage-content">
                    <h1 class="padding-less" id="projecting-section">ПРОЕКТИРОВАНИЕ</h1>
                    <div class="text-block">
                        <span>
                           SWG проектирует надежные и эффективные конструкции из стали. Мы специализируемся на решении нестандартных задач. Благодаря большому опыту в производстве и монтаже, мы помогаем клиентам избежать ошибок при реализации проекта.


                        </span>
						<div class="button-cont">
							<a href="href=http://swg.popel-studio.com/proektirovanie/">
							<div class="contact-us"><span class="link-span-blue">Подробнее</span></div>
							<svg version="1.1" id="button-normal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833"
								 xml:space="preserve">
							<rect x="10.125" y="0.497" fill="none" stroke="#3379D9" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"/>
							<polyline fill="none" stroke="#3379D9" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 ">
							</polyline>
							<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"/>
							<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"/>
							<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"/>
							</svg>
							</a>
						</div>
                    </div>
                <div class="svg-cont">
													<svg version="1.1" id="projecting" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="500px" height="500px" viewBox="0 0 297 317.4" enable-background="new 0 0 297 317.4" xml:space="preserve">
										<g>
											<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="242.1,244.5 290.1,268.4
										290.1,109.1 	"/>
											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="82.1" y1="4.3" x2="82.1" y2="53"/>
											<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="290.1,267.6 290.1,108.2
										294.4,105.9 294.4,265.4 	"/>
										<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="294.4,105.9 290.1,108.2 82.1,4.3
										86.8,2 	"/>
											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="82.1" y1="20" x2="290.1" y2="123.7"/>
											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="294.4" y1="121.8" x2="290.1" y2="123.7"/>
											<g>
												<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M113.9,28.6c-0.1,1.9-1.5,2.6-3.1,1.5
													c-1.6-1-2.7-3.4-2.6-5.3c0.2-1.9,1.5-2.6,3.1-1.5C112.8,24.4,114,26.7,113.9,28.6z"/>
											</g>
											<g>
												<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M103,22.9c-0.1,1.9-1.5,2.6-3.1,1.5
													c-1.6-1-2.7-3.4-2.6-5.3c0.2-1.9,1.5-2.6,3.1-1.5C102,18.7,103.1,21.1,103,22.9z"/>
											</g>
											<g>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M92.7,17.7c-0.1,1.9-1.5,2.6-3.1,1.5
											c-1.6-1-2.7-3.4-2.6-5.3c0.2-1.9,1.5-2.6,3.1-1.5S92.8,15.8,92.7,17.7z"/>
									</g>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="274.1" y1="243.6" x2="274.1" y2="132"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="276.6,140.4 274.5,131.5
										271.6,137.9 	"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242.1" y1="227.8" x2="274.1" y2="243.6"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="266.1" y1="143.9" x2="274.1" y2="147.9"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="269.9" y1="161.8" x2="274.1" y2="163.9"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="266.1" y1="175.8" x2="274.1" y2="179.8"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="269.9" y1="193.7" x2="274.1" y2="195.8"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="266.1" y1="207.7" x2="274.1" y2="211.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="269.9" y1="225.6" x2="274.1" y2="227.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="258.1" y1="230.9" x2="258.1" y2="235.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242.1" y1="219.7" x2="242.1" y2="227.8"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242.1" y1="195.8" x2="274.1" y2="243.6"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="199.8,270.9 242.1,292
										242.1,132.7 34.1,28.8 34.1,188.3 106.2,224.3 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="162.1,123.7 162.1,156.2
										226.1,188.2 226.6,155.7 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="79.3,82.6 79.1,111.2 52.9,98.4
										52.8,69.4 50.1,68.1 50.1,100 82.1,116 82.1,84.1 	"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="113.7,190.6 113.7,164.1
										226.6,219.5 226.6,267.3 199.8,254.1 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="93.2,153.4 93.1,174.9 54.8,155.9
										54.6,134.2 50.3,131.9 50.3,179.9 54.3,181.9 54.2,160.4 93.4,179.4 93.3,201.4 98.1,203.7 98.1,156 	"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="59.9" y1="136.8" x2="89.2" y2="151.4"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="54.5" y1="70.1" x2="77.2" y2="81.5"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="59.9" y1="184.8" x2="89.2" y2="199.4"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="98.4,91.9 98.4,139.9 50.3,115.9
										"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="96.4,96.2 98.3,92.1 100.4,97 	"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M98.4,130.4c-5.3-1.5-9,1.8-8.3,5.4"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="106.2,191.8 106.1,271.6
										194.1,315.4 194.4,235.7 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194.4,235.7 199.8,233.3
										199.8,312.6 194.1,315.4 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="111.5,189.6 199.8,233.3
										194.4,235.7 106.2,191.8 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="178.5,299.5 114.1,267.3
										113.7,203.7 178.1,235.7 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="181.9,237.6 181.9,245.5
										190.4,249.8 190.4,241.8 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="181.9,249.6 181.9,257.5
										190.4,261.8 190.4,253.8 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="181.9,281.6 181.9,289.5
										190.4,293.8 190.4,285.8 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="181.9,293.6 181.9,301.5
										190.4,305.8 190.4,297.8 	"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="181.9,261.6 181.9,277.4
										190.4,281.7 190.4,265.8 	"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="53.8,120.4 50.3,115.9 55.3,116
										"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113.7" y1="100.2" x2="145.9" y2="115.9"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="114.1" y1="107.8" x2="146.1" y2="124"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113.7" y1="116.2" x2="145.9" y2="132"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="130.1" y1="131.9" x2="146.1" y2="139.9"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="130.1" y1="139.9" x2="146.1" y2="147.9"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="117.4,218 117.4,213.2
										122.3,215.6 	"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="168.9,286.9 174.4,289.7
										174.4,283.5 	"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="169.6,239.4 174.4,241.8
										174.4,246.5 	"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="117.4,257 117.4,261.2
										122.3,263.7 	"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M125.8,178.7c-2.7-1.8-5-0.7-5.2,2.5
										c-0.2,3.2,1.7,7.2,4.4,9c2.7,1.8,5,0.7,5.2-2.5C130.4,184.5,128.5,180.5,125.8,178.7z"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M173.9,140.3c-2.7-1.8-5-0.7-5.2,2.5
										c-0.2,3.2,1.7,7.2,4.4,9c2.7,1.8,5,0.7,5.2-2.5C178.5,146.2,176.6,142.1,173.9,140.3z"/>
								</g>
								<g>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="5.3,213.9 2,212.1 2.4,211.1
										5.9,212.8 	"/>
									<g>
										<g enable-background="new    ">
											<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M75.2,251.4c0,0.9,0.4,1.4,0.9,1.7
												l3.7,1.8c-0.5-0.2-0.8-0.8-0.9-1.7c-0.1-1.7,1-3.9,2.4-4.9c0.7-0.5,1.4-0.6,1.9-0.3l-3.7-1.8c-0.5-0.3-1.2-0.2-1.9,0.3
												C76.1,247.5,75.1,249.7,75.2,251.4z"/>
											<g>
												<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M84.1,249.7c0.1,1.7-0.9,3.9-2.4,4.9
													s-2.8,0.3-2.9-1.4c-0.1-1.7,1-3.9,2.4-4.9C82.7,247.4,84,248,84.1,249.7z"/>
											</g>
										</g>
									</g>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M74,254.7l-58.5-28.8h0L5.9,217
										c0,0-1.4-2-0.1-3.9c1-1.4,2.9-1.4,2.9-1.4l12.5,3.2v0l58.5,28.8"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M77.8,254c-0.1,0.1-0.3,0.2-0.4,0.3
										c-2.3,1.6-4.4,0.6-4.6-2.2c-0.2-2.8,1.5-6.3,3.9-7.9c2.3-1.6,4.4-0.6,4.6,2.2c0,0.2,0,0.3,0,0.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M15.5,225.9c-0.7-0.5-0.9-1.3-1-2.5
										c-0.2-2.8,1.5-6.3,3.9-7.9c1.1-0.7,1.9-1,2.8-0.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M68.2,251.9c-0.7-0.4-0.9-1.3-1-2.5
										c-0.2-2.8,1.5-6.3,3.9-7.9c1.1-0.7,1.9-1,2.8-0.7"/>
								</g>
								<g>
									<path fill="#3E95E9" d="M86.8,2l207.6,103.9v159.5l-4.3,2.2l-48-23.1V292l-42.3-21.1v41.7l-5.7,2.8l-88-43.8l0.1-47.3l-72.1-36
										V28.8l48,24.2V4.3L86.8,2 M86.8,0c-0.3,0-0.6,0.1-0.9,0.2l-4.7,2.3c-0.7,0.3-1.1,1-1.1,1.8v45.5L35,27c-0.3-0.1-0.6-0.2-0.9-0.2
										c-0.4,0-0.7,0.1-1,0.3c-0.6,0.4-1,1-1,1.7v159.5c0,0.8,0.4,1.5,1.1,1.8l71,35.4l-0.1,46.1c0,0.8,0.4,1.5,1.1,1.8l88,43.8
										c0.3,0.1,0.6,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l5.7-2.8c0.7-0.3,1.1-1,1.1-1.8v-38.5l39.4,19.7c0.3,0.1,0.6,0.2,0.9,0.2
										c0.4,0,0.7-0.1,1.1-0.3c0.6-0.4,0.9-1,0.9-1.7v-44.3l45.1,21.7c0.3,0.1,0.6,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l4.3-2.2
										c0.7-0.3,1.1-1,1.1-1.8V105.9c0-0.8-0.4-1.4-1.1-1.8L87.7,0.2C87.4,0.1,87.1,0,86.8,0L86.8,0z"/>
								</g>
								</svg>



                </div>



                </div>

            </div><!--layout-content-->
        </section>
        <section style="overflow: hidden" id="manufactoring-section">
            <div class="manufacturing-section">
                <div data-top="opacity:1;"  data-90p-top="opacity:0; " data--85p-top="" data--40p-top="opacity:.1" class="layout-container">
                    <h1>ИЗГОТОВ-<br>ЛЕНИЕ</h1>
                    <div class="text-block">
                        <span>

					Ежегодно SWG изготавливает более 6000 тонн металлоконструкций — как серийных, так и уникальных. Мы ориентируемся на потребности клиентов и особое внимание уделяем надежной антикоррозийной защите.

                        </span>
                        <div class="button-cont"><a href="href=http://swg.popel-studio.com/izgotovlenie/">
							<div class="contact-us"><span>Подробнее</span></div>
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833"
								 xml:space="preserve">
							<rect x="10.125" y="0.497" fill="none" stroke="#FFFFFF" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"/>
							<polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 "/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"/>
							</svg>
							</a>
						</div>
                    </div>
                <div class="svg-cont">
                    <svg version="1.1" id="making" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="500px" height="500px" viewBox="0 0 226.8 327.3" enable-background="new 0 0 226.8 327.3" xml:space="preserve">
<g>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="168.8,2 104.8,33.9 112.8,37.9
		140.3,24.2 180.6,44 152.8,57.8 160.8,61.8 224.8,29.9 216.8,26 189.4,39.7 149.5,19.7 176.8,6 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="160.8,61.8 160.8,273.2
		224.8,241.3 224.8,29.9 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="152.8,57.8 152.8,268.6
		160.8,273.2 160.8,61.8 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="104.8" y1="113.4" x2="104.8" y2="233.7"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="112.8,37.9 104.8,33.9 104.8,53.9
			"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="112.8,58 112.8,37.9 140.3,24.2
		140.3,233.3 122.8,243 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="112.8" y1="238" x2="112.8" y2="109.4"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="176.8,6 176.8,33.3 149.5,19.7 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="140.3,233.3 152.4,239.7
		152.8,57.8 180.6,44 140.3,24.2 	"/>
</g>
<g>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="92.6,47.8 132.2,67.8 40.7,113.4
		2,93.8 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="132.2,67.8 132.2,99.7 40.8,145.3
		40.8,113.4 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,93.8 2,126 4.5,127.3 4.5,98.6
		37.8,115.1 37.8,143.8 40.8,145.3 40.8,113.4 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="4.5,127.3 33.5,112.9 4.5,98.6 	"/>
</g>
<g>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="92.6,227.8 132.2,247.8 40.7,293.4
		2,273.8 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="132.2,247.8 132.2,279.7
		40.8,325.3 40.8,293.4 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,273.8 2,306 4.5,307.3 4.5,278.6
		37.8,295.1 37.8,323.8 40.8,325.3 40.8,293.4 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="4.5,307.3 33.5,292.9 4.5,278.6
		"/>
</g>
<g>
	<g>
		<path fill="none" d="M178.6,242.9L178.6,242.9c0.1,0,0.1,0,0.2,0.1C178.7,243,178.7,242.9,178.6,242.9L178.6,242.9z M178.8,243
			L178.8,243L178.8,243L178.8,243L178.8,243z"/>
	</g>
	<g>
		<path fill="none" d="M178.1,242.8c0.1,0,0.1,0,0.2,0C178.3,242.8,178.2,242.8,178.1,242.8L178.1,242.8z M178.3,242.8L178.3,242.8
			L178.3,242.8L178.3,242.8L178.3,242.8z"/>
	</g>
	<g>
		<path fill="none" d="M177.7,243.8c0.1,0,0.2,0,0.3,0l0,0h0.1h0.1h0.1h0.1l0,0h0.1h0.1l0,0h0.1c0.9,0.4,1.4,1.5,1.5,3
			c0.1,1-0.1,2.2-0.4,3.5c-0.8,2.7-2.5,5.3-4.5,6.6c-0.8,0.6-1.7,0.9-2.4,0.9s-1.3-0.3-1.7-0.8c-0.1-0.1-0.1-0.2-0.2-0.3
			c-0.3-0.5-0.5-1.2-0.5-2c-0.1-0.8,0-1.8,0.2-2.7c0.1-0.5,0.2-1,0.4-1.4c0.1-0.2,0.2-0.5,0.3-0.7c0.9-2.2,2.4-4.1,4-5.1
			C176.2,244.1,177,243.8,177.7,243.8L177.7,243.8 M177.7,242.8L177.7,242.8c-0.9,0-1.9,0.4-2.9,1c-1.8,1.2-3.4,3.3-4.3,5.6
			c-0.1,0.3-0.2,0.5-0.3,0.8c-0.2,0.5-0.3,1-0.5,1.6c-0.2,1-0.3,2.1-0.3,3c0.1,1,0.3,1.8,0.7,2.4c0.1,0.2,0.2,0.3,0.3,0.4
			c0.6,0.8,1.5,1.2,2.5,1.2c0.9,0,1.9-0.3,2.9-1c2.2-1.5,4-4.3,4.9-7.1c0.4-1.3,0.6-2.6,0.5-3.8c-0.1-1.9-0.9-3.2-2.1-3.8
			c-0.1,0-0.2-0.1-0.2-0.1l0,0c-0.1,0-0.1-0.1-0.2-0.1l0,0c-0.1,0-0.2,0-0.3-0.1l0,0c-0.1,0-0.1,0-0.2,0l0,0
			C178,242.8,177.9,242.8,177.7,242.8L177.7,242.8z M178.8,243L178.8,243L178.8,243L178.8,243z"/>
	</g>
</g>
<g>
	<g>
		<path fill="none" d="M178.6,62.9L178.6,62.9c0.1,0,0.1,0,0.2,0.1C178.7,62.9,178.7,62.9,178.6,62.9L178.6,62.9z M178.8,63
			L178.8,63L178.8,63L178.8,63L178.8,63z"/>
	</g>
	<g>
		<path fill="none" d="M178.1,62.8c0.1,0,0.1,0,0.2,0C178.3,62.8,178.2,62.8,178.1,62.8L178.1,62.8z M178.3,62.8L178.3,62.8
			L178.3,62.8L178.3,62.8L178.3,62.8z"/>
	</g>
	<g>
		<path fill="none" d="M177.7,63.8c0.1,0,0.2,0,0.3,0l0,0h0.1h0.1h0.1h0.1l0,0h0.1h0.1l0,0h0.1c0.9,0.4,1.4,1.5,1.5,3
			c0.1,1-0.1,2.2-0.4,3.5c-0.8,2.7-2.5,5.3-4.5,6.6c-0.8,0.6-1.7,0.9-2.4,0.9s-1.3-0.3-1.7-0.8c-0.1-0.1-0.1-0.2-0.2-0.3
			c-0.3-0.5-0.5-1.2-0.5-2c-0.1-0.8,0-1.8,0.2-2.7c0.1-0.5,0.2-1,0.4-1.4c0.1-0.2,0.2-0.5,0.3-0.7c0.9-2.2,2.4-4.1,4-5.1
			C176.2,64.1,177,63.8,177.7,63.8L177.7,63.8 M177.7,62.8L177.7,62.8c-0.9,0-1.9,0.4-2.9,1c-1.8,1.2-3.4,3.3-4.3,5.6
			c-0.1,0.3-0.2,0.5-0.3,0.8c-0.2,0.5-0.3,1-0.5,1.6c-0.2,1-0.3,2.1-0.3,3c0.1,1,0.3,1.8,0.7,2.4c0.1,0.2,0.2,0.3,0.3,0.4
			c0.6,0.8,1.5,1.2,2.5,1.2c0.9,0,1.9-0.3,2.9-1c2.2-1.5,4-4.3,4.9-7.1c0.4-1.3,0.6-2.6,0.5-3.8c-0.1-1.9-0.9-3.2-2.1-3.8
			c-0.1,0-0.2-0.1-0.2-0.1l0,0c-0.1,0-0.1-0.1-0.2-0.1l0,0c-0.1,0-0.2,0-0.3-0.1l0,0c-0.1,0-0.1,0-0.2,0l0,0
			C178,62.8,177.9,62.8,177.7,62.8L177.7,62.8z M178.8,63L178.8,63L178.8,63L178.8,63z"/>
	</g>
</g>
<g>
	<g>
		<path fill="none" d="M130.6,39.1L130.6,39.1c0.1,0,0.1,0,0.2,0.1C130.7,39.2,130.7,39.1,130.6,39.1L130.6,39.1z M130.8,39.2
			L130.8,39.2L130.8,39.2L130.8,39.2L130.8,39.2z"/>
	</g>
	<g>
		<path fill="none" d="M130.1,39c0.1,0,0.1,0,0.2,0C130.3,39,130.2,39,130.1,39L130.1,39z M130.3,39C130.3,39.1,130.3,39.1,130.3,39
			L130.3,39C130.3,39.1,130.3,39.1,130.3,39L130.3,39z"/>
	</g>
	<g>
		<path fill="none" d="M129.7,40c0.1,0,0.2,0,0.3,0l0,0h0.1h0.1h0.1h0.1l0,0h0.1h0.1l0,0h0.1c0.9,0.4,1.4,1.5,1.5,3
			c0.1,1-0.1,2.2-0.4,3.5c-0.8,2.7-2.5,5.3-4.5,6.6c-0.8,0.6-1.7,0.9-2.4,0.9c-0.7,0-1.3-0.3-1.7-0.8c-0.1-0.1-0.1-0.2-0.2-0.3
			c-0.3-0.5-0.5-1.2-0.5-2c-0.1-0.8,0-1.8,0.2-2.7c0.1-0.5,0.2-1,0.4-1.4c0.1-0.2,0.2-0.5,0.3-0.7c0.9-2.2,2.4-4.1,4-5.1
			C128.2,40.3,129,40,129.7,40L129.7,40 M129.7,39L129.7,39c-0.9,0-1.9,0.4-2.9,1c-1.8,1.2-3.4,3.3-4.3,5.6
			c-0.1,0.3-0.2,0.5-0.3,0.8c-0.2,0.5-0.3,1-0.5,1.6c-0.2,1-0.3,2.1-0.3,3c0.1,1,0.3,1.8,0.7,2.4c0.1,0.2,0.2,0.3,0.3,0.4
			c0.6,0.8,1.5,1.2,2.5,1.2c0.9,0,1.9-0.3,2.9-1c2.2-1.5,4-4.3,4.9-7.1c0.4-1.3,0.6-2.6,0.5-3.8c-0.1-1.9-0.9-3.2-2.1-3.8
			c-0.1,0-0.2-0.1-0.2-0.1l0,0c-0.1,0-0.1-0.1-0.2-0.1l0,0c-0.1,0-0.2,0-0.3-0.1l0,0c-0.1,0-0.1,0-0.2,0l0,0
			C130,39,129.9,39,129.7,39L129.7,39z M130.8,39.2L130.8,39.2L130.8,39.2L130.8,39.2z"/>
	</g>
</g>
<g>
	<g>
		<path fill="none" d="M130.6,219.1L130.6,219.1c0.1,0,0.1,0,0.2,0.1C130.7,219.2,130.7,219.1,130.6,219.1L130.6,219.1z
			 M130.8,219.2L130.8,219.2L130.8,219.2L130.8,219.2L130.8,219.2z"/>
	</g>
	<g>
		<path fill="none" d="M130.1,219c0.1,0,0.1,0,0.2,0C130.3,219,130.2,219,130.1,219L130.1,219z M130.3,219.1L130.3,219.1
			L130.3,219.1L130.3,219.1L130.3,219.1z"/>
	</g>
	<g>
		<path fill="none" d="M129.7,220c0.1,0,0.2,0,0.3,0l0,0h0.1h0.1h0.1h0.1l0,0h0.1h0.1l0,0h0.1c0.9,0.4,1.4,1.5,1.5,3
			c0.1,1-0.1,2.2-0.4,3.5c-0.8,2.7-2.5,5.3-4.5,6.6c-0.8,0.6-1.7,0.9-2.4,0.9c-0.7,0-1.3-0.3-1.7-0.8c-0.1-0.1-0.1-0.2-0.2-0.3
			c-0.3-0.5-0.5-1.2-0.5-2c-0.1-0.8,0-1.8,0.2-2.7c0.1-0.5,0.2-1,0.4-1.4c0.1-0.2,0.2-0.5,0.3-0.7c0.9-2.2,2.4-4.1,4-5.1
			C128.2,220.3,129,220,129.7,220L129.7,220 M129.7,219L129.7,219c-0.9,0-1.9,0.4-2.9,1c-1.8,1.2-3.4,3.3-4.3,5.6
			c-0.1,0.3-0.2,0.5-0.3,0.8c-0.2,0.5-0.3,1-0.5,1.6c-0.2,1-0.3,2.1-0.3,3c0.1,1,0.3,1.8,0.7,2.4c0.1,0.2,0.2,0.3,0.3,0.4
			c0.6,0.8,1.5,1.2,2.5,1.2c0.9,0,1.9-0.3,2.9-1c2.2-1.5,4-4.3,4.9-7.1c0.4-1.3,0.6-2.6,0.5-3.8c-0.1-1.9-0.9-3.2-2.1-3.8
			c-0.1,0-0.2-0.1-0.2-0.1l0,0c-0.1,0-0.1-0.1-0.2-0.1l0,0c-0.1,0-0.2,0-0.3-0.1l0,0c-0.1,0-0.1,0-0.2,0l0,0
			C130,219,129.9,219,129.7,219L129.7,219z M130.8,219.2L130.8,219.2L130.8,219.2L130.8,219.2z"/>
	</g>
</g>
<g>
	<g>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="11.2776,11.2776" x1="40.8" y1="152.8" x2="40.8" y2="287.5"/>
	</g>
</g>
<g>

		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="11.2776,11.2776" x1="4.5" y1="133.6" x2="4.5" y2="265.5"/>
</g>
<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="104.8" y1="49.8" x2="137" y2="33.8"/>
<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="128.7" y1="61.6" x2="160.9" y2="45.7"/>
<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="110.4" y1="230" x2="137" y2="216.8"/>
<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="128.7" y1="244.6" x2="150.9" y2="233.6"/>
<g>
	<path fill="#3E95E9" d="M168.8,2l8,4v27.3l12.6,6.4L216.8,26l8,3.9v211.4l-64,31.9l-8-4.6l-0.4-28.9l-12.1-6.4l-17.5,9.7l9.4,4.8
		v31.9l-91.4,45.6l-3-1.5v-28.7l-4.3-2.2l-29,14.4L2,306v-32.2l90.6-46l12.2,5.9V113.4l-64,31.9l-3-1.5v-28.7l-4.3-2.2l-29,14.4
		L2,126V93.8l90.6-46l12.2,6.1v-20L168.8,2 M168.8,0c-0.3,0-0.6,0.1-0.9,0.2l-64,31.9c-0.7,0.3-1.1,1-1.1,1.8v16.8L93.5,46
		c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L1.1,92C0.4,92.4,0,93,0,93.8V126c0,0.7,0.4,1.4,1.1,1.8l2.5,1.3
		c0.3,0.2,0.6,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l28.1-14l2.3,1.2v27.5c0,0.8,0.4,1.5,1.1,1.8l3,1.5c0.3,0.1,0.6,0.2,0.9,0.2
		c0.3,0,0.6-0.1,0.9-0.2l61.1-30.5v113.9l-9.3-4.5c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L1.1,272c-0.7,0.3-1.1,1-1.1,1.8
		V306c0,0.7,0.4,1.4,1.1,1.8l2.5,1.3c0.3,0.2,0.6,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l28.1-14l2.3,1.2v27.5c0,0.8,0.4,1.5,1.1,1.8
		l3,1.5c0.3,0.1,0.6,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l91.4-45.6c0.7-0.3,1.1-1,1.1-1.8v-31.9c0-0.8-0.4-1.4-1.1-1.8l-6.1-3.1
		l13.3-7.4l10.1,5.3l0.4,27.7c0,0.7,0.4,1.4,1,1.7l8,4.6c0.3,0.2,0.7,0.3,1,0.3c0.3,0,0.6-0.1,0.9-0.2l64-31.9
		c0.7-0.3,1.1-1,1.1-1.8V29.9c0-0.8-0.4-1.5-1.1-1.8l-8-3.9c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-26.5,13.2l-10.6-5.4
		V6c0-0.8-0.4-1.5-1.1-1.8l-8-4C169.4,0.1,169.1,0,168.8,0L168.8,0z"/>
</g>
<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M120.6,83.6c2.8-1.9,5.3-0.7,5.5,2.6c0.2,3.3-1.8,7.6-4.6,9.5
	c-2.8,1.9-5.3,0.7-5.5-2.6C115.7,89.8,117.8,85.5,120.6,83.6z"/>
<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M122.1,82.7c0.5,0.6,0.9,1.5,0.9,2.6c0.2,3.3-1.8,7.6-4.6,9.5
	c-0.6,0.4-1.2,0.7-1.8,0.8"/>
<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M120.6,263.7c2.8-1.9,5.3-0.7,5.5,2.6c0.2,3.3-1.8,7.6-4.6,9.5
	c-2.8,1.9-5.3,0.7-5.5-2.6C115.7,269.8,117.8,265.5,120.6,263.7z"/>
<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M122.1,262.7c0.5,0.6,0.9,1.5,0.9,2.6c0.2,3.3-1.8,7.6-4.6,9.5
	c-0.6,0.4-1.2,0.7-1.8,0.8"/>
</svg>


                </div>
                </div>

                    <div class="workers-bg-manuf" data--60p-top="opacity:.2;"
						 data-60p-top="opacity:.2;top:-200px;" data-top="opacity:1;top:0;">

					</div>

            </div>
        </section>
       <section class="montage-section" id="assembly-section">
		   <div class="layout-container">
		   <div class="svg-cont">
			   <svg version="1.1" id="montage" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	  width="500.3px" height="500.3px" viewBox="0 0 206.3 308.3" enable-background="new 0 0 206.3 308.3" xml:space="preserve">
<g>

		<polyline fill="none" stroke="#231F20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		140.8,271.8 124.4,279.7 116.4,275.2 52.2,307.3 49.2,305.8 49.2,277 44.9,274.9 15.9,289.3 13.4,287.9 13.4,255.8 68.4,227.8
		68.4,119.9 52.2,128 49.2,126.5 49.2,97.8 44.9,95.7 15.9,110 13.4,108.7 13.4,76.5 68.4,48.6 68.4,40.4 132.4,8.5 140.4,12.5
		140.4,39.8 153.1,46.2 180.4,32.5 188.4,36.4 188.4,92.3 190.7,93.4 196.9,90.9 205.3,95.1 205.3,106.3 199.7,114.7 191.3,119.2
		188.4,117.8 188.4,247.8 159.5,262.3 	"/>
	<polyline fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="76.4,44.4 68.4,40.4 68.4,48.6
		"/>
	<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="76.4" y1="223.8" x2="76.4" y2="115.9"/>
	<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="68.4" y1="119.9" x2="68.4" y2="227.8"/>
	<line fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" x1="76.4" y1="44.4" x2="103.9" y2="30.7"/>
	<polyline fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="116.4,64.4 144.3,50.5 103.9,30.7
			"/>
	<line fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" x1="103.9" y1="102.3" x2="103.9" y2="209.8"/>
	<g>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="104,30.5 143.6,50.5 52.2,96.1
			13.4,76.5 		"/>
		<polyline fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="116.3,96.1 52.2,128 52.2,96.1
			143.6,50.5 		"/>
		<polygon fill="none" stroke="#231F20" stroke-miterlimit="10" points="13.4,76.5 13.4,108.7 15.9,110 15.9,81.3 49.2,97.8
			49.2,126.5 52.2,128 52.2,96.1 		"/>
		<polygon fill="none" stroke="#231F20" stroke-miterlimit="10" points="15.9,110 44.9,95.7 15.9,81.3 		"/>
	</g>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="132.4,8.5 68.4,40.4 76.4,44.4
		103.9,30.7 144.3,50.5 116.4,64.4 124.4,68.3 188.4,36.4 180.4,32.5 153.1,46.2 113.2,26.2 140.4,12.5 	"/>
	<g>
		<polyline fill="none" stroke="#231F20" stroke-miterlimit="10" points="52.2,275.3 13.4,255.8 104,209.8 116.4,216 		"/>
		<polyline fill="none" stroke="#231F20" stroke-miterlimit="10" points="116.4,275.2 52.2,307.3 52.2,275.3 116.4,243.3 		"/>
		<polygon fill="none" stroke="#231F20" stroke-miterlimit="10" points="13.4,255.8 13.4,287.9 15.9,289.3 15.9,260.5 49.2,277
			49.2,305.8 52.2,307.3 52.2,275.3 		"/>
		<polygon fill="none" stroke="#231F20" stroke-miterlimit="10" points="15.9,289.3 44.9,274.9 15.9,260.5 		"/>
	</g>
	<polyline fill="none" stroke="#231F20" stroke-miterlimit="10" points="188.4,91.9 188.4,36.4 124.4,68.3 124.4,279.7 140.6,271.7
			"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="116.4,64.4 116.4,275.2
		124.4,279.7 124.4,68.3 	"/>
	<polygon fill="none" stroke="#231F20" stroke-miterlimit="10" points="140.4,12.5 140.4,39.8 113.2,26.2 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="199.7,271.3 191.3,275.5
		185.7,283.9 185.7,295.1 191.3,297.9 199.7,293.7 205.3,285.3 205.3,274.1 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="185.7,295.1 182.7,293.6
		182.7,282.4 185.7,283.9 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="188.4,274.1 182.7,282.4
		185.7,283.9 191.3,275.5 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="199.7,271.3 196.9,269.9
		188.4,274.1 191.3,275.5 	"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M190.7,273L170,262.7c-3.8-1.1-6.7,1.3-8.4,4.9
		c-1.1,2.3-2.2,7.7,1.8,10.1l19.3,9.6"/>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M172.3,263.8c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"
			/>
	</g>
	<g>
		<polyline fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="23.1,189.7 23.1,182.7
			17.5,179.9 9.1,184.1 3.5,192.5 3.5,203.7 9.1,206.5 15.2,203.4 		"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="3.5,203.7 0.5,202.2 0.5,191
			3.5,192.5 		"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="6.2,182.7 0.5,191 3.5,192.5
			9.1,184.1 		"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="17.5,179.9 14.7,178.5 6.2,182.7
			9.1,184.1 		"/>
	</g>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M36,196.2l-19.2-9.7c-1.3-0.9-4.9,0.2-7.3,4.2
		c-1.5,2.4-3.1,8.1,0.8,10.2l19.1,9.8c-3.9-2.1-2.2-8-0.7-10.5C31.1,196.3,34.7,195.4,36,196.2z"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M25.8,191c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M28.2,192.2c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M30.8,193.5c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M33.3,194.8c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M23.1,189.7c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<g>
		<g>
			<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M142.7,69.9L142.7,69.9L142.7,69.9L142.7,69.9 M142.7,69.9
				c0.1,0,0.1,0,0.2,0.1C142.8,69.9,142.7,69.9,142.7,69.9 M142.9,70L142.9,70L142.9,70L142.9,70"/>
		</g>
		<g>
			<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M142.2,69.8h0.1H142.2 M142.3,69.8L142.3,69.8L142.3,69.8
				 M142.4,69.8L142.4,69.8L142.4,69.8L142.4,69.8"/>
		</g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M145.2,73.8c-0.1-1.9-0.9-3.2-2.1-3.8c-0.1,0-0.2-0.1-0.2-0.1
			c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.2,0-0.3-0.1l0,0c-0.1,0-0.1,0-0.2,0l0,0l0,0c-0.2,0-0.3,0-0.5,0c-0.9,0-1.8,0.4-2.8,1
			c-1.8,1.2-3.4,3.3-4.3,5.6c-0.1,0.3-0.2,0.5-0.3,0.8c-0.2,0.5-0.3,1-0.5,1.6c-0.2,1-0.3,2.1-0.3,3c0.1,1,0.3,1.8,0.7,2.4
			c0.1,0.2,0.2,0.3,0.3,0.4c1.1,1.5,3.2,1.7,5.4,0.2c0.2-0.1,0.4-0.3,0.6-0.4"/>
	</g>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M185,270.2c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M182.6,268.9c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M180,267.6c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M177.4,266.4c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M174.8,265.1c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="199.7,92.3 191.3,96.5 185.7,104.9
		185.7,116.1 191.3,118.9 199.7,114.7 205.3,106.3 205.3,95.1 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="185.7,116.1 182.7,114.6
		182.7,103.4 185.7,104.9 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="188.4,95.1 182.7,103.4
		185.7,104.9 191.3,96.5 	"/>
	<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="199.7,92.3 196.9,90.9 188.4,95.1
		191.3,96.5 	"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M190.7,94L170,83.7c-3.8-1.1-6.7,1.3-8.4,4.9
		c-1.1,2.3-2.2,7.7,1.8,10.1l19.3,9.6"/>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M172.3,84.8c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	</g>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M185,91.2c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M182.6,89.9c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M180,88.6c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M177.4,87.4c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M174.8,86.1c-3.8-1.1-6.7,1.3-8.4,4.9c-1.1,2.3-2.2,7.7,1.8,10.1"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M31.9,196.8c3-2,5.6-0.7,5.9,2.8c0.3,3.6-2,8.1-5,10.2
		c-3,2-5.6,0.7-5.9-2.8C26.7,203.4,28.9,198.8,31.9,196.8z"/>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M51.3,202.6c4.8-3.3,9.1-1.2,9.5,4.6c0.4,5.8-3.2,13.1-8,16.4
			c-4.8,3.3-9.1,1.2-9.5-4.6S46.4,205.8,51.3,202.6z"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M45.1,223.6c-2.1-0.6-3.6-2.7-3.8-5.9c-0.4-5.8,3.2-13.1,8-16.4
			c3.1-2.1,5.9-2,7.7-0.1"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M51.5,206.1c3.2-2.1,6-0.8,6.3,3s-2.1,8.7-5.3,10.8
			c-3.2,2.2-6,0.8-6.3-3C46,213.1,48.3,208.3,51.5,206.1z"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="55.8" y1="200.3" x2="58.3" y2="201.8"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="43.5" y1="222.8" x2="46.1" y2="224.5"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M54.9,205.1c0.5,0.7,0.9,1.6,0.9,2.8c0.3,3.8-2.1,8.7-5.3,10.8
			c-1.2,0.8-2.3,1.1-3.3,1"/>
	</g>
	<g>
		<polyline fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="23.4,11.7 23.4,4.7 17.8,1.9
			9.4,6.1 3.8,14.5 3.8,25.7 9.4,28.5 15.5,25.4 		"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="3.8,25.7 0.8,24.2 0.8,13
			3.8,14.5 		"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,4.7 0.8,13 3.8,14.5 9.4,6.1
					"/>
		<polygon fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" points="17.8,1.9 15,0.5 6.5,4.7 9.4,6.1
					"/>
	</g>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M36.3,18.2L17.1,8.5c-1.3-0.9-4.9,0.2-7.3,4.2
		c-1.5,2.4-3.1,8.1,0.8,10.2l19.1,9.8c-3.9-2.1-2.2-8-0.7-10.5C31.4,18.3,35,17.4,36.3,18.2z"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M26.1,13c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M28.5,14.2c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M31.1,15.5c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M33.6,16.8c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M23.4,11.7c-1.3-0.9-4.8,0.2-7.2,4.3c-1.5,2.4-3.2,8.1,0.7,10.2"/>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M32.2,18.8c3-2,5.6-0.7,5.9,2.8c0.3,3.6-2,8.1-5,10.2
		c-3,2-5.6,0.7-5.9-2.8C27,25.4,29.2,20.8,32.2,18.8z"/>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M51.6,24.6c4.8-3.3,9.1-1.2,9.5,4.6s-3.2,13.1-8,16.4
			c-4.8,3.3-9.1,1.2-9.5-4.6C43.1,35.2,46.7,27.8,51.6,24.6z"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M45.4,45.6c-2.1-0.6-3.6-2.7-3.8-5.9c-0.4-5.8,3.2-13.1,8-16.4
			c3.1-2.1,5.9-2,7.7-0.1"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M51.8,28.1c3.2-2.1,6-0.8,6.3,3C58.4,35,56,39.8,52.8,42
			s-6,0.8-6.3-3C46.3,35.1,48.6,30.3,51.8,28.1z"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="56.1" y1="22.3" x2="58.6" y2="23.9"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="43.8" y1="44.8" x2="46.4" y2="46.5"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M55.2,27.1c0.5,0.7,0.9,1.6,0.9,2.8c0.3,3.8-2.1,8.7-5.3,10.8
			c-1.2,0.8-2.3,1.1-3.3,1"/>
	</g>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M150.5,71.9c4.8-3.3,9.1-1.2,9.5,4.6c0.4,5.8-3.2,13.1-8,16.4
			s-9.1,1.2-9.5-4.6C142.1,82.5,145.7,75.1,150.5,71.9z"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M144.3,92.9c-2.1-0.6-3.6-2.7-3.8-5.9c-0.4-5.8,3.2-13.1,8-16.4
			c3.1-2.1,5.9-2,7.7-0.1"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M150.8,75.4c3.2-2.1,6-0.8,6.3,3s-2.1,8.7-5.3,10.8
			c-3.2,2.2-6,0.8-6.3-3S147.6,77.6,150.8,75.4z"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="155" y1="69.6" x2="157.5" y2="71.1"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="142.7" y1="92.1" x2="145.3" y2="93.8"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M154.1,74.4c0.5,0.7,0.9,1.6,0.9,2.8c0.3,3.8-2.1,8.7-5.3,10.8
			c-1.2,0.8-2.3,1.1-3.3,1"/>
	</g>
	<g>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M150.5,251.9c4.8-3.3,9.1-1.2,9.5,4.6c0.4,5.8-3.2,13.1-8,16.4
			s-9.1,1.2-9.5-4.6C142.1,262.5,145.7,255.1,150.5,251.9z"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M144.3,272.9c-2.1-0.6-3.6-2.7-3.8-5.9c-0.4-5.8,3.2-13.1,8-16.4
			c3.1-2.1,5.9-2,7.7-0.1"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M150.8,255.4c3.2-2.1,6-0.8,6.3,3c0.3,3.8-2.1,8.7-5.3,10.8
			c-3.2,2.2-6,0.8-6.3-3S147.6,257.6,150.8,255.4z"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="155" y1="249.6" x2="157.5" y2="251.2"/>
		<line fill="none" stroke="#231F20" stroke-miterlimit="10" x1="142.7" y1="272.1" x2="145.3" y2="273.8"/>
		<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M154.1,254.4c0.5,0.7,0.9,1.6,0.9,2.8c0.3,3.8-2.1,8.7-5.3,10.8
			c-1.2,0.8-2.3,1.1-3.3,1"/>
	</g>
	<path fill="none" stroke="#231F20" stroke-miterlimit="10" d="M145.5,253.1c-0.2-3.8-3.1-5.2-6.4-3s-5.7,7.2-5.3,11
		c0.2,3.8,3.1,5.3,6.7,2.8"/>
	<path fill="none" stroke="#231F20" stroke-linejoin="round" stroke-miterlimit="10" d="M159.7,262.2l28.7-14.4V117.5"/>
	<path fill="none" stroke="#231F20" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M140.8,271.8
		c10.5,9.4,17.8-4.7,18.7-9.5"/>
</g>
</svg>
		   </div>
		   <h1>Монтаж</h1>
		   <div class="text-block">
			<span>
			SWG монтирует металлоконструкции в любых условиях: стесненных, на высоте, на автономном энергоснабжении. Особое внимание уделяем выполнению заявленных сроков монтажа, качеству выполняемых работ и их безопасности.


			</span>
			   <div class="button-cont"><a href="href=http://swg.popel-studio.com/montazh/">
				   <div class="contact-us"><span>Подробнее</span></div>
				   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833"
								 xml:space="preserve">
							<rect x="10.125" y="0.497" fill="none" stroke="#FFFFFF" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"/>
							<polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 "/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"/>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"/>
							</svg>
				   </a>
			   </div>
		  	 </div>
		   </div>
	   </section>





        <section class="projects projects-manufacture homepage-projects" id="works-section">
			<!--<div class="mask-huge">-->

			<!--</div>-->
            <div class="layout-container">
                <h1>Наши<br> Работы</h1>
                <p>Более <strong>300</strong> успешных проектов.<br> <strong>10</strong> лет на рынке.<br> <strong>160</strong> довольных клиентов.</p>
				<a class="button-cont" href="portfolio-item.html">
					<div class="contact-us"><span>Подробнее</span></div>
					<svg version="1.1" id="button-normal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833"
						 xml:space="preserve">
						<rect x="10.125" y="0.497" fill="none" stroke="#3379D9" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"/>
						<polyline fill="none" stroke="#3379D9" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 ">
						</polyline>
						<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"/>
						<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"/>
						<line fill="none" stroke="#3379D9" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"/>
					</svg>
				</a>

                <div class="gallery-block index-gallery" >
					<div class="rhomb-cont wow fadeInRight">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-1"></div>
						</div>
					</div>
					<div class="rhomb-cont  wow fadeInRight" data-wow-delay="400ms">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-2"></div>
						</div>
					</div>
					<div class="rhomb-cont wow fadeInRight" data-wow-delay="500ms">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-3"></div>
						</div>
					</div>
					<div class="rhomb-cont wow fadeInRight" data-wow-delay="800ms">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-4"></div>
						</div>
					</div>
					<div class="rhomb-cont wow fadeInRight" data-wow-delay="900ms">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-5"></div>
						</div>
					</div>
					<div class="rhomb-cont wow fadeInRight" data-wow-delay="1s">
						<div class="rhomb-wrapper">
							<div class="rhomb-inner rhomb-6"></div>
						</div>
					</div>
                </div>
            </div>
        </section>



		<div id="Client-carousel" class="carousel slide" data-ride="carousel">
			<div class="layout-container">
				<h1 style="color: #000; text-align: left">Отзывы клиентов</h1>
			</div>

			<!-- Indicators -->

				<div class="layout-container">
				<div class="quote-block">
					<div class="carousel-inner" role="listbox">
				<div class="item active">






							<div class="quote-text">
								SWG спроектировали, изготовили и установили системы креплений для солнечных батарей на наших электростанцях на юге Одесской области. Предложенное специалистами SWG дуплексное покрытие (горячее оцинкование плюс порошковая покраска) увеличило срок службы систем креплений в суровых условиях солончаков до 25 лет.

							</div>
							<div class="quote-autor">
								<!--<div class="quote-autor-photo">-->
									<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<div class="quote-autor-discription">
									<div class="autor-name">Вадим Васильевич Рыбак</div>
									<div class="autor-position">Генеральный директор «Гринтэк Энерджи»</div>
								</div>
							</div>


				</div>
				<div class="item">






							<div class="quote-text">
								Мы ценим SWG как надежного партнера в реализации и типовых, и нестандартных проектов. Компания успешно проявила себя при проектировании, изготовлении и монтаже первой в Украине жилой галереи мостового типа между домами, которые находятся на разных фундаментах. Опорные части конструкции обеспечивают перемещение в трех плоскостях до 120 мм.
							</div>
							<div class="quote-autor">
								<!--<div class="quote-autor-photo">-->
									<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<div class="quote-autor-discription">
									<div class="autor-name"> Владимир Егорович Устинов</div>
									<div class="autor-position">главный инженер «ТММ»</div>
								</div>
							</div>


				</div>
						<div class="item">






							<div class="quote-text">
								Хочу поблагодарить SWG за участие в строительстве «Города спорта» в киевском Гидропарке — проекта, который призван развивать пляжный футбол и другие виды спорта. Хочется, чтобы другие украинские компании чаще следовали примеру SWG и сознавали социальную ответственность бизнеса.
							</div>
							<div class="quote-autor">
								<!--<div class="quote-autor-photo">-->
								<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<div class="quote-autor-discription">
									<div class="autor-name"> Сергей Харченко</div>
									<div class="autor-position">президент Ассоциации пляжного футбола Украины</div>
								</div>
							</div>


						</div>
						<div class="item">






							<div class="quote-text">
								Предприятия SWG имеют статус «External Production Facilities», то есть сертифицированы для производства деформационных швов Mageba (Швейцария). Мы отслеживаем работу наших подрядчиков и знаем, что SWG накопили немалый опыт по изготовлению швов Mageba для клиентов из Украины, России, Беларуси и ЕС, выполняют заказы качественно и в срок.
							</div>
							<div class="quote-autor">
								<!--<div class="quote-autor-photo">-->
								<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<div class="quote-autor-discription">
									<div class="autor-name">Mageba S.A.</div>

								</div>
							</div>


						</div>

				<div class="item ">






							<div class="quote-text">
								Мы сотрудничаем с SWG уже X лет. Один из наших последних совместных проектов — строительство завода сухих строительных смесей. В SWG оптимизировали первоначальный проект, сэкономив 15% средств без потери функциональных качеств объекта, а также изготовили и смонтировали металлоконструкции для сооружения.

							</div>
							<div class="quote-autor">
								<!--<div class="quote-autor-photo">-->
									<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<div class="quote-autor-discription">
									<div class="autor-name">МАСТЕР</div>

								</div>
							</div>



				</div>
				</div>
				</div>
			</div>
			<a class="left carousel-control hidden" href="#Client-carousel" role="button" data-slide="prev">
				<img src="<?php popel_theme_uri(); ?>/images/arrow-left.png" alt=""/>
			</a>
			<a class="right carousel-control" href="#Client-carousel" role="button" data-slide="next">
				<img src="<?php popel_theme_uri(); ?>/images/right-arrow.png" alt=""/>
			</a>
		</div>












						<!--<div class="quote-block">-->
							<!--<div class="quote-img"></div>-->
							<!--<div class="quote-text">-->
								<!--После тщательной выверки нивелиром и закрепления направляющих, между ними заливают бетон, сглаживая его рейкой по направляющим. Верхняя опорная поверхность фундамента в этом случае получается проектной с допускаемым отклонением ±2мм.-->
								<!--В них заделывают анкерные болты.-->
							<!--</div>-->
							<!--<div class="quote-autor">-->
								<!--<div class="quote-autor-photo">-->
									<!--<img src="images/quote-autor_001.jpg" alt="">-->
								<!--</div>-->
								<!--<div class="quote-autor-discription">-->
									<!--<div class="autor-name">Валентин Петрович Розенберг</div>-->
									<!--<div class="autor-position">Управляющий директор VN-Group</div>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->














        <section class="application" id="application-section">
            <div class="layout-container">
                <h1>Отправьте заявку</h1>
                <div class="question-contacts">
                    <span class="contacts-descr">
                    Звоните по нашему номеру
                </span><br>
                    <span class="tel">+38 044 2702589</span>
					<br>
					<span class="contacts-descr">
						Офис в Киеве
					</span><br>
					<span class="tel">
						03110<br>
						ул. Александра Пироговского 19 корпус 3

					</span>
                </div>

                    <?php echo do_shortcode( '[contact-form-7 id="18" title="Без названия"]' ); ?>




		

            </div>
			<div class="footer-footer">
				<div class="layout-container">
					<div class="swg-2015">
						<span class="year">2015 &copy;</span>
						<span>STEEL WORK GROUP</span>
					</div>
					<div class="popel-agency">
						<span class="development">Разработка сайта &ensp;—  </span>
						<a href="http://popel-studio.com/">
							<div class="svg-popel">
								<svg version="1.1" id="content" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="197.151px" height="14.483px" viewBox="0 0 197.151 14.483" enable-background="new 0 0 197.151 14.483"
	 xml:space="preserve">
<g>
	<g>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M5.868,0.016H3.024H0v14.227h3.024V8.729h2.843
			c1.6,0,4.449-1.333,4.449-4.357C10.317,1.171,7.468,0.016,5.868,0.016 M4.98,6.152H3.024V2.594H4.98c0,0,2.133-0.088,2.133,1.778
			C7.113,6.239,4.98,6.152,4.98,6.152"/>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M22.941,0.016c-3.928,0-7.112,3.184-7.112,7.114
			c0,3.927,3.183,7.113,7.112,7.113c3.927,0,7.113-3.186,7.113-7.113C30.054,3.2,26.868,0.016,22.941,0.016 M22.941,11.576
			c-3.212,0-4-2.81-4-4.446c0-1.638,1.054-4.447,4-4.447c2.947,0,4.001,3.018,4.001,4.447C26.942,8.557,26.154,11.576,22.941,11.576
			"/>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M42.414,0.016H39.57h-3.025v14.227h3.025V8.729h2.843
			c1.6,0,4.448-1.333,4.448-4.357C46.862,1.171,44.014,0.016,42.414,0.016 M41.525,6.152H39.57V2.594h1.954
			c0,0,2.135-0.088,2.135,1.778C43.659,6.239,41.525,6.152,41.525,6.152"/>
		<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="61.267,2.683 61.267,0.016 55.931,0.016 52.907,0.016
			52.907,14.243 55.931,14.243 61.267,14.243 61.267,11.576 55.931,11.576 55.931,8.374 61.267,8.374 61.267,5.707 55.931,5.707
			55.931,2.683 		"/>
		<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="73.626,11.131 73.626,0.016 70.602,0.016 70.602,14.243
			73.626,14.243 80.739,14.243 80.739,11.131 		"/>
	</g>
	<circle fill-rule="evenodd" clip-rule="evenodd" fill="#3379d9" cx="92.083" cy="7.41" r="2.25"/>
	<g>
		<path fill="#FFFFFF" d="M103.285,14.243l6.361-14.083h0.86l6.321,14.083h-0.96l-1.86-4.121h-7.882l-1.86,4.121H103.285z
			 M106.446,9.322h7.221l-3.601-7.962L106.446,9.322z"/>
		<path fill="#FFFFFF" d="M122.25,12.442c-1.34-1.38-2.021-3.1-2.021-5.201c0-2.081,0.681-3.801,2.021-5.181
			C123.591,0.68,125.271,0,127.251,0c1.801,0,3.321,0.48,4.562,1.46v0.98c-1.32-1.04-2.821-1.56-4.501-1.56
			c-1.74,0-3.201,0.6-4.381,1.82c-1.181,1.2-1.761,2.721-1.761,4.561c0,1.82,0.58,3.341,1.761,4.541c1.18,1.2,2.62,1.8,4.32,1.8
			c1.881,0,3.361-0.56,4.421-1.66V6.222h0.921v6.062c-1.341,1.46-3.121,2.2-5.342,2.2C125.271,14.483,123.591,13.803,122.25,12.442z
			"/>
		<path fill="#FFFFFF" d="M138.569,14.243V0.24h9.362v0.86h-8.442v5.181h6.981v0.86h-6.981v6.241h8.762v0.86H138.569z"/>
		<path fill="#FFFFFF" d="M153.202,14.243V0.24h0.82l9.542,12.402V0.24h0.92v14.003h-0.8L154.122,1.82v12.423H153.202z"/>
		<path fill="#FFFFFF" d="M172.122,12.442c-1.34-1.38-2.021-3.1-2.021-5.201s0.681-3.821,2.021-5.181
			C173.463,0.68,175.143,0,177.144,0c1.521,0,2.86,0.36,4.001,1.101v1c-1.221-0.82-2.541-1.22-3.981-1.22
			c-1.72,0-3.181,0.6-4.36,1.82c-1.181,1.2-1.761,2.721-1.761,4.541s0.58,3.341,1.761,4.561c1.18,1.2,2.641,1.8,4.381,1.8
			c1.66,0,3.08-0.479,4.28-1.46v1.021c-1.16,0.88-2.601,1.32-4.32,1.32C175.143,14.483,173.463,13.803,172.122,12.442z"/>
		<path fill="#FFFFFF" d="M190.771,14.243V7.762L185.31,0.24h1.12l4.82,6.642l4.842-6.642h1.06l-5.461,7.501v6.501H190.771z"/>
	</g>
</g>
</svg>

							</div>
						</a>

					</div>
				</div>
			</div>
        </section>






    </div><!--wrapper-->
</div><!--layout-container-->

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



        <!-- -->

        <script>window.jQuery || document.write('<script src="scripts/vendor/jquery-2.1.3.min.js"><\/script>')</script>




        <!-- Cached build -->
        <script src="<?php popel_theme_uri(); ?>/scripts/main.min.js"></script>
        <!-- /

        <!-- -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script> -->

<script>
    obt9 = new Vivus('projecting', {type: 'oneByOne', delay:0, duration: 150, start: "inViewport"});
    obt10 = new Vivus('making', {type: 'oneByOne', delay:0, duration: 150, start: "inViewport"});
    obt11 = new Vivus('montage', {type: 'oneByOne', delay:0, duration: 150, start: "inViewport"});




</script>

</body>
</html>
