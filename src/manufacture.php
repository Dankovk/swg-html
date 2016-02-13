<?php
/*
Template Name: Template for Producing Page
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
        <link rel="shortcut icon" href="<?php popel_theme_uri(); ?>/favicon.ico">

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
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
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
			<li class="active"><a href="http://swg.popel-studio.com/izgotovlenie/">Изготовление</a></li>
			<li><a href="http://swg.popel-studio.com/montazh/">Монтаж</a></li>
			<!--<li><a href="portfolio.html">Наши работы</a></li>-->
		</ul>
	</div>
	<div class="header-tel">
		<span class="tel-span">+38 044 270 25 89</span>
		<a href="#application-section" class="arrow-down-link">
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

        <section class="head-block producing-head-block">
			<!--<img src="images/producting_background.jpg" alt="" data-0="opacity:1; transform:translateY(0%)"-->
				 <!--data-100p="opacity:0;transform:translateY(60%)"/>-->
			<div class="head-bg manufacture-head-bg" data-0="opacity:1; transform:translate3d(0,0%,0)"
			data-100p="opacity:0;transform:translate3d(0,30%,0)"></div>
            <div class="layout-container">
                <div class="head-content manufacture-head-content" id="head-block" data-0="opacity:1; transform:translate3d(0,0%,0)"
					 data-100p="opacity:0;transform:translate3d(0,60%,0)">
                    <h2>Мы производим металлоконструкции<br> для промышленно-гражданского строительства,<br> транспортной и энергетической отрасли</h2>
                </div>

            </div><!--layout-content-->
		</section>
		<div class="arrow-bottom"><div class="arrow-down"></div></div>

        <section class="scope-block manuf-scope-block" id="scope-block">
			<div id="navbar">
				<ul class="nav scroll-spy affix">
					<li class=""><a href="#head-block" class="js-scroll"></a></li>

					<li class="active"><a href="#scope-block" class="js-scroll"></a></li>


					<li><a href="#projects" class="js-scroll"></a></li>


					<li><a href="#competence" class="js-scroll"></a></li>

					<li><a href="#work" class="js-scroll"></a></li>


					<li><a href="#application-section" class="js-scroll"></a></li>
				</ul>
			</div>
            <div class="line right-f"></div>
            <div class="line right-s"></div>
            <div class="line left-f"></div>
            <div class="line left-s"></div>
            <div class="line right-t"></div>
            <div class="mask mask-f"></div>
            <div class="mask mask-s"></div>
            <div class="layout-container">
                <div class="scope-content">
                    <h1 class="padding-less" style="font-size: 80px">Специализируемся на изготовлении</h1>
                 <div class="specialization-cont">
                <div class="specialization-block">
                    <div class="svg-block ">

						<svg version="1.1" id="manufature-f" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="164.5px" height="160.7px" viewBox="-2 0 490.5 322.7" enable-background="new 0 0 478.5 324.7" xml:space="preserve">
<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="460.9,173.1 460.9,188.4
	458.6,187.5 458.6,174.4 "/>
<g>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="168.6,282.6 168.6,217.8
		210.8,196.8 432.1,86.4 436.6,84.2 478,147.7 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="210.8" y1="196.8" x2="252.3" y2="259.9"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="84.2,240.5 84.2,175.8
		126.4,154.7 347.7,44.4 352.2,42.1 393.6,105.7 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="126.4" y1="154.7" x2="167.9" y2="217.8"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="224,310.1 252.3,324.2
		252.3,259.9 477.9,147.7 477.9,212.6 252.3,324.2 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="139.7" y1="268.2" x2="195.8" y2="296.1"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="55.4" y1="226.2" x2="111.5" y2="254.2"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="309.9,64 268.5,0.5 264,2.7
		42.7,113.1 0.5,134.1 0.5,198.8 27.2,212.2 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="42.7" y1="113.1" x2="84.1" y2="176.2"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="55.3,226.2 55.3,177.6 27.2,163.6
		27.2,212.2 31.2,210.2 31.2,165.6 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="139.7,268.2 139.7,219.6
		111.5,205.6 111.5,254.1 115.5,252.1 115.5,207.6 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="224,310.1 224,261.5 195.9,247.5
		195.9,296 199.9,294 199.9,249.5 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="460.9,189 268.9,284.8 268.9,268.8
		460.9,173.1 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="300.9,252.9 300.9,268.2
		298.6,267.3 298.6,254.2 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="31.2" y1="183.9" x2="49.2" y2="174.6"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="115.3" y1="224.8" x2="131.9" y2="216.4"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="199.9" y1="266.9" x2="217.3" y2="258.2"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="298.6" y1="267.3" x2="268.9" y2="282.1"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="332.9,236.9 332.9,252.3
		330.6,251.3 330.6,238.2 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="330.6" y1="251.3" x2="300.9" y2="266.2"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="364.9,220.9 364.9,236.3
		362.6,235.4 362.6,222.2 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="362.6" y1="235.4" x2="332.9" y2="250.2"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="396.9,205.2 396.9,220.6
		394.6,219.6 394.6,206.5 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="394.6" y1="219.6" x2="364.9" y2="234.5"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="428.9,189 428.9,204.4
		426.6,203.5 426.6,190.3 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="426.6" y1="203.5" x2="396.9" y2="218.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="458.6" y1="187.5" x2="428.9" y2="202.4"/>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="283,224.3 268.2,231.7
			250.2,204.5 265.1,197 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="251.7,206.7 264.2,200.4
			280.7,225.5 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="265.1" y1="197" x2="264.2" y2="200.4"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="315,208.5 300.2,216 282.2,188.7
			297.1,181.3 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="283.7,190.9 296.2,184.7
			312.7,209.7 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="297.1" y1="181.3" x2="296.2" y2="184.7"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="346.6,192.8 331.8,200.2
			313.8,172.9 328.6,165.5 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="315.2,175.2 327.7,168.9
			344.2,194 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="328.6" y1="165.5" x2="327.7" y2="168.9"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="379,177 364.2,184.4 346.2,157.2
			361,149.8 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="347.6,159.4 360.1,153.2
			376.6,178.2 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="361" y1="149.8" x2="360.1" y2="153.2"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="410.6,161.2 395.8,168.6
			377.8,141.4 392.6,134 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="379.2,143.6 391.7,137.4
			408.2,162.4 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="392.6" y1="134" x2="391.7" y2="137.4"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="442.1,145.2 427.3,152.6
			409.3,125.4 424.1,118 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="410.7,127.6 423.2,121.4
			439.7,146.4 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="424.1" y1="118" x2="423.2" y2="121.4"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="200.5,184.4 185.7,191.8
			167.8,164.6 182.6,157.2 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="169.2,166.8 181.7,160.6
			198.2,185.6 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="182.6" y1="157.2" x2="181.7" y2="160.6"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="232.5,168.7 217.7,176.1
			199.8,148.8 214.6,141.4 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="201.2,151 213.7,144.8
			230.2,169.8 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="214.6" y1="141.4" x2="213.7" y2="144.8"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="264.1,152.9 249.3,160.3
			231.3,133 246.1,125.6 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="232.7,135.3 245.2,129
			261.7,154.1 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="246.1" y1="125.6" x2="245.2" y2="129"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="296.5,137.1 281.7,144.6
			263.7,117.3 278.5,109.9 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="265.1,119.5 277.6,113.3
			294.1,138.3 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="278.5" y1="109.9" x2="277.6" y2="113.3"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="328.1,121.3 313.3,128.8
			295.3,101.5 310.1,94.1 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="296.7,103.7 309.2,97.5
			325.7,122.5 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="310.1" y1="94.1" x2="309.2" y2="97.5"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="359.6,105.3 344.8,112.8
			326.8,85.5 341.6,78.1 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="328.2,87.7 340.7,81.5
			357.2,106.5 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="341.6" y1="78.1" x2="340.7" y2="81.5"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="114.8,138.2 100,145.6 82,118.3
			96.8,110.9 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="83.5,120.6 95.9,114.3
			112.5,139.4 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="96.8" y1="110.9" x2="95.9" y2="114.3"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="146.8,122.4 132,129.9 114,102.6
			128.8,95.2 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="115.5,104.8 127.9,98.6
			144.5,123.6 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="128.8" y1="95.2" x2="127.9" y2="98.6"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="178.4,106.7 163.5,114.1
			145.6,86.8 160.4,79.4 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="147,89.1 159.5,82.8 176,107.9
			"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="160.4" y1="79.4" x2="159.5" y2="82.8"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="210.8,90.9 195.9,98.3 178,71.1
			192.8,63.7 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="179.4,73.3 191.9,67.1
			208.4,92.1 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="192.8" y1="63.7" x2="191.9" y2="67.1"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="242.4,75.1 227.5,82.5 209.6,55.3
			224.4,47.9 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="211,57.5 223.5,51.3 240,76.3
			"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="224.4" y1="47.9" x2="223.5" y2="51.3"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="273.9,59.1 259,66.5 241.1,39.3
			255.9,31.9 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="242.5,41.5 255,35.3 271.5,60.3
					"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="255.9" y1="31.9" x2="255" y2="35.3"/>
	</g>
</g>
<polygon fill="none" stroke="#3E95E9" stroke-width="4" stroke-miterlimit="10" points="436.6,85.3 432.1,87.6 393.6,106.8
	352.2,43.3 347.7,45.5 309.5,64.5 268.5,1.6 264,3.8 42.7,114.2 0.5,135.2 0.5,200 27.2,213.3 27.2,213.3 31.2,211.3 31.2,185
	49.2,175.7 55.3,178.8 55.3,227.3 55.4,227.3 84.2,241.6 111.5,255.3 115.5,253.3 115.5,225.8 131.9,217.6 132.2,217 139.7,220.7
	139.7,269.3 139.7,269.3 168.6,283.7 195.8,297.2 195.9,297.2 199.9,295.2 199.9,268 217.3,259.3 224,262.6 224,311.2 224,311.3
	252.3,325.4 477.9,213.7 477.9,148.9 478,148.8 "/>
</svg>


					</div>
                    <div class="text-block" style="width:170px">
                        <span>Комплексные каркасы сооружений</span>
                    </div>
                </div>

                    <div class="specialization-block floated-r">
                        <div class="svg-block padding-top-svg">
							<svg version="1.1" id="manufature-s" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="160px" height="160.3px" viewBox="0 0 420 243.3" enable-background="new 0 0 420 243.3" xml:space="preserve">
						<g>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="274,217.2 274,214.1 287.5,207.4
								"/>
							<g>
								<g>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="386,113.5 258,177.3 290,193.3
										418,129.5 			"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="290,193.3 290,225.2 418,161.4
										418,129.5 			"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="258,177.3 258,209.2 290,225.2
													"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="260.5,181.5 260.5,207.4
										287.5,220.7 287.5,195.3 			"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="260.5" y1="207.4" x2="286.2" y2="194.6"/>
								</g>
								<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="274,188.4 274,185.3 402,121.5
									"/>
							</g>
						</g>
						<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M146,201.1"/>
						<g>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="23" y1="139.8" x2="2" y2="129.5"/>
							<path fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M66,241.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="7" y1="206.2" x2="60.3" y2="179.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="66" y1="241.2" x2="146.1" y2="201.3"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="23,145.6 7,137.5 7,206.2
								60.3,232.3 60.3,164.3 43,155.6 43,149.9 299,22.5 322,33.8 	"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M27,141.8"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="279,12.3 279,18.7 23,145.6
								23,139.8 279,12.3 258,1.9 2,129.5 2,209.3 66,241.2 66,161.5 43,149.9 66,161.5 322,33.8 322,81.6 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="258" y1="28.9" x2="258" y2="42.9"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="33.3,225.5 33.3,218.9 60.3,205.2
									"/>
						</g>
						<g>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="178" y1="185.3" x2="370" y2="89.6"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="178,204.3 178,185.3 146,169.3
								146,217.2 178,233.1 178,214.3 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="258" y1="193.3" x2="178" y2="233.1"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="370" y1="118.6" x2="370" y2="121.5"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="148.9" y1="215.4" x2="175.1" y2="202.2"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="146,169.3 338,73.6 370,89.6
								370,108.6 178,204.3 175.1,203.2 175.1,203.6 175.1,186.9 148.8,174 148.9,215.4 175,228.1 175,212.8 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="366.9,116.9 175,212.8 178,214.3
								370,118.6 	"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="174.7,187.8 149.2,200.6
								146,198.9 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="338" y1="124.6" x2="338" y2="131.3"/>
						</g>
						<polygon fill="none" stroke="#3E95E9" stroke-width="4" stroke-linejoin="round" stroke-miterlimit="10" points="370.1,121.7
							386,113.6 418,129.6 418,161.5 290,225.3 258,209.3 258,193.4 178,233.2 146,217.3 146.1,201.4 66,241.3 2,209.4 2,129.6 258,2
							279,12.4 279,18.8 258.1,29.2 258,29 258,43 258,43 299,22.5 322,33.9 322,79.7 322,81.7 338,73.7 370,89.6 370,108.6 338,124.7
							338,131.4 366.9,117 370,118.6 "/>
						</svg>



						</div>
                        <div class="text-block">
                        <span>Гнутые профили
                        </span>
                        </div>
                    </div>

                    <div class="specialization-block ">
                        <div class="svg-block padding-top-svg">
													<svg version="1.1" id="manufature-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="160.5px" height="160.4px" viewBox="0 0 451.5 285.4" enable-background="new 0 0 451.5 285.4" xml:space="preserve">
						<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="306" y1="41.9" x2="306" y2="55.9"/>
						<g>
							<g>
								<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="186.5,199.3 82,251.3 82,265.5
									"/>
							</g>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="274" y1="98.7" x2="274" y2="71.9"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="50" y1="151.6" x2="50" y2="235.3"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,113.7 226,2 306,41.9 82,153.6
								"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="306,55.9 306,41.9 82,153.6
								82,167.5 	"/>
							<path fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M2,211.4"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,127.7 2,113.7 82,153.6 82,167.5
									"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,211.4 2,225.6 82,265.5 82,251.3
									"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="186.5" y1="213.4" x2="82" y2="265.5"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="37" y1="145.1" x2="37" y2="229"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M66.3,243.5c-0.2-8.5-3.6-16.2-16-22.9
								c-0.1,0-0.2-0.1-0.3-0.1v14.9"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1,151.6v14.8c0.1,0,0.2,0.1,0.3,0.1
								c7.6,3.8,15.3,1,16-6.8"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M37,229v-15c-3.8-2-6.9-2.6-9.3-2
								c-3.8,0.9-6,4.4-6.6,8.9"/>
							<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M21.5,137.6
								c0,8.6,4.6,16.5,15.5,22.1"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M37,213.7"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="50.3" y1="220.6" x2="158" y2="167"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="66.5" y1="243.4" x2="177.8" y2="187.6"/>
							<polyline fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="61.9,167 63.5,166.1 70.8,162
								"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="26.4" y1="212.4" x2="37" y2="207.5"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="211.4" x2="37" y2="193.2"/>
						</g>
						<g>
							<g>
								<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="303.2,228.8 223.1,268.7
									223.1,280.3 305.5,239 		"/>
							</g>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="379.2" y1="153" x2="379.2" y2="122.4"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="197" y1="187.7" x2="197" y2="255.8"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="158,156.9 325,73.1 390.1,105.6
								223.1,189.3 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="390.1,116.9 390.1,105.6
								223.1,189.3 223.1,200.7 	"/>
							<path fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M158,236.3"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="158,168.2 158,156.9 223.1,189.3
								223.1,200.7 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="158,236.3 158,247.9 223.1,280.3
								223.1,268.7 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="186.5" y1="182.4" x2="186.5" y2="250.6"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M210.3,262.4c-0.1-6.9-2.9-13.2-13-18.6
								c-0.1,0-0.1-0.1-0.2-0.1v12.1"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M386.2,157.8c-1.8-1.6-4-3.2-6.9-4.8
								c-0.1,0-0.1-0.1-0.2-0.1"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M197.1,187.7v12.1c0.1,0,0.1,0.1,0.2,0.1
								c6.2,3.1,12.4,0.8,13-5.6"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M186.5,250.6v-12.2
								c-3.1-1.6-5.6-2.1-7.6-1.6c-3.1,0.7-4.9,3.6-5.3,7.3"/>
							<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M173.9,176.3
								c0,7,3.7,13.4,12.6,18"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M186.5,238.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="197.3" y1="243.8" x2="379.2" y2="152.9"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="210.5" y1="262.3" x2="297.2" y2="218.7"/>
							<polyline fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="206.7,200.2 208,199.5
								214,196.1 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="177.8" y1="237.1" x2="186.5" y2="233.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="158" y1="236.3" x2="186.5" y2="221.5"/>
						</g>
						<g>
							<g>
								<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
									441.5,211.8 449.5,215.8 328.1,276.2 		"/>
								<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="449.5,222.9 449.5,215.8
									328.1,276.2 328.1,283.4 		"/>
							</g>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="433.4" y1="199.7" x2="433.4" y2="181.7"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="312" y1="226" x2="312" y2="268.2"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="287.9,207 399.9,150.9 440.2,171
								328.1,227 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="440.2,178 440.2,171 328.1,227
								328.1,234.1 	"/>
							<path fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M287.9,256.1"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="287.9,214 287.9,207 328.1,227
								328.1,234.1 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="287.9,256.1 287.9,263.3
								328.1,283.4 328.1,276.2 	"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="449.5,215.8 449.5,222.9
								328.1,283.4 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="305.5" y1="222.8" x2="305.5" y2="265"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M320.2,272.3c-0.1-4.3-1.8-8.2-8-11.5
								c0,0-0.1,0-0.1-0.1v7.5"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M441.6,211.6c-0.1-4.3-1.8-8.2-8-11.5
								c0,0-0.1,0-0.1-0.1"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M312,226v7.5c0,0,0.1,0,0.1,0.1
								c3.8,1.9,7.7,0.5,8-3.4"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M305.5,265v-7.5c-1.9-1-3.5-1.3-4.7-1
								c-1.9,0.4-3,2.2-3.3,4.5"/>
							<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M297.7,219
								c0,4.3,2.3,8.3,7.8,11.1"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M305.5,257.3"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="312.2" y1="260.7" x2="433.5" y2="200"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="320.3" y1="272.2" x2="441.5" y2="211.8"/>
							<polyline fill="#FFFFFF" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="318,233.8 318.8,233.3
								322.5,231.3 	"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="300.1" y1="256.6" x2="305.5" y2="254.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="287.9" y1="256.1" x2="305.5" y2="247"/>
						</g>
						<path fill="none" stroke="#3E95E9" stroke-width="4" stroke-linejoin="round" stroke-miterlimit="10" d="M450,215.8
							c0-0.2-0.1-0.4-0.3-0.4l-7.3-3.7c-0.2-0.1-0.3-0.3-0.3-0.5c-0.2-5-2.7-8.5-7.9-11.4c-0.2-0.1-0.3-0.3-0.3-0.5v-17.3
							c0-0.2,0.1-0.4,0.3-0.5l5.9-3c0.4-0.2,0.6-0.5,0.6-0.9V171c0-0.2-0.1-0.3-0.2-0.4c0,0,0,0,0,0l0,0l-40.3-20.1
							c-0.1-0.1-0.3-0.1-0.4,0l-13.1,6.6c-0.2,0.1-0.4,0.1-0.6-0.1c-1.7-1.5-3.7-2.8-6-4.1c-0.2-0.1-0.3-0.3-0.3-0.5V123
							c0-0.2,0.1-0.4,0.3-0.5l10-5c0.4-0.2,0.6-0.5,0.6-0.9v-11c0-0.2-0.1-0.3-0.2-0.4c0,0,0,0,0,0l0,0l-65.1-32.5c-0.1-0.1-0.3-0.1-0.4,0
							l-49.5,24.8c-0.4,0.2-0.8-0.1-0.8-0.5V72.5c0-0.2,0.1-0.4,0.3-0.5l31.4-15.6c0.2-0.1,0.3-0.3,0.3-0.4v-14c0-0.2-0.1-0.3-0.2-0.4
							c0,0,0,0,0,0l0,0l-80-39.9c-0.1-0.1-0.3-0.1-0.4,0L1.8,113.3l0,0c0,0,0,0,0,0c-0.1,0.1-0.2,0.3-0.2,0.4v14c0,0.2,0.1,0.4,0.3,0.4
							l18.9,9.4c0.2,0.1,0.3,0.3,0.3,0.5c0.2,9.1,5.4,16.6,15.2,21.8c0.2,0.1,0.3,0.3,0.3,0.5v32.2c0,0.2-0.1,0.4-0.3,0.5L1.8,211l0,0
							c0,0,0,0,0,0c-0.1,0.1-0.2,0.3-0.2,0.4v14.2c0,0.2,0.1,0.4,0.3,0.4l80,39.9c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2-0.1l0,0l103-51.3
							c0.4-0.2,0.8,0.1,0.8,0.5v5.7c0,0.2-0.1,0.4-0.3,0.5l-27.9,14.5l0,0c0,0,0,0,0,0c-0.1,0.1-0.2,0.3-0.2,0.4v11.6
							c0,0.2,0.1,0.4,0.3,0.4l65.1,32.4c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2-0.1l0,0l80.9-40.5c0.4-0.2,0.8,0.1,0.8,0.5v5.6
							c0,0.2-0.1,0.4-0.3,0.5l-17,8.8l0,0c0,0,0,0,0,0c-0.1,0.1-0.2,0.3-0.2,0.4v7.2c0,0.2,0.1,0.4,0.3,0.4l40.2,20.1
							c0.1,0,0.1,0.1,0.2,0.1s0.1,0,0.2-0.1l0,0l121.4-60.5c0.2-0.1,0.3-0.3,0.3-0.4L450,215.8L450,215.8z M433.5,200l-0.1-0.3h0.5
							c0.1,0.1,0.1,0.2,0.1,0.3H433.5z"/>
						<g opacity="0.46">
							<path d="M226-458l80,39.9v14l-32,16v0.1v24.8v1v1l0,0l0,0l0,0l51-25.6l65.1,32.4v11.4l-10.9,5.4v0.5l0.5,29.8v0.9
								c0.1,0,0.1,0.1,0.2,0.1c2.8,1.5,4.6,2.4,6.4,4.1L400-309l40.3,20.1v7l-6.7,3.3v0.3v18v0.2c0,0,0.1,0,0.1,0.1c6.3,3.4,8,7.3,8,11.5
								l0.4,0.5l7.5,3.7v7.2l-121.4,60.4l-40.3-20.1v-7.2l17.6-9.1v-2v-4.2v-1.7l-82.4,41.3L158-212.1v-7.6v-4l28.5-14.8v0.1v-0.1v-8.1
								l0,0L82-194.5L2-234.4v-14.3l0.9-0.5L37-266.8v-4.2v-23.9v-5.4c-10.9-5.6-15.5-13.5-15.5-22.1L2-332.3v-14L226-458 M226-460
								c-0.3,0-0.6,0.1-0.9,0.2L1.1-348.1c-0.7,0.3-1.1,1-1.1,1.8v14c0,0.8,0.4,1.4,1.1,1.8l18.4,9.4c0.3,6.7,3.5,15.5,15.5,22.1v4.2v23.8
								v3L2-250.9l-0.9,0.5c-0.7,0.3-1.1,1-1.1,1.8v14.3c0,0.8,0.4,1.5,1.1,1.8l80,39.9c0.3,0.1,0.6,0.2,0.9,0.2s0.6-0.1,0.9-0.2
								l101.6-50.6v3.6l-27.4,14.2c-0.7,0.3-1.1,1-1.1,1.8v4v7.6c0,0.8,0.4,1.5,1.1,1.8l65.1,32.4c0.3,0.1,0.6,0.2,0.9,0.2
								c0.3,0,0.6-0.1,0.9-0.2l79.5-39.9v2.7v0.8l-16.5,8.6c-0.7,0.3-1.1,1-1.1,1.8v7.2c0,0.8,0.4,1.5,1.1,1.8l40.3,20.1
								c0.3,0.1,0.6,0.2,0.9,0.2s0.6-0.1,0.9-0.2l121.4-60.4c0.7-0.3,1.1-1,1.1-1.8v-7.2c0-0.8-0.4-1.5-1.1-1.8l-6.9-3.4
								c-0.4-5-3-8.8-8.1-11.8v-16.2l5.6-2.8c0.7-0.3,1.1-1,1.1-1.8v-7c0-0.8-0.4-1.5-1.1-1.8l-40.3-20.1c-0.3-0.1-0.6-0.2-0.9-0.2
								s-0.6,0.1-0.9,0.2l-12.5,6.2c-1.5-1.3-3.3-2.5-5.4-3.7v-28.1l9.8-4.9c0.7-0.3,1.1-1,1.1-1.8v-11.4c0-0.8-0.4-1.5-1.1-1.8
								l-65.1-32.4c-0.3-0.1-0.6-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-48,24.2v-22.4l30.9-15.4c0.7-0.3,1.1-1,1.1-1.8v-14c0-0.8-0.4-1.5-1.1-1.8
								l-80-39.9C226.6-459.9,226.3-460,226-460L226-460z"/>
						</g>
						</svg>


						</div>
                        <div class="text-block">
                        <span>Сложные
                              двухтавровые<br>
                              конструкции
                        </span>
                        </div>
                    </div>

                    <div class="specialization-block floated-r">
                        <div class="svg-block padding-top-svg">
                            <svg version="1.1" id="manufature-fr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="160px" height="160px" viewBox="-1 0 425 243.3" enable-background="new 0 0 420 243.3" xml:space="preserve">
<g>
	<g>
		<g>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,129.7 2,209.4 66,241.3
				66,161.6 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,129.7 258,2 322,33.9 66,161.6
							"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="7,137.6 7,206.3 60.3,232.4
				60.3,164.4 			"/>
			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="7" y1="206.3" x2="60.3" y2="180.3"/>
			<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="322,81.8 322,33.9 258,2
				2,129.7 			"/>
			<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M66,241.3"/>
		</g>
		<g>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="338,73.7 146,169.4 178,185.4
				370,89.7 			"/>
			<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M370,137.5"/>
			<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="258,193.5 178,233.3 178,185.4
				370,89.7 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="146,169.4 146,217.3 178,233.3
				178,185.4 			"/>
			<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M178,233.3"/>
			<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="146,169.4 338,73.7 370,89.7
				370,121.7 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="148.8,174.1 148.9,215.5
				175,228.2 175.1,187 			"/>

				<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="148.9" y1="215.5" x2="175.1" y2="202.3"/>
		</g>
		<g>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="386,113.6 258,177.5 290,193.4
				418,129.6 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="290,225.3 418,161.5 418,129.6
				290,193.4 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="258,177.5 258,209.4 290,225.3
				290,193.4 			"/>
			<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="258,177.5 386,113.6 418,129.6
				418,161.5 290,225.3 			"/>
			<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="260.5,181.6 260.5,207.5
				287.5,220.8 287.5,195.4 			"/>

				<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="260.5" y1="207.5" x2="286.2" y2="194.7"/>
		</g>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="34,151.2 34,145.4 290,18 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="33.7,225.2 33.7,219.3 60.3,206
					"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="162,225.3 162,221.9 175,215.5
			"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="162,180.6 162,177.4 354,81.7
			"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="274,217.3 274,214.2 287.5,207.5
					"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="274,188.5 274,185.4 402,121.6
			"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="66" y1="241.3" x2="146" y2="201.1"/>
	</g>
	<g>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M258,2l64,31.9l0,47.8l16-8l32,15.9l0,32l16-8l32,15.9l0,32l-128,63.8l-32-16v-16l-80,39.8l-32-15.9v-16
			l-80,39.9L2,209.4l0-79.7L258,2 M258,0c-0.3,0-0.6,0.1-0.9,0.2L1.1,127.9c-0.7,0.3-1.1,1-1.1,1.8l0,79.7c0,0.8,0.4,1.5,1.1,1.8
			l64,31.9c0.3,0.1,0.6,0.2,0.9,0.2s0.6-0.1,0.9-0.2l77.1-38.4v12.7c0,0.8,0.4,1.5,1.1,1.8l32,15.9c0.3,0.1,0.6,0.2,0.9,0.2
			c0.3,0,0.6-0.1,0.9-0.2l77.1-38.4v12.7c0,0.8,0.4,1.5,1.1,1.8l32,16c0.3,0.1,0.6,0.2,0.9,0.2s0.6-0.1,0.9-0.2l128-63.8
			c0.7-0.3,1.1-1,1.1-1.8l0-32c0-0.8-0.4-1.5-1.1-1.8l-32-15.9c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-13.1,6.5l0-28.8
			c0-0.8-0.4-1.5-1.1-1.8l-32-15.9c-0.3-0.1-0.6-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L324,78.5l0-44.6c0-0.8-0.4-1.5-1.1-1.8
			l-64-31.9C258.6,0.1,258.3,0,258,0L258,0z"/>
	</g>
</g>
</svg>

                        </div>
                        <div class="text-block">
                        <span>Сварные<br>
                              профили
                        </span>
                        </div>
                    </div>
					 <div class="specialization-block">
						 <div class="svg-block ">

							 <svg version="1.1" id="manufature-fv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="160.9px" height="160.1px" viewBox="0 0 434.9 250.1" enable-background="new 0 0 434.9 250.1" xml:space="preserve">
								<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M159.4,34.6c0,0,28.2-25.6,71.6-22l0,0
									c16.5,1.7,32.7,6.2,47.5,12.9"/>
								<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="270.7,27.9 235.5,10.4 238.6,38.4
									"/>
								<g>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M101.3,126.9c-27.1,19.4-57.3,42-89.4,67.7"
										/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M389.5,43.5c-38.9-20.1-90-27-132.7-12.2
										c-4.8,1.7-9.5,3.5-14.1,5.4c-5.9,2.5-11.6,5.3-17.1,8.5c-15.6,9.2-55.8,33.4-110.1,71.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M427.1,89.4c-15.6-23-38.2-35.8-52.2-42.9"
										/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="427.1" y1="89.4" x2="433.3" y2="86"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="352.1" y1="125.2" x2="359.3" y2="121.7"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="358.6,41.1 326.8,56.9 394.3,56.2
											"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
										420.9,75.9 352.3,110.7 394.3,56.2 341,82.8 	"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="326.8" y1="56.9" x2="326.8" y2="35.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M312.2,35.2c13,9.9,23.2,24.7,30.1,39.4
										c2.9,6.2,12.5,25.6,17,47.1"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M298.3,36.2c7.6,4.9,14.6,10.4,20.8,16.4
										c3.7,3.6,6.8,7.8,9.4,12.2c13.6,23.5,21.3,47.6,22.1,52.7l1.5,7.6l-7.9-4.9c-11.8-44.4-31.5-69.1-49.4-83.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M113.4,128.5
										c35-24.3,67.1-45,89.7-59.3c0.6-0.4,15.5-9.7,20.5-12.8c13.5-8.3,27.7-15.2,42.6-20.5c0.1,0,0.2-0.1,0.3-0.1
										c56.8-19.8,128.7-0.9,166.6,36.3l0.1,13.8c-34.8-39.1-97.6-60.5-153-46.4c-1,0.2-1.9,0.5-2.9,0.7c-6.2,1.3-29.1,6.2-72.1,27.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M12.1,204.1C40,181.4,70,159.2,98.6,139"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M99.7,247.8l7.2-4.1
										C91.5-3.7,229.2,5.8,229.2,5.8h1.8c22.2,1.9,44,8.2,62.7,17.9"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M144.9,40c-4.2,5.9-58.6,53.4-54.4,203.1
										l9.3,4.7c-7.3-80.3,3.7-134.6,21.2-171.3c21.5-45.2,52.8-62.6,71.8-69.9c0.9-0.2,16.3-7.6,43.6-3.3l-0.8-0.1
										c16.6,2.8,32.6,8,47,15.1c0.7,0.3,1.4,0.7,2.1,1"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2.4,189.9 2.4,199.3 11.9,204.1
										11.9,194.6 	"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M2.4,189.9"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M117,110.6c40.2-26.8,80-51.9,98.5-59.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M2.4,189.9c0,0,48.8-34.9,100.8-69.9"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="232.8,41.3 185,18.2 201,59 	"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="138.1" y1="60.8" x2="171.6" y2="77.1"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
										15.5,197.6 90.2,234.1 41.9,177.3 90.8,201.3 	"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="93.4" y1="170.3" x2="65.7" y2="156.7"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="98.4,139.9 93.4,137.5 95.9,155.2
											"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="41.9" y1="177.3" x2="92.6" y2="177.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="93.4" y1="137.5" x2="98.6" y2="136.5"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="120.4,99.4 142.1,96.1 125.3,88
										"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="142.1" y1="96.1" x2="135.6" y2="65"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="140.7,56.9 201,59 156.5,37.5 	"/>
								</g>
								<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="235.5" y1="10.4" x2="288.6" y2="24.2"/>
								<path fill="none" stroke="#3E95E9" stroke-width="4" stroke-miterlimit="10" d="M432.7,72.2C421,60.6,405.9,50.9,389,43.5h-0.1
									c-28.1-14.5-62.6-22.1-95.6-19.6l0,0c-3-1.5-6.1-3-9.2-4.4l0,0l0,0c-0.7-0.3-1.4-0.7-2.1-1c-14.2-7.1-30.1-12.2-46.5-15
									c-27.1-4.2-42.4,3.1-43.3,3.3c-12.7,4.9-30.8,14.3-47.9,33.4c0,0,0,0,0,0.1c-0.4,0.6-1.3,1.5-2.5,2.9c-0.1,0.1-0.2,0.3-0.3,0.4
									c-7.4,8.3-26,30.7-38.8,76.6l0,0C50.8,155,2,189.9,2,189.9v9.5l9.5,4.7h0.1c2.1-1.7,4.2-3.4,6.3-5.1l68.2,33.4l3.7,2
									c0,2.9,0.1,5.8,0.2,8.8l9.3,4.7l7.2-4.1c-3-47.1-0.4-85,5.8-115.3l0.6,0.1c35-24.3,67.1-45.1,89.7-59.3c0.1-0.1,0.9-0.6,2.1-1.3
									c0,0,0,0,0.1,0c43-21.4,65.9-26.3,72.1-27.6c1-0.2,1.9-0.4,2.9-0.7c4.8-1.2,9.6-2.2,14.5-2.9c17.9,14.5,37.6,39.2,49.4,83.6l7.9,4.9
									l7.2-3.5c-0.9-4.4-2.1-8.8-3.4-12.9l61.8-31.3c3.3,3.6,6.4,7.5,9.3,11.8l6.2-3.4L432.7,72.2z"/>
								</svg>



						 </div>
						 <div class="text-block">
                        <span>Пространственные
                              металло-<br>
                              конструкции
                        </span>
						 </div>
					 </div>

					 <div class="specialization-block floated-r">
						 <div class="svg-block padding-top-svg">
							 <svg version="1.1" id="manufature-sx" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="160.9px"
								 height="160.2px" viewBox="0 0 417.9 288.2" enable-background="new 0 0 412.9 288.2" xml:space="preserve">
							<g id="Layer_2">
								<g>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M3.2,206.7c0,0-15-83.1,49.3-82.9
										c37.2,0.6,90.4,54.7,105.6,100.9c15.1,46.2,9.5,62.9,9.5,62.9L3.2,206.7z"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M178.2,282.8c0.1-1.2,5-18.2-10.1-63.8
										c-15.3-46.1-68.3-100.3-105.6-100.9c-5.7,0-10.8,0.6-15.4,1.8L28.2,129"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M53.7,220.7c0,0-2.5-21.3,14.6-21.3
										c11.4,0.5,24,14.5,28.1,26.8s2.5,16.7,2.5,16.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M58.5,223c0,0-3.2-17.9,10.6-17.9
										c8,0.1,19.5,11.8,22.8,21.8s2.1,13.6,2.1,13.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M12.4,200.1c-1.2-11.1-2.6-38.7,10.7-54.5
										c6.6-7.9,16.2-11.8,29.2-11.8h0.1c31.4,0.6,81.7,49.7,96.1,94c6.8,20.7,9.1,35,9.8,44.1L12.4,200.1z"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="163.6" y1="207.7" x2="386.6" y2="97.4"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="170.2" y1="123.3" x2="177.1" y2="119.9"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="132.1" y1="142.4" x2="158.4" y2="129.1"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="120.2" y1="148.4" x2="128.1" y2="144.4"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="206.5" y1="105.5" x2="197.8" y2="109.9"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="236.8" y1="89.9" x2="210.9" y2="103.3"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="91.3" y1="162.9" x2="100.4" y2="158.3"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="55.2" y1="180.8" x2="80.9" y2="168.1"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="55.2" y1="180.8" x2="80.9" y2="168.1"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="14.5" y1="201.1" x2="50.8" y2="183.2"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="167.6" y1="287.6" x2="411.8" y2="166.1"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="236.8" y1="44.8" x2="304.8" y2="11.2"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="159.5" y1="83.5" x2="226.2" y2="50.3"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="81.9,122.5 133.2,96.6
										148.3,89.1 		"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="173.9" y1="91.3" x2="319.8" y2="18.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="96.3" y1="129.9" x2="163.2" y2="96.6"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="179.9" y1="95.3" x2="241.4" y2="64.4"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="102.4" y1="133.9" x2="163.1" y2="103.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M108,236.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M81.9,122.5c5-19.4,17.7-37.5,47.9-37.4
										c5.6,0.1,11.6,1.4,17.8,3.7c34.7,13,75,57.9,87.8,97.2c15.1,46.2,9.5,62.9,9.5,62.9L80.4,167.9c0,0-2-11.1-1.4-25.1"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M255.4,244c0.1-1.2,5-18.2-10.1-63.8
										C230,134.1,176.9,79.9,139.7,79.3c-5.7,0-10.8,0.6-15.4,1.8l-18.9,9.1"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M206.7,152.9l-48.3-23.8
										c0-0.5-1.6-11.8-1.4-22.4"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M159.8,84c4.9-19.6,17.5-38.1,47.9-37.7
										c37.2,0.6,90.4,54.7,105.6,100.9s9.5,62.9,9.5,62.9L241.3,170"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M333.3,205.2c0.1-1.2,5-18.2-10.1-63.8
										C307.9,95.3,254.9,41.2,217.6,40.6c-5.7,0-10.8,0.6-15.4,1.8l-18.5,8.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M285.2,113.8l-48.4-23.8
										c0-0.1-1.6-9.7-1.4-22.2"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M238.4,44.1c5-19.3,17.7-37.3,47.7-37
										c37.2,0.6,90.4,54.7,105.6,100.9s9.5,62.9,9.5,62.9l-82.3-40.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M411.8,166.1c0.1-1.2,5-18.2-10.1-63.8
										C386.3,56.1,333.3,2,296.1,1.4c-5.7,0-10.8,0.6-15.4,1.8l-18.9,9.1"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M230.8,174.4c0,0-13.5,55.1-52.3,106.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M308.6,136.1c0,0-10.8,53.2-53.1,107"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M386.6,97.4c0,0-10.8,53.2-53.1,107"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="59.4" y1="202.2" x2="31.5" y2="138.6"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="88.5" y1="212.3" x2="118.5" y2="177"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="45.8,171.4 74.6,200.5 74.6,140
												"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="74.6" y1="200.5" x2="104.7" y2="193.3"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M136,164.9c2.2-2.1,5.3-3.4,9.6-3.4
										c11.4,0.5,24,14.5,28.1,26.8c4,12.3,2.5,16.7,2.5,16.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M139.6,169.3c1.6-1.3,3.8-2.2,6.9-2.2
										c8,0.1,19.5,11.8,22.8,21.8s2.1,13.6,2.1,13.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M117.4,175.7l-27.6-13.6
										c-0.3-3-0.7-7.3-0.7-12.3"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M158.4,106c27.4,16.8,56.9,51.6,67.5,83.8
										c6.8,20.7,9.1,35,9.8,44.1l-78.2-38.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M95.3,115.7c1.4-2.9,3.1-5.6,5.1-8.1
										c6.6-8,16.2-11.8,29.2-11.8h0.1c1.1,0,2.3,0.1,3.5,0.3"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="111.8" y1="107.4" x2="108.8" y2="100.6"/>

										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="136.8" y1="164.2" x2="119.7" y2="125.3"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="165.9" y1="174.3" x2="195.9" y2="139"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="123.1,133.4 151.9,162.5
										151.9,109.2 		"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="151.9" y1="162.5" x2="182" y2="155.3"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M213,125.8c2.2-2.6,5.5-4.4,10.6-4.4
										c11.4,0.5,24,14.5,28.1,26.8c4,12.3,2.5,16.7,2.5,16.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M216.6,130.2c1.7-1.9,4.1-3.1,7.8-3.1
										c8,0.1,19.5,11.8,22.8,21.8c3.3,10,2.1,13.6,2.1,13.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M191,133.5L167.7,122
										c-0.3-2.8-0.6-5.6-0.7-10.1"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M237.5,66.7c27.1,17,56,51.3,66.4,83.1
										c6.8,20.7,9.1,35,9.8,44.1l-80.3-39.5"/>
									<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M173,76.1
										c1.4-3.1,3.2-5.9,5.3-8.5c6.6-7.9,16.2-11.8,29.2-11.8h0.1c1.6,0,3.3,0.2,5,0.5"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="190.1" y1="68.2" x2="186.7" y2="60.6"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="214.7" y1="124.2" x2="198" y2="86.3"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="243.8" y1="134.3" x2="273.8" y2="99"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="201.1,93.4 229.9,122.4 229.9,70
												"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="229.9" y1="122.4" x2="260" y2="115.3"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M291.1,87.3c2.2-2.7,5.6-4.7,10.8-4.7
										c11.4,0.5,24,14.5,28.1,26.8c4,12.3,2.5,16.7,2.5,16.7"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M294.7,91.6c1.6-2,4.2-3.4,8.1-3.4
										c8,0.1,19.5,11.8,22.8,21.8c3.3,10,2.1,13.6,2.1,13.6"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M270.7,95.4L246,83.2
										c-0.3-2.9-0.6-6.8-0.7-11.3"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M315.6,27.8c27.1,17,56.1,51.4,66.5,83.2
										c6.8,20.7,9.1,35,9.8,44.1l-80.9-39.8"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M251.1,37.8c1.5-3.2,3.3-6.3,5.6-9
										c6.6-7.9,16.2-11.8,29.2-11.8h0.1c1.7,0,3.5,0.2,5.3,0.5"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="268.3" y1="29.2" x2="265.1" y2="21.8"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="293.1" y1="85.4" x2="276.3" y2="47.3"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="322.1" y1="95.5" x2="352.1" y2="60.2"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
										279.4,54.6 308.2,83.6 308.2,32.2 		"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="308.2" y1="83.6" x2="338.3" y2="76.5"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="163.2" y1="96.6" x2="163.2" y2="104"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="241.4" y1="57.9" x2="241.4" y2="64.4"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="319.8,18.8 319.8,26 257.8,56.5
												"/>
								</g>
							</g>
							<g id="Layer_1">
								<g>
									<path fill="none" stroke="#3E95E9" stroke-width="4" stroke-linejoin="round" stroke-miterlimit="10" d="M237.7,43.7
										c-0.5,0.6-1.4,0.9-2.1,0.6c-6.5-2.5-12.7-4-18.6-4.1c-5.7,0-10.8,0.6-15.4,1.8l-17.9,8.4c-0.1,0.1-0.3,0.1-0.4,0.2l-0.2,0.1l0,0
										c-13.7,6.7-20.7,19.5-24,32.9c-7-2.9-13.7-4.5-20.1-4.6c-5.7,0-10.8,0.6-15.4,1.8L106,89.2c-0.3,0.1-0.6,0.3-0.9,0.4l-0.3,0.2l0,0
										c-13.3,6.7-20.2,19.2-23.6,32.3c-6.7-2.7-13.3-4.3-19.4-4.4c-5.7,0-10.8,0.6-15.4,1.8l-17.2,8.3c-0.2,0.1-0.4,0.2-0.6,0.3l-1,0.5
										l0,0c-35.8,18.1-25,77.7-25,77.7l164.4,80.9l10.3-5.1l0.3,0.3c0-0.1,0-0.3,0.1-0.5l77.1-38.3l0.1,0.1c0,0,0-0.1,0-0.1l77.8-38.7
										l0.1,0.1c0,0,0-0.1,0-0.1l78.4-39c0.1-1.2,5-18.2-10.1-63.8C385.6,55.8,332.6,1.6,295.4,1c-5.7,0-10.8,0.6-15.4,1.8l-15.4,7.4
										C249.1,16.3,241.4,29.6,237.7,43.7L237.7,43.7z"/>
								</g>
							</g>
							</svg>




						 </div>
						 <div class="text-block">
                        <span>Уникальные
							  конструкции
                        </span>
						 </div>
					 </div>

					 <div class="specialization-block ">
						 <div class="svg-block padding-top-svg">
							 <svg version="1.1" id="manufature-sv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="160.3px" height="160px" viewBox="0.2 1.7 292.3 326" enable-background="new 0.2 1.7 292.3 326" xml:space="preserve">
							<g id="Layer_2">
								<g>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M263.7,63.1"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="259.1,64.8 270.5,71.1
										270.5,44.5 		"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="256" y1="51.7" x2="256" y2="56.7"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="270.5,71.1 275.7,69.1
										275.7,41.9 		"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="7.7,143.5 7.7,150.8 32.1,163
										32.1,155.4 291.5,26.2 291.5,18.6 		"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M262.2,53.7c1.6-0.1,3,1.8,3.3,4.3
										c0.2,2.5-0.9,4.6-2.4,4.8"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="260.6,2.7 1.6,132.1 33,146.9
										291.9,18.3 		"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="1.6,132.6 1.6,140.2 32.1,155.4
										32.1,147 		"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M47.4,170.6"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="96.3" y1="131" x2="32.1" y2="163"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="177.7" y1="90.4" x2="101" y2="128.6"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="243.1" y1="57.8" x2="182.4" y2="88.1"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="285.9,29.1 285.9,36.5
										247.9,55.4 		"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="39.8,159.2 39.8,170.6
										54.2,178.6 54.2,152 		"/>
									<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="54.2,178.6 59.4,176.6
										59.4,149.4 		"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="251.2" y1="68.7" x2="263.3" y2="62.7"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="185.6" y1="101.5" x2="239" y2="74.8"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="104.9" y1="142" x2="173.4" y2="108"/>
									<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="59" y1="164.8" x2="92" y2="148.4"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="247.9" y1="60.8" x2="262.2" y2="53.7"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="182.4" y1="93.5" x2="243.1" y2="63.2"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="101" y1="134.2" x2="177.1" y2="96.2"/>

										<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="59.4" y1="155.1" x2="96.3" y2="136.6"/>
									<g>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M99.3,161.4c-4.3,0-7.4-4.9-7.4-11.6
											c0-6.7,3.1-11.6,7.4-11.6s7.4,4.9,7.4,11.6C106.7,156.6,103.6,161.4,99.3,161.4z"/>
										<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="99.3" cy="149.9" rx="4.2" ry="8.4"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="79.1" y1="144.7" x2="74" y2="142.1"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="92" y1="151.2" x2="89.1" y2="149.7"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="78.6,155.2 102.3,167
											112.9,161.7 104.8,157.6 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="63.2" y1="147.5" x2="69" y2="150.3"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="102.3,167 117.6,250.7
											117.6,326.7 10.8,273 10.8,268.7 10.8,197.4 19.5,156.7 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="28.4,161.1 20.3,198.5
											20.3,267.7 108,311.3 108,251.5 93.8,173.4 67.8,160.4 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="112.9,161.7 128.5,245.2
											128.5,321.3 117.6,326.7 			"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="117.6" y1="250.7" x2="128.5" y2="245.2"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="20.6" y1="199.2" x2="26.2" y2="196.5"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="32.9,162.6 26,197.4 26,263.2
											26,265.2 24.7,265.8 20.8,267.6 			"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="96.3" y1="123.9" x2="96.3" y2="138.6"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="101" y1="121.5" x2="101" y2="138.6"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="26" y1="265.2" x2="108" y2="305"/>
									</g>
									<g>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M180.7,121.9c-4.3,0-7.4-4.9-7.4-11.6
											s3.1-11.6,7.4-11.6s7.4,4.9,7.4,11.6S185,121.9,180.7,121.9z"/>

											<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="180.7" cy="110.3" rx="4.2" ry="8.4"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="159.9" y1="104.8" x2="154.8" y2="102.2"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="173.4" y1="111.6" x2="169.3" y2="109.7"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="158.8,114.9 183.7,127.4
											194.3,122.2 186.2,118.1 			"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="143.7" y1="107.6" x2="149.1" y2="110.2"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="128.5,251.7 199,287.2
											199,211.1 183.7,127.4 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="92.2,172.6 92.2,229.2
											92.2,233.5 106,240.4 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
											128.2,241.3 189.4,271.8 189.4,212 175.2,133.9 148.5,120.6 			"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="132.9" y1="112.8" x2="138.4" y2="115.6"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="108" y1="130.5" x2="109.3" y2="124.9"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194.3,122.2 209.9,205.7
											209.9,281.8 199,287.2 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="199" y1="211.1" x2="209.9" y2="205.7"/>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M107.6,157"/>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M104.6,158.3"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="113.9" y1="127.7" x2="115.5" y2="121.9"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="111.5,138.3 107.4,157.9
											107.4,159.1 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="177.7" y1="82.9" x2="177.7" y2="99.7"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="182.4" y1="81" x2="182.4" y2="99.1"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="126.6" y1="234.9" x2="189.4" y2="265.5"/>
									</g>
									<g>
										<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M246.2,89c-4.3,0-7.4-4.9-7.4-11.6
											s3.1-11.6,7.4-11.6s7.4,4.9,7.4,11.6C253.6,84.1,250.5,89,246.2,89z"/>
										<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="246.2" cy="77.4" rx="4.2" ry="8.4"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="225.6" y1="72" x2="220.3" y2="69.3"/>

											<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="238.8" y1="78.7" x2="235.3" y2="76.9"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="224.7,82.3 249.2,94.5
											259.7,89.2 251.7,85.2 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="209.2" y1="74.6" x2="215" y2="77.5"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="162.3" y1="103.8" x2="163.8" y2="97.5"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
											209.9,226.8 264.4,254.3 264.4,178.2 249.2,94.5 224.7,82.3 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
											157.6,124.9 157.6,196.2 157.6,200.5 189.4,216.5 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
											209.9,216.4 254.9,238.9 254.9,179.1 240.6,100.9 214,87.7 			"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
											167.2,130 167.2,195.2 188.3,205.7 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="198.7" y1="80.1" x2="204.3" y2="82.8"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="173.3" y1="98.3" x2="174.7" y2="92"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="259.7,89.2 275.4,172.7
											275.4,248.8 264.4,254.3 			"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="264.4" y1="178.2" x2="275.4" y2="172.7"/>
										<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="172.9,132.9 172.9,190.8
											172.9,192.7 171.6,193.3 167.7,195.2 			"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="243.1" y1="50.4" x2="243.1" y2="66.7"/>
										<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="247.9" y1="48" x2="247.9" y2="66.1"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="209.9" y1="210.7" x2="254.9" y2="232.5"/>

											<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="172.9" y1="192.7" x2="187.2" y2="199.6"/>
									</g>
								</g>
							</g>
							<g>
							</g>
							<path fill="none" stroke="#3E95E9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
								M292.5,18.3L261.2,2.7L2.2,132.1l0.2,0.1l-0.2,0.4v7.6l6.2,3.1l-0.1,0.2v7.3l11.8,5.9l-8.7,40.7v71.3v4.3l106.8,53.7l10.9-5.4v-69.6
								l70.5,35.5l10.9-5.4v-55l54.5,27.5l11-5.5v-76.1l-15.7-83.5l-7.9-4c1.2-2,1.8-4.7,1.8-7.8c0-3.6-0.9-6.6-2.4-8.7l7.8-3.9l0,0
								l11.4,6.3l5.2-2V41.9l-0.1-0.3l10.3-5.1v-7.4l0-0.1l5.6-2.8v-7.6l0-0.1L292.5,18.3z M96.9,136.6l-17,8.5l-0.2-0.4l-5.1-2.6L96.9,131
								V136.6z M114.5,127.7l1.6-5.8l-0.2-0.4l17.6-8.8l0,0.1l5.4,2.8L114.5,127.7L114.5,127.7z M173.5,190.8v-57.9l0.1-0.1l2.2,1.1
								l11.9,65.7l-14.2-6.9V190.8z M164.4,97.5l-1.4,6.1l-2.5,1.2l-5.1-2.6l-0.2-0.3l9.1-4.5L164.4,97.5z M183,93.5v-5.4l16.3-8.1l0.1,0.1
								l5.4,2.6L183,93.5z M243.7,63.2L226.2,72l-5.2-2.7l0-0.1l22.8-11.4V63.2z M108.6,305l-82-39.8v-2v-65.8l0.2-0.9l6.7-33.9l6.9-3.4
								l0,0v11.4l14.4,8l5.2-2v-12l8.4-4.2l24.4,12.2v56.6v4.3l13.8,6.9l2,11.1V305z M190,265.5l-62.8-30.6h0l-13.7-73.2l-5.5-2.8v-1
								l4-19.1l37-18.4l0.1,0.2l9.1,4.5v71.1v4.3l31.8,16V265.5z M255.5,232.5l-45-21.8v-5l-15.6-83.5l-8-4.1c1.2-2,1.8-4.7,1.8-7.8
								c0-3.6-0.9-6.8-2.4-8.8l28.2-14.1l0.2,0.3l26.6,13.2l14.3,78.2V232.5z M248.5,60.8v-5.4l8-4l0.1,0.3v5l0,0.1L248.5,60.8z"/>
							</svg>



						 </div>
						 <div class="text-block">
                        <span>Продукция
                              для машино-<br>
                              строения
                        </span>
						 </div>
					 </div>

					 <div class="specialization-block floated-r">
						 <div class="svg-block padding-top-svg">
							 <svg version="1.1" id="manufature-eg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="160px"
						 height="160.2px" viewBox="0 0 402 194.2" enable-background="new 0 0 402 194.2" xml:space="preserve">
					<g id="Layer_1">
						<g>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="0.7,120.7 0.7,168.5 48.7,192.5
								48.7,144.6 		"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="0.7,120.7 144.7,1 192.7,24.9
								48.7,144.6 		"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="288.7,24.9 240.7,1 144.7,1 		"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="192.7,24.9 288.7,24.9
								288.7,72.8 48.7,192.5 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="192.7" y1="24.9" x2="192.7" y2="84"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="144.7" y1="144.6" x2="144.7" y2="64.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="96.7" y1="168.5" x2="96.7" y2="104.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="240.8" y1="53.7" x2="240.8" y2="24.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="96.7" y1="40.9" x2="144.7" y2="64.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="48.7" y1="80.8" x2="96.7" y2="104.7"/>
							<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-miterlimit="10" x1="192.7" y1="1" x2="240.8" y2="24.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="48.7" y1="80.8" x2="48.7" y2="144.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="96.7" y1="40.9" x2="96.7" y2="120.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="144.7" y1="1" x2="144.7" y2="96.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="192.7" y1="1" x2="192.7" y2="72.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="240.7" y1="1" x2="240.7" y2="48.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="0.7" y1="120.7" x2="96.7" y2="104.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="48.7" y1="80.8" x2="144.7" y2="64.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="96.7" y1="40.9" x2="192.7" y2="24.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="144.7" y1="1" x2="240.8" y2="24.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="192.7" y1="1" x2="288.7" y2="24.9"/>
							<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M144.9,72.8"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="48.7" y1="144.6" x2="91" y2="165.6"/>
							<polyline fill="#FFFFFF" points="304.8,97.1 305,33.2 239,53.2 161.1,105 161,168.8 		"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="161,168.8 209,193.1 209,129 161.1,105 		"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="161.1,105 239,53.2 287,77.1 209,129 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="249.3" y1="101.8" x2="209.1" y2="81.1"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.9" y1="43.3" x2="320.7" y2="67.1"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M305.1,97.1"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M353,57.2"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="353,57.2 305,33.2 262.1,46.2 		"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="287,77.1 239,53.2 304.8,33.3
								"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="272.9,177 272.9,145.1 320.7,105.7 368.9,96.9 		"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="337,177 401,145.1 401,113.2 369,97.3 		"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="337,177 304.7,193.2 304.7,161.3 		"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M336.7,134.6"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="272.7,145.4 272.7,177.3 304.7,193.2 		"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M304.8,161.2"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="368.9" y1="118.7" x2="368.9" y2="161"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="139.4" y1="140.6" x2="102" y2="121.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="150.7" y1="99.8" x2="161.1" y2="105"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="209.1,81.1 202.2,77.6 209,129
								"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="91,118 91,165.6 54.2,183.1
								54.2,147.6 		"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="150.5" y1="67.1" x2="188.2" y2="36.1"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="102,107.5 102,159.8 139.8,141.1
								139.8,76.6 		"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="150.5" y1="135.1" x2="160.7" y2="130"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.9,131.6
								6.9,164.6 42.7,182.7 42.7,148.8 		"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="150.5" y1="67.1" x2="150.5" y2="135.1"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="188.2" y1="36.1" x2="188.2" y2="87"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="197.8" y1="29.4" x2="197.8" y2="80.6"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="197.8" y1="29.4" x2="236.3" y2="29.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="236.3" y1="29.4" x2="236.3" y2="54.6"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="245.3" y1="29.4" x2="245.3" y2="51.3"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="245.3" y1="29.4" x2="284.3" y2="29.9"/>

								<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="284.3" y1="29.9" x2="284.3" y2="39.3"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="166,165.3 166,113.3 204,132.5
								204,184.1 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="287" y1="77.1" x2="353" y2="57.2"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="287" y1="77.1" x2="287" y2="133.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="320.7" y1="67.1" x2="320.7" y2="105.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="6.9" y1="131.6" x2="42.7" y2="182.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="6.9" y1="164.6" x2="42.7" y2="148.8"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="214.7,131 214.7,184.1 244.7,168.5 244.7,112.2 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="249.3" y1="101.8" x2="249.3" y2="173"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="161.1" y1="105" x2="249.3" y2="101.8"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="239" y1="53.2" x2="249.3" y2="101.8"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202.2" y1="77.6" x2="287" y2="77.1"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="166" y1="113.3" x2="204" y2="184.1"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="166" y1="165.3" x2="204" y2="132.5"/>

								<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="244.7" y1="168.5" x2="214.7" y2="153.1"/>
							<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="282.2,137.6 282.2,88
								254.5,105.6 254.5,163.6 272.7,154.5 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.9" y1="145.4" x2="254.5" y2="136.3"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="298.4" y1="124.1" x2="291.3" y2="120.7"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="291.7,129.6 291.7,82.1 316.1,74.9 316.1,109.3 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="239" y1="53.2" x2="320.7" y2="67.1"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.9" y1="43.3" x2="287" y2="77.1"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.9" y1="43.3" x2="351.5" y2="57.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="305" y1="33.2" x2="320.7" y2="67.1"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="325.1,105.2 325.1,71.4 347.7,65.8 347.7,100.5 		"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M353,97.5"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M320.7,105.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.9" y1="145.4" x2="304.7" y2="161.3"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="303.9,161.5 352.7,121.4 400.3,113.3 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="320.7" y1="105.7" x2="352.7" y2="121.4"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="276,151.2 276,174.6 300.7,186.7
								300.7,163.6 		"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="276" y1="151.2" x2="300.7" y2="186.7"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="276" y1="174.6" x2="300.7" y2="163.6"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="309,162.8 309,186.3 332.5,174.3
								332.5,144.3 		"/>

								<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="332.5" y1="174.3" x2="309.3" y2="162.5"/>

								<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="320.7" y1="105.7" x2="304.7" y2="161.3"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="320.7" y1="105.7" x2="401" y2="113.2"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="336.7" y1="134.6" x2="336.7" y2="177"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="340.5,137 340.5,170.3
								365.4,157.9 365.4,123.8 352.7,126.6 		"/>
							<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="365.4" y1="158" x2="340.5" y2="145.4"/>
							<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="372.8,122.4 372.8,153.7
								396.9,141.7 396.9,118.4 		"/>

								<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="396.9" y1="141.8" x2="372.8" y2="129.6"/>
						</g>
					</g>
					<g id="Layer_2">
						<g>
							<polygon fill="none" stroke="#3E95E9" stroke-width="4" stroke-linejoin="round" stroke-miterlimit="10" points="304.7,193.2
								401,145.1 401,113.2 369,97.2 353,99.2 353,57.3 304.8,33.3 289,36.7 289,25.4 241,1.5 144.7,1 1,121.2 1,169 48.7,192.5
								161,137.1 161,168.8 209,193 272.2,161.5 272.2,177.5 		"/>
						</g>
					</g>
					</svg>


						 </div>
						 <div class="text-block">
                        <span>Конструкции<br>
                              повышенной<br>
							точности
                        </span>
						 </div>
					 </div>
                 </div>




                </div>
            </div><!--layout-content-->
        </section>
		<section class="equipment-section">
			<div class="layout-container">
			<div class="equipment">
				<div class="equipment-header">
					<h1 style="font-size: 80px;line-height: 85px;">Работаем<br> на собственных мощностях</h1>
					<span>Имеем 2 собственных завода</span>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-1.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>Линии изготовления<br> сварной балки</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-2.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>Машины термического<br> раскроя с чпу</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-3.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>автоматическая<br> и полуавтоматическая сварка</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-4.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>вальцовка сортамента больших сечений</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-5.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>фрезеровка фланцевых соединений</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-6.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>дробе- и пескоструйная обработка поверхности</span>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-4">
							<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-7.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>покарсочное<br>и сушильное оборудование</span>
							</div>
					</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-8.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>Приспособления для упаковки готовой продукции</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="equipment-item">
							<div class="svg-blocks">
								<img src="<?php popel_theme_uri(); ?>/images/swg-devices-9.jpg" alt=""/>
							</div>
							<div class="text-block">
								<span>механообработка</span>
							</div>
						</div>
					</div>
				</div>





			</div>

			</div>

		</section>




        <section class="projects projects-manufacture" id="projects">
            <div class="layout-container">
                <h1>Наши <br> Работы</h1>
                <p>Более <strong>27000</strong> тонн конструкций<br> за <strong>10</strong> лет</p>
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

                <div class="gallery-block manuf-gallery" >
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


        <section>
            <div class="corrosion" id="competence">
                <div class="layout-container">
					<h1 class="corrosion-h1">ЗАЩИТА<br> ОТ КОРРОЗИИ</h1>
					<div class="text-block text-block-top">
						<div class="row" style="margin-top: 80px;
    											margin-bottom: 70px;">
							<div class="col-6">
								<div class="text-itself">
									<h3>Горячее цинкование изделий</h3>
									<span>Толщина покрытия — от 40
									до 200 мкм. Длительность защиты от коррозии — от 20 до 50 лет.
									</span>
								</div>
							</div>
							<div class="col-6" style="text-align: center;">
								<div class="text-itself">
									<h3>Порошковое полимерное покрытие</h3>
									<span>Толщина покрытия: 30 - 250 мкм. Стойкость к температурам: от -60 до +150 °С.  Длительность защиты
									от коррозии — от 20 до 50 лет.
									</span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="text-itself">
								<h3>дуплексное
									покрытие
									«цинк – полимер»</h3>
						<span>Комбинированное покрытие — синтез горячего цинкования и порошковой покраски. Длительность защиты от коррозии — от 20 до 100 и более лет.
						</span>
							</div></div>
							<div class="col-6" style="text-align: center">
								<div class="text-itself">
								<h3>Лакокрасочные покрытия</h3>
						<span>Начиная от простейших - грунт ГФ-021 до многослойных покрытий с классов коррозионных сред С1, С2, С3, С4, С5М по ISO12944
						</span>
							</div></div>
						</div>



					</div>

				</div>
            </div>
        </section>

        <section class="guarantees manufacture-guarantees">
            <div class="guarantees-bg manufacture-guarantees-bg"><div class="waved-bg manufacture-guarantees-waved-bg"></div></div>
            <div class="layout-container">
                <div class="background-lock">
                    <!-- <img src="images/lock.png" alt=""/> -->
                    <div class="svg-cont">
                        <svg version="1.1" id="castle_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px" width="250.5px" height="379.4px" viewBox="228.6 211.4 250.5 379.4" enable-background="new 228.6 211.4 250.5 379.4"
                                         xml:space="preserve">
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" points="278.1,379.8
                                        231.1,402.8 231.1,552.5 306.6,588 476.7,505.5 476.5,355.2 431.5,332 431.2,225.6 408.2,214.2 278.1,278 278.1,379.9 "/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="303.9,588 303.9,438.4 474.6,354.8 "/>
                                    <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="231.1" y1="402.8" x2="303.9" y2="438.4"/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="279.5,379.1 279.5,406.5 300.4,416.6
                                        321.2,406.5 321.2,306.4 411.7,261.3 411.7,362.6 "/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="279.5,279.3 300.4,289.5 300.4,416.6 "/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="388.8,273.5 388.8,354 408.4,363.8
                                        429.7,353.4 429.8,332.4 "/>
                                    <line fill="none" stroke="#3E95E9" stroke-width="5" stroke-miterlimit="10" x1="321.2" y1="358.8" x2="388.8" y2="325.3"/>
                                    <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="300.4" y1="289.5" x2="428.6" y2="226.7"/>
                                    <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="385.9" y1="466.1" x2="403.3" y2="474.8"/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="397.6,477.6
                                        379.6,468.9 385.9,466.1 385.9,453.7 "/>
                                    <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="385.6" y1="500.4" x2="396.8" y2="505.8"/>
                                    <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="379.6,480.8 385.5,483.6 385.8,512.3
                                        397.6,506.6 397.6,477.5 403.3,474.8 403.3,445.1 379.6,456.6 379.6,486.3 385.5,483.6 "/>
                                    </svg>
                    </div>
                </div>
                <h1 style="font-size: 63px; text-align: left; margin-top: 90px; line-height: 80px;">Гарантируем<br> надежность конструкций</h1>
                <ul>
                    <li>Работаем по технологии BIM-проектирования, что обеспечивает идеальную сборку</li>
                    <li>Проводим визуальный и ультразвуковой контроль качества</li>
                    <li>Делаем контрольную сборку для сложных конструкций</li>
					<li>Осуществляем механическую обработку конструкций</li>
					<li>Работаем с лицензионными программами</li>
					<li>Имеем допуск на выполнение работ повышенной опасности</li>
					<li>Имеем сертификаты соответствия продукции</li>
					<li>Проводим аттестацию сварщиков и специалистов контроля качества</li>
                </ul>
            </div>
        </section>


        <section class="work-scheme manufacture-work-scheme" id="work">

            <ul class="rhombus-block">
                <li class="rhombus-item rhombus-1">
                    <div class="rhombus">01</div>
                    <p>Формируем<br> наряд-заказ на производство</p>
                </li>
                <li class="rhombus-item rhombus-2">
                    <div class="rhombus">02</div>
					<p>Комплектуем объект металлопрокатом<br>
						<span></span></p>
                </li>
                <li class="rhombus-item rhombus-3 small-rhombus-wrap">
                    <div class="rhombus small-rhombus"><p class="differ-paragraph">Налаживаем оборудование</p></div>
					<div class="rhombus small-rhombus"><p class="differ-paragraph">Подготавливаем раскрой металлопроката</p></div>
					<div class="rhombus small-rhombus"><p class="differ-paragraph">Производим заготовку</p></div>

                </li>
                <li class="rhombus-item rhombus-4 small-rhombus-wrap">
					<div class="rhombus small-rhombus"><p class="differ-paragraph">Собираем  и свариваем</p></div>
					<div class="rhombus small-rhombus"><p class="differ-paragraph">Красим</p></div>
					<div class="rhombus small-rhombus"><p class="differ-paragraph">Маркируем и упаковываем</p></div>

                </li>
                <li class="rhombus-item rhombus-5">
                    <div class="rhombus">03</div>
                    <p>Отгружаем заказчику</p>
                </li>
            </ul>

            <div class="dashed-blue-line">
                <div class="scheme-bg-content"></div>
            </div>


            <div class="layout-container">
                <h1>схема<br>
                    работы</h1>

            </div>
        </section>


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
                <form action="" method="POST" class="valid-form">
                    <div class="form-block">
                        <div class="form-group valid-group half-input half">
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="name" id="name-label">Контактное лицо</label>
                        </div>
                        <div class="form-group valid-group half-input half">
                            <input type="text" name="email" id="email"  class="form-control">
                            <label for="email" id="email-label" >Телефон или e-mail</label>
                        </div>
                        <div class="form-group valid-group full">
                            <input type="text" name="product" id="product" class="form-control" >
                            <label for="product">Опишите ваш проект</label>
                        </div>

                    </div>
					<div class="file-input-cont">
						<input type="file" class="file-input" id="file-drop"/>
						<label for="file-drop" class="file-label">
							<div class="text-container">
								<span>Перетащите сюда документ или нажмите на иконку загрузки</span><br><span>Максимальный размер файла:5mb</span><br><span> Формат:doc, pdf, docx, txt</span>
							</div>
							<div class="svg-container">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-130.1 461.6 132.5 77.9" enable-background="new -130.1 461.6 132.5 77.9" xml:space="preserve">
<g>
	<g id="Layer_5_2_">
		<g>
			<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-88.8,514.1 -127.9,494.6 -63.9,462.7
				0.1,494.6 -39,514.1 			"/>
		</g>
	</g>
	<g>
		<g id="Layer_5_3_">
			<g>
				<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-38.5,496.8 -63.9,484.1 -89.3,496.8
									"/>
			</g>
		</g>
		<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="-63.9" y1="539.5" x2="-63.9" y2="484"/>
	</g>
</g>
</svg>
							</div></label>
					</div>

					<div class="svg-container-filled">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="-130.1 461.6 132.5 77.9" enable-background="new -130.1 461.6 132.5 77.9" xml:space="preserve">
						<g>
							<g id="Layer_5_2_">
								<g>
									<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-88.8,514.1 -127.9,494.6 -63.9,462.7
										0.1,494.6 -39,514.1 			"/>
								</g>
							</g>
							<g>
								<g id="Layer_5_3_">
									<g>
										<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-38.5,496.8 -63.9,484.1 -89.3,496.8
															"/>
									</g>
								</g>
								<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" x1="-63.9" y1="539.5" x2="-63.9" y2="484"/>
							</g>
						</g>
						</svg>
					</div>
                </form>
				<a class="button-cont" href="#">
					<div class="contact-us"><span>Отправить</span></div>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="154.128px" height="44.833px" viewBox="0 0 154.128 44.833" enable-background="new 0 0 154.128 44.833" xml:space="preserve">
							<rect x="10.125" y="0.497" fill="none" stroke="#FFFFFF" stroke-width="0.9939" stroke-miterlimit="10" width="143.5" height="38.193"></rect>
							<polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="144.557,44.315 0.5,44.315 0.5,5.648 "></polyline>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.5" y1="44.258" x2="10.125" y2="38.69"></line>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="0.243" y1="6.016" x2="9.868" y2="0.447"></line>
							<line fill="none" stroke="#FFFFFF" stroke-width="0.9566" stroke-miterlimit="10" x1="144.349" y1="44.42" x2="153.885" y2="38.815"></line>
							</svg>
				</a>
            </div>
			<div class="footer-footer">
				<div class="layout-container">
					<div class="swg-2015">
						<span class="year">2015 &copy;</span>
						<span>STEEL WORK GROUP</span>
					</div>
					<div class="popel-agency">
						<span class="development">Разработка сайта &ensp;—  </span>
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
					</div>
				</div>
			</div>
        </section>






    </div><!--wrapper-->
</div><!--layout-container-->



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
    obt4 = new Vivus('castle_1', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt5 = new Vivus('manufature-f', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt6 = new Vivus('manufature-s', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt7 = new Vivus('manufature-t', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt8 = new Vivus('manufature-fr', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt10 = new Vivus('manufature-fv', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt11 = new Vivus('manufature-sx', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt12 = new Vivus('manufature-sv', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt13 = new Vivus('manufature-eg', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt9 = new Vivus('corrosion-sv', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});




</script>

</body>
</html>
