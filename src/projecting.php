<?php
/*
Template Name: Template for Projecting Page
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
                <li class="active"><a href="http://swg.popel-studio.com/proektirovanie/">Проектирование</a></li>
                <li><a href="http://swg.popel-studio.com/izgotovlenie/">Изготовление</a></li>
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

                <section class="head-block projecting-head-block" id="head-block" >
                    <!--<img src="images/main-slide-4.jpg" alt="" />-->
                    <div class="manufacture-head-bg projecting-head-bg" data-0="opacity:1; transform:translate3d(0,0%,0)"
                         data-100p="opacity:0;transform:translate3d(0,60%,0)"></div>
                    <div class="layout-container">
                        <div class="head-content" style="margin-top: -72px" data-0="opacity:1; transform:translate3d(0,0%,0)"
                             data-100p="opacity:0;transform:translate3d(0,60%,0)">
                            <h2>Проектируем эстетичные и надежные<br>
                                конструкции из металла</h2>
                        </div>

                    </div><!--layout-content-->
                </section>
                <div class="arrow-bottom-block">



                <div class="arrow-bottom"><div class="arrow-down"></div></div>
                </div>

                <section class="scope-block">
                    <div id="navbar">
                        <ul class="nav scroll-spy affix">
                            <li class=""><a href="#head-block" class="js-scroll"></a></li>

                            <li class="active"><a href="#scope-content" class="js-scroll"></a></li>


                            <li><a href="#competence" class="js-scroll"></a></li>


                            <li><a href="#projects" class="js-scroll"></a></li>

                            <li><a href="#partnership" class="js-scroll"></a></li>

                            <li><a href="#guaratees" class="js-scroll"></a></li>
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
                        <div class="scope-content" id="scope-content">
                            <h1>Разрабатываем строительные конструкции</h1>
                            <div class="scope-info-block padding-top">

                                <!--<img src="images/scope-img-f.png" alt="" class="scope-img">-->
                                <div class="svg-cont">
                                    <svg version="1.1" id="build_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                             y="0px" width="267px" height="232px" viewBox="-135.8 -105 267 232" enable-background="new -135.8 -105 267 232"
                                             xml:space="preserve">

                                        <g>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-15.9,83.1v6.5"/>

                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="-61.8" y1="106.1" x2="-61.8" y2="112.7"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M57.2,126l73-36.7v-6.6
                                                l-73,36.6V126l-73.1-36.4l-45.9,23.1l-73-36.5v-6.5l73,36.4l45.9-23l73.1,36.2"/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-134.8,69.7
                                                -128.2,66.1 -61.9,99.3 -15.6,76.1 57.3,112.6 123.6,79.4 130.2,82.7  "/>
                                        </g>
                                        <g>


                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-128.2,66.1V-47.3
                                                L-15.6-104l13.2,6.7"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-15.6-50.4V76"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M57.3,112.6V-13.7
                                                l66.3-33.5V79.4"/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-61.9,99.3
                                                -61.9,-27.2 -15.6,-50.4 57.3,-13.7  "/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M57.4-33.9l53-26.7v13.4
                                                l-53,26.6V-33.9z"/>
                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="110.3" y1="-53.9" x2="123.6" y2="-47.2"/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-101.7,-47.1
                                                10.9,-104 41.8,-88.4    "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="57.4,-33.9
                                                4.3,-60.6 4.3,-47.2 57.4,-20.6  "/>

                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="96.9" y1="-67.3" x2="110.3" y2="-60.6"/>

                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="4.3" y1="-60.6" x2="17.5" y2="-67.2"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M57.4-53.9l39.5-19.9v13.5
                                                L57.4-40.4V-53.9z"/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="57.4,-53.9
                                                17.8,-73.8 17.8,-60.3 57.4,-40.4    "/>

                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="84" y1="-80.5" x2="96.9" y2="-73.8"/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-128.2,-47.4
                                                -101.6,-33.6 -101.6,-33.7 -101.7,-47.1 -61.9,-27.2  "/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-102,-40.6
                                                -114.9,-47.2 -15.6,-97.3 -8.9,-94   "/>

                                                <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="17.8" y1="-73.8" x2="31" y2="-80.7"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M57.5-69.5L84-82.8v9
                                                L57.5-60.5V-69.5z"/>

                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="57.5,-69.5
                                                31,-82.8 31,-73.8 57.5,-60.5    "/>
                                            <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="31,-82.8
                                                57.5,-96.3 84,-82.8     "/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M96.9-67.3"/>

                                        </g>
                                         <g>

                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-22.3,66.1l-13.2,6.6
                                                v-99.9l13.2-6.7V66.1z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-8.9-33.9l13.2,6.7v99.9
                                                l-13.2-6.6V-33.9z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M-42.1,76.1l-13.2,6.6
                                                v-99.9l13.2-6.7V76.1z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9-23.9l19.9,10v6.7
                                                l-19.9-10V-23.9z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9-10.6l19.9,10v6.7
                                                l-19.9-10V-10.6z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,2.8l19.9,10v6.7
                                                l-19.9-10V2.8z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,16.1l19.9,10v6.7
                                                l-19.9-10V16.1z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,29.5l19.9,10v6.7
                                                l-19.9-10V29.5z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,42.9l19.9,10v6.7
                                                l-19.9-10V42.9z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,56.2l19.9,10v6.7
                                                l-19.9-10V56.2z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M10.9,69.6l19.9,10v6.7
                                                l-19.9-10V69.6z"/>
                                            <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M37.5-10.6l13.2,6.7V96
                                                l-13.2-6.6V-10.6z"/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="63.9,82.6
                                                63.9,95.9 77.2,89.2 77.2,76     "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="103.7,62.7
                                                103.7,75.9 116.9,69.3 116.9,56  "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="83.8,72.7
                                                83.8,86 97,79.3 97,66   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="63.9,62.6
                                                63.9,75.8 77.2,69.2 77.2,55.9   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="103.7,42.6
                                                103.7,55.9 116.9,49.2 116.9,35.9    "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="83.8,52.6
                                                83.8,65.9 97,59.2 97,45.9   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="63.9,42.6
                                                63.9,55.9 77.2,49.2 77.2,35.9   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="103.7,22.6
                                                103.7,35.9 116.9,29.2 116.9,15.9    "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="83.8,32.6
                                                83.8,45.9 97,39.2 97,25.9   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="63.9,22.6
                                                63.9,35.9 77.2,29.2 77.2,15.9   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="103.7,2.6
                                                103.7,15.9 116.9,9.2 116.9,-4   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="83.8,12.7
                                                83.8,25.9 97,19.3 97,6  "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="63.9,2.7
                                                63.9,15.9 77.2,9.3 77.2,-4  "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="103.7,-17.3
                                                103.7,-4 116.9,-10.7 116.9,-24  "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="83.8,-7.3 83.8,6
                                                97,-0.7 97,-14  "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-114.9,-27.2
                                                -114.9,6.1 -101.7,12.8 -101.7,-20.6     "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-88.4,-13.9
                                                -88.4,19.4 -75.2,26.2 -75.2,-7.2    "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-114.9,19.6
                                                -114.9,53 -101.7,59.7 -101.7,26.3   "/>
                                            <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="-88.4,33
                                                -88.4,66.3 -75.2,73 -75.2,39.6  "/>
                                        </g>
                                        </svg>
                                </div>
                                <div class="scope-info-text floated-r">
                                    <h4>Промышленно-гражданское
                                    строительство</h4>
                                    <p>Комплектные каркасы зданий<br> и сооружений из стали</p>
                                </div>
                            </div>
                            <div class="scope-info-block padding-top">

                                <div class="scope-info-text floatleft">
                                    <h4>Транспортное строительство</h4>
                                    <p>Мосты, барьерное ограждение, наддорожные конструкции, шумозащитные конструкции, деформационные швы</p>
                                </div>

                                <div class="svg-cont">
                                    <svg version="1.1" id="build_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="370px" height="344.9px" viewBox="0 0 370 344.9" enable-background="new 0 0 370 344.9" xml:space="preserve">
                                    <g>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="33,296.1
                                            65,280.1 65,184.6 33,168.9  "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,288.1
                                            17,160.4 33,168.9 33,296.1  "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="257,184.4
                                            289,168.4 289,105.1 257,120.6   "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="241,176.4
                                            241,128.5 257,120.6 257,184.4   "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="97,328 129,312
                                            129,184.4 97,200.3  "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="81,320 81,192.4
                                            97,200.3 97,328     "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="321,216.3
                                            353,200.3 353,72.7 321,88.6     "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="305,208.3
                                            305,96.6 321,88.6 321,216.3     "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,153 97,192.3
                                            353,64.7 273,24.8   "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="153" x2="17" y2="160.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="192.3" x2="97" y2="200.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="184.4" x2="241" y2="128.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="289" y1="105.1" x2="305" y2="96.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="353" y1="64.7" x2="353" y2="72.7"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M129,312
                                            c0-49.7,26-140.6,96-174.6c48.8-23.7,86,31,96,78.9"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="168.4" x2="353" y2="40.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="168.4" x2="97" y2="192.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="353" y1="40.8" x2="353" y2="64.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="153" x2="17" y2="128.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="17" y1="128.5" x2="273" y2="0.9"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="273" y1="0.9" x2="273" y2="24.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="33" y1="120.7" x2="33" y2="144.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="49" y1="112.6" x2="49" y2="136.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="65" y1="104.7" x2="65" y2="128.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="96.7" x2="81" y2="120.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="88.8" x2="97" y2="112.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="112.9" y1="80.7" x2="112.9" y2="104.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="72.7" x2="129" y2="96.9"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="145.1" y1="64.7" x2="145.1" y2="88.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="160.9" y1="56.8" x2="160.9" y2="80.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="177" y1="48.8" x2="177" y2="73.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="193" y1="40.8" x2="193" y2="64.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="209" y1="32.8" x2="209" y2="56.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="225.5" y1="24.8" x2="225.5" y2="48.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="241" y1="16.8" x2="241" y2="40.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="8.9" x2="257" y2="32.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="113" y1="160.6" x2="113" y2="184.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="152.4" x2="129" y2="176.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="145" y1="144.5" x2="145" y2="168.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="161" y1="136.5" x2="161" y2="160.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="177" y1="128.6" x2="177" y2="152.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="192.9" y1="120.6" x2="192.9" y2="144.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="209" y1="112.5" x2="209" y2="136.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="225.1" y1="104.5" x2="225.1" y2="128.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="240.9" y1="96.6" x2="240.9" y2="120.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="88.6" x2="257" y2="113.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="273" y1="80.6" x2="273" y2="104.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="289" y1="72.7" x2="289" y2="96.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="305.5" y1="64.7" x2="305.5" y2="88.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="56.7" x2="321" y2="80.7"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="337" y1="48.7" x2="337" y2="72.7"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,280.1
                                            1.1,288.1 33,304 81,280.1 65,272.1  "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="1.1,288.1
                                            1,296.1 33,312 80.9,288.1   "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="33" y1="304" x2="33" y2="312"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="80.9,312 65,320
                                            97,335.9 145,312 129,304    "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="65,320 65,328
                                            97,343.9 145,320 145,312    "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="335.9" x2="97" y2="343.9"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="240.9,168.4
                                            225.1,176.4 257,192.4 305,168.5 289,160.4   "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="192.4" x2="257" y2="200.3"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="305,200.3
                                            289,208.3 321,224.3 369,200.3 353,192.4     "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="289,208.3
                                            289,216.3 321,232.2 369,208.3 369,200.3     "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="224.3" x2="321" y2="232.2"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="304.9,112.5
                                            321,120.6 353,104.6     "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="305.5,144.5
                                            321,152.5 352.5,136.8   "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="352.5,168.2
                                            321,184.4 305.5,176.6 257,200.3 225,184.4 225.1,176.4   "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="240.5" y1="144.7" x2="257" y2="152.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="152.5" x2="289.5" y2="136.8"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M228.2,135.4
                                            c7.8,12.6,12.8,26.7,12.8,41"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M65,206.4
                                            c2.2-6.1,4.7-12.4,7.3-18.7"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,256.2
                                            32.9,264.1 65,248.2     "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,224.3
                                            33.4,232.5 65,216.3     "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="17,192.4
                                            32.9,200.4 65,184.6 81,192.4    "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="80.9" y1="288.1" x2="97.7" y2="296.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.7" y1="296.1" x2="129" y2="280.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="80.9" y1="256.1" x2="97.1" y2="264.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.1" y1="264.1" x2="129" y2="248.2"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="81" y1="224.4" x2="97.4" y2="232.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.4" y1="232.5" x2="129" y2="216.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="33" y1="296.1" x2="65" y2="248.2"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="65" y1="248.2" x2="33.4" y2="232.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="33.4" y1="232.5" x2="65" y2="184.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="49.2" y1="176.8" x2="32.9" y2="200.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="32.9" y1="200.4" x2="65" y2="216.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="65" y1="216.3" x2="32.9" y2="264.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="32.9" y1="264.1" x2="65" y2="280.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="184.4" x2="97.4" y2="232.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.4" y1="232.5" x2="129" y2="248.2"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="248.2" x2="97.7" y2="296.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.7" y1="296.1" x2="129" y2="312"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97" y1="328" x2="129" y2="280.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="280.1" x2="97.1" y2="264.1"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="97.1" y1="264.1" x2="129" y2="216.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="216.3" x2="97" y2="200.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="216.3" x2="352.5" y2="168.2"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="352.5" y1="168.2" x2="321" y2="152.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="152.5" x2="353" y2="104.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="353" y1="104.6" x2="321" y2="88.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="353" y1="72.7" x2="321" y2="120.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="120.6" x2="352.5" y2="136.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="352.5" y1="136.8" x2="321" y2="184.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="321" y1="184.4" x2="353" y2="200.3"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="184.4" x2="289.5" y2="136.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="289.5" y1="136.8" x2="257" y2="120.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="289" y1="105.1" x2="257" y2="152.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="257" y1="152.5" x2="289" y2="168.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="248.2" x2="141.6" y2="241.9"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="216.3" x2="161" y2="200.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="298.8" y1="163.6" x2="321" y2="152.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="278.4" y1="142.1" x2="321" y2="120.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="160.8" y1="168.5" x2="161" y2="199.2"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="216.3" x2="160.8" y2="168.5"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="184.4" x2="161" y2="200.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="129" y1="216.3" x2="147.7" y2="225.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="160.8" y1="168.5" x2="177.1" y2="176.4"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="40.2" y1="164.4" x2="297" y2="36.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="73" y1="180.5" x2="97" y2="168.4"/>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="scope-info-block padding-top">

                                <div class="svg-cont">
                                    <svg version="1.1" id="build_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px" width="312px" height="276px" viewBox="566 -134 312 276" enable-background="new 566 -134 312 276" xml:space="preserve">

                                    <g>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="765.6,97
                                            677.4,141.1 567,86.1 567,78.8 677.4,133.8 765.6,89.9    "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="567" y1="78.8" x2="581.8" y2="71.4"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="581.8,71.4
                                            581.8,79 677.4,126.7 758.5,86.3 765.6,89.9  "/>
                                    </g>

                                    <g>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="743.7" y1="-74.7" x2="678.7" y2="-42.3"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="677.4,126.7
                                            677.4,52.2 581.8,6  "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="679.5" y1="-37.6" x2="743.7" y2="-69.9"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="765.6,97
                                            802.9,115.7 818,108 818,108 818,63.4 862.2,41.3 862.3,85.7 854.8,82 818,100.3   "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="623.1,-9.2
                                            596.2,4.2 677.3,44.8 751,8 758.5,11.8 758.5,86.3    "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="621.8" y1="-1.1" x2="603.7" y2="8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="743.7" y1="-61.8" x2="698.5" y2="-39.3"/>

                                            <ellipse fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" cx="653.6" cy="-71.8" rx="20.3" ry="8.2"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M653.6-67.7
                                            c-3.5,0-6.8-0.5-9.3-1.5c-2.3-0.9-3.1-2-3.1-2.5c0-0.6,0.8-1.6,3.1-2.5c2.5-1,5.8-1.5,9.3-1.5s6.8,0.5,9.3,1.5
                                            c2.3,0.9,3.1,2,3.1,2.5c0,0.6-0.8,1.6-3.1,2.5C660.4-68.2,657.1-67.7,653.6-67.7z"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M643.9-69.6
                                            c0.4-0.4,1.1-0.9,2.1-1.3c2-0.8,4.7-1.3,7.6-1.3c2.9,0,5.6,0.5,7.6,1.3c0.9,0.4,1.6,0.8,2,1.2"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M633.3-71.8L621.4,1.3
                                            c0,7.2,14.4,13.1,32.2,13.1c13.3,0,17-1.6,17.8-1.8"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="673.9" y1="-71.8" x2="679.8" y2="-35.5"/>

                                            <ellipse fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" cx="695.1" cy="-32.8" rx="16.4" ry="6.7"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M695.1-30.1
                                            c-2.8,0-5.4-0.4-7.3-1c-1.8-0.6-2.4-1.3-2.4-1.7c0-0.4,0.6-1.1,2.4-1.7c1.9-0.7,4.5-1,7.3-1c2.8,0,5.4,0.4,7.3,1
                                            c1.8,0.6,2.4,1.3,2.4,1.7c0,0.4-0.6,1.1-2.4,1.7C700.5-30.4,697.9-30.1,695.1-30.1z"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="720.6" y1="23" x2="711.6" y2="-32.8"/>
                                        <path fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M678.7-32.8L670.1,20
                                            l-1.1,6.4c0,5.5,10.4,10.1,23.8,10.6"/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="802.9" y1="-62.6" x2="877" y2="-99.7"/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="758.6,-92.5
                                            802.8,-70.5 861.8,-99.9 817.5,-122  "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="817.5,-122
                                            817.4,-112.9 767.6,-88.1    "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="817.4" y1="-112.9" x2="852.6" y2="-95.4"/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="743.7,-92
                                            817.8,-129.2 877,-99.5 877,78.4 862.3,85.9  "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="743.7,11.7
                                            743.7,-92.1 802.9,-62.6 802.9,115.7     "/>
                                        <polyline fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="581.8,71.4
                                            581.8,6 624,-15.1   "/>

                                            <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="677.4" y1="52.2" x2="758.5" y2="11.8"/>
                                    </g>
                                    <g>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="589.1,15.7
                                            589.1,30.5 611.2,41.6 611.2,26.8    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="618.6,30.4
                                            618.6,45.2 640.7,56.3 640.7,41.4    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="648.1,45.1
                                            648.1,59.9 670.2,70.9 670.2,56.2    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="751.4,22.9
                                            751.4,45.1 736.7,52.4 736.7,30.3    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="729.2,34
                                            729.2,56.2 714.4,63.5 714.4,41.3    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="707,45 707,67.2
                                            692.3,74.6 692.3,52.4   "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="751.4,52.2
                                            751.4,74.4 736.7,81.7 736.7,59.6    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="729.2,63.3
                                            729.2,85.4 714.4,92.8 714.4,70.6    "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="707,74.3
                                            707,96.5 692.3,103.9 692.3,81.7     "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="825,-52.5
                                            839.7,-59.8 839.7,-22.8 825,-15.5   "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="847.5,-63.6
                                            862.3,-71.1 862.3,-34.1 847.5,-26.7     "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="825,-0.7
                                            839.7,-8 839.7,29 825,36.4  "/>
                                        <polygon fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="847.5,-11.8
                                            862.3,-19.2 862.3,17.8 847.5,25.1   "/>

                                        <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="836.6" y1="91.1" x2="836.6" y2="54.1"/>
                                        <line fill="none" stroke="#3E95E9" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="854.8" y1="82" x2="854.8" y2="45"/>
                                    </g>
                                    </svg>
                                </div>
                                <div class="scope-info-text floated-r">
                                    <h4>Энергетическое строительство</h4>
                                    <p> Энергогенерирующие объекты,
                                        опоры ЛЭП, контактная сеть ж/д, осветительные опоры, системы крепления
                                        для гелиоэлектростанций
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--layout-content-->
                </section>

                <section class="competence" id="competence">
                    <div class="competence-bg"><div class="dotted-bg"></div></div>
                    <div class="layout-container competence-container">
                        <div class="competence-paralax-wrap">
                        <h1 class="key-competence" style="font-size:58px; line-height: 60px; margin-bottom:75px;"  >Компетентно подходим к задачам</h1>
                        <div class="competence-table-block">
                            <div class="white-line"></div>
                            <div class="competence-item"><div class="svg-table">
                                <svg version="1.1" id="svg-table-f" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path d="M75.656,54.606c0.113-0.47-0.176-0.942-0.646-1.055c-0.474-0.114-0.943,0.177-1.055,0.646
                                c-1.262,5.251-4.492,9.764-8.854,12.938l-7.424-20.096c4.431-2.629,7.41-7.446,7.41-12.972c0-8.038-6.29-14.588-14.213-15.044
                                v-6.123c0-0.483-0.392-0.875-0.875-0.875s-0.875,0.392-0.875,0.875v6.123c-7.923,0.456-14.213,7.006-14.213,15.044
                                c0,5.231,2.663,9.837,6.706,12.544l-7.391,20.008c-4.017-3.14-6.986-7.445-8.182-12.42c-0.112-0.469-0.581-0.76-1.055-0.646
                                c-0.47,0.113-0.759,0.585-0.646,1.056c1.334,5.548,4.695,10.335,9.245,13.738l-6.814,18.445c-0.167,0.453,0.064,0.956,0.518,1.123
                                c0.1,0.037,0.203,0.055,0.303,0.055c0.356,0,0.69-0.219,0.821-0.572l6.66-18.028C39.37,72.153,44.54,73.777,50,73.777
                                c5.166,0,10.072-1.459,14.223-3.97L70.722,87.4c0.13,0.354,0.465,0.572,0.821,0.572c0.101,0,0.203-0.018,0.303-0.055
                                c0.453-0.167,0.685-0.67,0.518-1.123l-6.639-17.973C70.617,65.396,74.258,60.427,75.656,54.606z M36.662,34.069
                                c0-7.355,5.983-13.338,13.338-13.338s13.338,5.983,13.338,13.338c0,5.069-2.843,9.484-7.017,11.741
                                c-0.01,0.003-0.019,0.001-0.029,0.005c-0.027,0.01-0.045,0.031-0.071,0.044c-1.859,0.985-3.975,1.549-6.221,1.549
                                C42.645,47.407,36.662,41.424,36.662,34.069z M50,72.027c-5.257,0-10.221-1.61-14.3-4.343l7.455-20.181
                                c2.056,1.05,4.378,1.654,6.845,1.654c2.178,0,4.244-0.471,6.114-1.302l7.497,20.294C59.668,70.605,54.96,72.027,50,72.027z"/>
                            </svg>
                            </div>Проектируем конструкции любой<br> сложности:  от типовых до уникальных</div>
                            <div class="competence-item"><div class="svg-table">
                                <svg version="1.1" id="svg-table-s" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path d="M73.5,10.875h-47c-0.483,0-0.875,0.392-0.875,0.875v68c0,0.483,0.392,0.875,0.875,0.875h25.458v7.625
                                c0,0.298,0.151,0.575,0.402,0.736c0.251,0.161,0.566,0.184,0.836,0.06L59,86.399l5.803,2.646c0.116,0.053,0.24,0.079,0.363,0.079
                                c0.165,0,0.33-0.047,0.473-0.139c0.25-0.161,0.402-0.438,0.402-0.736v-7.625H73.5c0.483,0,0.875-0.392,0.875-0.875v-68
                                C74.375,11.266,73.983,10.875,73.5,10.875z M59,75.714c-4.667,0-8.464-3.797-8.464-8.464s3.797-8.464,8.464-8.464
                                s8.464,3.797,8.464,8.464S63.667,75.714,59,75.714z M59.363,84.641c-0.231-0.105-0.495-0.105-0.727,0l-4.928,2.248V75.682
                                c1.535,0.965,3.345,1.532,5.292,1.532s3.757-0.567,5.292-1.532V86.89L59.363,84.641z M72.625,78.875h-6.583v-4.576
                                c1.805-1.803,2.922-4.296,2.922-7.049c0-5.503-4.461-9.964-9.964-9.964s-9.964,4.461-9.964,9.964c0,2.753,1.117,5.246,2.922,7.049
                                v4.576H27.375v-66.25h45.25V78.875z"/>
                            </svg>
                            </div>Соблюдаем корпоративные  <br>
                                стандарты клиента</div>
                            <div class="competence-item"><div class="svg-table">
                                                            <svg version="1.1" id="svg-table-t" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <g>
                                <path d="M50,22.701c12.131,0,22,9.869,22,22c0,5.623-2.121,10.975-5.972,15.068c-4.191,4.455-6.508,10.076-6.528,15.834h-19
                                    c-0.019-5.781-2.321-11.386-6.487-15.79c-4.319-4.566-6.479-10.801-5.926-17.105c0.94-10.711,9.753-19.293,20.499-19.963
                                    C49.057,22.716,49.532,22.701,50,22.701 M50,20.701c-0.509,0-1.021,0.016-1.537,0.048c-11.712,0.73-21.341,10.094-22.367,21.784
                                    c-0.635,7.233,1.943,13.873,6.465,18.655c3.726,3.939,5.94,9.065,5.94,14.488v0.121c0,0.998,0.809,1.807,1.807,1.807h19.386
                                    c0.998,0,1.807-0.809,1.807-1.807v-0.118c0-5.446,2.253-10.572,5.985-14.538C71.525,56.846,74,51.063,74,44.701
                                    C74,31.447,63.255,20.701,50,20.701L50,20.701z"/>
                            </g>
                            </svg>

                            </div>Снижаем стоимость проекта<br> за счет оптимизации металлоемкости</div>
                            <div class="competence-item">
                                <div class="svg-table">
                                    <svg version="1.1" id="svg-table-fr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <path d="M75.857,81.735l-7.839-24.419c-0.018-0.056-0.055-0.098-0.082-0.147c3.998-4.317,6.445-10.091,6.445-16.438
                                    c0-13.367-10.836-24.203-24.203-24.203S25.975,27.363,25.975,40.73c0,6.244,2.365,11.934,6.247,16.227
                                    c-0.104,0.098-0.193,0.213-0.24,0.358l-7.839,24.419c-0.098,0.305-0.022,0.638,0.198,0.869s0.548,0.324,0.857,0.245l11.182-2.929
                                    l7.389,8.89c0.168,0.202,0.416,0.315,0.673,0.315c0.056,0,0.111-0.005,0.166-0.016c0.314-0.062,0.569-0.288,0.667-0.592L50,73.795
                                    l4.726,14.723c0.098,0.304,0.353,0.53,0.667,0.592c0.055,0.011,0.11,0.016,0.166,0.016c0.257,0,0.505-0.113,0.673-0.315l7.389-8.89
                                    l11.182,2.929c0.308,0.079,0.638-0.013,0.857-0.245C75.878,82.372,75.955,82.039,75.857,81.735z M50.178,18.277
                                    c12.381,0,22.453,10.072,22.453,22.453S62.558,63.183,50.178,63.183S27.725,53.111,27.725,40.73S37.797,18.277,50.178,18.277z
                                     M44.095,86.465l-6.726-8.092c-0.218-0.261-0.568-0.369-0.895-0.287l-10.179,2.666l7.216-22.48
                                    c3.656,3.475,8.395,5.816,13.661,6.469c-0.012,0.117-0.003,0.238,0.035,0.357l1.873,5.834L44.095,86.465z M63.525,78.086
                                    c-0.326-0.083-0.677,0.025-0.895,0.287l-6.726,8.092l-6.921-21.562c0.396,0.019,0.794,0.03,1.194,0.03
                                    c6.325,0,12.081-2.429,16.393-6.401l7.133,22.22L63.525,78.086z"/>
                                </svg>
                            </div>Работаем в соответствии <br> с еврокодами</div>
                            <div class="competence-item"><div class="svg-table">
                                                        <svg version="1.1" id="svg-table-fv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <g>
                            <path d="M79,43.324h-4.369c-0.622-2.649-1.659-5.151-3.094-7.467l3.09-3.09c0.683-0.683,0.683-1.791,0-2.475l-5.767-5.767
                                c-0.342-0.342-0.79-0.513-1.237-0.513s-0.896,0.171-1.237,0.513l-3.09,3.09c-2.316-1.436-4.818-2.472-7.467-3.094v-4.369
                                c0-0.966-0.784-1.75-1.75-1.75h-8.156c-0.966,0-1.75,0.784-1.75,1.75v4.369c-2.649,0.622-5.151,1.659-7.467,3.094l-3.09-3.09
                                c-0.342-0.342-0.79-0.513-1.237-0.513s-0.896,0.171-1.237,0.513l-5.767,5.767c-0.683,0.683-0.683,1.791,0,2.475l3.09,3.09
                                c-1.436,2.316-2.472,4.818-3.094,7.467H21c-0.966,0-1.75,0.784-1.75,1.75v8.156c0,0.966,0.784,1.75,1.75,1.75h4.369
                                c0.622,2.649,1.658,5.151,3.094,7.467l-3.09,3.09c-0.683,0.683-0.683,1.791,0,2.475l5.767,5.767
                                c0.342,0.342,0.79,0.513,1.237,0.513s0.896-0.171,1.237-0.513l3.09-3.09c2.316,1.436,4.818,2.472,7.467,3.094v4.369
                                c0,0.966,0.784,1.75,1.75,1.75h8.156c0.966,0,1.75-0.784,1.75-1.75v-4.369c2.649-0.622,5.151-1.659,7.467-3.094l3.09,3.09
                                c0.342,0.342,0.79,0.513,1.237,0.513s0.896-0.171,1.237-0.513l5.767-5.767c0.683-0.683,0.683-1.791,0-2.475l-3.09-3.09
                                c1.436-2.316,2.472-4.818,3.094-7.467H79c0.966,0,1.75-0.784,1.75-1.75v-8.156C80.75,44.108,79.966,43.324,79,43.324z M79,53.23
                                h-5.796c-0.606,3.469-1.968,6.675-3.913,9.445l4.099,4.099l-5.767,5.767l-4.099-4.099c-2.77,1.945-5.976,3.308-9.445,3.913v5.797
                                h-8.156v-5.797c-3.469-0.606-6.675-1.968-9.445-3.913l-4.1,4.1l-5.767-5.767l4.1-4.1c-1.945-2.77-3.308-5.976-3.913-9.445H21
                                v-8.156h5.797c0.606-3.469,1.968-6.675,3.913-9.445L26.61,31.53l5.767-5.767l4.099,4.099c2.77-1.945,5.976-3.308,9.445-3.913
                                v-5.796h8.156v5.796c3.469,0.606,6.675,1.968,9.445,3.913l4.099-4.099l5.767,5.767l-4.099,4.099
                                c1.945,2.77,3.308,5.976,3.913,9.445H79V53.23z"/>
                            <path d="M50,35.152c-7.72,0-14,6.28-14,14s6.28,14,14,14s14-6.28,14-14S57.72,35.152,50,35.152z M50,61.402
                                c-6.755,0-12.25-5.495-12.25-12.25s5.495-12.25,12.25-12.25s12.25,5.495,12.25,12.25S56.755,61.402,50,61.402z"/>
                        </g>
                        </svg>
                            </div>Оказываем постпродажную поддержку</div>
                            <div class="competence-item"><div class="svg-table">
                                                        <svg version="1.1" id="svg-table-sx" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="70px" height="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M50,22.789c15.004,0,27.211,12.207,27.211,27.211S65.004,77.211,50,77.211S22.789,65.004,22.789,50S34.996,22.789,50,22.789
                             M50,21.039c-15.995,0-28.961,12.966-28.961,28.961c0,15.995,12.966,28.961,28.961,28.961c15.995,0,28.961-12.966,28.961-28.961
                            C78.961,34.005,65.995,21.039,50,21.039L50,21.039z M48.518,59.482c0.263-0.014,0.505-0.144,0.66-0.354l11.14-15.106
                            c0.287-0.39,0.204-0.937-0.185-1.224c-0.39-0.288-0.938-0.203-1.224,0.185L48.404,57.228l-8.2-9.043
                            c-0.325-0.357-0.878-0.383-1.236-0.061c-0.357,0.325-0.385,0.878-0.061,1.236l8.918,9.835c0.167,0.184,0.402,0.287,0.648,0.287
                            C48.488,59.483,48.503,59.483,48.518,59.482z"/>
                        </svg>

                            </div><span class="table-text-container">Используем технологию <br> BIM-проектирования и гарантируем <br> собираемость конструкций</span></div>
                        </div>
                        </div>
                    </div>
                </section>


                <section class="projects projecting-projects" id="projects">
                    <div class="layout-container">
                        <h1>Наши<br>Работы</h1>
                        <p><strong>312</strong> проектов<br> для <strong>146</strong> компаний<br> из <strong>16</strong> стран мира</p>
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

                        <div class="gallery-block projecting-gallery" >
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


                <section class="partnership" id="partnership">
                    <div class="layout-container">
                        <h1>Проектируем для всего мира
                        </h1>
                        <p class="on-map-p">Компания Steel Work Group выполнила более 123 проектов <br>
                        для 107 компаний из 25 стран мира</p>
                        <div class="map-block">

                           <div class="svg-cont-map">
                               <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="940px"
	 height="576.6px" viewBox="0 0 940 536.6" enable-background="new 0 0 940 536.6" xml:space="preserve">
<g id="Background">
</g>
<g id="Objects">
	<g>
		<polygon fill="#E6EEF4" points="527.5,229.1 527.5,229.1 527.4,229.8 		"/>
		<polygon fill="#E6EEF4" points="507,218.9 507.2,219.2 507.1,219 		"/>
		<polygon fill="#E6EEF4" points="515.7,207.7 515.5,207.2 515.7,207.9 		"/>
		<polygon fill="#E6EEF4" points="508.1,223.7 508.2,223.7 508.4,223.5 		"/>
		<polygon fill="#E6EEF4" points="510.3,226.8 510.4,226.8 510.4,226.5 		"/>
		<polygon fill="#E6EEF4" points="525.6,207.3 524.9,207.5 526.7,207.1 		"/>
		<polygon fill="#E6EEF4" points="503,118.5 502.5,118 502.5,118 		"/>
		<polygon fill="#E6EEF4" points="482.2,210.7 482.2,210.3 482.2,210.7 		"/>
		<polygon fill="#E6EEF4" points="473.2,203.3 473.6,203.2 473.6,203.2 		"/>
		<polygon fill="#E6EEF4" points="477.3,209.7 476.4,210 477.3,209.7 		"/>
		<polygon fill="#E6EEF4" points="508.1,203.8 508,203.1 508.1,203.9 		"/>
		<polygon fill="#E6EEF4" points="481.9,210 481.6,209.9 482.2,210.3 		"/>
		<polygon fill="#E6EEF4" points="751.1,312.5 751.4,312.4 751.7,312.2 		"/>
		<polygon fill="#E6EEF4" points="500.6,214.3 500.6,214.2 500.4,213.3 		"/>
		<polygon fill="#E6EEF4" points="492.6,214.4 493.2,213.5 493.2,213.5 		"/>
		<polygon fill="#E6EEF4" points="475.6,215.7 476.2,216 475.6,215.8 		"/>
		<polygon fill="#E6EEF4" points="531.1,216.9 530.7,216.1 530.6,216.1 		"/>
		<polygon fill="#E6EEF4" points="624.1,267.1 624.1,267.1 626.1,264.3 		"/>
		<path fill="#E6EEF4" d="M601.6,240.8l0-1.4l-0.1-0.4l0-0.8l-0.2-0.6l-0.7-0.4l-0.3-0.5l-0.4-0.1l-0.2-0.2l-0.3,0.1l0.1,0.6
			l-0.3-0.5l0-0.5l0.5-0.4l0.2,0.2l0.3-0.1l0.5,0.1l0.2-0.2l-0.4-0.5l-0.3,0.1l-0.2-0.6l0.1-0.6l-0.2-0.2l-0.4,0.3l-0.8-0.1
			l-0.2,0.2l0.3,0.3l0.1,0.4l-1-0.9l-0.1-0.4l-0.3-0.4l-0.1-1.4l0.3-0.6l0.1-0.8l-0.6-0.9l-0.2-0.5l-0.5-0.4l-0.2-0.4l-0.4-0.4
			l0-0.2l-0.1-0.7l-0.1-0.7l0.3-0.8l0.1-0.8l0-0.3l0.1-0.2l-0.2-0.1l-0.6,0l-0.4-0.2l-0.5-0.1l-0.4,0.2l-0.2-0.1l-0.2-0.5l-0.2-0.2
			l-0.2-0.5l-0.3-0.1l-0.2,0.1l-0.5,0.1l-0.2,0l0.1-0.7l-0.1-0.5l-0.8-0.9l-0.1-0.3l-0.2-0.1l-0.2-0.6l-0.3-0.2l-0.2-0.4l-0.5-0.2
			l-0.4,0l-0.3-0.4l0-0.3l0.2-0.3l0.3,0.1l0.8-0.1l0.2,0.1l0.3,0l0.2,0.1l0.3-0.2l0.2-0.1l0.5,0.2l0.1-0.1l-0.1-0.3l-0.6,0l-0.2-0.1
			l0-0.4l-0.5-0.6l-0.1-0.3l0.3-0.2l0-0.4l-0.1-0.3l0.3-0.4l0.6-0.2l0.5-0.2l0.4,0.2l0.5-0.2l0.5-0.1l0.2,0.2l0.2-0.2h0.4l0.5,0.5
			h0.4l0.6-0.3l0.1-0.3l-0.4-0.1l-0.5-0.1l-0.4-0.7l0.1-0.6l0.4-0.2l0.2-0.3l-0.2-0.2l-0.2-0.2L595,212l0.3-0.6l0-0.4l-0.4-0.4
			l-0.1-0.3l0.2-0.4l0-0.2l-0.4-0.1l-0.2-0.4l-0.1-0.2l-1,0l-0.4-0.1l-0.4,0.1l-0.1,0.2l-0.3,0.2l0,0.3l-0.3,0.2l-0.4-0.2l0-0.2
			l-0.3,0l-0.2,0.2l-0.3-0.3l0-0.4l-0.1-0.1l-0.2,0.2h-0.4l-0.3-0.2l-0.7,0l-0.4,0.4l-0.1,0.4l-0.2,0.1l-0.2-0.2h-0.3l-0.3,0.4
			l-0.3,0l-0.2,0.4l-0.5,0.4l-0.3,0l-0.1,0.3l-0.2,0.2l-0.2-0.2l-0.2,0l-0.2,0.3l-0.4,0l-0.1-0.3l-0.2,0l0,0v0l0,0l0,0.2l0,0.3
			l-0.4,0.1l0.2,0.2l0,0.3l-0.3,0l0.3,0.2v0.3l-0.4-0.1l-0.2,0.1l-0.5-0.1l-0.4,0.1l0.8,0.5l0.1,0.3l-0.2,0.2l-0.3-0.3
			c0,0-0.4,0.1-0.4,0.1c-0.1,0-0.3-0.1-0.3-0.1l-0.3,0l0.4,0.2l0.1,0.2l-0.4,0.3h-0.4L582,214l-0.2-0.2l-0.1,0.3l-0.2,0.1l-0.3-0.2
			l-0.3-0.1l0,0.4l-0.2,0.4l-0.1,0.6l-0.3,0.2l-0.2,0.6l-0.2,0.4v1l-0.3,0.2l-0.2,0.5l0.3,1l0.5,0.1l0.3-0.1l0.4,0.4l0.5,0.2v0.9
			l0.6,0.4l0.3-0.3l0.3,0l-0.2,0.5l-0.1,0.5l-0.3-0.1l-0.1,0.5h0.4l0.1,0.3l0.2,0.4l0.1,0.8l0.4,0.5l0.2,0.8l1,1.3l1.5,1.2l0.2,0.2
			l0,0l-0.9,1.1l1-1.2l0.6,0.4l0.9,1.1l0,0.5l0.4,0.8l0.9,0.7l0.1,0.4l0.6,0.5l0.7,0l0.7,0.3l0.4,0.6l-0.4-0.1l-0.4,0.3l-0.7,0
			l-0.8,0.7l0.1,0.7l0.1,0.6l-0.3,0.3l-0.1,0.5l0.2,0.3v0.4l-0.3,0.2v1l-0.2,0.4l-0.2-0.3l0.2-0.6L588,237l-0.2,0.2l-0.2,0.4
			l0.2,0.7l-0.1,0.4l0.1,0.2l0,1.1l0,0.2l0.4,0.6l0.1,0.7l-0.1,0.6l0.2,0.3l0.4,0.1l0.5,0.6h0.7l0.5,0.2l0.7-0.2l0.6,0.4l0.4,0
			l0.2,0.6l0.4,0.5l1.4,0.6l0.6,0.1l1.7,0.5h0.8l1.8-0.5l1.4-0.2l1.6,0.1l0.6,0.1l0.2-0.7l-0.4-0.6l-0.3-0.7l-0.5-1.4L601.6,240.8z"
			/>
		<polygon fill="#E6EEF4" points="566.8,260.6 564.3,260.3 564.2,260.3 		"/>
		<polygon fill="#E6EEF4" points="262.3,169.2 262.5,169.1 262.8,168.7 263.2,168 262.4,168.8 		"/>
		<polygon fill="#E6EEF4" points="294.1,330.3 293.3,331.3 292.7,331.7 293.3,331.3 		"/>
		<polygon fill="#E6EEF4" points="208.6,303.3 213.4,303.3 213.4,303.3 		"/>
		<polygon fill="#E6EEF4" points="212.6,313.2 212.9,313 212.1,313.5 		"/>
		<polygon fill="#E6EEF4" points="577.2,244.7 577.1,244.7 576.5,244.9 		"/>
		<polygon fill="#E6EEF4" points="682.8,195.3 682.4,195.3 682.3,195.1 682.4,195.3 		"/>
		<polygon fill="#E6EEF4" points="571.8,230.6 572.3,231.1 571.9,230.7 		"/>
		<polygon fill="#E6EEF4" points="580.7,238.5 580.7,238.5 579.5,236.7 		"/>
		<polygon fill="#E6EEF4" points="554.1,264.1 554.3,261.8 554.2,262.8 		"/>
		<polygon fill="#E6EEF4" points="576,235.6 576,235.6 575.9,235.4 		"/>
		<polygon fill="#E6EEF4" points="554.3,259.5 554.6,259.6 554.4,259.6 		"/>
		<polygon fill="#E6EEF4" points="555.1,259 555.4,259 555.1,259 		"/>
		<polygon fill="#E6EEF4" points="497.5,317.9 497.2,317.2 497.2,317.2 		"/>
		<polygon fill="#E6EEF4" points="461.4,323.2 461.7,322.6 461.6,322.8 		"/>
		<polygon fill="#E6EEF4" points="281.1,346.9 281.3,346 281.1,345.7 281.3,346 		"/>
		<polygon fill="#E6EEF4" points="425.3,312 425.7,312.3 425.3,312 		"/>
		<polygon fill="#E6EEF4" points="503.4,347.3 504.7,345.1 503.5,347.1 		"/>
		<polygon fill="#E6EEF4" points="484.4,212.6 485,211.9 485,211.9 		"/>
		<polygon fill="#E6EEF4" points="544,356.9 547.4,356.9 546.3,356.9 		"/>
		<polygon fill="#E6EEF4" points="493.9,367.9 494.5,367.4 494.4,367.5 		"/>
		<polygon fill="#E6EEF4" points="510.2,343.8 510.2,343.2 510.2,343.7 		"/>
		<polygon fill="#E6EEF4" points="494.8,348.1 498.3,348.2 494.8,348.1 		"/>
		<polygon fill="#E6EEF4" points="492.7,317.2 493,316.7 492.9,316.8 		"/>
		<polygon fill="#E6EEF4" points="435.1,274.9 435.1,275.7 435.1,274.9 		"/>
		<polygon fill="#E6EEF4" points="610.1,288.4 610.1,288.4 612.4,281.1 		"/>
		<polygon fill="#E6EEF4" points="497.2,317.2 497.2,317.2 497.2,317.2 		"/>
		<polygon fill="#E6EEF4" points="460,311.6 460.2,311.3 460.1,311.4 		"/>
		<polygon fill="#E6EEF4" points="491.8,316.9 492.3,317.3 492.1,317.2 		"/>
		<polygon fill="#E6EEF4" points="444.2,323.9 444.7,323.6 444.6,323.7 		"/>
		<polygon fill="#E6EEF4" points="437.7,324.7 438.7,324.1 437.9,324.5 		"/>
		<polygon fill="#E6EEF4" points="515.5,185.6 515.9,186.4 515.8,186.2 		"/>
		<polygon fill="#E6EEF4" points="514.9,203.9 515.5,203.9 514.9,203.9 		"/>
		<polygon fill="#E6EEF4" points="524.7,172.1 524.1,172.1 523.3,171.9 		"/>
		<polygon fill="#E6EEF4" points="526.8,291.5 525.8,269.5 527,297 		"/>
		<polygon fill="#E6EEF4" points="514.1,206.1 514.2,206.1 513.5,206.5 		"/>
		<polygon fill="#E6EEF4" points="506.1,216 506.5,216.2 506.4,216.2 		"/>
		<polygon fill="#E6EEF4" points="511.9,229.3 512,229.5 512.1,229.6 		"/>
		<polygon fill="#E6EEF4" points="577,319.2 576.4,319.3 575.8,319.5 		"/>
		<polygon fill="#E6EEF4" points="544.1,418 544,417.9 543.5,417.5 		"/>
		<polygon fill="#E6EEF4" points="527,403.7 527.4,404.2 527.4,404.2 		"/>
		<polygon fill="#E6EEF4" points="544.8,428.1 544.8,427.1 544.8,428.1 		"/>
		<polygon fill="#E6EEF4" points="578,322.9 578,323 577.8,323.3 		"/>
		<polygon fill="#E6EEF4" points="554.1,386.5 553.6,388.4 553.5,389 		"/>
		<polygon fill="#E6EEF4" points="540.7,357.8 540,358.4 540.6,357.9 		"/>
		<polygon fill="#E6EEF4" points="560,313.5 560.2,313.6 560.6,313.7 		"/>
		<polygon fill="#E6EEF4" points="526.5,176.9 526.3,177 525.8,177.1 		"/>
		<polygon fill="#E6EEF4" points="276.7,421.1 276.4,420.3 276.4,420.3 		"/>
		<polygon fill="#E6EEF4" points="300.7,411.6 300.4,411.3 300.1,410.9 		"/>
		<polygon fill="#E6EEF4" points="288.1,342.1 288.1,342.1 287.6,341.9 		"/>
		<polygon fill="#E6EEF4" points="282,348.8 282.3,348.6 283.6,348.3 282.3,348.6 		"/>
		<polygon fill="#E6EEF4" points="265.8,366.6 265.8,366.3 265.6,365.7 		"/>
		<polygon fill="#E6EEF4" points="275.2,351.6 276.3,352.4 276.9,352.5 276.3,352.4 		"/>
		<polygon fill="#E6EEF4" points="272.6,336.3 273,336.5 273.2,337.6 273,336.5 		"/>
		<polygon fill="#E6EEF4" points="261.7,334.3 262.2,334.1 262.1,334.1 		"/>
		<polygon fill="#E6EEF4" points="271.8,341.5 271.8,341.5 272.1,340.8 		"/>
		<polygon fill="#E6EEF4" points="259.2,333.1 259.8,333.6 260.6,333.9 259.8,333.6 		"/>
		<path fill="#E6EEF4" d="M100.4,123l0-0.4l-0.7,0.6c0,0,0.3,0.1,0.3,0.1L100.4,123z"/>
		<polygon fill="#E6EEF4" points="101.1,121.8 101.2,122.1 101.5,122.1 101.6,121.8 102.1,121.3 102.3,120.9 102.7,120.5
			102.6,120.3 102.2,120.3 101.9,120.7 101.8,121 		"/>
		<polygon fill="#E6EEF4" points="102.2,117.8 101.9,118.2 102.4,118.9 102.5,118.6 102.5,118.3 102.6,118 		"/>
		<polygon fill="#E6EEF4" points="103.4,121.6 103.3,121.3 102.8,122 102.6,122 102,122.7 101.5,122.8 100.5,123.7 100.4,124
			100.2,124.1 99.8,124.2 99.8,124.4 100.3,124.4 100.7,124.2 101.3,124.4 101.4,124 101.3,123.7 101.8,123.6 102.6,122.6
			103.3,122.4 103.6,122.1 103.3,121.9 		"/>
		<polygon fill="#E6EEF4" points="101.9,126.9 102.7,126.8 102.4,126.6 		"/>
		<path fill="#E6EEF4" d="M59.3,143l-0.4,0.6c0,0,0.3-0.2,0.3-0.2L59.3,143z"/>
		<polygon fill="#E6EEF4" points="108,125.4 108,125.9 108.5,125.7 109,125.2 108.7,125.2 		"/>
		<polygon fill="#E6EEF4" points="128.1,157.8 128.4,157.5 128.2,157.2 127.9,157.2 128.2,156.8 128.5,156.7 129,156.3 129,155.9
			128.8,155.8 128.4,155.9 128.4,155.7 129,155.4 128.7,154.9 128.1,154.4 128.3,153.9 128.5,154.1 128.9,154 128.9,153.6
			128.4,153.1 128.8,153.1 128.8,152.3 128.2,151.9 128,152 127.7,151.6 127.8,151.3 128.2,150.8 127.8,150.2 127.4,150.1
			127,150.4 127.4,150.8 127.6,151.4 127.3,152.2 127.3,152.6 127.2,153.1 126.7,153.2 126.5,153.5 126.7,153.7 127,153.6
			127.3,153.7 127.3,153.9 126.7,154.3 126.7,154.6 126.6,155 126.3,155 126.1,155.3 126.3,155.5 126.7,155.5 126.9,155.8
			127,155.5 127.4,155.4 127.6,155.7 127.2,155.9 127.1,156.2 127.4,156.6 127.1,156.9 127,157.3 127.5,157.8 127.3,158.2
			127.6,158.4 128.1,158.4 128.4,158.1 		"/>
		<polygon fill="#E6EEF4" points="84.9,122.5 85.4,122.8 85.8,122.6 85.4,122.4 		"/>
		<polygon fill="#E6EEF4" points="105.2,118.5 104.9,118.3 104.6,118.6 105,118.7 		"/>
		<polygon fill="#E6EEF4" points="103.6,119.3 103.5,119.7 104.1,119.8 104,119.4 		"/>
		<polygon fill="#E6EEF4" points="105,121.5 104.9,121 104.6,120.8 104.2,121.1 104.3,122 105,122.1 105.5,121.9 105.3,121.5 		"/>
		<polygon fill="#E6EEF4" points="77.2,92.4 77.4,91.9 77.1,91.5 76.4,91.6 76.2,91.7 76.9,92.4 		"/>
		<polygon fill="#E6EEF4" points="65.6,122.7 66.2,122 66.1,121.7 65.7,121.9 65,122.4 65,122.8 65.2,123 		"/>
		<polygon fill="#E6EEF4" points="66.7,122.3 66.2,122.5 66.4,122.7 66.6,122.6 		"/>
		<polygon fill="#E6EEF4" points="68.4,136.7 68.9,137.2 69.3,137 68.9,136.7 		"/>
		<polygon fill="#E6EEF4" points="92,117.7 91.6,117.7 90.8,118.6 91.3,118.6 92,118.2 		"/>
		<polygon fill="#E6EEF4" points="83.7,131.2 83.2,131.3 82.7,131.9 82.3,131.8 82.3,131.6 82.6,131.4 82.6,131 82.1,130.6
			81.8,130.8 82,131.2 81.9,131.7 81.6,131.5 81.4,131.6 81.1,132.1 80.8,132.2 80.8,131.8 81,131.5 81.1,131 80.7,130.7
			80.3,130.7 79.8,131.3 79.9,131.5 80.4,131.9 80.3,132.3 79.9,132.1 79.8,132.2 79.9,132.7 79.4,133.3 79.2,133.1 79.2,132.1
			79,131.9 78.3,132 77.1,132.6 76.4,133.2 76.2,133.5 76.4,133.8 76.4,134.5 76.3,135 76,135.4 76.1,135.9 76.5,136.1 76.8,136.1
			76.9,135.7 76.8,135.6 76.5,135.5 76.8,135.2 77.4,135.2 77.2,135.5 77.4,135.7 77.9,135.4 78.1,135.4 77.7,135.9 77.7,136.2
			76.8,137 76.7,137.2 77.2,137.3 77.5,137 77.8,136.8 77.8,136.4 78.5,136.1 78.3,135.8 78.6,135.5 78.9,135.5 79.2,134.9
			79.4,135 79.9,134.8 80.4,135 80.7,134.7 80.5,134.4 80,134.1 80.4,133.9 81.1,134 81.4,134.5 81.8,134.6 82.2,134.1 81.9,133.5
			81.4,133.4 81.6,133.1 82,133.1 82.4,133.3 82.8,133.1 82.9,133.4 83.3,133.5 83.7,132.9 83.5,132.5 83.2,132.4 83.3,132
			83.8,132 84.3,131.9 84,131.3 		"/>
		<polygon fill="#E6EEF4" points="70.2,141.6 70.5,141.7 70.8,141.5 70.9,141.1 70.3,141.3 		"/>
		<polygon fill="#E6EEF4" points="85.3,129.7 85.5,129.3 85.7,129 85.5,128.6 85.2,128.7 85.1,129 84.8,128.9 84.9,128.4
			84.6,128.3 84.1,128.4 83.8,128.8 84.1,129.1 83.8,129.5 83.4,129.4 83.2,129.6 82.8,129.5 82.6,129.7 82.7,129.9 83.3,130.6
			83.7,130.5 84.2,130.1 84.4,130.5 84.7,130.5 85.1,130 85.4,130.2 85.8,130.1 85.6,129.8 		"/>
		<polygon fill="#E6EEF4" points="85.6,127.7 85.6,127.2 85.2,127.2 85,127.3 84.8,127.7 85.1,128 		"/>
		<polygon fill="#E6EEF4" points="74.2,138.5 74.7,138.5 75.8,137.4 74.6,137.8 		"/>
		<polygon fill="#E6EEF4" points="76,138.2 76.2,137.8 75.8,137.9 		"/>
		<polygon fill="#E6EEF4" points="126.7,156.5 126.5,156.2 126.4,156.5 126.6,156.8 		"/>
		<polygon fill="#E6EEF4" points="129.6,157.8 130.1,158.1 130.5,157.7 130.1,157.4 		"/>
		<polygon fill="#E6EEF4" points="129.9,156.7 129.6,156.9 130,157.2 130.6,156.7 130.3,156.1 129.8,156.3 		"/>
		<polygon fill="#E6EEF4" points="126.2,144.1 125.8,144.1 126,144.5 		"/>
		<polygon fill="#E6EEF4" points="129.8,151.3 130.1,151 130.1,150.6 129.2,151.2 129.1,151.7 129.5,151.8 		"/>
		<polygon fill="#E6EEF4" points="129.8,150.3 129.9,149.9 129,149.8 128.6,150.3 128.9,150.7 129.3,150.9 		"/>
		<polygon fill="#E6EEF4" points="130.4,155.3 131.4,154.8 131.4,155 130.9,155.4 130.5,156 130.8,156.3 131.6,155.6 132.3,154.6
			132.1,154.1 132.4,153.5 132.1,152.9 131.5,152.9 131.5,153.2 130.9,153.5 130.6,154.2 130.7,154.5 130.2,154.9 		"/>
		<polygon fill="#E6EEF4" points="130.6,151.6 130.9,151.2 131,150.6 130.8,150.5 130.5,150.9 130.3,151.2 		"/>
		<polygon fill="#E6EEF4" points="125.3,138.2 124.8,138.7 125.1,138.8 125.5,138.5 		"/>
		<polygon fill="#E6EEF4" points="123.7,140.6 123.4,141.2 123.8,141.9 123.6,142.4 124,142.7 123.6,143.1 124.1,143.7 124.6,143.7
			124.9,143.3 124.9,142.7 124.6,141.9 124.7,141.4 125.4,142.6 125.4,143.1 125.9,143.7 126.3,143.7 126.3,142.9 126.6,142.6
			126.3,142.2 125.7,142.1 125.7,141.6 125,140.6 125.1,140.4 125.7,141 126.1,141.6 126.5,141.7 126.8,141.4 126.6,141.1
			127.1,141 127.1,140.5 126.5,140.1 126.1,140.2 125.9,140.5 125.7,140.2 126,139.8 126,139.4 125.4,139.1 124.7,139.3
			124.6,139.6 124.3,139.7 124.1,139.1 123.8,139.7 123.9,140.4 124.2,140.6 124,140.9 		"/>
		<polygon fill="#E6EEF4" points="129.9,148.2 129.3,148.9 129.3,149.3 129.5,149.5 130.2,149.4 130.5,148.8 130.3,148 		"/>
		<polygon fill="#E6EEF4" points="128.1,139 127.7,139.8 127.6,141.5 127.1,142.2 127,143.2 127.4,143.4 127.2,143.7 127.4,144.1
			126.7,144.1 126.4,144.4 126.3,145 126,145.6 126.3,146 126.8,145.6 127.6,145.1 127.7,144.3 128.1,144.5 128.4,144.2
			128.5,143.8 128.6,143.4 128.7,141.5 128.8,141 129,142.1 128.9,143.4 129.2,143.6 129.5,142.8 129.3,140.7 129,140.3
			128.3,139.8 128.3,139.3 		"/>
		<polygon fill="#E6EEF4" points="129.5,155.3 129.7,155.6 129.6,156.1 130.1,155.6 129.7,155 		"/>
		<polygon fill="#E6EEF4" points="126.4,152.7 126.2,152.4 125.9,152.6 126.2,152.9 		"/>
		<polygon fill="#E6EEF4" points="125.6,155.8 125.4,155.9 125.6,156.4 126,156.3 125.9,155.9 		"/>
		<polygon fill="#E6EEF4" points="127.6,147.9 127.4,147.6 127.1,147.9 127.1,147.6 127.3,147.1 126.8,146.5 126.5,146.5 126.6,147
			126.1,146.8 125.9,147.2 125.8,147.8 126.1,148 125.7,148.6 126.1,148.9 126.1,149.2 125.8,149.5 125.5,149.3 125.3,149.7
			125.3,150 125.1,150.4 125,150.8 125.2,151.1 125.5,150.1 125.7,150.4 125.5,150.9 126.1,150.7 126.3,150.3 126.3,149.9
			127.2,149 		"/>
		<polygon fill="#E6EEF4" points="125.6,158.3 125.8,158.5 126.2,157.8 125.8,157.1 125.9,156.8 125.5,156.6 125.3,156.7
			125.2,157.1 125.6,157.7 		"/>
		<polygon fill="#E6EEF4" points="127,151.6 127.3,151.2 126.9,150.9 126.5,151.1 126,151.7 126.3,151.8 126.7,151.6 		"/>
		<polygon fill="#E6EEF4" points="124.8,151.7 124.4,151.5 124.5,151.9 		"/>
		<polygon fill="#E6EEF4" points="128.9,146.6 128.3,146 127.6,146 127.5,146.4 127.8,146.7 127.6,147.1 128.1,147.4 127.9,147.7
			127.5,149 127.5,149.7 127.9,149.8 128.2,149.4 128.4,149.5 128.8,149.3 128.5,148.8 128.7,148.6 128.7,148 129,147.9
			129.1,148.6 129.3,148.5 129.8,147.8 129.8,147.1 129.4,146.6 		"/>
		<polygon fill="#E6EEF4" points="124.2,150 124.4,149.8 124.6,149.4 124.7,148.7 124.9,148 125.2,147.7 125.3,146.7 125.6,146.4
			125.7,145.5 125.7,144.6 125.5,143.8 125.2,143.7 124.9,144 124.4,144.2 124.5,144.5 124.9,144.9 124.6,145.2 124.5,145.8
			124.2,146.2 123.8,146.3 123.7,146.5 124.3,146.7 124.2,146.9 124,147.1 124,147.4 124.3,147.4 124.6,147.2 124.7,147.5
			124.4,147.7 124,147.8 123.8,148.2 124,148.9 124.2,149.1 124.1,149.6 		"/>
		<polygon fill="#E6EEF4" points="125.5,154.9 125.2,155.3 125.5,155.5 		"/>
		<polygon fill="#E6EEF4" points="130.2,152.1 130.2,151.5 129.9,151.5 129.5,152.3 129.8,152.4 		"/>
		<polygon fill="#E6EEF4" points="124.8,154.5 124.7,155.2 125.2,154.6 		"/>
		<polygon fill="#E6EEF4" points="57.6,143.1 57,143.6 56.7,144.4 57,143.9 57.8,143.5 57.9,143.2 58.4,142.8 57.6,142.9 		"/>
		<polygon fill="#E6EEF4" points="26.5,150.4 27.1,150.4 26.9,150.1 		"/>
		<polygon fill="#E6EEF4" points="27.2,150.8 27.6,151.1 28,150.8 27.8,150.5 		"/>
		<path fill="#E6EEF4" d="M33.8,148.4l-0.2-0.6c0,0-0.5,0.3-0.5,0.3l-0.9,0l0.1,0.3l-0.2,0.5l-0.5,0.1l-0.7,0.6v0.3l-0.3,0.2
			l-0.4,0.6l-0.3,0l-0.5,0.5l1,0l0.6-0.7l0.7,0l0.9-1l0.8-0.3l0.2-0.5l0.5-0.2L33.8,148.4z"/>
		<polygon fill="#E6EEF4" points="39.1,146.4 38.5,146.3 38.3,145.9 37.8,146 37.2,146.4 37.2,146.9 37.7,147.3 37.5,147.5
			36.9,147.2 36.4,147.6 36.5,148 36.2,148 35.7,148.6 35.4,148.7 34.7,149.1 34.2,149.1 33.9,149.2 34.2,149.5 35.1,149.5
			35.9,149.3 36.5,148.6 36.6,149.1 36.8,149.2 37,148.7 37.2,148.2 37.5,148.3 37.7,148.6 38,148.6 38.4,148 39.1,147.7
			39.1,147.5 38.7,147.3 39.2,146.9 		"/>
		<polygon fill="#E6EEF4" points="26.2,151.3 26.6,151.4 26.9,151.3 26.5,151 		"/>
		<polygon fill="#E6EEF4" points="22.9,152.1 23.4,152.3 23.2,151.6 		"/>
		<polygon fill="#E6EEF4" points="19.1,152.2 18.9,152.8 19.7,152.8 20.3,152.5 19.8,152.1 		"/>
		<polygon fill="#E6EEF4" points="24.5,151.3 24.4,151.8 25,151.3 25.5,151.4 25,150.9 		"/>
		<polygon fill="#E6EEF4" points="42.8,146 42.8,146.3 43,146.4 43.5,146.3 43.3,146 		"/>
		<polygon fill="#E6EEF4" points="49.4,143.6 48.7,142.9 48.9,142.4 48.6,141.9 47.8,141.9 47.7,142.1 47.2,142.3 46.7,142.2
			46.4,142.5 45.9,142 45.7,142 45.3,142.9 45.1,143 44.6,143.4 44.3,143.3 44.1,143.6 43.9,144.1 44.1,144.5 44.6,144.8 45,144.6
			45.2,144.7 45.8,144 46.8,144 47.4,144.2 48.3,144.1 48.7,143.7 49.4,143.9 		"/>
		<polygon fill="#E6EEF4" points="49.1,145.3 49.5,145.8 49.9,145.5 49.4,145 		"/>
		<polygon fill="#E6EEF4" points="40.7,145.3 40.1,145.5 40.1,145.9 40.6,146.3 41,146.1 41.2,145.8 40.9,145.7 		"/>
		<polygon fill="#E6EEF4" points="42,145.6 41.9,145.1 41.7,145 41.7,145.4 41.6,145.9 		"/>
		<polygon fill="#E6EEF4" points="41.9,146.4 42.5,146.4 42.2,146.1 		"/>
		<polygon fill="#E6EEF4" points="54.7,112.1 55.3,112.2 55.8,112.6 56.2,112.2 56.8,112.4 57.5,112.4 57.7,111.7 58.2,111
			58.2,110.5 57.5,110 57.6,109.6 56.8,109.8 56.2,110.4 55.7,110.2 55.2,110.2 54.5,110 53.9,110 54.1,111.1 		"/>
		<polygon fill="#E6EEF4" points="51.2,143.2 51.4,143.7 51.8,143.3 51.7,142.9 		"/>
		<polygon fill="#E6EEF4" points="0,155.1 0.5,154.9 0.3,154.5 		"/>
		<path fill="#E6EEF4" d="M70.9,94.3l0.3,0.3L71.1,95c0,0-0.3,0.3-0.3,0.3l0.4,0.1l1.1-1l0.6-0.3l0-0.4l-1-0.6l-1.1,0.1l-0.4,0.2
			l0.5,0.5L70.9,94.3z"/>
		<path fill="#E6EEF4" d="M17.1,153.4l-1.3-0.3c0,0-0.5,0.1-0.5,0.1l0.3,0.3l0.5-0.1l1.3,0.3l0.7-0.2l-0.4-0.3L17.1,153.4z"/>
		<path fill="#E6EEF4" d="M68.8,79.9l0.4-0.4l-0.4-0.1c0,0-0.4,0.1-0.4,0.1L68.8,79.9z"/>
		<polygon fill="#E6EEF4" points="69.2,96.3 69.6,96.6 69.6,96.9 70,97.2 70.1,95.9 70.4,95.3 70.4,94.2 70.2,93.9 69.5,94.3
			68,95.8 68,96.1 68.6,96.5 		"/>
		<polygon fill="#E6EEF4" points="7.6,152.4 7.5,153 7.2,153.1 6.9,153.8 7.4,153.8 8.1,153.2 7.9,152.5 		"/>
		<polygon fill="#E6EEF4" points="5.9,152.7 5.7,153.2 5.2,153.6 5.5,153.8 6.2,153.3 6.3,152.8 6.6,152.4 6.4,152.2 		"/>
		<polygon fill="#E6EEF4" points="15.1,151.6 14.7,151.5 14.2,151.9 14.1,152.3 13.9,152.4 13.6,152.3 13.2,152.7 12.8,152.7
			12.4,152.6 12.2,152.9 12.6,153.2 12.9,153.1 13.5,153.1 14.1,152.9 14.8,153 14.8,152.5 15.2,152.2 		"/>
		<polygon fill="#E6EEF4" points="134.8,153.1 135,153 135,152.8 135.1,152.5 135,152.2 134.7,152.1 134.7,151.6 134.4,151
			133.8,150.6 133.4,150.3 133.3,150 132.8,149.3 132.4,149.1 132,149.1 131.9,148.9 132.1,148.6 132.1,148.2 131.8,148
			131.7,147.7 132,147.4 132.2,147.3 132.1,147.1 131.8,146.9 131.5,146.9 131.5,146.5 132,146.2 131.9,144.2 131.9,142.2
			132.1,140.6 131.9,140.1 131.9,139.6 132.1,139.1 132,138.6 131.8,138.2 131.7,137.2 131.1,136.5 130.9,135.4 131,135
			130.4,133.4 130.5,133 131,132.2 130.8,131.8 130.8,131.3 130.2,130.8 129.4,130.9 128.4,131.2 128.2,131.3 127.2,131.6
			126.6,132.3 125.8,133.4 125.1,133.8 124.2,133.9 123.1,134.1 122.9,134.1 123,133.7 123.5,132.9 123.2,132.2 122.4,129
			121.9,127.6 121.6,126.9 122.2,125.7 120.8,125.5 119.8,126.1 119.2,125.8 117.4,125.8 149.6,67 149.5,66.7 148.9,66.5
			148.5,66.6 148.2,66.3 148,65.2 147.7,64.6 147.3,64.4 147.2,63.8 146.9,63.1 146.6,62.8 145.6,62.8 145.5,62.9 144.7,62.8
			144,63 143.7,62.8 143.4,62.8 143.2,62.7 143,62.9 142.7,62.8 142.7,62.7 142.9,62.6 143,62.3 142.5,62 142.2,62.2 141.8,62.1
			141.9,61.9 142.1,61.7 141.9,61.5 141.6,61.5 141.2,61.4 141.2,61.2 140.8,60.8 140,60.2 139.8,60.2 139.6,60.1 139.3,60.1
			139.1,60.3 139.1,60.1 139.1,59.9 138.7,59.7 138.3,60.2 138.1,60 138.1,59.6 138.3,59.5 138.1,59.2 137.7,59.1 137.3,59.2
			137.4,58.9 137.4,58.7 136.9,58.4 136.5,57.9 136.6,57.8 136.5,57.6 136.1,57.5 135.8,57.7 134.8,58.7 133.6,59.3 134.6,58.6
			135.3,57.6 135.9,57 136,56.3 135.7,56.1 134.9,55.5 134.2,55.5 133.5,55.8 133.1,55.8 132.9,56 132.1,56.1 131.3,56.9
			130.7,57.4 131.2,56.8 131.1,56.1 131.3,55.4 131.2,55 130.4,54.4 130.4,54.2 130.9,54 131.3,54 131.3,53.8 129.9,53 129.8,52.7
			130.1,52.2 130.8,51.9 131.2,51.5 130.9,51.1 130.6,50.5 130.4,50.5 130.1,50.7 129.9,50.3 129.4,50.1 128.9,50.1 128.3,49.9
			128,49.8 127.6,49.9 126.9,49.9 126.6,50.4 126.6,50.6 126.3,50.2 126.5,49.7 126.8,49.5 126.7,49.1 126.9,48.7 127.2,48.5
			127.2,48 127.4,47.5 127.2,47.2 127.1,47.2 126.4,47.8 126.3,48.3 126.1,48.3 125.7,48.1 125.2,48.3 125.1,48.5 125.2,49.1
			124.8,49.5 124.6,49.5 124.4,49.3 124.1,50 124.1,50.6 123.9,50 123.9,49.4 124.1,48.9 123.9,48.9 123.5,49.2 123.4,49.6
			123,49.7 123.3,48.9 123,48.4 122.5,48.4 122.6,48.1 123.2,47.6 123.7,47.4 124.4,47.9 125.1,47.6 125.6,47.4 126.2,46.9
			126.2,46.6 126.4,46.4 126.3,46.1 125.6,45.9 125.4,45.9 125.4,45.4 125.1,45.2 125,45.1 125.1,44.9 125.3,44.8 125.5,44.6
			125.2,44.5 124.2,45 123.9,45.3 123.2,45.3 122.6,45.7 121.4,46.6 120.7,46.9 119.4,46.9 118.7,46.4 118.4,46.2 118.3,46.5
			117.9,46.4 117.4,46 116.9,46.2 116.7,46.6 116.5,46.6 116.3,46.3 116.4,45.9 116.9,45.7 116.7,45.5 116,45.7 115,46.3
			114.2,46.6 113.9,47.2 114,47.7 114.7,47.9 114.3,48.2 113.6,48.2 112.9,48.8 112.3,50 112,51 111.8,51 111.7,50.8 111.8,49.9
			112.7,48.6 112.7,48.3 112.4,48.2 111,48.8 110.4,48.8 110.1,48.7 109.7,48.1 109,47.9 108.7,48 108.7,48.2 109.5,48.5
			109.8,48.9 109.6,49 108.8,48.8 107.8,48.7 106.7,49.3 105.2,50.5 103.6,51.2 102.5,52 101.4,53.1 100,54.3 99,54.7 98.6,54.8
			97.8,55.3 97.2,55.3 96.2,55.9 95.4,55.9 95,55.6 94.1,55.5 93.4,55 92.8,54.7 92,54.3 91.7,54.4 91,55 90,56.1 89.8,56.8
			89.2,57.3 88.9,58 88.5,57.9 88.2,57.6 87.8,57.9 88.3,59 89,61.5 89.7,63.4 90,65 89.8,66.6 89.2,67.7 88.7,68.4 88.7,68.7
			89.7,70 90.3,70.3 90.3,69.7 90.6,69.9 91,69.6 91.4,69.6 91,70 91,70.3 92.3,71.4 92,71.7 91.4,71.6 91.3,72 91.2,73.4 91.3,74
			91.5,74.3 91.9,73.9 92.6,73.7 93,73.9 93.2,74.3 93.9,74.1 94.8,74.3 95.5,74.8 94.8,75.1 95,75.8 94.8,76.3 93.9,76.4 93.9,76
			93.4,75.7 93,75.9 92.3,75.8 92,75.5 91.8,74.8 91.3,74.6 91,74.6 90.4,74.1 90.4,73.2 91,71.6 91,71.1 90.7,71.1 90.3,71.6
			90.2,73.2 89.9,74.3 89.4,74.8 89.4,75.3 89.8,74.7 90.2,74.7 90.4,75 91.1,75 91.4,75.6 91.4,76.6 90.8,77.2 90,77.5 90.7,76.6
			90.7,76.3 90.3,76.1 90.1,75.9 89.8,76.2 88.9,76.8 88.9,77.3 88.4,77.5 87.9,77.7 87.7,77.2 87.5,77.1 86.8,77.1 86.4,77
			86.4,76.4 86,76.3 85.7,76.4 85.2,76.4 85.1,75.9 84.8,75.7 84.4,75.9 84.1,75.9 84.1,75.2 83.9,74.8 83.9,74.5 84.4,74.3
			85,73.5 85.3,73.4 85.6,73 85.6,72.7 84.9,71.9 84.4,71.7 83.9,71.7 83,72.2 82.5,72.2 82.1,71.9 81.6,71.9 79.9,72.6 79.8,72.8
			80.1,73.1 80.7,73.7 80.6,73.9 80.1,73.8 79.6,73.8 79.4,73.5 78.9,73.3 77.9,73.2 76.9,73.3 76.5,73.6 76.5,73.9 75.9,73.9
			75.8,73.7 75.4,73.7 74.6,74.2 74.6,74.5 74.2,74.7 73.3,75.1 72.7,75.4 72.4,75.5 72.5,75.3 72.7,75 72.2,75.2 71.8,75.8
			71.8,76 72.5,77 73.2,78.1 74,78.3 74.6,79.1 75.2,79.4 75.4,80.1 76,80.2 76.6,80.5 76.4,80.7 75.5,80.7 75.4,80.2 74.8,79.7
			74.4,79.4 74.1,79.5 73.5,80.1 73.2,80.1 72.8,79.6 73.3,79 73.3,78.8 72.8,78.9 72.4,79.4 72.5,80.6 72.7,80.8 72.7,81.2
			72.1,81.7 71.7,82.4 71.5,83.2 71.6,84 72.6,85.1 73.5,85.4 74.1,86.1 74.4,86.1 75.2,85.6 75.9,85.3 76.6,85.7 77.8,85.8
			78.3,86.2 78.5,86.8 78.8,87 79,86.7 79,85.9 79.2,85.7 79.7,85.9 79.7,86.2 79.1,86.9 79.2,87.4 79.4,87.4 80.2,86.8 80.4,86.5
			81.3,86.3 82.4,85.6 83.2,85.5 83.6,85 83.8,85 83.9,85.3 84.2,85.4 85.1,84.8 85.8,84.8 86.1,84.6 85.9,85 85.3,85.4 85.3,85.6
			85.6,85.8 85.1,86.7 84.3,86.8 84,86.6 83.7,86.5 82.9,87.1 83,87.3 83.6,87.3 83.9,87.7 83.9,88.5 83,89.5 82.9,90.1 82.6,90.5
			82.4,90.9 82.6,91.1 82.7,91.5 82.5,92.1 82,92.8 81.5,93.1 81,93.1 80.6,93.3 80.1,93.8 79.6,93.9 79.1,93.8 78.2,93.4 78,93.5
			77.8,93.2 77.3,92.7 77.1,92.8 76.6,93.5 76,93.9 75.6,94.5 74.4,94.9 74.1,95.2 73.6,95.2 73.1,95 72.2,95 71.6,95.5 70.9,95.6
			70.6,95.9 70.5,96.6 70.2,97.5 69.8,97.9 69.7,97.5 69.1,96.9 68.3,96.8 67.9,97 68,97.4 68.4,97.7 68.1,98.2 67.8,98.2
			67.6,97.7 67.2,97.1 66.9,97.1 66.1,97.9 65.8,98.6 65.5,98.7 65.2,98.8 63.9,99.9 63.7,100.7 63.5,100.9 62.9,101 62.3,100.8
			62.2,101 62.8,101.6 62.6,102 62.3,102 62,101.6 61.8,101.6 61.5,102.1 60.9,102.9 60.9,103.2 61.3,104 61.4,104.7 61.3,105.1
			61.1,105.6 61.2,106.1 61.5,106 61.8,105.6 62,105.9 62.1,106.6 61.8,106.8 61.6,107.1 61.7,107.3 62.1,107.2 62.4,107 62.7,107
			62.9,107.2 62.9,107.5 63.5,107.5 64,107.9 64.6,107.8 65,107.4 65.2,106.4 65.6,106 66.6,106 67,105.7 66.5,106.3 66.1,106.3
			65.2,107.2 65.1,107.7 64.7,108.1 65.2,108.7 65.3,109.1 64.6,109.3 64.3,109 64.3,108.7 64.1,108.4 63.6,108.4 63.3,108
			62.5,107.9 62.3,107.5 61.8,107.8 61.4,107.9 61.2,108.4 60.8,108.6 60.2,108.5 60.1,108.9 60.4,109.3 60.7,109.4 60.4,109.8
			60.2,110.5 60.4,111 60.8,111.1 60.8,112 60.9,112.3 60.9,112.7 61.4,113.2 61.4,113.4 60.8,113.5 60.7,113.8 62.5,114.6
			63.2,114.6 64,114.3 64.5,114.1 64.8,114.3 65.1,114.2 65.8,113.2 65.9,112.8 65.6,112.4 65.6,112.1 66.3,111.7 67.1,111.1
			68.3,110.3 68.9,110.4 68.3,110.5 67.2,111.6 66.4,112.1 66.4,112.4 66.9,112.8 66.9,113.1 66.4,113.9 65.8,114.3 65.7,114.9
			65.8,115.6 65.7,116.1 65.7,116.4 65.7,116.8 65.8,117.5 65,117.7 64.7,118 64.5,118.4 64.3,118.3 64.1,118.5 64.2,119
			64.3,119.6 64.5,119.7 65,119.5 65.4,119.5 65.5,119.8 65.2,120.2 64.6,120.1 64.3,120.4 64.5,120.7 64.4,120.9 64.5,121.3
			64.2,121.6 63.8,121.7 63.3,122 62.9,121.9 62.7,122 63,122.3 63.6,122.3 63.9,122.6 64.5,122 65.6,121.3 65.9,121.3 66.3,121.4
			66.7,121 67.6,120.7 67.5,121 67.1,121.3 67.1,121.5 67.5,121.7 67.6,122.2 67.5,122.5 67.9,122.7 68.4,122.4 68.6,121.9
			68.8,122.2 68.7,122.5 69,123.1 69.2,124 69.1,124.5 69.3,125.2 69.6,125.3 69.9,124.6 69.8,124 70.3,123.2 70.4,122.8 71,122.3
			71.2,122.2 71.8,121.8 72.6,121.8 71.9,122.1 71.1,123 71.1,123.3 71.8,124.1 72.1,124.2 72.9,123.7 74,123.6 74.5,123.2
			74.9,123.2 75.8,122.7 76.2,122.7 75.8,122.9 75.2,123.6 75.2,123.9 74.8,124.2 73.3,125.1 72.6,125.6 72.1,126.5 72.1,127
			72.3,127.5 72.8,127.8 71.9,127.7 71.5,127.8 71,128.5 70.8,129.1 70.1,129.9 69.8,130.5 70,130.8 70.2,131 70.1,131.4
			69.7,131.2 69.6,130.9 69.2,130.8 68.8,131.4 68,131.8 68.2,132.1 68,132.5 67.6,132.4 67.5,132.2 67.2,132.4 66,133.3
			65.7,133.9 65.7,134.2 65.5,134.5 65.1,134.3 65.1,133.7 64.3,134.1 63.7,134.5 63.2,134.7 63.1,135.1 62.7,135.3 61.9,135.3
			61.1,136 59.8,136.5 58.9,137.2 58.6,138 58.6,138.3 58.8,138.7 58.7,139.1 58.6,139.2 58.2,138.8 58,138.8 57.9,139 57.9,139.4
			57.7,139.6 57.4,139.2 57.4,138.7 57.6,138.3 57.2,138.1 56.7,138.2 56.4,138.1 55.8,138.2 55,138.3 54.5,138.5 54.2,139
			53.4,139.3 52.8,139.7 52.1,140.4 52.3,140.6 52.1,140.9 51.8,140.8 51.1,141.1 50.8,141.4 50.7,141.7 50.5,141.8 50,141.6
			49.4,141.8 49.3,142.1 49.1,142.7 49.3,143 49.6,142.9 49.8,142.5 49.7,142.2 50.1,142 50.3,142.2 50.2,142.6 50.3,142.8
			50.8,142.7 51.2,141.9 51.5,141.7 51.7,142.1 51.6,142.4 51.6,142.6 52.1,142.6 52.4,142.1 52.5,142.5 52.7,142.5 52.8,142.1
			53.1,141.9 53.6,141.9 54.2,141.6 54.5,141 54.4,140.5 54.8,140.3 55.3,139.7 55.6,139.7 56.1,140.2 56,140.4 55.6,140.5
			55.2,140.9 55.2,141.4 55.4,141.5 56.2,141 56.3,140.6 56.7,140.5 56.8,140.7 56.9,140.4 57.2,140.4 57.3,140.8 57.1,141.1
			57.3,141.2 57.7,140.6 58.1,140.7 58.6,140.3 59,140.3 59.6,139.6 60.1,139.3 60.4,139.4 60.4,139.8 60.1,140.3 59.7,140.9
			59.7,141.1 60,141.1 60.8,140.3 60.8,139.5 60.9,139.3 61.2,139.6 61.5,139.4 61.9,139.5 62.5,139.5 63,138.9 63.1,138.9
			63.3,139 63.6,138.4 63.9,138.1 64,138.3 63.9,138.6 63.9,139.1 64.2,139 64.6,138.5 64.4,138.4 64.9,138.1 64.8,137.8 64,137.8
			63.8,137.7 64.5,137.5 65.3,137 66.4,137 66.7,136.7 66.6,136.4 66.4,136.3 66.7,136.2 67.1,136.1 67.4,135.8 67.7,135.9
			67.8,136.3 68.1,136.3 68.3,136 68.2,135.8 68.6,135.5 68.6,135 68.9,134.8 69.1,135 69.1,135.4 69.3,135.6 70,135.1 70.3,134.7
			70.7,134.8 71,134.3 71.1,134.2 71.4,134.5 71.9,134.4 72.4,133.7 72.5,133.2 72.3,133.2 71.9,133.2 71.8,133.1 72.6,132.6
			73.1,132.4 73.5,131.9 73.7,132 73.9,132.2 74.4,131.6 74.9,131.4 75.1,130.9 75.4,130.8 75.6,130.6 76,130.5 76.2,130.8
			76.4,131 76.5,130.6 77,130.6 77.2,130.4 77.2,130 77.7,129.9 77.9,129.7 78,129.8 78.8,129.9 79,129.4 79.2,129.4 79.2,129.7
			79.4,129.7 79.7,129.4 80,129.7 80.2,129.5 80.4,128.7 80.2,128.7 79.9,128.8 80.1,128.4 80.6,128 80.9,128 81.1,128.2 81.2,128
			81,127.7 80.7,127.5 81,127.4 81.5,127.6 82,127 82.7,127 83.3,126.5 83.7,126.4 84.3,125.8 84.3,125 84.1,124.8 83.9,124.8
			83.7,124.2 83.5,124 82.7,124 82.8,123.5 82.8,123 83.5,122.7 83.7,122.4 84.1,122.3 84.2,122 84.1,121.9 84.4,121.7 84.9,121.8
			85.6,121.3 86.1,121.8 86.8,121.4 86.7,121.8 86.9,122.1 87.2,122.1 87.8,121.4 87.6,121.2 87.4,121.1 87.3,120.8 87.5,120.7
			88.1,120.9 89,120.6 89.2,119.8 89,119.2 88.2,118.7 87.9,118.7 87.6,119 87.6,118.8 88,118.5 88.7,118.5 89.1,118.8 89.8,118.8
			90.3,118.3 90.3,117.9 91.6,117.3 92.3,116.7 92.8,116.7 93.1,116.4 93.1,116.1 94.3,115.2 95.3,115.1 96.4,114.1 97.2,114
			98.2,112.8 97.9,113.6 97.9,114.2 98.2,114.3 98.6,114.4 98.8,114.6 99.5,113.9 100,113.7 101.1,113.3 101.5,112.9 101.3,113.5
			100.4,114 99.8,114.1 98.6,115.3 98.5,115.8 99.1,116.7 99.2,117.3 98.6,116.9 98.2,116.8 97.9,116.9 97.5,116.9 97,116.6
			96.8,115.9 95.9,116.3 95.5,116.3 94.7,116.9 93.9,116.9 93.4,117.4 93.3,117.9 93.4,118.2 93,119.1 92.4,119.4 92.1,120.2
			90.5,121.6 90.1,122.2 90.1,122.6 90.7,123.3 91,122.9 91.3,122.9 91.8,122.5 92.2,122.6 92.2,122.9 91.2,123.7 90.8,123.7
			90.5,124.2 90,124 89.6,124 89.2,124.1 89.2,124.6 88.8,124.5 88.4,124.6 88.4,125.3 89.1,126.1 89.4,126 89.6,125.6 89.9,126
			90.1,125.3 90.5,125.4 90.5,125.8 90.9,125.6 91,125.3 91.4,125.1 91.9,124.7 92,124.1 92.4,123.7 92.4,124 92.2,124.3
			92.5,124.6 93.1,124.6 93.9,123.9 94.5,123.9 94.7,124.2 95,124 95.3,123 95.9,122.6 96.2,122.6 95.5,123.3 95.5,123.8
			95.9,123.5 96.4,122.7 96.8,121.8 97.2,121.6 97.2,122 96.8,122.6 96.8,122.9 97.5,122.2 97.7,122.5 97.7,122.9 98.3,123
			98.5,123.2 99,122.8 99.2,122.2 99.9,122.1 100.4,121.8 100.1,121.6 100.2,121 101.3,120.7 101.4,120.3 101.5,119.7 101,119.8
			100.6,119.6 100,119.5 100.2,119.2 100.7,119.1 101.1,119.3 101.3,119 101.3,118.5 100.9,118.7 100.3,118.3 100.3,117.8
			101,117.7 101.3,117.6 101.6,117.7 101.6,117.5 101.4,116.8 102.3,116.5 102.9,116.8 103.2,116.7 103.9,116.7 102.9,117.4
			103,117.9 103.1,118.8 103.4,118.8 103.7,117.7 104.1,117.4 104.4,117.4 104.2,117.8 103.9,118.2 104,118.5 104.7,118.1
			104.9,117.7 105.3,118.1 105.8,117.7 106,117.6 106.6,117.3 107.2,117.1 107.7,117.3 107.6,117.5 107,117.5 106.4,118.1
			106,118.1 105.7,118.5 106,118.8 107,119 107.4,119.4 107.3,119.7 106.7,119.2 106,119.1 105.5,119.3 105.4,119.8 105.8,119.9
			106.3,119.6 106.7,120 106.5,120.1 105.9,120.1 106,120.5 106.7,120.7 107,121.1 106.6,121.2 106.1,121.4 106.2,121.7
			106.7,121.7 107.3,121.5 107.8,121.9 108.2,122.1 109,121.8 109.3,122.1 109.3,122.4 108.9,122.6 109,122.9 109.2,123
			109.3,123.4 109.8,123.5 110.1,123 110,122.7 110.1,122.5 110.8,122.5 110.4,123 110.4,123.4 109.7,124.1 110.3,124.6 110,124.7
			109.7,124.6 109.4,124.7 109.6,125.1 110.9,125.3 111.3,125.2 111.7,125.3 112.3,125.2 113,125.3 113.6,125.1 113.8,125.2
			113.8,125.6 114.2,125.7 114.6,126.1 114.9,126.4 115.1,126.8 115.6,126.7 116.3,126.4 116.5,126.2 116.8,126.3 116.7,126.7
			116.3,127.1 115.8,127.2 115.9,127.5 116.7,127.7 116.8,128.2 117.2,128.5 118,128.7 119,128.5 119.5,128.3 119.6,128.6
			119.9,128.2 120.6,127.7 120.9,127.7 120.7,128 120.2,128.4 120.1,129.4 119.8,130 119.5,130.1 118.9,129.7 118.7,129.8
			119.1,130.5 119.2,131 119.6,131.3 120,131.1 120.3,131.3 120.2,131.7 119.9,131.7 119.9,131.9 120.7,132.6 120.9,132.5
			121.5,132.6 121.8,132 122.4,130.9 122.1,131.8 122.1,132.4 122,132.8 121.7,132.9 121.3,133.4 121.4,133.7 121.8,134
			121.6,134.3 121.6,135.6 121.9,135.8 122.3,135.9 122.1,136.3 122.3,136.8 123.1,137.7 123.4,137.9 123.5,138.2 123.8,137.9
			124.1,138.3 124.5,138.2 124.3,137.9 124.5,137.7 124.7,138 125,138 125.2,137.6 124.9,136.8 124.6,136.8 124.4,137 124.2,136.8
			124.6,136.3 124.5,135.9 124.4,135.5 124,135.4 124,135.1 124.2,134.8 124.3,134.2 124.6,134.3 124.6,134.8 124.8,135.2
			125.1,134.6 125.3,135 125.5,135.3 125.3,135.9 125.4,136.3 125.7,136.4 126.2,135.9 126.4,135.9 126.3,136.3 125.9,136.7
			125.9,137.1 126,137.6 125.8,138.2 126,138.5 126.6,138.6 126.6,138.4 126.9,137.9 127,138.3 126.8,138.6 127,139.3 127.4,139.5
			127.8,138.6 127.9,137.9 128.1,137.5 128.2,136.1 128.6,135 128.6,133.8 128.5,133 128.3,132.6 128.3,132.5 128.5,132.6
			128.8,133.3 129.1,133.4 129.3,132.7 129.9,132.3 129.5,133.1 129.3,134 129.5,134.8 129,135.8 128.9,136.5 129.1,136.8
			128.7,137.1 128.7,138 128.8,138.4 128.9,139 129.4,139.5 129.5,140.1 129.7,140.1 129.8,140.7 130.2,141 130.5,140.8 130.8,141
			131.2,140.8 131.9,140.8 131.9,140.9 131.1,141.4 130.9,141.5 130.9,141.8 131.2,142 131,142.2 130.6,142.3 130.6,142.6
			131,143.2 131,143.8 130.8,143.9 130.3,143.5 130.2,143.1 130,143.3 130.1,143.6 129.9,144.1 129.9,144.7 130,144.9 129.8,145.1
			129.5,145.2 129.2,145.6 129.3,145.8 129.6,145.9 129.9,145.8 130.1,146.3 130.5,146.7 130.8,146.6 131.1,146.8 131.1,147
			130.6,147 130.5,147.1 130.6,147.4 131,147.7 131.1,148.2 131.6,148.6 131.9,148.6 131.5,148.7 131.2,148.8 130.9,149.2
			130.9,149.8 131.4,150.6 131.8,150.9 132.4,150.9 132.8,151 132.2,151.3 131.6,151.2 131.2,151.3 130.8,152 130,152.9
			129.4,153.4 129.4,154 129.6,154.5 130.2,154 130.5,153.2 130.6,153 131,152.9 131.6,152.2 131.8,152.4 132.2,152.4 132.9,152.3
			132.5,152.8 132.5,153 133.2,153 133.2,153.2 132.6,153.8 132.6,154.2 132.7,154.6 132.3,155.2 132.2,155.6 132.3,155.9
			132.4,156.2 132,156.1 131.5,156.2 131.1,156.6 131.2,156.8 131.6,156.9 131.8,156.8 132.4,156.8 132.4,156.9 132,157.3
			131.6,157.3 131.3,157.3 131,157.5 130.9,158.2 131.2,158.7 131.5,158.5 131.6,158.2 132,158.2 132.5,158 133.2,157.2
			133.7,156.3 134,155.2 134.6,153.9 134.8,153.7 134.8,153.7 134.8,153.6 		"/>
		<polygon fill="#E6EEF4" points="1.8,152.4 1.8,151.9 1.4,152.1 		"/>
		<polygon fill="#E6EEF4" points="0.3,153.6 0.7,154 1.2,153.6 0.7,153.4 		"/>
		<polygon fill="#E6EEF4" points="3.8,151.7 3.4,152.1 3.5,152.4 4.1,152.7 3.7,152.8 3.8,153.2 4.2,153.1 4.6,152.7 4.9,152.5
			4.3,151.8 		"/>
		<polygon fill="#E6EEF4" points="39.6,146.1 39.6,146.5 40,146.7 40,146.4 		"/>
		<polygon fill="#E6EEF4" points="57.3,142 57,141.8 57,142.3 		"/>
		<polygon fill="#E6EEF4" points="55.9,141.8 55.7,142.3 56,142.7 56.3,142.6 56.4,142.3 56.6,141.9 56.3,141.6 		"/>
		<polygon fill="#E6EEF4" points="53.2,142.3 53.4,142.9 53.8,142.6 53.5,142.3 		"/>
		<polygon fill="#E6EEF4" points="123.3,145.5 123.7,145.4 123.8,144.8 123.9,144.4 123.8,144 123.4,144.3 123.3,144.7 123.5,144.9
			123.1,145.2 		"/>
		<path fill="#E6EEF4" d="M57.8,141.4c0,0-0.2,0.2-0.2,0.2l0.4,0.1L57.8,141.4z"/>
		<polygon fill="#E6EEF4" points="59.2,144.2 59.2,144.5 59.5,144.2 59.4,143.9 		"/>
		<polygon fill="#E6EEF4" points="717,318.7 717.6,318.2 717.6,317.4 717.2,317.2 717.6,316.6 717.6,316 717.5,315.8 717.6,315.3
			717.5,315 717,315.6 717.1,316.6 716.9,316.9 717,317.3 716.7,318.5 		"/>
		<path fill="#E6EEF4" d="M721,333.8l-0.3-0.3l-0.4,0.4l0,0.5c0,0,0.3,0.1,0.3,0.2c0,0.1,0.2,0.6,0.2,0.6l0.3-0.4l-0.2-0.5
			L721,333.8z"/>
		<polygon fill="#E6EEF4" points="717.6,328.3 717.8,327.9 717.3,328.1 		"/>
		<polygon fill="#E6EEF4" points="720.3,332.9 720,333.2 720.2,333.4 720.6,332.9 		"/>
		<polygon fill="#E6EEF4" points="720.1,330.7 719.9,330.5 719.7,330.9 719.9,331.3 720.1,331.1 		"/>
		<polygon fill="#E6EEF4" points="715.2,321.4 715.8,321.5 715.6,321.2 		"/>
		<polygon fill="#E6EEF4" points="719.1,331.6 719.2,331.9 719.6,332.2 719.9,332 719.6,331.5 		"/>
		<path fill="#E6EEF4" d="M718.4,330.1c0,0,0.1,0.4,0.1,0.4l0.5,0.4l-0.2-0.7L718.4,330.1z"/>
		<polygon fill="#E6EEF4" points="716.8,320.2 717,319.6 717.3,319.3 717.3,319.1 716.5,319.3 716.5,320.1 716.4,320.5 716.7,321.1
			716.5,321.6 716.7,322 717.1,321.1 717,320.6 		"/>
		<path fill="#E6EEF4" d="M716.2,323.4l-0.1,0.6c0,0,0,0.4,0,0.5l0.5,0l0.3-0.7l-0.2-0.6L716.2,323.4z"/>
		<polygon fill="#E6EEF4" points="844.7,199.4 844.9,200.1 845.1,200 845.3,199.4 845.7,199 845.6,198.3 845.9,198.1 845.9,197.8
			846.2,197.5 846.4,197.7 846.8,197.3 847.2,196.5 847.8,195.8 848.4,195.8 848.8,195.5 848.8,194.9 848.6,194.4 848.3,194.5
			847.7,195.2 847.6,195.6 847.2,195.6 846.8,195.9 846.5,195.8 846.3,195.4 846.2,195.4 846,195.9 846.2,196.2 846,196.6
			845.6,197.1 845.4,197.1 845.4,197.4 845.3,198 844.9,198.2 844.8,198.5 845.1,198.8 844.8,199 		"/>
		<polygon fill="#E6EEF4" points="851,193.5 851.4,192.8 851.7,192.5 851.7,192 851.9,191.4 852.5,190.6 852.2,190.7 851.6,190.8
			851.4,191.4 851.1,191.6 851,192.1 850.8,192.3 850.7,192.7 850.3,193.1 850.1,193.9 850.4,194 		"/>
		<path fill="#E6EEF4" d="M568,229.8l0.3-0.3l0.7,0.3l0.3-0.1l0.4-0.3l0.5,0.1l1.2,1l0.5,0.1l0,0l0.9-0.3l1.2-0.3l0.4,0.1l1.6,0
			l0.7,0.6l-0.5-0.5l0-0.5l1-0.4l1.6,0.9l1,0l1,0.5l0.2-1l-0.4-0.6l-0.7-0.4l0.3-1l0.8,0.1l1.3,1l0.4,0.7l1.3,0.1l0.2-0.5l0.8-0.4
			l0.9-1.1l0,0l-0.2-0.2l-1.5-1.2l-1-1.3l-0.2-0.8l-0.4-0.5l-0.1-0.8l-0.2-0.4l-0.1-0.3h-0.4l0.1-0.5l0.3,0.1l0.1-0.5l0.2-0.5
			l-0.3,0l-0.3,0.3l-0.6-0.4v-0.9l-0.5-0.2l-0.4-0.4l-0.3,0.1l-0.5-0.1l-0.3-1l0.2-0.5l0.3-0.2v-1l0.2-0.4l0.2-0.6l0.3-0.2l0.1-0.6
			l0.2-0.4l0-0.4l0.3,0.1l0.3,0.2l0.2-0.1l0.1-0.3l0.2,0.2l0.3-0.2h0.4l0.4-0.3l-0.1-0.2l-0.4-0.2l0.3,0c0,0,0.2,0.1,0.3,0.1
			c0.1,0,0.4-0.1,0.4-0.1l0.3,0.3l0.2-0.2l-0.1-0.3l-0.8-0.5l0.4-0.1l0.5,0.1l0.2-0.1l0.4,0.1v-0.3l-0.3-0.2l0.3,0l0-0.3l-0.2-0.2
			l0.4-0.1l0-0.3l0-0.2l0,0v0l-0.7-0.4l-0.7,0.2l-1-0.7l0.1-0.5h1.1l-1.1-1.9l-1.3-1.2l-1.8-0.5l-0.2,0.4l-0.9-0.8l0.2-0.4l-0.5-0.8
			l-1.1-0.4l0.4-1l0.2-1.7l-0.4-0.4l-0.1-1.4l0.5-0.3l0.7-0.9v-0.7l0.4-0.5l1.5,1.3l0.2,0.5l0.8,0.5l0.9-0.1l-0.1-0.8l0.3-0.3
			l-0.6-2.2l0.9-0.1h0.9v-0.7l-0.4-0.5l0.2-0.6l0.8-0.5l0.4,0l0.3-0.7l0.4-0.3l0.6,0.2l0.1-0.5l-0.1-0.5l0.1-0.4l0.8,0.5l0.7,0.3
			l-0.1,0.4l-0.4,0.5l0.3,0.3l0.5-0.3l0.1-0.4l0.4-0.2l0,0.5l0.4-0.4l0.1-0.3l0.5-0.1l0.6-0.4l0.5,0l0.3,0.7l0.6,0.4l1-0.3l0.5,0
			l0.3,0.4l0.3,0l0.6,0.7h0.6l0.4,0.6l0.8,0.6l0.4,0l0.2,0.4l0,0.6l0.3,0.1l0.4-0.5l-0.1-0.7l0.5-0.3l0.4,0.5l1.1,0.2l0.3,0.5
			l0.4,0.2l0.7-0.5l0.1-1l0.6-0.1l0-0.5l0.4-0.1l0.3,0.4l0.2-0.5l0.6-0.1l0.8,0.7l0.2,0.3l0.8-0.1l-0.1-0.7l0.4-0.1l0.6,0.1l0.3-0.4
			l0.7,0.4l0.4,0.2l-0.2,0.4l-0.4,0.2l0.5,0.6l0.5,0.2l0.2-0.2l0.4,0.2l0.8,0l1,0.5l0.6-0.1l0.3-0.6l0-0.5l0.3-0.3l0.9,0.5l0.8,0.1
			l0.9-0.3l0.3-0.5l-0.1-2.2l-0.3-0.2l-0.8,0l-0.5-0.4l-0.1-0.3l-0.6-0.1l-0.4-0.4H610l0-0.4l-0.2-0.3l0.1-0.3l0.5-0.1l0.1-0.6
			l0.4-0.5l-0.1-0.6l-0.4-0.1l0-0.6l0.6-0.9l0.6-0.6l1.2-0.1l0.5,0.2l0.3-0.2l0-0.6l-0.5-0.2l-0.4-0.4l-0.4,0l-0.3,0.3l-0.6-0.2
			l-0.7,0l-0.1-0.4l0.2-0.2l0.7,0l-0.2-0.6l-0.7,0.1l-0.5-0.1l0.3-0.3l-0.3-0.7l0.2-0.2l0.6,0l0.3-0.3l0.4,0l0.2,0.3l0.6-0.1
			l0.5,0.4l0.2-0.3v-0.3l0.5-0.3l0.5,0l0.3,0.5l0.3-0.4l0.1-0.4l1-0.3l0.6-0.1l0.7-0.3l0.7-0.1l0.1-0.2l0.7-0.5l0.7,0l0.4-0.3l0.4,0
			l0.4,0.2l0.2-0.2l0-0.6l0.3-0.3h0.6l0.1-0.4l0.4-0.3l0.3,0.3l0.4,0.1l0.5-0.3l0.6-0.2l1.2-0.8h0.3l0.3-0.2l0.7-0.1l0.4-0.5
			l0.4,0.1l0.7-0.2l0-0.4l-0.3-0.4l0.3-0.2l0.7,0l0.2-0.5l0.5-0.3l0.3,0.1l0.4-0.1l0.7,0.3l0.8-0.1l0.7,0.4l0.7,0l0.6-0.3l0.6,0
			l0.2,0.7l0.2,0.2l0.2,0.6l0.4,0.5l0.4,0.2l0.1,0.3l-0.1,0.5l0.1,0.5l0,0.2l-0.4,0.1l0.3,0.5l0.3,0.2l0.6-0.4l0.4,0.4l0.3-0.1
			l0.1-0.5l0.4-0.2l0.2,0.6h0.3l0.1-0.4l-0.2-0.6l0.2-0.1l1,0.7l0.1,0.9l0.4,0.7l0.3,0l0.4-0.4l-0.3-0.1l-0.2-0.3l0.6-0.1l1,0.5h0.4
			l0.4-0.3l0.3,0.2l-0.2,0.5l-0.3,0.3l0,0.7l0.4,0.5l0.4,0l0.3-0.4l0.6-0.2l1.1,0.3l0.3,0.2l0.3-0.2l-0.1-0.6l0.5-0.2l0.8-0.1
			l0.5-0.4l0.2-0.5l0.4-0.3l0-0.4l0.6-0.6l0.4-0.2l0.4-0.4l0.6-0.2l0.7-0.2l0.3,0.2l0,0.5l-0.5,0.5l-0.4,0.1l0.2,0.4l5,3.8l6.8,8.6
			l0.7-0.1l0.5-0.3l0.1-0.3l-0.1-0.1l0-0.6l0.4-0.2l0.8,0.4l-0.1,0.4l0,0.4l0.6,0.2l0.4,0.4l0.5,0l0.4-0.3l0.5-0.1l0.7,0.4l0.6-0.3
			l0.5,0.1l0.5-0.2l0.1-0.3l-0.2-0.3l0.1-0.3l0.9-0.1h1l0.8,0.2l0.8,0.6l0.5,0.8l0.3,0.6l0.3,0l0.6,0.2l0.7,0.4h0.2l0.4,0.2l0,0.3
			l-0.1,0.3l0,0.4l0.1,0.4l0.3,0.3l0.1,0.1l0.3,0l0.6,0.2l0.4,0.2l0.2-0.3l0.4-0.2l1.3-0.1l0.6-0.2l0.3-0.5l0.5-0.3l0.3,0.1
			l-0.2,0.7l0.2,0.5l0.4,0.1l0.6,0.5l0.8,0.3l0.1,0.2l0.3,0l0.6,0.2l0.2,0l0-0.1l0.4-1l0.5-0.3l1.3,0.1l0.2-0.3l0.5-0.5l0.9-0.3
			l0-0.6l0.2-0.6l0.7-0.3l0-0.4l0.5-0.4l0.5-0.1l0.4-0.5l0.2-0.2l-0.3-0.2l0-0.4l0.2-0.2l0.9,0.3l0.4-0.2l0.3-0.7l0.4-0.2l1-0.1
			l0.5-0.1l0.5,0l0.6,0l0.4-0.3l0.1,0l0.3,0.5l0.1,0.3l0.3,0.3l0.6,0l0.3-0.1l0.5,0l0.4-0.3l0.9-0.1l0.2,0.4l0.1,0.5l0.2,0.4
			l1.4,0.8l0.5,0.4l1,0.5l0.4-0.2l0.6-0.2l0.6-0.4l0.5-0.1l0.5,0.1l0.4,0.3l0.4-0.1l1.2,0l0.5,0.2l0.5-0.1l0.1-0.1l0.5,0.1l0.9-0.1
			l0.5-0.8l-0.3-0.3l-0.6-0.4l0-0.8l0.2-0.9l-0.1-0.4l-0.5-0.2l-0.3-0.4l-0.8-0.2l-0.2-0.7l0-1.4l0.6-0.6v-0.4l0.3-0.5l0.5-0.2
			l0.3,0.1l0.2-0.5l-0.2-0.5l0.1-0.4l0.3-0.3l0.5,0l0.4,0.3l0.7,0.2l0.7,0.4l0.1,0.2l0.6,0.2l0.7,0.1l1,0l0.4,0.3l0.3,0.3l0.7,0.1
			l0.4,0.2l0.5,0.1l1.2,0l0.4,0.2l0.2,0.4v0.4l0.3,0.4v0.4l0.3,0.3l0.3,0.6l0,0.5l0.3,0.3l0.3,0l0.6,0.5l0.2,0.3l0.8,0.2l0.9,0.4
			l0.4,0l0.2-0.2l0.8,0l0.4-0.3l0.4,0l0.3,0.1l0.4-0.1l0.5-0.5l0.8-0.3l1.1-0.1l0.6-0.3l0.7,0l0.7-0.2l0.6,0.3l0.8,0.1l1.1,0
			l0.6,0.8l1,0.4l0.8,0l0.6-0.1l0.3,0.3l0.3,0.9l0.6,0.4l0.3,0.2l0.4,0.1l0.5,0.5l0.4,0l1.3-0.1l1.1,0.3l1.7,0l0.7-0.1l0.3-0.2h0.6
			l0.5,0.3l0.3,0l0.4-0.7l1-0.6l0.6,0l0.4-0.5l0.5-0.1l1.3,0l0.5-0.5l0.2-0.5V187l0.3-0.6l0.6-0.3l0.4-0.4l0.2-0.6l0.4-0.4h0.5
			l0.2,0.2l0.8-0.2l0.5,0.1l0.7,0.4l0.3,0.5l0.4,0.2l0.5-0.3l0.3,0.2l0.5,0l0.6-0.4l0-0.3l0.9-0.2l1,0.3l0.3,0.3l0.3-0.1l0.4,0.1
			l0.1,0.2l0.5-0.1l0.8,0.1l0.4,0.3l0.3-0.1l1.3-1.3l0.6-0.4l1-0.2l0.4-0.4l0.2-0.5l-0.1-0.6l-0.2-0.1l-0.2,0.2l-0.2-0.2l-0.3-0.1
			l-0.1-0.8l0.2-0.2l0-0.8l-0.2-0.5l0.1-0.3l0.3-0.2l0.1-0.5l-0.3-0.3l-0.1-0.6l0.1-0.3l-0.3-0.5l0-0.5l0.3-0.6l0.3-0.3l0.1-0.6
			l0.4-0.5l0.3-0.3l0-0.7l-0.1-0.3v-0.4l-0.4-0.3l-0.2-0.5l-0.4-0.7l-0.3-0.1l-0.4,0.2l-0.6,0.4l-0.3,0l-0.2-0.2v-0.7l0.2-0.2v-0.3
			l0.2-0.3l0.2-0.5l0.4-0.5v-0.3l0.3-0.3l0.7-0.1l0.3-0.1l0.4,0l0.1-0.1l0.4,0l0.4-0.2l0.2-0.4h0.5l0.3-0.4l0.6,0.1l0.3-0.1l0.6,0
			l0.2-0.2h0.2l0.2-0.4l0.8-0.1l0.1-0.1l0.3,0.1l0.4,0l0.4,0.3l0.9,0.1l0.4,0.3l0.1,0.2h0.6l0.4-0.1l0.2,0.2l0.5,0.2l0.2-0.1l0-0.3
			l0.3-0.2l0.2,0.1h0.4l0.2-0.1l0.3,0.3l0.3,0l0.4,0.1l0.2,0.3l-0.1,0.3l0.1,0.3l0.3,0l0.1,0.2l0.3-0.2l0.4,0.1l0.1,0.3l-0.1,0.3
			l0.1,0.2l0.5,0.1l0.3,0l0.2,0.2l0,0.3l0.3,0.2l0.2,0.3l0,0.4l0.1,0.3v0.3l0.1,0.2l0.7,0l0.1,0.3l-0.2,0.4l0.1,0.3l0.6,0.4l0.2,0.5
			l0.3,0.4l0.1,0.4l0.3,0.1l0.2,0.5l0.4,0.3l0,0.2l-0.1,0.3l0.2,0.1l0.3-0.1l0.3,0.4l0.1,0.3l0.5,0.7l1,0.6l0.2,0.5l0.1,0.6l0.2,0.2
			l0,0.6l0.3,0.2l0.3,0.1l0.1,0.5l-0.1,0.4l0.3,0.5l0.6,0.6l0.5,0.2l0.2,0.4l0.4,0.1l0.3-0.1l0.3,0.2l0.2-0.1l0.6,0.1l0.3-0.2h0.4
			v0.1L789,183l0.2,0.2l0.6,0.1l0.3,0.1l0.2,0.2l0.3,0.2l0.1-0.2l0.3-0.1l0.3,0.1l0.1-0.3l0.3,0l0.2,0.2l0.1,0.3l0.3,0.3l0.3,0
			l0.1,0.3l0.3,0.2l0.2,0l0.2,0.3l0.1,0.3l0.6,0.3l0.1,0.1l0.3,0l0.3,0.2l0.4,0.1l0.3-0.1l0.3,0l0.3-0.2l0.2,0l0.2,0.1l-0.1,0.4
			l-0.2,0.3l0,0.4l0.1,0.3l0.5,0l0.1,0.5l0.2,0.5l-0.1,0.5l-0.1,0.2v0.4l0.5,0.7l0.2,0.2l0.4,0.6l0.1,0.3l0.4-0.1l0.4-0.3l0.4,0
			l0.3,0.4l0.1,0.4l0.3-0.1l0.2-0.2l0.4,0.1l0.3-0.1l0.8-0.1l0.4-0.3l0.3-0.1l0-0.3l0.1-0.5l0.4-0.2v-0.4l0.2-0.4l0.4,0h0.6l0.2-0.6
			l0.3-0.1l0.3-0.1l0.1-0.4l0.3-0.3l0.5-0.1l0.3-0.3l0.5,0.2l0.3,0.2l0.5,0l0.2,0.3l0.3,0.5l-0.3,0.3l0.1,0.3l0.5,0.5l0.1,0.4
			l0.3,0.3l0.3,0.2l-0.1,0.6l0,0.5l-0.1,0.2l-0.4,0.1l-0.4,0.5v0.2l0.2,0.3l0.1,0.1l0,0.5l-0.2,0.4l0.2,0.3l0.3,0.2l0,0.3l0.1,0.2
			l0,0.2l-0.1,0.1l-0.2,0.1l0,0.7l0.2,0.6l0.2,0.3v0.2l-0.3,0.2l-0.1,0.4l0.2,0.3v0.3l0.1,0.3l-0.4,0.2l-0.1,0.2l0.2,0.3l0.1,0.4
			l-0.2,0.2l-0.2,0.6l0.1,0.3l0.1,0.3l-0.1,0.2l0,0.3l0.2,0.3l0.1,0.4l-0.2,0.3h-0.3l-0.3-0.1l-1.8-0.3l-0.3-0.1l-0.4-0.1l-0.2,0.1
			l-0.5,0.8l-0.1,0.4l-0.3,0.4l-0.3,0l-0.3,0.2l-0.1,0.3l0.2,0.5l0.7,1l0.1,0.4l0.2,0.3l0.4,0.5l0,0.5l0.1,0.7l0.1,0.5v1l0.3,0.2
			l0,0.5l0,0.5l-0.1,0.3l0,0.4l0.1,0.3l0,0.5l-0.2,0.1l-0.7-0.1l-0.3,0.2l0,0.2l0.1,0.5l0.2,0.1v0.3l-0.1,0.1l0.5,0.7l0.2,0l0.2-0.8
			l0.7-0.1l0.2,0.3l0.2-0.9l0.4-0.3l0.1-1l0.5-0.4l0-0.5l0.2-0.3l0.6,0.4l0.7-0.3l0.3,0.3l0.1,1l0.9,0.2l0.9,0.5l0.3-0.3l0.3,0.4
			l0.6-0.7l0.8-0.1l0.1-0.4l0.4,0l0.4-0.7l0.9-1.1l-0.2-0.3l0.7-0.3v-0.7l-0.2-0.6l0.4,0.1l0,0.1l0.7-0.9l-0.3-0.5l0.3-0.1l-0.1-0.9
			l0.5-0.3l0-0.6l0.8-0.5l0.1-0.3l-0.2-0.2l0.1-0.7l0.3-0.2l0.5-2.4l0.6-0.7l0-0.5l0.6-0.5l0.1-0.7l0.7-0.8l0-0.6L819,195l-0.2-0.7
			l0.6-0.6l-0.3-1.2l0.5-0.6l0-0.4l-0.2,0l0.4-0.9l0-0.7l0.5-0.5l0.1-0.8l-0.1-0.1l-0.1-0.9l0.4-0.9l0.1-0.8l0.8-0.8l0-0.7l-0.3-0.5
			l0-0.8l0.2-0.2l0-0.7l-0.4,0l-0.2-1.3l0.1-0.4l-0.2-0.4l0.1-1.1l-0.8-0.9h-0.3l-0.3-0.5l0.2-0.3l0.4-0.7l-0.1-0.3l-0.5,0.4
			l-0.4-0.1l-0.6-1.8l0-0.5l-0.1-0.4l-0.1-1l0.2-0.4l-0.4-1.3l0.3-0.4l-0.3-0.2l0.1-0.3l0-0.4l-0.2-0.2l0.3-0.6l-0.2-0.5l0.1-0.4
			l0.3-0.3l-0.5-0.4l-0.1-0.7l0.3-0.3l-0.1-0.5l-0.4,0.3l-0.5-0.1l-0.6-0.5l0-0.6l0.3-0.4l0-0.5l-0.7-0.9l-0.4,0l-0.5-0.6l0.4-0.2
			l0-0.5l0.3-0.5l-0.5-0.9l-0.3,0l-0.4-0.4l-0.4-0.1l-0.2-0.4l-1.2-0.4l-0.3-0.4l-0.8-0.1l-0.3-0.2l-0.3-0.7l-0.4-0.4l-0.6-0.1
			l-0.6-0.5l-0.6,0.5l-0.5,0.1L808,158h-0.3l-0.2-0.3l0-0.3l-0.5-0.3l-0.5,0l0.3,0.9l0.5,0.5l-0.2,0.5l0.3,0.9l-0.2,0.8l-0.4,0.2
			l0-0.7l0.1-0.7l-0.3-0.8l-0.2,0.4l0.1,0.5l-0.2,0.8l-0.7,0.4l-1.2,0.2l-0.2-0.3l0.4-0.4h0.3l-0.1-0.8l0.3-0.4l0.2-0.2l-0.6-0.1
			l-0.3,0.3l-0.2-0.3l-0.4,0.1l-0.3,0.5l-0.3,0.2l-0.1,0l-0.4,0.5l-0.7-0.6l0.1-0.7l-0.2-0.9l-0.6-0.8V156l-0.6,0.2l-0.3-0.1
			l-0.5,0.3l-0.4,0.1l-0.7,0.5l-0.5,0l-0.5-0.4l-0.5,0.2l-0.5-0.3l-0.3-0.5l0.3-0.5l0.2-0.6l0.5-0.8v-0.4l0.8-0.7l0-0.9l0.8-0.7
			l0-0.7l0.3-0.1l0-0.3l0.5-0.8l0.1-0.6l0.4-0.6l-0.2-0.6l0.2-0.3l0-1l0.3-1.3h0.2l0.1-1l0.4-0.2l-0.1-0.6l0.8-0.9l0.1-0.7l0.5-0.4
			l-0.3-0.9l0.3-0.2l0-0.7l0.4-0.2l0.3,0l0-0.6l-0.3-0.4l0-1.1l-0.2-0.7l0.4-0.9l0.8-0.9l0.2-1.1l-0.7-1.1l0.1-0.6l0.5-0.5l0.1-0.6
			l1-0.8l0.1-0.5l0.4,0l0.4,0.4l0.6-0.1l1-0.8l0.8,0l0.8-0.5l0.6,0l0.6-0.4l0.5,0l0.5-0.1l0.3-0.4l0.5,0.3l-0.2,0.6l0.4,0.1l0.5,0.5
			l0.3-0.5l0.4-0.4l-0.8-0.6v-0.3l0.6-0.3l1.1,0.1l0.5-0.3l1.1,0.1l0.2,0.4h0.3l0.3-0.3l0.4,0.1l-0.1-0.5l0.3-0.3l0.9,0l0.4,0.5
			l1.1-0.4v-0.4l-0.3-0.2l-0.2,0.2l-0.7-0.4l0.4-0.7l0.1,0.4l0.8-0.3l-0.7-0.5l0-0.4l0.4,0l0.7-0.9l0.8,0l0.4,0.3l0.4-0.2l1,0.3
			l0.8-0.1l-0.1,0.3l0.4,0.3l0.4-0.1l-0.2-0.4l0.8,0l0.8,0.1l0.5,0.1l0.5,0.4l0,0.3l0.7,0.1l0.5-0.5l0.4,0.1l0.1,0.3l-1,0.7h-0.9
			l-0.2,0.3l0.1,0.6h-0.5L826,126l0.2,0.1h0.4l0.7,1l0.2-0.3l0.8-0.3l0.4-0.5l-0.1-0.2l0.6-0.3l-0.4-0.6h0.3l0.7,0.7l0.4,0.1
			l0.3-0.4l-0.3-0.3l0.4-0.3l0.3-0.4h0.2l0-0.5l-0.1-0.4l0.4-0.1l0.3,0.2l0.4-0.2l0.3,0.3l0.1,0.4l0.4,0.2l0.7-0.7l-0.3-0.3l0.1-0.2
			l0.4-0.3l0.4,0.2l0.3-0.2l0.4,0.1l0.1-0.3l-0.5-0.5l0.1-0.2l0-0.3l-0.6-0.2l-0.3-0.2l-0.1,0.1l0,0.2h-0.3l-0.5-0.3l-0.1,0.1
			l0.1,0.3l-0.5,0l-0.2,0.2l-0.4-0.2l0.1-0.5l0.3-0.1l-0.7-1l0.4-0.3l-0.5-0.7l0.3-1l0-0.6l0.4-0.5l0.1-0.8l0.5-0.6l0-0.6l-0.2-0.1
			l0.6-0.2l-0.7-0.8l0.3-2l0.5-0.4l-0.6-0.8l-0.1-0.7l-0.4-0.3l0-0.3l0.5-0.4l-0.1-0.8l0.3-0.2l0.6-1l0.7,0.1l0.3-0.2l0.4,0.1
			l0.3-0.4l1-0.1l0.1-0.3l0.4-0.1l0.1-0.5h0.2l0.2-0.2h0.6l0.1,0.5l0.3-0.2l0.2,0.1l0.3,0.7h0.2l0.5-0.6l-0.1-0.7l0.4-0.1l0.1-0.7
			l0.2,0l0.2,0.5l0.6,0.4l0,0.7l-0.2,0.2l0.2,0.3l0.2,0.5l-0.4,0.4l0.3,0.2l0.2,0.6l-0.2,0v0.4l0.2,0.2l-0.2,0.4l-0.2,0.2l0.2,0.3
			l0.5-0.5l0.2,0.4l0.6,0.1l0.1,1l0.3-0.2l0-0.4l0.5-0.5l0.4,0l0.2,0.3l-0.5,0.8l0.5,0.4l0.2,0.6l0.3-0.8l0.4-0.3l0-0.3l0.2-0.3
			l0-1.4l0.4-0.4l-0.4-0.4l0.5-0.4l0-0.4l-0.2-0.1l0-0.2l0.2-0.1l0.1-0.8l-0.3-0.3l0.3-0.8l0.4-0.3l0.8-0.2l0.2,0.4l0.4,0.3l0.2-0.3
			l-0.4-0.4l0.1-0.6l-0.8-0.4l-0.3-1.1l-0.4-0.2l0-0.3l-0.5-0.4l-0.2-0.8l0.2-0.2l-0.1-0.6l-0.6-0.5l0.1-0.5l-0.2-0.3l0.7-0.7l0.6,0
			l0.5-0.6l0.7,0l0.2-0.2l0.8,0.7l0.8,0l0.3,0.1l0.6,0.1l0.3-0.1l-0.7,0.4l0.3,0.3l-0.6,0.2l-0.6-0.1l-0.7,0.8l-0.1,0.4l0.3,0.7
			l0,0.6l0.3,0.3l0.1,0.4l0.6,0.7l0,0.3l0.1,0.1l-0.1,0.2l0.6,0.2l0.1,0.7l0,0.3l-0.2,0.3l0.1,1.3l0.2,0.1l0.2-0.4l0.2,0l0.3,0.6
			l0.2,0.3l-0.3,0.8l0,1.1l0.4,0.3l0.4-0.2l0.5,0.1l0.1,0.2l-0.1,0.4l-0.3,0l-0.5,0.4l-0.2,0l-0.7,0.7l-0.1,0.5l-0.6,0.4l-0.1,0.3
			l-0.4,0.2l-0.1,0.5l-0.3,0.4l0.2,0.7l0.4-0.1l0,0.8l-0.5,0.9l0.1,0.4l0.3,0.2l-0.2,1.2l0.2,0.9l-0.3,0.4l-0.6,0.2l-0.1,0.6
			l0.2,0.2l-0.1,1.1l-0.2,0.3l0.1,0.4l0.5,0.5l-0.4,0l-0.2,0.9l0.2,0.3v0.7l-0.5,0.5l0.3,0.6l0,1.1l0.4,1l-0.9,1.7l0.5,0.7l-0.5-0.1
			l-0.9,0.1v1.1l0.1,0.4l-0.6,0.7l-1.1-0.5l-0.5,0.5l0,0.4h0.7l1.1,1.5l-0.1,1.4l-0.2,0.3l0.3,0.4l-0.4,0.2l-0.1,1l-0.6,0.7
			l-0.1,1.1l0.5,1l0.3,1.9l0.8,1.2v1l1.2,2.8l1.5,3l1.5,2.4l0.7,0.8l0,0.8l2,2.3l2.1,3.9l1,0.5l0.7,0l0.4-0.2l-0.2,0.5l-0.5,0.3
			l-0.4,0l0.7,1.1l1.1,2.4l0.1,1l0.6,0.9l1.1,0.1l0.2,0.4l0,0.6l0.1,0.4l-0.1,0.6l0.6-1.3l0.3-1.2l0.2-0.1l0.1-0.6l0.7-0.6l0.1-0.5
			l-0.1-0.3l0.2-0.5l0.2-1.2l-0.3-0.5l0.1-0.8l0.5-0.4l-0.5-0.5l-0.3,0.2l-0.4-0.1l0.2-0.4l-0.4-0.8l0.3,0.1l0.2-0.3l-0.5-0.5
			l0.1-0.4l0.1-0.6l-0.6,0l-0.3-0.3l0.3-0.5l0.5,0.4l0.8-0.8l0.4,0.1l0.5-0.4l0.5-0.3l0.2,0.2l0.6,0.1l-0.4-0.5l-0.8-0.4l0-0.7
			l-0.8-0.4l-0.5-1.6l0.3-1.4l-0.5-0.5l0.4-0.3l0.1-0.7l0.5-1.1l-0.2-0.3l0.4,0.1l0.9-0.6l0.1,0.3l1.6-0.6l-0.1-0.7l0.4-0.4
			l-0.6-0.4l-0.9-1.3h-0.4l-1.4-2.1l0-0.5l-0.4-0.4l-0.1-2l0.1-0.3l-0.2-0.9l0.4-0.6v-0.6l-0.7,0.1l-0.1-0.3l0.5-0.8l0.5-0.1v-0.4
			l-0.2-0.2l0.4-0.3l0.1,0.5l-0.1,0.7l-0.3,0.6l0.1,0.8l0.8,0.3l0.7,0.5l0.4-0.1l0-0.8l0.3-0.4l-0.4-0.9l-1.2-1.1l0-1.3l-0.6-0.3
			l-0.1-0.1l-0.2,0.2l-0.4,0.3l0,0.3l-0.3,0.2l-0.6-0.4l0-1l-0.4-0.6l-0.5-1l0.4-0.5l0.2-0.2l-0.1-0.5l0.3-0.5l-0.4-0.4l0.1-0.3
			l0-0.5l-0.4-0.2l-0.5,0.1l-0.9-0.7l-0.6,0l-0.4,0.3l0,0.4l0.7,0.8l-0.1,0.5l-0.2,0.2l-0.7-0.3l-0.7-1l-0.5-0.5l-0.4-0.3l0.2-0.3
			l-0.5-1l0-0.6l0-0.3l-0.3-0.6l0.2-0.4l-0.3-0.8l0.3-0.5l-0.1-0.5l0.2-0.6v-0.6l-0.3,0.2l-0.5-0.6l0.1-0.2l0.4-0.1l0.5,0.3l0-0.2
			l-0.4-0.3l-0.4-0.4l0.2-0.4h0.2l-0.1-0.4l-0.4-0.4l-0.6-0.2l-0.1-0.4l0.3-0.1l-0.1-0.7l-0.5-0.6l0.1-0.5l0.2-0.5l0.3-0.2l-0.4-0.5
			l0.1-0.4l0.4,0l0.6,0.3l0.3-0.1l0.2-0.8l0.4-0.1l0.3,0.4l0.3,0l0.4,0.6l0.6-1.2l-0.6-0.2l0.1-0.5l0.4-0.3l0.7-1.2l0.1-0.6l0.4,0.5
			l0.5,0.3l0,0.6l0.7,1.8l0.4,0.4l0.3-0.2l0.2-1.5l0.2-0.5l-0.1-0.6l0.3-0.5l-0.4-0.8l0.5,0.3l0.4-0.4l0.3-1l0.5,0l0.6-0.8l0.6-0.2
			l0.3,0.2l0.9-0.6l0.8,0.1l1.5,0.9l0.1,0.5l0.4,0.1l0.5-0.1l0.3,0.1l-0.3,0.2l0.8,0.9l0.3-0.3l0.5,0.5l0.7-0.1l0.4,0.1l0-0.5
			l-0.8-1.1l0.2-0.3l-0.2-0.3l-0.4-0.1l0.1-0.5l0.3-0.5l0.2-1.3l0.4-1l-0.1-0.4l0.6-0.8l-0.2-0.4l0.3-0.3l-0.4-0.9l-0.4-0.2v-0.3
			l0.8-0.1l0.3-0.6l-0.8-0.4l-0.3-0.4l0.4-0.1l0.3,0.3l0.4-0.1l0.1-0.4l-0.3-0.4l0.6-0.4l0-0.4l-0.3-0.4l0.4-0.2l0.3,0.2l0.2-0.5
			l0.1-0.3l-0.3-0.3l0.5-0.1l0.6-0.7l-0.3-0.4l0.1-0.6l0.3,0.3l0.6-0.5l-0.4-0.8v-0.8l0.5,0l0.1,0.1l0.3-0.3l0.8-1.1l-0.4-0.1l0-0.5
			l0.5,0l0.9-0.9l-0.4-0.3l0.2-0.2l0.7,0l0.9-0.5l-0.3-0.4l0.1-0.2l0.3,0.2l0.1,0.5l0.5,0.2l0.4-0.3l0.6,0.4h2l0.4,0.3l0.3-0.1
			l-0.3-0.7l-0.5-0.3V88l0.4-0.1l-0.1-1.7l-0.7-1.1l-0.6-0.1l-0.7-1l0.4-0.4l-0.7-0.7l-1.3-0.3l-1.2-0.8l-0.5-0.8l-0.1,0.5l-0.4-0.2
			l-0.2,0.2l-0.1,0.6l-0.6,0.2l-0.2-0.4l0.1-0.6l0.6-0.4l-0.4-0.6l0.1-0.2h0.4l0.4,0.4l-1.1-1.7l-0.8-0.6l0,0.8l0,0.2l-0.4,0l-1-1
			l0.1-0.5l0.5,0.1l-0.3-0.5l-1.5-1.2l-0.3-0.1l0.1,0.4l-0.2,0.5l-0.8,0.1l-0.7-0.7l-0.7-0.2l-0.7-1.1v-0.4l-0.4-0.3l-0.5,0.1
			l-0.9,0.8v0.3l-0.5-0.1l-0.4,0.2l-0.1,1.2l0.3,0.3l-0.5-0.3l-0.3-1l0.2-0.8l-0.8-0.4l-0.3-0.7l-0.3,0l0.5-0.1l0.5,0.6l0-0.6l0.6,0
			l0.5,0.3l0.7-0.5l-0.3-0.5l-1.5-0.6l-0.4,0.6l-0.8,0l-0.6-0.3l0.6,0l0.5-0.7l0.5-0.1l0.5,0.3l0.7,0.1l0.6,0.5l0.8,0.8l0.6,0.1
			l0.3,0.5l0.4,0.1l0.6-0.4l0.3,0.4l1.3-1l0.1,0.2l-0.1,0.5l0.5-0.4v-0.7l0.7-1l-0.2-0.4l0-0.8l-0.3-1.1l0.5-1.8l0-1.2l-0.5-0.6
			l-0.2-0.7l-0.8-0.6l-0.4-0.8l0.3,0l0.5,0.7l0.1,0l-0.2-0.8l-0.7-0.4l-0.6,0.3l-1.1-0.3l-1.5-1.8l-0.4-0.2l0.1-0.4l0.8-0.1l0.2-0.6
			l-0.4-0.4l-0.7,0l-0.3-0.2l0.4-0.3l-0.3-0.7l0.1-0.1l0.6,0.8l0.9,0.5l0.1-0.4l-0.3-0.4L868,59l-0.2-0.4l0.3-0.3l0.3,0.3l0.2,0.4
			l0.5,0.2l0.2,1.3l-0.1,0.4l1.4,1l0.5-0.3l0.6,0.2l0,1l0.5,0l1-1.4l0.2-0.7l-0.2-0.6l0.1-1.1l-0.2-0.5l0.3,0.5l0.1,0.7l0.3-0.1
			l0.5-0.5l0.9-0.3l0.1-0.6l0.9,0.3l-0.1,0.2l0.2,0.2l1.3,1l0.2,0.1l0.2,0.7l0,0.3l0.3,0.2l1.2-0.3l0.2,0.1v0.3h0.2l0.4-0.5
			l-0.3-0.5l0.1-0.2l0.3,0l-0.1-0.7l0.4,0.1l0.2,0.4l-0.1,0.4h0.5l0.5-0.3l1.3,0.1l0.4,0.2l0.4-0.1l0.1,0.2l0.3,0l0.4-0.4l-0.3-1
			l0.2,0.1l0.6,0.9l0.8-0.4l0-0.4l-0.4-0.8l-0.5,0.1l-0.6-0.4l0.4-0.5l0.5,0.3l0.4-0.2v-0.7l-0.6-0.1l-0.4-0.2l-0.3,0.3l0,0.5
			l-0.2-0.4l-0.6,0.1l0.1-0.7l-0.3-0.4l-0.5,0.1l0,0.4l-0.2-0.4l0-0.4l0.6-0.3l-0.1-0.8l-0.3-0.2l0.7-0.5l-0.4-0.7l0.1-0.4l-0.7-0.6
			l-0.7,0.1l-0.7,0.7l0.1-0.9l0.5-0.3l-0.5-0.7l-0.1-0.5l-0.3,0l-0.4,0.4l-0.3-0.4l-0.4-0.2l-0.8,0.1l0.6-0.5l0.7,0l0.7-0.5l0.2,0.3
			l0.5-0.9l0.6-0.1l0.1-0.5l-0.3-0.5l-1.2-0.3l0.9-0.2l0.9,0l0.3-0.3l-0.2-0.6l-0.6-0.3l-0.3-0.6l-0.5,0.1l-0.1-0.3l0.2-0.7
			l-0.5-1.5l0.1-0.3l0.3-0.4l0-0.4l-0.5-0.2l-0.5,0.6l-0.5,0.3l0-0.7l-0.5-0.1l0,0.4l-0.3,0.1l-0.1-0.3l0.1-0.6l-1.7-0.3l-0.4,0.2
			l-0.8-0.2l-0.5-0.5l-0.1-0.3l-0.5-0.1l-0.3,0.1l-0.2-0.3l-0.5-0.1l-0.5,0.8l-0.5,0.1l-0.3,0.1l-0.3,0.2h0.7l-0.2,0.4l-0.6,0.4
			l-0.3,0l0.2,0.5l0.5,0.4l-0.1,0.2l-0.6-0.2l-0.4-1l0.1-0.3l-0.4,0.1l-0.7,1l-0.4,0.8l-0.6,0.5l0.1,0.3l0.7-0.6h0.4l0.3,0.6
			l0.5,0.5l1,0.7l0.2,0.6l-0.4,0.4l0.1,0.5l0.7-0.1l0.7-0.4l0.4,0.5l0,0.5l0.4,0.9l0,0.2l-0.5-0.5l-0.3-0.7l-0.3-0.1l-0.3,0.5
			l0.2,0.5l0.3,0.2l-0.1,0.2l-0.5-0.1l-0.5-0.8l-0.7-0.1l-0.6,0.5l-0.4-0.2l-0.2-0.6l0.3-0.3l-0.3-0.6l-0.5-0.4l-0.2-0.6l-1-0.3
			l-0.9-1.6l-0.6-0.6l0.1-0.2l-0.4-0.3l-0.5-0.1l0.2,0.2l-0.2,0.5l-0.2-0.2l-0.3-0.6l-1.1-0.6l-0.7-0.1l-0.6,0.1l0.1,0.4l0.5,0.3
			l1.1,0.4l-0.8,0.3l-1-0.4l-0.5-0.5l0.1-0.4l-0.3-0.2l-0.9,0l0.3,0.2v0.3l-0.8,0.2l-0.4-0.5l0.2-0.3l-0.9-0.2l-0.2,0.1l0.1,0.5
			l-0.5-0.1l-0.2-0.5l-0.8,0l0.3,0.4l-2.4-0.5l-0.7,0.3l-0.9-0.3l0-0.4l-0.8-0.2l-0.1,0.1l0,0.3l-0.3-0.2l-0.5-0.2l-0.5-0.4
			l-0.3,0.2L853,42l-0.8,0l-0.7,0.1l-0.2,0.4l-0.8,0l-1.7-0.6l0.1-0.2l1,0.4l0.5,0.3l0.1-0.3l-1.6-1.1l-1.9-0.2l-0.8,0.2l-0.3-0.2
			l0.3-0.3l-0.4-0.3l-0.6,0.1l0.2,0.2l-0.4,0.1l-0.6-0.3l-1.7-0.5l-0.9,0.1l-0.3,0.4l-0.4-0.1l-0.3-0.4l-0.5,0.2l-1,0l-0.5-0.4
			l-0.4,0.1l-0.8,0.1l-0.2-0.1l-0.4,0.5l-0.1,0.4l-0.3-0.5l-2.2,0.6l0,0.5l-0.5-0.2l-0.3,0.6l-0.2,0l-0.2-0.4l-0.8,0.1l0,0.5l-0.4,0
			l-0.5,0.2l-0.7-0.5l-0.7,0.2l-0.1,0.4l-1.3,0l-1.5,0.1l-0.4-0.2l-1.2,0.2l-0.1,0.2l0.8,0.6l0.4,0.9l0.3,0.3l0.2,0.6l0.4,0.8
			l-0.2,0.3l0,0.7l0.3,0l0.5-0.4l1,0.5l0.3,0.4l0.4,0.1l1,1l0.2,0.9l0.8,0.3l0.5,0.7l-0.1,0.4l0.2,0.3l-0.3,0.2l0.4,0.5l-0.2,0.2
			l-0.4-0.1l-0.7,0.4l0.1,0.4l-0.7,0.1l-0.4,0.3l-0.9-0.1l-0.4-0.3v-0.6l-0.9-1.3l-0.4-0.1l-0.2,0.2l-1.3-0.3l-0.8,0.1l-0.4-0.3
			l-0.8-0.9l0-0.7l-0.5-0.4l-0.7-0.1l-0.1-0.3l-0.3-0.6l-0.9-0.2l-0.3,0.3l-0.1,0.6v0.7l0.1,0.4l-0.6,0.9l-0.2,0.6L820,50l-0.1-0.3
			l-0.3,0l-0.5,0.3l-1.2-0.1l-1,0.4l-0.4-0.1l-0.7,0.6l-0.8,0.2l-0.5-0.1l-0.6-0.5l-0.4,0l-0.2,0.2l0.1,0.4l-1,0.4l-0.5,0.4
			l-1.1,0.1l-0.7,0.8l0,1.1l0,1.3l1,1.5l0.1,0.8l-0.8-1.1l-0.6-0.6l-0.5,0.1l-0.6-0.3l0.1,0.5l0.5,0.3l0.3,0.9l0,0.3l-0.8-1h-0.5
			l-0.2-1l-0.9-0.9l-0.4-0.7l-0.5,0.1l0.2,0.9l-0.1,0.5l-0.3-0.7l-0.6-0.4l-0.8,0.1l0,0.4l-0.4-0.4H804l-0.7,0.8l-0.6,0.1l0.4-0.6
			l-0.1-0.5l-0.6-1.1l0-0.8l-0.3-0.3l-0.1-0.5l-0.5-1l-1-1.1l-1.2-0.6l-1.2-1.2l-2.7-0.9l-1.4,0l-0.7,0.1l-1.2,0.8l-0.1,0.2
			l-0.6-0.1l-1,0.4l-2.1,1.1l-0.8,0.2l-0.9,0.9l-0.5,0.2l-1.1,0.9l-0.6,0.3l-0.7,0.6l-0.9,0.2l-0.8-0.3l-1.2,0.3l-0.8,0.4l0.6-0.6
			l0.9-0.5l0.1-0.5l-0.8-0.9l-1.4-0.3l-1.3-0.9l-0.4-0.2l-0.2,0.2l-0.5,1.1l0,0.6L777,50l-0.3,0.1l-0.3,0.7l-0.4,0.2l-0.2-0.3
			L776,50l0.3-0.4l-0.3-0.7l-0.7-0.3l-0.7,0.6l0.1,0.4l-0.4,0.6l-0.3-0.4l-0.1-0.7l-0.3-0.6l-0.3-0.8l-0.6,0.6l-0.9,0.1l-0.6,0.4
			l-0.4-0.2l0.5-0.4l-0.1-0.5l0-0.5l-0.2-0.6l0.1-0.2l1,0.8l0.5-0.3l0.1-0.6l-0.9-1.2l-1.9-0.7l-1.5-0.2l-1.6,0.4l-1.5,0.3l-1,0.8
			l0.2,2.8l-0.1,0.8l0.2,0.5l-0.5,0.8v0.7l-0.7,0.6h-0.5l-0.3-0.3l0-0.4l-0.7-0.4l0.4-0.3l0.4,0.2l0.4-0.9l-0.2-1.1l-0.6-0.2l-0.4-1
			l0.4,0.1l0.6-0.5l0,0.6l0.5,0.5l0.3,0.9l0.2-0.3l-0.1-1.4l-0.3-1l-1.9,0.7l-1.5,1l0,0.6l-0.8,0.6l-0.5-0.3l0.1-0.4l0.5-0.2
			l-0.6-0.6l0.4-1.2l0.6,0.2l0.3-0.1l0.6,0.3l1.9-0.8l0.7-0.2l-1.3,0l-0.8,0.1l-1.1-0.1l-2.4,0l-0.5,0.3l-3.2,0.2l-1.9,0l-1.2,0.2
			l-1.2-0.5l-1.1,0.2l-0.8,0.3l0.6,0.7h0.9l0.5,0.2l0.5-0.1l0.6,0.7l-0.1,0.4l-1,0.9l-0.6-0.1l-0.9,0.4l-0.1,0.8l-0.3,0.5l0.6,1.1
			l1,0.3l0.1-0.6l0.6-0.6l1-0.3l-0.2,1l-0.9,0l0.4,0.7l-0.1,0.1l0.3,0.5l-0.7,0.4l0.6,0.1l0.6-0.3l0.3,0.4l-0.1,0.6l0.7,0.7l0.7,0.1
			l0.9,1l-0.1,0.5l-0.4-0.3l-0.6,0.2l0.2,0.7l-0.3,0.2l-0.3-0.3l-0.4,0.1l-0.2-0.6l-0.9-0.7l-0.4,0.1l0.3,0.4l-0.5,0.3l-0.3-0.3
			l-0.3,0.3l0.3,0.6l0.1,0.9l0.6,0.2l0.7-0.4l0.5,0.5l-0.4,0.4l0.6,0.3l-0.5,0.4l-0.8-0.2l0,0.3l0.8,0.4h-1.2l-0.3-0.5l-0.9,0
			l-0.4-0.6l-0.7-0.2l-0.7-0.7h-0.9l-0.6-0.3l-0.5,0.1l-0.3-0.1l-1.9,0.8l-0.1,0.5l-0.2,0.3l0.4,0.4l-0.1,0.4l0.4,0.6l-0.1,0.1
			l-0.5-0.5l-0.4,0.2l-0.5-0.2l-2.2,0.3l-1-0.1l-0.6-0.7l-0.7-0.2l-0.6-0.7l-0.3-0.7l-0.5-0.2l0.1,0.4l0.4,0.9l0.2,1.5l0.8,1.7
			l0.6,1.3l0.6,2.9l-0.1,0.6l-0.3,0l-0.3-0.5l-0.1-0.4l-0.5-0.5l-0.3,0.2l0.2,0.4l-0.2,0.4l-0.8-0.2l-0.8-0.9l-1.3-0.1l-0.6-0.7
			l-0.5-0.2l-1.8-1.7h-0.4l-0.4,0.3l-0.5-0.1l-0.3-0.3l1.1-1l0.5,0l-0.4-0.3l-0.7-0.3l-0.6-0.6h-0.2l0.2,0.4l0.5,0.5l0,0.6l-0.7,0.4
			l-1-0.3l-1-0.8l-0.2-0.4l-1.1-0.1l-0.2-0.6l-0.5-0.3h1.2l1.1,0.3l0.5,0.4l0.6-0.3l0.5-0.9l-0.1-0.4l-0.4,0.2l-0.1-0.4l-0.5,0.1
			l0.2-0.8l-0.6-0.7l-0.4,0.2l-0.1-0.5l-0.3-0.2l-0.4,0.2l-0.2,0.3l-0.9-0.1l-0.1-0.8l1-0.9l-0.1-0.4l-0.5,0l-0.8,0.8l-0.1-0.6
			l0.4-0.5l-0.2-0.6l-0.2,0.1l-0.2,0.2l-0.2-0.5l-0.5,0l-0.2-0.2l-0.4-0.3l0.3-0.7l-0.3-0.2l-0.3,0.3l-0.4,0.7l-0.2-1.1l-0.5-0.4
			l-0.5,0.4l-0.3,0l-0.2-0.8l-0.5,0.5l-0.3,0l-0.1,0.3l-0.2-0.7l0-0.4h-0.8l-0.3,0.2l-0.3-0.3l-0.8,0.2l-0.5,0l-0.1,0.3l0.3,0.3
			l0.2,0.6l-0.4-0.1l-0.3,0.1v0.4l-0.2-0.1l-0.6,0.1l-0.2-0.2l0.2-0.5l0.3-0.3l-0.3-0.5l-0.5-0.1l0,0.5l-0.3,0.3l-0.3-0.4l-0.5-0.2
			l-0.5-0.5l-0.2,0.3l-0.4,0.1l-0.7,0l-0.2-0.3l-0.1,0.5l-0.3,0.2l-0.7-0.5l-0.4,0.1l0.1,0.5l0.1,0.2l-0.6,0.5l-0.3-0.2l-0.1-0.3
			l-0.3,0.5l0.1,0.7l0.4,0.4l0.1,0.6l0.3,0.1l0.1,0.7l0.6,0.1l0.3,0.4l-0.1,0.5l0.5,0.4l0.2,0.4l-0.4,0.5l-0.3-0.1l-0.2-0.4
			l-0.8,0.2l-0.5-0.1l-0.5,0.1l0.2,0.4L710,59l-0.6,0l-0.4-0.1l-1.2,0.7l-1.7,0.3l-0.7-0.2l-0.9,0l-0.2,0.1l-0.5-0.1l-2.5-0.1
			l-0.7-0.6l-0.3-1.1l0.4-0.7l0.2-0.1l0-0.4l-0.8-0.3l-0.8,0l-1.7,0.8l-2.2,0.1l-1.8,0.5l-1.2,0.2l-0.2,0.4h-0.4l-0.3,0.4L691,59
			l-0.7,0.7l0.4,0.7l0.4,0.1l0.4-0.2l0.2,0.2l-0.3,0.4l-0.3,0.1l-0.5,0.5l0,0.3l-0.2-0.2l-0.1-1.1l-0.7-0.6l-0.1-0.4l0.1-0.4
			l-0.6-0.5l-0.4-0.1l-1.1-1.1l-0.3-0.1l0,0.3l0.9,1l0.1,0.6l-0.5,0.5l-1.1,0.2l-0.4,0.2l-0.7-0.1l-1.5-1.2l0-0.5l0.3-0.4l-0.1-0.4
			l-0.8,0.3l0,0.6l-0.4,0.4l-0.9-0.6l-0.8,0l-0.5,0.5l0.1,0.9l-0.4,0.6l0.4,0.7l0.6,0.3l0.8-0.6l0.1-0.4l1-0.6l0.2,0.4l-0.1,0.6
			l-1,0.8l0.3,0.4l-0.4,0.6l-0.7,0.2l-0.6-0.3l0,0.2l0.3,0.6l-0.4,0.7l-0.8,0.7l0.3,0.5l-0.3,0.3l-0.4,0l-0.8,0.7l-1,0.1l-0.9,0.1
			l-0.3,0.6l0.3,0.7l0.9,1l0.4,0.1l-0.4,0.1l-0.7,0l-0.2,0.4l0.1,0.2l-0.3,0.5l-0.5,0.5l-0.5,0l-0.2,0.3l0.1-0.5l0.5-0.4l0.4-1.5
			l-0.4-0.3l-0.1-0.4l0.2-0.3l0-0.7l-0.3-0.8l0.3-0.7l0.5-0.3l0.2-0.5l-0.3-1.1l-0.2-0.3l0.2-0.3l0.4-0.1l0.2,0.1l0.7-0.3l0.5-1.2
			l-0.1-0.5l-0.3-0.6l0.3-1.3l0.4-0.6l0.4-0.9l-0.3-0.8h-0.2l-0.3,0.4l-0.4,0l-0.6-0.2l0.6,0l0.6-0.5l0.5-0.2l0.3-0.6l-0.1-0.3
			l0.3-0.4l0.4-0.9l-0.1-0.3l0.2-0.6l0.7-0.3l0-0.4l-0.4-0.4l0-0.3l0.4-0.7l-0.1-0.5l0.2-0.5l0.2-0.1l0.4-0.9l0-1.1l-0.2-1l-0.5-0.9
			l0.2-0.3l-0.1-0.4l-0.3-0.1l-0.3,0.2l-0.4-0.2l-0.3-0.4h-0.2l-0.3,0.6l-0.2,0.2l-0.3-0.2l-0.3-0.7l0.1-0.2l-0.3-0.2l-0.7-0.1
			l-0.4-0.5l0.1-0.2l0.7,0l1,0.4l0.4,0.4l0.3-0.3l0.2,0l0.2,0.3l0.1,0.3l0.2,0l0.1-0.4l-0.5-0.6l-0.1-0.5l-0.4-0.5l-0.4-0.2l-0.2,0
			l-0.3,0.2l-0.4-0.2l-0.1-0.6l-0.8-0.7v-0.5l-0.4-0.4l-0.3-0.4l-0.4,0l-0.4,0.3l0,0.5l0.5,0l0.4,0.3l-0.1,0.3l-0.3,0.2l0,0.4
			l-0.2,0.1l-1-1.1l0-0.4l-0.3-0.6l-0.5-0.1l-2.1-1.2l-0.6-0.2l-0.1-0.2l-1.2,0.1l-0.1-0.5l0.2-0.3l-0.1-0.3l-0.6,0.1l-0.2-0.2
			l-0.6,0.1l-0.4,0.4l-0.2-0.1l-0.5,0.5l-0.2,0.5h-0.8l-0.4-0.1l-0.7,0.7l-0.9,0.2l-0.4,0.1l-0.3-0.2H664l-0.2,0.2l0,0.6l0.4,0.2
			l0.3-0.1l0.3,0.8l0.1,1l-0.4,0.8l-0.8,0l-0.7,0.7l-1.1,0.3l-0.4-0.1l0.5-0.4l0.4-0.2l0.1-0.6l-0.7-1.1l0.4-0.8l0-0.5l0.2-0.3
			l-0.3-0.8v-0.5l-0.7-0.7L661,38l-0.4-0.3l-0.3,0l-0.1,0.6l-0.7,0.1l-0.3-0.3l-0.5,0.3l-0.5,0.7h-0.5l0-0.4l0.4-0.6l0-0.4l-0.4-0.1
			l-0.9,1.3l-1.3,0.5l-0.4-0.1l0.4-0.7l0.6-0.1l0.6-0.9l-0.2-0.6l0.3-0.5l0-0.3l0.5-0.3l-0.1-0.2l-0.8-0.2l-0.2-0.3l-0.1-0.8
			l-0.3-0.1l-0.7,0.6l-0.8-0.1l-0.3-0.8l-0.5,0l-0.5,0.5l-0.7-0.8l-0.4,0l-0.8,0.7l-0.1,0.5l-0.5,0.1l0.4,0.6l-0.5,0.5l-0.1,0.9
			l0.2,0.7l-0.6,0.7l-0.1,2.6l0.7,0.6v0.7H650l0.1,0.7l0.5,0.7l0.5,0l0.6,0.8l0.8,0.2l-0.8,0.5l0.3,0.7v0.4l1,0.1l0.7-0.3l0.9,0.4
			l0.9,0.1l0.2,0.3l-0.5,0.3l-0.5-0.1l-0.4,0.1l-0.7-0.3l-1.3,0.5l-0.4-0.3l-0.5,0.2l-0.5-0.1h-0.5l-0.4,0.4l-1.1,0l-0.4,0.4
			l0.1,0.2l0.6,0.2l0.1,0.5l0.7-0.1l0.3,0.3l0.6-0.4l0.5,0.7l0.7,0.4l0.6,1.1l-0.5,1.2l-0.8,0.4l0.5-1.3l-0.3-0.3v-0.8l-0.9-0.1
			l-0.2-0.1l0-0.4l-0.3-0.1l-0.5,0.3l-0.7,0l-0.6,0.6l0.6,0.2l-0.3,0.3l-0.6,0l0.4,0.5l-0.1,0.3l-0.8,0.6l-0.1-0.6l-0.2-0.1
			l-0.4,0.3l0.2,0.6l-0.2,0.6h-0.5l-0.1-0.9l-0.4-0.5l-0.1,0.2l0.1,0.5l-0.5,0.8l-0.2,0.8l-0.6-0.4v-0.3l0.6-1.3l-0.2-0.4l-0.6-0.1
			l-1.5,0.5l-0.5-0.2l-0.8,0.6l-0.5-0.1l-0.5-0.3l-0.7,0.1l0.6,0.6l-0.4,0.4l-0.2-0.1l-0.1-0.3l-0.2-0.1l-0.2,0.5l-0.3,0.2l0,1.2
			L639,55l0.6-0.6l0.3,0.3l0.9-0.6l0.3,0.1l-0.1,0.5l-1.6,0.7l-0.3,0.6l-0.7,0.4l-1.2,0.2l-0.1,0.4l0.2,0.3l-0.9,0.2l-0.5-0.2
			l-0.3,0.1l-0.1,0.5l-0.3,0.1l-0.7,0.2l-0.2,0.3l0.3,0.5l-0.2,0l-0.2,0.5l-0.3,0.1l-0.3-0.4h-0.2l-0.5,0.8l0.1,0.3l-0.2,0.2v0.5
			l-0.5,0.6l0.1,0.5l-0.7,0.2l-0.9,0l-0.5,0.4l0,0.5l0.4,0l0.3-0.4l1.3,0.3l-0.3,0.4l-0.6-0.1l-0.1,0.2l0.4,0.3l-0.1,1.1l-0.5,0.4
			l0.1,0.4l-0.1,0.5l-0.6-0.9l-0.5,0.1l-0.6-0.8l-0.4-0.1l-0.1,0.2l0.4,0.3l0,0.5l-0.3,0.4l0.4,0.6l0.5-0.3l0.9,0.3l0.6,0.1l0.1,0.5
			l0.5,0.4l0.5-0.1l0.3-0.1l0.2,0.3l-0.6,0.3l-0.7,0l-0.5-0.5l-0.3,0.2l-0.1,0.4l-0.3,0.2l0.7,0.8l0.4-0.2l0.9,0l0.3,0.8l0.3,0.3
			l0.3-0.3l0.9,0l-0.2,0.5l0.8,0.5h0.7l0.4,0.8l-0.4,1l-1.1,0.7l-0.4,0.6l0,0.4l1,1l0.6,0.3l-1,0l-1.2-0.9l0-0.6l0.5-1.1l0.4-0.3
			l-0.1-0.4l0.3-0.6l-0.2-0.2l-1.9,0.8l-1,0.4l-0.3,0.7l-0.7,0.3l-0.5-0.2l-0.7,0.1l-0.8,0.7l-2.1,0.8l-1.5,0.3h-0.7l-0.7,0.7
			l-0.8,0l-0.4,0.3l0.7,0.5l0,0.6l-0.2,0.6l0.3,0.4l0.4,0l0.1,0.3l-0.2,0.4l1,0.6l0.7,1.3l-0.1,1l0.2,0.5h0.3l0.1,0.8l0.8,0.5
			l0.7-0.1l1.9,0.1l0.7-0.4v0.4l0.3,0.5l0,0.7l0.8,0.4l0.4,0.8l1.5,0l1,0.6h0.4l0.6,0.7l0.1,1.4l0.2,0.6l-0.1,0.7l0.6,0.8l0.5,0.4
			l0.9,1.3l0.3,1.2l0.8,0.7l0.2,0.6l-0.6,1.2l-0.3,0.1l-0.4-0.2l0.5,0.8l0.9,0.1l0.5,0.4l1,1.1l1,0.4l0.1-0.1l0.4,0.1l0.9-0.7
			l0.9-0.2l1.1,0.7l0.8,0.3l0.5,0l0.3,0.7l0.1,1.1l-0.3-1l-0.4-0.5h-0.8l-1.2-0.9l-0.6,0l-0.8,0.9l0,0.8l0.1,0.4l-1.1-1.2l-1.1,0
			l-0.6-0.5l0-0.6l-0.5-0.7l-0.9-0.2l-0.9,0.1l-1-0.7l0.3-0.2v-0.7l0.4-0.3l-0.1-0.4l-0.1-1.3l-0.3-1l-0.4-0.3l-0.3,0.9l-0.4,0.2
			l0.1,0.7l-0.3,0.4l0.2,0.4l-0.2,0.6l-0.4,0l-0.3-1.7l0.4-0.5l-0.1-0.6l-0.9-0.7l0-0.9l-0.4-0.6l0-0.7l0.8-0.5l0-0.4l-0.1-0.5
			l0.1-1l-0.7-0.1l-0.2,0.1l-0.4-0.4l-1.2,0.7l-1.5,0.2l-0.8,0l-1.2-1.2l-0.6-0.3l-0.1-0.5l-1.6-0.2l-0.7-0.5l-0.7-0.7l-1.9,0
			l-0.5-0.3l-0.6,0.4l-0.7,1.1l-0.1,0.6l-0.3,0.2l-0.3-0.2l-0.1,0.3l0.4,0.4l0.9-0.6l1,0.3l0.5,1l-0.6,1.1l-0.8,0.2l-1.3-0.5
			l-0.8-0.9h-0.4l-0.8,0.6l-0.3,0.3L617,89l0.8,1.3l0.3,0l0.2,0.7l1,0.8l0.9,0.1l0.5,0.4l1.4,0.1l0.3-0.4l0.3,0l0.1,0.4h0.9l0.3,0.8
			l0.4,0.1l0.1,0.5l1.1,0.1l0.5-0.3l-0.4,0.5l-1.2,0.2l-0.7-0.4l-0.5-0.1l-0.8-0.8l-0.5-0.1l-0.5,0.3l-0.6,0.1l-0.5,0.6l-0.2-0.4
			l-0.5-0.4l-0.5,0.2h-1l-0.8-0.5l-0.7,0.1l-0.3-0.4l0.5-0.3v-0.4l-0.5-0.4v-0.5l-0.8-0.7l-0.3-0.6l0.3-0.7l-0.4-0.8l0.1-1.2
			l-0.6-0.6l-0.1-0.9l-0.3-0.3l-0.4-0.1l-0.1-0.7l-0.8-0.6l-0.4,0.2l1.2,2.3l0.4,1.5L614,89l-0.9,1.1l-0.6,0.6l0,0.3l0.4,0.4
			l0.2,0.9l-0.4,1.1l0,0.7l1.1,0.6l1.3,1.1l0.3,0.8h0.7l0.6,0.7l0.5,1.1l-0.2,1.8l-0.1,0.7l0.6,1l-0.1,1.2l0.3,0.7l1.1,1.1l0.1,0.6
			l-0.1,0.7l0.3,0.4l0.8,0.2l0.8-0.5l1,0.3l0.4-0.3l0.2-0.8l0.7-0.7l0.7,0.2l0.5-0.2l1,0.6l0.6-0.2l0.3,0.6l1.3,0.5l0.9,0l0.6,0.8
			l0,0.4l0.8,0.5l0.2,0.4l0.2,0.1l0.1,0.4l0.4,0.3l-0.4,0.4l-0.5,0.1l-0.1,0.9l0.4,0.8l0.3,0.2l-0.2,0.5l0.3,0.5l0.6,0l0.4,0.5h0.8
			l0.4-0.7l0.2,0.4l0.5-0.1l0.4,0.1l-0.3,0.2l-0.2,0.3l-0.8,0.1l-0.5,0.1l-0.8,0.2l-0.7-0.5l-0.7,0l-0.4-0.6l0.3-0.3l-0.1-0.7
			l-0.5-0.7l-0.1-0.6l-0.5-0.3l0.1-0.7l-0.7-0.9h-0.3l-0.2-0.4l-0.9-0.4V107l-0.9-0.9l-0.8,0l-1.1,1.1l-0.7,0.1l-0.4,0.7l-0.9,0.7
			l0.1,1.6l0.3,0.5l1.2,0.7l0.8,2L624,114l-0.9,1.5l-0.1,0.9l0.5,0.8l-0.5,1.3l-0.1,0.5l-0.8,0.8l0,0.4l-0.5,0.3l-0.4,0.5v0.7
			l0.3,0.4l0,0.5l-0.8,0.5l-1.1-0.2l-0.2-0.3l-1,0l-1,0.2l-0.9-0.3l-2.1-0.3l-0.7-0.7l-0.3-0.5l-0.9,0.2l-0.3,0.5l-0.2-0.2l-0.4-0.1
			l0.4-0.7l0.8-0.1l1.6-0.2l0.3-0.4l1.3,0.7l0.4,0l0.1-0.4h0.6l0,0.4l-0.8,0.5l0.5,0.4l1-0.1l0.4-0.5l0.6-0.3l-0.1-0.4l-0.6-0.6
			v-0.4l0.7,0.3l0.3-0.4l0-1.2l0.7-0.4l-0.1-0.3l-0.4,0.1l-0.1-0.2l0.6-0.3l0-1.2l-0.2-0.3l0.4-0.5l0-0.3l0.5-0.4l-0.1-0.9l-0.6-0.6
			l-0.4-1.1l0.1-0.8l0-0.6l0.3,0.1v-0.4l-0.8-0.8l-0.4-0.1l-0.4-0.5l-0.9-0.3l-1.1-1.4l-0.2-1.2l-0.3-0.3l0.3-0.5l-0.6-0.4l-0.3-0.6
			l0.2-0.7l-0.9-1.3v-0.8l-0.6-0.7l0.2-0.4l0-0.4l-0.5-0.5l-0.2-1.7l-0.4-0.6l-0.7-0.5l-0.2-1l-0.3-0.2l-0.4,0.2v-0.1l-0.7-0.2
			l-0.4-0.7l-0.6-0.5l-0.2-0.7L610,93l0.1-0.5l-0.3-0.5l0.1-0.4l-0.3-0.4l0.3-1.5l-0.4-0.9l0-1l-0.3-0.3v-0.7l-0.4-0.6l0.4-0.2
			l-0.2-0.5l-0.6-0.1l-0.8,0l-1.7-0.7l-0.7,0l-0.3,0.3l-0.5-0.2l-0.5,0l-0.7,0.4l-0.8,0l-0.6,0.3l-0.2-0.2l0.2-0.3l-0.5-0.2
			l-0.4,0.1l0.1,1.2l-0.2,0.9l0.5,0.6l-0.2,0.2l-0.3,1l0.3,0.3l0,0.7l0.2,0.4l-0.2,0.4l0.1,0.8l0.4,0.7l-0.4,0.7l0.1,0.5l0.3,0.7
			l-0.2,0.3l-0.6,0.4l-1,1.5l-0.4,0.3l0.1,0.5l0.4,0.5l-0.3,0.5l-0.1,0.9l0.7,0.6l0.4-0.2l0.4,0.4l0.4,1l0.6,0l0.5,0.5l-0.4-0.1
			l-0.4,0.5l0.1,0.7l0.8,0.6v0.6l-0.4,0.4l-0.4-0.3v0.4l0.5,1.2l0.4,0.4l0.2,0.9l0.3-0.4l0.5,0.3l0.7,0l0.6,0.4l0.5-0.7l0.3,0.3v1
			l0.4,0.5l0.3,0.1l1.1,1.3l0.6,0.2l0.4-0.3h0.5l0.1,0.2l0.5,0l-0.5,0.4l0,1.5l-0.2,0.4l0.4,0.6l-0.1,0.3l-0.3,0l0.1,0.8l0,0.4
			l-0.6-0.1l-0.7-1.2l-0.8-0.6l-0.9-0.2l-0.4-0.8l-0.6-0.5l-1.5-0.1l-1.5-0.9l-0.9-0.1l-0.1-0.5l-0.4,0l-0.5-0.4l-0.8,0.3l-0.5,0.5
			l-0.3-0.6l0.2-0.3l-0.1-0.4l-1.8-0.7l-0.8-0.5l-2.7-0.1l-2.1,0.3l-0.5-0.2l-0.5,0.1l-0.5-0.3l-0.2,0.1l-0.5-0.1l-0.3,0.3l0.3,0.6
			v0.5l-0.6,0.2v0.2l0.4,0.6l0.4,0.2l0.3,1l0.3,0.5l0.1-0.5l0.3,0l0.5,0.9l0.1,0.5l0.6,0.2l0.8,0.8l-0.7-0.1l-0.3-0.2l-0.4,0
			l-0.2,0.9l-0.5,0.4l-0.8-0.3l-0.4,0.3l0,0.3l0.6,0.7l0.2,0.2l0,0.3l-0.3,0.3l-1.4-0.1l-0.3-0.4l0.1-0.4l-0.3-0.6l0.5-0.4l0-0.3
			l-0.6-0.5l-0.4-0.2l0.4-0.5l-0.1-0.2l-0.4,0.2l-0.3,0l-0.7,0.7l-0.4,0.1l-0.5,0.5l-0.1,0.3l-0.7,0.1l-0.3,0.3v0.4l-0.4,0.3h-1.2
			l-0.4-0.2l-0.3,0.1l-0.4,0l-0.3-0.3l-0.7,0.5l-0.2,0.3l-0.6,0.1l-0.5,0.5l0,0.3l0.4,0.3l-0.1,0.3l0.1,0.3l-0.2,0.2l-0.4-0.3
			l-0.2-0.4l-0.3,0l-0.6,0.7l-0.3,0.7v-0.7l-0.6-0.2l-0.4,0.3l-0.4,0l-0.4,0.1l-0.5-0.1l-0.1-0.5l0.6-0.5l0.6,0l0.2-0.4l-0.4-0.6
			l0.1-0.2l0.4-0.2l-0.6-0.6l-0.3,0.2l-0.4-0.1l-0.2-0.3l1-0.5l0.4,0l0.6-0.3l-0.1-0.2l-1,0.1l-1.5,0.6l-0.4,0.4l0.2,0.3l0.2,0.5
			l0.2,0.3l-0.3,0.4l-0.3,0.1l-0.5-0.6l0.2-0.3l0.2-0.1l-0.1-0.4l-0.2,0l-1,1l0,0.3l0.4,0.4l0.3,0.1l-0.1,0.4l-0.6,0.6l-0.3-0.2
			l0.2-0.3l-0.1-0.4l-0.2,0l-0.1-0.4l-1.1,0.3l-0.1,0.4l-0.8,0.4l-0.6-0.1l-0.3,0.2v0.3l-1.1,1.4l-0.3,0.1l-1,1.3l-0.5,0.3l-0.4-0.4
			h-0.3l0.2,0.5l0.7,0.5l0.1,0.4l-0.9-0.3l-0.2,0.3l-1.5,0.2l-0.3,0.2l0.4,0.5l0,0.5l-0.4,0.6l0.3,0.8l-0.2,0.6l-1,0.4l-0.1,0.3
			h-0.6l-0.3,0.3l-0.3-0.6l-0.7,0.5h-0.5l-1.1-1.5l-1.2-1l-0.4-0.2l0-0.8l0.1-0.3l0.3,0.2l0.2-0.4l-0.1-0.3l0.3-0.3l0.9,0l0.3-0.4
			l1,0l0.1-0.4l-0.8-1L560,119l-0.6-0.1l-0.6-0.7l0-0.5l-0.7-0.4l-1.5-0.1l-1,0.1l-0.4,0.2l-0.7,0l-1.1-0.8h-0.6l0,0.3l1.4,1.1
			l0.8,0.6l0.4,1.2v0.6l0.3,0.4l-0.2,0.2l0,0.5l0.1,0.4l-0.2,0.2v1.3l-0.2,0.7l0.2,0.7l0.8,0l0.6,0.4l0.4,0.4l-0.1,0.3l0.1,0.4
			l-0.1,0.3l0,0.3l0.3,0.2l-0.2,0.4l0,1.3l-0.2,0.3l0.4,0.7l0.1,1l-0.4-0.3l-0.2-0.7l-0.7-0.5l-0.7,0.6l0.1-0.6l-0.3-0.4l-0.9-0.1
			l-0.8,0.1l-0.5-0.4l-0.7-0.1l-0.4,0.3l-0.6,1.3l-0.9,0.7l-0.7,0.1l-0.5,0.4l-0.2,0.7l-0.6,0.8l-0.8,0.6l-0.1,0.5l0.3,0.8l1.2,1.3
			l0.7,1.1l-0.4,0.5l-0.4,0l0,0.6l-0.5,0.4l-0.3,0.5l-0.7-0.7l-1.8-0.8l-0.6-0.1l-0.2-0.4l-1,0l-0.5-0.4l-0.4-0.6l-0.8-0.1l-0.6-0.4
			l-0.6,0l-0.1,0.4l0.2,0.4l-0.1,0.3l0.2,0.3l-0.4,0.4l-0.5,0l0.4,0.8l0.1,0.6l0.8,0.4l0.5,0.7l0.7,0.3l0.5-0.2l0.3,0l0.4-0.3
			l0.1,0.4l0.6,0.2l0,0.2l-0.2,0.3l0.4,0.4l0,0.9l-0.3,0.1l-0.5,0l-0.6,0.7l-0.3,0l-0.5-0.5l-0.8,0l-0.4-0.3l-0.9,0l-0.3-0.2
			l-0.1-0.7l-0.5-0.3l-0.4-0.5l-0.2,0l-0.5,0.4l-1.1-0.4l-0.3-0.5l-0.3-0.3l0.2-0.4l-0.1-0.6v-0.5l-0.5-0.4l0-0.5l-0.8-0.7l0-0.6
			l-0.4-0.1l0.1-0.5l0.4-0.1l0.1-0.9l0-0.5l-0.2-0.1l0-0.4l0.2-0.3l-0.3-0.1l-0.6-0.8l-1.3-0.5l-0.3,0.3l-0.3-0.3H533l-0.2,0.2
			l-0.7-0.1l0.2-0.3l0.5-0.1l0.1-0.4l-0.6-0.1V130l0.4-0.2l-0.4-0.3l-0.4,0.3l-0.9,0.2l-0.1-0.1l0.3-0.3l0.5-0.3l-0.2-0.2l-0.8-0.2
			l-0.1-0.4l-0.7-0.4l-0.1-0.8l-0.6-0.4l0.1-0.2l0.5,0l0.1,0.2l0.7,0.1l0.1,0.5l1.2,1l0.4,0l0.1-0.2l0.6,0.4h0.9l0.1-0.2l0.4,0.4
			l-0.3,0.2l0.2,0.2v0.3l0.5,0l0.3-0.3l0.9,0l-0.2,0.1l0.5,0.1l0.5-0.1l0,0.3l0.7,0.7l0.4-0.3l0.5,0.1l0.1,0.3l0.8,0l0.5,0.1
			l0.4-0.3l0.7,0.5l0.9,0.3l1.6,0.1l1.3-0.1l0.2-0.2h0.8l0.4-0.3l0.9-0.2l0.8-0.4l1.1-1.4l0.1-0.4l0.6-0.8V127l0.2-0.4l0.1-0.8
			l0-0.7l0-0.7l-0.2-0.2l-0.2,0.1l-0.4-0.7l-0.3-0.2l-0.2-0.7l-0.6-0.6l-0.5-0.1l-0.1,0.3l-0.6-0.3l0.1-0.4l-1.1-0.8l0-0.5l-0.6-0.6
			h-0.3l0.1,0.3l0.4,0.7l-0.4,0.2l-0.7-0.6l-0.4,0l-0.8-0.7h-0.3v0.2l0.1,0.3l-0.4-0.1l-0.7-1l-0.5-0.2l-0.4-0.5l-1.9-1.3l-2.8-1.5
			l-0.7-0.3l-0.1,0.2l-0.6-0.4l-0.7-0.1l0.1,0.3l-0.4,0.2l-0.5-0.2l-0.8,0l-0.4-0.5l-0.5-0.2l0,0.1l0.3,0.4l-0.1,0.3l-0.4-0.3
			l-0.6,0.1l-0.2,0.2l0.1,0.4l-0.4,0.7l-0.6,0.1l0.3-0.5l0.3-0.2l-0.2-0.2h-0.4l0.1-0.3l0.1-0.2l-0.2-0.1l-0.3,0.3l-0.5,0.6v-0.4
			l0.1-0.2l-0.1-0.2l-0.2,0.3l-0.1,0l-0.1-0.4l-0.5-0.2l-0.4,0.4l-0.1-0.5l-0.2-0.2l-0.4,0.4l-0.2-0.5l0-0.6l0.3-0.4l0,0.3l0.4,0.4
			l0.7-0.1l0.4,0.2l0.5-0.4l0-0.3l-0.3-0.2l-0.1-0.2l-0.4-0.2l-0.2,0.2l-0.3-0.3l-0.3-0.4l-0.6-0.3l-0.5-0.1l-0.1,0.2l0.2,0.3
			l0.2,0.1v0.2l-0.3,0.1l-0.3-0.1l0,0.2l0.5,0.3l-0.2,0.1l-0.4,0l-0.2,0.4l-0.1,0.7l-0.2-0.3l0-0.5l-0.2-0.2l-0.6-0.1l0,0l0,0.6
			l-0.3,0.4l-0.6-0.2l-0.5,0l0.1,0.8l-0.4,0.6l-0.7,0.1l-0.7,0.7l0,1l-0.3,0.1l0,0l-0.7,0.3l-0.5,0.3l0.4,0.2l-0.1,0.7l-0.2,0.9
			l0.4,0.5l0.5,1.3l0.4,0.1l0.8,0.4l0.4,0.6l0.2,0.5l1.3,0.8l0.3,0.3l-0.3,0.8l-0.6,0.9l-0.5,1.3l0.7,0.7l0.2,0.8l1.1,2.1l1.2,2.9
			l-0.5,0.1l-0.1,1.8l0,0.5l0.5,0.1l-0.4,0.5v0.9l0.4,0.5l0.7,0.1l0.2,0.5l-0.2,0.3l0,1l0.3,0.6l0.8,0.6l0.1,0.8l-0.5,0.7l-0.2,0.8
			l1.3,1.8l0.7,0.2l1.2,1.4l0.2,0.8l-0.8,2l-1.1,1.9l-0.6,1.4l-0.8,1.2l-0.7,1.3l-0.7,0.3l-1.3,1.2l0.1,0.8l0,0
			c0-0.1,0.1-0.1,0.1-0.1c0.1,0,0.8-0.4,0.8-0.4l0.6-0.1l-0.4,0.3l0.2,0.4v0.5l-0.6-0.5l-0.1,0.4l0.7,0.7l0.7,0l0.4,0.5h0.6l0.3-0.1
			h0.4l0.5,0.7l-0.3,0.4l-0.8-0.3l-0.3,0.1l-0.1,0.5l-0.7,0.5l-0.5-0.3l-0.3,0.3l0,0.5l-0.5,0.2l-0.2-0.5l-0.3,0.1v0.3l0.3,0.4
			l-0.2,0.6l0,0.1l0.3,0.4l0,0.1l-0.1,0.2l-0.4,0.6l-0.2,0.8l-0.3,0.2l-0.2,2.1l1.3,2.3v0.6l-0.4,0.4l0.1,0.5l-0.4,0.6l0.6,0.1
			l0.1,0.5l-0.1,0.3l0.2,0.2l0.2,0.5l-0.1,0.4l0.4,0.7l0.2,0.3l0.3,0.8l0.4,0.5l0.1,0.8l0.2-0.1l0.5,0.3l0.6-0.4l0.6,0.9l0.7-0.3
			l0.6,0.1l0.5,0.9l0.7-0.6l0.8-0.2l0.3,0.4h0.4l1.2,0.4l0.2,0.6l-0.2,0.7l0.5,0.6v0.8l0.6,0.7l0.3,0.8l0.7,1l0.6,0.4l0.2,0.9
			l0.9,0.2l1,0.9l0.1,0.5l0.7,0.5l-0.3,0.3l-0.6,0.9l-1.4,0.2l-0.6-0.6l-0.2,0.4l0,0.7l0.6,0.9l-0.1,0.8l0.6,0.7v0.7l0.4,0.1
			l0.6-0.1l-0.1-0.6l0.4-0.4l1.4,0.5h1.4l0.7-0.4l0.6,0l0.4,1.3l0.6,0.5l-0.3,0.6l0.8,1l1.5-0.2l0.6,0.5l0.1,0.6l0.5,0.1v0.8
			l0.3,0.9l1.3,1.2l0.5-0.6l0.8,0.4l0.6-0.2l0.6,0.1l0.9-0.7l0.4-0.1l0.6,1.4l0.9,0.5l0.3,0.5l0.4-0.4l1,0.2l0.7,0l0.5,0.3l0.6-0.1
			l0.7,0.4l0.8,0.2l0.4-0.4l0.2,0.6l0.4,0.2l0,0.7l-0.5,0.6l-0.6,0.1l-0.2,1.2l0.8,0.6l0.1,0.8l-0.3,1l0.1,0.7l-0.5,0.4l-1.3,0.1
			l-0.6,1l-0.4,0.2l-0.2,1.3l0,0l0.1,0l0.6,0.1l0.6-0.4l0.7-0.1l0.2,0.3l-0.1,0.4l-1.5,0.8l-0.6,0.4l0.3,0.3h0.4l-0.4,0.4l-0.7-0.1
			l-0.9,0.1l0.4,0.8l0.4,0.4l0.3-0.3l0.1,0.3l0.6,0.2v0.2l-0.4,0.1l-0.2,0.3l-0.4-0.1l-0.2,0.2v0.2l-0.6,0.6v0.6l0.3,0.2l-0.1,0.8
			l-0.5-0.1l-0.1,0.1l-0.4-0.3l-0.6-0.1l0,0.3l0.2,0.4l-0.4,0.2l-0.4,0.3l0.7,0.1l0.3,0l0.8,0.6l0,0.4l0.6,0.6l1-0.1l1.1,0.7
			l0.7,0.2l1.8,1.3l0.4,0.7l0.5,0.2l0.2,0.3l0.4,0.4l0.4,0l0.2,0.4l0.5,0.2h0.3l0.4,0.7l0.5,0.1l0.3,0.1l0.3-0.2l0.7,0.6l0,0.4
			l0.7,0.1l0.6,0.9l0.3,0.4l0.1,1.2l0.5,0.9l-0.2,0.3l0.1,0.5l-0.1,0.1l0,0l0.3,0l0.1,0.5L568,229.8z"/>
		<polygon fill="#E6EEF4" points="844.9,203 845.2,203.1 845.7,202.7 845.8,202.3 845.4,202.5 		"/>
		<polygon fill="#E6EEF4" points="855.9,184.6 856.1,184.3 855.8,184.3 		"/>
		<polygon fill="#E6EEF4" points="855.9,181.7 856.1,181.9 856.4,181.8 856.1,181.6 		"/>
		<polygon fill="#E6EEF4" points="803.3,153.8 803.2,153.7 802.6,153.8 802.2,153.6 801.9,153.9 801.8,154.4 801.4,154.7
			801.4,155.1 801.8,155.8 802,155.8 802.1,155.5 802.3,155.3 802.5,155.4 802.9,155.8 803.3,155.9 803.6,155.6 803.8,155.3
			803.6,155 803.6,154.6 803.9,154.3 804,154.1 803.6,154.1 803.5,154.3 803.2,154.5 803.1,154.3 803.3,154 		"/>
		<polygon fill="#E6EEF4" points="855.1,187.3 855.2,186.4 855,186.4 854.9,186.8 854.7,187.6 854.9,187.6 		"/>
		<polygon fill="#E6EEF4" points="856,183.9 856.1,183.5 856,183.2 855.8,183.4 		"/>
		<polygon fill="#E6EEF4" points="803.4,157.8 802.9,158.4 803,158.8 803.4,159.1 803.7,158.6 804,158.5 804.2,158.1 804,157.9
			804.2,157.6 		"/>
		<polygon fill="#E6EEF4" points="856.3,167.3 856.3,167.7 856.5,167.9 857.1,167.9 857.2,167.5 856.7,167.1 		"/>
		<polygon fill="#E6EEF4" points="847.6,104.1 847.8,104.7 848.1,104.3 848.1,104 847.9,103.9 847.8,104 		"/>
		<polygon fill="#E6EEF4" points="858.7,121.3 859,120.7 859.4,120.2 860.1,119.7 860.4,119.6 860.2,119 859.9,118.3 859.3,117.5
			859,117.4 858.7,117.7 858.6,118 858.4,118.2 857.7,119 857.4,119.1 857.1,119.6 857.4,119.6 857.9,119.4 858,119.5 857.8,120
			858,120.9 858.3,121.3 858.4,121.9 858.1,122.2 858.2,122.6 858.7,123.1 858.9,123.1 858.8,122.5 858.6,122 858.7,121.7 		"/>
		<polygon fill="#E6EEF4" points="847.2,102.6 847.1,102.9 847.6,103.5 847.9,103.4 847.9,103.1 847.5,102.6 		"/>
		<polygon fill="#E6EEF4" points="856.5,177.2 856.7,177.1 856.6,177 856.3,176.9 856.2,177.1 		"/>
		<polygon fill="#E6EEF4" points="800.8,154 800.7,154 800.3,154.4 799.8,154.6 799.8,155 800,155.4 800.2,155.3 800.2,155.2
			800.4,155 800.7,155.2 800.9,155 800.7,154.6 800.9,154.3 		"/>
		<polygon fill="#E6EEF4" points="857.7,169.7 857.4,170.2 857,170.2 857,170.4 857.4,170.9 857.4,171.3 857.1,171.5 857.2,171.7
			857.7,171.6 857.9,171.9 858.1,172 858.1,171.3 858.2,170.9 858.6,170.7 859,170.2 858.9,169.6 859,169.1 859.3,168.9
			859.1,168.3 858.3,167.5 858.1,168 858.2,169 858.1,169.5 		"/>
		<polygon fill="#E6EEF4" points="859.5,168 859.7,167.8 859.6,167.3 859.3,166.9 858.9,167.2 858.9,167.6 859.3,168 		"/>
		<polygon fill="#E6EEF4" points="855.7,185.3 855.4,185.1 855.3,185.3 855.4,185.5 855.6,185.5 		"/>
		<polygon fill="#E6EEF4" points="804.4,156.8 804.1,156.6 804,156.7 804,156.9 803.8,157.2 803.9,157.4 804.2,157.1 		"/>
		<path fill="#E6EEF4" d="M857.6,175l-0.3-0.5l0-0.5l-0.2-0.1v0.5l-0.2,0.5l0.4,0.4C857.3,175.3,857.6,175,857.6,175z"/>
		<polygon fill="#E6EEF4" points="857,177.8 856.9,178.5 857.1,178.4 857.3,178.1 857.3,177.6 857.2,177.4 		"/>
		<polygon fill="#E6EEF4" points="857.8,176.3 857.7,176 857.3,175.8 857.1,175.9 857.2,176.2 857.5,176.4 		"/>
		<polygon fill="#E6EEF4" points="803.2,156.6 803.2,156.9 803.4,157.3 803.6,157 803.5,156.6 803.4,156.5 		"/>
		<polygon fill="#E6EEF4" points="550.3,34.2 550,34.3 550,34.8 550.5,35.6 550.8,35.6 550.9,35.3 550.7,34.8 		"/>
		<polygon fill="#E6EEF4" points="643,51.1 643.3,51.3 643.8,51.3 644.2,51.2 644.8,51.3 645.2,51.2 645.4,50.8 645.4,50.6
			645.2,50.5 645.3,50.3 645.2,49.8 644.7,49.8 644.4,50.1 644.5,50.4 644.3,50.5 644,50.4 643.9,50.1 643.6,50.1 643.4,50.5
			643.1,50.6 642.7,50.5 642.5,50.9 642.6,51.1 		"/>
		<polygon fill="#E6EEF4" points="874.7,140.7 875.1,140.7 875.5,141.3 875.8,141.3 876,141.2 876.5,141.7 877.2,141.8 877.3,141.6
			877,140.9 876.4,140.7 875.6,140.2 875.4,139.7 874.9,139.6 874.4,138.9 874.4,138.7 874.6,138.4 874.1,138.4 873.7,138.5
			873.3,138.5 872.9,139 873,139.3 873.4,139.5 873.9,139.5 874.2,139.8 874.1,140 		"/>
		<polygon fill="#E6EEF4" points="614.7,120.9 614.3,120.8 613.9,120.8 614,121 614.3,121.1 614.4,121.5 615,121.8 615.6,121.7
			615.8,121.4 615.6,120.9 615.1,120.8 		"/>
		<polygon fill="#E6EEF4" points="639.6,47.9 639,48.1 639.1,48.3 639.6,48.3 640.2,48.1 640.2,47.8 639.8,47.5 		"/>
		<polygon fill="#E6EEF4" points="880.1,141.6 881,141.9 881.3,142.2 882,142 881.8,141.8 881,141.5 880.6,141.2 880,141.1
			879.7,140.6 879,140.5 878.7,140.6 879,141.1 879.5,141.1 		"/>
		<polygon fill="#E6EEF4" points="644.1,46.2 644.3,46.5 644.4,47 644.7,47 644.9,46.8 645,46.5 644.6,46.3 644.3,45.9 644.1,45.9
					"/>
		<polygon fill="#E6EEF4" points="638.9,45.1 639.3,44.7 639.5,44.7 639.6,44.9 639.4,45.2 640,44.8 640.5,44.3 640.5,43.8
			640.8,43.6 640.8,43 640.6,42.8 640.3,42.9 640.1,43.2 639.6,43.6 638.9,43.9 638.4,44.7 638.1,45.3 638.4,45.3 		"/>
		<polygon fill="#E6EEF4" points="630.1,68.5 630.3,68.4 630.8,67.9 630.9,67.6 630.6,67.3 630.1,67.3 630,67.7 630.1,68
			629.9,68.3 		"/>
		<polygon fill="#E6EEF4" points="637.8,95.4 637.7,95 637.4,95 637.5,95.6 637.7,95.9 		"/>
		<polygon fill="#E6EEF4" points="826.8,45.3 826.4,45.4 826.2,45.7 826.4,46 826.7,45.7 		"/>
		<polygon fill="#E6EEF4" points="636.2,93 636.2,92.5 635.8,92.2 635.6,92.3 635.9,92.8 		"/>
		<polygon fill="#E6EEF4" points="636.7,96 637,95.5 636.9,94 636.5,93.3 636.4,93.3 636.4,94.3 636.6,94.9 636.6,95.8 		"/>
		<polygon fill="#E6EEF4" points="624.2,19.9 624,20.3 623.9,20.7 623.2,20.9 622.7,21.3 622.4,22.2 622.5,22.6 623,23 623.4,23
			623.6,23.3 622.9,23.9 622.8,24.4 623,25.3 622.9,25.6 622.3,26 622.2,26.3 622.8,26.7 623,26.9 623.3,26.8 623.1,26.4
			623.3,26.1 623.7,26.3 624.2,26.7 624.7,26.4 625.1,26.5 625.5,27 625.8,28.1 626.2,28.5 626.9,28.6 627.5,29 628,29.1
			628.6,28.8 629.4,28.5 629.8,28.8 630.5,29.2 631.8,29.3 632.4,29.1 632.8,29.3 633.3,29.2 633.7,29.5 634.2,30 634.7,29.9
			635.2,29.5 635.9,28.9 636.7,28.7 637.4,27.8 637.4,27.3 636.7,26.6 636.3,26.5 635.6,25.7 634.9,25.6 634.3,25.2 634.2,24.5
			634.5,24.5 634.9,24.7 635.4,24.7 635.4,24.4 634.8,23.6 634,22.7 634,22 633.9,21.2 633.4,20.9 633.4,20.3 633.1,20.1 632.8,20
			631.1,18.6 630,18.4 629.1,18.6 629,18.9 629.1,19.3 629.8,20.2 629.9,20.5 629.6,21 629.6,21.5 629.5,22.1 629.2,22.9
			628.9,23.1 628.8,22.7 629.1,22.2 629.2,21.7 629,21.5 629.2,20.6 629,20.1 628.1,18.8 627.3,18.2 626.3,18.1 626,18.3 625.8,19
			624.9,19.6 		"/>
		<polygon fill="#E6EEF4" points="633.1,71.8 632.8,71.4 632.4,71.2 632.6,71.9 632.9,72.1 		"/>
		<polygon fill="#E6EEF4" points="630.7,70.8 631,70.4 630.5,70.2 630.2,70.3 630.2,70.6 630.1,70.8 		"/>
		<polygon fill="#E6EEF4" points="643.6,45.3 643.5,45.6 643.6,45.7 644.2,45.6 644.5,45.2 644.1,45.1 		"/>
		<polygon fill="#E6EEF4" points="616.6,69.1 616,69.2 615.9,69.4 616.2,69.6 616.3,70 616.7,70.2 617.1,70 616.9,69.6 617,69.2
			"/>
		<polygon fill="#E6EEF4" points="617.7,60 617.9,59.7 617.2,59.6 617,59.2 616.6,59.1 616.4,59.4 616.5,59.7 617.1,60 		"/>
		<polygon fill="#E6EEF4" points="625.6,71.5 625.1,71.7 625.3,72 625.9,72.1 626.3,71.8 626.4,71.4 625.8,71.3 		"/>
		<polygon fill="#E6EEF4" points="623.7,72 623.8,72.5 624.3,72.6 624.7,72 624.5,71.7 624,71.7 		"/>
		<polygon fill="#E6EEF4" points="619.8,62.9 619.4,62.5 619.4,62.2 619.2,61.7 618.8,62 618.6,62 618.4,62.2 618.8,62.6 618.7,63
			618.5,62.9 618.3,62.7 618.3,63.7 618.7,63.9 619,63.6 619.2,63.8 619.3,64.3 619.5,64.7 619.6,64.1 619.4,63.5 619.8,63.2 		"/>
		<polygon fill="#E6EEF4" points="618.8,25.1 619.8,25.1 620.2,25.2 620,25.4 619.2,25.6 618.5,25.6 618.6,25.9 619.1,26.2
			619.7,26.2 620.2,25.8 620.8,25.3 621.2,25.1 621.5,24.3 621.8,23.5 621.7,23.1 620.5,22.5 619.5,22.3 618.7,22.5 618.2,22.7
			617.7,22.5 617.3,22.5 616.8,22.9 616.1,22.9 616,23.1 616.2,23.4 616.9,23.6 617.2,24.1 617.7,24.3 618.1,24.9 		"/>
		<path fill="#E6EEF4" d="M618.2,59.3l0.6-0.1l0.4,0l0.5-0.2l0.1-0.2l-0.9-0.1l-0.4-0.2l-0.3,0.1l-0.3,0.6
			C618,59.2,618.2,59.3,618.2,59.3z"/>
		<polygon fill="#E6EEF4" points="628.5,65.9 628.2,65.8 627.8,66 627.3,66.1 627.3,66.3 628,66.5 628.3,66.7 628.7,66.1 		"/>
		<polygon fill="#E6EEF4" points="629.4,68.4 629.7,68.3 629.7,68.1 629.6,67.7 629,67.7 628.9,68 629,68.4 		"/>
		<polygon fill="#E6EEF4" points="821.1,46.7 821.6,46.6 822.3,46.8 823,47.3 823.6,47.6 824.2,47.4 824.5,46.9 824.4,46.3
			824,45.8 824.2,45.6 823.9,45 823.4,44.6 823.2,44.9 822.8,44.8 822.3,44.6 821.7,44.6 821.6,44.8 821.3,44.9 821.4,45.1
			820.9,45.1 820.8,45.6 820.8,46.5 		"/>
		<polygon fill="#E6EEF4" points="629.1,41 628.7,40.9 628.5,41 628.9,41.4 629.2,41.4 		"/>
		<polygon fill="#E6EEF4" points="628.4,72.5 628.6,72.3 628.1,72 627.4,72.3 627.6,72.5 		"/>
		<polygon fill="#E6EEF4" points="626.8,46.1 626.8,45.4 626.4,45 626,45 625.8,45.3 625.8,45.8 625.8,46.3 625.9,46.6 626.2,46.7
			626.7,46.5 		"/>
		<polygon fill="#E6EEF4" points="631.3,64.4 631,64 630.3,64 630,64.1 630.1,64.5 629.9,64.5 629.5,64.3 629.4,64.4 629.6,64.9
			629.9,65.1 630.5,65.1 630.9,65.4 631.1,65.3 631.1,65.1 630.9,64.8 631.3,64.7 		"/>
		<polygon fill="#E6EEF4" points="740.1,11.1 740.5,10.8 740.4,10.6 740.3,10.1 740.1,10 739.4,10.7 739.1,11.8 739.8,11.6 		"/>
		<polygon fill="#E6EEF4" points="724.4,26.5 724.7,26.8 724.5,27 724.2,27 724.3,27.6 724.7,27.7 724.9,28.2 724.9,28.6
			725.2,28.9 725.9,29.1 726.1,29.4 725.9,29.6 726.2,29.9 726.5,29.8 726.9,29.8 727.1,30.1 726.7,30.4 726.5,30.3 726.1,30.3
			725.9,30.6 726.2,31.1 727.8,32.2 728.7,32.6 729.5,32.5 730,32.9 730.5,33.2 730.7,33.7 731.2,34.2 732,34.2 732.8,33.9
			733.5,34 734.1,34.3 734.6,34.2 734.8,33.7 734.8,33.2 734.5,32.6 734.5,32.1 734.2,32.2 733.8,31.9 733.8,31.5 733.9,31.2
			734.2,31.4 734.4,31.7 735,31.9 735.2,32.3 735.2,32.6 735.6,32.5 736.1,31.8 736.6,30.7 737.5,29.8 738.2,29.7 738.7,29.3
			738.9,29.4 738.7,29.8 739.3,29.9 739.7,30.1 740.1,29.9 740.2,29.4 741,29 741.4,28.5 741.2,28.3 740.5,28.3 739.6,28.7
			738.9,28.2 737.9,28 737.6,27.6 736.9,27.5 736.8,27.3 736,26.4 735.5,26.2 735.3,25.2 735.2,24.8 734.8,24.3 734.7,23.8
			734.1,23.4 734.1,23.2 734.4,23 734.1,22.7 734.4,22.4 734.6,22.3 734.5,21.9 734.3,21.7 733.8,21.4 732.8,21.4 732.1,21.3
			731.6,20.8 731,20.8 730.5,20.6 730.3,20.7 731.1,21.5 731.6,21.6 731.8,21.9 731.1,21.9 730.9,21.8 730.5,21.8 730.2,22.2
			730.3,22.8 730.6,23.4 730.8,24.2 731.7,25.1 731.9,25.4 731.6,25.6 731,25.7 730.4,25.1 730.1,24.3 729.7,24 729.1,24.2
			728.8,24.3 728.6,24.2 728.1,24 728,23.5 727.9,23 727.3,22.9 726.7,22.4 725.9,22.3 725.6,22.1 725.3,21.6 724.7,21.9
			724.3,22.2 724.3,23.1 724.1,23.2 724.2,24 724,24.6 723.4,25.1 723.3,25.5 724,26.4 		"/>
		<polygon fill="#E6EEF4" points="743.5,43 744,42.4 744.8,41.9 745.7,42.1 746.8,42.1 747.5,41.9 748.8,41.9 749.3,41.6
			750.2,41.5 750.8,41.7 751.3,41.2 750.8,40.8 750.5,40.3 749.9,39.4 748.8,38.5 748,38.5 747.3,38.3 746.7,37.7 746.2,37.7
			745.9,38 745.1,37.6 744.7,37.6 744.2,38.2 743.6,39.1 743.8,39.7 743.7,40.9 743.4,42.2 742.8,42.7 742.8,43.2 743.2,43.2 		"/>
		<polygon fill="#E6EEF4" points="746.3,23.6 746.6,24.1 748.5,24.8 749.9,24.9 750.9,25.4 751.8,25.4 752.6,25.2 753.4,25.4
			753.9,25.2 755,24.6 755.2,23.8 755.6,23.2 755.4,22.5 754.9,22.3 754.5,22.3 754.4,21.9 754.4,21.6 754.1,21.3 753.7,21.5
			752.8,21.3 751.5,21.6 750.6,22.2 750.1,22.3 749.9,22 749.7,21.5 749.4,21.6 748.7,21.7 747.8,21.7 747.4,21.5 747.4,22
			747,22.4 746,22.2 745.6,21.8 745.6,21.4 745.1,21.3 745.4,22.3 		"/>
		<polygon fill="#E6EEF4" points="742.2,37.7 742.1,37.1 741.3,36.3 741.1,35.7 740.7,35.6 740,35.8 739.5,36.3 739.6,36.8
			740,37.4 739.9,37.7 740.1,38 740.5,38.2 741,38.8 741.6,39.1 741.8,38.9 741.7,38.7 741.9,38.1 		"/>
		<polygon fill="#E6EEF4" points="618.7,86.5 619.3,86 619.7,85.8 620,85.2 620.5,85 621,84.4 620.9,83.9 620.6,83.8 620.1,83.7
			619.3,83.9 618.9,84.4 618.9,84.9 618.6,85.4 618.3,85.6 618.2,86.2 618.4,86.5 		"/>
		<polygon fill="#E6EEF4" points="799.7,44.9 799.9,44.7 799.8,44.2 799.4,44.1 799.2,44.5 799.5,44.9 		"/>
		<polygon fill="#E6EEF4" points="735.5,22.3 735.9,22.5 736,23 736.3,23.2 736.6,23.7 736.4,24 736.4,24.5 736.2,25 736.4,25.8
			737.7,26.8 738.3,27.4 739.6,28 740.1,28 740.8,27.5 741.1,27.5 741.6,27.9 741.8,27.6 742.3,27.1 742.4,26.3 742.7,25.9
			742.5,25.4 742.5,24.7 741.9,24.6 741.3,23.9 741.3,23.4 741.7,23 742.3,22.8 742.3,22.5 740.9,22.1 739.5,21.9 739.1,22.1
			738.4,22 737.1,21.3 736.5,21.2 735.6,21.3 734.8,21.3 735.2,21.8 		"/>
		<path fill="#E6EEF4" d="M748.6,58.9l0.1-0.3l0.7-0.2l0.2-0.3l-0.2-0.4l-0.2-0.6l-0.2,0.1l-0.1,0.5l-0.5,0.4c0,0-0.6,0.1-0.6,0
			l0.5,0.7L748.6,58.9z"/>
		<polygon fill="#E6EEF4" points="809.3,54.6 809.6,55.1 809.8,54.9 809.6,54.2 809.1,53.8 808.8,53.8 808.9,54 		"/>
		<polygon fill="#E6EEF4" points="809.6,53.8 809.6,53.4 809.3,53 809,53 809,53.2 809.4,53.7 		"/>
		<polygon fill="#E6EEF4" points="810,53.2 810.1,52.8 809.9,52.3 809.6,52.3 809.5,52.5 809.8,53.3 		"/>
		<polygon fill="#E6EEF4" points="803.9,44.6 804,44.2 803.8,44 803.6,44.2 803.7,44.6 		"/>
		<polygon fill="#E6EEF4" points="808.1,54.5 808.3,54.2 808.4,54.1 808.3,53.5 808,53.3 807.9,53.5 807.5,53.6 807.8,54.2 		"/>
		<path fill="#E6EEF4" d="M604.3,107.5l-0.1-0.4l-0.3-0.3l-0.3,0.2v0.3l-0.1,0.3c0,0,0.1,0.2,0.1,0.2l0.4,0.1L604.3,107.5z"/>
		<polygon fill="#E6EEF4" points="802,44.1 802.2,43.8 801.5,43.6 801.3,43.9 801.6,44.2 		"/>
		<polygon fill="#E6EEF4" points="642.2,46.9 641.9,47.1 641.8,47.6 641.3,47.9 641.4,48.1 641.7,48 642.1,47.7 642.2,47.9
			642.4,48.4 642.6,48.1 642.7,47.7 642.5,47.5 642.5,46.9 		"/>
		<path fill="#1B78D7" d="M525.8,159.6l-0.5-0.5c0,0-0.2,0.5-0.2,0.5l0.5,0.3L525.8,159.6z"/>
		<path fill="#E6EEF4" d="M638.9,24.1l-0.2,0.2v0.6l0.3,0.3l0.4,0.1l0.2,0.3l-0.1,0.5l0.6,1.4l0.4,0.4h0.5l-0.3,0.3l-0.5,0.1
			l-0.3,0.9l0.5,1l0.2,0.7l0,0.7l0.3,0.2l0.1,0.5l-0.2,0.3l0.4,0.8l0.3,0.9l0.5,0.4l0,0.5l0.3,0.3c-0.1,0,0.7-0.2,0.7-0.2l0.4-0.7
			l0.6-0.8l0.4-0.2l-0.1-0.3l0.1-0.5l1.2-0.8l0.5-0.1l0.3,0.3l0.4-0.1l0.3-0.5l0.2-0.4l0.6-0.2l0.9-0.7l0.1-0.5l0.4-0.3l0.5-1.1
			l-0.2-0.6l-0.7-0.9l-0.3-0.7l0-0.5l-0.9-0.6l-0.5-0.1l-0.2,0.2l-0.4-0.3l-0.7-0.3l-0.7-0.7l-0.3-0.1l-0.1,0.2l-0.4-0.1l-0.1-0.4
			l-0.4-0.5l-0.4,0l-0.1,0.5l-0.3,0l-0.6-0.7l-0.3-0.2l0,0.3l0.4,0.5l0.1,0.4l-0.4,0.3l0,0.5l-0.3,0l-0.2-0.4l-0.1-1.8l-0.6-0.2
			l-0.5-0.1l-0.7-0.3h-0.4l-0.3,0.4l0.1,0.5l0.6,0.4l0.4,0.5l-0.2,0.2l-0.4,0l-0.2-0.3l-0.4-0.3l-0.2,0l0.1,0.4L638.9,24.1z"/>
		<polygon fill="#E6EEF4" points="553.7,127.6 553.6,127.3 553.3,126.9 553,127 553,127.3 553.4,127.6 		"/>
		<polygon fill="#E6EEF4" points="576.5,116.5 576.9,116.6 577.2,116.3 577,116 576.7,116.1 		"/>
		<polygon fill="#E6EEF4" points="653,29.5 653.5,29.1 653.5,28.9 653.3,28.7 653.5,28.4 653.7,28.3 653.6,28 653.2,28.1
			652.8,28.6 652.8,28.9 652.5,29 652.4,29.4 652.7,29.6 		"/>
		<polygon fill="#E6EEF4" points="538.8,135.7 538.5,135.7 538.1,136 538.1,136.4 538.6,136.8 538.7,137.1 538.9,137 539,136.8
			538.7,136.3 538.9,136.1 		"/>
		<polygon fill="#E6EEF4" points="711,51.5 711.2,51.7 711.4,51.5 711.6,50.9 711.5,50.4 710.7,50.8 710.6,50.9 710.7,51.4 		"/>
		<polygon fill="#E6EEF4" points="731.8,41 731.1,41 730.4,40.4 730,40.3 729.9,40.5 730.1,41 730.4,41.4 731,41.4 731.5,41.8
			732.2,41.8 732.7,42.4 733.1,42.4 733.1,42 732.3,41.2 		"/>
		<polygon fill="#E6EEF4" points="653.7,29.9 654.5,30 655.3,29.9 655.6,29.5 656,29.9 656.3,29.3 656.1,28.7 655.7,28.6
			655.5,28.7 655,28.7 654.7,29.3 654,29.2 653.7,29.6 		"/>
		<path fill="#E6EEF4" d="M704.2,59c0,0,0,0.4,0,0.4h0.7l0.2-0.2l0.2,0l0-0.2l-0.4-0.4l-0.6-0.4l-0.4,0l-0.3,0.2l0,0.3L704.2,59z"/>
		<polygon fill="#E6EEF4" points="720.8,28.5 721.6,29.2 722.4,30.3 722.8,31.5 723.4,31.7 723.7,31.5 723.6,30.9 723.1,29.5
			722.9,28.9 722.4,28.5 721.5,28.4 721,27.7 720.5,27.3 720.2,27.2 720.3,27.6 		"/>
		<polygon fill="#E6EEF4" points="683.5,55.6 684.9,56 685.5,56.1 685.8,56.3 686.2,56.1 686.3,55.6 686.6,55.4 686.6,55
			686.3,54.7 686.3,53.8 686,53.4 685.7,52.8 685.7,52.5 685.3,52.4 684.2,52.7 683.3,53.3 682.7,53.3 682.6,53.5 682.8,54.1
			683.2,54.4 683.3,54.9 683.1,55.2 682.6,55.1 682.5,55.3 682.7,55.6 		"/>
		<polygon fill="#E6EEF4" points="659.7,36.2 659.8,36.4 660.3,36.2 660.5,35.6 660.1,34.8 659.6,34.7 659.3,34.8 659.3,35.3
			659.9,35.9 		"/>
		<polygon fill="#E6EEF4" points="628.2,68.5 628.3,68.2 628,68.2 627.3,68.7 627.3,69 627.8,69.2 627.9,69 627.8,68.8 627.9,68.7
					"/>
		<polygon fill="#E6EEF4" points="554.2,35.4 554.4,35.1 554.2,34.9 553.8,34.9 553.7,35.1 553.4,35.3 553.5,35.5 553.8,35.6 		"/>
		<polygon fill="#E6EEF4" points="553,37.3 553.4,37.2 553.6,36.9 553.5,36.4 553.3,36.1 553,36.2 552.7,36.6 552.3,36.7
			552.4,37.1 		"/>
		<polygon fill="#E6EEF4" points="552.6,35.7 552.8,35.7 553,35.3 553,35 552.7,35.2 		"/>
		<polygon fill="#E6EEF4" points="555,27.3 554.8,27.3 554.6,27.7 554.8,28.2 555.6,28.8 556.2,28.6 556.2,28.1 555.8,27.7
			555.2,27.8 		"/>
		<polygon fill="#E6EEF4" points="555.9,30.1 555.7,30.3 555.6,30.7 555.8,30.9 556.3,30.9 556.6,30.7 556.7,30.3 556.9,30.1
			556.8,29.8 556.6,29.3 556.3,29.2 556,29.5 		"/>
		<polygon fill="#E6EEF4" points="556.3,32.5 556.1,32.8 555.6,32.8 556,33.2 556.4,33.3 556.8,33 556.9,32.6 556.6,32.4 		"/>
		<polygon fill="#E6EEF4" points="555.4,29 555.1,29.3 554.7,29.3 553.9,28.5 553,28.1 552.3,28.1 551.7,28.3 551.6,28.5
			551.9,28.7 552.5,28.7 553.4,29 554.4,29.8 554.9,30.4 555.3,30.2 555.4,29.6 555.5,29.2 		"/>
		<polygon fill="#E6EEF4" points="554.7,37.9 555,38.2 555.4,38.4 556.2,38 556.9,38.1 556.9,37.7 556.6,37.2 556.5,36.6
			556.6,36.1 556.1,35.4 555.7,35.1 555.5,35.4 554.8,35.4 554.2,35.8 554,36.3 554.5,36.9 		"/>
		<path fill="#E6EEF4" d="M842.8,201.6l0.2-0.1l0.7-0.6l0.1-0.6h-0.2l-0.4,0.1l-0.3-0.1l-0.3-0.3l-0.2,0.2l-0.1,0.7l-0.1,0.6
			l-0.1,0.8l-0.3,0.5l0.1,0.3l0.5,0.6c0-0.1,0-0.8,0-0.8L842.8,201.6z"/>
		<polygon fill="#E6EEF4" points="551.8,35.3 551.4,35.2 551.3,35.4 551.3,35.7 551.1,36.1 551.5,36.4 551.7,36.2 551.9,35.7 		"/>
		<polygon fill="#E6EEF4" points="553.5,33 553.9,33.2 554.5,33.2 554.7,32.9 554.7,32.5 554.2,32.3 554,32 553.6,31.9 552.9,32.1
			552.5,32.6 552.5,33.2 552.8,33.4 553.2,33.4 		"/>
		<polygon fill="#E6EEF4" points="825.3,126.1 825.3,125.7 825,125.8 824.7,126.2 824.7,126.6 824.9,126.6 		"/>
		<path fill="#E6EEF4" d="M552.5,32.1l-0.1-0.3l-0.3-0.1l-0.1,0.2l-0.3,0l-0.3-0.5l-0.2,0.2l-0.6-0.1l-0.6,0.2l-0.3,0.2l0.1,0.3
			l0.4,0.4l0.6,0l0.3,0.2c0,0,0.3,0.2,0.3,0.2l1.2-0.5L552.5,32.1z"/>
		<path fill="#E6EEF4" d="M552.2,34.9l-0.4-0.5l-0.5-0.1l-0.2,0.2l0.4,0.5c-0.1,0,0.5,0.2,0.5,0.2L552.2,34.9z"/>
		<polygon fill="#E6EEF4" points="551.2,36.9 551.2,37.4 551.4,37.9 551.7,38 551.8,37.5 551.5,37 		"/>
		<polygon fill="#E6EEF4" points="820.8,169.8 821.2,170 821.9,170.9 822.1,171.9 822,172.6 822.4,173.3 822.4,173.9 822.9,174.2
			823.4,174.8 823.3,174.9 823.3,175.4 824,176.3 824.1,177 824.4,177.7 824.5,178.8 824.7,179.1 824.6,179.7 824.7,180.6
			825.1,181.7 825,182.1 825.1,182.8 825.6,183.3 826.7,184.6 826.7,185.1 827.1,185.9 827,187 827.1,188 827.6,188.8 827.7,189.4
			828.5,190.4 828.5,190.8 828.4,191.7 828.3,192.8 828.5,193.5 829.1,193.9 829.5,194.8 830.2,195.2 830.1,194.6 830.2,194
			830,193.5 829.8,192.8 829.9,191.9 830.4,191.5 830.7,191.6 830.7,192 831,192.2 832.1,192.1 832.2,191.9 832.5,191.8
			832.7,192.1 832.5,192.3 832.6,192.7 833.2,193.3 833.2,193.8 833.6,194.2 833.6,193.8 833.5,193.5 833.5,192.9 833.5,192.3
			833,191.8 832.8,191.1 832.6,190.6 832.2,190.8 831.9,190.8 831.1,190.3 831,189.5 830.6,188.9 829.9,188.3 829.5,188.2
			829.1,187.6 828.8,186.7 828.4,185.9 828.2,185.3 828.2,184.4 828.1,183.3 827.8,182.7 827.9,181.8 827.9,181.2 827.5,180.5
			827.8,180.2 827.9,179.8 827.8,179.4 828.1,179.4 828.4,179.5 829.1,179.3 829.7,179.4 830.3,179.8 830.7,180.6 831.3,180.8
			831.8,181.1 832.3,181.9 832.6,182.1 832.3,181.3 831.8,180.6 831,180.1 830.5,179.3 830,178.6 830,178.2 829.7,178 829.2,177
			829,176.3 828.6,176.1 828.5,175.6 827.7,174.6 826.9,173.3 826.7,172.6 825.8,171.3 825.3,170.3 824.9,170 824.9,169.5
			824.5,168.9 824.2,168.8 824.2,169 823.8,169 823.7,168.8 823.8,168.3 823.7,167.9 823.1,167.6 822.6,167 822.3,166.2
			822.1,165.8 822,165.2 822.1,164.8 822.2,164.9 822.1,164.1 822,163.2 821.8,162.5 821.3,162.3 820.7,161.7 820.6,161.3
			820.3,161 820.3,160.7 820.6,160.7 821.1,161.2 821.6,161.9 821.4,161.2 820.7,160.3 820.1,159.6 819.9,159.6 819.7,159.1
			818.6,158.2 818.2,157.6 818.2,156.7 817.9,156.3 817.1,156 816.7,155.2 816.5,155 816.3,155.2 816.5,155.5 816.5,155.9
			816.2,156 815.8,155.7 815.3,155.8 816.1,156.5 817,157.1 817.3,157.5 817.2,158.1 817.5,157.9 817.8,157.9 817.9,158.2
			817.7,158.5 817.3,158.7 817.4,159 817.9,159 818,159.6 817.6,159.9 817.1,159.8 816.8,159.3 816.4,159.7 816.1,160.4 816.6,161
			816.8,161.6 817.4,162.3 817.8,163.2 817.9,164.4 818.1,164.6 818.2,165.5 818.6,166.8 819,167.7 819.6,168 819.7,168.3
			819.4,168.5 		"/>
		<path fill="#E6EEF4" d="M544.8,40.7l0.6,0.4l0.1,0.5c0,0,0.5-0.1,0.5-0.1l0.4-0.3l0.8,0l0.2-0.3l-0.1-0.4l-0.6-0.1l-0.1-0.6
			L546,39l-0.1,0.3l0,0.9l-0.2,0.3H545L544.8,40.7z"/>
		<polygon fill="#E6EEF4" points="550,38.9 550.5,38.5 550.8,37.8 550.7,37.4 550.3,37.4 549.8,36.9 549.5,36.9 549.1,37.2
			549.4,37.6 549.4,38 548.9,38.4 549.1,38.7 		"/>
		<polygon fill="#E6EEF4" points="545,38.7 544.4,38.5 543.9,38.2 543.8,38.9 543.7,39.2 543.9,39.7 544.7,40.1 544.8,39.6
			545,39.2 		"/>
		<polygon fill="#E6EEF4" points="549.8,36 550,35.8 549.7,35.3 549.6,34.5 549.3,34.4 549.2,35.2 549,35.4 549.2,35.7 		"/>
		<polygon fill="#E6EEF4" points="555.1,24.8 555.5,24.7 555.6,24.3 555.4,23.9 555.1,23.7 554.8,23.7 554.6,24.1 554.7,24.7 		"/>
		<path fill="#E6EEF4" d="M542.4,30.2h0.7l0.1-0.4l-0.3-0.3l0-0.5h-0.2l-0.4,0.5l-0.1,0.6C542.2,30,542.4,30.2,542.4,30.2z"/>
		<polygon fill="#E6EEF4" points="540.3,36.2 539.8,35.9 539.4,36 538.8,35.7 538.5,35.4 538.2,35.7 538.2,36 538.1,36.3
			538.1,36.8 538.5,36.9 538.9,36.5 539.3,36.8 539.5,37.5 539.9,37.6 540.1,37.8 539.8,37.9 539.1,37.9 538.7,38.3 538.9,39.7
			539.1,40.1 539,40.4 539.1,40.8 539.5,40.6 540,40.6 540.2,40.2 540.3,39.6 540.6,39.6 541,40.1 541,41.1 541.3,41.2 541.6,40.9
			541.9,40.5 541.8,40.1 541.9,39.8 542.2,40 542.6,39.8 542.7,39 542.6,38.3 542.1,37.9 542.1,37.6 542.6,37.4 543.1,37.4
			543.9,37.2 544.2,37.1 544.2,36.8 544,36.7 543.8,36.3 543.5,36.3 543.4,36.1 543.4,35.6 543.6,35.4 543.9,35.4 544,35.6
			544.3,35.7 544.6,35.6 545.1,35 545.5,34.8 545.6,34.6 545.3,34 545.2,33.7 544.7,33.4 544.6,32.9 544.3,32.8 543.7,33.2
			543.4,33.7 543.1,33.9 543,33.6 543.2,33.1 543.6,32.7 543.8,32.1 543.9,31.4 543.8,31.2 543.2,31.9 542.8,32.6 542.6,32.7
			542.6,32.4 542.7,31.9 542.6,31.6 542.4,31.8 542.1,32.5 541.7,32.7 541.7,33.2 541.9,33.3 542.3,33.3 542.6,33.4 542.5,33.7
			542.1,33.9 541.7,34.2 541.8,34.8 541.6,35.2 541.2,35.3 540.8,35.9 		"/>
		<polygon fill="#E6EEF4" points="534.3,37.6 535,37.2 535.5,37.6 535.7,37.9 536.1,38.1 536.3,37.7 536.3,37.4 536.6,37.1
			537,37.5 537.3,38.3 537.7,38.6 537.8,38.2 537.5,37.6 537.4,36.8 537.1,36.4 536.8,36.3 536.5,35.8 537.1,35.2 537.5,34.7
			538.3,34.6 538.7,34.3 539,34.4 539.3,35 539.9,35.3 540.6,35.2 540.7,35 541,34.9 540.6,34.5 540,34.3 538.6,33.5 537.3,33.3
			536.6,33.3 535.5,34.3 535.1,35 534.5,35.2 533.8,35.8 533.9,37.3 		"/>
		<polygon fill="#E6EEF4" points="553.2,22.8 553.5,22.6 553.4,22.3 553.2,22.5 		"/>
		<path fill="#E6EEF4" d="M552.4,21.5c0,0,0.3,0.4,0.3,0.4l0.5-0.4h0.5l0.2-0.2l0.2-0.2l-0.2-0.3l-0.1-0.6l-0.4-0.2l-0.4,0.3
			l-0.7,0.2l-0.5,0.3v0.2l0.3,0.2L552.4,21.5z"/>
		<polygon fill="#E6EEF4" points="553.6,26.8 553.1,27.2 552.8,27.7 553.2,27.9 553.5,27.6 554,27.7 554.1,27.2 554.2,26.9
			553.8,26.4 		"/>
		<polygon fill="#E6EEF4" points="551.9,24.8 552.4,24.5 552.7,24.9 553.1,24.9 553.4,24.6 553.6,24.2 553.9,24 554.1,23.7
			553.8,23.5 553.6,23.6 553.1,23.6 552.7,23.3 552.3,23.2 551.8,23.5 551.3,24 551.3,24.3 551.4,24.6 		"/>
		<polygon fill="#E6EEF4" points="549.2,30 549.5,30.2 550.3,30.5 550.6,30.1 550.9,30.1 551.3,30.5 551.5,31 551.8,31 552.1,30.9
			552.4,31.5 553.1,31.6 553.7,31.5 554.5,31.8 555,32 555.3,31.9 555.4,31.1 555,30.5 554.5,30.5 553.7,30.3 552.8,29.6
			552.5,29.6 552.2,29.3 551.5,29.4 551,29.1 549.7,29.1 549.1,29.3 549.2,29.8 		"/>
		<path fill="#E6EEF4" d="M551.1,28.3l0.6-0.5c0,0,0.7-0.1,0.7-0.2l0.6-0.8l0.3-0.7l0.5-0.4l0-0.2l-0.4-0.2l-0.6,0.4l-0.5-0.3
			l-0.7-0.1l-0.1,0.5l-0.3,0.4l0.2,0.1l0.4-0.1l0.2,0.7l0.1,0.2l-0.7,0.1l-0.9,0.4l-0.2,0.3l0.2,0.3L551.1,28.3z"/>
		<polygon fill="#E6EEF4" points="570.9,100.6 570.3,100.4 570.2,100.1 569.8,99.9 569.2,99.9 568.8,100.3 568.9,100.6 569.2,100.8
			569.5,100.7 569.9,100.9 570,101.4 570.4,101.5 570.8,102 571,102.1 571.1,101.8 570.8,101.5 571.1,101 		"/>
		<polygon fill="#E6EEF4" points="593.3,34.4 593,34.2 592.6,34.2 592.5,34.5 592.7,34.7 593.2,34.8 593.6,35.1 593.9,35.1
			594.7,34.8 594.8,34.5 594.5,34.3 593.8,34.5 		"/>
		<polygon fill="#E6EEF4" points="571.9,69.1 572.1,68.8 572.8,68.3 572.9,67.9 572.7,67.9 572.1,68.3 571.8,68.4 571.5,68.8
			571.7,69.1 		"/>
		<path fill="#E6EEF4" d="M591.8,22.9l1,0l0.7-0.2l0.3-0.4l-0.2-0.6l-0.8-0.2l-0.9,0.1l-0.7,0.6l0,0.4l0.2,0.2
			C591.3,22.8,591.8,22.9,591.8,22.9z"/>
		<path fill="#E6EEF4" d="M567.9,83.1l-0.3,0l-0.3,0.4l-0.2,0.4l0.1,0.2l-0.2,0.2l-0.5,0.1l0,0.2l0.6,0.6l0.5,0.3l0.2-0.2l0.1-0.3
			l0.4-0.2l0.7-0.6l0.6-0.2l0.6,0.1l0.3,0.2l0,0.3l-0.2,0l-0.3-0.3h-0.3l-0.2,0.3l-0.7,0.4l-0.3,0.5l-0.1,0.5l0.2,0.5l-0.1,0.2
			c0,0,0,0.3,0,0.3l0.8,0l0.8-0.4l0.7-0.3l0.5,0.1l0.3,0.3l0.6,0.1l0.4-0.2l-0.2-0.3l0-0.4l0.2,0.1l0.3,0.5l0.5,0.2h0.8l0.1-0.3
			l0.4-0.1l0.3-0.7l0-0.6l0.4-0.6l0.1-0.5l-0.4-0.3l-0.3-0.7l-0.5-0.1h-0.4l-0.2-0.3l0.3-0.2l0.4,0.1l0.4-0.1l0.3,0.4v0.3l0.3,0.2
			l0.3-0.4l-0.2-0.8l-0.6-0.8l-0.5-0.8l0.2-0.3l0.4,0.4l0.1,0.4l0.5,0.2l0.5,0.1l0.1-0.3l-0.1-0.4l-0.2-0.2l0-0.3l0.3-0.6l-0.1-0.5
			l-0.4-0.5l-0.6-0.7l0.4-0.1l0.4,0.4l0.4-0.1l0.2-0.6l-0.1-0.2l-0.4,0l0-0.7l0.3-0.1l0.5,0.3l0.7,0.3l0.2-0.3l-0.4-0.3l-0.1-0.3
			l0.4,0l0.3,0.2l0.4-0.4l0-0.6l-0.2-0.2l0.1-0.2l0.7-0.3l0.1-0.4l-0.5-0.3l-0.2-0.4l0.3-0.5l0.3,0.5l0.3-0.3l0.8-1l0.2-0.6l0.3-0.3
			l0.1-0.7l0.8-0.5l0.4-0.8l0.3-1l0.4,0l1-0.8l1.1-1.3l0.9-0.7l0.3-0.1l0.7-0.6l0.9-0.3l0.5-0.4l0.8-1l0.4-0.3l0.3,0.1l0.4-0.2
			l0-0.4l-0.2-0.3l0.3-0.5l-0.1-0.5v-0.8l-0.2-0.1l-0.4-0.1l-0.1-0.7l0.3-0.7l-0.2-0.2l-0.6-0.1l-0.3-0.3l-0.5-0.1l-0.3-0.4l0-0.5
			l-0.2-0.3l-0.6,0.4l-0.1,0.3l-0.3-0.1l-0.4-0.2l-0.5,0.1l-0.7,0.4l-0.2,0.5l-0.3,0.3l-0.4,0.1l-0.3,0.3l-0.1,0.4l-0.4,0.5l0,0.3
			l0.3,0.6l0,0.4h-0.5l-0.2,0.3v0.4l-0.3,0.2l-0.3,0.4l-1,0.6l-0.3,0.3l-0.2-0.1l-0.5,0l-0.4,0.3l-0.5,0.7l-0.4,0.3l-0.2-0.2
			l-0.2-0.4h-0.2l-0.1,0.4l0.1,0.6l-0.2,0.2l-0.2-0.5l-0.3-0.5l-0.8,0.1l-1,0.3l-0.2,0.2l-0.4,0.1l-0.2,0.3l0.3,0.7l0.2,0.2
			l-0.1,0.2l-0.3,0.1l-0.3,0.5l-0.2-0.1l0-0.3l0.2-0.2v-0.4h-0.4l-0.5,0.6l-0.4,0.3l0,0.4l0.4,0.2l-0.3,0.2l-0.2,0.4l-0.6,0
			l-0.3,0.3l-0.1,0.3l-0.5,0.2l-0.3,0.3l-0.1,0.8l0.2,0.2l0.3,0.1l-0.4,0.4l-0.8,0l-0.3,0.2l-0.1,0.7l0.1,0.4l0.3,0l0.4-0.1l0.2,0.2
			l-0.1,0.3l0.1,0.5l-0.4,0.3l-0.3-0.1l-0.7-0.2l-0.6,0.3l-0.2,0.4l0,0.4l-0.2,0.5l-0.5,0.4l-0.4-0.2l-0.3-0.4l-0.1-0.4l-0.2,0.1
			l-0.2,0.7l0.1,0.6l0.5,0.4l0.4-0.1l0.2,0.1l0,0.4l-0.3,0.6l0.1,0.3l0.3,0.2l0.3-0.3l0.2,0l0.2,0.2l0.6,0l0.4-0.2l0.2,0.1l-0.2,0.4
			l-0.4,0.1l-0.7,0l-0.3,0.3l-0.3-0.1l-0.2,0.4l0.2,0.6l0.4,0.2l0.4,0.1l0.4-0.2l0.2,0.2l-0.1,0.2l-0.6,0.3l-0.7,0l-0.3,0.2l0,0.3
			l0.3,0.2l0.5-0.1l0.6,0v0.2l-0.3,0.1l-0.6,0.1l0,0.3l0.2,0.1l0.7,0.1l0.8,0.5l0.4,0.2v0.2l0.1,0.4l-0.4-0.4l-0.6-0.2l-0.5,0
			l-0.5-0.3l-0.5,0l-0.3,0.3l-0.1,0.4l-0.2,0.2l0,0.3l0.2,0.2l-0.1,0.3L567.9,83.1z"/>
		<polygon fill="#E6EEF4" points="585.8,109 585.7,109.3 586.3,109.8 587.2,110.4 587.1,109.8 586.2,109.4 		"/>
		<polygon fill="#E6EEF4" points="588.6,107.8 588.9,107.2 588.7,106.3 587.7,105.7 587.1,105 586.5,104.9 585.9,104.3 585.3,104
			585.2,103.6 584.4,103.1 584.1,103 583.8,103.3 583.8,103.6 583.4,103.9 583.7,104.4 584.2,104.4 584.1,104.7 583.8,104.8
			583.4,104.5 583.2,104.5 583.4,105 584.4,106 584.9,106.3 585.3,106.8 585.5,106.9 585.6,106.3 586,106.4 586.5,106.4
			586.6,106.6 586.8,107.3 586.7,107.5 587,107.9 587.7,108 588,107.6 		"/>
		<path fill="#E6EEF4" d="M587.7,111.3c0,0,0.3-0.4,0.3-0.4l-0.4,0.1L587.7,111.3z"/>
		<polygon fill="#E6EEF4" points="559.9,28.9 560.4,29 561.1,28.8 561.3,28.1 561.6,27.8 561.6,27.6 561.2,27.3 561,26.9
			560.5,26.8 559.8,27.1 559,27.5 558.8,27.9 558.9,28.2 		"/>
		<polygon fill="#E6EEF4" points="611.6,79.2 611.9,79.4 612.4,79 612.3,78.7 612.4,78.4 612.7,78.2 612.6,78.1 612.2,78.1
			611.4,78.7 611.1,79.3 611.1,79.8 		"/>
		<polygon fill="#E6EEF4" points="614.8,81 615.2,80.9 615.2,80.6 614.4,80.5 613.8,80.3 613.5,80.4 614.1,80.9 		"/>
		<polygon fill="#E6EEF4" points="601.3,82.4 601.4,82.9 601.3,83.7 601.8,84.1 602,84.2 601.9,83.8 601.9,83.5 602.3,83.5
			602.5,84 602.8,83.9 603,84 603.4,83.9 603.6,83.4 604.2,83 604.7,82.8 604.8,82.5 604.5,81.9 603.8,81.5 603.7,81.1 603.2,80.5
			602.9,80.3 602.5,80.5 602,81 601.5,81 601,81.5 601,81.9 		"/>
		<polygon fill="#E6EEF4" points="585.2,108.9 585.3,108.5 585,108.3 585,109 		"/>
		<polygon fill="#E6EEF4" points="611.9,82.3 611.7,81.9 611.3,81.8 610.8,82 610.7,83 610.9,83.4 611.3,83.4 611.6,83.8 612,83.8
			611.9,83.2 611.6,82.9 611.6,82.6 		"/>
		<polygon fill="#E6EEF4" points="609.5,14.3 610.2,14.2 610.7,13.8 610.7,13.4 611,13 610.3,12.8 609.5,12.9 609.2,13.4
			608.7,13.9 609,14.2 		"/>
		<polygon fill="#E6EEF4" points="615.2,17.3 615.7,17.6 615.8,18.1 615.6,19.7 615.3,20.3 615.2,20.7 615.3,21.1 615.6,21
			615.9,20.5 616.7,20.2 616.9,20.4 617.1,20.9 617.9,21.5 618.3,21.5 618.6,21.2 619,21.3 619.8,21.8 620.5,21.9 621.1,21.8
			622,21.2 622.4,20.7 622.5,20.1 623.2,19.5 624.2,18.7 625,18.3 625.2,17.8 625.2,17.2 624.2,16.7 623.4,15.9 622.9,15
			622.9,14.4 623.2,13.8 623.3,13.3 623,13.2 621.6,13.2 620.6,12.9 619.8,12.4 618.7,11 617.9,10.4 617,9.9 616.6,9.8 616.4,10.1
			616.3,10.6 616.4,11 616.4,11.7 615.9,12.4 615.4,13.2 614.9,14 614.8,14.5 614.9,16.7 		"/>
		<polygon fill="#E6EEF4" points="561.6,29.1 561.2,29.1 560.4,29.7 559.9,29.8 559.6,29.5 559.2,29.6 559.2,30.1 559.4,30.7
			559.4,32.3 559.7,33.1 560.4,34 560.9,34 561.8,33.7 562.5,33.6 563,33.3 563.8,33.1 563.8,32.7 563.3,32.3 563,31.8 562.4,31.5
			562.1,30.8 562.1,30.5 562.6,30.1 563.2,30.1 563.7,29.8 563.7,29.5 563.2,28.9 562.7,28.5 562.4,27.8 562.2,28.2 562.2,28.8
			561.7,29.2 		"/>
		<polygon fill="#E6EEF4" points="563.3,26.6 563.1,27 563.1,27.4 563.6,27.9 564.1,27.8 564.5,28.2 564.6,28.6 565,29 565.4,28.4
			565.5,27.7 565.3,27.2 565.5,26.8 566.4,26.4 567.3,25.9 567.3,25.6 566.9,25.6 566.3,25 565.8,24.8 565.6,24.5 565.7,23.6
			565.5,23 565,22.9 564.6,22.7 564.2,22.8 564,23.2 564,23.5 563.5,24.2 563.1,24.5 562.9,25.2 563,25.9 		"/>
		<polygon fill="#E6EEF4" points="581.1,113.5 581.2,113.2 580.7,113 580.5,113.2 580.7,113.5 		"/>
		<polygon fill="#E6EEF4" points="561,21.3 561.3,21.5 561.7,21.4 562.2,21 562.1,20.6 561.6,20.6 561.5,20.4 561.1,20.4
			560.6,20.8 560.3,20.8 560,21 560.1,21.2 		"/>
		<polygon fill="#E6EEF4" points="561.8,38.9 562.2,38 562,37.2 561.5,36.9 560.8,37.1 560.1,37.6 560,38 560.6,38.3 561.1,38.8
			"/>
		<polygon fill="#E6EEF4" points="567.2,113.5 567.2,112.8 566.7,112.2 564.7,111.4 563.7,111.2 563.2,111.6 562.8,112.7
			562.8,114.1 563.1,114.7 563.3,115.4 563.5,115.3 563.9,115.5 563.7,115.9 564.2,115.9 564.6,115.5 565.2,115.5 565.9,114.9
			566.4,114.3 566.4,113.3 566.8,112.9 567,113.4 566.8,114.2 		"/>
		<polygon fill="#E6EEF4" points="559.9,38.8 559.8,39.2 560.4,39.4 560.6,39.5 560.9,39.3 560.4,38.8 		"/>
		<polygon fill="#E6EEF4" points="577.6,116.1 577.6,116.4 577.8,116.6 578.2,116.1 578.2,115.7 577.8,115.8 		"/>
		<polygon fill="#E6EEF4" points="579.2,112.8 578.8,113 579.2,113.1 579.4,113.4 579.9,113.5 579.7,113 		"/>
		<polygon fill="#E6EEF4" points="569.6,116.3 569.6,116.6 569.8,116.6 569.9,116.4 570.5,116.3 570.8,116.1 570.1,116 		"/>
		<polygon fill="#E6EEF4" points="578.6,113 578.3,112.9 578,113.1 578,113.2 578.4,113.2 		"/>
		<polygon fill="#E6EEF4" points="580,103.1 580.3,103.1 580.7,102.6 580.8,102.3 580.8,102 580.2,101.5 579.9,101.7 579.4,101.6
			579,100.9 578.5,100.9 577.5,100.1 577.2,99.6 576.6,99.6 575.9,98.4 575,97.2 574.6,96 574.1,95.1 574.1,93.7 573.7,92.9
			573.4,91.4 573.3,91.1 573.5,90.6 573.5,90.3 573,90.1 572.6,90.3 572.2,90.1 572.4,89.9 573.1,90 573.7,89.6 573.8,88.5
			573.7,88 573.2,88.1 572.7,88.3 572.9,88 573.7,87.7 573.8,87.4 573.6,87.2 572.6,87.2 571.2,87 570.7,86.6 570.3,86.6
			569.3,87.3 568.4,87.3 568,87.6 567.3,88.1 567.2,88.7 567.1,89.1 567.2,89.6 567.7,89.7 567.9,89.9 567.8,90.2 567.3,90.2
			566.7,90.3 566.2,91.1 566.2,91.8 566.4,92.1 566.9,91.9 567.6,91.5 567.7,91.8 567.2,92.2 567.1,92.7 567.4,92.7 567.8,92.2
			568.1,92.1 568.2,92.4 567.8,92.8 567.7,93.2 568.1,93.6 568.7,93.6 568.3,93.8 568,93.8 567.6,94.2 567.6,94.5 567.9,95.1
			567.7,95.3 567.4,95.2 566.9,95.3 566.5,95.1 566.1,95.1 565.6,95.7 565.7,96.3 565.8,97 565.7,97.6 565.8,98.1 566.6,98.7
			566.6,99.1 567.4,99.7 567.9,99.9 568.1,99.7 568.6,99.6 569,98.9 568.9,98.1 569,97.6 569.3,97.1 569.1,97.7 569,98.1
			569.3,98.5 569.5,99.2 569.8,99.3 570.2,99.1 570.2,98.7 570.5,98.1 570.6,98.4 570.5,98.7 570.6,99.2 571.1,100 571.7,100.4
			572.2,100.4 572.6,100.1 572.8,100.2 572.7,100.5 572.4,100.5 572.2,100.8 571.8,101 571.7,101.4 572.2,101.8 572.3,102.2
			571.9,102.2 571.6,102.1 571.6,102.5 571.9,102.8 572.8,102.8 573.3,103.1 573.9,103 574.6,103.2 574.5,102.7 574.9,102.8
			575,103.2 575.3,103.9 575.7,104.3 576.1,104.3 576.5,103.8 576.3,103.2 575.6,102.9 575.4,102.8 575.6,102.6 576,102.7
			576.5,103 576.8,103.4 577,104 577.2,104 577.4,103.5 577.6,103.4 577.9,103.9 578.5,104.2 578.9,104.1 578.9,103.8 578.4,103.4
			578.4,103.2 578.7,103.1 579.2,103.4 579.5,103.6 579.6,103.6 579.8,104.2 580.1,104.4 580.4,104.3 580.5,103.8 580.3,103.4
			579.9,103.4 579.6,103.1 579.7,103 		"/>
		<polygon fill="#E6EEF4" points="583.4,113.3 583.2,113.7 583.4,113.8 583.7,113.6 584.5,113.3 584.7,113 584.2,112.9 		"/>
		<polygon fill="#E6EEF4" points="621.9,82.6 622.4,82.4 622.4,82 621.9,81.2 621.8,80.5 621.2,79.9 620.9,79.3 620.4,79.9
			620.3,80.8 619.9,81.5 620,81.9 620.7,82 620.9,82.3 621.4,82.4 		"/>
		<polygon fill="#E6EEF4" points="556.3,34 556.3,34.5 556.9,35.6 556.8,36.4 557.2,37.3 557.9,37.7 558.3,37.6 558.3,37.3
			557.9,37 557.9,36.7 558.3,36.5 558.6,35.9 558.7,35.5 559.4,35.1 559.7,35.1 559.8,34.9 559.4,34.7 559,34.9 557.9,34.2
			557.3,33.7 557,33.9 556.5,34 		"/>
		<polygon fill="#E6EEF4" points="792.6,261.3 792.1,261 791.7,261.1 791.5,261 791.6,261.4 792.2,261.5 792.6,261.8 		"/>
		<polygon fill="#E6EEF4" points="790.6,280.6 790,281.7 789.7,282.8 789.5,282.9 789.7,283.2 789.7,284.3 789.8,285.4 790.1,285.6
			790.2,285.9 790,285.9 790,286.3 790.3,286.7 790.6,286.8 790.7,287.2 791.5,287.4 791.9,288 791.8,288.7 791.9,289.1 792.3,289
			792.7,289.1 792.6,288.6 792.7,287.9 792.4,287.1 792.9,286.5 793.6,285.4 793.6,284.7 793.8,284.5 793.6,284.4 793.7,283.4
			793.8,282.6 793.7,281.8 794,281.2 794.1,279.8 794.3,279.1 794.5,279 794.4,278.5 793.9,278.2 793.7,278.2 793.4,277.6
			792.8,277.3 792.4,277.5 792.5,277.9 792,278.1 791.4,278.8 790.8,279.7 791,280 790.9,280.4 		"/>
		<polygon fill="#E6EEF4" points="791.4,222.6 791.8,221.9 791.8,221.4 792.5,220.9 793,220 793.5,219.8 793.9,218.4 794.2,217.9
			794.1,217.6 794.2,216.7 794.7,216.1 795.2,216.9 795.7,217.1 796.1,217.5 796.5,217.3 797.1,217.5 798.3,217.4 799,217.5
			799.4,216.7 799.3,216.3 798.7,215.7 798.1,215.3 798.6,215 799.2,214.9 800.3,214.1 800.3,213.5 800.8,212.8 801.3,212.8
			801.5,212.2 801.3,211.8 801.4,211.3 801.4,210.7 801.7,210.5 802.2,210.9 802.2,211.5 802.4,211.8 803.3,212 803.5,212.2
			803.5,212 803.5,211.7 803.3,211.6 803.2,211.1 803.3,210.9 803.6,210.7 804.2,210.7 804.4,210.7 804.4,210.2 804.4,209.9
			804.4,209.6 804.5,209.3 804.5,208.8 804.5,208.3 804.1,208.1 804.1,207.1 804.1,206.6 804,206 804,205.5 803.7,205 803.5,204.7
			803.4,204.2 802.7,203.2 802.5,202.8 802.6,202.5 803,202.3 803.3,202.3 803.6,201.9 803.7,201.5 804.2,200.7 804.4,200.7
			804.8,200.8 805.2,200.9 807,201.3 807.2,201.3 807.5,201.3 807.8,201.1 807.7,200.7 807.5,200.3 807.5,200.1 807.6,199.8
			807.5,199.6 807.4,199.2 807.7,198.7 807.8,198.5 807.8,198.1 807.6,197.8 807.7,197.6 808.1,197.4 807.9,197.2 807.9,196.8
			807.7,196.6 807.8,196.2 808.1,196 808.1,195.8 808,195.5 807.8,194.9 807.7,194.2 807.9,194.2 808,194.1 808,193.8 807.9,193.6
			807.9,193.3 807.6,193.2 807.5,192.9 807.6,192.5 807.7,192 807.5,191.9 807.3,191.6 807.3,191.3 807.7,190.9 808.1,190.8
			808.2,190.6 808.2,190.1 808.4,189.5 808,189.3 807.8,189 807.7,188.6 807.2,188.1 807.1,187.8 807.4,187.6 807.1,187.1
			807,186.8 806.5,186.7 806.2,186.5 805.7,186.3 805.4,186.6 805,186.6 804.6,186.9 804.6,187.3 804.3,187.4 804,187.5
			803.9,188.1 803.3,188.1 802.9,188.1 802.8,188.5 802.8,189 802.4,189.1 802.3,189.7 802.3,190 802,190.1 801.7,190.4
			800.9,190.6 800.6,190.7 800.2,190.6 800,190.8 799.7,190.9 799.5,190.5 799.3,190.2 798.9,190.2 798.5,190.4 798.1,190.6
			797.9,190.3 797.5,189.7 797.2,189.6 796.7,188.9 796.7,188.5 796.8,188.3 796.9,187.8 796.8,187.4 796.7,186.9 796.2,186.9
			796.1,186.6 796.1,186.2 796.4,185.9 796.4,185.5 796.2,185.4 796,185.4 795.7,185.7 795.4,185.7 795.1,185.8 794.7,185.7
			794.4,185.5 794.1,185.5 794,185.3 793.4,185.1 793.3,184.8 793.1,184.5 792.9,184.5 792.6,184.3 792.6,184 792.3,184 792,183.6
			791.9,183.3 791.6,183.1 791.4,183.2 791.2,183.5 791,183.4 790.7,183.5 790.6,183.8 790.3,183.5 790.1,183.3 789.8,183.2
			789.2,183.1 789,183 789.2,182.7 789.2,182.6 788.8,182.6 788.5,182.8 788,182.7 787.7,182.9 787.5,182.7 787.2,182.8
			786.8,182.7 786.6,182.4 786.2,182.2 785.5,181.6 785.2,181 785.3,180.7 785.2,180.2 784.9,180.1 784.5,179.9 784.5,179.4
			784.3,179.2 784.2,178.6 784,178.1 783,177.5 782.5,176.8 782.4,176.4 782.2,176 781.9,176.1 781.7,176 781.8,175.7 781.8,175.5
			781.5,175.2 781.3,174.7 781,174.6 780.9,174.2 780.6,173.8 780.3,173.3 779.7,172.9 779.7,172.6 779.8,172.2 779.7,171.9
			779,171.9 778.9,171.7 778.9,171.4 778.8,171.1 778.7,170.7 778.5,170.4 778.3,170.3 778.3,170 778.1,169.8 777.8,169.8
			777.3,169.7 777.2,169.5 777.4,169.2 777.3,168.9 776.9,168.9 776.6,169.1 776.5,168.9 776.2,168.9 776.1,168.6 776.1,168.3
			776,168 775.6,167.9 775.3,167.9 775,167.6 774.8,167.7 774.4,167.7 774.2,167.6 773.9,167.8 774,168.1 773.8,168.2 773.3,168
			773.1,167.8 772.7,167.9 772.1,167.9 772,167.7 771.6,167.4 770.7,167.3 770.4,167 769.9,167 769.6,166.9 769.5,167 768.7,167.1
			768.5,167.5 768.3,167.5 768,167.7 767.4,167.7 767.1,167.8 766.5,167.7 766.2,168 765.7,168 765.5,168.4 765.1,168.6
			764.7,168.6 764.6,168.7 764.2,168.7 763.9,168.8 763.1,168.9 762.8,169.2 762.8,169.5 762.4,170 762.3,170.5 762.1,170.8
			762.1,171.1 761.9,171.3 761.9,172 762.1,172.2 762.3,172.3 763,171.9 763.3,171.7 763.7,171.8 764.1,172.5 764.3,173
			764.7,173.3 764.7,173.7 764.8,174 764.8,174.7 764.4,175 764.1,175.5 764,176.1 763.6,176.4 763.3,177 763.3,177.4 763.5,177.9
			763.4,178.2 763.5,178.8 763.9,179.2 763.8,179.7 763.5,179.9 763.4,180.2 763.6,180.7 763.6,181.5 763.4,181.7 763.5,182.5
			763.8,182.5 764,182.7 764.2,182.5 764.4,182.7 764.5,183.2 764.3,183.8 763.9,184.2 762.9,184.4 762.3,184.8 761,186.1
			760.6,186.1 760.2,185.8 759.4,185.7 758.9,185.8 758.8,185.6 758.4,185.5 758.1,185.6 758.2,185.6 757.6,190 757.7,190.9
			757.4,191.7 757.5,192.3 757.2,193.5 757.6,194.3 758.9,195 759.8,194.3 760.9,194.3 762.1,194.5 762.7,195.1 763.4,194
			763.3,193.4 763.3,192.9 764.1,192.7 764.4,192.4 765.6,192.7 766.4,193.6 767.4,194.5 768.2,195.5 769.2,196.3 769.2,196.8
			769.4,197.1 769.4,197.6 769.2,198 769.2,198.3 769,198.7 768.5,198.6 768.3,198.3 767.7,198.4 767.4,198.6 766.6,198.3
			766.1,198.4 765.6,199.1 764.8,199.7 764.4,200 763.9,199.6 763.7,199.7 763.7,200.2 763.5,200.5 763.1,200.5 762.8,200.5
			762.6,200.8 762.1,201.6 762,202.4 762,203 761.7,203.3 761.1,203.5 759.9,204.3 759.2,204.3 758.5,204.2 758.2,204.4
			757.7,205.5 757.2,205.9 756.5,206.4 756.2,206.8 756,207.2 755.7,207.3 755.1,207 754.5,206.9 753.6,206.5 752.9,206.1
			752.3,206 751.2,206.3 750.5,206.7 750.1,207.3 750.1,208.6 750.1,209.2 750.1,209.5 751.4,210.4 752.5,211.1 752.5,211.4
			752.2,211.9 751.9,212.5 750.6,213.8 749.9,215 749.5,215.9 749,215.9 748.2,216.2 747.5,216.3 746.8,216.8 746,217.3
			745.2,217.4 744.1,217.5 743.3,217.7 742.4,218 740.4,218.7 738.8,219.2 738.1,220.1 736.9,221.1 736.4,221.5 735.7,221.5
			734.9,221.3 734.9,221 734.8,220.5 733.6,220.9 732.6,221 731.6,220.5 730.8,220.4 729.1,219.8 727.3,219 726.4,218.1 725.7,218
			723.7,217.8 722,217.9 721.5,217.8 721.2,217.9 721.1,218.3 720.1,218.6 718.8,218.7 716.5,218.5 714.8,218.6 713.5,218.6
			712.4,218.7 711.9,218.7 711.4,218.6 710.8,217.4 710.5,216.8 710,215.9 709.5,215.3 709.2,214.5 709.1,214.2 708.7,213.7
			708.3,213.6 708,213.6 707.9,213.2 707.8,212.7 707.6,212.7 707.4,212.7 706.6,212.7 705.9,212.3 704.9,211.6 704.6,211.5
			704.3,211.5 703.8,211.5 703.6,211.1 702.7,210.6 700.8,210.1 700.6,210.2 700.4,210.4 699.7,210.5 698.4,210.5 695.7,209.9
			695.1,209.6 694.5,208.6 694.4,208.2 694.4,207.8 694.6,207.5 695,207.2 695.1,206.7 694.8,206.3 694.7,205.6 694.8,205.3
			694.8,204.7 694.5,204.3 694.2,203.7 693.8,203.5 693.3,203.2 693.2,202.7 692.9,202.3 692.7,201.8 692.6,201.3 692.3,200.9
			691.9,200.5 691.5,200.4 691.3,200.1 690.8,199.9 690.4,199.9 690.1,200.2 689.8,200.3 689.5,200.2 689.1,199.7 688.9,199.5
			688.4,199.5 687.9,199.7 687.7,200 687.6,200.3 687.3,200.3 686.7,200 686.6,199.6 686.6,199.4 686.2,198.9 685.6,198.5
			685.2,198.1 684.9,197.9 684.6,197.6 684.5,197.3 684.5,196.9 684.3,196.6 684.2,196.7 684.2,196.9 684,196.9 683.8,196.5
			683.6,196.4 683.6,195.7 683.6,195.5 683.4,195.5 682.8,195.3 682.4,195.3 682.5,195.4 682,195.9 681.6,196.1 680.8,196.9
			680.8,197.4 681,197.7 680.6,198.3 679.8,198.6 679.3,198.9 679.2,199.6 679.2,200.8 679.8,201.9 680.3,202.6 680.2,202.9
			679.5,203.7 678.9,203.9 678.4,204.5 678,204.6 677.8,204.5 677.6,204.2 677.2,204.2 676.1,204.5 675.3,204.4 674.3,204
			673.6,203.9 673.3,204 673.1,205.2 672.8,206 672.8,206.7 672.5,208.3 672.5,209.5 672.4,209.9 672.7,210.2 673.3,210.5
			673.1,211 673,211.5 672.7,211.5 672.3,211.7 671.9,211.7 671.6,211.4 671.2,211.5 670.6,211.7 669.3,212 668.5,212.3
			668.1,212.3 667.7,212.1 667.3,212.3 666.8,212.8 666.8,213.2 667.2,213.5 668,213.5 668.6,213.6 668.7,213.8 668.3,214.2
			668.5,215 668.6,215.4 668.8,215.8 668.9,216.4 669.4,217.2 669.5,217.7 670.1,218.1 670.3,219.3 670,219.6 669.8,220.1
			670.3,220.6 670,220.8 670,221.1 669.4,221.4 669.5,222.2 668.9,222.5 667.7,222.1 666.5,220.8 666,220.9 664.9,220.4
			663.2,220.3 662.3,220.6 660.9,220.3 659.6,220.6 658.9,220.7 658.2,220.5 657.7,220.9 657.2,221.1 655.7,220.9 654.6,220.6
			654,220.3 653.1,220.3 652.8,220.5 652.1,220.4 651.6,220.3 651.3,220.5 651.4,221.1 651.5,221.7 651.5,222.5 650.7,222.6
			649,222.6 646.9,222.4 646.4,222.2 645.5,222 645,222.6 645.2,222.9 644.6,223.3 644.5,223.6 644.3,223.5 644.8,223.6
			644.8,224.2 643.9,225.6 643.5,226.3 644,226.6 645.3,226.9 645.8,227.4 646.3,227.6 646.8,227.1 646.8,226.3 647.2,226.4
			648.6,227.4 648.7,228 647.9,228.9 647,228.8 645.6,229 645.4,228.6 644.8,228 643.9,228.9 643.3,228.9 642.6,229.4 641.9,229.7
			641.8,230.3 642.7,230.8 642.7,231.3 641.7,231.7 640.5,232 640.8,232.2 641,232.7 639.9,233 639.8,233.7 639.3,233.8
			638.1,233.6 637.5,234.1 637.5,235 638.2,236 638.7,235.7 639.5,235.7 639.6,236.3 639.4,236.9 639.7,237.7 640.2,237.9
			640.3,238.7 640.1,239 639.5,240.4 639.3,242.1 639,241.8 639.6,242.6 640.1,242.8 641,242.6 641.6,242.2 641.9,241.8
			642.2,241.7 642.5,241.4 642.8,241.6 643.1,242 644.1,242.1 644.1,241.7 643.8,241.4 643.8,241 644.4,240.9 644.7,240.6
			644.9,240.6 645,240.9 645.6,240.8 646,240.2 645.9,239.4 646.1,239.1 646.4,238.8 646.5,238 646.8,237.5 647.5,237.5 648,237.8
			648.5,238.1 648.5,238.5 648.3,239.1 648.5,239.7 649,239.6 649.2,240.2 649.1,240.9 649.2,241.4 649.2,242.5 649.7,243.1
			649.7,243.5 650.2,243.7 650.9,243.7 651.3,243.3 651.4,243 652.4,242.6 652.9,242.2 653,241.7 653.4,241.3 654.6,240.5
			655.4,240.3 655.6,240.9 656.6,240.8 657,240.4 658.1,240.4 658.3,240.8 657.4,241.6 657.8,241.7 658.1,241.5 658.5,241.4
			659,241.9 659.3,241.7 659.7,241.7 660.1,241.5 660.3,241.2 660.7,241.2 661.1,241.6 661.4,242.5 662.7,244.3 663.4,244.8
			663.4,245.6 663.9,245.9 664.2,246.3 665.3,246.4 666.4,246.4 666.9,246.5 667,247.2 668.1,247.5 669,248 669.5,249.4
			670.2,250.2 671.2,250.7 671.6,251.4 671.5,252.7 672.1,254 672.8,254.1 673.1,255.4 673.3,256.4 672.9,256.9 672.8,256.6
			672.4,256.4 671.6,257.2 671.7,257.6 671.8,258.1 672.5,258.4 672.4,259.5 672.7,260 672.5,260.4 672.8,260.6 673.2,261.1
			673.2,261.5 673.4,261.6 673.6,262.2 674.2,262.5 674.5,262 675.2,262 675.4,262.3 676.1,262.4 676.6,263 677,263.1 677.3,263.8
			677.8,263.8 678,264.3 678.1,264.2 678.2,264.1 679,264.5 679.2,264.8 679.8,264.8 680.1,264.9 680.4,264.4 681.1,264.4
			682.1,264.7 682.4,265 683.1,265.1 683.5,265.4 684.3,266.2 684.9,266.2 685.5,266.5 685.8,266.9 686.3,267.5 686.5,268.1
			686.8,268 686.8,267.1 687.2,266.8 687.4,267.1 687.9,267.1 688.5,267.4 688.6,268.2 689.3,268.8 690.2,268.6 690.9,268.7
			690.7,269.8 691,270.5 691.5,270.4 692.3,270.7 692.6,270.4 693.2,270.3 693.7,269.7 694.8,269.8 695.4,270.2 695.6,270.8
			696.4,271.1 697,271.9 697.5,272 698.2,271.7 698.5,271.8 699.2,271.6 699.7,271.6 699.8,271.6 700.3,271.2 700.9,271.1
			701.3,271.7 701.3,272.4 701.8,272.8 701.9,272.8 702.4,272.5 703,271.3 704.4,270.5 705.3,270.4 705.6,270.8 706.9,271
			707.4,271.2 708.2,270.9 708.9,271 709.3,271.6 709.4,271.5 709.8,271.5 710.8,271.3 711.3,271.2 711.6,270.6 712,270.3
			712.4,270.4 712.4,270 713,269.9 713.2,269.3 713.7,268.7 714.3,268.6 715.3,268.4 715.9,267.6 715.9,267 716.3,266.9
			716.9,266.5 717.4,267.2 718.1,267 719.2,267.3 719.5,267.1 719.4,266.6 720.6,265.9 721,266 721.3,266.4 721.7,266.3
			721.8,266.6 721.4,267.3 721.7,267.8 722,267.7 722.4,267.6 722.5,268 722.9,268.5 722.9,268.9 722.4,269.4 722.6,269.9
			723.2,270 723.5,269.8 724.1,270 724.5,270.5 725,270.3 725.6,270.5 726,270.3 726.7,270.3 727,271.1 727.6,271.5 727.7,272.3
			728.2,272.3 728.7,272.9 728.7,273.7 729.2,274.6 729.2,275.5 729.1,276.7 729.1,277.2 728.9,277.6 728.4,277.8 728.4,278.3
			728.1,278.4 728,278.8 728.2,279.3 728,279.7 727.6,279.5 727.2,279.9 727,280.4 727.3,280.8 727,281.2 727,281.6 727.5,281.8
			727.7,282.2 728.1,282.6 728,283.2 728.2,283.9 728.9,283.4 730.2,283.1 730.3,283.6 730.1,283.9 730.4,284.2 731.2,284
			731.3,284.5 731.1,285 731.4,285.4 732.2,285.6 732,285.8 732.3,286.2 732.3,286 733.1,285.9 733.7,286.2 733.7,286.6
			733.5,287.1 733.5,287.5 732.8,288.4 732.3,289 732.4,289.3 732.8,289.1 733.7,289.2 733.9,289.4 734.3,289 734.7,289.5
			734.5,290.3 734.7,290.8 735.3,291.1 735.7,290.7 736.3,290.7 737.6,290.2 738.1,290.4 738.1,290.9 737.3,291.6 737.8,291.1
			738.2,291.4 738.4,291.8 739.1,291.6 739.6,291.7 739.5,291 739.4,290.4 739.2,289.8 739.2,288.8 739.6,288.6 739.6,288.2
			740.6,288.1 740.8,288.5 740.6,288.2 740.8,288 741.1,288 741.2,287.7 741.5,287.4 742.1,287.2 742.5,287.2 742.4,287.7
			742.7,287.9 743,287.9 743.1,287.3 743.6,287 744.1,287.6 744.4,287.2 744.7,287.2 744.9,287.6 745.5,287.3 745.6,286.9
			746.3,286.7 746.8,287 747.7,286.7 747.7,285.8 748.3,285.5 749,285.5 749.4,285.1 750,285.6 750,285.9 750.6,286.1 750.8,286.4
			752.1,286.4 752.3,286.7 753.1,286.4 753.5,286.8 753.4,287.3 753,287.4 752.8,288.4 753.1,288.5 753.2,289.1 754.4,289.5
			754.5,289.9 755.1,290.1 755.6,290.4 756.2,290.2 756.4,290.4 756.8,290.3 757.2,290.6 757.4,290.6 757.6,290.5 758,290.7
			758.4,290.5 758.4,290.2 758.5,289.6 758.8,290.1 759.3,290.7 759.6,290.6 760.3,291.1 760.6,291 760.9,291.1 761.2,290.6
			761.6,291 762,290.8 762.3,291 762.3,291.1 761.9,291.2 761.8,291.7 761.4,292.2 761.4,292.5 762.1,293.4 762.5,293.7
			762.5,293.9 762.6,294.5 762.7,294.4 762.9,294 763.5,294.1 763.5,294.3 763.8,294.3 764.3,293.7 764.2,293.4 764,293.4
			764,293.2 763.7,292.7 763.3,292.7 763.1,292.2 763.3,292 763.6,291.6 763.7,291.3 763.7,291 763.8,291 764,290.8 764,290.9
			764.2,291.1 764.3,291.1 764.2,291.2 764.2,291.3 764.5,291.4 764.4,291.5 764.5,291.5 764.8,291.2 765.4,291.1 765.6,290.7
			766,290.9 766.5,290.7 767.1,290.4 766.9,290 767.4,290 767.9,289.9 768.5,290.1 768.8,290 769.4,289.7 769.9,289.1 770.3,288.7
			770.3,288.4 770.5,288.6 770.7,288.8 771,288.6 771.2,288.2 771.7,287.9 771.6,287.2 771.4,286.8 771.5,286.4 771.4,286.1
			771.6,286.3 772.3,286.6 772.4,287 773,287.6 773.3,287.5 773.1,287.9 772.7,288 772.8,288.3 773.8,287.8 773.8,287.2
			774.3,287.1 774.6,286.8 775,287.1 775.5,287 775.5,286.6 776,286.5 776.1,286.2 776.3,286.6 776.7,287 777,286.8 777.1,286.3
			777.4,286.3 777.4,286.5 777.9,286.5 777.9,286.2 778.6,286.1 778.9,285.8 779.2,285.5 779.2,285.9 779.4,285.6 779.7,285.7
			780.2,285.5 780,285.1 780.2,284.8 780.4,284.2 780.1,283.6 780.4,283.7 780.6,283.4 781.3,283.3 781.3,283.6 781.9,283.6
			782,282.9 782.3,282.9 782.4,282.5 782.6,282.5 782.6,282.7 782.8,282.6 783.2,282.1 783.5,282.5 783.6,281.9 783.9,281.8
			784.1,281.4 783.6,281.3 783.2,281.4 782.5,280.9 783.4,280.9 783.8,280.3 784.1,280.5 784.4,280.2 785.1,280.7 785.3,280.1
			784.9,279.9 784.7,279.7 784.8,279.3 785.3,279.7 785.6,279.3 785.6,279.2 785.2,279.2 785.1,278.7 784.8,278.5 785.2,278.3
			785.4,278.6 785.7,278.6 785.9,278.9 785.9,278.4 785.4,278.1 785.5,277.6 785.8,277.6 786,277.3 786.4,277.7 786.4,278.1
			786.7,278.1 787,278.5 787,277.8 786.8,277.4 786.5,277.4 786.4,277.1 786.8,277 786.9,276.7 786.4,276.5 787,276 786.7,275.7
			786.3,275.7 786.1,275.9 786.2,275.5 786.8,275.1 787.7,274.7 787.4,274.3 787,274.7 786.4,274.1 787,274.1 786.6,273.6
			786.1,273.5 786.4,273.3 786.2,273 786.6,273.1 786.7,272.6 786.8,272.6 787.1,272.6 787.1,273.1 787.4,273.1 788.1,272.4
			788.2,272.1 788.8,272.1 788.4,271.7 788,271.6 788.1,271.1 788.5,271.5 789,271.3 789,270.8 789.2,270.6 788.9,270.3 789,269.9
			789.3,269.7 789.1,269.4 789.1,269.1 788.5,268.8 789.3,269 789.6,268.8 790,267.8 790.5,267.7 790.6,268.2 790.7,268.4
			790.8,267.8 791.2,267.5 790.9,267 790.4,267 790.1,266.8 790.4,266.6 790.8,266.6 791.1,266.4 790.8,266.1 790.5,265.9
			790.8,265.6 791,265.6 791.1,265.4 790.8,265.1 789.9,265.1 789.9,264.9 790.5,264.4 791.1,264.5 791.2,264.4 791.3,264.1
			791.6,264.3 791.7,264.5 792,264.2 791.9,263.9 791.8,263 791.5,262.8 791.1,263.2 791.3,263.3 791.3,263.6 790.7,263.5
			790,264.1 789.6,264 789.6,263.5 790.3,263.3 791.6,262.2 791.5,262 790.9,262 790.7,261.7 790.6,262 789.7,260.8 789,260.7
			788.1,261.5 787.7,261.3 787.1,260.5 786.6,260.6 786,261.1 785.8,261.6 785.9,260.9 786.5,260.4 786.9,260.4 787.3,260.1
			787.9,260.5 788.4,260.2 788.5,259.7 788.7,259.5 789.1,259.5 789.7,258.8 790.5,258.7 790.5,258.3 789.8,257.2 788.4,256.3
			787.5,255.8 786.4,254.7 785.8,254.7 784.9,255.3 784.5,255.2 783.7,254.6 783.7,254.3 783.4,254.1 782.8,254.4 782.1,254.3
			781.5,254.5 780.7,255.5 781.3,254.2 781.8,253.9 782.2,254 782.5,254 782.7,253.9 783.1,254 783.8,253.7 784.2,254.6
			784.5,254.9 785.1,254.9 785.4,254.4 786.3,254.5 786.9,254.9 787.4,255 787.9,255.5 788.7,255.1 789.8,255.5 790.2,255.3
			789.8,254.5 789.4,254.4 788.7,253.6 788.7,253.3 788.5,253.1 787.9,253.2 787.3,252.9 786.6,251.9 786.6,251.1 785.6,250.3
			785.5,249.5 784.9,249.3 785.2,248.6 785,248.6 784.2,246.8 782.6,246.1 782.2,246.3 782.2,245.9 780.8,245.2 780.6,245.2
			780.6,243.9 780.8,242.9 780.6,242.3 780.7,241.5 780.9,241.6 781.3,241.5 781.8,240.7 782.1,240.8 782.6,240.2 782.1,239.9
			781.8,239.6 782.3,239.1 783.1,239.1 783.1,238.6 783.8,238.4 783.8,238 783.1,237.6 783.8,237.5 784.2,237.9 784.4,237.5
			784.9,237.5 785.4,237.1 785.7,237.1 786.3,236.3 786.5,236.7 786.8,236.4 786.8,236.7 787.5,237.1 788.2,236.5 788.2,236.3
			787.8,236.2 787.7,235.6 788.1,235.4 788.4,235.4 787.9,234.8 787.9,234.5 788.5,234.3 788.2,234.1 787.5,234.2 786.8,234.2
			786.8,234 786.2,234 786,234.3 784.2,234.4 783.8,234 783.5,233.9 783.2,233.4 782.9,233.3 782.7,233 781.4,233.6 780.8,233.7
			781,233.8 781,234.4 780.6,234.7 779.8,235 780,235 780.2,235.4 779.9,235.9 779.7,236.1 779.1,235.9 778.6,236.2 777.9,236.2
			777.1,234.7 777.1,234 777,233.5 776.3,233.5 776,233.7 775.9,233.4 775.6,233.4 775.4,233.7 775.2,233.4 775.2,233.7 774.7,233
			774.6,232.6 773.7,232 773.1,231.7 773.1,231 772.8,230.4 773,230.2 773,229.9 773.1,229.6 773.1,229 773.5,228.8 773.5,228.5
			774.6,228.8 775.5,228.8 776.2,228.8 776.5,228.2 776.3,227.9 776.7,227.9 776.6,227.3 776.4,227.1 776.7,226.8 776.9,225.4
			777.9,224.8 778.5,224.8 779,224.1 779.3,224 779.3,222.9 779.9,222.3 780,221.6 780.2,221.5 780.6,220.9 781.2,220.9
			781.5,221.1 782,221.1 782.1,220.5 783,221.5 784.2,222.3 784.3,222.7 784,222.9 783.8,223.3 783.3,224.1 783.2,224.8
			782.7,224.8 782.7,225 782.6,225.7 783.2,226.3 783.2,226.7 782.9,226.8 782.9,227.1 783.2,227.4 783.8,227.2 784.5,226.7
			784.2,227.2 783.7,227.6 783.7,227.8 784.1,227.9 784,228.2 783.8,228.4 783.1,228.3 782.9,228.7 782.4,228.7 782.2,229.1
			782.6,229.4 782.7,229.9 783,229.8 783.4,229.4 783.7,229.4 784.1,228.7 784.9,228.4 785,228.2 784.8,227.6 785.5,227.1
			786.7,226.2 787,226.2 787.2,225.6 787.8,225.6 788.5,225.1 788.8,225.4 789.1,225.3 789.7,225.2 790.5,224.3 790.7,224.8
			790.7,223.2 		"/>
		<path fill="#E6EEF4" d="M760.5,300.2h0.6l0.4,0.3l0.4,0l0.5,0.3l0.3-0.2l0.1-0.5l0.4-0.1l0.5,0.1l0.3-0.4l0-0.3l0.5-0.1l0.4-0.4
			l-0.1-0.5l0.3-0.9l0.3-0.2l0.1-0.4l0.4-0.7l-0.2-0.7l-0.6-0.4l-0.6-0.2l-0.4,0.3c0,0-0.3-0.2-0.3-0.2l-0.6,0.1l-0.3-0.1l-0.4,0.3
			h-0.5l-0.5,0.3l-0.5,0.1l-0.1,0.5l-0.8,0.5l-0.7,0.8l0.3,0.4l0,1l0.3,0.5l0,0.3L760.5,300.2z"/>
		<polygon fill="#E6EEF4" points="789.2,255.6 788.5,255.5 788.4,255.7 788.8,256.1 789.3,256.1 789.9,256.4 789.9,255.8
			789.4,255.8 		"/>
		<polygon fill="#E6EEF4" points="765,292.3 764.5,292.1 763.8,292.2 764.1,292.5 764.5,292.4 765,292.5 		"/>
		<polygon fill="#E6EEF4" points="787.6,277.5 787.6,277.1 787.4,276.9 787.2,277 787.3,277.6 		"/>
		<polygon fill="#E6EEF4" points="757.2,290.6 757.2,290.6 757.2,290.6 757.2,290.6 		"/>
		<polygon fill="#E6EEF4" points="781.8,284.5 782,284.3 781.7,284 781.3,284.2 781.4,284.5 		"/>
		<polygon fill="#E6EEF4" points="635.9,241.6 636.8,241.4 636,241.6 		"/>
		<path fill="#E6EEF4" d="M479,61l0.3-0.1l0.1-0.3l-0.2-0.5l-0.4-0.7l-0.2-0.6l-0.2,0l-0.1-0.2h-0.2l-0.3-0.3l-0.4-0.6l0.1-0.6
			l0-0.5l-0.5-0.6l-0.3-0.1l-0.2,0.3l0,0.7l0.3,0.4l0.2,0.5l0.1,0.9l0.3,0.4l0.4,0.1l0.5,0.4l0.2,0.5l0.2,0.1l0.3,0.7
			C478.8,60.8,479,61,479,61z"/>
		<polygon fill="#E6EEF4" points="489.6,44.5 489.7,44.5 490,44.2 490,43.9 489.7,43.5 489.5,43.4 489.1,43.6 489,43.9 489.1,44.2
					"/>
		<polygon fill="#E6EEF4" points="505.7,56.8 506,56.9 506.4,56.4 506.4,56.1 505.9,55.7 505.8,55.1 505.7,55.1 505.5,55.3
			505.4,55.4 505.4,55.9 505.7,56.4 		"/>
		<path fill="#E6EEF4" d="M489.1,45.5l0.3,0.3l-0.2,0.3l0.1,0.2h0.5l0.1,0.2l-0.7,0.5l0,0.3l0.6,0.9l0.4,0.2l0.5,0.3l0.7,0l0.4-0.2
			l0.3,0.3c0,0,0.2,0,0.2,0l0.6-0.4l0.3-0.1l1-0.1l0.8,0l0.4-0.3l0.3,0l0.2,0.2l0,0.2l-0.2,0.2l-0.2,0.3l-0.3,0.2l-0.6-0.1l-0.7,0
			l-0.5-0.1l-0.1,0.2l0.2,0.2l0.8,0.2l0.3,0.2v0.3l-0.3,0l-0.6-0.2l-0.1,0.2l-0.3,0l-0.5-0.4l-0.5-0.1l-0.7,0.2l0.1,0.3l0.3,0.2
			l1,0.9l0.3,0.1l0.5-0.2l0.3,0.1l0.2,0.5v0.4l0.4,0.1l0.5-0.2l0.8-0.1l0.8-0.3l0.6,0l0.7-0.1l0.1,0.3l-0.1,0.5l0.1,0.5l0.6,0.4
			l0.6,0.1l0.8-0.2l0.2-0.3l-0.1-0.2l0-0.3l0.2-0.4L501,51l0.3-0.1l0.4,0.3l0.4,0.3l0.5,0l0.6-0.4l0.2-0.3l-0.1-0.7l-0.1-0.4
			l0.3-0.3l0.4-0.4l0.4-0.9l0.4-0.5l0.6-0.7l0.2-0.4l0-0.4l-0.2-0.5l-0.1-0.4l0.2-0.3l0-0.3l-0.2-0.1l-0.8,0l-0.4-0.4l-0.3-0.1
			l-0.9,0.1l-0.5-0.1l-0.4-0.3l-0.5,0l-0.4-0.2l-0.1-0.3l-0.2-0.2l-0.5,0.3l0-0.2l0.1-0.4l-0.1-0.3l-0.3,0.2l-0.2,0.5l-0.2,0.1
			l-0.1-0.6l-0.1-0.1l-0.2,0.3l0.1,0.2l-0.1,0.3l-0.3,0.4v0.5l-0.1,0.4l-0.4-0.2l-0.2-0.3l-0.1,0v0.3l-0.1,0.3l-0.2-0.3l0-0.4
			l0.1-0.6v-0.9l-0.1-0.4l-0.6-0.3l-0.3-0.4l-0.2,0l-0.1,0.4l0.3,0.3l0.1,0.3l-0.4-0.1l-0.2-0.3l-0.2,0.2l0,0.5l0.4,0.4l0,0.5
			l-0.1,0.5l0,0.6l0.3,0.8l-0.2,0.5h-0.2l-0.2-0.5l-0.5-0.4l-0.5-0.3l-0.1-0.4l0.2-0.4v-0.3l-0.3-0.2l-0.5,0.3l-0.2,0l-0.1,0.2
			l-0.4,0.3l-0.4-0.2l0-0.3l-0.1-0.2l-0.3,0.1l-0.3-0.4l-0.2-0.5l-0.4-0.2l-0.2,0.1l-0.3-0.3l0.1-0.4l-0.2-0.5l-0.2-0.1l-0.3,0.3
			l-0.1,0.8l0.1,0.6l0.3,0.6l0.2,0.7l-0.2,0.1l-0.3-0.4l-0.2-0.5l-0.2-0.2l-0.1,0.5l0.1,0.6l0.3,0.4l0,0.4l-0.1,0.4l-0.2-0.1
			l-0.2-0.6l-0.2-0.2l-1,0.1l-0.4-0.3l-0.2,0.3l0.2,0.5L489.1,45.5z"/>
		<polygon fill="#E6EEF4" points="498.3,58.1 498.5,57.6 498.3,57.2 497.8,57.2 497.6,56.8 497.4,56.8 497.2,57 496.4,57.4
			496.3,57.1 496.1,57 495.7,57.2 495.6,57.6 495.4,57.8 494.9,57.7 494.6,58.1 494.3,58.3 494.7,58.5 495.3,58.6 495.5,59
			495.7,59.3 495.6,59.6 495.9,59.8 495.7,60.2 496,60.2 496.3,60.3 496.5,60.1 497.2,59.6 497.6,59.6 497.9,59.3 497.9,59
			497.9,58.3 		"/>
		<polygon fill="#E6EEF4" points="502.1,64.1 502.6,63.3 503.2,63.1 503.4,62.9 502.8,62.6 502.6,62.3 502.1,62.1 501.5,62.4
			501.1,62.8 500.5,62.4 499.8,61.7 499.7,61 499.9,60.7 500.3,60.6 500.4,60.3 499.9,59.7 499.7,59 498.9,59.6 498.2,60.2
			497.6,60.2 496.6,60.5 496.1,60.9 495.8,61.5 496.3,61.7 496.7,62.2 497.2,62.2 497.3,62.5 497.2,62.9 497.1,63.4 496.7,64.1
			496.6,64.9 496.2,65.2 496.3,65.7 496.1,66 496.2,66.4 496.4,66.5 496.9,66.2 497.4,66.2 497.9,65.7 498.3,65.7 498.7,65.4
			499,64.8 499.3,64.6 499.7,64.6 499.9,64.5 499.9,65 499.7,65.8 499.8,66.5 499.5,66.9 499.6,67.4 500,67.4 500.4,67 500.4,66.6
			500.7,66.2 501.2,65.9 501.6,65.7 502,64.6 		"/>
		<polygon fill="#E6EEF4" points="493.1,40.4 493.5,40.5 493.7,40.4 494,40 493.7,39.8 493.1,39.9 492.5,39.5 492.1,39.4 492,39.6
			492.2,39.8 		"/>
		<polygon fill="#E6EEF4" points="494.9,86.1 494.7,86.4 494.9,86.9 495.2,87.1 495.3,87.5 495.5,87.6 495.7,87.3 495.8,86.5
			495.4,86.1 		"/>
		<polygon fill="#E6EEF4" points="493.4,53.1 493.2,53.2 493.2,53.4 493.4,53.9 493.7,54.3 494.2,54.3 494.7,54.2 494.7,53.7
			494.4,53.3 		"/>
		<polygon fill="#E6EEF4" points="506.1,44.5 506.4,44.2 506.2,43.8 505.8,43.6 505.6,43.7 505.5,44 505.8,44.5 		"/>
		<polygon fill="#E6EEF4" points="476.3,52.8 476.9,53.6 476.9,54.1 477.3,53.9 477.6,53.5 477.5,53 477.6,52.4 477.8,52.4
			478.1,52.7 478.4,52.5 478.6,52.6 478.3,53.1 478.1,53.8 478,53.9 478,54.3 478.5,54.7 478.5,54.9 478.7,55 479.1,55 479.2,55.1
			479.2,55.5 478.8,55.9 478.6,55.9 478.6,55.7 478.4,55.4 477.7,54.9 477.5,55 477.5,55.3 477.8,55.8 478.2,56 478.5,56.3
			478.5,56.4 478.3,56.7 478.5,57 479,57.3 479.3,57.5 479.5,57.9 479.9,58.1 480.1,58 480.6,58 480.7,58.2 480.4,58.4 479.7,58.4
			479.8,58.9 480.1,59.4 480.2,59.4 480.6,59.5 481.3,60.1 481.5,60.5 481.3,60.8 481.3,61 481.8,61.1 482.8,61 483.2,60.7
			483.2,60.3 483.5,59.7 483.8,59.6 484.2,59.6 484.2,59.3 483.9,58.7 483.7,58.3 483.7,57.7 483.5,57.3 483.6,56.9 483.8,56.8
			484.1,56.9 484.3,57.4 484.2,57.6 484.3,57.9 484.7,57.5 484.7,57.2 484.6,56.3 484.8,55.9 485,55.9 485.2,56.2 485.3,56.9
			485.4,57.2 485.4,57.5 485.1,57.9 485.1,58.1 485.2,58.9 485.4,59 485.9,58.9 486.6,58.1 486.8,57.6 486.8,57 486.9,56.7
			487.2,56.7 487.4,57.1 487.4,57.7 487.1,58.3 487.1,58.7 487.5,58.9 488,58.8 488.4,58.4 488.7,58.4 488.7,58.6 488.4,58.9
			487.9,59.1 487.4,59.5 486.6,59.5 485.9,59.8 485.7,60.1 485.8,60.4 485.3,60.6 484.8,61.1 484.5,61.6 484.2,61.5 483.7,61.8
			483.6,62.3 483.4,62.3 483.3,61.9 483.1,61.8 482.8,61.9 482.5,62.1 482.4,62.4 482.4,62.6 482.5,63.4 482.6,64.1 482.7,64.3
			483.1,64.3 483.5,64 484.1,64 484.3,63.8 484.7,63.9 485.1,63.8 485.5,63.3 485.7,63.2 485.8,63.1 486.3,63.1 486.4,63.3
			486.7,63.2 487.8,63.2 488.1,63 488.5,62.7 488.7,62.8 488.7,63.1 488.4,63.3 488.4,63.6 488.2,63.5 488,63.6 487.7,63.7
			487,63.7 486.5,64 485.6,64.4 485.2,64.4 484.8,64.5 484.8,64.7 485.3,64.9 486,65 486.5,65 487,65.3 486.9,65.6 486,65.7
			485.6,65.7 485.3,65.6 484.9,65.5 484.7,65.7 484.6,65.7 484.3,65.5 484,65.1 483.7,65 483.1,65.5 483.1,65.6 483.4,66
			483.4,66.3 483.3,66.6 483.4,66.7 483.4,66.9 483.4,67.1 483.8,67.3 483.9,67.7 483.9,67.8 484.1,67.8 484.4,68.1 484.5,68.4
			484.7,68.7 484.9,68.7 485.2,68.8 485.5,69.1 485.7,69.2 485.7,69.6 486.3,70.1 486.9,69.9 487.1,69.5 487.3,69.5 487.5,69.7
			487.8,69.7 488,69.8 487.9,70.1 487.7,70.4 487.5,70.4 487,70.8 487,71 487.9,71.9 488.2,72 488.3,72.3 488.3,73 488.4,73.4
			488.6,73.4 488.7,73.1 488.9,73.1 489.2,73.4 489.7,73.3 490,72.8 490.1,72.2 490.2,72.1 490.2,71.7 490,71 489.9,70.4
			490.2,70.1 490.4,69.6 490.4,67.9 490.5,67.4 490.5,67 490.9,66.7 490.9,66.4 490.4,66.2 490.9,65.8 491.5,65.9 491.7,65.9
			491.7,65.3 491.7,64.6 491.9,64 491.9,63.4 491.5,62.7 491.6,62.1 491.8,61.9 492.3,62.2 492.5,61.8 492.4,61.5 492.3,60.9
			492.5,60.5 492.4,59.5 492.3,58.8 492.4,58.5 493,58 493,57.7 492.8,57.4 492.9,57.2 493.5,57.1 494.2,56.5 494.6,56.6
			495.2,56.3 495.5,56.8 495.7,56.8 495.8,56.4 496,56.1 495.9,55.5 495.5,55.4 494.3,55.1 493.7,54.7 493,54 492.7,53.7 492,52.9
			491.8,52.8 491.2,52.8 490.9,52.4 490.9,52 490.5,50.7 490.1,49.7 489.4,49.1 489,49.4 488.9,49.9 489,50.9 489,51.6 488.7,51.9
			488.5,51.8 488.5,51.6 488.5,50.9 488.5,49.7 488.7,49.4 488.7,48.8 488.5,48.2 487.9,47.4 487.5,47.1 487.1,47.3 486.9,47.7
			486.6,47.6 486.5,46.9 486,46.2 485.8,46.1 485.4,46.3 485.1,46.8 485.2,47.7 484.9,48.1 485,48.7 484.9,49.2 485.1,49.4
			485.3,49.7 485.2,51.4 485.2,52.2 485.4,52.8 485.9,53.5 486,54.1 486.5,54.7 486.4,55.2 486.1,55.2 485.8,54.9 485.4,54
			485.1,53.5 484.8,53.5 484.4,53.7 484.2,53.6 484.2,53.4 484.6,53 484.7,52.7 484.7,52.2 484.3,51.1 484.3,50 484.2,49.7
			483.6,49.3 483.1,48.7 482.9,48.6 482.6,48.8 482.5,49.4 482,50.3 481.8,50.9 481.9,51.5 482.2,52.1 482.3,52.9 482.1,52.8
			481.8,52.5 481.7,51.9 481.7,51.5 481.5,51.3 481.3,51 481.1,51 480.9,51.2 480.7,51 480.7,50.8 481.2,50.4 481.2,50.2 481,50
			480.3,50.3 479.9,50.6 479.6,50.4 479.7,50 479.9,50 480,49.7 480.6,49.3 480.9,49.2 481,49.4 481.4,49.4 481.7,49.1 481.8,48.7
			481.4,48 481.1,47.8 480.6,47.9 479.4,48.8 479,49 478.8,48.8 478.7,48.4 478.4,48.2 478.2,48.4 478.2,48.9 478.8,49.6
			478.6,49.9 478.2,49.8 478,49.3 477.7,48.6 477.3,48.5 476.8,49.1 476.8,49.7 477,49.9 477,50.4 476.8,50.5 476.4,50.9 476.1,51
			476.1,51.4 476.2,52.1 		"/>
		<path fill="#E6EEF4" d="M512.9,43.8l0.6-0.2l0.7-0.6l0.4-0.2l0.8-0.6l0.1-0.3l-0.2-0.2l-0.5,0l-0.5,0.3l-0.5,0.6l-0.4,0.3
			l-0.5,0.2c0,0-0.3,0.3-0.3,0.3l0.1,0.2L512.9,43.8z"/>
		<polygon fill="#E6EEF4" points="508.5,54.4 508.8,54.4 509,54.2 509.4,54.2 510,54.6 510.5,54.3 510.7,53.9 510.3,54 509.5,53.9
			509.4,53.6 509,53.8 508.7,53.8 508.2,54.2 507.8,55 508,55 		"/>
		<polygon fill="#E6EEF4" points="841.3,201.7 841.3,201.3 841.2,201 841,201.2 840.9,201.7 840.5,202.3 839.6,202.9 838.9,203
			838.7,202.8 838.2,202.9 837.7,202.4 837,202.3 836.2,201.9 835.7,201.4 835.2,201.3 835,200.9 834.3,200.4 833,199.1
			832.6,198.4 831.9,198.2 831,197.5 830.8,197.1 830.1,197.1 830.2,197.3 829.9,197.6 829.6,197.6 829.5,197.8 829.8,198.2
			829.9,198.8 830.9,200.3 831.1,201 831.2,202 831.1,202.4 831.3,203.2 831.5,203.8 831.5,204 831.2,204 830.8,204.5 831,205
			831.3,205.5 831.4,205.8 831.6,205.9 831.8,206.4 831.6,206.5 831.6,206.9 831.3,207.2 830.4,207 829.5,206.6 829.1,206.7
			828.9,207.1 829,207.3 829.3,207.3 829.8,207.7 829.9,208 829.7,208.2 829.4,208.8 829.1,208.9 829,209.1 828.7,209.3
			828.5,209.8 828.6,210.3 828.5,211.1 828.6,211.4 828.9,211.4 829.4,211.8 829.8,212.2 830.2,213.1 830.3,214.1 830.2,214.2
			830.4,214.7 830.9,215 831.5,214.2 831.7,213.8 831.7,213.4 831.9,213.2 832.7,213.2 833.1,213.5 833.2,213.1 833.6,212.5
			833.4,212.2 832.8,212.2 832.2,212.1 831.5,211.3 830.9,211.4 830.3,211.1 830.1,210.7 830.1,210.1 830.5,209.8 830.8,209.8
			831.5,210.2 831.8,210.4 832.5,209.5 833.1,209 833.6,209.1 833.8,209.3 834.3,209.4 834.8,209.3 835.3,209.8 836,210.5
			836.8,210.9 837.7,211.2 838,211.5 838.5,211.7 838.4,211.3 838.5,210.9 838.4,210.2 838.5,209.3 838.8,208.2 839.5,207.1
			840,207 840.5,207.1 841.2,207.1 841.2,206.9 841.6,206.6 841.8,206.7 842.1,206.7 842.3,206.4 842.4,206 842.9,205.8
			843.3,205.5 843.3,205 843.6,204.8 843.7,204.4 843.4,204.5 843,204.8 842.7,205.3 842.3,205.3 842.4,205 842.3,204.6 841.9,204
			841.2,203.6 841,203.3 841,202.5 		"/>
		<polygon fill="#E6EEF4" points="827.2,211.5 827.3,212 827.5,212.2 827.8,212 827.8,211.5 828,211 827.7,211.1 		"/>
		<polygon fill="#E6EEF4" points="830,230.4 830.2,230.3 830.5,230 830.6,229.4 830.5,229.1 830.1,229 830.2,228.6 830.1,228.2
			829.9,228.4 829.6,229.3 829.7,229.6 830,229.4 830.2,229.5 830,229.8 		"/>
		<polygon fill="#E6EEF4" points="824,243.3 823.7,243.3 823.5,243.6 823.5,244.1 823.7,244.6 824,244.6 824.1,244.3 824,244
			824.1,243.6 		"/>
		<polygon fill="#E6EEF4" points="821.7,247.1 822.4,247.6 822.7,248 823,247.9 823.3,246.9 823.9,246.3 823.9,245.9 823.7,245.7
			823.6,245.4 823,244.9 822.6,244.9 822.2,244.6 821.5,244.5 820.8,245.1 820.8,245.4 820.5,245.8 820,246 819.6,246.3
			819.3,246.2 819,245.5 818.8,245.5 818,246.3 818,246.8 817.5,247.2 817.4,247.7 818.2,247.9 818.3,248.5 818.2,248.6
			818.2,248.9 818.6,249.6 819.3,249.6 819.2,250 819.5,250.1 819.6,249.9 820,250 820.2,249.9 820.2,249.6 819.7,249 819.9,248.6
			820.2,247.8 820.8,247.4 821,247.1 		"/>
		<polygon fill="#E6EEF4" points="822.6,243.8 822.2,243.7 821.8,244.1 822.2,244.2 822.5,244.1 		"/>
		<polygon fill="#E6EEF4" points="815.6,260 815.7,259.8 815.6,259.4 815.3,259 814.9,259.1 814.8,259.4 815.1,259.9 		"/>
		<polygon fill="#E6EEF4" points="817.4,237.6 817.3,238 817.4,238 817.6,237.9 		"/>
		<polygon fill="#E6EEF4" points="808.7,250.4 809,250.3 808.6,250.2 		"/>
		<polygon fill="#E6EEF4" points="800.2,281.6 800.4,281.4 800.2,281.1 799.9,281.1 799.8,281.6 		"/>
		<polygon fill="#E6EEF4" points="812.8,251.5 812.6,251.4 812.4,251.6 812.5,251.9 812.7,251.9 		"/>
		<polygon fill="#E6EEF4" points="800.9,281.3 801.2,281.4 801.3,280.9 801,280.6 800.7,280.9 		"/>
		<polygon fill="#E6EEF4" points="809.2,250 809.3,249.9 809,249.9 		"/>
		<polygon fill="#E6EEF4" points="818.3,237.5 818.2,237 817.9,237.1 817.7,237.5 817.8,237.7 818.1,237.7 		"/>
		<polygon fill="#E6EEF4" points="809.4,274.2 809.7,274.1 809.7,273.6 810.4,273.1 810.4,272.7 810.7,272.3 810.4,271.7
			810.1,272.3 809.7,272.6 809.8,272.8 809.7,273.1 809.2,273.4 		"/>
		<polygon fill="#E6EEF4" points="804,279.3 803.4,279 803.3,279.6 803.5,279.8 803.9,279.9 		"/>
		<polygon fill="#E6EEF4" points="813,246.6 812.5,247 812.3,247.3 811.9,247.6 811.4,248.2 811.2,248.6 810.8,248.6 810.3,248.9
			810.5,248.9 810.8,248.9 811,249.4 811.2,250.1 811,250.3 810.9,249.8 810.7,249.5 810.6,250 810.7,250.5 811.1,250.6
			811.1,250.9 810.9,251.3 811.2,251.1 811.4,250.8 811.8,250.6 812.1,250.7 811.9,250.9 812.1,251.1 812.5,250.9 812.5,250.4
			812.2,250.2 811.7,250.3 811.7,250.1 811.8,249.8 811.7,249.4 811.9,249.1 812.4,249.3 812.9,250.1 813,250.7 813.2,251
			813.2,251.9 812.8,252.8 812.3,252.9 812.5,253.2 812.9,253.9 813.1,254.9 813.5,255.4 813.5,255.9 813.3,256.2 813.6,256.6
			814.1,256.6 814.4,256.8 814.6,256.6 814.6,256.3 814.2,255.7 814.2,254.8 814.5,254.5 814.8,254.7 814.6,254.9 814.6,255.2
			815,255.7 815.2,256.4 815,256.8 815.1,257.2 815.6,256.9 816.2,256.2 815.7,255.7 815.6,255.4 815.9,255.2 816.3,255.4
			816.5,255.5 816.7,255 816.7,254.1 816.5,253.7 816.5,252.1 816.5,251.2 816.8,250.7 817.3,250.2 817.2,249.8 816.9,249.7
			816.9,249.2 816.6,249.1 816.7,248.8 815.8,248.8 815.6,248.6 816.1,248.3 816.2,247.9 816.1,247.2 815.7,247 815.3,247.1
			815.3,247.3 814.9,247.5 814.5,247.5 813.9,246.8 814,246.4 814.9,246 815.6,245.8 816.4,246.1 816.9,246.3 816.9,246.1
			816.9,245.7 817,245.2 816.9,244.8 817,244.5 817.4,244.4 817.6,244.8 818,244.8 818.5,244.5 819.4,244.4 820.3,244.1
			820.8,244.1 821,244.2 821.3,244 821.4,243.8 821.9,243.5 822.1,243.2 822.7,242.7 823.4,242.5 824.2,242.6 824.7,242.5
			824.9,242.7 824.9,243.1 824.5,243.7 824.4,244.2 824.6,244.4 824.7,244.9 824.7,245.4 824.7,245.6 824.8,246.1 825.4,246.4
			826.1,247.1 826.7,247.3 827,247.1 827.5,246.3 827.6,245.7 827.9,245.5 828,245.3 827.9,244.9 828.2,244.2 828.7,244.2
			829.1,244.2 829.3,243.9 829.2,243.7 829,243.1 828,242.7 827.9,242.4 828.1,241.6 828.4,241.4 828.7,241.3 828.5,241.5
			828.6,242.1 828.8,242.3 829,242.1 829.2,242 829.6,242 829.8,242.2 830.1,242.1 830.3,242.2 830.2,242.4 829.7,242.6
			829.6,242.7 829.8,242.8 830.2,242.7 830.9,242.3 832.3,242.4 833.1,242.3 832.9,242.2 832.7,241.6 832.9,241 833.5,240.7
			833.9,240.7 834,241.3 833.9,241.8 834.1,242.2 834.5,242.2 834.9,241.6 834.6,240.6 834.8,240 835.4,239.5 835.8,239.5
			835.9,239.2 835.7,238.9 835.8,238.3 836.2,238 836.7,238.1 836.8,238.4 836.5,238.8 836.4,239.6 836.6,241.2 836.8,241.3
			837.2,241 837.4,240.5 837.9,240.5 838.4,239.9 838.6,239.2 838.5,238.7 839.1,238.2 839,237.8 838.7,237.5 838.1,236.7
			837.8,236 837.7,234.6 837.9,233.1 837.9,232 837.4,230.1 836.7,229.2 836.7,228.4 836.8,227.5 837.7,227.1 838.1,227.1
			838.3,227.5 838.5,227.3 838.4,226.7 838.3,226.2 838.1,226 837.9,225.5 838,225.2 838,224.8 838.2,224.4 838.2,224.3
			838.2,223.8 838.1,223.6 838,222.9 838.1,222.6 837.9,222.2 837.8,221.1 837.3,220.2 837,220.2 836.7,220 836.6,218.9
			836.1,218.4 835,217.1 834.7,216.5 834.4,215.7 834.4,214.8 834.4,214.5 834.1,214.7 833.9,214.8 833.7,214.6 833.2,214.4
			833,214.4 833,214.5 832.7,215.2 832.7,215.7 833,215.9 833.2,215.8 833.9,215.3 834.1,215.9 833.9,216.4 833.6,216.7
			833.2,216.4 833.1,216.4 833.3,217 833,217.3 832.6,217.2 832.5,216.7 832.5,216.1 832.3,215.8 831.9,215.9 831.6,215.8
			831.5,216.2 831.7,217 831.8,217.6 831.4,217.7 831.1,218.2 831.1,218.5 831.8,219.2 832,219.6 831.8,220.4 831.4,220.6
			831,220.6 830.9,220.9 831.3,221.4 831.7,221.3 832.1,220.9 832.6,222.1 832.8,223.4 832.7,224.2 832.8,225.5 832.3,227.4
			832.4,228.2 832.2,229 831.5,229.4 831.2,230.2 831.3,231.1 830.9,231.7 830.8,232.2 830.1,232.9 828.8,233.6 828.3,233.8
			828,234.3 827.4,233.9 826.7,233.1 826.7,232.8 827,232.7 827.3,232.1 827.3,231.9 827.6,231.5 827.6,231.4 826.9,231.5
			826.5,232 825.9,232.2 825.8,232.8 826.2,233.4 826.2,234.7 826.2,235.4 825.5,236 825.5,236.4 825.3,236.6 825.2,237.6
			825.4,237.9 825.5,238.3 825.3,238.4 825.4,238.6 825.3,238.9 825,239 825.2,239.2 824.8,239.4 824.5,239.2 824.1,239.5
			823.8,239.4 823.7,238.8 823.6,238.7 823.2,239 822.9,239 822.7,238.9 821.5,239.3 820.8,239.5 820.2,239.8 819.5,239.8
			818.8,240 818.6,239.9 818,239.9 817,240.7 816.8,241.3 816.4,241.6 816.3,242 815.5,242.9 815.1,243 814.7,243.6 814.5,243.9
			814.1,244.4 813.4,244.5 813.1,244.9 813.3,245.8 813.6,245.9 813.7,246.2 813.5,246.5 		"/>
		<polygon fill="#E6EEF4" points="809.4,249.7 809.5,249.6 809.3,249.6 		"/>
		<polygon fill="#E6EEF4" points="809.9,249.3 809.6,249.1 809.4,249.1 809.4,249.2 809.8,249.4 		"/>
		<polygon fill="#E6EEF4" points="816.3,258.3 816.3,257.8 816,257.5 816,257.9 816.1,258.8 816.2,258.6 		"/>
		<polygon fill="#E6EEF4" points="811.9,251.4 811.8,251.3 811.6,251.6 811.6,252.1 811.8,252.5 812.1,252.5 812.2,252.1
			811.9,251.5 		"/>
		<polygon fill="#E6EEF4" points="811.8,268.7 811.8,269.1 812.2,269.4 812.4,269.3 812.3,268.8 811.9,268.5 		"/>
		<polygon fill="#E6EEF4" points="814.1,266.1 813.7,266.2 813.5,266.3 813.2,266.4 813.1,266.5 812.9,266.6 812.4,266.8
			812.3,267.2 812.4,267.3 812.9,267.3 813.1,267.5 813.2,267.3 813.2,267 813.7,266.7 		"/>
		<polygon fill="#E6EEF4" points="808,251 808.2,251.6 808.6,251.6 808.9,251.4 808.7,251 808.4,250.8 808.4,250.5 808.1,250.6
			"/>
		<polygon fill="#E6EEF4" points="812.2,252.5 812,252.8 812.2,253 812.4,252.6 		"/>
		<polygon fill="#E6EEF4" points="800.4,245.4 800.6,245.4 800.5,244.9 800.4,244.6 800.2,245 800,245 799.9,245.1 800.1,245.5
			"/>
		<polygon fill="#E6EEF4" points="802.4,249.1 802.7,248.5 802.7,248.1 802.2,248 801,248.4 800.7,248.8 800.9,249.2 801.4,249.3
			"/>
		<polygon fill="#E6EEF4" points="804.3,243.3 804.1,243.5 804.2,243.8 804.6,243.6 		"/>
		<polygon fill="#E6EEF4" points="808.9,243.9 808.6,244.1 808.5,244.4 808.4,244.9 808.6,245.3 808.8,245.1 809.1,244.5 809,244.1
					"/>
		<polygon fill="#E6EEF4" points="806.5,243.5 806.7,243.2 806.7,242.7 806.5,242.6 806.1,242.9 806.1,243.2 806.3,243.6 		"/>
		<polygon fill="#E6EEF4" points="799.4,230 798.4,230.8 797.4,231.1 796.6,231.9 796.4,232.6 796.5,232.6 796.9,232.3 797.8,232.3
			797.4,232.5 798.5,233.5 799.2,234.5 799.6,234.6 799.4,234.9 799.8,235.4 800,235.9 799.1,235.6 798.9,235.3 798.7,235.8
			798.3,235.7 797.7,236.5 798.9,237.1 799.3,237 799.5,237.6 799.6,238.7 799.9,238.9 800.1,238.8 800.6,239.7 799.7,240.3
			799.6,240.6 800,240.9 800,241.4 799.7,241.6 799.7,242.1 800,242.6 799.6,242.7 800.3,244 800.7,244 800.8,244.6 801,244.8
			801,245.3 801.4,245 801.5,244.3 801.7,244.6 802.1,244.1 803.4,243 803.9,242.9 804,243.2 804.3,242.7 804.6,242.8 804.9,243.3
			805.4,243.1 805.6,243.3 805.9,243.2 805.7,242.8 806.4,242.3 807,242.3 807.8,241.4 807.6,241.1 808,240.8 807.8,238.7
			807.6,238.7 807.4,238.9 807.4,238.2 807,236.3 806.6,235.8 806.6,234.6 804.9,232.5 803.4,231 802.4,229.1 801.3,229.8 		"/>
		<polygon fill="#E6EEF4" points="808.3,246.2 808.5,246.2 808.8,245.9 808.9,245.6 808.5,245.5 808.3,245.9 		"/>
		<polygon fill="#E6EEF4" points="803.3,212 802.4,211.8 802.2,211.5 802.2,210.9 801.7,210.5 801.4,210.7 801.4,211.3 801.3,211.8
			801.5,212.2 801.3,212.8 800.8,212.8 800.3,213.5 800.3,214.1 799.2,214.9 798.6,215 798.1,215.3 798.7,215.7 799.3,216.3
			799.4,216.7 799,217.5 798.3,217.4 797.1,217.5 796.5,217.3 796.1,217.5 795.7,217.1 795.2,216.9 794.7,216.1 794.2,216.7
			794.1,217.6 794.2,217.9 793.9,218.4 793.5,219.8 793,220 792.5,220.9 791.8,221.4 791.8,221.9 791.4,222.6 790.7,223.2
			790.7,224.8 790.7,224.8 790.8,225 790.9,224.9 791.2,225.9 791.6,225.6 791.6,225.2 792.2,225.6 792.5,225.9 793.4,225.8
			793.7,225.4 794,225.4 793.9,225.9 793.5,226.1 793.9,226.6 793.2,227.7 793.2,229.1 793.4,229.3 794.5,229.3 795,229
			794.4,229.6 793.7,229.6 793.3,230.4 793.3,231.6 793.1,232.1 793.4,232.2 793.9,231.9 794.5,232.1 794,232.9 794.2,233.3
			794.8,232.8 795.1,233 795.6,232.4 795.5,232.1 795.8,231.9 796.4,232.6 796.6,231.9 797.4,231.1 798.4,230.8 799.4,230
			801.3,229.8 802.4,229.1 802.1,228.5 800.1,227.3 799.8,226.8 798.8,226.6 798.6,225.9 798.9,225.6 798.6,225 798.6,224.3
			799.4,223.8 799.6,223.2 800.2,222.9 800.7,222.9 800.9,222.6 801.3,222.2 801.1,221.8 802.5,220.3 802.3,220.1 803,219.5
			803.3,218.9 802.8,218.5 802.8,217.1 802.2,216.6 802.2,215.8 802.6,214.5 802.6,213.8 802.9,213.8 803.8,212.8 804,212.8
			803.9,212.8 803.5,212.2 		"/>
		<polygon fill="#E6EEF4" points="683.6,195.7 683.6,196.4 683.8,196.5 684,196.9 684.2,196.9 684.2,196.7 684.3,196.6 684.5,196.9
			684.5,197.3 684.6,197.6 684.9,197.9 685.2,198.1 685.6,198.5 686.2,198.9 686.6,199.4 686.6,199.6 686.7,200 687.3,200.3
			687.6,200.3 687.7,200 687.9,199.7 688.4,199.5 688.9,199.5 689.1,199.7 689.5,200.2 689.8,200.3 690.1,200.2 690.4,199.9
			690.8,199.9 691.3,200.1 691.5,200.4 691.9,200.5 692.3,200.9 692.6,201.3 692.7,201.8 692.9,202.3 693.2,202.7 693.3,203.2
			693.8,203.5 694.2,203.7 694.5,204.3 694.8,204.7 694.8,205.3 694.7,205.6 694.8,206.3 695.1,206.7 695,207.2 694.6,207.5
			694.4,207.8 694.4,208.2 694.5,208.6 695.1,209.6 695.7,209.9 698.4,210.5 699.7,210.5 700.4,210.4 700.6,210.2 700.8,210.1
			702.7,210.6 703.6,211.1 703.8,211.5 704.3,211.5 704.6,211.5 704.9,211.6 705.9,212.3 706.6,212.7 707.4,212.7 707.6,212.7
			707.8,212.7 707.9,213.2 708,213.6 708.3,213.6 708.7,213.7 709.1,214.2 709.2,214.5 709.5,215.3 710,215.9 710.5,216.8
			710.8,217.4 711.4,218.6 711.9,218.7 712.4,218.7 713.5,218.6 714.8,218.6 716.5,218.5 718.8,218.7 720.1,218.6 721.1,218.3
			721.2,217.9 721.5,217.8 722,217.9 723.7,217.8 725.7,218 726.4,218.1 727.3,219 729.1,219.8 730.8,220.4 731.6,220.5 732.6,221
			733.6,220.9 734.8,220.5 734.9,221 734.9,221.3 735.7,221.5 736.4,221.5 736.9,221.1 738.1,220.1 738.8,219.2 740.4,218.7
			742.4,218 743.3,217.7 744.1,217.5 745.2,217.4 746,217.3 746.8,216.8 747.5,216.3 748.2,216.2 749,215.9 749.5,215.9 749.9,215
			750.6,213.8 751.9,212.5 752.2,211.9 752.5,211.4 752.5,211.1 751.4,210.4 750.1,209.5 750.1,209.2 750.1,208.6 750.1,207.3
			750.5,206.7 751.2,206.3 752.3,206 752.9,206.1 753.6,206.5 754.5,206.9 755.1,207 755.7,207.3 756,207.2 756.2,206.8
			756.5,206.4 757.2,205.9 757.7,205.5 758.2,204.4 758.5,204.2 759.2,204.3 759.9,204.3 761.1,203.5 761.7,203.3 762,203
			762,202.4 762.1,201.6 762.6,200.8 762.8,200.5 763.1,200.5 763.5,200.5 763.7,200.2 763.7,199.7 763.9,199.6 764.4,200
			764.8,199.7 765.6,199.1 766.1,198.4 766.6,198.3 767.4,198.6 767.7,198.4 768.3,198.3 768.5,198.6 769,198.7 769.2,198.3
			769.2,198 769.4,197.6 769.4,197.1 769.2,196.8 769.2,196.3 768.2,195.5 767.4,194.5 766.4,193.6 765.6,192.7 764.4,192.4
			764.1,192.7 763.3,192.9 763.3,193.4 763.4,194 762.7,195.1 762.1,194.5 760.9,194.3 759.8,194.3 758.9,195 757.6,194.3
			757.2,193.5 757.5,192.3 757.4,191.7 757.7,190.9 757.6,190 758.2,185.6 758.1,185.6 757.9,185.3 756.8,185 755.9,185.2
			755.9,185.4 755.3,185.8 754.8,185.8 754.5,185.6 754,185.9 753.5,185.7 753.2,185.2 752.6,184.8 752,184.8 751.2,185 751,184.8
			750.6,184.8 750.1,185.2 749.9,185.8 749.5,186.2 748.9,186.5 748.6,187 748.6,187.3 748.4,187.8 747.9,188.3 746.6,188.3
			746.1,188.4 745.7,188.9 745,188.9 744,189.5 743.6,190.2 743.2,190.2 742.7,189.9 742.1,189.9 741.8,190.1 741.1,190.2
			739.4,190.3 738.3,189.9 737.1,190.1 736.7,190 736.2,189.5 735.8,189.4 735.5,189.2 734.9,188.8 734.6,188 734.3,187.7
			733.8,187.8 733,187.9 732,187.5 731.4,186.7 730.3,186.7 729.5,186.6 728.9,186.3 728.2,186.5 727.5,186.5 726.9,186.8
			725.8,186.9 725,187.2 724.5,187.7 724.1,187.8 723.8,187.7 723.4,187.7 723,187.9 722.2,187.9 722,188.1 721.6,188.1
			720.7,187.6 719.9,187.4 719.7,187.1 719.2,186.6 718.8,186.6 718.5,186.3 718.5,185.8 718.2,185.2 718,184.9 718,184.5
			717.7,184.1 717.7,183.7 717.5,183.3 717.1,183.1 715.9,183.1 715.4,183.1 715,182.9 714.3,182.8 714,182.5 713.7,182.3
			712.7,182.3 712,182.3 711.3,182 711.2,181.8 710.5,181.5 709.7,181.3 709.4,181.1 708.8,181 708.5,181.3 708.4,181.8
			708.6,182.2 708.4,182.7 708.1,182.6 707.6,182.8 707.3,183.2 707.3,183.6 706.8,184.3 706.8,185.6 707,186.3 707.8,186.5
			708.1,186.9 708.6,187.1 708.7,187.4 708.5,188.3 708.5,189.2 709.1,189.6 709.4,189.9 708.8,190.8 707.9,190.9 707.4,190.8
			707.3,190.9 706.7,191 706.3,190.8 705.1,190.7 704.6,190.9 704.2,190.6 703.7,190.4 703.2,190.5 702.6,190.9 702,191.1
			701.7,191.3 700.7,190.9 700.2,190.5 698.8,189.7 698.6,189.3 698.5,188.8 698.4,188.4 697.5,188.5 697.1,188.8 696.5,188.7
			696.2,188.8 695.7,188.8 695.3,188.5 695.3,188.2 694.9,187.7 694.8,187.7 694.4,188 693.7,187.9 693.3,187.9 692.7,188.1
			691.8,188.2 691.3,188.4 691,189.1 690.7,189.3 689.7,189 689.6,189.3 689.6,189.7 689.9,189.9 689.6,190.1 689.3,190.7
			688.8,190.8 688.3,191.2 688.3,191.6 687.6,192 687.4,192.5 687.3,193.1 686.5,193.4 686,193.9 685.8,194.2 684.5,194.1
			684,194.4 683.6,195.4 683.6,195.5 		"/>
		<polygon fill="#E6EEF4" points="585,210.9 585.2,211.2 585.6,211.2 585.8,210.9 586,210.9 586.2,211.1 586.4,210.9 586.5,210.6
			586.7,210.6 587.2,210.2 587.4,209.9 587.7,209.9 588.1,209.5 588.3,209.5 588.5,209.6 588.7,209.6 588.8,209.2 589.2,208.8
			589.9,208.8 590.2,208.9 590.5,208.9 590.7,208.8 590.9,208.9 590.8,209.3 591.1,209.6 591.3,209.5 591.6,209.4 591.7,209.7
			592,209.8 592.3,209.7 592.3,209.4 592.6,209.2 592.7,209 593.1,208.9 593.4,209 594.4,209.1 594.5,209.3 594.7,209.7 595,209.8
			595.1,209.9 594.8,210.3 595,210.6 595.4,211 595.3,211.4 595,212 595.1,212.3 595.3,212.5 595.5,212.7 595.3,212.9 594.9,213.1
			594.8,213.7 595.2,214.5 595.7,214.6 596.1,214.7 596,215 595.4,215.3 595,215.3 594.5,214.8 594.2,214.8 593.9,214.9
			593.7,214.7 593.2,214.8 592.7,214.9 592.2,214.7 591.8,214.9 591.2,215.1 590.8,215.4 590.9,215.7 590.9,216.1 590.6,216.3
			590.7,216.6 591.2,217.2 591.2,217.6 591.4,217.7 591.9,217.7 592.1,217.9 591.9,218.1 591.5,217.9 591.2,218 590.9,218.3
			590.7,218.1 590.4,218.2 590.1,218 589.3,218.1 589,218 588.8,218.3 588.8,218.5 589.1,219 589.5,219 590,219.2 590.2,219.6
			590.5,219.8 590.7,220.4 591,220.5 591.1,220.8 591.9,221.7 591.9,222.3 591.9,222.9 592.1,222.9 592.6,222.8 592.8,222.7
			593.1,222.9 593.3,223.3 593.5,223.5 593.8,224 594,224.1 594.4,223.9 594.9,224 595.4,224.2 596,224.2 596.2,224.3 596.1,224.5
			596.1,224.8 596,225.6 595.7,226.3 595.8,227 595.9,227.7 597.6,226.2 599,225.7 600.8,226 602.7,227.1 604.6,229.2 605.7,228.9
			606.1,228.9 603.8,215.7 611.2,214.3 615.6,217.4 617.3,218 619.6,219.4 623.8,219 628.4,219 629.8,220 630.5,221.7 631.4,221.4
			631.5,225.4 633.5,225.6 634.7,228.8 635.2,228.9 636.5,228.2 637.3,228 638.3,228.2 639.5,228.8 639.8,229 640.9,228
			641.5,226.9 641.8,226.5 642.2,225.8 643.3,224.5 643.8,224.3 644.3,223.5 644.5,223.6 644.6,223.3 645.2,222.9 645,222.6
			645.5,222 646.4,222.2 646.9,222.4 649,222.6 650.7,222.6 651.5,222.5 651.5,221.7 651.4,221.1 651.3,220.5 651.6,220.3
			652.1,220.4 652.8,220.5 653.1,220.3 654,220.3 654.6,220.6 655.7,220.9 657.2,221.1 657.7,220.9 658.2,220.5 658.9,220.7
			659.6,220.6 660.9,220.3 662.3,220.6 663.2,220.3 664.9,220.4 666,220.9 666.5,220.8 667.7,222.1 668.9,222.5 669.5,222.2
			669.4,221.4 670,221.1 670,220.8 670.3,220.6 669.8,220.1 670,219.6 670.3,219.3 670.1,218.1 669.5,217.7 669.4,217.2
			668.9,216.4 668.8,215.8 668.6,215.4 668.5,215 668.3,214.2 668.7,213.8 668.6,213.6 668,213.5 667.2,213.5 666.8,213.2
			666.8,212.8 667.3,212.3 667.7,212.1 668.1,212.3 668.5,212.3 669.3,212 670.6,211.7 671.2,211.5 671.6,211.4 671.9,211.7
			672.3,211.7 672.7,211.5 673,211.5 673.1,211 673.3,210.5 672.7,210.2 672.4,209.9 672.5,209.5 672.5,208.3 672.8,206.7
			672.8,206 673.1,205.2 673.3,204 673.6,203.9 674.3,204 675.3,204.4 676.1,204.5 677.2,204.2 677.6,204.2 677.8,204.5 678,204.6
			678.4,204.5 678.9,203.9 679.5,203.7 680.2,202.9 680.3,202.6 679.8,201.9 679.2,200.8 679.2,199.6 679.3,198.9 679.8,198.6
			680.6,198.3 681,197.7 680.8,197.4 680.8,196.9 681.6,196.1 682,195.9 682.5,195.4 682.4,195.3 682.3,195.1 681.5,194.8
			680.9,194.3 680.5,194.2 680.3,193.7 680.6,193.1 680.3,192.9 679.7,193.2 679.4,193.7 678.8,193.9 677.5,194 677.1,194.2
			676.9,194.5 676.5,194.3 675.9,194 675.7,194 675.6,193.9 675.3,193.6 675.2,193.3 675.1,192.8 675.2,192.6 675.2,192.2
			674.8,192 674.6,192 673.9,191.6 673.4,191.5 673.1,191.4 672.8,190.8 672.3,190 671.5,189.4 670.7,189.2 669.7,189.2
			668.8,189.3 668.7,189.6 668.9,189.9 668.7,190.1 668.2,190.3 667.7,190.2 667.1,190.5 666.4,190.1 665.9,190.2 665.6,190.5
			665.1,190.4 664.7,190 664,189.9 664,189.5 664.1,189.1 663.3,188.7 662.8,188.9 662.8,189.5 663,189.7 662.9,190 662.4,190.3
			661.7,190.4 654.9,181.9 649.9,178.1 649.7,177.7 650.1,177.6 650.6,177.1 650.6,176.6 650.3,176.4 649.6,176.6 649,176.8
			648.5,177.2 648.1,177.4 647.5,178 647.4,178.4 647,178.7 646.8,179.2 646.3,179.6 645.4,179.7 644.9,179.9 645,180.5
			644.7,180.7 644.4,180.6 643.3,180.3 642.7,180.5 642.4,180.8 642,180.9 641.6,180.4 641.6,179.7 642,179.4 642.2,178.8
			641.9,178.6 641.5,179 641.1,179 640.1,178.5 639.4,178.6 639.6,178.9 639.9,179.1 639.5,179.5 639.2,179.5 638.8,178.8
			638.7,177.9 637.7,177.2 637.6,177.4 637.8,177.9 637.7,178.4 637.4,178.4 637.2,177.8 636.8,177.9 636.7,178.5 636.4,178.6
			636,178.2 635.4,178.6 635,178.4 634.8,177.8 635.2,177.7 635.3,177.5 635.1,177 635.3,176.5 635.2,176.2 634.9,176 634.5,175.5
			634.3,174.9 634,174.8 633.8,174.1 633.2,174 632.6,174.3 632,174.3 631.3,173.9 630.5,173.9 629.9,173.7 629.4,173.8
			629.1,173.7 628.6,174 628.4,174.6 627.7,174.6 627.4,174.8 627.7,175.2 627.7,175.6 626.9,175.7 626.6,175.6 626.2,176.1
			625.5,176.3 625.3,176.4 625,176.4 623.8,177.2 623.2,177.4 622.7,177.7 622.3,177.7 622,177.4 621.6,177.7 621.5,178 620.9,178
			620.6,178.3 620.6,178.9 620.4,179.1 620,178.9 619.6,179 619.2,179.3 618.5,179.3 617.8,179.8 617.6,180 616.9,180.1
			616.2,180.4 615.5,180.5 614.6,180.8 614.5,181.2 614.3,181.5 613.9,181 613.4,181 613,181.3 613,181.7 612.7,181.9 612.2,181.6
			611.6,181.7 611.4,181.4 611,181.3 610.7,181.7 610.1,181.7 609.9,181.9 610.2,182.6 610,182.8 610.5,183 611.2,182.9
			611.4,183.5 610.7,183.5 610.4,183.7 610.5,184.1 611.2,184.1 611.7,184.3 612.1,184.1 612.5,184.1 613,184.5 613.5,184.7
			613.5,185.2 613.2,185.4 612.7,185.3 611.5,185.4 610.9,186 610.3,186.9 610.3,187.5 610.7,187.5 610.9,188.2 610.5,188.7
			610.4,189.3 609.9,189.3 609.8,189.6 610,190 610,190.3 610.7,190.3 611,190.7 611.7,190.8 611.8,191.1 612.3,191.5 613.1,191.6
			613.4,191.8 613.5,193.9 613.2,194.4 612.3,194.7 611.5,194.6 610.7,194.1 610.4,194.4 610.3,194.9 610.1,195.5 609.4,195.6
			608.4,195.1 607.6,195.1 607.2,194.9 607,195.1 606.5,194.9 605.9,194.3 606.4,194 606.5,193.7 606.1,193.5 605.5,193.1
			605.2,193.5 604.6,193.4 604.1,193.6 604.2,194.2 603.4,194.3 603.3,194 602.5,193.3 601.8,193.4 601.6,193.8 601.3,193.4
			600.8,193.6 600.8,194.1 600.2,194.1 600.2,195.2 599.5,195.7 599,195.5 598.7,195 597.6,194.8 597.3,194.3 596.7,194.6
			596.8,195.3 596.4,195.9 596.1,195.8 596.1,195.1 595.8,194.7 595.4,194.7 594.6,194.1 594.2,193.5 593.6,193.5 593,192.8
			592.7,192.8 592.4,192.4 592,192.4 591,192.7 590.3,192.3 590,191.5 589.5,191.5 588.9,191.9 588.4,192 588.3,192.3 588,192.7
			587.9,192.2 587.6,192.5 587.4,192.9 586.9,193.2 586.6,192.9 587,192.5 587.1,192.1 586.4,191.8 585.6,191.3 585.5,191.7
			585.6,192.2 585.5,192.7 584.9,192.5 584.5,192.9 584.3,193.6 583.9,193.6 583.1,194.1 582.9,194.8 583.3,195.3 583.3,195.9
			582.4,195.9 581.5,196 582.2,198.3 581.8,198.6 581.9,199.4 581,199.5 580.2,199 580,198.5 578.5,197.1 578.1,197.6 578.1,198.3
			577.4,199.3 576.9,199.5 577,200.9 577.4,201.3 577.2,203 576.8,204 577.9,204.4 578.4,205.2 578.2,205.6 579.1,206.4 579.3,206
			581.1,206.5 582.4,207.7 583.5,209.6 582.5,209.6 582.4,210 583.4,210.7 584.2,210.5 584.8,210.9 584.9,210.9 		"/>
		<polygon fill="#E6EEF4" points="643.3,224.5 642.2,225.8 641.8,226.5 641.5,226.9 640.9,228 639.8,229 639.5,228.8 638.3,228.2
			637.3,228 636.5,228.2 635.2,228.9 634.7,228.8 633.5,225.6 631.5,225.4 631.4,221.4 630.5,221.7 629.8,220 628.4,219 623.8,219
			619.6,219.4 617.3,218 615.6,217.4 611.2,214.3 603.8,215.7 606.1,228.9 607.4,228.8 608.5,229 608.8,228.3 608.3,227.9
			608.1,226.9 608.7,225.7 609.6,225.6 610,224.9 610.7,224.5 611.3,224.9 611.7,224.7 611.2,224 612.5,224.1 614.3,225.1 616,226
			616.2,226.7 618.2,227.8 619.9,228.6 620.3,228.3 620.9,228.4 622.1,229.3 622.5,230.9 623.1,231.3 623.3,232 623.9,233.2
			624.9,233.6 626.8,234.8 628.6,236.2 630.7,237.1 632.6,238.4 634.1,238.6 634.4,239 634.8,238.9 635.9,239.6 635.8,240.4
			636,241.6 636.8,241.4 637.4,241.7 637.7,242.2 638.1,242.2 638.6,241.8 639,241.8 639.3,242.1 639.5,240.4 640.1,239
			640.3,238.7 640.2,237.9 639.7,237.7 639.4,236.9 639.6,236.3 639.5,235.7 638.7,235.7 638.2,236 637.5,235 637.5,234.1
			638.1,233.6 639.3,233.8 639.8,233.7 639.9,233 641,232.7 640.8,232.2 640.5,232 641.7,231.7 642.7,231.3 642.7,230.8
			641.8,230.3 641.9,229.7 642.6,229.4 643.3,228.9 643.9,228.9 644.8,228 645.4,228.6 645.6,229 647,228.8 647.9,228.9 648.7,228
			648.6,227.4 647.2,226.4 646.8,226.3 646.8,227.1 646.3,227.6 645.8,227.4 645.3,226.9 644,226.6 643.5,226.3 643.9,225.6
			644.8,224.2 644.8,223.6 644.3,223.5 643.8,224.3 		"/>
		<polygon fill="#E6EEF4" points="623.4,248.1 623.8,248.4 624.3,248.4 624.7,248.1 625.1,248.1 625.8,248.5 625.9,248.9
			626.2,249.2 626.5,248.9 627.3,248.7 627.7,248.3 627.7,247.9 628.1,247.6 628,247.2 628.8,246.8 629.9,246.5 630,246.3
			630.4,245.9 630.9,245.8 631,245.1 631.1,244.4 631.7,243.7 631.7,243.1 631.4,242.9 631.5,242.6 631.8,242.4 632.1,242.2
			632.8,242 633,242 633.9,241.4 634.5,241.2 635.1,241.6 635.7,241.4 635.9,241.6 636,241.6 635.8,240.4 635.9,239.6 634.8,238.9
			634.4,239 634.1,238.6 632.6,238.4 630.7,237.1 628.6,236.2 626.8,234.8 624.9,233.6 623.9,233.2 623.3,232 623.1,231.3
			622.5,230.9 622.1,229.3 620.9,228.4 620.3,228.3 619.9,228.6 618.2,227.8 616.2,226.7 616,226 614.3,225.1 612.5,224.1
			611.2,224 611.7,224.7 611.3,224.9 610.7,224.5 610,224.9 609.6,225.6 608.7,225.7 608.1,226.9 608.3,227.9 608.8,228.3
			608.5,229 607.4,228.8 606.1,228.9 605.7,228.9 604.6,229.2 602.7,227.1 600.8,226 599,225.7 597.6,226.2 595.9,227.7
			595.9,227.9 596.3,228.4 596.5,228.8 597,229.1 597.1,229.6 597.7,230.6 597.6,231.4 597.3,232 597.4,233.4 597.7,233.8
			597.9,234.2 598.8,235.1 598.8,234.7 598.5,234.4 598.6,234.2 599.4,234.4 599.8,234.1 600,234.3 599.9,234.9 600.1,235.5
			600.4,235.3 600.8,235.8 600.6,236 600.1,235.9 599.8,236 599.6,235.7 599.1,236.2 599.1,236.7 599.4,237.1 599.3,236.5
			599.7,236.4 599.9,236.6 600.3,236.6 600.6,237.2 601.4,237.5 601.5,238.1 601.5,238.9 601.6,239.3 601.6,240.8 601.8,241.7
			602.3,243.1 602.9,242.8 604.3,242.7 604.5,242 604.9,241.5 605.3,241.5 606.5,240.5 607.7,240.3 608.7,240.5 608.9,239.8
			609.5,239.7 610,239.9 610.7,239.9 611.7,240.7 612.5,240.9 614.1,241.9 614.6,241.9 615,241.6 616.1,242.1 616.7,242.2
			616.9,243 617.1,243.2 617.7,243.1 618.8,243.3 619.9,244.9 621.1,245 621.8,245.3 622.3,246.1 622.1,246.5 622.3,247.2
			622.3,247.6 622.5,248 622.8,247.9 		"/>
		<polygon fill="#E6EEF4" points="928.3,414.8 928.4,414.4 928.2,413.9 928.1,414.4 		"/>
		<polygon fill="#E6EEF4" points="926.8,405.3 926.2,405 926,405.5 926.2,405.6 926.9,405.6 		"/>
		<path fill="#E6EEF4" d="M922.2,400.9l0.3,0.7h0.4l0.3-0.4l0.4,0.2l0.4-0.3l0-0.7l-0.2-0.4l0.2-0.5l-0.3-0.4l-0.1,0.3l0,0.4
			L923,400l-0.3-0.2l0-1c0,0-0.4-0.4-0.4-0.4l-0.3,1.2l0.2,0.7L922.2,400.9z"/>
		<polygon fill="#E6EEF4" points="926.9,400 926.6,399.1 926.7,400 926.6,400.6 		"/>
		<polygon fill="#E6EEF4" points="923.5,402.8 923.6,403.1 923.9,403.1 924.2,403.4 924,403.8 923.9,404.6 924,405 924.7,404.6
			925.2,404.5 924.9,404.1 924.5,403.4 924.5,402.9 924.1,402.5 923.6,402.5 		"/>
		<polygon fill="#E6EEF4" points="928.1,412.7 928.1,411.8 927.8,411.4 927.6,411.6 927.6,412.1 		"/>
		<polygon fill="#E6EEF4" points="925.9,408.4 926.4,408.8 926.9,408.6 926.9,408.1 926.5,407.7 925.8,407.9 		"/>
		<polygon fill="#E6EEF4" points="925.5,404.1 925.8,404.4 926.1,404.4 926.3,404.2 926.7,404.2 926.7,403.8 926.4,403.7
			926.2,403.3 925.5,403.8 		"/>
		<path fill="#E6EEF4" d="M926,400.6l0.1-0.3l-0.7,0.2c0,0-0.2,0.3-0.2,0.3l0.4,0.1L926,400.6z"/>
		<path fill="#E6EEF4" d="M926.6,402.5l0.2,0l0-0.5l0-0.6l-0.2-0.2c0,0-0.1,0.6-0.1,0.6L926.6,402.5z"/>
		<polygon fill="#E6EEF4" points="896.3,372.7 895.6,373.3 896.2,373 		"/>
		<polygon fill="#E6EEF4" points="894.8,374.2 895.2,374.5 895,374.1 		"/>
		<polygon fill="#E6EEF4" points="899.9,380 900.2,379.8 900.3,379.4 899.7,379.3 899.7,379.6 		"/>
		<polygon fill="#E6EEF4" points="896.7,377.3 896.9,377.1 896.3,376.5 896.2,377 896.4,377.3 896.4,377.5 		"/>
		<polygon fill="#E6EEF4" points="898.8,377.7 898.6,377.5 898.2,377.8 898,378.5 898.4,378.5 898.8,378.6 898.9,379 899.3,379.2
			899.6,379.2 899.6,378.6 899.5,378.3 899,378 		"/>
		<polygon fill="#E6EEF4" points="898.5,379.2 898.2,379 898,379.3 898.4,379.4 		"/>
		<polygon fill="#E6EEF4" points="895.9,373.8 896.4,374.5 897.3,375.1 897.8,375.7 898.5,375.8 899,375.8 898.9,375.5 898.3,375
			897.9,374.8 897.9,374.4 897.4,374.2 896.6,374 896.5,373.6 896.2,373.5 		"/>
		<polygon fill="#E6EEF4" points="907.4,379.3 907.3,379.6 907.6,380.1 907.8,381 908.9,381.9 909.4,382.1 909.5,382.6 909.9,382.8
			910,382.1 909.5,381.5 909,381.3 908.8,380.9 908.1,379.9 908.2,379.5 907.6,378.8 907,378.8 907,379 		"/>
		<path fill="#E6EEF4" d="M903.3,378.1l0.5,0.4l0.3,0.3l0.1,0.4l0.3-0.3l0.4,0.3l-0.2-0.4l0.2-0.3l-1-1.1l-0.9-0.4l-0.7-0.6l-1-0.1
			c0,0,0.7,0.5,0.7,0.5L903.3,378.1z"/>
		<polygon fill="#E6EEF4" points="906.7,381.1 906.7,380.7 906.1,380.7 906.2,381 		"/>
		<polygon fill="#E6EEF4" points="909.4,384.6 908.8,384.5 909.1,385 909.2,385.4 909.9,386.1 910.8,386.5 911.5,386.4 911.3,386.2
			911.4,385.9 911,385.4 910,385.2 		"/>
		<polygon fill="#E6EEF4" points="904.6,381.5 904.5,382.1 905.1,382.9 905.8,383.2 906.4,383.1 906.9,383.6 907.4,383.6 907.6,383
			907.5,382.7 907.2,382.6 906.8,382.2 906,381.8 905.3,381.8 904.9,381.4 		"/>
		<polygon fill="#E6EEF4" points="905.6,388.2 905,388.2 905,388.6 905.3,388.8 905.7,388.8 906.2,389 906.6,388.7 906,388.5 		"/>
		<path fill="#E6EEF4" d="M897.5,377.2l-0.3,0.2c0,0,0,0.3,0,0.3l0.3,0.2l0.5-0.1l0.1-0.3L897.5,377.2z"/>
		<polygon fill="#E6EEF4" points="890.2,367.3 890.1,367.7 889.7,367.8 889.8,368 890.3,368.1 890.6,367.7 		"/>
		<polygon fill="#E6EEF4" points="890.7,369 890.5,369.2 890.8,369.6 890.8,370.1 891.1,369.7 891.1,369.1 		"/>
		<polygon fill="#E6EEF4" points="875.6,381 875.3,380.7 874.9,380.7 874.7,380.9 874.3,380.8 874,380.8 873.5,380.3 873.4,379.5
			873,379.3 872.4,378.1 872.2,377.9 872,377.5 871.4,377.5 871,377.3 870.7,376.7 870.1,376.1 870,375.4 869.6,375.1 869.3,374.5
			869.3,374.3 870.5,374.4 871.5,373.9 871.7,373.4 871.7,372.8 870.9,372 870.3,371.8 870.1,372 869.4,371.7 868.4,371.3
			868,370.8 867.4,370.8 866,370.4 865.9,370 866.3,369.3 866.3,368.9 866,368.4 865,367.3 864.7,367.4 864.4,367.5 864.2,367.1
			863.7,366.7 863.5,366.3 862.9,366.2 862.6,365.8 862.4,365.9 861.9,365.6 861.3,365.6 860.7,365.1 860.1,365 859,364.3
			857.5,364.2 857,364 856.7,363.6 856.4,363.6 856.2,363.7 855.1,363.3 854.9,363 854.3,362.8 853.4,362.4 852.9,362.4
			852.6,372.8 852.4,373.6 852.4,374 852.5,374.3 852.3,381 853.3,381.1 853.6,381.2 854.1,381.1 855.5,381.2 855.9,381.1
			856,381.4 856.4,381.8 856.8,381.9 857.4,381.5 858.4,381.2 858.5,381 858.7,381.2 859,380.9 858.9,380.1 858.2,379.5
			857.4,379.2 856.7,379.1 856.4,378.8 856,378.7 855.8,378.7 855.6,378.5 855.4,377.8 855,377.2 854.4,376.9 854.3,376.5
			854,376.2 854.4,376.5 854.5,376.9 854.9,377 855.5,377.4 855.6,377.8 855.7,378.4 855.9,378.4 856.6,378.6 856.9,379
			857.2,378.9 857.9,378.9 858.7,378.7 859.2,378.8 859.7,378.6 859.5,378.4 859.1,378.1 858.9,377.7 858.6,377.8 858.4,377.4
			858.7,377.7 859.2,377.5 859.6,378 860.2,378.1 859.9,377.8 859.9,377.4 860.2,377.2 860.2,376.9 860.2,376.5 859.8,376.1
			859.8,375.9 860.2,376.1 860.4,376.5 861,377 861.4,377.1 861.4,376.8 861.3,376.4 861.4,376.6 861.6,377.1 861.8,377
			861.8,376.6 861.7,376.3 861.8,375.7 862.1,376 862.8,376.3 862.9,376.7 863.3,376.7 863.6,376.7 863.8,376.9 864.1,376.5
			864,376.9 864,377.3 864.3,377.3 864.7,377.7 866.2,378.1 866.6,378.3 867.1,378.8 867.3,379.6 868,380.5 868.2,380.9
			868.7,381.1 869,381.5 869.1,381.8 870.4,383.1 870.4,383.6 870.9,383.9 871.7,384.2 872,384 872.3,384 872.7,384.2 873.6,384.1
			874.1,384.3 874.6,384.3 875.5,384.4 875.9,384.7 876.5,384.6 876.8,384.9 877.4,384.9 877.4,385.1 877.1,385.3 877.7,385.4
			878.3,385.8 878.9,385.7 879.1,385.3 878.4,384.9 878.2,384.9 878.2,384.6 878.7,384.5 879.1,384.7 879.6,384.3 878.6,384.1
			877.4,384 876.7,383.6 876.4,383.3 877,383 877.4,383 877.7,382.8 877.3,382.6 876.4,382.6 875.5,382.4 875.1,382.1 875.1,381.7
			875.4,381.4 		"/>
		<polygon fill="#E6EEF4" points="893.1,371.7 892.4,371.4 892.2,370.6 891.9,370.3 891.3,370.3 891.2,370.8 891.3,371.3
			891.3,372.2 891.8,372.4 892.4,373.4 892.2,373.7 892.5,374.1 892.9,374.1 893.3,374.3 894,374.2 894.1,374 894.5,373.8
			894.6,373.1 894,372.4 		"/>
		<polygon fill="#E6EEF4" points="888.5,387.8 888.5,387.9 888.8,388 889.2,387.9 889.3,387.6 888.8,387.5 		"/>
		<polygon fill="#E6EEF4" points="886.5,368 886.8,367.4 886.8,366.9 886.5,366.8 886.3,365.7 885.9,365.6 885.4,364.8 884.8,364.5
			884.3,364.1 883.6,363.9 882.5,363 881.7,362.8 880.4,362.1 880.5,362.4 880.9,362.8 882.8,363.9 883.8,364.5 884.4,364.5
			885.4,365.5 885.8,367 885.6,367.4 885.8,368 886.3,368.6 		"/>
		<polygon fill="#E6EEF4" points="884.8,380.5 884.7,381 884.8,381.3 885.1,381.2 885.7,381.6 885.6,381.3 		"/>
		<polygon fill="#E6EEF4" points="887.6,388.2 887.1,388.3 886.5,387.8 886.2,387.8 886.8,388.5 887.2,388.5 887.5,388.7
			887.7,388.5 		"/>
		<polygon fill="#E6EEF4" points="879.3,362 878.9,361.7 878.2,362 878.3,362.4 878.7,362.7 879.3,362.5 		"/>
		<path fill="#E6EEF4" d="M863.7,377.1l0.2,0.3c0,0,0-0.4,0-0.4L863.7,377.1z"/>
		<polygon fill="#E6EEF4" points="878.1,368.5 878,368.8 878.5,369.3 878.8,369 878.5,368.5 		"/>
		<polygon fill="#E6EEF4" points="881,380 881.1,379.5 881,378.8 880.7,378.9 880.5,379.1 880.8,379.5 880.9,379.4 880.9,379.8
			880.9,380 		"/>
		<polygon fill="#E6EEF4" points="867.2,367.8 866.5,368 866.7,368.4 867.1,368.1 		"/>
		<polygon fill="#E6EEF4" points="877.4,358.7 877.4,358.4 877.1,357.9 876.6,357.9 876.7,358.3 		"/>
		<path fill="#E6EEF4" d="M870.5,360.2l-0.4,0.1l-0.3-0.2l-0.5,0.1l-0.4,0l-0.2,0.1c0,0,0.2,0.4,0.2,0.4l0.4,0.1l0.2,0.2l0.7,0
			l0.6-0.5L870.5,360.2z"/>
		<polygon fill="#E6EEF4" points="880.4,383.4 880.2,383.4 880.1,383.2 879.9,383 879.5,382.9 879.5,383.1 879.7,383.1 880,383.6
			880.1,383.7 880.1,384 880.5,384.1 880.8,384 880.8,383.8 881.1,383.6 881,383.3 880.8,383.3 880.4,383.6 		"/>
		<polygon fill="#E6EEF4" points="872.3,371.4 872.4,371.2 872.3,370.7 871.8,370.3 871.5,370.7 871.8,371.1 		"/>
		<polygon fill="#E6EEF4" points="878.5,382.3 878.7,382.4 878.7,382 878.4,381.5 878.1,381.4 877.8,381.6 878,382 878.3,382 		"/>
		<polygon fill="#E6EEF4" points="879.7,382 879.5,382 879.1,382 879,382 879.1,382.5 879.4,382.7 879.8,382.6 879.9,382.8
			880,382.6 879.9,382.4 879.7,382.4 879.8,382.3 		"/>
		<polygon fill="#E6EEF4" points="869.7,370 869.9,370.4 870.2,370.3 870.2,369.8 869.9,369.6 		"/>
		<polygon fill="#E6EEF4" points="884.2,370 883.6,369.4 883.6,369.1 884,368.8 884.3,369 884.9,368.4 884.9,367.1 884.3,366.6
			883.9,366.8 883.7,367.1 883.4,366.8 882.7,366.8 882.4,367.2 882.7,368.4 882.9,368.6 882.6,368.9 882.1,368.9 881,369.7
			880.8,370.3 880.5,370.5 880.2,370.4 879.8,370.7 879.4,370.3 879.1,370.3 878.7,370.8 878.3,370.7 878.2,370 878.3,369.6
			877.9,369.4 877.6,369.6 877.7,370 877.3,370.3 876.7,370.3 876.1,370.5 875.6,370.5 875.2,370.3 874.7,370.3 874,370.5
			873.5,370.1 873.1,370.9 873.5,371.5 874.1,371.5 875,372.2 875.1,372.6 875.5,372.3 876.5,372.3 876.7,372.8 877.4,372.9
			877.8,372.8 878.9,372.6 879.4,372.8 879.9,372.6 880.5,372.9 880.8,372.6 880.8,372.2 881.5,372.2 882.5,370.9 882.5,370.5
			882.9,370.4 883.2,370.7 883.9,370.5 		"/>
		<path fill="#E6EEF4" d="M859.9,380.2l-0.4-0.4c0,0-0.8-0.3-0.8-0.3L859.9,380.2z"/>
		<polygon fill="#E6EEF4" points="860.6,377 860.8,377.5 861,377.5 860.8,377.2 		"/>
		<polygon fill="#E6EEF4" points="859,379.3 859.3,379.4 859.4,379.2 		"/>
		<polygon fill="#E6EEF4" points="861.9,376.8 861.9,377.1 862.2,377.2 862.2,377 		"/>
		<polygon fill="#E6EEF4" points="860.5,377.8 860.3,377.2 860,377.5 860,377.8 860.2,378 860.4,378 		"/>
		<polygon fill="#E6EEF4" points="859.6,379.6 859.8,379.7 859.8,379.5 		"/>
		<polygon fill="#E6EEF4" points="859.5,378.1 859.6,378.3 859.9,378.4 860,378.2 		"/>
		<path fill="#E6EEF4" d="M860.4,378.9l-0.4,0l-0.3,0.3c0,0,0.6-0.1,0.6-0.1L860.4,378.9z"/>
		<polygon fill="#E6EEF4" points="862.4,376.4 862.2,376.7 862.6,377.1 862.5,376.8 862.7,376.5 		"/>
		<polygon fill="#E6EEF4" points="862.8,377.1 862.9,376.8 862.7,376.8 		"/>
		<polygon fill="#E6EEF4" points="809.6,322.5 809.4,322.6 809.5,322.8 809.8,322.7 		"/>
		<polygon fill="#E6EEF4" points="792.9,323.7 792.8,323.4 792.7,323.6 792.5,323.8 792.4,324.1 792.7,324.2 793.2,324.2
			793.2,323.8 		"/>
		<polygon fill="#E6EEF4" points="808.4,327.7 808.2,327.8 808.2,328.5 808.1,328.7 807.7,328.5 807.1,328.2 806.8,329.3
			807.1,329.5 807,329.9 806.7,330.1 806.4,329.5 805.8,329.7 805.5,330.6 804.9,331 804.3,331.1 803.8,331.6 804.4,330.7
			804.4,329.8 803.6,329.2 803.2,329.2 802.9,329.7 802.2,330 802,330.5 802.2,330.9 801.4,331.1 800.9,330.9 800.5,331.3
			800,331.5 799.5,332.1 799.7,332.5 799.5,333.3 799.1,334.1 799.7,334.7 799.9,334.3 800.3,333.2 800.7,332.9 801,332.2
			801.3,332.1 801.6,332.4 801.5,333 801.7,333.1 801.9,333 802.2,333.2 802.2,332.7 802.5,332.5 802.7,332.6 802.6,332.9
			802.9,332.9 803.3,333.2 803.6,333.3 803.3,332.8 803.4,332.6 803.3,332.3 803.5,332.1 803.8,332.1 804.3,332.6 804.8,332.7
			805.3,333.1 805.4,333.6 805.9,334 805.4,333.8 805.2,333.9 805.2,334.2 805,334.5 805.2,334.9 805.3,335.3 805.2,335.6
			805.5,336.2 805.6,336.6 806.2,337.2 806.8,337.2 807.3,337.7 807.8,337.9 808.3,337.6 808.4,337.3 808.6,337.1 808.8,337.4
			808.6,337.7 808.8,338.2 809,338.4 809.4,338.1 810.1,337.2 810.2,336.6 809.9,336.2 809.6,335.5 809.1,335.1 809.2,334.7
			809.9,333.5 810.3,333.3 810.7,333.8 810.8,334.4 811.1,334.8 811.1,335.3 811.3,336.1 811.5,336.5 811.5,336.1 811.6,335.5
			811.4,334.7 811.5,334.4 811.8,334.3 812,334.7 812,334.4 812.2,334.4 812.5,333.6 812.4,332.7 812.1,332.2 811.8,331.7
			811.8,331.1 811.7,330.5 811.5,330.8 811.5,330.1 811.5,329.8 811.3,329.8 811,329.4 811,329.1 811.4,329.1 811.4,328.4
			811,327.8 811,327.4 810.7,327.7 810.1,327.2 809.4,326.6 809.3,326.1 809.1,326.2 808.6,326.1 808.6,326.7 808.9,327.8
			808.8,328.2 		"/>
		<polygon fill="#E6EEF4" points="809.3,323.4 809.5,323.5 809.6,323.3 809.3,323.1 		"/>
		<polygon fill="#E6EEF4" points="792.5,320.6 792.7,320.3 792.9,320.2 792.7,319.8 792.1,319.6 792.1,319.9 792.2,320.6 		"/>
		<polygon fill="#E6EEF4" points="794.2,297.9 794.7,297.8 794.3,297.4 		"/>
		<polygon fill="#E6EEF4" points="799.4,320.1 798.8,319.6 798.3,319.7 798.2,320.1 798.7,320.3 799,320.4 799,320.9 798.9,321.4
			798.9,322.4 798.7,323 798.9,324 799.2,323.9 799.3,323.6 800,323.2 800.3,323.3 800.4,323.1 800.7,323.1 800.9,322.7
			801.6,322.2 801.8,321.6 802.1,321.3 802.2,320.9 802,320.5 801.7,320.7 801.3,321.1 801,320.6 800.6,320.5 800,320.5
			799.7,320.5 799.8,320.3 		"/>
		<polygon fill="#E6EEF4" points="800.5,318.4 800.6,318.1 800.2,317.9 800,318.1 800,318.4 		"/>
		<polygon fill="#E6EEF4" points="809,324.7 809.3,325.4 809.2,325.7 809.3,326 809.5,326 809.7,325.4 809.3,324.9 809.3,324.4
			809.5,324.3 809.3,324 809.1,324.1 		"/>
		<polygon fill="#E6EEF4" points="801.9,319.3 802.1,319.6 802.5,318.8 802.9,318.8 803.5,319.6 804.2,319.9 804.6,319.8
			804.6,319.5 804.3,319 803.5,318.5 803.1,318.4 802.6,318 802.4,318 802.5,317.8 802.1,317.7 802.1,318.3 802.2,318.7 802,318.9
					"/>
		<polygon fill="#E6EEF4" points="798.9,317.4 798.7,318 798.3,318.5 798.6,319.2 799,319.1 799.2,318.4 799,317.9 799.1,317.2
			"/>
		<polygon fill="#E6EEF4" points="803.6,318.3 803.8,318.3 803.4,317.7 803,317.6 803.1,317.9 		"/>
		<polygon fill="#E6EEF4" points="800.9,323.7 800.9,323.4 800.7,323.3 800.3,323.4 800.1,324 800.4,324.2 		"/>
		<polygon fill="#E6EEF4" points="797,316.1 796.5,315.8 795.3,314.8 794.7,315 794,314.7 793.5,315 793.6,315.3 794,315.2
			794.2,315.9 794.5,316.1 794.9,316.5 794.9,317.4 795.3,317.7 795.4,318.2 795.9,318.8 796.4,318.9 796.9,318.5 796.9,318
			797.1,317.9 797.1,317.4 796.8,317 797,316.6 		"/>
		<polygon fill="#E6EEF4" points="804.6,321.9 804.3,322 804.1,323 803.6,323.8 803.6,324.5 803.3,325.3 802.9,325.8 802.9,326.4
			803,326.8 803.4,326.4 803.6,325.2 804.4,324.3 804.5,323.8 804.4,323.3 804.6,322.9 		"/>
		<polygon fill="#E6EEF4" points="810.1,326.5 810.3,326.8 810.4,326.4 810.1,326.2 		"/>
		<polygon fill="#E6EEF4" points="800.2,326.7 800.6,326.8 801.3,327.2 801.8,327.2 801.8,327.9 802.3,328.1 802.8,327.8
			802.8,327.3 802.4,326.6 802.3,325.5 802.7,323.9 803.2,323.4 803.2,322.9 802.8,322.6 802.5,322.8 802.2,322.6 801.7,322.9
			801.7,323.4 801.4,323.9 801.5,324.6 801.2,325.3 800.3,325.5 800.1,325.9 		"/>
		<polygon fill="#E6EEF4" points="807,327.6 806.5,327.2 806.4,327.5 806.5,327.8 806.9,328.1 		"/>
		<polygon fill="#E6EEF4" points="803.1,327.9 803.5,328.1 803.9,327.9 804,327.6 803.8,327.5 803.3,327.5 		"/>
		<polygon fill="#E6EEF4" points="811,326 810.8,325.5 810.5,325 810.4,325.6 810.3,325.8 810.6,326.1 		"/>
		<polygon fill="#E6EEF4" points="786.2,330.7 786.1,330.4 785.9,330.6 		"/>
		<polygon fill="#E6EEF4" points="799.3,335.3 798.8,335.4 798.8,335.7 799.2,336.2 799.5,336.3 800.2,335.6 800.3,335.4
			799.9,335.3 799.6,335.1 		"/>
		<polygon fill="#E6EEF4" points="784.8,331.2 784.8,331.6 785.1,332.1 785.4,332.1 785.4,331.4 785.5,331.2 785.3,331 		"/>
		<polygon fill="#E6EEF4" points="785.8,330.5 785.8,330.3 785.5,330.6 		"/>
		<polygon fill="#E6EEF4" points="795.9,300.4 795.5,300.2 795.1,299.6 794,299.4 793.2,299.7 793.1,300.3 792.6,301.5 792.7,302.1
			792.7,303.3 792.4,304.7 792.2,305.3 792.6,306.2 792.6,306.6 792.2,306.8 791.7,306.7 791.3,306.3 791.3,307 791.4,307.6
			791.7,307.6 791.8,307.8 791.6,308.2 791.8,309 792.2,309.7 792.3,310.7 792.5,310.9 792.7,310.8 792.9,310.8 792.9,311.4
			793.5,312.1 793.8,312.1 794.2,311.7 793.9,311.4 793.9,311 794.5,311.1 795,311.5 794.4,312.2 794.1,312.6 794.1,312.9
			794.1,313.6 794.4,314.2 794.6,313.6 794.9,313.5 795.1,314 794.9,314.5 795.3,314.4 795.7,314 796.3,314.7 796.8,314.3
			796.7,314 797,313.6 797.6,313.5 798.7,314 799,314.4 799.6,314.9 800.1,315.8 800.4,315.8 800.2,314.8 799.6,313.8 799.7,313.5
			800,313.6 800.3,313.9 800.7,314.1 801,314.7 801.8,315 802,315.5 802,316.2 802.5,316.3 803.1,317 803.6,316.9 803.5,316.7
			804,316.8 804,317.1 803.5,317.3 804,317.9 804.5,318 804.7,317.2 804.6,316.9 804.8,316.7 804.6,316.4 804.2,316.4 803.8,316.2
			803.2,316.2 803.2,315.8 802.8,314.8 802.7,314.3 803,314.2 803.3,314.3 803.7,314.3 803.6,314.1 803,313.7 802.4,313.7
			802,313.1 801.8,313.3 801.8,313.9 801.5,314.1 801.2,313.8 801.3,313.3 800.9,312.6 800.1,312.1 799.6,312.1 798.8,312.7
			798.7,313.1 798.3,313.3 797.6,313.1 797.4,312.5 796.9,312.2 796.9,311.6 797.2,311.3 796.8,310.9 796.5,310.1 796.2,309.9
			796.3,309.2 796.6,308.8 796.5,308.2 796.7,307.7 797.6,306.9 797.9,306.6 797.8,307.1 797.8,307.3 798.3,306.6 798.1,305.9
			798.4,305.1 798.7,303.8 798.4,303.5 798.2,302.8 797.9,302.7 797.4,301.8 797.5,300.7 797.9,300.3 797.9,299.9 797.5,299.5
			797.3,299.6 797.2,299.8 796.9,300.1 796.1,300.1 		"/>
		<polygon fill="#E6EEF4" points="804.2,325.9 804.5,326.3 804.5,326.6 805.2,326.5 806,326.1 806.2,325.8 806.1,325.2 805.8,324.9
			805.5,324.9 804.6,325.5 		"/>
		<polygon fill="#E6EEF4" points="807.3,323.2 807.2,322.3 806.9,321.6 806.8,321.4 806.2,321.6 805.7,321.4 805.4,321.4
			805.6,321.9 805.6,322.5 805.9,322.8 806.2,322.5 806.5,322.8 806.5,323.6 806.8,324.1 806.8,324.9 807.3,325.2 807.3,324.4
			807.6,324.8 808.1,324.7 808.2,324.3 807.7,323.4 		"/>
		<polygon fill="#E6EEF4" points="808.1,325 808,325.5 808.4,325.9 808.3,325.5 		"/>
		<polygon fill="#E6EEF4" points="805.4,323.7 805.4,323.1 805.2,323.4 		"/>
		<polygon fill="#E6EEF4" points="786.6,328.5 785.8,329.5 785.6,329.8 785.7,330 786.2,329.6 786.6,329.5 787,329.1 787.6,328.9
			788.2,328 788.8,327.7 789.3,327.4 789.3,327.1 789.7,326.6 789.7,325.8 790,325.4 790.9,325.3 791.1,324.8 791.5,324.4
			791.9,324.3 792.1,323.8 791.8,323.1 791.4,322.6 791.5,322.1 791.4,321.3 791.2,321.4 791.1,322.3 791.1,323.1 790.7,322.8
			791.1,323.4 791,323.8 790.6,324.3 790.2,324.3 789.7,324.8 789.7,325.3 789.1,325.6 788.5,326.8 787.7,327.6 787.3,327.6
			786.9,328.4 		"/>
		<polygon fill="#E6EEF4" points="805.2,320.9 805.6,321.1 806,321.1 806.1,320.5 805.5,320.6 		"/>
		<polygon fill="#E6EEF4" points="801.4,315.9 801.2,316 801.1,316.3 801.9,317.1 802,316.8 801.9,316.5 		"/>
		<polygon fill="#E6EEF4" points="805.3,317.8 805.1,317.7 805.1,318 805.5,318.9 806.2,319.5 806.9,320.2 807.1,320.4 807.1,320.7
			806.8,321 806.7,321.1 807,321 807.1,321.2 807.3,321.3 807.7,321.6 807.9,322 808.7,322 808.9,322.1 809,322 809.3,322.1
			809,321.8 808.9,321.3 808.6,321 808.6,320.2 808.5,319.2 808.6,318.9 808.3,318.7 807.9,318.1 807.6,317.6 807.3,317.6
			807.1,317.7 806.8,317.5 806.5,317.6 806.3,317.8 805.8,317.8 		"/>
		<polygon fill="#E6EEF4" points="804.3,314.8 805,314.6 805.2,314 805,313.5 804.6,313.1 804.3,313.3 804.4,313.9 804.2,314.3
			804,314.5 		"/>
		<polygon fill="#E6EEF4" points="798.1,309.9 797.5,310.3 797.8,311 797.7,311.3 797.8,311.6 798.2,311.3 798.2,310.4 798.5,310.2
					"/>
		<polygon fill="#E6EEF4" points="798.1,312.8 798.5,313.1 798.4,312.6 798,312.4 		"/>
		<path fill="#E6EEF4" d="M796.7,298l-0.3,0.4l0.3,0.3l0.2-0.4C796.9,298.3,796.7,298,796.7,298z"/>
		<polygon fill="#E6EEF4" points="798,314.5 797.7,314.9 797.8,315.3 798.5,315.8 798.6,315.5 798.8,315.2 798.5,314.7 		"/>
		<polygon fill="#E6EEF4" points="795.4,297.2 795.5,296.6 795.1,296.9 		"/>
		<polygon fill="#E6EEF4" points="793.4,314.3 792.9,313.8 792.6,313.8 792.6,314.2 793.3,314.5 		"/>
		<polygon fill="#E6EEF4" points="794.9,298.9 795.4,298.6 794.7,298.6 		"/>
		<polygon fill="#E6EEF4" points="792,318.6 792.2,319.1 792.5,319.3 793.1,319.4 793.4,319.6 793.7,319.3 793.6,319 793,318.9
			792.7,318.5 792.2,318.4 		"/>
		<polygon fill="#E6EEF4" points="787.6,344.2 787.1,344.3 787.5,344.4 		"/>
		<polygon fill="#E6EEF4" points="787.2,343.1 787.5,343.2 787.3,342.9 		"/>
		<path fill="#E6EEF4" d="M823.9,376.5l0.2,0.1c0,0,0.1-0.1,0.1-0.2L823.9,376.5z"/>
		<polygon fill="#E6EEF4" points="787.9,343 787.9,342.8 787.3,342.6 787.3,342.7 787.5,343 		"/>
		<polygon fill="#E6EEF4" points="813.4,342.4 813.3,341.9 812.9,341.7 812.6,341.8 812.8,342.5 812.9,343 813.2,342.9 		"/>
		<polygon fill="#E6EEF4" points="792.1,340.5 792,340.8 792.2,341.3 792.2,340.9 		"/>
		<polygon fill="#E6EEF4" points="810.5,377.4 811.4,377.5 811.7,377.8 811.8,377.5 812.2,377.2 812.6,377 812.5,376.7 812.1,376.5
			811.6,376.8 810.7,376.9 810.4,376.7 810,376.9 809.8,377.5 809.9,377.7 		"/>
		<polygon fill="#E6EEF4" points="793.8,339.9 794.4,339.5 794.4,339 794,339.1 793,339.9 793.2,340.1 		"/>
		<polygon fill="#E6EEF4" points="813.3,365.9 813.8,365.4 814.3,365.4 814.3,365 813.9,364.4 813.8,364.1 813,363.8 812,363.7
			811.5,364.1 811,363.9 810.6,364.2 810.5,364.9 810.9,365.5 811.7,365.7 812,365.9 812.6,365.8 		"/>
		<polygon fill="#E6EEF4" points="809.1,344.2 809.2,344.9 809.7,345.4 810,345.1 809.8,344.5 809.2,343.9 		"/>
		<path fill="#E6EEF4" d="M812.9,343.8h0.2l-0.2-0.5l-0.3-0.1C812.6,343.2,812.9,343.8,812.9,343.8z"/>
		<polygon fill="#E6EEF4" points="814.3,356.2 814.3,355.9 814,355.9 813.8,356.5 814.2,356.6 		"/>
		<path fill="#E6EEF4" d="M846.4,377.4l0.1-0.1l0.1-0.5l0.1-0.2l-0.4-0.3l-0.2-0.2l-1,0l-0.6,0.3l-0.3,0.8l-0.3,0.6l-1.1,1.1
			c0,0,1-0.1,1-0.1l0.4-0.1l0.7,0.1l0.5-0.2l0.4-0.5l0.4-0.1l0.2-0.3V377.4z"/>
		<polygon fill="#E6EEF4" points="792.1,380.3 792.5,380.2 792.5,379.9 792.3,379.7 		"/>
		<polygon fill="#E6EEF4" points="795.6,336.3 795.7,336 795.6,335.7 795.2,336.2 		"/>
		<polygon fill="#E6EEF4" points="791.4,379.9 791.6,380.3 791.8,379.7 792,379.4 791.6,379.3 		"/>
		<polygon fill="#E6EEF4" points="796.3,337.2 796.1,337.4 796.3,337.6 796.8,337.6 797,337.4 797.2,337.6 797.6,337.4 797.6,337.2
			797,337 		"/>
		<polygon fill="#E6EEF4" points="795.5,372.4 795.1,371.5 794.9,371.8 794.9,372.2 794.7,372.6 795,373 795.1,373.4 795.3,372.8
			"/>
		<polygon fill="#E6EEF4" points="803.4,359.2 803.5,359.4 804,359.3 804.1,358.9 803.7,358.6 803.5,358.9 803.1,359 803.3,358.7
			803.2,358.5 802.5,358.4 801.9,358.8 801.9,359.3 802.3,359.6 802.7,359.3 803.1,359.6 		"/>
		<path fill="#E6EEF4" d="M802.8,360.6c0,0,0.1-0.3,0.1-0.3l-0.4,0.2L802.8,360.6z"/>
		<polygon fill="#E6EEF4" points="803,379.8 803.5,379.7 803.8,379.4 804.4,378.8 804.2,378.7 803.8,378.9 803.4,378.8 803.1,378.9
			803.3,379.2 802.7,379.6 		"/>
		<polygon fill="#E6EEF4" points="804.7,379.2 804.4,379.5 804.8,379.5 805.1,379.7 805.5,379.2 805.5,378.9 805.2,379.2 		"/>
		<path fill="#E6EEF4" d="M799.4,355.9c0,0-0.4,0.1-0.5,0.1l0.4,0.2L799.4,355.9z"/>
		<polygon fill="#E6EEF4" points="806.9,353.2 807.1,352.7 807.5,352.7 807.8,352.3 808.2,352.1 808.4,351.6 808.6,351.2 808.9,351
			808.6,350.7 808.5,350.4 807.7,350.2 807.2,350.4 807.1,350.9 806.7,351.2 806.6,351.5 806.1,352 805.6,352 805.3,352.4
			804.7,352.6 803.4,352.3 802.2,352.2 802,352.5 801.8,352.6 801.2,352.1 800.8,352 800.3,352.1 799.8,352 799.1,351.8
			798.7,352.1 798.3,351.8 797.7,351.3 796.9,351.1 796.4,351.2 796.4,351.8 796,352 795.8,352.6 795.4,352.9 794.7,352.7
			794,352.8 793.8,353.1 793.8,353.3 793.1,354 793.1,354.8 793.3,355.2 793.2,356.2 793.1,356.5 793.4,357.1 793.4,357.7
			793.2,357.4 793.1,357 792.7,357.1 792.3,357.5 791.9,357.7 791.8,358.3 791.9,358.9 791.7,359.3 791.8,360.5 791.7,360.8
			791.6,361.2 791.2,361.4 791.3,362.1 790.6,362.6 790.4,363.3 790.5,363.5 790.3,363.9 790.6,364.8 790.9,365.3 791.1,365.1
			791.5,365.1 791.8,364.9 792.1,365.1 792.3,365.8 792.8,367 792.6,367.4 792.4,368.1 792,368.7 791.9,369.9 792,370.8
			792.3,370.8 792.7,371.1 793.3,371 793.5,370.7 794.1,370.9 794.5,370.8 794.9,371 795,370.6 794.9,370 794.5,369.8 794.4,369
			794.7,368.5 794.9,367.6 794.8,366.8 794.5,366.5 795.1,365.7 795.3,365 795.1,364.1 794.7,363.8 794.7,363.6 795.3,363.2
			795.6,362.8 796.1,362.7 796.7,362.9 796.6,363.2 796.9,363.6 796.9,364.2 796.5,364.7 796.3,365.2 796.6,365.7 797,365.8
			797.4,366.2 798,366.6 798.1,367.1 797.9,367.1 797.7,368.1 797.9,368.7 798.3,368.8 798.6,368.7 799.3,369 799.7,368.9
			799.7,368.7 799.5,368.3 800,367.8 800.5,367.7 801.2,367.3 802,367.4 802.3,367.1 802.5,367.2 802.9,367.2 803.1,366.8
			803.1,366.6 802.3,366.5 802.1,366.6 801.9,366.5 801.4,366.6 801.3,366.2 801.1,366.1 801.1,365.9 800.8,365.8 800.6,366
			800.6,365.7 800.1,365.5 799.9,365.2 800.3,364.9 800.4,364.6 800.6,364.7 800.4,364.3 800.7,364.3 800.8,364 800.5,363.8
			800.1,363.6 800.3,363.4 800.2,363.1 799.8,362.8 799.4,362.7 799.3,362.2 798.5,361.3 798.1,361 797.8,360.5 797.8,360.3
			798.1,360.3 798.2,360.6 798.7,360.6 799.1,360.3 799.3,359.9 800.4,359.5 801.2,358.9 801.6,358.3 802.1,358 802.1,357.6
			802.7,357.5 803.2,357.8 803.6,357.8 804,357.1 804,356.7 803.5,356.5 802.2,356.6 801.7,357 800.9,357 800.5,357.1 800,357.6
			799.4,357.6 799.1,357.7 798.5,357.3 798,357.2 797.5,357.9 797.1,358.8 796.6,359.1 796,359 795.8,358.8 795.1,358 794.4,357.3
			794,356.4 794.1,355.3 794.5,354.2 795,353.7 795.7,353.5 796.4,353.9 797.3,353.9 798.3,353.4 799,353.5 799.3,353.8
			799.8,353.8 800.2,353.6 801.4,353.8 802,353.7 802.1,353.6 802.8,353.6 803.2,353.8 803.3,354.1 803.9,354.3 806,353.8 		"/>
		<polygon fill="#E6EEF4" points="803.2,360.2 803.6,360.3 803.5,360 		"/>
		<polygon fill="#E6EEF4" points="804.3,359.8 804.2,359.4 803.9,359.7 		"/>
		<polygon fill="#E6EEF4" points="822.5,360.7 823.2,360.5 823,360.4 823,360 822.7,359.7 821.7,360 821.3,360.2 821.6,360.4 		"/>
		<polygon fill="#E6EEF4" points="815.2,356.2 814.8,356.2 814.6,356.4 814.6,356.7 814.9,357.2 815.4,357.2 815.7,357.5 816,357.2
			815.8,357 815.4,356.8 815.5,356.4 		"/>
		<path fill="#E6EEF4" d="M798.8,369.4l0,0.4l-0.2,0.2l0.2,0.6l0.2,0.1l0.4-0.3l-0.1-0.6l-0.3-0.5
			C799,369.3,798.8,369.4,798.8,369.4z"/>
		<polygon fill="#E6EEF4" points="795.6,375.4 795.3,375.2 795,375.4 795.4,375.6 		"/>
		<polygon fill="#E6EEF4" points="806,379.2 806.5,379.3 807.4,379 807.7,378.6 807.5,378.5 806.7,378.5 806.4,378.4 805.9,378.6
			806.1,378.8 805.9,379 		"/>
		<polygon fill="#E6EEF4" points="798.5,356.2 798.8,356.5 799.2,356.4 798.8,356.2 		"/>
		<polygon fill="#E6EEF4" points="818,349 818.4,348.6 818.2,348.2 817.9,347.9 817.5,348.2 817.1,348.4 817.3,349.2 817.6,349
			"/>
		<path fill="#E6EEF4" d="M800.1,370.1l0.2,0.2l0.5-0.1l0.1-0.2l0.2-0.1l0.1-0.5l0.4-0.4l0-0.3l-0.3-0.5l-0.5,0.2l-0.4,0.4l0.2,0.3
			l-0.5,0.6C800.1,369.8,800.1,370.1,800.1,370.1z"/>
		<polygon fill="#E6EEF4" points="852.4,374 852.4,373.6 852.6,372.8 852.9,362.4 852.9,362.4 852.4,362.5 852.1,362.4 852.1,362.1
			852.2,361.8 851.7,361.5 851.2,361.6 850.6,361.4 850.2,361.3 849.8,361.4 848.1,360.7 847.4,360.5 846.9,360.4 846.4,360
			845.4,359.8 844.5,359.4 844.1,359 843.4,358.9 842,359.7 841.9,360 842.2,360.5 842.1,360.9 841.3,361 840.8,361.2 840.4,361.2
			840.2,361.1 840,361.4 839.9,361.9 839.4,362.2 838.8,362.3 838.5,362.8 838.5,363.5 838.2,363.6 837.9,363.9 837.7,364.4
			837.2,364.6 836.7,364.6 836.4,364.3 835.8,363.8 835.6,363.3 835.4,363.4 835.3,362.9 835.3,362.3 834.9,362.1 834.7,362.4
			834.7,363.1 834.5,363.1 834.2,362.7 833.8,362 833.8,360.7 833.6,360 833.9,359.5 834.2,359 834.1,358.5 833.6,358.1
			833.6,357.4 833.8,357.1 833.5,356.9 832.6,356.8 831.7,356.8 830.8,356.2 829.4,355.7 828.5,355.9 828.3,356.1 827.6,356.6
			827.2,356.7 826.8,357.1 826,357.1 825.6,357.5 825.8,357.8 825.7,358.2 825.1,358.7 825,359 825.6,359.1 826.1,358.9
			826.2,358.6 826.5,359 827.3,359.4 827.6,359.9 827.5,360.1 827.6,360.7 828.2,361.2 828.7,361.3 829.2,361.2 829.6,361.4
			829.9,361.2 830.2,361.3 831.1,361.2 831.4,361.2 831.7,361.2 831.5,360.9 832.9,361 833.1,361.4 833,362 832.7,361.9
			832.4,362.3 832.2,362.8 831.8,362.3 831,361.9 830.6,362.1 830.4,362.7 829.8,363.1 829.4,362.8 828.8,362.8 828.6,362.6
			828,362.6 827.6,363 827.8,363.3 828.5,363.4 829,363.7 829.2,364.4 829.4,364.6 829.8,364.4 829.9,364.8 829.8,365.2
			829.6,365.3 829.5,365.6 830,366.6 830.5,366.7 831,366.6 831.6,365.9 831.5,365.5 831.9,364.7 832.2,364.6 832.3,364.2
			832.5,363.6 832.8,363 832.8,363.7 832.4,364.1 832.7,364.7 832.8,365.4 833.2,365.7 833.3,365.5 833.5,365.4 833.7,365.5
			833.8,366.1 834.1,365.8 834.2,365.9 834.4,366.1 834.8,366.2 835.3,366 835.7,366.1 835.7,366.2 835.5,366.2 835.1,366.2
			835,366.6 835.6,366.8 835.7,367 835.8,367.2 836.5,367.6 837.3,367.6 839,368.1 840.7,368.6 841.2,368.6 841.9,368.8
			842.1,369.3 842.9,369.6 843.4,369.6 843.8,369.4 843.3,369.9 843.5,370.1 843.8,370 844,370.2 844.7,370.1 844.2,370.4
			844.5,370.6 844.4,370.9 844.7,371.1 845.2,371 844.6,371.5 844.6,371.7 845.3,372.4 845.1,373 845.3,373.3 845.7,373.6
			846.5,374.2 846.7,374.4 846.3,374.4 846,374.4 845.9,374.8 846.3,375.1 846.8,375.4 847.4,375.3 847.8,375.4 847.5,375.4
			846.9,375.7 846.7,375.6 846.4,375.6 846.7,376 847,376.2 846.9,376.9 846.8,377.1 846.8,377.4 846.6,377.8 846.4,378
			846.7,378.4 847.4,378 847.6,378.3 848,378.3 848.5,378 849.3,378.1 849.7,377.9 849.8,377.3 849.8,377.9 849.6,378.3
			849.7,378.7 849.9,378.9 850.5,379.4 850.5,379.6 850.7,380 851.4,380.8 852.1,381 852.3,381 852.5,374.3 		"/>
		<polygon fill="#E6EEF4" points="765.1,359.1 765.5,359 766,358.4 765.6,358.1 764.9,358.1 765,358.4 764.9,358.8 		"/>
		<polygon fill="#E6EEF4" points="776,375 775.5,374.8 774,374.8 773.8,374.6 773.4,375.1 773.9,375.7 774.3,375.8 774.7,375.6
			775.6,375.6 776.1,375.4 776.8,375.3 777,375 776.7,374.9 		"/>
		<polygon fill="#E6EEF4" points="780.7,374.9 781,374.9 781.2,374.9 781.1,374.8 780.7,374.6 780.2,374.5 780,374.7 780,374.9
			780.4,375.3 		"/>
		<polygon fill="#E6EEF4" points="783.9,379 783,378.7 782.5,379.1 782.3,379.9 781.8,379.9 781.6,380 781.8,380.3 782.7,380.5
			783.2,380.3 783.6,380.5 783.5,380 783.8,379.6 		"/>
		<polygon fill="#E6EEF4" points="764.7,356.2 764.1,356 764,356.1 764.1,356.4 764.6,356.5 764.8,356.4 		"/>
		<polygon fill="#E6EEF4" points="763.1,360 763.5,360.2 763.7,359.9 763.4,359.7 763,359.7 		"/>
		<polygon fill="#E6EEF4" points="783.7,364.9 783.6,364.8 783.5,365 783.5,365.7 783.6,365.7 		"/>
		<polygon fill="#E6EEF4" points="783.4,365.8 783.3,364.8 783.2,364.6 782.9,364.8 782.6,365.6 782.6,366.4 782.8,366.7
			783.2,366.4 		"/>
		<polygon fill="#E6EEF4" points="838.8,358 839,358 839.2,358.1 839.9,358 839.6,357.7 839.2,357.5 838.9,357 838.4,356.7
			838,356.7 837.2,356.5 837.3,356.7 837.7,357.2 837.7,356.9 838,356.9 838.5,357.5 838.4,357.9 		"/>
		<polygon fill="#E6EEF4" points="780.8,380.2 781.1,380 780.9,379.7 780.7,380 		"/>
		<polygon fill="#E6EEF4" points="782.1,375.7 782,375.8 781.6,375.7 781.7,375.9 782.1,375.9 		"/>
		<polygon fill="#E6EEF4" points="783.5,362.1 783.9,362.2 784.1,361.8 784,361.4 783.7,361.4 783.5,361.3 783.9,361.1 783.9,360.6
			783.8,360.5 783.2,360.5 783.4,360.2 783.3,359.9 783.7,360 784.2,359.8 784.2,359.3 784.7,358.8 784.8,358.2 784.6,357.8
			784.9,357.9 785.1,358.5 785.6,358 785.9,357.5 785.7,356.7 786.4,356.2 786.6,355.2 786.8,354.8 786.9,353.8 787.2,353.5
			787.2,353.1 787.8,352.5 788,352.8 788.2,352.5 788,351.8 788.9,352.7 789.6,352.8 790,352.4 790.4,352.6 790.7,352.4 790.8,352
			790.4,351.8 790.2,351.5 789.8,351 789.4,351 788.2,349.9 787.8,349.6 787.6,349.2 787.4,349 787.5,348.6 788.2,348.5
			788.5,347.9 788.1,347.6 787.2,346.6 787,346 786.5,345.6 786.7,345.2 787,345.1 786.9,344.8 786.7,344.7 786.2,344.2 786.5,344
			787.1,344.1 787.7,344 787.2,343.3 786.6,343.1 786.8,342.8 786.7,342.5 787,342.5 787.1,342.3 786.5,342.2 785.7,342.2
			785.4,342 784.1,341.9 783.3,342 782.8,341.8 782.2,342.5 782.3,342.9 782,343.4 782,343.8 781.4,345.9 780.5,347.2 780.1,348.4
			779,350 779.1,350.5 777.8,350.7 776.6,351.3 775.9,351.3 775.7,351 775,350.6 773.7,350.7 773.3,351 771.7,351.6 770.2,351.6
			769.8,351.8 769.1,351.7 769,352 768.2,352.3 767.8,352.2 767.6,351.7 766.9,351.1 766.8,350.9 766,350.3 765.4,349.3 765,349.4
			764.7,349.8 764,350.7 763.6,351.5 763.5,351.9 763.7,352.2 763.6,352.6 763.2,352.8 763.3,353.8 764.1,354.9 764.4,355.3
			764.1,355.1 763.9,355.3 764.3,356 764.8,356.1 765.2,356 766,355.9 766.8,355.5 767.3,355.6 766.8,355.6 766.1,356.1
			765.1,356.3 764.7,356.7 764.2,356.7 764.2,357 764.9,357.1 765.6,357.5 766.4,358.3 766.6,358.8 766.7,359.3 766.3,359.8
			766,360.2 766.1,360.6 766.6,360.9 766.8,362.1 766.8,362.8 767.1,363.6 767.4,363.6 767.8,363.2 768,363.5 768.6,363.6
			769,363.7 769.7,363.7 770.2,363.3 770.5,363.6 770.9,363.3 771.1,362.8 771.1,362.5 771.3,362.9 771.2,363.4 771.4,364
			771.5,365 771.4,365.4 771.8,365.4 772.5,364.6 772.8,364.5 773.1,364.8 773.5,364.7 773.6,364.5 774.3,364.4 774.7,363.9
			775,363.9 775.5,364.2 775.8,364 776.1,364.2 776.1,364.7 776.3,365 776.9,365.1 776.7,364.7 776.9,364.3 777.1,364.7
			777.5,364.9 777.8,364.7 778.1,365.1 778.4,365 778.5,365.2 778.7,365.6 778.6,366 778.8,366.8 779.3,366.7 780.5,366.2
			781.3,366 782.2,365.4 782.8,364.3 782.8,364 783,363.3 783.1,363.5 783.4,363.5 783.8,362.6 783.6,362.4 783.4,362.2 783.4,362
					"/>
		<polygon fill="#E6EEF4" points="781.4,378.9 780.8,378.2 780,378 779.2,378.3 778.6,378.1 778,378.3 778,378.7 778.3,379.1
			779,379.2 779.7,379.8 779.8,380.1 780.1,379.7 780.5,379.5 780.7,379.3 781.2,379.2 		"/>
		<polygon fill="#E6EEF4" points="765.6,357.9 765.6,357.7 765.3,357.7 765,357.4 764.3,357.2 764.3,357.5 764.7,357.9 764.9,357.9
					"/>
		<path fill="#E6EEF4" d="M824.2,376.4L824.2,376.4C824.2,376.4,824.2,376.4,824.2,376.4z"/>
		<polygon fill="#E6EEF4" points="836.5,359.4 836.9,359.2 836.1,359.2 		"/>
		<polygon fill="#E6EEF4" points="824.2,376.1 824.6,376.2 824.9,376.2 824.9,376 		"/>
		<polygon fill="#E6EEF4" points="825.2,357.6 824.8,357.4 824.2,357.8 824.2,358.6 824.8,358.7 825,358.5 		"/>
		<polygon fill="#E6EEF4" points="835.3,357.6 835.6,357.9 836,357.8 835.6,357.5 		"/>
		<polygon fill="#E6EEF4" points="824.9,378.2 825,378.1 824.7,378 824.2,378.4 824.1,378.6 824.5,378.5 		"/>
		<polygon fill="#E6EEF4" points="825.3,355.8 825.7,355.9 826.2,355.7 826.1,355.3 825.4,354.9 824.5,354.9 824,355.3 823.5,355.3
			823.3,355.4 823.5,355.6 823.1,355.7 823.9,355.8 824.4,356 824.9,356 824.9,355.7 824.4,355.5 824.4,355.4 824.5,355.3 		"/>
		<polygon fill="#E6EEF4" points="820.2,355 820.9,355.5 820.9,355.2 819.8,354.6 		"/>
		<polygon fill="#E6EEF4" points="818.5,351.9 818.9,350.9 818.9,350.5 818.6,350.2 817.7,350.5 816.8,350.9 816.8,351.3
			817.1,351.3 816.8,351.6 816.3,351.8 816.2,352.3 815.8,352.3 815.6,351.8 816,351.4 816.4,351.4 816.7,350.7 816.7,349.9
			816.2,349.7 816.1,349.4 816.5,348.9 816.6,348.5 816.3,348.5 815.4,349.4 815.3,350.2 815.3,350.9 815,351.1 814.8,351.8
			815.1,352.2 815.4,352.8 815.2,353.1 815.1,353.7 815.6,354.1 815.5,354.5 815.6,354.8 815.4,355.4 815.8,356 816.4,356.4
			816.8,357.3 817.3,357.5 817.4,357.9 817.5,357.6 817.7,357.5 817.5,357.2 816.8,356.6 816.6,355.8 816.1,354.9 816.1,353.9
			816.5,353.7 817.2,353.9 817.9,353.9 818.3,354.2 818.8,354.2 818.5,354 818.4,353.6 817.7,353.1 817.4,353 817.2,352.7
			817.5,352.2 		"/>
		<path fill="#E6EEF4" d="M837.5,359.6l0.9,0.4l1.3,0.2l1.2-0.2l0.3-0.2l-0.9-0.2l-0.5,0.1l-0.8-0.2l-0.6,0.3l-1-0.4
			C837.3,359.4,837.5,359.6,837.5,359.6z"/>
		<polygon fill="#E6EEF4" points="824.8,357 824.4,357.1 824.6,357.3 		"/>
		<polygon fill="#E6EEF4" points="823.3,357.3 823.8,357.5 824.4,357.4 823.9,357.2 		"/>
		<polygon fill="#E6EEF4" points="829.4,371.2 829.4,371.6 829.6,371.8 829.6,371.2 829.2,370.7 		"/>
		<polygon fill="#E6EEF4" points="835,370.7 834.7,370.4 834.5,370.4 834.8,370.7 		"/>
		<polygon fill="#E6EEF4" points="829.9,371.6 829.7,371.9 830.1,371.8 830.4,370.6 830.7,370.1 830.1,370.4 		"/>
		<path fill="#E6EEF4" d="M834.8,373.6l-0.1-0.3l-0.3-0.2c0,0-0.2,0.1-0.2,0.1l0,0.3l0.2,0.2L834.8,373.6z"/>
		<polygon fill="#E6EEF4" points="835.1,374.1 835.1,373.8 834.8,374.1 835,374.2 		"/>
		<polygon fill="#E6EEF4" points="835.1,372.3 835,372.2 835,372.1 834.9,371.8 834.7,371.8 834.2,372 833.8,372.3 833.9,372.5
			834.5,372.8 834.7,373 835,372.6 		"/>
		<polygon fill="#E6EEF4" points="833.5,371.2 833.4,371.4 833.6,371.4 833.6,371.2 		"/>
		<polygon fill="#E6EEF4" points="834.1,370.5 833.9,371 833.6,371 833.9,371.1 834,371.3 834.2,371.3 833.9,371.5 833.9,371.9
			834.1,371.9 834.5,371.6 834.8,371.6 835,371.3 835,370.9 834.7,370.8 834.4,370.6 		"/>
		<polygon fill="#E6EEF4" points="809.2,360.4 809.8,360.6 811,360.3 811.7,360.2 811.1,360.1 810.1,359.9 809.7,360.1 809.3,360
			809,360.1 809.2,360.2 		"/>
		<polygon fill="#E6EEF4" points="809.1,378.7 809,378.5 808.8,378.7 808.9,378.8 		"/>
		<polygon fill="#E6EEF4" points="810.3,360.9 810.4,361.3 810.6,362 810.9,362.1 810.9,361.8 810.5,361.2 810.5,360.8 		"/>
		<polygon fill="#E6EEF4" points="833.3,372.4 833.7,372.9 834.1,373.1 834.2,373 833.8,372.5 833.7,372.2 833.3,372.1 		"/>
		<polygon fill="#E6EEF4" points="808.4,360.3 808.8,360.4 808.8,359.9 808.4,359.8 808.1,360 807.7,359.8 807.2,359.7 806.8,359.8
			806.6,359.8 806.2,360.1 806.2,360.4 806.4,360.7 806.9,360.8 807.5,360.5 807.9,360.6 		"/>
		<polygon fill="#E6EEF4" points="833.3,373.8 833.2,374.3 833.5,374.6 833.8,374.5 834.3,374.1 834.4,373.8 834.1,373.7
			833.9,373.3 833.4,372.9 833.2,372.7 833.3,372.9 833.3,373.5 833.5,373.7 833.6,374 833.4,373.8 		"/>
		<polygon fill="#E6EEF4" points="826.5,375.4 826.1,375.4 825.9,375.6 825.9,375.8 825.1,376.4 825.1,376.7 825.2,376.9
			824.9,377.2 824.9,377.6 825.3,377.9 825.6,377.8 826.3,377 826.5,376.3 826.4,375.9 826.5,375.6 		"/>
		<polygon fill="#E6EEF4" points="845.8,378.3 845.6,378.7 845.8,378.7 846.3,378.9 846.5,378.8 846.3,378.1 846.1,378.1 		"/>
		<polygon fill="#E6EEF4" points="807.8,382.3 808.1,382.2 808.2,382.1 808.7,381.6 809.1,381.5 809.6,381.5 810.8,381.3
			811.6,380.8 812.4,380.6 812.6,380.3 812.9,380.2 813.4,379.9 813.5,379.6 813.2,379.4 812.1,379.6 811.5,379.6 810.9,379.7
			810.3,379.7 809.5,379.9 808.4,379.8 807.5,380.6 806.8,380.9 806.6,381 806.1,381.2 805.8,381.3 805,381.3 804.6,381.8
			804.4,381.9 803.9,382.2 803.7,382.8 803.2,383.7 803.1,383.9 803.3,384.1 803.4,384.4 803.1,384.4 802.9,384.2 802.7,384.8
			803,385 803.9,384.9 804.7,384.4 805.2,384.3 805.6,384.3 806.1,383.9 806.5,383.4 807.5,382.6 		"/>
		<polygon fill="#E6EEF4" points="818.9,378.7 818.6,378.6 818.1,378.6 818.4,378.8 		"/>
		<polygon fill="#E6EEF4" points="819.3,364.8 820.5,364.9 820.8,364.5 821.4,364.5 822.5,365.2 823,365.3 823.6,365.9 824.1,365.9
			824.4,365.4 824.1,364.4 822.7,363.6 821.6,363.4 821,362.9 820.4,362.9 819.9,363.3 819.3,363.3 818.9,363.1 818.1,363.2
			817,363.1 816.7,363.5 816.7,363.8 816.2,363.9 816,364.4 816.2,364.8 816.5,364.8 817,364 817.4,364.4 817.7,364.8 818.2,364.8
			818.7,364.2 819,364.2 		"/>
		<polygon fill="#E6EEF4" points="798,385.3 797.7,385.7 798.3,385.7 798.6,385.6 798.5,385.3 798.2,385.1 		"/>
		<path fill="#E6EEF4" d="M799.7,380.1l0.4,0.1l0.2-0.3l0.6-0.1l0.4-0.5l0.4-0.2l0.3-0.5l-0.1-0.5l-0.6-0.2l-0.5,0.3l0.2,0.1
			l-0.3,0.5l-0.5,0.2l-0.3,0.4l-0.6,0.1l-0.4-0.3l-0.8,0l-0.6,0.2l-0.8-0.5l-0.7-0.2l-0.4,0.1l-0.7-0.3l-1.4,0.3l-0.8,0.5
			c0,0-0.2,0.5-0.1,0.5l0.2,0.5l0.5,0.1l0.4,0l0.4,0.1l0.4-0.1l0.4,0.1l0.3,0.3l0.5-0.2l0.3,0.2l0.4,0l0.1-0.1l0.6-0.3l0.9,0.2
			l0.8-0.4L799.7,380.1z"/>
		<polygon fill="#E6EEF4" points="818.3,365.3 818.2,365.1 817.9,365.2 818,365.4 		"/>
		<polygon fill="#E6EEF4" points="827.4,374.6 827.1,375 827.6,374.7 		"/>
		<polygon fill="#E6EEF4" points="827.3,375.5 827.1,375.3 826.6,375.2 		"/>
		<path fill="#E6EEF4" d="M784.3,380.9l0.5,0.2l0.7-0.2l0.4,0.2l0.6-0.2l0.2-0.3l0.5,0.2l0.6-0.3l0.6,0.1l0.6-0.5l0.2,0.4l0.5-0.1
			l0.8,0.1l-0.4-0.3h0.7l0.1-0.6l-0.2,0.2l-0.2-0.5l0.1-0.4l-0.6-0.2l0.1,0.4l-0.3,0.1l-0.1-0.5l-0.6-0.3l-0.6,0.2l-0.5-0.3
			l-0.5-0.2l-0.7,0.4l0,0.3l1.1,0.4l0.4,0.4l-0.7,0.1l-0.4,0.2l-0.7-0.4l-0.1-0.5l-0.4-0.1l-0.5,0.1l-0.5-0.1l-0.8,0.3
			c0,0-0.4,0.4-0.4,0.4l-0.1,0.3l0.2,0.2l-0.2,0.2L784.3,380.9z"/>
		<polygon fill="#E6EEF4" points="817.9,375.6 818,375.4 817.7,375.2 817.5,375.4 817.6,375.6 		"/>
		<polygon fill="#E6EEF4" points="817.7,365.2 817.4,365.2 817.5,365.5 817.7,365.5 		"/>
		<polygon fill="#E6EEF4" points="815.9,378.8 816.6,378.5 816.6,378.3 816.1,378.3 815.3,378.3 815.4,378.5 		"/>
		<polygon fill="#E6EEF4" points="744.6,369.9 744.2,370.1 745,370.6 744.9,370.2 		"/>
		<polygon fill="#E6EEF4" points="731.4,350.7 731.1,350.6 730.8,350.9 730.3,350.9 730.9,351.6 731,352.2 731.4,352.3 732,353.2
			732.2,353.1 732.3,352.4 732.5,352 731.8,351.5 		"/>
		<polygon fill="#E6EEF4" points="737,361.1 737.3,361.5 737.9,361.7 737.3,360.8 		"/>
		<polygon fill="#E6EEF4" points="739.7,363.5 739.1,363.1 738.7,363.6 739.8,364.5 739.6,364 		"/>
		<polygon fill="#E6EEF4" points="734.8,357.8 734.2,358.2 734.2,358.7 734.8,358.9 735.6,360 736.3,360.2 736.3,359.2 735.4,358
			"/>
		<polygon fill="#E6EEF4" points="730.6,348.7 730.2,348.8 730.9,349 		"/>
		<polygon fill="#E6EEF4" points="735.1,354.8 735.2,354.5 734.5,354.2 734.2,354.7 734.9,354.7 		"/>
		<polygon fill="#E6EEF4" points="734.3,356.4 733.9,356.2 733.6,356.8 733.9,357.2 734.3,356.8 		"/>
		<polygon fill="#E6EEF4" points="738.3,362.5 738.4,363.1 738.8,362.7 		"/>
		<polygon fill="#E6EEF4" points="820.4,373.9 820.1,374.1 820.5,374.1 		"/>
		<polygon fill="#E6EEF4" points="753.4,370.5 753.9,371.3 754.2,371.4 754.6,371.1 754.5,369.8 754.8,368.3 754.5,367.3 755,366.2
			754.7,365.8 754.8,364.9 755.3,364.6 755.5,364.2 755.4,363.7 755,363.5 754.5,363.1 754.3,362.5 753.9,362.3 753.8,361.9
			753.3,361.6 752.4,361.7 751.9,361.7 751.8,360.8 751.4,360.3 751,360.5 751.3,360 751.1,359.4 751,358 750.3,358.3 750,358
			749,358 748,357.4 748,356.9 748.6,356.6 749.2,356.3 748.8,356 748.2,356.1 747.9,356 747.3,356.2 747.7,355.8 748.4,355.3
			749.2,355.2 749,354.6 748.2,353.7 747.7,353.6 747.1,354.1 746.5,354.4 745.8,354.5 746.2,354.4 746.4,354.1 746.7,354.1
			747,353.7 746.8,353.3 746.2,353 745.2,353.1 744.5,352.5 744.5,352.1 744.5,351.4 743.3,350.2 742.9,350.2 742.6,350.3
			742.1,349.9 742,348.9 741.2,348.1 740.1,347.5 739.5,347.5 739.3,347.7 739,347.5 738.8,346.8 738.5,347.1 738.2,346.7
			738.1,345.9 737.6,345.3 737,345.2 736.8,344.8 735.2,343.7 734.7,343.7 734,342.9 733.4,342.8 733.2,342.4 733,341.5
			732.5,341.2 732.1,340.5 731.9,340.5 731.5,339.7 730.9,339.5 730.3,339.5 729.9,339.6 729.6,339.4 728.9,339.4 728.1,339.6
			727.7,339.4 726.4,338.5 725.3,338.3 724.9,338.5 724.7,338.8 724.9,339.6 725.6,341.2 726,341.4 727.2,342.7 727.6,342.7
			728.3,343.6 728.7,343.8 729.1,343.6 730,344.4 731,345.9 732,346.9 732.2,346.9 732.2,347.6 732.5,347.8 732.6,348.5 733,348.9
			733.5,348.9 734.3,349.8 734.7,350 735,350 735.1,350.3 734.9,350.6 735.2,351 735.5,351.7 735.5,351.9 736,353.4 736.3,354.2
			737,354.4 737.8,355 737.8,355.5 738.5,356.7 739.2,357.1 739.3,358.5 740.3,360.4 740.3,361.2 740.5,361.9 741.5,362.7
			742.5,363.9 742.8,364.6 743.6,364.8 743.9,365.1 744.6,365.5 744.7,366.4 745.3,366.7 746,367.5 747.2,368.3 747.5,368.9
			748.3,369.1 750,370.6 750.1,371.2 750.5,371.3 750.9,372 751,371.7 751,371.2 750.9,370.9 750.9,370.6 751.4,370.7 752.5,371.7
			752.7,371.5 752.7,370.8 752.9,370.4 		"/>
		<polygon fill="#E6EEF4" points="822,372.8 821.8,372.7 821.7,373.1 		"/>
		<polygon fill="#E6EEF4" points="820.9,377.9 821.3,377.8 821.2,377.3 820.8,377.1 820.5,377.3 820.5,377.6 		"/>
		<polygon fill="#E6EEF4" points="753.1,373.7 752.8,373.7 752.9,373.9 753.1,373.9 		"/>
		<polygon fill="#E6EEF4" points="821.4,378.1 820.8,378.4 821.2,378.4 		"/>
		<polygon fill="#E6EEF4" points="769.8,378.5 770.5,379 771.1,378.5 771.9,378.6 772.6,379 773.4,379 774.2,378.6 774.7,378.6
			775.2,379.2 775.8,379.3 776.5,379.9 777.1,379.8 777.5,380.3 777.8,380.2 777.7,379.3 777.4,379.1 777.7,378.8 777.8,377.5
			777.5,377.2 777,377.1 776.9,376.9 776.5,377 776.1,377.2 775.6,377.2 775.2,376.9 774.6,377.2 774,376.9 773.6,376.4 773.6,376
			773,375.3 773,374.6 772.3,374.6 771.9,374.8 771.5,374.3 771,374.4 770.4,373.8 770.1,373.6 769.6,373.7 769.1,373.7 768.4,373
			767.9,373 767.7,374.1 767.4,374.6 766.1,374.8 764.7,374.5 763,374.6 762,374.1 761.8,373.9 761.9,373.4 761.6,372.8
			760.4,372.6 759.4,372.4 758.8,372 758,371.9 757.7,372.2 757.5,372.4 757.1,372.1 756.2,371.9 755.5,371.9 755.3,371.7
			754.7,372.3 754.8,372.9 754.5,373.5 753.9,373.6 753.9,374.1 753.4,374.3 753.2,374 753,374.1 753,374.4 753.4,374.6
			754.5,374.6 755.1,374.4 755.4,374.9 755.8,375.1 756.1,374.9 756.5,374.9 756.2,375.2 755.9,375.9 756.1,376.1 756.8,376.2
			757.5,376.5 758,376.2 758.4,376.4 759.2,376.4 760.1,377.1 761.3,377.4 761.8,376.8 762.2,376.8 762.6,377.3 763.2,377.4
			763.5,377 763.9,376.9 764.6,377.4 765.4,377.4 766.8,378.2 768.2,378.8 768.8,378.5 		"/>
		<polygon fill="#E6EEF4" points="751.4,351.2 751.1,351.4 750.7,351.4 750.5,351.9 751.1,352.1 751.2,352.8 751.6,352.7
			751.8,351.8 751.5,351.5 751.7,351.1 		"/>
		<polygon fill="#E6EEF4" points="752.4,356.2 752.7,356.1 751.8,355.3 751.4,355.2 751.1,355.7 751.3,356 751.8,355.9 		"/>
		<polygon fill="#E6EEF4" points="749.9,352.1 750.2,351.6 750.1,351.2 749.3,351.9 		"/>
		<polygon fill="#E6EEF4" points="751.6,356.9 751.4,356.4 750.9,356.4 750.6,356.7 751.1,357.2 		"/>
		<polygon fill="#E6EEF4" points="816.9,365.8 817.2,365.2 816.9,365.1 816.6,365.3 816,365.5 816.3,365.8 816.8,365.6 		"/>
		<polygon fill="#E6EEF4" points="742.8,349.1 742.3,349.2 742.6,350.1 743.1,350 743.6,349.4 743.1,348.8 		"/>
		<polygon fill="#E6EEF4" points="755.8,346.6 756.1,346.5 755.8,346.2 		"/>
		<polygon fill="#E6EEF4" points="744.5,350.6 744.2,350.6 744.9,351.6 745.2,351.9 745.6,351.2 745.3,350.8 		"/>
		<polygon fill="#E6EEF4" points="726.4,346.3 726.2,346.6 726.1,346.9 726.6,347.3 727.2,347.2 726.9,346.7 		"/>
		<polygon fill="#E6EEF4" points="746.5,352.8 747.1,353.1 747.3,352.9 747.1,352.1 746.5,351.6 745.8,351.4 745.4,352.1
			745.5,352.7 		"/>
		<polygon fill="#E6EEF4" points="761.2,342.1 760.7,342.4 760.4,342.8 761,343.3 761.3,343.3 761.2,343.7 761.6,343.7 761.8,343
			"/>
		<polygon fill="#E6EEF4" points="760,364.3 760.5,363.6 760.8,364 761.2,364.1 761.4,363.7 761.8,363.5 761.5,363 760.6,362.4
			759.7,362.2 759.4,362.3 759.6,362.8 759.6,363.1 759,363.2 758.8,363.5 759.3,363.5 759.2,363.3 759.6,363.1 759.6,363.9 		"/>
		<polygon fill="#E6EEF4" points="757.9,363.5 757.6,363.3 757.5,363.8 		"/>
		<polygon fill="#E6EEF4" points="754.9,345.9 754.5,345.7 754.1,345.8 754.1,346.3 754.4,346.4 		"/>
		<polygon fill="#E6EEF4" points="756.3,362.2 755.7,361.5 755.5,360.3 755.3,360.1 755.2,359.6 754.8,359.4 754.4,359.4
			754.5,359.9 754.7,360.3 754.1,360.1 753.8,359.7 753.6,359.8 753.6,360.2 753.1,360.6 753.4,361.1 754.4,361.2 754.7,361.4
			754.7,362 755,362.2 755.2,362.9 755.8,363.3 756.4,363.3 756.6,363.8 756.8,364 757.1,363.6 756.9,363.1 757.2,362.4 		"/>
		<polygon fill="#E6EEF4" points="756.1,345.6 755.9,345.3 755.7,345.6 		"/>
		<polygon fill="#E6EEF4" points="755.8,344.5 755.8,345 756.1,344.7 		"/>
		<polygon fill="#E6EEF4" points="791.4,383.1 792,383 792.4,383.5 792.9,383.6 793.3,384.3 794,384.6 794.8,384.5 795.5,384.1
			795.4,383.8 795,383.3 794.5,382.6 794,382.6 793.8,382.1 793.1,381.8 792.6,382.1 792.1,382.1 791.4,381.5 790.2,382.1
			790.2,382.5 790.6,382.9 		"/>
		<polygon fill="#E6EEF4" points="802.7,369.7 802.3,369.6 802.1,369.2 802.3,369 802.6,368.7 802.7,368.5 802.9,368.7 802.9,368.4
			802.7,368.1 802.7,367.7 802.3,367.7 802.1,367.9 802,368.7 801.8,369.6 801.3,370.4 801.2,370.8 801.6,371 802,370.8
			802.3,370.3 802.6,370.2 802.8,370 		"/>
		<polygon fill="#E6EEF4" points="813.9,378.4 813.6,378.2 813.3,378.3 813.5,378.6 		"/>
		<polygon fill="#E6EEF4" points="802.5,378.6 802.2,378.9 802.5,379.1 802.6,378.8 		"/>
		<polygon fill="#E6EEF4" points="802.3,386 802.5,385.5 802.4,385.2 801.9,385.4 802,385.5 801.1,386 800.7,386.3 801.1,386.5
			"/>
		<polygon fill="#E6EEF4" points="802.3,384.2 802,384.7 802.3,384.8 802.5,384.2 		"/>
		<polygon fill="#E6EEF4" points="801.5,380 801.8,379.7 802.2,379.4 801.7,379.5 		"/>
		<polygon fill="#E6EEF4" points="814,376.2 813.8,376.4 813.8,376.7 814.4,376.3 		"/>
		<polygon fill="#E6EEF4" points="787.1,345.3 787.3,345.4 787.3,344.9 787,344.7 		"/>
		<polygon fill="#E6EEF4" points="814.3,357 814.2,356.9 814,357.3 814.5,357.5 		"/>
		<polygon fill="#E6EEF4" points="815.5,360 815.9,359.9 816.3,359.9 816.7,359.9 816.8,359.6 816.1,358.9 815.5,358.9 814.7,359.5
			815,359.8 		"/>
		<polygon fill="#E6EEF4" points="815.8,364.1 815.8,363.8 815.5,364.1 		"/>
		<polygon fill="#E6EEF4" points="816,363.5 816.3,363.5 816.4,363.2 815.9,363.2 		"/>
		<polygon fill="#E6EEF4" points="814.9,378.4 814.5,378.5 814.9,378.7 		"/>
		<polygon fill="#E6EEF4" points="743.5,337.5 743.1,337.8 742.7,337.5 742.2,337.6 741.6,338.1 740.9,337.9 740.9,337.5
			741.2,337.1 741.3,336.3 740.9,336 740.3,336 740.2,335.6 739.4,335.4 738.9,335 738.6,335.4 738.4,336.1 739,337 739.3,339.3
			739.6,340 739.9,340.7 739.8,341.6 739.6,341.8 739.7,342.4 740.1,342.8 740,343.1 740.3,343.5 741.1,344 741.5,344.7 742,345
			742.4,345.5 742,345.9 741.9,346.3 742.2,346.6 743.2,347 744.1,347.7 744,348.2 744.7,348.9 745.1,348.9 745.5,348.8
			745.8,349.1 746.2,349.6 747.1,350 748,350.2 748.3,350.6 748.9,350.9 749.1,350.7 749.3,351 749.8,350.6 749.8,350.5
			749.5,350.4 749.7,350.4 749.8,350.1 749.6,349.9 749.9,350.1 749.9,350.4 750,350.6 750.4,350.7 750.4,350 749.8,348.8
			749.6,348.8 749.7,348.6 749.5,348.4 749.3,348.2 749.2,347.4 749.3,347.2 749.2,346.9 748.7,346.9 748.1,346.3 747.8,345.6
			747.8,344.2 747.5,343.9 747.5,343.4 747.7,343.1 747.6,341.8 747.8,341.5 747.6,340.3 747,339.4 744.9,337.3 744.5,336.6
			744.3,336.6 744,336.9 743.6,336.9 743.6,336.9 743.5,337 		"/>
		<polygon fill="#E6EEF4" points="771.4,347.6 771.2,347 770.9,347 770.8,347.1 770.7,347.1 770.7,347.4 771.1,347.8 		"/>
		<polygon fill="#E6EEF4" points="785.6,334 786.2,333.9 786.2,333.4 785.9,333.4 785.4,333.8 		"/>
		<polygon fill="#E6EEF4" points="784.8,333.8 785.2,333.6 785.2,333.4 784.5,333.8 		"/>
		<polygon fill="#E6EEF4" points="770.4,347.5 770.5,347.5 770.6,347.1 770.6,347 770.4,347.4 		"/>
		<polygon fill="#E6EEF4" points="766.8,350.9 766.9,351.1 767.6,351.7 767.8,352.2 768.2,352.3 769,352 769.1,351.7 769.8,351.8
			770.2,351.6 771.7,351.6 773.3,351 773.7,350.7 775,350.6 775.7,351 775.9,351.3 776.6,351.3 777.8,350.7 779.1,350.5 779,350
			780.1,348.4 780.5,347.2 781.4,345.9 782,343.8 782,343.4 782.3,342.9 782.2,342.5 782.8,341.8 783.3,342 784.1,341.9 785.4,342
			785.7,342.2 786.5,342.2 787.1,342.3 787.1,342.1 787.8,342.5 788.2,342.7 788.8,342.3 789.5,342.2 789.5,341.9 788.8,341.3
			788.8,340.5 789.1,340.3 790.2,340.4 791.2,340.2 791.8,339.7 791.6,339.3 791.2,339.3 790.6,339.2 790.1,338.7 789.6,338.8
			788.9,338.1 788.5,338.1 788.1,338.5 787.8,338.3 788.4,337.8 788.1,337.4 787.9,337.5 787.5,338 787.3,337.7 787,337.6
			787.1,336.8 787.5,336.6 787.5,336.3 786.9,335.8 786.6,336 786.1,335.5 786.1,334.7 785.5,334.4 785.3,334.5 785.4,335
			784.8,335.6 784.6,335.6 784.8,335.1 784.7,334.6 784.3,334.6 783.9,335.8 783.5,335.9 782.9,337.3 782.8,338 781.8,339.1
			781.4,339.1 780.6,339.4 780.3,339.7 780.6,339.7 780.4,340 780.6,340.1 781.3,339.9 781,340.3 780.6,340.5 780.5,340.6
			780.5,340.9 780.9,341.8 780.6,342.3 780.3,342.1 780.2,341.4 780.1,340.9 780,340.9 780,340.8 779.8,340.8 779.5,341.3
			779.7,342.5 779.4,342.7 778.8,342.2 778.3,341.4 778.1,341.4 777.6,341.2 777.3,341.7 777.2,342.3 776.5,343 776.3,343.5
			775.5,344.3 775.3,344.8 774.6,345.6 773.9,346.3 771.6,346.8 771.4,346.9 771.5,347.6 771.8,347.9 771.4,347.8 771,348
			770.4,348.1 770.1,348.5 769.9,349 769.9,349.8 769.4,350.5 769.4,350.7 768.3,350.6 767.2,350.2 766.4,350.2 766.1,349.7
			765.6,349.2 765.4,349.3 766,350.3 		"/>
		<polygon fill="#E6EEF4" points="770.5,347.7 770.6,348 770.9,347.8 770.6,347.6 		"/>
		<polygon fill="#E6EEF4" points="738.3,338.5 738.4,339 738.7,339.4 738.9,339.3 738.8,338.9 738.5,338.5 		"/>
		<polygon fill="#E6EEF4" points="770.1,348.2 770.5,348 770.4,347.7 		"/>
		<polygon fill="#E6EEF4" points="778.3,341.4 778.8,342.2 779.4,342.7 779.7,342.5 779.5,341.3 779.8,340.8 780,340.8 780,340.6
			780,340 779.4,340.2 778.8,340.7 777.8,341 777.6,341.2 778.1,341.4 		"/>
		<polygon fill="#E6EEF4" points="780.3,342.1 780.6,342.3 780.9,341.8 780.5,340.9 780.5,340.6 780.3,340.8 780.1,340.9
			780.2,341.4 		"/>
		<polygon fill="#E6EEF4" points="748.7,325.7 749.1,325.5 749.2,324.7 749,324.6 748.8,324.2 748.3,324.5 748.6,324.9 748.5,325.2
					"/>
		<polygon fill="#E6EEF4" points="756.4,290.4 756.2,290.2 755.6,290.4 755.1,290.1 754.5,289.9 754.4,289.5 753.2,289.1
			753.1,288.5 752.8,288.4 753,287.4 753.4,287.3 753.5,286.8 753.1,286.4 752.3,286.7 752.1,286.4 750.8,286.4 750.6,286.1
			750,285.9 750,285.6 749.4,285.1 749,285.5 748.3,285.5 747.7,285.8 747.7,286.7 746.8,287 746.3,286.7 745.6,286.9 745.5,287.3
			744.9,287.6 744.7,287.2 744.4,287.2 744.1,287.6 743.6,287 743.1,287.3 743,287.9 742.7,287.9 742.4,287.7 742.5,287.2
			742.1,287.2 741.5,287.4 741.2,287.7 741.1,288 740.8,288 740.6,288.2 740.8,288.5 741.8,288.9 742.2,289.6 742.7,290.1
			742.8,290.7 742.6,291.1 743.6,292 744.2,293 745.3,293 746,293.2 746.6,292.8 747.4,292.8 747.8,293.3 748.5,293.4 748.6,294
			748.6,294.5 749.4,294.7 749.4,295.1 749,295.2 748.7,296.3 748.4,296.6 747.8,296.7 747,297 746.6,297 746.7,297.5 747.3,298.1
			746.9,298.6 747,298.9 747.4,298.9 747.8,299.6 748.7,299.7 749.5,300.1 750.1,300.2 750.8,301.2 751.6,301.5 752.2,302.3
			752.1,302.7 753,303.7 753.2,304.4 753.6,304.6 754.3,304.6 754.6,305.1 754.6,305.5 755,305.9 755.2,305.8 755.7,306
			755.6,306.5 755.8,306.8 756.4,306.8 756.7,307.3 757,307.3 757.6,307.1 757.7,307.5 757.3,307.9 757.3,308.7 757.5,309
			757.9,309.1 757.9,309.7 757.1,310.3 757.2,311.1 757.4,311.4 757.5,312.3 757,312.6 756.9,312.6 757.2,313.5 757.7,313.7
			758.2,314.8 758.1,315.7 758.3,316.2 758.1,317 758.2,317.6 757.8,318.4 757.4,318.6 757.3,319 756.5,319.2 755.7,319.7
			755.4,320.3 754.4,320.2 753.8,320.6 754,321.6 754.6,321.8 755.1,322.3 755,322.7 755.2,323.3 754.4,323.3 754.2,323
			753.7,322.6 752.4,323 752.1,322.8 751.5,322.8 751.2,323.6 750.6,323.7 750.1,324.3 750.2,324.4 750.2,324.9 750.1,325
			750.7,325.2 750.9,325 751.2,325.2 751.6,325.1 752.2,325.2 752.6,325 752.4,325.3 751.6,325.9 751.2,326.5 751.2,327.4
			751.1,327.8 751.3,327.8 751.2,327.9 751.2,328.8 751.5,329 751.8,328.9 751.6,329.2 751.1,329.4 750.6,329.7 751.3,329.8
			752.5,329.2 752.5,329.1 752.6,329.1 753,328.8 753,328.2 753.2,327.9 753.5,327.9 753.8,327.8 754.3,327.3 754.6,327.3
			754.7,327.1 755,326.9 754.8,326.7 754.9,326.6 754.7,326.2 755,326.1 755.3,326.5 755.5,326.6 755.7,326.3 755.8,326
			755.3,325.4 755.9,325.9 756.3,325.7 756.1,325.2 756.2,325 755.5,324.6 755.9,324.7 756.1,324.6 756.1,324.4 755.8,324.1
			756.2,324.3 756.3,324.1 756.5,323.8 756.5,324.1 756.4,324.5 756.5,324.6 757,324.5 757.4,324.6 758.1,324.5 759.3,323.8
			759.6,323.5 760.1,323.5 760.2,323 760.7,322.6 761.1,322.4 761.8,321.8 762.1,321.6 762.1,321 762.4,320.8 762.8,320.5
			762.6,320.3 762.8,319.8 762.5,319.2 762.9,318.8 762.9,318.5 763.2,318.3 763.3,318.1 763,317.8 763,317.4 763.2,317.2
			763.4,317.4 763.4,317.6 763.5,317.6 763.6,317.2 763.2,316.6 763.1,316.2 762.9,316.1 762.8,315.8 762.6,315.1 762.8,314.9
			762.6,314.5 762.7,314.1 762.7,313.6 762.5,313.5 762.3,312.6 762.1,312.4 761.9,311.4 761.4,310.8 761.6,310.6 761.4,310.3
			761.4,310 760.8,309.4 760.8,309 760.6,309 760.6,308.6 760.2,307.9 758.9,306.9 758.6,306.4 757.3,305.4 755.8,304.6
			755.7,304.4 755.1,304 754,303.2 753.9,302.8 753.7,302.2 753.8,302 753.8,301.7 753.4,301.1 753.2,301.1 752.4,300.4
			751.6,299.9 751.1,299.7 751.6,299.6 751.6,299.3 751.1,298.8 751.4,298.3 751.6,297.4 751.4,297.1 751.2,297.1 751.2,296.6
			751.5,296.4 751.6,295.9 751.9,295.7 751.9,295.5 752,295.7 752.4,295.7 752.8,295 753,295 753.2,294.7 753,294.4 753.1,294.3
			753.1,293.8 753.1,293.4 753,293.3 753.2,293 753.2,292.6 753.4,292.6 753.6,292.9 753.8,292.8 754.1,292.6 754.5,292.5
			754.7,292.6 754.8,292.5 755.1,292.3 755,291.9 755.1,291.6 755.7,291.5 756.1,291.5 756.6,291.2 756.8,291.3 757.1,291.1
			757.3,290.8 757.2,290.6 757.2,290.6 757.2,290.6 757.3,290.6 757.2,290.6 756.8,290.3 		"/>
		<polygon fill="#E6EEF4" points="751.2,323.6 751.5,322.8 752.1,322.8 752.4,323 753.7,322.6 754.2,323 754.4,323.3 755.2,323.3
			755,322.7 755.1,322.3 754.6,321.8 754,321.6 753.8,320.6 754.4,320.2 755.4,320.3 755.7,319.7 756.5,319.2 757.3,319
			757.4,318.6 757.8,318.4 758.2,317.6 758.1,317 758.3,316.2 758.1,315.7 758.2,314.8 757.7,313.7 757.2,313.5 756.9,312.6
			756.5,312.6 755.9,312.2 755.5,312.1 755.3,311.7 754.3,311.9 753.8,312.4 754.4,312.9 754.3,313.5 754.5,314 754.5,314.4
			753.6,314.1 753.1,313.2 752.3,313.2 752.1,312.8 751.4,312.4 751.1,312.5 750.6,312.1 749.8,312.2 749.2,312.1 748.6,312.1
			747.8,312.4 747.6,312.1 746.8,312.1 745.5,312.5 744.9,312.5 744.4,313.3 744.2,314.2 743.7,314.8 743.7,315.9 743.9,317
			744.4,317.2 744.6,317.8 744.6,318.8 744.5,319.2 744.5,319.2 744.9,319.7 744.9,320.2 745.3,320.5 745.3,321.1 745.7,321.6
			745.9,321.5 746.1,321.9 746.1,322.4 746.3,322.7 746.3,323.1 746.8,323.2 747.1,323.1 747.1,322.6 747.5,322.3 747.7,322.2
			747.7,322.5 747.9,323 747.8,323.3 747.5,323.7 747.7,324 747.7,324.2 748,324.2 748.5,323.8 748.5,323.6 748.8,323.9 749.4,324
			749.6,323.9 750.1,324.3 750.6,323.7 		"/>
		<polygon fill="#E6EEF4" points="736.3,294.7 736.8,295.3 737,296.3 736.5,296.6 736.9,297.3 737.4,297.5 737.9,297.1 738.9,297.1
			738.9,297.6 738.6,298.2 738.9,298.8 738.9,299.2 738.6,299.6 738.8,300.3 738.8,301.3 738.9,302.7 739.6,302.3 740.3,302.2
			740.4,301.6 741.3,301.2 742.2,301.7 742.7,301.7 743.2,302.3 744.4,302.1 745,300.9 745.9,300.7 747.2,301 747.6,301.8
			748.8,302.7 749.4,303.2 749.7,303.8 749.6,304.3 749.4,304.6 749.7,305.3 749.7,306.1 749.5,306.5 750.1,306.8 750.6,307.5
			751.2,307.5 751.6,307.7 751.5,308 752.2,308.5 752.3,308.9 752.1,309.5 752.1,309.8 751.9,310.4 752.1,310.8 752.1,311.8
			751.7,312.2 751.4,312.4 752.1,312.8 752.3,313.2 753.1,313.2 753.6,314.1 754.5,314.4 754.5,314 754.3,313.5 754.4,312.9
			753.8,312.4 754.3,311.9 755.3,311.7 755.5,312.1 755.9,312.2 756.5,312.6 756.9,312.6 757,312.6 757.5,312.3 757.4,311.4
			757.2,311.1 757.1,310.3 757.9,309.7 757.9,309.1 757.5,309 757.3,308.7 757.3,307.9 757.7,307.5 757.6,307.1 757,307.3
			756.7,307.3 756.4,306.8 755.8,306.8 755.6,306.5 755.7,306 755.2,305.8 755,305.9 754.6,305.5 754.6,305.1 754.3,304.6
			753.6,304.6 753.2,304.4 753,303.7 752.1,302.7 752.2,302.3 751.6,301.5 750.8,301.2 750.1,300.2 749.5,300.1 748.7,299.7
			747.8,299.6 747.4,298.9 747,298.9 746.9,298.6 747.3,298.1 746.7,297.5 746.6,297 747,297 747.8,296.7 748.4,296.6 748.7,296.3
			749,295.2 749.4,295.1 749.4,294.7 748.6,294.5 748.6,294 748.5,293.4 747.8,293.3 747.4,292.8 746.6,292.8 746,293.2 745.3,293
			744.2,293 743.6,292 742.6,291.1 742.8,290.7 742.7,290.1 742.2,289.6 741.8,288.9 740.8,288.5 740.6,288.1 739.6,288.2
			739.6,288.6 739.2,288.8 739.2,289.8 739.4,290.4 739.5,291 739.6,291.7 739.1,291.6 738.4,291.8 738.2,291.4 737.8,291.1
			737.3,291.6 736.5,291.7 736.5,292.3 736.2,292.7 736.4,293.1 735.9,293.5 735.6,293.5 735.2,294.2 735.6,294.9 		"/>
		<polygon fill="#E6EEF4" points="737.9,327.6 738,327 737.8,326.6 737.4,326.9 737.5,327.2 		"/>
		<polygon fill="#E6EEF4" points="737.2,326.2 737.5,326.3 737.7,326 		"/>
		<polygon fill="#E6EEF4" points="736.8,335.3 737,335.7 737.2,335.6 737.1,335.3 736.9,335.2 		"/>
		<polygon fill="#E6EEF4" points="735.1,333.1 735.2,332.8 735.2,332.6 735,332.5 		"/>
		<polygon fill="#E6EEF4" points="743.2,319.6 743.6,320 743.9,319.9 743.2,319.2 		"/>
		<polygon fill="#E6EEF4" points="744.6,317.8 744.4,317.2 743.9,317 743.7,315.9 743.7,314.8 744.2,314.2 744.4,313.3 744.9,312.5
			745.5,312.5 746.8,312.1 747.6,312.1 747.8,312.4 748.6,312.1 749.2,312.1 749.8,312.2 750.6,312.1 751.1,312.5 751.7,312.2
			752.1,311.8 752.1,310.8 751.9,310.4 752.1,309.8 752.1,309.5 752.3,308.9 752.2,308.5 751.5,308 751.6,307.7 751.2,307.5
			750.6,307.5 750.1,306.8 749.5,306.5 749.7,306.1 749.7,305.3 749.4,304.6 749.6,304.3 749.7,303.8 749.4,303.2 748.8,302.7
			747.6,301.8 747.2,301 745.9,300.7 745,300.9 744.4,302.1 743.2,302.3 742.7,301.7 742.2,301.7 741.3,301.2 740.4,301.6
			740.3,302.2 739.6,302.3 738.9,302.7 738.8,301.3 738.8,300.3 738.6,299.6 738.9,299.2 738.9,298.8 738.6,298.2 738.9,297.6
			738.9,297.1 737.9,297.1 737.4,297.5 736.9,297.3 736.5,296.6 737,296.3 736.8,295.3 736.3,294.7 735.6,294.9 735.2,294.2
			735.2,294.3 734.4,294.3 733.8,294.6 733.8,294.9 734.1,295.3 733.9,295.6 733.2,295.5 732.8,295.8 732.8,296.5 732.6,296.8
			732,296.8 731.3,297.3 730.3,296.9 729.9,297.5 730,298.4 729.6,298.8 729.6,299.6 729.8,300.1 729.3,300.5 728.6,300.8
			728.6,301.2 729,301.3 729.5,302.1 729.9,302.5 730.1,302.9 730.8,303.4 731.4,304.9 731.9,305.1 732.2,305.8 732.3,306.4
			732.9,306.7 733,307.2 732.4,307.5 732.2,307.9 732.5,309.3 732.5,309.7 731.9,310.1 732.3,311 732.3,311.5 733,312.4
			733.9,313.1 734.6,313.9 735,315 734.8,315.5 734.9,316 734.8,316.6 735.2,317 735.3,317.8 735.5,318.3 735.5,319.1 735.8,319.7
			735.8,320.6 735.5,320.8 734.8,322.6 734.2,323.1 734.1,323.8 733.9,324.2 733.7,324.6 733.6,325.5 733.9,325.6 733.6,326.1
			733.7,326.3 733.3,326.9 733.6,327 733.4,327.4 733.1,327.3 733.1,328.4 732.8,328.6 732.9,329.4 732.7,329.6 732.9,330.6
			733.1,330.9 733.5,331 733.5,330.5 734,330.2 734,330.5 734.3,330.7 734.3,331.1 734.8,331.2 735.1,332.2 735.5,332.2
			736.1,333.1 736.1,333.4 736.7,333.5 736.9,334 737.2,334 737.1,334.3 736.9,334.6 737,334.8 738.2,335.7 738.4,336.1
			738.6,335.4 738.9,335 739.4,335.4 740.2,335.6 740.3,336 740.9,336 741.3,336.3 741.2,337.1 740.9,337.5 740.9,337.9
			741.6,338.1 742.2,337.6 742.7,337.5 743.1,337.8 743.5,337.5 743.5,337 743.6,336.9 743.6,336.6 743.1,336.3 742.8,335.9
			742.4,335.1 741.9,334.9 741.3,334.9 741.1,335 740.8,334.8 740,334 739.6,333.7 739.5,333.2 739.4,333.1 739.3,333.5
			738.5,333.2 738.5,332.8 739,332.5 739.1,332.7 739.2,332.5 739.3,332.3 739.1,331.2 738.8,331 738.8,330.6 738.5,330.1
			738.4,329.7 738.3,329.9 738.3,330.2 738,330.2 737.8,329.6 737.5,329.5 737.5,328.9 737.3,328.5 737.2,328 737,327.7
			736.5,327.7 736.4,327.6 736.1,327.9 736.1,328.1 735.7,328.2 735.6,328 735.9,327.4 735.3,326.6 735.3,326.3 735.2,325.7
			735.1,325.4 735.4,325.1 735.3,325 735,324.9 735.3,324.4 735.3,323.8 736,322.9 736.1,320.8 736.5,320.2 736.6,319.7 737,319.2
			737.1,318.4 736.9,318.2 737,317.9 736.9,317.3 737.2,316.8 737.1,316.3 736.7,316 736.8,315.7 736.8,315.5 737,315.6
			737.3,315.6 737.5,315.4 737.7,315.6 738,315.5 738.4,315.3 738.6,315.5 738.8,315.4 738.9,315.5 739.4,315.6 739.5,316
			739.4,316.1 739.3,316.9 739.6,317.3 739.4,317.5 739.3,317.9 739.7,317.9 740.1,318 740.6,317.9 741.2,318 741.5,318.2
			741.5,318.1 741.5,318 741.8,317.7 742.2,317.9 742.9,318.6 743.3,318.8 743.2,319 743.5,319 744,319.5 744.1,319.6 744.2,319.6
			744.3,319.2 744.5,319.2 744.6,318.8 		"/>
		<path fill="#E6EEF4" d="M733.4,331.8v-0.7c0,0-0.3,0-0.3,0l-0.1,0.4l0.1,0.2l0,0.6L733.4,331.8z"/>
		<polygon fill="#E6EEF4" points="725.1,307 725.5,307 726.1,306.7 725.7,306.5 725.7,306.3 725.5,305.9 725.7,305.9 726,306.3
			726.5,306.4 727.2,305.8 727.1,305.5 727.3,305.2 727.4,304.6 727.1,304.4 727.1,304.1 727.2,303.9 726.9,303.5 727.4,303.8
			727.4,304.1 727.7,304.1 727.8,304.4 728.3,305.5 728.6,305.8 728.7,306.5 729.2,306.5 729.6,306.3 729.8,306 729.7,306.3
			729.6,306.6 729.9,307.2 729.9,307.6 729.7,307.6 729.8,308.2 730.2,308.4 730.4,310.5 730.6,310.5 730.6,311.5 731.3,311.9
			731.1,312.1 731.1,312.6 731.5,313.1 731.5,314.3 731.7,314.8 731.7,315.3 731.9,315.2 732,314.3 732.4,315 732.5,315.6
			732.9,315.9 733.1,317.6 733.4,317.8 733.5,318.3 733.3,318.6 733.4,319.3 733.6,319.7 734,320.2 733.7,320.5 733.9,321.2
			733.8,321.6 733.6,321.6 733.5,322.4 733.7,322.5 733.7,323 733.3,323.5 733.1,323.7 732.9,323.6 732.9,323.9 733.1,324.2
			733.2,325 733.4,325.9 733.5,325.1 733.7,324.5 733.7,324.6 733.9,324.2 734.1,323.8 734.2,323.1 734.8,322.6 735.5,320.8
			735.8,320.6 735.8,319.7 735.5,319.1 735.5,318.3 735.3,317.8 735.2,317 734.8,316.6 734.9,316 734.8,315.5 735,315 734.6,313.9
			733.9,313.1 733,312.4 732.3,311.5 732.3,311 731.9,310.1 732.5,309.7 732.5,309.3 732.2,307.9 732.4,307.5 733,307.2
			732.9,306.7 732.3,306.4 732.2,305.8 731.9,305.1 731.4,304.9 730.8,303.4 730.1,302.9 729.9,302.5 729.5,302.1 729,301.3
			728.6,301.2 728.6,300.8 729.3,300.5 729.8,300.1 729.6,299.6 729.6,298.8 730,298.4 729.9,297.5 730.3,296.9 731.3,297.3
			732,296.8 732.6,296.8 732.8,296.5 732.8,295.8 733.2,295.5 733.9,295.6 734.1,295.3 733.8,294.9 733.8,294.6 734.4,294.3
			735.2,294.3 735.2,294.2 735.6,293.5 735.9,293.5 736.4,293.1 736.2,292.7 736.5,292.3 736.5,291.7 737.3,291.6 738.1,290.9
			738.1,290.4 737.6,290.2 736.3,290.7 735.7,290.7 735.3,291.1 734.7,290.8 734.5,290.3 734.7,289.5 734.3,289 733.9,289.4
			733.7,289.2 732.8,289.1 732.4,289.3 732.3,289 732.8,288.4 733.5,287.5 733.5,287.1 733.7,286.6 733.7,286.2 733.1,285.9
			732.3,286 732.3,286.2 732,285.8 732.2,285.6 731.4,285.4 731.1,285 731.3,284.5 731.2,284 730.4,284.2 730.1,283.9 730.3,283.6
			730.2,283.1 728.9,283.4 728.2,283.9 728,283.2 728.1,282.6 727.7,282.2 727.5,281.8 727,281.6 727,281.2 727.3,280.8 727,280.4
			727.2,279.9 727.6,279.5 728,279.7 728.2,279.3 728,278.8 728.1,278.4 728.4,278.3 728.4,277.8 728.9,277.6 729.1,277.2
			729.1,276.7 729.2,275.5 729.2,274.6 728.7,273.7 728.7,272.9 728.2,272.3 727.7,272.3 727.6,271.5 727,271.1 726.7,270.3
			726,270.3 725.6,270.5 725,270.3 724.5,270.5 724.6,270.6 724.7,271 724.1,271.5 724.1,272.3 724.3,272.7 723.7,272.5
			723.3,272.1 722.5,272.7 721.6,273 721.3,273.6 720.6,274.4 720,274.7 719.1,276.1 719,276.8 719.2,277.1 718.9,278.2
			718.1,279.5 718.1,279.9 718.8,280.2 718.2,281.7 717.9,282.9 717.5,283.9 716.7,283.9 716.3,283.8 715.7,283.7 716,285.1
			716,285.8 715.9,286.8 715.4,286.8 715.5,287.5 715.4,288.2 715.5,288.7 715.2,289.7 714.9,289.8 714.6,289.7 714.5,290.2
			714.5,290.5 714.5,291.2 714.2,291.9 714,291.7 713.4,292.4 713.3,292.9 713.4,293.1 713.4,293.1 713.7,293.7 713.9,294.4
			715.1,295.5 714.8,295 714.8,294.8 715.3,295.1 715.8,295.1 715.4,295.6 715.4,295.8 715.9,295.7 716,295.4 716.1,295.7
			716.6,295.8 716.8,296.2 717.7,296.3 718.3,297.1 718.3,297.6 717.9,297.7 717.6,297.4 717.2,297.7 717.6,298 717.8,298.1
			717.6,298.3 717.2,298.1 717,297.7 716.5,297.7 716.5,297.9 717.1,298.4 717.1,298.7 717.6,299.3 718.6,299.6 718.5,298.6
			718.3,298.2 718.9,298.6 718.9,299.1 719.2,299.5 719.5,299.9 719.7,300.7 720.1,301.1 719.9,301.2 720.1,301.5 720.4,301.6
			720.4,302.7 720.9,303.9 721.2,304.1 720.5,304.5 720.1,307.3 720.3,307.9 720.2,308.1 720.2,308.4 720.7,307.7 721.2,307.2
			721.6,306.4 721.5,307.3 720.8,308 720.8,308.7 721.1,308.7 721.2,308.3 722,307.9 722.3,308.3 722.5,308.3 722.6,308
			722.6,308.1 722.9,308.1 723,308 723.6,308.1 724.7,307.3 724.8,306.8 		"/>
		<polygon fill="#E6EEF4" points="717,299.9 717.1,300.3 717.7,300.6 717.8,300.1 717.4,299.7 		"/>
		<polygon fill="#E6EEF4" points="681.3,331.2 681.2,330.8 681.3,330.7 681.4,330.6 681.1,330.7 681.1,331.2 681,331.8 		"/>
		<polygon fill="#E6EEF4" points="687.1,333.6 686.9,333.2 687,332.8 686.6,332.4 686.1,331.2 685.8,330.3 685.3,330.4 685.3,330.3
			684.9,330.2 685.4,329.9 685.3,329.7 685.1,329.6 684.7,328.9 684.5,329 684.3,328.4 684.1,328.2 684.1,327.9 683.3,327.6
			683.2,327.8 682.8,327.7 682.9,327.5 682.3,327.3 682.2,327.4 682.3,327.6 682.3,327.7 682.1,327.8 682.2,328 682.1,328.3
			681.8,328.8 681.7,328.8 681.4,328.5 681,328.5 681,328.6 681.3,328.7 681.5,329 681.4,329.1 681.6,329.7 681.6,330.4
			681.4,330.7 681.3,331.9 681.3,332.3 681.2,332.4 681.4,333.5 681.3,333.9 681.7,335.2 682.2,336.7 682.5,337.3 683.2,337.7
			683.8,337.5 684.7,337.4 685.6,337.2 686.5,336.2 686.9,335.4 687.1,334.9 687,334.5 687.1,334.3 		"/>
		<polygon fill="#E6EEF4" points="682.4,326.3 682.2,326.2 681.3,326.3 681.4,326.6 682.1,327.1 682,326.9 682.2,326.8 		"/>
		<polygon fill="#E6EEF4" points="682.4,327 683,327.2 683.2,327.5 683.7,327.4 684,327.7 683.9,327.4 683.2,327 683.1,326.6
			682.7,326.5 682.6,326.6 682.8,326.8 682.4,326.8 		"/>
		<polygon fill="#E6EEF4" points="704.1,288.8 704.1,288.1 703.3,287 703.1,286.1 703.2,285.6 703,284.9 703,284 702.3,283.1
			701.6,282.8 700.9,282.1 701,281 701.5,280.9 701.7,280.1 702.1,279.9 702.5,280 702.8,279.7 702.7,279 702.8,278.7 702.1,278.6
			701.6,278.8 700.3,278.3 700.3,277.7 700.9,277 701.1,276.3 700.9,276.1 700.8,275.7 701.1,275.7 701.2,275.3 701.5,275.6
			701.8,276 701.8,276.3 702.2,276.8 702.8,276.9 703.1,276.8 702.7,276.5 702.8,276.2 703,276.2 703.4,276.6 703.7,276.9
			704.3,277 704.3,276.8 704.6,276.8 705,277.5 705.1,278.1 705.2,278.5 705.4,279.1 705.4,279.5 705.9,279.7 706.4,279.6
			707,279.9 707.7,279.9 708.8,279.8 709.7,279.9 710.6,279.9 711.1,279.8 711.3,280 711.6,279.9 712.1,280.4 712.4,280.5
			712.1,281.1 712,281.8 711.6,282.7 711.3,282.9 711.3,283.2 711,283.5 710.7,283.5 710.5,283.3 710,283.6 709.9,284 709.7,284.2
			709.7,284.5 710,285.3 710.2,285.5 710.4,285.8 710.8,286.2 711.2,286.8 711.5,286.8 711.6,286.4 711.4,286.2 711.7,285.8
			711.7,285.5 711.8,285.2 711.7,285 711.9,284.8 712.3,285 712.8,285 712.9,285.2 713.1,285.6 713.3,286.4 713.3,287 713.5,287.4
			713.7,288.5 713.9,289.3 714.1,289.7 714.2,289.9 714.2,290.2 714.4,290.4 714.5,290.5 714.5,290.2 714.6,289.7 714.9,289.8
			715.2,289.7 715.5,288.7 715.4,288.2 715.5,287.5 715.4,286.8 715.9,286.8 716,285.8 716,285.1 715.7,283.7 716.3,283.8
			716.7,283.9 717.5,283.9 717.9,282.9 718.2,281.7 718.8,280.2 718.1,279.9 718.1,279.5 718.9,278.2 719.2,277.1 719,276.8
			719.1,276.1 720,274.7 720.6,274.4 721.3,273.6 721.6,273 722.5,272.7 723.3,272.1 723.7,272.5 724.3,272.7 724.1,272.3
			724.1,271.5 724.7,271 724.6,270.6 724.5,270.5 724.1,270 723.5,269.8 723.2,270 722.6,269.9 722.4,269.4 722.9,268.9
			722.9,268.5 722.5,268 722.4,267.6 722,267.7 721.7,267.8 721.4,267.3 721.8,266.6 721.7,266.3 721.3,266.4 721,266 720.6,265.9
			719.4,266.6 719.5,267.1 719.2,267.3 718.1,267 717.4,267.2 716.9,266.5 716.3,266.9 715.9,267 715.9,267.6 715.3,268.4
			714.3,268.6 713.7,268.7 713.2,269.3 713,269.9 712.4,270 712.4,270.4 712,270.3 711.6,270.6 711.3,271.2 710.8,271.3
			709.8,271.5 709.4,271.5 709.3,272.2 709.3,272.8 710.2,273.2 710.2,273.9 710.2,274.4 709.1,274.7 708.3,274.7 707.3,275
			706.8,274.7 706.1,274.8 705.6,275.5 704.8,275.5 703.5,274.7 703.1,274.9 702.1,274.7 701.6,273.9 701.8,273.4 701.9,272.8
			701.8,272.8 701.3,272.4 701.3,271.7 700.9,271.1 700.3,271.2 699.8,271.6 699.7,271.6 699.9,272.2 699.7,273.6 700.2,274.6
			700,275.9 698.3,276.3 697.2,275.7 696.6,276 694.2,275.2 693.2,275.2 692.7,275.5 691.2,275.1 690.5,274.4 690.4,273.7
			689,273.4 687.6,273.8 687.1,273.4 685.7,273.5 684.8,272.9 684,272.9 683.5,272.5 682.4,272.3 681.6,271.2 680.3,270.4
			679.3,270.1 678.8,269.8 678.3,269.7 677.8,269.3 677.2,269.3 677.1,268.6 677.7,267.6 677.7,266.7 678.1,265.2 678.1,264.2
			678,264.3 677.8,263.8 677.3,263.8 677,263.1 676.6,263 676.1,262.4 675.4,262.3 675.2,262 674.5,262 674.2,262.5 673.6,262.2
			673.4,261.6 673.2,261.5 673.2,261.1 672.8,260.6 672.5,260.4 672.7,260 672.4,259.5 672.5,258.4 671.8,258.1 671.7,257.6
			671.6,257.2 671.5,257.3 670.4,256.6 669.7,256.6 669.4,255.8 668.7,255.5 667.9,256 666.3,255 665.8,255 665.4,255.6
			664.7,255.7 663.9,256.4 663.1,257.8 662.9,257.9 662.3,258.6 662,258.5 661.5,258.8 660.9,259 660.1,259.9 660.2,260.1
			660.5,261.1 660.4,262.5 660.3,263.2 659.8,263.5 659,264.4 659.4,264.7 659.4,265.2 659.1,265.9 658.2,266.3 657.6,267.2
			657.5,268.1 657.2,268.7 655.9,269.6 655.3,271.3 654.5,272.2 653,272.3 651.9,272.9 651.5,272.8 651.4,272.2 650.8,272
			650.5,272.2 649.9,272.5 649.8,273 649.1,274 648.7,274.2 648.2,275.3 648.2,276 648.7,276 649.3,276.2 649.6,276 650.2,276.1
			650.6,276.9 650.5,277.6 650.6,278.6 651.5,279.2 652.1,279.2 652.5,279.5 652.3,279.9 652.9,280.6 653.5,282.4 653.4,282.8
			653.6,283 653.1,283.2 652.5,283.6 652.2,283.3 652.4,282.9 651.8,283.1 651.6,283.3 650.5,283.7 648.6,283.6 648.1,283.8
			647.7,283.7 647.5,284.4 647.1,284.5 646.5,284.9 646.5,285.6 647.2,285.2 648,285 647.4,285.4 646.9,286.1 646.8,286.6
			647.2,286.8 648,287.7 649.9,288.4 650.4,288.2 651,288.2 652.2,287.7 652.3,287.4 652.2,287.3 652.3,287.4 652.9,287.4
			652.7,287.9 652.5,287.9 652,288.7 651.6,288.7 650.5,289.6 650.4,289.8 650.1,289.6 649.9,289.7 649.6,289.9 649.2,289.9
			649.2,289.3 648.9,289.4 648.8,289.2 648.4,289.2 648.3,289.5 648.4,289.9 649.6,291.1 650,291.3 650.3,291.3 650.3,291.5
			651.2,292.7 653.3,294.4 654.3,294.6 655,294.4 656.4,293.5 657.4,293 657.4,292.7 657.8,292.3 657.9,291.3 657.5,290.8
			657.9,289.7 657.9,289.1 658,288.8 658.2,289.2 658.9,289.2 659.2,289.3 659.7,289 659.5,289.4 659,289.8 658.7,289.7
			658.5,289.9 658.4,290.4 658.7,290.9 658.6,291.4 659,291.4 659.6,291.3 660.1,291.4 659.6,291.4 659.4,291.7 658.8,292.1
			659.1,293.4 659.4,293.6 659.7,294.4 659.7,295.2 659.4,295.9 659.4,296.3 659.9,296.6 659.4,296.8 659.5,297.8 660.3,299.3
			660.4,299.8 660.7,300.2 660.3,300.3 660.3,300.9 661.1,301.9 660.5,302 661,302.8 661,303.5 662.2,305.8 662.2,307.4
			662.7,308.6 663.1,308.9 663.3,309.7 663.7,309.9 663.7,310.3 664.4,311.5 664.6,311.5 664.6,311.8 665.3,312.6 665.4,312.7
			665.5,313.7 665.8,314.1 666.1,314.7 666.2,315.6 666.7,316.9 667,317.3 667.1,318.5 667.4,318.7 667.7,319.4 668.5,320.2
			668.7,320.3 669.2,321 670,322 670.2,322.9 670.5,323.7 670.7,323.7 670.7,324.3 671.4,325.4 671.7,326.5 671.7,327.6
			672.7,329.7 673.5,330.7 674.4,331.3 675.3,331.3 676.4,330.7 676.6,329.9 676.5,329.7 676.6,329.6 676.7,329.3 677,328.8
			678,328.4 678.2,328.4 679.3,328 679.8,328.1 679.9,328.4 679.9,328.2 679.8,328 678.9,327.6 678.8,327.2 679,326.9 679.8,325.9
			679.6,325.7 679.9,325.2 680.7,325 680.9,325.2 681.5,325 681.5,324.4 681.3,322 681,321.6 681,320.5 681.7,319.3 682.3,317.4
			682.2,316.1 681.5,315.8 681.5,313.7 681.5,312.9 681.9,312.4 681.4,311.1 681.4,310.1 681.7,309.6 682.6,308.6 682.8,308.6
			683.1,309.1 683.6,309.1 684.3,308.1 684.3,307.5 684.9,307.1 686.1,307.3 686.8,306.8 687.2,306.2 687.1,305.5 687.2,304.9
			688,304.3 689,303.9 689.6,303.4 690,302.6 692.5,300.6 692.9,299.3 694.8,297.6 694.6,297.5 694.4,297.7 694,297.9 694.1,297.1
			694.4,297.1 694.9,296.7 695.1,296.7 695.2,296.9 695.2,297.1 695.4,297.4 696.9,296.6 696.9,296.2 698,295.5 697.8,295.1
			698.1,295.1 698.3,294.6 698.9,294.1 698.7,294 698.8,293.8 698.5,293.2 698.4,292.9 698.7,292.3 698.8,291.9 699.1,291.7
			700.8,291 701.2,290.6 701.2,290.2 701.4,289.8 701.6,289.6 701.4,289.4 701,289.3 701,289.1 701.5,289.1 701.9,289.5
			701.8,289.9 701.9,290.6 702.4,290.8 702.4,290.7 702.9,290.7 703,290.5 703,290.6 703.1,290.3 703.2,290.1 703.3,290.4
			703.5,291 703.8,291.2 703.8,290.9 704.2,291.3 704.5,290.8 704.2,290.2 704.3,290.2 704.3,289.3 		"/>
		<polygon fill="#E6EEF4" points="703.1,291.5 703.3,291.4 703.1,291.1 		"/>
		<polygon fill="#E6EEF4" points="702.1,291 702.1,291.5 702.4,291.7 702.4,291.2 		"/>
		<polygon fill="#E6EEF4" points="702.5,291 702.6,291.4 702.8,291.5 702.9,291.2 702.8,290.9 		"/>
		<polygon fill="#E6EEF4" points="701.3,291.2 701.3,291.4 701.5,291.3 701.8,290.7 701.6,290.4 		"/>
		<polygon fill="#E6EEF4" points="713.4,292.4 714,291.7 714.2,291.9 714.5,291.2 714.5,290.5 714.4,290.4 714.2,290.2 714.2,289.9
			714.1,289.7 713.9,289.3 713.7,288.5 713.5,287.4 713.3,287 713.3,286.4 713.1,285.6 712.9,285.2 712.8,285 712.3,285
			711.9,284.8 711.7,285 711.8,285.2 711.7,285.5 711.7,285.8 711.4,286.2 711.6,286.4 711.5,286.8 711.2,286.8 710.8,286.2
			710.4,285.8 710.2,285.5 710,285.3 709.7,284.5 709.7,284.2 709.9,284 710,283.6 710.5,283.3 710.7,283.5 711,283.5 711.3,283.2
			711.3,282.9 711.6,282.7 712,281.8 712.1,281.1 712.4,280.5 712.1,280.4 711.6,279.9 711.3,280 711.1,279.8 710.6,279.9
			709.7,279.9 708.8,279.8 707.7,279.9 707,279.9 706.4,279.6 705.9,279.7 705.4,279.5 705.4,279.1 705.2,278.5 705.1,278.1
			705,277.5 704.6,276.8 704.3,276.8 704.3,277 703.7,276.9 703.4,276.6 703,276.2 702.8,276.2 702.7,276.5 703.1,276.8
			702.8,276.9 702.2,276.8 701.8,276.3 701.8,276 701.5,275.6 701.2,275.3 701.1,275.7 700.8,275.7 700.9,276.1 701.1,276.3
			700.9,277 700.3,277.7 700.3,278.3 701.6,278.8 702.1,278.6 702.8,278.7 702.7,279 702.8,279.7 702.5,280 702.1,279.9
			701.7,280.1 701.5,280.9 701,281 700.9,282.1 701.6,282.8 702.3,283.1 703,284 703,284.9 703.2,285.6 703.1,286.1 703.3,287
			704.1,288.1 704.1,288.8 704.3,289.3 704.3,290.2 704.6,290.1 704.8,290.6 704.9,290.9 705.3,290.9 705.4,290.5 705.6,290.4
			706,290.6 706.1,290.7 706.3,290.5 706.4,290 706.1,289.4 706.2,289.4 706.3,288.8 706.5,288.5 706.4,288.2 706.6,288.4
			706.6,288.6 706.3,289.5 706.7,290.1 707,289.5 707.4,289.3 707.3,289.6 707,289.7 706.8,290.1 707.2,290.4 707.7,289.6
			708.2,289.4 708.3,288.6 707.9,288 707.5,287.9 708.1,287.7 708.2,287.4 707.8,286.8 707.7,285.8 707.9,286.7 708.4,287.1
			708.7,287.1 708.8,287.3 709.8,287.8 710.4,287.4 710.6,287.5 710.5,287.4 710.8,287.4 711.6,289.3 712,289.5 712,289.9
			711.8,290.5 712,290.7 711.9,291.5 712,291.7 712.3,291.3 712.4,291.1 712.4,291.5 712.2,291.9 712.5,292.2 713,292.9
			713.4,293.9 713.5,293.8 713.3,293.2 713.4,293.1 713.3,292.9 		"/>
		<polygon fill="#E6EEF4" points="710.3,288.2 710.4,288.8 710.7,288.7 710.7,288.3 710.5,288.1 		"/>
		<path fill="#E6EEF4" d="M709.3,287.9c0,0,0,0.2,0,0.3l0.3,0.6l-0.1,0.5l0.2,0.4l0.4-0.7l-0.1-0.4L709.3,287.9z"/>
		<polygon fill="#E6EEF4" points="708.7,287.7 708.2,288 708.2,288.2 708.6,289 709.1,289.1 709.1,288.2 		"/>
		<polygon fill="#E6EEF4" points="708.9,271 708.2,270.9 707.4,271.2 706.9,271 705.6,270.8 705.3,270.4 704.4,270.5 703,271.3
			702.4,272.5 701.9,272.8 701.8,273.4 701.6,273.9 702.1,274.7 703.1,274.9 703.5,274.7 704.8,275.5 705.6,275.5 706.1,274.8
			706.8,274.7 707.3,275 708.3,274.7 709.1,274.7 710.2,274.4 710.2,273.9 710.2,273.2 709.3,272.8 709.3,272.2 709.4,271.5
			709.3,271.6 		"/>
		<polygon fill="#E6EEF4" points="698.5,271.8 698.2,271.7 697.5,272 697,271.9 696.4,271.1 695.6,270.8 695.4,270.2 694.8,269.8
			693.7,269.7 693.2,270.3 692.6,270.4 692.3,270.7 691.5,270.4 691,270.5 690.7,269.8 690.9,268.7 690.2,268.6 689.3,268.8
			688.6,268.2 688.5,267.4 687.9,267.1 687.4,267.1 687.2,266.8 686.8,267.1 686.8,268 686.5,268.1 686.3,267.5 685.8,266.9
			685.5,266.5 684.9,266.2 684.3,266.2 683.5,265.4 683.1,265.1 682.4,265 682.1,264.7 681.1,264.4 680.4,264.4 680.1,264.9
			679.8,264.8 679.2,264.8 679,264.5 678.2,264.1 678.1,264.2 678.1,265.2 677.7,266.7 677.7,267.6 677.1,268.6 677.2,269.3
			677.8,269.3 678.3,269.7 678.8,269.8 679.3,270.1 680.3,270.4 681.6,271.2 682.4,272.3 683.5,272.5 684,272.9 684.8,272.9
			685.7,273.5 687.1,273.4 687.6,273.8 689,273.4 690.4,273.7 690.5,274.4 691.2,275.1 692.7,275.5 693.2,275.2 694.2,275.2
			696.6,276 697.2,275.7 698.3,276.3 700,275.9 700.2,274.6 699.7,273.6 699.9,272.2 699.7,271.6 699.2,271.6 		"/>
		<polygon fill="#E6EEF4" points="647.1,284.5 647.5,284.4 647.7,283.7 648.1,283.8 648.6,283.6 650.5,283.7 651.6,283.3
			651.8,283.1 652.4,282.9 652.2,283.3 652.5,283.6 653.1,283.2 653.6,283 653.4,282.8 653.5,282.4 652.9,280.6 652.3,279.9
			652.5,279.5 652.1,279.2 651.5,279.2 650.6,278.6 650.5,277.6 650.6,276.9 650.2,276.1 649.6,276 649.3,276.2 648.7,276
			648.2,276 648.2,275.3 648.7,274.2 649.1,274 649.8,273 649.9,272.5 650.5,272.2 650.8,272 651.4,272.2 651.5,272.8 651.9,272.9
			653,272.3 654.5,272.2 655.3,271.3 655.9,269.6 657.2,268.7 657.5,268.1 657.6,267.2 658.2,266.3 659.1,265.9 659.4,265.2
			659.4,264.7 659,264.4 659.8,263.5 660.3,263.2 660.4,262.5 660.5,261.1 660.2,260.1 660.1,259.9 660.9,259 661.5,258.8
			662,258.5 662.3,258.6 662.9,257.9 662.8,257.3 662.1,257.2 661.4,257.4 660.6,257.3 660.3,256.5 659.3,256.1 658.2,255.9
			657.2,255 657.1,254.2 656.7,252.3 656.2,251.5 656.1,250.6 656.6,250.4 656.7,249.8 657.5,249.3 657.4,248.6 656.6,248.4
			656.5,247.8 655.7,247.4 655,246.8 654.4,246.1 653.9,246.3 653.5,246.4 653.1,246 652.9,244.9 654.3,244 654.1,243.6
			653.3,243.7 652.7,243.4 651.7,243.8 651,244.4 650.3,244.4 649.8,245.1 649.3,245.7 650.5,247.4 650.6,248.6 649.3,250.3
			650,251 650,251.8 649.2,252.8 648.2,252.8 647.2,252.4 646.5,252.9 646.8,253.6 647.4,253.9 647.7,254.7 647.6,255.2 647,255.5
			646.3,255.6 646.1,256 646,257 645.8,257.6 645.8,258 645.6,258.2 645.8,259.5 645.2,260.3 644.7,259.7 644.4,259.7 644.3,260
			643.6,260 643.3,259.8 642.7,259.8 642.5,260.2 641.4,261 641.9,261.2 641.6,261.6 640.6,262 640.2,261.8 639.6,261.9
			639.4,262.4 639.2,262.8 638.7,263 638.4,263.4 638.4,264.2 638.6,265.1 638.6,265.7 638.8,266.2 638.7,266.7 637.6,267.2
			636.6,267.2 635.7,267.3 634.2,267.4 633.2,267.6 632.9,267.9 632,267.9 631.1,268.1 627.9,268.2 624.1,267.1 624.1,267.1
			625.5,269.1 625.8,269.7 626.6,270.5 627.3,270.9 627.5,271.1 628.4,271.2 628.9,271.4 629,271.7 629.8,271.8 629.8,272.7
			630,273.4 630,274.1 630.2,274.6 630.9,274.6 631.6,275.1 631.7,276.2 631.3,276.5 630.5,276.3 629.2,276.7 628.9,277
			628.1,277.3 627.8,277.8 627.9,278.3 627.5,278.9 627.8,279.6 627.7,280.6 627.7,281 628,281 628,281.4 628.2,281.5 629,281
			629.7,281 629.7,281.3 629.9,281.2 630.3,280.8 630.9,280.9 631.2,281 631.7,280.8 632,280.9 632.3,280.9 632.4,280.6
			632.6,280.3 633.2,280.6 633.5,280.6 633.6,280.4 633.9,280.5 634.1,280.8 634.5,280.8 634.9,281.1 635.3,281.1 636,280.5
			636.7,280.5 637.1,280.6 637.6,280.3 638,280.3 638.1,280.1 638.3,280.3 639.1,280.4 639.8,280.1 640.6,280.1 641.2,280.6
			641.4,281.2 641.3,281.6 641.4,281.7 641.3,281.8 641.3,282 641.8,282 642.6,281.6 642.6,282.2 643.2,282.9 643.3,283.9
			643.4,284 643.4,284.4 643.2,284.5 643.4,284.6 643.6,284.6 643.8,285.2 644.3,285.1 645.1,285.1 646.1,285.6 646,285.9
			646.5,285.6 646.5,284.9 		"/>
		<polygon fill="#E6EEF4" points="672.8,256.6 672.9,256.9 673.3,256.4 673.1,255.4 672.8,254.1 672.1,254 671.5,252.7 671.6,251.4
			671.2,250.7 670.2,250.2 669.5,249.4 669,248 668.1,247.5 667,247.2 666.9,246.5 666.4,246.4 665.3,246.4 664.2,246.3
			663.9,245.9 663.4,245.6 663.4,244.8 662.7,244.3 661.4,242.5 661.1,241.6 660.7,241.2 660.3,241.2 660.1,241.5 659.7,241.7
			659.3,241.7 659,241.9 658.5,241.4 658.1,241.5 657.8,241.7 657.9,241.7 657.3,242.6 656.1,243.2 654.1,243.6 654.3,244
			652.9,244.9 653.1,246 653.5,246.4 653.9,246.3 654.4,246.1 655,246.8 655.7,247.4 656.5,247.8 656.6,248.4 657.4,248.6
			657.5,249.3 656.7,249.8 656.6,250.4 656.1,250.6 656.2,251.5 656.7,252.3 657.1,254.2 657.2,255 658.2,255.9 659.3,256.1
			660.3,256.5 660.6,257.3 661.4,257.4 662.1,257.2 662.8,257.3 662.9,257.9 663.1,257.8 663.9,256.4 664.7,255.7 665.4,255.6
			665.8,255 666.3,255 667.9,256 668.7,255.5 669.4,255.8 669.7,256.6 670.4,256.6 671.5,257.3 671.6,257.2 672.4,256.4 		"/>
		<polygon fill="#E6EEF4" points="657.3,242.6 657.9,241.7 657.8,241.7 657.4,241.6 658.3,240.8 658.1,240.4 657,240.4 656.6,240.8
			655.6,240.9 655.4,240.3 654.6,240.5 653.4,241.3 653,241.7 652.9,242.2 652.4,242.6 651.4,243 651.3,243.3 650.9,243.7
			650.2,243.7 649.7,243.5 649.7,243.1 649.2,242.5 649.2,241.4 649.1,240.9 649.2,240.2 649,239.6 648.5,239.7 648.3,239.1
			648.5,238.5 648.5,238.1 648,237.8 647.5,237.5 646.8,237.5 646.5,238 646.4,238.8 646.1,239.1 645.9,239.4 646,240.2
			645.6,240.8 645,240.9 644.9,240.6 644.7,240.6 644.4,240.9 643.8,241 643.8,241.4 644.1,241.7 644.1,242.1 643.1,242
			642.8,241.6 642.5,241.4 642.2,241.7 641.9,241.8 641.6,242.2 641,242.6 640.1,242.8 639.6,242.6 639,241.8 638.6,241.8
			638.1,242.2 637.7,242.2 637.4,241.7 636.8,241.4 635.9,241.6 635.7,241.4 635.1,241.6 634.5,241.2 633.9,241.4 633,242
			632.8,242 632.1,242.2 631.8,242.4 631.5,242.6 631.4,242.9 631.7,243.1 631.7,243.7 631.1,244.4 631,245.1 630.9,245.8
			630.4,245.9 630,246.3 629.9,246.5 628.8,246.8 628,247.2 628.1,247.6 627.7,247.9 627.7,248.3 627.3,248.7 626.5,248.9
			626.2,249.2 625.9,248.9 625.8,248.5 625.1,248.1 624.7,248.1 624.3,248.4 623.8,248.4 623.4,248.1 622.8,247.9 622.5,248
			622.5,248.1 622.5,248.9 622.6,249.2 622.4,249.7 622.7,250.1 622.6,250.3 622.6,250.6 621.9,251.1 621.3,251.3 621.5,251.7
			622,252 621.5,252.8 621.6,252.9 621.8,253.9 621.8,254.4 622.7,254.7 623,254.7 622.1,255.7 622,256.4 622.7,257.9 623.1,259.2
			622.9,259.6 623.2,260.1 623.3,261.1 625.7,261.1 626.1,262.1 626.1,262.9 626.4,264 626.1,264.3 624.1,267.1 627.9,268.2
			631.1,268.1 632,267.9 632.9,267.9 633.2,267.6 634.2,267.4 635.7,267.3 636.6,267.2 637.6,267.2 638.7,266.7 638.8,266.2
			638.6,265.7 638.6,265.1 638.4,264.2 638.4,263.4 638.7,263 639.2,262.8 639.4,262.4 639.6,261.9 640.2,261.8 640.6,262
			641.6,261.6 641.9,261.2 641.4,261 642.5,260.2 642.7,259.8 643.3,259.8 643.6,260 644.3,260 644.4,259.7 644.7,259.7
			645.2,260.3 645.8,259.5 645.6,258.2 645.8,258 645.8,257.6 646,257 646.1,256 646.3,255.6 647,255.5 647.6,255.2 647.7,254.7
			647.4,253.9 646.8,253.6 646.5,252.9 647.2,252.4 648.2,252.8 649.2,252.8 650,251.8 650,251 649.3,250.3 650.6,248.6
			650.5,247.4 649.3,245.7 649.8,245.1 650.3,244.4 651,244.4 651.7,243.8 652.7,243.4 653.3,243.7 654.1,243.6 656.1,243.2 		"/>
		<line fill="#E6EEF4" x1="484" y1="181.8" x2="484" y2="181.7"/>
		<polygon fill="#E6EEF4" points="487.1,182.5 487.2,182.8 487.4,182.4 487.8,182.3 487.7,182 487.3,182.2 		"/>
		<polygon fill="#E6EEF4" points="484.8,180.1 485,180.4 485,181 485.3,181.4 485.6,181.4 486.3,181.6 486.4,181.8 486.1,182.1
			486.3,182.4 486.8,182.4 487,182.1 486.9,181.7 487.5,181.5 487.8,181.2 487.7,180.9 487.2,180.5 487.2,180.3 487.8,180
			488,179.4 487.9,178.8 487.8,178.3 487.1,178.3 486.4,178.5 486.1,179 486.3,179.3 486.7,179.6 486.7,179.8 486.4,179.8
			486.3,179.9 485.8,179.6 485.8,179.3 485.5,179 485.2,179.2 485,179.6 484.7,179.7 		"/>
		<polygon fill="#E6EEF4" points="488.1,179.6 487.9,180.2 488.3,180.3 		"/>
		<polygon fill="#E6EEF4" points="494.6,182 494.1,181.2 493.6,180.9 493.4,181.6 493.6,182.1 494.5,182.4 		"/>
		<polygon fill="#E6EEF4" points="483.8,181.7 483.6,181.2 483.3,180.4 482.9,180.5 482.3,180.2 481.5,180.3 481.3,181 481.6,181.6
			482.1,182.2 482.6,182.2 482.9,182.4 483.4,182.3 		"/>
		<polygon fill="#E6EEF4" points="484.7,183.1 484.4,183.2 484.6,183.6 485.4,183.8 486.2,183.8 486.5,183.4 486.6,183.8
			486.7,183.9 486.7,183.5 487,183 486.9,182.6 486.8,182.7 486.3,182.7 486.1,183.1 485.9,183.1 485.5,183.2 485,182.5
			484.7,182.5 484.5,182.9 		"/>
		<polygon fill="#E6EEF4" points="489.7,184.4 489.6,184.8 489.7,184.9 490.3,185.1 490.7,184.6 491,184.7 491,184.5 490.8,184.1
			490.9,183.6 490.5,183.5 490.3,183.6 490.1,183.5 489.7,183.6 489.7,184 490.2,184 490.1,184.2 		"/>
		<polygon fill="#E6EEF4" points="483.7,173.4 484.1,173.4 484.5,173 483.9,173 		"/>
		<polygon fill="#E6EEF4" points="478.7,175.4 478.7,176 479,175.9 479.4,175.4 479.5,175 479.1,175 		"/>
		<path fill="#E6EEF4" d="M484,182.8l0.3-0.6c0,0-0.3-0.3-0.4-0.4l-0.1,0.8l-0.2,0.4l0.1,0.3L484,182.8z"/>
		<polygon fill="#E6EEF4" points="483.1,171.4 482.3,172.1 481.6,172.5 481.1,172.5 480.8,173 480.5,173.7 480,174.1 479.4,174.1
			478.7,174.6 478.5,174.5 478.1,174.5 477.9,175.1 477.5,175.5 477.7,175.8 478,175.6 478.6,176.3 478.4,175.6 478.6,175.2
			479.5,174.6 479.6,174.7 480.1,174.6 480.7,174.7 481.1,174.6 481.6,174.6 482.1,174.8 482.4,174.7 482.9,173.7 482.8,173.1
			482.9,172.9 482.8,172.3 483.2,171.6 		"/>
		<polygon fill="#E6EEF4" points="483.2,183.1 483.4,182.9 482.7,182.7 		"/>
		<polygon fill="#E6EEF4" points="483.5,179.2 483.3,178.5 483.3,179.3 483,179.7 483.5,179.6 		"/>
		<polygon fill="#E6EEF4" points="480.2,182.8 480.5,182.9 481,182.9 480.9,182.8 481.1,182.5 480.7,182.1 480.5,182.1 480.5,181.7
			480.8,181.5 480.9,181 480.6,180.9 480.6,180.5 481.7,180 481.4,179.8 481.8,179.3 482.1,179.5 482.6,179.3 482.6,178.5
			482.4,178 482.7,177.7 483.2,177.6 483.5,178 483.7,177.9 483.9,177.9 484.1,177.7 484.3,177.2 483.8,176.7 483.5,176.9
			482.9,176.9 482.6,176.5 482.3,176.1 482,176 482.2,175.7 482.2,175.2 481.7,174.8 480.9,174.9 480.5,175.1 480,175 479.8,175.2
			480.3,175.8 480.2,176 480.6,176.6 480.6,176.7 480.1,176.6 479.7,176.7 479.6,176.4 479.9,176.1 479.6,175.6 479.4,175.6
			479,176.2 479.3,176.5 478.7,176.9 478.4,176.6 478,176.6 477.6,176.4 477.3,176.8 477.8,177.2 477.8,177.8 477.5,177.5
			477.3,177.6 477.4,178.3 477.7,178.5 477.7,179.1 478.1,179.4 477.3,179.8 477,180.6 477.3,180.8 477.8,180.6 478.4,181.1
			478.5,182 478.3,182.1 478.4,182.6 479.1,182.5 		"/>
		<polygon fill="#E6EEF4" points="491.5,121.9 491.7,121.5 492.3,121.1 493.3,120.1 492.6,119.4 492.2,119.1 492.2,119.5 492.6,120
			491.7,120 491.3,120.8 491.2,120.2 491.5,118.8 490.8,119.8 490.8,120.3 490.5,120.8 490.5,121.3 490.3,121.4 490.2,122.1
			490.5,122.1 491.1,121.3 491.1,121.8 		"/>
		<polygon fill="#E6EEF4" points="506.6,110.8 506.7,110.3 507.1,109.8 507,109.2 506,110 		"/>
		<polygon fill="#E6EEF4" points="489.4,120.8 489.1,121.3 489.8,121.2 		"/>
		<polygon fill="#E6EEF4" points="488.8,128.6 489,128.2 488.7,128.1 488.5,128.4 		"/>
		<polygon fill="#E6EEF4" points="489.8,122.6 489.8,121.5 488.5,122.2 488.4,122.8 489.2,122.3 		"/>
		<polygon fill="#E6EEF4" points="490.3,119.5 490.1,118.8 489.8,118.8 489.9,119.1 489.4,119.6 488.9,119.5 488.7,120.1
			488.9,120.4 489.6,119.9 490,119.9 489.3,120.4 489.6,120.7 490.3,120.4 		"/>
		<polygon fill="#E6EEF4" points="493.3,118.7 492.7,118.5 492.3,118.6 492.5,118.8 493.3,119.1 		"/>
		<polygon fill="#E6EEF4" points="485.1,133.4 485.3,134.1 485.7,133.4 485.6,132.9 		"/>
		<polygon fill="#E6EEF4" points="485.6,134.7 486.2,134.2 485.7,134.1 485.5,134.4 		"/>
		<polygon fill="#E6EEF4" points="486.5,123.7 486.8,123.3 486.5,123.1 486.3,123.4 		"/>
		<polygon fill="#E6EEF4" points="485.2,125.5 485,125.9 485.3,126.1 485.5,125.8 		"/>
		<polygon fill="#E6EEF4" points="487.1,123.7 488.1,122.9 488.2,122.5 487.3,122.7 		"/>
		<polygon fill="#E6EEF4" points="500.2,112.5 500,112.2 499.5,111.8 499.4,111 499.1,111.2 499.3,112 499.3,112.5 499.9,112.7
			"/>
		<polygon fill="#E6EEF4" points="499,112.9 498.5,113 498.3,112.6 497.5,113.4 498.2,114.1 498.6,114.1 498.7,113.8 498.7,113.4
			499.1,113 		"/>
		<polygon fill="#E6EEF4" points="505.5,108.6 505.2,109.1 504.9,108.7 504.4,109.1 503.9,109 504.2,109.6 505,109.8 505.4,109.8
			506.9,108.3 506.7,107.9 505.9,108.8 		"/>
		<polygon fill="#E6EEF4" points="505.2,110.4 504.8,110.7 505.4,111 505.9,111.2 506,110.7 505.7,110.4 		"/>
		<polygon fill="#E6EEF4" points="497.7,114.1 497.3,114.5 496.7,114.5 496.7,115 495.9,115 496.5,115.7 497,115.5 497.7,115.5
			497.6,115.1 498,114.6 		"/>
		<polygon fill="#E6EEF4" points="501.3,111.5 500.9,111.8 501,112.7 501.4,112.9 501.7,113.4 502,112.9 501.6,112.4 501.9,111.9
			"/>
		<polygon fill="#E6EEF4" points="495.3,117.5 495.9,117.4 495.8,116.9 495.9,116.6 495.7,116 495.4,115.9 495.3,115.4 494.4,115.3
			494.6,115.9 494.1,115.6 493.8,116.2 494.4,116.5 493.7,116.6 493.5,117.2 494,117.3 493.6,117.9 494.1,118 494.1,118.5
			494.3,118.5 494.5,117.8 495.1,117.8 		"/>
		<polygon fill="#E6EEF4" points="498,111.5 498.2,111.9 498.5,111.4 		"/>
		<path fill="#E6EEF4" d="M497.9,112.2l-0.7,0.2l0,0.6c0,0,0.7-0.5,0.7-0.5L497.9,112.2z"/>
		<polygon fill="#E6EEF4" points="494,119.6 494.5,119.4 494.2,118.9 		"/>
		<polygon fill="#E6EEF4" points="491.5,117.6 492.1,117.2 492,116.7 491.3,117 491.2,117.5 490.5,118.1 490.5,118.9 490.7,119.1
			491.5,118.2 		"/>
		<polygon fill="#E6EEF4" points="469.8,161.7 469.9,161.2 469.4,161.6 		"/>
		<polygon fill="#E6EEF4" points="469,153.9 468.4,153.6 468.5,154 		"/>
		<path fill="#E6EEF4" d="M469.4,162.5l0.4,0.6l0.2-0.4l-0.3-0.3C469.7,162.4,469.4,162.5,469.4,162.5z"/>
		<polygon fill="#E6EEF4" points="468.6,152.6 468.8,153.3 469.1,153 		"/>
		<polygon fill="#E6EEF4" points="470.4,161.4 470.1,161.9 470.3,161.9 		"/>
		<path fill="#E6EEF4" d="M468.5,158.8l0.4,0.3c0-0.1,0-0.6,0-0.6L468.5,158.8z"/>
		<polygon fill="#E6EEF4" points="468.7,157.8 468.6,157.5 468.1,157.9 468.4,158 		"/>
		<polygon fill="#E6EEF4" points="469,160.7 469.1,160.1 468.6,160.3 		"/>
		<path fill="#E6EEF4" d="M470,161.1l0.2-0.5c0,0-0.4-0.5-0.4-0.5L470,161.1z"/>
		<polygon fill="#E6EEF4" points="468.9,159.8 469.1,159.5 468.7,159.5 		"/>
		<polygon fill="#E6EEF4" points="486,123.4 485.5,124.2 485.5,124.8 486.1,124.1 		"/>
		<polygon fill="#E6EEF4" points="482.8,139.4 482.4,139.8 482.9,139.8 483.1,140.1 483.3,139.9 484,139.1 483.6,139.3 		"/>
		<polygon fill="#E6EEF4" points="484.6,135.6 484.4,135.5 484.1,135.9 484.4,136.2 484.7,135.9 		"/>
		<polygon fill="#E6EEF4" points="470.2,151.5 469.8,152 470.3,152 		"/>
		<polygon fill="#E6EEF4" points="470.7,165.6 470.6,166.1 471,166 		"/>
		<polygon fill="#E6EEF4" points="484.6,138.3 483.9,138.4 483.6,138.8 484,139 		"/>
		<polygon fill="#E6EEF4" points="477.2,146.5 477.8,146.5 478.2,146.1 477.9,145.7 477.5,145.8 477.3,146.1 476.8,146.1
			476.4,146.7 476.8,146.7 		"/>
		<path fill="#E6EEF4" d="M475.8,146.8l-0.2-0.4l-0.6,0l0.5,0.6C475.6,147,475.8,146.8,475.8,146.8z"/>
		<polygon fill="#E6EEF4" points="471.2,151.6 471.1,151.3 470.7,151.2 470.7,152 		"/>
		<path fill="#E6EEF4" d="M476,148l0.3-0.3l-0.1-0.6c0,0-0.5,0.6-0.5,0.6L476,148z"/>
		<polygon fill="#E6EEF4" points="477.5,145.2 477.2,144.9 476.3,145.6 477,145.6 		"/>
		<polygon fill="#E6EEF4" points="499.2,113.3 499,114 499.4,113.8 		"/>
		<polygon fill="#E6EEF4" points="507.9,107.1 508.2,107.6 508.5,107.5 508.6,107.3 508.4,106.9 		"/>
		<polygon fill="#E6EEF4" points="509.8,106.4 510,106 509.7,106 509.5,106.4 		"/>
		<polygon fill="#E6EEF4" points="485.3,166.8 485.6,166.2 485.5,164.5 485.1,163.8 485.3,163.3 485.7,163.1 485.4,162.5
			485.6,162.2 486.4,162.1 486.7,161.7 486.6,161.1 487,160.2 486.6,159.7 486.4,158.4 485.9,157.4 485.9,156.9 487.2,156.5
			487.2,155.6 487.5,155 486.5,153.9 485.7,153.5 485.7,152.5 485.9,151.5 485.7,150.3 485.4,149.6 485.7,148.7 485.5,147.3
			485.2,145.8 485.4,144.6 486.1,143.5 486.7,143.1 487.4,143.3 488.3,143.3 488.8,142.7 488.7,141.6 488.5,141.2 488.5,140.5
			489.5,138.2 489.5,136.9 489.8,135.6 490.1,134.9 490,134.1 489.6,133.7 489.7,133.2 490.5,132.7 491.5,132.5 491.9,132.1
			492,131.5 492.7,130.2 493.5,129.1 493.8,128.5 493.5,127.6 493.2,127.3 493.1,126 493.5,125.8 493.8,125.3 494,124.7
			494.4,124.5 494.8,123.5 495.4,123.1 496,123.4 496.3,123.7 496.6,123.6 497,123.2 496.7,122.7 497,122.4 497,122.1 497.2,121.8
			496.7,121.1 497,120.9 497.8,120.9 498.4,120.6 499.3,120.8 499.9,121.2 500.5,121.3 500.9,121.6 501.2,121.5 501.4,121.6
			501.4,120.9 501.1,120.5 501.2,119.6 501.6,119.4 501.5,118.8 501.1,118.6 501,118 501.7,118.2 502.3,118.1 502.5,118 502.5,118
			502.6,117.8 502.8,117.9 503,117.8 502.9,117.4 503,116.9 503.4,116.6 503.9,116.7 504.3,117.3 505.5,118.3 505.7,118.8
			506.1,119.4 506.9,119.8 508.2,119.8 508.9,119.1 509.3,118.7 509.9,118.8 510.8,119.4 511.4,119.5 511.7,118.9 512.1,118.7
			512.5,118.3 513,118.3 513.5,118 513.7,117.6 513.5,117.1 513.2,116.3 513.4,114.9 513.6,114.4 513.3,114 513.6,113.8
			514.1,113.2 514,112.9 514.6,112.6 515.3,112.8 515.7,112.7 515.7,112.4 516.2,111.9 517.3,111.9 517.9,112.3 518.5,113.1
			518.9,113.5 519.5,113.8 520.5,113.9 520.6,114.3 521.2,114.9 521.1,115.5 520.6,116.2 520.7,117.4 521,117.3 521,116.3
			521.8,115.6 522.4,115.5 522.9,115 522.8,114.2 523.3,114.1 523.9,114.3 524.2,113.9 524.2,113.3 524.2,113.3 524,113.3
			523.6,113 523.4,113 523.2,113.1 523.2,113.5 523,113.2 522.8,112.9 522.5,112.9 522.6,113.2 522.5,113.8 522.3,113.7
			522.1,113.3 521.7,113.5 521.5,113.8 521.4,113.4 521.2,112.8 521,112.8 520.8,112.2 520.6,112 520.1,112.1 519.7,111.9
			519.1,111.9 518.8,111.4 518.9,111.3 519.7,111.6 520.4,111.5 520.9,111.6 522,111.7 522.8,111.5 523.3,110.5 524.3,110.2
			524.8,109.8 524.8,109.7 524.5,109.5 524.3,109.3 524,109.2 523.5,109.3 522.8,108.7 522.4,108.7 522,109.2 521.7,109.2
			521.6,109 522.1,108.7 522.1,108.4 521.6,108.2 521.5,108 521.1,108 520.7,108.6 520.5,108.6 520.6,108.2 520.3,108.2
			520.1,108.6 519.9,108.6 519.8,108.3 520.1,108 520.1,107.7 519.6,107.4 519.1,107.4 518.8,107.6 518.7,108.3 518.3,108.5
			518.3,108.7 518.6,109.5 518.6,109.9 518.3,110.1 518,109.7 517.7,109.6 517.6,109.8 517.2,109.7 516.5,110 517,109.3
			517.4,109.2 517.7,108.7 517.6,108.4 517.4,108.4 516.9,108.8 516.6,108.7 516.6,108.5 517,108.2 517,108 516.5,107.9
			516.4,107.6 516.8,107.5 517,107.7 517.6,107.7 517.9,106.8 517.8,106.5 517.3,106.6 517,106.4 517.1,106 517,105.7 516.6,106
			516.4,105.9 516,105.7 515.6,106.1 515.7,106.3 516,106.7 515.8,107 515.5,107 515.1,106.5 514.8,106.7 514.7,107.2 514.8,107.4
			515.2,107.4 515.4,107.6 515.4,107.8 515.1,108 515.1,108.4 514.7,108.5 514.7,108.9 514.8,109.1 514.5,109.3 514.7,109.8
			514.6,110 514.2,109.7 513.9,110 513.8,110.2 513.4,110.5 513.4,109.9 513.9,109 513.4,108.8 513.5,108.6 513.8,108.2
			513.8,107.4 513.6,107.1 513.4,107.1 512.7,108.3 512.6,108.9 511.9,109.9 511.8,110.6 511.9,110.9 511.9,111.4 511.1,112.2
			510.8,112.4 510.8,111.9 510.6,111.5 511.1,110.8 511,110.3 511.2,110 510.9,109.5 511.7,108.6 511.9,108 512,108 512,107.6
			511.5,107.6 511.1,107.2 510.9,107.2 510.9,107.7 510.6,108.1 510.6,107.6 510.2,107.2 509.8,107.1 509.4,107.3 509.5,108
			509.4,108.3 509.1,108 508.8,107.9 508.6,108.1 508.7,108.3 509.3,108.7 509.4,109.2 509.3,109.4 509,109.1 508.7,109.4
			508.7,109.7 508.8,109.9 508.6,110.1 508.1,109.7 507.9,109.8 507.6,110.3 507.2,110.5 507.2,110.7 507.5,110.9 506.9,111.2
			506.8,111.6 507.2,112 506.9,112.4 507.3,112.6 507.5,112.8 507.3,113 506.6,112.9 506.4,112.2 506.1,112.1 506.4,111.8
			506,111.6 505.5,111.6 504.9,111.6 504.1,110.9 503.8,110.9 503.5,111.2 503.3,110.9 502.9,111.2 502.4,111.4 502.4,111.6
			503,112.3 503.4,112.3 503.7,112.6 504.3,112.6 504,113.1 504,113.6 504.5,114.2 504.4,114.6 504,114.3 503.7,113.7 503.2,113.5
			502.9,113.1 502.8,113.6 502.3,114 502.3,113.3 501.8,113.6 501.8,113.9 501.3,114.3 501.4,114.8 502,115 502.2,115.6
			501.8,115.5 501.5,115.2 501.1,115.8 501,116.2 500.4,116.7 500.4,116.4 500.8,116.1 500.7,115.7 501.1,115 500.8,113.4
			500.4,113.7 499.7,114.7 499.7,115.3 499.8,115.6 499.4,116.1 499.3,115.6 499.6,115 499.4,114.3 499.1,114.2 498.6,114.6
			498.2,115.3 498.4,115.8 498.4,116.3 499.2,116.8 499.4,117.2 499.1,117.8 498.8,117 498.3,116.8 497.9,115.8 497.7,115.7
			497,116 496.9,116.3 497.6,116.9 498,116.9 498.2,117.1 497.7,117 497.2,117.2 497.5,117.7 497,117.3 496.9,116.7 496.7,116.6
			496.6,116.1 496.3,116.4 496.2,117.1 496.4,117.4 496.3,118 495.9,117.8 495.5,117.9 495,118.5 495.1,118.6 495.5,118.5
			495.8,119 495.3,119 495,119.2 495.3,119.4 495.1,119.7 494.7,119.7 494.7,120 494.9,120.1 494.5,120.2 494.3,119.9 493.9,120
			493.6,120.5 493.7,120.7 493.5,120.9 493,121 492.7,121.5 493.2,121.6 494.4,121.3 494.6,121.5 495.1,121.2 495.5,121.2
			495.5,121.5 495.1,121.9 495,122.7 494.9,122.8 494.7,122.6 494.6,122.2 494.2,122.3 494,122.1 493.4,122.1 493.6,122.3
			493.4,122.6 493,122.3 492.7,122.4 493.1,122.7 493.3,123.1 493,123.1 492.9,123.4 492.9,123.8 492.8,124.1 492.6,123.7
			492.6,123.2 492.2,122.7 491.9,123.2 491.5,123.3 491.3,122.9 491.4,122.7 491.1,122.7 490.7,123.1 491,123.5 491.6,123.5
			492.1,123.8 491.8,124.2 490.8,124.4 490.6,124.2 490.2,124.2 490,124.7 490.3,125 490,125.5 490.4,125.4 490.9,124.8
			491.4,124.9 491.6,125.2 490.9,125.3 490.8,125.8 491,126.2 491.6,126.6 491.6,127 491.2,126.7 490.9,126.7 490.5,126.2
			490.2,126.2 489.9,126.6 490.2,126.9 489.7,126.9 489.3,127.3 489.3,127.6 489.8,127.9 490.2,127.6 490.5,127.9 491,127.7
			491.1,128.2 491.5,128.3 491.5,128.7 490.7,128.2 490.2,128.2 489.9,128.4 489.1,128.5 489.1,128.9 488.7,129.1 488.5,129
			487.8,129.3 487.4,129.4 487.4,129.6 487.8,129.8 488.1,130.2 487.7,130.3 487.5,130.2 487.4,130.3 487.7,130.7 487.6,130.9
			487.1,130.8 487,130.6 486.9,130.8 487.2,131.1 487,131.3 487,131.6 487.3,131.6 487,131.8 486.7,131.9 486.5,131.7 486.5,132
			486.3,132.3 486.6,132.4 487.4,132.7 487.5,133 487.8,133.1 488.2,132.9 487.9,133.2 487.9,133.5 487.4,133.5 487.2,133.2
			486.4,133.3 485.9,133.8 486.1,133.9 486.6,133.9 486.7,134.3 486.9,134.6 486.9,135 486.6,134.6 486.3,134.6 486.1,135
			486.1,135.3 486,135.4 486.2,135.7 486.3,136 486.1,136 485.8,135.8 485.6,135.9 485.6,136.4 486.1,136.5 486.1,136.7 486.1,137
			485.5,136.6 485.2,136.8 485.2,137.2 485.4,137.2 485.4,137.7 485.6,138.2 485.9,138.2 486.1,137.7 486.4,137.7 486.1,138.4
			485.8,138.4 485.3,138.9 484.9,138.9 484.6,139.1 484.6,139.3 484.1,139.5 483.8,139.9 484.2,140 484,140.3 483.3,140.3
			483,140.8 483.1,141 483.6,141.2 483.2,141.4 483,141.8 482.6,141.9 482.5,141.4 482.2,141.3 482,141.5 481.7,141.5 481.8,141.8
			481.6,142.1 481.5,142.4 481.6,142.7 481,142.7 480.7,142.8 480.8,143.4 480.3,143.7 480.4,143.9 480.3,144.4 479.9,144.7
			479.4,145.2 479.6,145.4 480.1,145.1 480.4,145.1 480.4,145.4 480,145.5 480,146.1 480.3,146.5 480.9,146.2 481.5,146.1
			482.4,145.3 482.4,144.9 481.9,145 482.3,144.5 482.4,143.9 482.6,143.9 482.8,143.6 483.3,143.7 483.6,143.7 482.8,144.2
			482.8,144.6 483.6,144.8 483.3,145.1 482.9,145.2 482.1,146 482.6,146.2 482.4,146.6 482.4,147.1 481.9,147.1 481.5,146.7
			480.9,146.7 480.6,147 480.6,147.4 480.1,147.7 479.7,147.9 480,147.6 480.2,147.4 479.9,146.9 479.9,146.4 479.5,145.9
			479.2,145.9 478.9,146.3 478.4,146.3 478.4,146.6 479.1,146.6 478.4,147.2 477.9,147 477.5,147.1 477,147.6 477.3,147.6
			477.6,147.5 477.7,147.6 477.2,148 476.9,148.3 476.6,148.1 476.3,148.1 476.2,148.3 476.8,148.7 477.5,148.7 477.4,149
			477.7,149.2 477.7,149.5 477,149.3 476.9,148.9 476.5,148.9 476,148.5 475.9,148.2 475.7,148.2 475.6,148.6 476.1,149.3
			476.6,149.7 477,149.7 477.3,150 476.8,150 476,149.7 475.3,148.9 475,149.1 474.5,148.8 474,148.8 473.7,148.5 473.5,148.8
			473.6,149.2 473.3,149.5 473.7,149.9 474.6,149.7 474.8,149.8 474.4,150.1 474.6,150.2 475.3,149.9 475.6,149.9 475.4,150.2
			474.6,150.5 474.3,151 473.8,150.9 473.3,150.2 473.1,150.2 472.8,150.5 472.4,150.1 472.1,150.3 471.8,150.2 471.4,150.4
			471.5,150.6 472.4,150.8 472.9,151.1 473.6,151.5 473.4,151.9 473.7,152.3 473.3,152.5 473.1,152.3 473.1,151.6 472.6,151.4
			472.1,151.5 472.3,151.8 472.2,152.1 471.6,151.7 471.1,152.3 471.6,152.6 471.2,152.7 470.9,152.8 470.7,152.3 469.9,152.3
			470.2,152.8 469.9,153 469.7,152.5 469.2,152.1 469,152.2 469.1,152.5 469.6,153 469.3,153.3 469.6,153.5 470.2,153.3 471,153.5
			471.5,153.8 472.3,153.8 472.6,153.6 473,153.6 472.5,154.2 471.7,154.1 471.5,154.2 470.6,153.8 470.1,153.9 469.8,153.8
			469.4,154.2 468.8,154.2 468.8,154.5 469.7,154.9 469.3,155.3 469.8,155.3 470.1,155.1 470.8,155.1 470.3,155.5 469.5,155.5
			469.3,155.6 469,155.6 469,155.7 469.4,155.9 469.7,155.9 469.2,156.2 469,156.2 469.1,156.5 469.3,156.7 469.5,157 470.1,157
			470.5,156.7 471.3,156.6 471.9,156.7 472.1,156.9 472.5,156.6 472.5,156.3 472.9,156.2 473,156.5 473.4,156.5 474,156
			474.3,156.1 474.2,156.3 473.9,156.6 474.4,156.7 474.7,156.5 474.6,156.1 475,155.6 474.8,156 475.3,156.5 475,156.9
			474.2,157.1 473.9,157.4 474.1,157.6 473.8,158 473.2,158 473.2,157.7 473.5,157.5 473.4,157 472.9,156.9 472.3,157.5
			472.2,157.8 471.8,157.3 471.4,157.2 470.8,157.3 470.4,157.2 469.7,157.5 469.4,157.5 469,157.2 468.9,157.3 469.1,157.8
			469,158.1 469.2,158.3 469.6,158.2 469.8,157.9 470.1,157.9 469.8,158.3 469.8,158.8 469.6,159 469.2,158.8 469.4,159.4
			469.7,159.6 470.5,158.8 471,159 470.8,159.2 470.9,159.7 470.2,160 470.3,160.2 470.7,160.3 470.5,160.6 470.8,161.1
			470.6,161.6 470.8,161.6 471.2,161 471.6,160.7 471.7,160.2 472.7,159.8 473.2,159.8 473.6,159.7 473.3,159.9 472.8,160.3
			472.8,160.9 472.9,161.3 472.5,161 472.5,160.4 472.2,160.4 471.8,161 471.5,161.1 472,161.3 471.6,161.9 471.2,161.9
			471.1,162.3 471.3,162.4 472.1,162.4 472.3,162.7 471.7,162.8 471.5,163.1 471.5,163.5 470.9,163.1 470.6,163.2 470.5,163.7
			470.4,163.1 470,163.4 469.6,164 469.7,164.5 470.5,165.3 470.6,164.9 470.8,165 471.2,164.8 471.1,164.6 471.3,164.1
			471.9,164.5 471.7,164.7 472,165 471.9,165.5 471.5,165.8 471.8,166.5 472.1,166.2 472.8,166 473,166.4 472.5,166.5 472.2,166.7
			472.5,167.1 472.4,167.3 471.4,166.6 471.1,166.7 470.8,166.5 470.4,166.5 470.4,166.9 470.1,167.2 470.8,168.4 471.3,168.5
			472.1,169.2 473.1,169.6 473.3,169.9 473,170 473.4,170.4 473.8,170.2 473.6,169.7 473.9,169.7 474.3,170 474.2,170.1
			474.8,170.8 475,170.5 475.3,170.6 475.7,170.4 476.3,169.9 476.6,169.8 476.8,169.5 476.9,169.6 477.1,170 477.4,170 478.3,169
			478.3,168.7 477.9,168.2 478.6,168.6 479.2,168.1 479,167.9 479.4,167.6 479.3,167.2 479.8,167 480.2,166.9 480.3,166.5
			479.9,166 480.1,165.6 479.7,165.1 479.2,164.7 479.2,164.3 479.5,164.4 480,165 480.2,165.8 480.4,166 480.7,166.1 480.7,166.4
			480.9,166.7 481.5,166.5 481.3,166.2 481.1,166 481.3,165.6 481.7,166 481.7,166.2 482.4,165.6 482.6,165 482.4,164.4
			482.1,164.3 481.9,164 482.1,163.8 482.2,163.6 482.5,163.5 482.7,163.3 482.4,163 482.4,162.4 482.8,162.1 483.2,162.5
			482.9,163 483,163.7 482.9,164.1 483.2,164.6 483.3,165 483.9,165.6 484.5,165.5 484.8,165.8 484.6,166 485,166.2 		"/>
		<polygon fill="#E6EEF4" points="510.6,106.7 511.2,106.8 511.8,107.3 512.4,107.1 512.6,106.5 512,106.5 512.3,106 511.9,105.9
			511.5,105.7 511.5,106.1 511.2,106.4 510.9,106.2 510.6,106.4 		"/>
		<path fill="#E6EEF4" d="M507.6,109.6l0.8-0.3l0.2-0.5l-0.6-0.5c0,0-0.7,0.3-0.8,0.3l0.4,0.4L507.6,109.6z"/>
		<polygon fill="#E6EEF4" points="485.3,169.8 484.9,169.9 484.9,170.3 485.2,170.3 		"/>
		<polygon fill="#E6EEF4" points="501.6,165.2 501.6,164.5 502.1,164 502.1,163.6 501.5,163.6 500.9,164.3 501.4,165 		"/>
		<polygon fill="#E6EEF4" points="511.6,133.4 511.2,132.4 510.6,132.2 510.3,131.4 510.5,131 510.5,129.9 510.4,129.5 510.5,129.1
			510.4,128.1 510.1,127.6 510,126.8 510.2,126.4 510.1,125.8 509.3,125.7 509.3,125.2 509.5,124.5 509.4,123.7 509.6,123.2
			509.3,122.8 508.9,122.8 508.4,122.1 508.2,122.2 508,122.2 507.8,121.6 507.3,121 506.9,120.9 506.5,120.7 505.4,120.6
			504.7,120 503.7,118.9 503,118.5 502.5,118 502.3,118.1 501.7,118.2 501,118 501.1,118.6 501.5,118.8 501.6,119.4 501.2,119.6
			501.1,120.5 501.4,120.9 501.4,121.6 501.2,121.5 500.9,121.6 500.5,121.3 499.9,121.2 499.3,120.8 498.4,120.6 497.8,120.9
			497,120.9 496.7,121.1 497.2,121.8 497,122.1 497,122.4 496.7,122.7 497,123.2 496.6,123.6 496.3,123.7 496,123.4 495.4,123.1
			494.8,123.5 494.4,124.5 494,124.7 493.8,125.3 493.5,125.8 493.1,126 493.2,127.3 493.5,127.6 493.8,128.5 493.5,129.1
			492.7,130.2 492,131.5 491.9,132.1 491.5,132.5 490.5,132.7 489.7,133.2 489.6,133.7 490,134.1 490.1,134.9 489.8,135.6
			489.5,136.9 489.5,138.2 488.5,140.5 488.5,141.2 488.7,141.6 488.8,142.7 488.3,143.3 487.4,143.3 486.7,143.1 486.1,143.5
			485.4,144.6 485.2,145.8 485.5,147.3 485.7,148.7 485.4,149.6 485.7,150.3 485.9,151.5 485.7,152.5 485.7,153.5 486.5,153.9
			487.5,155 487.2,155.6 487.2,156.5 485.9,156.9 485.9,157.4 486.4,158.4 486.6,159.7 487,160.2 486.6,161.1 486.7,161.7
			486.4,162.1 485.6,162.2 485.4,162.5 485.7,163.1 485.3,163.3 485.1,163.8 485.5,164.5 485.6,166.2 485.3,166.8 485,166.2
			484.6,166 484.6,166 484.2,166.3 484.3,167.5 484.5,167.8 484.5,168.7 484.9,168.9 485.1,169.1 485,169.7 485.6,169.5
			485.2,169.1 485.3,168.6 485.6,168.6 485.4,168.9 485.9,169.2 486,169.5 485.5,169.9 485.4,170.4 485.6,170.8 485.5,171.4
			485.2,171.7 485.5,172.1 486,172.3 486.3,173 486.5,173.2 487,174.2 487.1,175 487.7,175.2 487.8,175.7 488.3,176.3 488.9,175.9
			489.1,176.6 488.7,177.4 488,177.5 487.9,177.7 488.3,178 488.4,178.5 488.9,178.7 489.2,180 488.9,180.5 489.2,180.7
			489.7,180.7 491.1,180.4 491.8,180.6 492.4,180.1 492.3,179.7 492,179.4 492.4,178.5 493.3,178.4 493.4,177.5 493.6,177.9
			494.6,178.1 495.2,177.7 495.7,178 496,178.3 496.6,177.6 496.8,176.5 497.2,176 497.4,174.7 497.6,174.2 497.1,173.8
			497.2,173.2 497.6,172.7 497.2,172.2 497.7,171.7 497.1,171.3 497.4,170.8 497,170.3 497.6,170.6 498.3,170.4 497.7,169.9
			498,169.2 497.9,168.9 497.1,168.6 498.2,168.6 497.6,168 497.1,167.9 497.5,167.6 497.8,167.6 497.8,167.7 498.2,167.4
			498.1,167 498.6,167.4 498.7,166.8 499,166.4 499.4,166.4 499.3,166 499.5,165.7 499.7,166 499.6,166.5 499.9,166.5 500.4,165.8
			500.8,165.8 501.2,165.4 501.1,164.9 500.8,164.6 500.1,164.4 499.6,164.7 499.4,164.6 498.9,164.8 498.6,164.3 498,164.2
			497.6,164 496.9,164 496.8,164.3 496.6,164.1 495.8,164.1 495.7,163.8 496.1,163.7 496.6,163.9 497,163.4 497.2,163.6
			497.6,163.5 497.8,163.1 498.3,163.2 498.6,163.5 498.9,163.5 498.9,163.1 499.2,163.4 499.8,163.6 499.8,164 500.2,164.2
			501,164.1 501.2,163.5 501.9,162.7 502.2,161.9 501.7,161.4 501.7,160.9 500.8,160.5 501,160.1 500,159.4 499.9,158.9
			499.5,158.6 499,159.2 498.7,158.7 498.4,158.8 498.4,158.3 498.1,158.2 497.8,157.8 497.5,157.5 497.9,157 497.6,156.4
			497.8,156.2 497.8,155.9 497.4,155.7 497.8,155.2 497.6,154.4 497.8,154.2 498.1,154.5 498.2,154 497.8,153.5 497.9,152.7
			497.8,152.1 498,151.9 497.9,151.2 497.2,150.4 497.7,150.5 498.5,150.4 498.9,149.7 498.7,149.2 498.9,148.9 499.4,149.1
			500.1,148.4 500.2,148.1 499.8,148 499.9,147.6 500.3,147.2 500.6,147.5 500.8,147.4 501,146.8 501.2,146.8 501.4,147.2
			501.8,146.8 501.8,146.2 502,145.6 502.5,145.6 502.5,146 502.9,146.1 503.1,145.5 503.8,145.1 503.6,144.6 503.7,144.1
			504,144.5 504.5,144 504.9,144 505.5,143.1 505.4,142.1 505.8,141.7 506.1,141.6 506.7,140.9 506.3,140.9 506,140.5 506.3,140.4
			506.1,140 505.7,139.9 505.1,139.5 505.8,139.4 505.7,139 506,138 506.2,137.7 505.9,137.4 505.6,137.4 505.3,137 505.5,136.8
			505.9,136.9 506,137.1 506.2,137.1 506.2,136.7 505.7,136.5 506.1,136.3 506.6,136.3 507.1,135.9 506.7,135.6 506.3,135
			506.7,135.1 507,135.4 507.4,135.3 507.6,134.9 507.6,134.3 507.9,134.1 508.3,134.7 508.7,134.2 508.9,134.6 509.4,134.8
			509.6,134.3 510,134.6 510.7,134.2 511,134.6 511.5,134.6 511.9,134.3 511.9,134.4 511.9,133.8 		"/>
		<polygon fill="#E6EEF4" points="501.9,174 502.1,173.9 502,174.4 501.6,174.8 501.7,175.1 502.3,174.9 502.5,174.5 502.3,174.4
			502.4,174.1 503,173.6 503.1,173.2 503.5,172.7 503.4,172.5 503,172.1 503.3,171.6 503.3,171.3 503.5,171.1 503.2,170.9
			502.9,171.1 502.3,171.1 502,171.6 501.7,172.1 501.3,172.5 501.5,173.1 501.3,173.2 		"/>
		<polygon fill="#E6EEF4" points="497.7,175.2 497.5,176.7 497.6,177.2 497.6,177.6 497.8,177.8 498,177.3 498.3,176.4 498.4,175.5
			498.7,174.6 498.8,173.7 498.5,173.4 498.1,173.9 498.2,174.2 498,175 		"/>
		<polygon fill="#E6EEF4" points="503.6,170.8 503.8,171 504.1,170.7 504.6,170.6 504.5,170.4 503.9,170.4 		"/>
		<polygon fill="#E6EEF4" points="503.4,168.2 503.6,168.6 503.9,168.3 503.6,168 		"/>
		<path fill="#E6EEF4" d="M511,160.6l0.2-0.1c0,0-0.2-0.4-0.2-0.4L511,160.6z"/>
		<polygon fill="#E6EEF4" points="511.9,161.2 511.8,160.8 511.6,161.1 511.4,161.2 511.6,161.5 		"/>
		<polygon fill="#E6EEF4" points="506.7,145.8 506.4,145.5 506.3,145.8 506.5,146 		"/>
		<polygon fill="#E6EEF4" points="509.4,159.2 508.8,158.7 508.8,159.2 509,159.4 		"/>
		<polygon fill="#E6EEF4" points="509.9,160 510.2,160.2 510.7,159.8 510.8,159.5 510,159.6 		"/>
		<polygon fill="#E6EEF4" points="503.9,159.7 503.6,160 504,160.3 504.3,160.6 504.9,160.8 505.3,161.3 505.7,161 505.6,160.6
			505.2,160.6 504.9,160.1 505.1,159.9 505.4,160 505.4,159.6 504.5,159 504.2,159 504.2,159.4 504.7,159.7 504.5,160 		"/>
		<path fill="#E6EEF4" d="M526.4,155.8l0.7-1.3l0.8-1.2l0.6-1.4l1.1-1.9l0.8-2l-0.2-0.8l-1.2-1.4l-0.7-0.2l-1.3-1.8l0.2-0.8l0.5-0.7
			l-0.1-0.8l-0.8-0.6l-0.3-0.6l0-1l0.2-0.3l-0.2-0.5l-0.7-0.1l-0.4-0.5v-0.9l0.4-0.5l-0.5-0.1l0-0.5l0.1-1.8l0.5-0.1l-1.2-2.9
			l-1.1-2.1l-0.2-0.8l-0.7-0.7l0.5-1.3l0.6-0.9l0.3-0.8l-0.3-0.3l-1.3-0.8l-0.2-0.5l-0.4-0.6l-0.8-0.4l-0.4-0.1l-0.5-1.3l-0.4-0.5
			l0.2-0.9l0.1-0.7l-0.4-0.2l0.5-0.3l0.7-0.3l0,0l-0.1-1.1l0.5-0.8l0.1-0.6l-0.6-0.6l-0.2-0.5l-0.9-0.1l-0.6-0.2l-0.4-0.4l-0.7-0.9
			l-0.5-0.4l-1.2,0l-0.5,0.5l0,0.2l-0.4,0.1l-0.7-0.1l-0.6,0.3l0,0.3l-0.4,0.6l-0.3,0.2l0.3,0.4l-0.2,0.4l-0.1,1.4l0.3,0.8l0.2,0.5
			l-0.2,0.4l-0.5,0.3l-0.5,0l-0.4,0.4l-0.4,0.2l-0.3,0.6l-0.6-0.1l-0.9-0.6l-0.6,0l-0.4,0.4l-0.7,0.7l-1.3,0l-0.8-0.3l-0.4-0.6
			l-0.2-0.6l-1.2-1l-0.4-0.6l-0.5-0.1l-0.4,0.3l-0.1,0.5l0.2,0.4l-0.2,0.1l-0.2-0.1l-0.1,0.2l0.5,0.5l0.7,0.4l1,1.1l0.7,0.5l1.1,0.1
			l0.4,0.3l0.4,0.1l0.5,0.6l0.2,0.5l0.2,0l0.2-0.1l0.5,0.7l0.4,0l0.3,0.4l-0.2,0.5l0.2,0.8l-0.3,0.6l0.1,0.6l0.7,0.1l0.2,0.6
			l-0.3,0.4l0.1,0.8l0.3,0.5l0.2,1l-0.1,0.5l0.1,0.4v1.1l-0.2,0.4l0.3,0.8l0.5,0.2l0.5,1l0.3,0.3l0,0.6l0.2,0.2l0.5,0l0.5,0.5h1.1
			l0.7,0.7l-0.4,0.2l0.3,0.4l0,0.8l-0.2,0.2l0.8,0.8l-0.6-0.1l-0.2,0.1l0.7,0.6l0,0.3l-0.8-0.5l-0.7,0l-0.7,0.5l0,0.4l-0.5,0.5v0.4
			l-0.2,0.2l-0.9,0.9l-0.1,0.9l-0.2,0.1l-0.1-0.3l-0.3,0l0.2,0.5l-0.1,0.4l-0.6,0.1l-0.3,0.5l0.1,0.7l0.4,0.3l-0.7-0.2l-0.2-0.3
			l-0.4,0.1L509,145l0.1,0.3l-0.4-0.2l-0.1,0.2l0.4,0.4l0,0.3l-0.3,0.4l-0.2,0.3l-0.5,0.3l-0.3-0.2l-0.1-0.2l-0.4-0.1l-0.4,0.1
			l0.1,0.5l-0.3,0.3l0.2,0.5l-0.2,0.5l-0.3,0.1l-0.3,0.5l0.2,0.6l0.1,0.1l-0.2,0.5l0.1,0.4l0.4-0.2l0.3,0.3l-0.1,0.6l-0.1,0.3
			l0.2,0.5l-0.1,0.2l0.5,0.9l0.3,0.2l-0.2,0.3l0.4,0.7l-0.4,0.2l0.1,0.9l-0.2,0.3l0,1.1l0.3,0.4l-0.3,0.6v0.4l0.2,0.3l0.7-0.3
			l0.3,0.2l0.1-0.3l0.6,0.7l0.4-0.1l0.4,0.3l0.8-0.1l0.2,0.1l-0.2,0.4h0.3l0.7-0.5v0.4l-0.3,0.5l0.7,1l0.1,0.3l-0.2,0.6l0.2,0.1
			l0.3-0.8l0.3-0.2l0.1,0.4l0.5-0.2l0.4,0l0.9-0.7h0.5l1.1-0.7l0.1-0.3l0.7,0.2l0.5-0.1l0.4-0.7l0.1,0.2l-0.2,0.5l0.3,0.1l0.3-0.7
			l0.3,0.1l-0.2-0.6l0.2-0.2l0.3,0.5l0.3,0.1l0.1-0.4l0.3,0.6l0.4-0.1l0-0.4l0.3,0.1l0.1,0.3l0.4-0.3l0.7-0.1l0.4,0.4l0.9-0.1
			l0.1-0.3l-0.2-0.2l0.3-0.1l0.4,0.1l0.1,0.3l0.5,0.1c0,0,0.1-0.3,0.2-0.5l-0.1-0.8l1.3-1.2L526.4,155.8z"/>
		<polygon fill="#E6EEF4" points="514.4,137.4 513.6,137.2 513.1,137.6 513.4,138.1 513.9,138.2 514.1,137.9 513.9,137.6
			514.4,137.6 		"/>
		<polygon fill="#E6EEF4" points="505.9,146.6 506.2,147 506.7,146.7 506.7,146.3 506.4,146.4 506.1,146.2 		"/>
		<polygon fill="#E6EEF4" points="511.7,167.4 511.5,167.2 511.2,167.6 511,167.6 510.8,168 510.6,167.7 510.3,167.6 510.3,167.8
			510.1,167.9 510.4,168 510.4,168.3 510.2,168.5 510.2,168.8 510.6,169 511,169.4 510.9,169.8 510.6,169.8 510.4,170.5
			510.7,170.5 511.1,170.2 511.1,169.9 511.5,169.1 512.2,169 512.6,168.6 512.9,168.1 513.2,168.2 513.4,168.1 513.3,167.9
			513,167.8 512.6,167.4 		"/>
		<polygon fill="#E6EEF4" points="517.4,169.7 518.1,169.6 518.8,170.1 519.1,170 519.3,169.6 519.7,169.9 519.9,170.3 520.2,170.3
			521.1,170.8 521.4,171.5 521.9,171.7 522.3,172.3 523.3,171.9 524.1,172.1 524.5,171.4 524.5,170.9 524.9,170.5 524.9,170
			523.6,167.6 523.8,165.6 524.1,165.3 524.3,164.5 524.8,164 524.8,163.8 524.8,163.7 524.5,163.3 524.5,163.5 522.2,163.5
			521.3,162.8 520.2,162.9 519.7,162.6 519.2,162.7 518.6,162.2 518.6,162.6 518.2,162.5 518.2,162.7 518.6,163 518.1,163.4
			517.8,163.2 516.8,163.1 516.6,162.9 516.5,163.4 516,163.4 515.4,163.5 515.3,164 515,163.9 514.1,164.3 513.8,164.8
			513.8,166.6 514.2,166.7 514.4,166.5 514.9,166.6 514.6,167 514.2,167 514.2,167.7 514.7,168.4 515.5,169.1 515.8,169.1
			515.8,168.6 516.4,168.2 516.6,168.6 516.3,170 516.3,170.3 516.6,170.2 		"/>
		<polygon fill="#E6EEF4" points="513.3,165.5 512.9,165.5 513,165.9 513.5,165.8 		"/>
		<polygon fill="#E6EEF4" points="510.6,166.6 511.1,166.3 511.5,166.3 511.9,166.9 512.1,166.5 512.5,166.2 512.9,166.3
			512.6,165.8 512.1,165.8 511.9,165.5 511.6,165.4 511.5,165.6 511.3,166 510.4,166.4 		"/>
		<polygon fill="#E6EEF4" points="512.9,167.3 513.5,167.8 513.8,167.6 513.6,167 512.9,167 		"/>
		<polygon fill="#E6EEF4" points="509.9,177.3 510.6,176.5 511.9,176.2 512.9,176.3 513.5,176.3 513.9,176.6 514.4,176.2 515,176.1
			515.1,176.4 515.6,176.5 516.1,177 516.9,177 517.2,177.1 518.1,176.5 519.1,177 519.9,177.1 520.7,177.9 521.3,178 521.9,178.9
			522.7,178.9 523,179.2 523,179.2 523.9,178.8 525,178.6 525.1,177.9 525.6,177.6 525.8,177.1 526.3,177 526.2,176.2 525.8,175.7
			525.5,174.9 525.3,174.6 525,173.9 525,173.6 524.9,173.1 524.6,172.9 524.8,172.6 524.7,172.1 523.3,171.9 522.3,172.3
			521.9,171.7 521.4,171.5 521.1,170.8 520.2,170.3 519.9,170.3 519.7,169.9 519.3,169.6 519.1,170 518.8,170.1 518.1,169.6
			517.4,169.7 516.6,170.2 516.3,170.3 516.3,171 516.5,172.3 516.2,173.2 515.3,174.2 514.7,174.2 514,173.5 513.9,173.1
			512.6,171.7 512.6,170.8 512.4,170.9 511.9,171.4 511.1,171.5 510.8,171.8 510.3,171.8 509.8,172.5 509.9,173 509.7,173
			509.7,173.9 508.9,174.8 508.9,175.3 508.9,175.9 508.5,176.2 508.8,177.6 509.2,177.9 509.2,178 509.7,177.8 		"/>
		<polygon fill="#E6EEF4" points="514.8,183.9 515.2,184 515.5,185 515.5,185.6 515.8,186.2 516.4,185.8 517.4,185.5 518.2,185.8
			518.9,185.5 519.4,185.4 519.1,184.6 519.9,184.6 520.2,183.9 520.6,183.7 520.8,184 521.4,184 521.4,183.4 520.7,183.1
			520.9,182.2 521.3,182.1 521.8,181.2 522.8,180.8 522.8,180.2 522.3,180 523,179.2 522.7,178.9 521.9,178.9 521.3,178
			520.7,177.9 519.9,177.1 519.1,177 518.1,176.5 517.2,177.1 516.9,177 516.1,177 515.6,176.5 515.1,176.4 515,176.1 514.4,176.2
			513.9,176.6 513.5,176.3 512.9,176.3 511.9,176.2 510.6,176.5 509.9,177.3 509.7,177.8 509.2,178 509.2,178.8 509.4,179.5
			509.2,179.9 509.3,180 510.3,179.8 511,180.8 511.8,181.2 512.8,180.9 513.2,181.1 513.3,181.7 513.6,181.8 513.9,182.1
			513.6,182.5 513.6,183.5 514.2,183.4 		"/>
		<polygon fill="#E6EEF4" points="525.6,177.6 525.1,177.9 525,178.6 523.9,178.8 523,179.2 523,179.2 522.3,180 522.8,180.2
			522.8,180.8 521.8,181.2 521.3,182.1 520.9,182.2 520.7,183.1 521.4,183.4 521.4,184 520.8,184 520.6,183.7 520.2,183.9
			519.9,184.6 519.1,184.6 519.4,185.4 518.9,185.5 518.2,185.8 517.4,185.5 516.4,185.8 515.8,186.2 515.9,186.4 516.4,187.7
			516.7,188.3 516.9,189 517.2,189.2 517.2,191 516.6,191.2 516.2,191.9 516.4,192.7 517,193.6 517,193.9 517.4,193.8 518.3,194.3
			518.8,194 520.8,193.7 521.6,193.7 522.2,193.2 522.6,193.2 523.2,193.6 524.8,193.9 525.5,194.2 525.6,194.5 526.6,194.1
			527.1,194.6 527.4,194.5 527.7,194.3 528.5,194.4 528.9,194.6 529.8,194.1 530.5,194.2 530.7,194.7 531.1,194.9 531.6,194.2
			532.2,194.2 532.7,194.5 533.5,194.3 534,194.7 534.6,194.6 534.6,193.7 535,192.6 535.8,192.5 537,192.2 537.1,192.2
			537.1,191.5 536.5,190.8 536.5,190 536,189.2 535.9,188.5 536.2,188 536.8,188.6 538.2,188.4 538.8,187.5 539.1,187.2
			538.4,186.7 538.3,186.2 537.3,185.3 536.3,185 536.1,184.1 535.5,183.7 534.8,182.7 534.5,181.9 533.9,181.3 533.9,180.4
			533.4,179.8 533.6,179.1 533.4,178.5 532.2,178 531.8,178 531.5,177.6 530.7,177.9 530,178.4 529.4,177.5 528.8,177.4
			528.1,177.8 527.6,176.9 527,177.2 526.5,176.9 525.8,177.1 		"/>
		<polygon fill="#E6EEF4" points="557,208.3 557.6,207.4 558.9,207.3 559.4,206.9 559.3,206.2 559.6,205.2 559.5,204.4 558.7,203.8
			558.9,202.6 559.5,202.5 559.9,201.9 559.9,201.1 559.5,200.9 559.3,200.3 558.9,200.7 558,200.5 557.3,200.1 556.7,200.2
			556.2,199.9 555.5,199.9 554.4,199.6 554.1,200 553.8,199.5 552.9,198.9 552.3,197.6 551.9,197.6 550.9,198.4 550.3,198.2
			549.7,198.4 548.9,198 548.4,198.6 547.2,197.3 546.9,196.4 546.9,195.7 546.3,195.6 546.3,195 545.7,194.5 544.1,194.7
			543.4,193.7 543.7,193.1 543.1,192.6 542.7,191.4 542.1,191.3 541.4,191.7 539.9,191.7 538.6,191.2 538.1,191.6 538.2,192.2
			537.5,192.3 537.1,192.2 537,192.2 535.8,192.5 535,192.6 534.6,193.7 534.6,194.6 534,194.7 533.5,194.3 532.7,194.5
			532.2,194.2 531.6,194.2 531.1,194.9 530.7,194.7 530.5,194.2 529.8,194.1 528.9,194.6 528.5,194.4 527.7,194.3 527.4,194.5
			527.1,194.6 526.6,194.1 525.6,194.5 525.5,194.2 524.8,193.9 523.2,193.6 522.6,193.2 522.2,193.2 521.6,193.7 520.8,193.7
			518.8,194 518.3,194.3 517.4,193.8 517,193.9 516.9,194.3 517,195.6 517.3,196 517.6,196.8 518.3,197.2 518.1,197.5 518.2,198
			518.4,198.3 518.2,199.1 517.7,199.2 517.3,199.6 517.1,200.4 515.4,202.3 515.5,203.1 515.5,203.9 514.9,203.9 514.4,205.1
			514.2,206.1 514.1,206.1 514.8,206.8 515.5,207.2 515.7,207.7 516.2,207.7 516.6,207.4 517.1,207.4 518.1,208 518.9,208
			519.6,208.3 519.9,208.8 520.5,209 521.4,208.8 522,208.7 522.4,208.2 524.3,207.9 524.9,207.5 525.6,207.3 525.5,206.6
			525.6,206.3 525.4,205.6 525.9,205.8 526,205.6 526.5,205.9 526.7,205.6 527.3,205.6 527.5,205.4 527.9,206 528.7,206
			529.5,206.8 530.4,206.9 530.6,206.6 530.8,206.6 531.7,207.5 532.4,207.8 532.6,208.8 532.5,209.5 533.1,209.8 533.2,210.1
			533.9,210.7 534.7,211.2 534.8,211.7 534.7,212.2 535,212.6 534.9,212.9 534.1,213 533.7,212.6 533,212.8 532.4,212.9
			532.3,213.9 532.4,214.5 532.1,214.5 531.6,215.5 531.5,216 531.1,215.8 530.7,216.1 531.1,216.9 531.9,217.1 532.9,217.1
			533.4,216.8 534.2,216.7 534.7,217.1 534.7,217.1 534.8,216.6 534.5,216.2 534.6,215.9 534.6,215.5 534.8,215.9 535.2,215.9
			536.3,214.6 536.1,214.2 536.4,214.2 537,213.5 537,212.8 537.4,212.5 538,212.4 538.6,211.7 538.9,212 538.8,212.2 539.3,212.2
			539.6,211.9 539.8,211.5 540,211.8 540.3,212.1 540.8,212.2 541.6,212 541,212.4 540.7,212.5 540.2,212.4 539.2,212.5
			538.6,212.5 538.8,212.9 539.8,212.9 540.6,213.1 540.5,213.3 540.2,213.5 540.6,213.9 541,213.9 541.5,214.2 542.1,213.9
			542.8,213.8 543.4,214.1 543.8,214.3 544.1,213.9 544.3,214 544.4,214.7 544.8,215.1 544.5,215.3 543.7,215.4 542.7,216
			542.1,216.9 542.6,217.1 543,216.8 543.6,217.1 543.9,217 544.8,217.7 544.9,218.1 544.5,219.1 544.4,219.3 544.9,219.7
			545.9,219.7 546.8,219.3 548.1,218.3 549,218.4 549.5,217.7 550.1,217.3 551.2,217.5 552.2,217.4 552.5,217 552.3,216.5
			552.5,216.3 552.8,215.9 552,215.9 551.1,216 550.9,216.6 550.4,216.2 550.1,216.3 549.6,216.7 549.3,216.6 548,215.1
			547.7,214.4 547.3,213.8 547.1,214 547.4,214.7 548.3,215.9 549.3,216.7 549,216.9 548.4,216.7 548,216.4 547.9,215.7
			547.6,215.5 547.3,215.9 547.4,215.4 547.1,215.4 546.9,215.6 546.8,215.3 547.1,215 546.9,214.7 546.6,214.9 546.3,214.6
			545.9,214.2 545.1,214.3 544.7,214.1 544.8,213.8 545.4,213.9 545.7,213.6 546.1,213.9 546.7,213.9 546.8,213.6 547.3,213.5
			548.1,212.6 548.3,212.3 548.5,212.5 548.6,212.7 548.1,213.4 547.9,213.5 548,213.7 548.3,213.6 548.9,212.7 549,212.4
			548.7,212 548.6,211.6 548.8,211.6 549.2,212.2 549.5,212.3 550.1,211.9 550.8,212.1 551.3,211.7 551.9,211.7 552.1,211.7
			552.7,211.1 553,210.7 553.6,210.6 553.8,210.2 554.2,209.9 554.9,209.9 555.6,209.6 555.8,209.7 555.9,210 556.4,209.8
			556.4,209.7 556.6,208.5 		"/>
		<polygon fill="#E6EEF4" points="527,208.4 528.1,209.4 528.2,210 529.7,211.1 529.9,211.9 530.4,212.7 530.3,215.3 530.6,216.1
			530.7,216.1 531.1,215.8 531.5,216 531.6,215.5 532.1,214.5 532.4,214.5 532.3,213.9 532.4,212.9 533,212.8 533.7,212.6
			534.1,213 534.9,212.9 535,212.6 534.7,212.2 534.8,211.7 534.7,211.2 533.9,210.7 533.2,210.1 533.1,209.8 532.5,209.5
			532.6,208.8 532.4,207.8 531.7,207.5 530.8,206.6 530.6,206.6 530.4,206.9 529.5,206.8 528.7,206 527.9,206 527.5,205.4
			527.3,205.6 526.7,205.6 526.5,205.9 526,205.6 525.9,205.8 525.4,205.6 525.6,206.3 525.5,206.6 525.6,207.3 526.7,207.1 		"/>
		<polygon fill="#E6EEF4" points="533.4,216.8 532.9,217.1 531.9,217.1 531.1,216.9 530.6,216.1 530.3,215.3 530.4,212.7
			529.9,211.9 529.7,211.1 528.2,210 528.1,209.4 527,208.4 526.7,207.1 524.9,207.5 524.3,207.9 522.4,208.2 522,208.7
			521.4,208.8 520.5,209 519.9,208.8 519.6,208.3 518.9,208 518.1,208 517.1,207.4 516.6,207.4 516.2,207.7 515.7,207.7
			515.7,207.9 515.5,208.5 514.8,208.7 514.2,209.7 513.6,211.4 512.7,212.9 512.7,213.4 512.2,213.9 511.4,213.9 511.2,214.3
			510.7,214.5 510.1,215.1 510.6,215.2 510.8,215.6 511.7,216.6 511.9,217.1 512.6,217.5 513.3,218.1 513,218.8 513.1,219.1
			514.1,219.4 514.3,219.8 514.9,219.6 515.3,220 515.8,219.4 516.8,219.6 516.3,220.1 516.4,220.5 516.6,221.1 517.3,221.2
			517.7,221.5 517.6,221.9 517.4,222.2 517.7,222.7 518.4,222.2 519.1,222.3 519.4,222.6 519.7,222.5 520.7,222.9 521.5,222.5
			522,222.7 522.5,222.5 523.1,222.7 523.5,222.7 524.6,222.8 524.9,222.5 525.6,222.3 525.9,221.9 527.5,221.2 528.2,221
			529.1,221.1 530,221.5 530.3,221.8 530.8,221.6 531.5,222 531.7,222.2 532.3,222.3 532.1,221.6 532.4,221.1 532.5,220.3
			532.2,219.9 532.6,219.5 532.7,218.9 533.7,218.8 534.3,218.7 534.7,218 534.7,217.6 534.4,217.3 534.7,217.1 534.2,216.7 		"/>
		<polygon fill="#E6EEF4" points="512.6,206.3 511.5,206.4 510.9,206.2 509.9,206.3 509.5,207.1 509,207.5 508.9,208 508.1,207.2
			507.2,207.9 506.4,208.2 506.4,208.7 504.9,208.9 503.9,209.2 503,209 501.1,207.9 501.1,208.3 501.2,208.9 501.1,209.4
			499.9,209.4 499.8,209.6 500.3,210.2 500.1,210.9 500,211.4 500.3,211.9 499.9,212.4 499.7,212.5 500.4,213.3 500.6,214.2
			501,214.3 502.2,215.4 502.8,215.6 503.2,216 504.7,216.2 505.7,216.6 506.1,216 506.4,216.2 506.8,215.7 507.4,215.4
			507.9,215.5 508.1,215.2 508.7,214.6 509.2,214.8 509.7,214.9 510.1,215.1 510.7,214.5 511.2,214.3 511.4,213.9 512.2,213.9
			512.7,213.4 512.7,212.9 513.6,211.4 514.2,209.7 514.8,208.7 515.5,208.5 515.7,207.9 515.5,207.2 514.8,206.8 514.1,206.1
			513.5,206.5 		"/>
		<polygon fill="#E6EEF4" points="513.7,203.2 512.7,203.2 512.3,203.3 511.9,203.1 511.4,203.2 511.1,203.6 510.7,203.3 510,203.3
			509.6,203.2 509.1,203.4 508.8,203.9 508.3,203.9 508.1,203.8 508.1,203.9 506.9,203.7 506.3,204.3 505.6,204.3 504.8,205.1
			503.8,205.3 502.7,205.6 502.4,205.4 501.8,205.4 501.1,205.9 501,205.9 500.9,206.7 501.1,207.9 503,209 503.9,209.2
			504.9,208.9 506.4,208.7 506.4,208.2 507.2,207.9 508.1,207.2 508.9,208 509,207.5 509.5,207.1 509.9,206.3 510.9,206.2
			511.5,206.4 512.6,206.3 513.5,206.5 514.2,206.1 514.4,205.1 514.9,203.9 514.9,203.9 		"/>
		<polygon fill="#E6EEF4" points="531.5,222 530.8,221.6 530.3,221.8 530,221.5 529.1,221.1 528.2,221 527.5,221.2 525.9,221.9
			525.6,222.3 524.9,222.5 524.6,222.8 523.5,222.7 523.1,222.7 522.5,222.5 522,222.7 521.5,222.5 520.7,222.9 519.7,222.5
			519.4,222.6 519.1,222.3 518.4,222.2 517.7,222.7 517.4,222.2 517.6,221.9 517.7,221.5 517.3,221.2 516.6,221.1 516.7,221.6
			516.3,222.1 516.5,223.2 517.3,224 517.7,224.7 517.5,225.3 516.6,226.2 516.6,226.7 517,227.2 516.8,227.7 516.8,227.7
			517.9,228.6 518.6,229.9 518.7,230.6 518.8,231.1 518.8,231.1 519.1,231.2 520,231.3 520.8,231.1 521.2,230.6 521.9,230.7
			522.6,230.7 522.7,231.2 523.2,231.2 523.6,230.9 524.2,230.9 524.6,231.2 525.2,230.9 526.4,231 526.7,230.7 526.5,230.2
			526.5,229.6 527.2,229.1 527.5,229.1 527.5,229.1 528,228.6 528.4,228.5 528.8,228.2 529.6,228.2 530.3,228.8 530.7,228.5
			531.3,228.6 531.3,228.6 530.9,227.9 530.4,227.1 529.9,227 529.8,226.8 530.6,226.2 530.8,225.6 530.6,224.4 531.4,223.7
			531.9,223.8 532.3,223.4 532.4,222.4 532.3,222.3 531.7,222.2 		"/>
		<polygon fill="#E6EEF4" points="515.6,227.9 515.1,227.8 514,228.1 513.5,228.4 512.9,228.6 512.3,228.9 512.3,229.4 512.1,229.6
			512,229.5 511.9,230.5 512.1,231.5 512.6,232.3 512.9,232.9 513.4,233.4 513.5,233.3 514.6,232.6 515.3,232.3 515.4,232.1
			516,231.8 517.3,231.8 518,231.4 518.5,231.4 518.8,231.1 518.7,230.6 518.6,229.9 517.9,228.6 516.8,227.7 516.4,227.7 		"/>
		<polygon fill="#E6EEF4" points="511.8,235.9 511.8,235.3 512.9,234.9 513.3,234.1 513.4,233.4 512.9,232.9 512.6,232.3
			512.1,231.5 511.9,230.5 512,229.5 511.9,229.3 511.9,228.4 511.8,228 511.2,227.6 510.9,227.6 510.6,227 510.4,226.8
			510.3,226.8 509.9,227.4 509.5,226.9 509.3,226.9 508.7,227.6 508.4,228.4 508.3,229.4 509.1,229.8 509,230.2 508.8,230.4
			508.5,231.6 508.9,232.5 508.6,233.1 508.6,233.7 508.9,234.3 508.7,234.9 509,235.2 510,235.3 510.5,236.6 511,236.9
			511.4,236.7 		"/>
		<polygon fill="#E6EEF4" points="509.2,214.8 508.7,214.6 508.1,215.2 507.9,215.5 507.4,215.4 506.8,215.7 506.4,216.2
			506.5,216.2 506.8,217 507,217.7 507.3,218 507.8,218.1 507.8,218.3 507.5,218.3 507,218.5 507.1,219 507.2,219.2 507.4,219
			507.8,219 507.7,219.7 507.1,220.6 507.2,220.9 508,221.6 508.4,221.6 508.7,221.9 508.5,222.3 508,222 507.8,222.2 507.8,222.8
			508.4,223.5 508.2,223.7 508.8,224.3 508.8,224.7 509,225 509.7,225 510.1,225.4 510.8,225.6 510.8,226.2 510.4,226.5
			510.4,226.8 510.6,227 510.9,227.6 511.2,227.6 511.8,228 511.9,228.4 511.9,229.3 512.1,229.6 512.3,229.4 512.3,228.9
			512.9,228.6 513.5,228.4 514,228.1 515.1,227.8 515.6,227.9 516.4,227.7 516.8,227.7 516.8,227.7 517,227.2 516.6,226.7
			516.6,226.2 517.5,225.3 517.7,224.7 517.3,224 516.5,223.2 516.3,222.1 516.7,221.6 516.6,221.1 516.4,220.5 516.3,220.1
			516.8,219.6 515.8,219.4 515.3,220 514.9,219.6 514.3,219.8 514.1,219.4 513.1,219.1 513,218.8 513.3,218.1 512.6,217.5
			511.9,217.1 511.7,216.6 510.8,215.6 510.6,215.2 510.1,215.1 509.7,214.9 		"/>
		<polygon fill="#E6EEF4" points="508.7,227.6 509.3,226.9 509.5,226.9 509.9,227.4 510.3,226.8 510.4,226.5 510.8,226.2
			510.8,225.6 510.1,225.4 509.7,225 509,225 508.8,224.7 508.8,224.3 508.2,223.7 508.1,223.7 507.7,223.6 507.1,223.2
			506.8,223.4 506.8,223.9 507.3,224.2 507.5,224.6 507.1,224.8 506.7,224.9 506.4,225.4 506.4,226.2 506.1,226.8 505.8,226.9
			506,227.2 506.6,227.4 507.6,228.7 507.7,229.1 508.3,229.4 508.4,228.4 		"/>
		<polygon fill="#E6EEF4" points="495.4,220.6 495.6,220.5 495.4,219.8 494.7,219.3 495,219.9 494.9,220 		"/>
		<polygon fill="#E6EEF4" points="501.5,225.3 502,225 500.6,225 		"/>
		<polygon fill="#E6EEF4" points="502,224.5 501.7,224.3 500.6,224.3 500.9,224.7 501.4,224.7 		"/>
		<polygon fill="#E6EEF4" points="496.1,221 495.6,220.8 496.1,221.4 		"/>
		<path fill="#E6EEF4" d="M502.6,225.9l-0.4-0.3c0,0-0.9,0-1,0l0.5,0.3L502.6,225.9z"/>
		<polygon fill="#E6EEF4" points="497.4,221.3 497,220.9 496.7,220.8 497.2,221.5 		"/>
		<path fill="#E6EEF4" d="M495.1,218.2c0,0-0.3,0.2-0.3,0.2l0.1,0.8l0.4,0.1l0.2,0.3l0.4-0.2L495.1,218.2z"/>
		<polygon fill="#E6EEF4" points="503.8,225.5 501.8,223.3 499.6,221.4 499.5,221 499.7,220.8 499.3,220.4 499.2,219.9 498.6,219.3
			498.3,219.3 498.3,218.9 498.5,218.7 498.5,218 498.7,217.7 499.4,218.2 499.6,218.6 499.9,218.5 500,218.1 500.5,218
			500.8,218.1 501.1,217.8 501.5,218 501.8,217.8 502.2,217.9 502.4,218.4 502.8,218.1 503.4,218.3 503.9,218.1 504,218.3
			504.7,218.2 505.3,218.5 505.6,218.4 506.2,218.9 507,218.9 507.1,219 507,218.5 507.5,218.3 507.8,218.3 507.8,218.1 507.3,218
			507,217.7 506.8,217 506.5,216.2 506.1,216 505.7,216.6 504.7,216.2 503.2,216 502.8,215.6 502.2,215.4 501,214.3 500.6,214.2
			500.6,214.3 499.4,214.3 497.7,215.2 497.6,215.9 496.7,216.4 496.5,217.3 495.9,217.4 494.9,216.9 494.3,217.1 493.6,217.6
			492.6,217.6 492.6,217.7 492.8,218.8 493.4,219.4 493.4,219.6 493.6,219.8 494.3,218.7 494.4,218.1 494.8,217.6 495.5,217.6
			495.7,218.2 496.2,218.6 496.4,219.4 496.8,220.2 497.6,221 497.8,221 498.3,221.6 497.9,221.4 497.4,221.5 497.2,221.9
			497.4,222.4 498,222.4 498.7,223 499.3,223.2 499.5,223.7 499.8,224 500.4,223.9 501.6,224 502.3,224.3 503.6,225.7 503.3,225.8
			502.6,225.4 503,225.9 503.6,226 503.6,226 		"/>
		<polygon fill="#E6EEF4" points="497.1,222.7 496.9,222.2 496.4,221.7 		"/>
		<polygon fill="#E6EEF4" points="496.2,220 496.2,220.4 496.7,220.6 		"/>
		<polygon fill="#E6EEF4" points="506.4,226.2 506.4,225.4 506.7,224.9 507.1,224.8 507.5,224.6 507.3,224.2 506.8,223.9
			506.8,223.4 507.1,223.2 507.7,223.6 508.1,223.7 508.4,223.5 507.8,222.8 507.8,222.2 508,222 508.5,222.3 508.7,221.9
			508.4,221.6 508,221.6 507.2,220.9 507.1,220.6 507.7,219.7 507.8,219 507.4,219 507.2,219.2 507,218.9 506.2,218.9 505.6,218.4
			505.3,218.5 504.7,218.2 504,218.3 503.9,218.1 503.4,218.3 502.8,218.1 502.4,218.4 502.2,217.9 501.8,217.8 501.5,218
			501.1,217.8 500.8,218.1 500.5,218 500,218.1 499.9,218.5 499.6,218.6 499.4,218.2 498.7,217.7 498.5,218 498.5,218.7
			498.3,218.9 498.3,219.3 498.6,219.3 499.2,219.9 499.3,220.4 499.7,220.8 499.5,221 499.6,221.4 501.8,223.3 503.8,225.5
			503.6,226 503.6,226 503.9,226.1 504.9,226.2 505.2,226.1 505.8,226.9 506.1,226.8 		"/>
		<polygon fill="#E6EEF4" points="494.3,217.1 494.9,216.9 495.9,217.4 496.5,217.3 496.7,216.4 497.6,215.9 497.7,215.2
			499.4,214.3 500.6,214.3 500.4,213.3 499.7,212.5 499.1,212.7 497.9,213.4 497.6,213.4 497.2,213.4 496.5,213.7 495.9,213.7
			495.3,214 494.9,213.5 493.7,213.5 493.2,213.5 492.6,214.4 492.8,214.9 492.4,215.4 492.6,216.4 492.6,216.4 493.1,216.6
			493.1,217 492.7,217.1 492.6,217.6 493.6,217.6 		"/>
		<polygon fill="#E6EEF4" points="500.3,211.9 500,211.4 500.1,210.9 500.3,210.2 499.8,209.6 499.9,209.4 501.1,209.4 501.2,208.9
			501.1,208.3 501.1,207.9 500.9,206.7 501,205.9 499.9,205.6 499.4,205.2 498.7,205.4 497.9,205.4 497.2,204.9 496.2,204.8
			495.6,204.6 495.4,205.1 495.1,205.4 495.1,205.8 494.3,205.9 494.1,206.2 492.7,205.4 492.3,205.3 492.2,205.8 492.2,206.4
			491.8,206.4 491.4,206.9 490.8,207.3 490.1,208.2 490.1,208.6 490.7,208.9 490.8,209.4 490.5,209.6 489.9,209.3 489.3,209.4
			488.7,209.3 488.2,209.3 487.3,209.9 486.9,210 486.4,209.9 485.9,210 485.5,209.7 484.8,209.6 484,209.7 484.1,210.1
			483.9,210.3 483.2,210.1 482.8,209.7 482.3,209.9 482,210 481.9,210 482.2,210.3 482.2,210.7 482.5,210.9 482.5,211.4
			482.9,211.5 483.2,211.3 483.8,211.9 484.3,211.4 484.8,211.4 485,211.9 485,211.9 485.9,212.3 487.4,211.4 488,211.6
			488.9,211.5 488.8,212.1 490.2,212.9 491.9,213.2 492.8,213.1 493.2,213.5 493.2,213.5 493.7,213.5 494.9,213.5 495.3,214
			495.9,213.7 496.5,213.7 497.2,213.4 497.6,213.4 497.9,213.4 499.1,212.7 499.7,212.5 499.9,212.4 		"/>
		<polygon fill="#E6EEF4" points="493.6,189.6 492.8,190 492.8,190.4 493.7,191.3 493.6,191.9 494,192.4 494,192.8 494.2,193.4
			494,193.9 494.5,195 494.8,195.2 495.2,195.6 495.2,197.1 495.1,197.4 495.3,197.8 495.5,197.5 496,197.6 496.3,197.5
			497.4,197.6 497.4,198 497.8,198.5 498.3,198.4 498.7,198.7 498.4,199.4 498.6,199.7 498.8,199.8 498.8,200.3 499.2,200.5
			499.5,200.2 499.8,200.2 499.2,199.4 499.4,199.2 500.7,199.9 501.6,199.8 501.4,200.3 502,200.8 503.1,200.5 503.9,200.8
			505.6,202 506.1,202.9 506.6,202.9 506.8,202.7 507.6,202.7 508,203.1 508.1,203.8 508.3,203.9 508.8,203.9 509.1,203.4
			509.6,203.2 510,203.3 510.7,203.3 511.1,203.6 511.4,203.2 511.9,203.1 512.3,203.3 512.7,203.2 513.7,203.2 514.9,203.9
			515.5,203.9 515.5,203.1 515.4,202.3 517.1,200.4 517.3,199.6 517.7,199.2 518.2,199.1 518.4,198.3 518.2,198 518.1,197.5
			518.3,197.2 517.6,196.8 517.3,196 517,195.6 516.9,194.3 517,193.9 517,193.6 516.4,192.7 516.2,191.9 516.6,191.2 517.2,191
			517.2,189.2 516.9,189 516.7,188.3 516.4,187.7 515.9,186.4 515.5,185.6 515.5,185 515.2,184 514.8,183.9 514.2,183.4
			513.6,183.5 510.5,183.8 507,183.6 506.7,183.7 505.7,184.5 504.9,184.7 504.7,184.5 505.5,184.1 506.3,183.3 506,183.4
			505.4,184 504.4,184.4 503.2,184.1 502.9,183.4 503.1,183 503.8,183.1 504,183.3 504.1,183.1 503.3,182.7 501.9,182.3
			500.8,182.9 500,182.8 499.2,183.2 498.7,183.8 497.9,183.9 497.4,184.4 497.4,184.9 496.5,184.9 495.2,185.6 494.3,185.7
			494,186.4 493.8,187 493.6,187.1 493.6,187.4 493.4,187.4 493.7,188.7 		"/>
		<polygon fill="#E6EEF4" points="494.1,206.2 494.3,205.9 495.1,205.8 495.1,205.4 495.4,205.1 495.6,204.6 496.2,204.8
			497.2,204.9 497.9,205.4 498.7,205.4 499.4,205.2 499.9,205.6 501,205.9 501.1,205.9 501.8,205.4 502.4,205.4 502.7,205.6
			503.8,205.3 504.8,205.1 505.6,204.3 506.3,204.3 506.9,203.7 508.1,203.9 508,203.1 507.6,202.7 506.8,202.7 506.6,202.9
			506.1,202.9 505.6,202 503.9,200.8 503.1,200.5 502,200.8 501.4,200.3 501.6,199.8 500.7,199.9 499.4,199.2 499.2,199.4
			499.8,200.2 499.5,200.2 499.2,200.5 498.8,200.3 498.8,199.8 498.6,199.7 498.4,199.4 498.7,198.7 498.3,198.4 497.8,198.5
			497.4,198 497.4,197.6 496.3,197.5 496,197.6 495.5,197.5 495.3,197.8 495.1,197.4 495,197.5 494.6,197.3 494.2,197.6
			493.3,197.4 493.3,197.9 492.9,198.2 492.5,198.1 491.5,198.1 491.2,198.5 490.6,198.6 490.1,199.2 489.6,199.2 488.6,200.1
			488.2,199.9 487.9,199.7 487.7,199.9 487.7,200.3 488.4,200.7 489,201.6 489,202.3 489.1,202.7 489.7,203 490.6,203.7 491.2,204
			492.3,205.3 492.3,205.3 492.7,205.4 		"/>
		<polygon fill="#E6EEF4" points="475.5,189.9 475.5,190.2 475.3,190.7 475.3,191.2 474.9,191.5 474.3,191.3 474.1,191.8
			474.2,192.2 474.8,192.1 475.1,192.4 475,192.7 474.9,193.3 474.5,193.6 474.8,194.1 474.4,194.3 473.7,194.2 473,194.4
			472.6,194.9 472.3,195.4 472.4,196.2 472.3,197.1 472,197.7 472.1,197.7 471.9,198.1 472.3,199 472.3,199.3 472.7,199.9
			472.3,200.6 472.5,200.6 473.2,201.4 473.3,202 473.6,202.3 473.6,203.2 473.6,203.2 474.1,203.6 474.1,203.9 474.6,204.3
			475,204.2 475.5,204.2 475.9,204.3 476.4,204.1 477,204.4 477.6,204.4 478.1,204.8 477.5,205.4 477.2,206.3 477.2,206.7
			476.8,207.1 476.5,208 476.6,208.8 477,209.1 477.3,209.7 477.3,209.7 477.7,209.8 478.2,209.5 478.9,209.8 479.1,209.4
			479.1,209.1 479.6,208.9 479.8,209.4 480.2,209.5 480.4,209.3 480.8,209.3 481.6,209.9 481.9,210 482,210 482.3,209.9
			482.8,209.7 483.2,210.1 483.9,210.3 484.1,210.1 484,209.7 484.8,209.6 485.5,209.7 485.9,210 486.4,209.9 486.9,210
			487.3,209.9 488.2,209.3 488.7,209.3 489.3,209.4 489.9,209.3 490.5,209.6 490.8,209.4 490.7,208.9 490.1,208.6 490.1,208.2
			490.8,207.3 491.4,206.9 491.8,206.4 492.2,206.4 492.2,205.8 492.3,205.3 492.3,205.3 491.2,204 490.6,203.7 489.7,203
			489.1,202.7 489,202.3 489,201.6 488.4,200.7 487.7,200.3 487.7,199.9 487.9,199.7 488.2,199.9 488.6,200.1 489.6,199.2
			490.1,199.2 490.6,198.6 491.2,198.5 491.5,198.1 492.5,198.1 492.9,198.2 493.3,197.9 493.3,197.4 494.2,197.6 494.6,197.3
			495,197.5 495.1,197.4 495.2,197.1 495.2,195.6 494.8,195.2 494.5,195 494,193.9 494.2,193.4 494,192.8 494,192.4 493.6,191.9
			493.7,191.3 492.8,190.4 492.8,190 493.6,189.6 493.7,188.7 493.4,187.4 492.9,187.4 492.5,187.2 492.1,187.2 491.5,186.8
			491.7,186.3 491.3,185.8 490.8,185.9 490.1,185.2 489.6,185.1 489.4,184.8 489.1,185 488.5,185 488,185.4 487.8,185.2 488,184.9
			488.1,185 488.4,184.8 488.9,184.5 488.2,184.5 488,184.6 487.9,184.9 487.3,185.2 487.3,185.4 486.3,185.6 485.9,186.1
			485.8,186.5 485.2,186.6 485.1,186.3 484.6,186.2 484.3,186.3 483.6,186.1 484.1,185.8 484.4,185.8 484.8,185.4 484.8,184.9
			484.6,184.8 484.1,185.1 484,185.3 483.3,184.8 483.1,184.5 482.8,184.7 482.7,185 482.2,185.3 482.1,184.8 481.6,184.7
			481.5,184.4 481.7,184.1 482,183.5 481.5,183.4 481,182.9 480.5,182.9 480.2,182.8 479.1,182.5 478.4,182.6 478.4,182.7
			478.4,183.1 478.8,183.4 479.1,183.4 479,183.8 479.6,184.4 479.1,184.6 478.7,184.6 478.7,185 479.2,184.8 479.2,185.5
			479.7,185.8 479.2,186.1 479.2,186.5 479.6,186.8 480.3,186.8 481.2,187.7 482.3,188.2 481.1,188 480.2,187 479.6,187.2
			479.2,187 478.8,187.1 478.4,187.6 478.5,188.1 478.5,188.9 478.8,189.4 478.2,188.7 478.2,188.1 477.8,187.7 477.6,187.8
			477.6,188.2 477.8,188.7 477.6,189 477.1,188.5 477.1,187.8 476.5,187.4 476.1,187.6 474.9,187.9 474.8,188.5 475,188.9
			475.6,189 475.8,189.6 475.7,189.6 475.7,189.7 		"/>
		<polygon fill="#E6EEF4" points="482,211.1 482.2,211.4 482.5,211.4 482.5,210.9 482.2,210.7 482.2,210.7 		"/>
		<polygon fill="#E6EEF4" points="484.8,211.4 484.3,211.4 483.8,211.9 483.2,211.3 482.9,211.5 482.5,211.4 482.2,211.4 482,211.1
			482.2,210.7 482.2,210.3 481.6,209.9 480.8,209.3 480.4,209.3 480.2,209.5 479.8,209.4 479.6,208.9 479.1,209.1 479.1,209.4
			478.9,209.8 478.2,209.5 477.7,209.8 477.3,209.7 476.4,210 475.9,209.9 475.7,209.5 475.1,209.6 474.7,210 475.3,210.3
			475.4,210.8 474.9,211.1 474.4,211.8 473.9,211.9 473.2,213.1 473.1,213.9 473.1,214.4 472.8,214.4 472.5,214.6 472.5,215
			473.1,215.1 473.8,214.8 473.5,214.1 473.9,213.8 474.7,213.8 475,214.3 475.2,215 475.6,215.3 475.6,215.8 476.2,216
			477.3,215.2 478,215.5 479,213.8 479.7,214.2 479.6,214.8 480.5,215.3 480.8,215.8 481.3,214.8 481.3,214.1 482.5,214.4
			483,214.3 483.5,214.7 483.6,213.7 484.7,213.5 484.4,212.6 485,211.9 		"/>
		<polygon fill="#E6EEF4" points="467.1,195.5 467.4,195.4 467.2,195.1 466.7,195.3 467,195.3 		"/>
		<polygon fill="#E6EEF4" points="467.4,194.9 467.5,195 467.8,195.1 467.9,195 467.3,194.8 467,194.7 467.1,195 		"/>
		<polygon fill="#E6EEF4" points="466.4,196.8 466.8,196.8 467.1,197.1 467.4,196.8 467.9,196.7 468,196.5 468.4,196.5 468.6,196.1
			469.5,196.1 469.9,196.4 470.3,196.4 470.6,196.8 471.3,196.7 471.6,197.2 471.6,197.6 472,197.7 472.3,197.1 472.4,196.2
			472.3,195.4 472.6,194.9 473,194.4 473.7,194.2 474.4,194.3 474.8,194.1 474.5,193.6 474.9,193.3 475,192.7 475.1,192.4
			474.8,192.1 474.2,192.2 474.1,191.8 474.3,191.3 474.9,191.5 475.3,191.2 475.3,190.7 475.5,190.2 475.5,189.9 475.7,189.7
			475.7,189.6 475.2,189.4 474.8,189 474,188.6 473.2,188.7 472.7,189.2 472.2,189 471.9,189.2 471.2,189.2 470.6,189.9
			469.6,190.4 469.4,190.3 468.8,190.5 468.8,191.2 468.2,191.6 468.4,192.2 468.3,192.8 468,193.3 467.9,193.7 467.4,194
			467.5,194.4 468.1,195 468.7,195.1 468,195.1 467.7,195.4 467.5,195.5 467.8,195.9 468.1,195.9 468.1,196.2 467.6,196.2
			467.2,195.7 466.7,195.5 466.2,195.7 466.4,195.9 466.8,196 467.2,196.3 467.4,196.3 467.9,196.6 467.4,196.5 467.1,196.5
			466.3,196.2 465.8,196.2 465.8,196.2 466.1,196.4 		"/>
		<polygon fill="#E6EEF4" points="465.3,198.6 465.9,198.8 466,199.3 466.8,199.9 467.2,199.9 467.5,200.2 467.9,200.4 467.9,201.1
			468.5,201.4 468.8,201.2 469.2,201.2 469.4,201.5 469.8,201.6 470.4,202.4 471,202.4 471.5,202.8 471.7,202.6 472.1,202.6
			472.1,202.3 471.9,202.1 471.9,201.7 471.7,201.5 472,201.1 472.2,200.6 472.3,200.6 472.7,199.9 472.3,199.3 472.3,199
			471.9,198.1 472.1,197.7 472,197.7 471.6,197.6 471.6,197.2 471.3,196.7 470.6,196.8 470.3,196.4 469.9,196.4 469.5,196.1
			468.6,196.1 468.4,196.5 468,196.5 467.9,196.7 467.4,196.8 467.1,197.1 466.8,196.8 466.4,196.8 466.1,196.4 465.8,196.2
			465.2,196.7 464.9,197.4 465.2,197.6 		"/>
		<polygon fill="#E6EEF4" points="473.6,202.3 473.3,202 473.2,201.4 472.5,200.6 472.3,200.6 472.2,200.6 472,201.1 471.7,201.5
			471.9,201.7 471.9,202.1 472.1,202.3 472.1,202.6 472.1,202.6 472.5,203.1 473.2,203.3 473.6,203.2 		"/>
		<polygon fill="#E6EEF4" points="442.1,155.8 442.1,155.3 442.1,155 441.7,154.8 		"/>
		<polygon fill="#E6EEF4" points="442.6,151.3 442.4,151.3 442.7,151.7 		"/>
		<path fill="#E6EEF4" d="M442.4,152.2l0-0.5l-0.5-0.4c0,0-0.3,0-0.3,0l0.5,0.7L442.4,152.2z"/>
		<polygon fill="#E6EEF4" points="442.2,153.8 442,153.5 441.7,153.7 442.2,154.1 		"/>
		<polygon fill="#E6EEF4" points="442,153 442.5,153 442,152.6 441.3,151.4 441.1,151.7 441.3,152.2 		"/>
		<polygon fill="#E6EEF4" points="441.2,152.5 440.7,151.9 440.7,152.4 		"/>
		<polygon fill="#E6EEF4" points="438,182.5 437.9,182.7 437.5,182.7 437.5,183 437,183.1 437.1,183.5 437.7,183.5 437.6,183.7
			438.1,183.5 438.5,183.5 437.8,184.2 437,184.5 437.3,184.8 436.5,184.9 436.1,184.7 435.8,185.1 435.6,184.6 434.3,184.4
			434.3,184.6 433.6,184.5 433.5,185.2 433.8,184.9 433.9,185.3 434.1,185.4 434.2,185.9 433.9,185.9 433.9,185.6 433.2,185.7
			434,186.2 434.5,186.1 434.7,186.5 434,186.7 433.9,187 434.1,187.2 433.3,187.3 433.5,187.7 433.2,187.8 433.7,188.1 434,188
			433.8,188.2 434.4,188.1 434.6,188.8 436.1,188.8 435.6,189.3 435.3,189 434.7,190 434.9,190 434.5,190.6 433.5,191.3
			433.9,191.3 434.4,190.9 434.8,191.1 435.4,191.1 435.9,190.7 435.9,190.9 436.4,190.9 435.2,191.3 434.3,191.3 434.1,191.7
			433.5,191.9 433.7,192.2 433.5,192.4 433.8,192.5 433.4,192.6 433,192.3 432.8,192.5 432.7,192.3 432,192.7 432.1,192.9
			433.8,192.8 433.2,193.3 432.5,193.5 432.2,194.1 432.7,194.1 432.8,194.4 434.1,194 433.1,194.6 432.7,194.9 433.4,194.9
			434.3,194.4 434.2,194.8 433.5,195.1 433.9,195.1 433.8,195.4 434.5,195.2 434.8,195.5 435.7,195.4 436.6,195.1 437.3,194.6
			437.1,194.1 437.6,194.1 437.5,194.5 438,194.5 438.5,193.9 438.9,194 439,193.4 440.6,193.3 440.7,192.9 441,193.3 441.3,193
			441.6,193.1 442.4,193.1 441.9,192.4 442.3,192.2 442.7,191.7 442.6,191.3 443,190.8 443.2,190.2 443,189 442.6,188.8 443,188.5
			443,188 442.7,187.4 442.8,186.8 442.4,186.5 442.6,186.2 442.9,186.3 442.3,185.9 441.9,185.8 441.4,184.7 440.6,184.3
			440.3,184.6 440.1,185.3 439.7,185.4 438.5,184.3 439.1,183.1 439.7,183 439.9,182.5 440.2,182.3 440.5,182.1 440.2,182.1
			440.8,181.7 441.3,181.4 440.7,181.1 440.3,180.7 440.5,181.1 439.9,181.1 440,181.7 439.6,182.3 439.7,181.9 439.9,181.6
			439.6,181.2 439.2,181.2 439.5,181.6 439,181.6 438.8,181.3 438,181.5 438,181.9 437.8,181.9 437.6,182.4 		"/>
		<polygon fill="#E6EEF4" points="442.6,174.4 442.9,174.8 443,174.6 442.9,174.3 		"/>
		<polygon fill="#E6EEF4" points="443.8,178.8 444.3,177.9 443.3,178.8 443.5,179.3 		"/>
		<polygon fill="#E6EEF4" points="443.1,171.9 442.8,172 442.8,172.6 442.3,172.2 442.3,172.7 442.1,172.6 441.9,172.8 442.4,173.1
			442.4,172.9 442.6,173.1 442.5,173.3 442.9,173.9 443.5,173.8 443.6,174.4 443.8,174.4 444,173.9 444.3,173.7 444.1,173.5
			443.8,173.6 443.3,173.3 443.3,172.3 		"/>
		<polygon fill="#E6EEF4" points="450.1,166.1 449.9,166.1 450.1,166.4 		"/>
		<polygon fill="#E6EEF4" points="460.4,195.9 460.2,196 460.5,196.2 460.8,196.1 460.6,195.9 		"/>
		<polygon fill="#E6EEF4" points="441.8,170.9 441.6,171 441.5,171.3 441.3,171.4 441.6,171.6 442.2,171.1 		"/>
		<polygon fill="#E6EEF4" points="443.1,178.2 443.1,177.9 442.9,178.5 		"/>
		<polygon fill="#E6EEF4" points="443.1,174.8 443.2,175.1 443.4,174.8 		"/>
		<path fill="#E6EEF4" d="M454.5,159.2l-0.4,0.1l-0.1,0.3c0,0,0.4,0.2,0.4,0.2L454.5,159.2z"/>
		<polygon fill="#E6EEF4" points="455.3,159.2 455.2,158.6 455,158.5 455,158.8 454.8,159.1 455.1,159.5 		"/>
		<polygon fill="#E6EEF4" points="455.8,157.9 455.5,158.3 455.6,158.5 		"/>
		<polygon fill="#E6EEF4" points="441.3,176.7 441.8,176.4 441.4,176.3 		"/>
		<polygon fill="#E6EEF4" points="442.1,170 441.6,169.7 441.3,170.1 441.5,170.4 441.3,170.6 441.6,170.8 442,170.7 442.5,170.8
			442.9,170.4 442.7,170.2 442.9,169.8 443.3,169.4 443.2,168.7 442,169.5 		"/>
		<polygon fill="#E6EEF4" points="455,161.5 454.8,161.4 454.6,161.8 		"/>
		<polygon fill="#E6EEF4" points="454.6,160.7 454.8,161.1 455.1,161.2 455,160.8 455.2,160.5 455.2,160.2 455.4,160 455,159.8
			454.7,159.7 454.5,159.8 454.7,160 454.6,160.3 454.1,160.2 453.7,160.4 453.9,160.6 		"/>
		<polygon fill="#E6EEF4" points="440.5,172.6 440.5,172.7 440.9,172.9 441,172.5 		"/>
		<polygon fill="#E6EEF4" points="449.6,166.7 449.6,167.1 450.1,167 450.4,167.2 450.4,166.8 449.8,166.8 450,166.6 449.7,166.3
			449.3,166.3 449.3,166.8 449.5,167 		"/>
		<polygon fill="#E6EEF4" points="444,172.4 444.1,173 444.1,173.2 444.8,173.1 444.3,173.3 444.3,173.4 444.4,173.5 444.8,173.4
			444.7,173.5 444.9,173.7 444.6,173.6 444.5,173.7 444.4,174 444.5,174.1 444.3,174.1 444.1,174.4 444.4,174.5 444.5,174.7
			444,174.5 443.9,174.9 444.1,175 444,175.2 443.7,175.4 443.3,175.4 443,175.6 443.2,175.7 443.6,175.7 443.9,175.8 443.9,175.9
			443.5,175.9 444,176.3 444.1,176.3 444.3,176.5 445.5,175.4 445.3,175.7 445.4,175.8 445.1,175.9 444.8,176.6 444.9,176.8
			444.5,177.4 444.7,177.5 444.4,178.3 444.4,178.8 444.2,179.1 444.4,179.4 444.6,179.3 444.2,179.8 444.2,180.6 443.9,180.9
			443.9,181.1 444.5,181.1 444.4,180.7 444.7,180.1 444.7,179.7 445,179.3 444.7,178.4 445,178.4 445.7,177.5 445.1,178.3
			445.1,178.9 445.3,179 445.3,178.7 445.7,178.4 445.8,178.9 446.1,178.3 446,177.8 446.3,177.7 446.2,178.3 446.8,178.8
			446.3,178.6 446.1,179.4 446.2,179.9 446.5,180 446.7,180.5 446.2,180.9 445.8,182.1 445.9,182.6 445.5,182.4 445.5,183
			446,183.7 445.9,183 446.2,182.9 447.2,183.6 447.2,183.1 446.8,182.8 447.1,182.7 447.9,183.2 448.4,183.1 448.4,182.9
			448.9,182.9 449.1,182.4 450.4,182.5 449.5,182.7 449,184.3 449.7,185.5 450,185.3 450,185.9 450.4,185.4 451,185.5 450.8,186.1
			451,186.3 450.4,186.7 450.6,187.4 450.3,188 450.6,188.4 451,188.8 451.4,188.8 451.1,189 450.8,189 450.5,188.5 450.2,188.7
			450.4,189.1 450.7,189.3 450.3,189.2 449.9,188.8 449,189.1 448.6,189 447.7,189.5 447.2,190.2 446.6,190.6 446.3,191
			446.7,190.9 446.9,191 447,190.7 447.9,190.5 447.8,191 448.2,191.3 447.8,191.6 448,192 448.2,192 447.6,193.2 447.2,193.3
			446.7,193.7 446.5,193.7 445.9,194 445.5,194 444.9,194.5 445.4,194.5 445.4,194.9 445.1,195.1 445.7,195.2 445.6,195.4
			445.8,195.5 446.2,195.4 446.6,195.1 447.4,194.9 447.4,195.2 448,195.4 447.5,195.5 447.5,195.8 448.3,195.8 448.3,195.6
			448.6,195.5 449,196 449.4,196.4 450.3,196.4 450.5,196.1 450.9,195.9 451.5,195.7 451.7,195.3 452.2,195.1 451.5,195.9
			450.9,196.5 450.9,197.3 450.4,197.2 450,197.4 449.6,197.1 448.5,197 447.7,197.2 447.7,197.7 447.3,198 446.9,198 446.8,198.9
			446.3,199.4 446.2,199.6 445.6,199.7 445.5,200.3 445.3,200.3 445.1,200.6 444.5,201 444.2,200.9 443.7,201.3 443.7,201.7
			444.2,201.7 444.3,201.3 444.9,201.5 445.1,201.9 445.4,201.6 445.3,201.4 445.6,201.1 445.7,201.2 446,200.9 446.2,200.9
			446.4,200.5 446.9,200.6 447.3,200.5 447.7,200.5 447.9,200.4 448.1,200.7 448.4,200.7 448.8,201 449.2,201 449.1,200.7
			449.5,200.5 449.6,200.2 449.5,199.8 449.8,199.5 450,199.4 450.1,199.2 451.1,199 451.6,199.1 452.2,199.5 452.5,199.4
			453.1,199.4 453.5,199.5 453.6,199.1 454.2,198.8 454.6,198.9 455.2,198.5 455.6,198.6 455.8,198.6 456.1,198.4 456.2,198.6
			456.6,198.8 457,198.5 457.9,198.5 458.4,198.4 459,198.6 459.2,198.6 459.7,198.3 460.1,198.2 460.5,197.8 460.8,197.8
			461.1,197.9 461,197.6 461.6,197.1 462,197 462.1,196.6 462,196.3 462.1,196 461.4,196 460.8,196.2 460.5,196.3 460.1,196.1
			459.9,196.1 460.1,195.9 460.2,195.9 460.3,195.8 459.8,195.7 459.4,195.8 460,195.5 460.3,195.5 460.7,195.3 460.6,194.9
			460.2,194.9 460.5,194.6 460.7,194.4 461,194.6 461.4,194.4 461.5,194.1 461.4,194.1 461.5,193.9 461,193.8 461.2,193.5
			461.5,193.6 461.6,193.8 461.9,193.4 462.2,193.2 462.3,192.4 462.6,191.7 462.3,191.4 462.2,190.7 461.3,190 460,189.9
			459.2,189.9 459.1,190.5 458.9,190.9 458.5,190.4 458,190.3 458.8,189.5 458.8,189 458.2,188 457.9,187.9 457.3,187.6
			457.1,187.2 456.8,187.3 456.6,187.3 456.3,187.2 456.1,187.2 456.5,187.1 456.7,187.2 457.1,187.1 457.4,187.2 457.6,187.4
			457.9,187.4 458.2,187.4 457.4,186.5 457.1,186.1 457.3,185.7 457.5,185.6 457.1,185.4 457,185.2 456.8,185.1 456.4,184.3
			455.7,184 454.8,183.8 454.7,183.4 454.5,183.3 454.2,182.3 453.9,181.7 453.7,180.5 453.4,180 453.1,180 452.3,178.9
			451.9,178.8 451.5,178.5 450.9,178.2 450.7,178.4 450.2,178.8 449.6,178.5 449.3,178.6 448.7,178.4 448.6,178.1 448.9,178.3
			449.5,178.3 450.1,178.2 450.2,177.7 450.8,177.8 451.2,177.4 450.7,177.2 450.7,176.9 450.5,176.7 449.8,177.1 449.7,176.9
			450.2,176.6 450.9,176.6 451.2,176.3 451.3,176 451.6,175.8 451.9,175.1 452.2,174.8 452.1,174.5 452.4,174.1 452.3,173.9
			452.5,173.2 453,172.8 453,172.4 452.3,171.8 452.2,171.9 451.1,172 450.4,171.8 450.2,172 449.8,172 449.4,171.8 449.1,171.8
			449.1,172 448.7,172.1 448.2,172.4 448,172.4 447.7,172.6 447.6,172.5 448,172 448.5,171.3 448.2,171.5 447.8,171.4 448,171.2
			448.1,170.9 449.2,170.1 449.5,169.6 449.9,169.4 450,168.9 449.8,168.7 450.1,168.4 450,168.2 449.5,168.2 449.3,168.4
			448.9,168.3 448.4,168.5 447.9,168.5 447.5,168.7 447.3,168.7 447,168.9 447.1,168.6 446.9,168.5 446.4,168.9 446.5,168.6
			445.9,168.3 445.8,168.7 445.6,168.8 445.7,169.2 445.5,169.2 445.6,169.7 445.1,169.7 445.3,170.1 445.1,170.5 444.9,170.5
			445.5,171 445.6,171.3 445.1,171.1 444.9,171.2 444.5,171 444.5,171.2 444.6,171.4 444.5,171.6 444.2,171.2 444.1,171.6
			444.3,171.9 444.1,172.1 444.4,172.5 444.7,172.5 444.4,172.6 		"/>
		<polygon fill="#E6EEF4" points="441.1,172.3 441.2,171.9 440.5,171.9 440.3,172 440.7,172.4 		"/>
		<polygon fill="#E6EEF4" points="445.7,179.2 445.5,178.9 445.5,179.3 445.8,179.5 		"/>
		<polygon fill="#E6EEF4" points="439.9,182.5 439.7,183 439.1,183.1 438.5,184.3 439.7,185.4 440.1,185.3 440.3,184.6 440.6,184.3
			441.4,184.7 441.9,185.8 442.3,185.9 442.9,186.3 443,186.3 443,185.9 443.2,185.9 443.7,185.6 443.7,185.2 444.3,185.3
			444.4,184.8 444,184.7 444.2,184.3 444,184 444.3,184 444.7,184.9 444.5,183.7 443.7,183.6 444.1,183.3 443.3,182.2 443.3,181.7
			442.9,181.5 442,181.4 441.5,181.7 441.2,181.8 441,182 440.5,182.1 440.2,182.3 		"/>
		<polygon fill="#E6EEF4" points="446.4,185.4 446.2,186.1 446.6,186 447.3,185.4 447.2,185.1 447.3,184.6 		"/>
		<polygon fill="#E6EEF4" points="443.4,179.7 443.1,178.8 442.3,179.1 442.4,179.8 442.9,179.5 442.8,180 		"/>
		<polygon fill="#E6EEF4" points="442,176.2 442.4,176 442.5,175.6 		"/>
		<path fill="#E6EEF4" d="M446.7,189l0.8,0.4l0.7-0.5l-0.5,0.1l-0.2-0.5l-0.6,0.1C446.8,188.6,446.7,189,446.7,189z"/>
		<polygon fill="#E6EEF4" points="455.2,198.8 454.5,199.2 454.9,199.2 455.2,199.5 455.6,199.5 455.6,199.3 455.8,198.9 455.5,199
					"/>
		<polygon fill="#E6EEF4" points="444.8,179.9 445,180.7 445.5,180.9 445.7,180.4 445.3,179.6 		"/>
		<polygon fill="#E6EEF4" points="443.8,177.3 444.3,176.9 444.1,176.5 443.7,176.4 443.3,175.9 442.8,176.3 443.5,176.6
			443.1,176.9 443.2,177 442.7,177.4 443.7,177.1 		"/>
		<polygon fill="#E6EEF4" points="449.7,167.5 449.5,167.2 449.3,167.2 449.6,167.7 		"/>
		<polygon fill="#E6EEF4" points="440.4,174.2 440.2,174.5 440.1,174.8 440.5,174.6 		"/>
		<polygon fill="#E6EEF4" points="440.8,173 440.5,173 440.6,173.3 440.4,173.6 440.5,174 440.9,174.1 440.7,173.6 440.9,173.3
			"/>
		<polygon fill="#E6EEF4" points="477.3,221.4 476.4,221.4 475.6,220.8 475.4,219.4 474.8,218.6 475.2,218.2 475.8,218.1 476,217.2
			475.4,216.7 475.4,216 475.6,215.7 475.6,215.8 475.6,215.3 475.2,215 475,214.3 474.7,213.8 473.9,213.8 473.5,214.1
			473.8,214.8 473.1,215.1 472.5,215 472.5,214.6 472.8,214.4 473.1,214.4 473.1,213.9 473.2,213.1 473.9,211.9 474.4,211.8
			474.9,211.1 475.4,210.8 475.3,210.3 474.7,210 475.1,209.6 475.7,209.5 475.9,209.9 476.4,210 477.3,209.7 477,209.1
			476.6,208.8 476.5,208 476.8,207.1 477.2,206.7 477.2,206.3 477.5,205.4 478.1,204.8 477.6,204.4 477,204.4 476.4,204.1
			475.9,204.3 475.5,204.2 475,204.2 474.6,204.3 474.1,203.9 474.1,203.6 473.6,203.2 473.2,203.3 472.5,203.1 472.1,202.6
			472.1,202.6 471.7,202.6 471.5,202.8 471,202.4 470.4,202.4 469.8,201.6 469.4,201.5 469.2,201.2 468.8,201.2 468.5,201.4
			467.9,201.1 467.9,200.4 467.5,200.2 467.2,199.9 466.8,199.9 466,199.3 465.9,198.8 465.3,198.6 465.2,197.6 464.9,197.4
			464.8,197.5 463.8,197.9 463.6,197.7 462.8,198.1 462.6,198.7 462.7,199.3 462.5,200.4 461.7,201.1 461.7,201.5 460.8,201.7
			460.4,201.8 459.9,201.6 458.8,202.2 458.6,202.6 458.8,203 459.2,203.1 458.6,203.6 457.8,203.8 456.7,203.6 456.2,203.4
			455.8,203.6 455.7,203.2 455.3,203 455.5,202.5 455,202.3 454.6,202.5 453.9,202.4 453.6,202.3 453.8,203 453.7,203.2
			454.6,204.1 454.5,204.4 454.6,204.8 454.5,205.2 454.8,205.6 454.8,206.1 453.9,205.9 453.4,206.1 453,206 452.6,206.1
			452.4,205.9 451.8,206.4 451,205.4 450.5,205.2 449.9,205.4 449.4,205.9 449.1,205.7 448.8,206 448.5,205.8 447.9,205.9
			447.6,206.3 446.7,206.3 446.4,206.8 446.6,207.1 447,207 447.5,207.1 447.7,207.3 447.1,207.2 446.8,207.2 447,207.8
			447.2,207.4 447.5,207.5 447.6,207.8 447.3,208 446.8,208.2 446.8,208.3 447.3,208.3 447.5,208.9 447.4,209.2 448,208.8
			448.4,209 448.7,208.9 449.6,209.2 449.8,209.6 450.2,209.6 450.8,210 451.2,209.6 451.5,209.6 451.4,209.9 451.5,210.1
			452,209.9 452.3,210.1 452.1,210.7 452.3,211.1 452.6,211.1 453.2,210.8 453.7,210.8 454.1,211.3 453.7,211.1 453.1,211.1
			452.8,211.5 453.1,211.6 453.2,212.2 453,212.7 453.1,213 453.5,213.1 454.2,213.9 454.9,214 455.6,214.4 455.5,214.9
			455.8,215.3 455.6,215.9 455.5,215.9 455.3,216.4 455.8,216.5 456.6,217.2 457.3,218.7 456.6,218 456.4,217.4 455.8,217.1
			455.5,217.3 455.3,218.7 455.3,219.7 455.7,220 455.4,220.2 455.2,222.1 454.7,223.8 454.1,224.1 454.6,224.4 454.6,224.5
			455,224.6 455.1,225.2 455,225.6 455.8,225.5 456.9,226 457.4,226.5 458,226.3 458.6,226.9 459.4,226.9 459.8,227.1 460.2,226.6
			461.5,226.6 462,226.8 462.7,226.7 463.5,227.2 464.8,227.1 465.8,227.6 466.1,227.7 466.1,227.5 465.9,226.7 466.1,225.7
			466.2,225.3 466.8,224.7 467.7,223.7 468.1,223.6 468.4,223.9 469,224 469.7,224.4 470.1,224.4 470.6,224 471,224 472.7,225
			473.1,225.4 474.4,225.5 474.9,225 474.8,224.8 475.3,224.2 477,222.9 477.1,222.8 476.9,222.2 		"/>
		<polygon fill="#E6EEF4" points="479.7,228.1 479.8,228.5 480.2,228.7 480.2,228.9 480,229.1 480.2,229.3 480.5,229.5 480.5,229.9
			480.7,229.9 480.9,230.2 480.6,230.1 480.5,230.4 480.6,230.7 481.4,231 482,230.8 482.3,229.9 482.2,229.2 482.6,227.9
			482.3,226.8 482.4,226.1 482.2,225.3 481.9,225.3 481.8,225.8 482,226.1 481.9,226.6 481.7,226.6 481.4,226.3 481,226.6
			480.2,226.9 479.8,227.6 480.1,227.9 480,228.1 		"/>
		<polygon fill="#E6EEF4" points="496.1,249.8 496.6,250.3 496.9,249.9 496.9,249.5 496.1,249.4 		"/>
		<polygon fill="#E6EEF4" points="479.3,232.2 479.4,231.9 479.6,231.7 479.4,231.5 479.3,231.8 479.1,231.9 479.1,232.2 		"/>
		<polygon fill="#E6EEF4" points="479.5,234 479.6,234.4 479.9,234.7 479.9,235.4 479.5,235.8 479.7,236.1 480.2,236.2 480.2,236.4
			479.9,236.8 479.7,237.8 479.9,238.1 480.2,239.3 480.6,239.7 480.8,239.6 481.1,239.7 481.5,239.5 481.5,238.9 481.7,238.5
			482.2,238.6 482.5,238.9 482.9,238.9 483.1,238.5 483.1,237.5 483.2,237.2 483,236.1 483.3,235.1 482.5,234.4 483.2,234
			483.2,233.6 483.1,233 482.7,232.6 482.3,231.8 482.1,232 481.6,231.7 481.2,231.7 480.2,232.9 479.8,232.9 479.1,232.5
			479.1,233.1 479,233.5 		"/>
		<polygon fill="#E6EEF4" points="485.1,226.3 485,226 484.8,225.7 484.6,225.9 484,226.1 483.8,226.4 484.1,226.5 484.6,226.3
			"/>
		<polygon fill="#E6EEF4" points="486.2,227.7 486.5,227.8 486.4,227.6 		"/>
		<polygon fill="#E6EEF4" points="498.9,242.9 499,242.2 498.6,241.6 497.9,242.3 497.6,242.3 497,241.9 496.4,242.6 495.1,242.5
			494.1,242.8 493.3,242.7 492.8,242.3 492.2,242.4 491.9,242.6 491.7,242.4 491,242.7 490.9,243.6 491.5,244.1 492.1,244
			493.1,244.8 493.7,244.9 494.2,245.5 495.5,245.9 495.7,245.8 496.3,246.2 496.4,246.6 497.7,247.1 498.2,247 498.2,246.3
			498.4,246 498.4,245.4 497.9,244.7 498.4,243.4 		"/>
		<polygon fill="#E6EEF4" points="492.8,214.9 492.6,214.4 493.2,213.5 492.8,213.1 491.9,213.2 490.2,212.9 488.8,212.1
			488.9,211.5 488,211.6 487.4,211.4 485.9,212.3 485,211.9 484.4,212.6 484.7,213.5 483.6,213.7 483.5,214.7 483,214.3
			482.5,214.4 481.3,214.1 481.3,214.8 480.8,215.8 480.5,215.3 479.6,214.8 479.7,214.2 479,213.8 478,215.5 477.3,215.2
			476.2,216 475.6,215.7 475.4,216 475.4,216.7 476,217.2 475.8,218.1 475.2,218.2 474.8,218.6 475.4,219.4 475.6,220.8
			476.4,221.4 477.3,221.4 476.9,222.2 477.1,222.8 478.4,222.6 478.9,222 478.9,221.5 480.4,220.7 482.2,221.2 482.8,221.6
			483.6,221.8 483.8,222.3 484,222.6 484.2,223 484.7,223.8 484.7,224.3 485.2,224.6 485.1,225.3 485.8,225.7 486.2,226.2
			487,226.9 487.1,227.4 487.9,227.4 488.4,228.1 488.5,228.5 488.8,228.7 490,230.1 491.1,230.9 491.6,231 492.1,231.3
			492.2,231.8 492.7,231.8 493,231.5 493.6,231.7 494.1,231.7 494.7,232.8 495.1,233.1 495.4,232.9 495.9,233.1 495.8,233.5
			496.3,233.5 496.8,233.5 497.2,234 497.1,234.5 497,234.7 497.2,235 497.8,235.1 498,235.5 498.8,235.7 499.1,235.5 499.5,235.8
			499.7,236.6 499.9,237.5 500.2,237.9 500.4,238.8 500.7,239.3 500.7,239.8 500.4,240.2 500.2,240.2 500,240.3 500.1,240.8
			500,241.4 499.7,241.7 499.3,241.9 499.2,242.1 499.2,242.6 499.8,243.2 500.6,243.1 501,242.6 501.1,242 501.9,241.4 502,240.1
			502.4,239.6 502.9,239.5 503.1,239.1 503,238.8 503,238.1 502.9,237.8 502.1,237 501.7,237 501.5,236.7 501.5,236.3 501.9,236
			502,235.6 501.9,235.2 502.3,234.9 502.4,234.2 502.7,234.1 503.1,234 503.6,234.3 503.8,234.5 504.7,234.5 505,234.7
			504.9,235.1 505.1,235.7 505.5,236.1 506,236.3 506,236.2 506.2,236.1 506.1,235.6 506.4,235.3 506.4,234.6 506.2,234.2
			505.8,233.9 504.9,233.6 504.3,233 503.5,232.4 501.3,231.2 500.2,231 499.6,231 499.4,230.5 499.4,230.3 500.1,229.8
			500.2,229.4 499.7,229.2 499,229.3 498.6,229.1 497.5,229.2 497.2,228.9 496.7,228.8 496.3,228.4 495.5,227.8 495.1,227.2
			494.6,226.7 494.2,226.1 494.2,225.6 493.9,225.4 493.9,224.9 492.1,223.1 491.7,222.6 491.1,222.3 489.8,221.6 489.5,221.2
			489.5,220.4 489.1,219.7 489.4,219.5 489.8,218.9 489.4,218.4 489.1,217.8 489.4,217.4 490,217.3 490.5,216.8 491.1,216.8
			491.5,216.4 491.9,216.2 492.6,216.4 492.4,215.4 		"/>
		<polygon fill="#E6EEF4" points="462.8,239.6 463.1,239.3 462.9,238.9 462.2,239.2 462.1,239.7 462.5,240 		"/>
		<polygon fill="#E6EEF4" points="468.8,236.6 469,236.4 468.4,235.8 467.6,235.9 467.5,236.3 468.4,236.4 		"/>
		<path fill="#E6EEF4" d="M464.8,227.1l-1.3,0.1l-0.8-0.4l-0.8,0.1l-0.5-0.3l-1.3,0l-0.5,0.5l-0.4-0.2l-0.8,0l-0.6-0.6l-0.6,0.3
			l-0.5-0.6l-1.1-0.4l-0.8,0.1l0.1-0.4l-0.1-0.6l-0.3-0.1l-0.1-0.1l-0.5-0.3l-0.2,0.1l-0.4,0l-0.3,0.4l-1.5-0.9h-0.5l-0.5,0.5
			l-1-0.2l-0.2-0.4l-1-0.1l-1.3,0.6l-0.9-0.2l-2-0.3l-0.7-0.4l-0.2-0.3l-0.9,0.3l-0.7,0.3l-0.7-0.3h-0.6l-0.5,0.4l-0.6-0.7l-0.7-0.1
			l-0.4,0.3l-0.1-0.2l-1,0.6l0.1,0.4l0.3,0.2l-0.4,0.3l-0.9,0.1l-0.4-0.2l-1.1,0.4l-0.3,0.6l0.3,0.6l0.4-0.1l0,0.3l0.2,0.1l-0.1,0.8
			l0.2,0.1l0.4-0.4l-0.1,0.6l0.2,0.2l-0.3,0.3l0.5,0.1l-0.7,0.6l0,0.2l1.2-0.2l0.5,0.1l-0.1,0.6l0.2,0.4l0.9-0.5l1.5,0.3l0.5-0.5
			l1.3,0.2l0.1,0.7l0.6,0.8l-0.2,0.6h-0.4l-1,1l0.1,0.7l-0.1,1.8l-0.6,0.6l0.5,0.5l-0.7,1l-0.5-0.1l-0.7,0.2l0.7,1.4l0.6,0.4l0,1.1
			l-0.9,0.9l0.4,0.8l0.6,0l-0.1,0.5l-0.7,0.6l-0.6,1.2l0.4,0.6l0,0.7l0.5,0.1l0.8,0.1l1.1,1.1l-0.1,0.2l0.5,1.3l0.9,0.9l0.9,0.1
			l0.8-0.4l0-0.5l0.4-0.3l1-0.1l0.9-0.9l1-0.1l0.5-0.3l1.1,0.3l0.8,0.1l0.2-0.2l0.5,0l0.5,0.4l0.4-0.4l0.3-0.5l0.5,0.5l0.6,0.3
			l0.7-1.1V245l1.7-0.8l0.9,0l0.2-0.4l-0.2-0.2l0.1-0.8l0.9-1.2l0-0.7l0.9-0.2l0.6-0.6l-0.7-0.9l-0.4-0.2l-0.1-0.5l-0.5-0.8l0.3-0.4
			l1.1-1.8l0.6-0.3l0.8-1.4l0.3,0.1l-0.1,0.1l0.1,0.1l0.4-0.2l0.1-0.7l-0.3-0.3l0.6-0.3l0.7-0.5l1.1,0.1c0,0,0.8-0.3,0.9-0.4
			c0.1,0,0.5-0.6,0.5-0.6l1-0.6l0.3-0.5l0.1-0.7l-0.1-0.9l0.4-0.3l0-0.3l-0.3-0.1L464.8,227.1z"/>
		<polygon fill="#E6EEF4" points="465.9,238.2 466.1,237.5 466.8,236.9 466.2,236.9 465.6,236.8 465,237.1 464.9,237.6 465.5,237.8
					"/>
		<polygon fill="#E6EEF4" points="438.9,243.7 439.5,242.5 440.2,241.9 440.3,241.4 439.7,241.4 439.3,240.6 440.1,239.7
			440.1,238.5 439.5,238.1 438.7,236.8 439.4,236.6 439.9,236.7 440.6,235.7 440.1,235.2 440.7,234.6 440.8,232.8 440.7,232.1
			441.7,231.1 442.1,231.1 442.3,230.6 441.7,229.8 441.7,229.1 440.3,228.9 439.8,229.4 438.3,229.1 437.4,229.6 437.1,229.2
			437.2,228.6 436.7,228.5 435.5,228.7 435.6,229.2 436,230.2 435.8,231.9 435.9,232.2 435.7,233 436.1,233.4 435.8,233.8
			435.5,234.6 435.4,235.5 434.8,236.4 434.8,236.9 434,237.9 433.7,239.6 433.7,240 434.3,240 434.5,239.6 435.1,239.2 435,239.6
			435.2,239.9 434.3,240.3 434.3,240.8 434.5,241.1 435,240.7 435.7,240.7 435.4,241.1 435.6,241.9 435.3,242.5 435.3,244
			435.1,245 434.9,245.3 435.1,245.5 435.9,245 437.1,245.4 437.6,245.7 438.4,245.3 439.1,245.2 439.3,245 439.3,245 439.3,244.3
					"/>
		<path fill="#E6EEF4" d="M528.3,247.5c0,0,0.4-0.2,0.4-0.2l0.2-0.3l-0.2-0.1l-0.4,0.2l-0.1,0.2L528.3,247.5z"/>
		<polygon fill="#E6EEF4" points="522.9,232.9 522.6,233 522.5,233.5 522.8,233.5 522.9,233.6 523.3,233.4 523.2,233.1 		"/>
		<polygon fill="#E6EEF4" points="528.7,243.7 529,243.9 529.2,243.9 529.4,243.8 529.7,243.6 529.6,243.4 529.5,243.4 529.4,243.5
			529,243.2 528.7,243.2 528.3,243.6 528.1,243.8 528.4,243.7 		"/>
		<path fill="#E6EEF4" d="M522.8,245.1c0,0,0.2-0.1,0.2-0.1l0-0.3l-0.3-0.1V245.1z"/>
		<polygon fill="#E6EEF4" points="523.3,247.3 523.3,247 523,247 522.7,247.3 522.9,247.4 		"/>
		<polygon fill="#E6EEF4" points="523.2,245.8 523.2,245.4 522.9,245.6 		"/>
		<polygon fill="#E6EEF4" points="522.5,244.3 522.6,244.5 522.8,244.3 522.6,244.1 		"/>
		<polygon fill="#E6EEF4" points="533.3,248 533.5,247.8 533.6,247.5 533.2,247.7 532.6,247.9 532,248.5 531.9,248.7 532,248.9
			531.9,249.2 532,249.3 532.3,249.3 532.5,249 532.8,248.7 533.1,248.7 533.1,248.5 533.2,248.3 		"/>
		<polygon fill="#E6EEF4" points="519.2,248.4 519.2,248.7 519.4,248.9 519.6,248.5 519.3,248.1 519.3,247.7 519.2,247.8 519,248.2
					"/>
		<polygon fill="#E6EEF4" points="519.1,247.3 519.1,247.5 519.3,247.6 		"/>
		<polygon fill="#E6EEF4" points="512.6,243.1 512.5,243.4 512.9,243.8 513.2,243.9 513.3,243.7 513.6,243.7 513.4,243.5
			513.2,243.1 512.8,243 		"/>
		<polygon fill="#E6EEF4" points="530.3,250.1 530.5,250.4 530.6,251 530.8,250.9 531,250.4 530.7,250.1 530.6,249.7 		"/>
		<polygon fill="#E6EEF4" points="527.3,231.8 527.2,231.2 527.9,230.8 528,230.1 527.4,229.8 527.5,229.1 527.2,229.1 526.5,229.6
			526.5,230.2 526.7,230.7 526.4,231 525.2,230.9 524.6,231.2 524.2,230.9 523.6,230.9 523.2,231.2 522.7,231.2 522.6,230.7
			521.9,230.7 521.2,230.6 520.8,231.1 520,231.3 519.1,231.2 518.8,231.1 518.8,231.1 518.5,231.4 518,231.4 517.3,231.8
			516,231.8 515.4,232.1 515.3,232.3 514.6,232.6 513.5,233.3 513.4,233.4 513.3,234.1 512.9,234.9 511.8,235.3 511.8,235.9
			511.4,236.7 511,236.9 511.1,236.9 511.1,237.7 512.1,238.5 512.7,239.3 513,239.4 512.9,239.6 513.7,240.7 513.9,241.5
			514.2,241.6 514.7,241.1 515.1,241.6 515.8,241.7 516,241.3 516.5,241.3 517.2,241.8 517.7,241.5 517.8,241.9 518.1,241.9
			518.4,242.1 519,242.2 518.6,242.5 518.2,242.9 517.8,242.6 517.3,242.4 516.2,241.7 515.7,241.9 515.3,242.2 514.8,241.9
			514.4,242.4 514.1,242.5 513.9,243 514.5,243.7 515.1,244 515.7,244.5 515.8,244.9 515.5,245.2 515.6,245.7 516.1,246.4
			516.4,246.7 516.6,246.4 516.4,246.1 516.6,245.6 516.8,246.2 517.6,246.5 517.7,246.9 517.6,247.4 518,247.8 518,247
			518.2,246.4 518.7,246.4 518.9,246.9 519.7,247.4 519.4,246.9 519.5,246.5 519.2,245.9 518.8,245 518.5,244.5 518.5,244.3
			518.8,244.3 519.4,244.6 519.2,244.8 519.4,245 519.7,244.7 520.4,244.9 520.4,244.7 520.1,244.5 520.1,244.3 519.9,244.2
			519.4,243.9 519.4,243.6 518.9,243.2 519.4,243 519.9,243 520.2,242.7 521,243.3 521,243.5 521.6,243.6 521.7,243.2 521.3,242.6
			521.4,241.9 521.2,241.6 519.9,240.8 519.5,240.7 519.3,240.4 519,240.4 518.7,240.1 518.2,240 517.6,239.5 518.2,239.5
			518.6,239.1 518.5,238.8 518,238.6 518.3,238.2 518.3,237.9 518.7,238.1 519,238.4 518.9,238.7 518.9,239 519.2,238.9
			519.4,238.2 519.1,237.8 518.2,236.8 517.9,236.5 517.8,236.1 517.1,235.6 517.4,235.3 517.3,234.2 517.6,233.6 518.3,233.5
			518.4,234 518.1,234 518.1,234.3 519,234.7 519.1,235.4 519.6,235.8 520.2,235.8 519.8,235.5 519.6,235.1 519.6,234.7
			520.2,234.9 520.6,235.5 521,235.7 521.2,235.3 520.8,235 520.4,234.8 520.5,234.5 521.5,234.6 521.9,234.9 522,234.7
			521.4,234.2 520.8,234.1 520.3,233.5 520.6,233.2 521.2,233.4 521.6,233.1 521.8,232.4 522.2,232.2 522.8,232.7 523.3,232.7
			523.8,232.2 523.8,231.9 524.1,231.9 524.4,232.4 525.6,232.4 526.4,232.6 527,232.4 		"/>
		<polygon fill="#E6EEF4" points="530.8,249.5 530.8,249.2 530.6,249.5 530.7,249.6 		"/>
		<polygon fill="#E6EEF4" points="518.8,239.3 518.4,239.6 518.6,239.7 519.1,239.6 519.4,239.9 519.5,240 519.7,240.1 519.9,240.4
			520.3,240.5 520.5,240.9 521,241.1 521.4,241.1 521.5,241.3 521.9,241.9 522.1,242.1 522,242.4 522.2,242.7 522.6,242.9
			522.8,242.8 523.1,242.9 523.3,242.4 522.8,242.3 522.6,242.5 522.3,242.1 522.3,241.7 522.2,241.4 522.2,241.2 522,240.7
			521.3,240.1 521.3,240.2 520.9,240.2 520.8,240 520.4,239.8 519.9,239.6 519.5,239.1 		"/>
		<polygon fill="#E6EEF4" points="527.9,237.7 527.3,237.8 527,238 526.4,238.3 526.2,238.7 526.6,239 526.7,239 527,239
			527.1,238.6 527.2,238.3 527.6,238.3 527.6,238.7 527.3,238.8 527.2,239.1 527.6,239.2 528.1,239.2 528.1,238.6 528,238.2
			527.9,238.2 528,237.9 		"/>
		<polygon fill="#E6EEF4" points="526.7,241.7 527,241.9 527.3,241.8 527.4,241.3 527.3,240.6 527.2,240.5 526.9,240.4 526.5,240.5
			526.5,240.7 526.9,241 526.9,241.4 526.7,241.5 		"/>
		<polygon fill="#E6EEF4" points="520.7,239 520.6,238.7 520.3,238.6 520.1,238.6 520.6,239.2 		"/>
		<polygon fill="#E6EEF4" points="525.7,246 526,246 526.3,245.7 526.2,245.4 525.9,245.3 525.6,245.7 		"/>
		<polygon fill="#E6EEF4" points="512.7,240.6 512.8,240.4 512.8,239.9 512.6,240 512.3,240.4 512.4,240.6 512.5,240.7 		"/>
		<polygon fill="#E6EEF4" points="519.8,238.5 519.6,238.6 519.8,238.9 519.9,238.6 		"/>
		<polygon fill="#E6EEF4" points="511.8,241.6 511.8,242.1 512.1,242.4 512.2,242.2 512.2,242 512.4,242.1 512.4,242.4 512.7,242.5
			513.1,242.6 513.2,242.4 513.1,242.2 513.1,242 512.8,241.7 512.9,241.5 512.7,241.1 512.4,240.8 512.4,241.5 512.2,241.5 		"/>
		<polygon fill="#E6EEF4" points="509.9,236.5 509.5,236.7 509.5,236.9 509.8,237.1 509.8,237.2 510.3,237.7 510.8,238 510.9,237.9
			510.8,237.7 510.5,237.5 510.2,237.2 510.2,236.6 		"/>
		<polygon fill="#E6EEF4" points="527.7,244.2 527.8,243.9 527.2,244 527.1,244.3 527.3,244.5 		"/>
		<polygon fill="#E6EEF4" points="524.8,245.9 525.1,246.1 525.3,245.7 525.2,245.5 524.9,245.5 		"/>
		<polygon fill="#E6EEF4" points="524.6,235.5 524.4,235.4 524,235.4 523.8,235.6 524,236 524.2,236.2 524.4,236.2 524.8,236.3
			524.8,235.8 525.2,235.4 524.9,235.3 		"/>
		<polygon fill="#E6EEF4" points="523.2,239.4 523,239.2 522.8,239.2 523.1,239.7 523.2,239.7 523.3,240.1 523.5,240 523.5,239.5
			"/>
		<polygon fill="#E6EEF4" points="525.6,244.8 525.8,244.6 525.6,244.6 		"/>
		<polygon fill="#E6EEF4" points="524.8,244.1 525,244.3 525.3,244.5 525.3,244.2 525,244 		"/>
		<polygon fill="#E6EEF4" points="523.6,243 523.4,243.2 523.7,243.4 524.3,244 524.5,244 524.5,243.7 524,243.3 523.8,243 		"/>
		<polygon fill="#E6EEF4" points="525.7,233.7 525.3,233.7 525.2,233.9 525.7,234.1 526,234 526,233.8 		"/>
		<polygon fill="#E6EEF4" points="521.1,250.3 521.1,250.7 520.9,251.1 521,251.5 521.4,251.7 522.3,251.6 522.7,251.7 523.1,251.5
			523.6,251.7 524.2,252 524.3,252.4 525,252.4 525.6,252 526.2,252.1 527.2,252 527.9,252.1 528.3,251.8 528.5,251.4 528.4,251
			528.4,250.8 528.3,251 528.3,251.3 527.9,251.6 527.7,251.4 527.4,251.5 527.1,251.4 527.1,251.2 527,250.8 526.7,250.8
			526,250.7 525.4,250.5 524.6,250.5 524,250.9 523.5,251 523,250.8 522.8,250.6 522.5,250.6 522.7,250.4 522.5,250.1 522.1,250.1
			522.2,250.3 522.3,250.4 522.2,250.5 521.7,250.5 521.6,250.1 521.5,250.1 521.5,250.3 521.5,250.6 521.3,250.7 		"/>
		<polygon fill="#E6EEF4" points="578.8,236.5 578.4,235.6 577.9,235.6 577.6,235.9 576.9,235.2 576.4,235.4 575.9,235.4
			575.9,235.4 576,235.6 576.1,235.6 576.5,236.1 576.9,236 577.1,236.5 577,236.9 578.3,237.6 578.4,238.1 579.1,238.5
			579.8,238.5 580.6,239 580.7,238.5 579.5,236.7 		"/>
		<polygon fill="#E6EEF4" points="587.8,238.8 587.9,238.4 587.7,237.6 587.8,237.2 588,237 588.4,237.4 588.2,238 588.4,238.3
			588.6,238 588.6,237 588.8,236.8 588.8,236.4 588.7,236.1 588.7,235.5 589,235.2 588.9,234.6 588.8,233.9 589.7,233.2
			590.4,233.2 590.8,232.9 591.2,232.9 590.8,232.4 590.1,232.1 589.3,232.1 588.7,231.6 588.6,231.2 587.7,230.5 587.3,229.7
			587.3,229.2 586.4,228.1 585.8,227.7 584.9,228.8 584.1,229.3 583.8,229.8 582.6,229.6 582.2,228.9 580.9,227.9 580.1,227.8
			579.8,228.8 580.5,229.3 580.9,229.8 580.8,230.8 579.8,230.3 578.7,230.3 577.2,229.4 576.1,229.8 576.1,230.3 576.6,230.8
			577.6,230.9 578.2,231.4 578,232.1 578,232.6 579.1,233.6 579.2,234.1 578.8,234.5 579.2,235.4 580.4,236.1 581.2,236.1
			581.9,236.7 581.2,236.9 581.6,237.6 581.4,237.8 581.4,238.4 581.4,238.4 581.7,238.6 582.2,238.3 582.3,238 582.5,237.8
			582.8,237.7 583.3,237.1 583.6,236.9 584,236.5 584.4,236.4 584.9,236 585.2,236 585.2,236.2 585.5,236.2 585.7,236.6 586.1,237
			585.8,237.3 585.9,237.6 586.6,238 585.7,238.6 586.6,239.6 587,239.8 587.2,240.1 587.7,240.2 587.9,240.1 587.9,239 		"/>
		<polygon fill="#E6EEF4" points="627.8,279.6 627.5,278.9 627.9,278.3 627.8,277.8 628.1,277.3 628.9,277 629.2,276.7 630.5,276.3
			631.3,276.5 631.7,276.2 631.6,275.1 630.9,274.6 630.2,274.6 630,274.1 630,273.4 629.8,272.7 629.8,271.8 629,271.7
			628.9,271.4 628.4,271.2 627.5,271.1 627.3,270.9 626.6,270.5 625.8,269.7 625.5,269.1 624.1,267.1 626.1,264.3 626.4,264
			626.1,262.9 626.1,262.1 625.7,261.1 623.3,261.1 623.2,260.1 622.9,259.6 623.1,259.2 622.7,257.9 622,256.4 622.1,255.7
			623,254.7 622.7,254.7 621.8,254.4 621.8,253.9 621.6,252.9 621.5,252.8 622,252 621.5,251.7 621.3,251.3 621.9,251.1
			622.6,250.6 622.6,250.3 622.7,250.1 622.4,249.7 622.6,249.2 622.5,248.9 622.5,248.1 622.5,248 622.3,247.6 622.3,247.2
			622.1,246.5 622.3,246.1 621.8,245.3 621.1,245 619.9,244.9 618.8,243.3 617.7,243.1 617.1,243.2 616.9,243 616.7,242.2
			616.1,242.1 615,241.6 614.6,241.9 614.1,241.9 612.5,240.9 611.7,240.7 610.7,239.9 610,239.9 609.5,239.7 608.9,239.8
			608.7,240.5 607.7,240.3 606.5,240.5 605.3,241.5 604.9,241.5 604.5,242 604.3,242.7 602.9,242.8 602.3,243.1 602.6,243.8
			603,244.5 602.8,245.2 602.2,245.1 600.6,244.9 599.2,245.1 597.4,245.6 596.6,245.6 594.9,245.2 594.3,245.1 592.8,244.5
			592.4,244 592.2,243.4 591.8,243.4 591.2,243 590.5,243.2 590.1,243 589.4,243 588.9,242.5 588.5,242.4 588.3,242.1 588.4,241.5
			588.3,240.8 587.9,240.3 587.9,240.1 587.7,240.2 587.2,240.1 587,239.8 586.6,239.6 585.7,238.6 586.6,238 585.9,237.6
			585.8,237.3 586.1,237 585.7,236.6 585.5,236.2 585.2,236.2 585.2,236 584.9,236 584.4,236.4 584,236.5 583.6,236.9 583.3,237.1
			582.8,237.7 582.5,237.8 582.3,238 582.2,238.3 581.7,238.6 581.4,238.4 580.7,238.5 580.7,238.5 580.6,239 579.8,238.5
			579.1,238.5 578.4,238.1 578.3,237.6 577,236.9 577.1,236.5 576.9,236 576.5,236.1 576.1,235.6 576,235.6 576,235.6 575.7,235.9
			575.5,236.6 574.7,236.7 574.7,237 575,237.5 575.3,238.5 575.2,239.1 575.2,239.8 575.8,239.9 576,240.2 575.7,241.1
			575.7,241.9 575.6,242.2 576.4,242.5 577,243.6 577.2,244.2 577.1,244.7 577.2,244.7 577.7,244.7 577.9,245.4 577.9,245.9
			578.2,246.5 578.6,246.6 578.9,247 579.1,247.7 579.6,247.9 580.1,248 581,248.5 581.4,248.6 582,248.6 582.4,248.8 582.6,248.9
			582.5,249.1 581.9,249.2 581.6,249.3 581.6,250 581.9,250.2 581.9,251.1 581.5,251.4 581.2,251.3 581.1,252.2 580.8,252.4
			580.7,253.4 580.6,253.8 580.8,254.1 580.5,254.4 580.5,254.8 580.9,254.8 581.2,255.2 581.8,255.3 582,255.7 582.6,256.2
			582.3,256.8 582.5,257 582.4,257.4 583,257.8 583.2,257.6 583.7,257.6 585.8,258.9 586.1,258.8 586.4,259 586.9,260 587.5,260.3
			588,261.6 587.5,262.1 587.4,262.9 587.6,263.6 588.5,263.6 588.7,265.4 589.2,265.7 589.8,265.9 590,266.1 590.2,266
			590.2,266.2 590.6,266.7 591,266.7 591.3,266.4 591.3,265.9 590.9,265.6 591.2,265.6 591.6,265.6 591.8,265.4 591.7,265.7
			591.6,266 592.2,266.3 592.5,266.2 592.7,266.7 593,266.8 593.9,266 594.2,266.2 594.7,267 594.8,267.5 595.8,268.7 595.9,269.6
			596.2,269.8 596.6,269.7 596.9,270.2 596.7,270.2 596.5,270.1 596.4,270.2 596.9,270.7 597.1,270.6 597.2,271 598.1,272.9
			598.7,273.2 599.7,273.1 600.4,273.3 600.7,273.7 601.6,273.7 601.7,273.9 602.2,273.9 602.3,274.2 602,274.5 602.8,275.3
			603.4,275.5 603.9,275.8 604.3,275.9 605.3,276.7 605.6,276.6 606.3,276.5 607.2,276.7 608.3,277.4 609.2,276.6 610.4,275.9
			610.4,275.6 610.5,275.9 611.1,275.8 611.8,275.3 612.4,275.1 613.3,275.2 613.3,275.4 613.6,275.4 613.6,275.7 614.1,276.4
			614.4,277.4 615,278.5 615,279.2 615.3,279.4 615.4,279.7 616.9,279.7 617.5,279.7 618,280.1 618.7,279.5 618.9,279.6
			619.7,280.2 621.2,280.1 622.1,280.5 623.3,280.6 623.8,280.7 624,280.6 624.4,281 624.6,281 624.7,280.5 625.1,280.4
			625.3,280.9 626,281.2 627,281.5 627.4,281.3 627.5,281 627.7,281 627.7,280.6 		"/>
		<polygon fill="#E6EEF4" points="581.4,237.8 581.6,237.6 581.2,236.9 581.9,236.7 581.2,236.1 580.4,236.1 579.2,235.4
			578.8,234.5 579.2,234.1 579.1,233.6 578,232.6 578,232.1 578.2,231.4 577.6,230.9 576.6,230.8 575.9,230.1 574.4,230.2
			574,230.1 572.8,230.4 571.9,230.7 572.3,231.1 572.4,231.5 572.9,231.6 573.2,232.2 573,233 573,234.1 573.8,234.6 574.7,234.7
			575.2,234.6 575.7,235.1 575.9,235.4 576.4,235.4 576.9,235.2 577.6,235.9 577.9,235.6 578.4,235.6 578.8,236.5 579.5,236.7
			580.7,238.5 581.4,238.4 581.4,238.4 		"/>
		<polygon fill="#E6EEF4" points="531.9,247 531.7,247.2 532,247.3 532.2,247.2 532.2,247 		"/>
		<polygon fill="#E6EEF4" points="526.1,234.6 525.7,234.6 525.6,234.8 526,235 526.6,234.8 526.7,234.5 526.4,234.3 		"/>
		<polygon fill="#E6EEF4" points="555.3,248.7 555.9,248.5 555.8,247.8 556.2,247.6 556.2,246.6 556.4,246.1 557.2,246.3
			557.7,246.5 559,245.9 559.3,245.9 559.7,245.7 561.2,245.5 561.7,245.7 562,245.9 562.9,246.1 564.1,246.1 564.3,245.9
			565,245.7 565.4,245.2 566.4,244.9 567.1,244.9 567.6,244.8 569,244.9 570.1,244.5 570.9,244.5 571.1,244.7 571.9,244.1
			572.5,244.1 572.8,243.8 574,243.8 574.9,244.1 575.7,243.9 576,244.1 576,244.7 576.5,244.9 577.1,244.7 577.2,244.2 577,243.6
			576.4,242.5 575.6,242.2 575.7,241.9 575.7,241.1 576,240.2 575.8,239.9 575.2,239.8 575.2,239.1 575.3,238.5 575,237.5
			574.7,237 574.7,236.7 575.5,236.6 575.7,235.9 576,235.6 575.9,235.4 575.9,235.4 575.7,235.1 575.2,234.6 574.7,234.7
			573.8,234.6 573,234.1 573,233 573.2,232.2 572.9,231.6 572.4,231.5 572.3,231.1 571.8,230.6 571.3,230.5 570.2,229.5
			569.7,229.4 569.3,229.7 569,229.8 568.3,229.5 568,229.8 567.7,229.7 567.6,229.2 567.2,229.2 567.1,229.4 566.7,230.1
			566,230.5 565.1,231 565,231.4 564.1,231.5 563.8,231.7 562.6,231.5 562.3,231.3 561.9,231.3 561.7,231.2 561.2,231.3
			560.2,231.4 559,231.9 558,231.7 557.4,231.3 557.1,231.5 556,231 555.4,230.9 554.5,230.2 554.2,230.2 553.9,230.6 553.5,230.5
			553,229.8 552.9,229.1 552.4,228.8 552.1,228.8 551.4,229.5 551.2,229.4 550.9,229.6 549.9,228.6 549.8,228.1 549.7,228
			549,228.4 548.1,228.4 547.7,228.2 547.2,228.4 545.8,228.3 545.1,228.5 543.8,229 543.2,229.1 542.2,229.3 541.9,229.7
			541.4,229.8 541,230.3 540.7,230.4 540.4,231.1 540.2,231.3 540.2,231.6 539.2,231.6 537.8,231.1 537.3,231.1 537,231.3
			536.4,231.2 535.5,231.4 535.1,231.3 534.4,231.5 534.3,231.8 534.8,232.7 535.6,232.7 536.2,232.8 536.1,233.1 535,233.1
			534,233.4 533.6,233.9 533.8,234.2 534.3,234 534.6,234.3 534.1,234.5 532.8,234.5 532.3,234.2 531.6,234.5 531.3,234 531,234
			530.5,234.6 530,234.6 529.4,234 528.7,234 527.4,235 527.3,235.5 527,236 527.3,236.3 527.2,236.9 527,237.1 527.2,237.5
			528,237.2 528.2,237.3 528.7,237.2 529.4,237.2 528.7,237.8 528.8,238.2 529.1,238.7 529.1,239 529,239.3 529.2,239.4
			529.7,239.1 529.8,239.3 529.4,239.7 528.7,240.1 529,240.3 529.4,240.3 529,240.6 528.7,241.1 528.4,241.1 528.1,240.3
			527.9,240.2 527.8,240.7 528,241.2 527.8,241.5 527.9,241.9 528.3,242.2 528.4,241.9 529,242.4 529.4,242.3 530,242.7
			530.2,243.4 529.8,243.8 530.1,244.1 530.1,244.5 530.5,244.5 531.2,245.2 530.9,245.6 530.5,245.5 530.4,245.8 530.7,245.9
			531.6,245.7 532.8,245.7 532.7,246 532.4,246.2 531.8,246.5 530.9,246.5 530.7,246.8 531,246.9 531.5,246.7 532.1,246.7
			532.4,246.6 532.4,247 532.6,247.1 532.9,246.7 533.3,246.3 533.7,246.2 533.9,246.6 534.3,246.6 534.8,246.9 535.1,246.5
			535.5,246.6 535.4,246.9 535.2,247 535.5,247.4 535.5,247.7 536.1,248.2 536.3,248.1 537,248.4 537.6,248.3 538,248 538.5,248
			538.8,247.7 539.3,248 539.6,247.8 539.6,247.2 539.7,246.8 539.6,246.2 540.8,246.1 541.8,246.2 543.1,246.9 543.6,246.9
			544.5,248.1 545.2,248.5 547.8,248.2 548.5,247.9 548.8,247.9 548.9,248 549.3,247.8 549.4,247.3 550.6,246 550.9,245.9
			552,246.3 552.7,246.6 553.6,246.4 553.6,246.2 554.2,245.7 554.7,245.9 554.8,246.3 554.4,247 553.8,247.4 553.8,247.7
			554.3,248.3 554.2,248.7 554.8,248.8 		"/>
		<polygon fill="#E6EEF4" points="530.3,228.8 529.6,228.2 528.8,228.2 528.4,228.5 528,228.6 527.5,229.1 527.4,229.8 528,230.1
			527.9,230.8 527.2,231.2 527.3,231.8 527,232.4 526.4,232.6 526.5,232.6 526.7,233.1 527.1,233.4 527.4,233.3 527.8,233.4
			528.3,233.3 527.8,233.7 527.4,233.7 527.2,234.5 527.2,234.9 528.4,233.9 529.8,233.2 530.1,232.4 530.7,232.2 531.6,232.2
			531.9,232 532.5,232 532.9,232.2 533.6,232.2 534.1,231.8 534.1,231.4 533.5,231.1 532.9,230.4 532.3,230.3 531.4,229.6
			531.3,228.6 530.7,228.5 		"/>
		<polygon fill="#E6EEF4" points="589.2,265.7 588.7,265.4 588.5,263.6 587.6,263.6 587.4,262.9 587.5,262.1 588,261.6 587.5,260.3
			586.9,260 586.4,259 586.1,258.8 585.8,258.9 583.7,257.6 583.2,257.6 583,257.8 582.4,257.4 582.5,257 582.3,256.8 582.6,256.2
			582,255.7 581.8,255.3 581.2,255.2 580.9,254.8 580.5,254.8 580.5,254.4 580.8,254.1 580.6,253.8 580.7,253.4 580.8,252.4
			581.1,252.2 581.2,251.3 581.5,251.4 581.9,251.1 581.9,250.2 581.6,250 581.6,249.3 581.9,249.2 582.5,249.1 582.6,248.9
			582.4,248.8 582,248.6 581.4,248.6 581,248.5 580.1,248 579.6,247.9 579.1,247.7 578.9,247 578.6,246.6 578.2,246.5 577.9,245.9
			577.9,245.4 577.7,244.7 577.2,244.7 576.5,244.9 576,244.7 576,244.1 575.7,243.9 574.9,244.1 574,243.8 572.8,243.8
			572.5,244.1 571.9,244.1 571.1,244.7 571.2,244.8 570.9,245.4 570.6,245.4 570,245.9 569,246.1 568.5,247 568.4,247.9 568.9,249
			568.9,249.8 568.5,250.8 568.6,251.3 568.6,252 568.1,252.7 567.9,253.1 562.9,256.6 562.9,256.6 562.9,256.6 564.3,260.3
			566.8,260.6 579.8,269.6 585.1,269.7 585.7,268.5 586.3,267.2 587.5,266.6 588.5,267 589.1,266.8 589.4,266.9 589.7,266.2
			590,266.1 589.8,265.9 		"/>
		<polygon fill="#E6EEF4" points="588.5,267 587.5,266.6 586.3,267.2 585.7,268.5 585.1,269.7 585.4,269.7 588,270.5 588.1,271.5
			589.8,270.7 589.5,270.4 589.7,270.3 589.8,270.3 589.4,269.9 589.4,269.5 589.2,269.1 589.1,269.3 588,268.6 589.6,268.3
			589.3,267 589.4,266.9 589.1,266.8 		"/>
		<polygon fill="#E6EEF4" points="550.6,250.1 550.9,249.9 550.7,249.8 550.4,249.8 549.5,250.3 548.3,250.8 547.5,250.8 547,250.6
			546.4,250.6 546.4,250.9 546.3,251.3 545.9,251.4 545.3,251.2 545,251.6 544.7,251.7 544.7,252.3 545,252.8 545.7,253.2
			546.4,253.1 546.8,253.3 547.1,253.1 547.7,252.9 548.3,252.4 548.7,252.2 549.5,252.3 549.5,251.8 549.3,251.3 549.9,250.5 		"/>
		<polygon fill="#E6EEF4" points="555.8,253.7 556.3,253.9 556.3,254.7 556.5,255.1 556.2,255.3 555.9,255.3 555.3,255.6
			555.1,256.3 554.7,257 554.7,257 554.8,257.2 555.2,257.6 555.3,258.5 555.1,259 555.4,259 556.3,259.4 556.9,259.8 557.1,259.8
			557.4,260.1 562.9,256.6 562.9,256.6 567.9,253.1 568.1,252.7 568.6,252 568.6,251.3 568.5,250.8 568.9,249.8 568.9,249
			568.4,247.9 568.5,247 569,246.1 570,245.9 570.6,245.4 570.9,245.4 571.2,244.8 571.1,244.7 570.9,244.5 570.1,244.5 569,244.9
			567.6,244.8 567.1,244.9 566.4,244.9 565.4,245.2 565,245.7 564.3,245.9 564.1,246.1 562.9,246.1 562,245.9 561.7,245.7
			561.2,245.5 559.7,245.7 559.3,245.9 559,245.9 557.7,246.5 557.2,246.3 556.4,246.1 556.2,246.6 556.2,247.6 555.8,247.8
			555.9,248.5 555.3,248.7 554.8,248.8 554.2,248.7 554.2,248.7 553.8,248.9 554,249.7 554.4,250.6 554.6,251.4 554.5,251.9
			554.4,253 555.6,253.1 		"/>
		<polygon fill="#E6EEF4" points="553.3,268.2 553.6,268 553.6,267.3 553.8,266.6 553.8,265.8 554,265.7 554,265.1 554.1,264.5
			554.1,264.1 554.2,262.8 554,262.9 553.6,262.9 553.2,263.2 552.9,262.9 553,262 553,260.7 552.9,260.5 553,259.7 553.7,259.7
			553.7,260.1 554,260.2 554.4,259.9 554.3,259.5 554.4,259.6 554.3,259.3 554.2,258.8 554.3,258 554.5,257.3 554.6,257 554.3,257
			554,257.6 553.2,257.6 552.8,257.5 552.2,258.2 552,260.2 551.2,261.8 550.4,263 550.7,263.1 551.2,263.9 551.5,264.9
			552.3,266.1 552.9,267.6 552.7,268.3 553,269.2 553.3,268.7 553.4,268.6 		"/>
		<polygon fill="#E6EEF4" points="555.3,258.5 555.2,257.6 554.8,257.2 554.7,257 554.6,257 554.5,257.3 554.3,258 554.2,258.8
			554.3,259.3 554.4,259.6 554.6,259.6 554.7,259.3 555.1,259 555.1,259 		"/>
		<polygon fill="#E6EEF4" points="553.7,260.1 553.7,259.7 553,259.7 552.9,260.5 553,260.7 553,262 552.9,262.9 553.2,263.2
			553.6,262.9 554,262.9 554.2,262.8 554.3,261.8 554.3,261.4 554.3,260.7 554.4,260.4 554.4,260 554.4,259.9 554,260.2 		"/>
		<polygon fill="#E6EEF4" points="554,257.6 554.3,257 554.6,257 554.7,257 554.7,257 555.1,256.3 555.3,255.6 555.9,255.3
			556.2,255.3 556.5,255.1 556.3,254.7 556.3,253.9 555.8,253.7 555.6,253.1 554.4,253 554.4,253.2 554,253.3 553.9,255.2
			553.4,256 552.9,256.7 552.9,257.4 552.8,257.5 553.2,257.6 		"/>
		<polygon fill="#E6EEF4" points="556.8,270.5 558.8,268.5 561,268.2 561,267.4 562.2,266 559.1,262.6 563.2,261.3 564.2,260.3
			564.3,260.3 562.9,256.6 562.9,256.6 557.4,260.1 557.1,259.8 556.9,259.8 556.3,259.4 555.4,259 555.1,259 554.7,259.3
			554.6,259.6 554.3,259.5 554.4,259.9 554.4,260 554.4,260.4 554.3,260.7 554.3,261.4 554.3,261.8 554.1,264.1 554.1,264.5
			554,265.1 554,265.7 553.8,265.8 553.8,266.6 553.6,267.3 553.6,268 553.3,268.2 553.4,268.6 553.3,268.7 553.4,268.7
			553.4,268.9 553.2,269.6 553.1,269.7 554,269.7 		"/>
		<polygon fill="#E6EEF4" points="588,270.5 585.4,269.7 585.1,269.7 579.8,269.6 566.8,260.6 564.2,260.3 563.2,261.3 559.1,262.6
			562.2,266 561,267.4 561,268.2 558.8,268.5 556.8,270.5 554,269.7 553.1,269.7 553.1,270.8 553.1,271.9 552.8,272.7 552.9,273
			553.3,272.9 553.4,273.1 553.8,272.8 554.4,273.2 554.2,273.3 555.4,274.7 555.6,275.3 555.8,275.4 555.9,276 556.6,276.5
			556.9,276.5 557.7,277.9 557.7,278.3 557.9,278.8 558.3,278.9 558.5,279.6 558.7,280 559.4,280.2 559.9,281.6 560.3,281.8
			560.4,282.7 560.3,283 560.3,283.4 560.8,283.9 560.9,284.3 561.3,284.6 561.7,284.1 562.3,284.6 563.1,285 563.8,285.7
			564,286.4 564.3,286.4 564.3,287.1 564.6,287.3 564.8,288.3 565.4,288.7 565.6,289.7 565.7,290 565.5,290.9 565.3,291.1
			565.5,291.6 565.8,292.6 565.9,293.6 566.4,294.1 566.5,294.5 567.9,296 568.4,296.2 568.9,296.2 569.3,296.8 569.6,296.8
			570.4,297.5 570.4,297.9 571.1,298 571.1,298.4 571.4,298.6 572.1,301 572.7,301.3 572.7,302 574.8,304.1 575.1,304.1
			575.3,305.4 576.2,305.6 576.7,307 577.2,307.1 577.6,307.3 577.9,306.7 578.6,306.2 578.1,305.3 578.5,304 579.2,303.6
			580.1,304.3 581.8,304.4 584.2,305.3 586.7,306.5 586.8,309.1 591.9,302.2 602.4,299.1 610.3,296.7 610.7,290.7 610.1,288.4
			610.1,288.4 609.1,289.3 601,288 600.4,285.8 599.7,285 599.7,284.1 599.7,284.1 599.6,284.1 599.3,283.7 599.3,283.4
			599.6,283.1 599.1,283.2 599,283 598.6,283 597.7,282.5 597.6,282.3 597.4,282.4 597,281.7 596.8,281 595.4,279.2 595.1,278.6
			595.4,278.7 595.4,278.3 594.9,277 594.9,276.7 594.5,276.1 594.3,276.1 593.4,274.8 593,274.8 592.6,274.4 592.7,274.2
			592.8,274.1 593.1,274.3 592.8,273.9 592.4,273.9 591.4,273.6 590.9,272.2 590.6,271.5 590.2,271.3 590.2,270.9 590.1,271
			589.8,270.7 588.1,271.5 		"/>
		<polygon fill="#E6EEF4" points="598.6,283 599,283 599,283 599.4,282.9 599.6,281.6 599.3,281 599.1,281 599,280.1 599.1,280.1
			599.3,279.2 599.2,279 599,279 598.9,278.7 598.4,278.3 598.2,278.3 598.1,278.6 597.9,278.6 597.9,278.8 597.7,279 597.8,279.4
			597.7,279.4 597.9,280.2 597.7,280.1 597.5,280.1 597.4,281 597.5,281.4 597.7,281.6 597.7,282.2 597.6,282.3 597.7,282.5 		"/>
		<polygon fill="#E6EEF4" points="600.4,285.8 601,288 609.1,289.3 610.1,288.4 612.4,281.1 613,281 612.9,280.3 612.8,279.9
			612.6,280 612.4,279.9 612.4,279.8 612.2,279.8 612.1,278.8 611.7,278.7 611.7,279.1 611.6,279.4 609.9,280.4 609.9,281.2
			608.3,282.5 608,282.9 608.2,283 608.4,283.3 607.7,284.1 607.4,283.7 607.2,283.9 606.8,283.9 606.9,284.4 606.7,284.4
			606.6,284.6 605.8,284.8 605.2,284.9 604.9,284.5 604.4,284.6 604.1,284.5 603.7,284.5 602.8,284.3 601.6,285.2 601.2,285.1
			600.8,285 600.3,285.2 600.2,284 599.9,284.2 599.7,284.1 599.7,285 		"/>
		<polygon fill="#E6EEF4" points="390.5,242.5 390,242.6 390.1,242.9 390.8,243 391,242.8 390.8,242.6 		"/>
		<polygon fill="#E6EEF4" points="383.9,239.5 384.4,239.8 384.2,239.5 		"/>
		<polygon fill="#E6EEF4" points="382.9,240 382.9,240.5 383.5,240.5 383.8,240.5 383.3,240 		"/>
		<polygon fill="#E6EEF4" points="386.3,239.5 386.7,239.7 386.7,239.5 386.4,239.4 		"/>
		<path fill="#E6EEF4" d="M413.7,259.3l-0.3-0.5l-0.7,0.1l0.2,0.3l0.5,0.2C413.3,259.4,413.7,259.3,413.7,259.3z"/>
		<polygon fill="#E6EEF4" points="420.2,272.8 419.6,273.5 420,273.6 420.6,273.5 421.2,272.6 421.1,271.9 420.3,272.4 		"/>
		<path fill="#E6EEF4" d="M411,271.4c0,0-0.3-0.2-0.4-0.2c-0.1,0-0.2,0.3-0.2,0.3l0.2,0.3l0,0.6c0,0,0.3-0.2,0.3-0.2L411,271.4z"/>
		<polygon fill="#E6EEF4" points="416.6,273.3 416.1,273.3 415.8,274.1 416.4,274.5 416.8,274.2 417.2,274.1 417.1,273.5 		"/>
		<polygon fill="#E6EEF4" points="421.3,271.2 421.9,270.9 422.5,270.8 422,270.5 421.6,270.5 		"/>
		<polygon fill="#E6EEF4" points="413.5,273.8 414.4,273.2 415,273.2 415.1,272.5 414.5,272.3 414.3,272.6 413.7,272.8 413.2,272.8
			412.8,273.1 413.1,273.6 		"/>
		<polygon fill="#E6EEF4" points="409.9,274.5 410.1,274.8 410.2,274.9 410.4,274.7 410.4,274.4 410.2,274.3 		"/>
		<path fill="#E6EEF4" d="M412.3,273.6l-0.1-0.2l-0.2,0l0,0.2l0.2,0.2C412.1,273.7,412.3,273.6,412.3,273.6z"/>
		<path fill="#E6EEF4" d="M390.1,305l-0.4-0.1l-0.4,0.2l-0.2,0.1l0.1,0.4c0,0,0.4,0,0.4,0l0.6-0.4L390.1,305z"/>
		<polygon fill="#E6EEF4" points="392.3,306.4 392,306.4 391.9,306.6 392.2,306.8 392.3,306.7 392.5,306.7 392.6,306.7 392.6,306.5
					"/>
		<polygon fill="#E6EEF4" points="396,306.2 396,305.8 395.7,306 395.9,306.5 		"/>
		<polygon fill="#E6EEF4" points="395.8,307.6 395.4,308 395.7,308.4 396,308.4 396.2,308.2 396.1,307.7 		"/>
		<path fill="#E6EEF4" d="M390.2,305.8l0.2,0.3c0,0,0.3-0.2,0.3-0.2l0-0.3l-0.3-0.1L390.2,305.8z"/>
		<polygon fill="#E6EEF4" points="394.9,310.6 395,310.9 395.3,310.8 395.1,310.5 		"/>
		<polygon fill="#E6EEF4" points="393.4,310.5 393.6,310.9 393.6,311.5 394.3,311.6 394.4,311.2 393.8,310.6 		"/>
		<polygon fill="#E6EEF4" points="393.1,306.4 392.9,306.6 393.1,306.9 393.5,306.7 		"/>
		<polygon fill="#E6EEF4" points="610.1,288.4 610.7,290.7 610.3,296.7 602.4,299.1 602.2,300.5 604.8,303.7 604.4,304.9 606,306.8
			606.4,306.7 606.5,306.8 607.1,306.8 607.4,306.2 608,306.2 609,305.7 609.6,305.7 610,305.6 610.5,305.9 610.8,305.9
			611.5,304.9 611.5,304.8 611.6,304.7 611.6,304.4 611.4,304.3 611.4,303.9 611.3,303.6 611.7,303.2 612,303 612.9,303
			613.6,302.9 614,303 614.5,302.5 614.7,302.3 614.7,301.4 615.8,300.2 616.4,300 616.8,300.2 617.1,300 618.5,299.9 618.6,299.6
			618.3,299.4 618,298.4 618.1,298.4 617.9,297.9 617.8,297.8 617.9,297.4 617.9,296.9 618.4,296 618.7,295.9 618.5,295.6
			618.7,295.5 619,294.9 619.3,294.7 619.5,294.8 619.4,295.1 619.3,295.4 619.6,295.5 620,295.6 620.3,294.5 620.6,294.2
			620.9,293.6 621.6,293 622.6,291.3 622.7,290.9 622.6,290.5 623,289.9 623,289.4 622.8,289.2 622.3,289.1 621.3,288.3 621,287.8
			620.6,287.3 620.4,286.6 619.6,285.6 619.2,285.6 618.5,285.7 617.3,285.5 616.7,285.5 616.4,285.7 615.7,285.5 614.1,284.2
			614,283.8 613.1,282.6 613,281 612.4,281.1 		"/>
		<polygon fill="#E6EEF4" points="612.2,279.8 612.4,279.8 612.4,279.5 612.7,279 612.7,278.2 612.6,278.2 612.7,277.8 612.6,277.7
			612.7,277.6 612.8,277.6 612.7,277.4 612.5,277.4 612.3,277.4 612.1,278.2 612,278.4 611.8,278.2 611.7,278.4 611.7,278.7
			612.1,278.8 		"/>
		<polygon fill="#E6EEF4" points="604.8,303.7 602.2,300.5 602.4,299.1 591.9,302.2 586.8,309.1 586.7,306.5 584.2,305.3
			581.8,304.4 580.1,304.3 579.2,303.6 578.5,304 578.1,305.3 578.6,306.2 577.9,306.7 577.6,307.3 577.2,307.1 576.7,307
			576.9,307.5 577.1,308.9 577.1,309.8 576.8,309.8 576.8,310.1 576.3,310 576.5,310.4 576.8,310.4 576.8,310.8 577.5,311.6
			577.8,314.2 578.6,314.9 578.6,315.7 578.3,315.8 578.6,316.6 579.2,317.2 579.3,317.9 579.5,318.4 580.1,318.3 580.2,318.1
			581,318.4 581.5,318.3 582.1,317.8 582.6,317.8 582.9,318.1 583.4,317.9 584,317.1 584.2,317.1 584.5,316.4 585.2,315.9
			585.6,315.8 586,315.8 586.1,316 586.9,316 587.1,316.2 587.7,316.3 589,315.8 590,315.7 590.4,315.4 590.4,315 591.4,314.3
			591.9,314.3 592.2,314.6 592.6,314.5 592.9,314.2 593,314.4 593.4,314.4 594.2,313.7 594.8,312.8 595.3,312.5 595.6,312.6
			598.7,311.6 599,311.3 600.7,311 601.8,310.5 602.3,310 603.5,309.7 603.4,309.4 603.5,309.2 603.3,309 603.4,308.3 604.3,307.2
			605.4,306.9 606,306.8 604.4,304.9 		"/>
		<polygon fill="#E6EEF4" points="609.7,318.4 609.3,318.2 608.8,318.3 608.4,318.4 608,318.4 607.9,318.1 607.5,318 607.2,318.3
			607.1,318.7 606.8,318.9 607.2,319.1 607.5,319.4 608.1,319.5 608.9,319.4 609.5,319 610,318.9 610.2,318.7 610.1,318.5 		"/>
		<polygon fill="#E6EEF4" points="603.4,319.8 604.1,319.9 604.7,319.8 603.9,319.6 		"/>
		<polygon fill="#E6EEF4" points="552.9,267.6 552.3,266.1 551.5,264.9 551.2,263.9 550.7,263.1 550.4,263 550,263.5 549.2,263.7
			547.5,263.5 546.1,263.8 545.1,263.1 544.9,263.6 545.3,264.2 545.3,264.5 544.9,263.9 544.4,263.6 544.2,263.2 544.5,263
			544.3,262.8 543.8,262.9 543.2,262.7 542.3,262.4 542.1,262.6 542.5,262.7 542.6,262.9 542.1,262.9 541.6,262.9 541,263.1
			540.8,262.9 540.8,262.8 541.3,262.7 541.8,262.5 541.2,262.6 540.4,262.6 540.1,262.9 539.3,263.3 539,263.5 538.3,263.7
			537.7,264.3 537.6,264.5 536.7,264.5 535.6,263.9 535,263.8 534,263.9 533.2,263.4 532.9,263.4 532.6,263.6 531.8,263
			530.9,262.9 528.7,262.7 527.7,262.3 526.3,262.4 526,262.5 526,262.5 525.8,262.9 525.6,264.1 525.9,264.9 525.9,265.5
			525.5,266.4 525.2,267.3 525.5,268.1 525.8,269.5 526.8,291.5 560,291.3 560,291.2 559.6,291 558.9,290.4 558.7,290 558.2,289.9
			557.8,289.1 557.5,289.3 557,289.3 556.1,288.7 555.7,287.3 555.8,286.9 555.7,286.2 555.5,285.8 555.6,285.6 555.8,285.7
			556.6,285.8 556.3,285.5 556,285.4 555.6,284.7 555.4,284.6 555.4,284.8 555.1,284.4 554.8,283.6 553.7,282 553.3,281.7
			553.1,280.9 551.4,278.4 551.4,277.8 551.1,277.3 551,276.3 550.7,275.9 550.7,275.6 549.8,274.5 549.7,274.1 549.8,273.7
			549.6,273.3 548,271.9 547.8,271.5 546.8,270.2 546.8,269.6 546.2,268.8 546.3,268.5 546.3,268.1 546.4,267.9 546.5,268.1
			546.8,268.1 546.9,268.8 547.2,269.1 547.3,269.4 548.3,270.3 548.3,270.9 548.6,271.4 549.3,271.8 549.5,272.3 550.8,273.7
			551.6,274.1 551.7,274.3 551.8,273.9 552.1,273.6 552.3,272.6 552.1,272.3 552.4,271.5 552.5,270.9 552.9,269.4 553,269.2
			552.7,268.3 		"/>
		<polygon fill="#E6EEF4" points="527,297 524.4,297.3 524.4,298.3 524.4,298.3 524.5,309.3 524.1,309.4 523.6,309.8 523.1,309.5
			522.4,309.5 521.9,309.9 521.9,310.6 522.2,310.9 521.9,311.6 521,312.8 520.7,312.8 520.2,313.2 520.2,313.6 520.6,314
			520.3,314.5 519.7,314.9 519.6,315.3 520.1,315.6 520.2,316.1 519.9,316.6 519,317.5 519,318.1 519.4,318.5 520,318 520.4,318.1
			520.4,318.5 520,318.7 520.4,319 520.2,319.3 520.5,319.8 520.5,320.5 520.6,321.1 521.6,321.3 521.9,321.8 521.7,322.2
			521.7,322.5 521.6,322.7 521.9,323 521.9,323.4 521.8,323.6 522.3,324.1 522.4,324.4 523.2,325.4 523.7,326.4 523.9,326.9
			523.7,327.4 523.5,327.7 523.4,328.2 523.4,329.1 523.8,329.4 524.5,329.4 524.7,329.2 525.5,329.2 525.8,329.4 525.6,329.8
			525.7,330.3 526.2,330.7 526.8,330.9 527.3,331 527.7,331.2 527.8,331.6 528.4,331.9 528.8,331.9 529.1,332.2 529,332.6
			528.6,332.9 528.5,333.1 528.3,333.4 528.9,333.8 529.3,334 529.6,333.9 530,334.1 530.2,334.1 531.1,334.6 531.3,334.9
			531.4,335.7 531.7,336 532.2,336.2 532.4,336.4 532.4,337 532.6,337.2 533.5,337.5 534,337.8 533.9,338.1 534,338.9 534.3,339.2
			534.8,339.5 535,339.8 535,339.9 535.1,339.9 535.2,340.4 535.5,340.7 535.8,340.8 536.1,341.2 536.7,341.6 537.2,341.9
			537.6,341.8 537.8,341.4 538.1,341.2 538.8,341.2 539.1,341.3 539.2,341.4 539.4,341.4 540,341.3 540.3,341 540.6,340.6
			541.2,340.6 541.4,340.8 541.8,341.5 542.1,341.8 542.2,342.1 542.9,342.3 543.2,342.6 543.4,343 543.6,343.3 543.8,343.7
			543.8,344 543.9,344 544.6,344 544.8,344.1 544.9,344 544.8,343.8 544.8,343.4 545.1,343 545.7,343.3 546.4,343.5 546.8,343.4
			547.3,343.5 547.4,343.9 548,344.2 548.3,344.2 548.3,343.7 548.7,343.4 549,343.5 549.2,343.4 549.7,343.4 550.3,343.1
			551.3,343 551.9,343.2 552.6,342.9 552.9,342.5 553.5,342 553.5,342 553.9,341.6 554.1,341.5 554.3,341.2 554.9,340.7
			555.1,340.8 555.8,339.7 556.8,338.7 556.6,337.7 556.3,337.4 556.2,336.3 555.7,335.8 555.5,335.4 555.2,335 554.6,335
			554.4,334.8 554.4,334.5 553.9,334.3 553.4,333.4 553.2,333.2 553.1,332.8 552.6,332.3 552.3,332 551.2,332 550.7,331.8
			550.5,331.5 550.9,330.9 551.2,330.7 551.2,330.1 551.8,330.2 552.4,330.1 552.6,330.3 553,330.4 553.2,330.1 553.5,329.8
			553.6,328.5 553.6,327.4 553.8,326.6 554.2,325.9 554.2,325.3 554,325 554.2,324.4 554.8,323.7 554.9,323.3 555.2,323.3
			555.5,323.4 556,321.3 556.3,320.4 557.1,319.9 557.1,319.4 557.8,318.3 557.9,317.8 558.4,317.7 558.7,317.7 559,316.9
			559.7,315.6 559.7,314.6 560,313.8 560.2,313.6 560,313.5 559.9,312.9 559.6,311.8 559.6,311.1 559.9,310.8 560,310.3
			560.4,309.6 560.6,308.3 561,307.4 561.2,307.1 561,306.9 560.8,306.7 561,306.1 561,305.5 561.3,305.3 562.1,305.3 562.2,305
			562,304.7 562.1,304.4 562.6,304.3 563,304 563.6,304.1 563.8,303.7 564.3,303.6 564.7,303.4 565.1,302.8 564.9,302.8
			564.9,302.4 564.3,302.1 563.7,302.1 563.7,301.6 562.5,300.7 562,300.6 561.5,299.7 561.2,298.5 561.3,297.5 561.2,296.4
			560.5,294.4 560.4,293.9 560.5,293.8 560.7,294 560.8,294.2 560.9,294.2 560.9,293.9 560.4,293.3 560.2,292.5 560.1,292.4
			560.1,292.3 560,292.1 560.1,292 559.9,291.8 560,291.5 560,291.3 526.8,291.5 		"/>
		<polygon fill="#E6EEF4" points="557.3,339 557.8,338.8 558.2,338.9 558.2,340.6 558.7,341.1 559.3,341.2 559.9,341 560.6,341.2
			561.9,341.1 562.5,341.4 563.6,342.5 564.3,343 564.8,343.5 565.2,343.7 566.2,343.7 566.8,344 567.5,343.8 568,344 568.4,344
			569,344 569.7,342.8 570,342.5 570.6,342.3 571,342.3 571.3,342.1 572.6,341.9 573,342.1 573.3,342.7 573.8,343 574.9,342.8
			575.6,342.8 575.7,342.8 575.9,342.4 576.8,342 577.6,341.8 578.3,341.4 578.9,341.1 579.1,340.6 579.8,340.2 580.3,340.2
			580.8,339.8 582.6,339.8 584.3,339.8 593,331.2 589.4,331.2 581.2,328.7 580.5,328.1 579.5,327.9 579.1,327.1 579.2,326.3
			578.5,325.9 578,324.4 577.8,323.3 578,323 577.5,322.7 576.7,322.9 576.1,323.3 575,323.3 574.8,323 575.2,322.4 575.3,321.9
			575.5,321.4 575.4,320.7 575.7,320.2 575.8,319.5 576.4,319.3 575.6,318.3 575.2,318.3 575,318 575,317.5 574.4,316.7
			573.9,316.6 573.1,315.8 572.5,315.4 572.3,315.1 571.7,315.1 571.7,314.9 570.9,314.8 570.7,314.3 569.7,313.5 569.2,313.4
			568.7,312.9 568.2,312.8 567.7,312.9 567.6,313 566.7,312.3 566.3,312.3 566.1,312.5 565.7,312.2 565.1,312.3 564.6,312.7
			564.1,312.7 563,312.3 562.8,312 562.5,311.8 561.8,313.4 561.3,313.4 561.1,313.8 560.6,313.7 560.2,313.6 560,313.8
			559.7,314.6 559.7,315.6 559,316.9 558.7,317.7 558.4,317.7 557.9,317.8 557.8,318.3 557.1,319.4 557.1,319.9 556.3,320.4
			556,321.3 555.5,323.4 555.2,323.3 554.9,323.3 554.8,323.7 554.2,324.4 554,325 554.2,325.3 554.2,325.9 553.8,326.6
			553.6,327.4 553.6,328.5 553.5,329.8 553.2,330.1 553,330.4 552.6,330.3 552.4,330.1 551.8,330.2 551.2,330.1 551.2,330.7
			550.9,330.9 550.5,331.5 550.7,331.8 551.2,332 552.3,332 552.6,332.3 553.1,332.8 553.2,333.2 553.4,333.4 553.9,334.3
			554.4,334.5 554.4,334.8 554.6,335 555.2,335 555.5,335.4 555.7,335.8 556.2,336.3 556.3,337.4 556.6,337.7 556.8,338.7
			557,338.4 		"/>
		<polygon fill="#E6EEF4" points="564.3,303.6 563.8,303.7 563.6,304.1 563,304 562.6,304.3 562.1,304.4 562,304.7 562.2,305
			562.1,305.3 561.3,305.3 561,305.5 561,306.1 560.8,306.7 561,306.9 561.2,307.1 561,307.4 560.6,308.3 560.4,309.6 560,310.3
			559.9,310.8 559.6,311.1 559.6,311.8 559.9,312.9 560,313.5 560.6,313.7 561.1,313.8 561.3,313.4 561.8,313.4 562.5,311.8
			562.8,312 563,312.3 564.1,312.7 564.6,312.7 565.1,312.3 565.7,312.2 566.1,312.5 566.3,312.3 566.7,312.3 567.6,313
			567.7,312.9 568.2,312.8 568.7,312.9 569.2,313.4 569.7,313.5 570.7,314.3 570.9,314.8 571.7,314.9 571.7,315.1 572.3,315.1
			572.5,315.4 573.1,315.8 573.9,316.6 574.4,316.7 575,317.5 575,318 575.2,318.3 575.6,318.3 576.4,319.3 577,319.2 577.2,318.9
			577.7,318.8 578.2,318.2 578,318.1 577.9,318 577.7,318.2 577.4,318 577.1,318 576.9,317.5 577,317.3 576.6,316.8 576.2,316.7
			575.8,315.5 575.6,315.3 575.6,315.4 575.3,315.4 574.9,315 574.4,314.7 574,314 573,313 572.8,312.7 572.1,312.5 571.8,312.2
			571.3,311.6 570.9,311.7 570.8,311.6 570.4,311.7 570.1,311.8 569.8,311.5 569.3,310.8 569.5,310.6 569,309.9 568.8,310
			568.7,310.5 568.8,310.5 568.9,311.3 568.4,311.2 568.3,310.3 568,309.7 567.6,309.6 567.6,309.3 567.5,308.6 567.3,308.5
			566.9,306.5 565.8,303.5 565.1,302.8 565.1,302.8 564.7,303.4 		"/>
		<polygon fill="#E6EEF4" points="577.2,318.9 577,319.2 575.8,319.5 575.7,320.2 575.4,320.7 575.5,321.4 575.3,321.9 575.2,322.4
			574.8,323 575,323.3 576.1,323.3 576.7,322.9 577.5,322.7 578,323 578,322.9 578.7,321.7 578.6,321.5 577.9,321.5 577.4,321.7
			577.3,321.7 576.9,321.3 577.5,321.3 577.8,320.9 578.2,320.9 578.7,320.3 579,320.2 578.9,319.3 579,319 578.8,319 578.2,318.4
			578.2,318.2 578.2,318.2 577.7,318.8 		"/>
		<polygon fill="#E6EEF4" points="577.8,323.3 578,324.4 578.5,325.9 579.2,326.3 579.1,327.1 579.5,327.9 580.5,328.1 581.2,328.7
			589.4,331.2 593,331.2 584.3,339.8 582.6,339.8 580.8,339.8 580.3,340.2 579.8,340.2 579.1,340.6 578.9,341.1 578.3,341.4
			577.6,341.8 576.8,342 575.9,342.4 575.7,342.8 575.6,342.8 575.6,342.8 573,345.3 573,356.3 574.9,358.1 574.9,357.9
			577.2,355.4 577.5,354.8 578.1,354.2 578.7,354.1 578.9,353.7 579.2,353.6 580.7,351.8 581.1,351.7 583,349.7 584,348.9
			584.8,348.4 585.7,348.2 587,347.1 590.1,344.4 591.6,342.6 592.5,341.7 592.6,341.1 594.5,338.6 594.6,338.1 595.6,336.7
			595.7,335.8 597.2,332.8 597.6,332.5 597.3,332.1 597.4,331.8 598,331.1 598.2,331.1 598.6,330.6 599.2,329.3 600.2,327.9
			600.2,327.2 600.3,326.9 600.4,326.2 600.2,325.9 600.6,325.2 600.9,325.1 601.2,325.1 601.3,325.2 601.5,325.1 601.3,324.8
			601.1,324.7 601.2,324.9 600.8,324.9 601,324.5 600.9,324 600.7,323.7 600.9,323.1 601.2,322.9 601.2,322.7 600.8,322.7
			600.7,322.4 600.8,322.2 600.9,321.7 601.1,321.3 601.3,320.8 601.2,320.8 600.9,320.8 600.2,320.5 599.9,320.3 599.9,320.4
			599.6,320.4 599.3,320.7 599.4,320.8 599.2,321.2 599.1,321.1 598.6,321.6 597.7,321.7 597.6,321.9 597.4,321.7 596.6,321.9
			596.1,322.3 594.7,322.5 594.4,322.5 594.2,322.4 593.3,322.4 592.5,322.8 591.8,322.8 591.3,322.9 590.8,322.7 590.3,322.8
			588.6,323.8 587.8,323.9 587.2,323.7 586.9,323.8 586.2,323.8 586,323.6 585.7,323.6 584.8,324.4 584.4,324.4 583.6,324.8
			583.4,325.1 582.6,325.2 581.9,325.1 581.2,324.4 580.9,324.4 580.7,324 579,322.1 578.9,322.1 578.7,321.7 578,322.9 		"/>
		<polygon fill="#E6EEF4" points="573,345.3 575.6,342.8 575.6,342.8 574.9,342.8 573.8,343 573.3,342.7 573,342.1 572.6,341.9
			571.3,342.1 571,342.3 570.6,342.3 570,342.5 569.7,342.8 569,344 568.4,344 568,344 567.5,343.8 566.8,344 566.2,343.7
			565.2,343.7 564.8,343.5 564.3,343 563.6,342.5 562.5,341.4 561.9,341.1 560.6,341.2 559.9,341 559.3,341.2 558.7,341.1
			558.2,340.6 558.2,338.9 557.8,338.8 557.3,339 557,338.4 556.8,338.7 555.8,339.7 555.1,340.8 554.9,340.7 554.3,341.2
			554.1,341.5 553.9,341.6 553.5,342 553.5,342 553.6,342 553.8,342.3 554,343.1 554.3,343.2 554.2,343.7 554.6,343.8 554.8,344.4
			554.8,345 555.4,345.6 555.8,346.4 556.2,346.6 556.5,346.8 556.2,347.2 556.6,347.5 556.8,348.1 556.8,348.7 556.1,349.5
			556.1,349.9 555.9,350.5 554.9,350.5 554.9,350.8 554.6,351.1 554.4,351.6 554,352 553.7,352.6 553.1,353.1 553,353.9
			552.3,356.6 553.1,356.6 563.3,362.5 563.8,363.5 563.7,363.7 563.8,364.1 564,364.4 567.5,366.8 567.7,366.8 568.3,366.6
			569.3,365.1 569.8,364.3 569.8,363.6 570.2,363.1 570.7,362.4 570.5,362.2 570.5,361.9 570.9,361.4 571,361.2 571.3,361.1
			572.1,361.1 572.6,360.4 573.6,360.1 573.4,359.8 573.7,359.4 574,359.4 574.9,358.2 574.9,358.1 573,356.3 		"/>
		<polygon fill="#E6EEF4" points="546.3,356.9 547.4,356.9 548.4,356.8 546.4,356.9 		"/>
		<polygon fill="#E6EEF4" points="544.4,345 544.4,345.8 544.2,346.7 544.2,347.4 544.5,347.6 544.8,348 545,348.5 544.9,348.8
			543.5,350.7 542.6,351.7 542.4,352.1 541.3,354 541.1,354.4 541.1,355.1 541,356.1 540.6,357.1 540.7,357.8 540.6,357.9
			540.7,357.9 541.2,357.8 541.6,357.5 541.9,357.6 542.2,357.8 542.6,357.8 542.8,357.7 542.8,357.3 543.2,357.2 543.3,357.3
			543.5,357.1 543.7,357.1 544,356.9 546.3,356.9 546.4,356.9 548.4,356.8 552.3,356.6 553,353.9 553.1,353.1 553.7,352.6 554,352
			554.4,351.6 554.6,351.1 554.9,350.8 554.9,350.5 555.9,350.5 556.1,349.9 556.1,349.5 556.8,348.7 556.8,348.1 556.6,347.5
			556.2,347.2 556.5,346.8 556.2,346.6 555.8,346.4 555.4,345.6 554.8,345 554.8,344.4 554.6,343.8 554.2,343.7 554.3,343.2
			554,343.1 553.8,342.3 553.6,342 553.5,342 552.9,342.5 552.6,342.9 551.9,343.2 551.3,343 550.3,343.1 549.7,343.4 549.2,343.4
			549,343.5 548.7,343.4 548.3,343.7 548.3,344.2 548,344.2 547.4,343.9 547.3,343.5 546.8,343.4 546.4,343.5 545.7,343.3
			545.1,343 544.8,343.4 544.8,343.8 544.9,344 544.8,344.1 544.7,344.6 		"/>
		<polygon fill="#E6EEF4" points="520.8,323.2 520.4,323 519.8,323 519.3,323.4 518.6,323.8 518.5,324.1 518.5,324.5 518.2,324.6
			517.7,325.5 517.4,325.5 517.1,325.3 516.7,325.8 516.8,326.2 516.4,326.5 516.3,327 516.3,327.4 516.2,327.8 515.8,328
			515.2,328.4 514.2,328.6 513.4,328.7 512.7,328.6 512.2,328.4 511.6,328.4 511.2,328.3 510.8,328.6 510.7,329 511.2,329.6
			511.5,329.6 511.6,330 510.8,330.5 510.4,331 509.7,331 508.1,331.3 507.4,331.8 506.6,332.1 505.9,332.7 505.4,332.7
			505.1,332.5 504.9,331.9 504.6,331.6 504.3,331.9 504.3,332.5 504,333.1 503.2,333.1 502.8,333.2 502.2,333.2 502.1,332.7
			501.8,332.3 501.8,332.5 501.3,333.2 500.9,333.4 500.7,334 500.2,334.9 499.8,335.6 499.3,336.3 499,336.5 498.7,336.8
			498.8,337.4 499,338.2 498.9,338.9 499.2,339.6 499.2,340.2 499.2,341.3 499.5,341.5 500.3,341.9 500.7,342.5 500.9,343.1
			501.6,344.1 502,344.9 502.3,345.2 503.2,345.9 503.3,346.4 503.3,346.9 503.4,347.1 503.5,347.1 504.7,345.1 505.4,344.4
			505.9,344.3 506.1,344 507.3,343.5 507.8,343.6 508.1,343.4 508.5,343.4 508.9,343.4 509.1,343.6 509.6,343.9 509.8,343.8
			510.2,343.7 510.2,343.2 510.3,342.8 510.5,342.6 510.1,342 510.1,341.7 510.5,341.7 510.7,341.5 510.7,341.2 511,340.8
			511,340.5 511.2,340.3 511.6,340.3 512,339.9 512.4,339.9 512.5,339.7 512.8,339.7 513.2,340 513.5,340 514.3,340.7 514.8,340.9
			515.5,341.5 515.7,341.7 516.3,341.6 516.8,341.9 517.5,342 517.9,342 518.3,341.9 518.6,341.9 519.1,342.1 519.8,342.2
			520,342.4 520.7,342.2 520.8,342 520.5,341.8 520.5,341.5 520.9,341 521.3,340.5 521.9,340.5 522.4,340.6 522.7,341 523,340.8
			524.2,340.7 524.5,340.4 524.9,340.2 526,339.7 526.4,339.8 526.5,340 526.7,340 526.8,340.3 527,340.3 527.4,340.1 528.1,340.1
			528.4,340 528.8,340 529.1,339.4 529,339.3 529,339 529.4,339 529.7,339.3 530.3,339.4 530.6,339.3 530.9,339.5 531.3,339.5
			531.7,339.8 532.7,339.8 532.9,339.9 533.8,339.5 534.4,339.6 534.9,339.9 535,339.9 535,339.8 534.8,339.5 534.3,339.2
			534,338.9 533.9,338.1 534,337.8 533.5,337.5 532.6,337.2 532.4,337 532.4,336.4 532.2,336.2 531.7,336 531.4,335.7 531.3,334.9
			531.1,334.6 530.2,334.1 530,334.1 529.6,333.9 529.3,334 528.9,333.8 528.3,333.4 528.5,333.1 528.6,332.9 529,332.6
			529.1,332.2 528.8,331.9 528.4,331.9 527.8,331.6 527.7,331.2 527.3,331 526.8,330.9 526.2,330.7 525.7,330.3 525.6,329.8
			525.8,329.4 525.5,329.2 524.7,329.2 524.5,329.4 523.8,329.4 523.4,329.1 523.4,328.2 523.5,327.7 523.7,327.4 523.9,326.9
			523.7,326.4 523.2,325.4 522.4,324.4 522.3,324.1 521.8,323.6 521.9,323.4 521.9,323 521.6,322.7 521.5,322.9 		"/>
		<polygon fill="#E6EEF4" points="489.1,259.4 489.3,259.6 488.7,260.6 487.1,261.6 487.1,261.9 486.6,262.6 486,262.6 485.6,262.9
			485.5,263.2 485.4,263.5 485.7,264.4 485.8,265.1 485.6,265.2 485.6,265.5 485.5,265.7 485.1,266.2 484.7,266.5 484.5,266.6
			484.2,266.6 484.2,266.7 484,266.9 484,267.8 484.2,268 484.6,268.7 484.6,270.5 484.7,271.5 484.6,271.8 484.8,273.2 485.1,274
			484.8,275.6 484.7,275.8 485,276.5 485.1,277.5 484.9,277.9 484.2,278.3 484,278.6 483.8,278.8 484.2,279.2 484.9,280.1
			485.4,281.2 485.5,281.3 485.7,282.1 485.6,282.4 485.7,283.2 486,283.6 486.1,284.1 486.4,284.4 487.6,284.4 488.6,284.4
			489.1,284.8 489.4,285.4 490,286.5 490.3,286.8 490.6,287.2 491,287.5 495.8,288.7 496.3,289.2 498.8,288.2 501.9,286.9
			524.4,298.3 524.4,298.3 524.4,298.3 524.4,297.3 527,297 525.8,269.5 525.5,268.1 525.2,267.3 525.5,266.4 525.9,265.5
			525.9,264.9 525.6,264.1 525.8,262.9 526,262.5 525.8,261.7 525.4,261.3 524.9,261.2 524.3,261.3 522.5,261 522.1,260.7
			521.4,260.6 520.4,260.4 520.2,260 520.4,260 520.3,259.6 519.2,259 518.6,259 517.6,258.7 517.4,258.6 517.1,258.8 516.5,258.5
			516.3,258.5 515.4,259 514,259.1 512.9,259.7 512.2,260.3 512,261.1 511.7,261.4 511.6,262.8 512.1,263.6 512.4,264.7
			512.2,265.3 511.5,266.1 511.4,266.3 510.4,267.1 509.8,267.3 508.6,266.8 507.6,266 506.7,265.3 505.4,264.6 503.4,263.8
			502.5,263.7 502.2,263.8 501.1,263.8 500.2,263.4 499.3,261.7 499.3,260.8 498.6,259.9 496.8,259.7 495.9,259 494.4,259
			493.5,258.7 491.5,259 490.2,258.7 489.7,258.2 489,258.1 488.9,258.3 		"/>
		<polygon fill="#E6EEF4" points="480.9,247.1 480.8,248 480.8,248.8 480.3,250.1 480.5,250.9 480.8,251.3 480.9,251.5 480.7,251.7
			480.4,252.1 480.8,252.5 480.5,252.7 480.3,253.7 480,254 479.8,254.3 479.4,254.4 478.7,255.2 478.4,256.5 478.6,256.6
			478.9,257.4 478.8,257.7 479.2,258.2 479.4,258.3 480.2,259 480.4,259.7 481.1,259.9 481.3,260.2 481.8,260.3 482.5,261.1
			484.2,266.6 484.5,266.6 484.7,266.5 485.1,266.2 485.5,265.7 485.6,265.5 485.6,265.2 485.8,265.1 485.7,264.4 485.4,263.5
			485.5,263.2 485.6,262.9 486,262.6 486.6,262.6 487.1,261.9 487.1,261.6 488.7,260.6 489.3,259.6 489.1,259.4 488.9,258.3
			489,258.1 488.7,258 487.9,257.5 487.8,257.2 487.8,256.8 487.3,256.6 487.2,256.7 487.2,256.9 487,257.1 486.6,256.9
			486.5,256.5 486.1,256.6 485.2,256 484.8,255.2 485,254.4 486.4,253.4 487.2,252.6 487.4,252.4 487.2,252 487.5,251.7
			487.4,251.3 487.2,251.2 487.2,250.3 486.4,250 485.7,249.1 485.8,248.3 486.5,247.9 486.6,247.3 487.1,246.5 487.1,246
			486.9,245.8 485.9,246.7 485.5,247.1 485.3,246.9 484.8,245.9 484.6,245.8 484.6,245.3 484.3,245 483.7,245.2 483.6,245.5
			483.3,245.1 482.6,245.3 481.6,245.8 480.9,246.4 480.9,246.4 480.8,246.8 		"/>
		<polygon fill="#E6EEF4" points="486.7,255.9 486.7,256.1 487.1,256.5 487.5,256.2 487.3,255.9 		"/>
		<polygon fill="#E6EEF4" points="453.6,252.5 453.9,252.9 454,253.4 454.1,253.6 454.1,254.5 454.1,255.6 454.2,256 454.5,258.1
			454.9,258.9 455,259.5 455.4,259.6 455.7,259.8 456,259.9 456.3,260 456,260.8 456,261 455.6,261.5 452.4,261.5 451.7,261.7
			451,262.7 450.4,263.2 450.2,263.9 450.2,264.8 450,265.3 448,266.6 445.1,268.3 442.8,269.7 441.7,269.9 440.6,269.9
			440.2,270.1 439.3,270.1 437.8,270.4 437,270.9 436.5,271.6 435.2,272.6 435.2,274.9 435.1,274.9 435.1,275.7 435.1,275.7
			435.1,275.7 445.2,282.5 445.2,282.5 463.5,294.6 463.8,295.9 464.4,296.4 465.4,296.4 466.2,296.7 466.7,297.3 467.4,297.5
			467.9,297.9 467.9,298.4 467.6,299.2 467.8,299.7 468.4,299.9 469.7,299.7 470.8,299.4 470.8,299.4 475,298.4 478.5,295.2
			491,287.5 491,287.5 490.6,287.2 490.3,286.8 490,286.5 489.4,285.4 489.1,284.8 488.6,284.4 487.6,284.4 486.4,284.4
			486.1,284.1 486,283.6 485.7,283.2 485.6,282.4 485.7,282.1 485.5,281.3 485.4,281.2 484.9,280.1 484.2,279.2 483.8,278.8
			484,278.6 484.2,278.3 484.9,277.9 485.1,277.5 485,276.5 484.7,275.8 484.8,275.6 485.1,274 484.8,273.2 484.6,271.8
			484.7,271.5 484.6,270.5 484.6,268.7 484.2,268 484,267.8 484,266.9 484.2,266.7 484.2,266.6 482.5,261.1 481.8,260.3
			481.3,260.2 481.1,259.9 480.4,259.7 480.2,259 479.4,258.3 479.2,258.2 478.8,257.7 478.9,257.4 478.6,256.6 478.4,256.5
			478.7,255.2 479.4,254.4 479.8,254.3 480,254 480.3,253.7 480.5,252.7 480.8,252.5 480.4,252.1 480.7,251.7 480.9,251.5
			480.8,251.3 480.5,250.9 480.3,250.1 480.8,248.8 480.8,248 480.9,247.1 480.8,246.8 480.9,246.4 480.7,246.2 480,246.4
			479.5,246.3 478.4,246.6 477.7,246.1 477,245.8 477,246.1 476.5,246.6 475.5,246.5 475.5,246 475.1,245.7 474.4,245.9
			474.4,246.3 473.8,246.4 473.6,246.8 473.2,246.7 472.8,246.7 472.2,247.1 471.6,247.1 471.2,246.5 470.4,246.5 470.1,246.4
			469.4,246.5 468.8,246.4 468.5,246.5 468,246.3 467.6,246.4 467.4,247 466.8,247 466.3,246.8 465.5,247.5 465.1,247.4
			464.5,247.1 463.9,247.3 462.8,247.3 462.2,247.2 460.8,248.3 460.1,248.4 459.7,248.4 459,248.8 459,249.2 458.6,249.7
			458.3,249.7 458.2,249.5 457.8,249.5 457.5,249.7 457.3,250 456.5,250 455.9,250.3 455.5,250.7 455.4,251 454.9,251.6 454,251.8
			453.3,251.9 453.5,252.2 		"/>
		<polygon fill="#E6EEF4" points="435.1,274.9 435.2,274.9 435.2,272.6 436.5,271.6 437,270.9 437.8,270.4 439.3,270.1 440.2,270.1
			440.6,269.9 441.7,269.9 442.8,269.7 445.1,268.3 448,266.6 450,265.3 450.2,264.8 450.2,263.9 450.4,263.2 451,262.7
			451.7,261.7 452.4,261.5 455.6,261.5 456,261 456,260.8 456.3,260 456,259.9 455.7,259.8 455.4,259.6 455,259.5 454.9,258.9
			454.5,258.1 454.2,256 454.1,255.6 454.1,254.5 454.1,253.6 454,253.4 453.9,252.9 453.6,252.5 453.5,252.2 453.3,251.9
			452.9,251.9 451.3,251.8 451,251.4 450.8,250.9 450.6,250.8 450.6,250.8 450.1,251.4 449.2,251.5 448.3,251.3 447.9,251.3
			447.3,251.6 446.4,251.7 445.8,251.6 445.1,250.8 444.8,250.5 444.6,250.1 444.6,249.8 444.7,249.6 444.6,249.4 444,249.6
			443.8,249.8 443.4,249.8 442.8,250.3 442.7,251.9 442.1,252.6 442,253.8 441.6,254.5 440.4,255.7 440.1,255.7 439.5,256.1
			438.4,256.5 437.7,257.3 437.4,257.3 436.3,258.1 435.6,258.3 435.2,258.9 433.9,259.8 434.4,260.7 434.3,261.4 433.2,262.4
			432.5,263.9 432.4,264.5 432.9,265.4 432.5,266.5 432.8,266.7 433.1,267.1 432.9,267.9 431.1,269.9 430.9,270.7 430.1,271.5
			429.3,271.6 427.3,273.3 424.6,273.9 423.9,274.8 435.1,274.9 		"/>
		<polygon fill="#E6EEF4" points="423.5,288.1 423.8,287.3 424.4,286.9 425.1,286.8 426.1,286.8 426.2,279.5 435,279.6 435.1,275.7
			435.1,275.7 435.1,274.9 423.9,274.8 422.9,276.3 422.9,277.4 422.4,277.4 420.4,278.4 420.2,279 419.5,279.4 419.7,280.1
			418,282.6 417.9,283.4 416.6,284.6 416.2,284.8 415.5,286.4 415.6,286.8 414.5,288.2 414.4,288.5 414.7,288.8 414.3,289
			413.4,290.6 413,290.7 412.6,291.1 412.7,291.8 412.4,292.4 412.4,293.3 423.6,293.2 		"/>
		<polygon fill="#E6EEF4" points="414.2,307.8 414.7,307.3 416.2,307 417.7,306.4 418.1,306.4 419.5,306.9 420.2,307 420.8,307.8
			420.8,308.1 421.1,308.2 421.6,308.1 421.8,308.2 422.3,308.1 422.5,308.3 422.6,309 423.2,309.5 423.2,310.2 423.8,310.3
			424,310.9 424.5,311.1 425.2,311.5 425.3,312 425.3,312 426,311.4 426.9,311.4 427.2,310.6 427.1,310.2 427.1,309.2 428,308.9
			428.7,308.9 428.7,309.6 429.2,310.5 429.5,310.7 430.2,309.4 431.6,308.8 432.2,309 432.3,309.8 432.6,310.2 433.1,309.6
			433.4,309.6 433.7,310.1 434,310.2 443.9,310.1 444.8,307.6 444,307.1 441.8,282.5 445.2,282.5 445.2,282.5 445.2,282.5
			435.1,275.7 435.1,275.7 435,279.6 426.2,279.5 426.1,286.8 425.1,286.8 424.4,286.9 423.8,287.3 423.5,288.1 423.6,293.2
			412.4,293.3 412.5,293.4 412.2,294 412.2,295.1 412.8,294.4 413.1,295.1 413.3,295.2 413.6,294.9 414.4,296.1 414.1,296.5
			414.3,297.1 414.1,298 413.7,298 413.4,298.2 414.2,299.5 414.7,302.3 414.6,304.3 413.9,305.3 413.4,307 413.3,308.1
			413.8,307.8 		"/>
		<polygon fill="#E6EEF4" points="444.7,323 444.5,322.6 444.5,322 445.1,321.9 445,321.1 444.8,320.6 445.3,320.2 446,319.7
			446.8,318.2 447.4,317.4 447.4,317 448.1,315.9 448.4,315.8 448.5,315.4 449.4,315.4 449.7,315.5 451.1,315 451.4,314.5
			452.9,313.5 455,312.3 455.7,311.7 456.6,311.2 457.9,311 458.6,310.9 459.4,311.2 459.9,311.2 460.1,311.4 460.2,311.3
			460.8,311.4 462.8,311.2 463.4,311.3 464.1,310.9 465.3,310.9 465.9,310.9 466.7,310.4 467.5,310.4 468.3,309.9 469.7,309.1
			469.9,308.5 470,307.6 470.5,307.3 470.6,304.8 470.8,299.4 470.8,299.4 469.7,299.7 468.4,299.9 467.8,299.7 467.6,299.2
			467.9,298.4 467.9,297.9 467.4,297.5 466.7,297.3 466.2,296.7 465.4,296.4 464.4,296.4 463.8,295.9 463.5,294.6 445.2,282.5
			445.2,282.5 441.8,282.5 444,307.1 444.8,307.6 443.9,310.1 434,310.2 433.7,310.1 433.4,309.6 433.1,309.6 432.6,310.2
			432.3,309.8 432.2,309 431.6,308.8 430.2,309.4 429.5,310.7 429.2,310.5 428.7,309.6 428.7,308.9 428,308.9 427.1,309.2
			427.1,310.2 427.2,310.6 426.9,311.4 426,311.4 425.3,312 425.7,312.3 425.7,312.8 425.9,313.2 425.6,314.3 425.7,314.7
			426.4,315.3 426.6,316 427,316.3 427.3,316.2 427.6,316.5 427.7,316.9 428.1,317.3 428.1,317.6 427.9,317.9 428,318.4
			428.7,318.8 428.7,319.3 428.5,319.6 428.5,319.6 428.8,319.8 429.5,319.5 429.8,319.7 430.4,320.1 431.1,320.1 431.7,319.7
			432.1,319.7 432.6,318.9 433.1,318.9 433.9,319.2 434.1,319 434.6,318.8 434.7,319.1 435.3,319.6 435.6,320.2 435.4,321
			435.7,321.2 436.3,321.4 436.3,321.7 435.8,322.4 435.6,323.1 436.1,323 436.3,322.7 436.7,322.6 436.7,323.2 436.9,323.5
			436.9,323.8 437.6,323.9 437.9,324.2 437.9,324.5 438.7,324.1 439.1,324.1 439.7,324.4 440.9,324.5 441.1,324.2 441.1,324
			442,323.8 442.8,323.9 442.6,324.1 442.8,324.4 443.7,324.7 444.2,323.9 444.6,323.7 		"/>
		<polygon fill="#E6EEF4" points="464.7,318.4 465.1,318 465,317.5 464.8,317.3 464.7,316.9 464.4,316.8 463.2,317.4 462.2,316.7
			462.2,315.5 459.5,313.8 459.5,313 459.9,312.4 460,311.6 460.1,311.4 459.9,311.2 459.4,311.2 458.6,310.9 457.9,311
			456.6,311.2 455.7,311.7 455,312.3 452.9,313.5 451.4,314.5 451.1,315 449.7,315.5 449.4,315.4 448.5,315.4 448.4,315.8
			448.1,315.9 447.4,317 447.4,317.4 446.8,318.2 446,319.7 445.3,320.2 444.8,320.6 445,321.1 445.1,321.9 444.5,322 444.5,322.6
			444.7,323 444.6,323.7 444.7,323.6 445.5,324.3 446.5,324.8 446.9,324.8 447.2,325.1 447.7,325.1 448.2,325.3 448.5,325.7
			449.4,326.2 450.1,326.1 450.6,325.7 451,325.7 451.4,326 452,326.1 452,325.3 451.6,324.5 451.3,324.2 451.2,323.4 451.2,322.8
			452.2,322.7 454.3,322.7 454.5,322.6 455.9,322.6 457,322.4 457.6,322.4 458.3,322.1 458.5,322.2 458.5,322.2 458.7,322.1
			461.6,322.8 461.7,322.6 462.4,322.4 462.3,321.8 462.8,321.5 462.7,321 463.3,320.7 463.6,320.9 464.4,320.4 464.9,320.4
			465.5,319.7 465.5,319.2 465.3,319.3 		"/>
		<polygon fill="#E6EEF4" points="414.4,318.6 416.2,318.8 416.8,318.1 417.8,317.7 420.3,317.7 421,317.9 421,317.9 421.5,317.8
			423.3,317.8 424.4,318.4 424.9,318.7 425.7,318.7 426.6,319.1 427.1,318.8 427.6,318.8 427.9,319.1 428.5,319.2 428.5,319.6
			428.7,319.3 428.7,318.8 428,318.4 427.9,317.9 428.1,317.6 428.1,317.3 427.7,316.9 427.6,316.5 427.3,316.2 427,316.3
			426.6,316 426.4,315.3 425.7,314.7 425.6,314.3 425.9,313.2 425.7,312.8 425.7,312.3 425.3,312 425.2,311.5 424.5,311.1
			424,310.9 423.8,310.3 423.2,310.2 423.2,309.5 422.6,309 422.5,308.3 422.3,308.1 421.8,308.2 421.6,308.1 421.1,308.2
			420.8,308.1 420.8,307.8 420.2,307 419.5,306.9 418.1,306.4 417.7,306.4 416.2,307 414.7,307.3 414.2,307.8 413.8,307.8
			413.3,308.1 413.2,309.1 412.5,310.4 410.7,312 411.7,312.7 412.3,313.8 412.8,313.9 412.8,314.4 412.6,314.5 413.3,314.9
			412.9,315.2 412.9,315.4 414.2,315.5 414.5,315.3 415,315.3 416,314.5 416.8,314.2 417.3,314.3 418,314.4 418.8,314.9
			419.3,314.9 420.6,315.7 420.8,315.6 421,316 420.8,316.3 420.2,316.3 419.3,315.9 418.6,315.7 418,315.7 417.4,315.2
			417.1,315.3 416.7,315.7 416.5,315.6 416.1,315.5 415.5,315.9 415,316 414.5,316.6 412.8,316.6 412.5,316.8 412.5,317.5
			412.2,317.8 412.4,318 413,317.6 414,318 413.4,318.4 413.1,318.2 412.6,318.1 412.8,318.3 412.8,318.8 413.5,319.1 		"/>
		<polygon fill="#E6EEF4" points="414.5,316.6 415,316 415.5,315.9 416.1,315.5 416.5,315.6 416.7,315.7 417.1,315.3 417.4,315.2
			418,315.7 418.6,315.7 419.3,315.9 420.2,316.3 420.8,316.3 421,316 420.8,315.6 420.6,315.7 419.3,314.9 418.8,314.9 418,314.4
			417.3,314.3 416.8,314.2 416,314.5 415,315.3 414.5,315.3 414.2,315.5 412.9,315.4 413.1,315.8 413.8,316.2 414.4,316 414,316.4
			413.3,316.5 412.7,315.7 412.2,316.2 412.5,316.6 412.5,316.8 412.8,316.6 		"/>
		<polygon fill="#E6EEF4" points="419.1,321.9 419.8,321.5 420.8,321.3 421.2,321 421.3,320.5 421,320.1 421,319.2 421.1,318.8
			421,317.9 420.3,317.7 417.8,317.7 416.8,318.1 416.2,318.8 414.4,318.6 413.5,319.1 412.8,318.8 412.8,318.9 413,319.3
			413.9,319.3 414.3,319.4 413.8,319.7 414.3,320.2 414.9,320.3 415,320.6 415.4,320.6 416.1,320.4 416.7,320.2 417.5,320.7
			417.3,320.8 415.9,320.9 416.1,321.1 416.5,321.2 416.8,321.4 416.6,321.7 416.9,321.7 416.3,322.4 417.4,322.3 417.4,322.8
			417.5,322.9 418.2,322.7 418.5,322.1 		"/>
		<polygon fill="#E6EEF4" points="431.1,337.3 431.1,337.3 430.1,336.6 		"/>
		<polygon fill="#E6EEF4" points="428.6,334.9 428.7,334.9 428.6,334.9 		"/>
		<polygon fill="#E6EEF4" points="424.1,327.2 424.1,326.8 424.9,326.1 425.3,325.6 426,325.3 428.4,325.3 428.8,326.1 429.1,326.5
			429.7,327.8 429.7,328.2 430.2,328.7 430.2,329.2 429.8,329.3 429.8,329.8 430.1,329.9 430,330.2 430.7,329.9 430.9,330
			432.1,329.6 432.6,329.9 433,330.5 433.5,330.8 433.5,331.9 433.4,332.5 434.1,333.3 434.4,333.2 435.2,332.6 435.5,332.7
			435.9,333.1 436.1,333.4 436,333.6 436.1,333.3 436.6,333.1 437.3,331.5 437.4,330.9 437.2,330.7 436.7,330.1 436.7,329.7
			437,329.5 437.5,329.6 437.5,329.2 437.2,328.6 436.9,328.4 436.8,327.4 437,327 436.9,325.7 436.6,325.5 436.6,325.1
			437.7,324.7 437.9,324.5 437.9,324.2 437.6,323.9 436.9,323.8 436.9,323.5 436.7,323.2 436.7,322.6 436.3,322.7 436.1,323
			435.6,323.1 435.8,322.4 436.3,321.7 436.3,321.4 435.7,321.2 435.4,321 435.6,320.2 435.3,319.6 434.7,319.1 434.6,318.8
			434.1,319 433.9,319.2 433.1,318.9 432.6,318.9 432.1,319.7 431.7,319.7 431.1,320.1 430.4,320.1 429.8,319.7 429.5,319.5
			428.8,319.8 428.5,319.6 428.5,319.6 428.5,319.2 427.9,319.1 427.6,318.8 427.1,318.8 426.6,319.1 425.7,318.7 424.9,318.7
			424.4,318.4 423.3,317.8 421.5,317.8 421,317.9 421,317.9 421.1,318.8 421,319.2 421,320.1 421.3,320.5 421.2,321 420.8,321.3
			419.8,321.5 419.1,321.9 418.5,322.1 418.2,322.7 418.2,322.7 418.7,323.2 418.4,324.2 419.1,325.1 419.7,325.1 420.1,325.3
			420.4,324.9 420.8,325.2 420.6,325.4 420.6,325.8 420.8,326.1 421.4,326.1 421.6,326.9 422.4,327.3 422.8,327.6 423.3,327.6 		"/>
		<polygon fill="#E6EEF4" points="424.3,332.8 424,332.7 423.9,333 424,333.2 424.4,333.4 424.6,333.5 424.5,333.1 		"/>
		<polygon fill="#E6EEF4" points="428,333.5 428.6,333.2 429.2,332.6 429.1,332.1 429.4,331.4 429.8,331.2 429.8,330.8 430,330.2
			430,330.2 430.1,329.9 429.8,329.8 429.8,329.3 430.2,329.2 430.2,328.7 429.7,328.2 429.7,327.8 429.1,326.5 428.8,326.1
			428.4,325.3 426,325.3 425.3,325.6 424.9,326.1 424.1,326.8 424.1,327.2 423.3,327.6 422.8,327.6 422.8,327.7 422.6,328.2
			422.5,328.6 422.9,328.8 422.5,329.5 422.7,330 423.3,330.1 423.6,331 423.6,331.6 424.2,332.3 424.7,332 424.7,332.2
			424.5,332.7 424.9,333 425.3,333.4 425.1,333.8 425.7,333.9 427.2,334.7 427.6,334.7 427.7,334.3 		"/>
		<polygon fill="#E6EEF4" points="428.3,334.7 428.6,334.9 428.6,334.9 		"/>
		<polygon fill="#E6EEF4" points="438.1,340.6 438.4,340 438.2,339.5 438.3,339.1 438.6,338.7 438.4,338.4 438.8,338.1 438.6,337.5
			438.2,337.5 437.8,337.2 437.6,336.6 437.3,336.5 436.9,336.6 436.6,336.2 436.1,336.2 435.9,336.3 435.5,336.1 435.3,335.6
			435.7,335.2 436.2,334.1 436,333.6 436.1,333.4 435.9,333.1 435.5,332.7 435.2,332.6 434.4,333.2 434.1,333.3 433.4,332.5
			433.5,331.9 433.5,330.8 433,330.5 432.6,329.9 432.1,329.6 430.9,330 430.7,329.9 430,330.2 430,330.2 429.8,330.8 429.8,331.2
			429.4,331.4 429.1,332.1 429.2,332.6 428.6,333.2 428,333.5 427.7,334.3 427.6,334.7 428.3,334.7 428.6,334.9 428.7,334.9
			428.5,335.3 428.9,335.5 429.7,336.6 430.1,336.6 431.1,337.3 431.2,337.4 433,339.1 433.6,339.1 435.7,340.7 438.4,341.7
			438.4,341.1 		"/>
		<polygon fill="#E6EEF4" points="451.5,339.4 452,339.3 452,338.5 451.7,338.1 451.1,337.9 451,337.2 450.6,336.2 450.3,335.8
			450.3,335.6 450.5,335.4 450.5,334.2 450.8,333.8 450.8,333.2 451,332.7 451,332.2 451.8,330.8 452.4,330.5 452.4,329.9
			452.7,329.3 452.4,328.6 452,328.3 452,327.8 451.8,327.2 452,326.3 452,326.1 451.4,326 451,325.7 450.6,325.7 450.1,326.1
			449.4,326.2 448.5,325.7 448.2,325.3 447.7,325.1 447.2,325.1 446.9,324.8 446.5,324.8 445.5,324.3 444.7,323.6 444.2,323.9
			443.7,324.7 442.8,324.4 442.6,324.1 442.8,323.9 442,323.8 441.1,324 441.1,324.2 440.9,324.5 439.7,324.4 439.1,324.1
			438.7,324.1 437.7,324.7 436.6,325.1 436.6,325.5 436.9,325.7 437,327 436.8,327.4 436.9,328.4 437.2,328.6 437.5,329.2
			437.5,329.6 437,329.5 436.7,329.7 436.7,330.1 437.2,330.7 437.4,330.9 437.3,331.5 436.6,333.1 436.1,333.3 436,333.6
			436.2,334.1 435.7,335.2 435.3,335.6 435.5,336.1 435.9,336.3 436.1,336.2 436.6,336.2 436.9,336.6 437.3,336.5 437.6,336.6
			437.8,337.2 438.2,337.5 438.6,337.5 438.8,338.1 438.4,338.4 438.6,338.7 438.3,339.1 438.2,339.5 438.4,340 438.1,340.6
			438.4,341.1 438.4,341.7 438.7,341.8 439.7,341 440.3,341 440.5,340.7 442.4,340 442.4,339.7 443.5,339.6 447.1,339.5
			448.5,339.1 449.8,339.7 449.9,339 450.5,338.9 450.9,339.6 451,339.4 		"/>
		<polygon fill="#E6EEF4" points="461.4,336.5 461.1,336.3 460.9,335.6 460.7,334.9 460.8,334.2 460.9,333.8 461.2,333.3
			461.1,331.6 460.9,331.2 460.9,330.2 460.7,329.8 460.9,329.5 460.9,329 460.6,328.7 460.7,328.3 460.9,327.9 460.8,327
			460.6,326.9 460.3,326.7 460.3,325.7 460.4,324.9 459.9,324.5 459.6,324.1 459,323.6 458.9,323.2 458.7,322.9 458.5,322.2
			458.3,322.1 457.6,322.4 457,322.4 455.9,322.6 454.5,322.6 454.3,322.7 452.2,322.7 451.2,322.8 451.2,323.4 451.3,324.2
			451.6,324.5 452,325.3 452,326.1 452,326.3 451.8,327.2 452,327.8 452,328.3 452.4,328.6 452.7,329.3 452.4,329.9 452.4,330.5
			451.8,330.8 451,332.2 451,332.7 450.8,333.2 450.8,333.8 450.5,334.2 450.5,335.4 450.3,335.6 450.3,335.8 450.6,336.2
			451,337.2 451.1,337.9 451.7,338.1 452,338.5 452,339.3 451.5,339.4 451,339.4 450.9,339.6 451,339.9 452.5,340.1 453.6,340.6
			456,339.4 457.7,339.3 459.1,338 460.5,337.4 462,337.2 461.7,336.8 		"/>
		<polygon fill="#E6EEF4" points="463.7,335.1 463.7,334.4 463.5,333.7 463.6,330.3 463.6,329.8 463.9,329.5 463.9,328.8
			463.7,328.4 463.7,327.6 463.5,326.4 462.9,324.9 462.6,324.8 462.3,324.4 461.6,324.1 461.4,323.2 461.6,322.8 458.7,322.1
			458.5,322.2 458.5,322.2 458.7,322.9 458.9,323.2 459,323.6 459.6,324.1 459.9,324.5 460.4,324.9 460.3,325.7 460.3,326.7
			460.6,326.9 460.8,327 460.9,327.9 460.7,328.3 460.6,328.7 460.9,329 460.9,329.5 460.7,329.8 460.9,330.2 460.9,331.2
			461.1,331.6 461.2,333.3 460.9,333.8 460.8,334.2 460.7,334.9 460.9,335.6 461.1,336.3 461.4,336.5 461.7,336.8 462,337.2
			462.2,337.2 463.7,336.3 464,336.3 464.1,335.8 		"/>
		<polygon fill="#E6EEF4" points="467,333.8 466.9,333.4 467,333 466.8,331.8 466.9,331.4 466.9,331.1 466.8,330.9 466.9,330.7
			466.8,330.2 466.8,330 466.8,329.4 466.9,329 466.8,328.5 467.1,328.2 467.5,328 467.8,327.9 468.1,327.7 468.3,327.2
			468.7,326.5 468.9,326.1 469.3,325.8 469.6,325.8 469.8,325.5 469.2,324.9 469.2,324.6 469.4,324.3 470,324.3 470.1,323.9
			469.9,322.9 469.9,322.3 469.1,321.7 469,321.2 469.1,320.6 469.2,320.6 468.6,319.8 467.9,319.7 467.4,319 466.5,318.2
			466.3,318.7 466.3,319 465.8,319.2 465.5,319.2 465.5,319.7 464.9,320.4 464.4,320.4 463.6,320.9 463.3,320.7 462.7,321
			462.8,321.5 462.3,321.8 462.4,322.4 461.7,322.6 461.4,323.2 461.6,324.1 462.3,324.4 462.6,324.8 462.9,324.9 463.5,326.4
			463.7,327.6 463.7,328.4 463.9,328.8 463.9,329.5 463.6,329.8 463.6,330.3 463.5,333.7 463.7,334.4 463.7,335.1 464.1,335.8
			464,336.3 465,336.4 466.9,335.8 467,335.8 466.9,335.2 		"/>
		<polygon fill="#E6EEF4" points="501.9,286.9 498.8,288.2 499.1,288.5 500.4,292.4 500.4,293.1 500.2,293.5 502.1,295.7 502,296.7
			501.6,297.1 500.9,302.4 501,306.5 496.3,311.2 496.2,311.5 495.9,311.6 495.6,311.6 495.5,311.9 495.7,315.4 496.1,315.6
			496.8,316.5 497.2,317.2 497.2,317.2 497.2,317.2 498.6,317.9 499.3,318.5 499.4,319.3 499.6,319.6 499.7,320.1 500.1,320.8
			500,321.2 499.9,321.5 499.9,321.7 500.2,322.1 500,322.8 499.7,323.2 499.7,323.7 500.2,324.4 500.6,324.6 500.8,325.2
			501.5,325.8 501.7,325.9 501.4,326.1 501.1,326.1 500.8,325.9 500.2,325.8 499.8,325.9 499.4,325.8 498.9,325.9 498.6,325.8
			498.1,325.8 497.7,325.8 497.7,326.3 497.5,326.6 497.5,327.1 497.6,327.4 497.9,327.6 498,327.9 498.5,328.1 499.5,328.9
			500.5,330 500.9,330.4 501.3,331.1 501.8,331.8 501.8,332.3 502.1,332.7 502.2,333.2 502.8,333.2 503.2,333.1 504,333.1
			504.3,332.5 504.3,331.9 504.6,331.6 504.9,331.9 505.1,332.5 505.4,332.7 505.9,332.7 506.6,332.1 507.4,331.8 508.1,331.3
			509.7,331 510.4,331 510.8,330.5 511.6,330 511.5,329.6 511.2,329.6 510.7,329 510.8,328.6 511.2,328.3 511.6,328.4 512.2,328.4
			512.7,328.6 513.4,328.7 514.2,328.6 515.2,328.4 515.8,328 516.2,327.8 516.3,327.4 516.3,327 516.4,326.5 516.8,326.2
			516.7,325.8 517.1,325.3 517.4,325.5 517.7,325.5 518.2,324.6 518.5,324.5 518.5,324.1 518.6,323.8 519.3,323.4 519.8,323
			520.4,323 520.8,323.2 521.5,322.9 521.6,322.7 521.7,322.5 521.7,322.2 521.9,321.8 521.6,321.3 520.6,321.1 520.5,320.5
			520.5,319.8 520.2,319.3 520.4,319 520,318.7 520.4,318.5 520.4,318.1 520,318 519.4,318.5 519,318.1 519,317.5 519.9,316.6
			520.2,316.1 520.1,315.6 519.6,315.3 519.7,314.9 520.3,314.5 520.6,314 520.2,313.6 520.2,313.2 520.7,312.8 521,312.8
			521.9,311.6 522.2,310.9 521.9,310.6 521.9,309.9 522.4,309.5 523.1,309.5 523.6,309.8 524.1,309.4 524.5,309.3 524.4,298.3
			524.4,298.3 		"/>
		<polygon fill="#E6EEF4" points="492.1,317.2 492.3,317.3 492.7,317.2 492.9,316.8 		"/>
		<polygon fill="#E6EEF4" points="495.6,311.6 495.9,311.6 496.2,311.5 496.3,311.2 501,306.5 500.9,302.4 501.6,297.1 502,296.7
			502.1,295.7 500.2,293.5 500.4,293.1 500.4,292.4 499.1,288.5 498.8,288.2 496.3,289.2 495.8,288.7 491,287.5 491,287.5
			478.5,295.2 475,298.4 470.8,299.4 470.6,304.8 470.5,307.3 470,307.6 469.9,308.5 469.7,309.1 468.3,309.9 467.5,310.4
			466.7,310.4 465.9,310.9 465.3,310.9 464.1,310.9 463.4,311.3 462.8,311.2 460.8,311.4 460.2,311.3 460,311.6 459.9,312.4
			459.5,313 459.5,313.8 462.2,315.5 462.2,316.7 463.2,317.4 464.4,316.8 464.7,316.9 464.8,317.3 465,317.5 465.1,318
			464.7,318.4 465.3,319.3 465.5,319.2 465.8,319.2 466.3,319 466.3,318.7 466.5,318.2 467.4,319 467.9,319.7 468.6,319.8
			469.2,320.6 469.6,320.2 469.6,319.9 469.3,319.9 468.9,319.1 469.1,318.8 469,318.5 469.6,318 470.1,317.9 470.1,317.6
			469.9,317.3 469.7,316.8 469.8,316.6 469.9,316.4 469.8,316.2 469.9,315.9 470.5,315.4 470.8,315.3 471,315.2 471.6,315
			472,315.1 472.2,315.1 473.1,315.1 473.3,314.9 473.8,314.8 474.1,314.9 474.8,315.1 475.2,315.2 475.6,315.3 476.5,315.6
			476.7,315.9 477.3,316.8 477.9,317.2 478.2,317.1 478.5,316.7 478.9,316.7 479.3,316.4 480.1,316.3 480.2,316.2 480.6,316.2
			481.1,316.6 481.1,316.8 481.7,317 482.6,317.5 483.2,317.6 484.3,318 484.8,318.1 485.5,317.7 486.2,316.7 486.8,316.5
			488.2,316.6 488.8,316.3 490.1,316.5 491,316.9 491.8,316.9 492.1,317.2 492.9,316.8 493,316.7 493.6,316.5 493.8,316.2
			494.1,316.1 494.5,316.2 494.8,316.1 494.9,315.8 495.2,315.3 495.7,315.4 495.5,311.9 		"/>
		<rect x="497.2" y="317.2" fill="#E6EEF4" width="0" height="0"/>
		<polygon fill="#E6EEF4" points="483.1,339.9 483.4,339.2 483.3,338.5 483.2,337.9 483.5,337.7 483.5,337.3 484,336.9 484.5,336.6
			484.7,336.3 485.6,335.7 485.5,335.1 485.6,334.8 486.2,334.8 486.5,334.4 486.6,334.6 487.4,334.8 487.7,334.8 488.2,335
			488.5,335.6 489,336 489.3,336.1 489.9,335.7 490.3,335.1 490.3,334.9 490.5,334.6 490.9,334.4 491.2,333.9 491.2,333.5
			491.4,332.9 492.3,332 492.4,331.5 492.3,331.1 492.5,330.7 493.2,329.9 493.8,329.6 493.9,329 494.1,328.6 494,327.7
			494.4,327.3 495.1,327.1 495.6,326.5 495.7,325.9 495.7,325.2 495.6,324.7 495.9,324.2 496.4,323.3 496.7,323 496.8,322.8
			497.3,322.4 497.6,322.4 498,321.9 498.6,321.7 498.7,321.3 498.5,320.6 498.5,320.3 498.3,319.8 497.8,319.7 497.5,319.2
			497.6,318.3 497.5,317.9 497.2,317.2 497.2,317.2 496.8,316.5 496.1,315.6 495.7,315.4 495.2,315.3 494.9,315.8 494.8,316.1
			494.5,316.2 494.1,316.1 493.8,316.2 493.6,316.5 493,316.7 492.7,317.2 492.3,317.3 491.8,316.9 491,316.9 490.1,316.5
			488.8,316.3 488.2,316.6 486.8,316.5 486.2,316.7 485.5,317.7 484.8,318.1 484.3,318 483.2,317.6 482.6,317.5 481.7,317
			481.1,316.8 481.1,316.6 480.6,316.2 480.2,316.2 480.1,316.3 479.3,316.4 478.9,316.7 478.5,316.7 478.2,317.1 477.9,317.2
			477.3,316.8 476.7,315.9 476.5,315.6 475.6,315.3 475.2,315.2 474.8,315.1 474.1,314.9 473.8,314.8 473.3,314.9 473.1,315.1
			472.2,315.1 472,315.1 471.6,315 471,315.2 470.8,315.3 470.5,315.4 469.9,315.9 469.8,316.2 469.9,316.4 469.8,316.6
			469.7,316.8 469.9,317.3 470.1,317.6 470.1,317.9 469.6,318 469,318.5 469.1,318.8 468.9,319.1 469.3,319.9 469.6,319.9
			469.6,320.2 469.2,320.6 469.1,320.6 469,321.2 469.1,321.7 469.9,322.3 469.9,322.9 470.1,323.9 470,324.3 469.4,324.3
			469.2,324.6 469.2,324.9 469.8,325.5 469.6,325.8 469.3,325.8 468.9,326.1 468.7,326.5 468.3,327.2 468.1,327.7 467.8,327.9
			467.5,328 467.1,328.2 466.8,328.5 466.9,329 466.8,329.4 466.8,330 466.8,330.2 466.9,330.7 466.8,330.9 466.9,331.1
			466.9,331.4 466.8,331.8 467,333 466.9,333.4 467,333.8 466.9,335.2 467,335.8 468.1,336 469,335.7 471,336.7 472.2,337.9
			472.9,339.2 472.8,340.1 473.2,340.3 473.5,341.2 474.2,341.9 475.3,342.2 478,342 478.5,341.7 478.9,341.9 480.2,341.4
			480.6,341.6 481.3,341.4 481.6,340.7 482.1,341.2 482.3,341.1 482.3,341.1 482.3,340.7 		"/>
		<polygon fill="#E6EEF4" points="476.3,353.4 476.3,353.9 476.6,354 476.9,353.8 477.1,353.4 476.6,353.1 		"/>
		<polygon fill="#E6EEF4" points="483,344.2 482.9,343.4 482.7,343.2 482.1,343.8 481.9,344.4 481.6,344.5 481.5,344.9 482,345.2
			482.6,345.2 		"/>
		<polygon fill="#E6EEF4" points="486.2,348.1 486.3,348.2 489.6,348.2 489.6,348.2 489.7,348.1 490,347.9 490.2,348 490.5,347.8
			491.3,347.9 491.5,347.8 492.4,347.8 492.7,347.9 493.1,347.8 493.5,347.8 493.6,348 494.3,348 494.4,347.9 494.6,347.9
			494.8,348.1 498.3,348.2 498.7,348.3 498.8,348.2 499,348.2 499.3,348.5 499.6,348.4 499.9,348.5 500.1,348.8 500.4,348.7
			500.5,348.5 500.7,348.6 501.1,348.9 501.3,348.8 501.9,348.8 502.2,348.9 502.4,349 502.6,348.9 502.7,349.1 503,349
			503.1,348.8 502.8,348.3 502.9,348.1 503.2,347.6 503.4,347.3 503.5,347.1 503.4,347.1 503.3,346.9 503.3,346.4 503.2,345.9
			502.3,345.2 502,344.9 501.6,344.1 500.9,343.1 500.7,342.5 500.3,341.9 499.5,341.5 499.2,341.3 499.2,340.2 499.2,339.6
			498.9,338.9 499,338.2 498.8,337.4 498.7,336.8 499,336.5 499.3,336.3 499.8,335.6 500.2,334.9 500.7,334 500.9,333.4
			501.3,333.2 501.8,332.5 501.8,332.3 501.8,331.8 501.3,331.1 500.9,330.4 500.5,330 499.5,328.9 498.5,328.1 498,327.9
			497.9,327.6 497.6,327.4 497.5,327.1 497.5,326.6 497.7,326.3 497.7,325.8 498.1,325.8 498.6,325.8 498.9,325.9 499.4,325.8
			499.8,325.9 500.2,325.8 500.8,325.9 501.1,326.1 501.4,326.1 501.7,325.9 501.5,325.8 500.8,325.2 500.6,324.6 500.2,324.4
			499.7,323.7 499.7,323.2 500,322.8 500.2,322.1 499.9,321.7 499.9,321.5 500,321.2 500.1,320.8 499.7,320.1 499.6,319.6
			499.4,319.3 499.3,318.5 498.6,317.9 497.2,317.2 497.2,317.2 497.5,317.9 497.6,318.3 497.5,319.2 497.8,319.7 498.3,319.8
			498.5,320.3 498.5,320.6 498.7,321.3 498.6,321.7 498,321.9 497.6,322.4 497.3,322.4 496.8,322.8 496.7,323 496.4,323.3
			495.9,324.2 495.6,324.7 495.7,325.2 495.7,325.9 495.6,326.5 495.1,327.1 494.4,327.3 494,327.7 494.1,328.6 493.9,329
			493.8,329.6 493.2,329.9 492.5,330.7 492.3,331.1 492.4,331.5 492.3,332 491.4,332.9 491.2,333.5 491.2,333.9 490.9,334.4
			490.5,334.6 490.3,334.9 490.3,335.1 489.9,335.7 489.3,336.1 489,336 488.5,335.6 488.2,335 487.7,334.8 487.4,334.8
			486.6,334.6 486.5,334.4 486.2,334.8 485.6,334.8 485.5,335.1 485.6,335.7 484.7,336.3 484.5,336.6 484,336.9 483.5,337.3
			483.5,337.7 483.2,337.9 483.3,338.5 483.4,339.2 483.1,339.9 482.3,340.7 482.3,341.1 482.7,341.2 483.1,341 483.5,342.7
			484,342.8 484.2,343.1 485,342.7 485.5,343.4 485.3,343.7 485.3,344.5 485.8,345.2 485.9,346.3 485.5,347.3 485.9,347.7
			485.5,348.1 485.8,348.1 		"/>
		<polygon fill="#E6EEF4" points="489.5,364.2 489.8,364 490.3,364 490.5,363.7 490.7,363.7 491.5,364.3 491.5,363.8 491.4,362.4
			491,362.1 490.7,361.9 490.3,362 489.8,362.1 489.9,361.6 489.7,361.2 490,360.9 490.5,360.8 491.1,361.2 491.4,360.9
			491.5,360.6 491.9,360.6 492.9,360.6 493,360.1 492.9,359.4 493.2,359.1 493.7,359.2 494.2,360.3 494.6,360.8 495.2,360.6
			495.6,360.7 495.9,360.4 496.5,360.4 497,360.7 497.2,361 497.5,361 497.5,360.5 497.4,360 498.1,358 498.3,356.9 498.4,356.3
			498.1,356 497.9,355.7 497.5,355.3 497.4,355.1 497.1,354.9 497,354.7 496.8,354.5 496.8,354.3 497.1,354.1 497.2,354 497.4,354
			497.3,353.6 497.1,353.4 497.2,353 497.8,352.7 498.3,352.6 498.4,352.1 498.2,351.8 498.4,351.4 498.3,350.6 498,350.4
			497.1,350.4 496.5,350.6 495.9,350.7 495.5,350.6 495.1,350.9 494.8,350.7 494.9,350.4 494.8,349.9 494.8,349.2 494.7,348.7
			494.8,348.1 494.8,348.1 494.6,347.9 494.4,347.9 494.3,348 493.6,348 493.5,347.8 493.1,347.8 492.7,347.9 492.4,347.8
			491.5,347.8 491.3,347.9 490.5,347.8 490.2,348 490,347.9 489.7,348.1 489.6,348.2 489.6,351.5 485.8,351.4 485.7,351.3
			485.4,351.4 485,351.6 484.7,351.6 484.6,352.2 484.1,352.3 484.6,353.2 485.5,353.4 484.2,353.7 483.9,353.4 483.8,354.2
			483.7,355.7 483.2,356.1 482.5,355.9 482.5,356.2 483.1,357.4 483.4,357.7 483.4,358.1 483.9,358.8 483.9,359.6 484.3,360
			484.6,360.7 485.3,361.3 485.1,361.4 485.9,362.2 487.1,363.2 487.4,363.8 488.4,364.3 488.5,364.8 489,365 489.1,365.1
			489.5,364.5 		"/>
		<polygon fill="#E6EEF4" points="485.4,351.4 485.7,351.3 485.8,351.4 489.6,351.5 489.6,348.2 489.6,348.2 486.3,348.2
			486.2,348.1 485.8,348.1 485.5,348.1 485.4,348.3 485.6,348.7 484.7,349.7 484,351.1 484.7,351.4 484.7,351.6 485,351.6 		"/>
		<polygon fill="#E6EEF4" points="492,367.6 492.1,367.6 492.6,367.3 492.8,366.8 493.2,366.8 493.6,366.4 493.9,366.4 494.2,366.6
			494.4,367 494.4,367.5 494.5,367.4 494.9,367.4 495.3,367.2 495.4,367.5 495.4,367.7 495.9,367.8 496.3,367.4 496.3,366.8
			496.7,366.7 497,366.9 497.6,366.4 498.5,366.1 498.4,366.3 498.1,366.9 498.2,367.1 498.4,367.6 499.1,367.9 499.7,367.7
			500.1,367.1 501.3,365.9 501.4,365.5 501.9,365.2 502.4,365.1 502.9,364.4 502.8,363.9 503,363.1 503.1,361.6 503,361.4
			502.8,360.6 503.1,360 504,359.1 504,358.5 504.5,357.8 505.2,357.4 505.5,357.5 506,357.1 506.6,357 507.4,355.5 507.5,354.6
			507.7,353.6 508.1,353.5 508.2,352.7 508.1,352.5 508.2,351.7 508.1,351.3 508.2,350.5 508.6,350 508.7,349.4 508.8,348.8
			508.6,347.8 509.8,346.3 509.9,345.8 510.4,345.5 510.4,344.4 510.2,343.8 510.2,343.7 509.8,343.8 509.6,343.9 509.1,343.6
			508.9,343.4 508.5,343.4 508.1,343.4 507.8,343.6 507.3,343.5 506.1,344 505.9,344.3 505.4,344.4 504.7,345.1 503.4,347.3
			503.2,347.6 502.9,348.1 502.8,348.3 503.1,348.8 503,349 502.7,349.1 502.6,348.9 502.4,349 502.2,348.9 501.9,348.8
			501.3,348.8 501.1,348.9 500.7,348.6 500.5,348.5 500.4,348.7 500.1,348.8 499.9,348.5 499.6,348.4 499.3,348.5 499,348.2
			498.8,348.2 498.7,348.3 498.3,348.2 494.8,348.1 494.7,348.7 494.8,349.2 494.8,349.9 494.9,350.4 494.8,350.7 495.1,350.9
			495.5,350.6 495.9,350.7 496.5,350.6 497.1,350.4 498,350.4 498.3,350.6 498.4,351.4 498.2,351.8 498.4,352.1 498.3,352.6
			497.8,352.7 497.2,353 497.1,353.4 497.3,353.6 497.4,354 497.2,354 497.1,354.1 496.8,354.3 496.8,354.5 497,354.7 497.1,354.9
			497.4,355.1 497.5,355.3 497.9,355.7 498.1,356 498.4,356.3 498.3,356.9 498.1,358 497.4,360 497.5,360.5 497.5,361 497.2,361
			497,360.7 496.5,360.4 495.9,360.4 495.6,360.7 495.2,360.6 494.6,360.8 494.2,360.3 493.7,359.2 493.2,359.1 492.9,359.4
			493,360.1 492.9,360.6 491.9,360.6 491.5,360.6 491.4,360.9 491.1,361.2 490.5,360.8 490,360.9 489.7,361.2 489.9,361.6
			489.8,362.1 490.3,362 490.7,361.9 491,362.1 491.4,362.4 491.5,363.8 491.5,364.3 490.7,363.7 490.5,363.7 490.3,364 489.8,364
			489.5,364.2 489.5,364.5 489.1,365.1 489.6,365.6 489.8,366 490.7,366.5 490.7,367 491.1,367.5 491.1,368.1 491.4,368.4
			491.7,368.2 		"/>
		<polygon fill="#E6EEF4" points="492.8,370.1 493.1,369.7 493.1,368.7 493.3,368.5 493.9,367.9 494.4,367.5 494.4,367 494.2,366.6
			493.9,366.4 493.6,366.4 493.2,366.8 492.8,366.8 492.6,367.3 492.1,367.6 492,367.6 491.7,368.2 491.4,368.4 491.8,368.8
			491.9,369.6 491.6,370.2 491.8,370.5 492.3,370.1 		"/>
		<polygon fill="#E6EEF4" points="563.8,364.1 563.7,363.7 563.8,363.5 563.3,362.5 553.1,356.6 552.3,356.6 548.4,356.8
			547.4,356.9 544,356.9 543.7,357.1 543.5,357.1 543.3,357.3 543.6,357.8 544,358.1 544.1,358.4 544.3,358.8 544.5,359.6
			544.6,360.1 544.4,360.5 544.4,360.9 544.1,361.1 543.8,361.3 543.5,361.2 543.4,361.1 543.4,361.4 543.6,361.6 543.6,362
			544,362.2 544.1,362.5 544.4,362.6 544.6,363.4 544.5,363.8 544.1,364.3 543.7,364.7 543.4,365 542.7,365.8 542.2,366.4
			541.3,366.7 539.9,366.7 540.2,369 540.9,372.3 542.8,375 543.5,377.2 544.4,377.7 544.8,377.7 545.3,377.8 545.5,377.8
			545.9,378.1 546,378.3 546.3,378.6 546.9,378.7 548.1,379.1 548.4,379.1 548.7,379.3 549,379.4 549.2,379.8 549.7,380.4
			549.9,380.4 549.9,380.4 550.1,380.3 550.3,380.3 550.5,380.7 550.8,380.7 551,380.9 551.1,380.8 551.5,380.8 551.6,381
			551.8,381 552,381.2 552.3,381.4 552.6,381.7 553.5,382.7 553.6,383.8 553.6,388.4 554.1,386.5 556.8,386.4 557.3,386.3
			557.4,386.1 557.8,386.1 557.8,386.3 558.2,386.4 558.5,386.6 558.9,386.7 559.2,387 559.1,387.2 559.9,387 560.5,386.6
			560.8,386.5 561,386.3 561.3,386.4 561.4,386.6 561.7,386.6 562.1,386.9 562.7,386.6 563.4,386.6 563.6,386.2 563.5,385.8
			563.7,385.7 564.2,385.8 564.6,385.7 565,386 565.5,386 565.7,385.7 566.8,385.4 567.2,385.6 567.6,385.4 567.8,385.2
			568.5,385.1 568.8,384.7 569.4,384.6 569.8,384.3 570.2,383.8 570.7,384 570.9,383.7 571,383.7 570.9,383.6 570.9,383.3
			570.4,382.8 569.6,382.7 568.6,381.8 568.7,381.4 568.5,380.5 568.2,380.2 568.5,379.8 568.1,379.5 568,378.9 567.9,378.6
			568,378.6 567.7,377.8 567.6,377.2 568,376.9 568.1,376.2 567.6,375.8 567.6,374.8 567.8,374.1 568.1,373.9 568.3,374
			568.5,373.7 568.1,372.6 567.7,372.7 567.2,372 566.4,371.3 566.3,370.7 566.8,369.5 567.4,367.7 567.6,367.4 567.5,367
			567.4,366.8 567.5,366.8 564,364.4 		"/>
		<polygon fill="#E6EEF4" points="542.8,357.3 542.8,357.7 542.6,357.8 542.2,357.8 541.9,357.6 541.6,357.5 541.2,357.8
			540.7,357.9 540.6,357.9 540,358.4 539.5,359.1 539,360.7 539,361.2 539.2,361.1 539.7,361.1 540,361.2 540.2,361.7 540.7,361.9
			540.9,361.7 541,361.6 541.3,361.9 541.9,361.7 541.9,361.4 542.2,360.6 542.2,360.1 542.4,360.1 542.6,360.3 543,360.3
			543.1,360.8 543.4,360.9 543.4,361.1 543.5,361.2 543.8,361.3 544.1,361.1 544.4,360.9 544.4,360.5 544.6,360.1 544.5,359.6
			544.3,358.8 544.1,358.4 544,358.1 543.6,357.8 543.3,357.3 543.2,357.2 		"/>
		<polygon fill="#E6EEF4" points="543.1,360.8 543,360.3 542.6,360.3 542.4,360.1 542.2,360.1 542.2,360.6 541.9,361.4 541.9,361.7
			541.3,361.9 541,361.6 540.9,361.7 540.7,361.9 540.2,361.7 540,361.2 539.7,361.1 539.2,361.1 539,361.2 538.9,361.5
			539.3,362.1 539.4,362.7 539.4,363.4 539.9,366.7 541.3,366.7 542.2,366.4 542.7,365.8 543.4,365 543.7,364.7 544.1,364.3
			544.5,363.8 544.6,363.4 544.4,362.6 544.1,362.5 544,362.2 543.6,362 543.6,361.6 543.4,361.4 543.4,361.1 543.4,360.9 		"/>
		<polygon fill="#E6EEF4" points="493.2,371.1 493.3,370.9 493.5,370.9 493.6,370.8 494.1,370.7 494.6,370.6 495,370.6 495.4,370.7
			495.9,370.7 496.6,370.7 497.4,370.6 497.8,370.7 498.7,370.7 499.7,370.6 501.6,370.6 504.6,370.6 504.6,371 504.5,371.2
			504.6,371.5 504.8,371.8 504.9,372.1 504.7,372.4 504.7,372.8 505,373.3 505.2,373.9 505.3,374.2 505.3,374.5 505.5,374.7
			505.8,375.1 506.1,375.6 506.3,376.6 506.6,376.7 507.3,376.7 507.9,376.6 508.2,376.7 509.1,376.8 509.5,376.6 511.6,376.4
			511.6,375.7 511.5,375.1 511.7,375 511.9,374.5 512,373.7 514.7,373.7 514.7,373.4 515.6,373.5 515.6,373.8 515.4,374.1
			515.5,374.4 518.7,374.7 518.8,375 518.7,375.4 518.7,375.8 518.5,376.3 518.4,376.8 518.7,377.2 518.7,377.6 518.5,377.8
			518.5,378 518.6,378.3 518.7,379.3 518.5,379.9 518.6,380.1 518.6,380.4 518.9,380.8 518.9,381.1 519,381.2 519.2,381.5
			519.4,381.6 519.5,381.9 519.4,382.3 519.4,382.6 519.7,382.9 519.7,383.2 519.6,383.4 519.7,383.9 520,384.2 519.9,384.6
			519.9,384.8 519.7,384.9 519.7,385.5 519.8,385.7 520.1,385.6 520.3,385.5 520.5,385.4 520.6,385.3 520.9,385.3 521.3,385.6
			521.6,385.7 522.3,385.7 522.6,385.7 522.9,385.7 523.1,385.6 523.6,385.3 524.1,385.2 524.6,385.1 524.6,385.2 524.8,385.3
			525.1,385.3 525.6,385.5 525.7,385.6 525.7,386.2 525.8,386.3 526,386.4 526.3,386.1 526.7,385.9 527.1,385.9 527.3,385.7
			528,385.5 528.2,385.6 528.2,386.1 528.4,386.4 528.4,386.8 528.4,387 528.6,387 529.1,387.2 529.4,387.3 530.1,387.7
			530.6,387.8 531.3,387.9 531.3,388.1 531.7,388.1 532.6,387.8 532.6,387.5 532.9,386.8 533.2,386.7 533.5,386.6 533.7,386.7
			533.7,387.5 534.1,388 534.2,388.3 534.9,388.6 535.9,389 536.5,389.4 537.1,390.2 537.6,390.6 538.2,391.2 538.8,391.8
			539.1,391.8 539.6,391.7 540,391.5 540.2,391.5 540.2,391.7 540.7,391.8 540.8,391.5 540.7,388.6 540.3,388.5 539.7,388.6
			539.8,388.9 539.9,389.1 539.8,389.2 538.7,389.2 538.4,388.9 538.2,388.4 537.5,387.6 537.1,387.3 537.1,386.6 537,385.1
			537.1,384.7 537.7,384.2 537.8,383.9 537.7,383.7 538,383.6 538,383 538,382.6 538,382.2 538,381.8 538.2,381.7 538.2,381.3
			537.9,381.2 537.6,380.9 537.5,380.3 538.6,378.1 543.1,377 543.5,377.2 542.8,375 540.9,372.3 540.2,369 539.9,366.7
			539.4,363.4 539.4,362.7 539.3,362.1 538.9,361.5 539,361.2 539,360.7 539.5,359.1 540,358.4 540.7,357.8 540.6,357.1 541,356.1
			541.1,355.1 541.1,354.4 541.3,354 542.4,352.1 542.6,351.7 543.5,350.7 544.9,348.8 545,348.5 544.8,348 544.5,347.6
			544.2,347.4 544.2,346.7 544.4,345.8 544.4,345 544.7,344.6 544.8,344.1 544.6,344 543.9,344 543.8,344 543.8,343.7 543.6,343.3
			543.4,343 543.2,342.6 542.9,342.3 542.2,342.1 542.1,341.8 541.8,341.5 541.4,340.8 541.2,340.6 540.6,340.6 540.3,341
			540,341.3 539.4,341.4 539.2,341.4 539.1,341.3 538.8,341.2 538.1,341.2 537.8,341.4 537.6,341.8 537.2,341.9 536.7,341.6
			536.1,341.2 535.8,340.8 535.5,340.7 535.2,340.4 535.1,339.9 535,339.9 534.9,339.9 534.4,339.6 533.8,339.5 532.9,339.9
			532.7,339.8 531.7,339.8 531.3,339.5 530.9,339.5 530.6,339.3 530.3,339.4 529.7,339.3 529.4,339 529,339 529,339.3 529.1,339.4
			528.8,340 528.4,340 528.1,340.1 527.4,340.1 527,340.3 526.8,340.3 526.7,340 526.5,340 526.4,339.8 526,339.7 524.9,340.2
			524.5,340.4 524.2,340.7 523,340.8 522.7,341 522.4,340.6 521.9,340.5 521.3,340.5 520.9,341 520.5,341.5 520.5,341.8 520.8,342
			520.7,342.2 520,342.4 519.8,342.2 519.1,342.1 518.6,341.9 518.3,341.9 517.9,342 517.5,342 516.8,341.9 516.3,341.6
			515.7,341.7 515.5,341.5 514.8,340.9 514.3,340.7 513.5,340 513.2,340 512.8,339.7 512.5,339.7 512.4,339.9 512,339.9
			511.6,340.3 511.2,340.3 511,340.5 511,340.8 510.7,341.2 510.7,341.5 510.5,341.7 510.1,341.7 510.1,342 510.5,342.6
			510.3,342.8 510.2,343.2 510.2,343.8 510.4,344.4 510.4,345.5 509.9,345.8 509.8,346.3 508.6,347.8 508.8,348.8 508.7,349.4
			508.6,350 508.2,350.5 508.1,351.3 508.2,351.7 508.1,352.5 508.2,352.7 508.1,353.5 507.7,353.6 507.5,354.6 507.4,355.5
			506.6,357 506,357.1 505.5,357.5 505.2,357.4 504.5,357.8 504,358.5 504,359.1 503.1,360 502.8,360.6 503,361.4 503.1,361.6
			503,363.1 502.8,363.9 502.9,364.4 502.4,365.1 501.9,365.2 501.4,365.5 501.3,365.9 500.1,367.1 499.7,367.7 499.1,367.9
			498.4,367.6 498.2,367.1 498.1,366.9 498.4,366.3 498.5,366.1 497.6,366.4 497,366.9 496.7,366.7 496.3,366.8 496.3,367.4
			495.9,367.8 495.4,367.7 495.4,367.5 495.3,367.2 494.9,367.4 494.5,367.4 493.9,367.9 493.3,368.5 493.1,368.7 493.1,369.7
			492.8,370.1 492.3,370.1 491.8,370.5 491.9,370.8 492.7,370.8 493.1,371.1 493.1,371.1 		"/>
		<polygon fill="#E6EEF4" points="550.3,381 550.4,381.4 550.8,381.6 551.1,381.7 551.1,381.9 550.8,382.6 550.9,382.9 551.3,383.2
			551.5,383.6 551.5,384.2 551.4,384.4 551.4,384.6 550.8,385.2 550.7,385.7 550.9,386.2 550.9,386.6 551,386.9 550.8,387.3
			551,387.7 550.9,388 550.8,388.1 550.9,388.5 550.9,388.8 551.2,389 551.3,389.2 551,389.2 550.9,389.5 550.5,389.7 549.9,390.1
			549.8,390.4 549.8,390.8 549.9,391 549.8,391.3 549.8,391.7 549.3,392.2 549,392.3 549.1,392.6 549.5,393.1 549.8,393.6
			549.8,393.9 550.6,393.7 550.7,394 550.8,394.2 551.1,394.5 551.1,394.9 551.6,395.1 551.8,395 552.1,395 552.4,394.8 553,394.7
			553.7,394.9 554,395.4 554,396.1 553.9,396.8 553.3,397.4 553.2,398 552.8,398.5 552.9,399 553.1,399.6 553.2,400 553.7,400.6
			554.1,401.1 554.5,401.3 554.8,401.5 555.2,402 555,402.4 555.1,402.8 555.7,402.7 555.8,402.1 555.6,401.4 555.9,401 556,400.4
			556.2,399.7 556.8,399.5 557.2,399.2 557.4,398.8 557.4,397.8 557.1,397.4 557.2,397.2 557,397 557.1,396.8 557.4,396.7
			557.5,396.4 557.9,396.3 557.9,396 557.7,395.6 557.5,395 556.8,394.1 556.6,393.7 555.7,392.7 555.4,392.7 555.2,392.4
			554.8,392 553.9,391.5 553.5,389 553.6,388.4 553.6,383.8 553.5,382.7 552.6,381.7 552.3,381.4 552,381.2 551.8,381 551.6,381
			551.5,380.8 551.1,380.8 551,380.9 550.8,380.7 550.5,380.7 550.3,380.3 550.1,380.3 549.9,380.4 550.1,380.8 		"/>
		<polygon fill="#E6EEF4" points="538.6,378.1 537.5,380.3 537.6,380.9 537.9,381.2 538.2,381.3 538.2,381.7 538,381.8 538,382.2
			538,382.6 538,383 538,383.6 537.7,383.7 537.8,383.9 537.7,384.2 537.1,384.7 537,385.1 537.1,386.6 537.1,387.3 537.5,387.6
			538.2,388.4 538.4,388.9 538.7,389.2 539.8,389.2 539.9,389.1 539.8,388.9 539.7,388.6 540.3,388.5 540.7,388.6 540.8,391.5
			540.7,391.8 540.2,391.7 540.2,391.5 540,391.5 539.6,391.7 539.1,391.8 538.8,391.8 538.2,391.2 537.6,390.6 537.1,390.2
			536.5,389.4 535.9,389 534.9,388.6 534.2,388.3 534.1,388 533.7,387.5 533.7,386.7 533.5,386.6 533.2,386.7 532.9,386.8
			532.6,387.5 532.6,387.8 531.7,388.1 531.3,388.1 531.3,387.9 530.6,387.8 530.1,387.7 529.4,387.3 529.1,387.2 528.6,387
			528.4,387 528.4,386.8 528.4,386.4 528.2,386.1 528.2,385.6 528,385.5 527.3,385.7 527.1,385.9 526.7,385.9 526.3,386.1
			526,386.4 525.8,386.3 525.7,386.2 525.7,385.6 525.6,385.5 525.1,385.3 524.8,385.3 524.6,385.2 524.6,385.3 524.6,385.5
			524.4,385.7 524.6,386.8 524.6,387.8 524.6,388.4 524.9,389 524.9,389.4 524.7,389.6 524.5,390.4 524.7,390.7 518.7,390.7
			518.6,400 518.7,400.3 519.1,400.8 519.4,401.1 519.6,401.4 520,401.6 520.6,402.3 520.9,402.6 521.3,402.8 521.5,403.1
			521.9,403.5 522.2,403.6 522.4,404.1 525,403.5 525.3,403.5 525.9,403.4 526.1,403.4 526.2,403.4 526.4,403.6 526.7,403.6
			526.9,403.7 527,403.7 527.4,404.2 527.7,404.2 528.3,404.3 528.8,404.6 529.1,404.8 529.4,404.8 529.9,404.5 530.5,404.4
			530.8,404.5 530.9,404.5 531.1,404.6 531.1,404.6 531.6,404.9 532.1,405.1 532.8,404.8 533.7,403.6 535,402 536.6,400.9
			537.6,400.6 537.8,400.4 537.8,400.2 537.8,399.9 537.9,399.6 537.8,399.4 538.1,399 538.8,398.6 539.3,398.4 539.6,398.3
			540.2,398 541,398.1 541.1,398.2 541.4,398.2 542,398.3 542.2,398.2 542.3,398.2 542.3,397.9 542.1,397.1 542.3,396.6
			543.4,396.1 544,396.1 546.8,394.9 547.3,394.8 549,394.1 549.8,393.9 549.8,393.9 549.8,393.6 549.5,393.1 549.1,392.6
			549,392.3 549.3,392.2 549.8,391.7 549.8,391.3 549.9,391 549.8,390.8 549.8,390.4 549.9,390.1 550.5,389.7 550.9,389.5
			551,389.2 551.3,389.2 551.2,389 550.9,388.8 550.9,388.5 550.8,388.1 550.9,388 551,387.7 550.8,387.3 551,386.9 550.9,386.6
			550.9,386.2 550.7,385.7 550.8,385.2 551.4,384.6 551.4,384.4 551.5,384.2 551.5,383.6 551.3,383.2 550.9,382.9 550.8,382.6
			551.1,381.9 551.1,381.7 550.8,381.6 550.4,381.4 550.3,381 550.1,380.8 549.9,380.4 549.9,380.4 549.7,380.4 549.2,379.8
			549,379.4 548.7,379.3 548.4,379.1 548.1,379.1 546.9,378.7 546.3,378.6 546,378.3 545.9,378.1 545.5,377.8 545.3,377.8
			544.8,377.7 544.4,377.7 543.5,377.2 543.1,377 		"/>
		<polygon fill="#E6EEF4" points="490.4,403.1 490.5,403.2 490.8,403.1 490.9,402.7 491,402.6 491.7,402.7 492.1,403 492.3,402.8
			492.4,402.4 493.2,401.8 493.6,401.8 494,402 494.2,402.1 494.3,401.9 494.5,401.9 494.9,402.1 494.9,402.2 495.3,402.4
			495.2,402.6 495.4,402.7 496,403.2 496.6,403.5 497,403.2 497.2,403.3 497.5,403 497.8,403 498,403.1 508.4,403.1 508.6,403.2
			508.9,403.7 509.1,403.9 509.6,404.2 510.2,404.3 510.6,404.2 511,404.4 511,404.5 511.4,404.7 511.8,404.4 512.3,404.3
			513,404.5 513.4,404.4 513.4,404.1 513.6,404.2 513.9,404.2 514.5,404.8 515,405 515.6,405 515.8,404.9 515.8,404.7 516.1,404.6
			516.4,404.7 516.6,404.9 516.8,404.8 517,405 517.2,405 517.3,405.1 517.6,405.1 517.8,405.1 518,405.1 522.4,404.1 522.2,403.6
			521.9,403.5 521.5,403.1 521.3,402.8 520.9,402.6 520.6,402.3 520,401.6 519.6,401.4 519.4,401.1 519.1,400.8 518.7,400.3
			518.6,400 518.7,390.7 524.7,390.7 524.5,390.4 524.7,389.6 524.9,389.4 524.9,389 524.6,388.4 524.6,387.8 524.6,386.8
			524.4,385.7 524.6,385.5 524.6,385.3 524.6,385.2 524.6,385.1 524.1,385.2 523.6,385.3 523.1,385.6 522.9,385.7 522.6,385.7
			522.3,385.7 521.6,385.7 521.3,385.6 520.9,385.3 520.6,385.3 520.5,385.4 520.3,385.5 520.1,385.6 519.8,385.7 519.7,385.5
			519.7,384.9 519.9,384.8 519.9,384.6 520,384.2 519.7,383.9 519.6,383.4 519.7,383.2 519.7,382.9 519.4,382.6 519.4,382.3
			519.5,381.9 519.4,381.6 519.2,381.5 519,381.2 518.9,381.1 518.9,380.8 518.6,380.4 518.6,380.1 518.5,379.9 518.7,379.3
			518.6,378.3 518.5,378 518.5,377.8 518.7,377.6 518.7,377.2 518.4,376.8 518.5,376.3 518.7,375.8 518.7,375.4 518.8,375
			518.7,374.7 515.5,374.4 515.4,374.1 515.6,373.8 515.6,373.5 514.7,373.4 514.7,373.7 512,373.7 511.9,374.5 511.7,375
			511.5,375.1 511.6,375.7 511.6,376.4 509.5,376.6 509.1,376.8 508.2,376.7 507.9,376.6 507.3,376.7 506.6,376.7 506.3,376.6
			506.1,375.6 505.8,375.1 505.5,374.7 505.3,374.5 505.3,374.2 505.2,373.9 505,373.3 504.7,372.8 504.7,372.4 504.9,372.1
			504.8,371.8 504.6,371.5 504.5,371.2 504.6,371 504.6,370.6 501.6,370.6 499.7,370.6 498.7,370.7 497.8,370.7 497.4,370.6
			496.6,370.7 495.9,370.7 495.4,370.7 495,370.6 494.6,370.6 494.1,370.7 493.6,370.8 493.5,370.9 493.3,370.9 493.2,371.1
			493.1,371.1 493.1,371.1 492.3,371.5 492.6,371.9 492.6,372.3 494.1,374 494.1,376.2 495,377.4 494.9,378.4 494,379.6
			494.5,379.8 494.5,380.8 494.9,381.5 494.9,382.2 496,384 495.9,384.4 496.3,384.9 496.3,387.3 495.2,389.4 494.8,389.4
			493.6,390.3 493.6,391 492,392.3 492,393.2 491.7,393.5 491.7,395.7 491.1,396.6 490.9,397.6 490.1,398.5 490.1,399.6 490,400.4
			490.1,401.8 489.9,402.7 489.9,403 489.9,403 		"/>
		<polygon fill="#E6EEF4" points="542,398.3 541.4,398.2 541.1,398.2 541,398.1 540.2,398 539.6,398.3 539.3,398.4 538.8,398.6
			538.1,399 537.8,399.4 537.9,399.6 537.8,399.9 537.8,400.2 537.8,400.4 537.6,400.6 536.6,400.9 535,402 533.7,403.6
			532.8,404.8 532.1,405.1 531.6,404.9 531.1,404.6 531.1,404.6 530.9,404.5 530.8,404.5 530.5,404.4 529.9,404.5 529.4,404.8
			529.1,404.8 528.8,404.6 528.3,404.3 527.7,404.2 527.4,404.2 527.4,404.2 527.5,404.5 527.5,404.7 527.5,404.9 527.5,405.2
			527.9,405.5 528.1,405.7 528.5,406 528.7,406.3 528.8,406.6 528.9,406.7 529.2,407.1 529.3,407.6 529.6,407.9 529.7,408.3
			530,408.5 530.1,408.5 530.4,408.9 531.2,410.1 531.7,410.5 532.2,410.8 532.5,411.1 532.8,411.3 532.8,411.4 532.8,411.6
			532.9,411.9 533.4,412.1 533.8,412.4 533.7,412.8 533.8,413.4 533.9,413.9 534,414.3 534.6,414.7 534.8,415.2 535.5,415.3
			535.8,415.2 536.5,415.4 536.9,415.4 537.4,415.8 537.8,415.8 538,416 538,416.3 538.2,416.6 538.5,416.8 539.4,416.7 540,416.8
			540.2,417.2 540.7,417.2 541.3,417.4 541.4,417.6 541.8,417.5 542.6,417.4 543.5,417.5 544,417.9 547.1,414.9 547.1,413.9
			547.3,413.6 547.3,412.8 547.5,412.4 547.3,412 547.4,411.6 547.8,411.5 548,411.2 548.5,410.8 548.9,410.3 548.7,409.9
			548.4,409.6 548.4,409.1 548.7,408.9 548.6,408.4 548.1,408 548.1,407.7 548.5,407.6 548.5,407 548.5,406.5 548.9,406.2
			549.1,405.8 548.7,405.9 548.5,405.6 548.8,405.1 548.8,404.3 549,403.9 549.1,403.6 549,403.2 549.1,402.8 549,402.4 549.3,402
			549.2,401.5 548.6,401.5 548.3,401.1 547.8,400.7 546.9,400.6 546.4,400.5 545.9,399.9 545.2,399.5 544.4,399.3 544.2,399.5
			543.9,399.6 543.8,399.3 543.4,399.2 542.4,399.2 542.3,398.2 542.2,398.2 		"/>
		<polygon fill="#E6EEF4" points="538,416.3 538,416 537.8,415.8 537.4,415.8 536.9,415.4 536.5,415.4 535.8,415.2 535.5,415.3
			534.8,415.2 534.6,414.7 534,414.3 533.9,413.9 533.8,413.4 533.7,412.8 533.8,412.4 533.4,412.1 532.9,411.9 532.8,411.6
			532.8,411.4 532.8,411.3 532.5,411.1 532.2,410.8 531.7,410.5 531.2,410.1 530.4,408.9 530.1,408.5 530,408.5 529.7,408.3
			529.6,407.9 529.3,407.6 529.2,407.1 528.9,406.7 528.8,406.6 528.7,406.3 528.5,406 528.1,405.7 527.9,405.5 527.5,405.2
			527.5,404.9 527.5,404.7 527.5,404.5 527.4,404.2 527.4,404.2 527.4,404.2 526.8,404.4 525.9,404.7 525.6,404.9 525.2,404.9
			525.1,404.7 524.5,404.7 523.9,405.3 523.4,406 522.5,406.6 522.2,406.6 522.3,406.2 522.4,406 522.2,405.8 522.1,405.4
			521.9,405.3 521.8,405.4 521.4,405.4 520.6,405.6 517.9,406.3 515.8,406.2 515.3,416.2 512.9,416.2 512.4,425 512.4,425
			512.4,425.1 512.4,425 513.3,425.7 513.6,426.5 514.3,428 514.3,428.8 513.9,429.7 513.9,430.2 514.6,430.1 515.4,430.3
			515.8,430.1 516.5,430.2 516.9,429.9 517.5,429.7 518,429.3 518.2,429 519.1,428.6 519.6,428.1 520.1,427 520.8,426.3
			521.5,426.2 522.5,426.4 522.7,426.7 523.1,426.7 524.1,427.3 524.5,427.2 525,427.4 525.6,427.3 526.2,427.3 526.7,427.2
			526.9,427.5 527.2,427.6 527.9,427.2 527.7,427 527.9,426.5 527.9,426.2 528.1,425.9 528.1,425.1 528.3,424.7 528.9,424.6
			529.3,424.3 529.7,424.3 529.8,424 530,423.9 530.2,423.5 530.6,423.2 530.9,423.1 531,422.9 531.4,422.8 531.4,422.4
			531.3,422.2 531.4,421.5 532.1,420.5 532.5,420.3 532.8,420.2 533,420 533.4,419.8 533.5,419.6 533.9,419.4 534.1,419.1
			534.7,418.6 535.3,418.5 535.5,418.6 535.7,418.5 536.2,418.5 536.6,418.1 537,418.1 537.1,417.6 537.1,417.4 537.4,417.1
			537.9,417.1 538.1,416.9 538.5,416.8 538.2,416.6 		"/>
		<polygon fill="#E6EEF4" points="503.1,435.4 503.1,435 502.9,434.9 503.2,434.4 503.9,434.1 504.2,434.7 504.7,434.7 504.5,435.3
			504.9,436.1 505.8,436.3 506.4,436.7 506.9,436.5 507.2,436.7 507.7,436.7 507.9,436.5 508.3,436.5 508.5,436.9 508.9,436.9
			509.2,436.9 509.3,436.4 509.5,436.1 509.8,436 510.1,435.4 510.8,435.1 511.7,435.1 512,435.1 512.4,425.1 512.4,425 512.4,425
			512.9,416.2 515.3,416.2 515.8,406.2 517.9,406.3 520.6,405.6 521.4,405.4 521.8,405.4 521.9,405.3 522.1,405.4 522.2,405.8
			522.4,406 522.3,406.2 522.2,406.6 522.5,406.6 523.4,406 523.9,405.3 524.5,404.7 525.1,404.7 525.2,404.9 525.6,404.9
			525.9,404.7 526.8,404.4 527.4,404.2 527,403.7 526.9,403.7 526.7,403.6 526.4,403.6 526.2,403.4 526.1,403.4 525.9,403.4
			525.3,403.5 525,403.5 522.4,404.1 518,405.1 517.8,405.1 517.6,405.1 517.3,405.1 517.2,405 517,405 516.8,404.8 516.6,404.9
			516.4,404.7 516.1,404.6 515.8,404.7 515.8,404.9 515.6,405 515,405 514.5,404.8 513.9,404.2 513.6,404.2 513.4,404.1
			513.4,404.4 513,404.5 512.3,404.3 511.8,404.4 511.4,404.7 511,404.5 511,404.4 510.6,404.2 510.2,404.3 509.6,404.2
			509.1,403.9 508.9,403.7 508.6,403.2 508.4,403.1 498,403.1 497.8,403 497.5,403 497.2,403.3 497,403.2 496.6,403.5 496,403.2
			495.4,402.7 495.2,402.6 495.3,402.4 494.9,402.2 494.9,402.1 494.5,401.9 494.3,401.9 494.2,402.1 494,402 493.6,401.8
			493.2,401.8 492.4,402.4 492.3,402.8 492.1,403 491.7,402.7 491,402.6 490.9,402.7 490.8,403.1 490.5,403.2 490.4,403.1
			489.9,403 489.9,403 490.1,405.3 491.7,407 492.6,408.5 494,411.6 494.2,412.9 495.6,414.8 495.6,415.6 497.1,417.7 497.1,418.9
			496.7,419.1 497.1,420.5 497.2,422.6 498,424.8 497.9,426 498.2,426.8 497.8,427 498.1,427.5 498.3,428.9 498.7,429.1 499,429.6
			498.7,429.8 498.7,430.4 499.1,430.9 499.2,432 499.7,432.7 500.3,434 501,434.7 501.2,435 502.1,435.7 502.5,435.5 		"/>
		<polygon fill="#E6EEF4" points="920.8,417.9 920.7,417.6 920.4,417.6 920.3,418 920,418.4 920.5,418.4 		"/>
		<polygon fill="#E6EEF4" points="921.9,419.7 922.5,420 922.7,419.8 922.2,419.4 922.4,419 922.4,418.4 922.2,418.3 921.6,418.7
			921.7,418.9 921.6,419.3 		"/>
		<polygon fill="#E6EEF4" points="913.8,417.6 914.5,419.1 915.1,419.4 915.1,419.9 915.4,420.4 915.8,420.4 915.9,420.8
			916.6,421.4 916.9,422.2 917.2,422 917.5,422.1 917.7,422.8 918.4,422.9 918.5,423.5 919,423.9 919.6,423.6 920.1,424.1
			920.3,424 920.8,424.3 920.7,423.4 920.3,423.3 919.4,422.6 918.7,421.4 918.2,421 917.8,421.2 917.3,420.1 916.2,418.7
			915.9,418.6 915.6,418.1 914.9,417.6 914.8,417.2 914.5,416.8 914.3,417.2 913.5,416.2 913.4,416.7 913.7,417 		"/>
		<polygon fill="#E6EEF4" points="924.4,421.8 924.4,421.2 924,420.9 923.3,421 923.4,421.6 923.9,422.1 924.1,421.8 		"/>
		<polygon fill="#E6EEF4" points="592.9,391.8 593.1,391.6 592.9,391.4 592.9,391.6 		"/>
		<polygon fill="#E6EEF4" points="596,401.6 595.8,401.8 595.8,402.2 595.8,402.6 596,402 596.2,401.7 596.4,401.2 596.1,401.6
			"/>
		<polygon fill="#E6EEF4" points="597.1,396.3 596.9,395.8 597.1,395.6 597.1,395 596.9,394.2 597.1,393.9 597.1,392.5 596.7,391.9
			596.6,390.7 596.4,390.3 596.2,390.4 595.7,389.7 595.7,389.2 595.2,389 595.5,388.4 595.3,387.8 594.6,388.5 594.7,388.9
			594.2,389.2 593.8,388.9 593.5,388.9 593.9,389.5 593.9,389.9 594.3,390.2 594.3,390.4 593.7,390.9 593.7,391.7 593.4,392.3
			593,392.1 592.5,392.7 592.5,393.1 592.1,393.4 591.8,393.2 591.8,392.6 591.5,392.5 591.2,392.8 591.1,393.5 591.7,394
			591.8,394.3 591.6,394.5 591.3,394.4 590.7,394.5 590.8,395 591.4,395.2 591.4,395.5 591.2,395.8 590.9,395.5 590.5,395.7
			590.4,396 589.7,396.7 589.6,396 589.8,395.9 589.6,395.5 589.1,396 589.4,396.2 589.3,396.5 588.6,396.8 588.9,397.4
			589.2,397.5 589.2,397.7 588.9,397.8 588.4,398.1 588.3,397.8 588.1,397.7 588.3,397.3 588.1,397.1 587.1,398 586.9,398.8
			587.1,399.1 586.9,399.4 586.5,399.3 586.3,399.1 586.3,398.4 586.1,398.4 585.4,399 584.7,398.5 584.6,398.8 584.3,398.8
			584.4,399.6 584.2,399.5 584,399.6 584,399.2 583.7,399 583.4,399.5 583.1,399 582,400.1 581.7,400.1 581.5,399.9 580.9,399.9
			580.7,400.3 580.8,401.1 580,402.4 580,402.6 579.2,403.5 579.2,403.9 579.6,404.2 579.3,404.8 579.5,405.6 579.5,406.2
			580.3,407.7 580.2,408.1 580.7,408.7 580.7,408.9 580.3,409.3 580.5,409.7 580.2,411 579.6,411.3 579.5,412 579.2,412.1
			579,412.6 578.5,413 578.4,414 578.1,414.4 577.3,414.6 577.1,414.8 577.2,415.7 576.6,416.4 576.6,417.1 576.4,417.6
			576.6,417.9 576.6,418.8 577.3,419.7 577.2,420.3 577.3,420.7 577.7,420.9 577.9,420.8 577.7,421 577.1,421.2 577.2,421.7
			577.3,422.6 577.2,423.8 577.4,424 577.4,424.4 577.7,424.6 578.1,425.2 578.4,425.3 578.6,425.7 579,426.1 579.4,426
			579.5,426.2 580,426.3 580.4,426.9 580.8,427 580.8,427.2 580.9,427.4 581.3,427.1 581.9,427.2 582.5,426.8 583.1,426.2
			584.8,426 585.4,426.1 586.3,425.8 586.5,425.3 587,425.2 587.3,424.3 587.7,423.6 587.7,423.1 588.3,422.8 588.2,422
			588.1,421.8 588.5,421.6 588.7,420.6 588.6,420.5 588.8,420.5 589.4,419.7 589.8,417.8 590.1,416.8 590.5,416.3 590.7,415.2
			591.5,413.9 592.2,411.6 592.7,410.9 592.7,409.8 593.3,408.8 593.4,408.4 594,407.4 594.3,405.9 594.6,404.7 594.8,404.4
			595,403.6 594.7,403.2 594.9,402.5 595.5,401.7 595.4,401.3 595.8,400.9 595.7,400.2 595.5,400 595.7,399.5 595.7,398.8
			595.5,398.7 595.4,398 595.8,397.8 596.1,398 596.2,398.6 596.7,399.2 597,399.3 597.2,399 597.2,398.5 597.4,398.3 597.5,397.8
			597.7,397.6 597.6,397.1 		"/>
		<polygon fill="#E6EEF4" points="593.4,390.2 593.4,390 592.9,390.5 593.1,390.7 		"/>
		<polygon fill="#E6EEF4" points="570.7,384 570.2,383.8 569.8,384.3 569.4,384.6 568.8,384.7 568.5,385.1 567.8,385.2 567.6,385.4
			567.2,385.6 566.8,385.4 565.7,385.7 565.5,386 565,386 564.6,385.7 564.2,385.8 563.7,385.7 563.5,385.8 563.6,386.2
			563.4,386.6 562.7,386.6 562.1,386.9 561.7,386.6 561.4,386.6 561.3,386.4 561,386.3 560.8,386.5 560.5,386.6 559.9,387
			559.1,387.2 559.2,387 558.9,386.7 558.5,386.6 558.2,386.4 557.8,386.3 557.8,386.1 557.4,386.1 557.3,386.3 556.8,386.4
			554.1,386.5 553.5,389 553.9,391.5 554.8,392 555.2,392.4 555.4,392.7 555.7,392.7 556.6,393.7 556.8,394.1 557.5,395
			557.7,395.6 557.9,396 557.9,396.3 557.5,396.4 557.4,396.7 557.1,396.8 557,397 557.2,397.2 557.1,397.4 557.4,397.8
			557.4,398.8 557.2,399.2 556.8,399.5 556.2,399.7 556,400.4 555.9,401 555.6,401.4 555.8,402.1 555.7,402.7 555.1,402.8
			555,402.4 555.2,402 554.8,401.5 554.5,401.3 554.1,401.1 553.7,400.6 553.2,400 553.1,399.6 552.9,399 552.8,398.5 553.2,398
			553.3,397.4 553.9,396.8 554,396.1 554,395.4 553.7,394.9 553,394.7 552.4,394.8 552.1,395 551.8,395 551.6,395.1 551.1,394.9
			551.1,394.5 550.8,394.2 550.7,394 550.6,393.7 549.8,393.9 549.8,393.9 549,394.1 547.3,394.8 546.8,394.9 544,396.1
			543.4,396.1 542.3,396.6 542.1,397.1 542.3,397.9 542.3,398.2 542.4,399.2 543.4,399.2 543.8,399.3 543.9,399.6 544.2,399.5
			544.4,399.3 545.2,399.5 545.9,399.9 546.4,400.5 546.9,400.6 547.8,400.7 548.3,401.1 548.6,401.5 549.2,401.5 549.3,402
			549,402.4 549.1,402.8 549,403.2 549.1,403.6 549,403.9 548.8,404.3 548.8,405.1 548.5,405.6 548.7,405.9 549.1,405.8
			548.9,406.2 548.5,406.5 548.5,407 548.5,407.6 548.1,407.7 548.1,408 548.6,408.4 548.7,408.9 548.4,409.1 548.4,409.6
			548.7,409.9 548.9,410.3 548.5,410.8 548,411.2 547.8,411.5 547.4,411.6 547.3,412 547.5,412.4 547.3,412.8 547.3,413.6
			547.1,413.9 547.1,414.9 544,417.9 544.1,418 544.2,418.8 544.4,419.5 544.7,420.2 544.8,421.5 544.7,421.6 544.7,422.2
			544.9,422.7 545.1,423.3 545,425.5 544.8,426.3 544.8,427.1 544.8,428.1 544.8,428.2 545.1,428.3 545.4,428.6 545.7,429
			545.6,429.2 545.5,429.6 545.4,430 545.5,430.2 545.7,430.2 546.7,430.4 547.2,430.4 547.3,430 547.5,429.5 547.6,428.7
			547.6,428.5 547.4,428.5 547.3,429 546.9,428.8 546.7,429.2 546.7,428.7 546.4,428.2 546.3,428 546.6,427.8 546.9,427.8
			547.1,427.2 547.4,426.9 547.6,426.5 548.3,426.4 549.3,425.5 551.7,425 553.5,424.2 554.5,423.1 554.7,422.4 555.1,421.9
			555,421.5 554.5,421.8 554.4,421.3 554.6,421.3 554.6,420.7 554.9,420.4 554.9,420 555.2,419.1 555.1,419 555.1,418.2
			555.4,417.9 555.4,417.2 555.3,417.2 555.2,416.6 554.9,417.3 554.9,417.8 554.7,417.8 554.5,417.2 554.7,415.4 554.3,414.8
			554.3,414.2 554,413.7 553.8,413.6 554.1,413.3 554.1,412.9 553.3,411.8 553.6,411.4 553.5,411 553.7,410.7 553.7,410.2
			553.5,409.9 553.5,409.7 553.8,409.6 554.3,410 554.6,409.6 555.2,409.6 555.7,409.3 555.6,408.6 557.1,407.6 557.8,407.6
			557.7,407.2 558,407.1 558.3,406.9 558.3,406.6 559.4,406 559.5,405.5 559.9,405.4 560,404.7 560.2,405.2 560.5,405 561.2,404.2
			561.2,403.8 561.5,404 562.6,403.3 563.4,402.9 563.4,402.8 564.1,402.8 565.9,401.9 566,401.5 566.3,401.5 568.2,400.5
			568.1,399.9 568.6,399.9 569.1,399.1 569.1,398.8 569.7,398 570.1,397.9 570.2,397.4 570.4,397 570.1,397 569.9,397.1
			569.8,396.9 570.2,396.5 570.6,396.5 570.7,396.3 570.5,396 570.8,395.9 571.1,395.5 570.9,394.4 570.8,394.3 570.2,394.2
			570.1,394 570.1,393.9 570.5,393.8 570.5,392.6 570.4,392.3 570.5,392.3 570.7,391 570.6,390.2 570.9,389.9 570.9,389.2
			570.7,389.1 570.7,388.4 570.9,388.2 570.6,387.6 570.4,386.6 570.6,386.4 570.6,386.2 570.5,386 570.6,385.7 571.1,384.9
			571,384.8 571.1,384.4 571.2,383.8 571,383.7 570.9,383.7 		"/>
		<polygon fill="#E6EEF4" points="544.3,427.9 543.9,427.5 543.2,427.1 542.7,427.3 542.6,427.9 541.9,429.2 541.7,429.8
			541.8,430.2 542.1,430.4 542.4,431 543.3,431.5 544.4,431.6 544.9,431.4 545,430.9 544.9,430.5 545.3,430.3 545.5,430.2
			545.4,430 545.5,429.6 545.6,429.2 545.7,429 545.4,428.6 545.1,428.3 544.8,428.2 544.8,428.1 544.8,428.1 		"/>
		<path fill="#E6EEF4" d="M545.7,430.2l-0.3,0.1l-0.2,0l-0.3,0.2l0,0.4l-0.1,0.5l-0.4,0.2l-1.1-0.1l-0.9-0.5l-0.3-0.6l-0.3-0.3
			l-0.2-0.3l0.2-0.7l0.7-1.3l0.1-0.5l0.5-0.2l0.7,0.4l0.4,0.4l0.5,0.2l0-0.9l0-0.8l0.2-0.9l0-2.2l-0.2-0.6l-0.2-0.5l0-0.5l0.1-0.2
			l0-1.3l-0.3-0.7l-0.2-0.7l-0.2-0.8l-0.5-0.4l-0.9-0.2l-0.8,0.1l-0.4,0.2l-0.2-0.2l-0.6-0.3l-0.4,0l-0.2-0.4l-0.6-0.1l-0.9,0.1
			l-0.3,0l-0.3,0.2l-0.5,0l-0.3,0.3l0.1,0.3l-0.2,0.4l-0.4,0.1l-0.4,0.4l-0.5,0l-0.3,0.1l-0.2-0.1l-0.6,0.1l-0.6,0.5l-0.3,0.3
			l-0.3,0.2l-0.1,0.3L533,420l-0.2,0.3l-0.3,0.1l-0.4,0.2l-0.7,1l-0.1,0.7l0.1,0.2l0,0.4l-0.4,0.1l-0.2,0.2l-0.3,0.1l-0.4,0.3
			l-0.1,0.4l-0.2,0.1l-0.2,0.2l-0.4,0.1l-0.4,0.3l-0.6,0.1l-0.2,0.5l0,0.7l-0.3,0.3v0.3l-0.2,0.5l0.2,0.2l-0.6,0.4l-0.3-0.1
			l-0.2-0.3l-0.4,0.1h-0.7l-0.6,0.1l-0.5-0.2l-0.4,0.1l-1-0.6l-0.3,0l-0.3-0.4l-0.9-0.1l-0.7,0.1l-0.7,0.7l-0.4,1.1l-0.5,0.5
			l-0.9,0.4l-0.2,0.3l-0.5,0.4l-0.6,0.1l-0.4,0.3l-0.7-0.1l-0.4,0.2l-0.7-0.1l-0.7,0.1l0-0.5l0.4-0.9l0-0.8l-0.7-1.6l-0.3-0.8
			l-0.9-0.7l0,0l-0.4,10.1h-0.3l-0.9-0.1l-0.7,0.4l-0.3,0.5l-0.3,0.1l-0.2,0.2l0,0.6l-0.3-0.1l-0.4,0.1l-0.2-0.4h-0.4l-0.2,0.2
			l-0.5-0.1l-0.3-0.1l-0.4,0.1l-0.6-0.3l-0.9-0.2l-0.4-0.8l0.2-0.6l-0.5,0l-0.3-0.6l-0.7,0.3l-0.3,0.5l0.2,0.2v0.3l-0.6,0.1
			l-0.4,0.2l0,0l0.1,0.9l0.9,0.7l0.6,1.7l0,0.8l0.6,1.5l0.4,1.6l0.8,1l0,0.6l0.8,1.3l-0.1,0.4l0.3,0.9l-0.2,0.9l-0.3,0.4h-0.3
			l-0.3-0.3l-0.3,0.3v0.7l0.4,0.7l0.5,0.4l0.5,0.9l-0.4,0.6l0.1,0.7l-0.2,0.5l0,0.6l0.4,0.3l0-0.5l0.5-0.4l0.6,0.1l0.1,0.6l-0.2,0.2
			l0.3,0.1l0.4-0.2l0.5,0.3l0,0.7l0.3-0.2l1.4,0.7l0.3-0.1l0.3,0.1l0.2-0.4l0.5-0.1l0.6-0.7l0.7,0.1l0.1-0.2l0.7,0l0.8,0.3l0.4-0.2
			l0.7,0l0.2-0.2l0.3-0.2l0.3-0.1l0.3,0.1l0.1-0.5l0.4-0.2l1.5,0l0.7,0.3l0.4-0.2l0-0.2l0.8-0.2l1.3,0.3l0.4,0.3l1.3,0.3l0.2-0.2
			l-0.2-0.4l0.4-0.4l0.5,0l0.6,0.3l1,0l0-0.1l-0.4-0.4l0.3-0.5l0.7-0.2l0.9,0l0.3,0.2l0.6-0.1l0.6-0.4l1.1-0.3V451l0.7-0.2l0.4-0.4
			l1.9-1.2l0.5-0.5l0-0.1l0.4-0.1l2.9-2.9l0.1-0.2l0.3,0l0.5-0.6l0.5-0.2l0.1-0.8l0.9-0.8l1.2-1.9l0.4-0.8l0.5,0l0.3-0.6v-0.3
			l0.5-0.6l0.3-0.7l0.7-0.4l0.3-0.3l0.6-0.3l0.2-0.2h0.2l0.8-0.9l0.1-0.5l0.4-0.5l0.3-1.1l0.4-0.8l0.1-0.9l0.3-1l-0.2-0.1l0.3-0.4
			l0-0.1l-0.6,0L545.7,430.2z M536.8,439l-0.5,0.3l0,0.3l0.2,0.2l-0.1,0.4l-0.5,0.3l-0.3-0.1l-0.5,0.1l-0.4,0.2l-0.5,0.1l-0.2,0.7
			l-0.2,0.2l-0.2,0.3l-0.5,0l-0.6-0.3l-0.3-0.4l-0.4-0.3l-0.1-0.6l-0.3-0.4l-0.1-0.3l-0.3-0.3l-0.2-0.5l0.4-0.3l0.7-0.6l0.3-0.7
			l0.6-0.5l1-0.2l0.2-0.3l0.4-0.2l0.1-0.2l0.4,0l0.3,0.2l0.2-0.1l0.4,0.3l0.4-0.1l0.6,0.5l0.4,1.1l0,0.7L536.8,439z"/>
		<polygon fill="#E6EEF4" points="536.8,436.8 536.2,436.3 535.8,436.5 535.4,436.2 535.2,436.3 534.9,436.1 534.5,436.1
			534.4,436.3 534.1,436.5 533.8,436.8 532.8,436.9 532.2,437.5 531.9,438.2 531.2,438.8 530.8,439 531.1,439.6 531.4,439.9
			531.4,440.2 531.8,440.6 531.8,441.1 532.2,441.5 532.5,441.9 533.2,442.1 533.7,442.1 533.8,441.8 534,441.6 534.2,440.9
			534.7,440.8 535.1,440.5 535.6,440.4 535.9,440.5 536.4,440.2 536.5,439.8 536.3,439.6 536.3,439.2 536.8,439 537.3,438.5
			537.2,437.9 		"/>
		<line fill="#E6EEF4" x1="844.1" y1="504.6" x2="844.1" y2="504.6"/>
		<polygon fill="#E6EEF4" points="838.6,396.6 839,396.5 839.7,396.6 839.9,396.2 839.7,396.1 839.5,396.1 839.3,396 839.8,395.5
			839.7,395.4 839.3,395.5 839.3,395.1 839,395.3 838.9,395.5 838.4,395.5 838.6,395.6 838.5,395.7 838.7,396.4 838.4,396.6 		"/>
		<polygon fill="#E6EEF4" points="880.1,442.8 880.1,442.1 879.7,441 879.6,440.7 879.5,440.1 879.7,439.9 879.7,439.2 880.2,438.4
			880.2,438.1 880.1,436.5 880.5,436 880.2,435.6 880.1,435.1 880.1,434 879.9,433.9 880.2,433.3 879.6,433.1 879.3,432.5
			879.4,431.9 878.7,431.3 878.3,430.5 878.2,429.7 877.8,429.1 877.4,429.1 877,429.2 876.6,428.9 876.6,428.2 876.3,428
			876.2,427.6 875.6,427.1 875.2,426.8 875.4,426.3 875,425.7 875.5,425 875.7,424.2 875.5,423.8 875.6,423.2 875.2,423
			875.1,423.3 875.3,423.5 875,423.8 873.8,422.7 873.5,422 873.3,422.2 873.3,422.6 873.2,423 873.4,423.8 872.8,423.1
			872.5,423.4 872.5,422.9 872.3,422.5 872.2,420.9 872.4,420.7 872.4,420.4 871.9,420 872.1,419.6 871.7,419.2 871.8,418.8
			870.9,418 870.6,417.4 870.6,416.8 871.1,416.9 871.1,416.4 870.7,415.6 870.4,415.7 869.9,415.6 869.4,414.9 869,414.8
			868.5,414.4 868.2,414.7 867.9,414.4 867.3,414.2 866.9,414.5 867.3,414 867.8,413.9 867.9,413.5 867.7,413.2 867.1,413.2
			866.6,413.2 866.4,412.9 866.1,412.9 865,412.2 864.5,411.2 864.4,410.2 864,409.5 864.1,409 864.3,408.9 864.6,407.8
			864.3,406.3 863.9,405.6 864.2,405.5 863.9,405.2 863.4,405.2 862.9,404.1 862.9,402.7 863.1,402.5 863.1,402.2 862.9,401.9
			862.7,400.2 862.9,399.7 862.7,399.2 862.9,399 863,398.6 862,397.7 861.4,397.3 861.6,397.1 861,396.4 860.4,396.8 860.1,396.6
			859.8,397.2 859.4,397.3 858.8,396.4 858.8,395.9 858.5,395.2 858.7,394.1 858.6,392.9 858.3,393 858.1,392.5 858.4,392
			858,391.4 857.9,391 857.6,390.8 857.7,390.1 858,389.7 857.6,389.5 857.2,389.6 856.8,389.3 857,388 856.8,387.7 856.7,386.9
			856.1,386.8 856.1,386.4 855.5,386.7 855.1,387.1 855.1,388.1 854.9,388.9 854.9,389.2 854.7,389.7 854.4,389.7 854,390.6
			853.6,391.3 854,391.7 854.5,392.1 854.2,392.3 853.8,392.3 853.6,392.8 853.3,393.3 853.7,394 853.8,394.5 853.3,394.3
			853,394.5 852.8,395.9 853,396.8 852.8,397.8 853.1,398.5 853,399.4 852.5,399.9 852.5,400.3 851.9,401.4 851.8,403 851.4,403.5
			851.5,404.1 851.2,404.9 850.7,405.4 850.6,406.5 849.8,407.2 848,407.8 847.3,407.3 846.6,407.3 846.2,406.8 845.5,406.2
			845.5,405.9 845.3,405.7 845.1,405 844.5,404.9 843.9,404.7 843.1,404.6 842.3,404.1 842.1,403.7 841.5,402.9 840.8,402.8
			840.1,402.4 840.1,402.1 839.7,402 839.4,401.8 838.8,401.8 838.3,401.7 838.4,401.4 837.7,400.9 837.6,400.3 836.9,399.6
			836.4,399.5 835.8,398.8 835.8,398.1 836.3,397.3 836.5,396.6 837,396.2 837.2,395.4 837.4,394.9 836.9,395.3 836.5,394.5
			837.1,394.1 837,393.6 837.3,393.6 837.6,393.4 837.8,393.6 838.3,393.7 839,393.4 839.2,392.8 838.7,392.4 839.1,392.1
			839.5,392.2 839.8,391.3 840.1,391.1 840.5,390.6 840.5,390.3 840,390 839.6,390.4 839.2,390.3 839.2,389.3 838.7,389.6
			838,390.3 838.4,390.5 838.4,390.9 837.9,391.1 837.5,390.8 837.4,390.5 837.1,390.2 836.9,390.5 836.6,390.6 836.6,390.3
			836.9,389.9 837,389.7 836.6,389.8 836.3,390.2 835.7,390.4 835.6,390.6 835.3,390.7 835.1,390.4 834.6,390.4 834.6,390.1
			834.1,389.6 833.9,389.5 833.3,389.9 832.8,389.7 832.5,389.8 832.3,389.4 832.1,389.4 831.7,388.8 831.1,389.1 830.4,389
			829.8,388.7 829.9,388.3 829.5,387.8 829.2,387.8 829.3,388.1 828.4,388.3 828.2,387.8 827.8,387.6 827,387.2 826.9,387.4
			826.5,387.2 826.1,387.5 826.6,387.9 826.4,388.1 827,388.2 827.4,388 828.2,388.7 828.2,389.1 828.3,389.9 827.8,390
			827.6,390.6 827.4,390.2 827,390.1 826.5,390.4 824.9,390.5 824.3,390 824.2,390.2 823.6,390.4 823.6,391 823.1,390.8
			823.3,391.6 823.1,391.3 822.4,391.1 822.2,391.5 822.4,391.8 822.4,392.1 821.7,391.9 821.4,392.2 821.6,392.5 821.3,392.7
			820.9,392.9 820.9,393.3 821.3,393.7 821.4,394 821,393.7 820.6,394.1 820.1,394.1 819.6,394.8 819.1,395.7 818.8,395.8
			818.6,396.6 818.2,396.8 818.6,397.2 819.5,397.4 819.1,397.5 818.9,397.9 820.1,398.3 819.6,398.5 818.9,398.4 818.7,398.1
			818.7,398.4 819.2,398.8 819.1,399.4 819.6,400 818.9,399.4 818.5,398.6 817.9,398.6 817.9,398.9 817.7,399.3 817.7,398.8
			816.5,398.1 815.6,398.2 815.9,398.6 815.6,398.9 815.3,398.6 815.1,398.6 814.8,398.9 815.2,399.5 815.1,399.8 815,399.6
			814.7,399.6 814.7,399.9 814.2,400.2 813.4,400.4 814,400.1 814.5,399.5 814.4,398.6 814.9,398.1 814.6,397.7 814.1,397.7
			813.3,396.2 812.9,395.6 812.1,395.4 811.6,395.1 811.3,395.3 811.5,395.5 811.2,395.6 810.8,396.2 810.5,396.1 810.6,395.8
			810.1,396 809.9,396.3 809.6,395.5 809.3,395.4 809.2,395.9 809.6,396.1 809,396.5 808.8,397.1 809,397.4 808.5,397.8
			808.2,397.4 807.9,397.3 807.8,397.1 808.2,396.6 807.8,396.6 807.5,397.2 807,397.3 806.7,397.7 806.6,398.3 807.5,398.5
			806.8,399.1 806.2,398.8 805.6,399.3 805.7,399.7 806.5,399.8 806.2,400.2 805.8,400.3 805.3,399.7 804.8,400.2 804.2,400.3
			804.4,400.7 804.5,401.1 804.5,401.4 804.8,401.3 804.4,401.8 804.7,402.2 804.2,402.5 804,402.9 804.9,403 804.3,403.3
			804.2,403.6 803.7,403.5 803.4,403.1 802.9,402.8 802.5,403.1 802.3,402.7 801.8,402.4 801.4,402.7 802.1,403.2 801.8,403.3
			801.6,403.9 802.1,404.4 802.7,404.4 802.4,404.8 802.4,405.3 802.2,405.1 801.9,405.1 802,405.7 801.8,406.3 801.7,407
			800.8,405.1 800.2,404 799.9,403.5 800,402.9 799.8,403.2 799.2,403.6 799.1,404.4 798.7,404.5 798.6,404.8 798,404.7
			797.7,405.2 797.3,405.6 797.4,406.3 797.4,407.7 797.6,407.9 797.6,408.4 797.1,408.6 796.8,409.2 796.1,409.4 796.1,409.7
			795.5,410.1 795.5,410.9 795.2,411.2 794.3,412.4 792.6,413.4 791.2,413.5 790.6,413.7 789.8,413.8 789.1,413.9 788.4,413.8
			787.6,414.1 787.5,414.6 786.9,414.9 785.1,414.8 784.6,415.1 784.5,415.6 783.3,416.1 782.5,416.1 782,415.9 781.6,415.9
			781.4,415.6 780.9,415.8 780.5,416.5 779.3,416.7 779.2,417 778.9,417 778,417.8 776.8,418.3 775.2,418.8 774.5,419.8
			774.5,420.7 773.8,421.2 773.4,420.9 773.6,420.6 773.5,420.2 773.8,419.5 773.8,419 772.9,419.6 772.7,420.5 772.1,421.7
			772.5,422.5 772.2,423.2 772.2,424.5 771.2,425.8 770.8,427.7 771,428.6 770.9,429.9 771.9,431.6 771.9,432.2 772.3,432.7
			772,433.5 772.2,434.2 771.6,434.5 771.3,434 771.3,433.1 770.9,433.6 770.8,433.4 770.8,432.5 770.2,431.3 769.9,431.9
			770,433.1 770.8,433.9 771.3,434.9 770.5,435.1 769.9,434.2 769.7,433.2 769.5,433.6 769.2,433.8 769.6,434.7 770.6,435.9
			771.2,437.5 771.1,440.3 771.5,440.9 771.8,442.4 772.6,444.5 772.3,445.3 772.4,448.4 772.3,448.8 772.6,449.7 772.5,450.6
			773.1,452 773.2,452.7 772.6,453 772.9,453.3 772.7,454.1 772.6,455.3 772.1,455.7 772.3,456.1 772.1,456.8 771.6,457.2
			771.7,457.9 770.8,458.6 770.4,458.2 769.7,459.3 769.8,461 770.2,461.3 770.6,461.4 771.8,462.6 771.7,463 772,463.3
			772.6,463.4 772.8,463.7 773.6,463.8 773.9,463.8 774.1,464 774.7,464.1 775.4,463.9 775.6,464.3 775.9,464.1 776.1,464.2
			776.9,464.1 777.6,464 777.7,463.7 778.1,463.6 778.6,462.9 779.4,463 779.4,462.5 779.9,462.2 780.3,462.2 780.8,462.7
			781.2,462 781.4,462.1 781.7,462 781.9,461.3 783.4,460.4 784,460.5 784.4,460.7 784.9,460.4 786.3,460 786.5,460.3 787.5,460.1
			787.8,460.3 788.2,460.4 788.8,460.2 789,460.7 789.3,460.7 789.8,460.5 790,460.8 790.4,460.5 791.5,460.5 791.5,461
			791.7,461.1 792.3,460.5 792.9,460.6 793.6,460.1 793.9,459.5 794.2,459.4 794.8,458.8 795.1,457.8 795.8,457.3 796.6,457
			796.9,457.2 798,456.8 799.5,455.9 800.4,455.1 800.8,454.9 801.2,454.9 801.7,454.9 802.5,455.3 803.3,455.3 803.8,455.1
			804.9,455.2 806.5,454.6 807.4,454.4 808,453.9 808.5,453.9 809.2,453.4 810.4,453.3 813.4,453.1 814.4,453.3 815.1,453.4
			815.9,453.1 816.6,453.1 817.5,453.9 818.1,455.1 818.6,455.2 819,454.9 819.3,454.8 819.6,455.1 819.9,454.9 820.5,455.1
			821,455.8 821.7,455.9 822,455.7 823.2,456.6 823.1,457.1 823.5,457.1 823.9,457.6 823.8,458 823.3,458 823.2,458.3 823.7,459.4
			824.2,459.5 824.7,460.1 824.9,460.8 824.8,461.4 825.4,462.8 825.2,463.4 825.5,463.7 825.4,464.4 825.1,464.9 824.8,464.7
			824.6,464.8 825.1,465.4 825.5,465.6 825.7,466.2 826.2,466 826.7,466.4 826.7,465.9 826.4,465.5 826.7,465.1 827,464.6
			827.4,464.5 827.7,464 828.2,463.8 828.3,463.3 828.8,462.7 830,462.1 830.1,461.8 830.4,461.8 831.3,461.3 831.5,460.5
			832.3,459.4 833.1,459.2 833.4,458.8 833.2,458.2 833.3,457.5 833.6,458.3 833.6,459 833.6,459.7 833.3,460.1 833.1,461.5
			832,462.3 831.8,462.9 831.5,463.3 831.5,464 830.8,464.9 831.1,465.2 830.6,466.5 829.2,466.4 829,467.1 828.6,467.7
			828.6,467.9 829.5,467.7 830.3,467.4 831.2,467.7 832.1,466.1 832.4,464.7 833.2,463.9 833.4,464.2 833.4,465.5 833.7,466.3
			833.4,466.4 833.5,467.7 832.9,468.8 831.9,469.2 832,469.6 832.7,469.5 833.4,469.6 833.7,469.2 834.2,469.1 834.8,468.6
			835.3,468.8 835.6,468.7 835.3,469.2 835.1,469.6 834.6,469.6 834.4,469.9 834.9,470.6 835.1,471.2 835.5,472.1 835.5,473.2
			835.4,474.4 834.7,475.2 834.9,475.5 834.8,476.5 835.2,476.9 835.7,477.7 835.8,478.6 836.8,479.9 837.5,480.1 838.1,480.5
			838.3,481.1 838.9,481.2 839,480.9 839.4,480.8 840.1,481 840.7,481.7 841.3,481.8 842,482.5 842.1,483 842.6,483.2 843.2,483.9
			843.6,483.9 843.8,483.5 844.9,483 845.2,482.5 845.9,482.5 846.6,481.8 847.1,481.9 847.3,481.6 847.2,481.3 846.6,481.2
			846.8,480.8 847.9,480.1 848.8,480.7 848.8,481.3 847.7,481.9 847.9,482.5 848.3,482.5 848.7,482.1 849.1,481.8 849.7,482.1
			849.6,482.6 849.3,482.6 848.9,483 849.6,483.9 849.7,484.9 850,484.7 850.4,484.7 850.4,485.3 850.8,485.9 851.2,485.2
			851.2,484.4 850.7,484.8 850.6,484.5 851,484.1 852.3,484.1 852.5,484.4 852.7,484.1 853.4,483.1 854.8,482.3 855.6,481.5
			855.2,481.5 854.9,481.7 855,481.6 854.5,481.4 855.1,481.4 855.8,481.4 856.8,481 859,480.6 860.7,481 861.4,480.5 861.4,480.1
			861.9,480.1 862.4,479.7 862.9,478.7 862.7,477.6 862.7,477 863.6,476.1 863.6,474.5 864.1,473.8 864.3,472.7 864.8,472.5
			864.8,471.9 866.5,469.8 866.9,469.7 867.2,468.6 867.9,467.7 868.3,466.5 869,465.8 868.9,465.2 869.4,465 869.9,463.9
			869.5,463.6 870.4,463.2 870.9,462.3 871.3,461.9 871.7,461 872.5,460.8 873,460.5 872.2,460.5 872.4,460.3 873.4,460.2
			874.3,459.6 874.5,458.9 874.4,458.6 874.5,458 875.4,457.3 875.4,456.7 876,456.5 876.6,455.4 876.6,454.9 876.9,454.1
			876.6,453.8 876.7,453.4 877.5,451.5 877.7,450.6 878.7,448.8 878.7,448.1 879.2,446.8 880,446.2 880.2,445.4 880,444.6
			880.5,444 		"/>
		<polygon fill="#E6EEF4" points="849.1,482.6 848.9,482.3 848.6,482.4 849,482.7 		"/>
		<polygon fill="#E6EEF4" points="853.7,491.1 853.4,491.3 853.5,491.7 854.4,491.7 854.8,491.9 854.9,491.6 854.3,491.1 		"/>
		<polygon fill="#E6EEF4" points="839,387.8 839.4,388 839.5,387.6 840,387.1 839.8,386.9 839.2,387.5 		"/>
		<polygon fill="#E6EEF4" points="846.2,405.8 846.5,405.7 846.5,405.4 846.1,405.6 		"/>
		<polygon fill="#E6EEF4" points="838.8,388.5 838.7,388.2 838.4,388.3 		"/>
		<polygon fill="#E6EEF4" points="840,401.3 839.7,400.9 839.5,401.3 839.7,401.7 		"/>
		<path fill="#E6EEF4" d="M846.9,403.8l-0.7-0.2l-0.7,0.4c0,0-0.2,0.4-0.1,0.4l0.2,0.2l0.3-0.1l0.3-0.4l0.6-0.1L846.9,403.8z"/>
		<polygon fill="#E6EEF4" points="844.4,490.7 844.3,491.1 844.7,491.4 844.8,491 844.8,490.5 		"/>
		<polygon fill="#E6EEF4" points="838.3,388.5 838,388.5 838.2,388.7 		"/>
		<polygon fill="#E6EEF4" points="844.9,492.1 845.3,492.2 845.5,492 845.2,491.6 844.8,491.7 		"/>
		<polygon fill="#E6EEF4" points="855,385.5 855,386.2 855.3,386.1 855.6,386 855.4,385.6 		"/>
		<polygon fill="#E6EEF4" points="851.9,484.3 851.5,484.3 851.8,484.5 		"/>
		<polygon fill="#E6EEF4" points="845.3,490.6 845.1,490.7 845.1,491.1 845.4,491.1 		"/>
		<path fill="#E6EEF4" d="M852.9,493.2l-0.3,0.5l-0.1-0.1l-0.3,0l-0.4,0.3l-0.3,0.2l-1.7-0.1l-0.4,0.2l0,0.5l-0.4-0.4l-0.5,0
			l-0.4,0.3l-0.5-0.4l-0.8-0.7l-1-0.5l0-0.8l-0.2,0.3l-0.1,0.3l-0.4-0.3l-0.5-0.3l-0.5-0.4l-0.2,0.3l0,0.6l-0.2,0.1v0.6l0.1,1.1
			l-0.1,0.7l0.1,1.2l0.1,1l-0.1,0.8l0.3,0.2l0,0.4l0.5,0.5l-0.6,0l-0.5-0.5l-0.2,0.5l0,1l0.4,0.3l-0.1,0.3l0,1.6l0.3,0.2l-0.1,0.2
			l0.1,0.7l0.5,0.2l-0.3,0.4v0.6c0,0,0.2,0.1,0.2,0.1l0.5-0.1l0.4,0.4l0.4-0.6v0.5l0.3,0.5h0.4l0.5-0.8l0.1-0.5l0.3-0.9l0.4,0.4
			l0.2-0.3l0.5-0.4l0.2-0.6v0.6l0.4,0.1l0.3-0.5l0.5-0.1l0.3,0.3l-0.1,0.5l-0.6-0.2l0,0.8l0.5-0.2l0.2,0.1l0.6-0.9v-0.3l-0.4-0.3
			l0.4-0.5l0-0.6h0.4l0.2-0.2l0.1-1.2l0.4-0.3l0.3-0.5l0.2,0.8l0.1,0.4l0.3-0.6l0-0.5l0.1-0.3l-0.1-0.7l0.4-0.6l0-1l0.5-0.6l0.3-1.4
			l0.2-0.5l-0.7-0.5H852.9z"/>
		<polygon fill="#E6EEF4" points="847.7,503.6 847.7,504.1 847.3,504.7 847.7,504.9 847.9,504.1 848.1,503.8 848,503.5 		"/>
		<polygon fill="#E6EEF4" points="843.8,488.9 844.1,488.3 844,487.9 844.1,487.1 843.8,486.8 843.4,487.1 843.1,487.5 843.1,488
			842.8,488.5 842.9,488.9 842.8,489.3 843.2,489.5 843.7,489.2 		"/>
		<polygon fill="#E6EEF4" points="850.9,501.6 851.2,501.5 850.9,501.2 		"/>
		<polygon fill="#E6EEF4" points="875.1,422.8 875.1,422.5 874.8,422.7 		"/>
		<polygon fill="#E6EEF4" points="837.3,388.8 837,389 837.3,389.1 		"/>
		<polygon fill="#E6EEF4" points="881.2,431.1 881,431.6 881.2,431.9 880.9,432.5 880.4,433.1 880.4,433.6 880.2,434.2 880.5,435
			880.8,435.1 880.7,434.6 880.8,433.4 881.4,432.6 881.6,431.8 881.5,431.2 		"/>
		<polygon fill="#E6EEF4" points="853.6,489 853.8,489.5 853.5,490 853.7,490.3 853.9,490.7 854.9,490.3 854.9,489.8 854,488.9
			"/>
		<polygon fill="#E6EEF4" points="836.2,389.5 836.3,389.8 836.6,389.5 837.1,389.5 837.2,389.2 836.8,389.2 		"/>
		<polygon fill="#E6EEF4" points="835.6,390.2 836.1,390 836.1,389.8 835.4,390 		"/>
		<polygon fill="#E6EEF4" points="828,387.2 828.3,387.8 828.4,387.3 828.5,386.8 828.1,386.8 		"/>
		<polygon fill="#E6EEF4" points="880.3,442 880.6,441.6 880.4,440.9 		"/>
		<polygon fill="#E6EEF4" points="876.2,426.8 876,426.6 875.9,426.7 876.4,427.4 876.6,427.9 876.7,427.4 876.5,427.2 876.6,426.8
					"/>
		<polygon fill="#E6EEF4" points="806.7,397.5 806.7,397.2 806.5,397.1 806.3,397.4 		"/>
		<polygon fill="#E6EEF4" points="853.9,492.7 854,492.2 853.6,492.3 		"/>
		<polygon fill="#E6EEF4" points="855.4,384.1 855.6,384.4 855.8,384.1 		"/>
		<polygon fill="#E6EEF4" points="864.8,410.8 865,410.3 865,409.4 864.8,409.5 864.3,409.6 864.7,410 864.5,410.5 		"/>
		<polygon fill="#E6EEF4" points="837.7,395.5 837.8,395.4 837.9,395.7 838.2,395.4 838,395 837.6,395.3 		"/>
		<polygon fill="#E6EEF4" points="768.5,432 768.8,433.1 769.1,432.3 768.8,431.4 		"/>
		<polygon fill="#E6EEF4" points="777.2,416.6 777.5,416.2 777.5,415.6 777,416.3 		"/>
		<polygon fill="#E6EEF4" points="823.9,389.5 824.8,388.5 825,388.6 825.1,388.3 825.3,388.1 825.1,387.9 825,387.5 824.7,387.5
			824.4,387.7 823.6,387.7 823.3,388.1 823,387.9 822.9,387.7 822.6,387.7 822.2,387.3 822.1,387.3 822.2,387.5 822.2,388.2
			822.7,388.7 823.1,389.2 		"/>
		<polygon fill="#E6EEF4" points="831.2,470.2 830.7,470.2 830.9,469.9 830.5,469.9 830.4,469.7 830.5,469.2 830.1,469.4
			829.6,469.3 828.1,469.7 827.4,470.1 827.4,470.4 827.8,470.7 828.4,470.7 828.6,470.7 829.1,470.7 829.5,470.6 829.7,470.9
			830,470.9 830,470.7 830.3,470.7 830.5,470.4 831.5,470.6 831.9,470.3 831.5,470.1 		"/>
		<path fill="#E6EEF4" d="M769.2,430.6l-0.1-0.8l-0.2,1.2C768.9,431,769.2,430.6,769.2,430.6z"/>
		<path fill="#E6EEF4" d="M804.2,399.6l0.2,0.3l0.5-0.1l-0.4-0.5C804.5,399.3,804.2,399.6,804.2,399.6z"/>
		<polygon fill="#E6EEF4" points="804.3,401.5 804.3,400.9 804,400.5 804,401.3 		"/>
		<polygon fill="#E6EEF4" points="822.1,388.8 822.7,389 822.7,388.8 822.2,388.6 822,387.6 821.6,387.8 821.7,387.9 821.6,388.2
			821.8,388.3 821.8,388.4 821.5,388.4 821.3,388.4 821.3,388.7 821.9,388.8 		"/>
		<polygon fill="#E6EEF4" points="931.6,483.7 931.8,483.7 931.8,483.4 931.4,483.4 		"/>
		<polygon fill="#E6EEF4" points="895.9,521.3 896.1,521.2 896.1,520.9 895.7,520.9 895.6,521.1 895.6,521.1 		"/>
		<polygon fill="#E6EEF4" points="923.4,501.7 923.3,501.7 923.2,501.3 922.8,501.3 922.5,501.9 922.6,502 922.9,502.1 922.4,502.5
			922.1,502.2 922.1,501.9 921.9,501.9 921.6,501.8 921.2,502 920.8,502.5 920.5,502.3 920.2,501.5 920.5,501.4 920.7,501
			920.8,500.8 920.7,500.7 920.7,500.5 920.5,500.3 920.2,500.5 920,500.4 919.8,500.1 919.9,499.8 920.2,499.3 919.7,499.3
			919,499.7 918.6,499.9 918.1,500.3 918,501 917.5,502.3 917,502.9 916.8,503 916.2,503.8 916,504.2 915.5,504.4 914.9,504.3
			914.5,504.7 914.3,505.2 914.3,505.7 914,505.9 913.6,506.4 913.5,507 913.3,507.3 913.2,507.8 912.2,508.9 911.1,509.7
			910.5,509.8 909.8,510.2 909.7,510.6 909.3,510.6 908.3,511.1 907.4,511.9 906.8,512.1 905.8,512.7 905.7,513 905.9,513.4
			906,514 905.5,513.5 905.3,513.4 904.9,513.6 904.4,513.7 904.1,513.5 903.7,513.5 902.8,514.3 902.5,514.7 901.8,515.2
			901.4,515.4 900.9,516 900.8,516.6 900.7,516.3 900.5,516.1 900.1,516.4 899.8,516.6 899.8,517.3 899.6,517.6 899.3,517.4
			898.5,518.3 898.3,518.3 898,518.6 898,519.6 897.8,519.9 897.6,519.4 897.3,519.3 897.1,519.6 896.9,519.8 896.5,520.6
			896.5,520.9 896.9,521.3 897.1,521.6 896.9,521.7 896.5,521.7 895.9,521.8 895.2,522.5 895.6,522.6 895.8,522.7 895.5,522.8
			895.4,523.4 895.8,523.8 896.1,523.9 896.8,523.9 896.8,524.1 897.1,524.1 897.1,523.8 897.4,523.8 897.8,524 898,524.4
			897.9,524.6 898.1,524.9 898.6,524.9 898.8,525.1 898.9,525.6 899.4,526.1 899.8,526.3 899.2,526.7 899.5,526.7 900.2,526.4
			900.2,526.7 900.7,526.8 901.4,526.7 902.3,526.3 903.1,525.6 903.7,525.4 903.7,525.1 903.6,524.6 903.9,524.9 903.8,525.3
			904.5,525 904.7,524.4 905,523.9 905.8,523.5 906.5,523.6 906.8,523.4 906.7,523.2 906.3,523.3 906.5,523.1 906.6,522.9
			906.5,522.9 907.1,522.2 907.6,521.4 907.8,520.5 908.2,520.1 909.4,519.2 909.6,518.7 909.7,518.2 910.3,517.3 910.6,516.8
			910.6,516.3 911.1,515.8 911.5,515.6 911.6,515.1 912,515.4 912.3,515.4 912.5,515 912.9,514.9 913.2,514.9 913.6,514.4
			913.5,514 913.2,513.6 913.6,513.8 913.8,514.4 914,514.4 914.4,514.3 914.4,514.1 914.8,513.8 915.1,513.9 915.1,514.2
			914.6,514.4 915.2,514.4 915.7,514.5 915.8,514.3 915.8,513.9 915.9,513.7 916.1,513.8 916,514.4 916.2,514.5 916.5,514.3
			916.6,513.6 916.3,513.2 915.9,513.1 916.1,512.9 916,512.3 916.2,511.4 916.6,511.2 917.4,511 918.2,510.4 918.3,510.1
			919,509.4 919,508.9 919.6,508.3 920.1,508.3 920,508.1 921,507.1 921.1,506.8 922.5,505.5 923,505.2 922.7,505.1 922.7,504.6
			922.4,504 922.5,503.5 922.6,503.1 922.8,503.1 923.3,502.4 922.9,502.5 922.5,502.6 923.1,502.3 		"/>
		<polygon fill="#E6EEF4" points="939.3,487.6 939,487.3 939.2,487.2 939.3,487.1 938.6,487 938.1,487.3 937,488.4 936.4,488.5
			936,488.6 935.5,488.4 934.4,487.3 934.1,487.3 933.6,486.7 933.5,486.3 933.8,486 933.8,485.4 933.4,484.5 933.4,484.1
			933.3,483.8 933.3,483.3 933.5,482.9 933.2,482.8 933.1,482.2 932.9,481.9 932.7,482 932.3,481.7 932.2,482 932.6,482.4
			932.5,482.9 932.6,483.1 932.2,483.5 932.2,483.9 932.6,484.3 932.6,484.7 932.1,484.8 931.8,484.5 931.8,484 931.2,483.9
			931.2,483.6 930.8,483.5 930.4,483.5 930.4,483.2 930.8,483 931,482.6 930.5,482.2 930.8,481.6 931.3,481.5 931.4,481
			931.2,480.5 931.3,480.2 931.1,479.8 931.2,479.2 930.6,478.7 930.7,478.5 931,478.7 931.5,478.6 931.6,478 931.8,477.8
			931.8,477 931.6,476.3 931.6,475.8 931.4,475.9 930.7,476.2 930.2,475.7 930.5,475.4 930.2,475.1 930,475.1 930.2,474.8
			930.7,474.6 930.6,474.3 930.1,474.1 929.7,473.8 929.4,474 929.3,473.5 929.5,473.5 929.7,473.2 929.4,473.1 929.1,473.3
			929.1,473.6 928.9,474 928.6,473.8 928.7,473.4 928.5,473 928.3,472.3 928.4,471.8 928.4,471.7 928.5,471.6 928.3,471.3
			928,471.5 927.2,471.5 927.2,471.6 927.6,472 928.2,473.5 928.3,474 928.2,474.9 928,475.1 927.7,475.1 927.6,475.3 928,476.4
			928.1,476.6 928.5,476.3 929.1,476.3 928.7,476.4 928.3,476.9 928.5,477.6 928.8,478.3 928.9,479.7 928.9,480.6 928.9,481.2
			929.2,481 929.4,480.5 929.2,480.2 929.4,480 929.6,480.4 929.6,480.8 929.9,480.8 929.9,480.6 929.9,480.4 930,480.3
			930.1,480.7 929.8,481.3 929.6,481.7 929.6,482 929.4,482 929.2,481.7 929,481.7 929.1,482.6 929.5,483.6 929.7,483.7
			929.9,483.6 930.1,484 930.1,484.2 930.4,484.4 929.8,484.8 929.8,485 930,485.2 929.8,485.6 929.5,486.5 929.5,487 929.4,487.2
			929.7,487.5 929.6,487.7 929.2,487.7 928.9,488.1 928.9,488.4 929.2,488.7 928.9,488.9 928.6,488.9 928.3,489.5 928,491.5
			927.9,492 927.5,492.3 927.1,492.3 926.6,492.1 926.1,492.2 925.1,492.7 924.6,493.2 924.4,493.9 924.5,494.7 925,495.1
			925.8,495.6 926.2,496.3 926.9,496.6 927.2,496.9 927.4,498.1 927.4,498.2 927.3,498.3 927.3,499 927,499.5 925.9,500.9
			925.2,501.7 924.3,502.5 924,502.8 924.1,503.1 924.7,503.2 924.8,502.9 925,502.9 925.1,503.3 925,503.6 925.2,503.7
			925.4,503.6 925.6,503.8 925.5,504.2 925.6,504.4 926.1,504.3 927.1,503.6 928,502.9 928.8,502 929.6,501.1 930.5,500 931,499.6
			931.4,499.6 931.6,499.3 931.6,498.9 931.8,498.6 932.4,498.4 932.7,497.3 933.3,496.4 933.3,496.2 933.6,495.9 933.2,495.5
			932.7,495.5 932.3,495.5 932.7,495.2 933.1,495.1 934.3,493.8 934.9,493.6 935.8,493.7 936.2,493.8 936.1,494.1 936.2,494.5
			936.6,494 937,493.9 936.3,493.6 936.4,493 936.7,492.2 937.1,491.8 937.5,491.8 937.7,492 937.9,491.8 938.2,491.4 938.9,490.2
			938.9,489.8 938.9,489.4 939.1,488.8 939.5,488.3 940,488 939.9,487.9 		"/>
		<polygon fill="#E6EEF4" points="899.1,527.4 899.2,527.2 898.9,527.4 		"/>
		<polygon fill="#E6EEF4" points="923,500.5 923.1,500.2 922.7,500.1 922.3,500.5 922.3,500.9 922.2,501.1 922.4,501.1 922.6,500.7
					"/>
		<polygon fill="#E6EEF4" points="922.6,501.3 922.4,501.4 922.1,501.7 922.4,501.7 		"/>
		<polygon fill="#E6EEF4" points="922.2,501.4 922.3,501.3 921.7,501.6 922,501.5 		"/>
		<polygon fill="#E6EEF4" points="933.3,481.2 933.2,481 933.4,480.8 933.2,480.6 933.1,480.1 932.8,480.9 933.1,481.3 		"/>
		<polygon fill="#E6EEF4" points="932.3,480.8 932.1,480.9 932.2,481.1 		"/>
		<polygon fill="#E6EEF4" points="410.3,144.4 410.9,145 411.4,145.3 411.8,144.9 412.3,144.9 413.2,145.8 414.4,145.7 414.9,145.9
			415.6,145.7 415.5,145.1 415.7,144.8 415.8,145.2 416.4,145.3 417,144.7 417.1,144.1 417.8,144 417.5,144.3 417.7,144.6
			418,144.3 418.4,144.2 418.9,143.6 419.1,143.7 419.3,143.7 419.8,143.7 419.8,143.9 420,143.7 421.2,142.7 421.6,142.1
			423,141.8 423.3,141.5 423.2,141.2 423.2,140.9 423.5,140.9 423.6,141.3 424.3,141.5 424.7,141.1 424.8,140.8 424.6,140.6
			424.7,140.2 425,140.1 424.7,139.4 425,139.2 425.4,139.5 425.5,139.9 426,139.8 426.3,139.3 426.1,138.8 425.6,138.2
			425.6,137.7 425.9,137.4 425.9,136.9 426.4,136.7 426.8,136.7 427,136.3 426.6,135.8 425.5,135.7 425.1,136 425.4,135.5
			425.4,135.1 424.7,135.1 424.6,135.2 424.4,134.7 424.8,134.2 425.2,134.1 425.1,133.3 424.8,133.2 424.4,133.5 424,133.3
			423.8,132.8 424.3,132.5 424.3,132.1 424.6,131.9 425.1,131.8 424.5,131.5 424.1,131.7 423.2,132.5 423.1,132.9 422.7,133
			422.4,132.5 422.6,132.1 422.3,131.9 422.2,131.4 421.7,131.2 421.3,131.5 421,131.3 420.7,131.8 420.9,132.3 420.7,132.7
			420.2,132.8 419.6,133 419.6,132.6 419.3,132.3 419,132.8 418.7,133.5 418.2,133.5 417.6,132.6 417.2,132.7 417.1,132.6
			416.6,132.6 416.5,133.5 417,134.5 416.4,135.9 416.6,134.7 416,133.9 416,133.4 415.8,133.2 415.9,132.7 415.3,132.3 414.2,133
			414.1,133.6 414.3,134.1 413.8,134.8 413.4,134.8 413.3,134 412.9,133.8 412.8,132.7 412.5,132.4 411.8,133 411.9,134.2
			412.2,134.6 412.1,135.5 411.8,135.9 411.3,136 411.3,135.3 410.7,135.6 410.5,136.2 410.2,136.5 410.1,137.3 409.8,136.5
			409.4,136.4 409.4,136 409.8,135.5 409.8,135.1 409.2,135.1 409.5,134.7 409.2,134.1 409.6,134.3 410,133.9 409.9,133.6
			409.4,133.3 409.8,133 409.4,132.5 409.1,132.8 408.8,132.3 408.2,132 408.1,131.5 407.9,131 407.4,131.1 406.8,130.9 406,131
			405.9,131.2 406.1,131.5 406.4,131.5 406.5,131.3 406.9,131.3 407.2,131.5 407.7,131.7 407.4,131.9 407,131.8 406.5,131.8
			406.5,132 407.3,132.5 407.8,133.1 407.7,133.5 407.4,133.5 407.4,133.2 406.8,132.8 406.5,133.1 406.1,133 406.3,132.7
			405.9,132.1 405.3,131.9 404.9,132.1 405.3,132.6 405.2,132.9 404.9,132.4 404.4,132.3 404.3,132.6 404.6,133 404.9,133.2
			405.1,133.5 404.6,133.3 404.1,133.5 404.4,133.9 405.1,134.2 404.8,134.2 404.6,134.4 404.8,134.7 404.6,134.7 403.8,134
			403.6,133.9 403.3,134.2 403.7,134.8 403.9,135.2 403.7,135.3 403.2,134.7 402.7,134.6 402.4,135.1 403,135.3 403.5,135.8
			404.2,136 404.5,135.4 405.1,135.3 405.4,134.8 405.5,135.1 405.6,135.3 405.9,135.3 406.2,135.1 406.3,135.6 406.5,135.6
			407,135.3 407.1,135 407.2,135.6 407.3,135.5 407.9,135.1 407.9,135.3 407.7,135.8 407.9,136 408.3,135.7 408.9,136 408.6,136.1
			408.3,136.1 407.9,136.4 407.4,136.5 406.7,136.8 406.6,137 407.6,137.2 408.1,137.2 408.3,136.8 408.6,136.7 408.6,137.1
			408.2,137.6 407.3,137.7 407,137.6 406.5,138 406.3,137.7 406.1,137.6 406.1,137.3 405.8,137.3 405.8,137.4 405.9,137.6
			405.4,137.9 405.1,137.8 404.6,137.8 404.2,138 403.6,137.8 403.2,138 403,137.9 403.3,138.5 403.6,139 404.3,139.1 404.3,138.9
			405.2,139.1 406.2,139.1 406.8,139.1 406.8,139.4 406.4,139.6 406.4,139.9 406.9,140.2 407,140.6 407.3,140.5 408,140.1
			407.9,140.4 407.4,140.8 407.1,141.2 407.6,141.5 408.3,140.9 408.9,141.1 409.1,141.4 408.7,141.2 408.2,141.4 407.8,141.7
			407.2,141.7 407.2,142.1 407,142.4 406.7,142.3 406.3,142.5 406.1,142.2 405.7,141.9 405.7,142.1 405.5,142.1 405.6,142.8
			405.8,142.9 405.6,143 405.6,144 406.2,143.9 406.4,143.7 406.8,144 407.7,144.1 408.4,143.6 408.9,143.9 409.4,143.6
			409.5,143.9 409.8,144 410.4,143.8 		"/>
		<polygon fill="#E6EEF4" points="411.1,145.7 410.9,146.1 411.1,146.5 411.4,146.2 411.3,145.6 		"/>
		<polygon fill="#E6EEF4" points="281.1,303.4 281.9,303.3 281.6,303 		"/>
		<polygon fill="#E6EEF4" points="289.3,303 288.9,303.5 289.4,304 289.6,303.5 		"/>
		<polygon fill="#E6EEF4" points="287.1,304.7 286.6,303.9 286.2,304.2 286.5,304.6 		"/>
		<polygon fill="#E6EEF4" points="288.9,305.1 289.2,305.4 289.8,305.2 288.9,304.6 		"/>
		<polygon fill="#E6EEF4" points="285.3,302.1 285.4,302.4 286.1,302.8 286.1,302.2 286.5,301.8 285.8,301.8 		"/>
		<polygon fill="#E6EEF4" points="280.4,302.5 279.6,302.3 279.2,302.7 280.2,302.7 		"/>
		<polygon fill="#E6EEF4" points="274.6,302.9 276,302.9 276.3,303.1 277.3,302.8 277.7,303 278.6,302.6 279.3,301.8 278.8,301.6
			278.6,301.3 278.3,301.1 277.2,301.3 275.1,301.1 274.9,301.5 274.4,301.8 274.5,302.1 274.4,302.4 		"/>
		<polygon fill="#E6EEF4" points="271.1,302.2 270.8,301.9 270.6,302 270.8,302.4 271.2,302.5 271.5,302.3 		"/>
		<polygon fill="#E6EEF4" points="271.9,300.8 271.7,300.4 270.6,299.8 270.2,299.8 269.5,299.6 269,299.6 268.3,299.2 267.5,298.8
			266.9,298.8 267.3,298.6 268.1,298.9 269.3,299 269.8,298.8 269.4,298.5 269.1,298.6 268.2,298.4 267.8,297.5 267.3,297.5
			267,297.6 266.7,297.4 264.3,296.9 264.1,297 263.6,296.9 262.6,297 262.3,297.6 262.4,297.9 262.1,298.4 262.4,298.8
			262.2,299.4 261.7,299.6 261.7,299.9 261.9,300.4 261.9,300.9 261.9,301.2 261.2,301.9 261.3,302.3 261.6,302.3 261.9,302.9
			261.7,303.4 262.2,303.6 262.3,303.8 262.7,304 263,303.2 263.7,302.3 263.6,302 263.9,301.6 264.2,301.9 264.6,302 264.9,301.3
			265.3,301.5 265.3,302.1 265.7,302.3 266.4,302.1 267.1,301.4 268,301.2 268.8,301.4 269.4,301.2 269.8,301.5 270.4,301.5
			271.2,301.7 271.3,301.3 271.7,301.3 		"/>
		<polygon fill="#E6EEF4" points="381.4,27.2 381.7,26.9 381.7,25.6 381.3,25.1 380.9,25 380.6,25.1 380.5,25.6 380.7,26
			380.6,26.6 		"/>
		<polygon fill="#E6EEF4" points="380.1,23.5 380.1,23.9 380.4,24.4 380.6,24.5 381.4,24.5 381.5,24.2 381.5,23.7 381.1,23.5
			381.1,23 380.8,22.9 380.3,23 		"/>
		<polygon fill="#E6EEF4" points="382.3,14.5 382.5,14.7 382.9,14.7 382.9,14.5 382.6,14.2 382.3,14.1 382.3,13.6 381.9,13.4
			381.5,13.7 381.5,14 381.6,14.4 		"/>
		<polygon fill="#E6EEF4" points="428.6,30.2 428.8,29.9 429,29.3 428.9,28.5 429,28.2 428.9,27.6 428.4,27.8 428.4,28.2
			428.5,28.4 428.5,28.8 428.3,29.3 		"/>
		<polygon fill="#E6EEF4" points="371.2,22.4 371.7,23.3 372,23.5 372.2,22.9 372.1,22.2 371.5,21.6 371.4,20.7 371.7,19.9
			371.8,19 371.5,18.5 371.5,17.6 371.3,17.2 370.8,17.8 370.8,19.2 370.5,19.7 370.5,20.4 371.1,21.6 		"/>
		<polygon fill="#E6EEF4" points="341.7,27.8 342,28.1 342,28.5 342.5,28.7 342.5,28.1 342.2,27.8 		"/>
		<polygon fill="#E6EEF4" points="384.8,15 384.8,14.3 384.4,14 384.2,14.1 384.5,14.9 		"/>
		<polygon fill="#E6EEF4" points="385.4,14.4 386,15.1 386.5,15.2 386.7,14.6 386.7,14 386.8,13.8 386.8,13.5 386.4,13.4 386,12.7
			385.6,12.7 385.4,12.9 385.4,13.4 385.6,13.7 385.3,14 385.1,13.6 384.7,13.7 384.9,14.2 		"/>
		<polygon fill="#E6EEF4" points="393.3,12 393.6,11.8 393.6,11.6 393.2,11.3 393.1,11.5 393.1,11.8 		"/>
		<polygon fill="#E6EEF4" points="396.9,9.9 397.1,9.7 397.2,9.2 397,8.9 396.7,8.9 396.5,9.4 396.8,9.9 		"/>
		<polygon fill="#E6EEF4" points="396.8,10.9 397,11.1 397.3,11 397.6,10.6 397.6,10.2 397.3,10.2 396.8,10.5 		"/>
		<polygon fill="#E6EEF4" points="394.9,11.5 395,11.9 395.4,11.9 395.7,11.5 395.9,11.3 395.2,10.6 395.1,10.2 394.8,9.9
			394.6,10.1 394.5,10.5 394.4,10.6 394.5,10.9 		"/>
		<polygon fill="#E6EEF4" points="426,30.3 426.1,30.5 426.6,30.1 426.6,29.5 426.8,29.3 426.8,28.8 426.6,28.6 426.2,28.7
			425.9,29.3 426,29.7 		"/>
		<polygon fill="#E6EEF4" points="379.6,18.9 379.9,19.2 380.1,19.3 380.4,19.2 380.6,18.8 380.3,18.3 380,17.7 379.7,17.3
			379.4,17.3 379.3,17.8 379.6,18.2 		"/>
		<polygon fill="#E6EEF4" points="373,19.6 372.9,19.4 372.9,19 372.7,18.8 372.5,18.9 372.5,19.4 372.9,19.9 		"/>
		<path fill="#E6EEF4" d="M426.7,31.3l0.3,0.7c0,0,0.2,0.1,0.2,0.1l0.1-0.4l0-0.9l-0.2-0.2l-0.3,0.3L426.7,31.3z"/>
		<polygon fill="#E6EEF4" points="338.4,124.2 338.7,124 338.2,123.8 337.8,124 337.7,124.1 337.9,124.2 		"/>
		<polygon fill="#E6EEF4" points="339,106.9 339,107.3 338.8,107.7 339.6,108.2 339.1,108.3 338.9,108.5 339.2,109 340.5,109.3
			340.7,109.5 341,109.7 341.9,109.1 341.3,109.9 340.8,109.9 340,109.6 339.7,109.7 339.7,110.2 340,110.4 340.8,110.5
			340.9,110.9 341.4,111 341.8,110.8 343.3,110.5 344.1,110.5 345.1,109.7 344.9,108.8 344.6,108.1 344,108.1 343.5,107.8
			343.2,106.5 342.6,105.6 341.8,105.4 341.3,104.8 340.4,104.8 339.8,104.5 339.8,104.9 339.2,105.5 339.2,106.1 339.8,106.5
			340,107 339.5,106.7 		"/>
		<polygon fill="#E6EEF4" points="338.7,119 338.7,118.8 338.5,118.8 338.1,119.1 338,119.3 338.1,119.4 338.4,119.4 		"/>
		<polygon fill="#E6EEF4" points="340.2,103.9 340.3,103.6 340,103.1 339.7,103.1 339.6,103.4 339.8,103.8 		"/>
		<path fill="#E6EEF4" d="M339.9,136.5l0.3-0.2l0.2-0.3l-0.2,0l-0.5,0.5c0,0,0,0.2,0,0.2L339.9,136.5z"/>
		<polygon fill="#E6EEF4" points="340.8,114.6 340.8,114.9 340.9,115.1 341.7,114.9 341.6,114.6 341.2,114.6 		"/>
		<polygon fill="#E6EEF4" points="343.6,114.7 343.9,114.5 343.5,114.3 343,114.5 343.2,114.7 		"/>
		<polygon fill="#E6EEF4" points="337.1,124 337,123.8 336.8,123.8 336.7,123.9 336.8,124.2 		"/>
		<polygon fill="#E6EEF4" points="359.5,148 359.4,148.1 359.3,148.4 359.5,148.3 		"/>
		<polygon fill="#E6EEF4" points="340,137 340.4,136.7 340.8,136.1 340.6,136.2 340.3,136.5 339.7,137.1 		"/>
		<polygon fill="#E6EEF4" points="337.9,124.8 338.1,124.5 337.9,124.4 337.5,124.6 		"/>
		<polygon fill="#E6EEF4" points="342.1,89.8 341.9,90.1 341.7,90.3 341.7,90.6 341.7,90.9 341.9,90.9 342,90.8 342.9,90.1
			343.4,89.6 343.4,89.3 342.9,89.3 342.5,89.8 		"/>
		<polygon fill="#E6EEF4" points="343.7,117 343,116.8 342.6,117 342.6,117.2 343,117.4 343.7,117.3 		"/>
		<path fill="#E6EEF4" d="M346.3,101.9l-0.2,0.3l0.6,0.4l0.3-0.1l-0.2-0.5C346.8,102.1,346.3,101.9,346.3,101.9z"/>
		<polygon fill="#E6EEF4" points="343.4,78 343.5,78.2 343.7,77.9 343.3,77.5 342.6,77.3 342.4,77.5 341.8,77.2 341.5,77.2
			341.3,77.4 341.4,77.6 341.8,77.7 342,77.9 343,77.8 		"/>
		<polygon fill="#E6EEF4" points="342.2,78.6 342.4,78.6 342.4,78.4 342.1,78.4 		"/>
		<polygon fill="#E6EEF4" points="322.3,52.7 321.7,52.1 320.9,51.8 320.2,51.9 320,52.1 320.6,52.8 321.2,52.8 321.7,53.1 		"/>
		<polygon fill="#E6EEF4" points="346.6,109.6 347,109.4 347.2,108.6 347.6,108.2 347.4,108 347.2,108 346.7,108 346.2,108.4
			346.2,108.5 346.5,108.5 346.6,108.8 346.4,109.4 		"/>
		<polygon fill="#E6EEF4" points="343.3,99.5 343.1,99.9 343.1,100.5 343.5,100.7 343.9,100.3 343.8,100 344,99.2 		"/>
		<polygon fill="#E6EEF4" points="344.8,100.3 345.1,100.5 345.6,100.5 346,100 345.9,99.4 345.4,99.2 345,99.4 		"/>
		<polygon fill="#E6EEF4" points="346,97.5 345.5,97.4 345.2,97.2 344.8,97.4 344.7,97.8 344.8,98.2 345.2,98.2 345.6,97.8
			346,97.7 		"/>
		<polygon fill="#E6EEF4" points="342.3,113.7 341.8,113.9 341.8,114.1 342.4,114.4 342.8,114.3 343.1,114.1 342.8,113.9 		"/>
		<polygon fill="#E6EEF4" points="372.9,131.9 372.7,131.6 372.4,131.6 372.1,132 372,132.3 371.9,132.5 372.2,132.8 372.3,133.1
			372.6,133.1 372.9,132.8 373.3,132.9 373.4,132.6 373.1,132 		"/>
		<polygon fill="#E6EEF4" points="374.3,132.3 374,132.5 374,132.8 374.2,133 374.3,132.9 374.2,132.5 		"/>
		<polygon fill="#E6EEF4" points="368.2,133.4 368.2,133.5 368.3,133.8 368.4,133.5 		"/>
		<path fill="#E6EEF4" d="M402.2,116.9l0.3,0.2l0.1,0.3l0.2,0.1l0.6-0.4l0-0.4l-0.2-0.2l0.1-0.2l0.3-0.1l0.1,0.3l0.3,0.2l0.3-0.4
			l-0.1-0.4v-0.4h0.2l0.1,0.2l0.4,0.2l0.3-0.3l0.2-0.1h0.3l0-0.4l-0.1-0.3l0.1-0.1l0.2,0.2l0.2,0.2l0.4-0.1l0.3-0.2l0-0.3l-0.2-0.1
			l-0.1-0.3l0.1-0.1l0.5,0l0.2,0.2l0.1-0.2l0.1-0.3l0.2,0.1l0.2,0.2l0.3,0.1l0.2-0.1l-0.1-0.3l-0.3-0.2V113l0.4-0.3l0.2,0.1l0.6-0.1
			l0.5-0.3l0.3-0.5v-0.1l-0.7,0.2l-0.6-0.1l-0.2-0.1l-0.8,0l-0.4,0l-0.7-0.2l-0.6-0.3l-0.8-0.1l-0.7-0.6l-0.2-0.2h-0.2l-0.3,0.3
			l-0.1-0.1l0.1-0.3l-0.1-0.2l-0.3,0.3l-0.8,0.6l-0.4,0.2l-0.8,0l-0.3,0.1l-0.2-0.2l-0.3-0.1c0,0-0.3,0.2-0.3,0.2
			c-0.1,0-0.4,0-0.4,0l-0.7,0.6l-0.2,0.4l-0.3-0.3l-0.2-0.2l-0.9,0l-0.3-0.2l-0.3,0.1l-0.2-0.2l0.3-0.3l0.5-0.1l0.3,0.3l0.4,0.1
			l0.4-0.2l0.6-0.1l0.4-0.4l0.4,0l0.6,0.2l0.5-0.1l0.2-0.3l-0.1-0.3l-0.3,0l-0.2-0.2l-0.2,0l-0.5,0.1l-0.4-0.2l-0.8,0l-0.5,0.2h-0.5
			l-0.6-0.1l-0.2-0.2l-0.3-0.1l-0.4,0.2l-0.6,0l-0.9,0.4l-0.1-0.1l0.2-0.3l0.4-0.4l0.3,0l0.5,0.1l1-0.4l0.3-0.2l0-0.4l0.2-0.2l0.3,0
			l0.2-0.1l0.2-0.3l-0.1-0.3l-0.2-0.2l-0.4-0.1l-0.1-0.2l0.4-0.3l0.2,0.1l0.1,0.1l0.4,0.1l0.2-0.2l-0.1-0.3l-0.2-0.2l0-0.5l0.3,0.1
			l0.2,0.2l0,0.3l0.3,0.5l0.3,0.2l0.5-0.2l0.7,0l1.4-0.7l0.4,0l0.3-0.2l0.3-0.3l0.4-0.2l0.2-0.5l-0.3-0.6l-0.1-0.4l-0.3,0l-0.5-0.2
			l-1.2-0.4l-0.2,0l-0.6,0.3l-0.2-0.2v-0.3l-0.1-0.2l-0.6,0.2h-0.3l-0.5,0.4l-0.4,0l-0.3-0.2l0-0.3l0.3,0.3l0.4-0.2l0.3-0.2l0.6,0.1
			l0.1-0.2l-0.3-0.4l-0.3-0.5l-0.3-0.2l-0.5,0l0.2-0.2l0.5-0.3l0-0.2l-0.1-0.5l0.2-0.3l0.3,0.3l0.2,0.6l0.2,0.3l0,0.3l0.6,0.6v0.3
			l0.4,0.4l0.2,0.1l0.3-0.2l0.2-0.1l0.4,0.2l0.5-0.1l0.3-0.2l0.2,0.2l0.1,0.4l0.9,1.2l0.4,0.3l0.2-0.2l0.5-0.1l0.2,0l0.1,0.3
			l-0.2,0.4l-0.1,0.5l0.1,0.6l0.3,0.4l0.3,0.4l0.1,0.9l0.3,0.3l0.4,0.4l0.4,0.8l0.7,0.5l0.3,0.3l0.4-0.1l0.4-0.1l0.3,0l0.2-0.1v-0.3
			l0-0.6l0-0.7l0.1-0.5l0.1-0.3l0.2,0l0.2,0.2l-0.1,0.4v0.4l0.2,0.5l-0.2,0.4l0,0.4l0.3,0.1l0.2-0.2l0.3-0.1l0.2,0.2l0.1,0.3
			l-0.1,0.3l0.1,0.2l0.2-0.1l0.3,0l0.3-0.2l0-0.4l-0.1-0.4l0-0.9l0.1-0.3l0-0.5l0.1-0.2l-0.2-0.3l-0.2,0l0.1-0.3l0.1-0.3l-0.1-0.2
			l-0.5,0.2l0-0.2l0.1-0.2l0.5-0.1l0.2-0.2l0.1-0.5l-0.2-0.2l-0.3,0.1l-0.1-0.2l0.2-0.4l0.3-0.5V104l-0.2,0l-0.4,0.2l-0.4,0.6
			l-0.1,0.7l-0.2,0.1l0-0.2l0.1-0.6l0-0.3l-0.1-0.2l0-0.3l0.1-0.4l0.4-0.3l0.4-0.3l0.2-0.4l-0.3-0.3l-0.3-0.1l-0.2,0.2l-0.1,0.3
			l-0.2,0.1l0.2-0.5l0.2-0.3l-0.2-0.1l-0.3,0.1l-0.4,0.4l-0.4,0.4l0-0.1l0.1-0.4l0.2-0.3l0.3-0.2l0.2-0.5l0-0.2l-0.2-0.2l-0.2-0.3
			l-0.2,0l-0.2-0.3l-0.1-0.3l-0.3-0.1l-0.4-0.4h-0.2l-0.2-0.2l-0.3,0l-0.1-0.3l-0.1-0.2l-0.8-0.6l-0.2-0.2l-0.5-0.3l-0.5,0l-0.5,0.1
			l-0.4,0.5l0.1-0.3l-0.1-0.3l-0.8-0.3l-0.5,0l-0.5,0.1l-0.2-0.1l0.4-0.3l0.2,0.1l0.9,0l0.4,0.2l0.5,0.1l0.6-0.1l0.3-0.3l0.1-0.8
			l-0.1-0.4l-0.2-0.1l-0.2,0l-0.7-0.5l-0.2-0.1l-0.2,0l-0.5,0.4l-0.2,0l-0.4,0.1l-0.3,0.4l-0.1,0l0-0.3l-0.2-0.2l-0.2,0l-0.6,0.2
			l-0.3,0.2l-0.2-0.1l0.1-0.2l0.5-0.2l0.5-0.1l0.1-0.2l-0.1-0.2l-0.3-0.1l-0.2,0.1l-0.5,0l-0.3-0.1V95l0.3,0L402,95l0.3,0l0.2-0.3
			l0.3,0l0.3,0.1l0.5,0.5l0.4,0.1l0.4-0.2l0.5-0.4l0.4-0.1l0.5,0.1l0.3-0.4l0.2-0.1l0.1-0.3l-0.1-0.4l-0.4-0.2l-0.6-0.1l-0.4-0.2
			l-0.2-0.2l-0.5,0l-0.5-0.1l-0.3,0.1l-0.1,0.3l-0.4,0.2c0,0-0.4-0.1-0.4-0.2c0,0-0.4-0.1-0.4-0.1l-0.5,0l-0.1,0.3l-0.1,0.3
			l-0.2-0.1l-0.2-0.3l-0.2,0l-0.1-0.2L401,93l0.4-0.1L402,93l0.8,0l0.3-0.2l0-0.3l-0.3-0.5l-0.5-0.4l-0.5-0.2l-0.2-0.3l0-0.4
			l0.1-0.1l0.2,0.1l0.1,0.3l0,0.3l0.3,0.2l0.6,0.5l0.1,0.2l0.3,0.1l0.3,0l0.4,0.4l0.4,0l0.5-0.1l0.3-0.2l0.4-0.1l0.2-0.3l0.3-0.3
			l0.4-0.2l0.3,0l0.1-0.3l-0.1-0.3l-0.4-0.3l-0.1-0.3l-0.6-1l-0.4-0.3l0-0.3l0.1-0.1l0.2,0l0.2,0.2l0.1,0.3l0.2,0.3l0.6,1l0.9,1
			l0.1,0.1l0.1-0.2l0-0.4l0.1-0.8l0-0.5l0.2-0.3l0.2,0l0.2,0.1l0,0.3l0.1,0.2l0.3,0l0.9,0.4l0.8,0.6l0.4,0.2l0.3-0.2l0.2,0l0.2,0.2
			l0,0.2l-0.7,0.1l-0.2,0.1l-0.5-0.5l-0.9-0.5l-0.3-0.2l-0.1-0.1l-0.3,0l-0.2,0.2v0.3l0.2,0.4l1.1,1l0.5,0.5l0.8,0.4l0.5,0.3
			l0.3,0.1l0.4-0.1l0.1-0.2l0.2-0.4l0.2,0l0.4-0.1l0.3-0.2l0-0.3l0.3-0.2l0.3,0l0.3,0.2l0.4,0.1l0.5-0.2l0.5,0.1l0.1-0.2l0.1-0.6
			v-0.5l0.2-0.4l0.4-0.6l0-0.4l-0.1-0.2l-0.4-0.1l-0.5,0.2l-0.2,0.2l-0.2-0.1h-0.2l-0.2,0.1l-0.4-0.3l-0.2-0.4l-0.3-0.2l-0.2-0.3
			l-0.2,0l-0.2,0.4l0,0.5l0.2,0.2l0.1,0.4l-0.2,0.3l-0.2,0.4l-0.1-0.2l0.1-0.6l-0.1-0.5l-0.3-0.2l-0.2-0.6l-0.3-0.2l-0.1-0.2l0-0.2
			l0.3-0.2l0.4-0.6v-0.3l-0.2-0.2l-0.3-0.1l0.2-0.1l0.4,0l0.3-0.2l0.2-0.4l-0.1-0.6l-0.2-0.3v-0.2h0.2l0.3,0.3l0.2,0.4l0.2,0.2
			l0.4,0l0.4-0.2l0.4,0.1l0.4,0.3l0.5,0.1l0.6,0.4l0,0.4l0.2,0.4l0.3,0.2l0.1,0.3l0.3,0.1l0.6-0.3l0.5-0.8l0.2-0.5l-0.2-0.3
			l-0.1-0.4l0.2-0.3l0-0.2l-0.5-0.1l-0.4,0.2l-0.2,0.2l-0.6-0.3l-0.4-0.5l-0.6-0.1l-0.3,0.2l-0.2-0.2l0-0.2l0.3,0l0.2-0.3l0.1-0.9
			l0.1-0.2l0-0.4l-0.6-0.3l-0.3,0l-0.5,0.6l-0.5,0.1l-0.5-0.1l-0.2-0.3l-0.1-0.5l-0.2-0.3l0-0.3l0.4,0.3l0.1,0.2l-0.1,0.2l0.1,0.4
			l0.4,0.2l0.3,0l0.5-0.5l0.3-0.2l0.5,0l0.3,0.2l0.2,0l0.2-0.3l-0.1-0.3l-1-1l-0.8-0.6l-0.7,0l-0.8-0.3l-0.4-0.5l0-0.3l0-0.3
			l0.2,0.3l0.3,0.5l0.3,0.3l0.6,0l0.1-0.2l0-0.3l-0.5-0.5l-0.1-0.2l0-0.2h0.1l0.3,0.2l0.6,0.7l0.2,0.4l0,0.3l0.5,0.4l0.5,0.4
			l0.6,0.7l0.3,0.1l0.2-0.1l0.3,0.1l0.1,0.3l-0.3,0.3l0.2,0.4L418,82l0.3,0l0.3-0.3l0.3-0.9l0.2-0.3l0.1-0.3l-0.1-0.5l0.1-0.2l0-0.6
			l-0.2-0.4l0-0.3l0.1-0.2l0.2,0.1l0.3,0.1l0.1,0l-0.1-0.2l-0.4-0.4l-0.3-0.5l-0.3-0.3l-0.4-0.1h-0.3l-0.3-0.3l-0.4-0.2l-0.9,0
			l-0.4,0.1h-0.3l-0.1-0.2l-0.1-0.1l0.1-0.3l0.1,0.2l0.3,0.1l0.6-0.1l0.7-0.1l0.3,0.2l0.3-0.1l0.4-0.2l0.4,0.1l0.2,0.2l0.3-0.2
			l0.1-0.2l-0.1-0.3l0-0.5l0-0.3l-0.2-0.1l-0.2,0.2l-0.3,0.1l-0.4-0.1l-0.6,0l-0.2-0.2l-0.5-0.2l-0.6,0.1l-0.2,0.3l-0.1-0.1l0-0.5
			l0-0.4l-0.1-0.2l-0.7,0l-0.3,0l-0.3-0.2l0.1-0.3h0.3l0.5,0.2l0.2-0.1l0-0.3l-0.2-0.2l0.2-0.3l-0.1-0.3l-0.1-0.2l0.2-0.2l-0.1-0.3
			l0-0.4l0.3-0.1l0.1,0.1l0,0.4l0.2,0.3l0.3,0.1l0.4-0.3l0.7-0.6l0.4-0.1l0-0.2l-0.1-0.2l-0.5-0.1h-0.4l-0.1-0.1l0.4-0.1l0.5,0
			l0.2,0.1l0.3,0l0-0.3l-0.1-0.2l0.4-0.2l0.5,0l0.4,0.4l0.3,0.1l0.2-0.1l0.3,0.1l0.3,0.4l-0.1,0.4l0.1,0.2l0.4,0.1l0.2-0.1l0.3,0.1
			l0.3,0.4l0.6,0.2l0.3,0.4l0.2,0.1l0.1-0.2l0.1-0.5l0.3-0.3l0.2-0.7l-0.1-0.3l0.1-0.6l0.1-0.7l0.2-0.2l0-0.4l-0.1-0.4l-0.4-0.2
			l-0.3-0.3l-0.2,0l-0.2-0.2l0-0.2l-0.2,0.1l-0.2,0.4l-0.5,0.5l-0.3,0.1l-0.2-0.2l0.1-0.2l0-0.4l-0.2-0.2l-0.5-0.2l-0.3,0.1
			l-0.2-0.2l0.2-0.1l0-0.2l-0.4-0.2l-0.2-0.2l0.1-0.2l0.1,0.1l0.4,0.1v-0.2l-0.2-0.4l-0.1-0.4l0.1-0.2l0.2-0.2l0.2,0.2l0.3,0.1
			l0.1,0.3l0.6,0.6l0.4,0.3l0.3-0.1l0.2-0.3l-0.3-0.7l-0.6-0.5l-0.4-0.2l-0.5-0.2l-0.2-0.6l-0.3-0.3l-0.3-0.4l-0.4-0.2l-0.3-0.3
			l0-0.3l0.2-0.2l0.1-0.3l-0.2-0.1l-0.1-0.2l0.2-0.2l0.3,0l0.3-0.2l0.3,0.1l0.2,0.2l-0.4,0.3l0.2,0.1l0.3,0.2v0.3l0.1,0.3l0.4,0.1
			l0.5-0.4l0.2-0.6l0.1-0.6l0.3-0.4l0.1-0.3l-0.1-0.6l0.3-0.3l0.4-0.3l0.1-0.8l-0.1-0.6l-0.2-0.4l0.3-1l0.2-0.8l0-0.7l0.4-0.4l0-0.4
			l0.2-0.6l0-0.7l0.4-0.4l0.4-0.6l0.9-1.2l0.4-0.7l0.8-0.6l0.2-0.5l0.4-0.4l0.3-0.6l0.6-0.5l0.2-0.2l-0.1-0.2l-0.3-0.3l-0.5-0.1
			l-0.2-0.2l-0.2-0.2l-0.4,0.1l-0.7,0.2l-0.8,0.2l-0.6,0.3l-0.4,0.5l-0.6,0.3l-0.1,0.3l-0.3,0.1l-0.5-0.2l-0.2-0.3l0-0.3l0.4,0
			l0.2-0.2l0-0.5l-0.1-0.3l-0.4,0l-0.3-0.2l0.4-0.1l0.2-0.3l0.6-0.3l0.3-0.7l0.5-0.4l0.4,0l0.7,0.1l1.1,0.8l0.3,0.3l1,0l0.5-0.2
			l0.5,0.1l1-0.3l0.5-0.3l0-0.4l-0.1-0.3h0.2l0.4-0.1l0.4-0.4l0-0.4l-0.3-0.4l-0.5-0.2l-0.2-0.3l-0.3-0.1l-0.4,0l-0.3,0.3l-0.2,0
			l-0.4-0.3l-1.1,0l-0.6-0.1l-0.5-0.3l-0.4,0l-0.3,0.2l-1.1,0l-0.4,0l-0.5-0.2l0.5-0.1l0.5,0.1l0.4-0.3l0.6-0.1l0.4,0.2l0.5,0.1
			l0.3-0.1l0.3-0.2l0.3,0.1h0.3l0.2-0.3l0.2-0.1l0.3,0.1l0.2,0l0.1-0.2l0.2-0.1l0.3,0l0.1,0.1l0.3,0.1l0.2,0.1l0.5,0l0.4,0.2
			l0.3,0.2l0.4-0.1l0.5,0l0.5-0.4l0.8-0.4l0.3,0l0.4,0l0.2-0.3v-0.3l-0.2-0.2l-0.3-0.4l0-0.3l-0.2-0.2l0-0.2l0.3-0.5l0.4-0.3h0.3
			l0.8,0.5l0.4,0.1l0.2-0.1l0.3-0.4l0.6-0.8l0.5-0.3l0.3-0.1l0.2-0.3l0.5-0.4l0.5-0.2l0.2-0.4l0.1-0.6l-0.2-0.8l-0.4-0.4l-0.1-0.3
			l-0.8-0.7l0-0.3l-0.2-0.4l-0.5-0.2l-0.3-0.1l-0.3-0.4l-0.5-0.2l-0.6,0l-0.8-0.3l-0.7-0.4l-0.7-0.2l-0.3,0.1l-0.7,0l-0.7,0.3
			l-0.3,0.3l-0.5,0.2l-0.5-0.2l-0.1-0.2l-0.3,0.1L428,31l0.1,0.4L428,32l-0.2,0.4h-0.3l0,0.3l0.2,0.2l-0.1,0.3l-0.5,0.2h-0.5
			l-0.3-0.3l0-0.4l-0.2-0.1l-0.2,0.2v0.5l0.1,0.2l-0.2,0.4l-0.2,0.5l-0.2,0.3l0-0.3l0.1-0.2l-0.1-0.6l-0.2-0.4l0.1-0.4v-0.4
			l-0.2-0.4l0-0.3l-0.3,0.2l-0.2,0.3l-0.3,0.4v0.4l-0.2,0.6l-0.7,0.7l-0.4,0.4l-0.4,0.1l-0.3,0.3l-0.5,0.3h-0.5l-0.5,0.5l-0.7,0.4
			h-0.8l-0.6,0l-0.1,0.3l-0.3,0.3l-0.5,0l-0.3-0.1l-0.4,0.2l-0.6,0.6l-0.9,0.8l-0.1,0.5l-0.3,0.1l-1,0.7l-0.4,0.5l-0.1-0.2h-0.2
			l-0.5,0.4l-0.4,0.6l-0.5,0.6l-0.1,0.4l-0.2,0.3l-0.1-0.3l0.2-0.6l0-0.5v-0.5l0.4,0l0.1-0.3l0.7-0.5l0.4-0.1l0.5-0.5l0.7-0.6
			l0.2-0.4l0.5-0.3l0.5-0.7l0.2-0.4l-0.1-0.3l0.2-0.3l0.1,0.2l0.3,0.1l0.3-0.4l0.5-0.2l0-0.4l0.4-0.6l0.2-0.1l0.3,0.2l0.3-0.4
			l0.4-0.2l0.1,0.1h0.3l1.6-1.4l0.2-0.5l0.1-0.7l0.4-0.9l0.5-0.6l0-0.7l0-0.9l-0.1-0.5l-0.4-0.1l-0.6,0.1l-0.7,0l-0.6-0.2l-0.6,0
			L419,28l-0.1,0.4l0.1,0.2l-0.1,0.3l0,0.8l-0.2,0.8l-0.5,0.6l-0.3-0.2l-0.3-0.1l-0.2,0l-0.2,0.3l-0.2,0.2l-0.4-0.3h-0.3
			c0,0-0.9-0.3-0.9-0.3c-0.1,0-1,0-1,0l-0.5,0.2l-0.8,0.2l-0.6,0.2l-0.2-0.1l0-0.3l0.1-0.4l0-0.4l0.2-0.4l0.1,0l0.2,0.1l0.3,0
			l0.6-0.3l1.3-0.2l0.3-0.1l0.3-0.6l0.1-0.4l0.4-0.3l0.1-0.3l-0.2-0.2l-0.1-0.3l-0.5,0l-1-0.1l-0.9-0.2l-0.6-0.3l-0.4-0.1l-1.2,0.1
			l-0.6-0.1l-0.5-0.3h-0.7l-0.6,0.1l-0.3-0.1l-0.5-0.1l-0.3,0l-0.3,0.5l-0.1,0.4l-0.4,0.3l-0.1,0l0.1-0.4v-0.1l-0.4,0l-1.1,0.4
			l-0.7,0.2l-0.3,0.3l-0.2,0.3l-0.5,0l-0.5,0.1l-0.4,0.2l-0.5,0.1l-0.4,0.3l-0.1,0.4l-0.2,0.3l-0.3,0l-0.2-0.4V29l-0.1-0.3l-0.3-0.3
			l0-0.4l0.3-0.3l0.4-0.1l0.6-0.3l0.5,0l0.4-0.1l0.2-0.3l0.4-0.2l0.8-0.1l0.5-0.2l0.4-0.3l0.4,0l0.3,0l0.4-0.2l0.1-0.3l-0.1-0.3
			l-0.2-0.2l-0.6,0l-0.2,0l0.1-0.2l0.4,0L406,25l0.4,0l0.3,0.1l0.1,0.5l0.2,0l0.1-0.2l0.5-0.3l0.6,0.1l0.4-0.1l0.3-0.3l0.4-0.1
			l0.5,0.2l0.5,0l0.5-0.1l0.3,0.1l0.4,0.2l0.8,0l0.2,0.1l0.3,0l0.7,0.5l0.4,0.1l0.6-0.1l0.2-0.2l0.4,0l0.4,0.2l0.4,0l0.3,0.2l0.4,0
			l0.7-0.3l0.4-0.3l0.5,0l0.3,0.2h0.2l0.4-0.3l0.5,0.1h0.5l0.1-0.2l-0.3-0.2v-0.3l0.2-0.1l0.2,0.2l0.3,0.3h0.4l0.2-0.1l0.7,0l1-0.4
			l0.5-0.3l0.2-0.2l0-0.3l0.2-0.1l0.2,0.1l0.4-0.1l0.5-0.4l0.3-0.2l0-0.4l0.1-0.3l0.2-0.2v-0.5l-0.1-0.3l-0.5-0.4l-0.7-0.3l-0.5-0.5
			l-0.1-0.3l-0.3-0.3l-0.8-0.1l-0.3-0.3l-0.1-0.4l-0.3-0.1l-0.1,0.2l-0.3,0.1l-0.3-0.2l-0.1-0.3l-0.3-0.2l-1.1,0l-0.4,0.1l0,0.4
			l0,0.2l-0.2-0.2h-0.3l-0.8,0.4l-0.4,0.1l-0.6-0.3l-0.5-0.1l-0.4-0.2l-0.2-0.3l0-0.3l0.3,0l0.3,0.3l0.5,0.2l0.1-0.1l-0.1-0.2
			l-0.5-0.4l0-0.4l0.2-0.2l0.3,0.3l0.5,0.3l0.4,0.1l0.8-0.2l0.7-0.6V17l-0.1-0.2l-0.3-0.2l0-0.3l0.3-0.3v-0.2l-0.5-0.3l-0.4-0.5
			l-0.2-0.1l-0.3,0.1l-0.4,0.4l-0.7,0.4l-0.5-0.1h-0.3l-0.5,0.4l-0.3,0l-0.2-0.3l-0.2-0.1l-0.4,0.1l-0.3,0.2l-0.3-0.1l-0.4-0.3
			l-0.5-0.1l-0.4-0.2l-0.5-0.1l-0.6-0.3l-0.7-0.1l-1,0.1l-0.5,0.2l-0.8,0.3l-0.7,0.1l-0.7,0.1l-0.5-0.1l-0.6,0.1l-0.2,0.1l0.2,0.7
			l0,0.3l-0.2,0l-0.2-0.2l-0.3-0.7l-0.2-0.3l-0.2-0.1l-0.4,0.1l-0.5,0l-0.7,0.1l-0.3-0.1c0,0-0.6,0.3-0.6,0.3c0,0.1-0.4,0.5-0.4,0.5
			l-0.2,0.8l-0.3,0.3l-0.2,0l-0.1-0.2l0.2-0.5l0.1-0.4l-0.1-0.2l-0.3,0.1l-0.6,0l-0.3,0.2v0.2l-0.1,0.3l0,0.5l-0.4,0.2l-0.2-0.2
			l0-0.3l0.2-0.4l0-0.7l0.1-0.4l1-0.6l0.7-0.4l0.7,0l0.6,0.2l0.6-0.1l0.2-0.2l0.6,0h0.4l0.3,0.1l0.4-0.3l0.1-0.3l-0.3,0l-0.3-0.4
			l-0.1-0.5l0.5-0.4l0.4-0.1l0.4,0.1l0.2,0.2l-0.1,0.3l-0.3,0l-0.3,0.2l0.1,0.5l0.3,0.4l0.8,0.1l0.7-0.3l0.4,0l0.5,0.2l0.4-0.2
			l0.8-0.4l0.6,0l0.2,0.2l0.4,0l0.3-0.2l0.6,0l0.5,0.2l0.3,0l0.5,0.2l1.1,0.5l0.6,0l0.5-0.2l0.2,0.1h0.5l0.3-0.3l0.4-0.2l0.5,0.1
			l0.5,0l0.3-0.4l0-0.3l-0.8-0.5l-0.4-0.2l-0.2-0.5l-0.6-0.4l-0.9-0.3l-0.4-0.4l-0.5-0.1l-0.5,0.2l-0.2-0.3l-0.2-0.2l-0.6,0.1
			l-0.3-0.2l-1.1-0.1l-0.6-0.6h-0.3l-0.9-0.6l-0.3,0l0,0.2L408,9.7l-0.7-0.5l-0.1-0.3l-0.3-0.2l-0.4,0.2l-0.3,0l-0.3-0.2l-1,0
			l-0.5-0.2L404,8.6l-0.2,0l-0.1-0.2l-0.4-0.2l-0.9,0.1l-0.6-0.2l-0.4,0.1l-0.2,0.2v0.4l0.2,0.5l0,0.4l-0.3,0.2l-0.3-0.2L400.6,9
			l-0.3-0.4l-0.2,0l-0.2-0.2l-0.3-0.1l-0.2,0.2L399.4,9l-0.2,0.3l-0.4-0.1l-0.3,0.1l-0.2,0.5l0.2,0.3l0.2,0.2l-0.4,0.4l-0.5,0.6
			l0,0.3l0.4,0.1l0.2,0.3l-0.2,0.2h-0.5l-0.7-0.4l-0.5,0l-0.5,0.1l-0.2,0.7l0.1,0.7l0.4,0.8l0.6,0.3l0.3,0.3v0.2l-0.6-0.1l-0.7-0.3
			l-0.5-0.8l-0.8-0.6l-0.3-0.3l-0.1,0.2l0.1,0.2l0,0.5l0.2,0.3l0.2,0.4l0,0.7l-0.3,0.4l0-0.8l-0.2-0.7l-0.4-0.7v-0.4l-0.4-0.5
			l-0.6-0.2l-0.4,0.6l-0.2,0.4l-0.2-0.3l0.3-0.4l0-0.3l-0.4-0.3l-0.1-0.4l-0.2-0.2H391l-0.4,0.2l-0.1-0.2l0.1-0.4l0.4-0.3l-0.5,0.1
			l-0.5,0.5l-0.1,0.4l-0.5,0.3l-0.4,0.2l-0.5,0.8l-0.2,0l-0.3-0.6l-0.4-0.4l-0.2,0l-0.1,0.4l-0.1,0.4l0.1,0.6l0.7,0.6l0,0.3
			l-0.4,0.1l-0.3,0.6l0,0.6l0.6,0.4l0.3-0.1l0.4-0.2l0.5,0l0.3,0.1l0.6,0.8l0.5,0.2l0.3,0.4l-0.1,0.2l0,0.4l0.1,0.6l-0.3,0.8v0.4
			l0.3,0.6l0,0.6l0.1,0.3l0.5,0.3h0.4l0.3,0.4l0.6,0.3V22l0.1,0.4l-0.6-0.5l-0.7-0.4l-0.7,0l-0.4-0.3l-0.2-0.4v-0.6l-0.3-1l0.2-0.4
			v-0.5l-0.5-0.6l0-0.3l-0.3-0.8l-0.3-0.2l-0.4-0.1l-0.4-0.3l-0.5-0.1l-0.5,0.3l-0.6,0.1l-0.4-0.2l-0.3,0l-0.3,0.8l0.2,0.2l0,0.6
			l-0.3,0.2l-0.8-0.4l-0.9-1l-0.3,0l-0.2,0.3h-0.3l-0.2-0.4l-0.9-0.2l-0.2,0.3l0.1,0.5l0.3,0.6l-0.2,0.4l0.3,0.5l0.3,0.7l-0.1,0.6
			l0.2,0.3l0.2,0.7l-0.1,0.2l0,0.5l0.4,0.7l0.1,0.5l-0.1,0.7l0,0.3l0.3,0.5l0.2,0.7v0.3l0.6,0.5l0.2,0.4l0,0.5l0.2,0.2l0.4,0v0.3
			l0.2,0.4l0.5,0.3l0.2,0.1l-0.1,0.2h-0.6l-0.3-0.1l-0.4,0l-0.2-0.3l0-0.4l-0.1-0.3l-0.4-0.2l-0.3,0.1l-0.2,0l-0.1-0.3l0-0.5
			l-0.1-0.1l-0.2,0.3l-0.4,0.7l-0.6,0.2l-0.4,0l-0.6-0.4l-0.5,0l-0.2-0.4l-0.1-0.5l0.1-0.6l-0.4-0.9l-0.3-0.3l-0.1-0.6l0-0.4
			l0.3-0.3l0.1-0.3l-0.1-1.3l-0.3-0.6l-0.5-0.8l0-0.5l-0.5-1.1l-0.3-0.5l-0.4-0.2l-0.2-0.4l-0.4-0.1l-0.5-0.1l-0.3-0.3l-0.5,0.1
			l-0.3,0.3l0,0.7l-0.1,0.3l0.1,0.3l-0.1,0.4l-0.4,1l0,0.6l0.2,0.7l0.2,0.3l-0.1,0.8l-0.2,0.8l0.1,0.5l0,1l-0.2,0.1l-0.2-0.2
			l-0.2-0.1l-0.2,0.2l-0.4-0.1l-0.1-0.2l-0.3-0.2l-0.6-0.1l-0.4-0.3l-0.2,0l-0.1,0.1l0.1,0.4l0.4,0.3l0.1,0.3l-0.1,0.2l-0.1,0.2
			l-0.2,0l-0.2-0.2l-0.4,0l-0.3-0.2l0-0.7l-0.4-0.6L371,23l-0.2-0.4l-0.3-0.3l0-0.4l-0.2-0.4l-0.3,0.4l-0.2,0.5l-0.3,0.2l0,0.4
			l-0.2,0.4l-0.2,0.2l-0.3,0.1l-0.2,0.5l-0.5,0.8l-0.4,0.4l0,0.3l-0.3,0.3l-0.4,0.6l-0.3,0l-0.1-0.2l0.1-0.5l0.3-0.5l0.1-0.5
			l0.2-0.3l0.5-0.3l0.3-0.6l0.4-0.4l0.2-0.4l-0.1-0.3l-0.3-0.3l0.2-0.3l0.4-0.1l0.2-0.4v-0.4l0.2-0.5l0.4-0.9V19l0.2-0.7l0.1-1.3
			l-0.1-0.3l-0.8-0.1l-0.5,0.1L368,17l-0.5-0.2l-0.4-0.1l-0.2,0.2l0.1,0.4l0.4,0.4v0.7l-0.1,0.4l-0.3-0.3l-0.1-0.7l-0.4-0.3
			l-0.4-0.2l-0.8,0.6l-0.1,0.5l0.3,0.3l-0.2,0.4l-0.5,0V19l0-0.5l-0.1-0.5l-0.3-0.3l-1,0l-1,0.4l-1.1,0.1l-0.7-0.2l-0.4,0l-0.4,0.2
			l-0.4-0.1l-0.5,0l-0.5,0.4l-0.1,0.3l0.2,0.4l0,0.4l0.2,0.5l0.2,0.3l-0.1,0.4l-0.3,0.8l0.1,0.8l0.6,0.9l0,0.5l0.1,1l-0.1,0.2
			l-0.3-0.2l-0.3-0.5l-0.7-0.7l-0.3-0.2l0-1l0.1-1l0-0.5l-0.6-0.8l0-0.5l-0.1-0.3l-0.2-0.1l-0.7,0.2l-0.7,0.3l-0.7,0.2l-0.4,0.3
			l-0.2,0.7l0.1,0.5l-0.1,0.6l-0.4,0.5l-0.1,0.3l0.1,0.2h0.2l0.3,0.1l0,0.7l-0.3,0.5l-0.8,0.4l-0.5,0l-0.1,0.2l-0.1,0.5l-0.3,0.2
			l-0.2,0.3l0.2,0.3l-0.1,0.3l-0.4,0l-0.2,0.1l-0.8,0.1l-0.4-0.3l-0.1-0.3l0-0.4l-0.2-0.1h-0.2l-0.2-0.2l-0.1-0.3h-0.2l-0.3,0.2
			l-0.1,0.3h-0.3l-0.3,0.2l0,0.7l-0.1,0.4l0,0.5l0.2,0.8l-0.1,0.9l-0.2,0.3l-0.2,0.1l0.1-1.1l0-0.8l-0.2-0.4l0-1l-0.1-0.6l-0.2-0.2
			l-0.3,0.1l-0.4,0l-0.4,0.5l-0.4,0.1l-0.5,0.3l-0.2,0.4l0,0.4l-0.6,0.7l-0.2,0.1l-0.1-0.2l-0.5,0l-0.3,0.1l0,0.3l0.3,0.1l0.1,0.1
			l-0.3,0.1l-0.8,0l-0.4,0.2l-0.3,0.4l-0.8,0.3l-0.1,0.3l-0.3,0.3l-0.5,0.3l-0.4,0l-0.2,0.2l0.1,0.3l0.2,0.2l-0.1,0.3l-0.3,0.1
			l-0.2,0.3l-0.3,0.4l-0.4,0.2l-0.1,0.3l0.1,0.3l0.1,0.1l0,0.3v0.3l0.2,0.1l0.3-0.1l0.3,0.2l0.3,0l0.3-0.3l0.3-0.1l0.5,0.4l0.2,0.3
			l0.4,0l0.5-0.4l0.3,0l0.5,0.2l0.8,0l0.3-0.2l0-0.5l0.4-0.3l0.2,0v0.5l0.1,0.1l-0.1,0.3l-0.7,0.3l-0.6,0.3l-0.7-0.1l-0.5,0.1
			l-0.1,0.3l0.1,0.3l0.5,0.3h0.6l0.1,0.1l-0.1,0.4l-0.6,0.4l-0.7,0l-0.5,0l-0.4,0.5l0,0.5l0.4,0.2l-0.2,0.5l-0.4,0.1l-0.5,0.8
			l-0.2,0.4l-0.6,0.2l-0.4,0.6l-0.4,0.6l-0.5,0.5l0,0.2l-0.3,0.1l-0.4,0l-0.6-0.4l-0.3-0.2l-0.5-0.1l-0.2-0.3l-0.7-0.1l-0.6,0.1
			l-0.5,0.3l-0.5-0.1l-0.3-0.2l-0.6,0.1h-0.9l-0.7,0.3l-0.2,0.3l0.2,0.3l-0.2,0.3l-0.2-0.2l-0.4,0l-2.1,0.5l-0.4,0h-0.2l-0.3,0.2
			l-0.1,0l-0.4-0.1l-0.4,0.2l-0.2,0.3l-0.4,0.1l-0.2-0.1l0-0.2l-0.4-0.1l-0.3,0l-0.4,0.2l-0.4,0.1l-0.2-0.1h-0.4l-0.3,0.2l-0.4,0.1
			l0,0.3l0,0.3l-0.9,0.3l-0.5,0l-0.2,0.2l0.2,0.3l0.4,0l0.3,0.2l0,0.3l-0.3,0l-0.2-0.1l-0.2,0.2l-0.3,0.4l-0.5,0.3l-0.3,0.1l0.2,0.3
			l0.5,0.2l0.3,0.3l0.5,1.1l0.2,0.2l0.5,0l0.2,0.1l0.1,0.2l-0.3,0.2l-0.3,0.3l-0.1,0.3l0.2,0.4l0.5,0.1l0.6-0.1l0.5-0.4l0.2-0.3
			l0.2-0.1l0.3,0.1l0.1,0.3l-0.4,0.6l-0.5,0.3l-0.5,0.2l-0.2,0.2l0.1,0.4l0.5,0.2l0.4-0.2l0.7-0.2l0.2,0.1l0,0.2l-0.9,0.4l-0.6,0.2
			l-0.1,0.2l0.9,0.9l0.7,0.2l0.8,0l0.2-0.3l0.1-0.6l-0.3-0.3l-0.1-0.2l0.2-0.2l0.3,0l0.4,0.6l0.1,0.2l0,0.2l0.5,0.3l0.8,0.2l0.6-0.1
			l0.5-0.4l0.3-0.1l0.4,0.1l0,0.4l0.2,0.2l0.3,0l0.3,0.1l0.1,0.8l-0.2,0l-0.6,0.4l0,0.4l0.2,0.2l0,0.3l-0.4-0.2l-0.2-0.2l-0.3-0.1
			l-0.4-0.4l-0.9-0.3l-1.1,0l-0.7-0.1l-1,0.2l-0.1,0.3l0.5,0.4l0.8,0.1l0.6,0.1l0.7,0.6l0.9,0.4h0.5l0.4,0.1l-0.6,0.2l-0.3-0.1h-0.4
			l-1-0.6L328,55l-0.8,0l-1-0.5l-1,0l-0.6-0.4l-0.9-0.2l-0.9,0.3l0,0.6l-0.3-0.2l-0.4,0l-0.2,0.2l-0.2,0l-0.2,0.3v0.4v0.4l0.2-0.1
			l0.3,0l0.2,0.2l-0.3,0.2l-0.1,0.4l0.2,0.5l0.6,0.2l0.3-0.4l0.2-0.2h0.3l0.3-0.6l0.3-0.2h0.4l-0.2,0.3l-0.2,0.6l-0.4,0.2l-0.3,0.3
			l0.1,0.7l0.8,0.8l0.2-0.3l0.3,0l0.7,0.4l0.6-0.1l0,0.3l-0.2,0.3l-0.4,0.3l-0.2-0.2h-0.7l-0.4,0.1l-0.3,0.3l-0.7,0l-0.2,0.3l0,0.6
			l0.4,0.5l0.3,0.4l0.4,0.8l0.6,0.2l-0.2,0.2v0.1l0.3,0.2l0.4,0.5l0.5,0.4l0.6,0.2l0.5,0.5l0.4,0.2l0.1-0.2l0-0.3l-0.1-0.7v-0.4
			l0.2-0.2l0.1-0.6l0.1-0.3l0.3-0.1h0.2l0.1,0.5l0.2,0.5v0.3l0.1,0.3l0.2-0.1l0.1-0.3l0.4,0l0.5-0.3l0.2,0.2l0.4-0.1l0.1,0.2
			l-0.4,0.3l-0.2,0.5l0.1,0.5l0.4,0.1l0.2-0.1l0.3-0.9l0.1-0.3l0.3,0.1l0.3,0.7l0.3,0.2l0.4-0.2l0-0.3l0.3-0.4l0.5,0l0.2,0.2
			l0.1,0.5l-0.3,0.5l0,0.5l0.2-0.3l0.5-0.4l0.3-0.6l0.4-0.3l0.6-0.1l0.5,0.2l0.4,0.4l0.6,0.2l0.8,0.7l0.4,0.2l0.3-0.3l0.2,0l0.5,0.5
			l0.6,0.5l-0.1,0.5l0,0.2l0.2,0l0.1-0.1l0.2,0.1l0.3,0.3l0.4,0.3l0.3,0.3l0.1,0.4l0.1,0.1l0.2,0l0.1-0.3l0.2-0.1l0.3,0.2l0.2,0.4
			l0.6,0.5l0.4,0.5l0.3,0.1l0.2,0.3l-0.2,0.4l0.1,0.1v0.3l-0.3,0.3l-0.3,0.5l-0.3,0.3v0.2h0.4l0.1,0.1l-0.2,0.3l-0.3,0.2l-0.6,0.5
			l-0.2,0.1l0,0.2l0.2,0.2l0.2,0.4l0,0.2l0.9,0.8l0.2,0.4l0,0.5l0.1,0.2l-0.2,0.2l0,0.4l0.3,0.4h0.2l0.1,0.1l0.1,0.4l0.3,0.4
			l0.3,0.3l0,0.4l-0.2,0.4l-0.4,0.2l-0.4,0.3l-0.1,0.4l-0.3,0.4l-0.3,0l-0.5,0.4l-0.2,0.2l0.2,0.1l0.3-0.1l0.2-0.2l0.3,0l0.5-0.5
			l0.3,0l0.2,0l-0.2,0.6l-0.2,0.3l0.1,0.3l0,0.3l0.3,0.4l0.1,0.5l-0.2,0.5v0.3l0.2,0.3v0.2l-0.3-0.3l-0.2,0.1l0.1,0.6l0.3,0.5l0,0.2
			l-0.1-0.1l-0.3,0.2l0.1,0.3l0.1,0.2l0.4,0.1l0.2,0.2l0,0.3l-0.3,0.3l0,0.4l-0.4,0.4l-0.2,0.2l-0.4-0.1l-0.2,0.1l0,0.2l0.3,0.1
			l0.4,0l0.3,0.3h0.3l0.3,0.1l0.1,0.3l-0.1,0.6l0.2,0.6l-0.5,0.5l-0.1,0.4l0.2,0.2l-0.3,0.7l-0.5,0.2l-0.4,0l-0.3-0.3l-0.3,0
			l-0.6,0.4l-0.1,0.3l0.1,0.2l0.2-0.1l0.7,0.1l0.3-0.2L343,92l0.1,0.1l0,0.2l0.2,0.2l-0.2,0.2l-0.3,0l-0.1,0.2l0,0.3l-0.1,0.2
			l-0.4,0.1l-0.6,0.5l-0.5,0.3l0,0.3l0.4,0.3l0.6,0.1l0.6-0.2l0.4-0.5l0.3-0.5l0.3-0.2l0.1,0.1V94l-0.4,0.8l-0.6,0.7l-0.3-0.1
			l-0.8,0.1l-0.3,0.1l-0.3,0.4l-0.2-0.1l-0.5,0l-0.5,0.3v0.3l0.2,0.2l0.1,0.3l-0.1,0.4l0.2,0.7l0.2,0l0.1-0.3h0.2l0.2,0.2l0.1,0.3
			l0,0.4l0.3,0.3l0.7,0l0.4-0.3l0.1-0.2l0.2,0l0.4-0.1l0.2-0.3l0.1-0.5l-0.1-0.4l-0.2-0.2h0.3l0.2,0.1l0.1-0.2l0.1-0.7l0.2,0.3
			l0.3,0.3l0.3-0.1l0.2-0.4l0-0.8l0-0.5l-0.2-0.5l-0.2-0.4l0.2-1L345,93l0.1,0l0,0.4l-0.2,0.4l0.1,0.6l0.3,0.6l0,0.7l-0.1,0.7l0,0.4
			l0.2,0l0.1-0.1l0.4-0.3l0-0.2l0.5-0.7l0.5-0.2h0.2l0,0.2l-0.4,0.2l-0.3,0.2l-0.2,0.6l-0.4,0.3l0,0.2l0.2,0.1l0.4,0l0.2,0.1
			l0.2,0.4l0.3,0.1l0.5-0.2l0.4-0.3h0.3l0.2,0.1l-0.1,0.2l-0.6,0.3l-0.9,0.2l-0.7,0.1l-0.3,0.3l-0.3,0.2l0,0.3l0.2,0.1l0.6-0.1
			l0.3,0.1l0.3-0.1l0.4-0.3l0.6,0l0.1,0.1L348,99l-0.4,0.1l-0.4,0.3l-0.3,0l-0.2,0l-0.3,0.4l-0.2,0.4l-0.3,0.3l0,0.2h0.2l0.7-0.6
			l0.2-0.2l0.4,0l0.2-0.2l0.2,0l0.3,0.4l0,0.3l-0.1,0.2l-0.4-0.3l-0.2-0.1l-0.6,0.3l-0.2,0.3l0.1,0.3l0.5,0.1l0.4-0.1l0.3-0.2l0.2,0
			l0.4,0.5l0,0.3l-0.3,0.1l-1-0.3l-0.5-0.2l-0.1,0.2l0.1,0.3l0.5,0.3l0.6,0.6l0.2,0.5l-0.3,0l-0.4-0.5l-0.2,0l-0.1,0.2l0.1,0.3
			l0.6,0.5l0.7,0.5l-0.1,0.2l-0.3,0l0,0.2l-0.3,0l-0.5-0.5l-0.1,0l0,0.2l0.6,0.7l0.3,0.3l0.2,0l0.3-0.1l0.1,0.1l-0.3,0.4l-0.3,0.1
			l-0.5-0.2l-0.4-0.4l-0.5-0.3l-0.4-0.5l-0.3-1.1l-0.3-0.3l-0.4-0.1l-0.3-0.2l-0.4-0.2l-0.5,0l-0.2-0.2l-0.4,0l-0.6-0.1l-0.5-0.4
			l-0.5-0.1l-0.3-0.1l-0.3,0.1l-0.5,0.1l-0.6,0.5v0.3l0.3,0.2l0.3,0.4l0.2,0.6l-0.1,0.3l0.5,0.5l0.8,0.3l1,0.4l0.6,0.4l0.2,0.5
			l0,0.3l0.3,0.2h0.4l0.3,0.4l0.4,0.1l0.3-0.1l0.3,0.3l0.4,0l0.3-0.2l0.3,0.3l0.5,0l0.4-0.3l0.5,0l0.3,0.1l0.1,0.4l-0.4,0l-0.4,0.1
			v0.2h0.3l0.3,0.3l-0.4,0.2l0,0.2l-0.4,0.1l-0.2,0.3l-0.5,0.2l-0.2,0.2l0.1,0.2h0.5l0.3,0.1l0.1,0.2H348l-0.3,0.1l-0.1-0.1
			l-0.3,0.2l-0.4,0.6l-0.3,0l-0.2,0.3l0,0.2l0.4,0.1l0.3,0l0.2-0.1l0.2,0.1l0.1,0.3l0.3,0l0.3,0.1l0,0.2l-0.5,0.1l-0.4,0.1v0.2
			l0.7,0.1l0.3,0.2l0.1,0.3H348l-0.2-0.1l-0.1,0.1l-0.3,0l-0.2-0.2l-0.4,0l-0.5-0.1v-0.3l0.1-0.2l-0.3-0.5l-0.2-0.1l-0.2,0.1
			l0.1,0.5l-0.3,1l-0.3,0.4l0.1,0.2h0.2l0.4-0.3l0.1,0l-0.2,0.3l-0.4,0.2l-0.2,0.2l-0.3,0.1l0,0.3l-0.6-0.1H344l-0.5,0.1l-0.2-0.1
			l-0.6,0l-0.3,0.2l-0.7,0.3l-0.7,0.2l0.1,0.1l0.5-0.1l0.3,0l-0.2,0.2l-0.3,0.2l0.1,0.2l0.4,0.2l0.3,0.4l0.5-0.1l0.4,0.1l0.2-0.1
			l0.6,0l0.2-0.2l-0.4-0.3l-0.1-0.2l0.2-0.2l0.7,0l0.4-0.1l0.4,0.1l0,0.1l-0.2,0.1l-0.2,0.4l-0.1,0.3l-0.6,0.2l-0.1,0.2l0.1,0.3
			l1.1,0.9l0.5,0.4l0,0.2h-0.4l-0.1-0.1l-0.5-0.2l-0.6-0.4l-0.3-0.3l-0.5,0l-0.2,0.1L343,118l-1-0.6l-0.1-0.3l-0.3-0.3l-0.2,0
			l0.1,0.5l0.2,0.4l-0.1,0.1l-0.5-0.5l-0.5-0.7l-0.6-0.2l-0.2,0.1l0.1,0.2l0.3,0.1l0.1,0.4l0.7,0.6l0.3,0.2l0.3,0l0.4,0.1l0.1,0.2
			h-0.8l-0.5-0.2l-0.4-0.3l-0.2,0l-0.2,0.3v0.3l-0.3,0.3l-0.2,0v0.2l-0.2,0.2l-0.3,0.1l-0.6,0.7v0.2l0.2,0.1l0.4-0.1l0.5-0.6
			l0.4-0.3l0.4,0l0.7-0.1l0.2-0.2l0.2,0l0.1,0.3l0.3,0.2l0.4,0l0.5,0.6l0.3,0.1l0.4-0.2l0.3-0.3l0-0.4l-0.1-0.3l0-0.2l0.3,0l0.3,0.1
			l0.1-0.1l0.3,0l0.2,0.3l-0.1,0.2l-0.3,0l-0.3,0.1l0.1,0.4l0.3,0.2l0.7,0l0.1-0.1l-0.2-0.2l0-0.2l0.3-0.1l0.7,0.2l0.1,0.3l-0.3,0.3
			l-0.7,0.3l-0.8,0l-0.3,0l0,0.2l0.5,0.7l0.6,0.4l0.4,0.1l0.2-0.2l0.5-0.1l0.1,0.3l-0.1,0.1H346l-0.3,0.2l-0.8-0.3l-0.6-0.3
			l-0.6-0.6l-0.6-0.2l-0.5,0l-0.5-0.5l-0.6-0.2l-0.1-0.2h-0.3l-0.3,0.1l-0.5,0l-0.1-0.2l-0.3,0.1l-0.5,0.3l-0.2,0.5l-0.5,0.2
			l-0.4,0.3l-0.5,0.2l-0.3,0.5l-0.1,0.4l0.1,0.1l0.4-0.3l0.6-0.1l0.3,0.1l0.1,0.1l0.5,0l0.9-0.2l0.8,0l0.7,0.3l0.1,0.2l-0.3,0.1
			l-0.7-0.1l-0.4,0.1l-1.8-0.1l-0.5,0l-0.2,0.2l-0.8,0l0,0.3l0.2,0.2l0.4,0l0.2,0.1L338,123l-0.4-0.1l-0.5,0l0,0.2l0.3,0.2l0.5,0
			l1.2,0.4l0.4-0.1l0.2-0.2l0.3,0l0.1,0.1v0.3l0.1,0.4l-0.2,0.1l-0.4-0.2l-0.2,0.1l-0.2-0.1l-0.5,0.1l0,0.3l0.2,0.1l0.2,0l0.4,0.1
			l0.1,0.2l-0.5,0.2l-0.4,0l-0.5-0.3l-0.5,0.1l-0.1,0.3l0.2,0.4l0.3,0.1l0.3-0.2h0.5l0.4,0.2l0.1,0.2l-0.5,0h-0.6l-0.3,0.1l-0.4-0.3
			h-0.3l-0.3,0.4l0,1l-0.2,0.2l0.1,0.3l0.4,0l1.1-0.5l0.3-0.2l0.9-0.2l0.5-0.3l0.4-0.6l0.6-0.6l1.4-0.7l0.7-0.2l0.4,0.1l0,0.2
			l-0.2,0.2l-0.4,0l-0.7,0.3l-0.9,0.4l-0.9,1l-0.4,0.5l-0.8,0.2l-0.4,0.2l-0.8,0.5l-0.8,0.3l-0.3,0.1l-0.1,0.2l0.4,0l0.2-0.1
			l0.3,0.1l0,0.2l0.6-0.3l0.2-0.3l0.2,0l0.4,0.4l0.2,0l0.4-0.3l0.5-0.3l0.4,0.1l0.1,0.1l-0.1,0.3l-0.4,0l-0.4,0.3l-0.4,0.2l-0.5-0.1
			l-0.2-0.2l-0.3,0.1l-0.3,0.3l-0.6,0.3l-0.1,0.2l0.4,0.3h0.2l0.5,0.3l-0.3,0.4l0,0.2l0.3,0.1l-0.1,0.3l0.1,0.2h0.2l0.4-0.4l0.5-0.1
			l0.3-0.2l0.1-0.4l0.3-0.2l0.3,0l1.1-0.6l0.3,0.1l0.1,0.3l0.5,0.1l0.1,0.3l-0.4,0l-0.2-0.2L341,130l-0.2,0.2l-0.2-0.2l-0.2,0.1
			l-0.1,0.5l-0.3,0.1l-0.3,0.3l-0.7,0.1l-0.3,0.3l-0.5,0l-0.3,0.3l0.1,0.3l0.3,0.1l0.3-0.3l0.2,0l0.2,0.5l-0.1,0.4l-0.3,0.3l0,0.7
			l0.2,0.4l0.4,0l0.3-0.2l0.1-0.3l0.3,0.1l0.3-0.3h0.3l0.2,0.2l-0.2,0.1l-0.4,0.4l-0.4,0l-0.8,0.3l-0.4,0.2l0,0.3l-0.1,0.4l0.3,0.3
			l-0.2,0.3l-0.1,0.5l0.2,0.6h0.2l0.4-0.7l0.3-0.1l0.6-0.6l0.2,0l0.3-0.4l0.3-0.2l0.1,0.1l-0.3,0.2l-0.1,0.3l0.2,0.1l0.4-0.2
			l0.6-0.6l0.1-0.2l0.3,0.4l0.2,0l0.3-0.3l0.3,0l0,0.2l-0.3,0.3l0,0.9l0.3,0.2l0.2,0.4l-0.2,0.1l-0.3-0.2l-0.5-0.5l-0.2-0.4l-0.2,0
			l-0.2,0.2l-0.3,0l-0.1,0.2l0.2,0.2l0.2,0l0.4,0.5l0.2,0.1l-0.1,0.2H342l-0.4-0.3l-0.2-0.1l-0.4,0.1l-0.5,0.7l-0.4,0.2l-0.9,0
			l-0.1,0.1l0.2,0.2h0.5l0.4-0.2l0.8-0.1l0.5-0.3l0.4,0.1l0.4,0l-0.1,0.1l-0.4,0.3l-0.7,0l-0.6,0.2l-1.1-0.1L339,138l-0.1,0.4
			l0.1,0.4l0.5,0.1l0.5-0.1l0.1,0.1l-0.4,0.3l-0.6,0l-0.3,0.4l0.1,0.3l0.4,0.3l0.3-0.2l0.2-0.3l0.4-0.1l0.2,0.1l0.3,0l0.3-0.1
			l0.3-0.1l0.1,0.1l-0.3,0.2l-0.6,0.3l-0.3-0.1l-0.4-0.1l-0.2,0.1l0.3,0.3l0.3,0l0.2,0.1l-0.2,0.1l-0.7,0l-0.5,0.3l0.3,0.3l0.3,0.1
			l0.2-0.2l0.6,0l0.3,0.1l0.2,0l-0.2,0.2l-0.7,0.1l-0.4-0.1l-0.4,0.1l-0.1,0.3l0.2,0.3l0.3,0l0.4-0.2l0.4,0l0.4,0.2l-0.1,0.2
			l-0.7,0.3l-0.1,0.3l0.2,0.5l0.2,0l0.1-0.2l0.4-0.1l0.2,0.4l0.1-0.2l0.2-0.1l0.2,0.2l-0.2,0.3l-0.1,0.3l0.3,0.3l-0.5,0.6l-0.2,0
			l-0.3,0.3l-0.3,0.4l0.1,0.2l0.4,0l0.2-0.2l0.3,0.1l0.1,0.4l-0.2,0.2v0.1l0.4,0l0.2,0.1l0,0.2l-0.3,0.2l0.2,0.2l-0.1,0.4l-0.4,0.2
			l-0.2,0.2l0.5-0.1l0.2-0.2l0.2-0.2l0.7-0.2l0.2,0.2l-0.2,0.3l0.1,0.3l-0.4,0.3l-0.2,0.3l-0.3-0.1l-0.4,0.1l-0.2,0.3l0.3,0.3
			l0.4-0.2l0.3-0.2l0.5,0.1l0.1,0.2l-0.2,0.2l-0.6,0.3l0,0.5L342,150l-0.4,0.1l-0.1,0.3l0.4,0.3l0.6-0.2l0.4-0.3l0.5-0.2l0.3,0
			l0.1,0.3l-0.2,0.2h-0.4l-0.6,0.3l0,0.2l0.4,0l0.2,0.2l-0.4,0.4l0.1,0.4l0.4,0.2l0.7-0.5l0.3-0.1l0.1,0.2l0.4,0.3l0,0.5l0.4,0.2
			l0.1,0.2l-0.3,0.3l-0.4,0.1l-0.2,0.4l0.1,0.3l0.8,0.2l0.2-0.1l-0.1-0.2l0-0.2l0.3-0.1l0.3,0.2l0.3-0.3l0.4-0.1l0.2,0.2l0.3,0.1
			l0.3-0.1l0.2-0.4l0.3-0.2l0.3,0l0.4-0.1l0.4,0.2l0.3-0.3l0-0.2l-0.2-0.2v-0.3l0.2-0.1l0.3,0.1l0.2,0.4l0,0.5l-0.4,0.4l-0.3,0.1
			l-0.3,0.2l0.1,0.2l0.6-0.2l0.8-0.5l0.5-0.7h0.2l0.2,0.4l0,0.5l-0.4,0.1l-0.4,0.3l-0.4,0.3l-0.5,0.1l-0.1,0.1l0.1,0.1l0.5-0.2
			l0.6-0.4l0.1,0.1l-0.6,0.4l-0.3,0.1l0,0.5l-0.8,0.6l-0.1,0.2h0.2l0.3-0.3h0.2l0,0.2l0.2,0.5l0.1-0.4l0.3-0.2l0.2-0.3l0.3-0.1
			l0.1,0.1l-0.4,0.3l-0.1,0.4l0.1,0.2l0.4-0.1l0.2-0.4l0.2,0l0.3-0.1l-0.3,0.5l-0.1,0.5l-0.5,0.4l-0.1,0.4l0.2,0.1l0.5-0.4l0.4-1
			l0.4-0.3l0.1,0.1l-0.5,0.7l0,0.4l-0.2,0.3l-0.2,0.5l0.3,0.1l0.2-0.2l0-0.4l0.1-0.3h0.2l0.4,0.2l0-0.7l0.2,0l0.3-0.3l0.2,0l0,0.2
			l-0.2,0L353,157l0.1,0.2l0.7,0l1.3,0.7l0.2,0v-0.2l0.3-0.3l0.3-0.1l0-0.2l-0.2-0.1l-0.2-0.1l-0.4,0l-0.2,0.1l0-0.2l0.2-0.2l0-0.2
			l-0.5-0.3l-0.9-0.4l-0.1-0.2l0.1-0.1l0.4,0.1l0.2-0.1h0.2l0.1,0.3l0.4,0.4l0.4,0.3l0.3,0l0.5-0.2l0.4-0.3l0.1-0.2l-0.4-0.1l-0.5,0
			l-0.3-0.1l0-0.2l0.2,0l0.4,0l0.3-0.2l0-0.2l-0.4-0.2l-0.4-0.1l0.1-0.1l0.2,0l0.1-0.1l-0.1-0.2l-0.6-0.1l-0.2-0.3l0.1-0.1l0.4,0.2
			l0.5,0.1l0.7-0.1l0.4-0.2l0.1-0.2l-0.1-0.3l-0.4-0.2l-0.9-0.1l-0.4-0.2v-0.1l0.2,0l0.3,0.2l0.7,0.1l0.3-0.2l0.1-0.4l-0.4-0.2
			l-0.3-0.2l-0.1-0.3h0.3l0.3,0.2l0.2,0.2l0.4-0.2l0.3-0.3v-0.3l-0.2-0.1l-0.4-0.2l0.1-0.2l0.2-0.1l0.2,0.2l0.3,0.1l0.3-0.4l0-0.1
			l-0.5-0.1l-0.4-0.2l-0.1-0.2l0.2,0l0.3,0.2l0.4,0.1l0.3,0.2h0.3l0.2-0.4l0-0.2l0.3-0.2l0-0.2l-0.1-0.2l0.1-0.5l0-0.3l-0.3-0.4
			l-0.6-0.5l-0.5-0.1l-0.3-0.2v-0.2l0.3,0l0.3,0.2l0.6,0.5l0.4,0.3h0.4l0.2-0.1l-0.2-0.6l-0.3-0.5l-0.6-0.1l-0.8-0.4l-0.2-0.2l0-0.3
			l0.3,0l0.3,0.2l0.2,0.2l0.4,0l0.2-0.3l0.1-0.3l0-0.4l0.2,0l0.3,0.2l0,0.1l0,0.3l0.5,0.2l0.3,0l0.3,0.2l0.3,0l0.2-0.2l0.2-0.2
			l0.1-0.1l-0.1-0.3l-0.3-0.1l-0.8-0.1l-0.2-0.1l0-0.1l-0.1-0.3l-0.2-0.3l0-0.2l0.2-0.3l0.2,0l0.3,0.2l0.1,0.4l0.3,0.3l0.6,0
			l0.2-0.1V144l-0.1-0.2l-0.6-0.3l-0.4-0.3l-0.1-0.5l0.1,0l0.3,0.3l0.5,0.3l0.3,0.1l0.3,0.3l0.2-0.2l0-0.3l-0.1-0.3l-0.5-0.3
			l-0.3-0.3l0-0.4l0.2-0.2l0.2-0.2l0.3,0l0.2,0.3l0.6,0.5l0.3,0l0.2-0.2l0.3,0l0.4-0.2l0.1-0.4l-0.1-0.2l-0.3-0.1l-0.4-0.2l-0.5-0.3
			l-0.2,0l-0.4-0.1l0.1-0.3l0.1-0.2l0.3,0l0.3,0.3l0.2,0.1l0.3,0l0.4,0.5l0.3,0.1l0.2-0.1l0.1-0.2l0-0.3l0.1-0.4l-0.1-0.3l-0.2-0.1
			l0-0.2l0.3,0l0.3-0.1l0.1-0.4v-0.2l-0.3,0l-0.2,0.1l-0.2-0.2l-0.3-0.2l-0.4,0l-0.6-0.4l-0.1-0.2l0.2-0.3l0.5,0l0.5,0.1l0.4,0
			l0.1-0.3l0.2,0l0.4,0.2l0.1-0.5l-0.1-0.8l-0.2-0.6l-0.3-0.3l-0.1-0.4v-0.2l0.2-0.3l-0.1-0.5l0-0.2l0.1-0.2l0.2,0.1l0.1,0.3
			l0.4,0.2l0-0.2l0.2-0.1l0.3,0.2l0.2,0.6l0.2,0.2l0.3,0l0.5-0.6l0.3-0.6v-0.6l-0.1-0.4l-0.1-0.2l0.2-0.2l0.3,0l0.1-0.2l0.2-0.1
			l0.2,0.3l0.2,0.4l0.3,0.1l0.3-0.3v-0.3l0-0.2l0.2,0l0.2,0.3l0.2,0.5l0.2,0.2l0.4-0.2l0.2-0.3l0.2-0.1l0.2,0.2l0.4,0l0.4-0.2
			l0.1-0.3l0.2-0.1l0-0.2l-0.3-0.3l-0.3-0.6l-0.1-0.3l0.3-0.3l0.2,0.1l0.1,0.5l0.3,0l0.4-0.4l0.1-0.4l0.2-0.3l0.1-0.3l-0.3-0.4
			l0-0.2l0.2-0.3l0.3-0.1l0.1,0.1v0.1l0.3,0.4l0.4,0.1l0.2,0.2l-0.3,0.2l-0.4,0.3l-0.2,0.5v0.4l0.6,0.7l0.2,0.1l0.1-0.3l0-0.3
			l0.1-0.4l0.1-0.6l0.1,0l0.1,0.3l-0.2,0.4l0,0.3l0.3,0.5l0.4,0.1l0.4-0.2h0.3l0.1-0.3l-0.1-0.3l0.2-0.3l0.2,0l0.2,0.1l-0.1,0.3
			l0,0.3l0.3,0.2l0.4,0l0.4-0.5l0.7-0.5l0.2,0l0.3-0.2l0-0.4l-0.2-0.4l-0.2-0.1l-0.2-0.3l0.1-0.1l0.2,0.1l0.2,0.3l0.5,0.3h0.2l0-0.3
			l0.2,0l0.2,0.2l0,0.3l0.2,0.1l0.3-0.1l0.7-0.6l0.1-0.2l0-0.2l0.1-0.4l0.2-0.2l0.2-0.1l-0.1,0.2l0.1,0.2l0.1,0.1l0.3-0.2l0.4-0.5
			l0.1-0.4l-0.1-0.4l0-0.4l0.6-0.7l0.4-0.1l0.2-0.3l-0.1-0.3l-0.1-0.2l0-0.1l0.3,0.1l0.2,0.1l0.2,0l0.1-0.3l-0.1-0.2l-0.2-0.3
			l0.3,0.1l0.3,0.3l0-0.3v-0.3l0.1-0.3l0.4,0l0.3-0.2l0-0.3l-0.1-0.1l0.1-0.2l0.4,0l0.2-0.1l0.4-0.5l0.4-0.2l0.2,0l0.2,0.2l0.3-0.1
			l0.3-0.4l0.1-0.7l-0.1-0.6l-0.3,0l-0.1-0.1l0.2-0.4l0-0.5l-0.1-0.4l-0.3-0.2l-0.2-0.5l-0.1-0.2l0.1-0.4l0.2,0l0.2,0.2l0.2,0.5
			l0.2,0.4l0,0.4l0.3,0.5l0.3,0.1l0.2,0.2l-0.1,0.4l0.2,0.4l0.4,0.3l0.3,0.1l0.1-0.2l0.2-0.3l0.2,0l0.3,0.4l0.4,0.1l0.4,0l0.2-0.3
			l0.2,0.1h0.3l0.4-0.3l0.1-0.4l0.2,0v-0.2l0.3-0.1l0.2,0.1l0.5,0.6l0.1,0.3l0.3,0l0.2-0.2l0.3-0.1l0.1-0.5l0.2,0l0.1,0.2l0.2,0
			l0-0.3l0.2-0.1l0.1,0.1l0.3,0l0.1-0.3l0-0.3l0.3-0.1l0.4,0l0.2-0.1l0-0.3l0.2,0l0.1,0.2l0.3,0.2l0.2-0.2l0.1-0.4l0.2,0l0.2,0.4
			l0.2,0.1l0.3-0.5l0.2,0l0.1,0.2l0.3,0.1l0.3,0l0.2-0.3l0.2-0.1h0.4l0.5-0.3l0.3,0l0.2,0.3h0.2l0.2-0.4l0.3-0.3l0.5,0l0.2-0.2
			l0.5-0.1l0.3-0.2v-0.3l-0.2-0.4l0-0.3L402.2,116.9z"/>
		<polygon fill="#E6EEF4" points="360.4,146.3 360.1,146.1 359.6,146.1 359.4,145.9 359.1,146 359.3,146.3 359.6,146.3 359.7,146.5
			360.3,146.5 		"/>
		<polygon fill="#E6EEF4" points="365.5,136.6 365.3,136.4 365.1,135.9 364.9,135.6 364.8,135.9 364.9,136.3 365.1,136.7 365,137.3
			365.2,137.7 365.5,137.8 365.4,137.2 		"/>
		<polygon fill="#E6EEF4" points="361.5,145.2 361.5,145.6 361.7,145.4 361.6,145.1 		"/>
		<polygon fill="#E6EEF4" points="362.5,143.1 362.3,142.7 361.7,142.5 361.4,142.2 361.2,142.2 361.2,142.4 361.7,142.8
			362.2,143.1 362.3,143.3 		"/>
		<polygon fill="#E6EEF4" points="367.8,134.4 367.6,134.1 367.4,134.2 367.5,134.4 367.7,134.6 		"/>
		<polygon fill="#E6EEF4" points="359.1,148.8 359.2,149 359.2,148.8 		"/>
		<polygon fill="#E6EEF4" points="359.6,147.1 359.6,147.3 359.8,147.3 359.8,147.1 359.7,147.1 		"/>
		<polygon fill="#E6EEF4" points="343.9,154.3 344,154.6 344.4,154.4 344.2,154 343.8,153.9 343.6,154.1 343.6,154.3 		"/>
		<polygon fill="#E6EEF4" points="337.4,130.7 337.2,131.1 337.3,131.1 337.8,131 337.7,130.7 337.5,130.7 		"/>
		<polygon fill="#E6EEF4" points="337.1,130.1 337.3,130.4 337.7,130.4 337.7,130 337.4,129.9 		"/>
		<polygon fill="#E6EEF4" points="347,153.8 346.8,153.6 346.6,153.7 346.7,154.1 347,154 		"/>
		<polygon fill="#E6EEF4" points="352.7,159.3 352.9,159.4 353.1,159.2 353.4,159.2 353.6,158.9 353.4,158.8 353,158.8 		"/>
		<polygon fill="#E6EEF4" points="356.5,154.3 356.3,154.4 356.7,154.6 356.9,154.5 356.8,154.2 		"/>
		<polygon fill="#E6EEF4" points="348.1,154 348.4,153.8 348.4,153.6 348,153.6 347.7,153.9 347.8,154 		"/>
		<polygon fill="#E6EEF4" points="354,158.3 354.4,158.1 353.5,157.5 353.1,157.5 353.1,157.7 353.7,158.2 		"/>
		<polygon fill="#E6EEF4" points="350,157.3 350.2,156.9 350.2,156.6 350,156.6 349.9,156.8 349.6,157 349.7,157.5 349.9,157.5
			"/>
		<polygon fill="#E6EEF4" points="346.8,103.7 347,103.9 347.2,103.6 346.9,103.4 346.7,103.3 		"/>
		<polygon fill="#E6EEF4" points="417.5,73.3 417.8,72.9 417.6,72.6 417.1,72.5 416.9,72.7 416.8,73.1 417,73.3 		"/>
		<polygon fill="#E6EEF4" points="413.6,94.2 413.8,94.4 414.1,94.2 414.1,93.9 413.7,94 		"/>
		<polygon fill="#E6EEF4" points="417,82.3 416.8,82.7 416.8,83.4 417,83.9 417.4,84.2 417.7,84 417.7,83.5 417.9,83.3 417.9,82.8
			417.3,82.4 		"/>
		<polygon fill="#E6EEF4" points="414.8,85.8 414.1,85.9 413.6,86.7 413.6,87.2 414,87.4 414.4,87.6 414.9,88.1 415.3,88.1
			415.9,88.1 416.4,87.9 416.5,87.3 416.7,87 416.7,86.3 415.6,85.6 		"/>
		<polygon fill="#E6EEF4" points="419.3,85 419.3,85.4 419.6,85.5 420,85.1 420,84.8 419.7,84.8 		"/>
		<polygon fill="#E6EEF4" points="416.4,71.7 416.2,71.8 416.5,72.2 416.8,72.1 416.6,71.7 		"/>
		<polygon fill="#E6EEF4" points="422.4,59.6 422.1,59.6 422,59.8 422.2,60 422.3,59.9 		"/>
		<polygon fill="#E6EEF4" points="420.4,81.4 420.2,82 420.4,82.5 420.8,82.9 421.4,82.7 422,82.7 422.2,82.6 422.3,82.9
			422.7,83.1 423,82.6 423.2,82.4 423.2,81.6 422.9,81.4 422.7,81.7 422.7,82.1 422.4,81.9 422,81.3 422.1,81 421.7,80.5 422,80.3
			422.2,80.3 422.3,79.8 421.9,79.7 421.4,80.1 421,80 420.8,80.1 420.4,80.2 		"/>
		<polygon fill="#E6EEF4" points="421.8,61.6 421.9,61.7 422.1,61.6 422.3,61 422.3,60.7 422.1,60.9 		"/>
		<polygon fill="#E6EEF4" points="420.2,62.5 420,62.5 419.9,62.7 420.2,63.3 420.7,63.6 421,63.6 421,63.3 420.6,63.1 		"/>
		<polygon fill="#E6EEF4" points="410.6,97.5 410.9,97.6 411.3,98 411.9,98 412.1,98.2 412.3,98 412,97.5 410.7,96.9 410.2,96.1
			410,95.9 409.5,95.9 408.8,95.5 408.4,95.5 408.1,95.4 407.5,95.3 407.3,95.5 407.3,95.9 407.4,96 407.4,96.5 407.8,97.1
			408,97.7 408.7,97.9 409.3,98.4 409.8,99 410.3,99.3 410.6,99.3 410.7,99.6 411.3,99.8 411.4,99.6 411.4,99.3 411.7,99.1
			411.3,98.5 410.8,98.3 410.5,98.3 410.2,97.9 410.4,97.8 		"/>
		<path fill="#E6EEF4" d="M412.7,95.4l-0.7-0.5l-0.5-0.1l-0.7-0.4h-0.6l-1,0.3l-0.6-0.2l-0.8,0.1l-0.5,0c0,0-0.2,0.2-0.2,0.2
			l0.3,0.3l0.9,0l0.5,0.3l0.7,0.1l0.6,0.3l0.4,0l0.2,0.1l0,0.3l0.3,0.2l0.5,0l0.3,0.1l0.4-0.1l0-0.3l-0.2-0.3l0.1-0.4L412.7,95.4z"
			/>
		<polygon fill="#E6EEF4" points="404.3,106 404,105.9 404,106.1 403.9,106.4 404.2,106.6 404.3,106.4 		"/>
		<path fill="#E6EEF4" d="M401.4,109.7l0.3,0.1l0.4-0.1v-0.2l-0.4-0.1C401.6,109.5,401.4,109.7,401.4,109.7z"/>
		<polygon fill="#E6EEF4" points="407.2,114.5 407.4,114.5 407.7,114.3 407.7,114.1 407.3,114.3 		"/>
		<polygon fill="#E6EEF4" points="399.4,107.4 399.6,107.1 399.2,107.2 398.9,107.5 399.1,107.5 		"/>
		<polygon fill="#E6EEF4" points="403.2,109.1 403.5,109.2 404.1,108.7 404.2,107.2 403.8,106.8 403.6,106.3 403.1,106.3 401.5,107
			400,107.2 399.6,107.7 399.1,108 398.7,108.5 398.1,108.6 398.1,109 397.9,109.4 398,109.6 398.6,109.5 399.8,109.3 401,109.5
			401.4,109.1 401.9,109 402.5,109.4 		"/>
		<polygon fill="#E6EEF4" points="405.8,95.3 405.8,95.6 406,95.8 406.3,95.6 406.3,95.3 406.5,94.9 		"/>
		<polygon fill="#E6EEF4" points="421.3,71.7 421.1,71.4 420.7,71.7 420.7,71.9 421,72.2 421.1,72.5 420.9,72.8 420.8,73.5
			421.2,74.1 421.2,75 421,75.6 421,76.2 421.2,76.5 421.4,76.2 421.5,75.4 421.8,75.1 421.7,74.4 421.4,73.8 421.3,72.7
			421.4,72.1 		"/>
		<polygon fill="#E6EEF4" points="407.5,92.6 408.3,93.2 409.3,93.4 409.6,93.3 409.3,93 408.2,92.2 406.5,91.9 406.1,92
			406.1,92.3 405.4,92.6 405,92.9 405.4,93.2 406.1,93.3 406.8,94 407.5,94.3 408.6,94.2 410.2,94.3 410.9,94.1 410.9,93.9
			410.2,93.7 408.9,93.8 408.4,93.6 407.6,93.2 407.1,93.1 406.8,92.8 407.1,92.6 		"/>
		<polygon fill="#E6EEF4" points="342.4,86.8 342.1,86.8 342.1,87.1 342.3,87 		"/>
		<polygon fill="#E6EEF4" points="342.4,86.2 342.3,86.4 342.5,86.5 342.6,86.3 		"/>
		<path fill="#E6EEF4" d="M424.3,63.7l0-0.6l-0.6,0.7l0,0.5l-0.3,0.5c0,0,0.1,0.3,0.1,0.3l0.4,0l0.2-0.3l-0.1-0.3l0.1-0.5
			L424.3,63.7z"/>
		<polygon fill="#E6EEF4" points="343.3,82.4 343.2,82.1 342.6,81.8 342.3,81.8 342.2,82 342.4,82.3 342.8,82.3 343,82.6 		"/>
		<path fill="#E6EEF4" d="M343.3,88.2L343,88l-0.4,0.3c0,0,0.2,0.1,0.2,0.1l0.3,0L343.3,88.2z"/>
		<polygon fill="#E6EEF4" points="341.8,83.2 341.7,83.3 341.8,83.6 342.2,83.7 342.6,83.4 342,83.3 		"/>
		<polygon fill="#E6EEF4" points="341.9,87.8 342,88 342.4,88 342.5,87.8 342.3,87.8 		"/>
		<polygon fill="#E6EEF4" points="343.3,90.5 343.3,90.2 342.9,90.6 343.1,90.6 		"/>
		<polygon fill="#E6EEF4" points="342.5,91.2 342.9,91.1 342.8,90.8 342.5,91 		"/>
		<polygon fill="#E6EEF4" points="341.6,91.2 341.6,91.4 341.8,91.5 342,91.2 341.8,91 		"/>
		<polygon fill="#E6EEF4" points="342.8,85.4 342.6,85.1 342.5,84.7 342.4,85 342.4,85.6 342.7,85.6 		"/>
		<polygon fill="#E6EEF4" points="341.5,86.4 341.6,86.5 341.7,86.3 341.6,86.1 		"/>
		<polygon fill="#E6EEF4" points="423.1,44.3 422.9,45 422.9,45.5 423.1,45.5 423.3,45.3 424,45.3 424.4,44.9 424.4,44.3 424,43.9
					"/>
		<polygon fill="#E6EEF4" points="425.4,52.1 425,52.4 424.9,52.8 424.5,53.7 424.8,54.1 424.8,54.4 425.3,54 425.5,53.3
			425.5,52.7 425.6,52.3 		"/>
		<polygon fill="#E6EEF4" points="343.4,86.3 343.3,86.2 343.2,86.1 343.3,86.3 		"/>
		<polygon fill="#E6EEF4" points="323.8,52.6 324.3,52.8 324.7,52.8 324.4,52.3 324.1,52.3 323.6,51.8 323.1,51.9 322.8,51.8
			322.7,52 323,52.5 		"/>
		<polygon fill="#E6EEF4" points="340.9,89.7 341.1,89.9 341.6,89.7 341.7,89.7 341.7,89.4 341.2,89.5 		"/>
		<polygon fill="#E6EEF4" points="341.3,75.2 341.2,75.6 341.4,75.7 341.7,75.4 341.5,75.1 		"/>
		<path fill="#E6EEF4" d="M340.8,93.7l0.4,0l0.4-0.5l0.5-0.2l0.1-0.3l-0.2-0.1l-0.3,0.2l-0.6,0l-0.1,0.3c0,0-0.2,0.1-0.2,0.1
			L340.8,93.7z"/>
		<polygon fill="#E6EEF4" points="340.4,95 340.6,95.4 340.9,95.5 341.1,95.3 340.7,94.9 		"/>
		<line fill="#E6EEF4" x1="214.5" y1="96" x2="214.5" y2="96"/>
		<polygon fill="#E6EEF4" points="319.7,123.5 319.9,123.4 320.1,123.2 320,122.9 319.7,122.6 319.6,122.2 319.4,122 319,122
			319.2,121.5 318.9,121.1 318.5,121.1 318.3,121.1 318.6,120.8 318.4,120.6 317.7,120.9 317.5,121.3 317.6,121.9 317.4,121.9
			317.2,121.6 317.1,120.9 316.9,120.8 316.7,120.9 316.7,121.2 316.3,121.9 316,122.1 316.2,121.7 316.3,121.2 316.6,120.6
			316.7,120.2 316.2,120.4 315.6,121 315.6,121.2 315.2,121.7 314.9,121.6 314.9,121.3 315.2,120.8 315.8,120.5 316,120
			316.3,119.6 316.5,119.6 316.8,119.2 316.9,118.9 316.5,118.8 316,119.2 315.7,119.6 315.2,119.7 314.8,120.2 315,119.6
			315.4,119.1 315.3,119.1 314.8,119.2 314.5,119.4 313.8,119.2 313.3,119.3 313,119 313.6,119.1 314.6,118.8 314.2,118.6
			313.8,118.4 314.2,118.5 314.6,118.3 314.3,117.9 314,117.8 314,117.7 314.4,117.5 314.4,117.1 314.3,116.5 314.1,116.2
			313.5,116.4 313.2,116.6 312.9,116.4 312.8,116.6 312.6,116.5 312.8,116.1 312.9,115.6 313.5,115.5 313.7,115.2 313.8,114.6
			313.6,114.4 313.2,114.8 312.6,115.3 312.3,115.7 311.9,116 311.9,116.5 311.9,116.8 311.7,117 311.6,116.5 311.6,116
			311.9,115.6 312.4,114.9 312.5,114.5 312.4,114.4 312,114.7 311.8,115 311.8,115.2 311.3,115.4 311.1,115.8 311.1,116.1
			310.7,116.8 310.4,116.9 310.4,116.5 310.7,116 311.2,115.1 311.4,114.8 311.3,114.4 310.9,114.5 310.5,114.8 310.5,115.2
			310.3,115.4 310.2,115 310.5,114.4 310.7,114.1 310.5,113.8 310,113.6 310.1,113.4 309.9,113.2 309.2,113.2 308.9,113.3 309,113
			309.5,112.9 309,112.8 308.3,112.8 308,113.2 308,112.8 308.8,112.4 309.5,112.3 309.8,112.5 310.2,112.6 310.3,112.4
			310.5,111.9 310.1,112 309.6,111.8 309,111.5 308.7,111.5 308.6,112 308.3,112 308.3,111.8 308.5,111.6 308.6,111.3 308.1,111.3
			308,111.6 307.8,111.8 307.7,111.5 307.6,111.1 307.4,111 307.2,111.1 306.9,110.8 306.7,110.7 306.3,110.7 306.7,110.3
			306.9,110.2 307.7,110.7 307.9,110.6 307.9,110.4 306.4,109.7 305.8,109.5 305.7,109.3 306.1,109.3 307.1,109.6 307.8,109.7
			308.9,110 309.2,109.9 309,109.7 309,109.3 308.8,109.1 308.4,108.9 308,108.6 308.1,108.5 308.4,108.5 308.6,108.7 308.8,108.8
			309,108.7 309.6,108.7 309.7,108.6 309.6,108.4 309.3,108.2 309.3,108 309,107.7 308.6,107.7 308.2,108 307.5,108 307.4,108.2
			307.1,108.2 307,107.9 307.5,107.6 308.1,107.6 308.3,107.5 309,107.4 309.1,107.2 308.7,107.1 308.2,106.9 308,106.7
			308.4,106.9 308.9,106.8 309.3,106.8 309.5,106.9 310.2,107.6 310.5,107.7 310.8,107.5 311,107.8 311.2,107.9 311.5,107.7
			311.7,107.6 311.9,108.1 312.3,108.1 312.5,107.9 312.5,107.3 312.2,106.9 312.2,106.5 311.6,106.2 311.2,106 310.9,105.8
			310.6,105.9 310.3,106 309.9,105.8 309.2,105.1 308.7,105 307.7,105.1 307.3,105 308.2,104.8 308.5,104.5 309,104.5 309.1,104.6
			309.5,104.6 309.9,104.3 310.3,104.1 311.1,104.2 311.4,104.4 312,104.5 312.3,104.1 312.4,103.7 312.1,103.2 311.9,102.6
			311.4,101.5 311.3,100.9 311,101 310.9,100.9 310.6,101 310.5,101.2 310.2,101.7 310.4,101.9 310.4,102.2 310.2,102.4
			309.7,102.6 309.3,103 308.8,102.9 308.5,102.8 308,102.9 307.7,103.4 307.1,103.9 306.8,103.7 306.5,103.6 306,103.8
			305.7,103.9 306.2,103.4 306.5,103.3 306.9,103.5 307.3,103.3 307.6,102.8 308.1,102.6 308.4,102.7 308.9,102.4 309.2,102.1
			309.3,101.5 309.2,101.3 308.9,101.3 308.5,101.5 308.1,101.4 307.5,101.4 306.7,102.1 306.1,102.7 305.2,102.8 305.4,102.6
			306.1,102.4 306.3,102 306,101.9 305.5,102 306.3,101.5 306.7,101.5 307.5,101 308.1,101 308.5,100.8 309.3,100.8 309.7,100.5
			309.9,100.2 310,99.9 310.3,99.8 310.3,100.3 310.5,100.5 311.1,100 311.1,99.5 311,99.2 310.6,99 310.3,98.5 309.7,97.8
			309.5,97.3 309.1,97.3 308.7,97.5 308.4,97.7 308,97.9 307.5,98.3 307,98.4 306.6,98.7 306.5,98.6 306.6,98.2 306.9,97.9
			307.4,97.9 308,97.3 308.2,97 308.2,96.8 307.8,96.9 307.1,97.2 306.3,97.8 306,97.8 305.8,98.1 305.7,98.4 305.3,99.3
			304.4,100.3 303.5,100.8 303.5,100.6 303.9,100.2 304.6,99.5 304.9,98.9 305.2,98.7 305.1,98.4 304.9,98.4 304.8,98.3 304.5,98.4
			304.1,99.1 303.4,99.8 303.2,99.8 303.3,99.5 303.4,99.2 303.9,98.7 304,98.3 304.2,98 304.6,97.9 304.9,98.1 305.4,98.1
			305.5,97.9 305.9,97.5 306.4,97.3 306.9,96.6 307.2,96.2 307,95.7 307.1,95.3 306.9,95.2 306.2,95.6 305.8,96 305.9,96.5
			305.7,97.1 305.5,97.2 305.6,97 305.6,96.8 305.2,96.5 304.7,96.5 304.3,96.9 303.8,96.8 303.2,96.9 302.8,97.2 302.1,97.2
			302.6,96.9 303,96.7 303.5,96.2 303.3,95.9 303.1,95.9 302.5,96 302.8,95.6 303.1,95.6 303.5,95.4 303.7,94.9 304.1,94.8
			304.3,94.6 304.6,94.5 305,94.9 305.4,95.2 305.7,95.2 306.2,94.6 306.6,94.2 306.6,94 306.1,93.4 305.9,92.9 305.8,92.4
			305.4,91.9 305,91.6 304.5,90.8 304.3,90.9 304.3,91.3 304,91.7 303.8,91.8 303.6,92 303.6,92.4 303.1,92.7 302.9,93.1
			302.9,93.6 302.4,93.9 302,94.4 301.9,94.9 301.7,95.2 301.5,95.2 301.6,94.5 302.1,93.7 302.5,93.6 302.5,93.3 302.3,93.2
			302.1,92.9 301.7,93 301,94 300.8,94.4 300.3,94.5 300.3,94.4 300.6,94.1 301,93.4 301.1,93 301.7,92.4 302,92 301.9,91.7
			302,91.4 301.4,91.7 300.6,92.4 300.5,92.9 300.2,93.3 300,93.2 300.1,92.7 300.4,92.3 300.2,92.1 300.2,91.9 300.5,91.8
			301.5,91.2 302.3,90.4 302.4,90.1 302,90 301.3,90.5 301.2,90.9 300.8,91.1 300.8,90.8 300.6,90.6 299.8,91.2 299.4,91.7
			299,92.5 298.4,93 298,92.9 298.4,92.6 299,92.1 299.3,91.6 299.1,91.5 298.7,91.5 299.2,91.1 299.8,91 300,90.7 300,90.4
			299.6,90.6 299,90.8 298.7,91.1 298.4,91 299.3,90.5 299.2,90.2 298.6,90.2 298.9,89.8 299.4,89.8 299.7,90 300.3,90 300.5,89.4
			301.1,89.2 301.1,88.8 301.3,88.4 301.3,88 300.9,87.9 300.7,87.7 300.1,87.5 299.6,88.1 298.8,88.3 298.4,89 297.4,90 297.1,90
			297.2,89.6 297.5,89.5 298,89.2 298.6,88.3 299.2,87.9 299.6,87.5 299.4,87.2 298.5,87.3 297.5,87.9 298.4,87.1 299.2,86.9
			299.7,87 300.1,87.1 300.6,86.6 300.5,86.2 300.4,85.9 300.4,85.5 300.4,85.2 299.8,84.9 299.6,84.5 299.2,84.4 299,84.6
			298.8,84.6 298.7,84.2 298.4,84 297.9,83.7 297.9,83.3 297.1,83 296.9,83 296.6,82.7 295.9,82.7 295.1,82.8 294.6,83.3 294,83.3
			293.4,84.2 293.6,84.4 294,84.5 295,85.4 295.1,85.7 295.5,85.8 295.8,86.3 295.5,86.3 295.1,86.1 294.5,86.1 294.5,85.7
			293.6,84.9 293.2,84.9 292.9,85.1 293,84.7 293.2,84.1 292.6,83.9 292.3,84 292.4,85 292.7,85.5 292.7,86.2 292.6,86.6
			292.6,86.1 292.2,85.4 291.7,85.9 291.5,86.4 291.8,86.8 291.4,87 291,86.8 290.4,86.7 290.7,86.3 291.2,85.9 291.9,84.9
			292.1,84.5 291.7,84.1 291.6,83.6 291,84.2 290.7,84.5 290.5,84.2 290.6,83.6 290.1,83.4 289.8,83.6 289.7,84 289.9,84.6
			289.9,85.2 289.6,85 289.6,84.3 289.4,84.2 289.2,84.6 288.7,84.8 288.7,85.2 288.3,85.7 287.9,85.8 287.7,86.2 287.3,86.2
			287.7,85.8 287.7,85.4 287.5,85.2 287.3,85.2 287.2,84.9 287.6,84.8 287.9,85 288,84.7 287.9,84.4 288,84.2 288.5,84 289.3,83.3
			289.4,82.9 289.7,82.5 289.5,82.5 289.2,82.5 288.5,83 287.9,83.6 287.6,83.6 287.9,83.2 288.3,82.7 288.6,82.4 289.1,82.2
			289.5,81.8 289.9,81.8 290.3,81.2 290.3,80.9 289.9,80.5 289.9,80 290.1,79.6 290.8,78.8 290.9,78.5 290.7,78 290.2,77.8
			290.1,77.5 290.5,76.8 290.8,76.4 291,76.1 291.1,74.9 291.2,74.7 291.1,74.3 290.3,74.1 289.4,74.1 288.6,73.8 288,74.3
			287.3,74.3 286.5,74.7 285.1,75 285,75.3 285.5,75.9 285.5,76.4 285.2,76.7 285,76 284.8,75.8 284.5,75.2 283.9,75.2 283.5,75.6
			283.6,75.9 283.3,76.2 283.2,75.8 283.3,75.3 283,75.2 282.2,75.4 282,75.9 282,76.2 282.7,76.7 283.2,77.5 283.9,77.9
			283.6,77.9 282.8,77.5 282,76.5 281.7,76.5 281.6,76.8 280.6,76.8 280.5,76.9 280.7,77.2 281.3,77.2 281.4,77.5 281.6,78
			282.3,78.6 282.4,79 282.9,79.3 282.3,79.3 282,78.8 281.3,78.4 281.2,78 280.7,77.5 280.1,77.4 279.7,77.9 279.6,78.3 279.2,79
			279,79.8 279.3,80.2 278.8,80.4 278.7,80.8 279,81.1 279.2,81.6 279.6,81.6 280.5,81 280.8,81.1 281,81.4 280.5,81.5 280.3,81.7
			280.4,82 280,82 279.6,82.5 279.6,83 279.3,83.4 279,83.2 279.1,82.9 278.8,82.1 278.4,82 278.1,82.5 278.2,82.8 277.9,83.2
			277.3,83.4 277.1,83.6 276.9,83.2 276.7,83.3 276.7,83.9 277,84.4 277.1,85.1 277.2,85.3 277.2,86 277.6,86.1 277.9,86.3
			277.8,86.7 278,87 278,87.5 277.5,87.9 277.2,88.2 277.1,89.2 276.8,89.5 276.2,90.5 276.2,90.9 275.6,91.5 275.7,91.2
			275.7,90.7 275.9,89.9 276.3,89.5 276.2,89.3 276,89.4 275.7,89.5 275.3,89 275.1,88.9 275.4,88.8 275.7,88.7 276.1,88.6
			276.1,88.4 276.4,88.4 276.6,88.8 276.8,88.3 276.8,87.8 276.3,87.5 276.2,87.2 275.7,86.5 275.7,85.8 275.5,85.5 275.4,84.7
			275.1,84.2 275.2,83.8 275.4,83.6 275.8,82.9 275.8,82.3 276.3,81.7 276.7,81.2 277.2,81 277.2,80.5 276.9,80.1 276.7,79.5
			276.7,78.9 277.3,77.8 277.6,77.7 278.4,77.1 279.4,75.9 280.4,74.9 281,74.8 281.5,74.2 281.7,73.8 282.3,73.8 283.2,73.4
			283.9,73.1 284,72.7 283.9,72.4 282.8,71.8 282.2,71.4 281.3,71.4 281,71.2 280.6,71.4 279.9,71.2 279.4,71.4 278.4,71.5
			276.9,72 276,72.8 275,73.2 274.9,73.8 275.1,74.3 274.7,74.1 274.3,74.1 273.9,74.5 273.4,74.6 272.9,75.2 272.9,75.7
			272.5,75.7 271.9,76.7 272.1,77 271.8,77.4 271.6,77 271.3,77 271.1,77.8 270.9,77.8 270.5,77.8 270.1,78.3 269.9,78.5
			269.4,79.3 268.9,80.1 268.9,80.6 269.2,80.5 269.4,80.5 269.3,80.9 268.8,80.9 268.1,81.3 267.9,81.8 267.5,81.9 267.4,82.3
			267.4,83.3 267.1,83.8 266.6,83.8 266.5,84.4 266.5,84.8 266,85.1 265.8,86 266.1,86.5 267.1,87.1 267.6,87.1 268.3,87.5
			268.7,87.5 269.3,87.9 270,87.9 270.1,88.6 270.8,89.1 270.9,89.4 271.2,89.7 270.5,89.7 270.2,89.9 269.3,89.9 268.3,89.5
			268.2,89 267.7,88.6 266.8,88.5 266.6,88.3 266.1,88.1 266,88.3 266.2,89 266.2,89.3 265.9,89.3 265.7,89.7 265.9,90.5 266,91.2
			265.9,91.8 266,92.3 266.7,92.7 267.2,93.2 267.2,93.4 266.9,93.2 266.7,93.1 266.9,93.6 267.3,94 267.5,94 267.6,93.7 268,93.6
			268.4,93.7 268.8,94 269.1,94.2 269.3,93.9 269.2,93.6 269.3,93.2 269.6,93.2 269.8,93.4 269.7,93.8 269.8,94.2 270.1,94.1
			270.3,93.6 271,93.5 271.4,93.2 271.6,93.3 271.3,93.6 270.4,94.1 270.3,94.6 270.8,94.9 270.9,95.7 271.6,96.2 272.3,96.3
			272.6,96.1 272.1,95.8 272.3,95.7 272.8,95.8 273.3,96.1 273.6,96 273.9,95.6 274.4,95.1 274.8,95.1 274.8,95.3 274.5,95.5
			273.7,96.2 273.7,96.5 274.4,96.9 274.7,97.3 275.2,97.3 275.8,97.4 276.2,97.7 276.6,97.5 277.5,97.4 277.7,97.8 278.2,98
			278.5,98.4 278.8,98.3 279.6,98.9 279.8,98.6 280,98.7 280.3,98.4 280.2,98 279.7,97.7 279.4,97.2 279.1,96.8 278.1,96 278,95.6
			278.4,95.8 278.6,96 278.9,96.2 279.4,96.7 279.7,96.8 279.8,97.1 280.2,97.6 280.8,98.2 280.9,98.6 281.1,98.6 281.5,99.1
			281.8,99.7 282.2,99.7 282.4,99.6 282.1,99 281.7,98 282.5,98 283.4,98.5 284.3,98.5 284.3,99 284.1,99.2 284.7,99.5 285.2,99.5
			285.3,99.7 286.6,99.7 286.9,99.4 287.3,98.8 287.4,98.4 287.5,97.9 287.3,97.6 286.8,96.6 286.5,96.6 286.1,96 286.2,95.4
			286.4,95.3 286.5,95 286.6,94.9 286.9,95.1 287,95.6 287.3,95.1 287.3,94.3 287.6,94 287.9,94 288,94.5 288.1,94.8 288,95.1
			287.5,95.3 287.4,95.9 287.7,96 287.9,96.4 287.9,96.8 288.6,97.5 288.9,97.6 289,97.2 289.2,97.1 289.5,97.3 290,97.1
			290.1,97.4 290,97.7 290,98.2 289.7,98.9 289.6,99.1 289.1,99.9 288.8,100.8 288.8,101.1 288.9,101 289.2,100.5 289.6,100.7
			289.7,100.8 290,100.8 290.3,101.2 291,101.3 290.5,101.6 290.4,101.9 290.2,102 290,101.7 289.6,101.9 289.7,102.3 290,102.4
			290.1,102.6 290.6,102.6 290.6,103 290.8,103.2 290.8,103.6 291,104 291.6,104.2 291.9,104.5 292.1,104.8 291.9,105.3
			291.5,105.7 291.1,105.7 290.9,105.9 290.6,105.7 290.2,105.5 290,105.6 289.6,106.2 289.8,106.3 289.9,106.6 289.6,106.9
			289.6,107.2 289.9,107.2 290,107 290.3,106.9 290.8,106.9 291.2,106.7 291.6,106.7 291.9,106.2 292.1,106 292.2,106.6
			292.4,106.8 292.8,106.6 293.1,106 293.6,105.6 293.9,105.8 293.8,106.1 293.5,106.3 293.2,106.5 293.5,106.6 293.5,106.8
			292.9,107 292.8,107.2 293.5,107.1 293.7,107.5 293.2,107.9 293.3,108.6 293.6,108.7 293.8,109.1 294.4,109 294.6,108.7
			294.4,108.3 294.4,108 294.7,107.9 295.3,108.4 295.3,108.7 295,109.2 295.4,109.5 295.5,109.7 294.7,110 294.6,110.3
			294.9,110.6 296,110.7 296.2,110.8 296.2,111.3 296.2,111.6 296.5,111.6 296.5,111.2 296.8,110.9 297.1,110.8 297.1,111.2
			296.8,111.6 296.8,112 296.4,112.1 296.1,112.9 296.2,113.1 296.5,113.2 296.5,113.7 296.2,114.2 296.2,114.7 296.4,114.8
			296.3,115 296.2,116 295.9,116.4 296.2,116.9 296.1,117.3 295.3,117.6 294.5,117.4 294.2,117.6 294.1,118 293.1,118.8
			293.1,119.2 293.8,119.6 293.6,119.7 293.2,119.8 292.8,119.5 292.6,119.5 291.9,120.2 291.5,120.4 290.5,121 289.7,121.7
			289.4,121.7 289.2,121.9 289,122.6 289.4,123.1 289.4,123.5 289.9,124.2 290,125.6 289.8,125.9 289.5,125.7 289.2,126
			289.1,126.5 289,126.1 288.9,125.3 288.7,125 288.2,125.3 288,125.8 287.5,126.3 287.1,126 287.2,125.8 287.2,125.6 286.5,125.6
			286.3,126.1 285.9,126.5 285.3,126.4 284.9,126.4 284.7,126.1 284.3,126.1 283.9,126.4 283.3,126.1 283,126 282.6,125.6
			282.1,125.1 281.5,125 280.9,124.2 280.7,124.4 280.8,124.7 280.7,125 280.4,124.9 280.3,125 280.3,125.3 280.5,125.7
			280.4,126.1 280.2,126.1 279.7,126.2 279.4,126.6 278.8,126.6 278.4,127 278.4,127.6 277.9,127.8 277.7,128.5 278.1,129.5
			278.6,130 278.8,129.8 279.4,130.4 279.3,130.8 280.1,130.8 280.6,131 280.9,130.8 281.4,130.8 281.6,130.5 282.2,130.5
			282.5,130.4 283,130.5 283.2,130.3 283.2,129.7 283.4,129.3 283.6,129.3 284.2,130.2 284.6,130.2 284.9,130.6 285.6,130.8
			285.7,130.5 286.1,130 286.3,130 286.7,129.6 287.2,129.4 287.1,129.8 287.1,130.3 286.8,130.8 286.8,131.3 287.3,131.1
			287.6,130.1 287.7,130.3 288,130.1 288.4,130.3 288.1,130.9 288.2,131.3 288.3,130.8 289.2,130 289.3,130.3 288.8,130.8
			288.7,131.2 289.2,131.5 289.4,132.2 289.4,132.7 289.5,133.2 289.9,133.1 289.9,133.7 290.2,133.9 290.5,133.3 290.4,134.2
			290.1,134.6 290.6,135 290.6,134.6 290.9,134.1 291.2,134 291.1,134.2 291.2,134.8 291.6,135.4 292.4,135.3 292.2,135.6
			291.2,136.3 290.5,136.2 290.3,136.5 290.8,136.7 290.9,137.4 291.2,137.8 291.5,138.2 291.9,138.3 291.8,138.6 292.4,139
			292.6,139.2 293,139.3 293.8,139.8 294.3,139.8 294.3,140.1 294.6,140.3 294.7,140.1 294.9,139.9 295.4,140.1 295.1,140.3
			294.9,140.5 295.1,141 295.5,141.2 295.7,141.2 295.7,141.6 296.3,142.2 296.7,142.2 297,142.5 297.1,142.8 297.9,143.2
			298.1,143 298.4,143.1 298.7,143.1 299.2,143.3 299.3,143.6 300.1,144.3 300.4,144.3 300.8,144.6 301.7,144.9 302.2,145.2
			302.6,145.2 302.8,145.1 302.8,144.8 302.5,144.4 302.2,144 302.5,143.8 302.9,143.9 303,143.6 302.9,143.3 302.6,143.4
			302.5,143.2 302.6,142.6 302.4,142.5 302,142.9 301.9,142.6 301.8,142.3 301.5,142.3 302,141.8 301.8,141.2 301.5,141.1
			301.1,141.1 301.2,140.7 300.9,140.1 300.7,139.8 300.2,139.8 300.5,139.4 300.2,139.3 299.9,139.3 300.1,139 299.7,138.6
			299.1,138.4 298.9,138.5 298.8,137.8 298.7,137.4 298.7,137.2 298,136.5 297.8,135.9 297.9,135.4 298.2,135.6 298.5,135.2
			299,135.4 299,135.9 299.4,136.6 300,136.9 300.3,137.1 300.3,137.5 300.6,137.7 300.5,137.3 300.3,136.6 300.3,136.4
			300.6,136.2 300.8,136.6 300.8,136.9 301.1,137.1 301.3,138 301.7,138.1 301.7,138.3 302.1,138.7 302.5,139.6 302.8,139.3
			302.7,138.8 302.6,138 302.8,137.5 302.8,137.8 303.1,138.7 303,139.1 303.1,139.6 303.3,139.7 303.7,139.9 303.8,139.6
			303.6,139.3 303.6,139.1 304,139.2 304.1,139.7 304.1,140 304.2,140.2 304.3,139.8 304.6,139.6 304.6,140.4 304.8,140.7
			305.2,140.7 305.4,140.4 305.4,140.9 305.2,141.2 305.4,142 305.7,142.4 306.2,142.4 306.2,142.1 306.1,141.9 306.1,141.3
			305.8,140.2 306.3,140.2 306.5,140.6 307,140.7 307.1,140.6 306.8,140 307,139.6 307.1,138.7 306.7,137.8 306.8,137 306.9,136.3
			307.1,137.1 307,137.7 307.2,138.3 307.9,139.1 308,138.9 307.9,138.3 308.2,137.8 308.2,137 308.6,136.8 308.4,136.6
			307.8,135.7 307.7,135 307.4,134.9 307.6,134.5 307.2,134 306.9,133.6 307.5,133.5 307.6,133.3 308.1,133 307.8,132.8
			307.5,132.9 306.8,133 306.6,132.7 306.7,132.6 306.8,132.3 307.1,131.9 307.2,131.5 307,131 306.7,131 306.7,131.3 306.4,131.7
			306.4,131.3 306.2,131.4 305.6,131.5 305.5,131.3 305.9,131.1 306,130.9 305.8,130.6 305.7,130.1 305.4,129.8 305.1,129.9
			305.1,130.4 304.9,130.8 304.8,130.7 304.8,130 304.7,129.6 304.4,129.6 304.5,129.1 304.3,129.1 304.3,128.9 304.3,128.9
			304.2,128.6 304,128.5 304.1,128.2 304.6,128.2 304.9,128 304.6,127.7 304.1,127.7 303.9,127.5 304.2,127.2 304.6,126.9
			304.6,126.7 304.4,126.5 303.6,126.5 303.5,126.7 303.2,127 302.2,127.3 302.7,126.9 303.4,126.3 303.7,125.8 303.7,125.5
			303.3,125.5 303,125.4 303.2,125.2 303.1,124.9 302.8,125 302.7,124.7 303,124.3 303,123.7 302.5,123.5 302,123.4 301.4,123.3
			301.1,123 301.8,123.1 302.2,123 302.5,122.8 302.7,123.1 302.8,123.4 303.2,123.4 303.7,123.7 303.8,124 303.6,124.3
			303.7,124.7 304.2,125.3 304.4,125.3 304.5,124.8 304.8,125.1 305.3,125.2 305.6,125.1 305.7,124.8 305.5,124.8 305.5,124.4
			305.3,123.9 305,123.5 304.6,123.4 304.8,123.1 304.8,122.7 304.5,122.4 304.6,122.2 304.8,122.4 305,123 305.2,123.3
			305.6,123.2 305.6,123.1 305.7,122.9 306,123 305.9,122.5 305.6,122 305.1,121.7 305.6,121.7 305.9,121.9 306.1,122.2 306.5,122
			306.4,121.7 306.5,121.3 306.6,121.3 306.8,121.6 307.1,121.8 307.1,122.1 306.9,122.2 306.8,122.7 306.9,122.8 307.1,122.8
			307.3,123 307.3,123.3 307.1,123.3 306.9,123.5 307.2,123.7 307.5,123.6 307.6,123.8 307.5,124.2 307.7,124.4 307.9,124.5
			308.3,124.3 309.3,123.7 309.7,123.1 309.7,123.5 309.5,123.7 309.4,124 308.8,124.3 308.1,125 308.1,125.2 308.4,125.4
			309,125.3 309.7,124.8 310,124.8 310.7,124.5 310.9,124.1 311.2,123.9 311.7,123.5 311.9,123.5 312,123.7 311.7,123.8
			311.3,124.3 311.1,124.7 310.8,124.9 310.3,125.3 309.8,125.4 309.5,125.5 309.1,126.1 309,126.3 309.2,126.5 309.5,126.3
			309.9,126.3 310.2,126.4 309.8,126.5 309.5,126.7 309.2,126.8 309.2,127.1 309.5,127.2 309.8,127 310,127 309.7,127.4
			309.3,127.5 309.1,127.8 309.2,128 309.6,128.1 309.9,128 310.3,128 310.4,128.1 310.2,128.2 310.2,128.4 309.7,128.6
			309.5,128.8 309.6,129.1 309.8,129.4 309.8,129.8 309.9,129.9 310.2,129.5 310.4,129 310.7,128.7 310.8,128.8 310.7,129
			310.7,129.2 310.5,129.4 310.5,129.6 310.7,129.8 310.5,130.1 310.8,130.4 311,130.4 311.1,130.1 311.5,130 311.6,129.9
			311.6,130.2 311.4,130.5 311.5,130.6 311.8,130.7 311.8,131 311.9,131.1 311.9,131.3 312.1,131.4 312.3,131.2 312.8,131
			312.9,130.6 312.8,130.3 312.5,129.9 312.6,129.9 312.8,130 313,130 313,129.7 312.8,129.3 312.9,129.1 313.1,129 313.1,128.7
			313.1,128.4 312.8,128.4 312.5,128.2 312.6,128 312.7,128.1 313,128.2 313.3,127.9 313.2,127.7 312.9,127.6 312.8,127.5
			313.1,127.5 313.4,127.3 313.4,126.5 313.5,126.2 313.6,126.4 313.7,126.9 313.8,127.3 313.7,127.6 314,127.7 314.3,127.6
			314.4,127.3 314.6,127.2 314.6,127.8 314.8,127.9 315,127.9 315.2,127.8 315.2,127.2 315.2,126.7 315,126.5 314.9,126.4
			315.3,126.5 315.6,126.8 315.8,127.1 316,127.2 316.2,126.9 316.2,126.3 316,125.8 315.5,125.4 315.3,125.2 315.5,125.2
			315.7,125.4 316.2,125.8 316.4,126.1 317.2,126.1 317.3,125.7 317.3,125.4 316.9,125.3 316.7,125.1 316.1,125.1 315.8,124.8
			315.9,124.3 316,124.6 316.4,124.8 316.8,124.8 316.8,124.6 316.7,124.1 316.5,123.9 316.4,123.7 316.7,123.6 316.8,123.8
			317.2,124 317.2,124.2 317.1,124.6 317.5,124.7 318.1,124.8 318.5,124.7 318.9,124.7 319.1,124.4 319.1,124.2 318.8,124.2
			318.2,124.2 318,124 318.3,123.8 318.7,123.9 318.9,123.8 318.8,123.5 318.6,123.4 318.7,123.3 318.6,123 318.3,123 317.9,123.1
			318.2,122.8 318.5,122.5 318.6,122.7 318.9,122.8 319.2,123.2 319.1,123.5 		"/>
		<polygon fill="#E6EEF4" points="283,48.7 283.1,48.8 283.1,49.4 283.3,49.7 283.2,50.7 283.3,51.3 283.9,51.5 284.2,51.5
			284.1,51 283.9,50.8 284.1,50.5 284.4,49.4 284.3,48.8 283.5,48.4 		"/>
		<polygon fill="#E6EEF4" points="284.8,46 284.8,45.7 284.5,45.5 284.4,45.1 284.3,45.2 284.2,45.5 284.3,46 284.6,46.2 		"/>
		<polygon fill="#E6EEF4" points="281,40 280.4,39.3 280,39.3 279.6,39 279.4,39.2 278.9,39.1 278.8,38.8 278.5,38.7 278.1,38.8
			277.7,38.7 277.3,38.8 276.8,38.7 276.3,39.2 276,40.1 276.1,40.9 276.5,40.9 277,40.9 277.4,41.4 277.9,41.6 278.6,41.6
			279.3,42.2 280.1,42.2 280.8,42.6 281.3,42.5 282,41.9 282.6,42 282.8,41.8 282.7,41.6 282.8,41.2 282.4,40.9 282.1,40.5
			281.7,40.7 281.3,40.7 281.2,40.4 281.4,40.2 		"/>
		<polygon fill="#E6EEF4" points="271.8,44.6 271.7,45.1 271.9,45.7 272.4,45.9 273,46.8 273.5,46.8 273.1,47.1 272.7,47.1
			272.6,47.7 273.3,48.6 273.8,48.8 273.8,49.2 273.6,48.9 272.7,48.9 272.7,49.2 272.4,49.4 272.3,49.8 273,49.5 273.4,49.8
			274.3,49.5 274.3,49.8 274.9,50 275,50.3 275.8,50.9 276,50.9 276.1,50.5 276.3,50.8 276.8,50.5 277.2,50.5 277.3,50.9
			277.1,51.4 277.1,52.4 276.9,53.1 276.9,53.6 277.2,54.1 277.1,54.8 277.1,55.1 276.8,55.8 276.1,56.3 275.4,56.5 275.3,56.9
			274.7,57.7 274.7,58 274.3,58.3 273.9,58.8 274,59.4 274.4,59.5 274.4,59.9 273.9,60.1 273.8,60.5 274,60.8 273.6,61.3
			273.5,61.8 273.7,62.4 274.1,62.5 274.1,62.8 274.5,63.2 274.8,63.2 274.9,62.7 275.1,62.4 275.3,62.6 275.6,62.6 276.1,61.9
			276.2,62.1 276,62.9 275.5,63 275.4,63.2 275.6,63.5 275.7,63.8 276.2,64.4 276.7,64.3 276.8,64.5 277.5,64.6 277.8,64.3
			278.5,64 278.4,63.4 278.8,63.4 279,63.1 279.1,63.5 279,63.6 279,64.1 279.3,64 279.6,63.2 279.9,63 280.1,63.3 280,63.9
			279.2,64.8 278.9,65.2 278.9,65.6 279.5,65.8 280,66.2 280.4,66.1 280.6,66.3 281.2,66.4 281.3,66 281.9,66 281.7,66.3
			281.8,66.6 282.2,66.7 282.6,67 282.9,66.7 282.8,66.4 282.8,66 283.1,65.5 283.2,65.9 283.1,66.4 283.2,67 283.6,66.9
			283.8,66.4 283.9,66.1 284.3,66 284.3,66.4 284.1,66.6 284.1,67 284.8,67 285.2,66.7 285.6,65.9 285.7,66.3 285.4,66.7
			285.4,67.1 286.1,67 286.3,66.2 286.5,65.9 286.4,67 286.5,67.4 287,67.4 287.8,67.9 288.2,67.7 288.6,67.6 288.7,67.9
			289.4,67.7 289.8,67.5 289.8,66.9 290.3,66.4 290.5,66.1 290.2,65.5 290.5,65.1 290.7,65.1 290.7,65.8 291,65.9 291.1,66.1
			290.7,66.5 290.4,67.2 290.5,68.4 291.1,68.6 291.6,68.3 291.7,68.9 292.2,68.9 292.3,69.1 292.8,69.1 293.8,68.5 294.3,68.5
			295.1,68.9 295.6,68.8 295.9,69 296.3,68.7 296.2,68.4 296.6,67.7 296.9,67.7 297,67.4 296.7,66.8 296.7,66.1 297,66.5 297,66.8
			297.4,67.5 297.7,67.1 298,67.2 298.4,67.1 298.6,67.2 298.7,66.9 298.6,66.3 298.6,66 298.3,65.7 297.7,65.9 297.1,65.9
			296.9,65.5 297.2,65.3 297.5,65.5 298.1,65.3 298.4,64.8 298.7,65.1 299.1,65 299.4,64.5 299.3,64.2 299.6,63.6 299.4,63.3
			299.8,63.2 299.8,62.9 299.2,62.8 298.7,62.9 298.9,62.4 299.2,62.3 299.2,61.8 298.7,61.5 297.7,61.5 297.4,61.1 297.5,60.8
			297.8,60.7 297.6,60.2 296.7,59.5 296.3,59.5 295.9,59.7 295.1,59.7 294.3,60 293.4,59.3 293.2,58.9 292.9,58.7 292.4,59.1
			292,59 291.7,59.2 291.1,59.2 290.9,59.7 290.6,59.4 290.2,59.1 289.6,59.3 289,59.4 289,59.7 288.8,59.9 288.8,59.6 288.6,59.3
			288,59.5 286.8,59.3 286.7,59.5 287.1,59.8 287,60.3 287.5,60.6 286.9,60.5 286.7,60.2 286.3,60.1 285.6,60.2 285.3,60.1
			285.8,59.8 285.9,59.4 285.3,58.8 285.3,58.4 285.2,58.1 284.5,58.5 284.6,58.9 284.5,59.2 284,59 284.2,58.7 284.2,58.4
			283.6,58.2 283.3,58.5 282.9,58.5 283.1,58 283,57.7 283,57.1 282.4,57.3 281.8,57.9 281.9,58.6 281.5,58.6 281.3,58.1
			281.5,57.6 281.5,57.3 281.9,56.5 281.5,56.1 280.8,56.3 280.8,56 281.3,55.8 281.5,55.2 281.5,54.8 281.1,55 280.6,54.8
			280.4,55 279.9,55 280.2,54.8 280.2,54.5 279.7,54.5 279.4,54.8 278.7,55 278.7,54.7 279.1,54.5 279.3,54.1 279.4,53.6
			279.8,53.7 280.3,54.1 281,54.1 280.9,53.8 280.5,53.3 280,53.2 280.2,53 279.6,52.3 279,52 279.3,52 279.4,51.6 279.7,51.6
			279.9,52.1 280.5,52.7 281.1,52.9 281.6,53.3 281.9,53 282.2,53.4 283.1,53.6 283.6,53.6 283.9,53.1 283.7,52.5 282.5,51.7
			282.1,51.2 281.7,51.2 281.6,50.7 281.1,50.2 280.8,50.2 280.6,49.9 280.8,49.6 281.2,49.8 281.6,50.2 281.9,50.2 282.1,50.7
			282.4,50.7 282.6,50.4 282.4,49.5 281.7,48.7 281.3,48.7 281.1,48.6 280.6,48.6 280,49 279.5,49 279,48.6 278.6,48.7 278.3,48.2
			277.7,49.1 276.9,49.5 276.8,49.9 276.4,50.1 276.4,49.8 276.8,49.3 277.1,49.1 278.2,48.1 278.3,47.7 278,47.2 278.1,46
			278.2,45.8 277.8,45.3 277.6,45.6 277,45.6 276.7,45.3 276.7,44.8 276.6,44.4 275.7,44.1 275.2,43.6 274.7,43.6 274.1,43.3
			273.8,43.6 272.8,43.7 272.7,43.9 272.4,43.9 272.2,44.4 272.6,44.9 272.8,45.5 272.4,45.4 		"/>
		<path fill="#E6EEF4" d="M299.6,58.1l-0.2-0.2l-0.5,0.3c0,0,0.2,0.3,0.2,0.3l0.3,0.1L299.6,58.1z"/>
		<polygon fill="#E6EEF4" points="282.9,35.2 282.8,35.5 282.8,36.1 282.9,36.5 283.2,36.5 283.3,36.1 283.2,35.2 		"/>
		<polygon fill="#E6EEF4" points="265.5,54.4 265.3,54.6 265.4,55.3 265.7,55.5 265.9,55.4 266.1,55.2 266.4,55.1 266.4,54.7
			266.5,54.5 266.4,54.3 266.1,54.1 265.7,54.2 		"/>
		<polygon fill="#E6EEF4" points="266.5,53.3 266.3,53.3 265.9,53.5 266,53.7 266.3,53.6 		"/>
		<polygon fill="#E6EEF4" points="265,58.1 264.9,58.3 265,58.4 265.2,58.5 265.1,58.8 265,59.1 265.2,59.1 265.5,58.7 265.7,58.8
			265.5,59.4 265.5,59.6 265.9,59.9 266.1,59.8 266.3,59.9 266.4,60.4 266.6,60.3 266.8,60 267.1,60.1 267.1,60.8 267.2,61.1
			267.7,61 267.8,61.5 268.3,61.5 269,61.9 269.5,61.9 269.7,62.1 269.8,61.9 269.7,61.5 270.1,61.4 270.4,60.7 270.3,60.1
			270.7,59.3 270.9,59.1 271.2,58.2 271.2,57.5 271.4,57.3 271.2,56.8 270.8,56.4 270.8,55.8 270.6,55.5 270.4,55.1 269.7,54.7
			269.2,55 268.7,54.8 268,54.9 267.8,55.1 268.2,55.5 268.2,55.8 268,55.8 267.5,55.5 267.1,55.4 266.9,55.7 267.4,55.7 267.6,56
			267.5,56.2 266.8,56.3 266.5,56.4 266.8,57 266.9,57 266.9,57.2 266.3,57 265.7,57.2 265.3,57.6 		"/>
		<polygon fill="#E6EEF4" points="269.9,31.4 269.8,31.2 269.5,31.4 269.4,31.6 269.5,31.8 269.8,31.8 		"/>
		<polygon fill="#E6EEF4" points="267.3,53 267.4,52.7 267.7,52.6 267.6,52.4 267.1,52.5 266.9,52.8 267,53 		"/>
		<polygon fill="#E6EEF4" points="293.6,82.1 294.2,81.6 294.7,81.6 295.4,81.4 295.9,81.6 296.2,81.6 296.9,81.8 297.2,82.1
			298.2,82.3 298.4,82.5 299.4,82.7 299.6,82.4 299.9,82.2 299.9,81.9 299.3,81.7 299.5,81.3 299.6,80.9 299.3,80.3 299.4,79.9
			299.3,79.4 299.4,79.1 298.9,78.8 298.9,78.5 299.1,77.9 298.8,77.3 298.1,76.8 297.9,76.3 297.6,76.1 296.8,76.1 295.8,75.7
			295.6,76 294.9,75.8 294.5,75.4 293.5,75 293.4,74.6 293,74.2 292.5,74.4 292.3,75.1 292,75.5 292.1,76.1 291.9,76.4 291.6,76.4
			291.1,77.5 291.6,77.9 292.1,78 292.2,78.4 291.9,78.8 291.9,79.2 291.4,79.6 291.2,80.3 291.4,80.8 291.8,81 292,81.7
			292.6,81.8 293.3,82.2 		"/>
		<polygon fill="#E6EEF4" points="266.7,54.4 266.9,54.6 266.8,55 267,54.9 267.5,54.6 267.3,54.2 267,53.9 266.8,54 		"/>
		<polygon fill="#E6EEF4" points="231.8,96.4 231.4,96.7 231.4,96.8 230.8,96.8 230.7,97.1 231.1,97.5 231.3,97.7 231.8,97.4
			231.9,97.1 231.8,96.8 231.9,96.5 		"/>
		<polygon fill="#E6EEF4" points="270.8,46.2 270.4,46.6 270.7,46.6 271,46.3 270.9,45.8 		"/>
		<polygon fill="#E6EEF4" points="265.1,61.2 265.3,61.8 265.5,62.1 265.7,61.9 265.8,61.4 265.6,61 265.4,60.9 		"/>
		<polygon fill="#E6EEF4" points="290.1,82.5 290.1,83.1 290.5,82.8 290.5,82.5 290.3,82.2 		"/>
		<polygon fill="#E6EEF4" points="292,83.1 292,83.5 292.4,83.6 292.6,83.4 292.2,83.1 		"/>
		<polygon fill="#E6EEF4" points="303.3,90.7 303.3,91.1 303.5,91.4 303.7,91.3 303.9,90.9 303.6,90.5 		"/>
		<polygon fill="#E6EEF4" points="302.5,92.8 302.7,92.7 302.9,92.2 303.3,91.9 303,91.7 302.9,91.8 302.7,91.4 302.4,91.6
			302.5,92.2 302.3,92.4 		"/>
		<path fill="#E6EEF4" d="M270.8,52.6l0,0.6l-0.2,0.2l0,0.3l0.2,0.2l0.1,0.4c0,0,0.2-0.2,0.2-0.2l0.3-0.5l0.3-1.2h-0.8L270.8,52.6z"
			/>
		<polygon fill="#E6EEF4" points="290.8,83.2 291,83.6 291.3,83.4 291.2,83 291,83 		"/>
		<polygon fill="#E6EEF4" points="274.1,68 274.4,68.4 274.7,68.4 275,68.2 275,68 274.2,67.8 		"/>
		<path fill="#E6EEF4" d="M271.6,51.4c0,0,0.2-0.5,0.2-0.5l-0.4,0l-0.1,0.2L271.6,51.4z"/>
		<polygon fill="#E6EEF4" points="271.2,43 271.5,43.2 271.8,43.1 271.8,42.9 271.5,42.8 		"/>
		<polygon fill="#E6EEF4" points="254.6,47.5 255.8,47.8 256.3,47.6 256.8,47.6 257,47.8 257.4,47.6 257.9,47.5 257.9,47.2
			257.5,47.1 256.3,47.2 255.8,47.3 255.6,47.1 254.9,47 254.4,47.2 		"/>
		<polygon fill="#E6EEF4" points="223,41.3 223.2,41.9 223.5,41.9 223.7,41.5 224.1,41.5 224.5,41.4 225,40.7 226.7,39.4
			227.5,38.9 228.4,38.3 228.5,37.9 228.3,37.8 227.3,38 227.1,38 226.6,38.2 225.8,38.4 225.1,38.9 224.7,38.9 224.3,39.3
			223.5,39.5 222.4,40.5 222.1,41.1 222.4,41.3 222.7,41.2 		"/>
		<polygon fill="#E6EEF4" points="247.9,95 247.6,94.3 247.4,94.7 247.4,95.5 247.6,95.6 		"/>
		<path fill="#E6EEF4" d="M220.1,37.8l0.6-0.4v-0.3l-0.6,0.5C220.1,37.6,220.1,37.8,220.1,37.8z"/>
		<polygon fill="#E6EEF4" points="213.6,98.3 213.4,98.4 213.5,98.8 213.7,98.8 		"/>
		<polygon fill="#E6EEF4" points="241.3,85.1 241,85.2 240.9,85.9 241.1,86.1 241.2,86.8 241.4,86.7 241.5,86.2 241.8,85.9
			241.5,85.6 241.5,85.3 		"/>
		<polygon fill="#E6EEF4" points="239.1,68.5 239.3,68.3 239.3,67.9 239.6,67.7 240.2,67.7 240.8,66.9 241.5,66.4 242.3,65.7
			242.6,65.7 243.2,65.1 243.2,64.6 243.5,64.4 243.5,64.1 243.1,63.5 243.3,63.3 243.3,62.9 242.8,62.2 242.4,62.1 242.1,62.2
			241.5,62 241.2,62.1 240.7,61.8 240.4,61.8 239.9,61.4 239.2,61.5 238.7,62 238.3,62.2 237.4,62.9 237.4,63.2 237.9,63.6
			238.3,64.2 238.3,64.9 238.5,65.5 238.4,65.8 238.4,66.3 238.7,66.8 238.7,68 		"/>
		<polygon fill="#E6EEF4" points="236.1,61.9 236.5,62 236.7,61.8 236.4,61.5 235.8,61.4 235.6,61.5 235.6,61.9 235.7,62 		"/>
		<polygon fill="#E6EEF4" points="215,100.1 214.8,100.4 214.7,100.2 214.4,100.3 214.6,101 214.8,101.1 215.2,100.6 215.1,100.4
			215.3,100.1 		"/>
		<path fill="#E6EEF4" d="M215.2,95.7h-0.4l-0.3,0.3c0,0,0.3,0,0.3,0L215.2,95.7z"/>
		<polygon fill="#E6EEF4" points="213.2,96.5 212.9,96.5 212.7,96.8 213.3,96.8 		"/>
		<polygon fill="#E6EEF4" points="214.2,102.1 214.3,101.7 214.1,101.4 213.8,102 213.7,102.5 213.5,102.8 213.6,103.6 213.9,103.5
			214,103.2 214.4,103 214.2,102.6 214.4,102.3 		"/>
		<polygon fill="#E6EEF4" points="213.5,99 213.2,98.3 213,98.5 213.2,98.8 		"/>
		<polygon fill="#E6EEF4" points="264.5,55.4 264.4,55.2 264.2,55.3 264.2,55.8 264.4,55.7 		"/>
		<polygon fill="#E6EEF4" points="214.9,195.2 215.5,195.2 216.1,195.7 216.2,195.9 216.5,196.3 216.7,196.4 217.2,196.6
			217.3,196.7 217.9,196.9 218.2,197.3 218.4,197.2 218.9,197.1 219.3,197.2 219.9,197.1 220.5,197.7 220.9,197.7 221.1,198.3
			222.1,198.6 222.6,198.7 223,199.2 223.4,199.4 224.3,199.3 224.8,199 225.1,199.3 225.3,199.8 226.6,199.8 226.9,200.1
			227.6,200.3 228,200.6 239.1,205.8 239.8,206.7 241.5,208 243.3,216.6 243.1,220.3 242.8,220.9 242.5,221.6 242.1,222.1
			241,222.7 240.5,223.3 241,224.2 250.5,221.6 251.7,221.2 252,219.8 257.2,218.3 259.5,216.6 260,216.2 260.8,216.1 262,214.9
			262.6,214.4 263.3,214.1 263.8,213.7 264.7,213.5 272.8,213.7 273.5,213.1 273.7,213 274,212.8 274.3,212.8 274.8,212.9
			275.1,212.7 275.3,212.3 276.2,211.3 276.5,211.2 277.2,210.3 277.5,209.7 277.6,209.1 278.3,208.7 278.2,208.3 278.7,207.6
			279.7,206.5 279.9,206.1 280.4,205.6 280.6,205.6 280.9,205.8 281.3,206.2 281.9,206 282.6,206.2 282.9,206 284,207 284,207.9
			283.4,211.4 283.3,211.8 283.5,211.9 283.7,212.2 283.9,212.5 283.9,213 283.8,213.3 283.9,213.5 283.8,213.8 283.9,213.9
			283.9,214 284.7,214.1 285.3,214.1 285.5,214.5 285.8,214.5 286.1,214.2 286.5,214.4 287.2,214.2 287.4,213.7 287.9,213.2
			287.6,213.7 287.8,213.8 287.6,214 287.9,214.2 289.1,213.9 289.3,213.5 290,213.5 290.6,212.9 291,212.7 291.6,211.9
			291.7,212.2 292.1,212 292,212.3 291.5,212.9 290.9,213 290.4,213.7 291,213.9 291.4,213.5 291.9,213.5 292.3,213.7 293.4,213.8
			294.3,213.8 293.7,214.1 292.9,214.2 292.4,214.3 292.3,214.6 292.4,214.8 292,214.6 291.9,214.1 291.6,213.9 290.7,214.2
			289.8,214.8 288.6,215.1 287.5,215.7 287.4,216.1 286.7,216.7 286.3,217.5 286.3,218.2 286.5,218.7 286.6,219.2 286.8,219.1
			287.1,219.2 287.2,219.9 287.6,220.2 287.9,220 288.2,220.2 288.5,220 288.5,219.5 288.7,219.4 289.1,219.4 289.7,218.9
			290.2,218.8 291,217.9 291.8,217.2 291.6,216.9 292,216.3 292.3,216.3 292.5,216 292.8,216 293,216.6 293.8,216.7 293.7,216.4
			294.2,216.4 295,215.9 295.9,215.7 296.9,215.5 297.4,215.5 298.6,214.8 299.4,214.5 299.9,214.5 300.3,214.6 300.7,214.4
			300.5,214.1 299.9,214.2 299.4,213.9 299.6,213.8 300,213.7 300,213.4 299.1,212.9 298.4,212.8 298.5,212.6 298.4,212.2
			297.6,212.7 297.5,213 296.5,212.8 296.4,212.5 295.6,212.2 295.4,212.4 294.8,212.2 294,212.2 293.2,211.6 293.8,211.4 294,211
			293.2,211 292.9,210.8 292.4,210.8 292.1,210.1 291.8,209.9 291.8,209.1 291.8,208.6 291.5,208.2 291.8,207.7 291.8,207.5
			290.7,207.4 291.1,207.1 291.4,207 292.1,205.6 292.7,205.2 292.5,204.8 292.1,204.9 292,204.6 291.4,204.6 290.9,205
			290.3,205.3 290.1,204.9 289.9,204.4 288.8,204.1 288.1,204 287.3,204.1 288,203.8 288.6,203.9 289.2,203.8 289.6,203.5
			290.2,203.7 290.7,204.1 291.3,204.1 292,203.6 292.5,203.5 293,203.1 293.6,202.9 294.1,202 293.8,201.8 294.1,201.6
			293.9,201.3 293.3,201 292.9,201.1 293,200.9 292.9,200.8 293.7,200.9 293.7,200.7 292.6,200 291.6,199.6 289.8,199.6
			289.2,199.9 288.6,199.9 286.9,200.5 285.5,200.8 284.7,201.2 283.9,201.3 282.7,202.1 280.8,203.4 279.4,204.7 279,204.9
			278.4,205.6 277.6,206.5 276.7,207.1 275.4,207.7 274,208.3 273.3,208.3 274.2,208.1 275.6,207.5 275.7,207 277,206.3
			277.4,205.7 277.6,205 278.1,204.9 278.8,204.2 279.5,203.8 279.8,202.9 280.9,202.3 281.5,201.3 281.8,201.2 282,200.9
			282.6,200.5 283.1,200.4 283.3,199.8 283.8,199.5 284,199.7 284.3,199.7 284.8,199 285.7,199 286.2,198.8 287,198.8 287.4,198.3
			287.4,197.6 287.7,197.3 287.7,196.9 288.4,196.6 289.4,195.7 289.9,195.6 290.1,195.3 289.8,195.1 290.1,194.8 290.6,194.5
			291.1,195 291.7,195.2 292.9,195.1 293.7,195.4 294.1,195.4 294.4,195.5 295,195.1 295.4,195.5 295.9,195.5 296.4,195.2
			297.1,195.6 297.9,195.7 298.3,195.4 298.5,195.4 299,195.7 299.6,195.8 299.9,195.7 300.7,196.1 301.1,196.1 301.6,195.9
			302,196 301.9,196.3 302.4,196.4 303.7,196 304,196 304.6,195.8 304.8,196 305.7,196 306.1,196.2 306.6,196 306.7,195.6
			307.3,195.6 307.6,195.4 307.8,195.5 308.2,195 308.7,194.7 308.8,194.5 309.3,194.6 309.6,193.8 309.7,193.3 310,193.3
			310.4,193 310.5,192.6 310.3,192.5 310.4,192.3 311,192.4 311.5,192.2 311.5,191.9 311.6,191.7 311.9,192.1 312.5,192.2
			313.1,191.8 313.2,192 313.7,192.1 314.1,191.8 314.4,192.1 314.9,192.1 315,191.8 315.3,191.7 315.7,191.3 316,191.3
			316.5,190.8 317.1,190.8 317.9,190.2 318.1,189.8 318.5,189.8 318.6,189.3 318.8,188.8 318.5,188.6 318,188.7 317.7,188.4
			317.9,188.4 318.4,188.5 318.8,188.3 318.4,187.9 318,187.9 317.2,187.6 316.9,187.1 317.6,187.6 318,187.3 318.2,186.9
			318.6,186.7 318.8,186.2 318,186 318.4,185.6 318.9,185.7 319.3,185.3 319.2,184.9 318.4,184.6 318.3,184.1 318.5,184 319,184.3
			318.9,184 318.2,183.6 317.4,183.6 317.5,183.3 317.7,183.2 317.6,183 317,182.9 316.2,183.4 316,183.8 315.8,184.1 315.6,183.6
			314.9,183.6 315.3,183.2 315.6,183.2 316.2,182.6 316.3,182.1 315.9,181.2 314.9,181 313.7,181.1 313.3,181.3 313.5,181.4
			314.2,181.4 314.4,181.6 313.8,181.6 313.1,181.6 312.2,181.9 311.6,182 311,182.6 310.8,183.1 310.4,183.2 309.8,183.7
			309,183.6 308.5,184.6 308.2,184.6 308,184.8 307.7,184.8 307.5,184.4 307.8,184 308.2,184.1 308.3,183.8 307.2,182.9
			307.1,182.6 306.7,182.5 306.9,182.2 306.8,181.7 307.4,182.7 308.4,183.4 308.6,183.1 308.7,182.6 309.3,182.6 309.7,182.2
			310.6,181.7 311.6,181.5 312.7,181.4 312.6,181.1 312.2,181 311.2,181.4 310.1,181.6 310.2,181.2 311.6,181 312.7,180.9
			313.2,180.4 314,180.1 314.3,180.3 315.3,180.1 315.3,179.9 316.2,179.8 315.7,179.3 314.4,178.9 314.6,178.7 314.9,178.7
			315.2,178.2 314.8,178 314,178.2 313.6,178.7 313,178.4 312.4,178.4 312.3,178.1 312.6,178 312.6,177.1 312.7,176.8 311.9,177.4
			312,177.1 312.3,176.8 312.1,176.8 311,177.7 310.6,178 310.3,178 310.7,177.5 311.5,176.9 311.2,176.7 310.5,177 310.3,176.9
			310.6,176.7 311,176.4 311,176.2 310.4,176.3 309.9,176.9 309.3,177.5 309.1,177.4 309.3,176.9 309.8,176.6 309.8,176.3
			309.4,176.3 308.3,177.2 307.9,177.4 307.3,177.1 307.9,177.2 308.4,176.8 309.2,175.7 309.9,175.3 309.6,174.9 309.6,174.5
			309.5,174.4 309,175.1 308.7,175.2 308.7,174.9 308.9,174.6 309,173.9 308.6,173.8 308.4,173.7 307.9,174 307.7,173.8
			307.8,173.4 307.7,173.3 307.4,173.2 307.7,173 307.4,172.7 307.4,172.3 307.1,172.3 306.4,172.4 306.3,172.6 306,172.7
			305,172.4 305.7,172.5 306,172.2 306.6,172.1 306.7,171.8 306.4,171.5 305.9,171 305.8,170.5 305.1,170.1 305.9,170.1
			306.6,170.5 307.2,170.4 307.2,170.1 306.7,169.9 306.8,169.6 307.2,169.8 307.9,169.2 308.3,169 308.5,168.5 307.9,168.1
			307.5,168.1 307,168 307.4,167.7 307.6,167.3 307.3,167 306.7,167 306.5,166.8 306.1,166.9 305.7,166.6 306.3,166.6 306.5,166.3
			306.9,166.5 307.5,166 307.2,165.1 306.7,164.6 306.4,164.9 305.9,164.8 305.5,165.1 305.7,164.6 306.3,164.2 306.7,164.1
			306.7,163.6 306.2,163.5 305.8,163.7 305.2,163.7 304.3,164.1 305.1,163.1 305.7,163.1 306.1,162.8 306.1,162.5 306.5,162.2
			306.3,162 305.7,162.3 304.8,162.2 304.1,162.6 304.3,162.1 304.1,161.8 304.4,161.4 304.8,161.7 305.6,161.7 306.1,161
			306.1,160.4 305.6,160.7 305.2,160.5 305.7,159.9 305.9,159.5 305.5,159.4 304.2,159.7 303.8,159.5 304,159.1 304.6,159.2
			305.1,159.1 305.5,158.4 305.1,158.2 305.1,157.8 304.7,158.1 304.5,158.1 304.4,157.8 304,157.5 304.4,157.3 304.6,157.5
			304.9,157.3 304.8,156.6 304.3,156.2 304.2,155.6 304.5,155.4 304.5,154.9 304.1,154.9 304.3,154.7 304.4,154.2 304.1,154.2
			303.7,154.1 303.8,154 304.1,153.9 304.4,153.5 304,153.2 304.1,152.9 304.4,152.6 304.2,152.4 303.8,152.6 304.2,152.2 304,152
			303.4,152.2 302.9,152.8 303.1,153.2 302.8,153.6 302.2,154.3 302.1,154.7 301.8,155 301.8,155.5 301.5,155.1 301.2,155.3
			300.9,156.1 300.9,156.5 301.4,156.5 301.6,156.9 301.6,157.3 301.1,156.8 300.8,156.8 300.6,157.2 300.3,157.7 299.9,158
			299.7,158.7 299.3,158.8 299,159.3 299,159.5 298.8,159.6 298.8,160.4 298.4,161.3 298.5,160.6 298.4,159.8 298,159.5 297.3,160
			296.9,160.5 296.8,161 296.3,161.2 296.1,161.4 296,161.2 295.6,161.1 295.1,161.6 294.6,161.6 294,162.1 293.9,162.7
			293.3,163.4 293.5,162.9 293.5,162.4 293.7,162.2 293.6,161.1 293.7,160.6 293.5,160.5 292.8,161.2 292.1,162.7 291.5,163
			291.9,162.5 292,161.9 292.6,160.9 292.6,160.3 292.7,159.7 292.4,159.1 291.8,158.7 291.3,158.7 291.5,159.3 291.3,159.3
			290.8,158.9 290.2,158 291.2,158.4 291.4,158.3 291,158.1 290.3,157.1 290.1,157 290.7,156.2 290.8,155.9 291.3,155.2
			291.3,154.2 290.6,153.6 289.5,153.4 288.3,152.7 289.7,153.2 290.9,153.3 291.1,152.5 291.3,152.2 291.4,152.9 291.7,152.4
			291.6,151 292.1,150.2 292.8,150.1 293,149.2 292.9,148.2 292.5,148.2 292.4,149.1 291.7,149.6 291.4,149.1 291.6,148.1
			290.8,147.9 290.2,148.2 290,147.9 289.7,148 288.8,147.2 288.4,147.5 288.4,147.1 287.9,147.5 287.9,147 287.2,146.3
			287.7,146.3 287.9,145.8 288.4,146.1 288.5,145.8 288,145.1 287.6,145.5 287.1,145.1 287.6,145 287.3,144.4 286.7,143.9
			286.3,144.1 286.3,143.7 286.7,143.3 286.7,142.4 286.2,142.4 285.5,141.8 285.5,141.3 284.6,140.5 283.8,141 283.4,141
			283.1,141.3 282.5,141 282.5,141.6 282.1,141.1 281.7,141.1 281.4,140.8 280.9,140.7 280.1,141.3 279.2,141.3 279.9,141
			280.1,140.5 279.4,140.5 278.1,139.8 277.2,139.3 276.3,139.3 275.9,139.1 275.6,139.2 275.3,139.2 274.9,139.6 274.9,140
			274.6,140 274.3,139.8 273.9,140.1 273.9,140.8 273.5,141.6 273.5,142.6 273.8,143.2 274.1,143.2 274.1,143.5 274.4,143.6
			274.4,144.2 274.2,144.5 273.8,144.5 273.7,145.1 273,146.2 271.8,147.1 271.8,147.6 272,147.7 272.9,147.6 273.3,147.7
			272.8,147.9 272.6,148.7 272.6,149 273.2,149.1 272.7,149.3 272.3,149.7 272.5,150.1 272.8,150.4 272.3,151 272.4,151.2
			273.1,151.2 273.2,151.6 272.6,152.7 272,152.9 272,153.6 272.2,153.9 271.8,153.7 271.5,153 271.2,153 270.6,153.8 270.6,154
			270.8,154.1 270.9,154.5 270.5,154.9 270,155 268.6,156.5 268,156.7 267.7,157.8 267.9,158.3 268.4,158.4 268.6,159 269.2,159.4
			270,160.7 270.2,162.2 270.1,163.9 270.6,164.7 270.5,165.4 270.5,166.4 270.3,166.6 269.8,167.9 269.6,168.7 269.8,168.6
			270,168 270.3,167.7 270.3,168.4 270.8,169.1 270.4,169.5 269.9,169.6 269.6,169.3 269.3,169.3 268.5,170.5 267.8,170.8
			267.8,171.3 266.5,171.8 266.1,172.2 266.1,172.4 264.4,173 263.3,173.5 263,173.8 262.3,173.8 261.8,174.2 260.7,174.4
			260,174.7 260.1,175 260.2,175.6 260.4,176 260.4,176.5 260.6,176.9 260.4,177.1 260.5,177.5 260.8,177.5 260.5,177.8
			260.7,178.2 260.5,178.4 260.6,178.9 260.3,179.2 260.1,180.2 260.3,180.7 259.8,182.1 259.9,182.4 260.2,182.5 260.2,182.8
			260.4,183.1 259.9,183.8 259.8,184.4 260.2,184.6 260.3,185.4 260.5,185.6 259.8,186.2 259.5,187 259.2,187.1 259,187 259,187.6
			259.3,187.9 259,188.3 258.9,189.1 259,189.8 259.6,190.4 260.1,190.6 259.2,190.5 258.5,190 258.6,189.3 258.4,188.3
			258.1,188.2 258,187.9 258.1,187.5 257.9,187.5 257,188.6 257,189.1 256.8,189.6 256.3,189.5 255.9,189.1 255.1,188.8
			254.4,189.3 253.6,189.7 254.7,188.8 254.9,188 254.8,187.6 254.7,186.8 254.3,186.3 254.3,185.9 254.1,185.9 253.5,185.6
			252.9,185.4 253,185 252.9,184.7 253,184.3 252.7,183.8 252.3,183.6 252.3,182.9 251.7,182.5 251.5,182 251.8,180.9 252.3,180.4
			252.5,179.7 252.5,179.2 253.3,178.1 253.2,176.9 253,176.8 252.9,176.1 253.3,175.4 253.7,174.9 253.8,174.4 254.5,173
			254.4,172.2 254.1,172.2 253.9,172.3 253.9,172.1 253.5,172.1 252.9,172.3 251.9,172.1 251.1,171.9 250.8,171.9 250.6,171.6
			249.4,171.6 248.7,171.7 248.5,171.6 247.6,171.6 247.4,171.4 247.5,171.2 246.8,170.5 246.7,170.1 245.8,169.2 245.4,169.1
			244.5,168.5 244.1,168.4 243,167.7 242.7,167.4 242.4,167.5 242.4,167.3 242,166.3 241.6,165.9 241.6,165.4 241.2,165.1
			240.7,164.3 240.3,164.1 239.4,163.2 238.9,163.1 238.5,162.8 237.3,162.4 236.5,161.7 235.3,160.9 234.3,161 232.3,161.6
			230.3,162.3 229.5,162.3 228.8,162 229.4,162.1 230.3,161.8 232,160.2 232.2,159.6 232,158.6 231.6,158.1 232.1,157 232.1,155.9
			231.7,155.1 231.7,154.5 232,153.9 232,153.3 231.5,153.1 229.9,153.2 229.2,154.6 228.2,155.7 226.9,155.9 226.2,156.5
			226.4,156 227.9,155.6 228.6,154.9 229.2,153.6 228.9,153.5 229,152.8 228.7,152.4 228.8,151.9 228.7,151.5 228.1,151.4
			228.4,151.1 228.9,151 229,150.5 229.5,149.6 229.5,148.8 229.3,148.6 229.7,147.5 230.2,147.2 230.4,146.5 230.7,146 230.9,145
			231.5,144.5 231.2,143.8 231.2,143.5 231.8,143.9 232.4,143.4 232.4,142.9 233,142.7 233.8,141.8 234.3,141.6 234.2,141.2
			234.5,140.7 234.9,140.7 235,140.4 234.8,140.1 235.4,139.7 235.9,139 236.4,139 236.4,138.7 236.7,138.4 236,137.9 236.3,137.7
			236.3,137.4 236.7,137.5 237.4,137.9 237.5,138.2 237.7,138.1 237.6,137.7 237.2,137.4 238,137.1 238.2,136.7 238.9,136.8
			239.1,136.9 239.2,136.5 239,136.2 239.4,136.3 239.5,136.9 239.9,136.4 239.9,136 239.6,135.7 239.6,135.2 239.8,135.4
			240.8,135.7 240.7,135.3 240.2,135.1 240,134.8 240.2,134.6 240.3,134.3 240.5,135 241,134.9 241.4,135.1 241.7,134.8
			241.1,133.8 240.7,132.7 240.2,132.1 240.3,131.5 240.2,131.2 240.3,131 240.7,131.3 241,132.2 241.7,133.2 243,133.4
			243.4,133.7 244.1,133.8 244.4,133.5 244.8,133.5 245.6,132.7 245.7,131.5 244.6,130.2 244.5,129.5 244.2,129.1 243.9,129.2
			243.3,129.8 242.2,129.9 242,130 242,129.8 241.8,129.5 242.2,129.6 242.9,129.5 243.5,129 243.4,128.8 242.4,128.2 241.3,127
			241.1,127 241,127.2 241.2,127.6 241,127.8 240.5,127.4 240.2,126.6 240.7,126.7 240.7,125.9 241,126.4 241.8,126.9 242.2,127.1
			242.6,127.9 243.6,128.5 244.7,128.9 245.2,129.7 245.7,130 245.8,130.4 246.4,130.6 246.6,130.8 246.6,130.2 247.2,129.9
			246.8,129.6 247,129.1 247.4,129.7 247.5,130.1 247.8,130.2 248.5,129.2 248.6,128.2 248.3,127.8 248.5,127.1 248.8,127.9
			248.9,128.4 249.3,127.3 249.8,127 249.9,127.3 250.1,127.5 249.7,128 249.9,128.1 250.1,128.5 250.4,128.1 250.8,128.3
			251.5,129.1 251.6,128.8 252,128.8 252.2,129 252.7,128.9 253.2,128 253.9,127.7 255.7,125.9 255.7,125.5 256,125.3 256.1,125.6
			256.9,124.5 257.4,124.2 258,123.8 258.3,123.6 258.2,123 256.2,122.4 255.1,122.2 254.1,121.9 253.7,121.1 253.1,119.9
			252.9,119.8 252.8,118.9 252.7,118.8 252.8,118.5 253.1,118.6 253.2,118.2 252.8,118 251.7,118 250.4,117.6 250.1,117.6
			249.9,117.9 249.5,117.5 249.6,117.1 250.1,117.3 251.4,117.4 252.2,117.9 253.3,117.9 254,118.4 254.5,119.5 255.1,119.6
			255.3,120 255.1,120.1 254.8,120.1 254.8,120.4 255.7,120.8 255.9,121.4 256.3,121.9 258,122.3 258.5,122.1 258.8,121.5
			259.2,121.2 259.6,121.3 260.2,120.5 260.8,119.8 262.1,118.9 262.5,118.7 262.9,118 262.6,117.5 261.9,117.4 261.7,117
			261.6,116.4 261.9,116.2 261.7,115.9 261.8,115.5 262.4,115.9 262.9,115.8 263.3,116.1 264,116.1 264.8,115.8 264.8,116.1
			265.1,116.2 265,116.4 264.7,117.2 264.7,117.5 265.1,117.4 265.2,117.6 265.6,117.7 266.3,118.1 266.4,117.6 265.9,117.1
			266.2,116.7 266.3,117.1 266.7,117.3 266.8,117.7 267.7,118.5 267.9,118.5 268,118 267.8,117.8 268,117.5 267.9,116.7
			267.6,116.6 267.8,115.8 267.4,114.9 267,114.7 267,114.2 266.7,114.1 266,114.6 265.7,114.5 266.2,113.7 266.7,113.7
			266.9,113.9 267.4,113.6 267.7,114.1 268,114.2 268.1,115.4 268.3,115.3 268.9,114.7 268.4,115.5 268.4,115.9 268.1,116.1
			268.1,116.4 268.4,116.8 268.6,117.4 268.4,117.8 268.7,118 270,117.6 270.3,117.1 270.8,117.1 271.1,117.2 271.8,116.3
			272.3,116.3 272.5,116 273.1,115.6 273.2,115 273.6,114.7 274.5,114.7 274.9,114.9 275.2,114.6 275.1,114.1 275.8,113.4
			275.9,113 276.1,112.9 276.2,112.2 275.6,111 275.7,110.6 275,110.1 274.9,109.6 275.2,109.1 275.8,108.8 276,108.4 275.8,108.4
			275.4,108.7 275.3,108.7 275.2,108.3 275.5,107.8 275.1,107.8 275.4,107.5 275.6,107.1 275.2,106.8 274.8,106.7 275,106.5
			275,106.1 275.4,106.1 275.5,106.3 276,106.4 276.5,106.9 276.9,107 277.1,106.7 277.5,106.8 278.3,106.5 279,106.1 278.8,105.9
			279.1,105.3 278.9,105.2 278.7,105.2 278.7,104.8 278.4,104.6 277.6,104.6 278,104.4 278.6,104.3 279.4,103.6 279.8,103.1
			279.7,102.8 279.4,102.7 279.2,102.4 278.4,102.2 277.9,102.4 277.6,102.2 278.1,102 278,101.4 276.8,100.7 276.8,100.4
			277.2,100.4 277.5,100.8 277.9,100.6 277.6,100.2 277.9,100.1 277.9,99.8 277.2,99.5 276.6,99.1 276.1,99.4 275.1,98.9
			274.9,98.6 274.8,98.3 274,97.7 273.2,97.7 272.8,97.9 272.4,97.9 272.2,97.5 271.6,97.4 271.7,97.7 272.2,97.9 272,98.4
			271.5,98.4 271.5,98.6 271.7,98.8 271.3,99.2 271.2,99.5 271.5,100 271.1,100 271,100.5 270.7,100.9 270.7,101.7 271,101.7
			271.2,102.2 271.5,102.2 271.7,102.8 271.5,102.9 271.1,102.9 270.9,103.1 270.6,102.8 270,102.9 269.8,103.2 270.2,103.7
			270.5,103.7 270.5,104 270,104.1 269.7,103.9 269.4,104.2 269,103.6 268.4,104 268,105 267.5,106.2 266.8,107.3 265.8,108
			265.5,108.5 265.3,108.5 264.8,109.2 264.4,109.4 264.3,110.3 263.9,110.7 263.8,111.4 263.5,111.4 263.2,110.8 262.9,110.8
			262.5,111.2 262.7,111.4 262.8,112.1 262.4,112.1 261.9,111.7 262.1,111.1 261.7,110.3 261.2,108.4 261.2,107.5 261,107.1
			261.3,106.4 261.7,105.9 261.5,105.4 261.8,104.9 262.1,104.6 262.4,104.9 262.8,104.7 263.2,104.1 263,103 263.2,102.5
			263.2,101.9 262.7,101.3 262.6,100.5 262.2,99.6 262.1,99.1 261.8,98.9 261.6,98.9 261.4,99.5 260.7,100.4 260,101 259.9,101.6
			259.9,102.5 259.7,102.8 259.3,102.5 259,102.9 259.1,103.1 259,103.3 258.3,103.7 258.1,104.1 257.6,104.6 257.3,104.6
			257.3,104.2 257.6,104 257.6,103.4 257.4,103.1 258,102.5 258,101.9 258.1,101.4 258.4,101.2 258.5,100.6 258.4,100.5 258.5,99.8
			258,99 258,98.6 257.7,98.1 257.7,97.8 257.9,97.9 258.2,97.9 258.3,98.6 258.5,98.4 259,97.7 259.6,97.7 259.9,97.3 259.6,97.1
			259,97.5 258.7,97.1 258.2,96.9 258.2,96.8 258.5,96.6 258.3,96.3 257.9,96.4 257.8,96.9 257.1,97.1 256.6,96.6 256.5,96.1
			256.2,95.9 255.6,96.1 255.4,95.8 255.5,95.2 255.8,95.1 255.9,94.8 256.3,94.7 257.8,93.7 257.9,93.4 257.5,93 256.8,93.2
			256.8,93 257.3,92.8 257.5,92.2 258.2,91.9 258,92.5 258.3,93 258.8,92.9 259.1,93.1 259.5,92.7 259.6,92.3 259.2,91.8
			258.8,91.7 258.8,91.3 259,90.8 258.8,90.3 259,90.1 259,89.7 258.4,89 258.6,88.5 258.4,88 258.7,87.8 258.7,87.1 259.1,86.5
			259.1,86 259.5,85.5 259.5,85.2 259.2,85 259.3,84 259.1,83.6 258.7,83.1 258.7,82.7 258.6,82.2 258.9,82.1 259.1,81.6
			258.7,81.3 258.2,80.9 257.9,80.7 258,80.5 258,80 257.1,79.8 256.4,79.5 256,79.7 256.1,80.2 255.3,80.7 255.1,81 254.4,81
			253.9,81.5 254.2,82 254.7,82.2 255.1,82.2 255.1,82.5 254.5,83.4 254.4,83.8 253.9,84.1 254,83.7 253.7,83.4 253.9,82.8
			253.5,82.5 252.8,82.7 252.4,83.4 252.1,83.4 251.7,84.1 251.4,84.3 250.9,85.2 250.2,86 250.1,86.6 250.3,87.2 250.3,87.5
			250.6,87.6 251,87.4 251.3,87.4 251.3,87.7 250.9,88 250.8,88.3 250.4,88.2 249.8,88.4 248.9,89.3 248.5,89.7 248.4,91.1
			248.6,91.6 248.7,92 248.4,92.5 248.6,92.7 248.7,93.2 249.1,93.1 249.3,93.2 249.5,93.9 250,94.2 250.3,94.7 250.6,94.7
			251,94.1 250.9,94.7 251.1,95.5 251.9,95.7 252.3,95.9 252.7,95.9 253.3,96 253.3,96.5 252.8,97.5 252.3,97.8 252.1,97.7
			252.2,97.1 252.6,96.8 252,96.6 251.4,96.8 250.9,97.4 251.2,97.6 251.2,98 250.4,98.3 250.1,98.7 249.8,98.7 249.4,99.4
			249.5,99.6 249.9,99.6 250.1,99.8 250.7,99.7 250.9,99.3 250.8,99.1 251.3,99 251.6,98.7 251.8,99 251.7,99.5 251.3,100.2
			251.2,100.9 251.2,101.2 250.8,101.7 250,101.7 249.5,102.3 249.2,102.4 249.2,102.7 248.9,103.2 247.7,103.7 247.4,104.2
			246.9,104.3 246.7,104 246.5,104 246.3,103.7 246,104.1 245.7,104.2 245.9,104 245.7,103.8 245.1,104.2 244.9,104.9 244.5,105.6
			244.3,105.9 244.6,106.2 244.6,106.6 244.3,107.4 244.3,107.8 244.5,108.1 244.1,108.4 243.9,109 244.1,109 244.4,108.9
			244.7,108.5 245.2,108.5 245.7,108.2 245.3,108.7 244.8,108.7 244.3,109.3 243.6,109.5 243.5,110.1 243.1,110.4 242.7,110.1
			242.1,110.1 241.7,109.7 241.4,110 241.5,110.9 241,112 241.2,110.8 241,110.1 240.7,109.5 240.8,108.8 241.1,108.7 241.3,109.5
			242,109.2 242.2,109.7 242.8,109.9 243.2,109.6 243.3,109.2 243.5,108.5 243.1,108.6 242.7,108.5 243.1,108.3 243.5,107.7
			243.1,107.6 242.7,108 242,108.2 242,107.9 242.6,107.5 242.6,107 242.3,107 241.8,107.2 241.8,106.9 242,106 242.3,105.5
			242.5,106 242.7,105.7 242.7,105.3 243.5,104.6 243.5,104.2 244.4,103.7 244.4,103.1 244.8,102.8 245.1,102.6 245.2,102.4
			244.6,102.4 243.9,102.5 243.6,103.1 243,103.5 242.6,103.4 242.7,103.1 243.3,102.9 243.5,102.4 243.1,102.2 242.7,102.4
			242.3,102 242.5,101.6 242.6,101 242.2,100.6 241.9,100.7 241.8,101.1 241.8,100.7 241.9,100.4 241.7,100 241.2,100 241,100.5
			240.4,100.8 240.3,101.1 240.1,100.9 240.1,100.6 239.8,100.1 239.4,100.1 239.3,100.5 239.4,100.8 239.3,101.1 239.5,101.5
			239.5,101.9 239.2,102.2 239,101.9 239,101.6 238.7,101.5 238.6,101.9 238.9,103 239.1,103.8 239.8,104.1 240.1,104.5
			240.1,105.6 239.9,105 239.5,104.7 238.7,103.8 238.6,103.1 238.3,102.2 238,102.1 237.8,102.4 237.9,103.1 238.4,103.6
			238.4,104.2 238.2,104.4 237.8,103.9 236.8,104.1 236.6,104.3 236.1,103.9 235.7,103.8 234.8,103.1 233.7,103.1 233.6,102.8
			233.4,102.8 232.7,103.2 232.4,103.7 231.4,103.6 230.8,103.9 230.2,103.5 230.1,103.4 230,102.9 229.8,102.8 229.2,103.2
			229.2,102.8 228.5,102.1 228.4,101.7 228.1,101.6 228.1,101.3 228.3,101 228,100.7 227.7,100.8 227.6,100.6 227.6,100.2
			227.4,100.1 226.9,100.4 226.4,100.4 226,99.9 225.8,100 225.7,99.8 225.2,99.6 224.6,99.6 224.8,99.2 224.9,98.8 225.3,98.5
			225.3,98.2 225,98.1 224.6,98 224.4,97 224.2,96.8 224.2,96.6 224.6,96.3 224.7,96.1 224.4,95.9 224.6,95.6 224.7,94.5 224.5,94
			224.2,94 223.9,93.7 223.6,93.3 222.9,93.5 222.5,93.5 221.1,93.9 219.1,94 218.5,93.8 218,93.8 217.3,94.8 216.8,95.1
			216.6,95.6 217,95.8 217.3,95.6 217.5,95.6 217.4,96.1 217,96.4 217.1,96.7 217.9,96.8 218,97 218.6,96.9 218.6,96.5 218.2,96.2
			218.3,95.8 218.7,95.7 218.7,96 219.2,96 219.7,96.3 220.1,96.2 220.2,95.7 220.5,95.4 220.4,95.9 220.9,96.4 221,96.2 221,95.8
			221.5,95.8 221.7,95.4 222,95.4 223.1,95 223.5,95 223.6,95.2 224.1,95.2 223.7,95.6 223.9,96 223.3,96.6 223,96.4 222.7,96.6
			222.2,96.6 221.9,96.4 221.6,96.4 221.1,97.3 221.3,97.9 221.3,98.6 221.2,97.9 220.9,97.8 220.7,97.4 220.4,97.4 220.1,97.9
			219.5,98 219.3,98.2 219.3,97.8 219,97.8 218.7,98.3 218.3,98.4 218,98.2 217.6,98.2 217.4,98.5 217.4,98.7 216.6,98.8
			216.2,99.1 216.2,99.5 216.3,100 215.9,101.4 215.6,102.4 215.6,102.8 216.1,103.2 215.9,103.5 215.4,103.6 215.4,104
			215.7,104.5 215.7,105 215.5,105.3 215.4,105.1 215,105.3 214.8,105.2 214.9,104.7 215.1,104.6 215.1,104.1 214.7,104.1
			214,105.3 213.9,106.5 214.2,107.8 214.2,109.6 214,107.8 213.7,107 213.5,106.7 213.7,106.3 213.7,105.9 213.2,105.5
			213.4,104.8 213.3,103.9 213,103.3 213,102.3 213.4,101.7 213.8,100.8 213.8,100 213.7,100 213.5,100.4 213.4,101.1 213,101.5
			212.8,101.3 212.7,100.8 213.1,99.9 213.2,99.4 212.8,99.1 212.5,99.4 212.3,99.3 212.2,99 212.3,98.6 212.2,98 212,98 212,97.8
			212.1,97.5 212.1,97 211.7,97.1 210.1,97.7 209.3,98.1 209,98 209,97.7 208.7,97.7 208.4,98.2 208,98.2 207.7,97.9 206.9,98.5
			207,98.1 206.5,97.8 206.2,97.8 206.2,98.1 205.5,98.1 204.3,97.6 203.4,97.5 202.5,97 201.8,97 201.7,96.5 201.1,96 200.8,96.2
			200.3,95.8 200.1,95.2 199.6,95 199.4,94.7 199.9,94.5 200.5,94.6 200.5,94 201,93.7 200.9,93.3 201.3,93.3 202,93.6 202.3,93.4
			202.2,93.2 202.9,93.2 204.1,93.7 204.6,93.1 204.7,92.5 205,91.9 204.7,91.3 204.6,90.6 204.4,90.1 204.1,89.4 203.7,89.3
			203.6,88.9 202.8,88.2 202.6,88.2 202.5,88.6 202.2,88.7 202,88.2 201.2,87.8 201.2,88.1 201.7,88.5 201.6,88.8 201.9,89.2
			201.7,89.7 201.3,89.2 201.3,88.6 200.8,88.6 200,88.1 199.8,87.8 199.5,88 199.2,87.8 199,87.3 198.4,86.9 198.2,86.9
			197.3,86.1 196.6,85.7 196.4,85.2 194.2,83.8 193.5,82.8 193.5,82.1 193,80.7 193,80.2 192.6,80.2 191.9,79.7 191.4,79.7
			190.9,79.3 190.4,79.2 190,78.9 189.4,79.1 188.8,79.7 188.2,80.7 187.7,80.9 187.2,81.3 186.6,81.3 186.2,81 185.4,80.9
			185.1,80.6 185.5,80.1 185.7,79.8 186,79.8 186.5,79.3 186.9,79.1 187.1,78.9 186.9,78.6 186.5,78.7 186.3,78.5 186.4,78.2
			186.9,77.7 186.8,77.4 187.4,76.9 187.4,76.5 187.3,75.9 186.6,76 186.6,76.5 185.6,77.1 185,77.1 185.6,78.1 185.2,78.5
			185.1,78.1 184.4,78 183.8,78.5 184.1,78.6 184,79.2 183.4,79 182.9,79.3 183.1,79.7 183.6,79.7 183.9,80.1 183,80.6 182.6,79.8
			182,79.6 181.8,78.9 181.8,76.4 182.3,75.4 182.2,73.7 182.6,73.1 182.4,70.9 182.4,70.2 181.6,70.5 181.1,71.3 181.4,71.6
			181.1,72 181.4,72.6 181.3,73.4 180.8,73.3 180.5,72.9 180.3,73.2 180.3,73.7 179.8,73.5 179.3,73.9 179.3,74.2 179.1,74.2
			177.8,74.8 177.1,75.6 176.7,75.2 176.7,74.8 177.4,74.6 177.5,74 177.1,74 176.6,74.3 175.6,74.3 174.9,74.7 174.1,74.7
			172.5,75.9 171.6,76.1 171,77.1 170.9,76.7 171.6,75.8 171.4,75.4 170.6,76 170.5,75.8 170.1,75.8 169.7,76.1 169.3,75.7
			168.9,75.8 168.8,76.3 167.3,77.2 166.8,77.2 165.9,77.5 165.2,78.2 165.4,78.7 164.9,78.5 164.6,78.7 164.1,78.5 164,78.7
			164.6,79.4 164.1,79.1 163.6,78.5 163.9,78 164.2,78 164.6,77.5 165.1,77 165.4,77.3 165.8,77.1 165.9,76.7 166.6,76.2
			166.6,76.5 167.9,75.9 168.3,75.2 169,75 169.9,75.1 170.1,74.9 170.9,74.9 171.8,74.5 172,74.9 172.3,74.9 172.7,74.6
			173.1,74.7 173.8,74.5 174.1,74 175.2,73.7 176.5,73.3 176.6,72.8 176.9,72.8 177.1,72.6 176.8,72.3 176.8,71.8 176.4,71.5
			176.2,71.8 176.2,72.2 175.7,72.3 175.6,72 175.3,72 175.2,71.8 174.6,71.8 173.7,72.2 173.5,72.7 173.1,72.9 172.8,72.5
			172.6,72.5 172.1,72.8 170.8,73.3 169.2,73.4 168.9,73.1 168.5,73.1 168.6,73.3 168.3,73.5 167.8,73.4 167.5,73.5 167.2,74.1
			166.5,74.9 166.3,74.7 165.7,74.7 165.6,74.6 164.9,74.6 164.5,74.8 164.1,74.8 163.9,75.2 163.4,75.4 162.9,75.8 162.2,76.2
			161.3,76.5 161,77 160.9,77.9 161,79.4 160.9,80.2 160.6,80.1 160.2,80.3 159,81.3 159.4,80.8 159.9,80.1 160,79.7 159.7,79.6
			159.7,79.2 159.1,78.4 158.7,78.4 158.5,77.9 158.1,77.8 158.1,77.1 157.5,76.2 157.4,76.3 157,76.1 156.9,75.6 156.6,75.4
			156.4,75.6 155.9,75.2 155,74.2 154.8,73.4 154.7,72.5 154.6,72.4 154.4,72.7 154.1,72.6 153.9,72 154.2,71.4 154.1,71.2
			154.2,70.9 153.6,70.2 153.6,69.7 153,69.3 152.8,69.3 152.6,68.9 152.1,68.5 151.6,68.5 150.1,67.3 149.7,67.3 149.6,67
			117.4,125.8 119.2,125.8 119.8,126.1 120.8,125.5 122.2,125.7 121.6,126.9 121.9,127.6 122.4,129 123.2,132.2 123.5,132.9
			123,133.7 122.9,134.1 123.1,134.1 124.2,133.9 125.1,133.8 125.8,133.4 126.6,132.3 127.2,131.6 128.2,131.3 128.4,131.2
			129.4,130.9 130.2,130.8 130.8,131.3 130.8,131.8 131,132.2 130.5,133 130.4,133.4 131,135 130.9,135.4 131.1,136.5 131.7,137.2
			131.8,138.2 132,138.6 132.1,139.1 131.9,139.6 131.9,140.1 132.1,140.6 131.9,142.2 131.9,144.2 132,146.2 131.5,146.5
			131.5,146.9 131.8,146.9 132.1,147.1 132.2,147.3 132,147.4 131.7,147.7 131.8,148 132.1,148.2 132.1,148.6 131.9,148.9
			132,149.1 132.4,149.1 132.8,149.3 133.3,150 133.4,150.3 133.8,150.6 134.4,151 134.7,151.6 134.7,152.1 135,152.2 135.1,152.5
			135,152.8 135,153 134.8,153.1 134.8,153.6 134.8,153.7 135,153.8 134.7,154.4 134,155.8 133.9,156.7 133.3,157.5 133.2,157.8
			133.4,157.8 134.3,156.8 134.4,156.2 135.1,155.6 135.2,155.9 135.6,156 135.5,156.2 134.8,156.7 134.5,157.2 133.7,158
			133.8,158.2 134.1,158.3 133.8,158.5 133.2,158.4 132.8,158.5 132.5,159.3 131.9,159.7 132.1,160.3 131.8,160.2 131.5,159.9
			131.1,160.2 131.1,161 131.6,161 131.7,161.4 131.5,162.3 131.4,163.7 131.6,164.5 132,165.3 132.3,165.4 132.4,165 132.9,164.5
			133.7,164.3 134.2,163.9 134.7,163.3 134.9,163.3 134.9,163.9 134.7,164.4 134.4,164.5 134,165 134.1,165.3 134.5,165.7
			134.9,166.1 135.4,166.1 135.9,166.2 136.1,166.5 135.5,166.2 134.8,166.3 134.3,166 133.6,166 133.4,166.4 133.4,166.8
			133.7,167.2 133.7,168.3 133.9,168.8 134.2,168.8 134.6,168.5 134.9,168.8 134.6,169 134.5,169.2 134.8,169.5 134.8,169.7
			134.6,169.9 134.2,169.9 133.7,170.1 133,170.5 132.9,170.8 133.2,171.1 134,170.8 134.4,170.9 133.9,171 133.8,171.3
			134.2,171.7 135,171.5 135.8,170.9 136.3,170.2 136.8,170.1 137.3,169.7 137.4,169.2 137.6,169.1 137.8,169.5 137.3,170.2
			136.8,170.6 136.2,170.9 136.1,171.2 136.3,171.5 136.7,171.4 137.4,171.4 137.9,171.6 137.2,171.6 136.7,171.8 136.7,172.6
			136.9,173.3 136.7,173.4 136.4,173 136.4,172.2 136.2,171.9 135.8,172.1 134.5,173 134.2,173.4 133.5,173.7 133.3,174.2
			133.4,174.6 133.3,175 133.5,175.1 133.9,174.9 134.4,174.7 134.7,174.2 134.9,174.3 135.2,174.6 136,174.7 135.9,174.9
			135.4,174.7 134.7,174.7 134.4,175.1 134.4,175.3 134.5,175.6 134.1,175.7 133.8,175.6 133.1,175.8 133,176 133.7,176
			134.1,176.2 134.6,176.2 134.3,176.5 133.7,176.5 133.4,176.2 132.9,176.3 132.8,176.8 133,177 133.4,177 134,176.9 134.4,177.1
			135.1,177.1 135,177.3 134.5,177.5 134,177.3 133.9,177.5 134.1,177.6 134.8,177.6 135.1,177.6 135.1,177.9 134.4,178
			133.8,177.8 133.4,177.6 133.2,177.8 133.5,178.3 134.1,178.8 134.2,178.3 134.6,178.3 135.1,178.5 135.8,178.4 136,178.6
			135.6,178.8 135.6,179 136.1,179 136.2,179.4 137,179.7 137.3,179.5 137.6,178.9 138.1,178.5 138.2,178.1 138.2,178.6
			137.9,179.2 137.2,179.7 136.6,179.9 136.1,179.9 135.7,180.3 135.7,180.5 136.1,180.7 136.4,180.5 136.7,180.4 136.8,180.7
			137,180.7 137.3,180.4 137.7,180.1 137.7,180.3 137.5,180.6 137.5,180.9 137.8,181 138.2,181.2 138.5,181.1 139.1,180.3
			139.2,179.3 139.4,178.9 139.7,178.8 139.7,179.1 139.5,179.4 139.5,180.2 139,180.9 138.6,181.3 138.8,181.5 139.4,181.5
			139.9,181.4 140,181.5 139.7,181.9 139.4,182.6 138.7,183 138.7,183.3 139.1,184 139.6,184.3 140,184.1 140.4,184.1 140.5,184.5
			140.8,185 140.8,185.3 140.5,185.3 140.3,184.8 140,184.7 140,185.3 140.5,186 141.2,185.6 141.8,185.4 142.2,185.1 142,185.8
			141.5,186.9 141.7,187.9 142.1,187.9 142.1,188 214.3,195.2 		"/>
		<polygon fill="#E6EEF4" points="256.5,72.9 256.5,73.3 256.8,73.4 257,73.2 257.3,72.5 256.9,72.6 		"/>
		<polygon fill="#E6EEF4" points="260.7,60.8 261.1,60.7 261.3,60.4 260.9,60.1 260.3,60.4 259.9,61 260.3,61 		"/>
		<polygon fill="#E6EEF4" points="257.9,70 257.5,70 257.5,70.2 257.8,70.3 		"/>
		<polygon fill="#E6EEF4" points="257.8,71.6 257.9,71.2 257.7,70.9 257.6,70.5 257.2,70.7 257.1,71.1 256.8,71.3 256.9,71.9
			257.1,72.2 257.4,72.1 		"/>
		<polygon fill="#E6EEF4" points="249.6,52.9 249.7,53.3 250.2,53.3 250.4,53.1 250.9,53.2 251.4,52.7 251.5,52.2 251.5,51.5
			251.4,51.2 251.4,50.7 250.9,50.7 250.8,50.9 249.9,51.4 249.9,51.6 249.7,52 249.2,52.2 249,52.4 249.2,52.6 		"/>
		<polygon fill="#E6EEF4" points="302.9,90.8 302.9,90.3 302.7,90.5 302.7,90.9 		"/>
		<polygon fill="#E6EEF4" points="255,46.3 255.5,46.4 255.9,46.6 256.5,46.7 257.6,46.8 258,46.5 258.4,45.7 258,45.2 257.6,45.3
			256.9,45 256.2,45 255.7,44.9 255.3,44.9 255,45.1 254.7,45.3 254.6,45.7 254.7,45.9 254.9,46 		"/>
		<polygon fill="#E6EEF4" points="257.1,51.4 257,51.7 257.2,51.9 257.3,51.6 		"/>
		<polygon fill="#E6EEF4" points="254.3,49.1 254.5,49.3 254.7,49.1 255.2,49.1 255.7,49.4 256.3,49 256.5,48.8 257.1,48.7
			257.5,48.6 258,48.3 257.9,48 257.5,48 257.2,48.2 256.9,48.1 255.8,48.3 255.2,48.7 254.7,48.8 254.4,48.9 		"/>
		<polygon fill="#E6EEF4" points="256,63.6 255.5,64 254.8,64 254.6,64 254.8,64.4 255.5,64.6 256.3,65.1 256.5,64.8 257,65
			257.7,64.7 258.1,64.8 258.5,64.7 258.9,64.3 259.5,64.4 259.5,63.9 258.7,63.5 258.2,63.7 257.6,63.8 257.3,63.7 256.8,64 		"/>
		<polygon fill="#E6EEF4" points="303.5,58.7 302.2,59.5 301.9,60 301.6,60.1 301.7,60.8 301.9,60.8 302.1,60.6 302.3,60.4
			302.5,60.7 302.8,60.8 302.9,60.5 302.7,60.2 302.9,59.8 303.7,59.1 304,58.6 		"/>
		<path fill="#E6EEF4" d="M133.5,172.9l-0.2-0.2l-0.7,0.4l-0.1,0.5l0.2,0c0,0,0.4,0,0.4,0L133.5,172.9z"/>
		<polygon fill="#E6EEF4" points="139.8,185.4 139.3,184.7 138.7,184.2 138.8,185 139.6,185.7 		"/>
		<polygon fill="#E6EEF4" points="132.3,174.7 132.3,175.1 132.6,175.5 132.8,174.7 132.6,174.2 		"/>
		<polygon fill="#E6EEF4" points="132.7,172.1 132.8,172.5 132.9,172.5 133.1,172.1 133,171.9 		"/>
		<polygon fill="#E6EEF4" points="131.2,168.2 131.1,169.3 131.5,169.5 131.5,169.9 131.8,169.4 131.6,168.8 		"/>
		<polygon fill="#E6EEF4" points="132.7,169.6 132,169.9 132.7,170.2 132.9,169.9 		"/>
		<polygon fill="#E6EEF4" points="256.3,41.5 256,41.7 255.9,42.3 256,42.6 256,43 255.5,43.4 255.7,44.1 256.2,44.3 257,44.4
			257.3,44.7 257.7,44.5 257.8,44.1 257.8,43.5 257.6,43.1 257.8,42.8 257.9,42.6 257.3,42.6 257.1,42.5 257.3,42.2 257.6,42
			257.5,41.8 257.3,41.6 257,41.5 		"/>
		<polygon fill="#E6EEF4" points="259,37.9 259.7,37.5 260.1,36.2 259.8,35.8 260.2,35.2 260.1,34.8 260.5,33.7 260.4,33.4
			260.3,32.6 259.9,32.3 259.6,32.6 259.6,33.1 259.2,33.9 259.2,34.2 259,34.4 259,34.8 258.4,35.3 258.4,35.8 258.2,36.6
			258,37.1 258.3,37.8 		"/>
		<polygon fill="#E6EEF4" points="137.6,182.2 137.7,183 138,182 		"/>
		<polygon fill="#E6EEF4" points="131.3,167.5 131.6,167.2 131.3,166.8 		"/>
		<polygon fill="#E6EEF4" points="259.7,38.6 259.9,38.2 259.1,38.2 258.7,38.5 259.1,38.8 		"/>
		<polygon fill="#E6EEF4" points="249.6,23.3 250.2,23.4 250.5,23.2 250.9,23.3 251.4,23.3 251.7,23.6 251.5,23.9 251.6,24.5
			252,25 252.5,24.6 252.4,24.2 252.7,23.9 253.1,24.5 253.1,25.2 253.8,26 254.3,25.8 254.6,26.2 255.1,26.2 255.5,26.3 256,25.7
			256.7,25.4 257.1,24.3 256.7,23.5 257.2,22.8 257.2,22.4 256.9,21.8 256.9,21.4 256.5,21.2 256.2,21.5 255.9,21.4 255,21.4
			254.4,21.9 253.7,22 253.4,22 252.9,21.7 252.4,21.6 250.8,22 250.2,22 249.6,22.1 249.5,22.5 249,23 249,23.5 		"/>
		<polygon fill="#E6EEF4" points="133.9,180.3 133,179.8 132.6,179.3 132.5,178.8 131.9,178.8 131.5,178.2 131,178.1 130.8,178.3
			130,178.3 130.2,179 130.4,179.1 130.7,179.7 132.1,179.9 131.5,180.2 130.8,180.2 130.4,180.8 130.7,181 130.4,181.7
			130.6,181.8 131.2,181.6 131.3,182.1 131.9,182.1 131.9,182.6 132.5,183 133.1,182.7 132.3,183.6 132.7,184.3 133.1,184.1
			133.1,183.6 133.8,183.4 133.7,184.1 133.2,184.5 133.2,185 133.5,184.9 133.7,185.5 134.6,185.4 134.6,185.9 134.9,185.9
			135.1,186.5 135,187 135.6,187.5 136,187.2 136.3,187.4 136.8,187.4 136,188.3 137,189.3 137.4,189.4 137.6,189.8 139.3,190.8
			139.6,190.6 140.1,190.7 139.7,189.2 139.8,188.5 139.6,188.1 139.7,187 139.3,186.4 138,185.5 137.9,183.9 137.2,182.9
			137.2,181.9 136.9,181.6 136.3,181.5 135.3,181 134.8,181 134.2,180.8 		"/>
		<polygon fill="#E6EEF4" points="126.6,161.9 125.9,162.7 125.6,163.5 124.9,163.7 124.9,163.4 124.5,163.1 125.6,162.7
			126.1,162.3 126.1,161.6 126.1,161.3 125.7,161.1 125.4,161.4 125,161.5 125.2,160.9 124.3,160.6 123.4,162 123.6,163
			123.3,163.6 123.3,164.1 123.8,164.2 124.1,164.6 124.1,165.1 123.9,164.9 123.4,164.9 123.3,165.2 123.8,165.6 123.4,166.2
			123.8,166.4 124.3,166.9 123.6,166.9 123.4,167.3 123.6,167.7 124.2,167.9 124.1,168.2 124.1,169 125,170.8 125.7,171 126,170.5
			125.8,170.2 125.4,170.2 125.2,169.5 124.9,168.6 125,167.8 124.8,167.2 125.2,166.5 125.9,166.5 125.8,165.9 125.2,165.8
			124.9,166 124.4,166 124.8,165.5 125.3,165.5 125.9,165 126,164.1 126.5,163.5 126.7,162.6 127.7,161.5 127.5,161.4 		"/>
		<polygon fill="#E6EEF4" points="130.8,163.3 130.6,163.3 130.4,163.4 130.5,164.1 130.9,164.8 130.9,165.6 131.5,166 131.6,165.2
			131.1,164.1 		"/>
		<path fill="#E6EEF4" d="M304.1,96.6l0.2-0.3l0.3-0.2l0.2,0.2l0.5-0.1l0.3-0.4l-0.3-0.2h-0.4l-0.1-0.4l-0.4-0.1l-0.5,0.3l-0.3,0.5
			l0.2,0.3l0,0.4C303.9,96.5,304.1,96.6,304.1,96.6z"/>
		<polygon fill="#E6EEF4" points="194,63.1 195,63.1 195,63.6 194.3,63.4 194.8,64.9 195.1,65.2 195,65.9 194.8,66.6 195.1,67.3
			194.6,68.2 194.6,69.2 194.5,69.5 195,69.5 195.2,69.6 195.7,69.2 196.3,69 196.8,69.1 197.5,68.9 198.3,68.2 198.6,68
			198.6,67.8 199.1,67.4 199.4,67.7 199.4,68.4 199,68.7 199.3,69.2 199.8,69.2 200.5,68.8 201.3,68.9 201.8,68.3 202.6,67.5
			202.5,67.2 203.2,66.5 203.3,66 204,65.3 204.6,65.1 204.7,64.5 205,63.8 205.5,64.5 206.3,64.6 206.9,64 207.6,63.9 207.8,63.1
			208.1,63.1 208.6,62.5 208.9,61.8 209.8,61.6 210.2,61.4 210.4,61.7 210.8,61.5 211.8,61.4 212.4,61 212.9,61 214.1,60.5
			215.1,60.4 216.6,59.7 217.4,59.8 218.6,59.6 219,59.4 220,59.1 220.5,58.5 220.4,58 220.4,57.4 220.1,57 220.3,56.8 220.4,55.9
			220,55 220.2,54.5 220.1,53.1 219,52.1 218.9,51.5 218.6,51.4 217.8,51.7 217.1,51.6 216.7,51.9 216.7,52.6 215.6,53.3 215.5,53
			216.3,52.2 216.5,51.4 215.9,51.1 215.5,51.4 215,51.4 215.4,51 215.3,50.6 213.9,49.9 213.5,49.2 213.1,49 213.3,48.4
			211.8,47.9 210.5,48.4 208.6,48.4 208.2,48.2 206.6,48.4 206.1,48.2 205.3,48.5 205.1,48.9 205.3,49.2 205,49.7 205,50.5
			204.9,51.6 205.3,52.1 204.9,52.6 204.3,52.6 203.5,53.3 203.3,53.8 202.2,54.2 201.7,55 200.4,55.9 199.8,56.1 199.8,56.5
			200.1,57.3 200.1,58.1 198.6,57.9 198.4,57.6 198.3,58.5 197.8,59.2 197.5,59.4 197.4,59.6 196.4,59.8 196.1,60.6 195.6,60.7
			195.2,61.2 194.8,61.2 194.8,61.7 194,62 193.5,62.5 193,62.3 193.1,62.8 		"/>
		<polygon fill="#E6EEF4" points="219,34 218.6,34 218.4,34.3 218.8,34.6 218.6,35 217.9,35.3 217.9,35.5 218.4,35.7 219,35.6
			219.2,35.2 219.6,35 220.1,35.3 220.5,36 220.6,36.6 221.1,36.8 221.3,36.6 221.3,36 221.5,36 221.7,35.2 222,35.2 222.7,34.9
			223,35 222.9,35.4 222.4,35.7 222.1,36.4 222.3,36.8 222,37.1 221.8,37.6 222,37.9 222.3,37.6 222.6,37.7 222.7,38.1 222.9,38.1
			223.8,37.6 224.1,37.1 224.5,37.2 224.8,36.7 224.8,36 225.1,36 225.5,35.6 225.5,34.9 225.7,34.7 225.9,34.9 225.8,35.4
			225.9,35.7 225.7,36.4 226,36.9 226.2,36.9 226.7,36.3 226.7,35.7 226.9,35.5 227.3,35.4 227.9,34.6 228,34 227.9,33.4 228.1,33
			228.5,33.5 229.4,32.9 229.7,32.2 229.8,31.7 230.3,31.6 230.6,31.4 230.9,31.7 231.4,31.2 231.7,31.4 231.4,32.4 230.7,33.1
			230.6,33.7 230.2,34.1 230.2,34.4 229.7,34.6 229,35.7 229,36 229.3,36.4 229.2,36.9 229.6,37.1 230.1,37.3 230.4,36.9
			230.9,36.7 231.1,36.2 231,35.7 231.4,35.3 231.7,34.9 232.1,34.9 232.4,34.7 232.7,35 233.2,35 233.5,34.7 234.4,34.6
			234.7,34.2 235,33.2 235.5,32.4 235.5,31.9 235.6,31.6 236,32.3 236.5,32.4 236.7,32.1 236.6,31.8 236.1,31 236.1,30.6
			236.7,30.1 237.2,30 237.8,29.7 238.2,29.9 238.5,29.9 239,29.3 238.9,28.8 238.8,27.7 239,27.4 238.8,27.2 238.7,26.5
			238.4,26.4 238,26.6 237.4,26.9 237.3,27.6 237.3,28 237.4,28.3 236.9,28.4 236.7,27.9 236.6,27.9 236.5,28.2 236.3,28.5
			236,28.1 235.9,27.3 235.4,26.7 235.1,26.7 234.9,27 234.3,26.9 233.7,26.7 233.4,26.8 232.2,26.7 231.5,27 231.4,27.5
			231.1,27.8 230.9,27.7 230.6,27.7 229.2,28.8 228.8,29.1 228.4,29.1 227.7,29.6 227.2,29.7 226.7,30.1 226.7,30.5 225.7,30.5
			225.5,30.7 224.9,30.6 224.7,30.8 224.3,30.8 223.4,31.5 222.8,31.9 222.1,31.7 221.6,31.9 220.3,32.1 219.8,33 219.3,33
			218.6,33.2 218.3,33.8 218.8,33.7 		"/>
		<path fill="#E6EEF4" d="M238,33.7l-0.4,0.1c0,0,0,0.2,0,0.2l0.3,0.1l0.4,0.4l0.2,0.5l0.4,0l0.4,0.2l0.5-0.3l0.3-0.4l-0.2-0.3
			l-0.1-0.4l-0.4-0.2l-0.4,0.1l-0.8-0.4L238,33.7z"/>
		<polygon fill="#E6EEF4" points="187.5,75.5 187.5,75.2 187.8,75.1 187.2,75 186.9,75.3 187.3,75.6 		"/>
		<path fill="#E6EEF4" d="M129.2,164.4l0.2,0.5l0.8,0.9v0.6l0.4,0.2l0.2-0.5l-0.4-0.8l-1.1-1.3C129.3,164,129.2,164.4,129.2,164.4z"
			/>
		<polygon fill="#E6EEF4" points="244.8,28.4 244.7,28.8 244.3,29.4 244.4,30 244.5,30.6 244.9,30.7 245.4,31.1 245.8,31.8
			245.5,32.1 245.6,32.3 246.2,32.3 246.8,32.4 247.1,32.2 247.7,32.7 248.3,32.7 248.9,32.4 249.5,32.4 249.8,31.9 249.8,31.6
			250.3,31.5 250.4,31.1 251.1,30.3 251,29.9 250.8,30 250.2,29.9 250.2,29.6 250.9,29 251.4,29 252.7,28.5 253.2,28.6 253.7,27.7
			253.5,27.5 252.9,27.4 252.7,27.1 252.1,27 251.3,27 251.2,26.8 250.4,26.6 250,26.8 249.4,26.8 249,26.6 248.5,26.6 248.2,26.3
			246.9,26.6 246.5,26.6 246,27 245.4,27.2 245.4,27.8 		"/>
		<polygon fill="#E6EEF4" points="241.6,32 241.9,31.6 241.2,31.7 241,32 241.3,32.2 		"/>
		<polygon fill="#E6EEF4" points="243.6,27.4 244,27.6 244.7,27.4 245.1,26.8 245.1,26.1 245.2,25.7 245.2,25.3 245.4,24.6
			244.9,24.7 244.6,24.7 244.2,24.5 243.8,24.8 243.5,24.9 243.3,25.4 243.3,26 243.2,26.6 		"/>
		<polygon fill="#E6EEF4" points="239.5,46.3 239.3,46.1 238.9,46.5 238.3,46.6 238,46.5 238,45.5 238.5,45.1 238.9,44 238.5,44
			237.9,43.7 237.3,43.8 237.2,43.4 237.7,43.2 238.3,43.4 238.5,43 238.4,41.9 237.9,41.3 238.1,40.9 238.5,40.7 238.5,40.3
			238.2,40 238.1,39.7 237.9,39.3 237.6,39.3 237.2,39.1 236.9,39.3 235.8,39.4 235.7,38.9 236.1,38.2 236.5,38 236.3,37.2
			235.7,36.7 234.9,36.7 234.4,36.6 232.9,36.9 232.6,37.2 232.8,37.5 232.9,37.9 233.5,38.4 233.7,38.9 233.4,38.7 232.8,38.2
			232.3,38.2 232.1,37.9 231.6,37.9 231,38.2 230.6,38.2 230.2,38.5 229.9,39 229.3,39.5 229.6,40 230.8,40.3 231.3,40.3
			231.9,40.6 232.2,40.6 232.4,40.9 232.1,41 231.4,40.8 230.2,40.7 229.2,40.9 228.8,40.8 228.2,40.9 227.6,41.6 226.8,42.4
			226.9,42.6 227.6,42.6 228.5,42.9 229,42.8 229.6,42.8 229.9,43 230.3,43.3 229.7,43.7 229,43.8 228.6,44.1 227.9,44 227.2,43.6
			226.2,43.6 225.9,43.5 225.3,43.6 224.3,44.3 224.5,44.7 224.5,45.2 223.9,45.3 223.9,45.5 224.8,46.1 225.4,46.9 225.7,47
			225.8,46.4 226.1,46.5 225.9,47 226.5,47.4 226.5,48 227,48.3 227.4,48 227.5,47.3 227.7,47.5 228.2,47.4 227.9,47.8 227.9,48.3
			228.5,48.7 229,48.6 229.2,48.2 230.1,47.8 230.2,47.2 230.4,47 230.6,47.6 231,47.2 231.6,47 232,47.1 231.3,47.6 230.7,48
			230.7,48.5 231.4,48.7 231.9,48.6 232.2,48.8 232.7,48.6 233.3,48.6 233.7,48.2 234,48.5 234,49 234.7,49 235.5,48.6 235.5,48.9
			236.3,48.9 236.7,48.5 236.9,48.8 236.5,49.1 236.4,49.4 235.1,49.5 234.6,49.9 234.3,49.7 233.6,49.7 232.7,49.4 231.8,49.4
			231.1,49.8 230.6,49.9 230,49.7 229.6,50 228.7,49.8 227.9,49.9 227.8,50.8 227.9,51.2 227.7,51.9 228.3,52.4 228.6,52.9
			229.3,53.1 230.1,53.5 231,53.5 231.7,53.3 232.5,53.3 232.6,53.6 233.3,53.6 233.9,53.3 234,53.4 234.6,53.2 234.7,52.9
			235.4,52.9 235.7,52.7 235.7,52.2 236.1,52.1 236.6,52.1 236.8,51.8 237.1,52 237.8,51.9 238,52.1 238.6,52.1 238.9,51.9
			239.8,51.5 240.2,51.5 240.5,51.3 240.5,51 240.9,51.1 241,51.5 240.8,51.8 240.8,52.1 241.5,52.3 241.9,52.2 242.1,51.8
			242.6,51.6 242.8,51.6 242.9,51.9 242.5,52.4 242.7,52.8 243.4,53 244.2,52.9 245.1,52.5 245.5,52.5 246,52.3 246.3,52.7
			246.6,52.5 246.6,52.2 246.9,52.1 247.2,52 247.4,51.8 247.4,51.3 247.9,50.9 248.3,50.9 248.9,50.1 248.8,49.7 249,49.4
			249.3,49.4 249.9,49.2 250.5,48.6 251.2,47.3 251.4,46.5 251.1,46.1 250.8,45.2 250.1,44.8 249.8,44.8 248.9,45.4 248.8,46
			248.5,46.5 248.6,46.6 248.5,47 248.1,46.9 247.6,47.5 247.5,47.2 247.9,46.4 248,45.7 247.2,45.3 246.9,45.4 246.5,45.8
			245.5,46.2 245.3,46.8 245.1,46.5 245.2,46 246,45.3 246.9,44.8 247.3,44.2 247.1,43.9 246.3,43.8 245.9,44 245.6,44 245.6,43.8
			246,43.4 246.8,42.7 247.1,42.7 247.4,42.5 247.4,41.2 247.2,41 247.2,40.3 247.4,39.7 247.4,39.3 247.7,39 248.2,39 248.3,38.6
			248.1,38.2 248.2,37.9 247.5,37.5 247.1,37.4 245.8,38.6 245.2,38.8 245,39.3 245.1,39.6 244.5,39.6 244.3,39.5 243.8,39.8
			243.3,40.5 243.6,41.1 243.5,41.8 243.8,42 244.2,42.9 243.9,43.6 243.3,43.6 242.5,43.9 242.2,43.9 241.9,44.2 242.2,44.7
			242.2,45.1 242.7,45.6 242.9,46.5 242.1,47 242.2,47.1 242.3,47.5 242,47.6 241.6,47 240.6,46.7 240.2,46.8 239.6,46.7 		"/>
		<polygon fill="#E6EEF4" points="218,34.9 218.2,34.8 218.1,34.5 217.5,34.3 217.4,34.5 217.5,34.7 		"/>
		<path fill="#E6EEF4" d="M319.5,190.5c0,0,0.1,0.1,0.1,0.1l0.3-0.2l0.1-0.4l0-0.3l-0.3,0.3L319.5,190.5z"/>
		<polygon fill="#E6EEF4" points="294.8,38.3 295.1,37.9 294.8,37.8 294.5,37.9 294.4,38.3 294.1,38.7 294,39.2 294.2,39.1
			294.8,38.6 		"/>
		<path fill="#E6EEF4" d="M317.6,120l0.3-0.5l-0.3-0.2l-0.2,0.2l-0.4,0.2l0,0.5c0,0,0.2-0.1,0.2-0.1L317.6,120z"/>
		<path fill="#E6EEF4" d="M321,198.6l-0.1,0.1l-0.1-0.2l-0.2,0l0,0.1l0.1,0.6c0,0,0.3,0,0.3,0l0.3-0.3l0-0.2L321,198.6z"/>
		<polygon fill="#E6EEF4" points="315.2,117.6 315.4,117.4 315.4,116.8 315.1,116.5 314.7,116.9 314.9,117.6 		"/>
		<path fill="#E6EEF4" d="M322.1,40.5l-0.4-0.2c0,0-0.2,0.1-0.3,0l-0.2,0.2l0.3,0.3l0.5,0L322.1,40.5z"/>
		<polygon fill="#E6EEF4" points="319.2,199.5 319.4,199.6 319.8,199.4 320.1,199 320,198.7 319.9,198.7 319.9,198.9 319.8,199.2
			319.6,199.2 319.3,199.1 319.2,199.2 		"/>
		<polygon fill="#E6EEF4" points="308.3,110.8 308.6,111 308.9,110.9 308.7,110.7 		"/>
		<polygon fill="#E6EEF4" points="311,105.2 311.1,105.4 311.4,105.4 311.7,105.1 311.2,104.9 		"/>
		<polygon fill="#E6EEF4" points="312,46.4 311.5,46.5 311.7,46.9 312.2,46.8 		"/>
		<path fill="#E6EEF4" d="M310.9,113.1c0,0-0.3,0.2-0.3,0.2l0.5,0.3l0.2-0.2l-0.1-0.3L310.9,113.1z"/>
		<polygon fill="#E6EEF4" points="309.9,104.7 309.9,105 310.1,105.2 310.4,105.2 310.9,104.7 310.7,104.4 310.5,104.6 		"/>
		<polygon fill="#E6EEF4" points="297.7,46 297.7,45.5 297.5,45.2 297.2,45.3 297.1,45.6 297.4,46.3 297.6,46.2 		"/>
		<polygon fill="#E6EEF4" points="267.1,35.8 267.6,35.6 268.1,35.9 268.5,35.8 268.4,34.9 268.5,34.4 267.7,33.4 266.9,33.2
			266,33.3 265.7,33.8 265.6,34.6 266.3,35.1 266.7,35.8 		"/>
		<path fill="#E6EEF4" d="M259.9,45.2l-0.1,0.2l-0.5,0.4l-0.1,0.3l0.3,0.1l0.3,0l0.3,0.4l-0.6,0.2l-0.1,0.3l-0.5,0.2l-0.2,0.7
			l0.5,0.2l0,0.3l-0.6,0.2l-0.2,0.5l0.3,0.4l0.1,0.5l-0.2,0.3l-0.2-0.1l0-0.8l-0.3-0.2l-0.1-0.5l-0.3,0.1l-0.5,0l-0.3,0.2l-0.2,0.4
			l0.2,0.3l-0.3,0.1l-0.3-0.2l-0.3,0.3l-0.4-0.1v0.6l0.2,0.2l0.3,0l0.3,0.1l0.2-0.2h0.5l0.4,0.2l0.3-0.1l0.6,0.3l0.7-0.1l0.4,0.2
			l0.6,0l2.2,0.4l0.3,0.2l-0.4,0.3l-0.6-0.1h-0.7l-0.5,0.3l-0.8,0.1l-0.3,0.1l0.4,0l0.3,0.3l-0.3,0.2l-0.9-0.2l-0.4-0.2l-0.3,0.2
			l0.1,0.3l-0.2,0.2l-0.3-0.3l-0.2,0l0.1,0.2v0.3l0.3,0.3l0.4,0.1l-0.1,0.3l0.3,0.4l-0.2,0l-0.3-0.4l-0.2-0.1l-0.2,0.5l0.1,0.3
			l-0.2,0.2v0.5l0.3,0.3l0.5,0l0.3,0.3l0.2-0.1L259,56l0.7-0.3l-0.4,0.5l0.1,0.3l0.4,0.1l0.4-0.4l0.2,0.3l0.1,0.5l1.5,0.1l0.4-0.5
			l-0.1-0.4l0.1-0.4l0.2-0.3l0.1,0.3l0,0.5l0.3,0.5l0.2-0.2l0-0.5l0-0.2l0.2-0.3l0.1-0.3l-0.5,0.1l-0.3-0.1l0.2-0.5l0.5-0.1l0.3-0.4
			l0.3-0.2l0-0.4l0.3-0.1l0.3,0.1v0.3l0,0.4l0.2-0.3l0.7-0.9l0-0.3l-0.7-0.4l0-0.2l0.3-0.2l0.3,0.1l0.4,0l0.2-0.5l0-0.3l0.5-0.6
			l0.2-0.3l0.6-0.7l0.5-0.3l0.2-0.4l-0.1-0.6l0.5-0.8l0.5-0.4l0.1-0.5l-0.2-0.5l-0.5-0.2l-0.3-0.5l0.3,0l0.1-0.3l-0.1-0.2l0.1-0.4
			l-0.2-0.4l-0.4,0l0.1,0.2l0,0.5l-0.4,0.1l-0.4-0.3l-0.4,0.3l0,0.8l-0.3,0.3l-0.3-0.1l-0.2,0.3l-0.3,0l-0.1-0.4l0.4-0.4l0.2-1.1
			l-0.3-0.3l-0.4,0.1l-0.4-0.2l-0.1-0.4c0,0-0.3,0-0.4,0c0,0-0.6,0.3-0.6,0.3l-0.5,0l-0.2,0.3l-0.5,0.1l-0.3,0.2l-0.1,0.7l-0.1,0.3
			l0.2,0.7l0.5,0.6l0.1,0.4l-0.5-0.3l-0.4,0l-0.1,0.3l0.9,0.6v0.4l-0.5,0.1l-0.2,0.8l0.3,0.4l-0.6,0.4l-0.5-0.3l-0.1-0.3l0.1-0.5
			l-0.2-1.5l-0.3-0.4l-0.1-0.4l0.1-0.2l0-0.4l-0.3-0.3l-0.1-0.5l-0.2-0.2L259.9,45.2z"/>
		<polygon fill="#E6EEF4" points="267.7,30.5 267.8,30.1 268.2,29.9 267.7,29.9 267,30.2 266.9,30.8 267.2,30.8 		"/>
		<polygon fill="#E6EEF4" points="265.2,29.2 265.6,29.4 266,29 266.5,29 267.3,29.3 268.2,29.3 268.3,29.5 269.2,29.2 269.2,29.7
			268.7,29.8 268.5,30.1 268.6,30.6 269.4,30.5 270,31 270.3,31.9 270.7,31.9 270.9,32.1 270.7,32.5 270.7,33.1 269.8,34.8
			270.1,35.7 270.4,36.2 270.7,36.2 271.2,36.1 271.4,36.3 271.8,36.3 272.6,35.8 272.6,35.5 273.1,35.2 273.5,34.6 273.6,33.9
			273.8,33 274.2,32.3 273.9,32.1 273.9,31.8 274.2,31.5 274.6,30.8 275,30.7 275.4,30.3 276,29.9 276.2,29.1 276.1,28.7
			276.6,28.3 276.6,27.9 276.4,27.5 276.3,26.8 276,26.8 275.5,26.6 274.9,26.6 274.7,26.3 275,25.9 275.8,25.4 275.8,25.1
			275.5,24.7 275.5,24 275.6,23.6 275.1,23 274.7,23.1 274.1,23.5 273.3,23.6 273.2,24.1 272.7,24.5 272.3,24.5 272.2,24
			272.8,23.7 273.1,23.3 273.1,22.5 273.3,21.6 273.2,21 272.8,20.7 272.7,20.2 272,19.8 271.5,20 270.8,19.8 270.1,20.4
			269.7,20.3 269.7,19.5 269.5,19.2 269.1,19.6 268.9,20.1 268.4,20.4 268.2,21 267.6,21.7 267.6,22.2 268.1,22.5 268.3,22.2
			269,22.1 269.1,22.3 268.5,22.9 267.8,23.3 267.3,24.1 267.4,24.3 268.1,23.9 268.9,23.3 269.1,23.3 269.5,23.1 269.9,23.5
			269.7,24.1 269.3,24.1 268.7,24.7 268.5,25.1 268.7,25.5 269.5,25.3 269.9,25.6 269.3,26 268.5,26.3 268.1,26.2 268.1,26.5
			268.6,26.7 268.6,27 267.8,27.8 267.6,27.8 267.3,27.1 266.8,26.8 266.4,26.2 265.3,26.7 265.3,27 264.7,28 265.2,28.7 		"/>
		<path fill="#E6EEF4" d="M262.2,43.5l0.6-0.1l0.4,0.1L264,43l0.4,0l0.5-0.2l-0.2-0.2l-0.8-0.1l-0.6,0.1c0,0-0.4,0.3-0.5,0.3
			c-0.1,0-0.4-0.1-0.4-0.1l-0.5,0.2l-0.3,0.2v0.3l0.2,0.3L262.2,43.5z"/>
		<polygon fill="#E6EEF4" points="265.8,43 265.8,43.3 266.1,43.7 266.2,44 266.5,43.9 266.3,43.4 266,43 		"/>
		<polygon fill="#E6EEF4" points="287.1,35.2 286.9,35.6 286.9,36.8 287.3,36.5 287.7,36.6 287.7,37.5 288.4,37.7 289.5,38.5
			290,38.3 290.3,37.8 290.1,37.3 290.9,37.3 291,37.8 290.9,38.3 291,38.9 291.2,38.7 291.7,37.4 291.7,36.3 291.9,35.5
			292.5,34.9 292.8,34.3 292.8,35 292.1,36.1 292,36.8 292.1,37.3 291.9,38.3 292.2,38.9 292.1,39.2 292.2,39.4 292.6,39.1
			292.9,38.5 293.8,37.6 294.2,36.2 294.5,36 294.6,36.4 294.4,37.1 294.4,37.4 294.8,37.5 295.4,37 295.9,36.6 295.8,36.1
			295.3,36 295.3,35.8 295.9,35.6 295.9,34.8 295.7,34.5 295.7,34 296.4,33.4 296.7,32.5 297.2,32.3 297.5,31.9 297.4,32.4
			297.5,32.6 297.1,32.8 296.8,33.7 296.3,34.3 296.2,35.1 296.4,35.6 296.6,36.2 296.9,35.9 297.3,35 298.4,34.1 298.7,33.5
			298.7,32.8 299.1,32.2 299.4,32.1 299.5,32.4 299.3,32.6 299.3,33.3 299.8,33.1 300.4,32.3 300.9,32.3 301.7,32.4 302.6,32.1
			303.1,32.1 303.4,31.7 304,31.5 304.2,31 304.2,30.6 304.3,30.2 303.9,29.8 304.2,29.1 304.1,27.8 303.9,27.9 303.6,28.7
			302.9,29.4 302.6,29.4 302.6,29 303,28.5 303.6,28.2 303.7,27.7 303,27.2 302.9,26.8 302.6,26.7 302.4,26.9 302.2,27.3 301.9,27
			301.4,27 300.9,27.4 300.5,27.3 300.7,27 302,26.4 302.6,26.3 303.5,25.3 303.8,25.1 304.4,24 304.7,23.1 304.5,23 304,23.1
			303.7,23.3 303.5,23 303.7,22.7 304.1,22.5 304.5,22.5 304.7,22.2 304.7,21.6 305.2,21 305.2,20.4 305,20.2 305.1,19.8
			304.6,19.6 304.1,19.8 303.5,21 303.3,21.6 303.7,22 303.3,22.5 303,22.7 302.8,22.6 302.9,22.3 302.7,22 302.7,21.5 303.2,20.6
			303,20.1 303.1,19.8 303.3,20 303.7,19.8 303.5,19.1 303.2,18.5 302.7,18.5 302.1,18.7 301.8,19.2 301.7,18.8 301.5,18.7
			301.6,17.9 301.3,17.1 301.4,16 301.4,15.1 301.7,14.4 301.8,13.5 301.7,12.9 302.1,12 302.2,11.3 301.7,10.7 301.5,10.1
			300.7,9.5 300.6,9 299.8,8.7 299.5,8.9 299.5,9.2 299.3,9.3 298.6,8.6 298,8.7 298,9.3 297.6,10.1 297.9,10.4 298.5,10.4
			299,10.2 299.7,10.6 299.9,11 300.3,11.1 300.3,11.4 299.5,12.3 299.1,12.3 298.5,11.8 298,11.9 297.5,11.8 297.7,12.2
			298.1,12.3 297.7,12.7 297.2,12.9 296.5,12.1 295.7,12.5 295.4,13.2 295,13.6 295.1,13.9 295.5,14.1 295.7,14.7 296.3,15.1
			296.3,15.4 295.9,15.3 295.8,15.8 296.1,16.1 296.1,16.4 295.7,16.4 295.3,16.1 294.8,16 294.2,15.6 293.8,15.5 293.3,15.8
			293.2,16.3 293.5,16.8 293.3,17.3 293,17.1 293,16.7 292.6,16.4 292,16.2 291.8,16.3 291.4,15.9 291.1,15.8 290.9,16.1
			291.2,16.8 291.1,17.4 291.3,18.1 291.8,18.4 292.5,18.5 292.7,18.8 292.5,18.9 291.9,18.9 292.6,19.3 292.8,19.7 293.3,20
			294,20 294.3,19.7 294.6,19.7 294.6,20.1 294.2,20.4 294,21.2 293.7,21.3 292.9,20.7 291.4,20.4 290.9,19.6 290.5,19.5
			290.3,19.2 290.1,19.2 289.9,19.8 289.9,20 289.7,20.3 289.9,21.2 289.5,21.4 289.2,21.3 289.2,22 288.9,22.2 288.9,23.4
			289.2,23.7 290.1,23.7 290.6,24 291.1,23.8 291.1,24.1 290.7,24.3 290.1,24.1 289.3,24.1 289,24 288.5,24 287.7,25 287.7,25.4
			288,25.8 287.9,26.1 287.6,26.2 287.5,26.7 287.8,27 288.2,26.7 288.9,26.8 289.3,26.3 289.6,26.6 289.5,27 289,27.1 288.7,27.6
			288.9,27.9 289.3,27.9 289.8,27.4 290.1,27.5 290.6,27.1 290.6,27.4 290.4,27.7 290.7,27.9 291.5,27.8 291.7,28.2 291.2,28.2
			291.2,28.7 291.6,28.7 292.2,28.6 292.9,29 294.2,29.4 294.3,29.6 293.2,29.6 292.6,29.6 291.9,29.1 291.2,29.4 291.1,29.7
			291.9,30 293,30.2 294.1,30.2 294.5,30.4 293.3,30.7 292.9,30.5 291.8,30.3 291.1,30.3 290.7,29.9 290.2,29.7 289.4,29
			289.1,29.3 288.7,29.7 287.9,29.7 287.5,30 287.4,31 288,31.6 288,32.2 287.8,32.5 287.4,31.6 287.1,31.5 286.8,32.8 286.9,33.5
			287.3,33.6 287.4,33.4 287.8,33.4 288.1,34 288.5,34.1 288.1,34.2 287.8,34.5 287.3,33.9 286.6,34 286.5,35 286.8,35.4 		"/>
		<polygon fill="#E6EEF4" points="294.3,15.2 294.5,15.4 294.8,15.4 294.8,14.9 294.3,14.9 294.1,14.7 293.8,14.7 293.6,14.9
			293.8,15.1 		"/>
		<polygon fill="#E6EEF4" points="283.3,18.8 283.8,18.6 283.8,19.1 283.3,19.6 283.3,20.1 283.6,20.3 283.8,20.7 284.3,20.1
			284.7,19.4 284.8,19 285.4,18.4 285.8,17.7 285.6,17.3 285,17.3 284.6,17.1 284.8,16.6 284.6,16.6 283.9,17.2 283.1,17.4
			283,17.9 282.7,18.2 282.7,18.6 		"/>
		<polygon fill="#E6EEF4" points="276.8,33.3 277.3,33.6 277.9,34.5 277.8,34.9 277.6,34.9 277.1,34.4 276.4,34.4 276.2,34.8
			276.1,35.1 276.6,35.4 276.6,36.1 276.9,36.4 276.6,36.8 276.6,37.4 277.1,37.2 277.2,36.8 277.7,36.9 277.8,37.5 278.2,37.5
			278.9,37.3 279.4,37.5 280,37 280.3,37.2 280.3,37.7 280.7,37.7 280.9,37.4 281.9,36.8 282,36.3 281.9,35.4 281.6,35.4
			281.3,35.2 281.6,35 282.1,35 282.5,34.7 283,34.3 282.8,33.2 282.5,32.7 282.5,32.5 282,32.4 281.7,31.8 281.7,31.5 281.4,31.3
			281.3,30.7 281,30.6 280.9,30.2 280.9,29.8 280.7,29.2 280,28.3 279.5,28.3 278.8,28.9 278.4,29.3 278.4,30.1 278,30.3
			277.6,30.3 277.3,31 277.3,31.9 276.9,32.4 277.2,33 276.7,33 		"/>
		<polygon fill="#E6EEF4" points="285.1,43.3 285.1,43.8 284.9,44.4 285,45 285,45.4 285.4,45.8 286,45.9 286.6,45.6 287.2,44.7
			287.3,44.3 287,44.1 287.1,43.9 286.8,43.5 286.4,43.4 286.1,42.9 285.7,42.8 		"/>
		<polygon fill="#E6EEF4" points="301,34.2 301.5,33.7 302.2,33.7 302.4,33.4 301.8,32.9 301.3,32.6 300.8,33 300.4,33 299.8,33.9
			299.9,34.1 300.3,34.3 		"/>
		<polygon fill="#E6EEF4" points="303.6,146.9 303.4,147 303.4,147.3 303.7,147.7 304,147.7 304.3,147.9 304.3,148.2 304.5,148.4
			304.6,148.4 304.7,148.1 304.9,147.9 305,147.6 305.2,147.4 305.2,147.2 304.7,146.9 303.9,146.8 		"/>
		<polygon fill="#E6EEF4" points="296.5,150.8 295.9,150.9 295.3,151.4 295.2,151.6 295,151.9 294.8,152.4 294.9,152.7 295.1,152.7
			295.6,152.3 296,152.3 296.2,152 296.6,151.7 296.6,151.4 296.5,151.3 296.5,151 		"/>
		<polygon fill="#E6EEF4" points="284,139.5 283.3,139 283,138.9 282.8,138.9 283.2,139.2 283.6,139.6 284,139.7 284.6,139.9
			284.4,139.7 		"/>
		<polygon fill="#E6EEF4" points="305,146.8 305.1,146.7 305.1,146.3 304.8,146 304.8,145.7 304.5,145.4 304.3,145.6 304.3,145.8
			304.5,146 304.5,146.4 		"/>
		<polygon fill="#E6EEF4" points="292.3,140.6 292.7,140.8 292.9,140.9 293.2,140.9 293.3,140.7 293.4,140.7 293.4,140.4 293,140
			292.7,139.9 292.6,139.7 292.1,139.5 291.7,139.4 291.5,139.5 291.7,139.6 292.2,139.8 292.3,140.1 292.3,140.2 		"/>
		<polygon fill="#E6EEF4" points="135.4,180.6 135.4,180.2 134.6,180.3 		"/>
		<polygon fill="#E6EEF4" points="135.9,179.5 135.5,179.2 135.4,179.5 135,179.5 135,179.9 135.4,179.9 		"/>
		<polygon fill="#E6EEF4" points="234.3,91 234.5,91 234.6,90.7 234.5,90.5 234.3,90.7 		"/>
		<polygon fill="#E6EEF4" points="133.2,170.1 133.4,169.9 133.4,169.7 133.7,169.5 133.6,168.9 133.2,169.4 		"/>
		<polygon fill="#E6EEF4" points="306.4,142.8 305.9,142.9 305.6,143.2 305.7,143.3 306.1,143.3 306.6,143.8 306.8,143.6
			306.9,143.2 307.1,143 307.1,142.8 306.8,142.6 		"/>
		<polygon fill="#E6EEF4" points="134.5,179 135,179.1 134.8,178.6 		"/>
		<polygon fill="#E6EEF4" points="307.5,131.9 307.1,132.5 307.4,132.5 307.6,132.3 308,132 307.9,131.7 		"/>
		<polygon fill="#E6EEF4" points="283.3,108.3 283.1,108.8 283.3,109.4 283.5,109.3 283.5,108.9 283.9,108.9 283.9,108.5
			283.5,108.5 		"/>
		<path fill="#E6EEF4" d="M283.8,99.9l-0.4-0.4l-0.5-0.1l-0.1,0.3c0,0-0.4,0.3-0.4,0.3l0.4,0.1l0.1,0.3l0.1,0.2l-0.1,0.2l0.1,0.3
			l0.3-0.1l0-0.4l0.3,0.1l0.4-0.1l0.2,0.1l0.3-0.3l-0.3-0.4L283.8,99.9z"/>
		<polygon fill="#E6EEF4" points="292.5,111.4 292.2,111.5 291.9,111.5 291.8,111.7 291.9,112.2 292.1,112.9 292.3,113 292.6,112.9
			293.1,113 293.4,113.2 293.8,113.1 294.3,113.2 294.5,112.9 294.3,112.6 294.4,112 293.8,112 293.6,111.6 293.1,111.5 293,111.6
			292.9,111.3 292.9,111 292.7,111.1 		"/>
		<polygon fill="#E6EEF4" points="278.1,131.8 277.9,131.5 277.5,131.6 277.3,131.9 277.9,131.9 		"/>
		<polygon fill="#E6EEF4" points="293.2,109.2 293.3,109 293.1,108.7 293,108.1 292.8,108.8 293,109.2 		"/>
		<polygon fill="#E6EEF4" points="284.3,107.3 284.4,107 284.1,106.8 283.9,106.7 284,107.2 283.8,107.5 283.8,107.7 284.2,107.7
			"/>
		<polygon fill="#E6EEF4" points="289,99.1 288.7,99.2 288.7,99.6 288.9,99.5 		"/>
		<polygon fill="#E6EEF4" points="288.3,109.5 287.8,109.9 287,111 286.5,111.3 286.2,111.9 285.5,112.7 285.5,113.3 285.4,113.9
			285.6,114.1 285.4,114.7 285.5,114.9 285.8,114.9 286.2,115.1 287,114.9 287.3,115.1 287.9,114.9 288.3,114.8 288.5,114.6
			289.2,114.3 289.6,114.1 289.9,113.7 290.6,112.6 290.6,112 290.9,111.5 291.3,111.1 291.4,110.7 291.2,110.1 290.8,109.7
			290.5,109.7 290.2,109.4 289.6,109.2 289.1,109.5 288.8,109.3 288.6,109.5 		"/>
		<polygon fill="#E6EEF4" points="289.3,105.1 289.7,104.7 290,104.6 290.3,104.2 290.2,103.5 289.5,103.5 289.2,103.4 289,104
			288.8,104.2 288.9,105 		"/>
		<polygon fill="#E6EEF4" points="286.1,103.3 285.8,103.3 285.3,103.9 284.9,104.1 284.2,104 283.8,104.3 283.6,104.7 283.2,105
			283.4,105.6 283.5,105.4 284.1,105.6 284.4,105.6 285.5,104.7 285.7,104.3 286,104.3 286.4,103.9 286.9,103.5 286.9,102.9
			286.6,102.8 286.2,102.9 		"/>
		<polygon fill="#E6EEF4" points="287.7,101 287.5,101.3 287.1,101.3 286.8,101.8 286.5,102.2 286.7,102.1 287.1,102.1 287.6,101.7
			288.1,101.5 288.2,101.2 287.9,100.9 		"/>
		<polygon fill="#E6EEF4" points="342.5,1 342.2,0.6 341.9,0.6 341.6,1.1 342,1.2 		"/>
		<polygon fill="#E6EEF4" points="317.8,194.5 317.8,194.8 318,194.9 318.1,194.8 318.3,194.8 318.3,194.5 318.1,194.5 		"/>
		<polygon fill="#E6EEF4" points="313.6,209.8 313.7,209.8 313.9,209.4 313.8,209.2 313.6,209 313.6,208.8 313.8,208.6 313.8,208.3
			313.6,208.1 313.7,207.9 313.5,208 313.3,208.3 313.5,208.7 313.5,209.1 313.4,209.5 		"/>
		<polygon fill="#E6EEF4" points="307.8,134 308,134.2 308.1,134.2 308.2,133.9 308,133.7 		"/>
		<polygon fill="#E6EEF4" points="314,210 314.2,210.2 314.4,209.9 314.3,209.7 314.1,209.7 		"/>
		<polygon fill="#E6EEF4" points="162.2,72.5 162.1,72.2 161.8,72.3 161.9,72.6 		"/>
		<polygon fill="#E6EEF4" points="308.7,137.4 308.5,137.2 308.4,138.1 308.2,138.7 308.5,139.1 308.6,138.9 308.6,138.6
			308.7,137.9 		"/>
		<polygon fill="#E6EEF4" points="305.3,8.4 305.2,9 305.3,9.5 306,9.3 306.2,8.9 306.2,8.5 306.8,8.4 307,8.1 307.3,8.1 307.5,8.6
			307.8,8.4 307.9,7.9 308.2,7.8 308.1,8.6 308.3,8.8 308.9,8.8 308.5,9.1 307.6,9.1 306.8,9.8 306.2,10 306.3,10.6 306.3,11
			306.8,11 307.1,10.6 307.6,10.6 308.4,10.3 309.3,10.2 310.5,10 310.8,10.2 310.8,10.6 310.3,10.7 310,10.5 309.4,10.5 309,10.8
			308.1,10.8 307.4,11.4 306.6,11.4 306.4,11.7 306.8,12.2 307.3,12.2 307.8,12.6 307.4,12.7 306.6,12.8 306.2,12.3 305.9,12.3
			305.5,12.6 305.5,13.3 305.3,13.5 305.4,13.9 306,14.2 306.6,13.9 307.5,14.4 308.1,14.4 308.4,14.6 308.8,14.6 309.4,15.2
			309.9,15.2 310.2,15 310.9,15.1 311.3,15.1 312.2,14.6 313.3,14.6 314,14.5 314.4,14.2 314.7,14.2 315,14 315,14.4 314.9,14.7
			313.9,14.9 312.7,15.1 312.4,15.3 311.9,15.5 311.7,15.7 311,15.4 310.4,15.8 309.9,15.7 309.6,15.5 309.1,15.5 308.2,15
			306.6,15 306.3,14.8 305.7,14.9 305.2,14.8 304.9,15 305,15.7 305.3,16 305.3,16.8 305.5,17.5 305.8,17.8 306.2,17.9 306.9,18.9
			307.4,19.1 307.6,19 308.2,18.1 309.3,17.7 310.2,17.1 310.8,16.4 311.1,16.1 311.4,16.1 312.6,16.4 313.7,16.3 314.4,16.3
			315.1,16.7 316.3,16.9 317.3,16.8 317.7,17.1 317.6,17.3 316.7,17.4 316.2,17.2 315.3,17.2 314.2,16.6 313.7,16.6 313.4,16.7
			312.2,16.7 311.7,16.5 311.4,16.9 310.6,17.3 310.1,17.9 309.2,18.4 308.9,19.1 308.4,19.5 308.3,19.8 308.9,20.3 309.6,20.3
			309.6,20.6 310.1,21.2 311.1,21.2 312.3,21.6 313.2,21.5 314,20.7 314.1,19.9 315,19.7 315.4,19.8 314.8,20.1 314.8,20.6
			315.3,20.7 316,20.4 316.7,20.5 317.3,20.2 317.7,20.3 317.3,20.7 316.3,20.9 315.8,21.1 315.1,21.1 314.3,21.8 314.4,22.2
			314.8,22.3 315.6,22.2 316.3,22.9 317.9,22.9 318.5,23 319.1,22.9 321.1,22.1 321.6,22 322.6,21.2 322.5,20.9 322.2,20.9
			323,20.1 323.5,20 323.8,19.5 324,19.5 324.2,20.1 324.5,20.1 324.5,19.5 326,18.4 327.1,18.3 328.6,17.6 328.6,18 327.3,18.6
			326.5,18.7 325,19.5 324.7,20.3 324.2,20.8 323.5,20.8 323.2,21.6 322.9,21.8 322.9,22.1 324.4,21.9 324.7,22.2 325.4,22.2
			326,22.5 325.9,22.8 326.4,23 326.7,23 327.1,23.4 326.4,23.5 325.9,23.7 325.3,23.2 324.3,22.9 323,23 321.1,23.2 320.3,23.5
			319.9,23.5 319.8,23.7 320,24 320.9,24.2 321.6,24.2 322.1,24.5 322.1,24.8 321.5,25 321,24.6 319.9,24.5 319.4,24.1 318.9,24
			318,24.4 317,24.4 316.1,24.1 315.3,24 314.5,23.8 314.2,23.6 313.1,23.6 312.9,24.3 313.1,24.8 313.2,26.8 313.2,27.2
			312.7,27.7 312.7,28.1 313.1,28.3 313.5,28.8 314.2,28.9 314.6,29.2 314,29.1 313.6,29.4 313.5,29.7 313.4,29.2 312.9,28.7
			312.7,28.8 312.5,29.1 312.1,28.5 312,27.6 312,26.6 311.7,25.2 311.1,24.5 311.1,23.9 309.9,23.1 309.4,23.1 308.8,22.6
			308.6,22.1 308,21.9 307.3,22 305.5,23.9 305.3,24.6 305.4,25.1 305.7,25.4 306.3,25.5 306.6,26.2 306.6,26.6 306.4,26.7
			306.1,26.1 305.6,26 305.3,25.7 305,25.8 304.7,25.9 304.6,26.4 304.8,26.9 305.1,27.2 305.4,28 305.6,29.5 305.2,30.3 305.2,31
			304.7,31.9 304.8,32.5 305,32.6 305.4,32.5 305.2,33.3 304.8,33.9 304.6,33.5 304.4,33 303.9,32.7 303.6,33 303.6,33.9
			304.3,35.2 305.1,35.1 305.5,35.3 305.8,35.7 306.7,35.8 307.7,36.1 308.1,35.8 308.7,35.4 308.7,34.9 309.1,34.8 309.1,35.2
			308.8,35.7 308.8,36.4 308.6,36.6 308.1,36.3 306.9,36.3 306.4,36.5 306.4,37 306.7,37.1 307.3,37.1 307.4,37.5 306.9,37.5
			306.9,38.3 306.2,37.2 305.8,37.2 305.5,36.7 305.3,36.3 304.1,35.5 303.7,35.5 303.1,34.7 303,34.5 302.6,34.6 302,35
			301.5,34.9 301.1,35.2 300.3,35 299.2,35.2 298.8,35.1 298,36 297.7,36.7 297.6,37.4 297.1,37.5 296.6,37.8 296,38.1 295.9,38.5
			295.2,39 295.1,39.6 295.4,39.6 295.6,39.9 295.1,40 294.8,40.3 295.5,40.9 296.2,41 296.7,40.6 296.6,40.2 297.4,40.3
			298.2,39.7 298.2,40.3 297.6,40.5 297.2,41.1 297.2,41.5 298,41.5 298.5,41.6 299.1,40.9 299.9,40.3 300.5,39.1 301.3,38.2
			301.8,38.1 301.7,38.5 301.2,38.7 300.5,39.8 300.7,40.2 300.3,40.3 299.9,40.8 299.9,41.1 300.4,41.1 300.2,41.3 299.8,41.3
			299.3,41.8 299.4,42.1 300,42.1 299.6,42.4 299,42.2 298.5,42.1 298.1,42.4 297.7,42.5 297.5,42.8 297.7,43.2 298.1,43.2
			298.3,43 298.7,43.2 299.1,43.2 299.1,43.5 298.7,43.5 298.3,43.4 298,43.6 298,43.8 298.5,43.9 298.4,44 297.9,44.3 297.6,44.3
			297.6,44.6 297.9,45.2 298.4,45.3 298.6,44.9 299.2,44.5 299.1,45 298.6,45.3 298.2,45.7 298.1,46 298.9,46.4 299.5,46.4
			299.6,46.3 299.9,46.3 300.2,46.5 301.1,46.2 302,45.4 302,45.3 302.6,44.9 303.5,44 303.5,43.5 303.9,43.2 304.3,43.2
			303.9,43.5 303.8,44 302.9,45 301.9,45.7 301.3,46.5 300.5,46.8 300.1,47.2 300.4,47.5 300.1,47.7 299.4,47.1 298.3,47.1
			298.3,47.5 297.9,47.4 297.6,46.7 296.6,46.2 296.2,46.3 296,46.1 296.2,45.4 296.2,43.8 295.9,42.7 295.4,42 294.9,42
			294.4,41.8 294,41.9 293.4,41.9 292.9,42 292.5,42.1 292.4,42.6 292.5,43 292.4,43.2 292.4,44.2 292.6,44.6 292.8,44.6
			292.8,44.9 292.3,45.3 292.2,45.6 292.5,46 292.9,46 293,45.8 293.6,46 293.5,46.2 293,46.2 292.9,46.3 293.3,46.5 293.3,46.8
			292.9,47 292.9,47.2 293.1,47.3 293.5,47.6 293.9,47.5 294.1,47.7 293.9,48 293.4,47.9 293.1,48 292.6,47.6 292.3,47.7 292.2,48
			291.8,48 291.6,47.4 291.2,47.3 290.8,47.6 289.9,47.5 289.2,47.2 288.7,47.2 288.5,47.5 288.5,47.8 288.1,47.9 287.6,48.1
			287.4,48.5 286.6,48.5 286.3,48.7 285.9,48.8 285.5,49.2 285.3,49.6 285.4,49.9 285.3,50.3 284.6,50.7 284.5,51.1 284.7,51.4
			284.7,52.1 284.8,52.4 285.4,52.4 285.8,51.7 285.9,51.7 285.9,51.9 285.6,52.4 285.8,52.5 286.2,52.1 286.2,51.3 286.5,50.2
			286.8,50.1 287.2,49.9 286.6,51 286.6,51.4 286.5,51.6 286.4,52.3 286.2,52.8 286.3,53 286.6,53 287,53.3 287.5,53.3 287.6,52.9
			287.5,52.7 287.8,52.2 287.9,51.8 288.2,51.5 288.1,51.9 288.2,52.1 287.9,52.8 288.1,53.1 288,53.4 288.4,54 288.7,54.1
			289,53.7 288.9,53.4 288.8,53.3 289,53.1 289.4,53.1 289.6,52.8 289.6,52.4 289.3,52.1 289.3,51.7 289.5,51.9 289.9,52.6 290,53
			289.7,53.5 289.5,53.5 289.2,53.9 289.2,54.2 289.5,54.2 289.7,54.4 289.8,54.6 290.2,54.6 291,55.1 291.2,55.2 291.3,55.6
			292.3,55.6 292.7,55.8 293,55.8 293.1,55.4 292.8,54.8 292.6,53.9 292.8,53.2 293,53 293.1,53.2 293.3,53.9 293.3,54.4
			293.4,54.6 293.8,54.6 293.9,54.4 294.3,54.4 294.5,54.2 294.5,53.8 294.8,53.5 294.9,52.9 295,52.6 295.2,52.7 295.4,53.2
			295.3,53.5 295.1,54 295,54.4 295.2,54.6 295.2,55 295.7,55.3 296.1,55.2 296.6,54.4 296.4,53.8 296.5,53.2 296.9,52.7
			297.5,52.6 297,53.2 296.9,53.7 297,54.2 296.7,55.2 296.7,55.5 297.1,55.9 297.6,55.8 298,55.9 298.4,55.7 298.4,55.1
			298.7,54.8 298.6,54.4 298.2,53.6 298.6,52.7 298.6,52.1 298.8,52.6 298.8,53.1 298.6,53.5 298.9,54.3 299.3,54.4 299.7,54.6
			299.3,54.7 299,55.3 299.1,55.7 299.8,55.9 300.2,55.6 300.8,56.4 300.8,56.9 300.4,57.4 299.9,57.8 300.2,57.9 300.3,58.3
			300.9,58.3 301.4,58.1 301.6,58.3 302.5,57.6 303,57.6 303.3,57.8 304,57 304.5,56.9 304.9,56.2 305.3,55.9 305.4,56.1
			305.3,56.7 305.1,57.3 305.3,57.5 305.8,57.1 306.2,56.5 306.7,56.2 307.3,56.2 307.9,55.1 308.1,54.1 307.9,53.8 308,53.2
			307.7,53.1 307.5,53.2 307.1,53.2 306.4,53.6 306.2,54 305.7,54 306.1,53.5 306.2,53.1 305.7,53.2 305.5,53 305.7,52.7 306,52.6
			306.3,51.7 306.6,51.3 306.5,50.8 305.8,50.5 304.8,50.7 304.2,51.2 304.4,50.6 304,50 303.4,49.6 303,49.7 302.8,49.9
			302.5,49.9 301.8,50.7 301.5,50.7 301.7,49.8 301.3,49.4 301.8,49.3 301.9,49.4 302.7,49.3 302.9,49.4 303,49.1 302.6,48.5
			302.8,48 303.1,47.2 303,46.9 303.6,46.2 303.5,46.6 303.7,46.9 303.6,47.4 303.3,47.6 303.5,48.8 304.7,50.2 305.4,50.4
			305.5,50.2 306.2,50.2 307.5,50.9 307.8,50.7 308.2,49.9 308.5,49.6 308.8,49.6 308.6,49.9 308.9,50 309.5,49.8 309.6,49.4
			309.7,49.3 310,49.5 310.6,49.1 310.6,48.5 311.4,48.1 311.4,47.6 311.2,47.4 310.7,47.4 311.3,46.9 311.4,45.9 312.1,45.7
			313.2,46 313.6,46.4 314.4,46.4 314.9,46 315.4,46 315.8,46.5 316.3,46.4 316.7,45.9 317.2,45.7 317.2,45.3 316.6,45.3
			314.9,44.4 314.8,44 315.1,43.8 315.7,43.9 316,44.2 316.5,44 317.3,44.7 317.7,44.6 318.3,44.1 318.7,44 318.9,43.7 318.8,43
			318.1,42.6 317.7,42.5 317.7,42.2 317.1,41.9 317,41.7 317.6,41.7 318.1,41.9 318.1,42.2 318.5,42.4 319,42.4 319.4,42.6
			320.1,42 320.4,42 320.6,41.1 321.3,40.1 321.3,39.6 320.8,39.3 320.3,38.8 319.8,38.9 319.3,38.9 318.8,39 318.9,38.8
			319.4,38.5 320.1,38.5 320.1,38.2 319.3,37.4 318.9,37.3 318.4,37.3 318.2,37.2 318,37.3 317.6,37.5 317.4,37.4 317.2,37.5
			316.8,37.4 316.8,37 316.9,36.8 315.9,36.3 315.8,36 316.3,36.3 317.2,36.4 317.5,36.7 317.5,37.1 318.3,36.8 319.3,36.9
			319.9,37.3 320.1,37.2 320.1,36.6 319,36.2 317.9,36.1 317.2,35.8 317.3,35.6 317.8,35.5 318.3,35.8 319.5,36 320.3,36
			320.6,36.5 320.5,37.2 320.7,37.6 321.4,38.1 322.2,38.3 322.5,38.7 322.8,38.8 323.2,38.4 323,37.9 323.1,37.4 322.9,37.1
			323.4,36.7 323.1,36.4 321.6,36 321.1,36.2 320.8,36.2 320.3,35.7 319.7,35.5 319.3,35.1 318.9,35.1 318.7,35.3 318.3,35.3
			318.4,34.8 317.6,34.5 317.6,34.2 318.1,34 318.4,34.3 318.9,34.5 319,34.1 318.9,33.8 319.1,33.6 319.5,33.9 319.5,34.5
			319.9,34.9 321.4,35.2 321.7,34.9 321,33.9 320.3,33.7 319.8,33.4 319.8,33 320,32.8 320.3,33.2 321.1,33.3 321.4,33.5
			321.5,34.1 321.8,33.9 322.2,34.5 322.8,34.6 323,35 323.3,35 323.6,34.6 324.1,34.5 324.6,35.1 324.8,34.9 324.9,34.5
			325.2,34.4 325.7,34.9 326.3,35 326.5,34.7 326.5,33.2 325.3,32 324.8,31.9 324.6,32.1 324.3,31.9 324.3,31.6 325.2,31.5
			325.6,31.6 325.9,31.5 326.3,31.8 326.2,32.3 326.5,32.5 327.3,32.7 327.3,33.6 327.5,33.9 328.1,34 328.3,34.2 329.6,34.3
			330.4,34.3 331.3,33.5 331.4,33 331,32.8 330.7,32.9 330.5,32.7 330.7,32.5 331.4,32.3 332.1,32.5 332.7,32.1 332.8,31.6
			332.5,31.2 331,31.2 329.9,30.9 330,30.6 330.5,30.6 330.7,30.1 331,30.3 331,30.8 331.4,30.7 331.7,30.5 332.7,30.8 333,30.6
			333.6,31 333.8,31 334.4,30.4 334.3,30 333.6,29.6 333.8,29.2 334.1,28.9 334,28.1 334.4,28.4 334.4,28.9 334.1,29.3 334.2,29.6
			334.6,29.7 335,29.4 336.3,29.4 336.6,28.9 337.2,28.5 337.2,27.9 337.4,27.7 337.8,27.7 338.3,27.3 338.7,27.4 339.2,27.1
			340.3,26.9 340.6,26.4 341.7,26.1 342.2,25.7 342.8,25.8 343.2,25.6 343.8,25.5 344.6,25.2 345.2,24.5 345.7,24.5 346.1,23.9
			347.2,23.7 347.4,23.5 348.4,23 348.8,22.2 349.2,21.4 348.3,21.4 347.6,21.5 347.2,21.4 346.6,21.4 345.7,22.3 344.3,22.5
			342.2,22.6 341.5,22.5 340,22.5 339.2,23 339.1,22.4 338.5,22.5 338.8,22 339.4,21.9 339.8,22 340.3,21.8 340.4,22.1 341.1,22.2
			342,22 342.6,22 344.1,21.8 346.6,20.8 347,20.5 346.6,20.2 345.6,19.9 343.8,19.7 343.5,19.2 344.2,19.5 344.7,19.5 344.6,19.1
			344,18.5 343.9,17.9 344.5,18.5 345.3,19.5 345.6,19.5 345.9,19.3 346.2,19.6 347.3,19.7 347.6,20 348,19.9 348.7,20.1
			349.2,19.8 348.8,19.6 348.1,19.5 348.1,19.1 349,19.3 349.6,19.6 350.3,20 350.5,19.9 350.8,19.3 351.2,19.7 352,19.7
			352.8,19.4 353.3,19.3 353.9,18.8 355.6,18 355.9,17.7 355.9,17.4 356.4,17.2 357,17.3 357.2,17.1 358.3,16.5 358.9,15.3
			359.1,14 359.1,13.1 358.8,12.5 358.1,12.1 357.7,12.1 357.6,12.2 357.1,12.2 356.8,12.8 356.4,12.9 356.2,12.7 356.8,11.8
			357,11.4 357.4,11.1 357.5,10.4 357.3,9.8 357.1,9.6 357.5,9.4 357.8,8.3 357.3,8.1 356.7,8.3 356.6,8.7 356.3,9 355.9,9.2
			355.7,8.9 355.9,8.5 356,8.2 356.2,7.7 356,7.5 355.5,7.9 355.2,8.5 354.9,8.7 354.7,8.4 355,7.8 354.8,7.4 354.2,7.4 353.4,7.8
			353.1,8.3 352.6,8.3 352.3,8.5 352,9 351.6,9 351.2,8.8 350.1,8.6 348.9,8.7 349.7,8.4 350,8.1 350.4,8.3 350.8,8.3 351.6,7.9
			352.2,7.8 352.8,7.1 353.8,6.7 354.1,6.4 353.9,6.1 353.4,6.1 352.4,5.5 352.2,5.1 352,5.1 351.5,5.4 351.3,5.7 350.9,5.6
			350.8,5.1 351.1,4.8 351,4.4 350.2,4.5 349.9,5 349.5,4.8 349.4,4.2 348.9,4.5 348.6,4.7 348.3,4.4 348.7,4 348.5,3.6 348.8,3.6
			349.1,3.3 348.8,2.9 347.7,2.7 346.8,2.3 346.3,2.5 345.7,3 345.6,3.5 345.3,3.6 345,3.1 345.6,2.5 345.7,2.2 345,2.1 344.3,1.8
			343.8,1.8 343.4,2.2 342.6,2.8 342,3.5 341.5,3.6 341.4,3.3 341.7,2.7 341.6,2 341.4,1.7 341.3,1.3 340.6,0.8 339.9,1 339.2,0.8
			339,0.4 338.3,0.2 337.7,0.5 337.1,0.3 336.7,0.3 336.4,0 336,0.2 335.9,0.9 336.3,2.2 336,3.1 336,3.9 335.7,4.1 335.4,4
			334.7,4.2 334.5,3.9 334.8,3.5 334.6,2.6 334.8,2.1 334.9,1.5 334.7,1.2 334,1.9 333.9,2.1 333.6,2.2 333.3,2 333.5,1.2
			333.3,0.9 333.1,1.1 332.7,1.8 332.3,1.8 332.2,1.6 332.5,1.1 332.5,0.5 332.3,0.2 331.1,0 330.5,0.5 330,0.5 329.7,0.7
			330.1,1.1 330.5,1.2 330.8,1.4 330.1,1.5 330,1.7 330.2,2.1 330.8,2.7 330.7,3 330.6,3.2 331,3.8 331.4,3.9 331.4,4.2 331,4.3
			330.9,4.5 329.9,3.3 329.7,3.4 329.5,3.8 329.5,4.2 329.3,4.1 329.2,3.2 329.2,2.6 328.9,2 328.9,1.2 328.7,1 328.4,1 327.8,0.6
			327.5,0.5 327.3,1.1 327.3,2.1 327.2,3.1 327.5,3.9 327.6,4.6 327.7,5 327.7,5.7 327.4,5.9 327.2,5.4 327,4.7 326.8,4.3
			326.8,3.6 326.7,3 326.6,2.2 325.5,1.6 325.2,1.7 325,2.2 324.8,2.5 325,3.2 325.9,3.8 325.9,4.2 325,4.1 324.7,3.9 324.3,4
			324,4.4 324.3,5.4 324.2,5.7 323.6,6 323.4,6.4 322.9,6.6 322.7,6.3 322.7,5.8 322.5,5.8 322.2,6.5 321.7,6.6 321.6,5.4
			321.8,4.7 321.7,4.3 320.7,4 320.6,3.7 321,3.3 321,2.9 320.6,2.6 319.6,2.4 319.4,2.3 318.7,2.5 318.5,3 319,3.4 318.9,4.4
			318.7,4.6 318.2,4.5 317.6,4.7 317.2,4.3 316.7,4.3 316.6,4.9 316.8,5.2 317.1,5.7 317.4,6.1 317.5,6.7 317.7,7.1 318,7.1
			318.5,7.8 318.5,8.5 318.2,8.8 318.3,8.2 318,8.2 317.6,8.7 317.4,8.4 317.3,7.9 317.5,7.7 317.3,7.4 317,7.6 316.7,7.7
			316.7,8.4 316.5,8.8 316.3,8.4 316.1,8.1 316.2,7.5 316.2,6.8 315.7,6.1 315.4,6.1 314.8,7 314.5,7.2 314.5,7.8 314.7,8.2
			314.5,8.4 314.1,8.1 314.2,7.7 314,7.2 314.2,6.8 314.1,6.1 313.6,5.9 313.6,5.2 313.5,4.7 313.2,4.6 312.5,5.3 312.2,5.3
			312.1,6 312.1,6.4 312,6.6 312,7.1 311.6,7.3 311.6,6.9 311.8,6.7 311.6,6.4 311.2,6.7 310.9,7.6 310.5,7.7 310.6,6.4 310.8,6.1
			310.7,5.7 310.3,5.5 310,5.8 308.9,5.8 308,6.3 307.6,6.2 306.9,6.5 306.7,7 306,7 305.6,7.2 305.5,7.9 305.1,7.7 304.9,7.8
			305.1,8.3 		"/>
		<polygon fill="#E6EEF4" points="299.8,212.9 300.7,213.3 300.9,213.7 301,213.6 301.1,213.1 301.3,213 301.5,213.3 302,213.3
			302.9,212.7 303.7,212.6 303.9,212.3 304.5,212.2 304.3,211.9 304.2,211.3 303.7,211.1 303.3,211.2 303.3,211.6 303,211.8
			302.8,211.6 303.1,211.2 302.9,210.8 302.3,210.6 302.7,210.3 303.3,209.3 303.2,208.9 302.8,208.9 303,208.5 303,208.2
			302.6,208.3 302.3,208.7 301.7,209.2 301.4,209.8 301.1,210.1 300.5,211 299.8,211.4 299.6,211.8 299.8,212.2 		"/>
		<path fill="#E6EEF4" d="M320.6,201.8l0.5-0.1l0.4-0.2l0.2-0.2l0.3-0.1l0.3-0.2l0-0.4l0.2-0.2l0.1-0.3l-0.3-0.2l-0.5-0.4l-0.5,0
			l-0.5,0.1l-0.2,0l0,0.3l-0.2,0.4l-0.1,0.4l-0.3,0.2l0.2-0.2l0.1-0.5l-0.1-0.2l0.1-0.3l0.2-0.4l-0.2,0l-0.4,0.3l-0.2,0.3l-0.3,0.2
			l-0.2-0.2l-0.2,0.2l-0.3,0.1l-0.2-0.2l-0.4,0.2L318,201l-0.4,0.3l0.3-0.3l0.1-0.7l0.3-0.5l-0.1-0.1l-0.3,0.1l-0.1,0.3l-0.3,0.3
			l-0.1-0.2l0.2-0.2l0.1-0.3l0-0.1l-0.4,0.1l-0.5,0.4l-0.2-0.1l-0.2-0.4l-0.1-0.1l-0.4,0.3l-0.2,0l0-0.1l0.5-0.3l0.3-0.5l0.1-0.4
			l-0.2,0l-0.2,0l-0.4,0.3l0.2-0.3l0.4-0.4l0.5,0l0.2-0.1l0.4-0.1l0.2-0.3l0-0.2l-0.2,0.1l-0.5,0.1l-0.3-0.1l-0.4-0.3l-0.2,0.1
			l-0.2,0.2l0.2-0.5l0.2-0.1l0-0.1l-0.3,0.1l-0.3,0.3l-0.2,0.3l-0.3,0.4l-0.3,0.2l-0.1,0.3l-0.4,0.3L314,199l0-0.4l0.1-0.4l0.3-0.4
			l0-0.3l0.2-0.5l0.4-0.4l0-0.2l0.3-0.2l0.2-0.2l0.2-0.5l0.3-0.2l0.2-0.3l0.3-0.1l0.1-0.2l0-0.2l0.2-0.3l0.2-0.3l0,0.3l-0.1,0.2
			l0.2,0.2l0.3-0.5l0.5-0.5l0.1-0.3l-0.2-0.3h-0.2l-0.2,0.2l-0.1-0.4l-0.2-0.2l0.1-0.3l0.3-0.1l0.4,0.1l0.4,0.2l0.2-0.1l0.2-0.3
			l0-0.7l-0.4,0l-0.3,0.1l0,0.2l-0.2,0l0-0.3l-0.1-0.2l-0.2,0.2l-0.3,0.3h-0.3l-0.2,0.2l-0.3,0.3l-0.5,0l-0.4,0.4l-0.5,0.4l-0.1,0.4
			l-0.3,0.1l-0.2-0.1l-0.1,0.1l0.1,0.2l0,0.3l-0.3,0.3l-0.5,0.4l-0.3,0.2l0.1,0.1l-0.1,0.2l-0.2,0.1l0,0.3l0.2,0.1l-0.2,0.2l-0.4,0
			l-0.3,0.4l0,0.2h0.1l0.2,0.1l-0.3,0.2l-0.3,0.1l-0.3,0.5l-0.1,0.3l-0.6,0.9l0,0.3l0.2,0.2v0.3l-0.2,0l-0.1-0.2l-0.2,0l-0.5,0.2
			l-0.2,0.4l0,0.2l0.3,0.1l0.2,0.2l-0.2,0.2l-0.1,0.3l-0.3,0.2l-0.6-0.2l-0.1,0.2l0,0.3l-0.3,0.3L309,202l-0.3,0.4l-0.2,0l0-0.4
			l-0.2,0.4l-0.2-0.4l0.1-0.2l0.3-0.2l0.1-0.3l-0.1,0.2l-0.4,0.3l-0.6,0.4l-0.3,0.7l0.2,0l0.4-0.1l0.8-0.1l0.6,0l-0.4,0.4l-0.5,0.6
			l-0.3,0.5l-0.6,0.3l-0.5,0.5l-0.3,0l-0.1,0.3l0.1,0.3l-0.1,0.4l0.1,0.2l0.3,0l0.5,0.2l0.6-0.1l0.4-0.3l0.5-0.1l0.4-0.3l0.1-0.2
			l0,0.2l-0.3,0.4l0.6,0.1l0.4-0.2l0.2,0.3l0.7,0l0.4-0.1l0.1,0.2l0.2,0.2l0.5,0l0.2-0.1l0.1,0.2l0.3,0l0.2-0.2l0-0.2l0.4,0l0.2,0.2
			l0.2,0l0.2-0.2h0.3l0.3,0.1l0.1-0.2l-0.1-0.2l0-0.4l0.2,0.2l0.2-0.3l0.2-0.1l-0.1,0.1l-0.1,0.5l0.1,0.1l0.1-0.3l0.3-0.3l0.1,0v0.3
			l-0.2,0.3l0,0.2l0.3-0.1l0.1,0l0,0.1l-0.5,0.3l-0.5,0.2l0.1,0.1l0.2-0.1l0.3,0l0.1,0.2l0.3,0l0.1,0.2l0.2-0.2l0.3-0.1l0.2-0.4
			l-0.1-0.3l0.2,0.2l0.4,0.1l0.2,0.2l0.3-0.1l0.3-0.2l0.4,0.1l-0.3,0.2l0,0.2l-0.5,0.2L317,207l-0.3,0.3l0,0.2l-0.2,0.1l-0.1,0.2
			l-0.3,0l-0.2,0.1l-0.1,0.2l-0.2,0.2l-0.5,0.1l-0.4,0.3l-0.1,0.2l0.1,0.2l0.1,0.2h0.4l0.2-0.2l0.2-0.2l0.2,0.1l0,0.2l0.2,0.2
			l0.4-0.2l0.2-0.3l0.2-0.3h0.1l0.1-0.3l0.1-0.4l0.2-0.1l0.5-0.5l0.2-0.1l0.2,0.2l0.4,0l-0.3,0.2l0.3,0l0.2-0.2l0.2-0.6l0.3-0.5
			l0-0.5l0.1-0.2l0.2,0l0.2,0.2l0.2,0l0.2,0.2l0.1,0.5l-0.1,0.3l-0.1,0.4l0.1,0.3l-0.1,0.3l-0.4,0.3l-0.3,0.8l0,0.4l-0.2,0.1l0,0.3
			l0.3,0.1l0.4-0.2l0.4-0.7l0.2,0l0.4-0.5l0.2-0.3l0.1,0.2l0.4,0v0.2l-0.3,0.1l-0.5,0.5l0,0.3l-0.1,0.4l0.1,0.2l0.1,0.5l0.3,0.2
			l0.1-0.4l0.2-0.3c0,0,0.2,0,0.3,0c0.1,0,0.2,0.4,0.2,0.4l0.2,0.1l0.4-0.2v-0.3l0.2,0l0.1-0.3l0-0.4l0.1,0l0.1-0.2l-0.1-0.3
			l0.1-0.4l0.5-0.6l0.3-0.4l0-0.8l-0.1-0.3l-0.2,0v0.2l-0.2,0.4l-0.4,0.3l-0.3,0.4l-0.2,0.1l-0.2-0.3l0.1-0.4v-0.4l0.5-0.4l0.1-0.2
			l0.4-0.4h0.1l0.2-0.1l-0.1-0.3l-0.2,0.2l-0.2,0l-0.3,0.2l-0.3,0.1l-0.3,0.3l-0.1,0.3l-0.6,0.4l0,0.2l-0.3,0.2l-0.4-0.3l0-0.3
			l-0.1-0.3l0-0.3l0.2,0.3l0.2,0l0.3-0.5l-0.2,0.1l-0.4-0.2l0.3,0l0.4,0l-0.4-0.1l-0.2-0.2l0-0.3l0.2-0.1l0.5,0l0.1-0.1l0.4-0.3
			l0.2-0.5h0.4l0.1,0.2l0.5-0.3l0.2-0.4v-0.4l-0.1-0.3l-0.4,0.4l-0.3,0.2l-0.1-0.2l-0.3-0.1l0,0.2l0,0.4l-0.2,0.1l-0.2,0l-0.4,0.3
			l-0.3,0.2l0,0.3l-0.2,0.1l0.1-0.2l0-0.3l-0.2,0.2l-0.3,0l0.3-0.2l0.3-0.3l0.1-0.2l-0.2-0.1l0.2-0.2l0.2-0.4l-0.2-0.1l-0.2,0.2
			l0.1-0.3l0-0.3l-0.2-0.1l-0.3,0.1l-0.5-0.1l0.5,0L320.6,201.8z"/>
		<polygon fill="#E6EEF4" points="320.7,204.6 320.7,204.8 321,205 321.4,205 321.5,204.8 321,204.6 		"/>
		<polygon fill="#E6EEF4" points="315,206 314.9,206.3 315,206.3 315.2,206.2 		"/>
		<polygon fill="#E6EEF4" points="132.1,167.8 132,168.2 132,168.6 132.4,168.7 133,168.2 132.7,168.8 132.8,169.3 133.3,168.7
			133.4,167.4 132.8,167.1 132.2,167.2 131.7,167.8 		"/>
		<polygon fill="#E6EEF4" points="154.4,69.6 154.9,69.9 155.1,69.8 154.6,69 154,68.8 153.7,69.1 154.1,69.7 		"/>
		<polygon fill="#E6EEF4" points="130.2,162.7 130.2,163 130.6,163 130.9,162.3 130.4,162 129.7,162.3 129.4,162.7 		"/>
		<polygon fill="#E6EEF4" points="130.6,159.8 130.6,159.3 130.2,159.6 130.3,160.1 		"/>
		<polygon fill="#E6EEF4" points="132,166.3 131.7,166.5 132.1,166.9 132.2,166.6 		"/>
		<polygon fill="#E6EEF4" points="133.6,165.1 133.8,164.7 133.5,164.6 132.9,165 132.7,165.6 133,165.3 		"/>
		<path fill="#E6EEF4" d="M158.9,76l0.2-0.5l0-1.1l-0.6,0.5l-0.1,0.5l-0.2,0.2l0.2,0.2C158.4,75.8,158.8,76,158.9,76z"/>
		<path fill="#E6EEF4" d="M162.6,71.4l-0.2-0.1c0,0-0.3,0.4-0.3,0.4l0.3,0.2L162.6,71.4z"/>
		<polygon fill="#E6EEF4" points="160.7,76.1 161.3,76.1 161.7,75.8 162.1,75.8 164,74.2 164.8,73.8 165.2,73.1 164.8,73.3
			164.5,73 164.4,72.1 164,72.1 163.7,72.8 163.1,73 163.2,73.5 162.8,73.4 162.6,73.6 162.4,74.1 162.1,73.6 162.4,73.3 162,73
			161.7,73.4 161.5,73.3 161.2,73.9 160.9,74.3 161,75.2 160.6,75.6 		"/>
		<polygon fill="#E6EEF4" points="182.5,69.9 182.5,69.2 181.8,69.6 181.6,70 181.9,70.1 		"/>
		<polygon fill="#E6EEF4" points="158.5,77.8 159.1,78.2 159.9,79.2 160.2,78.7 159.9,77.8 159.9,76.9 159.3,76.9 158.5,76.2
			158.2,76.3 158.2,76.7 159.3,77.5 158.5,77.4 		"/>
		<polygon fill="#E6EEF4" points="159.4,76.2 159,76.4 159.7,76.7 160.5,76.3 160.2,75.9 160.5,75.5 160.6,74.1 160.3,73.5
			160,73.7 160,74 159.7,73.8 159.3,74.2 159.3,75.2 159.6,75.8 		"/>
		<polygon fill="#E6EEF4" points="278,134.1 278.2,134.2 278.4,134.5 278.6,134.8 278.6,135.2 278.8,135.3 279.1,135.3 279.3,135.5
			279.5,135.4 279.6,135.2 279.8,135.1 279.8,134.9 279.5,134.7 279.8,134.5 279.8,134.4 279.3,134 278.9,133.9 278.8,133.8
			278.7,133.6 278.4,133.6 278.2,133.5 277.8,133.6 277.7,133.7 277.8,134.1 		"/>
		<polygon fill="#E6EEF4" points="278.6,101.1 278.7,101 278.7,100.8 278.4,100.6 		"/>
		<polygon fill="#E6EEF4" points="278.8,101.5 279,101.7 279.3,101.7 279.6,101.9 279.7,101.5 279.4,101.3 278.9,101.4 		"/>
		<polygon fill="#E6EEF4" points="277.8,98.7 277.3,98.7 277.2,98.9 277.4,99.1 277.7,99.1 277.9,99.3 278.2,99.3 278.2,99
			277.8,98.8 		"/>
		<polygon fill="#E6EEF4" points="279.5,100.8 279.2,100.8 279.4,101 		"/>
		<polygon fill="#E6EEF4" points="275.3,98.1 275.5,98.7 275.8,98.7 276,98.6 275.9,98.3 275.6,98.3 		"/>
		<polygon fill="#E6EEF4" points="277,134.9 276.7,134.7 276.2,134.7 275.9,134.4 275.5,134.1 275.4,134.2 274.9,134.3 274.6,134.1
			274.5,134.4 274.6,134.9 275,135.2 275.3,135.8 275.5,135.9 275.5,136.3 275.8,136.5 276.2,136.5 276.4,136.3 276.7,136.2
			277,136.1 277,135.8 277,135.6 		"/>
		<polygon fill="#E6EEF4" points="259.3,99.3 259.4,99 259.4,98.3 259.2,98.1 259.1,98.2 258.9,98.6 259.1,98.8 259.1,99.1 		"/>
		<polygon fill="#E6EEF4" points="259.6,98.2 259.6,98.8 259.9,98.6 260.1,98.5 260.1,98.1 259.8,97.9 		"/>
		<polygon fill="#E6EEF4" points="257.8,95.1 257.9,95.4 258.2,95.3 258.4,95.3 258.6,95 258.4,94.8 258,94.8 		"/>
		<polygon fill="#E6EEF4" points="292.3,107.6 292,107.7 291.9,108.2 291.7,108.7 291.7,109.2 291.9,109.5 292,109.9 292.3,109.7
			292.5,109.6 292.4,108.8 292.5,108 		"/>
		<path fill="#E6EEF4" d="M269.3,94.9l-0.4,0l-0.1,0.2l-0.6,0.1l0.2,0.2l0,0.5l0.3,0.1l0.1-0.2l0.3,0.3l0.4,0l0.2,0.3
			c0,0,0.3-0.1,0.3-0.1l0.2-0.3l-0.1-0.5l-0.6-0.1L269.3,94.9z"/>
		<polygon fill="#E6EEF4" points="135,172.4 135.8,171.6 135.9,171.3 135.1,171.6 134.7,172.1 134.3,172.1 133.6,173 133.9,173
			134.5,172.5 		"/>
		<polygon fill="#E6EEF4" points="293.9,110.2 293.9,109.8 293.7,109.7 293.5,110 293.7,110.3 		"/>
		<polygon fill="#E6EEF4" points="276.9,98.9 276.7,98.6 276.5,98.8 		"/>
		<polygon fill="#E6EEF4" points="241.9,99.3 242.4,99.4 242.7,100.2 243,100.6 243.5,99.9 243.5,100.4 244.3,101 244.7,101
			245.2,101 245.7,100.4 246.1,100.3 246.8,99.9 247,100.3 247.3,100 248.1,99.5 248.1,99.1 247.4,99.3 247.1,98.9 247.7,97.7
			247.9,97.2 247.3,97.6 246.9,98.4 246.8,97.9 247.2,96.6 246.9,94.7 246.2,94.2 246.2,93.6 245.7,93.6 245.3,94.2 245.3,93.5
			245.7,93.2 245.5,92.6 245.6,92.2 245.6,91.6 244.8,91.8 244,92.5 243.6,93.4 243.8,94.3 243.4,94.1 243.2,93.4 242.9,93.4
			242.8,94 242.4,94 242.7,94.6 242.4,95 242,95 241.6,95.5 240.8,95.5 240.4,95.6 240,95.5 238.8,96.3 238.9,96.9 239.5,97.6
			240,97.3 239.8,97 240,96.6 240.5,97 240.3,97.8 240.9,98.3 241.2,97.7 241.4,98.1 241.2,98.5 		"/>
		<polygon fill="#E6EEF4" points="238.6,88.2 238.3,88.3 238,88.1 237.7,88.4 237.7,87.8 237.9,87.6 237.7,87.3 237.2,87.4
			237.1,87.1 236.6,86.7 236.6,86.3 236.2,85.5 236.2,84.8 236.4,84.2 236.2,83.4 235.9,84 235.9,84.6 235.5,84 234.9,83.7
			234.7,82.5 234.4,82.3 234.3,81.4 233.9,80.9 233.9,80.4 233.7,80 233.7,79.6 234.3,79.6 234.4,79 234.8,79 234.9,79.2
			235.3,78.9 235.3,78.4 235.8,77.4 235.8,76.6 235.9,76.3 235.5,75.4 235.7,74.8 236,74.7 236.1,73.9 236.6,73.2 236.7,72.7
			237,72.4 237,71.3 237.3,71.1 237.3,70.6 238,69.9 237.9,69.3 238,69 238.3,68.9 238.4,68.3 238.1,67.7 238.2,67.4 238.2,67
			237.7,66.7 237.4,65.9 237.6,65.7 237.2,64.7 236.7,64.6 236.5,64.4 236.3,64.4 236.2,65.1 235.9,65.1 235.3,64.1 235,64
			234.6,63.6 234.2,63.8 234.3,64.5 234.1,64.6 233.8,64.5 233.5,65.2 233.5,65.5 233.1,65.7 232.7,67 232.7,67.6 232.4,68
			232.4,68.7 232.2,68.9 232.1,69.3 231.7,69.6 231.7,70.7 231.3,71 231,70.9 230.6,71.8 230.8,72.1 230.7,72.6 230.6,73.2
			230.2,73.7 230.5,74.1 230.4,74.5 229.8,74.5 230,74.8 230.5,75 230.5,75.5 230.2,75.3 229.8,75.4 229.4,75.7 229,75.6
			228.8,75.9 228.8,76.4 228.6,76.6 228.2,76.4 228.1,75.9 228.3,75.4 228,75.1 228,74.3 228.4,73.4 228.5,72.8 228.9,72.4
			228.9,72 229.1,71.5 229.4,70.3 230,70 230.1,69.3 229.7,69.4 229.5,69.3 229.5,68.9 229.9,68.6 229.9,67.4 229.6,67.2
			229.4,66.6 229.6,66.4 229.6,65.7 229.3,65.6 228.7,65 228,65.2 227.8,65.8 228.3,66.2 228.3,66.7 228.6,67 228.6,67.5
			228.2,67.5 228,67 227.6,67 227.4,67.6 227.7,67.7 227.8,68.2 228,68.8 227.7,69 227.7,68.8 227.4,68.6 227.3,69.2 226.8,68.9
			226.8,68.4 226.5,68.5 226.2,69 226,68.9 226,68.3 226.3,68 226.1,67.9 225.4,68.1 224.8,68.7 224.4,68.1 224.1,68.1 223.7,68.5
			223.1,68.5 223,68.2 222.4,68.3 222.1,68 222.5,67.6 223.2,67.6 223.6,67.7 224.2,67.5 224.2,67.2 224.6,67.1 225,67.2
			225.5,66.7 225.5,66.2 225.6,65.9 225.3,65.6 224.8,64.7 224.2,64.5 224.1,64.1 223.3,63.3 223.2,63 222.7,63 222.1,63.5
			221.7,63.5 220.9,64.4 221.1,64.6 221.1,65 220.7,65.1 220.3,65.3 220.3,65 219.9,65.1 219.5,64.8 218.9,64.9 218.7,65.1
			218.1,65.1 217.9,64.9 218.1,64.7 218.9,64.5 219.1,64 219.6,63.8 219.9,63.9 220.3,63.4 220.4,62.7 220.6,62.4 221,62.4
			221.4,61.6 221.4,60.8 221.5,60.4 221.4,59.9 220.9,59.8 220.1,60.1 219,60.3 218,60.7 215.9,61.1 213.5,62 212.8,62.6 211.3,63
			209.3,63.9 208.6,64.5 208.5,65 209,65 209.2,65.2 208.7,65.6 208.2,65.6 207.3,66.4 206.5,66.5 206.2,66.8 206,67.3 205.3,67.8
			204.9,68.3 204.9,69 205.3,68.8 205.7,69.1 205.5,69.4 205.6,69.6 206,69.5 206.4,69.2 207,69.3 207.4,69.5 207.2,70 206.6,70.2
			206,69.9 205.6,70.1 205.7,70.6 206.6,71.1 206.9,70.9 207.1,70.5 207.4,70.5 207.6,70.8 207.4,71.1 207.8,71.1 208.7,71.3
			209.6,71 210.1,71 210.9,71.4 211.5,71.2 212,71.5 212.3,71.9 212.8,72 212.6,72.3 212.2,72.3 211.4,71.8 210.3,71.8 210.1,72
			210.8,72.2 211,72.5 210.1,72.5 209.7,72.2 208.5,72.3 208.1,72.6 207.8,72.4 207.5,72.4 207,72.5 206.6,72.5 205.3,72.5
			205.1,72.7 204.1,72.9 203.9,73.5 204,75 204.2,75.3 204.1,75.9 203.9,76 204,76.4 204.2,76.7 204.7,76.6 205,76.6 205.3,76.8
			205.8,76.8 206,76.6 206.1,76.6 206.4,76.7 206.6,76.9 206.9,76.8 207.2,77.1 207.3,77.4 207.6,77.5 208.1,77.4 208.4,77.4
			208.6,77.7 209.2,77.7 209.6,77.6 210.1,77.8 210.6,77.6 210.9,77.7 211.6,77.8 212.1,77.6 212.6,77.8 212.7,78.2 213.1,78
			213.2,78.5 213.6,78.9 213.6,79.1 213.8,79.3 214.3,79.3 214.7,79.5 214.8,79.8 215.1,79.9 215.4,80.3 215.3,80.5 215.3,80.9
			215.8,81.4 216.5,81.9 216.5,82.2 216.4,82.3 216.5,82.6 216.2,82.5 215.3,82.3 214.5,82 214,82.2 213.6,82 213.5,82.1
			213.1,82.1 212.7,81.7 212.4,81.7 212.1,81.2 211.8,81.1 211.2,81.2 210.9,81.1 210.7,80.9 210.1,80.6 210,80.2 209.7,80.2
			209.4,80.1 208.8,80.1 208.6,80 207.4,80 206.6,79.9 206.1,79.8 203.9,79.8 203.5,79.9 202.9,80.1 202.6,80.5 202.5,81.3
			202.1,82.1 202.2,82.9 202,83.3 202.2,83.6 202.5,83.7 202.4,84 202.2,84.2 202.6,85.3 203,85.7 203.1,86 203.9,86.4 204.2,86.7
			204.6,86.6 204.9,86.9 205.3,87 205.9,86.7 206.2,86.7 206.6,87.1 207.2,87.1 207.6,87.8 207.9,87.9 208,88.2 207.4,88.4
			207.5,88.7 207.2,89 207.2,89.2 207,89.6 206.4,89.9 206.3,90.2 206.1,90.6 206.5,90.9 206.6,91.5 206.9,92.2 206.8,92.5
			206.2,92.7 206.4,92.9 207.3,93.1 207.7,93 207.9,93 208.1,93.2 208.3,92.9 208.6,92.8 208.9,93 209.6,93 210.4,93.4 210.8,93
			211.5,93 211.6,93.3 211.8,93.3 212,93.2 212.4,93.1 212.6,93.2 212.7,93.5 213,93.5 213.2,93.3 213.5,93.5 213.6,93.9
			213.8,93.9 214.1,93.6 214.8,93.6 215.1,93.2 215.5,93.1 215.9,93.1 216.5,92.5 217.2,92.2 217.6,92.1 217.8,91.9 218.1,91.9
			218.7,92 219.1,91.9 219.4,92.1 220.5,92.1 221.6,91.4 221.8,91.1 222,91.1 222.2,91.3 222.3,90.9 222.7,90.7 222.7,90.4
			222.9,90.1 223.1,90.2 223.4,90.2 223.6,89.9 223.6,89.6 223.8,89.7 224.1,89.7 224.3,90 224.3,90.2 224.4,90.5 224,90.8
			224,91.1 223.8,91.5 223.5,91.7 223.6,91.8 223.9,91.9 224.4,92.3 224.5,92.1 224.9,92.1 225.3,92.3 225.5,92.8 225.7,93
			225.7,92.8 225.9,92.6 226.2,92.8 226.2,93.1 225.9,93.5 225.5,93.5 225.2,93.8 225.3,94.1 225.5,94.1 225.9,94.2 226.3,94.5
			226.7,94.4 227.1,93.9 227.2,93.9 227.2,94.3 227.5,94.9 227.8,95 228.2,94.8 228.6,94.9 228.8,95.2 229.2,95.2 229.5,95.5
			229.7,95.5 229.6,95.1 229.9,95.1 230.3,95 230.5,95.1 230.5,95.5 230.7,95.6 231.1,95.5 231.4,95.1 231.6,95.2 231.7,95.6
			231.9,95.5 232.1,95.3 232.2,95.2 232.5,94.9 232.9,95 233,95.2 233.2,95.2 233.4,95.1 233.5,94.9 233.4,94.6 233.7,94.2
			233.7,94 234,93.7 234,93.3 233.5,93.3 233.4,92.9 233.6,92.4 234.1,92.4 234.1,91.9 233.5,91.6 233.2,91.7 233.1,92 232.9,92.2
			232.6,92.1 232,92 231.3,92.7 230.8,93.1 230.8,92.8 231.4,92.4 231.7,92.1 231.7,91.4 231.4,91.8 231.2,91.7 231.2,91.2
			231.6,90.9 231.3,90.2 231.6,89.8 232,89.8 231.9,90.1 232.1,90.9 232.5,91.2 232.8,91.1 233.3,91.1 233.6,90.5 233.3,90.2
			233.3,90 233.7,90 233.9,90.2 234.1,90.1 234.6,89.7 234.8,89.1 234.9,89.6 235.1,89.6 235.5,89.2 235.1,90 235.2,90.8
			235.4,90.6 235.6,90.8 235.4,91.2 235.7,91.2 236,90.6 236.2,90.4 236.7,89.6 237,89.4 236.9,90 236.4,90.6 236.6,91.4 237,91.4
			237.3,91.7 237.5,91.3 238.2,90.7 238.4,89.9 238.6,89.3 238.5,88.7 238.7,88.5 		"/>
		<polygon fill="#E6EEF4" points="235.7,97.1 236.1,97.6 236.3,97.3 236.4,97 236.9,96.7 237.2,96.2 236.8,95.7 236.8,95.4
			236.5,95.3 236.2,95.6 236.3,96 235.7,96.8 		"/>
		<polygon fill="#E6EEF4" points="236,93.1 236,93.4 236.2,93.4 236.4,93.1 236.6,93.2 236.9,92.8 236.9,92.5 236.6,92.3
			236.6,91.9 236.3,92 236.2,92.3 236.4,92.7 236.1,92.8 		"/>
		<path fill="#E6EEF4" d="M237.9,95.5l0.3-0.3l-0.3-0.5l-0.2,0.1l-0.4,0.8l0.2,0.2l0.1,0.4c0,0,0.3-0.1,0.3-0.1L237.9,95.5z"/>
		<polygon fill="#E6EEF4" points="237.3,102.3 237.6,102.2 237.6,101.7 237.1,101.7 237.1,102.1 		"/>
		<path fill="#E6EEF4" d="M248.8,96.3l0.5-0.9l0-0.5l-0.7-0.2l-0.6,0.5l-0.3,0.9c0,0,0.4,0,0.4,0l0.1-0.3l0.2-0.3l0,0.5l-0.1,0.4
			L248.8,96.3z"/>
		<polygon fill="#E6EEF4" points="263.9,108.1 263.8,108.6 264,108.7 264.6,108.7 264.9,108.4 264.8,108.2 264.3,108.1 		"/>
		<path fill="#E6EEF4" d="M266.1,76l1-0.7l0.7-0.7l0.8-0.6l0.3-0.4l-0.2-0.2l0.1-0.3h0.6l0.6-0.8l1.1-0.9v-0.2l0.5-0.1l0.4-0.6
			l0.8-0.7l0.3-0.6l0.2,0l0.2,0.1l-0.1-0.4l-0.3-0.2l0-0.4l-0.7-0.5l-1.3-0.2l-0.8-0.1l-0.4,0.2l-0.2-0.2l0.1-0.4l-0.3-0.5h-0.3
			l-0.1-0.1l-0.5-0.2l-0.4-0.6l-0.7,0l-0.4,0.3l-0.1-0.4l-0.5,0.1l-0.3-0.2l-0.5,0.2l-0.8,0l-1.2,0.3l-0.5,0.8l0.4,0.5l-0.4,0.1
			l-0.1,0.2l0.4,0.5l0.1,0.6l-0.6-0.1l-0.1-0.5l-0.4-0.7l-0.3-0.1l-0.4,0.7l0.1,0.2l-0.1,0.4l-0.5,0.1l-0.2,0.8l-0.7,0.8l-0.1,0.6
			l-0.2,0.4l-0.3,0.6l-0.5,0.3v0.5l-0.4,0.3l-0.5,1.1l0,0.6l-0.3,0.4l0.4,0.3v0.3l-0.3,0.2l0,0.5l-0.3,0.9l-0.7,0.9l0.1,0.2l0.5,0
			l0.1,0.2l-0.2,0.2l-0.3-0.1l-0.4,0.2l-0.4,0.6l1,0.1l0.4-0.2l0.8,0.7c0,0,0.2-0.2,0.2-0.2l0-0.5l0.4,0l0.4-0.4l0.3-0.5l0.3-0.3
			l0.6,0l0.3-0.4l0.4-0.2l0.3-0.5l0-0.6l-0.3-0.3l0.4-0.4l0.2-0.4l-1.1,0l-0.2-0.3l0.1-0.3l0.4,0l0.4,0.2l0.5,0l0.5,0.1l0.4-0.2
			l0.4,0.2l0.1,0.5l0.7,0.6l0.4,0l0.1,0.3l0.3,0.2L266.1,76z"/>
		<path fill="#E6EEF4" d="M255.8,76.6l0.9-0.5v-0.5l0.3-0.8l-0.1-0.8l0.3-0.4l-0.3,0l-0.2,0.2l-0.6,0.2l-0.3,0.6l-0.2-0.2v-0.6
			l0.4-0.3l0.1-0.5l-0.1-0.4l-0.4-0.2l0.4-0.1l0.2-0.2l-0.2-0.6l-0.8-0.5l-0.3,0.1l-0.8,0.2l-0.1,0.2l-0.4,0l0-0.3l0.4-0.7l0.3,0
			l0.6-0.5l1.1-0.2l0.2-0.3l0.6-0.1l0.4,0l0.2,0.2l0.3-0.1l0.1-0.7l0.2-0.3l-0.6-0.4l-0.1-0.3l0.3-0.1l0.3-0.3l0.1,0.3l0.4,0.2
			l0.7-0.4l0.3-0.4l-0.1-0.4l0.1-0.3l-0.1-0.3l-0.3,0.1l-0.4-0.5h-1.3l-0.4-0.1l-0.3,0.3l-0.7,0l-0.6-0.3l-0.4,0.2l-0.4-0.5
			l-0.4-0.3l0-0.3l0.2-0.2l-0.2-0.3l-0.7-0.1L253,64l-0.3,0.2l0.2,0.3l0.5,0l-0.3,0.5l-0.7-0.2l-0.4-0.6l-0.3,0.1l-0.2-0.1l-0.5,0.2
			l-0.2,0.6l-0.2,0.1l0.1,0.5l0.1,0.5l0.4,0.2l0,0.6l-0.2,0.3l-0.1,0.6l-0.1,0l-0.2-1.1l-0.3-0.5l-0.4-0.2l-0.1,0.4l-0.4-0.1
			l-0.3,0.3l0,0.6l0.4,0.6v0.4l0.5,0.7l0.6-0.1l0.3-0.5h0.2l0.1,0.5l0.4,0.7l0.1,0.3h-0.4l-0.3-0.6l-0.4-0.1l-0.5,0.1l-0.2,0.2
			l0.2,0.5l-0.1,0.4l-0.4,0.4l0.1,0.4l-0.4,0.6l-0.3,0.2l0.1,0.5l-0.2,0.2l-0.5-0.1l-0.3-0.5l0-0.5l-0.7-0.7l0.1-0.5l-0.1-0.3
			L247,70l0-0.3l0.2-0.1l0.2-0.3l-0.2-0.3l-0.5-0.1l-0.8,0.3l-0.2-0.3l-0.3,0.1l-0.2,0.4l-0.5,0.2l-0.7,0.8l0.2,0.4v0.9l-0.1,0.3
			l0.3,0.4l-0.1,0.8l-0.6,0.3l0,0.6l0.3,0.3l0.4-0.1l0.2,0.2l0.4-0.3l0.3,0.2l0,0.6l0.2,0.3h0.3l0.4,0.7l0,0.9l0.5,0.6v0.4l0.2,0.5
			l0.4,0.2l-0.2,0.3l0.1,0.8l-0.3,0.6l0.4,0.4l0.1,0.6l-0.1,0.5l0.1,0.3l0.3-0.3l0.2,0.2l0,0.6l0.3,0.3c0,0,0.7-0.2,0.7-0.2l0.3-0.6
			l0.6-0.4l0.1-0.5l-0.3-0.3l-0.4-1l0.1-0.5l0.9-0.9l0,0.4l-0.5,0.7l0.2,1.1l0.4,0.1l0.5-0.3l0.6,0.4l0.8-0.2l0-0.4l0.6-0.3l0.5,0
			l0.3-0.3l0.2,0.2l0.6-0.5l-0.3-0.5l0.5,0l0.1-0.3l-0.7-0.4l0-0.2l0.4-0.2l0.1,0.2l0.3-0.1l0.2-0.7l-0.2-0.3l0.2-0.3L255.8,76.6z"
			/>
		<polygon fill="#E6EEF4" points="251.3,83.3 251.5,83.4 251.7,83.4 251.7,82.8 251.5,82.9 		"/>
		<polygon fill="#E6EEF4" points="265.2,107.2 265.3,106.7 265.3,106.1 265.3,105.9 264.9,106.3 264.2,106.8 264.3,107.4 264,107.9
			264.7,107.9 265.2,107.7 		"/>
		<polygon fill="#E6EEF4" points="291.4,157.8 291.4,157.3 291.2,156.8 291.1,157.1 291.2,157.6 291.2,157.8 		"/>
		<polygon fill="#E6EEF4" points="258.1,180.6 258.1,180 257.9,180.1 257.8,180.1 257.8,180.7 258,180.9 		"/>
		<polygon fill="#E6EEF4" points="264.7,118.9 264.3,118.9 264.1,119.3 264.1,120.1 264,120.5 264.2,120.8 264.1,121.3 264.4,121.2
			264.8,120.3 264.6,119.9 264.5,119.5 264.8,119.4 		"/>
		<polygon fill="#E6EEF4" points="258,186.5 258.6,186.1 258.4,185.7 258.3,185.9 257.8,186 257.7,186.4 		"/>
		<path fill="#E6EEF4" d="M264.5,168.6l0-0.7l-0.2,0l-0.1,0.4l-0.4,0.5c0,0,0.2,0,0.2,0L264.5,168.6z"/>
		<polygon fill="#E6EEF4" points="263.7,166.5 263.5,166.5 263.7,166.7 263.8,166.6 		"/>
		<polygon fill="#E6EEF4" points="267.1,119.5 267,119.2 266.5,119 266.3,118.4 266.2,118.6 266.1,119.3 266.5,119.6 266.6,120.1
			266.5,120.5 267.1,120.7 267.4,121.1 267.4,121.4 267.7,121.3 268.3,121.5 268.4,120.9 268,120.9 267.4,120.6 267.4,119.8 		"/>
		<path fill="#E6EEF4" d="M265.1,137.6l0.6-0.5l0-0.4l0.4-0.5l-0.2-0.2l-0.5,0l-0.2-0.2l-0.4,0l-0.4,0.2l-0.2-0.2l-0.3,0.1l-0.3,0.4
			l-0.4-0.2l-0.2-0.5l-0.2,0.1l-0.5,0.1l-0.6,0.7l0,0.3l-0.2,0.3l-1,0.3l-0.1,0.3l0.2,0.2l0.2,0.5l-0.2,0.4v0.5c0,0,0.1,0.2,0.1,0.2
			l0.2-0.1l0.5-0.6l0.4-0.1l0.3,0.1l0.1,0.3l0.4,0l0.8-0.6l0.4-0.1l0.5-0.3l0.4-0.7H265.1z"/>
		<polygon fill="#E6EEF4" points="290.6,157.1 290.7,157 290.6,156.8 		"/>
		<polygon fill="#E6EEF4" points="262.2,167 262,167.2 261.6,167.4 261.4,167.4 261.2,167.6 260.9,167.6 260.6,168.1 260.8,168.3
			261.2,168.1 261.9,167.6 		"/>
		<polygon fill="#E6EEF4" points="290.9,157.2 290.9,156.9 290.8,157.2 		"/>
		<polygon fill="#E6EEF4" points="299.3,200.1 299.7,200.4 300.1,200.5 300.6,200.7 301.3,200.5 301.4,200.2 301,199.9 300.9,199.6
			300.6,199.4 300.2,199.3 299.8,198.7 299.2,198.3 298.9,198.2 298.4,197.6 297.7,197.4 297,197.3 295.7,196.9 295.2,196.7
			294.7,197 294.9,197.5 295.5,197.7 296.4,198.4 296.5,198.9 296.6,199.2 296.9,199.2 298,200 298.8,200 		"/>
		<polygon fill="#E6EEF4" points="254,182.2 254.4,182.5 255.8,182.7 255.9,182.3 255.7,182.1 255.6,181.5 255,180.9 254.5,181
			254.4,180.8 253.8,180.8 253.6,181 253.5,181.4 253.1,181.3 252.5,182 252.7,182.2 253.2,182.1 253.2,182.4 253.5,182.7
			253.5,182.5 253.5,182.2 		"/>
		<polygon fill="#E6EEF4" points="269.9,118.7 269.9,118.5 269.6,118.3 269.3,118.2 269.2,118.3 269.6,118.7 		"/>
		<polygon fill="#E6EEF4" points="299.7,207.4 299.8,207.3 299.6,207.3 299.5,207.1 299.7,207 299.8,206.6 300.2,206.3 300.3,206.3
			300.3,206.2 300.2,206.2 299.7,206.6 299.4,207 299.6,207.3 		"/>
		<polygon fill="#E6EEF4" points="298.1,210.2 298.4,210 297.6,210 297.1,209.8 296.9,210.1 296.1,210.1 295.8,209.9 295.5,209.9
			294.8,209.3 294.4,209.3 294.3,209.7 293.9,209.4 293.9,209 293.7,208.7 293.7,208.5 294,208.1 293.9,207.6 292.9,208.4
			292.7,208.8 292.8,209 293.1,208.9 293.4,209.2 293.4,209.6 293.7,209.7 293.9,210.1 294.1,210.1 294.4,210.3 294.4,210.7
			294.8,210.8 296,211 296.2,211.6 296.8,211.9 297.2,211.7 297.4,211.2 297.4,210.8 297.5,210.3 		"/>
		<path fill="#E6EEF4" d="M274.8,138.6l-0.1,0.1l0.1,0.2l0.5,0c0,0,0.1-0.2,0.1-0.2L274.8,138.6z"/>
		<polygon fill="#E6EEF4" points="271.3,139.7 271.2,139.4 271.2,139.1 271,138.9 270.7,139.1 270.5,139.1 270.2,138.7 270,138.7
			269.8,139 269.3,139.5 269.1,139.5 268.7,139.8 268.6,140.3 268.8,140.7 268.4,141 268.3,141.3 268.4,141.8 268.1,142.1
			268.3,142.3 268.7,142.4 268.8,142.7 269,142.8 269.1,143.2 269.3,143.2 269.4,143 269.5,142.8 269.7,142.5 269.7,142.3
			269.6,142.2 269.7,141.9 270.2,141.5 270.5,141.1 270.8,141 270.9,140.9 270.9,140.7 270.8,140.4 271.1,140.1 		"/>
		<path fill="#E6EEF4" d="M271,131.9l-0.3-0.3l0.3-0.1l0.2-0.3l-0.3-0.1l-0.2-0.4l-0.2,0.1l0,0.3l-0.2,0.1l-0.2-0.1l-0.5-0.2l0-0.4
			l-0.2,0.1l-0.4,0.4l-0.9,0l-0.4-0.3l0.5-0.3l0.4,0l0.4-0.3l0-0.4l-0.2-0.2l0-0.6l0.2-0.3v-0.3l-0.3-0.3v-0.4l-0.7-0.8l-0.7-0.3
			l-0.1-0.2l-0.2-0.6h-0.4l-0.1-0.3l0.1-0.6l-0.2-0.4l-0.7,0l-0.9-0.3l-0.3-0.5l0.2-0.3l0-0.3l-0.4-0.3l-0.1-0.4l-0.2,0l-0.5,0.6
			l-0.1,0.5l-0.3,0.3l-0.2-0.2l0-0.7l-0.2-0.5l0.1-0.3l0.3,0.1h0.4l-0.1-0.4l0.1-0.4l-0.1-0.5l-0.5,0.1l0-0.4l0.4-0.5l-0.3-0.1
			l-1.1,0.4l-0.5,0.5l-0.4,1.1l-0.5,0.7l0,0.4l-0.3,0.5l0,0.3l-0.5,0.9l0.2,0.4l-0.3,0.2l-0.1,0.5l0,0.4l-0.7,0.6l-0.2,0.5v0.8
			l-0.1,0.3l0,0.8l-0.3,0.3l-0.7,0.1l-0.9,0.4v0.5l-0.3,0.9l0.1,0.6c0,0,0.2,0,0.2,0l0.1-0.5l0.3-0.1l0.2,0.1l0.4,0.2h0.4l0.2-0.1
			l0.3,0l0.3,0.2l0.1,0.3l-0.4,0.5l0.1,0.4l-0.3,0.4l0,0.7l0.1,0.2l0.3-0.2l0.2,0.2l0.4,0l0.3-0.2l0.5,0l0.1-0.2l0.4-0.2l0.4,0
			l0.5-0.4l0.2-0.6l0.4-0.3l0.3-0.4l0.2,0l0.3,0.3l0.4-0.3l0.3-0.2l0.3,0.1l0.2-0.7l0-0.7l0.5-0.3l0.2-0.4l0.3,0l0.3,0.2l0.3-0.3
			l0.3-0.1l0.3,0.1l0.1,0.4l-0.4,0.3l-0.2,0.3l0.4,0.3h0.8l0.4,0.1l0.1,0.4l-0.3,0.5l-0.3,0.1l0,0.7l0.3,0.2l0.2-0.2l0.4,0l0.2,0.2
			l0.3-0.1l0.2,0.3l0.5,0l0.3,0.3h0.3l0.7,0.4l0.2-0.2l0.3-0.6l0.3-0.1l0.4-0.5l0.5,0l0.1-0.3L271,131.9z"/>
		<path fill="#E6EEF4" d="M263.1,169.1l-0.2,0.4l0.3-0.2l0.6-0.8l0.2-0.2l0.1-0.6l-0.2-0.3h-0.2V167l-0.4-0.2l-0.2,0.3l-0.2,0.8
			l-0.4,0.4l-0.4,0.3l0.1-0.4l0.4-0.4l0.2-0.5l-0.1-0.2l-0.4,0.3l-0.3,0.7l-0.6,0.6l-0.1,0.3l-0.4,0.5l0.1,0.3l0.2-0.1l0.5-0.7
			l0.3-0.1l-0.1,0.4l-0.4,0.6l0.2,0.1l0.4-0.2h0.3c0,0,0.4-0.5,0.4-0.5l0.6-0.9l0.1-0.4l0.2,0l0,0.4L263.1,169.1z M262.8,168.7
			l-0.3,0.5l-0.2,0.1l0.1-0.4l0.7-0.8L262.8,168.7z"/>
		<polygon fill="#E6EEF4" points="235.9,299 236,298.6 235.5,298.6 235.3,299.1 		"/>
		<polygon fill="#E6EEF4" points="248.7,302 248.2,301.2 246.1,301.1 245,301.3 244.4,301.2 244,301.3 243.6,301.8 244.2,302.2
			244.5,302.1 244.9,302.2 245.2,302.9 245.6,303.2 246.2,303.2 246.6,303.6 247.3,303.6 247.3,303 247.8,303 248,303.3
			248.3,303.2 248.5,302.7 248.9,302.9 249.8,302.9 249.9,302.7 249.4,302.2 		"/>
		<polygon fill="#E6EEF4" points="259.2,300.4 259.1,300 258.5,299.6 258,299.8 258.4,300.1 		"/>
		<path fill="#E6EEF4" d="M261.9,301.2l0-0.3l0-0.5l-0.3-0.6l0.1-0.2l0.4-0.2l0.2-0.6l-0.2-0.4l0.3-0.5l-0.1-0.3l0,0l-0.5-0.1
			l-0.5,0.1l-0.5-0.5l-1.2-0.1l-0.3,0.2l-0.5-0.2h-1l-0.2,0.3c0,0,0.6,0.3,0.6,0.3l1.5,0.5l-0.2,0.3l0.2,0.4l-0.2,0.7l0.3,0.5
			l0.5,0.1l0.6,0.5l-0.1,0.3l-1.1,0l-0.2,0.2L259,301l-0.7,0.1l-0.6-0.2l-0.7,0.3l0-0.3l-0.2-0.1l-0.9,0.2l-0.5-0.4l-0.6,0.3
			l-0.2,0.3l0.2,0.5l0.7,0.1l0.7,0.8l0.3,0.1l0.1-0.5l0.3-0.2h1.2l0.5,0.3l1.5,0l0.3-0.2l0.5,0.2l0.4,0l0-0.3L261.9,301.2z"/>
		<polygon fill="#E6EEF4" points="260.6,296.6 259.6,296.1 259.1,296.3 259.5,296.6 		"/>
		<polygon fill="#E6EEF4" points="251.4,297.4 252.8,297 253,296.7 253.3,296.8 253.7,296.5 254.7,296.6 255.4,296.4 255.7,295.8
			255.4,295.6 254.9,295.5 254.6,294.8 253.4,294.3 251.9,294.3 251.5,294.1 251.8,293.8 252,293.2 251.7,293 251.2,293.2
			250.7,293.2 249.7,292.4 249.4,292.7 249,292.3 248.2,291.7 247.8,292.2 247.6,291.9 247.7,291.6 247.4,291.5 247.2,291.8
			246.9,291.4 245.8,291.2 245.1,290.5 244.5,290.2 243.8,289.6 242.2,289.6 241.7,289.3 241.5,288.7 240.8,288 240.3,288.1
			240.1,287.8 238,287.5 237.3,287.7 236.5,287.6 236,287 234.7,286.7 233.6,286.8 233,287.2 231.5,287.3 230.3,287.6 229.9,288
			228.7,288.3 228.3,288.8 227.8,289.1 227.7,289.7 228,290.2 227.9,290.4 227.4,290.2 226.5,290.7 226.1,290.6 226,291
			226.6,291.2 227.1,290.6 227.3,290.7 227.3,291.2 228,290.8 228.5,290.7 229.1,289.9 229.8,290 230.1,289.8 230.4,290 231,289.9
			231.8,288.9 232.3,288.8 232.6,288.4 233.4,288.6 233.9,288.5 235.2,288.7 235.5,289 235.2,289.3 234.5,289.2 234.1,289.5
			234.5,289.8 236.2,290.1 236.5,290 237,290 237.5,290.4 238.2,290.5 238.6,290.4 238.8,290.1 239.2,290.4 239.2,290.7
			240.1,291.4 240.9,291.5 241.2,291.3 241.6,291.7 242.2,291.6 242.6,291.8 243.3,291.6 243.7,291.7 244.1,293.3 245,294.4
			245.5,294.4 245.7,294.3 246.3,294.6 247.3,294.6 247.5,294.9 247.9,295.1 247.8,295.6 247.1,295.8 246.2,296.6 246.2,297.1
			247.1,297.3 247.8,297 248.3,297.2 249.6,296.8 250.4,296.9 		"/>
		<polygon fill="#E6EEF4" points="231.5,291.8 231.3,291.6 231.3,291.9 232,292.1 232.7,291.9 232.8,291.4 232.3,290.8 231.8,290.7
			231.6,291.1 231.8,291.4 232,291.6 231.8,291.8 		"/>
		<polygon fill="#E6EEF4" points="255.9,289.4 255.8,289.7 256.1,289.7 257.3,289 257.3,288.4 257.2,288.1 256.7,288.3 256.7,288.7
			256.2,289.3 		"/>
		<polygon fill="#E6EEF4" points="259.1,292.2 259.4,292.3 259.4,291.8 		"/>
		<polygon fill="#E6EEF4" points="253.9,287.4 254.2,287.9 254.6,287.9 254.1,287 253.9,286.3 253.5,285.5 253.4,285.8 253.7,286.5
			253.4,286.7 		"/>
		<polygon fill="#E6EEF4" points="253.3,282.9 252.8,282.5 252.7,282.9 253.1,283.3 253.2,284.1 253,284.4 253.2,284.7 253.9,284.6
			253.9,284.3 253.5,283.5 		"/>
		<polygon fill="#E6EEF4" points="251.4,285.7 251.8,285.7 251.5,285.2 		"/>
		<polygon fill="#E6EEF4" points="258.8,289.5 259,289.8 259.5,289.7 260,290 260.1,289.7 259.2,289.3 		"/>
		<polygon fill="#E6EEF4" points="255.5,284.6 255.7,284.9 256,284.4 255.8,284.1 		"/>
		<polygon fill="#E6EEF4" points="255.6,287.6 255.6,288 255.9,288.4 256.3,288.5 256.3,288 		"/>
		<polygon fill="#E6EEF4" points="258,292.8 257.3,293.3 257.1,294.1 258.6,293.9 259.1,293.3 259.1,292.6 258.9,292.8 258.5,293.2
					"/>
		<polygon fill="#E6EEF4" points="250.5,280.1 250.5,280.5 251.1,280.8 251.5,281.4 251.3,281.8 251,282 251.3,282.2 251.6,282.2
			251.8,281.3 251.3,280.6 		"/>
		<polygon fill="#E6EEF4" points="247.3,283.4 246.8,283.6 246.9,283.9 		"/>
		<polygon fill="#E6EEF4" points="246.6,283.8 246.4,284 246.7,284.1 		"/>
		<polygon fill="#E6EEF4" points="246.6,281.2 246.2,281.1 246,281.8 245.6,282.6 245.9,283 246.4,282.7 246.5,283.2 247.2,282.8
			246.7,281.9 		"/>
		<polygon fill="#E6EEF4" points="246.9,285.5 247.4,285.4 247.6,284.9 247.5,284.6 247.5,284.2 247.3,284 246.6,284.3 246.6,284.8
					"/>
		<polygon fill="#E6EEF4" points="247.7,281.2 248.1,281.4 248.8,281.4 249.1,281 248.4,280.8 		"/>
		<polygon fill="#E6EEF4" points="249.8,276.7 249.3,276.4 249.2,275.9 248.4,275.3 247.6,275.3 248.5,275.6 248.6,276.2 249.2,277
			248.8,277.3 249,277.8 248.8,278.7 249.2,278.3 249.2,277.8 249.8,277.4 		"/>
		<polygon fill="#E6EEF4" points="246.1,275.6 245.3,276.1 245,275.9 244.3,275.9 245,276.7 245.5,276.8 246.6,276 247.1,276.1
			247.6,276.2 247,275.6 		"/>
		<polygon fill="#E6EEF4" points="268.7,228.3 268.7,228.2 267.9,228.6 267,228.6 266.3,228.8 265.7,228.7 264.9,229 264.3,229.1
			264,229.5 264.1,229.8 264.4,229.8 264.2,230 264.6,229.9 264.8,229.7 265.4,229.7 266,229.5 266.9,229.5 267.3,229.2
			268.1,229.3 268.3,229.1 268.5,229.1 269.3,228.9 269.6,228.6 269.1,228.8 268.8,228.6 268.3,228.9 268.5,228.6 		"/>
		<polygon fill="#E6EEF4" points="148.7,254.1 148.6,254.3 158,258.6 166,258.9 166,257.9 170.5,258 171.1,258.3 171.5,259
			171.7,259.3 171.8,259.5 172.1,259.5 172.3,259.9 172.3,260.2 172.7,260.3 173.1,260.7 173.1,260.9 172.9,261.1 173.3,261.2
			173.7,261.5 173.9,261.9 174,262.5 174.2,262.7 174.3,262.8 174.4,263 174.7,263.3 174.8,263.7 174.6,263.8 174.3,263.9
			174.3,264.1 174.8,264.7 175.1,265.1 175.3,265.5 175.2,265.7 175.4,265.7 175.6,265.9 175.8,265.9 176.1,266 176.2,266.2
			176.2,266.4 176.4,266.6 176.7,266.6 177.3,266.9 177.4,267 177.8,267.2 178.4,267.5 178.6,267.7 178.8,267.7 179.1,267.6
			179.1,267.4 179.5,267.1 179.8,267 179.8,266.8 179.8,266.7 180,266.4 180.4,265.6 180.7,265.3 181,265.2 181.2,265.3
			181.3,265.3 181.5,265.3 181.7,265 182.2,265 182.7,265 183.2,265 183.4,265.1 183.5,265.3 183.9,265.2 184.2,265.4 184.5,265.8
			185,266.2 185.5,266.9 185.7,267.5 185.8,267.7 185.9,268.2 185.9,268.8 186.2,269 186.4,269.3 186.7,270.4 187,270.5
			187.1,270.9 187.5,271.1 187.6,271.6 187.9,272.1 188.4,272.6 188.3,273.1 188.3,273.6 188.3,273.7 188.3,273.9 188.9,275.5
			188.8,276.3 189.1,276.5 189.1,276.6 189.5,276.7 189.8,276.7 190.2,276.9 190.6,277.3 191.5,277.6 192.1,277.9 192.6,278
			192.7,278.4 193,278.5 193.3,277.7 193.4,277.1 193.3,276.7 193.4,275.5 193.1,275 193.4,274.4 193.7,273.6 194.1,273 193.9,272
			194.3,271.8 194.8,271.3 194.5,271 195,270.4 195.3,270.5 195.8,270.3 195.8,269.6 196.1,269.8 196.7,269.6 196.4,269.3
			196.9,269 197.1,269.2 197.3,269 197.8,269.3 197.3,269.8 197.7,269.7 198.2,269.3 198.5,269.3 199.7,268.7 200.6,267.9
			201,267.9 201.3,267.6 201.2,267.1 201.2,266.5 200.9,265.7 201.2,266.1 201.5,266.1 202,265.6 202.1,265.3 202.3,265.9
			201.9,266.3 202.1,266.7 202,267.2 202.6,267.1 203.1,266.5 203.5,266.4 203.8,266.2 204.8,266 205.5,266 206.8,266.3 207,266.6
			208.6,266.7 209.1,266.6 209,266.3 209.1,266 209.6,265.8 209.9,265.9 209.7,266.3 210,266.4 210.4,266.2 210.6,266.4
			210.6,266.8 210.8,267 211.3,267 211.5,267.3 211.2,267.6 210.9,267.9 211.2,268 211.7,267.9 212.1,268.1 212.8,268.4 213,268
			213.5,267.7 213.9,268.1 214.1,268.4 214.6,268.2 214.6,267.5 214.3,267 214.8,267 215.2,267.6 215.6,267.8 215.9,268.1
			216.2,268.1 216.5,268.3 216.5,268.8 216.7,268.5 217.1,268.4 217.2,268.2 216.5,267.7 215.6,267.4 215.5,267 215.5,266.5
			216.3,266.2 216.5,265.9 216,265.7 215.8,265.5 215.7,265.4 215.3,265.8 215,265.9 215,265.5 215.5,265 216.4,264.6 216.9,264.2
			218.5,263.9 219.1,264 219.5,263.9 219.9,264 220.1,263.5 220.4,263.1 220.7,263.1 220.6,263.5 220.6,263.8 221.2,264.3
			221.6,264.1 222.4,264.1 222.8,264 223.1,264.2 224,264.1 224.2,264.2 224.8,263.8 225.4,263.8 225.6,264 225.2,264.1
			224.6,264.1 224.5,264.2 225.2,264.3 225.9,264.3 226.3,264.7 226.8,264.9 226.5,264.5 226.6,264.3 226.8,264.3 226.9,264.6
			227.4,265 227.3,265.2 227,265 226.9,265 227.6,265.5 227.8,265.9 228,266.2 227.9,266.2 227.8,266 227.7,266.2 227.8,266.4
			228.6,266.3 229.1,266.3 229.9,265.5 230.1,265.6 230.2,265.5 230.2,265.4 230.6,265.1 231.1,265 231.5,265.2 232.1,265.5
			232.4,266.4 232.7,266.7 232.9,266.8 232.9,267.3 233.3,267.6 233.6,267.6 233.6,267.8 233.8,268.2 234.2,268.3 234.6,269
			234.5,269.7 234.2,270.9 233.6,272 233.6,272.4 233.9,272.9 234.1,272.8 234.4,272.3 234.3,272.1 234.5,271.9 234.9,272.1
			234.9,272.6 234.2,273.6 234.4,273.9 234.4,274.5 234.8,274.9 234.9,275.2 235.1,275.1 235.3,275.6 235.4,275.4 235.4,275.1
			235.7,275.3 236.2,275.1 235.8,275.5 235.7,276 235.5,276.3 235.5,276.6 236.2,277.1 236.3,277.7 236.2,278.4 236.4,278.6
			236.9,278.6 237.1,279 237,279.5 237.7,280 237.4,280.2 238,280.3 238.2,280.7 238.8,280.8 239.3,280.6 239.7,280.5 239.8,279.8
			240.2,279.3 240.4,278.6 240.9,277.6 240.8,277.1 241,276.9 241.1,275.9 240.9,275.7 241.3,275.4 241.1,274.5 240.5,274.2
			240.2,272.4 240,272.1 240.1,271.3 240.3,270.6 240.1,270.1 239.8,269.7 239.5,268.3 239.3,267.8 239.1,266.6 238.8,265.9
			239,264.6 238.9,263.9 239.1,262.1 239.1,261.2 239.5,260.4 239.9,259.6 240.4,259.5 240.6,259.2 240.9,259.1 241.3,258.6
			241.3,258.1 241.1,258 241.3,257.8 242,257.8 242.1,257.5 242.6,257.5 242.7,257.2 243.6,257.1 243.9,256.7 244.5,256.8
			244.6,256.5 244.9,256.4 245.2,256.6 245.7,256 245.7,255.7 246,255.7 246.5,255.3 246.5,255 247.5,253.6 248,253.1 248.8,253
			249.1,253.2 249.4,253.2 249.8,252.3 251.2,251.2 252.5,250.4 253.2,250.3 253.4,250.2 253.7,250.2 253.8,250.3 254.3,250.3
			254.8,249.7 254.6,249.6 254.5,249.4 254,249.9 253.3,249.8 252.9,249.4 253.4,249.6 254.1,249.3 254,249.1 254.3,248.9
			254.1,248.6 253.4,248.5 253.1,248.1 253.5,248.1 253.9,248.3 254.3,248.2 254.3,247.8 254.5,248.4 254.9,248.3 255.3,248.6
			255.5,248.4 255.7,247.9 256.3,247.5 256.5,247.4 256.6,246.9 256.4,246.4 256.3,246.4 256,247 256,247.3 255.7,247.2
			255.6,246.4 255.4,246.3 254.3,246.4 253.7,246.6 253.8,246.3 253.8,245.5 254,245.3 254.3,245.9 254.6,246 254.9,245.8
			255.7,245.6 255.8,245.4 256.2,245.4 256.3,245.1 256.2,244.5 256,244.3 256,244 256.3,244.2 256.5,243.6 256.4,243.1
			256.1,242.9 255.7,243 255.3,242.9 255,242.2 254.7,242.2 254.3,242 253.9,241.6 254.3,241.8 255,241.8 255.3,242.3 255.6,242.5
			255.9,242.1 255.2,241.5 255.7,241.6 255.8,241.4 256,241.2 255.8,240.8 255.2,240.4 255,239.8 255.2,239.9 255.4,240.4
			255.8,240.4 256,239.8 255.9,239.3 255.5,239.1 254.9,238.3 254.2,238.1 253.9,237.6 253.5,237.4 253.5,236.9 253.9,236.4
			253.7,236.9 253.8,237.2 254,237.2 254.4,237.9 254.9,237.9 255.6,238.7 255.7,238.7 255.8,237.6 255.8,237.1 255.8,236.7
			255.7,236.4 255.8,235.6 255.9,235.2 255.6,234.8 255.9,234.9 256.2,234.6 256.8,234.2 256.9,233.6 256.9,233.5 257.1,233.7
			256.9,234.2 257.1,234.4 256.6,234.7 256.3,235.3 256.8,236 256.6,236.8 256.2,237.4 256.2,237.9 256.7,238.5 256.9,238.3
			256.9,238.5 257.2,238.5 257.2,238.6 257,238.8 257.2,239.2 257.9,239.2 257.4,239.5 257.5,239.6 257.2,240.1 257.2,240.4
			256.9,240.9 256.8,241.6 256.8,242.1 257,241.9 257,241.6 257.6,240.6 257.7,240.8 257.7,241 257.9,240.8 257.9,240.5
			258.2,239.9 258.6,238.8 259.2,238.4 259.7,237.4 259.7,236.7 259.4,235.8 259.1,235.5 259,234.7 258.8,234.5 258.7,233.9
			259,233.4 259.5,232.9 260.1,232.6 259.2,233.6 259,234 259.2,234.4 259.9,235 260.3,234.9 260.5,235.2 260.2,235.9 260.6,235.6
			260.7,235.8 261.1,235.2 261.2,234.9 261.4,234.9 261.6,234.6 262,234.4 262.3,233.6 262.5,233.3 262.8,233.3 263,232.7
			263.2,232.4 263.1,232.1 263.4,231.6 263.3,231.4 263.6,231 263.6,230.7 263.2,230.4 263,230 263.7,229.6 263.8,229.2
			264.2,228.8 264.7,228.7 265.6,228.2 266.2,228.2 267,227.6 267.4,227.5 267.6,227.7 268.7,227.6 269.2,227.8 269.9,227.6
			271.1,227.5 271.4,227.4 271.2,227.2 271.2,226.4 271.2,225.8 271.8,226.4 271.8,226.9 271.7,227.3 272.1,227.4 272.6,226.8
			273.1,225.9 273.4,226.4 273.4,226.8 273.7,226.9 275,226.3 275.3,225.7 275.1,224.7 274.8,224.8 274.9,225.3 274.7,225.9
			273.9,225.9 273.8,225.5 273.5,224.6 272.8,224.2 272.8,223.9 273.8,223 273.7,222.6 273.4,222.6 273.4,222.3 273.7,222.1
			273.8,221.7 274.2,221.2 274.5,220.2 275.5,219.4 275.9,218.7 276.2,218.7 276.5,218.2 276.5,218.6 276.9,218.7 277.2,218.3
			277.5,217.8 277.6,218.4 277.9,218.4 278.2,217.7 278.4,218 278.7,217.8 279.2,216.9 279.9,216 279.8,216.6 279.9,217
			280.4,216.9 280.9,216.4 281.5,216.4 281.7,217 282.1,217 282.5,216.4 283,216.6 283.3,216.4 283.8,216.1 284.2,216.1
			284.9,215.7 285,216.1 285.5,216 285.9,215.5 285.4,215.2 285.2,215.6 284.8,215.2 284.9,214.6 283.9,214 283.9,214 283.9,213.9
			283.8,213.8 283.9,213.5 283.8,213.3 283.9,213 283.9,212.5 283.7,212.2 283.5,211.9 283.3,211.8 283.4,211.4 284,207.9 284,207
			282.9,206 282.6,206.2 281.9,206 281.3,206.2 280.9,205.8 280.6,205.6 280.4,205.6 279.9,206.1 279.7,206.5 278.7,207.6
			278.2,208.3 278.3,208.7 277.6,209.1 277.5,209.7 277.2,210.3 276.5,211.2 276.2,211.3 275.3,212.3 275.1,212.7 274.8,212.9
			274.3,212.8 274,212.8 273.7,213 273.5,213.1 272.8,213.7 264.7,213.5 263.8,213.7 263.3,214.1 262.6,214.4 262,214.9
			260.8,216.1 260,216.2 259.5,216.6 257.2,218.3 252,219.8 251.7,221.2 250.5,221.6 241,224.2 240.5,223.3 241,222.7 242.1,222.1
			242.5,221.6 242.8,220.9 243.1,220.3 243.3,216.6 241.5,208 239.8,206.7 239.1,205.8 228,200.6 227.6,200.3 226.9,200.1
			226.6,199.8 225.3,199.8 225.1,199.3 224.8,199 224.3,199.3 223.4,199.4 223,199.2 222.6,198.7 222.1,198.6 221.1,198.3
			220.9,197.7 220.5,197.7 219.9,197.1 219.3,197.2 218.9,197.1 218.4,197.2 218.2,197.3 217.9,196.9 217.3,196.7 217.2,196.6
			216.7,196.4 216.5,196.3 216.2,195.9 216.1,195.7 215.5,195.2 214.9,195.2 214.3,195.2 142.1,188 142.3,188.9 142.9,189.4
			142.8,189.8 142.4,190.1 142.4,190.6 142.8,190.9 142.7,191.1 142.3,191.5 142.5,191.7 142.6,192.1 142.8,192.4 142.4,193
			141.9,193.3 141.7,194 141.4,194.2 141.4,194.9 141.1,195.2 140.9,195.7 140.3,196.1 139.8,195.8 139.7,195.6 140.1,195.1
			140.2,195.3 140.6,195 140.6,195.4 140.8,195.2 140.8,194.5 141.2,193.9 141.6,193.5 141.5,193 141.3,193.1 140.7,193.6
			140.5,193.9 140,193.9 140,193.7 140.6,193.1 141.1,192.9 141.3,192.6 141.1,192.2 140.9,192.2 140.6,192.3 140.3,191.8
			139.9,191.6 138.7,191.5 138,191.1 136.7,190 136.5,190 136.4,190.6 136,191.6 136,192.1 136.3,193.2 136,194.6 136.2,195.3
			136,196 136.1,196.4 136.4,196.5 136.5,196.7 136.3,197 136,197 135.8,197.4 136,197.7 136.5,197.8 136.3,198.3 136.3,198.8
			136,199.2 135.8,199.1 135.6,199.3 135.7,199.6 136.4,199.8 137.2,199.9 137.6,200.3 138.2,200.4 138.5,200.7 138.6,201.4
			138.3,200.8 137.8,200.5 137.5,200.5 137.1,200.3 136.2,200.2 135.8,200 135.7,200.1 135.7,200.6 135.1,201.3 135.1,201.7
			135.2,202.1 134.7,202.9 134.5,203.5 133.7,205.2 133.6,206.4 132.9,207.7 132.7,209.2 132.3,209.9 131.8,210.5 131.5,211.5
			131.2,211.7 131,212.3 130.3,213.2 130.1,213.7 130.2,214.8 129.9,215.8 129.9,216.6 130.3,217.2 130,217.5 130,217.9
			130.2,218.6 130.1,219.7 129.8,220.4 129.5,220.7 129.6,221 129.7,221.2 129.5,221.9 128.6,222.5 128.3,223.1 128.3,223.7
			128.8,224.4 129.3,225.4 129.3,226.5 129.2,227.1 128.9,227.6 128.9,227.9 129.1,228.4 129.2,228.9 128.9,229.4 128.8,229.7
			129,230.1 130.1,231.8 130.2,232.4 130,232.7 130.2,233.1 130.8,233.7 130.9,234 131.1,234 131.3,234.1 131.3,233.5 131.3,232.8
			131.7,233.1 131.8,232.9 131.9,233.2 132.3,233.2 132.5,233.4 133.2,233.5 132.7,233.6 132.2,233.7 132,233.5 131.7,233.5
			131.7,233.9 131.9,234.1 132,234.8 132.2,235.2 132.4,235.5 131.9,235.2 131.6,234.7 131.4,234.6 131.2,234.8 131.3,235.2
			131,235.4 131.1,235.7 130.9,236.2 131,236.6 131.2,236.8 131.4,237.3 131.8,237.6 132.1,237.9 132.1,238.3 131.7,238.7
			131.5,238.7 131.5,238.9 131.6,239.5 131.6,240 131.7,240.4 132.1,240.7 132.2,241.7 132.8,242.9 133.2,243.5 133.5,243.7
			133.4,243.9 133.4,244 133.9,244.5 134,245.1 133.8,245.9 133.7,246.4 133.6,246.5 133.7,246.9 134,247.1 134.9,247.1
			135.5,247.3 135.9,247.6 136.4,247.6 137.1,247.6 137.4,248 137.4,248.5 138.2,248.9 138.6,248.9 139.3,249.1 139.4,249.4
			139.4,249.9 139.6,250 139.9,250 140.2,249.9 140.9,250.5 141.8,252 142,252.8 141.8,253.5 141.9,254 148.5,253.9 		"/>
		<polygon fill="#E6EEF4" points="194.4,273.2 194.7,272.5 194.7,272.3 194.2,273.4 		"/>
		<path fill="#E6EEF4" d="M194,277.1L194,277.1C194,277.1,194,277.1,194,277.1z"/>
		<path fill="#E6EEF4" d="M194.1,273.6l-0.5,1.2l-0.1,1.3c0,0,0.3,0.8,0.4,1l-0.2-0.9l0.1-1.2L194.1,273.6z"/>
		<polygon fill="#E6EEF4" points="194.9,271.9 195.1,271.7 195.7,271 196.1,270.5 195.5,270.9 		"/>
		<polygon fill="#E6EEF4" points="273.2,227.2 273.1,227.3 272.9,227.5 273,227.7 273.3,227.7 273.5,227.5 273.9,227.5 273.7,227.2
					"/>
		<polygon fill="#E6EEF4" points="142.3,191 142.1,190.7 141.6,191.2 141.6,192 141.9,192.8 142.2,192.6 141.8,191.6 141.9,191.1
			"/>
		<polygon fill="#E6EEF4" points="306,518.5 305.7,518.3 305.4,518.5 305.6,518.9 306.3,518.6 		"/>
		<polygon fill="#E6EEF4" points="309,515.8 308.3,515.9 309.3,516.2 		"/>
		<polygon fill="#E6EEF4" points="310.2,516.9 309.9,516.5 309.5,516.6 309.3,517 309,517 308.6,516.6 308.1,516.6 307.9,517.2
			307.4,517.1 306.9,516.7 306.7,516.9 307.3,517.8 307.9,517.9 307.9,518.2 307.3,518.2 306.9,518.4 307,518.8 306.5,519.3
			306.1,519.3 306.1,519.6 306.7,519.9 307,519.6 307.5,520 307.9,519.4 307.3,519.2 307.7,518.9 308.6,519 309.2,518.7
			309.2,518.1 309.9,517.5 		"/>
		<polygon fill="#E6EEF4" points="308,516.4 307.3,516.1 307.6,516.5 		"/>
		<polygon fill="#E6EEF4" points="313.8,517 313.6,516.7 312.9,516.5 312.5,516.7 312.6,517 312.3,517.1 311.9,516.6 311.9,516.2
			311.1,516 311,516.5 310.6,516.7 310.8,517 310.6,517.3 311.1,518 311,518.2 310.7,518 310.3,518.1 309.3,519.4 309.7,519.5
			310.1,520.1 310.5,520.2 310.5,520 310.2,519.5 310.4,519.3 310.8,519.6 311.1,519.5 310.9,519.2 310.8,518.9 311.4,519
			311.9,518.9 311.9,518.7 311.5,518.7 311.2,518.5 311.5,518.3 311.9,518.4 312.6,518.3 313.1,517.9 313.6,517.8 313.5,517.4
			313.2,517.3 313.1,517.2 313.4,517 		"/>
		<polygon fill="#E6EEF4" points="244.6,332.6 244.9,332.4 245.1,331.7 245.5,331 245.3,330.3 245.2,329.9 245.3,329.4 245.1,329.2
			244.7,329 244.6,328.7 244.1,328.1 242.9,327.4 242.2,327.3 241,327.3 240.6,327.2 240.4,326.9 240,326.7 239.7,326.8 239,327.3
			238.1,327.5 236.4,328.4 235.9,328.9 235.4,328.9 234.5,328.9 233.6,328.2 232.9,327.9 232.8,328.1 233.1,328.3 233.1,328.6
			232.7,328.6 232.2,328.4 232,328.2 232.2,328.1 232.4,328 232.2,327.8 232,327.9 231.6,327.8 231.3,327.4 231.2,327.1
			230.7,327.1 230.5,327.3 230.5,327.8 230.2,328.1 230.1,328.6 230.4,328.7 230.7,329.2 230.3,329.5 230.2,329.9 230.2,330.2
			230.4,330.5 230.8,330.5 231.2,330.5 231.7,330.5 232,330.3 232.2,330.5 232.2,330.7 232.5,330.8 233.5,331 233.7,331.7
			234,332.4 234.5,332.7 234.9,332.6 235.1,332.3 234.9,332.1 235.1,331.8 235.5,331.9 235.6,332.1 235.5,332.4 235.7,333
			235.6,333.4 235.8,333.7 236.5,333.8 236.9,333.3 237.3,332.9 237.8,333 238,332.9 238.1,332.3 237.6,331.9 237.2,331.6
			237,331.1 237.1,330.8 237.5,330.6 238.4,330.4 239.2,329.7 239.1,329.4 239,329.3 239,328.7 239.9,328.3 240.6,328.2
			240.9,328.4 241.4,328.9 241.8,329 242.3,329.6 242.5,330.2 242.7,330.4 242.9,330.2 243.3,329.8 243.6,329.8 243.7,330.2
			243.5,330.4 243.2,330.5 242.7,331.2 242.5,331.4 242.7,332.1 243.4,333 243.9,333.5 244.3,332.7 		"/>
		<polygon fill="#E6EEF4" points="230.2,329.9 230.3,329.5 230.7,329.2 230.4,328.7 230.1,328.6 230.2,328.1 230.5,327.8
			230.5,327.3 230.7,327.1 231.2,327.1 231.2,327 230.8,326.7 230.3,326.6 230,326.2 229.9,325.7 229.3,325.2 229,324.6 228.9,324
			228.7,323.5 228.4,323.6 228.3,323.9 227.8,323.9 227.9,323.7 227.6,323.7 227.3,323.8 226.7,323.3 226.7,323.1 226.4,323
			226.1,322.5 225.3,322.6 224.8,322.7 223.3,322.2 222.4,322.4 222.4,322.5 222.2,322.6 222.2,322.6 222.1,323.3 221.9,323.4
			222,323.6 222.5,323.7 222.6,324.2 222.1,324.5 221.8,325.1 222,325.7 222.7,326.3 223.5,326.3 223.9,326.6 224.2,327.1
			224.4,327.1 224.7,326.5 224.6,326 223.9,325.5 223.7,325.2 223.9,325 224.4,325.4 224.9,325.6 225,326.1 225.5,326.5 225.7,327
			226.3,327.4 226.8,327.8 227.2,328.1 227.8,328.8 227.9,329 227.5,329.5 227.5,329.9 227.7,330.3 228.4,330.5 228.8,330.8
			229.1,330.7 229.1,330.2 228.9,329.8 228.4,329.6 228.4,329.5 228.6,329.4 228.9,329.6 229.4,330.2 229.3,330.7 229.5,330.8
			229.7,330.9 229.9,331.1 230.2,331.1 230.3,330.8 230.3,330.5 230.4,330.5 230.2,330.2 		"/>
		<path fill="#E6EEF4" d="M222.4,322.4l0.9-0.1l1.5,0.4l0.5-0.1l0.8,0l0.3,0.4l0.4,0.1v0.2l0.6,0.5l0.3-0.2h0.3l0-0.1l0.3-0.2
			l-0.1-0.4l-0.3-0.4l-0.1-0.6l0.3-0.7l0.2-0.4l0-0.6l-0.2,0.3L228,321l-0.3,0.2v-0.4l0.1-0.4l0.3-0.6l-0.1-0.4l0-0.4l0.3-0.8
			l0.2,0.1l-0.1,0.2c0,0,0,0.3,0,0.4c0,0.1,0,0.6,0,0.6l0.2,0l0.2-0.4l0.1-1.1l0-1.3l0.1-0.3l-0.2-0.3l-0.2-0.1l0-0.3l0.2-0.2l0.2,0
			l0.1,0.2l0.2-0.7l0.5-0.6l0.2-0.4l0-0.3l-0.3-0.2l0-0.2l0.2-0.4l-0.1-0.5l0-0.7l0.2-0.3l0.2-0.2l-0.3,0.1l-0.4,0l-0.1-0.2H229
			l-0.2,0.1l-0.1,0.4l-0.4,0.2l-0.5,0.3l-0.5,0l-0.1,0.3l-0.4-0.1l-0.5,0.1l-0.1-0.2l-0.4-0.3l-0.2,0l-0.1,0.5l-0.5,0l-0.4,0.7
			l0,0.3l-0.3,0.1l-0.6,0.5l-0.6,0.2l-0.2,0.3l-0.4-0.1l-0.3,0.1l-0.3-0.3l-0.7-0.1l-0.9,0.5l-0.9,0.1l0.1,0.5v0.4l-0.1,0.7
			l-0.2,0.4l-0.7,0.1l-0.5,0.1l0,0.3l-0.2,0l-0.5-0.2l-0.1,0.2l1,1.2l0.5,0.3v0.3l0.8,0.7l0.7,1l1.3,1.4l0.3,0l0.2,0.1l0.2-0.1
			V322.4z"/>
		<polygon fill="#E6EEF4" points="212.2,315.9 212.4,315.9 212.2,315.9 		"/>
		<polygon fill="#E6EEF4" points="219.4,317 219.6,316.6 219.6,315.8 219.6,315.4 219.6,314.9 220.4,314.8 221.4,314.3 222,314.4
			222.3,314.7 222.6,314.7 223,314.8 223.2,314.5 223.7,314.3 224.3,313.7 224.6,313.6 224.6,313.3 225,312.6 225.6,312.6
			225.7,312.1 225.9,312.1 226.3,312.4 226.4,312.6 226.9,312.5 227.2,312.6 227.4,312.3 227.8,312.2 228.3,311.9 228.7,311.7
			228.8,311.4 229,311.2 229.4,311.2 229.5,311.5 229.9,311.4 230.2,311.4 230.3,311.2 230.2,310.9 229.5,310.4 228.9,310.1
			228.9,310.2 229.1,310.7 228.5,310.6 227.8,310.6 227.5,310.3 227,310.3 226.6,310.3 226.7,310.1 227,310 227,309.7 227.2,309.6
			227.7,309.7 228.4,310 228.5,309.9 228,309.5 227.3,309.1 226.9,309.1 226.4,309.2 226.1,309 226,309.4 225.6,309.1 224.4,309
			223.2,308.9 222.6,308.4 222,308.1 221.9,308.4 222.1,308.6 221.6,308.8 221.4,309 220.9,308.8 220,309.1 218.8,309 217.2,309
			216.4,309.4 216.1,309.1 216,309.4 215.6,309.6 215.5,310.1 214.7,310.6 214.3,310.5 213.5,311.3 213.1,311.7 213.2,312.2
			212.9,313 212.6,313.2 212.8,313 213.3,313.1 213.4,313.3 213.7,313.4 214,313.7 214.5,313.6 215.1,313.7 215.4,314.2
			215.5,314.5 215.8,314.7 215.9,314.5 216.1,314.1 216.5,314.1 216.8,314.2 217.2,314.3 217.2,314.8 217,315.3 217.1,315.5
			217,315.9 217,316.2 217.1,316.2 217.4,316.3 217.5,316.5 217.7,316.5 217.9,316.3 218.1,316.4 218.1,316.8 218.2,317.1
			218.2,317.1 218.7,317 		"/>
		<polygon fill="#E6EEF4" points="217.1,315.5 217,315.3 217.2,314.8 217.2,314.3 216.8,314.2 216.5,314.1 216.1,314.1 215.9,314.5
			215.8,314.7 215.5,314.5 215.4,314.2 215.1,313.7 214.5,313.6 214,313.7 213.7,313.4 213.4,313.3 213.3,313.1 212.8,313
			212.6,313.2 212.1,313.5 212.1,313.6 212.1,313.8 211.7,314 211,314.1 210.4,314.7 210.4,315 210.2,315.3 210.5,315.4 211,315.4
			211.5,315.8 212.1,315.9 212.2,315.9 212.4,315.9 213.4,316.3 214.3,316.8 214.4,316.6 214,316.4 214.2,316.2 214.7,316.3
			215.1,316.8 215.4,317.1 216.7,317.1 217,316.6 216.9,316.3 217,316.2 217,316.2 217,315.9 		"/>
		<polygon fill="#E6EEF4" points="215.2,301.6 215.1,301.8 215,302.3 214.7,302.7 214.6,302.9 214.4,302.9 214.3,303.1 214.2,303
			214.2,302.8 213.8,302.7 213.5,302.9 213.4,303.3 213.4,303.3 213.4,303.4 213.4,308.5 213.8,308.5 213.9,308.6 214.2,308.6
			214.2,308.6 214.4,308.1 215,307.6 215.3,307.9 216,306.8 216.3,306 216.3,305.1 216,304.8 216.2,304 216.5,303.5 216.5,302.1
			216.6,301.8 216.6,301.5 216.2,301.5 215.9,301.8 215.8,301.5 215.6,301.5 		"/>
		<polygon fill="#E6EEF4" points="210.4,314.7 211,314.1 211.7,314 212.1,313.8 212.1,313.6 212.1,313.5 212.9,313 213.2,312.2
			213.1,311.7 213.5,311.3 214.3,310.5 214.7,310.6 215.5,310.1 215.6,309.6 216,309.4 216.1,309.1 215.9,308.9 215.4,308.9
			215.2,309.2 214.8,308.9 214.4,308.9 214.2,308.6 213.9,308.6 213.8,308.5 213.4,308.5 213.4,303.4 213.4,303.3 208.6,303.3
			208.5,304.7 207.3,304.8 207.7,305.2 207.9,305.5 208.3,306 208.8,306.3 209.1,306.3 209.3,306.7 209.3,307.1 209.5,307.3
			210,307.3 210.3,307.5 210.3,307.9 210,308.2 206.5,308.2 204.8,310.8 204.9,311.3 204.9,311.4 204.9,311.7 205,311.9 205.1,312
			205,312.2 204.8,312.4 204.7,312.7 204.6,312.8 205,313.4 205.4,313.9 205.8,314 206.2,314.4 207.6,315 208.5,315 209.2,314.9
			210.2,315.3 210.4,315 		"/>
		<polygon fill="#E6EEF4" points="156,279.9 156.2,280.1 156.3,280.7 156.6,280.5 156.5,280.1 156.2,279.6 		"/>
		<polygon fill="#E6EEF4" points="192.6,280.7 192.4,280.7 192.4,281.1 192.5,281 		"/>
		<polygon fill="#E6EEF4" points="192.2,282.5 192.2,282.1 191.9,283 		"/>
		<polygon fill="#E6EEF4" points="192.3,281.8 192.3,281.8 192.5,281.4 192.3,281.4 		"/>
		<polygon fill="#E6EEF4" points="204.8,312.4 205,312.2 205.1,312 205,311.9 204.9,311.7 204.9,311.4 204.9,311.3 204.8,310.8
			206.5,308.2 210,308.2 210.3,307.9 210.3,307.5 210,307.3 209.5,307.3 209.3,307.1 209.3,306.7 209.1,306.3 208.8,306.3
			208.3,306 207.9,305.5 207.7,305.2 207.3,304.8 208.5,304.7 208.6,303.3 213.4,303.3 213.5,302.9 213.8,302.7 214.2,302.8
			214.2,303 214.3,303.1 214.4,302.9 214.6,302.9 214.7,302.7 215,302.3 215.1,301.8 215.2,301.6 215.6,301.5 215.8,301.5
			215.8,301.5 216.3,301.1 216.9,300.4 217.2,300.3 217.1,300.8 216.9,301.1 216.9,301.3 217.5,301.6 217.7,302.2 217.8,302
			218.4,301.1 218.8,299.4 219.1,298.9 218.8,299 218.5,299.3 218.3,299.1 218.3,298.9 218.9,298.3 219,297.9 218.6,297.9
			218.2,297.6 218.4,297.4 218.9,297 219,296.3 219.2,295.9 220.4,294.8 221.1,293.7 221.5,293 221.5,292.4 220.7,291.4
			220.1,291.4 220.3,291.8 219.9,291.9 218.6,291.6 217.6,291.6 217.6,291.9 216.9,292.2 216.7,292 216,292 215.6,292.6
			213.2,292.6 211.4,293 211.4,293.4 211.9,293.4 210.8,294.6 210.7,296.3 210.8,296.5 209.8,297.6 209.8,298.6 209.3,299.2
			208.9,299.3 207.6,300 207.7,300.1 208.3,299.7 208.1,300.2 208.1,301 207.6,301.6 207.2,301.7 207.1,302 206.8,301.6
			206.2,301.4 206.3,301 206.8,300.7 206.1,300.5 205.8,300.8 205.2,300.7 204.5,300.7 204,301.1 203.3,301.1 202.3,301.2
			202.2,301.4 201,302.1 200.7,302.1 200.5,301.8 199.5,302 198.9,302.3 198.6,301.6 198,300.8 197.2,300.4 197,300.2 196.3,300.2
			196,300.2 195.6,299.9 194.5,298.5 194.3,298 194.4,297.6 193.8,296.9 193.6,296.2 192.1,294.6 191.9,294.1 191.6,293.6
			191.8,293.2 191.7,292.8 191.4,291.7 190.9,291.3 191,290.7 191.6,291.5 191.7,292.5 191.9,292.3 191.9,291.5 191.2,290.3
			191.2,289.7 191.1,288.7 190.9,288.2 191.4,287.7 191.5,286.3 191.4,285.5 191.7,284.1 191.6,283.7 191.8,283.3 191.6,283.1
			191.6,282.4 191.9,282.1 192.1,281.3 192.2,281.1 191.9,280.8 192.2,280.4 192.2,279.6 192.7,279.6 192.6,280.1 192.5,280.4
			192.8,280.4 192.9,279.9 193.3,279.3 193.5,278.7 193.7,278.4 193.8,277.7 193.9,277.4 193.5,277.8 193.3,278.6 192.8,278.9
			193,278.5 192.7,278.4 192.6,278 192.1,277.9 191.5,277.6 190.6,277.3 190.2,276.9 189.8,276.7 189.5,276.7 189.1,276.6
			189.1,276.5 188.8,276.3 188.9,275.5 188.3,273.9 188.3,273.7 188.3,273.6 188.3,273.1 188.4,272.6 187.9,272.1 187.6,271.6
			187.5,271.1 187.1,270.9 187,270.5 186.7,270.4 186.4,269.3 186.2,269 185.9,268.8 185.9,268.2 185.8,267.7 185.7,267.5
			185.5,266.9 185,266.2 184.5,265.8 184.2,265.4 183.9,265.2 183.5,265.3 183.4,265.1 183.2,265 182.7,265 182.2,265 181.7,265
			181.5,265.3 181.3,265.3 181.2,265.3 181,265.2 180.7,265.3 180.4,265.6 180,266.4 179.8,266.7 179.8,266.8 179.8,267
			179.5,267.1 179.1,267.4 179.1,267.6 178.8,267.7 178.6,267.7 178.4,267.5 177.8,267.2 177.4,267 177.3,266.9 176.7,266.6
			176.4,266.6 176.2,266.4 176.2,266.2 176.1,266 175.8,265.9 175.6,265.9 175.4,265.7 175.2,265.7 175.3,265.5 175.1,265.1
			174.8,264.7 174.3,264.1 174.3,263.9 174.6,263.8 174.8,263.7 174.7,263.3 174.4,263 174.3,262.8 174.2,262.7 174,262.5
			173.9,261.9 173.7,261.5 173.3,261.2 172.9,261.1 173.1,260.9 173.1,260.7 172.7,260.3 172.3,260.2 172.3,259.9 172.1,259.5
			171.8,259.5 171.7,259.3 171.5,259 171.1,258.3 170.5,258 166,257.9 166,258.9 158,258.6 148.6,254.3 148.7,254.1 148.5,253.9
			141.9,254 142,254.6 142.3,256.1 142.7,256.7 143,257.1 142.7,257.2 142.7,257.7 142.8,258.2 143.6,259.1 143.6,259.4
			143.4,259.6 143.5,259.9 144.1,260.4 144.2,261 144,261.2 143.9,261.8 144.3,262.1 144.4,262.4 144.5,263.4 144.7,264.1
			145.2,264.6 145.5,264.6 146.3,265.3 146.7,265.9 146.8,266.4 147.5,267 147.8,267.9 148,268 148.4,268.6 148.1,269 148,269.3
			148.2,269.6 148.1,270.1 147.8,269.9 147.5,270.2 147.6,270.4 148,270.4 147.9,270.8 147.7,271.1 147.4,270.8 146.7,270.7
			146.3,270.5 145.5,270.6 145.4,270.8 146,271.5 146.5,271.7 146.5,272.3 146.8,272.8 147.3,272.9 147.9,273.2 147.9,273.5
			148.3,273.5 148.6,273.6 148.5,273.8 148.7,274.2 149.1,274.1 149.5,274 149.9,273.5 150.2,273.5 150,274 150.1,274.9
			151.1,275.8 151.5,276 151.8,275.9 152.1,276.3 152.4,277.4 152.5,278.5 152.3,279.4 151.8,280.2 151.9,280.7 152.5,281.1
			152.7,281 152.8,281.4 153.4,281.5 153.6,282.1 154.8,283.4 155.2,283.5 155.4,283.9 155.9,284.4 156.4,284.5 156.7,284.9
			156.8,285.6 157.1,285.9 157.1,286.3 157.4,286.9 157.7,287 158.5,286.6 159,285.8 159.1,285.1 158.7,284.9 158.6,284.4
			158.3,284.1 158.2,283.6 157.7,283.4 157.6,283 157.3,282.6 157,282.5 156.9,282.6 156.9,283 156.6,283.1 156.6,282.8
			156.1,282.4 155.7,281.9 155.6,281.5 155.9,281 155.9,280.4 155.4,279.8 155.6,279.4 155.6,279.1 155.3,278.8 155.3,278.4
			155,278 155,277.5 154.8,277.2 154.8,276.5 154.9,276.1 154.7,275 154.4,274.5 154.2,274.1 154,274.1 154,274.3 154,274.6
			153.8,274.8 153.3,274 153.3,273.7 153.5,273.3 153.3,273 153.1,273 152.9,271.8 152.4,271.1 152.2,271 151.7,270.5 151.7,269.9
			151.7,269.3 151.3,268.6 150.9,268.5 150.7,268.3 150.6,267.7 150.3,267.3 149.8,267.1 149.7,266.6 149.8,266.2 149.6,265.4
			148.8,264.9 148.6,264.5 148.3,264.5 148.3,264 147.9,263.2 147.6,262.8 147.9,262.4 147.8,260.4 147.6,259.3 147.9,258.6
			148.1,257.7 148,257.2 147.8,256.5 148.2,257.2 148.9,257.5 149.4,258.3 149.8,258.6 150.2,258.5 150.5,258.3 151,258.7
			151.1,259 151.7,259.1 152.2,259.4 152.2,259.7 151.9,260.1 151.9,260.6 152.2,261.2 152.3,262.2 152.6,262.6 152.6,263.3
			152.5,263.7 152.7,264.1 153.4,265.1 153.4,265.4 153.2,265.6 153.4,266 153.6,266 153.8,266.3 154.1,267.2 154.5,267.4
			154.6,267.9 154.7,268.5 154.9,268.7 155.3,268.8 155.6,269.5 155.7,270 156.1,270.3 156.2,270.5 156.6,270.5 156.8,270.7
			157.2,270.5 157.5,270.8 157.4,271.4 157.2,271.8 157.3,272.5 158.3,273.4 158.6,273.3 159,273.5 158.8,274 159.1,274.4
			159.6,274.5 160,274.5 160.5,275.1 160.6,275.5 161,275.7 161.1,275.5 161.3,275.7 161.4,276.1 161.1,276.3 160.9,276
			160.5,276.2 160,276.7 159.7,277.5 159.8,278 160.3,278.3 160.8,278.4 161.1,278.7 162.2,279.5 162.8,279.7 163.2,279.7
			163.3,280 163.5,280.5 163.7,280.9 163.5,281.3 163.2,281.5 163.2,281.7 163.7,281.9 164.5,282.3 164.5,282.6 164.8,282.8
			165.5,283.4 166.4,284.6 167,285.7 167.9,286.6 167.9,287.2 169,288.5 169.1,289 168.9,289.5 169.1,289.9 169.4,290.7 170,292.2
			170,292.9 169.7,293.3 169.1,293.9 169,294.2 169.3,294.3 169.6,294.6 169.3,294.9 168.7,294.8 168.3,295 168.3,295.3
			168.7,296.3 169.1,296.6 169.1,297 169.6,297.7 169.8,298.4 170.1,298.6 170.5,298.6 170.7,298.9 171.5,299.2 172.1,299
			172.5,299.1 172.2,299.4 172.2,299.7 172.9,299.9 173.6,300.6 174.1,301.3 174.5,302 175,302.2 175.3,302.1 175.8,302.3
			176.2,302.4 177.3,302.8 177.7,302.8 177.8,302.6 178.1,302.6 178.4,302.9 179.7,304.2 180.1,304.3 180.9,305.1 182.1,305.6
			183.5,305.8 184.1,306.1 184.5,306.7 185.3,306.7 186,307.1 186.4,306.9 186.5,307 186.9,307.7 187.6,308 188.1,308 188.3,308
			188.8,308.3 189.9,308.7 190.8,308.7 191.6,309.1 192.9,309.6 193.5,309.5 194.9,308.9 195.5,308.9 196.3,308.4 196.9,308.3
			197.6,308.2 197.8,308.3 197.8,308.1 197.3,308 196.8,308 196.9,307.8 197.5,307.4 197.7,307.5 197.7,307.8 198,307.6
			198.4,307.6 198.4,307.9 198.1,307.9 198,308 198.2,308.1 198.6,308.1 199.1,308.3 199.9,308.8 200.3,309.2 200.3,309
			199.7,308.4 198.8,308 198.7,307.8 198.9,307.8 199,307.9 199.6,308 200,308.4 200.5,309 200.5,309.2 200.8,309.6 202.7,311.2
			203.3,311.3 203.4,311.7 204.1,312.3 204.6,312.8 204.7,312.7 		"/>
		<polygon fill="#E6EEF4" points="156.7,282.3 157,282.3 157.1,282 156.8,281.9 		"/>
		<path fill="#E6EEF4" d="M320.2,347.5l-0.1,0.2l0.2,0.7l0.3,0.4c0,0,0.3,0,0.3,0l0.1-0.4l-0.4-0.7L320.2,347.5z"/>
		<polygon fill="#E6EEF4" points="319.8,354.5 319.6,354.6 319.3,354.5 319,354.7 318.5,355.2 318.2,356.1 318.4,356 318.5,355.8
			319.1,355.2 319.4,355.2 319.9,354.7 		"/>
		<polygon fill="#E6EEF4" points="323.4,354.7 323.6,354.4 323.3,354.1 322.9,354.2 322.8,354.4 322.4,354.6 322.8,354.7 		"/>
		<polygon fill="#E6EEF4" points="318.9,355.8 318.7,356.1 318.9,356.1 319.3,356.1 319.4,355.7 319.3,355.6 		"/>
		<polygon fill="#E6EEF4" points="321.7,354.1 321.9,354.2 322.3,354 322.4,353.7 322.1,353.4 321.3,353.6 320.9,353.7 320.8,353.9
			321,354.1 		"/>
		<polygon fill="#E6EEF4" points="320.9,353.2 321.2,352.8 321.5,352.7 321.7,352.3 321.5,352.3 321.1,352.6 320.8,352.7
			320.5,353.1 320.6,353.5 		"/>
		<path fill="#E6EEF4" d="M363.9,375.4l-0.1-1.4l-0.3-0.2l-0.1-0.7l-1-2.1v-0.7l-0.2-0.9l-1.8-0.8l-1,0l-0.8,0.3l-0.5-0.7l-0.6-0.1
			l-0.6-0.7l-0.8-0.4l-0.6-0.1l-1.2-1.3l-1-1.4l-0.5-0.1l-0.7-0.6l-0.6,0l-1.7-1.2h-0.8l-0.8-0.4l-0.5,0.3H347l-0.5-0.2l-0.5,0.2
			l-0.2,0.4l-0.3-0.3l-0.8-0.6l-0.1,0.2l-0.3-0.3l-0.1,0.4v0.3l-0.4-0.4l-0.1-0.3l-0.3-0.1l0.1,0.3l-0.2,0.1l-0.8-0.3l-0.3,0
			l-0.7-0.1l-1.5-0.7l-0.6,0l0,0.2l0.1,0.3l-0.1,0.2l-0.3-0.2l-0.1,0.1l-0.1,0.2l-0.5,0.3l-0.2,0.3l-0.1,0.7l-0.3-0.5l-0.2-0.4
			l-0.3,0.1l0,0.5l-0.5,0.9v0.7l-0.2-0.7l0.2-0.7l-0.1-0.6l0.3-0.9l0.2-0.2l-0.2-0.2l-0.4,0l0.6-0.7l-0.8-0.8l-0.4-0.7l-0.4,0
			l-0.6-0.1l-0.4,0.5l-0.4,0.2l-0.2-0.4l-0.3-0.2l-0.1-0.4l-0.3-0.3l-0.4,0l-0.2-0.3l-0.4-0.1l-0.2,0.3v-0.2l-0.3-0.2l-0.2-0.4
			l-0.3,0.1l-0.6-0.2l-0.8-0.5l-0.2,0l-0.1,0.2l-0.5-0.3l-0.4,0l-0.1,0.3l-0.2,0l-0.1-0.4l-0.6,0l-0.5,0.3l-0.3,0.5l0,0.3l-0.6,0.6
			l-0.8,0.5l-1,0.6l-0.5,0.6l-0.3,0.8l-0.1,0.8l-0.3,0.4l-0.5,0.5l0,0.3l0.1,0.6l-0.1,1l-0.2-0.6l-0.4-0.6l0-0.5l0.4-0.5l0.5-0.4
			l-0.1-0.8l0.2-0.6l0-0.3l-0.3,0L322,360l-0.7-0.2l-0.6,0l-0.5,0.1l-0.4-0.3l0.4,0l0.5-0.4l0.5-0.1l0.8,0.2l0.5-0.1l0.4-0.6l0.2,0
			l0.3,0.2l0.3-0.1l0.5-0.3l0.8-0.3v-0.6l0.7-0.8v-0.6l0.3-0.4l0-0.5l-0.8-0.2l-0.6-0.5h-0.6l-0.8,0.5l-0.7,0l-1-0.4l-1-0.1
			l-0.8,0.8l0,0.3l0.2,0.2l0.2,0.3l-0.4,0l-0.2,0.1l-0.2,0.5l-0.1-0.4l-0.3-0.1l-0.6,0.2l-0.6,0.9l-0.9,1l0.6-0.9l0-0.6l0.1-0.3
			l0.1-0.4h-0.3l-0.6,0.5l-0.3,0.6l-0.3,0.7l-0.5,0.3l0.4-0.8l0.1-0.7l1-1.2l0.2-0.8l0.4-0.5l0.5-0.3l0.6-0.4l0.4-0.2l0.5-0.8
			l1.3-1.3l0.1-0.3l0.3-0.2l-0.3-0.4l0.1-0.4l0.2-0.2l0-0.5l-0.5-0.4l-0.6,0l-0.2,0.2l-0.3-0.4l-0.4-1l-0.6-1.5l-0.6-0.8l-0.4-1.1
			l0-0.6l-0.1-0.6l-0.2-0.2l-0.1-0.5l-0.3-0.7l-0.1,0.1l0,0.4l-0.2,0.3l-0.6,0.4l0,0l0,0l-0.2,0.3l-0.7,0.8l-0.7,0.9l0,0.5l-0.5,1.2
			l-0.5,0.7l-0.3,0.7l-0.5,0.1l-0.3,0.2l-0.1,0.5l-0.5,0.4l-0.3-0.1l0-0.7l-0.2-0.1l-0.1-0.2l-0.3,0l-0.4,0.2l-0.3,0.3l-0.5-0.1
			l-0.4-0.4l0-0.3l-0.1-0.1l-0.2-0.5l-0.1-0.3l-0.4-0.1l-0.5-0.5l-0.7,0l-0.5,0.2l-1.2,0.1l-0.6-0.2l-0.5,0.4l-0.1,0.5l0.5,0.5
			l0.1,0.3l0.3,0.6l-0.1,0.2l-0.5,0l-0.7-0.2l-0.2-0.1l-0.2,0l0,0l0,0H303l-0.5,0.1l-0.2-0.2l-0.8,0l-0.6,0.2l-0.3,0.9l-1.1,0
			l-0.6,0.2l-0.1,0.3l-0.4,0.5l-0.6,0.1l-0.1-0.2l-0.4,0.1l-0.3,0.4l-0.4-0.2l-1.1-0.9l-0.4-0.5l0-0.4l-0.6-0.6l-0.5-0.5l-0.1-0.6
			l0.1-0.4l-0.1-0.3l0.1-0.5l0.2-0.4l0-0.6l0.5-0.9l0.2-0.8l0.5-0.6l0-0.3l-0.5,0l-0.3-0.4l-0.2-0.4l-0.6,0l-0.5-0.2l0.2-0.3
			l0.3-0.5V340l-0.5-0.6l-0.6-0.1l-0.3,0.2l-0.2-0.2l-0.3,0l0.1,0.6l-0.3,0.7l-1.4,1l-0.9,0.1l-1.2,0.5l0,0l0,0l-0.5-0.2l-0.8,0.1
			l-0.9,0.8l-0.9,0.3l-0.3-0.2l-1.2,0.2l-1,0.1l-0.9-0.5l-0.9-0.1l-0.8-0.2l0.4,0.7l0.6,0.2l0.6,0.6l0.2,0.5l-0.8,1.2l0.1,0.3
			l0.2,0.3l-0.2,0.9l1.3,0.4l0.9-0.1l0.9,0.2l0,0.6l-0.6,0.3l-1.3,0.3l-0.2,0.3l-0.2,0.3l-0.3,0.7l-1.4,0.7l-0.5,0.5l-1,0.6
			l-0.7,0.8l-1.1,0.1l-0.6-0.1l-1.1-0.9l-1.1-0.7l-0.7,0.1l0-0.8l-0.1-0.6l-0.5-0.6l-0.2-0.4l-0.8,0.2l-0.5,0.6l-0.4,0.1l-0.3-0.3
			h-0.5l-0.3,0.4l-3.1,0l-0.2,0.9l0.3,0.7l1.1,0.3l0.4,0.7l-0.3,0.3l0.3,0.3l-0.1,0.5l-0.7-0.4l-1.9,0.6l0.1,1.5l0.5,0.6l1,0.8
			l0.7,1.2l0,0.9l0,0.4l-1.6,5.8l-0.5,1.5l0.1,0.3l-0.2,0.4l-0.6-0.2l0.1-0.2l-0.6-0.4l-0.2,0.1h-0.5l-0.2-0.1l-0.2,0.4l-1.9,0.6
			l-1.4,0.3l-0.4,0.4l-0.3,0.1l-0.6,0.6l-0.7,0.3l-0.5,0.3l0.1,0.7l-0.3,0.4l0.1,0.4l-0.8,0.8l0.3,1l0.3,0.5l-0.5,0.4l-0.4-0.1
			l-0.8,0.5l0,0.6l-0.3,0.3l0.2,0.4l-0.1,0.6l-0.2,0.5l0.2,0.5l-0.1,0.4l0.8,0.8l1.4,2.2l-0.7,0.9l1.7-0.1l0.8,0.1l0.6,0.9l0.2,0.8
			l1.2,0l1.4,0.1l1.2-1.1l1-0.6l0.3,0.3l-0.1,0.6l-0.2,0.2l0,1l0.1,1.6l0,0.7l0.3,0.3l0.6-0.1l0.5-0.1l0.6,0l0.3,0l0.3,0.1l0.1,0
			l1.8,0l0.8,0l0.8-0.4h0.4l0.6-0.5h0.7l0.8-0.2l0.5-1.2l1.3-0.8l0.9-0.2l0.9-0.4h0.6l0.6,0.4l0.6-0.4l0.3,0.3l-0.1,0.6l0.3,1
			l-0.4,0.8l0.4,1.3l-0.2,0.6l0.5,1l0.6,0.3l0.2,0.8l0.6,0.3l0.9,0.6l0.6,0.6l0.2-0.3l1.2-0.3l1,1l0.7-0.2l1,1.1l0.4,0l1.2,0.4
			l0.8,0.3l0.2,0.8l0.6,0.2l0.7,0.4l1.6-0.2l1.1,0.6l0.2,0.5l-0.2,1.3l0.2,1l-0.3,0.6l1,1.8l-0.1,1.3l4.9,0.1l0.2,1.8l-0.1,1.1
			l1.4,0.3l1.4,2.6l0.1,1.4l-1.4,2.7l0.1,0.4l-0.4,0.5l0.3,0.3l-0.2,0.6l0.7,0.5l0,0.8l0.6,0.8l-0.3,1.7l0.2,0.7l-0.2,0.6l0.2,0.6
			l1-0.1l0.4,0.2l1.3-0.1l0.8,0.3l1.3-0.5l0.7,0.5l0.5,0.2l0.2,0.6l0.7,3l0.5,1.1l0.5,0.1l1.1-0.6l0.6,0.2l0.4,0.4l0.4,0.1l-0.3,0.4
			l-0.1,2.6l-0.1,0.3l-0.1,0.1l0,0.4l-0.1,0.3l0,0.3l0.5-0.3l1.3,0.2l0,0.6l0.5,1.2l0,0.9l0.1,1.1l0.1,1l-0.2,0.4l-0.6,0l-0.7,0.4
			l-0.1,0.2l-0.4,0.3l-0.2-0.1l-1.1,0.8l-0.2,0.4l-0.4,0.1l-1,0.9l-0.3,0.1l0,0.7l-0.4,0.1l-0.3-0.1l-0.9,1.1l-0.2,0.4l0,0.6
			l-0.4,0.1l-0.2,0.3l-0.6,1l-0.4,0.4l-0.5,0.8v0.3l-0.5,0.4l-0.1,0.2l0.4,0l0.3,0.2l1.4-0.4l0.6,0.4l0.6,0.9l0.6,0.2l0.3,0.8
			l0.7,1.1h0.3l0.5-0.6l0.3,0l0.6,1l0.8,0.3l0.7,0.1l0.6,0.6l0,0.8l0.5-0.1l1.1,0.5l0.6,0.8l0.7,1l0.6,0.4l-0.1,0.8l-0.5,0.7
			l0.3,0.8l0.1,0.2l0.1,0.1l0.3,0.4l0.2,0.1l1.1-0.9l0.4-0.8l0.5-1.9l0.4-1.3l0.2-0.3l-0.2-0.3l-0.4-0.7l0.2-0.6l0.4-0.2l0-0.4
			l0.5-0.5v-0.4l0.3,0.2l0.4,0.1l0.5-0.5l0.1-0.6l0.2-0.2l0-0.6l0.2-0.3h0.3l0.2-0.5l-0.1-0.4l-0.3-0.3l0-0.8l-0.2-0.2l0.3,0.1
			l0.3,0.7l0.7,0.7h0.3l0.3-0.2l0.2,0.2l0.1,0.5l-0.2,0.1l-0.3,1l-0.6,1.1l-0.6,0l-0.1,0.7l-0.2,0.4l-0.2-0.1l-0.6,0.3l-0.4,0.4
			l0,0.3l-0.5,0.1l-0.2,0.2l0,0.3l0.5,0.2l1.8-1.4l0.9-1l1.3-2.2l0.5-1.1l0.5-1.4l1.3-2.4l1.2-1.5l0.2-0.4l-0.1-0.2l0.1-0.4l0.3-0.1
			l0.2-0.6l0.4-0.2l-0.1-0.5l0.1-0.4l-0.1-0.2l-0.2-0.2l0-0.6l-0.5-0.8v-0.3l0.1-0.3l-0.1-0.4l-0.2-0.8l-0.3-0.8l0.2-0.2l0.7-0.1
			L328,429l-0.3-0.2l0.7-0.2l0-0.5l-0.7-0.3l0.6-0.2l0.4-0.5l0.3,0.2l0.9-0.8l0.5-0.3l0-0.3l0.7-0.6l0.9-0.6l1.1-1.3l1-0.1l0.5-0.5
			l0.6-0.5h0.6l0.4,0.3l0.4,0.1l0-0.4l0.4-0.7l1.2-0.7l0.5-0.1v-0.2l-0.3-0.2l-0.4-0.1l-0.2-0.3l0.4-0.1l0.7-0.4l0.4,0.1l0.5,0
			l0.3-0.3l0.5,0l0,0.2l-0.7,0.4l-0.7,0.1l-0.1,0.2l0.2,0.2l1.1-0.4l1.3-0.5l-0.1-0.2l0.3-0.3l0.3,0l-0.1,0.3c0,0,0,0.5,0.1,0.5
			c0.1,0,0.8,0.1,0.8,0.1l0.5-0.2h0.8l0.9,0.1l0.6-0.4l0-0.3l-0.1-0.1l0.1-0.3l1.3-0.9l1.1-0.4l0.5-0.3l0.2-0.3l-0.2-0.2l-0.5-1.1
			l0.3-0.7l0.4-0.5l0-0.5l0.3-0.2l0.5-0.3l0.1-0.6l-0.1-0.1l0.8-1.3l1.1-1.2l0-0.6l-0.2-1.8l-0.2-0.3l0.3-1.1l0.3-0.4l0.1-0.4
			l0.8-0.7l0.1-0.3l-0.2-1l0.4-1.2l-0.1-1l0.2-0.7l0-0.4l0.2-1l-0.3-3.8l0-0.7l0.2-0.5l0-0.5l-0.2,0.3l-0.4-0.3v-0.3l0.4-0.6
			l-0.1-0.6l0.1-0.4l0.4-0.1l0.1-0.7l-0.4-0.6l-0.7-0.3l0.2-0.1l0.1-0.2l0.1,0.3l0.4,0.3l0.4,0.1l0.2-0.6l0.4,0l0.2,0.3l0.3,0.1
			l-0.3,0.4l-0.4,0.3l-0.1,0.3l0.3,0l0.5-0.5l0.7-0.4l0.9-1.4l0.4-1.1l0.1-0.6l0.4-0.3l0.4-1l0.4-0.8l1.5-1l0.2-0.5l0.4-0.1l0.3-0.5
			l1.2-1.1l1.1-1.5l0.3-0.4l0.7-1.5l0.2-0.7l0.3-0.5v-0.5l-0.4-0.5l0.1-0.6L363.9,375.4z"/>
		<polygon fill="#E6EEF4" points="320.1,354 320.3,354.3 320.6,354.4 320.6,354.1 320.5,353.9 320.2,353.7 		"/>
		<polygon fill="#E6EEF4" points="309.6,339 309.2,339.6 309.2,340.4 309.4,340.9 309.4,341.5 309.4,342 309.9,342.3 310.1,342.7
			310.4,343.3 310.5,343.8 310.6,344.1 310.5,344.6 310.1,345 310.2,345.7 310.4,346.1 310.1,346.7 309.4,347.1 309.3,347.1
			309.4,347.4 309.6,347.8 309.7,347.9 309.7,348.2 310.1,348.6 310.6,348.7 310.9,348.4 311.2,348.2 311.6,348.3 311.6,348.5
			311.8,348.6 311.8,349.3 312.2,349.4 312.7,349.1 312.8,348.6 313.1,348.4 313.6,348.3 313.9,347.7 314.3,346.9 314.9,345.8
			314.9,345.3 315.6,344.3 316.3,343.5 316.5,343.2 316.5,343.1 317,342.5 317,341.8 316.5,341.2 316.2,341.5 315.9,341.2
			315.8,340.8 314.9,339.7 314.6,339.6 313.9,339 312.4,338.6 311.7,338.2 310.9,338.1 310.4,338.5 309.9,338.8 309.9,338.7
			309.8,338.8 		"/>
		<polygon fill="#E6EEF4" points="301.8,338.5 301.8,338.9 301.5,339.4 301,339.7 300.3,339.7 299.9,340.4 299.9,341 299.4,342.1
			299.5,342.5 300,342.7 300.3,343.1 300.4,343.4 300.7,343.8 300.7,344.2 301.1,344.5 301.4,344.5 301.6,344.7 301.7,345.1
			302,345.9 301.9,346.5 302.2,346.7 302.7,347.2 302.8,347.7 303.3,347.9 303.3,348.1 303.5,348.5 303.9,348.8 303.9,348.8
			304.1,348.8 304.3,348.9 305,349.1 305.5,349.1 305.6,348.9 305.3,348.3 305.2,348 304.7,347.5 304.8,347 305.3,346.6
			305.9,346.8 307.1,346.7 307.6,346.5 308.4,346.5 308.9,347 309.3,347.1 309.4,347.1 310.1,346.7 310.4,346.1 310.2,345.7
			310.1,345 310.5,344.6 310.6,344.1 310.5,343.8 310.4,343.3 310.1,342.7 309.9,342.3 309.4,342 309.4,341.5 309.4,340.9
			309.2,340.4 309.2,339.6 309.6,339 309.8,338.8 309.9,338.7 310.4,338.1 310.4,337.7 309.8,337.4 308.8,337.3 307.7,336.9
			307.4,336.9 306.9,337.1 306,337 304.9,337.3 304,337 302.8,337 302.1,337.3 302,337.9 302,338 		"/>
		<polygon fill="#E6EEF4" points="293.3,331.3 292.7,331.7 292.3,331.7 291.5,332.6 291.7,333 291.9,333.6 292.7,333.6 293.1,334
			293.1,334.6 292.2,335 291.7,334.8 291.4,335 290.9,334.8 290.5,335.3 290.4,336.1 289.9,336.6 290.1,337.3 290.8,338.3
			291.9,339.2 291.9,339.3 292.2,339.3 292.4,339.6 292.7,339.3 293.3,339.4 293.8,340 293.8,340.7 293.4,341.3 293.2,341.6
			293.7,341.9 294.2,341.8 294.4,342.2 294.7,342.6 295.2,342.6 295.2,342.9 294.7,343.5 294.5,344.3 294,345.2 294,345.8
			293.8,346.2 293.8,346.7 293.9,347 293.8,347.4 293.8,347.9 294.3,348.5 294.9,349.1 295,349.5 295.4,350 296.5,350.9
			296.9,351.1 297.2,350.6 297.6,350.5 297.7,350.7 298.3,350.7 298.7,350.2 298.8,349.9 299.4,349.8 300.5,349.8 300.9,348.9
			301.4,348.7 302.3,348.6 302.5,348.9 303,348.8 303.9,348.8 303.9,348.8 303.5,348.5 303.3,348.1 303.3,347.9 302.8,347.7
			302.7,347.2 302.2,346.7 301.9,346.5 302,345.9 301.7,345.1 301.6,344.7 301.4,344.5 301.1,344.5 300.7,344.2 300.7,343.8
			300.4,343.4 300.3,343.1 300,342.7 299.5,342.5 299.4,342.1 299.9,341 299.9,340.4 300.3,339.7 301,339.7 301.5,339.4
			301.8,338.9 301.8,338.5 302,338 302,337.9 302,337.9 301.8,337.4 301.8,336.7 301.6,336.3 300.6,336 299.7,335 299.2,334.6
			298.8,334.8 298.3,335 297.9,335.4 297.8,336 297.7,335.3 297.8,334.4 298,333.9 297.7,333 297.3,332.7 296.2,332 295.4,331.2
			295.4,330.8 294.8,330.2 294.3,330.1 294.2,330 294.1,330.3 		"/>
		<polygon fill="#E6EEF4" points="270.4,319.1 270.6,319.6 271,319.6 271.3,320.1 271.5,319.6 270.9,319.1 		"/>
		<polygon fill="#E6EEF4" points="265.9,318.3 266.3,318.8 266.8,318.8 266.3,318.3 		"/>
		<path fill="#E6EEF4" d="M282.5,323.1l0.6,0.2l0.4-0.5l-0.2-0.4l-0.8,0.6l-0.3-0.4l-0.6,0.4c0,0,0.3,0.2,0.3,0.2L282.5,323.1z"/>
		<polygon fill="#E6EEF4" points="262.3,320.4 260.9,320.9 260.1,322.2 259.8,322.6 259.3,322.7 258.9,323.3 258.5,323.7 257.6,325
			257.4,325.5 257.6,326 257.5,326.9 257.1,327.8 257,328.1 257.4,328.1 257.9,328.1 259,330.1 259.5,330.8 259.6,331.4 259.3,332
			259.4,332.4 259.2,332.7 259.2,333.1 259.8,333.6 260.6,333.9 261.1,334 261.7,334.3 262.1,334.1 262.2,334.1 262.2,334.1
			262.9,334.1 263.5,334.3 263.7,334.1 264.5,334 265.4,334.1 265.9,334.3 268,336.4 268.8,336.3 269,336.4 269.2,336.3
			269.8,336.5 270.1,336.7 270.7,336.4 271.2,336.4 272,336.5 272.1,336.3 272.6,336.3 273,336.5 273.2,337.6 273,338.1 273,338.6
			272.8,338.9 272.2,339.1 271.8,339.5 272,340.5 272.1,340.8 271.8,341.5 271.9,342.4 272.2,342.9 272.2,343.2 272.8,344.7
			271.9,346.3 272,346.7 272.3,346.8 272.5,346.6 272.7,346.7 272.8,347.2 273.1,347.3 273.3,347.9 273.2,348.2 273.5,348.9
			274.1,350.3 274.1,350.8 274.1,350.9 275.2,351.6 276.3,352.4 276.9,352.5 278,352.5 278.7,351.7 279.6,351.1 280.1,350.5
			281.5,349.8 281.8,349.1 282,348.8 282.3,348.6 283.6,348.3 284.2,348 284.2,347.4 283.3,347.2 282.4,347.3 281.1,346.9
			281.3,346 281.1,345.7 281,345.4 281.8,344.2 281.6,343.7 281,343.2 280.4,342.9 280,342.3 280.8,342.5 281.7,342.6 282.6,343.1
			283.5,343.1 284.8,342.9 285.1,343.1 285.9,342.8 286.8,342 287.6,341.9 288.1,342.1 288.1,342.1 289.3,341.6 290.2,341.5
			291.7,340.5 291.9,339.9 291.9,339.3 291.9,339.2 290.8,338.3 290.1,337.3 289.9,336.6 290.4,336.1 290.5,335.3 290.9,334.8
			291.4,335 291.7,334.8 292.2,335 293.1,334.6 293.1,334 292.7,333.6 291.9,333.6 291.7,333 291.5,332.6 292.3,331.7 292.7,331.7
			293.3,331.3 294.1,330.3 294.2,330 294,329.9 293,329.5 292.6,329.4 292.2,329.6 291.6,329.5 291.3,329.5 290.9,329.7 290,329.8
			289.3,329.8 289,329.7 289.6,329.6 289.9,329.7 290.3,329.4 290.5,328.9 291.1,328.5 291.2,328.2 290.9,328 290.9,327.8
			290.7,327.3 290,326.9 289.1,326.7 288.8,326.4 288.4,326.2 287.9,326.2 287.7,325.9 287.2,325.7 286.8,325.7 286.9,326.2
			286.5,325.7 286.3,325.1 285.7,324.9 285.6,324.6 285.9,324.3 287.1,324.4 287.6,324.1 288.4,324 288.4,323.5 287.7,323.7
			286.5,323.4 285.6,323.5 285,323.5 283.7,323.9 283.3,323.7 282.8,323.8 281.8,324.5 281.3,324.6 280.7,325 280.4,325.3
			279.6,325.4 279.3,325.5 278.9,325.4 277.7,324.6 277.4,324.1 277.1,324 275.7,324.1 273.1,324.5 271.8,324.5 271.3,324.3
			271.1,323.9 271.1,323.4 271.4,323.4 271.4,322.8 270.8,322.1 270.3,321.9 269,322 268.4,321.7 267.9,321.7 267.6,321.8
			267.1,321 267.1,320.3 266.9,319.4 266.6,319.3 265.9,319.6 265.1,320.5 265.3,321.1 265.5,321.3 266.1,321.1 266.6,321.1
			267,321.6 266.9,321.9 266.4,322.1 265.9,321.8 265.6,321.6 265.5,321.8 265.5,322 264.8,322.3 263.6,322.6 262.4,323.1
			262,323.6 262,324 262.3,324.6 262.3,325.7 262.4,326.5 262.7,327.1 262.3,328 261.3,328.5 260.8,328.5 260.8,327.6 260.3,327
			260.1,326.4 260.6,326 260.7,325.7 261.7,324.6 261.7,323.8 261.4,323.2 261.4,322.9 261.4,322.6 261,322.3 260.8,321.8
			260.9,321.4 261.5,321.1 262.2,321 262.8,320.3 262.5,320.3 		"/>
		<polygon fill="#E6EEF4" points="268.6,318.9 268.4,319.2 268.7,319.7 269.3,319.8 269.6,319.5 269.1,319.5 		"/>
		<polygon fill="#E6EEF4" points="242.4,351.3 243.7,352.1 244.2,352.1 244.8,352.8 244.7,353.2 244.8,353.6 245.7,353.6
			246.7,354.1 247,354.3 247.9,354.5 248.2,354.2 248.2,353.7 248.6,353.3 248.8,353.3 249.6,353.6 250.1,353.9 250.2,354.3
			250.6,354.5 250.6,354.5 250.8,354.5 251.2,354.8 252.2,355 252.8,355.2 252.9,355.5 253.6,356.3 253.7,356.8 254.1,357.7
			254.5,357.7 255.8,358.1 256.4,358.9 256.4,359.6 256.6,359.6 257,359.9 257.3,360.6 257.1,360.8 257.2,361.2 257.8,361.5
			258.3,361.3 258.8,361.4 259.5,361.4 259.8,361.2 260.7,360.8 261.4,360.9 262.1,361.2 263,360.8 263.6,360.8 263.8,361.1
			264.1,361.1 264.7,361.4 265,361.8 265.5,361.6 265.6,362 263.8,365 263.9,365.4 264.5,365.3 265.2,365.3 265.6,365.7
			265.8,366.3 266.2,364.8 267.8,359 267.8,358.6 267.8,357.6 267.2,356.4 266.1,355.6 265.6,355 265.6,353.5 267.4,352.8
			268.1,353.3 268.2,352.8 267.9,352.5 268.2,352.1 267.8,351.4 266.7,351.1 266.5,350.5 266.7,349.6 269.8,349.5 270.1,349.2
			270.7,349.2 271,349.4 271.3,349.4 271.9,348.8 272.7,348.6 272.8,349 273.3,349.6 273.4,350.2 273.4,350.9 274.1,350.9
			274.1,350.8 274.1,350.3 273.5,348.9 273.2,348.2 273.3,347.9 273.1,347.3 272.8,347.2 272.7,346.7 272.5,346.6 272.3,346.8
			272,346.7 271.9,346.3 272.8,344.7 272.2,343.2 272.2,342.9 271.9,342.4 271.8,341.5 271.8,341.5 272.1,340.8 272,340.5
			271.8,339.5 272.2,339.1 272.8,338.9 273,338.6 273,338.1 273.2,337.6 273,336.5 272.6,336.3 272.1,336.3 272,336.5 271.2,336.4
			270.7,336.4 270.1,336.7 269.8,336.5 269.2,336.3 269,336.4 268.8,336.3 268,336.4 265.9,334.3 265.4,334.1 264.5,334
			263.7,334.1 263.5,334.3 262.9,334.1 262.2,334.1 262.2,334.1 261.7,334.3 261.1,334 260.6,333.9 259.8,333.6 259.2,333.1
			259.2,332.7 259.4,332.4 259.3,332 259.6,331.4 259.5,330.8 259,330.1 257.9,328.1 257.4,328.1 257,328.1 257.1,327.8
			257.5,326.9 257.6,326 257.4,325.5 257.6,325 258.5,323.7 258.9,323.3 259.3,322.7 259.8,322.6 260.1,322.2 260.9,320.9
			262.3,320.4 262.5,320.3 262.8,320.3 262.9,320.2 263.2,320 263.3,319.6 263,319.2 262,318.7 261.6,318.7 261.4,318.9
			261.4,319.2 261,319.2 260.8,319.4 260.3,319.3 259.9,319.5 259.7,319.8 259.9,320 259.7,320.3 259,320.7 258,321.3 257.4,321.7
			256.7,321.9 255.8,321.9 254.9,321.8 254.4,322.1 254.4,322.5 254.6,322.9 254.5,323.4 254.1,323.7 253.8,323.6 253.9,323.2
			253.9,323 254.3,322.9 253.7,322.8 253,322.5 252.6,322.6 251.7,323.1 251.5,323.5 250.9,324.2 250.1,325.6 250,326 250.2,325.9
			250.5,326.1 250.5,326.6 250.4,327.1 250,327.3 249.4,327.3 249,327.6 248.3,328.3 248,328.4 247.5,329.2 247.2,329.3
			246.7,329.3 246.9,329.8 247.3,330.4 247.3,331 247.1,331.6 246.8,331.6 246.3,331.2 246.3,331 246.5,330.7 246.1,330.5
			245.9,330 245.3,329.4 245.2,329.9 245.3,330.3 245.5,331 245.1,331.7 244.9,332.4 244.6,332.6 244.3,332.7 243.9,333.5
			244.1,333.6 244.2,334.2 244.2,334.9 244.8,335.5 245,335.5 245.3,335.4 245.4,335.6 245.5,336.3 245.1,336.6 245.1,336.9
			245.5,337.2 245.5,338 245.1,338.3 244.9,338.7 245.1,338.8 245.3,339.3 245.3,340.2 245.3,341.5 244.9,342 244.9,342.4
			245.2,342.8 245.7,342.6 245.6,342.9 245.9,343.3 246.2,343.3 246.2,343.6 245.9,343.9 245.7,344.5 244.6,345.6 244.4,346.2
			243.6,346.9 242.5,347.2 241.7,347.8 241,348.9 240.8,349.8 240.7,350.4 241.5,350.7 		"/>
		<polygon fill="#E6EEF4" points="237.6,362.3 237.1,362.8 236.8,363.3 236.8,363.5 237,363.7 237.3,363.6 237.6,363.2 237.5,362.9
			237.7,362.5 		"/>
		<polygon fill="#E6EEF4" points="237.8,365.4 237.2,365.8 236.8,366.3 236.8,366.8 237.4,366.8 238,366.6 238.3,367 239.1,367.2
			239.6,367.4 240.4,368.5 240.8,368.5 241.3,368 243.5,363.5 243.9,363.1 246.7,362.2 247.9,361.3 249.9,359.6 250.6,357.7
			251.1,357.7 251.2,357.5 251.4,356.8 251.3,356.3 250.8,355.2 250.8,354.9 250.6,354.5 250.6,354.5 250.6,354.5 250.2,354.3
			250.1,353.9 249.6,353.6 248.8,353.3 248.6,353.3 248.2,353.7 248.2,354.2 247.9,354.5 247,354.3 246.7,354.1 245.7,353.6
			244.8,353.6 244.7,353.2 244.8,352.8 244.2,352.1 243.7,352.1 242.4,351.3 241.5,350.7 240.7,350.4 240.6,351 239.8,351.1
			238.4,352 237.8,352 237,352.4 237.4,353 237.4,353.4 237.7,353.8 237.5,354.6 236.5,355.7 236.4,356.2 236.6,356.5 236.1,357.3
			235.5,357.4 235,358 235.2,358.5 235.4,359.1 235.4,359.5 235.5,360.3 235.2,360.8 234.9,361.1 235.2,361.5 235.8,361.8
			236.4,362.3 236.8,362.6 237.1,362.5 237.3,361.8 237.5,361.5 237.9,361.1 237.9,361.6 238,362 238.1,361.7 238,361.3
			238.2,361.3 238.4,362 238.2,362.8 238.3,363.2 238,363.9 237.3,364.6 237.6,364.7 		"/>
		<polygon fill="#E6EEF4" points="267.4,406.7 267.8,406.8 268.3,406.4 268.5,406 268,405.5 268.2,405 268.5,404.6 268.9,404.6
			268.8,404.3 268.5,404.2 268.2,404 268.7,403.1 269.3,402.7 269.8,401.9 269.9,401.2 269.1,399.4 269.4,399 269.3,398.3
			269.1,397.9 269,397.3 269.4,396.9 269.6,396 269.5,394.2 269.2,393.4 269.6,392.5 269.5,390.6 270,389.8 270,389.4 267.4,385.8
			267.4,385.8 267.3,385.7 267.1,385.6 266.8,385.6 266.2,385.7 265.6,385.8 265.1,385.9 264.7,385.6 264.7,385 264.6,383.3
			264.6,382.3 264.8,382.1 264.9,381.5 264.6,381.2 263.6,381.8 262.4,382.8 261,382.8 259.8,382.7 259.7,381.9 259.1,381
			258.2,380.9 256.5,381 257.2,380.2 255.9,378 255.1,377.2 255.2,376.8 255,376.3 255.3,375.8 255.4,375.2 255.2,374.8
			255.5,374.5 255.5,373.9 256.3,373.4 256.7,373.5 257.1,373.1 256.9,372.6 256.6,371.6 257.4,370.8 257.3,370.4 257.5,370
			257.5,369.3 258,368.9 258.6,368.6 259.2,368.1 259.5,368 259.9,367.6 261.3,367.3 263.2,366.7 263.4,366.2 263.6,366.3
			264.2,366.3 264.4,366.3 265,366.7 265,366.9 265.6,367 265.8,366.6 265.6,365.7 265.2,365.3 264.5,365.3 263.9,365.4 263.8,365
			265.6,362 265.5,361.6 265,361.8 264.7,361.4 264.1,361.1 263.8,361.1 263.6,360.8 263,360.8 262.1,361.2 261.4,360.9
			260.7,360.8 259.8,361.2 259.5,361.4 258.8,361.4 258.3,361.3 257.8,361.5 257.2,361.2 257.1,360.8 257.3,360.6 257,359.9
			256.6,359.6 256.4,359.6 256.4,358.9 255.8,358.1 254.5,357.7 254.1,357.7 253.7,356.8 253.6,356.3 252.9,355.5 252.8,355.2
			252.2,355 251.2,354.8 250.8,354.5 250.6,354.5 250.6,354.5 250.8,354.9 250.8,355.2 251.3,356.3 251.4,356.8 251.2,357.5
			251.1,357.7 250.6,357.7 249.9,359.6 247.9,361.3 246.7,362.2 243.9,363.1 243.5,363.5 241.3,368 240.8,368.5 240.4,368.5
			239.6,367.4 239.1,367.2 238.3,367 238,366.6 237.4,366.8 236.8,366.8 236.8,366.3 237.2,365.8 237.8,365.4 237.6,364.7
			237.3,364.6 237.3,364.6 235.9,365.2 235.4,365.6 234.5,366.6 234.3,367.3 234,367.8 234.1,368.1 234.5,368.5 234.6,368.9
			234.3,369.1 234.3,369.4 234.8,369.9 235.2,370.7 235.2,371.2 234.7,371.2 234.3,371.4 234.1,371.8 234.6,372.3 235.2,372.5
			236,373.2 236.7,373.3 237.9,374.1 238.4,374.2 238.6,374.7 239.2,375.6 239.3,376.3 239.6,376.9 240.7,377.5 241.2,378.3
			241.4,379.1 241.7,379.6 241.8,380.5 242.2,381.1 242.6,381.4 243.1,382.3 243.2,383 243.1,383.2 243.5,384.1 244.4,385.3
			244.7,385.8 244.6,386.3 244.7,386.7 245.1,386.8 246,387.6 246.2,388.1 246.3,388.9 246.6,389.3 247.3,389.5 247.5,390.2
			248.3,391.5 248.5,392.1 249.4,393.4 249.4,393.9 249.2,394 248.9,393.9 248.9,394.1 249,394.6 249,395 249.3,395 249.7,395.2
			249.7,395.6 249.6,395.8 250.6,396.5 251.4,396.9 251.5,397.3 251.9,397.8 252.4,397.9 252.6,398.1 252.8,398.6 253.2,398.8
			254,398.8 254.3,398.5 254.1,399 254.6,399.5 255.5,400 255.9,400.3 256,400.8 256.4,401 257.1,401.3 257.3,401.2 257.8,401.3
			258.9,402 259.6,402.3 260.1,402.3 260.4,402.4 260.5,402.8 261.3,403.3 261.7,403.6 262.3,404.2 262.7,404.3 262.8,404.7
			262.8,405 262.8,405.3 263.4,405.5 264.1,405.7 264.8,406.5 265.6,407.2 266,407.3 266.1,407.4 266.8,407.1 		"/>
		<polygon fill="#E6EEF4" points="270,389.4 270,389.8 269.5,390.6 269.6,392.5 269.2,393.4 269.5,394.2 269.6,396 269.4,396.9
			269,397.3 269.1,397.9 269.3,398.3 269.4,399 269.1,399.4 269.9,401.2 269.8,401.9 269.3,402.7 268.7,403.1 268.2,404
			268.5,404.2 268.8,404.3 268.9,404.6 269,404.7 269.1,405.4 269.6,405.9 269.9,406.2 270,406.7 269.9,407.2 270,407.5
			270.1,408.5 270.6,409.1 271.8,410.1 272,410.5 271.6,411.3 271.8,411.9 271.2,413.4 271.6,414 272.9,415.2 275,420.7
			275.7,420.7 275.9,420.4 276.4,420.3 276.4,420.3 276.7,419.9 277.2,418.9 278.3,417.7 279,417.5 279.7,418.1 280.5,418
			281,417.9 281.6,418.1 282.6,417.9 283.1,417.9 283.2,418.7 283.6,419.8 283.8,420.1 284.1,419.8 284,419.3 284.4,418.8
			284.4,418.3 284.8,417.6 286.4,417.6 287.8,417.6 288.3,418.1 288.6,417.2 289.3,415.7 289.4,414.9 289.3,414.2 289,413.7
			289.9,412.4 290.2,411.4 290.2,410.9 290.9,410.5 294.7,409.5 297.9,409.5 299.7,410.9 300.1,410.9 300.4,411.3 300.8,410.8
			300.7,410.4 302.1,407.7 302,406.3 300.6,403.7 299.1,403.4 299.2,402.3 299,400.5 294.1,400.4 294.2,399.1 293.1,397.4
			293.4,396.7 293.2,395.7 293.4,394.4 293.1,393.9 292,393.3 290.4,393.4 289.7,393 289.1,392.9 288.9,392.1 288.2,391.8
			287,391.4 286.5,391.4 285.5,390.3 284.8,390.5 283.8,389.6 282.7,389.9 282.4,390.1 281.8,389.6 280.9,389 280.3,388.7
			280.1,387.9 279.5,387.6 279,386.5 279.2,386 278.9,384.7 279.3,383.9 279,382.9 279.1,382.2 278.7,382 278.1,382.4 277.5,382
			276.9,382 276.1,382.4 275.1,382.6 273.8,383.4 273.3,384.6 272.5,384.9 271.8,384.9 271.2,385.4 270.8,385.4 270,385.8
			269.2,385.8 267.4,385.8 267.4,385.8 		"/>
		<polygon fill="#E6EEF4" points="299.7,410.9 297.9,409.5 294.7,409.5 290.9,410.5 290.2,410.9 290.2,411.4 289.9,412.4 289,413.7
			289.3,414.2 289.4,414.9 289.3,415.7 288.6,417.2 288.3,418.1 288.4,418.2 289.1,418.9 289.6,419 290.3,420.3 292,422
			292.7,422.1 293.4,422.7 293.8,423.4 295.5,423.8 296.6,424.4 297.1,424.5 298.3,425.5 299.5,426.1 301.2,426.4 301.9,427.1
			302.7,427.8 303,428.5 302.8,429.1 302.4,429.7 301.9,430.1 301.6,430.6 301.8,431.1 301.4,432.2 300.5,433.1 300.4,433.7
			300.9,433.7 302.8,433.4 304.5,433.9 305.6,434.6 306.3,434.3 306.6,434.3 306.9,434.6 307.5,433.9 307.8,433.8 308.4,433.9
			308.9,433.3 309.1,432.6 310.3,431.7 310.5,431.1 310.9,430.4 311.4,430 311.5,429 311.4,428.7 311.4,427.9 311.6,427.8
			311.6,427.5 311.7,427.2 311.7,426.9 311.7,426.8 311.9,426.4 311.9,423.8 312.2,423.4 311.8,423.3 311.4,422.9 310.8,422.7
			309.7,423.3 309.2,423.1 308.7,422.1 308,419.1 307.8,418.4 307.2,418.3 306.6,417.8 305.3,418.3 304.5,418 303.2,418.1
			302.8,417.9 301.7,418 301.5,417.4 301.7,416.8 301.5,416.1 301.8,414.4 301.3,413.6 301.2,412.7 300.5,412.2 300.7,411.6
			300.1,410.9 		"/>
		<polygon fill="#E6EEF4" points="316.5,453.1 316.5,453 316.4,452.7 316.1,451.9 316.6,451.2 316.8,450.4 316.1,450 315.4,448.9
			314.8,448.1 313.7,447.7 313.2,447.8 313.1,447 312.5,446.4 311.8,446.2 311.1,445.9 310.4,444.8 310.2,444.8 309.6,445.4
			309.3,445.4 308.6,444.3 308.3,443.5 307.7,443.3 307.1,442.4 306.5,442 305.1,442.5 304.8,442.3 304.4,442.3 304.3,442.4
			304.1,443.1 303.6,443.7 303.8,444.6 303.5,445 303.7,445.5 303.6,446.7 303.4,447.2 303.5,447.6 303.1,448.2 303.4,449.1
			303.2,449.4 303.3,450.6 303.6,451.5 303.4,452 303,452.3 302.9,452.5 302.9,452.6 302.9,453.8 303.3,454.8 304.1,455.9
			304.4,456 305.2,456.8 305.6,456.9 306.8,456.7 307.5,456.8 308.2,457.3 308.6,457.3 309,457.4 309.2,457.5 309.1,457.7
			309.1,458 309.6,458 310.2,457.6 311,457.5 311.6,457.7 311.9,457.9 312.2,457.8 312.6,458 313,458 313.3,457.8 313.4,457.5
			313.5,457.4 313.8,457.6 314.8,457.2 315.5,456.5 315.6,456.2 315.5,456.1 315.8,455.6 316.4,455.1 316.4,454.4 316.8,453.8
			317,453.7 316.9,453.5 		"/>
		<polygon fill="#E6EEF4" points="303,452.3 303.4,452 303.6,451.5 303.3,450.6 303.2,449.4 303.4,449.1 303.1,448.2 303.5,447.6
			303.4,447.2 303.6,446.7 303.7,445.5 303.5,445 303.8,444.6 303.6,443.7 304.1,443.1 304.3,442.4 304.4,442.3 304.5,442
			305,441.7 305,441.4 305.4,440.7 305.8,440.2 306.4,439.2 306.6,438.9 307,438.8 307,438.1 307.2,437.7 308.1,436.6 308.4,436.7
			308.8,436.6 308.8,435.9 309.2,435.8 310.2,434.9 310.6,434.8 310.9,434.4 312,433.7 312.2,433.8 312.6,433.4 312.7,433.2
			313.4,432.8 313.9,432.9 314.1,432.5 314,431.5 313.9,430.4 313.9,429.4 313.4,428.3 313.3,427.7 312.1,427.5 311.6,427.8
			311.4,427.9 311.4,428.7 311.5,429 311.4,430 310.9,430.4 310.5,431.1 310.3,431.7 309.1,432.6 308.9,433.3 308.4,433.9
			307.8,433.8 307.5,433.9 306.9,434.6 306.6,434.3 306.3,434.3 305.6,434.6 304.5,433.9 302.8,433.4 300.9,433.7 300.4,433.7
			300.5,433.1 301.4,432.2 301.8,431.1 301.6,430.6 301.9,430.1 302.4,429.7 302.8,429.1 303,428.5 302.7,427.8 301.9,427.1
			301.2,426.4 299.5,426.1 298.3,425.5 297.1,424.5 296.6,424.4 295.5,423.8 293.8,423.4 293.4,422.7 292.7,422.1 292,422
			290.3,420.3 289.6,419 289.1,418.9 288.4,418.2 288.3,418.1 287.8,417.6 286.4,417.6 284.8,417.6 284.4,418.3 284.4,418.8
			284,419.3 284.1,419.8 283.8,420.1 283.6,419.8 283.2,418.7 283.1,417.9 282.6,417.9 281.6,418.1 281,417.9 280.5,418
			279.7,418.1 279,417.5 278.3,417.7 277.2,418.9 276.7,419.9 276.4,420.3 276.7,421.1 276,424.2 272.7,426 272.5,426.7
			273.1,427.2 273.2,427.7 272.9,428.3 273,429.2 273.6,430 273.6,430.7 273.1,431.1 273,431.6 273.3,431.9 273.5,432.3
			273.6,433.1 273.8,433.3 273.4,433.8 272.9,434.1 272.1,434.9 271.4,436.7 270.9,437.4 270.7,439.5 270.3,439.9 270.4,441.6
			270.9,442.5 270.8,443.8 270.4,444.3 270.4,445.7 269.6,446.1 269.5,447.1 269.7,448.5 270.2,449.2 270.3,449.7 271,450.7
			271.4,451.6 271.8,453.2 272.2,453.6 272.4,455.7 272.3,457 271.7,457.2 271.3,458.3 271.4,459.4 270.8,460.4 271.2,460.7
			271.7,461.6 271.9,462.6 271.2,463.3 270.6,464.5 270.6,466.4 270.6,467.2 270.4,468.3 272.1,471.6 271.7,472 271,472.4
			270.8,473.9 269.8,475.3 269.9,476.3 270.4,477.1 270.2,479.2 270.3,481 270.6,482.3 271.1,482.6 271.4,483.2 271.2,483.9
			270.6,484.3 270.7,486.4 271,487.2 271.9,487.5 271.8,488.5 271.9,489.3 272.4,490.4 272.7,491.7 273.2,491.8 273.6,491.5
			274,491.6 274,492.3 273.4,493 272.1,493 271.9,493.5 272.3,493.8 272.5,493.7 273,493.7 274,494.3 274.5,495.3 274.6,496
			273.8,496.6 273.8,497.1 274.2,497.9 274.4,499.4 274.7,500.6 274.2,501.1 274.1,501.7 274.7,503.1 274.1,503.7 273.9,505
			274.2,506 274.5,507.5 274.2,508.9 273.3,509.9 272.7,510.8 272.3,513.3 272.5,514.2 273.7,516.6 274.3,516.6 274.8,516.1
			275.7,515.6 276.2,515.6 276.2,516.3 276.4,518 277,518.5 277.3,519.5 277.7,520.6 279.1,520.7 279.5,521 281.6,520.7
			285.1,520.7 285.3,520.9 285.9,521 286.7,521.7 287.4,522 287.6,522 287.5,521.5 287,521 286,520.5 285.9,519.9 285.4,519.4
			285.1,519.5 284.8,519.2 285.2,519 285.3,518.6 285.2,518.6 285.2,518.2 284.7,516.9 284.2,516 284.1,515.2 284.4,514.3
			285.1,513.7 285.3,513.3 285.1,513.1 285.1,512.6 284.9,512.2 285.2,512.4 285.6,512.8 286,513 286.6,512.5 286.7,512.1
			287.2,511.5 287.3,511 287.2,510.2 286.7,510.1 286.5,510.3 286.6,509.9 287.1,509.5 287.3,508.9 287.4,508.2 288,507.6
			288.6,507.6 288.8,506.9 289.2,506.4 289.5,506.3 289.6,505.9 290,505.6 290.4,505.1 290.3,504.9 290.4,504.6 290.7,504.3
			290.2,503.9 289.9,503.9 290.4,503.4 290.4,503 290.1,502.3 290.1,502 290.3,501.8 290.1,501.5 289.7,501.3 289.4,501.5
			288.9,501.4 288,501.5 286.9,500.5 286.1,499.9 285.8,499.7 285.2,499.3 284.6,498.3 284.6,497.7 284.3,497.2 284.3,496.9
			284.9,496.4 285.1,496 285.3,495.3 285.7,495.2 286.2,494.7 286.8,494.6 287.3,494 288.1,493.9 288.6,494 289.5,493.8
			289.5,493.6 289.3,493.3 288.7,493.1 288.8,492.9 288.9,492.5 289.7,492 289.5,491.8 289.8,491.4 289.8,491.2 289.2,490.4
			289.3,490.1 289.3,489.7 289.1,489.4 288.9,488.7 289.3,488.3 289.5,487.7 289.3,487.5 289.7,487.1 290.5,486.8 291.1,486.3
			291.1,486 290.3,485.7 289.7,485.7 289.5,485.3 289.6,485 290.1,484.6 290.8,484.3 291.5,484.7 291.5,485 291.4,485.3
			291.6,485.8 292,486 293.1,485.3 293.3,484.8 293,484.2 292.6,483.8 292.9,483.7 293,483.2 292.6,482.5 292.2,482.5 291.6,482.8
			291.2,482.9 291,483.1 291.1,483.2 291.6,483.3 291.5,483.6 290.6,483.9 290.2,483.7 290.4,483.5 290.8,483.3 290.5,483.1
			289.6,483.2 289,482.8 288.8,482.3 288.8,481 288.6,480 288,479.5 288,478.5 288.6,477.9 289,477.9 288.8,478.2 289,478.3
			289.6,478.3 290.7,478.6 291.6,479.4 292.5,479.6 294,479.6 295,479 294.9,478.8 295.5,478.3 295.7,477.8 295.5,477.4
			295.7,477.1 295.8,476.7 295.4,476.5 295,475.9 295,475.4 295.2,475 295.1,474.8 295.6,474.3 295.6,474.1 295.8,474 295.9,473.7
			295.8,473.2 295.3,473.2 295.4,472.9 295.1,472.5 295.1,471.5 295,471.2 295,470.7 295.1,470.5 295.4,470.9 295.8,470.9
			296.6,471.1 297.2,471.5 297.7,471.5 298.6,471.4 299.5,471.5 300.7,471.4 302.6,470.9 304.3,470.2 304.4,469.9 304.6,470.2
			305.8,469.8 307.3,468.8 307.5,468.3 307.4,467.7 307.7,466.8 307.9,466.6 307.9,466.9 308.1,466.6 308.3,465.7 308.9,464.9
			309,464.3 309,463.1 308.9,462.7 308.7,462.7 308.4,463 307.8,463 307.1,462.5 306.6,461.7 306.7,461.3 307.4,460 307.4,459.4
			307.1,459 305.6,457.9 304.5,457.5 303.3,456.6 303,456 303.2,455.9 303.2,455.4 302.8,455 302.9,454.7 302.7,453.7 302.9,452.6
			302.9,452.6 302.9,452.5 		"/>
		<polygon fill="#E6EEF4" points="297.1,530.7 296.1,530.9 295.5,530.9 294.8,530.2 294,530 293.7,529.7 291.6,529 291,528.8
			290.9,528.1 290.2,527.6 289.5,527.5 289.2,526.5 288.9,526 288.2,526.1 287.6,525.9 288.9,531.1 289.1,531.1 290.1,530.9
			290.8,530.9 291.6,530.8 291.5,531 291,531.1 290.3,531.3 289,531.4 289.2,532.4 289.5,532.4 290.5,532.1 291.6,532.2
			292.4,532.2 293.6,532.3 294.2,532.6 294.8,532.8 295.5,532.7 296,532.2 296.1,531.7 296.7,531.5 297,531.7 297.7,531.3
			297.6,530.9 		"/>
		<polygon fill="#E6EEF4" points="287.8,525.3 288.2,525.1 288.5,525.4 288.2,524.1 287.3,523.2 286.9,522.6 286.8,522.6
			287.6,525.8 		"/>
		<polygon fill="#E6EEF4" points="300.3,531.2 299.6,531.2 299.2,531.4 299.7,531.8 300.3,531.4 300.8,531.3 301.3,530.8
			300.7,530.8 		"/>
		<path fill="#E6EEF4" d="M266.1,494.1l0.1-0.2l0.7-0.1l0.3-0.3l-1.2,0l-0.1,0.4C265.9,493.9,266.1,494.1,266.1,494.1z"/>
		<polygon fill="#E6EEF4" points="266.5,510.8 267,510 267.3,509.9 267.1,509.4 266.5,509.2 266.4,509 266.1,509.3 266.4,510.2
			266.3,510.6 		"/>
		<polygon fill="#E6EEF4" points="266.3,508.2 266.1,507.7 265.7,507.5 265.5,507.5 265.5,508.2 265.8,508.5 265.9,508.7
			266.2,508.6 		"/>
		<polygon fill="#E6EEF4" points="266.5,512.2 266.7,512.5 266.6,512.8 266.9,513.1 267.3,512.9 267.4,512.4 267.1,511.9 		"/>
		<polygon fill="#E6EEF4" points="265.4,492 265.5,492.2 265.8,492.3 266.2,492.1 266.3,491.9 266,491.6 265.6,491.6 		"/>
		<polygon fill="#E6EEF4" points="267.4,493.3 267.8,493.3 267.6,492.7 		"/>
		<polygon fill="#E6EEF4" points="267.1,497.3 266.8,496.8 266.4,496.7 266.2,496.5 266,496.8 266.5,497.4 		"/>
		<polygon fill="#E6EEF4" points="267.9,516.3 268.2,516.1 268.6,515.8 267.9,515.8 		"/>
		<polygon fill="#E6EEF4" points="266.4,491.6 266.5,491.3 266.3,491.1 266.1,491.3 		"/>
		<polygon fill="#E6EEF4" points="270.9,516.6 270.4,515.8 270,515.8 269.7,515.5 269.4,515.5 269.4,515.7 269.9,516.3 270.4,516.5
			271.1,517.1 		"/>
		<polygon fill="#E6EEF4" points="267.3,494.5 266.9,494.5 266.3,494.7 266.5,495 267.3,494.9 		"/>
		<polygon fill="#E6EEF4" points="268.3,513.4 268.5,513.2 268.7,512.6 268.8,513.1 268.9,513.7 269.2,513.9 269.6,513.6
			269.6,512.7 269.3,512 269.5,511.8 269.4,510.7 269.1,510.1 268.8,508.9 268.4,508.7 267.6,508.7 267.3,508.9 267.3,509.5
			267.7,509.9 267.5,510.4 267.6,510.7 267.8,510.6 268,510.3 268,510.7 267.6,511 267,511.1 267.6,512.3 267.8,512.9 		"/>
		<polygon fill="#E6EEF4" points="269.7,516.6 269.4,516.6 269.5,517.3 270.1,518 270.6,518.1 270.8,517.7 270.2,516.9 		"/>
		<polygon fill="#E6EEF4" points="267.4,497 267.7,496.6 267.1,496.7 		"/>
		<polygon fill="#E6EEF4" points="265.5,497.3 265.8,497.3 265.7,496.8 265.5,496.8 		"/>
		<polygon fill="#E6EEF4" points="266.3,493 266,492.5 265.5,492.4 265.6,492.8 265.5,493.2 265.9,493.1 		"/>
		<polygon fill="#E6EEF4" points="264.2,489.8 264.5,490.1 265.2,489.9 264.8,489.6 264.4,489.6 		"/>
		<polygon fill="#E6EEF4" points="265.9,490.2 266.2,490.5 266.8,490.2 266.1,490 		"/>
		<polygon fill="#E6EEF4" points="263.7,493.8 264.4,494.2 264.6,493.8 264.3,493.5 263.8,493.5 		"/>
		<polygon fill="#E6EEF4" points="264.7,493.2 264.9,493.4 265.3,493.2 265,492.9 		"/>
		<polygon fill="#E6EEF4" points="266.9,490.6 267.3,490.9 267.3,491.2 267.7,491 267.6,490.5 267.2,490.4 		"/>
		<polygon fill="#E6EEF4" points="267.2,493 267.2,492.3 266.7,492.5 		"/>
		<polygon fill="#E6EEF4" points="266.8,496 266.4,496 266.8,496.5 		"/>
		<polygon fill="#E6EEF4" points="267.6,508.2 268.1,508.2 268.7,508.2 268.4,507.3 268,506.9 267.9,506.3 267.4,506.1 267.4,505.2
			266.9,505.5 266.4,505.5 266.2,505.8 266.7,506.3 267.4,507.3 267.5,507.1 267.8,507.3 267.4,507.6 		"/>
		<polygon fill="#E6EEF4" points="265.6,506 265.4,506.2 265.4,506.5 265.5,507.2 266.1,507.3 266.4,507.6 266.4,507.8 266.6,508.6
			267,508.9 267.2,508.6 267.3,508 266.8,507.3 266.1,506.1 		"/>
		<polygon fill="#E6EEF4" points="269.2,516.7 269.2,516.3 269,516 268.9,516.4 269,516.9 		"/>
		<path fill="#E6EEF4" d="M273.7,527.7l-0.2,0.2l0.6,0.2C274,528,273.7,527.7,273.7,527.7z"/>
		<polygon fill="#E6EEF4" points="272.6,520.6 272.3,520 272,520 272,520.8 272.3,521.2 273,521.5 273.2,521.4 273,521.1 		"/>
		<polygon fill="#E6EEF4" points="279.6,529.2 279.4,528.8 279,528.6 278.5,528.8 278.3,528.5 278,528.4 277.2,527.8 276.6,527.8
			276.1,528 275.9,527.9 275.6,527.6 275.2,527.7 275,527.9 275,528.2 275.5,528.5 275.7,529 276.3,529.1 276.8,529.7 277.2,529.8
			277.8,529.7 278.1,529.9 278.2,530.2 278.5,530.6 278.9,530.4 278.8,530.2 279.2,529.8 279.2,529.5 278.9,529.3 279.2,529.2 		"/>
		<polygon fill="#E6EEF4" points="273.1,522.3 273,521.8 272.7,521.7 272.5,521.9 272.9,522.3 		"/>
		<polygon fill="#E6EEF4" points="277.4,530.1 277.5,530.2 277.7,530.4 278,530.2 277.7,529.9 		"/>
		<polygon fill="#E6EEF4" points="276,527.6 276.5,527.6 276.6,527.5 276.5,527.3 276.2,527.2 275.7,526.8 275.4,526.6 274.8,526.6
			274.4,526.3 273.9,526.1 273.4,526.1 273,525.9 272.5,525.2 272.1,525 272,525.3 272.1,525.8 272.5,526.5 273,526.6 273.8,526.9
			274.1,527.3 274.5,527.3 274.7,527.2 275.5,527.4 		"/>
		<polygon fill="#E6EEF4" points="271.3,522.1 271.3,522.6 271.1,522.8 271.2,523 271.4,522.9 271.7,522.3 271.5,522 		"/>
		<polygon fill="#E6EEF4" points="272.3,521.6 272.2,521.3 271.6,521 271.8,521.4 272.2,521.7 		"/>
		<polygon fill="#E6EEF4" points="272.4,522.4 272.6,522.7 273.2,523.4 273.4,523.3 273.4,522.9 272.5,522.2 		"/>
		<polygon fill="#E6EEF4" points="272.9,523.7 272.4,523.8 272.7,524 273.2,524 273.3,524.3 273.6,524.5 273.8,524.6 274.1,524.2
			273.9,523.7 273.3,523.8 		"/>
		<path fill="#E6EEF4" d="M292.3,536.5l0.2,0.2l0.4-0.4h-0.3C292.6,536.2,292.3,536.5,292.3,536.5z"/>
		<polygon fill="#E6EEF4" points="279.6,530.3 279.3,530.6 279.3,531 279.6,530.9 279.9,530.5 280,530.3 279.7,530.2 		"/>
		<polygon fill="#E6EEF4" points="293.1,535.2 293.3,535.5 293,535.9 293.2,536.2 293.6,536.2 293.6,535.7 293.5,535.3 		"/>
		<polygon fill="#E6EEF4" points="288.7,531.4 288.1,531.1 287.2,530.7 285.8,530.3 285.1,530 285.1,530.3 285.3,530.5 285,530.7
			284.8,530.6 283.9,530.2 283.4,529.9 283.2,530.1 283.4,530.3 284.6,530.9 284.7,531.1 284.4,531.1 284.3,531.2 284.2,531.4
			284,531.4 283.9,531.1 283.3,530.8 283.1,530.9 283.2,531.3 282.8,531.3 281.9,531.4 281.7,531.5 281.9,531.7 281.8,531.9
			281.4,531.8 280.8,531.9 280.9,532.2 281.5,532.3 282,532.3 282.2,532.1 282.3,532 282.7,532.1 283.2,532.5 283.5,532.3
			283.6,532.5 283.6,532.8 284,533.1 283.6,533.3 283.3,533.8 283.6,534.1 284,534.1 284.3,534.2 284.8,534.7 285.1,534.7
			285.2,534.5 284.9,534.3 284.3,533.9 284.2,533.7 284.4,533.6 284.8,533.8 285.1,533.6 285.2,533.3 284.8,533.3 284.5,533.1
			285.7,532.6 286.2,532.4 288.4,532.9 288.7,532.7 288.6,532.4 289.2,532.4 289,531.4 		"/>
		<polygon fill="#E6EEF4" points="283.5,527.7 283.4,527.2 283.1,527 283,527.5 282.8,528 283,528.5 282.8,528.8 282.8,529.3
			283.3,529.5 283.9,529.7 284.1,529.9 284.3,529.6 283.7,529.2 284,528.8 283.8,528.5 283.8,528.3 		"/>
		<polygon fill="#E6EEF4" points="271.5,521.4 271.5,520.9 271.2,520.6 271,520.4 270.8,520.5 270.7,520.8 270.8,521.2 270.9,521.3
			271,521.6 271.2,521.6 		"/>
		<polygon fill="#E6EEF4" points="292.7,534.1 293.1,533.8 293.4,533.5 293.1,533.2 293,532.7 292.5,532.6 291.7,532.6 291,532.7
			290.2,532.6 289.5,532.9 288.1,533.2 287.5,533.1 287.2,533.2 286.7,533.2 286.3,533.4 286.7,533.7 287,533.5 287.4,533.7
			286.6,534 286.2,534.2 286.2,534.5 286.6,534.8 287,534.5 286.8,534.9 287.2,535 287.4,535.3 287.7,535.1 288.4,535.4
			288.6,535.4 288.7,535 288.2,534.8 288.3,534.5 288.9,534.4 289.1,534.9 289.5,535.2 289.9,535 290.3,535.1 290.9,535.7
			291.1,535.7 291.1,535.2 290.5,534.7 290.1,534.5 290.3,534.3 290,534.1 289.4,534 289.2,534 288.7,533.6 289.4,533.5
			289.7,533.5 290.1,533.1 290.5,533.1 290.8,533.6 291,534 291.6,533.9 292.2,533.6 292.5,533.7 		"/>
		<polygon fill="#E6EEF4" points="282.2,533.7 282.5,534.1 282.9,533.7 282.6,533.5 		"/>
		<polygon fill="#E6EEF4" points="281.4,530.6 281.7,530.4 281.8,530.6 282.3,530.8 282.6,530.5 282.5,530.2 282.7,529.8
			282.5,529.6 282.2,529.7 282,529.9 281.7,529.6 280.8,529.3 280.6,529.5 279.8,529.6 279.8,529.8 280.1,530 280.4,530.5
			280.6,530.2 281.1,530.3 		"/>
		<polygon fill="#E6EEF4" points="282.7,532.9 282.3,532.7 282.2,533 282.4,533.2 282.7,533.2 		"/>
		<polygon fill="#E6EEF4" points="264.6,484.5 264.5,484.9 264.6,485.2 264.8,485.4 265,486.1 265.1,487.8 264.8,488.4 265.5,488.7
			266.4,488.6 266.4,488.3 266.4,487.8 266.6,487.4 267.1,487.5 267.2,487.4 266.6,486.9 266.9,486.6 266.3,486 266.2,485.7
			266.5,485.7 267.1,486 267.1,485.8 266.9,485.6 266.2,485.1 266.9,485.3 266.9,484.8 266.7,484.5 266.8,483.8 266.3,483.1
			265.8,482.9 265.2,482.9 264.8,483.2 264.8,483.5 264.9,483.8 264.9,484.2 		"/>
		<polygon fill="#E6EEF4" points="270,520.2 270.1,520.4 270.2,520.6 270,520.8 269.8,521 270,521.4 270.3,521.6 270.6,521.7
			270.3,521.3 270.6,521.1 270.6,520.5 270.4,520.2 		"/>
		<polygon fill="#E6EEF4" points="267.8,495.1 267.2,495.1 266.8,495.3 267.1,495.6 267.2,496.2 267.6,496.4 267.9,495.9 		"/>
		<polygon fill="#E6EEF4" points="268.1,491.8 268.2,492.1 268.8,492 268.3,491.6 		"/>
		<polygon fill="#E6EEF4" points="268.3,493.7 268.3,494.3 268.7,493.9 269,494 269.3,494.1 269.6,494 269.8,493.6 270.1,493.2
			269.7,492.7 269.5,492.3 269,492.2 268.4,492.4 268.2,493.3 		"/>
		<polygon fill="#E6EEF4" points="267.4,484.6 267.9,485 268.1,484.7 267.8,484.4 		"/>
		<polygon fill="#E6EEF4" points="268.5,490.1 268,490.4 268.2,490.8 268.5,490.5 		"/>
		<polygon fill="#E6EEF4" points="270.5,519.3 270.5,519.1 271,519.1 271,518.8 270.2,518.3 269.9,518.3 269.5,518 269.1,518.1
			269.4,518.5 269.1,519.1 268.9,519.3 269.2,519.5 269.9,519.4 		"/>
		<polygon fill="#E6EEF4" points="285.3,520.9 285.1,520.7 281.6,520.7 279.5,521 279.1,520.7 277.7,520.6 277.3,519.5 277,518.5
			276.4,518 276.2,516.3 276.2,515.6 275.7,515.6 274.8,516.1 274.3,516.6 273.7,516.6 272.5,514.2 272.3,513.3 272.7,510.8
			273.3,509.9 274.2,508.9 274.5,507.5 274.2,506 273.9,505 274.1,503.7 274.7,503.1 274.1,501.7 274.2,501.1 274.7,500.6
			274.4,499.4 274.2,497.9 273.8,497.1 273.8,496.6 274.6,496 274.5,495.3 274,494.3 273,493.7 272.5,493.7 272.3,493.8
			271.9,493.5 272.1,493 273.4,493 274,492.3 274,491.6 273.6,491.5 273.2,491.8 272.7,491.7 272.4,490.4 271.9,489.3 271.8,488.5
			271.9,487.5 271,487.2 270.7,486.4 270.6,484.3 271.2,483.9 271.4,483.2 271.1,482.6 270.6,482.3 270.3,481 270.2,479.2
			270.4,477.1 269.9,476.3 269.8,475.3 270.8,473.9 271,472.4 271.7,472 272.1,471.6 270.4,468.3 270.6,467.2 270.6,466.4
			270.6,464.5 271.2,463.3 271.9,462.6 271.7,461.6 271.2,460.7 270.8,460.4 271.4,459.4 271.3,458.3 271.7,457.2 272.3,457
			272.4,455.7 272.2,453.6 271.8,453.2 271.4,451.6 271,450.7 270.3,449.7 270.2,449.2 269.7,448.5 269.5,447.1 269.6,446.1
			270.4,445.7 270.4,444.3 270.8,443.8 270.9,442.5 270.4,441.6 270.3,439.9 270.7,439.5 270.9,437.4 271.4,436.7 272.1,434.9
			272.9,434.1 273.4,433.8 273.8,433.3 273.6,433.1 273.5,432.3 273.3,431.9 273,431.6 273.1,431.1 273.6,430.7 273.6,430
			273,429.2 272.9,428.3 273.2,427.7 273.1,427.2 272.5,426.7 272.7,426 276,424.2 276.7,421.1 276.4,420.3 275.9,420.4
			275.7,420.7 275,420.7 272.9,415.2 271.6,414 271.2,413.4 271.8,411.9 271.6,411.3 272,410.5 271.8,410.1 270.6,409.1
			270.1,408.5 270,407.5 269.9,407.2 270,406.7 269.9,406.2 269.6,405.9 269.1,405.4 269,404.7 268.9,404.6 268.5,404.6 268.2,405
			268,405.5 268.5,406 268.3,406.4 267.8,406.8 267.4,406.7 266.8,407.1 266.1,407.4 266.4,407.7 266.4,408.4 266.4,409
			266.5,409.8 266.9,411.9 266.9,412.7 266.8,413.2 266.5,413.6 266.7,414.6 267,415.7 267.4,416.5 267.4,418 267.2,418.4
			267.1,418.6 267.2,420.6 267.2,421.1 266.8,421.3 266.4,421.6 266.5,422.7 266.7,423 267,422.7 267.3,422.9 266.9,423.2
			266.9,426.1 267.3,427.2 267.4,428.1 267.3,428.8 266.9,429.6 266.9,430.3 267.4,431.2 267.3,431.8 267.2,433.2 266.9,433.7
			266.9,434.5 267,434.9 267,435.2 266.6,435.9 266.5,436.7 266.3,437.1 266.4,438 266.3,438.4 265.9,439.4 265.9,439.9
			266.4,440.7 266.5,441.5 266.8,442 266.4,442.2 266.1,442.9 266.5,443.3 266.1,443.8 265.7,444 265.7,444.7 265.8,445.3
			265.9,445.9 266.5,447.6 266.5,448.5 266.3,448.8 266.3,449.3 266.9,450.1 267,451.1 266.8,451.8 266.8,452.1 266.9,452.6
			266.9,453 266.7,453.5 266.9,453.7 267.5,454.6 267.6,455.1 267.3,455.6 266.9,455.8 266.5,456.6 266.5,456.8 266.7,457.1
			266.5,457.8 266.2,458.1 266.2,458.6 266.1,459.4 265.9,459.9 265.9,460.4 265.8,460.6 265.7,461.3 265.4,461.7 265.4,462
			265.6,462.3 265.3,462.8 265.3,463.5 265.2,464 264.8,464.3 264.8,464.8 264.6,465.1 264.6,465.5 264.8,466 264.8,466.6
			264.5,467 264.2,467.1 263.8,466.8 263.4,466.9 263.4,467.2 263.5,467.8 263.5,468.7 263.9,469.2 264.5,469.7 264.5,470.3
			264.4,471.1 265.3,472.5 265.4,472.9 265.8,473.2 265.8,474.2 265.5,475.4 265.3,475.6 265.4,476 265.3,476.3 265.1,476.2
			264.8,476.3 264.6,476.8 264.8,477.3 265.1,477.6 264.8,478.7 264.9,479.2 264.7,479.5 265,479.8 264.9,480.2 264.7,480.4
			264.9,480.6 265.8,482 266,482.2 266.2,482.7 267,483 267.8,482.8 267.9,482 268,481.9 268.5,481.9 268.9,482.4 269.1,482.3
			269.5,482.2 269.2,482.6 268.6,483.2 268.6,483.5 269,483.7 269.4,483.5 269.4,483.9 269.5,484.9 269.7,485.2 269.6,485.4
			269.3,485.1 269.1,484.6 268.8,484.5 268.6,484.8 268.7,485.1 269.2,485.4 269.3,485.7 269,485.8 268.7,486 268.8,486.7
			269.2,487.2 268.8,487.6 268.8,488 269,488.2 268.5,488.7 268.6,489 269.2,489.4 269,489.8 268.9,490.5 268.6,490.9 268.5,491.3
			268.8,491.5 269.4,491.6 269.7,491.9 269.8,492.3 270.2,492.4 270.5,492.7 270.4,493.6 270,494.2 269.3,494.7 269,494.7
			268.9,495.2 269.1,495.8 268.9,496.1 268.9,496.4 269.2,496.6 268.8,497 268.4,497.9 268.4,498.5 268.7,498.7 268.6,499
			268.6,500 268.2,500.2 268.1,500.8 267.9,500.4 268.1,500.2 268.2,499.3 268.1,498.8 268.2,498.6 268,498.5 267.3,498.7
			266.8,499.1 266.5,499 266.5,498.8 267,498.6 267.3,498.4 267.3,497.6 267.1,497.5 266.5,497.7 265.6,497.7 265.2,497.6
			264.9,497.7 264.8,498 265.1,498.6 265.3,498.6 265.4,499.1 265.1,499.1 264.9,499.7 264.5,499.9 264.3,500.4 263.6,500.8
			263.6,501.2 264.3,502.1 264.8,502.1 265,501.8 265,501.5 264.5,501.4 264.4,501.1 264.7,500.6 265.4,500.5 265.5,500.3
			265.6,501 266.2,501.3 266.8,501.3 267,501 267.4,501.1 267.6,501.5 268.3,501.8 268.6,502.1 268.3,502.2 268.1,502.5
			268.4,502.8 268.1,503.1 267.8,503.4 268,503.8 268.6,504.1 268.5,504.2 268,504 267.8,503.8 267.5,503.8 267.4,504.2
			267.9,504.6 268,505 268.8,505.1 269.5,504.7 269.8,505 270.1,505 270.6,504.8 270.4,505.2 270.5,505.4 270.3,505.5 269.8,505.5
			269.7,505.7 269.3,505.4 268.4,505.6 268.2,506 268.3,506.3 268.9,506.7 269,507.1 269.5,507.2 269.9,507 269.8,507.3
			269.4,507.7 269.4,508 269.5,508.2 269.3,508.6 269,508.6 269,508.9 269.3,510.3 269.6,510.7 269.6,511.3 269.9,511.8 270.3,512
			270.3,511.1 270.6,510 271,509.8 271.1,510 270.9,510 270.6,511.2 270.6,511.5 271,511.8 271.4,511.8 271.2,511.9 270.6,512.1
			270.1,512.5 270.2,512.8 270.1,513.3 270.1,513.8 269.8,514 269.6,514.4 269.6,514.8 270.4,515.4 271.4,515.6 271.9,515.9
			271.8,516.2 271.5,516.2 271.7,516.7 271.9,517 272.3,516.5 272.3,516.9 272.2,517.2 271.8,517.4 271.4,517.8 271.7,518
			272.1,518 272.1,518.4 272.5,518.9 272.8,518.8 273.1,518.5 273.1,519.1 273.2,519.6 273,519.6 272.7,519.4 272.5,519.4
			272.3,519.8 272.8,520.4 273,520.4 273.2,521 273.4,521.3 273.9,521.8 274.3,521.7 274,521 274.2,520.6 274,520.2 274.5,520.5
			274.6,521 274.9,521.4 275.1,520.9 275.4,520.5 275.4,520.2 275,520.1 274.4,520 274.4,519.7 274.8,519.7 275.7,520 275.8,520.2
			276.4,520.2 276.2,519.8 275.7,519.5 274.7,519.4 274.7,519.2 275,519.1 275.8,519.4 276.7,519.9 276.9,520.5 276.5,521
			276.5,521.4 276.8,522.1 276.8,522.5 276.4,522.8 276.6,522.2 276.2,521.3 275.8,521 275.6,521.3 275.6,521.7 275.8,522.1
			275.6,522.5 275.4,522.3 275.3,521.8 275,521.8 274.6,522.1 274,522.1 273.4,522.3 273.9,522.7 274,523.3 274.2,523.8
			274.3,524.1 274.1,524.4 274.2,524.6 274.6,524.6 274.8,524.2 275,524.4 275.5,524.5 275.5,524.7 275.1,524.8 274.7,525.2
			274.8,525.5 275.4,525.5 276.2,525.9 276.5,525.8 276.7,525.5 276.5,524.9 276.6,524.5 276.5,524.1 276.3,524.2 275.9,524.1
			276,524 276.3,523.8 276.3,523.4 276.5,523.3 277.2,523.5 277.4,523.4 277.5,523.6 277.8,523.8 277.9,523.5 278.5,523.4
			279,523.5 279.5,523.5 280,523.5 280,523.7 279.7,523.8 279.5,524.2 279.2,524.1 278.8,523.8 278.5,523.9 277.6,524.7
			277.4,524.7 277.1,524.7 276.8,525.1 276.9,525.4 276.7,525.7 276.6,526 276.6,526.2 276.8,526.3 276.6,526.6 276.6,526.8
			277.4,527.1 278,527.6 278.2,527.6 278.3,527.3 278.2,526.9 278.5,526.5 278.9,526.4 278.9,526.2 278.5,525.7 279.2,525.6
			279.7,525.2 280.1,524.5 280.5,524.3 280.6,524.4 281,524.6 281.3,524.6 281.3,524.8 281,524.9 280.7,525.4 280.6,525.7
			280.1,526.2 280.1,526.7 280.3,527.1 280,527.4 279.5,527.6 279.6,527.4 279.8,527.2 279.8,526.5 279.6,526.4 279.4,526.6
			279.3,527 279.1,526.9 278.8,526.9 278.6,527.2 278.8,527.7 279.7,528.5 280.5,528.7 281.1,529 281.4,528.9 281.8,529.1
			282,528.9 282.3,528.2 282.1,527.4 282.1,527 282.1,526.6 282.2,525.9 282.2,525.1 282.1,524.5 282.2,524.1 282.9,523.7
			283.5,523 283.9,522.8 284.4,522.8 284.7,522.6 284.6,521.9 284.9,521.6 285.5,521.4 286.3,521.8 286.6,521.6 286.7,521.7
			285.9,521 		"/>
		<polygon fill="#E6EEF4" points="287.5,525.9 287.6,525.8 286.8,522.6 286,522.9 285.8,523.1 285.3,522.7 284.9,522.6 284.7,523
			284.8,523.5 284.8,523.8 284.3,524.3 284.1,524.5 283.6,524.2 283.2,524.1 282.9,524.6 283.2,524.9 283.7,524.8 283.6,525.2
			283.1,525.7 283.3,526 283.3,526.6 283.9,527.3 284.3,527.3 284.7,526.8 285.5,526.4 286.1,526.4 286.2,526.9 285.8,527.5
			285.3,527.7 285.2,528 284.3,528.4 284.3,528.6 284.4,528.9 284.9,529.4 285.5,529.8 286,529.7 286.9,530 288.3,530.9
			288.9,531.1 287.6,525.9 		"/>
		<polygon fill="#E6EEF4" points="269,514.3 268.4,514.2 268.1,514.1 268,514.2 268,514.5 267.8,514.8 268.1,515 268.2,515.4
			268.5,515.5 268.8,515.2 268.8,514.7 		"/>
		<polygon fill="#E6EEF4" points="288,306.5 288.4,306.4 288.2,306 		"/>
		<polygon fill="#E6EEF4" points="289.4,307.1 289.2,307.7 289.9,308.8 290.2,307.7 289.7,307.1 		"/>
		<polygon fill="#E6EEF4" points="291,308.4 290.6,308.7 291,308.9 		"/>
		<polygon fill="#E6EEF4" points="290.2,307.1 290.5,307.7 291.2,307.7 290.8,306.6 		"/>
		<path fill="#E6EEF4" d="M290.3,310.9l0.5-0.1l0-0.8l-0.4-0.4c0,0-0.3,0.5-0.3,0.5L290.3,310.9z"/>
		<path fill="#E6EEF4" d="M290.4,309.5L290.4,309.5C290.4,309.5,290.4,309.5,290.4,309.5z"/>
		<polygon fill="#E6EEF4" points="291.3,313.2 291.7,313.4 291.7,312.9 291.5,311.9 290.3,311.6 290.3,312.1 291,312.8 290.9,313.2
					"/>
		<polygon fill="#E6EEF4" points="291.5,314 290.8,314.9 290.9,315.4 291.4,315.6 291.7,314.9 		"/>
		<polygon fill="#E6EEF4" points="295,316.7 295.3,317.1 296,317.1 296,316.6 295.5,316.1 		"/>
		<line fill="#E6EEF4" x1="290.2" y1="318.4" x2="290.2" y2="318.4"/>
		<polygon fill="#E6EEF4" points="290.7,315.9 290.5,317.4 290.9,316.6 		"/>
		<polygon fill="#E6EEF4" points="289.2,319.5 289,320.1 289.7,320.2 290,319.7 289.8,319.4 		"/>
		<path fill="#E6EEF4" d="M290.5,319l-0.3-0.5c0,0-0.1,0.5-0.1,0.5H290.5z"/>
		<polygon fill="#E6EEF4" points="291.4,323.2 290.4,323.6 289.9,323.4 289.2,323.6 289.1,323.9 289.6,324.4 289.6,324.9
			289.1,325.4 288.5,325.6 289.1,325.8 290.5,325.6 291.1,325.1 291.1,324.5 290.8,324 291.4,323.4 		"/>
		<polygon fill="#E6EEF4" points="292.2,322.5 291.7,322.7 292.1,322.9 		"/>
		<g>
			<path fill="#2294E6" d="M601.6,240.8l0-1.4l-0.1-0.4l0-0.8l-0.2-0.6l-0.7-0.4l-0.3-0.5l-0.4-0.1l-0.2-0.2l-0.3,0.1l0.1,0.6
				l-0.3-0.5l0-0.5l0.5-0.4l0.2,0.2l0.3-0.1l0.5,0.1l0.2-0.2l-0.4-0.5l-0.3,0.1l-0.2-0.6l0.1-0.6l-0.2-0.2l-0.4,0.3l-0.8-0.1
				l-0.2,0.2l0.3,0.3l0.1,0.4l-1-0.9l-0.1-0.4l-0.3-0.4l-0.1-1.4l0.3-0.6l0.1-0.8l-0.6-0.9l-0.2-0.5l-0.5-0.4l-0.2-0.4l-0.4-0.4
				l0-0.2l-0.1-0.7l-0.1-0.7l0.3-0.8l0.1-0.8l0-0.3l0.1-0.2l-0.2-0.1l-0.6,0l-0.4-0.2l-0.5-0.1l-0.4,0.2l-0.2-0.1l-0.2-0.5l-0.2-0.2
				l-0.2-0.5l-0.3-0.1l-0.2,0.1l-0.5,0.1l-0.2,0l0.1-0.7l-0.1-0.5l-0.8-0.9l-0.1-0.3l-0.2-0.1l-0.2-0.6l-0.3-0.2l-0.2-0.4l-0.5-0.2
				l-0.4,0l-0.3-0.4l0-0.3l0.2-0.3l0.3,0.1l0.8-0.1l0.2,0.1l0.3,0l0.2,0.1l0.3-0.2l0.2-0.1l0.5,0.2l0.1-0.1l-0.1-0.3l-0.6,0
				l-0.2-0.1l0-0.4l-0.5-0.6l-0.1-0.3l0.3-0.2l0-0.4l-0.1-0.3l0.3-0.4l0.6-0.2l0.5-0.2l0.4,0.2l0.5-0.2l0.5-0.1l0.2,0.2l0.2-0.2h0.4
				l0.5,0.5h0.4l0.6-0.3l0.1-0.3l-0.4-0.1l-0.5-0.1l-0.4-0.7l0.1-0.6l0.4-0.2l0.2-0.3l-0.2-0.2l-0.2-0.2L595,212l0.3-0.6l0-0.4
				l-0.4-0.4l-0.1-0.3l0.2-0.4l0-0.2l-0.4-0.1l-0.2-0.4l-0.1-0.2l-1,0l-0.4-0.1l-0.4,0.1l-0.1,0.2l-0.3,0.2l0,0.3l-0.3,0.2l-0.4-0.2
				l0-0.2l-0.3,0l-0.2,0.2l-0.3-0.3l0-0.4l-0.1-0.1l-0.2,0.2h-0.4l-0.3-0.2l-0.7,0l-0.4,0.4l-0.1,0.4l-0.2,0.1l-0.2-0.2h-0.3
				l-0.3,0.4l-0.3,0l-0.2,0.4l-0.5,0.4l-0.3,0l-0.1,0.3l-0.2,0.2l-0.2-0.2l-0.2,0l-0.2,0.3l-0.4,0l-0.1-0.3l-0.2,0l0,0v0l0,0l0,0.2
				l0,0.3l-0.4,0.1l0.2,0.2l0,0.3l-0.3,0l0.3,0.2v0.3l-0.4-0.1l-0.2,0.1l-0.5-0.1l-0.4,0.1l0.8,0.5l0.1,0.3l-0.2,0.2l-0.3-0.3
				c0,0-0.4,0.1-0.4,0.1c-0.1,0-0.3-0.1-0.3-0.1l-0.3,0l0.4,0.2l0.1,0.2l-0.4,0.3h-0.4L582,214l-0.2-0.2l-0.1,0.3l-0.2,0.1l-0.3-0.2
				l-0.3-0.1l0,0.4l-0.2,0.4l-0.1,0.6l-0.3,0.2l-0.2,0.6l-0.2,0.4v1l-0.3,0.2l-0.2,0.5l0.3,1l0.5,0.1l0.3-0.1l0.4,0.4l0.5,0.2v0.9
				l0.6,0.4l0.3-0.3l0.3,0l-0.2,0.5l-0.1,0.5l-0.3-0.1l-0.1,0.5h0.4l0.1,0.3l0.2,0.4l0.1,0.8l0.4,0.5l0.2,0.8l1,1.3l1.5,1.2l0.2,0.2
				l0,0l-0.9,1.1l1-1.2l0.6,0.4l0.9,1.1l0,0.5l0.4,0.8l0.9,0.7l0.1,0.4l0.6,0.5l0.7,0l0.7,0.3l0.4,0.6l-0.4-0.1l-0.4,0.3l-0.7,0
				l-0.8,0.7l0.1,0.7l0.1,0.6l-0.3,0.3l-0.1,0.5l0.2,0.3v0.4l-0.3,0.2v1l-0.2,0.4l-0.2-0.3l0.2-0.6L588,237l-0.2,0.2l-0.2,0.4
				l0.2,0.7l-0.1,0.4l0.1,0.2l0,1.1l0,0.2l0.4,0.6l0.1,0.7l-0.1,0.6l0.2,0.3l0.4,0.1l0.5,0.6h0.7l0.5,0.2l0.7-0.2l0.6,0.4l0.4,0
				l0.2,0.6l0.4,0.5l1.4,0.6l0.6,0.1l1.7,0.5h0.8l1.8-0.5l1.4-0.2l1.6,0.1l0.6,0.1l0.2-0.7l-0.4-0.6l-0.3-0.7l-0.5-1.4L601.6,240.8z
				"/>
		</g>
		<g>
			<path fill="#2294E6" d="M568,229.8l0.3-0.3l0.7,0.3l0.3-0.1l0.4-0.3l0.5,0.1l1.2,1l0.5,0.1l0,0l0.9-0.3l1.2-0.3l0.4,0.1l1.6,0
				l0.7,0.6l-0.5-0.5l0-0.5l1-0.4l1.6,0.9l1,0l1,0.5l0.2-1l-0.4-0.6l-0.7-0.4l0.3-1l0.8,0.1l1.3,1l0.4,0.7l1.3,0.1l0.2-0.5l0.8-0.4
				l0.9-1.1l0,0l-0.2-0.2l-1.5-1.2l-1-1.3l-0.2-0.8l-0.4-0.5l-0.1-0.8l-0.2-0.4l-0.1-0.3h-0.4l0.1-0.5l0.3,0.1l0.1-0.5l0.2-0.5
				l-0.3,0l-0.3,0.3l-0.6-0.4v-0.9l-0.5-0.2l-0.4-0.4l-0.3,0.1l-0.5-0.1l-0.3-1l0.2-0.5l0.3-0.2v-1l0.2-0.4l0.2-0.6l0.3-0.2l0.1-0.6
				l0.2-0.4l0-0.4l0.3,0.1l0.3,0.2l0.2-0.1l0.1-0.3l0.2,0.2l0.3-0.2h0.4l0.4-0.3l-0.1-0.2l-0.4-0.2l0.3,0c0,0,0.2,0.1,0.3,0.1
				c0.1,0,0.4-0.1,0.4-0.1l0.3,0.3l0.2-0.2l-0.1-0.3l-0.8-0.5l0.4-0.1l0.5,0.1l0.2-0.1l0.4,0.1v-0.3l-0.3-0.2l0.3,0l0-0.3l-0.2-0.2
				l0.4-0.1l0-0.3l0-0.2l0,0v0l-0.7-0.4l-0.7,0.2l-1-0.7l0.1-0.5h1.1l-1.1-1.9l-1.3-1.2l-1.8-0.5l-0.2,0.4l-0.9-0.8l0.2-0.4
				l-0.5-0.8l-1.1-0.4l0.4-1l0.2-1.7l-0.4-0.4l-0.1-1.4l0.5-0.3l0.7-0.9v-0.7l0.4-0.5l1.5,1.3l0.2,0.5l0.8,0.5l0.9-0.1l-0.1-0.8
				l0.3-0.3l-0.6-2.2l0.9-0.1h0.9v-0.7l-0.4-0.5l0.2-0.6l0.8-0.5l0.4,0l0.3-0.7l0.4-0.3l0.6,0.2l0.1-0.5l-0.1-0.5l0.1-0.4l0.8,0.5
				l0.7,0.3l-0.1,0.4l-0.4,0.5l0.3,0.3l0.5-0.3l0.1-0.4l0.4-0.2l0,0.5l0.4-0.4l0.1-0.3l0.5-0.1l0.6-0.4l0.5,0l0.3,0.7l0.6,0.4l1-0.3
				l0.5,0l0.3,0.4l0.3,0l0.6,0.7h0.6l0.4,0.6l0.8,0.6l0.4,0l0.2,0.4l0,0.6l0.3,0.1l0.4-0.5l-0.1-0.7l0.5-0.3l0.4,0.5l1.1,0.2
				l0.3,0.5l0.4,0.2l0.7-0.5l0.1-1l0.6-0.1l0-0.5l0.4-0.1l0.3,0.4l0.2-0.5l0.6-0.1l0.8,0.7l0.2,0.3l0.8-0.1l-0.1-0.7l0.4-0.1
				l0.6,0.1l0.3-0.4l0.7,0.4l0.4,0.2l-0.2,0.4l-0.4,0.2l0.5,0.6l0.5,0.2l0.2-0.2l0.4,0.2l0.8,0l1,0.5l0.6-0.1l0.3-0.6l0-0.5l0.3-0.3
				l0.9,0.5l0.8,0.1l0.9-0.3l0.3-0.5l-0.1-2.2l-0.3-0.2l-0.8,0l-0.5-0.4l-0.1-0.3l-0.6-0.1l-0.4-0.4H610l0-0.4l-0.2-0.3l0.1-0.3
				l0.5-0.1l0.1-0.6l0.4-0.5l-0.1-0.6l-0.4-0.1l0-0.6l0.6-0.9l0.6-0.6l1.2-0.1l0.5,0.2l0.3-0.2l0-0.6l-0.5-0.2l-0.4-0.4l-0.4,0
				l-0.3,0.3l-0.6-0.2l-0.7,0l-0.1-0.4l0.2-0.2l0.7,0l-0.2-0.6l-0.7,0.1l-0.5-0.1l0.3-0.3l-0.3-0.7l0.2-0.2l0.6,0l0.3-0.3l0.4,0
				l0.2,0.3l0.6-0.1l0.5,0.4l0.2-0.3v-0.3l0.5-0.3l0.5,0l0.3,0.5l0.3-0.4l0.1-0.4l1-0.3l0.6-0.1l0.7-0.3l0.7-0.1l0.1-0.2l0.7-0.5
				l0.7,0l0.4-0.3l0.4,0l0.4,0.2l0.2-0.2l0-0.6l0.3-0.3h0.6l0.1-0.4l0.4-0.3l0.3,0.3l0.4,0.1l0.5-0.3l0.6-0.2l1.2-0.8h0.3l0.3-0.2
				l0.7-0.1l0.4-0.5l0.4,0.1l0.7-0.2l0-0.4l-0.3-0.4l0.3-0.2l0.7,0l0.2-0.5l0.5-0.3l0.3,0.1l0.4-0.1l0.7,0.3l0.8-0.1l0.7,0.4l0.7,0
				l0.6-0.3l0.6,0l0.2,0.7l0.2,0.2l0.2,0.6l0.4,0.5l0.4,0.2l0.1,0.3l-0.1,0.5l0.1,0.5l0,0.2l-0.4,0.1l0.3,0.5l0.3,0.2l0.6-0.4
				l0.4,0.4l0.3-0.1l0.1-0.5l0.4-0.2l0.2,0.6h0.3l0.1-0.4l-0.2-0.6l0.2-0.1l1,0.7l0.1,0.9l0.4,0.7l0.3,0l0.4-0.4l-0.3-0.1l-0.2-0.3
				l0.6-0.1l1,0.5h0.4l0.4-0.3l0.3,0.2l-0.2,0.5l-0.3,0.3l0,0.7l0.4,0.5l0.4,0l0.3-0.4l0.6-0.2l1.1,0.3l0.3,0.2l0.3-0.2l-0.1-0.6
				l0.5-0.2l0.8-0.1l0.5-0.4l0.2-0.5l0.4-0.3l0-0.4l0.6-0.6l0.4-0.2l0.4-0.4l0.6-0.2l0.7-0.2l0.3,0.2l0,0.5l-0.5,0.5l-0.4,0.1
				l0.2,0.4l5,3.8l6.8,8.6l0.7-0.1l0.5-0.3l0.1-0.3l-0.1-0.1l0-0.6l0.4-0.2l0.8,0.4l-0.1,0.4l0,0.4l0.6,0.2l0.4,0.4l0.5,0l0.4-0.3
				l0.5-0.1l0.7,0.4l0.6-0.3l0.5,0.1l0.5-0.2l0.1-0.3l-0.2-0.3l0.1-0.3l0.9-0.1h1l0.8,0.2l0.8,0.6l0.5,0.8l0.3,0.6l0.3,0l0.6,0.2
				l0.7,0.4h0.2l0.4,0.2l0,0.3l-0.1,0.3l0,0.4l0.1,0.4l0.3,0.3l0.1,0.1l0.3,0l0.6,0.2l0.4,0.2l0.2-0.3l0.4-0.2l1.3-0.1l0.6-0.2
				l0.3-0.5l0.5-0.3l0.3,0.1l-0.2,0.7l0.2,0.5l0.4,0.1l0.6,0.5l0.8,0.3l0.1,0.2l0.3,0l0.6,0.2l0.2,0l0-0.1l0.4-1l0.5-0.3l1.3,0.1
				l0.2-0.3l0.5-0.5l0.9-0.3l0-0.6l0.2-0.6l0.7-0.3l0-0.4l0.5-0.4l0.5-0.1l0.4-0.5l0.2-0.2l-0.3-0.2l0-0.4l0.2-0.2l0.9,0.3l0.4-0.2
				l0.3-0.7l0.4-0.2l1-0.1l0.5-0.1l0.5,0l0.6,0l0.4-0.3l0.1,0l0.3,0.5l0.1,0.3l0.3,0.3l0.6,0l0.3-0.1l0.5,0l0.4-0.3l0.9-0.1l0.2,0.4
				l0.1,0.5l0.2,0.4l1.4,0.8l0.5,0.4l1,0.5l0.4-0.2l0.6-0.2l0.6-0.4l0.5-0.1l0.5,0.1l0.4,0.3l0.4-0.1l1.2,0l0.5,0.2l0.5-0.1l0.1-0.1
				l0.5,0.1l0.9-0.1l0.5-0.8l-0.3-0.3l-0.6-0.4l0-0.8l0.2-0.9l-0.1-0.4l-0.5-0.2l-0.3-0.4l-0.8-0.2l-0.2-0.7l0-1.4l0.6-0.6v-0.4
				l0.3-0.5l0.5-0.2l0.3,0.1l0.2-0.5l-0.2-0.5l0.1-0.4l0.3-0.3l0.5,0l0.4,0.3l0.7,0.2l0.7,0.4l0.1,0.2l0.6,0.2l0.7,0.1l1,0l0.4,0.3
				l0.3,0.3l0.7,0.1l0.4,0.2l0.5,0.1l1.2,0l0.4,0.2l0.2,0.4v0.4l0.3,0.4v0.4l0.3,0.3l0.3,0.6l0,0.5l0.3,0.3l0.3,0l0.6,0.5l0.2,0.3
				l0.8,0.2l0.9,0.4l0.4,0l0.2-0.2l0.8,0l0.4-0.3l0.4,0l0.3,0.1l0.4-0.1l0.5-0.5l0.8-0.3l1.1-0.1l0.6-0.3l0.7,0l0.7-0.2l0.6,0.3
				l0.8,0.1l1.1,0l0.6,0.8l1,0.4l0.8,0l0.6-0.1l0.3,0.3l0.3,0.9l0.6,0.4l0.3,0.2l0.4,0.1l0.5,0.5l0.4,0l1.3-0.1l1.1,0.3l1.7,0
				l0.7-0.1l0.3-0.2h0.6l0.5,0.3l0.3,0l0.4-0.7l1-0.6l0.6,0l0.4-0.5l0.5-0.1l1.3,0l0.5-0.5l0.2-0.5V187l0.3-0.6l0.6-0.3l0.4-0.4
				l0.2-0.6l0.4-0.4h0.5l0.2,0.2l0.8-0.2l0.5,0.1l0.7,0.4l0.3,0.5l0.4,0.2l0.5-0.3l0.3,0.2l0.5,0l0.6-0.4l0-0.3l0.9-0.2l1,0.3
				l0.3,0.3l0.3-0.1l0.4,0.1l0.1,0.2l0.5-0.1l0.8,0.1l0.4,0.3l0.3-0.1l1.3-1.3l0.6-0.4l1-0.2l0.4-0.4l0.2-0.5l-0.1-0.6l-0.2-0.1
				l-0.2,0.2l-0.2-0.2l-0.3-0.1l-0.1-0.8l0.2-0.2l0-0.8l-0.2-0.5l0.1-0.3l0.3-0.2l0.1-0.5l-0.3-0.3l-0.1-0.6l0.1-0.3l-0.3-0.5l0-0.5
				l0.3-0.6l0.3-0.3l0.1-0.6l0.4-0.5l0.3-0.3l0-0.7l-0.1-0.3v-0.4l-0.4-0.3l-0.2-0.5l-0.4-0.7l-0.3-0.1l-0.4,0.2l-0.6,0.4l-0.3,0
				l-0.2-0.2v-0.7l0.2-0.2v-0.3l0.2-0.3l0.2-0.5l0.4-0.5v-0.3l0.3-0.3l0.7-0.1l0.3-0.1l0.4,0l0.1-0.1l0.4,0l0.4-0.2l0.2-0.4h0.5
				l0.3-0.4l0.6,0.1l0.3-0.1l0.6,0l0.2-0.2h0.2l0.2-0.4l0.8-0.1l0.1-0.1l0.3,0.1l0.4,0l0.4,0.3l0.9,0.1l0.4,0.3l0.1,0.2h0.6l0.4-0.1
				l0.2,0.2l0.5,0.2l0.2-0.1l0-0.3l0.3-0.2l0.2,0.1h0.4l0.2-0.1l0.3,0.3l0.3,0l0.4,0.1l0.2,0.3l-0.1,0.3l0.1,0.3l0.3,0l0.1,0.2
				l0.3-0.2l0.4,0.1l0.1,0.3l-0.1,0.3l0.1,0.2l0.5,0.1l0.3,0l0.2,0.2l0,0.3l0.3,0.2l0.2,0.3l0,0.4l0.1,0.3v0.3l0.1,0.2l0.7,0
				l0.1,0.3l-0.2,0.4l0.1,0.3l0.6,0.4l0.2,0.5l0.3,0.4l0.1,0.4l0.3,0.1l0.2,0.5l0.4,0.3l0,0.2l-0.1,0.3l0.2,0.1l0.3-0.1l0.3,0.4
				l0.1,0.3l0.5,0.7l1,0.6l0.2,0.5l0.1,0.6l0.2,0.2l0,0.6l0.3,0.2l0.3,0.1l0.1,0.5l-0.1,0.4l0.3,0.5l0.6,0.6l0.5,0.2l0.2,0.4
				l0.4,0.1l0.3-0.1l0.3,0.2l0.2-0.1l0.6,0.1l0.3-0.2h0.4v0.1L789,183l0.2,0.2l0.6,0.1l0.3,0.1l0.2,0.2l0.3,0.2l0.1-0.2l0.3-0.1
				l0.3,0.1l0.1-0.3l0.3,0l0.2,0.2l0.1,0.3l0.3,0.3l0.3,0l0.1,0.3l0.3,0.2l0.2,0l0.2,0.3l0.1,0.3l0.6,0.3l0.1,0.1l0.3,0l0.3,0.2
				l0.4,0.1l0.3-0.1l0.3,0l0.3-0.2l0.2,0l0.2,0.1l-0.1,0.4l-0.2,0.3l0,0.4l0.1,0.3l0.5,0l0.1,0.5l0.2,0.5l-0.1,0.5l-0.1,0.2v0.4
				l0.5,0.7l0.2,0.2l0.4,0.6l0.1,0.3l0.4-0.1l0.4-0.3l0.4,0l0.3,0.4l0.1,0.4l0.3-0.1l0.2-0.2l0.4,0.1l0.3-0.1l0.8-0.1l0.4-0.3
				l0.3-0.1l0-0.3l0.1-0.5l0.4-0.2v-0.4l0.2-0.4l0.4,0h0.6l0.2-0.6l0.3-0.1l0.3-0.1l0.1-0.4l0.3-0.3l0.5-0.1l0.3-0.3l0.5,0.2
				l0.3,0.2l0.5,0l0.2,0.3l0.3,0.5l-0.3,0.3l0.1,0.3l0.5,0.5l0.1,0.4l0.3,0.3l0.3,0.2l-0.1,0.6l0,0.5l-0.1,0.2l-0.4,0.1l-0.4,0.5
				v0.2l0.2,0.3l0.1,0.1l0,0.5l-0.2,0.4l0.2,0.3l0.3,0.2l0,0.3l0.1,0.2l0,0.2l-0.1,0.1l-0.2,0.1l0,0.7l0.2,0.6l0.2,0.3v0.2l-0.3,0.2
				l-0.1,0.4l0.2,0.3v0.3l0.1,0.3l-0.4,0.2l-0.1,0.2l0.2,0.3l0.1,0.4l-0.2,0.2l-0.2,0.6l0.1,0.3l0.1,0.3l-0.1,0.2l0,0.3l0.2,0.3
				l0.1,0.4l-0.2,0.3h-0.3l-0.3-0.1l-1.8-0.3l-0.3-0.1l-0.4-0.1l-0.2,0.1l-0.5,0.8l-0.1,0.4l-0.3,0.4l-0.3,0l-0.3,0.2l-0.1,0.3
				l0.2,0.5l0.7,1l0.1,0.4l0.2,0.3l0.4,0.5l0,0.5l0.1,0.7l0.1,0.5v1l0.3,0.2l0,0.5l0,0.5l-0.1,0.3l0,0.4l0.1,0.3l0,0.5l-0.2,0.1
				l-0.7-0.1l-0.3,0.2l0,0.2l0.1,0.5l0.2,0.1v0.3l-0.1,0.1l0.5,0.7l0.2,0l0.2-0.8l0.7-0.1l0.2,0.3l0.2-0.9l0.4-0.3l0.1-1l0.5-0.4
				l0-0.5l0.2-0.3l0.6,0.4l0.7-0.3l0.3,0.3l0.1,1l0.9,0.2l0.9,0.5l0.3-0.3l0.3,0.4l0.6-0.7l0.8-0.1l0.1-0.4l0.4,0l0.4-0.7l0.9-1.1
				l-0.2-0.3l0.7-0.3v-0.7l-0.2-0.6l0.4,0.1l0,0.1l0.7-0.9l-0.3-0.5l0.3-0.1l-0.1-0.9l0.5-0.3l0-0.6l0.8-0.5l0.1-0.3l-0.2-0.2
				l0.1-0.7l0.3-0.2l0.5-2.4l0.6-0.7l0-0.5l0.6-0.5l0.1-0.7l0.7-0.8l0-0.6L819,195l-0.2-0.7l0.6-0.6l-0.3-1.2l0.5-0.6l0-0.4l-0.2,0
				l0.4-0.9l0-0.7l0.5-0.5l0.1-0.8l-0.1-0.1l-0.1-0.9l0.4-0.9l0.1-0.8l0.8-0.8l0-0.7l-0.3-0.5l0-0.8l0.2-0.2l0-0.7l-0.4,0l-0.2-1.3
				l0.1-0.4l-0.2-0.4l0.1-1.1l-0.8-0.9h-0.3l-0.3-0.5l0.2-0.3l0.4-0.7l-0.1-0.3l-0.5,0.4l-0.4-0.1l-0.6-1.8l0-0.5l-0.1-0.4l-0.1-1
				l0.2-0.4l-0.4-1.3l0.3-0.4l-0.3-0.2l0.1-0.3l0-0.4l-0.2-0.2l0.3-0.6l-0.2-0.5l0.1-0.4l0.3-0.3l-0.5-0.4l-0.1-0.7l0.3-0.3
				l-0.1-0.5l-0.4,0.3l-0.5-0.1l-0.6-0.5l0-0.6l0.3-0.4l0-0.5l-0.7-0.9l-0.4,0l-0.5-0.6l0.4-0.2l0-0.5l0.3-0.5l-0.5-0.9l-0.3,0
				l-0.4-0.4l-0.4-0.1l-0.2-0.4l-1.2-0.4l-0.3-0.4l-0.8-0.1l-0.3-0.2l-0.3-0.7l-0.4-0.4l-0.6-0.1l-0.6-0.5l-0.6,0.5l-0.5,0.1
				L808,158h-0.3l-0.2-0.3l0-0.3l-0.5-0.3l-0.5,0l0.3,0.9l0.5,0.5l-0.2,0.5l0.3,0.9l-0.2,0.8l-0.4,0.2l0-0.7l0.1-0.7l-0.3-0.8
				l-0.2,0.4l0.1,0.5l-0.2,0.8l-0.7,0.4l-1.2,0.2l-0.2-0.3l0.4-0.4h0.3l-0.1-0.8l0.3-0.4l0.2-0.2l-0.6-0.1l-0.3,0.3l-0.2-0.3
				l-0.4,0.1l-0.3,0.5l-0.3,0.2l-0.1,0l-0.4,0.5l-0.7-0.6l0.1-0.7l-0.2-0.9l-0.6-0.8V156l-0.6,0.2l-0.3-0.1l-0.5,0.3l-0.4,0.1
				l-0.7,0.5l-0.5,0l-0.5-0.4l-0.5,0.2l-0.5-0.3l-0.3-0.5l0.3-0.5l0.2-0.6l0.5-0.8v-0.4l0.8-0.7l0-0.9l0.8-0.7l0-0.7l0.3-0.1l0-0.3
				l0.5-0.8l0.1-0.6l0.4-0.6l-0.2-0.6l0.2-0.3l0-1l0.3-1.3h0.2l0.1-1l0.4-0.2l-0.1-0.6l0.8-0.9l0.1-0.7l0.5-0.4l-0.3-0.9l0.3-0.2
				l0-0.7l0.4-0.2l0.3,0l0-0.6l-0.3-0.4l0-1.1l-0.2-0.7l0.4-0.9l0.8-0.9l0.2-1.1l-0.7-1.1l0.1-0.6l0.5-0.5l0.1-0.6l1-0.8l0.1-0.5
				l0.4,0l0.4,0.4l0.6-0.1l1-0.8l0.8,0l0.8-0.5l0.6,0l0.6-0.4l0.5,0l0.5-0.1l0.3-0.4l0.5,0.3l-0.2,0.6l0.4,0.1l0.5,0.5l0.3-0.5
				l0.4-0.4l-0.8-0.6v-0.3l0.6-0.3l1.1,0.1l0.5-0.3l1.1,0.1l0.2,0.4h0.3l0.3-0.3l0.4,0.1l-0.1-0.5l0.3-0.3l0.9,0l0.4,0.5l1.1-0.4
				v-0.4l-0.3-0.2l-0.2,0.2l-0.7-0.4l0.4-0.7l0.1,0.4l0.8-0.3l-0.7-0.5l0-0.4l0.4,0l0.7-0.9l0.8,0l0.4,0.3l0.4-0.2l1,0.3l0.8-0.1
				l-0.1,0.3l0.4,0.3l0.4-0.1l-0.2-0.4l0.8,0l0.8,0.1l0.5,0.1l0.5,0.4l0,0.3l0.7,0.1l0.5-0.5l0.4,0.1l0.1,0.3l-1,0.7h-0.9l-0.2,0.3
				l0.1,0.6h-0.5L826,126l0.2,0.1h0.4l0.7,1l0.2-0.3l0.8-0.3l0.4-0.5l-0.1-0.2l0.6-0.3l-0.4-0.6h0.3l0.7,0.7l0.4,0.1l0.3-0.4
				l-0.3-0.3l0.4-0.3l0.3-0.4h0.2l0-0.5l-0.1-0.4l0.4-0.1l0.3,0.2l0.4-0.2l0.3,0.3l0.1,0.4l0.4,0.2l0.7-0.7l-0.3-0.3l0.1-0.2
				l0.4-0.3l0.4,0.2l0.3-0.2l0.4,0.1l0.1-0.3l-0.5-0.5l0.1-0.2l0-0.3l-0.6-0.2l-0.3-0.2l-0.1,0.1l0,0.2h-0.3l-0.5-0.3l-0.1,0.1
				l0.1,0.3l-0.5,0l-0.2,0.2l-0.4-0.2l0.1-0.5l0.3-0.1l-0.7-1l0.4-0.3l-0.5-0.7l0.3-1l0-0.6l0.4-0.5l0.1-0.8l0.5-0.6l0-0.6l-0.2-0.1
				l0.6-0.2l-0.7-0.8l0.3-2l0.5-0.4l-0.6-0.8l-0.1-0.7l-0.4-0.3l0-0.3l0.5-0.4l-0.1-0.8l0.3-0.2l0.6-1l0.7,0.1l0.3-0.2l0.4,0.1
				l0.3-0.4l1-0.1l0.1-0.3l0.4-0.1l0.1-0.5h0.2l0.2-0.2h0.6l0.1,0.5l0.3-0.2l0.2,0.1l0.3,0.7h0.2l0.5-0.6l-0.1-0.7l0.4-0.1l0.1-0.7
				l0.2,0l0.2,0.5l0.6,0.4l0,0.7l-0.2,0.2l0.2,0.3l0.2,0.5l-0.4,0.4l0.3,0.2l0.2,0.6l-0.2,0v0.4l0.2,0.2l-0.2,0.4l-0.2,0.2l0.2,0.3
				l0.5-0.5l0.2,0.4l0.6,0.1l0.1,1l0.3-0.2l0-0.4l0.5-0.5l0.4,0l0.2,0.3l-0.5,0.8l0.5,0.4l0.2,0.6l0.3-0.8l0.4-0.3l0-0.3l0.2-0.3
				l0-1.4l0.4-0.4l-0.4-0.4l0.5-0.4l0-0.4l-0.2-0.1l0-0.2l0.2-0.1l0.1-0.8l-0.3-0.3l0.3-0.8l0.4-0.3l0.8-0.2l0.2,0.4l0.4,0.3
				l0.2-0.3l-0.4-0.4l0.1-0.6l-0.8-0.4l-0.3-1.1l-0.4-0.2l0-0.3l-0.5-0.4l-0.2-0.8l0.2-0.2l-0.1-0.6l-0.6-0.5l0.1-0.5l-0.2-0.3
				l0.7-0.7l0.6,0l0.5-0.6l0.7,0l0.2-0.2l0.8,0.7l0.8,0l0.3,0.1l0.6,0.1l0.3-0.1l-0.7,0.4l0.3,0.3l-0.6,0.2l-0.6-0.1l-0.7,0.8
				l-0.1,0.4l0.3,0.7l0,0.6l0.3,0.3l0.1,0.4l0.6,0.7l0,0.3l0.1,0.1l-0.1,0.2l0.6,0.2l0.1,0.7l0,0.3l-0.2,0.3l0.1,1.3l0.2,0.1
				l0.2-0.4l0.2,0l0.3,0.6l0.2,0.3l-0.3,0.8l0,1.1l0.4,0.3l0.4-0.2l0.5,0.1l0.1,0.2l-0.1,0.4l-0.3,0l-0.5,0.4l-0.2,0l-0.7,0.7
				l-0.1,0.5l-0.6,0.4l-0.1,0.3l-0.4,0.2l-0.1,0.5l-0.3,0.4l0.2,0.7l0.4-0.1l0,0.8l-0.5,0.9l0.1,0.4l0.3,0.2l-0.2,1.2l0.2,0.9
				l-0.3,0.4l-0.6,0.2l-0.1,0.6l0.2,0.2l-0.1,1.1l-0.2,0.3l0.1,0.4l0.5,0.5l-0.4,0l-0.2,0.9l0.2,0.3v0.7l-0.5,0.5l0.3,0.6l0,1.1
				l0.4,1l-0.9,1.7l0.5,0.7l-0.5-0.1l-0.9,0.1v1.1l0.1,0.4l-0.6,0.7l-1.1-0.5l-0.5,0.5l0,0.4h0.7l1.1,1.5l-0.1,1.4l-0.2,0.3l0.3,0.4
				l-0.4,0.2l-0.1,1l-0.6,0.7l-0.1,1.1l0.5,1l0.3,1.9l0.8,1.2v1l1.2,2.8l1.5,3l1.5,2.4l0.7,0.8l0,0.8l2,2.3l2.1,3.9l1,0.5l0.7,0
				l0.4-0.2l-0.2,0.5l-0.5,0.3l-0.4,0l0.7,1.1l1.1,2.4l0.1,1l0.6,0.9l1.1,0.1l0.2,0.4l0,0.6l0.1,0.4l-0.1,0.6l0.6-1.3l0.3-1.2
				l0.2-0.1l0.1-0.6l0.7-0.6l0.1-0.5l-0.1-0.3l0.2-0.5l0.2-1.2l-0.3-0.5l0.1-0.8l0.5-0.4l-0.5-0.5l-0.3,0.2l-0.4-0.1l0.2-0.4
				l-0.4-0.8l0.3,0.1l0.2-0.3l-0.5-0.5l0.1-0.4l0.1-0.6l-0.6,0l-0.3-0.3l0.3-0.5l0.5,0.4l0.8-0.8l0.4,0.1l0.5-0.4l0.5-0.3l0.2,0.2
				l0.6,0.1l-0.4-0.5l-0.8-0.4l0-0.7l-0.8-0.4l-0.5-1.6l0.3-1.4l-0.5-0.5l0.4-0.3l0.1-0.7l0.5-1.1l-0.2-0.3l0.4,0.1l0.9-0.6l0.1,0.3
				l1.6-0.6l-0.1-0.7l0.4-0.4l-0.6-0.4l-0.9-1.3h-0.4l-1.4-2.1l0-0.5l-0.4-0.4l-0.1-2l0.1-0.3l-0.2-0.9l0.4-0.6v-0.6l-0.7,0.1
				l-0.1-0.3l0.5-0.8l0.5-0.1v-0.4l-0.2-0.2l0.4-0.3l0.1,0.5l-0.1,0.7l-0.3,0.6l0.1,0.8l0.8,0.3l0.7,0.5l0.4-0.1l0-0.8l0.3-0.4
				l-0.4-0.9l-1.2-1.1l0-1.3l-0.6-0.3l-0.1-0.1l-0.2,0.2l-0.4,0.3l0,0.3l-0.3,0.2l-0.6-0.4l0-1l-0.4-0.6l-0.5-1l0.4-0.5l0.2-0.2
				l-0.1-0.5l0.3-0.5l-0.4-0.4l0.1-0.3l0-0.5l-0.4-0.2l-0.5,0.1l-0.9-0.7l-0.6,0l-0.4,0.3l0,0.4l0.7,0.8l-0.1,0.5l-0.2,0.2l-0.7-0.3
				l-0.7-1l-0.5-0.5l-0.4-0.3l0.2-0.3l-0.5-1l0-0.6l0-0.3l-0.3-0.6l0.2-0.4l-0.3-0.8l0.3-0.5l-0.1-0.5l0.2-0.6v-0.6l-0.3,0.2
				l-0.5-0.6l0.1-0.2l0.4-0.1l0.5,0.3l0-0.2l-0.4-0.3l-0.4-0.4l0.2-0.4h0.2l-0.1-0.4l-0.4-0.4l-0.6-0.2l-0.1-0.4l0.3-0.1l-0.1-0.7
				l-0.5-0.6l0.1-0.5l0.2-0.5l0.3-0.2l-0.4-0.5l0.1-0.4l0.4,0l0.6,0.3l0.3-0.1l0.2-0.8l0.4-0.1l0.3,0.4l0.3,0l0.4,0.6l0.6-1.2
				l-0.6-0.2l0.1-0.5l0.4-0.3l0.7-1.2l0.1-0.6l0.4,0.5l0.5,0.3l0,0.6l0.7,1.8l0.4,0.4l0.3-0.2l0.2-1.5l0.2-0.5l-0.1-0.6l0.3-0.5
				l-0.4-0.8l0.5,0.3l0.4-0.4l0.3-1l0.5,0l0.6-0.8l0.6-0.2l0.3,0.2l0.9-0.6l0.8,0.1l1.5,0.9l0.1,0.5l0.4,0.1l0.5-0.1l0.3,0.1
				l-0.3,0.2l0.8,0.9l0.3-0.3l0.5,0.5l0.7-0.1l0.4,0.1l0-0.5l-0.8-1.1l0.2-0.3l-0.2-0.3l-0.4-0.1l0.1-0.5l0.3-0.5l0.2-1.3l0.4-1
				l-0.1-0.4l0.6-0.8l-0.2-0.4l0.3-0.3l-0.4-0.9l-0.4-0.2v-0.3l0.8-0.1l0.3-0.6l-0.8-0.4l-0.3-0.4l0.4-0.1l0.3,0.3l0.4-0.1l0.1-0.4
				l-0.3-0.4l0.6-0.4l0-0.4l-0.3-0.4l0.4-0.2l0.3,0.2l0.2-0.5l0.1-0.3l-0.3-0.3l0.5-0.1l0.6-0.7l-0.3-0.4l0.1-0.6l0.3,0.3l0.6-0.5
				l-0.4-0.8v-0.8l0.5,0l0.1,0.1l0.3-0.3l0.8-1.1l-0.4-0.1l0-0.5l0.5,0l0.9-0.9l-0.4-0.3l0.2-0.2l0.7,0l0.9-0.5l-0.3-0.4l0.1-0.2
				l0.3,0.2l0.1,0.5l0.5,0.2l0.4-0.3l0.6,0.4h2l0.4,0.3l0.3-0.1l-0.3-0.7l-0.5-0.3V88l0.4-0.1l-0.1-1.7l-0.7-1.1l-0.6-0.1l-0.7-1
				l0.4-0.4l-0.7-0.7l-1.3-0.3l-1.2-0.8l-0.5-0.8l-0.1,0.5l-0.4-0.2l-0.2,0.2l-0.1,0.6l-0.6,0.2l-0.2-0.4l0.1-0.6l0.6-0.4l-0.4-0.6
				l0.1-0.2h0.4l0.4,0.4l-1.1-1.7l-0.8-0.6l0,0.8l0,0.2l-0.4,0l-1-1l0.1-0.5l0.5,0.1l-0.3-0.5l-1.5-1.2l-0.3-0.1l0.1,0.4l-0.2,0.5
				l-0.8,0.1l-0.7-0.7l-0.7-0.2l-0.7-1.1v-0.4l-0.4-0.3l-0.5,0.1l-0.9,0.8v0.3l-0.5-0.1l-0.4,0.2l-0.1,1.2l0.3,0.3l-0.5-0.3l-0.3-1
				l0.2-0.8l-0.8-0.4l-0.3-0.7l-0.3,0l0.5-0.1l0.5,0.6l0-0.6l0.6,0l0.5,0.3l0.7-0.5l-0.3-0.5l-1.5-0.6l-0.4,0.6l-0.8,0l-0.6-0.3
				l0.6,0l0.5-0.7l0.5-0.1l0.5,0.3l0.7,0.1l0.6,0.5l0.8,0.8l0.6,0.1l0.3,0.5l0.4,0.1l0.6-0.4l0.3,0.4l1.3-1l0.1,0.2l-0.1,0.5
				l0.5-0.4v-0.7l0.7-1l-0.2-0.4l0-0.8l-0.3-1.1l0.5-1.8l0-1.2l-0.5-0.6l-0.2-0.7l-0.8-0.6l-0.4-0.8l0.3,0l0.5,0.7l0.1,0l-0.2-0.8
				l-0.7-0.4l-0.6,0.3l-1.1-0.3l-1.5-1.8l-0.4-0.2l0.1-0.4l0.8-0.1l0.2-0.6l-0.4-0.4l-0.7,0l-0.3-0.2l0.4-0.3l-0.3-0.7l0.1-0.1
				l0.6,0.8l0.9,0.5l0.1-0.4l-0.3-0.4L868,59l-0.2-0.4l0.3-0.3l0.3,0.3l0.2,0.4l0.5,0.2l0.2,1.3l-0.1,0.4l1.4,1l0.5-0.3l0.6,0.2l0,1
				l0.5,0l1-1.4l0.2-0.7l-0.2-0.6l0.1-1.1l-0.2-0.5l0.3,0.5l0.1,0.7l0.3-0.1l0.5-0.5l0.9-0.3l0.1-0.6l0.9,0.3l-0.1,0.2l0.2,0.2
				l1.3,1l0.2,0.1l0.2,0.7l0,0.3l0.3,0.2l1.2-0.3l0.2,0.1v0.3h0.2l0.4-0.5l-0.3-0.5l0.1-0.2l0.3,0l-0.1-0.7l0.4,0.1l0.2,0.4
				l-0.1,0.4h0.5l0.5-0.3l1.3,0.1l0.4,0.2l0.4-0.1l0.1,0.2l0.3,0l0.4-0.4l-0.3-1l0.2,0.1l0.6,0.9l0.8-0.4l0-0.4l-0.4-0.8l-0.5,0.1
				l-0.6-0.4l0.4-0.5l0.5,0.3l0.4-0.2v-0.7l-0.6-0.1l-0.4-0.2l-0.3,0.3l0,0.5l-0.2-0.4l-0.6,0.1l0.1-0.7l-0.3-0.4l-0.5,0.1l0,0.4
				l-0.2-0.4l0-0.4l0.6-0.3l-0.1-0.8l-0.3-0.2l0.7-0.5l-0.4-0.7l0.1-0.4l-0.7-0.6l-0.7,0.1l-0.7,0.7l0.1-0.9l0.5-0.3l-0.5-0.7
				l-0.1-0.5l-0.3,0l-0.4,0.4l-0.3-0.4l-0.4-0.2l-0.8,0.1l0.6-0.5l0.7,0l0.7-0.5l0.2,0.3l0.5-0.9l0.6-0.1l0.1-0.5l-0.3-0.5l-1.2-0.3
				l0.9-0.2l0.9,0l0.3-0.3l-0.2-0.6l-0.6-0.3l-0.3-0.6l-0.5,0.1l-0.1-0.3l0.2-0.7l-0.5-1.5l0.1-0.3l0.3-0.4l0-0.4l-0.5-0.2l-0.5,0.6
				l-0.5,0.3l0-0.7l-0.5-0.1l0,0.4l-0.3,0.1l-0.1-0.3l0.1-0.6l-1.7-0.3l-0.4,0.2l-0.8-0.2l-0.5-0.5l-0.1-0.3l-0.5-0.1l-0.3,0.1
				l-0.2-0.3l-0.5-0.1l-0.5,0.8l-0.5,0.1l-0.3,0.1l-0.3,0.2h0.7l-0.2,0.4l-0.6,0.4l-0.3,0l0.2,0.5l0.5,0.4l-0.1,0.2l-0.6-0.2l-0.4-1
				l0.1-0.3l-0.4,0.1l-0.7,1l-0.4,0.8l-0.6,0.5l0.1,0.3l0.7-0.6h0.4l0.3,0.6l0.5,0.5l1,0.7l0.2,0.6l-0.4,0.4l0.1,0.5l0.7-0.1
				l0.7-0.4l0.4,0.5l0,0.5l0.4,0.9l0,0.2l-0.5-0.5l-0.3-0.7l-0.3-0.1l-0.3,0.5l0.2,0.5l0.3,0.2l-0.1,0.2l-0.5-0.1l-0.5-0.8l-0.7-0.1
				l-0.6,0.5l-0.4-0.2l-0.2-0.6l0.3-0.3l-0.3-0.6l-0.5-0.4l-0.2-0.6l-1-0.3l-0.9-1.6l-0.6-0.6l0.1-0.2l-0.4-0.3l-0.5-0.1l0.2,0.2
				l-0.2,0.5l-0.2-0.2l-0.3-0.6l-1.1-0.6l-0.7-0.1l-0.6,0.1l0.1,0.4l0.5,0.3l1.1,0.4l-0.8,0.3l-1-0.4l-0.5-0.5l0.1-0.4l-0.3-0.2
				l-0.9,0l0.3,0.2v0.3l-0.8,0.2l-0.4-0.5l0.2-0.3l-0.9-0.2l-0.2,0.1l0.1,0.5l-0.5-0.1l-0.2-0.5l-0.8,0l0.3,0.4l-2.4-0.5l-0.7,0.3
				l-0.9-0.3l0-0.4l-0.8-0.2l-0.1,0.1l0,0.3l-0.3-0.2l-0.5-0.2l-0.5-0.4l-0.3,0.2L853,42l-0.8,0l-0.7,0.1l-0.2,0.4l-0.8,0l-1.7-0.6
				l0.1-0.2l1,0.4l0.5,0.3l0.1-0.3l-1.6-1.1l-1.9-0.2l-0.8,0.2l-0.3-0.2l0.3-0.3l-0.4-0.3l-0.6,0.1l0.2,0.2l-0.4,0.1l-0.6-0.3
				l-1.7-0.5l-0.9,0.1l-0.3,0.4l-0.4-0.1l-0.3-0.4l-0.5,0.2l-1,0l-0.5-0.4l-0.4,0.1l-0.8,0.1l-0.2-0.1l-0.4,0.5l-0.1,0.4l-0.3-0.5
				l-2.2,0.6l0,0.5l-0.5-0.2l-0.3,0.6l-0.2,0l-0.2-0.4l-0.8,0.1l0,0.5l-0.4,0l-0.5,0.2l-0.7-0.5l-0.7,0.2l-0.1,0.4l-1.3,0l-1.5,0.1
				l-0.4-0.2l-1.2,0.2l-0.1,0.2l0.8,0.6l0.4,0.9l0.3,0.3l0.2,0.6l0.4,0.8l-0.2,0.3l0,0.7l0.3,0l0.5-0.4l1,0.5l0.3,0.4l0.4,0.1l1,1
				l0.2,0.9l0.8,0.3l0.5,0.7l-0.1,0.4l0.2,0.3l-0.3,0.2l0.4,0.5l-0.2,0.2l-0.4-0.1l-0.7,0.4l0.1,0.4l-0.7,0.1l-0.4,0.3l-0.9-0.1
				l-0.4-0.3v-0.6l-0.9-1.3l-0.4-0.1l-0.2,0.2l-1.3-0.3l-0.8,0.1l-0.4-0.3l-0.8-0.9l0-0.7l-0.5-0.4l-0.7-0.1l-0.1-0.3l-0.3-0.6
				l-0.9-0.2l-0.3,0.3l-0.1,0.6v0.7l0.1,0.4l-0.6,0.9l-0.2,0.6L820,50l-0.1-0.3l-0.3,0l-0.5,0.3l-1.2-0.1l-1,0.4l-0.4-0.1l-0.7,0.6
				l-0.8,0.2l-0.5-0.1l-0.6-0.5l-0.4,0l-0.2,0.2l0.1,0.4l-1,0.4l-0.5,0.4l-1.1,0.1l-0.7,0.8l0,1.1l0,1.3l1,1.5l0.1,0.8l-0.8-1.1
				l-0.6-0.6l-0.5,0.1l-0.6-0.3l0.1,0.5l0.5,0.3l0.3,0.9l0,0.3l-0.8-1h-0.5l-0.2-1l-0.9-0.9l-0.4-0.7l-0.5,0.1l0.2,0.9l-0.1,0.5
				l-0.3-0.7l-0.6-0.4l-0.8,0.1l0,0.4l-0.4-0.4H804l-0.7,0.8l-0.6,0.1l0.4-0.6l-0.1-0.5l-0.6-1.1l0-0.8l-0.3-0.3l-0.1-0.5l-0.5-1
				l-1-1.1l-1.2-0.6l-1.2-1.2l-2.7-0.9l-1.4,0l-0.7,0.1l-1.2,0.8l-0.1,0.2l-0.6-0.1l-1,0.4l-2.1,1.1l-0.8,0.2l-0.9,0.9l-0.5,0.2
				l-1.1,0.9l-0.6,0.3l-0.7,0.6l-0.9,0.2l-0.8-0.3l-1.2,0.3l-0.8,0.4l0.6-0.6l0.9-0.5l0.1-0.5l-0.8-0.9l-1.4-0.3l-1.3-0.9l-0.4-0.2
				l-0.2,0.2l-0.5,1.1l0,0.6L777,50l-0.3,0.1l-0.3,0.7l-0.4,0.2l-0.2-0.3L776,50l0.3-0.4l-0.3-0.7l-0.7-0.3l-0.7,0.6l0.1,0.4
				l-0.4,0.6l-0.3-0.4l-0.1-0.7l-0.3-0.6l-0.3-0.8l-0.6,0.6l-0.9,0.1l-0.6,0.4l-0.4-0.2l0.5-0.4l-0.1-0.5l0-0.5l-0.2-0.6l0.1-0.2
				l1,0.8l0.5-0.3l0.1-0.6l-0.9-1.2l-1.9-0.7l-1.5-0.2l-1.6,0.4l-1.5,0.3l-1,0.8l0.2,2.8l-0.1,0.8l0.2,0.5l-0.5,0.8v0.7l-0.7,0.6
				h-0.5l-0.3-0.3l0-0.4l-0.7-0.4l0.4-0.3l0.4,0.2l0.4-0.9l-0.2-1.1l-0.6-0.2l-0.4-1l0.4,0.1l0.6-0.5l0,0.6l0.5,0.5l0.3,0.9l0.2-0.3
				l-0.1-1.4l-0.3-1l-1.9,0.7l-1.5,1l0,0.6l-0.8,0.6l-0.5-0.3l0.1-0.4l0.5-0.2l-0.6-0.6l0.4-1.2l0.6,0.2l0.3-0.1l0.6,0.3l1.9-0.8
				l0.7-0.2l-1.3,0l-0.8,0.1l-1.1-0.1l-2.4,0l-0.5,0.3l-3.2,0.2l-1.9,0l-1.2,0.2l-1.2-0.5l-1.1,0.2l-0.8,0.3l0.6,0.7h0.9l0.5,0.2
				l0.5-0.1l0.6,0.7l-0.1,0.4l-1,0.9l-0.6-0.1l-0.9,0.4l-0.1,0.8l-0.3,0.5l0.6,1.1l1,0.3l0.1-0.6l0.6-0.6l1-0.3l-0.2,1l-0.9,0
				l0.4,0.7l-0.1,0.1l0.3,0.5l-0.7,0.4l0.6,0.1l0.6-0.3l0.3,0.4l-0.1,0.6l0.7,0.7l0.7,0.1l0.9,1l-0.1,0.5l-0.4-0.3l-0.6,0.2l0.2,0.7
				l-0.3,0.2l-0.3-0.3l-0.4,0.1l-0.2-0.6l-0.9-0.7l-0.4,0.1l0.3,0.4l-0.5,0.3l-0.3-0.3l-0.3,0.3l0.3,0.6l0.1,0.9l0.6,0.2l0.7-0.4
				l0.5,0.5l-0.4,0.4l0.6,0.3l-0.5,0.4l-0.8-0.2l0,0.3l0.8,0.4h-1.2l-0.3-0.5l-0.9,0l-0.4-0.6l-0.7-0.2l-0.7-0.7h-0.9l-0.6-0.3
				l-0.5,0.1l-0.3-0.1l-1.9,0.8l-0.1,0.5l-0.2,0.3l0.4,0.4l-0.1,0.4l0.4,0.6l-0.1,0.1l-0.5-0.5l-0.4,0.2l-0.5-0.2l-2.2,0.3l-1-0.1
				l-0.6-0.7l-0.7-0.2l-0.6-0.7l-0.3-0.7l-0.5-0.2l0.1,0.4l0.4,0.9l0.2,1.5l0.8,1.7l0.6,1.3l0.6,2.9l-0.1,0.6l-0.3,0l-0.3-0.5
				l-0.1-0.4l-0.5-0.5l-0.3,0.2l0.2,0.4l-0.2,0.4l-0.8-0.2l-0.8-0.9l-1.3-0.1l-0.6-0.7l-0.5-0.2l-1.8-1.7h-0.4l-0.4,0.3l-0.5-0.1
				l-0.3-0.3l1.1-1l0.5,0l-0.4-0.3l-0.7-0.3l-0.6-0.6h-0.2l0.2,0.4l0.5,0.5l0,0.6l-0.7,0.4l-1-0.3l-1-0.8l-0.2-0.4l-1.1-0.1
				l-0.2-0.6l-0.5-0.3h1.2l1.1,0.3l0.5,0.4l0.6-0.3l0.5-0.9l-0.1-0.4l-0.4,0.2l-0.1-0.4l-0.5,0.1l0.2-0.8l-0.6-0.7l-0.4,0.2
				l-0.1-0.5l-0.3-0.2l-0.4,0.2l-0.2,0.3l-0.9-0.1l-0.1-0.8l1-0.9l-0.1-0.4l-0.5,0l-0.8,0.8l-0.1-0.6l0.4-0.5l-0.2-0.6l-0.2,0.1
				l-0.2,0.2l-0.2-0.5l-0.5,0l-0.2-0.2l-0.4-0.3l0.3-0.7l-0.3-0.2l-0.3,0.3l-0.4,0.7l-0.2-1.1l-0.5-0.4l-0.5,0.4l-0.3,0l-0.2-0.8
				l-0.5,0.5l-0.3,0l-0.1,0.3l-0.2-0.7l0-0.4h-0.8l-0.3,0.2l-0.3-0.3l-0.8,0.2l-0.5,0l-0.1,0.3l0.3,0.3l0.2,0.6l-0.4-0.1l-0.3,0.1
				v0.4l-0.2-0.1l-0.6,0.1l-0.2-0.2l0.2-0.5l0.3-0.3l-0.3-0.5l-0.5-0.1l0,0.5l-0.3,0.3l-0.3-0.4l-0.5-0.2l-0.5-0.5l-0.2,0.3
				l-0.4,0.1l-0.7,0l-0.2-0.3l-0.1,0.5l-0.3,0.2l-0.7-0.5l-0.4,0.1l0.1,0.5l0.1,0.2l-0.6,0.5l-0.3-0.2l-0.1-0.3l-0.3,0.5l0.1,0.7
				l0.4,0.4l0.1,0.6l0.3,0.1l0.1,0.7l0.6,0.1l0.3,0.4l-0.1,0.5l0.5,0.4l0.2,0.4l-0.4,0.5l-0.3-0.1l-0.2-0.4l-0.8,0.2l-0.5-0.1
				l-0.5,0.1l0.2,0.4L710,59l-0.6,0l-0.4-0.1l-1.2,0.7l-1.7,0.3l-0.7-0.2l-0.9,0l-0.2,0.1l-0.5-0.1l-2.5-0.1l-0.7-0.6l-0.3-1.1
				l0.4-0.7l0.2-0.1l0-0.4l-0.8-0.3l-0.8,0l-1.7,0.8l-2.2,0.1l-1.8,0.5l-1.2,0.2l-0.2,0.4h-0.4l-0.3,0.4L691,59l-0.7,0.7l0.4,0.7
				l0.4,0.1l0.4-0.2l0.2,0.2l-0.3,0.4l-0.3,0.1l-0.5,0.5l0,0.3l-0.2-0.2l-0.1-1.1l-0.7-0.6l-0.1-0.4l0.1-0.4l-0.6-0.5l-0.4-0.1
				l-1.1-1.1l-0.3-0.1l0,0.3l0.9,1l0.1,0.6l-0.5,0.5l-1.1,0.2l-0.4,0.2l-0.7-0.1l-1.5-1.2l0-0.5l0.3-0.4l-0.1-0.4l-0.8,0.3l0,0.6
				l-0.4,0.4l-0.9-0.6l-0.8,0l-0.5,0.5l0.1,0.9l-0.4,0.6l0.4,0.7l0.6,0.3l0.8-0.6l0.1-0.4l1-0.6l0.2,0.4l-0.1,0.6l-1,0.8l0.3,0.4
				l-0.4,0.6l-0.7,0.2l-0.6-0.3l0,0.2l0.3,0.6l-0.4,0.7l-0.8,0.7l0.3,0.5l-0.3,0.3l-0.4,0l-0.8,0.7l-1,0.1l-0.9,0.1l-0.3,0.6
				l0.3,0.7l0.9,1l0.4,0.1l-0.4,0.1l-0.7,0l-0.2,0.4l0.1,0.2l-0.3,0.5l-0.5,0.5l-0.5,0l-0.2,0.3l0.1-0.5l0.5-0.4l0.4-1.5l-0.4-0.3
				l-0.1-0.4l0.2-0.3l0-0.7l-0.3-0.8l0.3-0.7l0.5-0.3l0.2-0.5l-0.3-1.1l-0.2-0.3l0.2-0.3l0.4-0.1l0.2,0.1l0.7-0.3l0.5-1.2l-0.1-0.5
				l-0.3-0.6l0.3-1.3l0.4-0.6l0.4-0.9l-0.3-0.8h-0.2l-0.3,0.4l-0.4,0l-0.6-0.2l0.6,0l0.6-0.5l0.5-0.2l0.3-0.6l-0.1-0.3l0.3-0.4
				l0.4-0.9l-0.1-0.3l0.2-0.6l0.7-0.3l0-0.4l-0.4-0.4l0-0.3l0.4-0.7l-0.1-0.5l0.2-0.5l0.2-0.1l0.4-0.9l0-1.1l-0.2-1l-0.5-0.9
				l0.2-0.3l-0.1-0.4l-0.3-0.1l-0.3,0.2l-0.4-0.2l-0.3-0.4h-0.2l-0.3,0.6l-0.2,0.2l-0.3-0.2l-0.3-0.7l0.1-0.2l-0.3-0.2l-0.7-0.1
				l-0.4-0.5l0.1-0.2l0.7,0l1,0.4l0.4,0.4l0.3-0.3l0.2,0l0.2,0.3l0.1,0.3l0.2,0l0.1-0.4l-0.5-0.6l-0.1-0.5l-0.4-0.5l-0.4-0.2l-0.2,0
				l-0.3,0.2l-0.4-0.2l-0.1-0.6l-0.8-0.7v-0.5l-0.4-0.4l-0.3-0.4l-0.4,0l-0.4,0.3l0,0.5l0.5,0l0.4,0.3l-0.1,0.3l-0.3,0.2l0,0.4
				l-0.2,0.1l-1-1.1l0-0.4l-0.3-0.6l-0.5-0.1l-2.1-1.2l-0.6-0.2l-0.1-0.2l-1.2,0.1l-0.1-0.5l0.2-0.3l-0.1-0.3l-0.6,0.1l-0.2-0.2
				l-0.6,0.1l-0.4,0.4l-0.2-0.1l-0.5,0.5l-0.2,0.5h-0.8l-0.4-0.1l-0.7,0.7l-0.9,0.2l-0.4,0.1l-0.3-0.2H664l-0.2,0.2l0,0.6l0.4,0.2
				l0.3-0.1l0.3,0.8l0.1,1l-0.4,0.8l-0.8,0l-0.7,0.7l-1.1,0.3l-0.4-0.1l0.5-0.4l0.4-0.2l0.1-0.6l-0.7-1.1l0.4-0.8l0-0.5l0.2-0.3
				l-0.3-0.8v-0.5l-0.7-0.7L661,38l-0.4-0.3l-0.3,0l-0.1,0.6l-0.7,0.1l-0.3-0.3l-0.5,0.3l-0.5,0.7h-0.5l0-0.4l0.4-0.6l0-0.4
				l-0.4-0.1l-0.9,1.3l-1.3,0.5l-0.4-0.1l0.4-0.7l0.6-0.1l0.6-0.9l-0.2-0.6l0.3-0.5l0-0.3l0.5-0.3l-0.1-0.2l-0.8-0.2l-0.2-0.3
				l-0.1-0.8l-0.3-0.1l-0.7,0.6l-0.8-0.1l-0.3-0.8l-0.5,0l-0.5,0.5l-0.7-0.8l-0.4,0l-0.8,0.7l-0.1,0.5l-0.5,0.1l0.4,0.6l-0.5,0.5
				l-0.1,0.9l0.2,0.7l-0.6,0.7l-0.1,2.6l0.7,0.6v0.7H650l0.1,0.7l0.5,0.7l0.5,0l0.6,0.8l0.8,0.2l-0.8,0.5l0.3,0.7v0.4l1,0.1l0.7-0.3
				l0.9,0.4l0.9,0.1l0.2,0.3l-0.5,0.3l-0.5-0.1l-0.4,0.1l-0.7-0.3l-1.3,0.5l-0.4-0.3l-0.5,0.2l-0.5-0.1h-0.5l-0.4,0.4l-1.1,0
				l-0.4,0.4l0.1,0.2l0.6,0.2l0.1,0.5l0.7-0.1l0.3,0.3l0.6-0.4l0.5,0.7l0.7,0.4l0.6,1.1l-0.5,1.2l-0.8,0.4l0.5-1.3l-0.3-0.3v-0.8
				l-0.9-0.1l-0.2-0.1l0-0.4l-0.3-0.1l-0.5,0.3l-0.7,0l-0.6,0.6l0.6,0.2l-0.3,0.3l-0.6,0l0.4,0.5l-0.1,0.3l-0.8,0.6l-0.1-0.6
				l-0.2-0.1l-0.4,0.3l0.2,0.6l-0.2,0.6h-0.5l-0.1-0.9l-0.4-0.5l-0.1,0.2l0.1,0.5l-0.5,0.8l-0.2,0.8l-0.6-0.4v-0.3l0.6-1.3l-0.2-0.4
				l-0.6-0.1l-1.5,0.5l-0.5-0.2l-0.8,0.6l-0.5-0.1l-0.5-0.3l-0.7,0.1l0.6,0.6l-0.4,0.4l-0.2-0.1l-0.1-0.3l-0.2-0.1l-0.2,0.5
				l-0.3,0.2l0,1.2L639,55l0.6-0.6l0.3,0.3l0.9-0.6l0.3,0.1l-0.1,0.5l-1.6,0.7l-0.3,0.6l-0.7,0.4l-1.2,0.2l-0.1,0.4l0.2,0.3
				l-0.9,0.2l-0.5-0.2l-0.3,0.1l-0.1,0.5l-0.3,0.1l-0.7,0.2l-0.2,0.3l0.3,0.5l-0.2,0l-0.2,0.5l-0.3,0.1l-0.3-0.4h-0.2l-0.5,0.8
				l0.1,0.3l-0.2,0.2v0.5l-0.5,0.6l0.1,0.5l-0.7,0.2l-0.9,0l-0.5,0.4l0,0.5l0.4,0l0.3-0.4l1.3,0.3l-0.3,0.4l-0.6-0.1l-0.1,0.2
				l0.4,0.3l-0.1,1.1l-0.5,0.4l0.1,0.4l-0.1,0.5l-0.6-0.9l-0.5,0.1l-0.6-0.8l-0.4-0.1l-0.1,0.2l0.4,0.3l0,0.5l-0.3,0.4l0.4,0.6
				l0.5-0.3l0.9,0.3l0.6,0.1l0.1,0.5l0.5,0.4l0.5-0.1l0.3-0.1l0.2,0.3l-0.6,0.3l-0.7,0l-0.5-0.5l-0.3,0.2l-0.1,0.4l-0.3,0.2l0.7,0.8
				l0.4-0.2l0.9,0l0.3,0.8l0.3,0.3l0.3-0.3l0.9,0l-0.2,0.5l0.8,0.5h0.7l0.4,0.8l-0.4,1l-1.1,0.7l-0.4,0.6l0,0.4l1,1l0.6,0.3l-1,0
				l-1.2-0.9l0-0.6l0.5-1.1l0.4-0.3l-0.1-0.4l0.3-0.6l-0.2-0.2l-1.9,0.8l-1,0.4l-0.3,0.7l-0.7,0.3l-0.5-0.2l-0.7,0.1l-0.8,0.7
				l-2.1,0.8l-1.5,0.3h-0.7l-0.7,0.7l-0.8,0l-0.4,0.3l0.7,0.5l0,0.6l-0.2,0.6l0.3,0.4l0.4,0l0.1,0.3l-0.2,0.4l1,0.6l0.7,1.3l-0.1,1
				l0.2,0.5h0.3l0.1,0.8l0.8,0.5l0.7-0.1l1.9,0.1l0.7-0.4v0.4l0.3,0.5l0,0.7l0.8,0.4l0.4,0.8l1.5,0l1,0.6h0.4l0.6,0.7l0.1,1.4
				l0.2,0.6l-0.1,0.7l0.6,0.8l0.5,0.4l0.9,1.3l0.3,1.2l0.8,0.7l0.2,0.6l-0.6,1.2l-0.3,0.1l-0.4-0.2l0.5,0.8l0.9,0.1l0.5,0.4l1,1.1
				l1,0.4l0.1-0.1l0.4,0.1l0.9-0.7l0.9-0.2l1.1,0.7l0.8,0.3l0.5,0l0.3,0.7l0.1,1.1l-0.3-1l-0.4-0.5h-0.8l-1.2-0.9l-0.6,0l-0.8,0.9
				l0,0.8l0.1,0.4l-1.1-1.2l-1.1,0l-0.6-0.5l0-0.6l-0.5-0.7l-0.9-0.2l-0.9,0.1l-1-0.7l0.3-0.2v-0.7l0.4-0.3l-0.1-0.4l-0.1-1.3
				l-0.3-1l-0.4-0.3l-0.3,0.9l-0.4,0.2l0.1,0.7l-0.3,0.4l0.2,0.4l-0.2,0.6l-0.4,0l-0.3-1.7l0.4-0.5l-0.1-0.6l-0.9-0.7l0-0.9
				l-0.4-0.6l0-0.7l0.8-0.5l0-0.4l-0.1-0.5l0.1-1l-0.7-0.1l-0.2,0.1l-0.4-0.4l-1.2,0.7l-1.5,0.2l-0.8,0l-1.2-1.2l-0.6-0.3l-0.1-0.5
				l-1.6-0.2l-0.7-0.5l-0.7-0.7l-1.9,0l-0.5-0.3l-0.6,0.4l-0.7,1.1l-0.1,0.6l-0.3,0.2l-0.3-0.2l-0.1,0.3l0.4,0.4l0.9-0.6l1,0.3
				l0.5,1l-0.6,1.1l-0.8,0.2l-1.3-0.5l-0.8-0.9h-0.4l-0.8,0.6l-0.3,0.3L617,89l0.8,1.3l0.3,0l0.2,0.7l1,0.8l0.9,0.1l0.5,0.4l1.4,0.1
				l0.3-0.4l0.3,0l0.1,0.4h0.9l0.3,0.8l0.4,0.1l0.1,0.5l1.1,0.1l0.5-0.3l-0.4,0.5l-1.2,0.2l-0.7-0.4l-0.5-0.1l-0.8-0.8l-0.5-0.1
				l-0.5,0.3l-0.6,0.1l-0.5,0.6l-0.2-0.4l-0.5-0.4l-0.5,0.2h-1l-0.8-0.5l-0.7,0.1l-0.3-0.4l0.5-0.3v-0.4l-0.5-0.4v-0.5l-0.8-0.7
				l-0.3-0.6l0.3-0.7l-0.4-0.8l0.1-1.2l-0.6-0.6l-0.1-0.9l-0.3-0.3l-0.4-0.1l-0.1-0.7l-0.8-0.6l-0.4,0.2l1.2,2.3l0.4,1.5L614,89
				l-0.9,1.1l-0.6,0.6l0,0.3l0.4,0.4l0.2,0.9l-0.4,1.1l0,0.7l1.1,0.6l1.3,1.1l0.3,0.8h0.7l0.6,0.7l0.5,1.1l-0.2,1.8l-0.1,0.7l0.6,1
				l-0.1,1.2l0.3,0.7l1.1,1.1l0.1,0.6l-0.1,0.7l0.3,0.4l0.8,0.2l0.8-0.5l1,0.3l0.4-0.3l0.2-0.8l0.7-0.7l0.7,0.2l0.5-0.2l1,0.6
				l0.6-0.2l0.3,0.6l1.3,0.5l0.9,0l0.6,0.8l0,0.4l0.8,0.5l0.2,0.4l0.2,0.1l0.1,0.4l0.4,0.3l-0.4,0.4l-0.5,0.1l-0.1,0.9l0.4,0.8
				l0.3,0.2l-0.2,0.5l0.3,0.5l0.6,0l0.4,0.5h0.8l0.4-0.7l0.2,0.4l0.5-0.1l0.4,0.1l-0.3,0.2l-0.2,0.3l-0.8,0.1l-0.5,0.1l-0.8,0.2
				l-0.7-0.5l-0.7,0l-0.4-0.6l0.3-0.3l-0.1-0.7l-0.5-0.7l-0.1-0.6l-0.5-0.3l0.1-0.7l-0.7-0.9h-0.3l-0.2-0.4l-0.9-0.4V107l-0.9-0.9
				l-0.8,0l-1.1,1.1l-0.7,0.1l-0.4,0.7l-0.9,0.7l0.1,1.6l0.3,0.5l1.2,0.7l0.8,2L624,114l-0.9,1.5l-0.1,0.9l0.5,0.8l-0.5,1.3
				l-0.1,0.5l-0.8,0.8l0,0.4l-0.5,0.3l-0.4,0.5v0.7l0.3,0.4l0,0.5l-0.8,0.5l-1.1-0.2l-0.2-0.3l-1,0l-1,0.2l-0.9-0.3l-2.1-0.3
				l-0.7-0.7l-0.3-0.5l-0.9,0.2l-0.3,0.5l-0.2-0.2l-0.4-0.1l0.4-0.7l0.8-0.1l1.6-0.2l0.3-0.4l1.3,0.7l0.4,0l0.1-0.4h0.6l0,0.4
				l-0.8,0.5l0.5,0.4l1-0.1l0.4-0.5l0.6-0.3l-0.1-0.4l-0.6-0.6v-0.4l0.7,0.3l0.3-0.4l0-1.2l0.7-0.4l-0.1-0.3l-0.4,0.1l-0.1-0.2
				l0.6-0.3l0-1.2l-0.2-0.3l0.4-0.5l0-0.3l0.5-0.4l-0.1-0.9l-0.6-0.6l-0.4-1.1l0.1-0.8l0-0.6l0.3,0.1v-0.4l-0.8-0.8l-0.4-0.1
				l-0.4-0.5l-0.9-0.3l-1.1-1.4l-0.2-1.2l-0.3-0.3l0.3-0.5l-0.6-0.4l-0.3-0.6l0.2-0.7l-0.9-1.3v-0.8l-0.6-0.7l0.2-0.4l0-0.4
				l-0.5-0.5l-0.2-1.7l-0.4-0.6l-0.7-0.5l-0.2-1l-0.3-0.2l-0.4,0.2v-0.1l-0.7-0.2l-0.4-0.7l-0.6-0.5l-0.2-0.7L610,93l0.1-0.5
				l-0.3-0.5l0.1-0.4l-0.3-0.4l0.3-1.5l-0.4-0.9l0-1l-0.3-0.3v-0.7l-0.4-0.6l0.4-0.2l-0.2-0.5l-0.6-0.1l-0.8,0l-1.7-0.7l-0.7,0
				l-0.3,0.3l-0.5-0.2l-0.5,0l-0.7,0.4l-0.8,0l-0.6,0.3l-0.2-0.2l0.2-0.3l-0.5-0.2l-0.4,0.1l0.1,1.2l-0.2,0.9l0.5,0.6l-0.2,0.2
				l-0.3,1l0.3,0.3l0,0.7l0.2,0.4l-0.2,0.4l0.1,0.8l0.4,0.7l-0.4,0.7l0.1,0.5l0.3,0.7l-0.2,0.3l-0.6,0.4l-1,1.5l-0.4,0.3l0.1,0.5
				l0.4,0.5l-0.3,0.5l-0.1,0.9l0.7,0.6l0.4-0.2l0.4,0.4l0.4,1l0.6,0l0.5,0.5l-0.4-0.1l-0.4,0.5l0.1,0.7l0.8,0.6v0.6l-0.4,0.4
				l-0.4-0.3v0.4l0.5,1.2l0.4,0.4l0.2,0.9l0.3-0.4l0.5,0.3l0.7,0l0.6,0.4l0.5-0.7l0.3,0.3v1l0.4,0.5l0.3,0.1l1.1,1.3l0.6,0.2
				l0.4-0.3h0.5l0.1,0.2l0.5,0l-0.5,0.4l0,1.5l-0.2,0.4l0.4,0.6l-0.1,0.3l-0.3,0l0.1,0.8l0,0.4l-0.6-0.1l-0.7-1.2l-0.8-0.6l-0.9-0.2
				l-0.4-0.8l-0.6-0.5l-1.5-0.1l-1.5-0.9l-0.9-0.1l-0.1-0.5l-0.4,0l-0.5-0.4l-0.8,0.3l-0.5,0.5l-0.3-0.6l0.2-0.3l-0.1-0.4l-1.8-0.7
				l-0.8-0.5l-2.7-0.1l-2.1,0.3l-0.5-0.2l-0.5,0.1l-0.5-0.3l-0.2,0.1l-0.5-0.1l-0.3,0.3l0.3,0.6v0.5l-0.6,0.2v0.2l0.4,0.6l0.4,0.2
				l0.3,1l0.3,0.5l0.1-0.5l0.3,0l0.5,0.9l0.1,0.5l0.6,0.2l0.8,0.8l-0.7-0.1l-0.3-0.2l-0.4,0l-0.2,0.9l-0.5,0.4l-0.8-0.3l-0.4,0.3
				l0,0.3l0.6,0.7l0.2,0.2l0,0.3l-0.3,0.3l-1.4-0.1l-0.3-0.4l0.1-0.4l-0.3-0.6l0.5-0.4l0-0.3l-0.6-0.5l-0.4-0.2l0.4-0.5l-0.1-0.2
				l-0.4,0.2l-0.3,0l-0.7,0.7l-0.4,0.1l-0.5,0.5l-0.1,0.3l-0.7,0.1l-0.3,0.3v0.4l-0.4,0.3h-1.2l-0.4-0.2l-0.3,0.1l-0.4,0l-0.3-0.3
				l-0.7,0.5l-0.2,0.3l-0.6,0.1l-0.5,0.5l0,0.3l0.4,0.3l-0.1,0.3l0.1,0.3l-0.2,0.2l-0.4-0.3l-0.2-0.4l-0.3,0l-0.6,0.7l-0.3,0.7v-0.7
				l-0.6-0.2l-0.4,0.3l-0.4,0l-0.4,0.1l-0.5-0.1l-0.1-0.5l0.6-0.5l0.6,0l0.2-0.4l-0.4-0.6l0.1-0.2l0.4-0.2l-0.6-0.6l-0.3,0.2
				l-0.4-0.1l-0.2-0.3l1-0.5l0.4,0l0.6-0.3l-0.1-0.2l-1,0.1l-1.5,0.6l-0.4,0.4l0.2,0.3l0.2,0.5l0.2,0.3l-0.3,0.4l-0.3,0.1l-0.5-0.6
				l0.2-0.3l0.2-0.1l-0.1-0.4l-0.2,0l-1,1l0,0.3l0.4,0.4l0.3,0.1l-0.1,0.4l-0.6,0.6l-0.3-0.2l0.2-0.3l-0.1-0.4l-0.2,0l-0.1-0.4
				l-1.1,0.3l-0.1,0.4l-0.8,0.4l-0.6-0.1l-0.3,0.2v0.3l-1.1,1.4l-0.3,0.1l-1,1.3l-0.5,0.3l-0.4-0.4h-0.3l0.2,0.5l0.7,0.5l0.1,0.4
				l-0.9-0.3l-0.2,0.3l-1.5,0.2l-0.3,0.2l0.4,0.5l0,0.5l-0.4,0.6l0.3,0.8l-0.2,0.6l-1,0.4l-0.1,0.3h-0.6l-0.3,0.3l-0.3-0.6l-0.7,0.5
				h-0.5l-1.1-1.5l-1.2-1l-0.4-0.2l0-0.8l0.1-0.3l0.3,0.2l0.2-0.4l-0.1-0.3l0.3-0.3l0.9,0l0.3-0.4l1,0l0.1-0.4l-0.8-1L560,119
				l-0.6-0.1l-0.6-0.7l0-0.5l-0.7-0.4l-1.5-0.1l-1,0.1l-0.4,0.2l-0.7,0l-1.1-0.8h-0.6l0,0.3l1.4,1.1l0.8,0.6l0.4,1.2v0.6l0.3,0.4
				l-0.2,0.2l0,0.5l0.1,0.4l-0.2,0.2v1.3l-0.2,0.7l0.2,0.7l0.8,0l0.6,0.4l0.4,0.4l-0.1,0.3l0.1,0.4l-0.1,0.3l0,0.3l0.3,0.2l-0.2,0.4
				l0,1.3l-0.2,0.3l0.4,0.7l0.1,1l-0.4-0.3l-0.2-0.7l-0.7-0.5l-0.7,0.6l0.1-0.6l-0.3-0.4l-0.9-0.1l-0.8,0.1l-0.5-0.4l-0.7-0.1
				l-0.4,0.3l-0.6,1.3l-0.9,0.7l-0.7,0.1l-0.5,0.4l-0.2,0.7l-0.6,0.8l-0.8,0.6l-0.1,0.5l0.3,0.8l1.2,1.3l0.7,1.1l-0.4,0.5l-0.4,0
				l0,0.6l-0.5,0.4l-0.3,0.5l-0.7-0.7l-1.8-0.8l-0.6-0.1l-0.2-0.4l-1,0l-0.5-0.4l-0.4-0.6l-0.8-0.1l-0.6-0.4l-0.6,0l-0.1,0.4
				l0.2,0.4l-0.1,0.3l0.2,0.3l-0.4,0.4l-0.5,0l0.4,0.8l0.1,0.6l0.8,0.4l0.5,0.7l0.7,0.3l0.5-0.2l0.3,0l0.4-0.3l0.1,0.4l0.6,0.2
				l0,0.2l-0.2,0.3l0.4,0.4l0,0.9l-0.3,0.1l-0.5,0l-0.6,0.7l-0.3,0l-0.5-0.5l-0.8,0l-0.4-0.3l-0.9,0l-0.3-0.2l-0.1-0.7l-0.5-0.3
				l-0.4-0.5l-0.2,0l-0.5,0.4l-1.1-0.4l-0.3-0.5l-0.3-0.3l0.2-0.4l-0.1-0.6v-0.5l-0.5-0.4l0-0.5l-0.8-0.7l0-0.6l-0.4-0.1l0.1-0.5
				l0.4-0.1l0.1-0.9l0-0.5l-0.2-0.1l0-0.4l0.2-0.3l-0.3-0.1l-0.6-0.8l-1.3-0.5l-0.3,0.3l-0.3-0.3H533l-0.2,0.2l-0.7-0.1l0.2-0.3
				l0.5-0.1l0.1-0.4l-0.6-0.1V130l0.4-0.2l-0.4-0.3l-0.4,0.3l-0.9,0.2l-0.1-0.1l0.3-0.3l0.5-0.3l-0.2-0.2l-0.8-0.2l-0.1-0.4
				l-0.7-0.4l-0.1-0.8l-0.6-0.4l0.1-0.2l0.5,0l0.1,0.2l0.7,0.1l0.1,0.5l1.2,1l0.4,0l0.1-0.2l0.6,0.4h0.9l0.1-0.2l0.4,0.4l-0.3,0.2
				l0.2,0.2v0.3l0.5,0l0.3-0.3l0.9,0l-0.2,0.1l0.5,0.1l0.5-0.1l0,0.3l0.7,0.7l0.4-0.3l0.5,0.1l0.1,0.3l0.8,0l0.5,0.1l0.4-0.3
				l0.7,0.5l0.9,0.3l1.6,0.1l1.3-0.1l0.2-0.2h0.8l0.4-0.3l0.9-0.2l0.8-0.4l1.1-1.4l0.1-0.4l0.6-0.8V127l0.2-0.4l0.1-0.8l0-0.7l0-0.7
				l-0.2-0.2l-0.2,0.1l-0.4-0.7l-0.3-0.2l-0.2-0.7l-0.6-0.6l-0.5-0.1l-0.1,0.3l-0.6-0.3l0.1-0.4l-1.1-0.8l0-0.5l-0.6-0.6h-0.3
				l0.1,0.3l0.4,0.7l-0.4,0.2l-0.7-0.6l-0.4,0l-0.8-0.7h-0.3v0.2l0.1,0.3l-0.4-0.1l-0.7-1l-0.5-0.2l-0.4-0.5l-1.9-1.3l-2.8-1.5
				l-0.7-0.3l-0.1,0.2l-0.6-0.4l-0.7-0.1l0.1,0.3l-0.4,0.2l-0.5-0.2l-0.8,0l-0.4-0.5l-0.5-0.2l0,0.1l0.3,0.4l-0.1,0.3l-0.4-0.3
				l-0.6,0.1l-0.2,0.2l0.1,0.4l-0.4,0.7l-0.6,0.1l0.3-0.5l0.3-0.2l-0.2-0.2h-0.4l0.1-0.3l0.1-0.2l-0.2-0.1l-0.3,0.3l-0.5,0.6v-0.4
				l0.1-0.2l-0.1-0.2l-0.2,0.3l-0.1,0l-0.1-0.4l-0.5-0.2l-0.4,0.4l-0.1-0.5l-0.2-0.2l-0.4,0.4l-0.2-0.5l0-0.6l0.3-0.4l0,0.3l0.4,0.4
				l0.7-0.1l0.4,0.2l0.5-0.4l0-0.3l-0.3-0.2l-0.1-0.2l-0.4-0.2l-0.2,0.2l-0.3-0.3l-0.3-0.4l-0.6-0.3l-0.5-0.1l-0.1,0.2l0.2,0.3
				l0.2,0.1v0.2l-0.3,0.1l-0.3-0.1l0,0.2l0.5,0.3l-0.2,0.1l-0.4,0l-0.2,0.4l-0.1,0.7l-0.2-0.3l0-0.5l-0.2-0.2l-0.6-0.1l0,0l0,0.6
				l-0.3,0.4l-0.6-0.2l-0.5,0l0.1,0.8l-0.4,0.6l-0.7,0.1l-0.7,0.7l0,1l-0.3,0.1l0,0l-0.7,0.3l-0.5,0.3l0.4,0.2l-0.1,0.7l-0.2,0.9
				l0.4,0.5l0.5,1.3l0.4,0.1l0.8,0.4l0.4,0.6l0.2,0.5l1.3,0.8l0.3,0.3l-0.3,0.8l-0.6,0.9l-0.5,1.3l0.7,0.7l0.2,0.8l1.1,2.1l1.2,2.9
				l-0.5,0.1l-0.1,1.8l0,0.5l0.5,0.1l-0.4,0.5v0.9l0.4,0.5l0.7,0.1l0.2,0.5l-0.2,0.3l0,1l0.3,0.6l0.8,0.6l0.1,0.8l-0.5,0.7l-0.2,0.8
				l1.3,1.8l0.7,0.2l1.2,1.4l0.2,0.8l-0.8,2l-1.1,1.9l-0.6,1.4l-0.8,1.2l-0.7,1.3l-0.7,0.3l-1.3,1.2l0.1,0.8l0,0
				c0-0.1,0.1-0.1,0.1-0.1c0.1,0,0.8-0.4,0.8-0.4l0.6-0.1l-0.4,0.3l0.2,0.4v0.5l-0.6-0.5l-0.1,0.4l0.7,0.7l0.7,0l0.4,0.5h0.6
				l0.3-0.1h0.4l0.5,0.7l-0.3,0.4l-0.8-0.3l-0.3,0.1l-0.1,0.5l-0.7,0.5l-0.5-0.3l-0.3,0.3l0,0.5l-0.5,0.2l-0.2-0.5l-0.3,0.1v0.3
				l0.3,0.4l-0.2,0.6l0,0.1l0.3,0.4l0,0.1l-0.1,0.2l-0.4,0.6l-0.2,0.8l-0.3,0.2l-0.2,2.1l1.3,2.3v0.6l-0.4,0.4l0.1,0.5l-0.4,0.6
				l0.6,0.1l0.1,0.5l-0.1,0.3l0.2,0.2l0.2,0.5l-0.1,0.4l0.4,0.7l0.2,0.3l0.3,0.8l0.4,0.5l0.1,0.8l0.2-0.1l0.5,0.3l0.6-0.4l0.6,0.9
				l0.7-0.3l0.6,0.1l0.5,0.9l0.7-0.6l0.8-0.2l0.3,0.4h0.4l1.2,0.4l0.2,0.6l-0.2,0.7l0.5,0.6v0.8l0.6,0.7l0.3,0.8l0.7,1l0.6,0.4
				l0.2,0.9l0.9,0.2l1,0.9l0.1,0.5l0.7,0.5l-0.3,0.3l-0.6,0.9l-1.4,0.2l-0.6-0.6l-0.2,0.4l0,0.7l0.6,0.9l-0.1,0.8l0.6,0.7v0.7
				l0.4,0.1l0.6-0.1l-0.1-0.6l0.4-0.4l1.4,0.5h1.4l0.7-0.4l0.6,0l0.4,1.3l0.6,0.5l-0.3,0.6l0.8,1l1.5-0.2l0.6,0.5l0.1,0.6l0.5,0.1
				v0.8l0.3,0.9l1.3,1.2l0.5-0.6l0.8,0.4l0.6-0.2l0.6,0.1l0.9-0.7l0.4-0.1l0.6,1.4l0.9,0.5l0.3,0.5l0.4-0.4l1,0.2l0.7,0l0.5,0.3
				l0.6-0.1l0.7,0.4l0.8,0.2l0.4-0.4l0.2,0.6l0.4,0.2l0,0.7l-0.5,0.6l-0.6,0.1l-0.2,1.2l0.8,0.6l0.1,0.8l-0.3,1l0.1,0.7l-0.5,0.4
				l-1.3,0.1l-0.6,1l-0.4,0.2l-0.2,1.3l0,0l0.1,0l0.6,0.1l0.6-0.4l0.7-0.1l0.2,0.3l-0.1,0.4l-1.5,0.8l-0.6,0.4l0.3,0.3h0.4l-0.4,0.4
				l-0.7-0.1l-0.9,0.1l0.4,0.8l0.4,0.4l0.3-0.3l0.1,0.3l0.6,0.2v0.2l-0.4,0.1l-0.2,0.3l-0.4-0.1l-0.2,0.2v0.2l-0.6,0.6v0.6l0.3,0.2
				l-0.1,0.8l-0.5-0.1l-0.1,0.1l-0.4-0.3l-0.6-0.1l0,0.3l0.2,0.4l-0.4,0.2l-0.4,0.3l0.7,0.1l0.3,0l0.8,0.6l0,0.4l0.6,0.6l1-0.1
				l1.1,0.7l0.7,0.2l1.8,1.3l0.4,0.7l0.5,0.2l0.2,0.3l0.4,0.4l0.4,0l0.2,0.4l0.5,0.2h0.3l0.4,0.7l0.5,0.1l0.3,0.1l0.3-0.2l0.7,0.6
				l0,0.4l0.7,0.1l0.6,0.9l0.3,0.4l0.1,1.2l0.5,0.9l-0.2,0.3l0.1,0.5l-0.1,0.1l0,0l0.3,0l0.1,0.5L568,229.8z"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="791.4,222.6 791.8,221.9 791.8,221.4 792.5,220.9 793,220 793.5,219.8 793.9,218.4 794.2,217.9
				794.1,217.6 794.2,216.7 794.7,216.1 795.2,216.9 795.7,217.1 796.1,217.5 796.5,217.3 797.1,217.5 798.3,217.4 799,217.5
				799.4,216.7 799.3,216.3 798.7,215.7 798.1,215.3 798.6,215 799.2,214.9 800.3,214.1 800.3,213.5 800.8,212.8 801.3,212.8
				801.5,212.2 801.3,211.8 801.4,211.3 801.4,210.7 801.7,210.5 802.2,210.9 802.2,211.5 802.4,211.8 803.3,212 803.5,212.2
				803.5,212 803.5,211.7 803.3,211.6 803.2,211.1 803.3,210.9 803.6,210.7 804.2,210.7 804.4,210.7 804.4,210.2 804.4,209.9
				804.4,209.6 804.5,209.3 804.5,208.8 804.5,208.3 804.1,208.1 804.1,207.1 804.1,206.6 804,206 804,205.5 803.7,205 803.5,204.7
				803.4,204.2 802.7,203.2 802.5,202.8 802.6,202.5 803,202.3 803.3,202.3 803.6,201.9 803.7,201.5 804.2,200.7 804.4,200.7
				804.8,200.8 805.2,200.9 807,201.3 807.2,201.3 807.5,201.3 807.8,201.1 807.7,200.7 807.5,200.3 807.5,200.1 807.6,199.8
				807.5,199.6 807.4,199.2 807.7,198.7 807.8,198.5 807.8,198.1 807.6,197.8 807.7,197.6 808.1,197.4 807.9,197.2 807.9,196.8
				807.7,196.6 807.8,196.2 808.1,196 808.1,195.8 808,195.5 807.8,194.9 807.7,194.2 807.9,194.2 808,194.1 808,193.8 807.9,193.6
				807.9,193.3 807.6,193.2 807.5,192.9 807.6,192.5 807.7,192 807.5,191.9 807.3,191.6 807.3,191.3 807.7,190.9 808.1,190.8
				808.2,190.6 808.2,190.1 808.4,189.5 808,189.3 807.8,189 807.7,188.6 807.2,188.1 807.1,187.8 807.4,187.6 807.1,187.1
				807,186.8 806.5,186.7 806.2,186.5 805.7,186.3 805.4,186.6 805,186.6 804.6,186.9 804.6,187.3 804.3,187.4 804,187.5
				803.9,188.1 803.3,188.1 802.9,188.1 802.8,188.5 802.8,189 802.4,189.1 802.3,189.7 802.3,190 802,190.1 801.7,190.4
				800.9,190.6 800.6,190.7 800.2,190.6 800,190.8 799.7,190.9 799.5,190.5 799.3,190.2 798.9,190.2 798.5,190.4 798.1,190.6
				797.9,190.3 797.5,189.7 797.2,189.6 796.7,188.9 796.7,188.5 796.8,188.3 796.9,187.8 796.8,187.4 796.7,186.9 796.2,186.9
				796.1,186.6 796.1,186.2 796.4,185.9 796.4,185.5 796.2,185.4 796,185.4 795.7,185.7 795.4,185.7 795.1,185.8 794.7,185.7
				794.4,185.5 794.1,185.5 794,185.3 793.4,185.1 793.3,184.8 793.1,184.5 792.9,184.5 792.6,184.3 792.6,184 792.3,184 792,183.6
				791.9,183.3 791.6,183.1 791.4,183.2 791.2,183.5 791,183.4 790.7,183.5 790.6,183.8 790.3,183.5 790.1,183.3 789.8,183.2
				789.2,183.1 789,183 789.2,182.7 789.2,182.6 788.8,182.6 788.5,182.8 788,182.7 787.7,182.9 787.5,182.7 787.2,182.8
				786.8,182.7 786.6,182.4 786.2,182.2 785.5,181.6 785.2,181 785.3,180.7 785.2,180.2 784.9,180.1 784.5,179.9 784.5,179.4
				784.3,179.2 784.2,178.6 784,178.1 783,177.5 782.5,176.8 782.4,176.4 782.2,176 781.9,176.1 781.7,176 781.8,175.7 781.8,175.5
				781.5,175.2 781.3,174.7 781,174.6 780.9,174.2 780.6,173.8 780.3,173.3 779.7,172.9 779.7,172.6 779.8,172.2 779.7,171.9
				779,171.9 778.9,171.7 778.9,171.4 778.8,171.1 778.7,170.7 778.5,170.4 778.3,170.3 778.3,170 778.1,169.8 777.8,169.8
				777.3,169.7 777.2,169.5 777.4,169.2 777.3,168.9 776.9,168.9 776.6,169.1 776.5,168.9 776.2,168.9 776.1,168.6 776.1,168.3
				776,168 775.6,167.9 775.3,167.9 775,167.6 774.8,167.7 774.4,167.7 774.2,167.6 773.9,167.8 774,168.1 773.8,168.2 773.3,168
				773.1,167.8 772.7,167.9 772.1,167.9 772,167.7 771.6,167.4 770.7,167.3 770.4,167 769.9,167 769.6,166.9 769.5,167 768.7,167.1
				768.5,167.5 768.3,167.5 768,167.7 767.4,167.7 767.1,167.8 766.5,167.7 766.2,168 765.7,168 765.5,168.4 765.1,168.6
				764.7,168.6 764.6,168.7 764.2,168.7 763.9,168.8 763.1,168.9 762.8,169.2 762.8,169.5 762.4,170 762.3,170.5 762.1,170.8
				762.1,171.1 761.9,171.3 761.9,172 762.1,172.2 762.3,172.3 763,171.9 763.3,171.7 763.7,171.8 764.1,172.5 764.3,173
				764.7,173.3 764.7,173.7 764.8,174 764.8,174.7 764.4,175 764.1,175.5 764,176.1 763.6,176.4 763.3,177 763.3,177.4 763.5,177.9
				763.4,178.2 763.5,178.8 763.9,179.2 763.8,179.7 763.5,179.9 763.4,180.2 763.6,180.7 763.6,181.5 763.4,181.7 763.5,182.5
				763.8,182.5 764,182.7 764.2,182.5 764.4,182.7 764.5,183.2 764.3,183.8 763.9,184.2 762.9,184.4 762.3,184.8 761,186.1
				760.6,186.1 760.2,185.8 759.4,185.7 758.9,185.8 758.8,185.6 758.4,185.5 758.1,185.6 758.2,185.6 757.6,190 757.7,190.9
				757.4,191.7 757.5,192.3 757.2,193.5 757.6,194.3 758.9,195 759.8,194.3 760.9,194.3 762.1,194.5 762.7,195.1 763.4,194
				763.3,193.4 763.3,192.9 764.1,192.7 764.4,192.4 765.6,192.7 766.4,193.6 767.4,194.5 768.2,195.5 769.2,196.3 769.2,196.8
				769.4,197.1 769.4,197.6 769.2,198 769.2,198.3 769,198.7 768.5,198.6 768.3,198.3 767.7,198.4 767.4,198.6 766.6,198.3
				766.1,198.4 765.6,199.1 764.8,199.7 764.4,200 763.9,199.6 763.7,199.7 763.7,200.2 763.5,200.5 763.1,200.5 762.8,200.5
				762.6,200.8 762.1,201.6 762,202.4 762,203 761.7,203.3 761.1,203.5 759.9,204.3 759.2,204.3 758.5,204.2 758.2,204.4
				757.7,205.5 757.2,205.9 756.5,206.4 756.2,206.8 756,207.2 755.7,207.3 755.1,207 754.5,206.9 753.6,206.5 752.9,206.1
				752.3,206 751.2,206.3 750.5,206.7 750.1,207.3 750.1,208.6 750.1,209.2 750.1,209.5 751.4,210.4 752.5,211.1 752.5,211.4
				752.2,211.9 751.9,212.5 750.6,213.8 749.9,215 749.5,215.9 749,215.9 748.2,216.2 747.5,216.3 746.8,216.8 746,217.3
				745.2,217.4 744.1,217.5 743.3,217.7 742.4,218 740.4,218.7 738.8,219.2 738.1,220.1 736.9,221.1 736.4,221.5 735.7,221.5
				734.9,221.3 734.9,221 734.8,220.5 733.6,220.9 732.6,221 731.6,220.5 730.8,220.4 729.1,219.8 727.3,219 726.4,218.1 725.7,218
				723.7,217.8 722,217.9 721.5,217.8 721.2,217.9 721.1,218.3 720.1,218.6 718.8,218.7 716.5,218.5 714.8,218.6 713.5,218.6
				712.4,218.7 711.9,218.7 711.4,218.6 710.8,217.4 710.5,216.8 710,215.9 709.5,215.3 709.2,214.5 709.1,214.2 708.7,213.7
				708.3,213.6 708,213.6 707.9,213.2 707.8,212.7 707.6,212.7 707.4,212.7 706.6,212.7 705.9,212.3 704.9,211.6 704.6,211.5
				704.3,211.5 703.8,211.5 703.6,211.1 702.7,210.6 700.8,210.1 700.6,210.2 700.4,210.4 699.7,210.5 698.4,210.5 695.7,209.9
				695.1,209.6 694.5,208.6 694.4,208.2 694.4,207.8 694.6,207.5 695,207.2 695.1,206.7 694.8,206.3 694.7,205.6 694.8,205.3
				694.8,204.7 694.5,204.3 694.2,203.7 693.8,203.5 693.3,203.2 693.2,202.7 692.9,202.3 692.7,201.8 692.6,201.3 692.3,200.9
				691.9,200.5 691.5,200.4 691.3,200.1 690.8,199.9 690.4,199.9 690.1,200.2 689.8,200.3 689.5,200.2 689.1,199.7 688.9,199.5
				688.4,199.5 687.9,199.7 687.7,200 687.6,200.3 687.3,200.3 686.7,200 686.6,199.6 686.6,199.4 686.2,198.9 685.6,198.5
				685.2,198.1 684.9,197.9 684.6,197.6 684.5,197.3 684.5,196.9 684.3,196.6 684.2,196.7 684.2,196.9 684,196.9 683.8,196.5
				683.6,196.4 683.6,195.7 683.6,195.5 683.4,195.5 682.8,195.3 682.4,195.3 682.5,195.4 682,195.9 681.6,196.1 680.8,196.9
				680.8,197.4 681,197.7 680.6,198.3 679.8,198.6 679.3,198.9 679.2,199.6 679.2,200.8 679.8,201.9 680.3,202.6 680.2,202.9
				679.5,203.7 678.9,203.9 678.4,204.5 678,204.6 677.8,204.5 677.6,204.2 677.2,204.2 676.1,204.5 675.3,204.4 674.3,204
				673.6,203.9 673.3,204 673.1,205.2 672.8,206 672.8,206.7 672.5,208.3 672.5,209.5 672.4,209.9 672.7,210.2 673.3,210.5
				673.1,211 673,211.5 672.7,211.5 672.3,211.7 671.9,211.7 671.6,211.4 671.2,211.5 670.6,211.7 669.3,212 668.5,212.3
				668.1,212.3 667.7,212.1 667.3,212.3 666.8,212.8 666.8,213.2 667.2,213.5 668,213.5 668.6,213.6 668.7,213.8 668.3,214.2
				668.5,215 668.6,215.4 668.8,215.8 668.9,216.4 669.4,217.2 669.5,217.7 670.1,218.1 670.3,219.3 670,219.6 669.8,220.1
				670.3,220.6 670,220.8 670,221.1 669.4,221.4 669.5,222.2 668.9,222.5 667.7,222.1 666.5,220.8 666,220.9 664.9,220.4
				663.2,220.3 662.3,220.6 660.9,220.3 659.6,220.6 658.9,220.7 658.2,220.5 657.7,220.9 657.2,221.1 655.7,220.9 654.6,220.6
				654,220.3 653.1,220.3 652.8,220.5 652.1,220.4 651.6,220.3 651.3,220.5 651.4,221.1 651.5,221.7 651.5,222.5 650.7,222.6
				649,222.6 646.9,222.4 646.4,222.2 645.5,222 645,222.6 645.2,222.9 644.6,223.3 644.5,223.6 644.3,223.5 644.8,223.6
				644.8,224.2 643.9,225.6 643.5,226.3 644,226.6 645.3,226.9 645.8,227.4 646.3,227.6 646.8,227.1 646.8,226.3 647.2,226.4
				648.6,227.4 648.7,228 647.9,228.9 647,228.8 645.6,229 645.4,228.6 644.8,228 643.9,228.9 643.3,228.9 642.6,229.4 641.9,229.7
				641.8,230.3 642.7,230.8 642.7,231.3 641.7,231.7 640.5,232 640.8,232.2 641,232.7 639.9,233 639.8,233.7 639.3,233.8
				638.1,233.6 637.5,234.1 637.5,235 638.2,236 638.7,235.7 639.5,235.7 639.6,236.3 639.4,236.9 639.7,237.7 640.2,237.9
				640.3,238.7 640.1,239 639.5,240.4 639.3,242.1 639,241.8 639.6,242.6 640.1,242.8 641,242.6 641.6,242.2 641.9,241.8
				642.2,241.7 642.5,241.4 642.8,241.6 643.1,242 644.1,242.1 644.1,241.7 643.8,241.4 643.8,241 644.4,240.9 644.7,240.6
				644.9,240.6 645,240.9 645.6,240.8 646,240.2 645.9,239.4 646.1,239.1 646.4,238.8 646.5,238 646.8,237.5 647.5,237.5 648,237.8
				648.5,238.1 648.5,238.5 648.3,239.1 648.5,239.7 649,239.6 649.2,240.2 649.1,240.9 649.2,241.4 649.2,242.5 649.7,243.1
				649.7,243.5 650.2,243.7 650.9,243.7 651.3,243.3 651.4,243 652.4,242.6 652.9,242.2 653,241.7 653.4,241.3 654.6,240.5
				655.4,240.3 655.6,240.9 656.6,240.8 657,240.4 658.1,240.4 658.3,240.8 657.4,241.6 657.8,241.7 658.1,241.5 658.5,241.4
				659,241.9 659.3,241.7 659.7,241.7 660.1,241.5 660.3,241.2 660.7,241.2 661.1,241.6 661.4,242.5 662.7,244.3 663.4,244.8
				663.4,245.6 663.9,245.9 664.2,246.3 665.3,246.4 666.4,246.4 666.9,246.5 667,247.2 668.1,247.5 669,248 669.5,249.4
				670.2,250.2 671.2,250.7 671.6,251.4 671.5,252.7 672.1,254 672.8,254.1 673.1,255.4 673.3,256.4 672.9,256.9 672.8,256.6
				672.4,256.4 671.6,257.2 671.7,257.6 671.8,258.1 672.5,258.4 672.4,259.5 672.7,260 672.5,260.4 672.8,260.6 673.2,261.1
				673.2,261.5 673.4,261.6 673.6,262.2 674.2,262.5 674.5,262 675.2,262 675.4,262.3 676.1,262.4 676.6,263 677,263.1 677.3,263.8
				677.8,263.8 678,264.3 678.1,264.2 678.2,264.1 679,264.5 679.2,264.8 679.8,264.8 680.1,264.9 680.4,264.4 681.1,264.4
				682.1,264.7 682.4,265 683.1,265.1 683.5,265.4 684.3,266.2 684.9,266.2 685.5,266.5 685.8,266.9 686.3,267.5 686.5,268.1
				686.8,268 686.8,267.1 687.2,266.8 687.4,267.1 687.9,267.1 688.5,267.4 688.6,268.2 689.3,268.8 690.2,268.6 690.9,268.7
				690.7,269.8 691,270.5 691.5,270.4 692.3,270.7 692.6,270.4 693.2,270.3 693.7,269.7 694.8,269.8 695.4,270.2 695.6,270.8
				696.4,271.1 697,271.9 697.5,272 698.2,271.7 698.5,271.8 699.2,271.6 699.7,271.6 699.8,271.6 700.3,271.2 700.9,271.1
				701.3,271.7 701.3,272.4 701.8,272.8 701.9,272.8 702.4,272.5 703,271.3 704.4,270.5 705.3,270.4 705.6,270.8 706.9,271
				707.4,271.2 708.2,270.9 708.9,271 709.3,271.6 709.4,271.5 709.8,271.5 710.8,271.3 711.3,271.2 711.6,270.6 712,270.3
				712.4,270.4 712.4,270 713,269.9 713.2,269.3 713.7,268.7 714.3,268.6 715.3,268.4 715.9,267.6 715.9,267 716.3,266.9
				716.9,266.5 717.4,267.2 718.1,267 719.2,267.3 719.5,267.1 719.4,266.6 720.6,265.9 721,266 721.3,266.4 721.7,266.3
				721.8,266.6 721.4,267.3 721.7,267.8 722,267.7 722.4,267.6 722.5,268 722.9,268.5 722.9,268.9 722.4,269.4 722.6,269.9
				723.2,270 723.5,269.8 724.1,270 724.5,270.5 725,270.3 725.6,270.5 726,270.3 726.7,270.3 727,271.1 727.6,271.5 727.7,272.3
				728.2,272.3 728.7,272.9 728.7,273.7 729.2,274.6 729.2,275.5 729.1,276.7 729.1,277.2 728.9,277.6 728.4,277.8 728.4,278.3
				728.1,278.4 728,278.8 728.2,279.3 728,279.7 727.6,279.5 727.2,279.9 727,280.4 727.3,280.8 727,281.2 727,281.6 727.5,281.8
				727.7,282.2 728.1,282.6 728,283.2 728.2,283.9 728.9,283.4 730.2,283.1 730.3,283.6 730.1,283.9 730.4,284.2 731.2,284
				731.3,284.5 731.1,285 731.4,285.4 732.2,285.6 732,285.8 732.3,286.2 732.3,286 733.1,285.9 733.7,286.2 733.7,286.6
				733.5,287.1 733.5,287.5 732.8,288.4 732.3,289 732.4,289.3 732.8,289.1 733.7,289.2 733.9,289.4 734.3,289 734.7,289.5
				734.5,290.3 734.7,290.8 735.3,291.1 735.7,290.7 736.3,290.7 737.6,290.2 738.1,290.4 738.1,290.9 737.3,291.6 737.8,291.1
				738.2,291.4 738.4,291.8 739.1,291.6 739.6,291.7 739.5,291 739.4,290.4 739.2,289.8 739.2,288.8 739.6,288.6 739.6,288.2
				740.6,288.1 740.8,288.5 740.6,288.2 740.8,288 741.1,288 741.2,287.7 741.5,287.4 742.1,287.2 742.5,287.2 742.4,287.7
				742.7,287.9 743,287.9 743.1,287.3 743.6,287 744.1,287.6 744.4,287.2 744.7,287.2 744.9,287.6 745.5,287.3 745.6,286.9
				746.3,286.7 746.8,287 747.7,286.7 747.7,285.8 748.3,285.5 749,285.5 749.4,285.1 750,285.6 750,285.9 750.6,286.1 750.8,286.4
				752.1,286.4 752.3,286.7 753.1,286.4 753.5,286.8 753.4,287.3 753,287.4 752.8,288.4 753.1,288.5 753.2,289.1 754.4,289.5
				754.5,289.9 755.1,290.1 755.6,290.4 756.2,290.2 756.4,290.4 756.8,290.3 757.2,290.6 757.4,290.6 757.6,290.5 758,290.7
				758.4,290.5 758.4,290.2 758.5,289.6 758.8,290.1 759.3,290.7 759.6,290.6 760.3,291.1 760.6,291 760.9,291.1 761.2,290.6
				761.6,291 762,290.8 762.3,291 762.3,291.1 761.9,291.2 761.8,291.7 761.4,292.2 761.4,292.5 762.1,293.4 762.5,293.7
				762.5,293.9 762.6,294.5 762.7,294.4 762.9,294 763.5,294.1 763.5,294.3 763.8,294.3 764.3,293.7 764.2,293.4 764,293.4
				764,293.2 763.7,292.7 763.3,292.7 763.1,292.2 763.3,292 763.6,291.6 763.7,291.3 763.7,291 763.8,291 764,290.8 764,290.9
				764.2,291.1 764.3,291.1 764.2,291.2 764.2,291.3 764.5,291.4 764.4,291.5 764.5,291.5 764.8,291.2 765.4,291.1 765.6,290.7
				766,290.9 766.5,290.7 767.1,290.4 766.9,290 767.4,290 767.9,289.9 768.5,290.1 768.8,290 769.4,289.7 769.9,289.1 770.3,288.7
				770.3,288.4 770.5,288.6 770.7,288.8 771,288.6 771.2,288.2 771.7,287.9 771.6,287.2 771.4,286.8 771.5,286.4 771.4,286.1
				771.6,286.3 772.3,286.6 772.4,287 773,287.6 773.3,287.5 773.1,287.9 772.7,288 772.8,288.3 773.8,287.8 773.8,287.2
				774.3,287.1 774.6,286.8 775,287.1 775.5,287 775.5,286.6 776,286.5 776.1,286.2 776.3,286.6 776.7,287 777,286.8 777.1,286.3
				777.4,286.3 777.4,286.5 777.9,286.5 777.9,286.2 778.6,286.1 778.9,285.8 779.2,285.5 779.2,285.9 779.4,285.6 779.7,285.7
				780.2,285.5 780,285.1 780.2,284.8 780.4,284.2 780.1,283.6 780.4,283.7 780.6,283.4 781.3,283.3 781.3,283.6 781.9,283.6
				782,282.9 782.3,282.9 782.4,282.5 782.6,282.5 782.6,282.7 782.8,282.6 783.2,282.1 783.5,282.5 783.6,281.9 783.9,281.8
				784.1,281.4 783.6,281.3 783.2,281.4 782.5,280.9 783.4,280.9 783.8,280.3 784.1,280.5 784.4,280.2 785.1,280.7 785.3,280.1
				784.9,279.9 784.7,279.7 784.8,279.3 785.3,279.7 785.6,279.3 785.6,279.2 785.2,279.2 785.1,278.7 784.8,278.5 785.2,278.3
				785.4,278.6 785.7,278.6 785.9,278.9 785.9,278.4 785.4,278.1 785.5,277.6 785.8,277.6 786,277.3 786.4,277.7 786.4,278.1
				786.7,278.1 787,278.5 787,277.8 786.8,277.4 786.5,277.4 786.4,277.1 786.8,277 786.9,276.7 786.4,276.5 787,276 786.7,275.7
				786.3,275.7 786.1,275.9 786.2,275.5 786.8,275.1 787.7,274.7 787.4,274.3 787,274.7 786.4,274.1 787,274.1 786.6,273.6
				786.1,273.5 786.4,273.3 786.2,273 786.6,273.1 786.7,272.6 786.8,272.6 787.1,272.6 787.1,273.1 787.4,273.1 788.1,272.4
				788.2,272.1 788.8,272.1 788.4,271.7 788,271.6 788.1,271.1 788.5,271.5 789,271.3 789,270.8 789.2,270.6 788.9,270.3 789,269.9
				789.3,269.7 789.1,269.4 789.1,269.1 788.5,268.8 789.3,269 789.6,268.8 790,267.8 790.5,267.7 790.6,268.2 790.7,268.4
				790.8,267.8 791.2,267.5 790.9,267 790.4,267 790.1,266.8 790.4,266.6 790.8,266.6 791.1,266.4 790.8,266.1 790.5,265.9
				790.8,265.6 791,265.6 791.1,265.4 790.8,265.1 789.9,265.1 789.9,264.9 790.5,264.4 791.1,264.5 791.2,264.4 791.3,264.1
				791.6,264.3 791.7,264.5 792,264.2 791.9,263.9 791.8,263 791.5,262.8 791.1,263.2 791.3,263.3 791.3,263.6 790.7,263.5
				790,264.1 789.6,264 789.6,263.5 790.3,263.3 791.6,262.2 791.5,262 790.9,262 790.7,261.7 790.6,262 789.7,260.8 789,260.7
				788.1,261.5 787.7,261.3 787.1,260.5 786.6,260.6 786,261.1 785.8,261.6 785.9,260.9 786.5,260.4 786.9,260.4 787.3,260.1
				787.9,260.5 788.4,260.2 788.5,259.7 788.7,259.5 789.1,259.5 789.7,258.8 790.5,258.7 790.5,258.3 789.8,257.2 788.4,256.3
				787.5,255.8 786.4,254.7 785.8,254.7 784.9,255.3 784.5,255.2 783.7,254.6 783.7,254.3 783.4,254.1 782.8,254.4 782.1,254.3
				781.5,254.5 780.7,255.5 781.3,254.2 781.8,253.9 782.2,254 782.5,254 782.7,253.9 783.1,254 783.8,253.7 784.2,254.6
				784.5,254.9 785.1,254.9 785.4,254.4 786.3,254.5 786.9,254.9 787.4,255 787.9,255.5 788.7,255.1 789.8,255.5 790.2,255.3
				789.8,254.5 789.4,254.4 788.7,253.6 788.7,253.3 788.5,253.1 787.9,253.2 787.3,252.9 786.6,251.9 786.6,251.1 785.6,250.3
				785.5,249.5 784.9,249.3 785.2,248.6 785,248.6 784.2,246.8 782.6,246.1 782.2,246.3 782.2,245.9 780.8,245.2 780.6,245.2
				780.6,243.9 780.8,242.9 780.6,242.3 780.7,241.5 780.9,241.6 781.3,241.5 781.8,240.7 782.1,240.8 782.6,240.2 782.1,239.9
				781.8,239.6 782.3,239.1 783.1,239.1 783.1,238.6 783.8,238.4 783.8,238 783.1,237.6 783.8,237.5 784.2,237.9 784.4,237.5
				784.9,237.5 785.4,237.1 785.7,237.1 786.3,236.3 786.5,236.7 786.8,236.4 786.8,236.7 787.5,237.1 788.2,236.5 788.2,236.3
				787.8,236.2 787.7,235.6 788.1,235.4 788.4,235.4 787.9,234.8 787.9,234.5 788.5,234.3 788.2,234.1 787.5,234.2 786.8,234.2
				786.8,234 786.2,234 786,234.3 784.2,234.4 783.8,234 783.5,233.9 783.2,233.4 782.9,233.3 782.7,233 781.4,233.6 780.8,233.7
				781,233.8 781,234.4 780.6,234.7 779.8,235 780,235 780.2,235.4 779.9,235.9 779.7,236.1 779.1,235.9 778.6,236.2 777.9,236.2
				777.1,234.7 777.1,234 777,233.5 776.3,233.5 776,233.7 775.9,233.4 775.6,233.4 775.4,233.7 775.2,233.4 775.2,233.7 774.7,233
				774.6,232.6 773.7,232 773.1,231.7 773.1,231 772.8,230.4 773,230.2 773,229.9 773.1,229.6 773.1,229 773.5,228.8 773.5,228.5
				774.6,228.8 775.5,228.8 776.2,228.8 776.5,228.2 776.3,227.9 776.7,227.9 776.6,227.3 776.4,227.1 776.7,226.8 776.9,225.4
				777.9,224.8 778.5,224.8 779,224.1 779.3,224 779.3,222.9 779.9,222.3 780,221.6 780.2,221.5 780.6,220.9 781.2,220.9
				781.5,221.1 782,221.1 782.1,220.5 783,221.5 784.2,222.3 784.3,222.7 784,222.9 783.8,223.3 783.3,224.1 783.2,224.8
				782.7,224.8 782.7,225 782.6,225.7 783.2,226.3 783.2,226.7 782.9,226.8 782.9,227.1 783.2,227.4 783.8,227.2 784.5,226.7
				784.2,227.2 783.7,227.6 783.7,227.8 784.1,227.9 784,228.2 783.8,228.4 783.1,228.3 782.9,228.7 782.4,228.7 782.2,229.1
				782.6,229.4 782.7,229.9 783,229.8 783.4,229.4 783.7,229.4 784.1,228.7 784.9,228.4 785,228.2 784.8,227.6 785.5,227.1
				786.7,226.2 787,226.2 787.2,225.6 787.8,225.6 788.5,225.1 788.8,225.4 789.1,225.3 789.7,225.2 790.5,224.3 790.7,224.8
				790.7,223.2 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="585,210.9 585.2,211.2 585.6,211.2 585.8,210.9 586,210.9 586.2,211.1 586.4,210.9 586.5,210.6
				586.7,210.6 587.2,210.2 587.4,209.9 587.7,209.9 588.1,209.5 588.3,209.5 588.5,209.6 588.7,209.6 588.8,209.2 589.2,208.8
				589.9,208.8 590.2,208.9 590.5,208.9 590.7,208.8 590.9,208.9 590.8,209.3 591.1,209.6 591.3,209.5 591.6,209.4 591.7,209.7
				592,209.8 592.3,209.7 592.3,209.4 592.6,209.2 592.7,209 593.1,208.9 593.4,209 594.4,209.1 594.5,209.3 594.7,209.7 595,209.8
				595.1,209.9 594.8,210.3 595,210.6 595.4,211 595.3,211.4 595,212 595.1,212.3 595.3,212.5 595.5,212.7 595.3,212.9 594.9,213.1
				594.8,213.7 595.2,214.5 595.7,214.6 596.1,214.7 596,215 595.4,215.3 595,215.3 594.5,214.8 594.2,214.8 593.9,214.9
				593.7,214.7 593.2,214.8 592.7,214.9 592.2,214.7 591.8,214.9 591.2,215.1 590.8,215.4 590.9,215.7 590.9,216.1 590.6,216.3
				590.7,216.6 591.2,217.2 591.2,217.6 591.4,217.7 591.9,217.7 592.1,217.9 591.9,218.1 591.5,217.9 591.2,218 590.9,218.3
				590.7,218.1 590.4,218.2 590.1,218 589.3,218.1 589,218 588.8,218.3 588.8,218.5 589.1,219 589.5,219 590,219.2 590.2,219.6
				590.5,219.8 590.7,220.4 591,220.5 591.1,220.8 591.9,221.7 591.9,222.3 591.9,222.9 592.1,222.9 592.6,222.8 592.8,222.7
				593.1,222.9 593.3,223.3 593.5,223.5 593.8,224 594,224.1 594.4,223.9 594.9,224 595.4,224.2 596,224.2 596.2,224.3 596.1,224.5
				596.1,224.8 596,225.6 595.7,226.3 595.8,227 595.9,227.7 597.6,226.2 599,225.7 600.8,226 602.7,227.1 604.6,229.2 605.7,228.9
				606.1,228.9 603.8,215.7 611.2,214.3 615.6,217.4 617.3,218 619.6,219.4 623.8,219 628.4,219 629.8,220 630.5,221.7 631.4,221.4
				631.5,225.4 633.5,225.6 634.7,228.8 635.2,228.9 636.5,228.2 637.3,228 638.3,228.2 639.5,228.8 639.8,229 640.9,228
				641.5,226.9 641.8,226.5 642.2,225.8 643.3,224.5 643.8,224.3 644.3,223.5 644.5,223.6 644.6,223.3 645.2,222.9 645,222.6
				645.5,222 646.4,222.2 646.9,222.4 649,222.6 650.7,222.6 651.5,222.5 651.5,221.7 651.4,221.1 651.3,220.5 651.6,220.3
				652.1,220.4 652.8,220.5 653.1,220.3 654,220.3 654.6,220.6 655.7,220.9 657.2,221.1 657.7,220.9 658.2,220.5 658.9,220.7
				659.6,220.6 660.9,220.3 662.3,220.6 663.2,220.3 664.9,220.4 666,220.9 666.5,220.8 667.7,222.1 668.9,222.5 669.5,222.2
				669.4,221.4 670,221.1 670,220.8 670.3,220.6 669.8,220.1 670,219.6 670.3,219.3 670.1,218.1 669.5,217.7 669.4,217.2
				668.9,216.4 668.8,215.8 668.6,215.4 668.5,215 668.3,214.2 668.7,213.8 668.6,213.6 668,213.5 667.2,213.5 666.8,213.2
				666.8,212.8 667.3,212.3 667.7,212.1 668.1,212.3 668.5,212.3 669.3,212 670.6,211.7 671.2,211.5 671.6,211.4 671.9,211.7
				672.3,211.7 672.7,211.5 673,211.5 673.1,211 673.3,210.5 672.7,210.2 672.4,209.9 672.5,209.5 672.5,208.3 672.8,206.7
				672.8,206 673.1,205.2 673.3,204 673.6,203.9 674.3,204 675.3,204.4 676.1,204.5 677.2,204.2 677.6,204.2 677.8,204.5 678,204.6
				678.4,204.5 678.9,203.9 679.5,203.7 680.2,202.9 680.3,202.6 679.8,201.9 679.2,200.8 679.2,199.6 679.3,198.9 679.8,198.6
				680.6,198.3 681,197.7 680.8,197.4 680.8,196.9 681.6,196.1 682,195.9 682.5,195.4 682.4,195.3 682.3,195.1 681.5,194.8
				680.9,194.3 680.5,194.2 680.3,193.7 680.6,193.1 680.3,192.9 679.7,193.2 679.4,193.7 678.8,193.9 677.5,194 677.1,194.2
				676.9,194.5 676.5,194.3 675.9,194 675.7,194 675.6,193.9 675.3,193.6 675.2,193.3 675.1,192.8 675.2,192.6 675.2,192.2
				674.8,192 674.6,192 673.9,191.6 673.4,191.5 673.1,191.4 672.8,190.8 672.3,190 671.5,189.4 670.7,189.2 669.7,189.2
				668.8,189.3 668.7,189.6 668.9,189.9 668.7,190.1 668.2,190.3 667.7,190.2 667.1,190.5 666.4,190.1 665.9,190.2 665.6,190.5
				665.1,190.4 664.7,190 664,189.9 664,189.5 664.1,189.1 663.3,188.7 662.8,188.9 662.8,189.5 663,189.7 662.9,190 662.4,190.3
				661.7,190.4 654.9,181.9 649.9,178.1 649.7,177.7 650.1,177.6 650.6,177.1 650.6,176.6 650.3,176.4 649.6,176.6 649,176.8
				648.5,177.2 648.1,177.4 647.5,178 647.4,178.4 647,178.7 646.8,179.2 646.3,179.6 645.4,179.7 644.9,179.9 645,180.5
				644.7,180.7 644.4,180.6 643.3,180.3 642.7,180.5 642.4,180.8 642,180.9 641.6,180.4 641.6,179.7 642,179.4 642.2,178.8
				641.9,178.6 641.5,179 641.1,179 640.1,178.5 639.4,178.6 639.6,178.9 639.9,179.1 639.5,179.5 639.2,179.5 638.8,178.8
				638.7,177.9 637.7,177.2 637.6,177.4 637.8,177.9 637.7,178.4 637.4,178.4 637.2,177.8 636.8,177.9 636.7,178.5 636.4,178.6
				636,178.2 635.4,178.6 635,178.4 634.8,177.8 635.2,177.7 635.3,177.5 635.1,177 635.3,176.5 635.2,176.2 634.9,176 634.5,175.5
				634.3,174.9 634,174.8 633.8,174.1 633.2,174 632.6,174.3 632,174.3 631.3,173.9 630.5,173.9 629.9,173.7 629.4,173.8
				629.1,173.7 628.6,174 628.4,174.6 627.7,174.6 627.4,174.8 627.7,175.2 627.7,175.6 626.9,175.7 626.6,175.6 626.2,176.1
				625.5,176.3 625.3,176.4 625,176.4 623.8,177.2 623.2,177.4 622.7,177.7 622.3,177.7 622,177.4 621.6,177.7 621.5,178 620.9,178
				620.6,178.3 620.6,178.9 620.4,179.1 620,178.9 619.6,179 619.2,179.3 618.5,179.3 617.8,179.8 617.6,180 616.9,180.1
				616.2,180.4 615.5,180.5 614.6,180.8 614.5,181.2 614.3,181.5 613.9,181 613.4,181 613,181.3 613,181.7 612.7,181.9 612.2,181.6
				611.6,181.7 611.4,181.4 611,181.3 610.7,181.7 610.1,181.7 609.9,181.9 610.2,182.6 610,182.8 610.5,183 611.2,182.9
				611.4,183.5 610.7,183.5 610.4,183.7 610.5,184.1 611.2,184.1 611.7,184.3 612.1,184.1 612.5,184.1 613,184.5 613.5,184.7
				613.5,185.2 613.2,185.4 612.7,185.3 611.5,185.4 610.9,186 610.3,186.9 610.3,187.5 610.7,187.5 610.9,188.2 610.5,188.7
				610.4,189.3 609.9,189.3 609.8,189.6 610,190 610,190.3 610.7,190.3 611,190.7 611.7,190.8 611.8,191.1 612.3,191.5 613.1,191.6
				613.4,191.8 613.5,193.9 613.2,194.4 612.3,194.7 611.5,194.6 610.7,194.1 610.4,194.4 610.3,194.9 610.1,195.5 609.4,195.6
				608.4,195.1 607.6,195.1 607.2,194.9 607,195.1 606.5,194.9 605.9,194.3 606.4,194 606.5,193.7 606.1,193.5 605.5,193.1
				605.2,193.5 604.6,193.4 604.1,193.6 604.2,194.2 603.4,194.3 603.3,194 602.5,193.3 601.8,193.4 601.6,193.8 601.3,193.4
				600.8,193.6 600.8,194.1 600.2,194.1 600.2,195.2 599.5,195.7 599,195.5 598.7,195 597.6,194.8 597.3,194.3 596.7,194.6
				596.8,195.3 596.4,195.9 596.1,195.8 596.1,195.1 595.8,194.7 595.4,194.7 594.6,194.1 594.2,193.5 593.6,193.5 593,192.8
				592.7,192.8 592.4,192.4 592,192.4 591,192.7 590.3,192.3 590,191.5 589.5,191.5 588.9,191.9 588.4,192 588.3,192.3 588,192.7
				587.9,192.2 587.6,192.5 587.4,192.9 586.9,193.2 586.6,192.9 587,192.5 587.1,192.1 586.4,191.8 585.6,191.3 585.5,191.7
				585.6,192.2 585.5,192.7 584.9,192.5 584.5,192.9 584.3,193.6 583.9,193.6 583.1,194.1 582.9,194.8 583.3,195.3 583.3,195.9
				582.4,195.9 581.5,196 582.2,198.3 581.8,198.6 581.9,199.4 581,199.5 580.2,199 580,198.5 578.5,197.1 578.1,197.6 578.1,198.3
				577.4,199.3 576.9,199.5 577,200.9 577.4,201.3 577.2,203 576.8,204 577.9,204.4 578.4,205.2 578.2,205.6 579.1,206.4 579.3,206
				581.1,206.5 582.4,207.7 583.5,209.6 582.5,209.6 582.4,210 583.4,210.7 584.2,210.5 584.8,210.9 584.9,210.9 			"/>
		</g>
		<g>
			<path fill="#2294E6" d="M526.4,155.8l0.7-1.3l0.8-1.2l0.6-1.4l1.1-1.9l0.8-2l-0.2-0.8l-1.2-1.4l-0.7-0.2l-1.3-1.8l0.2-0.8
				l0.5-0.7l-0.1-0.8l-0.8-0.6l-0.3-0.6l0-1l0.2-0.3l-0.2-0.5l-0.7-0.1l-0.4-0.5v-0.9l0.4-0.5l-0.5-0.1l0-0.5l0.1-1.8l0.5-0.1
				l-1.2-2.9l-1.1-2.1l-0.2-0.8l-0.7-0.7l0.5-1.3l0.6-0.9l0.3-0.8l-0.3-0.3l-1.3-0.8l-0.2-0.5l-0.4-0.6l-0.8-0.4l-0.4-0.1l-0.5-1.3
				l-0.4-0.5l0.2-0.9l0.1-0.7l-0.4-0.2l0.5-0.3l0.7-0.3l0,0l-0.1-1.1l0.5-0.8l0.1-0.6l-0.6-0.6l-0.2-0.5l-0.9-0.1l-0.6-0.2l-0.4-0.4
				l-0.7-0.9l-0.5-0.4l-1.2,0l-0.5,0.5l0,0.2l-0.4,0.1l-0.7-0.1l-0.6,0.3l0,0.3l-0.4,0.6l-0.3,0.2l0.3,0.4l-0.2,0.4l-0.1,1.4
				l0.3,0.8l0.2,0.5l-0.2,0.4l-0.5,0.3l-0.5,0l-0.4,0.4l-0.4,0.2l-0.3,0.6l-0.6-0.1l-0.9-0.6l-0.6,0l-0.4,0.4l-0.7,0.7l-1.3,0
				l-0.8-0.3l-0.4-0.6l-0.2-0.6l-1.2-1l-0.4-0.6l-0.5-0.1l-0.4,0.3l-0.1,0.5l0.2,0.4l-0.2,0.1l-0.2-0.1l-0.1,0.2l0.5,0.5l0.7,0.4
				l1,1.1l0.7,0.5l1.1,0.1l0.4,0.3l0.4,0.1l0.5,0.6l0.2,0.5l0.2,0l0.2-0.1l0.5,0.7l0.4,0l0.3,0.4l-0.2,0.5l0.2,0.8l-0.3,0.6l0.1,0.6
				l0.7,0.1l0.2,0.6l-0.3,0.4l0.1,0.8l0.3,0.5l0.2,1l-0.1,0.5l0.1,0.4v1.1l-0.2,0.4l0.3,0.8l0.5,0.2l0.5,1l0.3,0.3l0,0.6l0.2,0.2
				l0.5,0l0.5,0.5h1.1l0.7,0.7l-0.4,0.2l0.3,0.4l0,0.8l-0.2,0.2l0.8,0.8l-0.6-0.1l-0.2,0.1l0.7,0.6l0,0.3l-0.8-0.5l-0.7,0l-0.7,0.5
				l0,0.4l-0.5,0.5v0.4l-0.2,0.2l-0.9,0.9l-0.1,0.9l-0.2,0.1l-0.1-0.3l-0.3,0l0.2,0.5l-0.1,0.4l-0.6,0.1l-0.3,0.5l0.1,0.7l0.4,0.3
				l-0.7-0.2l-0.2-0.3l-0.4,0.1L509,145l0.1,0.3l-0.4-0.2l-0.1,0.2l0.4,0.4l0,0.3l-0.3,0.4l-0.2,0.3l-0.5,0.3l-0.3-0.2l-0.1-0.2
				l-0.4-0.1l-0.4,0.1l0.1,0.5l-0.3,0.3l0.2,0.5l-0.2,0.5l-0.3,0.1l-0.3,0.5l0.2,0.6l0.1,0.1l-0.2,0.5l0.1,0.4l0.4-0.2l0.3,0.3
				l-0.1,0.6l-0.1,0.3l0.2,0.5l-0.1,0.2l0.5,0.9l0.3,0.2l-0.2,0.3l0.4,0.7l-0.4,0.2l0.1,0.9l-0.2,0.3l0,1.1l0.3,0.4l-0.3,0.6v0.4
				l0.2,0.3l0.7-0.3l0.3,0.2l0.1-0.3l0.6,0.7l0.4-0.1l0.4,0.3l0.8-0.1l0.2,0.1l-0.2,0.4h0.3l0.7-0.5v0.4l-0.3,0.5l0.7,1l0.1,0.3
				l-0.2,0.6l0.2,0.1l0.3-0.8l0.3-0.2l0.1,0.4l0.5-0.2l0.4,0l0.9-0.7h0.5l1.1-0.7l0.1-0.3l0.7,0.2l0.5-0.1l0.4-0.7l0.1,0.2l-0.2,0.5
				l0.3,0.1l0.3-0.7l0.3,0.1l-0.2-0.6l0.2-0.2l0.3,0.5l0.3,0.1l0.1-0.4l0.3,0.6l0.4-0.1l0-0.4l0.3,0.1l0.1,0.3l0.4-0.3l0.7-0.1
				l0.4,0.4l0.9-0.1l0.1-0.3l-0.2-0.2l0.3-0.1l0.4,0.1l0.1,0.3l0.5,0.1c0,0,0.1-0.3,0.2-0.5l-0.1-0.8l1.3-1.2L526.4,155.8z"/>
		</g>
		<path fill="#2294E6" stroke="#1B78D7" stroke-miterlimit="10" d="M513.6,113.8"/>
		<g>
			<path fill="#2294E6" d="M524.4,158.4c0,0,0,0,0.1-0.2l-0.1-0.8l1.3-1.2l0.7-0.3l0.7-1.3l0.8-1.2l0.6-1.4l1.1-1.9l0.8-2l-0.2-0.8
				l-1.2-1.4l-0.7-0.2l-1.3-1.8l0.2-0.8l0.5-0.7l-0.1-0.8l-0.8-0.6l-0.3-0.6l0-1l0.2-0.3l-0.2-0.5l-0.7-0.1l-0.4-0.5v-0.9l0.4-0.5
				l-0.5-0.1l0-0.5l0.1-1.8l0.5-0.1l-1.2-2.9l-1.1-2.1l-0.2-0.8l-0.7-0.7l0.5-1.3l0.6-0.9l0.3-0.8l-0.3-0.3l-1.3-0.8l-0.2-0.5
				l-0.4-0.6l-0.8-0.4l-0.4-0.1l-0.5-1.3l-0.4-0.5l0.2-0.9l0.1-0.7l-0.4-0.2l0.5-0.3l0.7-0.3l0,0l-0.1-1.1"/>
			<path fill="#3EA5F9" d="M524.4,158.7c-0.1,0-0.1,0-0.2,0c-0.2-0.1-0.2-0.3-0.1-0.5l0-0.1l-0.1-0.7c0-0.1,0-0.2,0.1-0.3l1.3-1.2
				c0,0,0.1,0,0.1-0.1l0.6-0.3l0.7-1.2l0.8-1.2l0.5-1.3l1.1-2l0.7-1.8l-0.1-0.6l-1.1-1.2l-0.6-0.2c-0.1,0-0.1-0.1-0.2-0.1l-1.3-1.8
				c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.8c0,0,0-0.1,0.1-0.1l0.4-0.6l0-0.5l-0.7-0.5c-0.1,0-0.1-0.1-0.1-0.1l-0.3-0.6c0,0,0-0.1,0-0.1
				l0-1c0-0.1,0-0.2,0.1-0.3l0.1-0.1l-0.1-0.1l-0.5-0.1c-0.1,0-0.2-0.1-0.2-0.1l-0.4-0.5c-0.1-0.1-0.1-0.1-0.1-0.2v-0.9
				c0-0.1,0-0.2,0.1-0.2l0-0.1c-0.2,0-0.3-0.2-0.3-0.3l0-0.5l0.1-1.8c0-0.2,0.1-0.3,0.3-0.3l0.1,0l-1.1-2.5l-1.1-2.1l-0.2-0.8
				l-0.6-0.7c-0.1-0.1-0.1-0.2-0.1-0.4l0.5-1.3l0.6-1l0.2-0.5l-0.2-0.2l-1.2-0.8c-0.1,0-0.1-0.1-0.1-0.2l-0.2-0.5l-0.3-0.5l-0.6-0.3
				l-0.3,0c-0.1,0-0.2-0.1-0.3-0.2l-0.5-1.2l-0.3-0.4c-0.1-0.1-0.1-0.2-0.1-0.3l0.3-1.4l-0.1,0c-0.1,0-0.2-0.2-0.3-0.3
				s0-0.3,0.2-0.4l0.5-0.3l0.5-0.2l-0.1-0.9c0-0.2,0.1-0.4,0.3-0.4c0.2,0,0.4,0.1,0.4,0.3l0.1,1.1c0,0.2-0.1,0.3-0.2,0.4l-0.6,0.2
				c0,0.1,0.1,0.2,0,0.2l-0.3,1.5l0.3,0.3c0,0,0,0.1,0.1,0.1l0.4,1.1l0.2,0c0,0,0.1,0,0.1,0l0.8,0.4c0.1,0,0.1,0.1,0.1,0.1l0.4,0.6
				l0.2,0.5l1.2,0.7l0.4,0.4c0.1,0.1,0.1,0.2,0.1,0.4l-0.3,0.8l-0.6,1l-0.4,1l0.5,0.6c0,0,0.1,0.1,0.1,0.1l0.2,0.8l1.1,2l1.3,2.9
				c0,0.1,0,0.2,0,0.3s-0.1,0.2-0.2,0.2l-0.2,0.1l-0.1,1.5l0,0.2l0.3,0.1c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.3-0.1,0.4l-0.3,0.4v0.7
				l0.2,0.2l0.5,0.1c0.1,0,0.2,0.1,0.3,0.2l0.2,0.5c0.1,0.1,0,0.3-0.1,0.4l-0.1,0.1l0,0.8l0.2,0.5l0.8,0.5c0.1,0.1,0.2,0.2,0.2,0.3
				l0.1,0.8c0,0.1,0,0.2-0.1,0.2l-0.5,0.7l-0.2,0.6l1.1,1.6l0.6,0.2c0.1,0,0.1,0.1,0.2,0.1l1.2,1.4c0,0,0.1,0.1,0.1,0.2l0.2,0.8
				c0,0.1,0,0.1,0,0.2l-0.8,2l-1.1,2l-0.6,1.3l-0.8,1.2l-0.7,1.3c0,0.1-0.1,0.1-0.2,0.2l-0.6,0.3l-1.1,1l0.1,0.6c0,0.1,0,0.2,0,0.2
				l-0.1,0.2C524.7,158.7,524.5,158.7,524.4,158.7z"/>
		</g>
		<path fill="#2294E6" stroke="#1B78D7" stroke-miterlimit="10" d="M509.3,122.8"/>
		<path fill="#2294E6" stroke="#1B78D7" stroke-miterlimit="10" d="M508.4,122.1"/>
		<g>
			<polygon fill="#2294E6" points="517.4,169.7 518.1,169.6 518.8,170.1 519.1,170 519.3,169.6 519.7,169.9 519.9,170.3
				520.2,170.3 521.1,170.8 521.4,171.5 521.9,171.7 522.3,172.3 523.3,171.9 524.1,172.1 524.5,171.4 524.5,170.9 524.9,170.5
				524.9,170 523.6,167.6 523.8,165.6 524.1,165.3 524.3,164.5 524.8,164 524.8,163.8 524.8,163.7 524.5,163.3 524.5,163.5
				522.2,163.5 521.3,162.8 520.2,162.9 519.7,162.6 519.2,162.7 518.6,162.2 518.6,162.6 518.2,162.5 518.2,162.7 518.6,163
				518.1,163.4 517.8,163.2 516.8,163.1 516.6,162.9 516.5,163.4 516,163.4 515.4,163.5 515.3,164 515,163.9 514.1,164.3
				513.8,164.8 513.8,166.6 514.2,166.7 514.4,166.5 514.9,166.6 514.6,167 514.2,167 514.2,167.7 514.7,168.4 515.5,169.1
				515.8,169.1 515.8,168.6 516.4,168.2 516.6,168.6 516.3,170 516.3,170.3 516.6,170.2 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="509.9,177.3 510.6,176.5 511.9,176.2 512.9,176.3 513.5,176.3 513.9,176.6 514.4,176.2
				515,176.1 515.1,176.4 515.6,176.5 516.1,177 516.9,177 517.2,177.1 518.1,176.5 519.1,177 519.9,177.1 520.7,177.9 521.3,178
				521.9,178.9 522.7,178.9 523,179.2 523,179.2 523.9,178.8 525,178.6 525.1,177.9 525.6,177.6 525.8,177.1 526.3,177 526.2,176.2
				525.8,175.7 525.5,174.9 525.3,174.6 525,173.9 525,173.6 524.9,173.1 524.6,172.9 524.8,172.6 524.7,172.1 523.3,171.9
				522.3,172.3 521.9,171.7 521.4,171.5 521.1,170.8 520.2,170.3 519.9,170.3 519.7,169.9 519.3,169.6 519.1,170 518.8,170.1
				518.1,169.6 517.4,169.7 516.6,170.2 516.3,170.3 516.3,171 516.5,172.3 516.2,173.2 515.3,174.2 514.7,174.2 514,173.5
				513.9,173.1 512.6,171.7 512.6,170.8 512.4,170.9 511.9,171.4 511.1,171.5 510.8,171.8 510.3,171.8 509.8,172.5 509.9,173
				509.7,173 509.7,173.9 508.9,174.8 508.9,175.3 508.9,175.9 508.5,176.2 508.8,177.6 509.2,177.9 509.2,178 509.7,177.8 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="514.8,183.9 515.2,184 515.5,185 515.5,185.6 515.8,186.2 516.4,185.8 517.4,185.5 518.2,185.8
				518.9,185.5 519.4,185.4 519.1,184.6 519.9,184.6 520.2,183.9 520.6,183.7 520.8,184 521.4,184 521.4,183.4 520.7,183.1
				520.9,182.2 521.3,182.1 521.8,181.2 522.8,180.8 522.8,180.2 522.3,180 523,179.2 522.7,178.9 521.9,178.9 521.3,178
				520.7,177.9 519.9,177.1 519.1,177 518.1,176.5 517.2,177.1 516.9,177 516.1,177 515.6,176.5 515.1,176.4 515,176.1 514.4,176.2
				513.9,176.6 513.5,176.3 512.9,176.3 511.9,176.2 510.6,176.5 509.9,177.3 509.7,177.8 509.2,178 509.2,178.8 509.4,179.5
				509.2,179.9 509.3,180 510.3,179.8 511,180.8 511.8,181.2 512.8,180.9 513.2,181.1 513.3,181.7 513.6,181.8 513.9,182.1
				513.6,182.5 513.6,183.5 514.2,183.4 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="525.6,177.6 525.1,177.9 525,178.6 523.9,178.8 523,179.2 523,179.2 522.3,180 522.8,180.2
				522.8,180.8 521.8,181.2 521.3,182.1 520.9,182.2 520.7,183.1 521.4,183.4 521.4,184 520.8,184 520.6,183.7 520.2,183.9
				519.9,184.6 519.1,184.6 519.4,185.4 518.9,185.5 518.2,185.8 517.4,185.5 516.4,185.8 515.8,186.2 515.9,186.4 516.4,187.7
				516.7,188.3 516.9,189 517.2,189.2 517.2,191 516.6,191.2 516.2,191.9 516.4,192.7 517,193.6 517,193.9 517.4,193.8 518.3,194.3
				518.8,194 520.8,193.7 521.6,193.7 522.2,193.2 522.6,193.2 523.2,193.6 524.8,193.9 525.5,194.2 525.6,194.5 526.6,194.1
				527.1,194.6 527.4,194.5 527.7,194.3 528.5,194.4 528.9,194.6 529.8,194.1 530.5,194.2 530.7,194.7 531.1,194.9 531.6,194.2
				532.2,194.2 532.7,194.5 533.5,194.3 534,194.7 534.6,194.6 534.6,193.7 535,192.6 535.8,192.5 537,192.2 537.1,192.2
				537.1,191.5 536.5,190.8 536.5,190 536,189.2 535.9,188.5 536.2,188 536.8,188.6 538.2,188.4 538.8,187.5 539.1,187.2
				538.4,186.7 538.3,186.2 537.3,185.3 536.3,185 536.1,184.1 535.5,183.7 534.8,182.7 534.5,181.9 533.9,181.3 533.9,180.4
				533.4,179.8 533.6,179.1 533.4,178.5 532.2,178 531.8,178 531.5,177.6 530.7,177.9 530,178.4 529.4,177.5 528.8,177.4
				528.1,177.8 527.6,176.9 527,177.2 526.5,176.9 525.8,177.1 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="557,208.3 557.6,207.4 558.9,207.3 559.4,206.9 559.3,206.2 559.6,205.2 559.5,204.4
				558.7,203.8 558.9,202.6 559.5,202.5 559.9,201.9 559.9,201.1 559.5,200.9 559.3,200.3 558.9,200.7 558,200.5 557.3,200.1
				556.7,200.2 556.2,199.9 555.5,199.9 554.4,199.6 554.1,200 553.8,199.5 552.9,198.9 552.3,197.6 551.9,197.6 550.9,198.4
				550.3,198.2 549.7,198.4 548.9,198 548.4,198.6 547.2,197.3 546.9,196.4 546.9,195.7 546.3,195.6 546.3,195 545.7,194.5
				544.1,194.7 543.4,193.7 543.7,193.1 543.1,192.6 542.7,191.4 542.1,191.3 541.4,191.7 539.9,191.7 538.6,191.2 538.1,191.6
				538.2,192.2 537.5,192.3 537.1,192.2 537,192.2 535.8,192.5 535,192.6 534.6,193.7 534.6,194.6 534,194.7 533.5,194.3
				532.7,194.5 532.2,194.2 531.6,194.2 531.1,194.9 530.7,194.7 530.5,194.2 529.8,194.1 528.9,194.6 528.5,194.4 527.7,194.3
				527.4,194.5 527.1,194.6 526.6,194.1 525.6,194.5 525.5,194.2 524.8,193.9 523.2,193.6 522.6,193.2 522.2,193.2 521.6,193.7
				520.8,193.7 518.8,194 518.3,194.3 517.4,193.8 517,193.9 516.9,194.3 517,195.6 517.3,196 517.6,196.8 518.3,197.2 518.1,197.5
				518.2,198 518.4,198.3 518.2,199.1 517.7,199.2 517.3,199.6 517.1,200.4 515.4,202.3 515.5,203.1 515.5,203.9 514.9,203.9
				514.4,205.1 514.2,206.1 514.1,206.1 514.8,206.8 515.5,207.2 515.7,207.7 516.2,207.7 516.6,207.4 517.1,207.4 518.1,208
				518.9,208 519.6,208.3 519.9,208.8 520.5,209 521.4,208.8 522,208.7 522.4,208.2 524.3,207.9 524.9,207.5 525.6,207.3
				525.5,206.6 525.6,206.3 525.4,205.6 525.9,205.8 526,205.6 526.5,205.9 526.7,205.6 527.3,205.6 527.5,205.4 527.9,206
				528.7,206 529.5,206.8 530.4,206.9 530.6,206.6 530.8,206.6 531.7,207.5 532.4,207.8 532.6,208.8 532.5,209.5 533.1,209.8
				533.2,210.1 533.9,210.7 534.7,211.2 534.8,211.7 534.7,212.2 535,212.6 534.9,212.9 534.1,213 533.7,212.6 533,212.8
				532.4,212.9 532.3,213.9 532.4,214.5 532.1,214.5 531.6,215.5 531.5,216 531.1,215.8 530.7,216.1 531.1,216.9 531.9,217.1
				532.9,217.1 533.4,216.8 534.2,216.7 534.7,217.1 534.7,217.1 534.8,216.6 534.5,216.2 534.6,215.9 534.6,215.5 534.8,215.9
				535.2,215.9 536.3,214.6 536.1,214.2 536.4,214.2 537,213.5 537,212.8 537.4,212.5 538,212.4 538.6,211.7 538.9,212 538.8,212.2
				539.3,212.2 539.6,211.9 539.8,211.5 540,211.8 540.3,212.1 540.8,212.2 541.6,212 541,212.4 540.7,212.5 540.2,212.4
				539.2,212.5 538.6,212.5 538.8,212.9 539.8,212.9 540.6,213.1 540.5,213.3 540.2,213.5 540.6,213.9 541,213.9 541.5,214.2
				542.1,213.9 542.8,213.8 543.4,214.1 543.8,214.3 544.1,213.9 544.3,214 544.4,214.7 544.8,215.1 544.5,215.3 543.7,215.4
				542.7,216 542.1,216.9 542.6,217.1 543,216.8 543.6,217.1 543.9,217 544.8,217.7 544.9,218.1 544.5,219.1 544.4,219.3
				544.9,219.7 545.9,219.7 546.8,219.3 548.1,218.3 549,218.4 549.5,217.7 550.1,217.3 551.2,217.5 552.2,217.4 552.5,217
				552.3,216.5 552.5,216.3 552.8,215.9 552,215.9 551.1,216 550.9,216.6 550.4,216.2 550.1,216.3 549.6,216.7 549.3,216.6
				548,215.1 547.7,214.4 547.3,213.8 547.1,214 547.4,214.7 548.3,215.9 549.3,216.7 549,216.9 548.4,216.7 548,216.4 547.9,215.7
				547.6,215.5 547.3,215.9 547.4,215.4 547.1,215.4 546.9,215.6 546.8,215.3 547.1,215 546.9,214.7 546.6,214.9 546.3,214.6
				545.9,214.2 545.1,214.3 544.7,214.1 544.8,213.8 545.4,213.9 545.7,213.6 546.1,213.9 546.7,213.9 546.8,213.6 547.3,213.5
				548.1,212.6 548.3,212.3 548.5,212.5 548.6,212.7 548.1,213.4 547.9,213.5 548,213.7 548.3,213.6 548.9,212.7 549,212.4
				548.7,212 548.6,211.6 548.8,211.6 549.2,212.2 549.5,212.3 550.1,211.9 550.8,212.1 551.3,211.7 551.9,211.7 552.1,211.7
				552.7,211.1 553,210.7 553.6,210.6 553.8,210.2 554.2,209.9 554.9,209.9 555.6,209.6 555.8,209.7 555.9,210 556.4,209.8
				556.4,209.7 556.6,208.5 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="527,208.4 528.1,209.4 528.2,210 529.7,211.1 529.9,211.9 530.4,212.7 530.3,215.3 530.6,216.1
				530.7,216.1 531.1,215.8 531.5,216 531.6,215.5 532.1,214.5 532.4,214.5 532.3,213.9 532.4,212.9 533,212.8 533.7,212.6
				534.1,213 534.9,212.9 535,212.6 534.7,212.2 534.8,211.7 534.7,211.2 533.9,210.7 533.2,210.1 533.1,209.8 532.5,209.5
				532.6,208.8 532.4,207.8 531.7,207.5 530.8,206.6 530.6,206.6 530.4,206.9 529.5,206.8 528.7,206 527.9,206 527.5,205.4
				527.3,205.6 526.7,205.6 526.5,205.9 526,205.6 525.9,205.8 525.4,205.6 525.6,206.3 525.5,206.6 525.6,207.3 526.7,207.1 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="500.3,211.9 500,211.4 500.1,210.9 500.3,210.2 499.8,209.6 499.9,209.4 501.1,209.4
				501.2,208.9 501.1,208.3 501.1,207.9 500.9,206.7 501,205.9 499.9,205.6 499.4,205.2 498.7,205.4 497.9,205.4 497.2,204.9
				496.2,204.8 495.6,204.6 495.4,205.1 495.1,205.4 495.1,205.8 494.3,205.9 494.1,206.2 492.7,205.4 492.3,205.3 492.2,205.8
				492.2,206.4 491.8,206.4 491.4,206.9 490.8,207.3 490.1,208.2 490.1,208.6 490.7,208.9 490.8,209.4 490.5,209.6 489.9,209.3
				489.3,209.4 488.7,209.3 488.2,209.3 487.3,209.9 486.9,210 486.4,209.9 485.9,210 485.5,209.7 484.8,209.6 484,209.7
				484.1,210.1 483.9,210.3 483.2,210.1 482.8,209.7 482.3,209.9 482,210 481.9,210 482.2,210.3 482.2,210.7 482.5,210.9
				482.5,211.4 482.9,211.5 483.2,211.3 483.8,211.9 484.3,211.4 484.8,211.4 485,211.9 485,211.9 485.9,212.3 487.4,211.4
				488,211.6 488.9,211.5 488.8,212.1 490.2,212.9 491.9,213.2 492.8,213.1 493.2,213.5 493.2,213.5 493.7,213.5 494.9,213.5
				495.3,214 495.9,213.7 496.5,213.7 497.2,213.4 497.6,213.4 497.9,213.4 499.1,212.7 499.7,212.5 499.9,212.4 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="493.6,189.6 492.8,190 492.8,190.4 493.7,191.3 493.6,191.9 494,192.4 494,192.8 494.2,193.4
				494,193.9 494.5,195 494.8,195.2 495.2,195.6 495.2,197.1 495.1,197.4 495.3,197.8 495.5,197.5 496,197.6 496.3,197.5
				497.4,197.6 497.4,198 497.8,198.5 498.3,198.4 498.7,198.7 498.4,199.4 498.6,199.7 498.8,199.8 498.8,200.3 499.2,200.5
				499.5,200.2 499.8,200.2 499.2,199.4 499.4,199.2 500.7,199.9 501.6,199.8 501.4,200.3 502,200.8 503.1,200.5 503.9,200.8
				505.6,202 506.1,202.9 506.6,202.9 506.8,202.7 507.6,202.7 508,203.1 508.1,203.8 508.3,203.9 508.8,203.9 509.1,203.4
				509.6,203.2 510,203.3 510.7,203.3 511.1,203.6 511.4,203.2 511.9,203.1 512.3,203.3 512.7,203.2 513.7,203.2 514.9,203.9
				515.5,203.9 515.5,203.1 515.4,202.3 517.1,200.4 517.3,199.6 517.7,199.2 518.2,199.1 518.4,198.3 518.2,198 518.1,197.5
				518.3,197.2 517.6,196.8 517.3,196 517,195.6 516.9,194.3 517,193.9 517,193.6 516.4,192.7 516.2,191.9 516.6,191.2 517.2,191
				517.2,189.2 516.9,189 516.7,188.3 516.4,187.7 515.9,186.4 515.5,185.6 515.5,185 515.2,184 514.8,183.9 514.2,183.4
				513.6,183.5 510.5,183.8 507,183.6 506.7,183.7 505.7,184.5 504.9,184.7 504.7,184.5 505.5,184.1 506.3,183.3 506,183.4
				505.4,184 504.4,184.4 503.2,184.1 502.9,183.4 503.1,183 503.8,183.1 504,183.3 504.1,183.1 503.3,182.7 501.9,182.3
				500.8,182.9 500,182.8 499.2,183.2 498.7,183.8 497.9,183.9 497.4,184.4 497.4,184.9 496.5,184.9 495.2,185.6 494.3,185.7
				494,186.4 493.8,187 493.6,187.1 493.6,187.4 493.4,187.4 493.7,188.7 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="494.1,206.2 494.3,205.9 495.1,205.8 495.1,205.4 495.4,205.1 495.6,204.6 496.2,204.8
				497.2,204.9 497.9,205.4 498.7,205.4 499.4,205.2 499.9,205.6 501,205.9 501.1,205.9 501.8,205.4 502.4,205.4 502.7,205.6
				503.8,205.3 504.8,205.1 505.6,204.3 506.3,204.3 506.9,203.7 508.1,203.9 508,203.1 507.6,202.7 506.8,202.7 506.6,202.9
				506.1,202.9 505.6,202 503.9,200.8 503.1,200.5 502,200.8 501.4,200.3 501.6,199.8 500.7,199.9 499.4,199.2 499.2,199.4
				499.8,200.2 499.5,200.2 499.2,200.5 498.8,200.3 498.8,199.8 498.6,199.7 498.4,199.4 498.7,198.7 498.3,198.4 497.8,198.5
				497.4,198 497.4,197.6 496.3,197.5 496,197.6 495.5,197.5 495.3,197.8 495.1,197.4 495,197.5 494.6,197.3 494.2,197.6
				493.3,197.4 493.3,197.9 492.9,198.2 492.5,198.1 491.5,198.1 491.2,198.5 490.6,198.6 490.1,199.2 489.6,199.2 488.6,200.1
				488.2,199.9 487.9,199.7 487.7,199.9 487.7,200.3 488.4,200.7 489,201.6 489,202.3 489.1,202.7 489.7,203 490.6,203.7 491.2,204
				492.3,205.3 492.3,205.3 492.7,205.4 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="475.5,189.9 475.5,190.2 475.3,190.7 475.3,191.2 474.9,191.5 474.3,191.3 474.1,191.8
				474.2,192.2 474.8,192.1 475.1,192.4 475,192.7 474.9,193.3 474.5,193.6 474.8,194.1 474.4,194.3 473.7,194.2 473,194.4
				472.6,194.9 472.3,195.4 472.4,196.2 472.3,197.1 472,197.7 472.1,197.7 471.9,198.1 472.3,199 472.3,199.3 472.7,199.9
				472.3,200.6 472.5,200.6 473.2,201.4 473.3,202 473.6,202.3 473.6,203.2 473.6,203.2 474.1,203.6 474.1,203.9 474.6,204.3
				475,204.2 475.5,204.2 475.9,204.3 476.4,204.1 477,204.4 477.6,204.4 478.1,204.8 477.5,205.4 477.2,206.3 477.2,206.7
				476.8,207.1 476.5,208 476.6,208.8 477,209.1 477.3,209.7 477.3,209.7 477.7,209.8 478.2,209.5 478.9,209.8 479.1,209.4
				479.1,209.1 479.6,208.9 479.8,209.4 480.2,209.5 480.4,209.3 480.8,209.3 481.6,209.9 481.9,210 482,210 482.3,209.9
				482.8,209.7 483.2,210.1 483.9,210.3 484.1,210.1 484,209.7 484.8,209.6 485.5,209.7 485.9,210 486.4,209.9 486.9,210
				487.3,209.9 488.2,209.3 488.7,209.3 489.3,209.4 489.9,209.3 490.5,209.6 490.8,209.4 490.7,208.9 490.1,208.6 490.1,208.2
				490.8,207.3 491.4,206.9 491.8,206.4 492.2,206.4 492.2,205.8 492.3,205.3 492.3,205.3 491.2,204 490.6,203.7 489.7,203
				489.1,202.7 489,202.3 489,201.6 488.4,200.7 487.7,200.3 487.7,199.9 487.9,199.7 488.2,199.9 488.6,200.1 489.6,199.2
				490.1,199.2 490.6,198.6 491.2,198.5 491.5,198.1 492.5,198.1 492.9,198.2 493.3,197.9 493.3,197.4 494.2,197.6 494.6,197.3
				495,197.5 495.1,197.4 495.2,197.1 495.2,195.6 494.8,195.2 494.5,195 494,193.9 494.2,193.4 494,192.8 494,192.4 493.6,191.9
				493.7,191.3 492.8,190.4 492.8,190 493.6,189.6 493.7,188.7 493.4,187.4 492.9,187.4 492.5,187.2 492.1,187.2 491.5,186.8
				491.7,186.3 491.3,185.8 490.8,185.9 490.1,185.2 489.6,185.1 489.4,184.8 489.1,185 488.5,185 488,185.4 487.8,185.2 488,184.9
				488.1,185 488.4,184.8 488.9,184.5 488.2,184.5 488,184.6 487.9,184.9 487.3,185.2 487.3,185.4 486.3,185.6 485.9,186.1
				485.8,186.5 485.2,186.6 485.1,186.3 484.6,186.2 484.3,186.3 483.6,186.1 484.1,185.8 484.4,185.8 484.8,185.4 484.8,184.9
				484.6,184.8 484.1,185.1 484,185.3 483.3,184.8 483.1,184.5 482.8,184.7 482.7,185 482.2,185.3 482.1,184.8 481.6,184.7
				481.5,184.4 481.7,184.1 482,183.5 481.5,183.4 481,182.9 480.5,182.9 480.2,182.8 479.1,182.5 478.4,182.6 478.4,182.7
				478.4,183.1 478.8,183.4 479.1,183.4 479,183.8 479.6,184.4 479.1,184.6 478.7,184.6 478.7,185 479.2,184.8 479.2,185.5
				479.7,185.8 479.2,186.1 479.2,186.5 479.6,186.8 480.3,186.8 481.2,187.7 482.3,188.2 481.1,188 480.2,187 479.6,187.2
				479.2,187 478.8,187.1 478.4,187.6 478.5,188.1 478.5,188.9 478.8,189.4 478.2,188.7 478.2,188.1 477.8,187.7 477.6,187.8
				477.6,188.2 477.8,188.7 477.6,189 477.1,188.5 477.1,187.8 476.5,187.4 476.1,187.6 474.9,187.9 474.8,188.5 475,188.9
				475.6,189 475.8,189.6 475.7,189.6 475.7,189.7 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="484.8,211.4 484.3,211.4 483.8,211.9 483.2,211.3 482.9,211.5 482.5,211.4 482.2,211.4
				482,211.1 482.2,210.7 482.2,210.3 481.6,209.9 480.8,209.3 480.4,209.3 480.2,209.5 479.8,209.4 479.6,208.9 479.1,209.1
				479.1,209.4 478.9,209.8 478.2,209.5 477.7,209.8 477.3,209.7 476.4,210 475.9,209.9 475.7,209.5 475.1,209.6 474.7,210
				475.3,210.3 475.4,210.8 474.9,211.1 474.4,211.8 473.9,211.9 473.2,213.1 473.1,213.9 473.1,214.4 472.8,214.4 472.5,214.6
				472.5,215 473.1,215.1 473.8,214.8 473.5,214.1 473.9,213.8 474.7,213.8 475,214.3 475.2,215 475.6,215.3 475.6,215.8 476.2,216
				477.3,215.2 478,215.5 479,213.8 479.7,214.2 479.6,214.8 480.5,215.3 480.8,215.8 481.3,214.8 481.3,214.1 482.5,214.4
				483,214.3 483.5,214.7 483.6,213.7 484.7,213.5 484.4,212.6 485,211.9 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="477.3,221.4 476.4,221.4 475.6,220.8 475.4,219.4 474.8,218.6 475.2,218.2 475.8,218.1
				476,217.2 475.4,216.7 475.4,216 475.6,215.7 475.6,215.8 475.6,215.3 475.2,215 475,214.3 474.7,213.8 473.9,213.8 473.5,214.1
				473.8,214.8 473.1,215.1 472.5,215 472.5,214.6 472.8,214.4 473.1,214.4 473.1,213.9 473.2,213.1 473.9,211.9 474.4,211.8
				474.9,211.1 475.4,210.8 475.3,210.3 474.7,210 475.1,209.6 475.7,209.5 475.9,209.9 476.4,210 477.3,209.7 477,209.1
				476.6,208.8 476.5,208 476.8,207.1 477.2,206.7 477.2,206.3 477.5,205.4 478.1,204.8 477.6,204.4 477,204.4 476.4,204.1
				475.9,204.3 475.5,204.2 475,204.2 474.6,204.3 474.1,203.9 474.1,203.6 473.6,203.2 473.2,203.3 472.5,203.1 472.1,202.6
				472.1,202.6 471.7,202.6 471.5,202.8 471,202.4 470.4,202.4 469.8,201.6 469.4,201.5 469.2,201.2 468.8,201.2 468.5,201.4
				467.9,201.1 467.9,200.4 467.5,200.2 467.2,199.9 466.8,199.9 466,199.3 465.9,198.8 465.3,198.6 465.2,197.6 464.9,197.4
				464.8,197.5 463.8,197.9 463.6,197.7 462.8,198.1 462.6,198.7 462.7,199.3 462.5,200.4 461.7,201.1 461.7,201.5 460.8,201.7
				460.4,201.8 459.9,201.6 458.8,202.2 458.6,202.6 458.8,203 459.2,203.1 458.6,203.6 457.8,203.8 456.7,203.6 456.2,203.4
				455.8,203.6 455.7,203.2 455.3,203 455.5,202.5 455,202.3 454.6,202.5 453.9,202.4 453.6,202.3 453.8,203 453.7,203.2
				454.6,204.1 454.5,204.4 454.6,204.8 454.5,205.2 454.8,205.6 454.8,206.1 453.9,205.9 453.4,206.1 453,206 452.6,206.1
				452.4,205.9 451.8,206.4 451,205.4 450.5,205.2 449.9,205.4 449.4,205.9 449.1,205.7 448.8,206 448.5,205.8 447.9,205.9
				447.6,206.3 446.7,206.3 446.4,206.8 446.6,207.1 447,207 447.5,207.1 447.7,207.3 447.1,207.2 446.8,207.2 447,207.8
				447.2,207.4 447.5,207.5 447.6,207.8 447.3,208 446.8,208.2 446.8,208.3 447.3,208.3 447.5,208.9 447.4,209.2 448,208.8
				448.4,209 448.7,208.9 449.6,209.2 449.8,209.6 450.2,209.6 450.8,210 451.2,209.6 451.5,209.6 451.4,209.9 451.5,210.1
				452,209.9 452.3,210.1 452.1,210.7 452.3,211.1 452.6,211.1 453.2,210.8 453.7,210.8 454.1,211.3 453.7,211.1 453.1,211.1
				452.8,211.5 453.1,211.6 453.2,212.2 453,212.7 453.1,213 453.5,213.1 454.2,213.9 454.9,214 455.6,214.4 455.5,214.9
				455.8,215.3 455.6,215.9 455.5,215.9 455.3,216.4 455.8,216.5 456.6,217.2 457.3,218.7 456.6,218 456.4,217.4 455.8,217.1
				455.5,217.3 455.3,218.7 455.3,219.7 455.7,220 455.4,220.2 455.2,222.1 454.7,223.8 454.1,224.1 454.6,224.4 454.6,224.5
				455,224.6 455.1,225.2 455,225.6 455.8,225.5 456.9,226 457.4,226.5 458,226.3 458.6,226.9 459.4,226.9 459.8,227.1 460.2,226.6
				461.5,226.6 462,226.8 462.7,226.7 463.5,227.2 464.8,227.1 465.8,227.6 466.1,227.7 466.1,227.5 465.9,226.7 466.1,225.7
				466.2,225.3 466.8,224.7 467.7,223.7 468.1,223.6 468.4,223.9 469,224 469.7,224.4 470.1,224.4 470.6,224 471,224 472.7,225
				473.1,225.4 474.4,225.5 474.9,225 474.8,224.8 475.3,224.2 477,222.9 477.1,222.8 476.9,222.2 			"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M475.1,216.7l-0.1-0.7c0-0.1,0-0.2,0.1-0.3l0.2-0.2l0-0.1l-0.2-0.2c-0.1,0-0.1-0.1-0.1-0.2l-0.2-0.7
				l-0.1-0.3l-0.5,0l-0.1,0.1l0.2,0.4c0.1,0.2,0,0.4-0.2,0.5l-0.7,0.3c-0.1,0-0.1,0-0.2,0l-0.6-0.1c-0.2,0-0.3-0.2-0.3-0.3l-0.1-0.4
				c0-0.2,0.1-0.3,0.2-0.4l0.3-0.2c0,0,0.1,0,0.1,0l0-0.1l0.1-0.9c0-0.1,0-0.1,0.1-0.1l0.7-1.1c0-0.1,0.1-0.1,0.2-0.2l0.3-0.1
				l0.5-0.6c0,0,0.1-0.1,0.1-0.1l0.2-0.1l0,0l-0.4-0.2c-0.1-0.1-0.2-0.1-0.2-0.3c0-0.1,0-0.2,0.1-0.3l0.4-0.4
				c0.1-0.1,0.2-0.1,0.3-0.1l0.6,0c0.2,0,0.3,0.1,0.4,0.2l0.1,0.2l0.2,0l0.4-0.1l0-0.1l-0.4-0.2c-0.1-0.1-0.2-0.2-0.2-0.3l0-0.8
				c0,0,0-0.1,0-0.1l0.3-1c0-0.1,0.1-0.1,0.1-0.2l0.3-0.3v-0.3c0,0,0-0.1,0-0.1l0.3-0.8c0-0.1,0-0.1,0.1-0.1l0.3-0.3l-0.1,0H477
				c-0.1,0-0.1,0-0.2,0l-0.5-0.2l-0.4,0.1c-0.1,0-0.2,0-0.2,0l-0.3-0.1h-0.3l-0.4,0.1c-0.1,0-0.3,0-0.4-0.1l-0.5-0.4
				c-0.1-0.1-0.1-0.2-0.1-0.3v-0.3h0.8v0.2l0.2,0.2l0.3-0.1c0,0,0.1,0,0.1,0h0.5c0,0,0.1,0,0.1,0l0.2,0.1l0.4-0.1c0.1,0,0.2,0,0.3,0
				l0.6,0.3h0.4c0.1,0,0.1,0,0.2,0.1l0.5,0.4c0.1,0.1,0.2,0.2,0.2,0.3s0,0.2-0.1,0.3l-0.6,0.6l-0.3,0.7v0.4c0,0.1,0,0.2-0.1,0.3
				l-0.3,0.3l-0.2,0.8l0,0.5l0.3,0.2c0.1,0,0.1,0.1,0.1,0.2l0.3,0.5c0,0.1,0,0.2,0,0.3s-0.1,0.2-0.2,0.2l-0.9,0.3
				c-0.1,0-0.1,0-0.2,0l-0.5-0.1c-0.1,0-0.1,0-0.2-0.1c0,0,0,0,0,0.1l0.1,0.5c0,0.2-0.1,0.3-0.2,0.4l-0.4,0.2l-0.5,0.6
				c0,0.1-0.1,0.1-0.2,0.1l-0.3,0.1l-0.6,1l-0.1,0.4l0.2-0.1c0.1-0.1,0.2-0.1,0.3-0.1l0.8,0c0.1,0,0.3,0.1,0.3,0.2l0.3,0.5l0.2,0.6
				l0.2,0.2c0.1,0.1,0.1,0.1,0.1,0.2l0.1,0.5c0,0.1,0,0.3-0.1,0.4c0,0-0.1,0-0.1,0.1l0,0l0.1,0.5L475.1,216.7z"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="555.3,248.7 555.9,248.5 555.8,247.8 556.2,247.6 556.2,246.6 556.4,246.1 557.2,246.3
				557.7,246.5 559,245.9 559.3,245.9 559.7,245.7 561.2,245.5 561.7,245.7 562,245.9 562.9,246.1 564.1,246.1 564.3,245.9
				565,245.7 565.4,245.2 566.4,244.9 567.1,244.9 567.6,244.8 569,244.9 570.1,244.5 570.9,244.5 571.1,244.7 571.9,244.1
				572.5,244.1 572.8,243.8 574,243.8 574.9,244.1 575.7,243.9 576,244.1 576,244.7 576.5,244.9 577.1,244.7 577.2,244.2 577,243.6
				576.4,242.5 575.6,242.2 575.7,241.9 575.7,241.1 576,240.2 575.8,239.9 575.2,239.8 575.2,239.1 575.3,238.5 575,237.5
				574.7,237 574.7,236.7 575.5,236.6 575.7,235.9 576,235.6 575.9,235.4 575.9,235.4 575.7,235.1 575.2,234.6 574.7,234.7
				573.8,234.6 573,234.1 573,233 573.2,232.2 572.9,231.6 572.4,231.5 572.3,231.1 571.8,230.6 571.3,230.5 570.2,229.5
				569.7,229.4 569.3,229.7 569,229.8 568.3,229.5 568,229.8 567.7,229.7 567.6,229.2 567.2,229.2 567.1,229.4 566.7,230.1
				566,230.5 565.1,231 565,231.4 564.1,231.5 563.8,231.7 562.6,231.5 562.3,231.3 561.9,231.3 561.7,231.2 561.2,231.3
				560.2,231.4 559,231.9 558,231.7 557.4,231.3 557.1,231.5 556,231 555.4,230.9 554.5,230.2 554.2,230.2 553.9,230.6 553.5,230.5
				553,229.8 552.9,229.1 552.4,228.8 552.1,228.8 551.4,229.5 551.2,229.4 550.9,229.6 549.9,228.6 549.8,228.1 549.7,228
				549,228.4 548.1,228.4 547.7,228.2 547.2,228.4 545.8,228.3 545.1,228.5 543.8,229 543.2,229.1 542.2,229.3 541.9,229.7
				541.4,229.8 541,230.3 540.7,230.4 540.4,231.1 540.2,231.3 540.2,231.6 539.2,231.6 537.8,231.1 537.3,231.1 537,231.3
				536.4,231.2 535.5,231.4 535.1,231.3 534.4,231.5 534.3,231.8 534.8,232.7 535.6,232.7 536.2,232.8 536.1,233.1 535,233.1
				534,233.4 533.6,233.9 533.8,234.2 534.3,234 534.6,234.3 534.1,234.5 532.8,234.5 532.3,234.2 531.6,234.5 531.3,234 531,234
				530.5,234.6 530,234.6 529.4,234 528.7,234 527.4,235 527.3,235.5 527,236 527.3,236.3 527.2,236.9 527,237.1 527.2,237.5
				528,237.2 528.2,237.3 528.7,237.2 529.4,237.2 528.7,237.8 528.8,238.2 529.1,238.7 529.1,239 529,239.3 529.2,239.4
				529.7,239.1 529.8,239.3 529.4,239.7 528.7,240.1 529,240.3 529.4,240.3 529,240.6 528.7,241.1 528.4,241.1 528.1,240.3
				527.9,240.2 527.8,240.7 528,241.2 527.8,241.5 527.9,241.9 528.3,242.2 528.4,241.9 529,242.4 529.4,242.3 530,242.7
				530.2,243.4 529.8,243.8 530.1,244.1 530.1,244.5 530.5,244.5 531.2,245.2 530.9,245.6 530.5,245.5 530.4,245.8 530.7,245.9
				531.6,245.7 532.8,245.7 532.7,246 532.4,246.2 531.8,246.5 530.9,246.5 530.7,246.8 531,246.9 531.5,246.7 532.1,246.7
				532.4,246.6 532.4,247 532.6,247.1 532.9,246.7 533.3,246.3 533.7,246.2 533.9,246.6 534.3,246.6 534.8,246.9 535.1,246.5
				535.5,246.6 535.4,246.9 535.2,247 535.5,247.4 535.5,247.7 536.1,248.2 536.3,248.1 537,248.4 537.6,248.3 538,248 538.5,248
				538.8,247.7 539.3,248 539.6,247.8 539.6,247.2 539.7,246.8 539.6,246.2 540.8,246.1 541.8,246.2 543.1,246.9 543.6,246.9
				544.5,248.1 545.2,248.5 547.8,248.2 548.5,247.9 548.8,247.9 548.9,248 549.3,247.8 549.4,247.3 550.6,246 550.9,245.9
				552,246.3 552.7,246.6 553.6,246.4 553.6,246.2 554.2,245.7 554.7,245.9 554.8,246.3 554.4,247 553.8,247.4 553.8,247.7
				554.3,248.3 554.2,248.7 554.8,248.8 			"/>
		</g>
		<g>
			<polygon fill="#2294E6" points="214.9,195.2 215.5,195.2 216.1,195.7 216.2,195.9 216.5,196.3 216.7,196.4 217.2,196.6
				217.3,196.7 217.9,196.9 218.2,197.3 218.4,197.2 218.9,197.1 219.3,197.2 219.9,197.1 220.5,197.7 220.9,197.7 221.1,198.3
				222.1,198.6 222.6,198.7 223,199.2 223.4,199.4 224.3,199.3 224.8,199 225.1,199.3 225.3,199.8 226.6,199.8 226.9,200.1
				227.6,200.3 228,200.6 239.1,205.8 239.8,206.7 241.5,208 243.3,216.6 243.1,220.3 242.8,220.9 242.5,221.6 242.1,222.1
				241,222.7 240.5,223.3 241,224.2 250.5,221.6 251.7,221.2 252,219.8 257.2,218.3 259.5,216.6 260,216.2 260.8,216.1 262,214.9
				262.6,214.4 263.3,214.1 263.8,213.7 264.7,213.5 272.8,213.7 273.5,213.1 273.7,213 274,212.8 274.3,212.8 274.8,212.9
				275.1,212.7 275.3,212.3 276.2,211.3 276.5,211.2 277.2,210.3 277.5,209.7 277.6,209.1 278.3,208.7 278.2,208.3 278.7,207.6
				279.7,206.5 279.9,206.1 280.4,205.6 280.6,205.6 280.9,205.8 281.3,206.2 281.9,206 282.6,206.2 282.9,206 284,207 284,207.9
				283.4,211.4 283.3,211.8 283.5,211.9 283.7,212.2 283.9,212.5 283.9,213 283.8,213.3 283.9,213.5 283.8,213.8 283.9,213.9
				283.9,214 284.7,214.1 285.3,214.1 285.5,214.5 285.8,214.5 286.1,214.2 286.5,214.4 287.2,214.2 287.4,213.7 287.9,213.2
				287.6,213.7 287.8,213.8 287.6,214 287.9,214.2 289.1,213.9 289.3,213.5 290,213.5 290.6,212.9 291,212.7 291.6,211.9
				291.7,212.2 292.1,212 292,212.3 291.5,212.9 290.9,213 290.4,213.7 291,213.9 291.4,213.5 291.9,213.5 292.3,213.7 293.4,213.8
				294.3,213.8 293.7,214.1 292.9,214.2 292.4,214.3 292.3,214.6 292.4,214.8 292,214.6 291.9,214.1 291.6,213.9 290.7,214.2
				289.8,214.8 288.6,215.1 287.5,215.7 287.4,216.1 286.7,216.7 286.3,217.5 286.3,218.2 286.5,218.7 286.6,219.2 286.8,219.1
				287.1,219.2 287.2,219.9 287.6,220.2 287.9,220 288.2,220.2 288.5,220 288.5,219.5 288.7,219.4 289.1,219.4 289.7,218.9
				290.2,218.8 291,217.9 291.8,217.2 291.6,216.9 292,216.3 292.3,216.3 292.5,216 292.8,216 293,216.6 293.8,216.7 293.7,216.4
				294.2,216.4 295,215.9 295.9,215.7 296.9,215.5 297.4,215.5 298.6,214.8 299.4,214.5 299.9,214.5 300.3,214.6 300.7,214.4
				300.5,214.1 299.9,214.2 299.4,213.9 299.6,213.8 300,213.7 300,213.4 299.1,212.9 298.4,212.8 298.5,212.6 298.4,212.2
				297.6,212.7 297.5,213 296.5,212.8 296.4,212.5 295.6,212.2 295.4,212.4 294.8,212.2 294,212.2 293.2,211.6 293.8,211.4 294,211
				293.2,211 292.9,210.8 292.4,210.8 292.1,210.1 291.8,209.9 291.8,209.1 291.8,208.6 291.5,208.2 291.8,207.7 291.8,207.5
				290.7,207.4 291.1,207.1 291.4,207 292.1,205.6 292.7,205.2 292.5,204.8 292.1,204.9 292,204.6 291.4,204.6 290.9,205
				290.3,205.3 290.1,204.9 289.9,204.4 288.8,204.1 288.1,204 287.3,204.1 288,203.8 288.6,203.9 289.2,203.8 289.6,203.5
				290.2,203.7 290.7,204.1 291.3,204.1 292,203.6 292.5,203.5 293,203.1 293.6,202.9 294.1,202 293.8,201.8 294.1,201.6
				293.9,201.3 293.3,201 292.9,201.1 293,200.9 292.9,200.8 293.7,200.9 293.7,200.7 292.6,200 291.6,199.6 289.8,199.6
				289.2,199.9 288.6,199.9 286.9,200.5 285.5,200.8 284.7,201.2 283.9,201.3 282.7,202.1 280.8,203.4 279.4,204.7 279,204.9
				278.4,205.6 277.6,206.5 276.7,207.1 275.4,207.7 274,208.3 273.3,208.3 274.2,208.1 275.6,207.5 275.7,207 277,206.3
				277.4,205.7 277.6,205 278.1,204.9 278.8,204.2 279.5,203.8 279.8,202.9 280.9,202.3 281.5,201.3 281.8,201.2 282,200.9
				282.6,200.5 283.1,200.4 283.3,199.8 283.8,199.5 284,199.7 284.3,199.7 284.8,199 285.7,199 286.2,198.8 287,198.8 287.4,198.3
				287.4,197.6 287.7,197.3 287.7,196.9 288.4,196.6 289.4,195.7 289.9,195.6 290.1,195.3 289.8,195.1 290.1,194.8 290.6,194.5
				291.1,195 291.7,195.2 292.9,195.1 293.7,195.4 294.1,195.4 294.4,195.5 295,195.1 295.4,195.5 295.9,195.5 296.4,195.2
				297.1,195.6 297.9,195.7 298.3,195.4 298.5,195.4 299,195.7 299.6,195.8 299.9,195.7 300.7,196.1 301.1,196.1 301.6,195.9
				302,196 301.9,196.3 302.4,196.4 303.7,196 304,196 304.6,195.8 304.8,196 305.7,196 306.1,196.2 306.6,196 306.7,195.6
				307.3,195.6 307.6,195.4 307.8,195.5 308.2,195 308.7,194.7 308.8,194.5 309.3,194.6 309.6,193.8 309.7,193.3 310,193.3
				310.4,193 310.5,192.6 310.3,192.5 310.4,192.3 311,192.4 311.5,192.2 311.5,191.9 311.6,191.7 311.9,192.1 312.5,192.2
				313.1,191.8 313.2,192 313.7,192.1 314.1,191.8 314.4,192.1 314.9,192.1 315,191.8 315.3,191.7 315.7,191.3 316,191.3
				316.5,190.8 317.1,190.8 317.9,190.2 318.1,189.8 318.5,189.8 318.6,189.3 318.8,188.8 318.5,188.6 318,188.7 317.7,188.4
				317.9,188.4 318.4,188.5 318.8,188.3 318.4,187.9 318,187.9 317.2,187.6 316.9,187.1 317.6,187.6 318,187.3 318.2,186.9
				318.6,186.7 318.8,186.2 318,186 318.4,185.6 318.9,185.7 319.3,185.3 319.2,184.9 318.4,184.6 318.3,184.1 318.5,184 319,184.3
				318.9,184 318.2,183.6 317.4,183.6 317.5,183.3 317.7,183.2 317.6,183 317,182.9 316.2,183.4 316,183.8 315.8,184.1 315.6,183.6
				314.9,183.6 315.3,183.2 315.6,183.2 316.2,182.6 316.3,182.1 315.9,181.2 314.9,181 313.7,181.1 313.3,181.3 313.5,181.4
				314.2,181.4 314.4,181.6 313.8,181.6 313.1,181.6 312.2,181.9 311.6,182 311,182.6 310.8,183.1 310.4,183.2 309.8,183.7
				309,183.6 308.5,184.6 308.2,184.6 308,184.8 307.7,184.8 307.5,184.4 307.8,184 308.2,184.1 308.3,183.8 307.2,182.9
				307.1,182.6 306.7,182.5 306.9,182.2 306.8,181.7 307.4,182.7 308.4,183.4 308.6,183.1 308.7,182.6 309.3,182.6 309.7,182.2
				310.6,181.7 311.6,181.5 312.7,181.4 312.6,181.1 312.2,181 311.2,181.4 310.1,181.6 310.2,181.2 311.6,181 312.7,180.9
				313.2,180.4 314,180.1 314.3,180.3 315.3,180.1 315.3,179.9 316.2,179.8 315.7,179.3 314.4,178.9 314.6,178.7 314.9,178.7
				315.2,178.2 314.8,178 314,178.2 313.6,178.7 313,178.4 312.4,178.4 312.3,178.1 312.6,178 312.6,177.1 312.7,176.8 311.9,177.4
				312,177.1 312.3,176.8 312.1,176.8 311,177.7 310.6,178 310.3,178 310.7,177.5 311.5,176.9 311.2,176.7 310.5,177 310.3,176.9
				310.6,176.7 311,176.4 311,176.2 310.4,176.3 309.9,176.9 309.3,177.5 309.1,177.4 309.3,176.9 309.8,176.6 309.8,176.3
				309.4,176.3 308.3,177.2 307.9,177.4 307.3,177.1 307.9,177.2 308.4,176.8 309.2,175.7 309.9,175.3 309.6,174.9 309.6,174.5
				309.5,174.4 309,175.1 308.7,175.2 308.7,174.9 308.9,174.6 309,173.9 308.6,173.8 308.4,173.7 307.9,174 307.7,173.8
				307.8,173.4 307.7,173.3 307.4,173.2 307.7,173 307.4,172.7 307.4,172.3 307.1,172.3 306.4,172.4 306.3,172.6 306,172.7
				305,172.4 305.7,172.5 306,172.2 306.6,172.1 306.7,171.8 306.4,171.5 305.9,171 305.8,170.5 305.1,170.1 305.9,170.1
				306.6,170.5 307.2,170.4 307.2,170.1 306.7,169.9 306.8,169.6 307.2,169.8 307.9,169.2 308.3,169 308.5,168.5 307.9,168.1
				307.5,168.1 307,168 307.4,167.7 307.6,167.3 307.3,167 306.7,167 306.5,166.8 306.1,166.9 305.7,166.6 306.3,166.6 306.5,166.3
				306.9,166.5 307.5,166 307.2,165.1 306.7,164.6 306.4,164.9 305.9,164.8 305.5,165.1 305.7,164.6 306.3,164.2 306.7,164.1
				306.7,163.6 306.2,163.5 305.8,163.7 305.2,163.7 304.3,164.1 305.1,163.1 305.7,163.1 306.1,162.8 306.1,162.5 306.5,162.2
				306.3,162 305.7,162.3 304.8,162.2 304.1,162.6 304.3,162.1 304.1,161.8 304.4,161.4 304.8,161.7 305.6,161.7 306.1,161
				306.1,160.4 305.6,160.7 305.2,160.5 305.7,159.9 305.9,159.5 305.5,159.4 304.2,159.7 303.8,159.5 304,159.1 304.6,159.2
				305.1,159.1 305.5,158.4 305.1,158.2 305.1,157.8 304.7,158.1 304.5,158.1 304.4,157.8 304,157.5 304.4,157.3 304.6,157.5
				304.9,157.3 304.8,156.6 304.3,156.2 304.2,155.6 304.5,155.4 304.5,154.9 304.1,154.9 304.3,154.7 304.4,154.2 304.1,154.2
				303.7,154.1 303.8,154 304.1,153.9 304.4,153.5 304,153.2 304.1,152.9 304.4,152.6 304.2,152.4 303.8,152.6 304.2,152.2 304,152
				303.4,152.2 302.9,152.8 303.1,153.2 302.8,153.6 302.2,154.3 302.1,154.7 301.8,155 301.8,155.5 301.5,155.1 301.2,155.3
				300.9,156.1 300.9,156.5 301.4,156.5 301.6,156.9 301.6,157.3 301.1,156.8 300.8,156.8 300.6,157.2 300.3,157.7 299.9,158
				299.7,158.7 299.3,158.8 299,159.3 299,159.5 298.8,159.6 298.8,160.4 298.4,161.3 298.5,160.6 298.4,159.8 298,159.5 297.3,160
				296.9,160.5 296.8,161 296.3,161.2 296.1,161.4 296,161.2 295.6,161.1 295.1,161.6 294.6,161.6 294,162.1 293.9,162.7
				293.3,163.4 293.5,162.9 293.5,162.4 293.7,162.2 293.6,161.1 293.7,160.6 293.5,160.5 292.8,161.2 292.1,162.7 291.5,163
				291.9,162.5 292,161.9 292.6,160.9 292.6,160.3 292.7,159.7 292.4,159.1 291.8,158.7 291.3,158.7 291.5,159.3 291.3,159.3
				290.8,158.9 290.2,158 291.2,158.4 291.4,158.3 291,158.1 290.3,157.1 290.1,157 290.7,156.2 290.8,155.9 291.3,155.2
				291.3,154.2 290.6,153.6 289.5,153.4 288.3,152.7 289.7,153.2 290.9,153.3 291.1,152.5 291.3,152.2 291.4,152.9 291.7,152.4
				291.6,151 292.1,150.2 292.8,150.1 293,149.2 292.9,148.2 292.5,148.2 292.4,149.1 291.7,149.6 291.4,149.1 291.6,148.1
				290.8,147.9 290.2,148.2 290,147.9 289.7,148 288.8,147.2 288.4,147.5 288.4,147.1 287.9,147.5 287.9,147 287.2,146.3
				287.7,146.3 287.9,145.8 288.4,146.1 288.5,145.8 288,145.1 287.6,145.5 287.1,145.1 287.6,145 287.3,144.4 286.7,143.9
				286.3,144.1 286.3,143.7 286.7,143.3 286.7,142.4 286.2,142.4 285.5,141.8 285.5,141.3 284.6,140.5 283.8,141 283.4,141
				283.1,141.3 282.5,141 282.5,141.6 282.1,141.1 281.7,141.1 281.4,140.8 280.9,140.7 280.1,141.3 279.2,141.3 279.9,141
				280.1,140.5 279.4,140.5 278.1,139.8 277.2,139.3 276.3,139.3 275.9,139.1 275.6,139.2 275.3,139.2 274.9,139.6 274.9,140
				274.6,140 274.3,139.8 273.9,140.1 273.9,140.8 273.5,141.6 273.5,142.6 273.8,143.2 274.1,143.2 274.1,143.5 274.4,143.6
				274.4,144.2 274.2,144.5 273.8,144.5 273.7,145.1 273,146.2 271.8,147.1 271.8,147.6 272,147.7 272.9,147.6 273.3,147.7
				272.8,147.9 272.6,148.7 272.6,149 273.2,149.1 272.7,149.3 272.3,149.7 272.5,150.1 272.8,150.4 272.3,151 272.4,151.2
				273.1,151.2 273.2,151.6 272.6,152.7 272,152.9 272,153.6 272.2,153.9 271.8,153.7 271.5,153 271.2,153 270.6,153.8 270.6,154
				270.8,154.1 270.9,154.5 270.5,154.9 270,155 268.6,156.5 268,156.7 267.7,157.8 267.9,158.3 268.4,158.4 268.6,159 269.2,159.4
				270,160.7 270.2,162.2 270.1,163.9 270.6,164.7 270.5,165.4 270.5,166.4 270.3,166.6 269.8,167.9 269.6,168.7 269.8,168.6
				270,168 270.3,167.7 270.3,168.4 270.8,169.1 270.4,169.5 269.9,169.6 269.6,169.3 269.3,169.3 268.5,170.5 267.8,170.8
				267.8,171.3 266.5,171.8 266.1,172.2 266.1,172.4 264.4,173 263.3,173.5 263,173.8 262.3,173.8 261.8,174.2 260.7,174.4
				260,174.7 260.1,175 260.2,175.6 260.4,176 260.4,176.5 260.6,176.9 260.4,177.1 260.5,177.5 260.8,177.5 260.5,177.8
				260.7,178.2 260.5,178.4 260.6,178.9 260.3,179.2 260.1,180.2 260.3,180.7 259.8,182.1 259.9,182.4 260.2,182.5 260.2,182.8
				260.4,183.1 259.9,183.8 259.8,184.4 260.2,184.6 260.3,185.4 260.5,185.6 259.8,186.2 259.5,187 259.2,187.1 259,187 259,187.6
				259.3,187.9 259,188.3 258.9,189.1 259,189.8 259.6,190.4 260.1,190.6 259.2,190.5 258.5,190 258.6,189.3 258.4,188.3
				258.1,188.2 258,187.9 258.1,187.5 257.9,187.5 257,188.6 257,189.1 256.8,189.6 256.3,189.5 255.9,189.1 255.1,188.8
				254.4,189.3 253.6,189.7 254.7,188.8 254.9,188 254.8,187.6 254.7,186.8 254.3,186.3 254.3,185.9 254.1,185.9 253.5,185.6
				252.9,185.4 253,185 252.9,184.7 253,184.3 252.7,183.8 252.3,183.6 252.3,182.9 251.7,182.5 251.5,182 251.8,180.9 252.3,180.4
				252.5,179.7 252.5,179.2 253.3,178.1 253.2,176.9 253,176.8 252.9,176.1 253.3,175.4 253.7,174.9 253.8,174.4 254.5,173
				254.4,172.2 254.1,172.2 253.9,172.3 253.9,172.1 253.5,172.1 252.9,172.3 251.9,172.1 251.1,171.9 250.8,171.9 250.6,171.6
				249.4,171.6 248.7,171.7 248.5,171.6 247.6,171.6 247.4,171.4 247.5,171.2 246.8,170.5 246.7,170.1 245.8,169.2 245.4,169.1
				244.5,168.5 244.1,168.4 243,167.7 242.7,167.4 242.4,167.5 242.4,167.3 242,166.3 241.6,165.9 241.6,165.4 241.2,165.1
				240.7,164.3 240.3,164.1 239.4,163.2 238.9,163.1 238.5,162.8 237.3,162.4 236.5,161.7 235.3,160.9 234.3,161 232.3,161.6
				230.3,162.3 229.5,162.3 228.8,162 229.4,162.1 230.3,161.8 232,160.2 232.2,159.6 232,158.6 231.6,158.1 232.1,157 232.1,155.9
				231.7,155.1 231.7,154.5 232,153.9 232,153.3 231.5,153.1 229.9,153.2 229.2,154.6 228.2,155.7 226.9,155.9 226.2,156.5
				226.4,156 227.9,155.6 228.6,154.9 229.2,153.6 228.9,153.5 229,152.8 228.7,152.4 228.8,151.9 228.7,151.5 228.1,151.4
				228.4,151.1 228.9,151 229,150.5 229.5,149.6 229.5,148.8 229.3,148.6 229.7,147.5 230.2,147.2 230.4,146.5 230.7,146 230.9,145
				231.5,144.5 231.2,143.8 231.2,143.5 231.8,143.9 232.4,143.4 232.4,142.9 233,142.7 233.8,141.8 234.3,141.6 234.2,141.2
				234.5,140.7 234.9,140.7 235,140.4 234.8,140.1 235.4,139.7 235.9,139 236.4,139 236.4,138.7 236.7,138.4 236,137.9 236.3,137.7
				236.3,137.4 236.7,137.5 237.4,137.9 237.5,138.2 237.7,138.1 237.6,137.7 237.2,137.4 238,137.1 238.2,136.7 238.9,136.8
				239.1,136.9 239.2,136.5 239,136.2 239.4,136.3 239.5,136.9 239.9,136.4 239.9,136 239.6,135.7 239.6,135.2 239.8,135.4
				240.8,135.7 240.7,135.3 240.2,135.1 240,134.8 240.2,134.6 240.3,134.3 240.5,135 241,134.9 241.4,135.1 241.7,134.8
				241.1,133.8 240.7,132.7 240.2,132.1 240.3,131.5 240.2,131.2 240.3,131 240.7,131.3 241,132.2 241.7,133.2 243,133.4
				243.4,133.7 244.1,133.8 244.4,133.5 244.8,133.5 245.6,132.7 245.7,131.5 244.6,130.2 244.5,129.5 244.2,129.1 243.9,129.2
				243.3,129.8 242.2,129.9 242,130 242,129.8 241.8,129.5 242.2,129.6 242.9,129.5 243.5,129 243.4,128.8 242.4,128.2 241.3,127
				241.1,127 241,127.2 241.2,127.6 241,127.8 240.5,127.4 240.2,126.6 240.7,126.7 240.7,125.9 241,126.4 241.8,126.9 242.2,127.1
				242.6,127.9 243.6,128.5 244.7,128.9 245.2,129.7 245.7,130 245.8,130.4 246.4,130.6 246.6,130.8 246.6,130.2 247.2,129.9
				246.8,129.6 247,129.1 247.4,129.7 247.5,130.1 247.8,130.2 248.5,129.2 248.6,128.2 248.3,127.8 248.5,127.1 248.8,127.9
				248.9,128.4 249.3,127.3 249.8,127 249.9,127.3 250.1,127.5 249.7,128 249.9,128.1 250.1,128.5 250.4,128.1 250.8,128.3
				251.5,129.1 251.6,128.8 252,128.8 252.2,129 252.7,128.9 253.2,128 253.9,127.7 255.7,125.9 255.7,125.5 256,125.3 256.1,125.6
				256.9,124.5 257.4,124.2 258,123.8 258.3,123.6 258.2,123 256.2,122.4 255.1,122.2 254.1,121.9 253.7,121.1 253.1,119.9
				252.9,119.8 252.8,118.9 252.7,118.8 252.8,118.5 253.1,118.6 253.2,118.2 252.8,118 251.7,118 250.4,117.6 250.1,117.6
				249.9,117.9 249.5,117.5 249.6,117.1 250.1,117.3 251.4,117.4 252.2,117.9 253.3,117.9 254,118.4 254.5,119.5 255.1,119.6
				255.3,120 255.1,120.1 254.8,120.1 254.8,120.4 255.7,120.8 255.9,121.4 256.3,121.9 258,122.3 258.5,122.1 258.8,121.5
				259.2,121.2 259.6,121.3 260.2,120.5 260.8,119.8 262.1,118.9 262.5,118.7 262.9,118 262.6,117.5 261.9,117.4 261.7,117
				261.6,116.4 261.9,116.2 261.7,115.9 261.8,115.5 262.4,115.9 262.9,115.8 263.3,116.1 264,116.1 264.8,115.8 264.8,116.1
				265.1,116.2 265,116.4 264.7,117.2 264.7,117.5 265.1,117.4 265.2,117.6 265.6,117.7 266.3,118.1 266.4,117.6 265.9,117.1
				266.2,116.7 266.3,117.1 266.7,117.3 266.8,117.7 267.7,118.5 267.9,118.5 268,118 267.8,117.8 268,117.5 267.9,116.7
				267.6,116.6 267.8,115.8 267.4,114.9 267,114.7 267,114.2 266.7,114.1 266,114.6 265.7,114.5 266.2,113.7 266.7,113.7
				266.9,113.9 267.4,113.6 267.7,114.1 268,114.2 268.1,115.4 268.3,115.3 268.9,114.7 268.4,115.5 268.4,115.9 268.1,116.1
				268.1,116.4 268.4,116.8 268.6,117.4 268.4,117.8 268.7,118 270,117.6 270.3,117.1 270.8,117.1 271.1,117.2 271.8,116.3
				272.3,116.3 272.5,116 273.1,115.6 273.2,115 273.6,114.7 274.5,114.7 274.9,114.9 275.2,114.6 275.1,114.1 275.8,113.4
				275.9,113 276.1,112.9 276.2,112.2 275.6,111 275.7,110.6 275,110.1 274.9,109.6 275.2,109.1 275.8,108.8 276,108.4 275.8,108.4
				275.4,108.7 275.3,108.7 275.2,108.3 275.5,107.8 275.1,107.8 275.4,107.5 275.6,107.1 275.2,106.8 274.8,106.7 275,106.5
				275,106.1 275.4,106.1 275.5,106.3 276,106.4 276.5,106.9 276.9,107 277.1,106.7 277.5,106.8 278.3,106.5 279,106.1 278.8,105.9
				279.1,105.3 278.9,105.2 278.7,105.2 278.7,104.8 278.4,104.6 277.6,104.6 278,104.4 278.6,104.3 279.4,103.6 279.8,103.1
				279.7,102.8 279.4,102.7 279.2,102.4 278.4,102.2 277.9,102.4 277.6,102.2 278.1,102 278,101.4 276.8,100.7 276.8,100.4
				277.2,100.4 277.5,100.8 277.9,100.6 277.6,100.2 277.9,100.1 277.9,99.8 277.2,99.5 276.6,99.1 276.1,99.4 275.1,98.9
				274.9,98.6 274.8,98.3 274,97.7 273.2,97.7 272.8,97.9 272.4,97.9 272.2,97.5 271.6,97.4 271.7,97.7 272.2,97.9 272,98.4
				271.5,98.4 271.5,98.6 271.7,98.8 271.3,99.2 271.2,99.5 271.5,100 271.1,100 271,100.5 270.7,100.9 270.7,101.7 271,101.7
				271.2,102.2 271.5,102.2 271.7,102.8 271.5,102.9 271.1,102.9 270.9,103.1 270.6,102.8 270,102.9 269.8,103.2 270.2,103.7
				270.5,103.7 270.5,104 270,104.1 269.7,103.9 269.4,104.2 269,103.6 268.4,104 268,105 267.5,106.2 266.8,107.3 265.8,108
				265.5,108.5 265.3,108.5 264.8,109.2 264.4,109.4 264.3,110.3 263.9,110.7 263.8,111.4 263.5,111.4 263.2,110.8 262.9,110.8
				262.5,111.2 262.7,111.4 262.8,112.1 262.4,112.1 261.9,111.7 262.1,111.1 261.7,110.3 261.2,108.4 261.2,107.5 261,107.1
				261.3,106.4 261.7,105.9 261.5,105.4 261.8,104.9 262.1,104.6 262.4,104.9 262.8,104.7 263.2,104.1 263,103 263.2,102.5
				263.2,101.9 262.7,101.3 262.6,100.5 262.2,99.6 262.1,99.1 261.8,98.9 261.6,98.9 261.4,99.5 260.7,100.4 260,101 259.9,101.6
				259.9,102.5 259.7,102.8 259.3,102.5 259,102.9 259.1,103.1 259,103.3 258.3,103.7 258.1,104.1 257.6,104.6 257.3,104.6
				257.3,104.2 257.6,104 257.6,103.4 257.4,103.1 258,102.5 258,101.9 258.1,101.4 258.4,101.2 258.5,100.6 258.4,100.5
				258.5,99.8 258,99 258,98.6 257.7,98.1 257.7,97.8 257.9,97.9 258.2,97.9 258.3,98.6 258.5,98.4 259,97.7 259.6,97.7 259.9,97.3
				259.6,97.1 259,97.5 258.7,97.1 258.2,96.9 258.2,96.8 258.5,96.6 258.3,96.3 257.9,96.4 257.8,96.9 257.1,97.1 256.6,96.6
				256.5,96.1 256.2,95.9 255.6,96.1 255.4,95.8 255.5,95.2 255.8,95.1 255.9,94.8 256.3,94.7 257.8,93.7 257.9,93.4 257.5,93
				256.8,93.2 256.8,93 257.3,92.8 257.5,92.2 258.2,91.9 258,92.5 258.3,93 258.8,92.9 259.1,93.1 259.5,92.7 259.6,92.3
				259.2,91.8 258.8,91.7 258.8,91.3 259,90.8 258.8,90.3 259,90.1 259,89.7 258.4,89 258.6,88.5 258.4,88 258.7,87.8 258.7,87.1
				259.1,86.5 259.1,86 259.5,85.5 259.5,85.2 259.2,85 259.3,84 259.1,83.6 258.7,83.1 258.7,82.7 258.6,82.2 258.9,82.1
				259.1,81.6 258.7,81.3 258.2,80.9 257.9,80.7 258,80.5 258,80 257.1,79.8 256.4,79.5 256,79.7 256.1,80.2 255.3,80.7 255.1,81
				254.4,81 253.9,81.5 254.2,82 254.7,82.2 255.1,82.2 255.1,82.5 254.5,83.4 254.4,83.8 253.9,84.1 254,83.7 253.7,83.4
				253.9,82.8 253.5,82.5 252.8,82.7 252.4,83.4 252.1,83.4 251.7,84.1 251.4,84.3 250.9,85.2 250.2,86 250.1,86.6 250.3,87.2
				250.3,87.5 250.6,87.6 251,87.4 251.3,87.4 251.3,87.7 250.9,88 250.8,88.3 250.4,88.2 249.8,88.4 248.9,89.3 248.5,89.7
				248.4,91.1 248.6,91.6 248.7,92 248.4,92.5 248.6,92.7 248.7,93.2 249.1,93.1 249.3,93.2 249.5,93.9 250,94.2 250.3,94.7
				250.6,94.7 251,94.1 250.9,94.7 251.1,95.5 251.9,95.7 252.3,95.9 252.7,95.9 253.3,96 253.3,96.5 252.8,97.5 252.3,97.8
				252.1,97.7 252.2,97.1 252.6,96.8 252,96.6 251.4,96.8 250.9,97.4 251.2,97.6 251.2,98 250.4,98.3 250.1,98.7 249.8,98.7
				249.4,99.4 249.5,99.6 249.9,99.6 250.1,99.8 250.7,99.7 250.9,99.3 250.8,99.1 251.3,99 251.6,98.7 251.8,99 251.7,99.5
				251.3,100.2 251.2,100.9 251.2,101.2 250.8,101.7 250,101.7 249.5,102.3 249.2,102.4 249.2,102.7 248.9,103.2 247.7,103.7
				247.4,104.2 246.9,104.3 246.7,104 246.5,104 246.3,103.7 246,104.1 245.7,104.2 245.9,104 245.7,103.8 245.1,104.2 244.9,104.9
				244.5,105.6 244.3,105.9 244.6,106.2 244.6,106.6 244.3,107.4 244.3,107.8 244.5,108.1 244.1,108.4 243.9,109 244.1,109
				244.4,108.9 244.7,108.5 245.2,108.5 245.7,108.2 245.3,108.7 244.8,108.7 244.3,109.3 243.6,109.5 243.5,110.1 243.1,110.4
				242.7,110.1 242.1,110.1 241.7,109.7 241.4,110 241.5,110.9 241,112 241.2,110.8 241,110.1 240.7,109.5 240.8,108.8 241.1,108.7
				241.3,109.5 242,109.2 242.2,109.7 242.8,109.9 243.2,109.6 243.3,109.2 243.5,108.5 243.1,108.6 242.7,108.5 243.1,108.3
				243.5,107.7 243.1,107.6 242.7,108 242,108.2 242,107.9 242.6,107.5 242.6,107 242.3,107 241.8,107.2 241.8,106.9 242,106
				242.3,105.5 242.5,106 242.7,105.7 242.7,105.3 243.5,104.6 243.5,104.2 244.4,103.7 244.4,103.1 244.8,102.8 245.1,102.6
				245.2,102.4 244.6,102.4 243.9,102.5 243.6,103.1 243,103.5 242.6,103.4 242.7,103.1 243.3,102.9 243.5,102.4 243.1,102.2
				242.7,102.4 242.3,102 242.5,101.6 242.6,101 242.2,100.6 241.9,100.7 241.8,101.1 241.8,100.7 241.9,100.4 241.7,100 241.2,100
				241,100.5 240.4,100.8 240.3,101.1 240.1,100.9 240.1,100.6 239.8,100.1 239.4,100.1 239.3,100.5 239.4,100.8 239.3,101.1
				239.5,101.5 239.5,101.9 239.2,102.2 239,101.9 239,101.6 238.7,101.5 238.6,101.9 238.9,103 239.1,103.8 239.8,104.1
				240.1,104.5 240.1,105.6 239.9,105 239.5,104.7 238.7,103.8 238.6,103.1 238.3,102.2 238,102.1 237.8,102.4 237.9,103.1
				238.4,103.6 238.4,104.2 238.2,104.4 237.8,103.9 236.8,104.1 236.6,104.3 236.1,103.9 235.7,103.8 234.8,103.1 233.7,103.1
				233.6,102.8 233.4,102.8 232.7,103.2 232.4,103.7 231.4,103.6 230.8,103.9 230.2,103.5 230.1,103.4 230,102.9 229.8,102.8
				229.2,103.2 229.2,102.8 228.5,102.1 228.4,101.7 228.1,101.6 228.1,101.3 228.3,101 228,100.7 227.7,100.8 227.6,100.6
				227.6,100.2 227.4,100.1 226.9,100.4 226.4,100.4 226,99.9 225.8,100 225.7,99.8 225.2,99.6 224.6,99.6 224.8,99.2 224.9,98.8
				225.3,98.5 225.3,98.2 225,98.1 224.6,98 224.4,97 224.2,96.8 224.2,96.6 224.6,96.3 224.7,96.1 224.4,95.9 224.6,95.6
				224.7,94.5 224.5,94 224.2,94 223.9,93.7 223.6,93.3 222.9,93.5 222.5,93.5 221.1,93.9 219.1,94 218.5,93.8 218,93.8 217.3,94.8
				216.8,95.1 216.6,95.6 217,95.8 217.3,95.6 217.5,95.6 217.4,96.1 217,96.4 217.1,96.7 217.9,96.8 218,97 218.6,96.9 218.6,96.5
				218.2,96.2 218.3,95.8 218.7,95.7 218.7,96 219.2,96 219.7,96.3 220.1,96.2 220.2,95.7 220.5,95.4 220.4,95.9 220.9,96.4
				221,96.2 221,95.8 221.5,95.8 221.7,95.4 222,95.4 223.1,95 223.5,95 223.6,95.2 224.1,95.2 223.7,95.6 223.9,96 223.3,96.6
				223,96.4 222.7,96.6 222.2,96.6 221.9,96.4 221.6,96.4 221.1,97.3 221.3,97.9 221.3,98.6 221.2,97.9 220.9,97.8 220.7,97.4
				220.4,97.4 220.1,97.9 219.5,98 219.3,98.2 219.3,97.8 219,97.8 218.7,98.3 218.3,98.4 218,98.2 217.6,98.2 217.4,98.5
				217.4,98.7 216.6,98.8 216.2,99.1 216.2,99.5 216.3,100 215.9,101.4 215.6,102.4 215.6,102.8 216.1,103.2 215.9,103.5
				215.4,103.6 215.4,104 215.7,104.5 215.7,105 215.5,105.3 215.4,105.1 215,105.3 214.8,105.2 214.9,104.7 215.1,104.6
				215.1,104.1 214.7,104.1 214,105.3 213.9,106.5 214.2,107.8 214.2,109.6 214,107.8 213.7,107 213.5,106.7 213.7,106.3
				213.7,105.9 213.2,105.5 213.4,104.8 213.3,103.9 213,103.3 213,102.3 213.4,101.7 213.8,100.8 213.8,100 213.7,100 213.5,100.4
				213.4,101.1 213,101.5 212.8,101.3 212.7,100.8 213.1,99.9 213.2,99.4 212.8,99.1 212.5,99.4 212.3,99.3 212.2,99 212.3,98.6
				212.2,98 212,98 212,97.8 212.1,97.5 212.1,97 211.7,97.1 210.1,97.7 209.3,98.1 209,98 209,97.7 208.7,97.7 208.4,98.2
				208,98.2 207.7,97.9 206.9,98.5 207,98.1 206.5,97.8 206.2,97.8 206.2,98.1 205.5,98.1 204.3,97.6 203.4,97.5 202.5,97 201.8,97
				201.7,96.5 201.1,96 200.8,96.2 200.3,95.8 200.1,95.2 199.6,95 199.4,94.7 199.9,94.5 200.5,94.6 200.5,94 201,93.7 200.9,93.3
				201.3,93.3 202,93.6 202.3,93.4 202.2,93.2 202.9,93.2 204.1,93.7 204.6,93.1 204.7,92.5 205,91.9 204.7,91.3 204.6,90.6
				204.4,90.1 204.1,89.4 203.7,89.3 203.6,88.9 202.8,88.2 202.6,88.2 202.5,88.6 202.2,88.7 202,88.2 201.2,87.8 201.2,88.1
				201.7,88.5 201.6,88.8 201.9,89.2 201.7,89.7 201.3,89.2 201.3,88.6 200.8,88.6 200,88.1 199.8,87.8 199.5,88 199.2,87.8
				199,87.3 198.4,86.9 198.2,86.9 197.3,86.1 196.6,85.7 196.4,85.2 194.2,83.8 193.5,82.8 193.5,82.1 193,80.7 193,80.2
				192.6,80.2 191.9,79.7 191.4,79.7 190.9,79.3 190.4,79.2 190,78.9 189.4,79.1 188.8,79.7 188.2,80.7 187.7,80.9 187.2,81.3
				186.6,81.3 186.2,81 185.4,80.9 185.1,80.6 185.5,80.1 185.7,79.8 186,79.8 186.5,79.3 186.9,79.1 187.1,78.9 186.9,78.6
				186.5,78.7 186.3,78.5 186.4,78.2 186.9,77.7 186.8,77.4 187.4,76.9 187.4,76.5 187.3,75.9 186.6,76 186.6,76.5 185.6,77.1
				185,77.1 185.6,78.1 185.2,78.5 185.1,78.1 184.4,78 183.8,78.5 184.1,78.6 184,79.2 183.4,79 182.9,79.3 183.1,79.7 183.6,79.7
				183.9,80.1 183,80.6 182.6,79.8 182,79.6 181.8,78.9 181.8,76.4 182.3,75.4 182.2,73.7 182.6,73.1 182.4,70.9 182.4,70.2
				181.6,70.5 181.1,71.3 181.4,71.6 181.1,72 181.4,72.6 181.3,73.4 180.8,73.3 180.5,72.9 180.3,73.2 180.3,73.7 179.8,73.5
				179.3,73.9 179.3,74.2 179.1,74.2 177.8,74.8 177.1,75.6 176.7,75.2 176.7,74.8 177.4,74.6 177.5,74 177.1,74 176.6,74.3
				175.6,74.3 174.9,74.7 174.1,74.7 172.5,75.9 171.6,76.1 171,77.1 170.9,76.7 171.6,75.8 171.4,75.4 170.6,76 170.5,75.8
				170.1,75.8 169.7,76.1 169.3,75.7 168.9,75.8 168.8,76.3 167.3,77.2 166.8,77.2 165.9,77.5 165.2,78.2 165.4,78.7 164.9,78.5
				164.6,78.7 164.1,78.5 164,78.7 164.6,79.4 164.1,79.1 163.6,78.5 163.9,78 164.2,78 164.6,77.5 165.1,77 165.4,77.3 165.8,77.1
				165.9,76.7 166.6,76.2 166.6,76.5 167.9,75.9 168.3,75.2 169,75 169.9,75.1 170.1,74.9 170.9,74.9 171.8,74.5 172,74.9
				172.3,74.9 172.7,74.6 173.1,74.7 173.8,74.5 174.1,74 175.2,73.7 176.5,73.3 176.6,72.8 176.9,72.8 177.1,72.6 176.8,72.3
				176.8,71.8 176.4,71.5 176.2,71.8 176.2,72.2 175.7,72.3 175.6,72 175.3,72 175.2,71.8 174.6,71.8 173.7,72.2 173.5,72.7
				173.1,72.9 172.8,72.5 172.6,72.5 172.1,72.8 170.8,73.3 169.2,73.4 168.9,73.1 168.5,73.1 168.6,73.3 168.3,73.5 167.8,73.4
				167.5,73.5 167.2,74.1 166.5,74.9 166.3,74.7 165.7,74.7 165.6,74.6 164.9,74.6 164.5,74.8 164.1,74.8 163.9,75.2 163.4,75.4
				162.9,75.8 162.2,76.2 161.3,76.5 161,77 160.9,77.9 161,79.4 160.9,80.2 160.6,80.1 160.2,80.3 159,81.3 159.4,80.8 159.9,80.1
				160,79.7 159.7,79.6 159.7,79.2 159.1,78.4 158.7,78.4 158.5,77.9 158.1,77.8 158.1,77.1 157.5,76.2 157.4,76.3 157,76.1
				156.9,75.6 156.6,75.4 156.4,75.6 155.9,75.2 155,74.2 154.8,73.4 154.7,72.5 154.6,72.4 154.4,72.7 154.1,72.6 153.9,72
				154.2,71.4 154.1,71.2 154.2,70.9 153.6,70.2 153.6,69.7 153,69.3 152.8,69.3 152.6,68.9 152.1,68.5 151.6,68.5 150.1,67.3
				149.7,67.3 149.6,67 117.4,125.8 119.2,125.8 119.8,126.1 120.8,125.5 122.2,125.7 121.6,126.9 121.9,127.6 122.4,129
				123.2,132.2 123.5,132.9 123,133.7 122.9,134.1 123.1,134.1 124.2,133.9 125.1,133.8 125.8,133.4 126.6,132.3 127.2,131.6
				128.2,131.3 128.4,131.2 129.4,130.9 130.2,130.8 130.8,131.3 130.8,131.8 131,132.2 130.5,133 130.4,133.4 131,135 130.9,135.4
				131.1,136.5 131.7,137.2 131.8,138.2 132,138.6 132.1,139.1 131.9,139.6 131.9,140.1 132.1,140.6 131.9,142.2 131.9,144.2
				132,146.2 131.5,146.5 131.5,146.9 131.8,146.9 132.1,147.1 132.2,147.3 132,147.4 131.7,147.7 131.8,148 132.1,148.2
				132.1,148.6 131.9,148.9 132,149.1 132.4,149.1 132.8,149.3 133.3,150 133.4,150.3 133.8,150.6 134.4,151 134.7,151.6
				134.7,152.1 135,152.2 135.1,152.5 135,152.8 135,153 134.8,153.1 134.8,153.6 134.8,153.7 135,153.8 134.7,154.4 134,155.8
				133.9,156.7 133.3,157.5 133.2,157.8 133.4,157.8 134.3,156.8 134.4,156.2 135.1,155.6 135.2,155.9 135.6,156 135.5,156.2
				134.8,156.7 134.5,157.2 133.7,158 133.8,158.2 134.1,158.3 133.8,158.5 133.2,158.4 132.8,158.5 132.5,159.3 131.9,159.7
				132.1,160.3 131.8,160.2 131.5,159.9 131.1,160.2 131.1,161 131.6,161 131.7,161.4 131.5,162.3 131.4,163.7 131.6,164.5
				132,165.3 132.3,165.4 132.4,165 132.9,164.5 133.7,164.3 134.2,163.9 134.7,163.3 134.9,163.3 134.9,163.9 134.7,164.4
				134.4,164.5 134,165 134.1,165.3 134.5,165.7 134.9,166.1 135.4,166.1 135.9,166.2 136.1,166.5 135.5,166.2 134.8,166.3
				134.3,166 133.6,166 133.4,166.4 133.4,166.8 133.7,167.2 133.7,168.3 133.9,168.8 134.2,168.8 134.6,168.5 134.9,168.8
				134.6,169 134.5,169.2 134.8,169.5 134.8,169.7 134.6,169.9 134.2,169.9 133.7,170.1 133,170.5 132.9,170.8 133.2,171.1
				134,170.8 134.4,170.9 133.9,171 133.8,171.3 134.2,171.7 135,171.5 135.8,170.9 136.3,170.2 136.8,170.1 137.3,169.7
				137.4,169.2 137.6,169.1 137.8,169.5 137.3,170.2 136.8,170.6 136.2,170.9 136.1,171.2 136.3,171.5 136.7,171.4 137.4,171.4
				137.9,171.6 137.2,171.6 136.7,171.8 136.7,172.6 136.9,173.3 136.7,173.4 136.4,173 136.4,172.2 136.2,171.9 135.8,172.1
				134.5,173 134.2,173.4 133.5,173.7 133.3,174.2 133.4,174.6 133.3,175 133.5,175.1 133.9,174.9 134.4,174.7 134.7,174.2
				134.9,174.3 135.2,174.6 136,174.7 135.9,174.9 135.4,174.7 134.7,174.7 134.4,175.1 134.4,175.3 134.5,175.6 134.1,175.7
				133.8,175.6 133.1,175.8 133,176 133.7,176 134.1,176.2 134.6,176.2 134.3,176.5 133.7,176.5 133.4,176.2 132.9,176.3
				132.8,176.8 133,177 133.4,177 134,176.9 134.4,177.1 135.1,177.1 135,177.3 134.5,177.5 134,177.3 133.9,177.5 134.1,177.6
				134.8,177.6 135.1,177.6 135.1,177.9 134.4,178 133.8,177.8 133.4,177.6 133.2,177.8 133.5,178.3 134.1,178.8 134.2,178.3
				134.6,178.3 135.1,178.5 135.8,178.4 136,178.6 135.6,178.8 135.6,179 136.1,179 136.2,179.4 137,179.7 137.3,179.5 137.6,178.9
				138.1,178.5 138.2,178.1 138.2,178.6 137.9,179.2 137.2,179.7 136.6,179.9 136.1,179.9 135.7,180.3 135.7,180.5 136.1,180.7
				136.4,180.5 136.7,180.4 136.8,180.7 137,180.7 137.3,180.4 137.7,180.1 137.7,180.3 137.5,180.6 137.5,180.9 137.8,181
				138.2,181.2 138.5,181.1 139.1,180.3 139.2,179.3 139.4,178.9 139.7,178.8 139.7,179.1 139.5,179.4 139.5,180.2 139,180.9
				138.6,181.3 138.8,181.5 139.4,181.5 139.9,181.4 140,181.5 139.7,181.9 139.4,182.6 138.7,183 138.7,183.3 139.1,184
				139.6,184.3 140,184.1 140.4,184.1 140.5,184.5 140.8,185 140.8,185.3 140.5,185.3 140.3,184.8 140,184.7 140,185.3 140.5,186
				141.2,185.6 141.8,185.4 142.2,185.1 142,185.8 141.5,186.9 141.7,187.9 142.1,187.9 142.1,188 214.3,195.2 			"/>
		</g>
		<g>
			<polyline fill="#2294E6" points="473.6,203.2 474.1,203.6 474.1,203.9 474.6,204.3 475,204.2 475.5,204.2 475.9,204.3
				476.4,204.1 477,204.4 477.6,204.4 478.1,204.8 477.5,205.4 477.2,206.3 477.2,206.7 476.8,207.1 476.5,208 476.6,208.8
				477,209.1 477.3,209.7 477.3,209.7 477.7,209.8 478.2,209.5 478.9,209.8 479.1,209.4 479.1,209.1 479.6,208.9 479.8,209.4
				480.2,209.5 480.4,209.3 480.8,209.3 481.6,209.9 481.9,210 482,210 482.3,209.9 482.8,209.7 483.2,210.1 483.9,210.3
				484.1,210.1 484,209.7 484.8,209.6 485.5,209.7 485.9,210 486.4,209.9 486.9,210 487.3,209.9 488.2,209.3 488.7,209.3
				489.3,209.4 489.9,209.3 490.5,209.6 490.8,209.4 490.7,208.9 490.1,208.6 490.1,208.2 490.8,207.3 491.4,206.9 491.8,206.4
				492.2,206.4 492.2,205.8 492.3,205.3 492.3,205.3 491.2,204 490.6,203.7 489.7,203 489.1,202.7 489,202.3 489,201.6 488.4,200.7
				487.7,200.3 487.7,199.9 487.9,199.7 488.2,199.9 488.6,200.1 489.6,199.2 490.1,199.2 490.6,198.6 491.2,198.5 491.5,198.1
				492.5,198.1 492.9,198.2 493.3,197.9 493.3,197.4 494.2,197.6 494.6,197.3 495,197.5 495.1,197.4 495.2,197.1 495.2,195.6
				494.8,195.2 494.5,195 494,193.9 494.2,193.4 494,192.8 494,192.4 493.6,191.9 493.7,191.3 492.8,190.4 492.8,190 493.6,189.6
				493.7,188.7 493.4,187.4 			"/>
			<path fill="#3EA5F9" d="M483.9,210.7C483.9,210.7,483.8,210.7,483.9,210.7l-0.8-0.2c-0.1,0-0.1-0.1-0.2-0.1l-0.2-0.2l-0.5,0.2
				c0,0-0.1,0-0.2,0l-0.1,0c-0.1,0-0.2,0-0.2-0.1l-1-0.7l-0.1,0l-0.2,0.2c-0.1,0.1-0.2,0.1-0.4,0.1l-0.3-0.1c-0.1,0-0.2-0.1-0.2-0.2
				c0,0,0,0,0,0.1l-0.2,0.3c-0.1,0.2-0.3,0.2-0.4,0.2l-0.5-0.2l-0.4,0.2c-0.1,0.1-0.2,0.1-0.3,0l-0.5-0.1c-0.1,0-0.2-0.2-0.3-0.3
				l-0.2-0.3l-0.4-0.2c-0.1-0.1-0.2-0.2-0.2-0.3l0-0.8c0,0,0-0.1,0-0.1l0.3-1c0-0.1,0.1-0.1,0.1-0.2l0.3-0.3v-0.3c0,0,0-0.1,0-0.1
				l0.3-0.8c0-0.1,0-0.1,0.1-0.1l0.3-0.3l-0.1,0H477c-0.1,0-0.1,0-0.2,0l-0.5-0.2l-0.4,0.1c-0.1,0-0.2,0-0.2,0l-0.3-0.1h-0.3
				l-0.4,0.1c-0.1,0-0.3,0-0.4-0.1l-0.5-0.4c-0.1-0.1-0.1-0.2-0.1-0.3v-0.2l-0.4-0.3l0.5-0.6l0.5,0.4c0.1,0.1,0.1,0.2,0.1,0.3v0.2
				l0.2,0.2l0.3-0.1c0,0,0.1,0,0.1,0h0.5c0,0,0.1,0,0.1,0l0.2,0.1l0.4-0.1c0.1,0,0.2,0,0.3,0l0.6,0.3h0.4c0.1,0,0.1,0,0.2,0.1
				l0.5,0.4c0.1,0.1,0.2,0.2,0.2,0.3s0,0.2-0.1,0.3l-0.6,0.6l-0.3,0.7v0.4c0,0.1,0,0.2-0.1,0.3l-0.3,0.3l-0.2,0.8l0,0.5l0.3,0.2
				c0.1,0,0.1,0.1,0.1,0.2l0.2,0.4l0.1,0l0.4-0.2c0.1-0.1,0.2-0.1,0.3,0l0.4,0.1l0-0.1c0-0.2,0.1-0.4,0.2-0.4l0.6-0.2
				c0.2-0.1,0.4,0,0.5,0.2l0.1,0.3l0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.1l0.4,0c0.1,0,0.1,0,0.2,0.1l0.9,0.7l0.2-0.1l0.5-0.2
				c0.1-0.1,0.3,0,0.4,0.1l0.3,0.3l0.3,0.1l0-0.1c0-0.1,0-0.2,0.1-0.3c0.1-0.1,0.2-0.1,0.3-0.1l0.7-0.1c0,0,0.1,0,0.1,0l0.8,0.1
				c0.1,0,0.1,0,0.1,0.1l0.3,0.2l0.3-0.1c0.1,0,0.1,0,0.2,0l0.3,0.1l0.3-0.1l0.8-0.5c0,0,0.1-0.1,0.2-0.1l0.4-0.1c0.1,0,0.1,0,0.2,0
				l0.5,0.2l0.5-0.2c0,0,0,0,0.1,0c-0.1-0.1-0.2-0.2-0.2-0.3v-0.4c0-0.1,0-0.2,0.1-0.2l0.7-0.9c0,0,0.1-0.1,0.1-0.1l0.5-0.3l0.3-0.5
				c0.1-0.1,0.2-0.2,0.3-0.2h0l0-0.2l0.1-0.4l-1-1.1l-1.5-1l-0.5-0.3c-0.1,0-0.1-0.1-0.2-0.2l-0.2-0.4c0,0,0-0.1,0-0.2l0-0.6
				l-0.5-0.7l-0.7-0.4c-0.1-0.1-0.2-0.2-0.2-0.3l0-0.4c0-0.1,0-0.3,0.1-0.3l0.2-0.2c0.1-0.1,0.3-0.1,0.5,0l0.4,0.3l0.8-0.7
				c0.1-0.1,0.1-0.1,0.2-0.1l0.3,0l0.4-0.5c0.1-0.1,0.2-0.1,0.3-0.1l0.4,0l0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2l0.9,0c0,0,0.1,0,0.1,0
				l0.2,0.1l0.1-0.1v-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.2-0.1,0.3-0.1l0.7,0.2l0.2-0.2c0.1-0.1,0.3-0.1,0.4,0l0.1,0l0,0l0-1.2
				l-0.2-0.3l-0.3-0.2c-0.1,0-0.1-0.1-0.2-0.2l-0.5-1.1c0-0.1,0-0.2,0-0.3l0.2-0.3l-0.2-0.4c0,0,0-0.1,0-0.1v-0.3l-0.3-0.4
				c-0.1-0.1-0.1-0.2-0.1-0.3l0.1-0.4l-0.7-0.8c-0.1-0.1-0.1-0.2-0.1-0.3V190c0-0.1,0.1-0.3,0.2-0.3l0.6-0.3l0.1-0.7l-0.3-1.2
				l0.7-0.2l0.3,1.2c0,0,0,0.1,0,0.1l-0.1,0.9c0,0.1-0.1,0.2-0.2,0.3l-0.6,0.3l0.8,0.8c0.1,0.1,0.1,0.2,0.1,0.3l-0.1,0.4l0.3,0.4
				c0.1,0.1,0.1,0.1,0.1,0.2v0.3l0.2,0.5c0,0.1,0,0.2,0,0.3l-0.2,0.3l0.4,0.9l0.3,0.1c0,0,0.1,0.1,0.1,0.1l0.3,0.4
				c0,0.1,0.1,0.1,0.1,0.2l0,1.5c0,0.1,0,0.1-0.1,0.2l-0.3,0.4c-0.1,0.2-0.3,0.2-0.5,0.1l-0.2-0.1l-0.2,0.1
				c-0.1,0.1-0.2,0.1-0.3,0.1l-0.4-0.1v0c0,0.1-0.1,0.3-0.2,0.3l-0.5,0.3c-0.1,0.1-0.2,0.1-0.3,0l-0.4-0.1l-0.7,0l-0.2,0.3
				c-0.1,0.1-0.2,0.2-0.3,0.2l-0.4,0l-0.4,0.5c-0.1,0.1-0.2,0.1-0.3,0.1l-0.4,0l-0.9,0.8c0,0-0.1,0.1-0.2,0.1c0,0,0,0,0,0l0.6,0.9
				c0,0.1,0.1,0.1,0.1,0.2l0,0.6l0.1,0.2l0.4,0.2l1.5,1c0,0,0.1,0,0.1,0.1l1.1,1.3c0.1,0.1,0.1,0.2,0.1,0.3l-0.1,0.5l0,0.5
				c0,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1H492l-0.2,0.4c0,0.1-0.1,0.1-0.2,0.1l-0.6,0.3l-0.6,0.8l0.5,0.2
				c0.1,0.1,0.2,0.2,0.2,0.3l0.1,0.5c0,0.1,0,0.3-0.2,0.4l-0.3,0.2c-0.1,0.1-0.3,0.1-0.4,0l-0.5-0.3l-0.5,0.1c-0.1,0-0.1,0-0.2,0
				l-0.6-0.2l-0.3,0l-0.8,0.5c0,0-0.1,0-0.1,0.1l-0.5,0.1c-0.1,0-0.1,0-0.2,0l-0.3-0.1l-0.4,0.1c-0.1,0-0.2,0-0.3-0.1l-0.3-0.2
				l-0.6-0.1l-0.3,0l0,0c0,0.1,0,0.2-0.1,0.3l-0.2,0.2C484.1,210.6,484,210.7,483.9,210.7z"/>
		</g>
		<g>
			<path fill="#2294E6" d="M492.4,205.3l1.7,0.8l0.3-0.3l0.3,0l0.4,0l0-0.4l0.3-0.3l0.2-0.5l0.7,0.2l0.9,0c0,0,0.4,0.3,0.7,0.5
				c0.3,0.2,0.8,0,0.8,0l0.7-0.2l0.5,0.4l1.1,0.3"/>
			<path fill="#3EA5F9" d="M494.1,206.5c-0.1,0-0.1,0-0.2,0l-1.7-0.8c-0.2-0.1-0.3-0.3-0.2-0.5c0.1-0.2,0.3-0.3,0.5-0.2l1.4,0.7
				l0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.1l0.4,0l0-0.1c0-0.1,0.1-0.2,0.1-0.2l0.2-0.2l0.2-0.4c0.1-0.2,0.3-0.3,0.5-0.2l0.7,0.2l0.8,0
				c0.1,0,0.1,0,0.2,0.1c0,0,0.4,0.3,0.7,0.5c0.1,0,0.3,0,0.4,0l0.8-0.2c0.1,0,0.2,0,0.3,0.1l0.4,0.3l1,0.2c0.2,0,0.3,0.2,0.3,0.4
				c0,0.2-0.2,0.3-0.4,0.3l-1.1-0.3c-0.1,0-0.1,0-0.1-0.1l-0.3-0.3l-0.6,0.1c-0.1,0-0.7,0.2-1.1-0.1c-0.2-0.1-0.4-0.3-0.6-0.4
				l-0.8,0c0,0-0.1,0-0.1,0l-0.4-0.1l-0.1,0.2c0,0-0.1,0.1-0.1,0.1l-0.2,0.2l0,0.3c0,0.2-0.2,0.3-0.4,0.3l-0.6,0l-0.2,0.2
				C494.3,206.5,494.2,206.5,494.1,206.5z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M507.8,203.9l-0.1-0.6l-0.3-0.3l-0.4,0l-0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.1l-0.5,0c-0.1,0-0.2-0.1-0.3-0.2
				l-0.5-0.8l-1.6-1.1l-0.7-0.2l-0.9,0.2c-0.1,0-0.2,0-0.3-0.1l-0.6-0.5c-0.1-0.1-0.2-0.2-0.1-0.3l-0.3,0c-0.1,0-0.2,0-0.2,0
				l-0.4-0.2c0.1,0.1,0.1,0.3,0,0.4c-0.1,0.1-0.2,0.2-0.3,0.2h-0.2l-0.2,0.2c-0.1,0.1-0.3,0.2-0.4,0.1l-0.4-0.2
				c-0.1-0.1-0.2-0.2-0.2-0.4l0-0.3c-0.2-0.1-0.3-0.3-0.3-0.4c-0.1-0.1-0.1-0.2,0-0.4l0.2-0.4l-0.1-0.1l-0.3,0c-0.1,0-0.2,0-0.3-0.1
				l-0.5-0.5c-0.1-0.1-0.1-0.2-0.1-0.3l-0.7-0.1l-0.2,0.1c-0.1,0-0.2,0-0.2,0l-0.3,0l-0.1,0.1c-0.1,0.2-0.4,0.2-0.5,0.1l-0.1-0.1
				l0.2-0.3l-0.2-0.1l0.2-0.3c0.1-0.1,0.2-0.1,0.4-0.1l0.4,0.1l0.2-0.1c0.1,0,0.1,0,0.2,0l1.1,0.2c0.2,0,0.3,0.2,0.3,0.4l0,0.1
				l0.2,0.2l0.3,0c0.1,0,0.2,0,0.3,0.1l0.4,0.4c0.1,0.1,0.2,0.3,0.1,0.4l-0.1,0.2c0,0,0,0,0,0l0.3-0.2c0.1-0.1,0.3-0.1,0.4,0
				l1.2,0.7l0.7-0.1c0.1,0,0.3,0,0.3,0.1c0.1,0.1,0.1,0.2,0.1,0.3l-0.1,0.2l0.3,0.2l0.9-0.2c0.1,0,0.1,0,0.2,0l0.8,0.3
				c0,0,0.1,0,0.1,0.1l1.7,1.2c0,0,0.1,0.1,0.1,0.1l0.4,0.7l0.1,0l0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.1l0.7,0c0.1,0,0.2,0,0.3,0.1
				l0.4,0.4c0,0,0.1,0.1,0.1,0.2l0.2,0.7L507.8,203.9z"/>
		</g>
		<g>
			<polyline fill="#2294E6" points="482.3,209.9 482.2,210.5 482.5,211.4 483.2,211.3 483.8,211.9 484.3,211.4 484.8,211.4
				485,211.9 			"/>
			<path fill="#3EA5F9" d="M485,212.3c-0.1,0-0.3-0.1-0.3-0.2l-0.1-0.3h-0.1l-0.4,0.3c-0.1,0.1-0.4,0.1-0.5,0l-0.4-0.4l-0.6,0.1
				c-0.2,0-0.4-0.1-0.4-0.3l-0.3-0.9c0-0.1,0-0.1,0-0.2l0.1-0.6c0-0.2,0.2-0.3,0.4-0.3c0.2,0,0.3,0.2,0.3,0.4l-0.1,0.5l0.2,0.5
				l0.5-0.1c0.1,0,0.2,0,0.3,0.1l0.3,0.3l0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.1h0.4c0.1,0,0.3,0.1,0.3,0.2l0.2,0.5c0.1,0.2,0,0.4-0.2,0.5
				C485.1,212.3,485,212.3,485,212.3z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M515.5,204.3h-0.5v-0.8h0.2l0-0.5l-0.1-0.7c0-0.1,0-0.2,0.1-0.3l1.7-1.9c0-0.1,0.1-0.4,0.1-0.5
				c0-0.1,0-0.2,0-0.2c0-0.1,0.1-0.2,0.5-0.6c0.1-0.1,0.1-0.1,0.2-0.1l0.2,0l0.1-0.4l-0.2-0.7c0-0.1,0-0.2,0-0.3l-0.3-0.2
				c-0.1,0-0.1-0.1-0.1-0.2l-0.3-0.7l-0.3-0.3c-0.1-0.1-0.1-0.2-0.1-0.3l0-0.8l0-0.9l-0.1-0.4l-0.4-0.6c0,0,0-0.1,0-0.1l-0.2-0.8
				c0-0.1-0.1-0.5,0.7-1.1l0.2-0.2v-1.2l-0.2-0.2c-0.1-0.1-0.1-0.1-0.1-0.2l-0.1-0.6l-0.3-0.5c0,0,0-0.1,0-0.1l-0.4-1.3
				c0-0.1-0.3-0.4-0.4-0.7c-0.1-0.1-0.1-0.2-0.1-0.2l0-0.6l-0.2-0.7l-0.1,0c-0.1,0-0.1,0-0.2-0.1l-0.5-0.4l-0.4,0l-0.1-0.7l0.6-0.1
				c0.1,0,0.2,0,0.3,0.1l0.5,0.4l0.3,0c0.2,0,0.3,0.1,0.3,0.3l0.3,1c0,0,0,0.1,0,0.1l0,0.5c0.1,0.2,0.4,0.6,0.5,0.8l0.4,1.2l0.4,0.5
				c0,0,0,0.1,0.1,0.1l0.1,0.6l0.2,0.2c0.1,0.1,0.1,0.2,0.1,0.3v1.5c0,0.1,0,0.2-0.1,0.3l-0.4,0.3c-0.2,0.2-0.4,0.4-0.5,0.5l0.2,0.7
				l0.4,0.6c0,0,0,0.1,0,0.1l0.1,0.5c0,0,0,0.1,0,0.1l0,1l0,0.6l0.2,0.3c0,0,0.1,0.1,0.1,0.1l0.3,0.7l0.6,0.4
				c0.1,0.1,0.2,0.1,0.2,0.3c0,0.1,0,0.2-0.1,0.3l-0.1,0.1l0.2,0.6c0,0.1,0,0.1,0,0.2l-0.2,0.8c0,0.2-0.2,0.3-0.4,0.3l-0.3,0
				c-0.1,0.1-0.2,0.2-0.2,0.2v0.1c-0.1,0.4-0.1,0.7-0.3,0.9l-1.6,1.8l0.1,0.6l0,0.9C515.8,204.2,515.7,204.3,515.5,204.3z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M556.4,210.1C556.4,210.1,556.4,210.1,556.4,210.1c-0.3,0-0.4-0.2-0.4-0.4l0.2-1.3c0-0.1,0.1-0.2,0.2-0.3
				l0.3-0.1l0.5-0.9c0.1-0.1,0.2-0.2,0.3-0.2l1.2-0.1l0.2-0.2l-0.1-0.5c0-0.1,0-0.1,0-0.2l0.3-0.9l-0.1-0.6l-0.7-0.5
				c-0.1-0.1-0.2-0.2-0.2-0.4l0.2-1.2c0-0.2,0.1-0.3,0.3-0.3l0.4-0.1l0.3-0.4l0-0.4l-0.2-0.1c-0.1,0-0.1-0.1-0.2-0.2l0-0.1l0,0
				c-0.1,0.1-0.2,0.1-0.3,0.1l-0.8-0.2c0,0-0.1,0-0.1,0l-0.6-0.4l-0.5,0.1c-0.1,0-0.2,0-0.3,0l-0.4-0.3l-0.6,0l-0.9-0.2l-0.2,0.2
				c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0-0.2-0.1-0.3-0.2l-0.2-0.4l-0.8-0.5c-0.1,0-0.1-0.1-0.1-0.2l-0.5-1.1l-0.1,0l-0.9,0.7
				c-0.1,0.1-0.3,0.1-0.4,0c-0.4-0.2-0.9,0.1-0.9,0.1c-0.1,0.1-0.2,0.1-0.3,0l-0.5-0.3l-0.3,0.3c-0.1,0.1-0.2,0.1-0.3,0.1
				c-0.1,0-0.2,0-0.3-0.1l-1.3-1.2c0,0-0.1-0.1-0.1-0.2l-0.3-0.9c0,0,0-0.1,0-0.1V196l-0.2,0c-0.2,0-0.3-0.2-0.3-0.3l-0.1-0.4
				l-0.3-0.3l-1.4,0.2c-0.1,0-0.3,0-0.4-0.1l-0.8-1c-0.1-0.1-0.1-0.3,0-0.4l0.2-0.4l-0.3-0.3c-0.1,0-0.1-0.1-0.1-0.2l-0.3-1l-0.3,0
				l-0.6,0.3c-0.1,0-0.1,0-0.2,0h-1.4c0,0-0.1,0-0.1,0l-1.2-0.4l-0.1,0.1l0,0.4c0,0.2-0.1,0.4-0.3,0.4l-0.6,0.1c-0.1,0-0.1,0-0.2,0
				l-0.4-0.1l-1.2,0.3l-0.6,0.1l-0.3,0.8l-0.1,0.9c0,0.2-0.1,0.3-0.3,0.3l-0.6,0.1c-0.1,0-0.2,0-0.3-0.1l-0.3-0.3l-0.6,0.2
				c-0.1,0-0.2,0-0.3,0l-0.4-0.2l-0.3,0l-0.4,0.5c-0.1,0.1-0.3,0.2-0.4,0.1l-0.5-0.2c-0.1,0-0.2-0.1-0.3-0.3l-0.1-0.3l-0.4,0
				l-0.8,0.5c-0.1,0.1-0.2,0.1-0.3,0l-0.6-0.2l-0.3,0l-0.1,0.1c-0.1,0.1-0.2,0.1-0.2,0.1l-0.4,0c-0.1,0-0.2,0-0.3-0.1l-0.3-0.3
				l-0.7,0.3c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2-0.1-0.2-0.2l-0.1-0.2l-0.5-0.3c-0.1-0.1-0.7-0.1-1.1-0.1c0,0-0.1,0-0.1,0
				c-0.1,0-0.8-0.3-1.1-0.5c0,0-0.3,0.2-0.5,0.4c-0.1,0.1-0.2,0.1-0.3,0.1l-0.8,0l-0.2,0.2c-0.1,0.1-0.2,0.1-0.2,0.1h-1.3l-0.7,0.3
				c-0.1,0-0.2,0-0.3,0l-1.6-0.6c-0.2-0.1-0.3-0.3-0.2-0.5c0.1-0.2,0.3-0.3,0.5-0.2l1.5,0.6l0.6-0.2c0,0,0.1,0,0.1,0h1.2l0.2-0.1
				c0.1-0.1,0.1-0.1,0.2-0.1l0.7,0c0.3-0.3,0.8-0.7,1.3-0.4c0.2,0.1,0.7,0.3,1,0.4c0.3,0,1,0.1,1.3,0.2l0.7,0.3
				c0.1,0,0.1,0.1,0.2,0.2l0.6-0.2c0.1-0.1,0.3,0,0.4,0.1l0.3,0.3l0.1,0l0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.1l0.6,0.1l0.5,0.2l0.7-0.4
				c0.1,0,0.2-0.1,0.2-0.1l0.8,0.1c0.2,0,0.3,0.1,0.3,0.3l0.1,0.3l0.4-0.4c0.1-0.1,0.2-0.1,0.3-0.1l0.6,0c0.1,0,0.2,0,0.2,0.1
				l0.3,0.2l0.6-0.2c0.1,0,0.3,0,0.4,0.1l0.4,0.3l0.1,0l0-0.6c0,0,0-0.1,0-0.1l0.4-1.1c0.1-0.1,0.2-0.2,0.3-0.2l0.8-0.1l1.2-0.3
				c0.1,0,0.1,0,0.2,0l0.4,0.1l0.2-0.1l0-0.2c0-0.1,0-0.2,0.1-0.3l0.4-0.4c0.1-0.1,0.2-0.1,0.4-0.1l1.3,0.4h1.3l0.6-0.3
				c0.1,0,0.1,0,0.2,0l0.6,0c0.2,0,0.3,0.1,0.3,0.3l0.4,1.2l0.5,0.4c0.1,0.1,0.2,0.3,0.1,0.5l-0.2,0.4l0.5,0.6l1.3-0.2
				c0.1,0,0.2,0,0.3,0.1l0.6,0.5c0.1,0.1,0.1,0.1,0.1,0.2l0,0.3l0.2,0c0.2,0,0.3,0.2,0.3,0.4v0.7l0.3,0.8l0.9,0.9l0.2-0.3
				c0.1-0.1,0.3-0.2,0.5-0.1l0.6,0.3c0.3-0.1,0.7-0.2,1.2-0.1l0.8-0.6c0.1,0,0.1-0.1,0.2-0.1l0.4-0.1c0.2,0,0.3,0.1,0.4,0.2l0.6,1.3
				l0.8,0.5c0.1,0,0.1,0.1,0.1,0.2l0,0.1l0,0c0.1-0.1,0.2-0.1,0.3-0.1l1,0.2l0.7,0c0.1,0,0.1,0,0.2,0.1l0.4,0.2l0.5-0.1
				c0.1,0,0.2,0,0.3,0l0.7,0.4l0.6,0.1l0.3-0.3c0.1-0.1,0.2-0.1,0.3-0.1s0.2,0.1,0.3,0.2l0.2,0.5l0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3
				l0,0.7c0,0.1,0,0.2-0.1,0.2l-0.5,0.6c-0.1,0.1-0.1,0.1-0.2,0.1l-0.3,0.1l-0.1,0.7l0.6,0.4c0.1,0.1,0.1,0.1,0.2,0.3l0.1,0.8
				c0,0.1,0,0.1,0,0.2l-0.3,0.9l0.1,0.6c0,0.1,0,0.3-0.1,0.4l-0.5,0.4c-0.1,0-0.1,0.1-0.2,0.1l-1.1,0.1l-0.5,0.8
				c0,0.1-0.1,0.1-0.2,0.1l-0.2,0.1l-0.1,1C556.8,210,556.6,210.1,556.4,210.1z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M530.6,216.4c-0.2,0-0.4-0.1-0.4-0.3c0-0.2,0.1-0.4,0.3-0.4l0.6-0.1l0.2-0.7c0,0,0-0.1,0.1-0.1l0.5-0.7
				l0.3-1.2c0-0.1,0.1-0.2,0.2-0.3l0.8-0.3c0.1,0,0.2,0,0.3,0l0.5,0.2l0.4-0.3l-0.1-0.8l-1.1-0.8l-1-0.9c-0.1-0.1-0.1-0.2-0.1-0.3
				l-0.1-1.2l-1.1-1l-0.7,0c-0.1,0-0.1,0-0.2,0l-2.5-1.4l-0.8,0.4c-0.1,0-0.2,0.1-0.3,0l-0.6-0.2l0,0.6l0.1,0.6
				c0,0.2-0.1,0.4-0.3,0.4c-0.2,0-0.4-0.1-0.4-0.3l-0.1-0.7l0-1.1c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.2-0.1,0.3-0.1l1,0.3l0.9-0.4
				c0.1-0.1,0.2-0.1,0.4,0l2.6,1.5l0.8,0c0.1,0,0.2,0,0.3,0.1l1.3,1.2c0.1,0.1,0.1,0.2,0.1,0.3l0.1,1.2l0.8,0.7l1.2,0.9
				c0.1,0.1,0.1,0.2,0.2,0.3l0.1,1.2c0,0.1,0,0.3-0.1,0.3l-0.7,0.6c-0.1,0.1-0.2,0.1-0.4,0.1l-0.6-0.2l-0.4,0.2l-0.3,1.1
				c0,0.1,0,0.1-0.1,0.1l-0.5,0.7l-0.2,0.9c0,0.1-0.2,0.3-0.3,0.3L530.6,216.4C530.7,216.4,530.6,216.4,530.6,216.4z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M537.1,192.6c-0.2,0-0.4-0.2-0.4-0.4v-0.6l-0.5-0.6c-0.1-0.1-0.1-0.2-0.1-0.3l0.1-0.6l-0.5-0.8
				c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-1.1c0-0.1,0.1-0.2,0.3-0.3c0.1,0,0.3,0,0.4,0.1l0.5,0.4l1.1-0.2l0.2-0.4l0.3-0.4l-0.4-0.3
				c-0.1-0.1-0.1-0.1-0.2-0.3l-0.1-0.4l-0.9-0.8l-0.8-0.2c-0.1,0-0.2-0.1-0.3-0.2l-0.4-1l-0.9-1c0,0,0-0.1-0.1-0.1l-0.5-1l-0.6-0.6
				c-0.1-0.1-0.1-0.2-0.1-0.3v-0.4L533,180c0-0.1-0.1-0.2,0-0.3l0.2-0.6l-0.1-0.4c-0.5-0.2-1.1-0.4-1.3-0.4c-0.1,0-0.2-0.1-0.3-0.1
				l-0.2-0.2l-0.5,0.1l-0.7,0.5c-0.1,0.1-0.2,0.1-0.3,0.1s-0.2-0.1-0.3-0.2l-0.4-0.8l-0.3,0l-0.6,0.3c-0.2,0.1-0.4,0-0.5-0.1
				l-0.4-0.6l-0.3,0.2c-0.1,0.1-0.2,0.1-0.3,0l-0.7-0.3c-0.1-0.1-0.2-0.2-0.2-0.3l-0.1-0.6l-0.3-0.4c0,0,0-0.1,0-0.1l-0.3-0.8
				l-0.5-0.9c0-0.1-0.1-0.2,0-0.3l0.1-0.3l0-0.1l-0.3-0.4c-0.1-0.1-0.1-0.3,0-0.4l0.1-0.2l0-0.1l-0.2,0c-0.1,0-0.2-0.1-0.3-0.2
				s0-0.2,0-0.3l0.2-0.5l-0.1-0.4c0-0.1,0-0.3,0.1-0.3l0.3-0.3v-0.3l-1.2-2.2c0-0.1-0.1-0.1,0-0.2l0.2-2.1c0-0.1,0.1-0.2,0.2-0.3
				l0.2-0.1l0.1-0.4c0,0,0-0.1,0-0.1l0.4-0.7l-0.2-0.5c-0.1-0.2,0.1-0.4,0.3-0.5c0.2-0.1,0.4,0.1,0.5,0.3l0.2,0.7c0,0.1,0,0.2,0,0.3
				l-0.5,0.8l-0.1,0.5c0,0.1-0.1,0.2-0.2,0.2l-0.2,0.1l-0.2,1.8l1.2,2.2c0,0.1,0,0.1,0,0.2v0.6c0,0.1,0,0.2-0.1,0.3l-0.3,0.2l0,0.3
				c0,0.1,0,0.1,0,0.2l-0.1,0.2c0.1,0,0.2,0.2,0.3,0.3l0.1,0.5c0,0.1,0,0.1,0,0.2l0,0.1l0.2,0.2c0,0,0,0.1,0.1,0.1l0.1,0.3
				c0,0.1,0,0.1,0,0.2l0,0.2l0.5,0.8l0.3,0.8l0.4,0.5c0,0.1,0.1,0.1,0.1,0.2l0.1,0.5l0.3,0.2l0.4-0.3c0.2-0.1,0.4-0.1,0.5,0.1
				l0.4,0.6l0.4-0.2c0.1,0,0.1,0,0.2,0l0.6,0.1c0.1,0,0.2,0.1,0.3,0.2l0.3,0.5l0.4-0.3c0,0,0.1,0,0.1-0.1l0.8-0.2
				c0.1,0,0.3,0,0.4,0.1l0.2,0.3c0.5,0.1,1.4,0.4,1.5,0.4c0.1,0,0.2,0.1,0.2,0.3l0.2,0.6c0,0.1,0,0.1,0,0.2l-0.2,0.6l0.4,0.8
				c0,0.1,0,0.1,0,0.2v0.4l0.5,0.6c0,0,0,0.1,0.1,0.1l0.5,1l0.9,1c0,0,0.1,0.1,0.1,0.1l0.3,0.9l0.7,0.2c0.1,0,0.1,0,0.2,0.1l1,0.9
				c0.1,0.1,0.1,0.1,0.1,0.2l0.1,0.4l0.6,0.4c0.1,0.1,0.1,0.2,0.2,0.3c0,0.1,0,0.2-0.1,0.3l-0.6,0.7l-0.3,0.5
				c-0.1,0.1-0.2,0.2-0.3,0.2l-1.4,0.2c-0.1,0-0.2,0-0.3-0.1l-0.1-0.1l-0.1,0.3l0.5,0.8c0,0.1,0.1,0.2,0.1,0.2l-0.1,0.6l0.5,0.6
				c0.1,0.1,0.1,0.2,0.1,0.2v0.7C537.5,192.4,537.3,192.6,537.1,192.6z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M571.8,231C571.8,231,571.8,231,571.8,231l-0.6-0.1c0,0-0.1,0-0.1-0.1l-1.5-1l-1.5,0.4
				c-0.1,0-0.3,0-0.3-0.1l-0.8-0.6c-0.2-0.1-0.2-0.4-0.1-0.5c0.1-0.2,0.4-0.2,0.5-0.1l0.6,0.5l0.4-0.1l1.1-0.3c0.1,0,0.2,0,0.3,0.1
				l1.6,1.1l0.4,0.1c0.2,0,0.3,0.3,0.3,0.5C572.2,230.9,572,231,571.8,231z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M585.8,228c-0.1,0-0.2,0-0.3-0.1l-2.8-2.7c0,0-0.1-0.1-0.1-0.1l-1.3-2.8c0-0.1,0-0.2,0-0.3l0.4-0.8h-0.4
				c-0.2,0-0.3-0.1-0.4-0.3l-0.2-0.8c-0.2-0.1-0.5-0.2-0.7-0.5l-0.6,0c-0.2,0-0.3-0.1-0.4-0.3l-0.3-1c0-0.1,0-0.2,0-0.2
				c0.2-0.5,0.9-2.7,0.9-2.7l0.7-1.3c0.1-0.1,0.1-0.2,0.3-0.2l1.1-0.2l1.2-0.4l-0.4-0.6c-0.1-0.1-0.1-0.3,0-0.4
				c0.1-0.1,0.2-0.2,0.4-0.2l1.1,0.1l0-0.4c0,0,0-0.1,0-0.1l0.2-0.5l-0.3-0.2l-0.6,0.2c-0.1,0-0.2,0-0.3,0l-1-0.7
				c-0.1-0.1-0.2-0.2-0.2-0.4l0.1-0.5c0-0.2,0.2-0.3,0.4-0.3h0.4l-0.8-1.3l-1.2-1.1l-1.4-0.4l-0.1,0.2c-0.1,0.1-0.1,0.2-0.3,0.2
				c-0.1,0-0.2,0-0.3-0.1l-0.9-0.8c-0.1-0.1-0.2-0.3-0.1-0.4l0.1-0.2l-0.3-0.5l-1-0.4c-0.1,0-0.2-0.1-0.2-0.3c0-0.1,0-0.2,0.1-0.3
				l0.3-0.4l0.2-1.9l-0.5-0.7c0-0.1-0.1-0.1-0.1-0.2l0-1c0-0.1,0.1-0.3,0.2-0.3l0.5-0.2l0.6-0.8v-0.6c0-0.1,0-0.2,0.1-0.2l0.4-0.5
				c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2,0,0.3,0.1l1.2,1.1c0,0,0,0.1,0.1,0.1l0.4,0.7l0.7,0.4l0.4,0l-0.1-0.5c0-0.1,0-0.3,0.1-0.3
				l0.1-0.1l-0.6-2c0-0.1,0-0.2,0.1-0.3c0.1-0.1,0.2-0.2,0.3-0.2l1.4-0.1v-0.2l-0.3-0.4c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.6
				c0-0.1,0.1-0.2,0.2-0.2l1.1-0.5l0.2-0.6c0-0.1,0.1-0.1,0.1-0.2c0.3-0.2,0.6-0.3,0.8-0.3l0-0.6c0-0.1,0-0.1,0-0.2l0.1-0.4
				c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0,0.3,0l1.5,0.8c0.1,0,0.2,0.1,0.2,0.2c0,0.1,0,0.2,0,0.3l-0.2,0.4l0.5-0.2l0.4-0.6
				c0-0.1,0.1-0.1,0.2-0.2l1.6-0.5c0.2-0.1,0.4,0,0.5,0.2l0.3,0.6l0.4,0.3l0.8-0.3c0.1,0,0.2,0,0.3,0l0.7,0.4l0.9,0.8l1.5,0.9
				l0.7,0.2c0.1,0,0.2,0.1,0.2,0.3l0.2,0.6l0-0.1l0-0.6c0-0.1,0.1-0.3,0.2-0.4l0.5-0.3c0.2-0.1,0.4-0.1,0.5,0.1l0.3,0.4l0.9,0.1
				c0.1,0,0.2,0.1,0.3,0.2l0.3,0.4l0.1,0.1l0.4-0.3l0.1-0.9c0-0.2,0.2-0.3,0.3-0.4c0.3,0,0.7-0.4,0.8-0.6c0.1-0.1,0.1-0.2,0.3-0.2
				c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.4-0.1,0.7-0.2c0.1-0.1,0.3-0.1,0.5,0l0.7,0.7l0.5,0.1l0.2-0.5c0.1-0.2,0.2-0.2,0.4-0.2
				c0.4,0,0.6-0.2,0.6-0.2c0.1-0.1,0.3-0.2,0.5-0.1l1.1,0.6c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0,0.2-0.1,0.3l-0.4,0.4l0.2,0.3l1.8,0.4
				l1,0.3l0.3-0.1l0.3-0.9c0-0.1,0.2-0.3,0.3-0.3l0.6-0.1c0.1,0,0.2,0,0.2,0.1l0.4,0.3l1-0.1l0.2-0.1l0.2-1.5l0-0.7l-0.5-0.3
				l-0.9-0.2c0,0-0.1,0-0.1,0l-0.7-0.4l-1-0.3c-0.1,0-0.2-0.1-0.2-0.2l-0.2-0.7c-0.1-0.2,0-0.3,0.2-0.4l0.5-0.3l0.4-0.9l-0.1-0.4
				c-0.5-0.9,0.2-1.9,0.2-1.9c0,0,0.1-0.1,0.1-0.1l0.9-0.6c0.1,0,0.1-0.1,0.2-0.1l1.2,0.1l0,0c-0.1-0.2-0.3-0.4-0.6-0.6l-0.6,0.2
				c-0.2,0.1-0.4,0-0.5-0.2l-0.5-1.4l-1.2-0.9c-0.1-0.1-0.2-0.2-0.1-0.3c0-0.1,0.1-0.2,0.2-0.3l1.1-0.6c0.1,0,0.2-0.1,0.2,0l1.2,0.2
				c0.1,0,0.1,0,0.1,0.1l0.2,0.1l0.5-0.6c0.1-0.1,0.2-0.2,0.3-0.1l0.5,0c0.1,0,0.2,0.1,0.3,0.2l0.1,0.1l1-0.8c0,0,0.1-0.1,0.1-0.1
				l1.3-0.4l0.7-0.1l0.8-0.6c0,0,0.1-0.1,0.1-0.1l1.1-0.3c0.1,0,0.1,0,0.2,0l0.5,0.1l0.4-0.8c0.1-0.1,0.2-0.2,0.3-0.2h0.6l1.1-0.3
				l1.7-0.9l1.7-0.7c0.3-0.4,1-0.5,1.3-0.6l0-0.7c0-0.1,0.1-0.2,0.2-0.3l0.9-0.6c0,0,0.1,0,0.1,0l0.8-0.2c0,0,0.1,0,0.1,0l2.1,0.3
				l1,0.2l1.1-0.2c0.2,0,0.4,0.1,0.4,0.2l0.2,0.6l0.8,1.2l0.4,0.5c0.1,0.1,0.1,0.2,0.1,0.3l-0.1,1.2c0,0.1-0.1,0.2-0.2,0.3l0.1,0.2
				l0.7,0l0.3-0.3c0.1-0.1,0.2-0.1,0.3-0.1l0.5,0.1l0-0.7c0-0.1,0.1-0.3,0.2-0.3c0.1-0.1,0.3,0,0.4,0l1,0.7c0.1,0.1,0.1,0.2,0.2,0.3
				l0.1,0.8l0.3,0.3l0.1-0.1l0.1-0.5c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0,0.3,0l0.9,0.4l0.6-0.3c0.1-0.1,0.3,0,0.4,0.1
				s0.2,0.2,0.1,0.4l-0.3,1l0,0.4l0.4,0.3l1.1-0.4c0.1,0,0.2,0,0.3,0l0.9,0.3l0.1-0.1l0.4-0.7c0-0.1,0.1-0.2,0.2-0.2l1.2-0.4
				l0.6-0.7l0.6-1c0,0,0.1-0.1,0.1-0.1l0.9-0.6c0,0,0.1,0,0.1-0.1l1.3-0.4c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0.1,0.2,0.1,0.3v1
				c0,0.1-0.1,0.3-0.2,0.3l-0.1,0.1l0.8,0.8l3.5,2.6l7.3,8.9c0.3,0,0.6-0.1,0.7-0.2l-0.2-0.8c0-0.2,0-0.3,0.2-0.4
				c0.6-0.3,1.4,0.1,1.6,0.2c0.1,0.1,0.2,0.2,0.2,0.4l0,0.5l0.3,0.1l0.8,0.4l0.2-0.1c0.1-0.1,0.2-0.1,0.3,0l1,0.3l0.5-0.2
				c0,0,0.1,0,0.1,0c0.5-0.1,0.7-0.1,0.8-0.2c0-0.1,0.1-0.3,0.2-0.5c0.2-0.3,0.6-0.4,1-0.4l0.5,0c0.7,0,1.1,0,1.6,0.3l0.8,0.6
				c0,0,0.1,0.1,0.1,0.1l0.7,1.3l0.7,0.1l0.9,0.4c0.6,0.3,0.6,1.3,0.6,1.6c0,0,0,0.1,0,0.1c0,0,0,0,0,0s0,0.1,0,0.1
				c0,0,0.1,0.1,0.3,0.2c0.5,0.1,0.9,0.3,1.1,0.3l0.4-0.3c0.1-0.1,0.1-0.1,0.2-0.1l1.3-0.1l0.4-0.1l0.8-0.7c0.1-0.1,0.3-0.1,0.4-0.1
				l0.3,0.1c0.2,0.1,0.3,0.3,0.2,0.5c-0.1,0.4-0.1,0.6-0.1,0.8l1.3,0.7l0.8,0.3l0.8,0.2c0.2,0.1,0.3,0.3,0.3,0.5
				c-0.1,0.2-0.3,0.3-0.5,0.3l-0.8-0.2l-0.9-0.3l-1.6-0.8c-0.1,0-0.1-0.1-0.2-0.2c0,0-0.1-0.3-0.1-0.7l-0.4,0.3c0,0-0.1,0.1-0.1,0.1
				l-0.6,0.2l-1.3,0.1l-0.5,0.4c-0.1,0.1-0.3,0.1-0.4,0c0,0-0.4-0.2-1.2-0.4c-0.4-0.1-0.7-0.3-0.8-0.6c-0.1-0.3-0.1-0.5,0-0.6
				c0-0.4-0.1-0.7-0.1-0.8l-0.9-0.4l-0.8-0.2c-0.1,0-0.2-0.1-0.3-0.2l-0.7-1.4l-0.8-0.6c-0.2-0.2-0.5-0.2-1.1-0.2l-0.5,0
				c-0.2,0-0.4,0-0.4,0.1c-0.1,0.1,0,0.2,0,0.2c0,0.1,0,0.2,0,0.2c-0.1,0.2-0.4,0.4-1.4,0.5l-0.5,0.2c-0.1,0-0.2,0-0.3,0l-1-0.3
				l-0.2,0.2c-0.1,0.1-0.3,0.1-0.4,0l-0.9-0.4l-0.6-0.1c-0.2,0-0.3-0.2-0.3-0.4l0-0.5c-0.1,0-0.3-0.1-0.4-0.1l0.1,0.3
				c0.1,0.3,0,0.5-0.2,0.7c-0.4,0.5-1.3,0.5-1.5,0.5c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1l-7.4-9l-3.4-2.6l-1.2-1.2
				c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.1-0.2,0.2-0.3l0.4-0.2v-0.3l-0.8,0.2l-0.8,0.5l-0.6,1l-0.7,0.9c0,0.1-0.1,0.1-0.2,0.1
				l-1.2,0.4l-0.3,0.7c0,0.1-0.1,0.1-0.1,0.1l-0.3,0.2c-0.1,0.1-0.2,0.1-0.3,0l-0.9-0.3l-1.2,0.4c-0.1,0-0.2,0-0.3,0l-0.8-0.5
				c-0.1-0.1-0.2-0.2-0.2-0.3l0-0.7l0.1-0.4l-0.1,0c-0.1,0-0.2,0-0.3,0l-0.6-0.3l0,0.1c0,0.1,0,0.1-0.1,0.2l-0.4,0.4
				c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0-0.2,0-0.3-0.1l-0.7-0.7c-0.1-0.1-0.1-0.1-0.1-0.2l-0.1-0.7l-0.3-0.2l0,0.4
				c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1l-0.7-0.1l-0.2,0.3c-0.1,0.1-0.2,0.1-0.3,0.1l-1,0c-0.1,0-0.2-0.1-0.3-0.1
				l-0.6-0.8c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.1-0.2,0.3-0.2l0.2,0l0-0.8l-0.3-0.4l-0.8-1.3c0,0,0-0.1,0-0.1l-0.1-0.4l-0.9,0.2
				c-0.1,0-0.1,0-0.2,0l-1-0.2l-2-0.2l-0.7,0.2l-0.7,0.4l0,0.8c0,0.2-0.2,0.4-0.4,0.4c-0.3,0-1,0.1-1.2,0.4c0,0.1-0.1,0.1-0.2,0.1
				l-1.8,0.7l-1.7,0.9l-1.2,0.3c0,0-0.1,0-0.1,0h-0.4l-0.4,0.9c-0.1,0.1-0.2,0.2-0.4,0.2l-0.7-0.1l-1,0.3l-0.8,0.7
				c-0.1,0-0.1,0.1-0.2,0.1l-0.7,0.1l-1.2,0.4l-1.2,1c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0-0.2-0.1-0.3-0.2l-0.2-0.3l-0.1,0l-0.6,0.8
				c-0.1,0.2-0.4,0.2-0.5,0.1l-0.4-0.3l-1-0.2l-0.5,0.2l0.8,0.6c0.1,0,0.1,0.1,0.1,0.2l0.4,1.1l0.4-0.2c0.1,0,0.2,0,0.3,0
				c0.2,0.1,1.2,0.8,1.1,1.5c0,0.1-0.1,0.2-0.2,0.3l-0.3,0.2c-0.1,0-0.1,0.1-0.2,0.1l-1.2-0.1l-0.7,0.5c-0.1,0.2-0.4,0.7-0.1,1.1
				c0,0,0,0.1,0.1,0.1l0.1,0.6c0,0.1,0,0.2,0,0.2l-0.5,1.1c0,0.1-0.1,0.1-0.1,0.2l-0.3,0.2l0.1,0.2l0.9,0.3l0.7,0.4l0.9,0.2
				c0,0,0.1,0,0.1,0l0.7,0.4c0.1,0.1,0.2,0.2,0.2,0.3l0.1,0.9l-0.2,1.8c0,0.1-0.1,0.3-0.3,0.3l-0.5,0.2c0,0-0.1,0-0.1,0l-1.2,0.1
				c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3l-0.2,0l-0.3,0.9c0,0.1-0.2,0.2-0.3,0.3l-0.6,0.1c-0.1,0-0.1,0-0.2,0l-1-0.3l-1.9-0.4
				c-0.1,0-0.2-0.1-0.2-0.1l-0.5-0.6c-0.1-0.1-0.1-0.4,0-0.5l0.2-0.2l-0.4-0.2c-0.2,0.1-0.4,0.2-0.7,0.2l-0.2,0.6
				c-0.1,0.2-0.3,0.3-0.4,0.2l-0.9-0.2c-0.1,0-0.1,0-0.2-0.1l-0.6-0.6c-0.4,0.2-0.8,0.3-1.1,0.2c-0.2,0.2-0.5,0.4-0.8,0.5l0,0.8
				c0,0.1-0.1,0.2-0.1,0.3l-0.7,0.5c-0.1,0.1-0.2,0.1-0.4,0l-0.4-0.2c-0.1,0-0.1-0.1-0.2-0.2l-0.2-0.4l-0.9-0.1
				c-0.1,0-0.2-0.1-0.3-0.2l-0.2-0.3l0,0l0,0.5c0,0.1,0,0.2-0.1,0.2l-0.4,0.5c-0.1,0.1-0.3,0.2-0.4,0.1l-0.3-0.1
				c-0.1,0-0.2-0.1-0.3-0.3l-0.2-0.8l-0.6-0.2l-1.6-1l-0.9-0.8l-0.5-0.3l-0.8,0.3c-0.1,0-0.2,0-0.3,0l-0.6-0.4
				c-0.1,0-0.1-0.1-0.1-0.2l-0.2-0.4l-1.2,0.3l-0.4,0.6c0,0.1-0.1,0.1-0.2,0.1l-1.1,0.5c-0.1,0.1-0.3,0-0.4-0.1l-0.3-0.3
				c-0.1-0.1-0.1-0.3-0.1-0.4l0.3-0.5l-0.7-0.4l0,0.8c0,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1c0,0-0.3-0.1-0.6,0l-0.2,0.6
				c0,0.1-0.1,0.2-0.2,0.2l-1,0.5l-0.1,0.3l0.3,0.4c0.1,0.1,0.1,0.1,0.1,0.2v0.7c0,0.2-0.2,0.4-0.4,0.4l-1.3,0.1l0.5,1.8
				c0,0.1,0,0.3-0.1,0.4l-0.2,0.2l0.1,0.6c0,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1l-0.9,0.1c-0.1,0-0.2,0-0.2-0.1l-0.8-0.5
				c0,0-0.1-0.1-0.1-0.1l-0.4-0.7l-0.9-0.8l-0.1,0.1v0.6c0,0.1,0,0.2-0.1,0.2l-0.7,0.9c0,0-0.1,0.1-0.1,0.1l-0.3,0.2l0,0.6l0.5,0.7
				c0,0.1,0.1,0.2,0.1,0.3l-0.3,2.2c0,0.1,0,0.1-0.1,0.2l-0.1,0.1l0.7,0.3c0.1,0,0.1,0.1,0.2,0.2l0.5,0.8c0.1,0.1,0.1,0.2,0,0.3
				l-0.1,0.2l0.3,0.3l0,0c0.1-0.2,0.3-0.2,0.4-0.2l1.8,0.5c0.1,0,0.1,0,0.2,0.1l1.3,1.2c0,0,0,0.1,0.1,0.1l1.1,1.9
				c0.1,0.1,0.1,0.3,0,0.4c-0.1,0.1-0.2,0.2-0.3,0.2H583l0.5,0.4l0.5-0.2c0.1,0,0.2,0,0.3,0l0.7,0.5c0.1,0.1,0.2,0.3,0.1,0.4
				l-0.3,0.7l0,0.8c0,0.1,0,0.2-0.1,0.3s-0.2,0.1-0.3,0.1l-0.7,0l0.2,0.3c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1-0.1,0.2-0.2,0.2l-1.8,0.6
				l-1,0.2l-0.6,1.1c0,0-0.6,1.9-0.8,2.6l0.2,0.6l0.5,0c0.1,0,0.2,0,0.3,0.1c0.3,0.3,0.7,0.5,0.7,0.5c0.1,0,0.2,0.2,0.3,0.3l0.1,0.7
				h0.7c0.1,0,0.3,0.1,0.3,0.2c0.1,0.1,0.1,0.3,0,0.4l-0.6,1.2l1.2,2.5l2.7,2.6c0.1,0.1,0.2,0.4,0,0.5C586,228,585.9,228,585.8,228z
				"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M595.9,228.1c-0.2,0-0.3-0.1-0.4-0.3l-0.2-1.4c0-0.1,0-0.1,0-0.2l0.3-0.7l0-0.9l-0.2,0c0,0-0.1,0-0.1,0
				c-0.2-0.1-1-0.3-1.4-0.2c-0.1,0-0.3,0-0.4-0.2l-0.5-0.7l-0.3-0.4l-0.5,0.1c-0.1,0-0.2,0-0.3,0c-0.1-0.1-0.2-0.1-0.2-0.3l-0.2-1.2
				l-1.7-2.4l-0.8-0.2c-0.1,0-0.2-0.1-0.3-0.2l-0.3-0.7c0-0.1,0-0.2,0-0.3s0.1-0.2,0.3-0.2l1.3-0.3c0.1,0,0.1,0,0.2,0
				c0,0,0.4,0.1,1-0.1c-0.3-0.3-0.6-0.7-0.7-1.3c0-0.1,0-0.1,0-0.2l0.3-1c0-0.2,0.2-0.3,0.3-0.3l1.5-0.1l2.4,0.3c0,0,0,0,0.1,0
				l-0.1,0c-0.1,0-0.2-0.1-0.2-0.2l-0.4-0.7c0-0.1-0.1-0.2,0-0.3l0.5-1.2l0.1-1.4l-0.3-0.9l-0.5-0.5l-1.1-0.3l-0.6,0.4
				c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-1.1,0-1.7-0.5l-0.7-0.1l-2.3,1.1l-1.2,1.2c-0.1,0.1-0.1,0.1-0.2,0.1l-1.2,0.2
				c-0.2,0-0.4-0.1-0.4-0.3s0.1-0.4,0.3-0.4l1.1-0.2l1.2-1.2c0,0,0.1-0.1,0.1-0.1l2.5-1.1c0.1,0,0.1,0,0.2,0l1,0.1
				c0.1,0,0.2,0.1,0.2,0.1c0.2,0.3,0.8,0.3,1.1,0.4l0.6-0.4c0.1-0.1,0.2-0.1,0.3,0l1.4,0.4c0.1,0,0.1,0.1,0.2,0.1l0.6,0.6
				c0,0,0.1,0.1,0.1,0.2l0.3,1.1c0,0,0,0.1,0,0.1l-0.1,1.5c0,0,0,0.1,0,0.1l-0.4,1.1l0.2,0.4l0.8,0.2c0.1,0,0.2,0.1,0.3,0.3
				s0,0.3-0.1,0.4c-0.8,0.6-1.3,0.6-1.3,0.6l-2.4-0.3l-1.2,0.1l-0.2,0.7c0.3,0.9,0.9,1.3,0.9,1.3c0.1,0.1,0.2,0.2,0.2,0.3
				c0,0.1-0.1,0.2-0.2,0.3c-1,0.5-1.7,0.5-2,0.4l-0.8,0.2l0,0.1l0.7,0.2c0.1,0,0.2,0.1,0.2,0.1l1.9,2.5c0,0,0.1,0.1,0.1,0.2l0.2,0.8
				l0.3-0.1c0.1,0,0.3,0,0.4,0.1l0.5,0.6l0.4,0.5c0.6,0,1.2,0.2,1.5,0.2l0.5,0c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0.1,0.2,0.1,0.3l0,1.4
				c0,0.1,0,0.1,0,0.2l-0.3,0.7l0.2,1.3C596.3,227.9,596.2,228.1,595.9,228.1C595.9,228.1,595.9,228.1,595.9,228.1z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M644.3,223.9c-0.1,0-0.2,0-0.2-0.1c-0.2-0.1-0.2-0.4-0.1-0.5l0.7-0.9l0.6-0.6c0.1-0.1,0.2-0.1,0.4-0.1
				l1.4,0.4l2,0.2l2.1-0.2l-0.2-1.6c0-0.1,0-0.2,0.1-0.3s0.2-0.1,0.3-0.1l0.8-0.1l1.9-0.1c0,0,0.1,0,0.1,0l2.1,0.7l0.9,0.1l0.9-0.6
				c0.1-0.1,0.2-0.1,0.3,0c0.4,0.1,1.7-0.1,2.5-0.2c0.1,0,0.1,0,0.2,0l1.3,0.4l1.2-0.3c0,0,0.1,0,0.1,0l1.8,0.3l1.1,0.1
				c0.1,0,0.2,0.1,0.2,0.1l1.1,1.2l1.4,0l0.4-0.8l-0.1-0.9c0-0.1,0-0.2,0.1-0.3l0.4-0.7l-0.2-0.9c-0.6-0.7-1.4-2.7-1.6-3.2l-0.3-0.8
				c0-0.1,0-0.2,0-0.3l-0.8-0.2c-0.1,0-0.2-0.1-0.2-0.2l-0.5-0.8c-0.1-0.1-0.1-0.2,0-0.3s0.1-0.2,0.2-0.2l1.3-0.5l3.2-0.8
				c0.1,0,0.2,0,0.3,0l0.7,0.4l0.3-0.4c0.1-0.2,0.2-0.4,0.2-0.6c-0.1-0.3-0.3-0.4-0.3-0.4c-0.1-0.1-0.2-0.2-0.2-0.4l0.9-6
				c0-0.2,0.2-0.3,0.4-0.3h1.7c0,0,0.1,0,0.1,0l2,0.7c0.6-0.1,1.9-0.9,2.7-1.5l-0.6-1.4c0,0,0-0.1,0-0.1l-0.2-2.3
				c0-0.2,0.1-0.3,0.2-0.4l1.2-0.6l0.3-0.5l0.6-1.5c0-0.1,0.1-0.1,0.2-0.2l0.4-0.2l0.5-0.5c0.1-0.1,0.4-0.1,0.5,0
				c0.1,0.1,0.1,0.4,0,0.5l-0.5,0.5c0,0-0.1,0-0.1,0.1l-0.3,0.2l-0.6,1.4l-0.4,0.6c0,0.1-0.1,0.1-0.2,0.1l-1.1,0.5l0.2,2l0.7,1.6
				c0.1,0.2,0,0.3-0.1,0.4c-0.2,0.2-2.3,1.8-3.4,1.9c-0.1,0-0.1,0-0.2,0l-2-0.7h-1.3l-0.8,5.4c0.2,0.1,0.4,0.4,0.5,0.7
				c0.1,0.4,0,0.8-0.3,1.2l-0.5,0.7c-0.1,0.2-0.3,0.2-0.5,0.1l-0.8-0.5l-3,0.7l-0.8,0.3l0.1,0.2l1.3,0.3c0.1,0,0.2,0.1,0.3,0.3
				c0,0.1,0,0.3-0.1,0.4l-0.2,0.2l0.2,0.6c0.4,1,1.1,2.7,1.5,2.9c0.1,0.1,0.1,0.1,0.1,0.2l0.2,1.1c0,0.1,0,0.2-0.1,0.3l-0.4,0.7
				l0.1,0.9c0,0.1,0,0.1,0,0.2l-0.5,1.1c-0.1,0.1-0.2,0.2-0.3,0.2l-1.8,0c-0.1,0-0.2,0-0.3-0.1l-1.1-1.3l-1-0.1l-1.8-0.3l-1.2,0.3
				c-0.1,0-0.1,0-0.2,0l-1.3-0.4c-0.5,0.1-1.8,0.3-2.6,0.2l-0.9,0.6c-0.1,0-0.2,0.1-0.3,0.1l-1.1-0.1l-2.1-0.7l-2.2,0.2l0.2,1.6
				c0,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1L649,223l-2.1-0.2l-1.2-0.4l-0.4,0.4l-0.6,0.9
				C644.5,223.9,644.4,223.9,644.3,223.9z"/>
		</g>
		<g>
			<path fill="#3EA5F9" d="M802.4,212.1c-0.1,0-0.2,0-0.3-0.1c-0.1-0.2-0.1-0.4,0.1-0.5l1.9-1.4l0.1-1.2l-0.4-2.1l-0.7-2.4l-0.8-1.4
				c-0.1-0.2-0.1-0.4,0.1-0.5l1-0.8l0.8-1.2c0.1-0.1,0.3-0.2,0.4-0.1l1.6,0.4l0.9,0.1l0.4-0.1l-0.1-2.1l0.3-1.9l0-3.1
				c-0.1-0.3-0.5-2.2,0.3-3.6l-0.9-1.8c0-0.1-0.1-0.2,0-0.3c0-0.1,0.1-0.2,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0-0.1-0.1-0.3-0.5-0.6
				c-0.5-0.4-0.8-0.4-0.9-0.4c-0.1,0-0.1,0.1-0.1,0.1c0,0.1-0.1,0.1-0.1,0.1l-1.4,0.9l-1,0.6l-0.9,1.9c0,0.1-0.1,0.2-0.2,0.2l-2,0.7
				c-0.1,0-0.2,0-0.3,0c-0.3-0.1-1.1-0.5-1.6-0.2c-0.2,0.1-0.4,0-0.5-0.1l-1.4-2.1c0-0.1-0.1-0.1-0.1-0.2l0-1.1l-0.6-1.6l-1.6,0
				c0,0-0.2,0-0.2-0.1l-2.1-1.7l-1.8-0.3c0,0-2.4-0.5-3.3-0.6c-1.1-0.1-1.8-1.7-1.9-1.9l-0.7-1.6l-1.5-1.9l-2.7-4.2l-1.8-2.8
				l-2.4-1.8l-1.5-0.8l-2.3,0.2c-0.1,0-0.1,0-0.2,0l-2-0.9l-1.7,0.7l-2.6,0.7l-2.2,0.4l-0.7,1.4l0,1l0.5-0.3c0.2-0.1,0.4,0,0.5,0.1
				c0,0.1,1,1.3,1.5,3.1c0,0.1,0,0.2,0,0.3c0,0-0.8,1.3-1.5,2.6l0.5,2.1c0,0.1,0,0.1,0,0.2l-0.3,1.9c0.2,0.3,0.7,1.2,0.5,2.6
				c0,0.1-0.1,0.2-0.2,0.3l-1.6,0.6l-1.3,1.2c-0.1,0.1-0.3,0.1-0.4,0.1l-0.7-0.3l-1.7-0.2c-0.2,0-0.3-0.2-0.3-0.4
				c0-0.2,0.2-0.3,0.4-0.3l1.8,0.3l0.6,0.2l1.2-1.1c0,0,0.1-0.1,0.1-0.1l1.4-0.5c0.1-1.3-0.4-1.9-0.4-2c-0.1-0.1-0.1-0.2-0.1-0.3
				l0.4-2l-0.5-2.2c0-0.1,0-0.2,0-0.3c0.6-1.1,1.2-2.2,1.4-2.6c-0.3-1.1-0.9-2-1.2-2.5l-0.7,0.4c-0.1,0.1-0.3,0.1-0.4,0
				c-0.1-0.1-0.2-0.2-0.2-0.3l-0.1-1.7c0-0.1,0-0.1,0-0.2l0.9-1.6c0.1-0.1,0.1-0.2,0.3-0.2l2.3-0.5l2.5-0.7l1.8-0.7
				c0.1,0,0.2,0,0.3,0l2.1,0.9l2.3-0.2c0.1,0,0.1,0,0.2,0l1.6,0.9l2.5,1.8c0,0,0.1,0.1,0.1,0.1l1.8,2.9l2.7,4.2l1.5,1.9
				c0,0,0,0.1,0,0.1l0.7,1.7c0.2,0.4,0.7,1.4,1.3,1.5c0.9,0.1,3.2,0.6,3.3,0.6l1.9,0.3c0.1,0,0.1,0,0.2,0.1l2.1,1.7l1.7,0
				c0,0,0,0,0,0c0.2,0,0.3,0.1,0.3,0.2l0.8,1.9c0,0,0,0.1,0,0.2l0,1l1.1,1.7c0.7-0.2,1.5,0.1,1.8,0.3l1.7-0.6l0.8-1.8
				c0-0.1,0.1-0.1,0.2-0.2l1.1-0.6l1.3-0.8c0.1-0.1,0.3-0.3,0.5-0.4c0.4-0.1,0.9,0.1,1.5,0.5c0.6,0.4,0.8,0.8,0.8,1.3
				c0,0.2-0.1,0.4-0.3,0.5l0.9,1.7c0.1,0.1,0.1,0.3,0,0.4c-0.8,1.3-0.3,3.3-0.3,3.3l0.1,3.3l-0.3,1.9l0.1,2.3c0,0.2-0.1,0.3-0.3,0.4
				l-0.8,0.2c0,0-0.1,0-0.1,0l-1-0.2l-1.4-0.4l-0.7,1c0,0,0,0.1-0.1,0.1l-0.8,0.7l0.7,1.2l0.7,2.5l0.4,2.2l-0.1,1.5
				c0,0.1-0.1,0.2-0.1,0.3l-2,1.5C802.6,212.1,802.5,212.1,802.4,212.1z"/>
		</g>
	</g>
</g>
<g id="Names">
</g>
</svg>
                           </div> <div class="links-of-companies">
                            <img src="" alt="" class="destination-img"/> </div></div>

                        <div class="partners-block">
                            <p>Среди наших клиентов</p>
                            <div class="row">
                                <div class="col-3 wow slideInLeft"><a href=""><img src="<?php popel_theme_uri(); ?>/images/1.yda.png"  alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInLeft"> <a href=""><img src="<?php popel_theme_uri(); ?>/images/2.altis.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/3.tmm1.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/4.FM_logistic.png" alt="" class="logo"/></a></div>





                            </div>
                            <div class="row">
                                <div class="col-3 wow slideInLeft"><a href=""><img src="<?php popel_theme_uri(); ?>/images/5.mageba.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInLeft"><a href=""><img src="<?php popel_theme_uri(); ?>/images/6.mega_lin.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/7.P&G.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/8.master.png" alt="" class="logo"/></a></div>





                            </div>
                            <div class="row">
                                <div class="col-3 wow slideInLeft"> <a href=""><img src="<?php popel_theme_uri(); ?>/images/9.renaissance.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInLeft"> <a href=""><img src="<?php popel_theme_uri(); ?>/images/10.the%20linde%20group.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/11.onur.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"><a href=""><img src="<?php popel_theme_uri(); ?>/images/12.novus.png" alt="" class="logo"/></a></div>





                            </div>
                            <div class="row">
                                    <div class="col-3 wow slideInLeft">
                                        <a href=""><img src="<?php popel_theme_uri(); ?>/images/13.chernomorez.png" alt="" class="logo"/></a>
                                    </div>
                                    <div class="col-3 wow slideInLeft">
                                        <a href=""><img src="<?php popel_theme_uri(); ?>/images/14.esc-pile.png" alt="" class="logo"/></a>
                                    </div>
                                <div class="col-3 wow slideInRight"> <a href=""><img src="<?php popel_theme_uri(); ?>/images/15.euroformat.png" alt="" class="logo"/></a></div>
                                <div class="col-3 wow slideInRight"> <a href=""><img src="<?php popel_theme_uri(); ?>/images/16.kan.png" alt="" class="logo"/></a></div>




                            </div>

                        </div>
                    </div>
                </section>


                <section class="guarantees" id="guaratees">
                    <div class="guarantees-bg"><div class="waved-bg"></div></div>
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
                        <h1 style="font-size: 58px;
                                    line-height: 60px;
                                    margin-top: 110px;
                                    text-align: left;">Гарантируем<br> надежность конструкций</h1>
                        <ul>
                            <li>Имеем свидетельство о допуске к проектным работам</li>
                            <li>Делаем проекты в соответствии с мировыми стандартами</li>
                            <li>Работаем с лицензионным программным обеспечением</li>
                            <li>Работаем с сертифицированным персоналом</li>
                            <li>Сдаем проекты, лично заверенные специалистами</li>
                        </ul>
                    </div>
                </section>


                <section class="work-scheme projecting-work-scheme" id="work">

                        <ul class="rhombus-block">
                            <li class="rhombus-item rhombus-1">
                                <div class="rhombus">01</div>
                                <p>Получаем<br> и анализируем документацию</p>
                            </li>
                            <li class="rhombus-item rhombus-2">
                                <div class="rhombus">02</div>
                                <p>Формируем команду<br> под проект</p>
                            </li>
                            <li class="rhombus-item rhombus-3">
                                <div class="rhombus">03</div>
                                <p>Разрабатываем<br> проектную документацию</p>
                            </li>
                            <li class="rhombus-item rhombus-4">
                                <div class="rhombus">04</div>
                                <p>Вносим правки<br> и доработки</p>
                            </li>
                            <li class="rhombus-item rhombus-5">
                                <div class="rhombus">05</div>
                                <p>Отдаем проект заказчику<br> в электронной и печатной версиях</p>
                            </li>
                            <li class="rhombus-item rhombus-6">
                                <div class="rhombus">06</div>
                                <p>Поддерживаем проект после выпуска</p>
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
            obt1 = new Vivus('build_1', {type: 'oneByOne', delay:100, duration: 200, start: "inViewport"});
            obt2 = new Vivus('build_2', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
            obt3 = new Vivus('build_3', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
            obt4 = new Vivus('castle_1', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
        </script>

    </body>
</html>




