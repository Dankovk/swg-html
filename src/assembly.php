<?php
/*
Template Name: Template for Assembly Page
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
            <li ><a href="http://swg.popel-studio.com/proektirovanie/">Проектирование</a></li>
            <li><a href="http://swg.popel-studio.com/izgotovlenie/">Изготовление</a></li>
            <li class="active"><a href="href=http://swg.popel-studio.com/montazh/">Монтаж</a></li>
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

<div class="layout-content assembly-page">
    <div class="content-wrapper">

        <section class="head-block montage-head-block" id="head-block">
			<!--<img src="images/montage_testosteron.jpg" alt="" data-0="opacity:1; transform:translateY(0%)"-->
				 <!--data-100p="opacity:0;transform:translateY(60%)"/>-->
			<div class="manufacture-head-bg assembly-head-bg" data-0="opacity:1; transform:translate3d(0,0%,0)"
				 data-100p="opacity:0;transform:translate3d(0,30%,0)"></div>
            <div class="layout-container">
                <div class="head-content assembly-head-content" data-0="opacity:1; transform:translate3d(0,0%,0)"
					 data-100p="opacity:0;transform:translate3d(0,30%,0)">
                    <h2>Монтируем металлоконструкции любой сложности<br> в стандартных и стесненных условиях</h2>
                </div>

            </div><!--layout-content-->
        </section>
		<div class="arrow-bottom"><div class="arrow-down"></div></div>
		<div id="navbar">
			<ul class="nav scroll-spy affix">
				<li class=""><a href="#head-block" class="js-scroll"></a></li>

				<li class="active"><a href="#scope-block" class="js-scroll"></a></li>


				<li><a href="#equipment" class="js-scroll"></a></li>


				<li><a href="#work-in" class="js-scroll"></a></li>

				<li><a href="#projects" class="js-scroll"></a></li>


				<li><a href="#application-section" class="js-scroll"></a></li>
			</ul>
		</div>
        <section class="scope-block" id="scope-block">

            <div class="line right-f"></div>
            <div class="line right-s"></div>
            <div class="line left-f"></div>
            <div class="mask mask-f"></div>
            <div class="mask mask-s"></div>
            <div class="layout-container">
                <div class="scope-content">
                    <h1 class="padding-less" style="font-size: 80px">Специализируемся<br>на монтаже</h1>
                    <div class="specialization-cont assembly-spec">
                        <ul>
                        	<li>
                        		<div class="svg-cont">

									<svg version="1.1" id="kran" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="0 0 308 418.7" enable-background="new 0 0 308 418.7" xml:space="preserve">
<g>
	<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="66,241.3
		66,257.3 34,273.2 2,257.3 2,241.3 34,225.3 	"/>

		<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="34" y1="241.3" x2="34" y2="182.8"/>
	<g>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M258,2l48,23.9v47.9
			l-40,19.9L249.6,86l-23.1,12v271.1l31.5,15.7l-64,31.9l-64-31.9l32.1-16V245.4l-40.1-20l0.1-70.7l31.9-16l7.8,3.7l0.2-12.8l-64,32
			L2,193.4v-31.9l64-47.9l152-75.7v-16L258,2"/>
	</g>
</g>
<g>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="66,113.6 98,129.6 98,161.5
		66,145.5 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,193.4 98,161.5 98,129.6 2,161.5
			"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,193.4 66,145.5 66,113.6 2,161.5
			"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="98,129.6 258,49.9 258,81.8
		98,161.5 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="66,113.7 226,33.9 258,49.9 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="34" y1="137.6" x2="34" y2="169.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="50" y1="145.5" x2="50" y2="177.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="50" y1="177.5" x2="34" y2="169.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="34" y1="137.6" x2="50" y2="145.5"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="162.1,368.8 130,384.8 194,416.7
		258,384.8 226.5,369.1 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194.2,113.6 226.2,97.7
		226.2,384.9 194.2,400.9 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194,237.9 194.2,400.9 162,384.9
		162,245.4 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="161.8,142.4 162,129.6 194,113.7
		194,157.9 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194,352.9 194.2,400.9
		162.1,384.9 162.1,337.1 194.2,353.1 	"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="194.3,352.9 194.1,400.9
		226.2,384.9 226.2,337.1 194.1,353.1 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194" y1="352.9" x2="226.2" y2="305.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.2" y1="305.3" x2="194.1" y2="289.2"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="289.2" x2="226.2" y2="241.4"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.2" y1="241.4" x2="202.1" y2="228.9"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202.1" y1="213" x2="226.5" y2="177.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.5" y1="177.3" x2="202" y2="164.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="195.5" y1="158.6" x2="226.2" y2="113.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="129.6" x2="226.5" y2="145.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.5" y1="145.8" x2="202" y2="181.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202.1" y1="197.5" x2="226.5" y2="209.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.5" y1="209.7" x2="194" y2="257.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194" y1="257.3" x2="226" y2="273.2"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226" y1="273.2" x2="194.2" y2="322.1"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.2" y1="322.1" x2="226.2" y2="337.1"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.2" y1="322.1" x2="226.2" y2="305.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="289.2" x2="226" y2="273.2"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194" y1="257.3" x2="226.2" y2="241.4"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202" y1="221" x2="226.5" y2="209.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202" y1="189.5" x2="226.5" y2="177.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="197" y1="159.4" x2="226.5" y2="145.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="129.6" x2="226.2" y2="113.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="129.6" x2="178.2" y2="121.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="202.1" y1="228.9" x2="202.1" y2="228.9"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194" y1="257.3" x2="174" y2="247.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.1" y1="289.2" x2="162.5" y2="273.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194.2" y1="322.1" x2="162.5" y2="305.4"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="98" y1="161.5" x2="114.2" y2="121.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="114.2" y1="121.7" x2="130" y2="145.6"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="130" y1="145.6" x2="146" y2="105.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="146" y1="105.7" x2="162" y2="129.6"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="162" y1="129.6" x2="178.3" y2="89.6"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="178.3" y1="89.6" x2="194" y2="113.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="194" y1="113.7" x2="210.3" y2="73.9"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="210.3" y1="73.9" x2="226.5" y2="98"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.5" y1="98" x2="242" y2="57.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242" y1="57.8" x2="258" y2="81.8"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="66" y1="140.2" x2="66" y2="172.1"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="66" y1="172.1" x2="82" y2="134.9"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="82" y1="134.9" x2="98" y2="161.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="50" y1="145.5" x2="66" y2="172.1"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="82" y1="134.9" x2="55.3" y2="121.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="82" y1="105.7" x2="114.2" y2="121.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113.8" y1="89.9" x2="146" y2="105.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="145.7" y1="73.9" x2="178.3" y2="89.6"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242" y1="57.8" x2="210.3" y2="42"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="249.6,86 266,93.7 266,45.9
		218,21.9 218,37.9 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="306,73.8 306,25.9 266,45.9
		266,93.7 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="218,21.9 258,2 306,25.9 266,45.9
		"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="177.9" y1="57.8" x2="210.3" y2="73.9"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="202,161.8 170,177.5 170,249.4
		202.1,234 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="170,249.4 122,225.4 122,153.6
		170,177.5 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="122,153.6 154,138.6 202,161.8
		170,177.5 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="129.9,167.4 130,209.4 161.8,225.5
		161.8,182.4 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="177.9,182.1 177.9,225.5 194,217.4
		194,173.5 	"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="34" y1="241.3" x2="34" y2="182.8"/>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="2,241.3 34,257.3 34,273.2
			2,257.3 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="66,241.3 66,257.3 34,273.2
			34,257.3 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="34,225.3 66,241.3 34,257.3
			2,241.3 		"/>
	</g>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="18,241.3 34,249.3 50,241.3
		34,233.3 	"/>
</g>
</svg>

								</div>
                        		<span>ВЫСОТНЫХ<br> КОНСТРУКЦИЙ</span>
                        	</li>
                        	<li>
                        		<div class="svg-cont">
									<svg version="1.1" id="bridge" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="200px" height="200px" viewBox="0 0 434.9 250.1" enable-background="new 0 0 434.9 250.1" xml:space="preserve">
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
							<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" d="M432.7,72.2C421,60.6,405.9,50.9,389,43.5h-0.1
								c-28.1-14.5-62.6-22.1-95.6-19.6l0,0c-3-1.5-6.1-3-9.2-4.4l0,0l0,0c-0.7-0.3-1.4-0.7-2.1-1c-14.2-7.1-30.1-12.2-46.5-15
								c-27.1-4.2-42.4,3.1-43.3,3.3c-12.7,4.9-30.8,14.3-47.9,33.4c0,0,0,0,0,0.1c-0.4,0.6-1.3,1.5-2.5,2.9c-0.1,0.1-0.2,0.3-0.3,0.4
								c-7.4,8.3-26,30.7-38.8,76.6l0,0C50.8,155,2,189.9,2,189.9v9.5l9.5,4.7h0.1c2.1-1.7,4.2-3.4,6.3-5.1l68.2,33.4l3.7,2
								c0,2.9,0.1,5.8,0.2,8.8l9.3,4.7l7.2-4.1c-3-47.1-0.4-85,5.8-115.3l0.6,0.1c35-24.3,67.1-45.1,89.7-59.3c0.1-0.1,0.9-0.6,2.1-1.3
								c0,0,0,0,0.1,0c43-21.4,65.9-26.3,72.1-27.6c1-0.2,1.9-0.4,2.9-0.7c4.8-1.2,9.6-2.2,14.5-2.9c17.9,14.5,37.6,39.2,49.4,83.6l7.9,4.9
								l7.2-3.5c-0.9-4.4-2.1-8.8-3.4-12.9l61.8-31.3c3.3,3.6,6.4,7.5,9.3,11.8l6.2-3.4L432.7,72.2z"/>
							</svg>



								</div>
                        		<span>ПРОСТРАНСТВЕННЫХ<br> СООРУЖЕНИЙ</span>
                        	</li>
                        	<li>
                        		<div class="svg-cont">
															<svg version="1.1" id="special" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="200px" height="200px" viewBox="0 0 434.1 257.3" enable-background="new 0 0 434.1 257.3" xml:space="preserve">
						<g>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="321,80.7 321,33 129,128.7 129,224.4 193.1,192.5 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="65,256.3 129,224.4 129,128.7 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="1,224.4 65,192.5 65,96.8 	"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="321,33 257,1 257.1,1 65,96.8 65,192.5 	"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="96.8" x2="129" y2="128.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="192.5" x2="129" y2="224.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="256.3" x2="1" y2="224.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="257.1" y1="96.7" x2="272.9" y2="104.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="129" y1="128.7" x2="193.1" y2="192.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="225.2" y1="128.4" x2="257" y2="64.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="257" y1="64.9" x2="288.9" y2="96.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="257" y1="64.9" x2="257" y2="112.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193.1" y1="192.6" x2="193.1" y2="96.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193.1" y1="96.7" x2="129.1" y2="64.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="257" y1="64.9" x2="193" y2="33"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193.1" y1="192.6" x2="129.1" y2="160.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="208.8" y1="136.6" x2="193" y2="128.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="129" y1="128.7" x2="129.1" y2="160.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193.1" y1="96.7" x2="193" y2="128.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="96.8" x2="193.1" y2="96.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="129.1" y1="64.9" x2="257" y2="64.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193" y1="33" x2="321" y2="33"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="192.5" x2="257.1" y2="96.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="129.1" y1="64.9" x2="129" y2="128.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="257.1" y1="1" x2="257.1" y2="64.9"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193" y1="32.9" x2="193" y2="96.8"/>
						</g>
						<g>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="336.9,136.6 337,72.7 193.1,144.4 193,208.3 289.3,160.5
								"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="192.9,208.4 192.9,144.5 336.9,72.7 336.9,136.6 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="193,208.3 241,232.6 241,168.4 193.1,144.4 	"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="308.1,198.9 241,232.6 241,168.4 337,120.5 337,168.3 	"/>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="193.1,144.4 289,96.6 337,120.5 241,168.4 	"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="241" y1="232.6" x2="289.2" y2="144.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="288.8" y1="208.4" x2="337" y2="120.5"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.2" y1="144.6" x2="289.2" y2="208.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.2" y1="144.6" x2="241.1" y2="120.5"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="241" y1="168.4" x2="241.1" y2="120.5"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.2" y1="144.6" x2="289" y2="96.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.3" y1="160.5" x2="326.5" y2="179.1"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="241" y1="184.5" x2="288.8" y2="208.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="241" y1="184.5" x2="289" y2="96.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.3" y1="160.5" x2="337.2" y2="136.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337" y1="72.7" x2="337" y2="136.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289.3" y1="160.5" x2="337" y2="72.7"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337.2" y1="136.6" x2="385" y2="160.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337" y1="120.5" x2="385" y2="96.6"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337" y1="120.5" x2="337" y2="184.4"/>
							<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="385,144.8 385,96.6 337,72.7 289,96.6 	"/>
							<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M337,184.4"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="289" y1="96.6" x2="337" y2="120.5"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="385" y1="96.6" x2="348.8" y2="162.8"/>
							<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193" y1="208.3" x2="241.1" y2="120.5"/>
						</g>
						<g>
							<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="401,136.4 401,168.3 337,200.2 305,232.1 305,200.2
								337,168.3 	"/>
							<g>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="401.1" y1="136.7" x2="401.1" y2="168.7"/>
								<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="336.9,168.8 336.9,200.7 304.9,232.6 304.9,200.7 		"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="369.1,184.6 369.1,216.5 433.1,184.5 433.1,152.7
									401.1,136.7 337.1,168.7 369.1,184.6 401,168.7 432.9,152.8 		"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337.1" y1="200.6" x2="369.1" y2="184.6"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337.1" y1="200.6" x2="401.3" y2="200.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="184.6" x2="433.1" y2="184.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="401.3" y1="168.7" x2="433.1" y2="184.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="184.6" x2="401.3" y2="200.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337.1" y1="168.7" x2="337.1" y2="200.6"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="216.5" x2="369.1" y2="184.6"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="337.1" y1="200.6" x2="304.9" y2="232.5"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="369.1,216.5 304.9,232.5 304.9,200.6 337.1,168.7 		"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="184.6" x2="304.9" y2="200.6"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="336.9" y1="200.7" x2="369.1" y2="216.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="153.5" x2="369.1" y2="184.6"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="401" y1="168.7" x2="401" y2="200.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="401" y1="168.7" x2="369.1" y2="153.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="369.1" y1="153.5" x2="431.6" y2="153.5"/>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="336.9" y1="168.8" x2="401" y2="168.7"/>
							</g>
						</g>
						<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="65" y1="96.8" x2="129.1" y2="160.6"/>
						<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="129.1" y1="160.6" x2="193" y2="33"/>
						<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="193" y1="33" x2="257.1" y2="96.7"/>
						<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M433.3,151.7l-31.9-15.9
							c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.1-0.5,0l-15.2,7.6V96.1c0-0.2-0.1-0.4-0.3-0.4l-48-23.9c-0.1-0.1-0.3-0.1-0.4,0l-0.1,0.1
							c0,0,0,0,0,0l-15.2,7.6l0-46.9c0-0.2-0.1-0.3-0.2-0.4c0,0,0,0,0,0l0,0L257.3,0.1l-0.1-0.1C257.2,0,257.1,0,257,0l0,0.2L256.9,0
							c0,0-0.1,0-0.1,0l-64,31.9l0.2,0.4v0l0,0l-0.2-0.4l-128,63.8c-0.1,0-0.2,0.1-0.2,0.2l0,0l-64,127.6c-0.1,0.2-0.1,0.4,0.1,0.6
							c0,0,0.1,0.1,0.1,0.1l0,0l64,31.9l0,0c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.2,0,0.2-0.1l64-31.9l63.2-31.5v15c0,0.2,0.1,0.3,0.2,0.4
							c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0l47.8,24.2l0,0c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.2,0,0.2-0.1l63.1-31.7v31.2v0.1
							c0,0.2,0.1,0.4,0.3,0.5c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1l0.1-0.1l63.9-15.9l-0.1-0.5l0.2,0.4l64-32c0.2-0.1,0.3-0.3,0.3-0.4
							v-31.8C433.6,152,433.5,151.8,433.3,151.7z M193,32.4L193,32.4L193,32.4L193,32.4L193,32.4L193,32.4L193,32.4z"/>
						</svg>


								</div>
                        		<span>УНИКАЛЬНЫХ И СЛОЖНЫХ<br> КОНСТРУКЦИЙ</span>
                        	</li>
                        	<!--<li>-->
                        		<!--<div class="svg-cont">-->
                                    <!--<svg version="1.1" id="metal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
	 <!--width="200px" height="200px" viewBox="0 0 305.4 345.1" enable-background="new 0 0 305.4 345.1" xml:space="preserve">-->
<!--<g>-->
	<!--<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="144.4,72.3 144.4,32.4 240.4,80.3-->
		<!--240.4,335.5 200.4,315.6 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="304.4,48.4 240.4,80.3 240.4,335.5-->
		<!--304.4,303.6 	"/>-->
	<!--<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="144.4,32.4 208.4,0.5 304.4,48.4-->
		<!--"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="160.4,32.4 208.4,8.5 288.4,48.4 240.4,72.3 	"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="208.4" y1="8.5" x2="208.4" y2="56.3"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="272.1" y1="64.5" x2="272.1" y2="319.6"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="264.4" y1="60.3" x2="272.1" y2="64.5"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="176.4" y1="16.5" x2="184.4" y2="20.4"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="184.4" y1="20.4" x2="184.4" y2="44.4"/>-->
	<!--<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="96.4,120.3 96.4,56.3 192.4,104.2-->
		<!--192.4,343.5 96.4,295.7 96.4,282.7 	"/>-->
	<!--<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="96.4" y1="263.4" x2="96.4" y2="139.7"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="192.4,343.5 200.4,339.5-->
		<!--200.4,100.2 192.4,104.2 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="96.4,56.3 104.4,52.4 200.4,100.2-->
		<!--192.4,104.2 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.5,140.8 20.5,146.8 28.5,158.8-->
		<!--28.5,174.7 20.5,178.7 8.5,172.8 0.5,160.8 0.5,144.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="28.5,174.7 32.8,172.6 32.8,156.7-->
		<!--28.5,158.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="24.6,144.8 32.8,156.7 28.5,158.8-->
		<!--20.5,146.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.5,140.8 12.5,138.8 24.6,144.8-->
		<!--20.5,146.8 	"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M57,151.5c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M32.8,163.6l27.5-13.7-->
		<!--c5.8-3.3,4.2-11.1,2.6-14.3c-2.4-5.1-6.6-8.5-12-7l-29.5,14.6"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M53.5,153.2c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M49.8,155.1c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M46.2,156.8c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M42.5,158.7c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M29.4,139.2c5.4-1.5,9.6,1.9,12,7-->
		<!--c1.5,3.3,3.1,11-2.6,14.3"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.5,284.9 20.5,290.8 28.5,302.8-->
		<!--28.5,318.8 20.5,322.7 8.5,316.8 0.5,304.8 0.5,288.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="28.5,318.8 32.8,316.6 32.8,300.7-->
		<!--28.5,302.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="24.6,288.8 32.8,300.7 28.5,302.8-->
		<!--20.5,290.8 	"/>-->
	<!--<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.5,284.9 12.5,282.9 24.6,288.8-->
		<!--20.5,290.8 	"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M57,295.5c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M32.8,307.6l27.5-13.7-->
		<!--c5.8-3.3,4.2-11.1,2.6-14.3c-2.4-5.1-6.6-8.5-12-7l-29.5,14.6"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M53.5,297.2c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M49.8,299.1c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M46.2,300.9c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M42.5,302.7c5.8-3.3,4.2-11.1,2.6-14.3-->
		<!--c-2.4-5.1-6.6-8.5-12-7"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M29.4,283.2c5.4-1.5,9.6,1.9,12,7-->
		<!--c1.5,3.3,3.1,11-2.6,14.3"/>-->
	<!--<g>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M96.1,134.8c-0.6,8.5-6.9,11.6-13.9,6.7c-7-4.8-12.3-15.5-11.7-24-->
			<!--c0.6-8.5,6.9-11.6,13.9-6.7C91.4,115.5,96.7,126.3,96.1,134.8z"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M76,108.7c2.6-2.8,6.7-2.9,11.3,0.1c7,4.8,12.3,15.5,11.7,24-->
			<!--c-0.3,4.7-2.5,7.8-5.6,8.6"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M91.7,131.7c-0.4,5.6-4.5,7.6-9.2,4.4c-4.7-3.1-8.2-10.2-7.8-15.8-->
			<!--s4.5-7.5,9.2-4.4C88.6,119.1,92.1,126.1,91.7,131.7z"/>-->
		<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="74.1" y1="109.6" x2="77.8" y2="107.4"/>-->
		<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="92" y1="142.8" x2="95.8" y2="140.3"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M90.4,135.8c-1.5,0.1-3.1-0.3-4.8-1.5c-4.7-3.1-8.2-10.2-7.8-15.8-->
			<!--c0-1.8,0.6-3.1,1.3-4.1"/>-->
	<!--</g>-->
	<!--<g>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M96.1,277.8c-0.6,8.5-6.9,11.6-13.9,6.7c-7-4.8-12.3-15.5-11.7-24-->
			<!--c0.6-8.5,6.9-11.6,13.9-6.7C91.4,258.5,96.7,269.3,96.1,277.8z"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M76,251.7c2.6-2.8,6.7-2.9,11.3,0.1c7,4.8,12.3,15.5,11.7,24-->
			<!--c-0.3,4.7-2.5,7.8-5.6,8.6"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M91.7,274.7c-0.4,5.6-4.5,7.6-9.2,4.4c-4.7-3.1-8.2-10.2-7.8-15.8-->
			<!--c0.4-5.6,4.5-7.5,9.2-4.4C88.6,262.1,92.1,269.1,91.7,274.7z"/>-->
		<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="74.1" y1="252.6" x2="77.8" y2="250.4"/>-->
		<!--<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="92" y1="285.8" x2="95.8" y2="283.3"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M90.4,278.8c-1.5,0.1-3.1-0.3-4.8-1.5c-4.7-3.1-8.2-10.2-7.8-15.8-->
			<!--c0-1.8,0.6-3.1,1.3-4.1"/>-->
	<!--</g>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M129.7,255.1c-0.3,5.5-4.5,7.6-9.2,4.4c-4.7-3.2-8.1-10.4-7.7-16-->
		<!--s4.5-7.6,9.2-4.4C126.6,242.4,130.2,249.6,129.7,255.1z"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M128.4,258.7c-0.8-0.2-1.5-0.7-2.3-1.2c-4.7-3.2-8.1-10.4-7.7-16-->
		<!--c0-1.4,0.4-2.6,1-3.6"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M129.7,111.1c-0.3,5.5-4.5,7.6-9.2,4.4c-4.7-3.2-8.1-10.4-7.7-16-->
		<!--c0.3-5.5,4.5-7.6,9.2-4.4C126.6,98.4,130.2,105.6,129.7,111.1z"/>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M128.4,114.7c-0.8-0.2-1.5-0.7-2.3-1.2c-4.7-3.2-8.1-10.4-7.7-16-->
		<!--c0-1.4,0.4-2.6,1-3.6"/>-->
	<!--<g>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M161.7,80.9c-0.8-2.2-1.1-4.3-1-6.4c0.3-5.5,4.5-7.6,9.2-4.4-->
			<!--c4.7,3.2,8.2,10.4,7.7,16c-0.1,0.9-0.2,1.7-0.5,2.4"/>-->
		<!--<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M170.9,85.5c-2.8-3.6-4.7-8.8-4.5-12.9c0-1.4,0.4-2.6,1-3.6"/>-->
	<!--</g>-->
<!--</g>-->
<!--<g>-->
	<!--<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M144.4,33v39.9l-40-19.9-->
		<!--l-8,4v64v0c-2.1-4.7-5.4-8.9-9.1-11.5c-4.5-3.1-8.6-2.9-11.3-0.1l0,0c-3.1,0.9-5.2,3.9-5.6,8.7c-0.6,8.5,4.7,19.2,11.7,24-->
		<!--c4.7,3.2,9,2.9,11.5-0.1c1-0.3,1.9-0.9,2.7-1.7V264c-2.1-4.7-5.4-8.9-9.1-11.5c-4.5-3.1-8.6-2.9-11.3-0.1l0,0-->
		<!--c-3.1,0.9-5.2,3.9-5.6,8.7c-0.6,8.5,4.7,19.2,11.7,24c4.7,3.2,9,2.9,11.5-0.1c1-0.3,1.9-0.9,2.7-1.7v13l96,47.9l8-4v-23.9l40,19.9-->
		<!--l64-31.9V49"/>-->
	<!--<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="304.4,49-->
		<!--208.4,1.1 144.4,33 	"/>-->
<!--</g>-->
<!--</svg>-->

                                <!--</div>-->
                        		<!--<span>МОНТАЖ ТЕХНОЛОГИЧЕСКОГО ОБОРУДОВАНИЯ</span>-->
                        	<!--</li>-->
							<li>
								<div class="svg-cont">
									<svg version="1.1" id="unique-special" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200.2px" height="200.3px" viewBox="0 0 452.2 460.3" enable-background="new 0 0 452.2 460.3" xml:space="preserve">
<path fill="none" stroke="#3E95E9" stroke-width="1.99" stroke-linejoin="round" stroke-miterlimit="10" d="M242.8,26.9
	c0-4.1-8.5-7.3-17.7-7.3s-17.7,3.3-17.7,7.3v0.2V33l-0.3,0.2c-8.1,2.4-13.4,6.5-13.4,11.1v0.4v8.6v1.5c-64.5,14.5-112,72.2-112,141
	c0,22.4,5.1,43.7,14.2,62.6L2,304.7v41.6l223.7,112l224.5-112v-41.1l-94-46.8c9.1-18.9,14.2-40.2,14.2-62.6
	c0-69.7-48.2-127.8-113.9-141.4l-0.1-1.1v-7v-2c0-4.7-5.5-8.8-13.7-11.2v-1v-4.8L242.8,26.9L242.8,26.9z"/>
<g>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M226.1,352.1"/>
	<g>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="95.3,258.7 2,305.2 226.1,417
			450.2,305.2 356.3,258.4 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="207.9" y1="339.1" x2="161.1" y2="362.4"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="291.5" y1="362.6" x2="244.3" y2="339.1"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="450.2,305.2 450.2,346.3
			226.1,458 2,346.3 2,305.2 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="346.6,275.3 406.6,305.2
			226.1,395.2 45.6,305.2 105.6,275.3 		"/>
	</g>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="226.1" y1="417" x2="226.1" y2="458"/>
	<circle fill="none" stroke="#3E95E9" stroke-miterlimit="10" cx="226.1" cy="195.8" r="144.4"/>
	<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="225.1" cy="73.3" rx="30.4" ry="13.4"/>
	<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="225.1" cy="73.3" rx="30.4" ry="13.4"/>

		<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="226.1" cy="222.8" rx="141.6" ry="62.4"/>

		<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="226.1" cy="174.8" rx="141.7" ry="62.4"/>

		<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="226.1" cy="270.9" rx="118.1" ry="52.1"/>

		<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="226.1" cy="133.8" rx="126.7" ry="55.9"/>

		<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="226.1" cy="103.8" rx="101.2" ry="44.6"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M255.5,54.3c23.4,4.9,39.5,15.3,39.5,27.5
		c0,16.8-30.9,30.4-69,30.4s-69-13.6-69-30.4c0-11.6,14.7-21.6,36.3-26.8"/>
	<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M202.6,53.3"/>
	<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="225.1" cy="41.9" rx="17.1" ry="7.5"/>
	<ellipse fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" cx="225.1" cy="26.8" rx="17.1" ry="7.5"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="208" y1="26.8" x2="208" y2="41.9"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="242.2" y1="25.6" x2="242.2" y2="41.9"/>
	<g>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
			M154.6,280.1c-13.2-3.4-24.9-8.6-34.8-13.6l-2.2,1.1l-5.8,3v8.4v0.7c8.2,6.4,19.1,11.1,32,15.7v-10c-12.5-4.1-23.3-9-32-14.7"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="143.7,295.4
			143.7,285.4 154.6,280.1 154.6,290.7 		"/>
	</g>
	<g>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
			M297.7,277.1c13.2-3.4,24.9-8.6,34.8-13.6l2.2,1.1l5.8,3v8.4v0.7c-8.2,6.4-19.1,11.1-32,15.7v-10c12.5-4.1,23.3-9,32-14.7"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="308.6,292.4
			308.6,282.4 297.7,277.1 297.7,287.7 		"/>
	</g>
	<g>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M242.2,285.8l15.5,7.7
			v11.8v0.1c-10.1,1.1-20.7,1.7-31.6,1.7c-11.2,0-22-0.6-32.4-1.8v-11.8l15.5-7.7v0.1c5.5,0.3,11.2,0.4,16.9,0.4
			c5.5,0,10.8-0.1,16.1-0.4l15.5,7.6c-10.2,1.1-20.7,1.6-31.6,1.6c-11.2,0-22-0.6-32.4-1.7"/>
	</g>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M230.1,86.5c14.8,43.4,65,200.2,19.8,252.3"
		/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M303.8,317.7c0,0,22-15.7,22-50
		c1.7-97.1-58.1-159.1-86-182.7"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M221.6,87.1
		c-13.9,45.1-56.8,196.4-23.3,250.7"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M140.2,311.9c-6.5-7-16.7-21.8-16.7-45.1
		c-8.4-88,58.5-155.8,88.3-181.4"/>
	<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M253.4,78.2c25.2,9.6,63.5,29.3,89.7,66.4
		c36.7,49.4,19,100.4,19,100.4"/>
	<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M197.7,78.9c-25.3,9.3-63.8,28.6-89.9,65.7
		c-23,30.9-24.7,62.4-22.7,81.6"/>
	<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M274.1,60c0,0-13-1-26,4.6"/>
	<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M178.4,59.9c0,0,7.4-1.6,23.3,4.8"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M128.6,89.3c0,0,33.4-20.5,66.8-19"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M322.4,89.3c0,0-33.4-20.5-66.8-19"/>

		<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="225.1" y1="25.8" x2="225.1" y2="1"/>
	<path fill="none" stroke="#3E95E9" stroke-width="1.99" stroke-linejoin="round" stroke-miterlimit="10" d="M256.6,54.4l-0.1-1.1
		v-7v-2c0-4.7-5.6-8.8-14.2-11.2v-1v-4.8v-0.4c0-4.1-7.7-7.3-17.3-7.3s-17.3,3.3-17.3,7.3v0.2V33l-0.3,0.2
		c-8.4,2.4-13.9,6.5-13.9,11.1v0.4v8.6v1.5"/>
	<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M256.5,72.1
		c0,7.6-14.1,13.7-31.5,13.7s-31.5-6.1-31.5-13.7"/>
	<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M256.5,43.5
		c0,7.7-14.1,13.9-31.5,13.9s-31.5-6.2-31.5-13.9"/>

		<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="193.5" y1="54.9" x2="193.5" y2="72.3"/>

		<line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="256.5" y1="54.3" x2="256.5" y2="72.8"/>
</g>
</svg>



								</div>
								<span>МОНТАЖ ТЕХНОЛОГИЧЕСКОГО ОБОРУДОВАНИЯ</span>
							</li>
                        </ul>
                    </div>

                </div>
            </div><!--layout-content-->
        </section>
        <section class="equipment-section" id="equipment">
            <div class="layout-container">
                <div class="equipment professional">
                    <div class="equipment-header">
                        <h1 style="font-size: 80px;
    line-height: 90px;">Гарантируем качественный монтаж</h1>
                    </div>
                    <ul>
                    	<li>
                    		<div class="svg-cont">


								 <svg version="1.1" id="worker" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="120px" height="156.4px" viewBox="0 0 143.2 176.4" enable-background="new 0 0 143.2 176.4" xml:space="preserve">
<g>
	<g>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="107" y1="175.1" x2="107" y2="157.7"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M1.9,105.2c17.5-8.7,32.1-6.7,52.6,1.7
			c20.6,8.5,52.6,32.3,52.6,50.7"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M96.5,92.7c20.1,10.3,45.6,31.1,45.6,47.4"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M36.9,87.7c4.8-2.4,6.2-3.3,10.7-4.2"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="36.9,87.7 1.9,105.2 1.9,121.9
			107,175.1 142,157.7 142,140.2 		"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M44.5,33c0,0,2-1-7.4,3.7
			c-6.6,3.3-9.8,13.7,0.6,19.5c16.8,9.4,32.2,10.4,41.5,6.3c6.6-2.9,18.7-8.6,30.5-14.4c5.6-2.8,5.6-6.7,5.6-6.7S119,1.7,81.4,1.7
			C52.6,1.7,44.5,33,44.5,33z"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M44.5,33c0,0-1.1,9.4,9.9,14.9
			c15.3,7.6,33.9,6.6,43.9,2.1c3.8-1.7,10.5-5.2,14.2-7.1c1.6-0.9,2.8-2.3,2.8-4.1"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M50.2,45.2c0-23.7,17.4-42.8,38.9-42.8"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M58.5,49.7C58.5,26,78.8-3.3,103,8.3"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M88.9,58.1v12.2l4.2-2.1v-2.2
			c0-2.9,0.7-7.3,4.8-7.3c3.7,0,4.5,3.1,4.5,6.6c0,5.6-1.8,10.2-5.9,10.2v5.4c0,8.6-13,16.4-25.6,16.4c-17.6,0-26.5-14.9-26.5-25.8
			c0-3,0-12,0-12"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M96.6,81.1c10.8-5.3,17-13.2,17-35.9"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M56.9,93.7v8.1c0.1,0.6,5.9,5.8,17.3,5.8
			c6.4,0,15.2-2.2,22.5-7.6V75.6"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="43.5" y1="143" x2="31.9" y2="100.2"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="61" y1="151.8" x2="80.2" y2="122"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="80.2" y1="122" x2="100.5" y2="111.9"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="31.9" y1="100.2" x2="52.8" y2="90.3"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="64.5" y1="153.6" x2="96.7" y2="136.8"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M115.4,104.6"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M96.7,136.8"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="38.7" y1="140.6" x2="16.1" y2="100.4"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="17.1" y1="100.2" x2="47.9" y2="84.1"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="96.7" y1="136.8" x2="112.6" y2="128.6"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M33.5,105.9c4.2,18.1,27.2,29.9,43,22"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M98.4,93.7c6.4,3.5,10.9,13.9,2.1,18.3"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M115.4,104.6c6.4,3.5,5.9,19.7-2.9,24.1"/>
	</g>
	<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" d="M126.8,113.5c-3.1-3-6.5-5.9-10.1-8.6
		c-0.4-0.4-0.8-0.7-1.3-1c-5.4-4-11.2-7.7-17-10.9c-0.1,0-0.1-0.1-0.2-0.1c-0.5-0.3-1-0.5-1.4-0.8V81.1c10.5-5.2,16.9-13.1,17-36
		c1.6-2,1.7-3.8,1.7-3.9c0,0,0.1-0.9,0.1-2.4c0,0,0,0,0,0c0-0.1,0-0.2,0-0.4h0c0-5.6-1-18.7-9.2-27.8c-1.1-1.2-2.2-2.2-3.4-3.2
		c-3.9-3.1-8.6-5-14.1-6c-2.4-0.4-5-0.6-7.6-0.6C53.4,1,44.5,29.6,43.7,32.4c-0.7,0.4-2.6,1.3-7.2,3.6c-3.7,1.9-6.3,5.8-6.4,9.9
		c-0.1,4.2,2.4,8,7,10.5c2.2,1.2,4.3,2.3,6.5,3.2c0,1.6,0,9,0,11.7c0,3.6,1,7.7,2.9,11.6c-3.6,0.7-5.2,1.6-8.6,3.2L36.3,87l-35,17.5
		C1.1,104.6,1,104.8,1,105v16.7c0,0.2,0.1,0.4,0.3,0.5l36.6,18.5L64.3,154l41.7,21.1l0.4,0.2c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0,0.2,0
		l35-17.5c0.2-0.1,0.3-0.3,0.3-0.4v-17.5v0h0C142.2,130.3,133.8,120.3,126.8,113.5z"/>
</g>
</svg>
														</div>
														<span>Работаем бригадами по 6-12 сертифицированных специалистов</span>
													</li>
													<li>
														<div class="svg-cont">
															<svg version="1.1" id="diplom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="100px" height="159.5px" viewBox="0 0 122 189.5" enable-background="new 0 0 122 189.5" xml:space="preserve">
							<g>
								<polygon fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="81,60.8
									81,188.5 1,148.6 1,20.9 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,20.9
									9,17 89,56.8 89,184.5 81,188.5 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="33,28.9
									33,5 41,1 121,40.9 121,169 113,172.5 89,160.5 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="113,172.5
									113,44.9 33,5 	"/>
								<polygon fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9,144.6
									9,32.9 73,64.8 73,176.5 	"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="20.9" x2="9" y2="32.9"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="73" y1="176.5" x2="81" y2="188.5"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="73" y1="64.8" x2="89" y2="56.8"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="148.6" x2="9" y2="144.6"/>
								<polyline fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="41,32.9
									41,17 105,48.9 105,160.5 89,152.6 	"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="41" y1="17" x2="33" y2="5"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="105" y1="48.9" x2="121" y2="40.9"/>
								<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M59.9,145.1
									c-0.3,5.7-4.6,7.7-9.5,4.5c-4.8-3.3-8.3-10.7-7.9-16.3c0.3-5.7,4.6-7.7,9.5-4.5C56.8,132.1,60.4,139.5,59.9,145.1z"/>
								<g>
									<path fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M56.2,139.9
										l-2.4,1.5l0.9,4.2l-3.3-3.4l-3.1,0.3l0.3-3.6l-2.8-4.1l3.5,1.2l1.4-2.8l1.8,4.4L56.2,139.9z"/>
								</g>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="33" y1="60.8" x2="49" y2="68.8"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="25" y1="64.8" x2="57.2" y2="80.9"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="76.8" x2="65" y2="100.7"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="84.8" x2="65" y2="108.7"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="92.7" x2="65" y2="116.7"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="100.7" x2="41.8" y2="113.1"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="108.7" x2="41.1" y2="120.7"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="124.6" x2="33" y2="132.6"/>

									<line fill="none" stroke="#3E95E9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="132.6" x2="33" y2="139.8"/>
							</g>
							<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="1,148.6 1,20.9
								9,17 33,28.9 33,5 41,1 121,40.9 121,169 113,172.5 89,160.5 89,184.5 81,188.5 "/>
							</svg>


                            </div>
                    		<span>Имеем лицензию на проведение монтажных работ</span>
                    	</li>
                    	<li>
                            <div class="svg-cont">
								<svg version="1.1" id="uplifting" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="100px" height="193.4px" viewBox="0 0 114 193.4" enable-background="new 0 0 114 193.4" xml:space="preserve">
<g>
	<g>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="49,32.8 49,17 81,1 113,17
			113,176.4 81,192.4 49,176.4 49,145 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="33,24.8 97,56.7 97,136.5
			65,152.5 1,120.6 1,40.8 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="65,72.7 65,152.5 81,160.5
			113,144.5 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="40.8" x2="65" y2="72.7"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="65" y1="72.7" x2="113" y2="48.8"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="49" y1="17" x2="113" y2="48.8"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="32.8" x2="113" y2="17"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="32.8" x2="81" y2="48.8"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="192.4" x2="81" y2="144.5"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="88.7" x2="113" y2="80.7"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="120.6" x2="113" y2="112.6"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="9,52.8 9,100.6 57,124.6 57,76.7
					"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="73,76.7 73,124.6 89,116.6
			89,68.7 		"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="192.4" x2="113" y2="144.5"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113" y1="144.5" x2="97" y2="136.5"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113" y1="112.6" x2="97" y2="104.6"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="104.6" x2="113" y2="80.7"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113" y1="80.7" x2="97" y2="72.7"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="72.7" x2="113" y2="48.8"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="113" y1="17" x2="89" y2="52.8"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="160.5" x2="113" y2="112.6"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="160.5" x2="113" y2="176.4"/>
	</g>
	<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="1,120.6 1,40.8
		33,24.8 49,32.8 49,17 81,1 113,17 113,176.4 81,192.4 49,176.4 49,145 	"/>
</g>
</svg>


							</div>
                    		<span>Обеспечиваем процесс монтажа собственной грузоподъемной техникой</span>
                    	</li>
                    	<li>
                            <div class="svg-cont">

								<svg version="1.1" id="brigade" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="120.4px" height="159.5px" viewBox="0 0 158.4 189.5" enable-background="new 0 0 158.4 189.5" xml:space="preserve">
							<g>
								<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="37.4" y1="109.8" x2="37.4" y2="139.8"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="52.6,156.2 117.4,188.5 117.4,60.8 37.4,20.9 37.4,85.8
									"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="117.4,188.5 125.4,184.5 125.4,56.8 117.4,60.8 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="37.4,20.9 45.4,17 125.4,56.8 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="125.4,160.5 149.4,172.5 157.4,168.5 157.4,40.9 77.4,1
									69.4,5 69.4,28.9 	"/>
								<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="149.4,172.5 149.4,44.9 69.4,5 	"/>
								<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M85.9,83.6c-0.3,5.5-4.5,7.6-9.2,4.4c-4.7-3.2-8.1-10.4-7.7-16
									c0.3-5.5,4.5-7.6,9.2-4.4C82.9,70.8,86.4,78,85.9,83.6z"/>
								<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M84.6,87.2c-0.8-0.2-1.5-0.7-2.3-1.2c-4.7-3.2-8.1-10.4-7.7-16
									c0-1.4,0.4-2.6,1-3.6"/>
								<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M85.9,137.6c-0.3,5.5-4.5,7.6-9.2,4.4c-4.7-3.2-8.1-10.4-7.7-16
									c0.3-5.5,4.5-7.6,9.2-4.4C82.9,124.8,86.4,132,85.9,137.6z"/>
								<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M84.6,141.2c-0.8-0.2-1.5-0.7-2.3-1.2c-4.7-3.2-8.1-10.4-7.7-16
									c0-1.4,0.4-2.6,1-3.6"/>
								<g>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.4,92.1 19.4,97.6 26.8,108.7
										26.8,123.4 19.4,127 8.4,121.5 1,110.5 1,95.8 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="26.8,123.4 30.8,121.4 30.8,106.7
										26.8,108.7 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="23.2,95.7 30.8,106.7 26.8,108.7
										19.4,97.6 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.4,92.1 12.1,90.3 23.2,95.7
										19.4,97.6 		"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M30.8,113.1l25.3-12.6
										c5.3-3.1,3.9-10.2,2.4-13.2c-2.2-4.7-6.1-7.8-11.1-6.4L20.2,94.3"/>
								</g>
								<g>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.4,146.1 19.4,151.6 26.8,162.7
										26.8,177.4 19.4,181.1 8.4,175.5 1,164.5 1,149.8 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="26.8,177.4 30.8,175.4 30.8,160.7
										26.8,162.7 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="23.2,149.7 30.8,160.7 26.8,162.7
										19.4,151.6 		"/>
									<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="8.4,146.1 12.1,144.3 23.2,149.7
										19.4,151.6 		"/>
									<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M30.8,167.1l25.3-12.6
										c5.3-3.1,3.9-10.2,2.4-13.2c-2.2-4.7-6.1-7.8-11.1-6.4l-27.2,13.5"/>
								</g>
								<g>
									<polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="69.4,5
										69.4,28.9 69.4,5 77.4,1 157.4,40.9 157.4,168.5 149.4,172.5 125.4,160.5 125.4,184.5 117.4,188.5 52.6,156.2 30.8,167.1
										30.8,175.4 26.8,177.4 19.4,181.1 8.4,175.5 1,164.5 1,149.8 8.4,146.1 12.1,144.3 20.2,148.3 37.4,139.8 37.4,109.8 30.8,113.1
										30.8,121.4 26.8,123.4 19.4,127 8.4,121.5 1,110.5 1,95.8 8.4,92.1 12.1,90.3 20.2,94.3 37.4,85.8 37.4,20.9 45.4,17 69.4,28.9
										"/>
								</g>
							</g>
							</svg>
                            </div>
                    		<span>Количество бригад определяется из производственного задания</span>
                    	</li>
                    </ul>

                </div>
            </div>
        </section>

		<section class="work-in" id="work-in">
			<div class="layout-container">
				<h1>РАБОТА <br>В ЛЮБЫХ УСЛОВИЯХ</h1>
				<div class="right-block">
					<div class="text">
						<h3>Высотные работы</h3>
					<span>SWG осуществляет высотные
					работы любой сложности, в команду
					монтажников входят специалисты
					с нужной квалификацией</span>
					</div>

					<div class="svg-container">
						<svg version="1.1" id="kran-heigh" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200.3px" height="260px" viewBox="0 0 340.3 548.9" enable-background="new 0 0 340.3 548.9" xml:space="preserve">
<g>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="201.2,387.8 201.2,55 255.8,27.7
		"/>
	<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="283.1,177.6 269.5,225.2 269.5,279.7 	"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="228.5" y1="150.3" x2="283.1" y2="177.6"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="283.1" y1="177.6" x2="324.1" y2="157.1"/>
	<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="269.5,129.9 324.1,157.1 324.1,252.5 269.5,279.7
		214.9,252.5 214.9,198 228.5,150.3 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="264.1,222.5 275.9,181.2
		232.8,159.2 220.2,200.7 220.2,227.9 263.6,249.5 	"/>
	<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="275.9,222.3 288.4,180.2
		316.5,166.3 316.5,202.9 	"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="245.7" x2="214.9" y2="238.8"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="245.7" x2="214.9" y2="252.5"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="300.1" x2="228.5" y2="259.3"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="300.1" x2="255.8" y2="272.9"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="300.1" x2="255.8" y2="327.4"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="255.8" y1="327.4" x2="211.6" y2="393.6"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="239.8" y1="428.4" x2="255.8" y2="436.3"/>
	<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M255.8,436.3"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="255.8" y1="460" x2="255.8" y2="272.9"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="244.5" y1="441.5" x2="255.8" y2="436.3"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="219.5" y1="400" x2="255.8" y2="381.8"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="233.1" y1="415.9" x2="255.8" y2="381.8"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="354.6" x2="255.8" y2="381.8"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="354.6" x2="255.8" y2="327.4"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="354.6" x2="255.8" y2="272.9"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="381.8" x2="163.4" y2="390.2"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="150.2" y1="329.2" x2="201.2" y2="354.6"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="272.9" x2="201.2" y2="300.1"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="245.7" x2="146.6" y2="218.4"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="155" y1="394.4" x2="146.6" y2="381.8"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="381.8" x2="201.2" y2="354.6"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="354.6" x2="146.6" y2="272.9"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="272.9" x2="201.2" y2="245.7"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="218.4" x2="201.2" y2="300.1"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="300.1" x2="150.4" y2="325.5"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="150.4" y1="333.4" x2="184.6" y2="384.2"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="163.5" x2="201.2" y2="190.7"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="109" x2="228.5" y2="150.3"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="255.8" y1="109.5" x2="146.6" y2="54.5"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="217.9" x2="219.4" y2="182.1"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="190.7" x2="146.6" y2="109"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="109" x2="255.8" y2="55"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="54.5" x2="201.2" y2="136.2"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="255.8" y1="109.5" x2="146.6" y2="163.5"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="163.5" x2="201.2" y2="245.2"/>
	<g>
		<g enable-background="new    ">
			<g>
				<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M168.3,387.8c-11.5,5.7-26.8,13.3-38.3,19.1
					c-10,5-17.5,15-20.4,28.9c-7-3.5-13.8-3.5-19.2-0.8l23.5-11.7L90.4,435c-5.7,2.8-9.9,8.8-11.1,17.1
					c-2.3,15.3,7.7,35.8,19.4,41.7c25.7,13.1,96.8,49.3,100.6,51.3c8.5,4.4,16.9,4.5,23.5,1.2c11.5-5.7,26.8-13.3,38.3-19.1"/>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M166.7,408.8
					c-13.4-6.8-26.4-7.1-36.8-1.9l38.3-19.1c10.3-5.1,23.4-4.9,36.8,1.9c22.6,11.5,39.2,38.3,41.7,64.5l-38.3,19.1
					C206,447,189.4,420.3,166.7,408.8"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M261.2,527.1l-38.3,19.1
					c6.9-3.4,11.9-10.6,13.4-20.6c2.9-19.6-8.9-42.7-26.4-51.6c-0.5-0.2-0.9-0.5-1.4-0.7l38.3-19.1c0.5,0.2,0.9,0.4,1.4,0.7
					c17.5,8.9,29.3,32,26.4,51.6C273.1,516.5,268,523.6,261.2,527.1z"/>
			</g>
		</g>
	</g>
	<g>
		<g enable-background="new    ">
			<g>
				<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M255.8,396.8c18.2,9.3,38.5,19.6,40.2,20.5
					c4.9,2.5,9.8,2.6,13.6,0.7c6.7-3.3,15.5-7.7,22.2-11"/>
				<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M278,326.3c-6.7,3.3-15.5,7.7-22.2,11"/>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M277.1,338.4c-7.8-4-15.3-4.1-21.3-1.1
					l22.2-11c6-3,13.5-2.8,21.3,1.1c13.1,6.7,22.7,22.2,24.2,37.4l-22.2,11C299.8,360.6,290.2,345.1,277.1,338.4"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M331.8,406.9l-22.2,11
					c4-2,6.9-6.1,7.7-11.9c1.7-11.4-5.2-24.7-15.3-29.9c-0.3-0.1-0.5-0.3-0.8-0.4l22.2-11c0.3,0.1,0.5,0.3,0.8,0.4
					c10.1,5.2,17,18.5,15.3,29.9C338.7,400.8,335.8,404.9,331.8,406.9z"/>
			</g>
		</g>
	</g>
	<g>
		<g enable-background="new    ">
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M22.6,319.8c-15-7.5-22.9-23.2-22-38.1
					c0.5-8.7,4.5-15.4,10.2-18.1c9.6-4.6,22.5-10.8,32.1-15.5"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M35.9,273.2c-3.2-3.8-6.9-7-11-9
					c-5.2-2.5-10.1-2.5-14.1-0.6l32.1-15.5c4-1.9,8.9-2,14.1,0.6c1.7,0.8,3.3,1.8,4.8,3"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M35.9,273.2c2.3-7.2,6.6-12.4,12.2-15.1
					c9.6-4.6,22.5-10.8,32.1-15.5"/>
			</g>
			<g>

					<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="102.4" y1="359.6" x2="22.6" y2="319.8"/>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M134.6,345.4"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M143.4,345.7
					c-9.6,4.6-22.5,10.8-32.1,15.5c-2.6,1.2-5.6,0-8.9-1.6"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M70.3,259.3c-8.2-4-16-4.2-22.2-1.2
					l32.1-15.5c6.2-3,14-2.8,22.2,1.2"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M143.4,345.7l-32.1,15.5
					c3.9-1.9,6.6-6.5,7-12.3c0.6-9.7-5.4-22.4-13.6-26.3c-1.3-0.6-2.6-1-3.8-1.2l32.1-15.5c1.2,0.2,2.5,0.6,3.8,1.2
					c8.1,4,14.1,16.7,13.6,26.3C150.1,339.3,147.3,343.8,143.4,345.7z"/>
			</g>
			<g>
				<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M102.4,243.8
					c18.6,9.1,32.6,34.4,31.3,56.5c-0.1,1.9-0.4,3.8-0.7,5.6l-32.1,15.5c0.3-1.8,0.6-3.6,0.7-5.6c1.3-22.1-12.7-47.4-31.3-56.5"/>
			</g>
		</g>
	</g>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="191.2" x2="214.9" y2="198"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="245.7" x2="214.9" y2="225.2"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="191.2" x2="255.8" y2="109.5"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="201.2" y1="136.2" x2="255.8" y2="55"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="201.2" y1="387.8" x2="201.2" y2="137.7"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="146.6" y1="343.4" x2="146.6" y2="398.6"/>
	<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="255.8,136.7 255.8,27.7 201.2,0.5
		146.6,27.7 146.6,317.6 	"/>
	<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="146.6" y1="27.7" x2="201.2" y2="55"/>
	<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="220.2" y1="200.7" x2="264.1" y2="222.5"/>
</g>
<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M324.7,365.1
	c-0.3-0.1-0.5-0.3-0.7-0.4c-1.5-15.2-11.1-30.6-24.2-37.3c-7.8-3.9-15.3-4.1-21.3-1.1l-22.2,11v-9.9v-54.5l0,0l13.7,6.8l54.6-27.2
	v-95.4L270,129.9l-13.7,6.8l0,0v-27.2V55V27.7L201.7,0.5l-54.6,27.2v26.8V109v54.5v54.4v0.5v54.5v44.7l0,0
	c-2.4-4.7-5.9-8.6-9.8-10.5c-1.3-0.6-2.6-1-3.8-1.2c0.3-1.8,0.6-3.7,0.7-5.6c1.3-22.1-12.7-47.4-31.3-56.5c-8.2-4-16-4.2-22.2-1.2
	l-18.6,9c-1.5-1.1-3-2.1-4.6-2.9c-5.2-2.6-10.1-2.5-14.1-0.6l-32.1,15.5c-5.7,2.7-9.7,9.4-10.2,18.1c-0.9,14.9,7,30.6,22,38.1
	l79.8,39.8c3.3,1.6,6.3,2.8,8.9,1.6l32.1-15.5c1.2-0.6,2.2-1.4,3.1-2.4l0.1,0.1v38.4v16.8l-16.7,8.3c0.5-0.2,0.9-0.5,1.4-0.7
	c-0.4,0.2-0.9,0.4-1.3,0.7c-5.4,2.7-10.1,6.9-13.7,12.4L90.9,435c-5.7,2.8-9.9,8.8-11.1,17.1c-2.3,15.3,7.7,35.8,19.4,41.7
	c25.7,13.1,96.8,49.3,100.6,51.3c8.5,4.4,16.9,4.5,23.5,1.2c11.5-5.7,26.8-13.3,38.3-19.1l0,0l0.1-0.1c6.8-3.5,11.9-10.6,13.4-20.6
	c2.5-16.6-5.6-35.7-18.8-46.6v-23.6v-39.5c18.2,9.3,38.5,19.6,40.2,20.5c4.9,2.5,9.8,2.6,13.6,0.7c3.3-1.7,7.2-3.6,11.1-5.5
	s7.8-3.8,11.1-5.5l-0.2,0l0.2-0.1c4-2,6.9-6.1,7.7-11.9C341.7,383.6,334.8,370.3,324.7,365.1z"/>
</svg>

					</div>
				</div>
				<div class="left-block">
					<div class="text">
						<h3>Монтаж в стесненных условиях</h3>
					<span>Когда невозможно подвести
						стандартную технику,
						инженеры SWG
						конструируют специальные
						приспособления или механизмы</span>
					</div>

					<div class="svg-container">
						<svg version="1.1" id="odd" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="159.9px" height="280px" viewBox="-300 -0.5 257.9 547" enable-background="new -300 -0.5 257.9 547" xml:space="preserve">
			<g>
				<g>
					<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-214.5,155.8 -186,170.5
			-186,396.5 -242.7,424.8 -299.5,396.5 -299.5,170.5 -270,155.8 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="170.5" x2="-242.7" y2="198.8"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.7" y1="198.8" x2="-186" y2="170.5"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.7" y1="198.8" x2="-242.7" y2="424.8"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="368.2" x2="-242.8" y2="396.5"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.8" y1="396.5" x2="-186" y2="368.2"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="198.8" x2="-242.7" y2="227.1"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.7" y1="227.1" x2="-186" y2="198.8"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M-186,368.4"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M-299.5,368.2"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-298.9" y1="368.6" x2="-186" y2="312"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-186" y1="312" x2="-298.9" y2="255.1"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-298.9" y1="255.1" x2="-242.7" y2="227.1"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.7" y1="227.1" x2="-186" y2="255.4"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-186" y1="255.4" x2="-298.9" y2="311.7"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-298.9" y1="311.7" x2="-186" y2="368.6"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.8" y1="396.9" x2="-186" y2="312"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.8" y1="340" x2="-186" y2="255.4"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-243" y1="283.5" x2="-186" y2="198.8"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="198.8" x2="-243" y2="283.5"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-298.9" y1="255.1" x2="-242.8" y2="340"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-298.9" y1="311.7" x2="-242.8" y2="396.9"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M-242.8,396.5"/>
		<path fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" d="M-299.5,368.4"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-73.4,84.9 -44.1,99.6
			-44.1,325.6 -100.9,353.9 -157.6,325.6 -157.6,127.9 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-130.3" y1="113.3" x2="-100.9" y2="127.9"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="127.9" x2="-44.1" y2="99.6"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="127.9" x2="-100.9" y2="353.9"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157.6" y1="297.3" x2="-100.9" y2="325.6"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="325.6" x2="-44.1" y2="297.3"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157.6" y1="127.9" x2="-100.9" y2="156.2"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="156.2" x2="-44.1" y2="127.9"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157" y1="297.6" x2="-44.1" y2="241"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-44.1" y1="241" x2="-157" y2="184.2"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157" y1="184.2" x2="-100.9" y2="156.2"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="156.2" x2="-44.1" y2="184.5"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-44.1" y1="184.5" x2="-157" y2="240.7"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157" y1="240.7" x2="-44.1" y2="297.6"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="325.9" x2="-44.1" y2="241"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="269" x2="-44.1" y2="184.5"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-101.2" y1="212.6" x2="-44.1" y2="127.9"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157.6" y1="127.9" x2="-101.2" y2="212.6"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157" y1="184.2" x2="-100.9" y2="269"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157" y1="240.7" x2="-100.9" y2="325.9"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="191.8" x2="-299.5" y2="198.9"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-299.5,425.1 -299.5,481.7
			-242.8,510 -186,481.7 -186,425.1 -242.8,453.4 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.8" y1="510" x2="-242.8" y2="453.4"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-299.5" y1="425.1" x2="-270.7" y2="411.2"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-186" y1="425.1" x2="-213.9" y2="411.2"/>
		<polygon fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-157.6,354.1 -157.6,410.7
			-100.9,439 -44.1,410.7 -44.1,354.1 -100.9,382.4 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-100.9" y1="439" x2="-100.9" y2="382.4"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-157.6" y1="354.1" x2="-128.8" y2="340.2"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-44.1" y1="354.1" x2="-72" y2="340.2"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-72.9,425.1 -44.1,439.2
			-242.8,538.3 -299.5,510 -271.3,495.9 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-242.8,545.3 -299.5,517.1
			-299.5,510 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-242.8,545.3 -44.1,446.3
			-44.1,439.2 		"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-186" y1="453.4" x2="-128.8" y2="425.3"/>

			<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-242.8" y1="545.3" x2="-242.8" y2="538.3"/>
		<line fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" x1="-109" y1="39.7" x2="-234.2" y2="101.7"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-250.9,109.9 -299.5,134
			-242.8,162.3 -44.1,63.2 -92.8,39.8 		"/>
		<polyline fill="none" stroke="#3E95E9" stroke-linejoin="round" stroke-miterlimit="10" points="-299.5,134 -299.5,141.1
			-242.8,169.4 -242.8,162.3 -242.8,169.4 -44.1,70.3 -44.1,63.2 		"/>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-236.3,131.1c3.7,2.2,3.8,5.6,0,7.7c-3.7,2.1-9.7,2-13.5-0.1
				c-3.7-2.2-3.7-5.6,0-7.7C-246.1,128.9-240.1,129-236.3,131.1z"/>
		</g>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-234.5,117.2c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
				c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		</g>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-236.3,166.6c3.7,2.2,3.8,5.6,0,7.7c-3.7,2.1-9.7,2-13.5-0.1
				c-3.7-2.2-3.7-5.6,0-7.7c0.3-0.2,0.6-0.3,0.9-0.4"/>
		</g>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-93.9,60.4c3.7,2.2,3.8,5.6,0,7.7c-3.7,2.1-9.7,2-13.5-0.1
				c-3.7-2.2-3.7-5.6,0-7.7C-103.6,58.2-97.6,58.3-93.9,60.4z"/>
		</g>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-94.6,95.5c4.5,2,4.5,6,0.8,8c-3.7,2.1-9.7,2-13.5-0.1
				c-0.5-0.3-0.9-0.6-1.2-0.9"/>
		</g>
		<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="-256.9,84.7 -242.8,89.1 -228.6,84.7 -228.6,75.9
			-242.8,71.5 -256.9,75.9 		"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="-250.9" y1="91.1" x2="-250.9" y2="117.2"/>
		<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="-228.6,84.7 -228.6,89.1 -242.8,93.9 -256.9,89.1
			-256.9,84.7 		"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="-234.5" y1="117.2" x2="-234.5" y2="91.1"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-234.5,111.9c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-234.5,106.6c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-234.5,101.3c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		<g>
			<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-92.7,46.3c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
				c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		</g>
		<polygon fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="-115.1,13.7 -100.9,18.1 -86.7,13.7 -86.7,4.9 -100.9,0.5
			-115.1,4.9 		"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="-109" y1="20.2" x2="-109" y2="46.3"/>
		<polyline fill="none" stroke="#3E95E9" stroke-miterlimit="10" points="-86.7,13.7 -86.7,18.1 -100.9,23 -115.1,18.1 -115.1,13.7
					"/>
		<line fill="none" stroke="#3E95E9" stroke-miterlimit="10" x1="-92.7" y1="46.3" x2="-92.7" y2="20.2"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-92.7,41c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-92.7,35.6c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
		<path fill="none" stroke="#3E95E9" stroke-miterlimit="10" d="M-92.7,30.3c0,1.2-0.7,2.5-2.3,3.4c-3.2,1.8-8.4,1.7-11.6-0.1
			c-1.6-0.9-2.4-2.1-2.4-3.3"/>
	</g>
	<g>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.9,283.3 -242.3,283.2 -242,283.5
			"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.3,340.2 -241.7,340 -241.7,340.4
			"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.7,339.8 -241.8,340 -241.7,340 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.8,340 -241.9,340 -241.8,340 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-213.7,155.4 -213.5,155.8 -185,170.5
			-185,198.8 -185,255.4 -185,312 -185,368.2 -185.4,368.4 -185,368.6 -185,396.5 -213.2,410.6 -212.9,411.2 -185,425.1 -185,453.4
			-127.8,425.3 -127.7,425.1 -156.6,410.7 -156.6,354.1 -127.8,340.2 -127.7,340 -156.6,325.6 -156.6,297.3 -156.6,240.7
			-156.6,184.2 -156.6,127.9 -157,127.1 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.7,283 -241.9,283.3 -241.7,283.4
			"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.5,283.5 -241.7,283.4 -241.7,283.7
					"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-100.2,212.6 -100.1,212.4 -100.6,212.1
					"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-241.7,396.8 -241.4,396.3 -241.7,396.5
			-241.8,396.5 -242.2,396.3 -241.8,396.9 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-100.1,212.4 -99.9,212.4 -99.9,212.2
			"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-99.9,212.8 -99.6,212.6 -99.9,212.4
			"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-100.2,325.5 -99.9,325.9 -99.6,325.5
			-99.9,325.6 		"/>
		<polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" points="-99.9,269 -100,269 -99.9,269
			-99.9,269.5 -99.4,269.2 -99.9,269 		"/>
		<path fill="none" stroke="#3E95E9" stroke-width="2" stroke-miterlimit="10" d="M-43.1,63.2l-48.6-23.4v-4.2v-5.3V20.2l0,0l6-2.1
			v-4.4V4.9l-14.2-4.4l-14.2,4.4v8.8v4.4l6.1,2.1v10.1v5.3v4.1l-125.2,62h-0.3v-0.4V91.1l5.9-2v-4.4v-8.8l-14.2-4.4l-14.1,4.4v8.8
			v4.4l6,2v10.2v5.3v3.3l-48.6,24.1v7.1l29.5,14.7l-29.5,14.7v21.3v7v0.1v56.2v56.6v56.5v28.3l28.9,14.4l-0.1,0.3l-28.8,13.9v56.6
			l28.2,14.1l0,0.1l-28.2,14.1v7.1l56.7,28.2l198.7-99v-7.1l-28.8-14.1l0,0l28.8-14.4v-56.6L-71,340.2l-0.3-0.6l28.2-14v-28
			l-0.3-0.1l0.3-0.2V241v-56.5v-56.6V99.6l-29.3-14.7l29.3-14.6V63.2z M-156.6,184.2v56.5v56.6v28.3l28.9,14.4l-0.1,0.2l-28.8,13.9
			v56.6l28.9,14.4l-0.1,0.2l-57.2,28.1v-28.3l-27.9-13.9l-0.3-0.6l28.2-14.1v-27.9l-0.4-0.2l0.4-0.2V312v-56.6v-56.6v-28.3
			l-28.5-14.7l-0.2-0.4l56.7-28.3l0.4,0.8V184.2z M-241.9,283.3l0.2-0.3v0.4l0.2,0.1l-0.2,0.1v-0.2L-241.9,283.3l-0.1,0.2l-0.2-0.3
			L-241.9,283.3z M-241.8,340l0.1-0.1L-241.8,340l0.5,0.2l-0.4,0.2L-241.8,340L-241.8,340L-241.8,340L-241.8,340L-241.8,340z
			 M-241.8,396.5l0.1,0l0.3-0.2l-0.3,0.5l-0.1,0.2l-0.4-0.6L-241.8,396.5z M-99.9,325.9l-0.3-0.5l0.3,0.1l0.3-0.1L-99.9,325.9z
			 M-99.9,269.5V269l0,0l0,0l0,0l0.5,0.2L-99.9,269.5z M-99.9,212.8v-0.4l-0.1-0.1l-0.2,0.2l-0.3-0.5l0.5,0.2l0.1-0.2v0.3l0.3,0.2
			L-99.9,212.8z"/>
	</g>
</g>
</svg>


					</div>
				</div>

			</div>
			<div class="equipment-section-bg">

			</div>
		</section>

        <section class="projects projects-manufacture" id="projects">
            <div class="layout-container">
                <h1>НАШИ РАБОТЫ</h1>
                <p>Монтаж <strong>300</strong> проектов<br>  для <strong>35</strong> клиентов за <strong>9</strong> лет</p>
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

                <div class="gallery-block assembly-gallery" >
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


        <section class="work-scheme manufacture-work-scheme" id="work">

            <ul class="rhombus-block">
                <li class="rhombus-item rhombus-1">
                    <div class="rhombus">01</div>
                    <p>Получаем и обрабатываем документацию, изучаем обьект</p>
                </li>
                <li class="rhombus-item rhombus-2">
                    <div class="rhombus">02</div>
                    <p>Формируем план работ</p>
                </li>

                <li class="rhombus-item rhombus-5">
                    <div class="rhombus">03</div>
                    <p>Монтируем конструкции<br> и передаем заказчику</p>
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
				<a class="button-cont padding-button " href="#">
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



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



        <!-- -->

        <script>window.jQuery || document.write('<script src="<?php popel_theme_uri(); ?>/scripts/vendor/jquery-2.1.3.min.js"><\/script>')</script>




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
    obt10 = new Vivus('bridge', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt11 = new Vivus('kran', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt12 = new Vivus('special', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
//    obt13 = new Vivus('metal', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt14 = new Vivus('diplom', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt15 = new Vivus('brigade', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt16 = new Vivus('uplifting', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt17 = new Vivus('worker', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt18 = new Vivus('kran-heigh', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt19 = new Vivus('odd', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
	obt20 = new Vivus('unique-special', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
</script>

</body>
</html>
