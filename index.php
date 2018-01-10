<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/system/init.php"; //Подключения ядра системы
global $DBi;
require_once "_index.php"

?>
<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$oSite->getName()?></title>
    <!--=================================
    Meta tags
    =================================-->
    <meta name="description" content="<?=$oSite->getName()?>">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
    <!--=================================
    Style Sheets
    =================================-->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.flickr.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/multicarusel.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/flexslider.css">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47153586 = new Ya.Metrika({
                    id:47153586,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47153586" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body class="eschool" data-spy="scroll" data-target="#navbar" data-offset="70">

<!--====================================
Body Content
=======================================-->
<div class="navbar-custom hidden">
    <div class="container">
        <a href="index.html" class="logo"><img src="img/logo_white.png" alt=""></a>
        <nav id="navbar">
            <a href="#" class="nav-triger"><span class="fa fa-navicon"></span></a>
            <ul class="main-menu nav">
                <li><a href="#section0">Вступление</a></li>
                <li><a href="#section1">Цены</a></li>
                <li><a href="#section2">О нас</a></li>
                <li><a href="#section3">Авто</a></li>
                <li><a href="#section4">Отзывы</a></li>
                <li><a href="#section5">Контакты</a></li>
            </ul>
        </nav>

    </div>
</div>
<section id="header" class="top-header">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-xs-5">
            <a href="index.html" class="logo"><img src="<?=$oSite->getLogo()?>" alt=""></a>
        </div>
        <div class="col-lg-5 col-md-5 visible-md visible-lg offer xs-hidden">
            <p>
				<?=$oSite->getOffer()?>
            </p>
        </div>
        <div class="col-lg-2 col-md-2 visible-lg our-in-social-network text-center">
			<?=$oSite->getAddress()?>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-7 text-right">
            <div class="phone cursor-pointer"><?=$oSite->getMainPhone()?></div>
            <div class="phone cursor-pointer"><?=$oSite->getAdditionalPhone()?></div>
            <a class="btn btn-default btn-sm btn-head mt-10 js-get-call">Заказать звонок!</a>
        </div>
    </div>
</section>
<div class="slider_container">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<section id="slider1" class="parallax section header" style="background-size:cover;
						background-position:center; background-repeat:no-repeat; background-image: url('<?=$mainSliderPhoto ? $mainSliderPhoto: "/img/mainSliders/universal.jpg"?>')">
					<div class="overlay"></div>
					<div class="container slide main-slide">
						<div class="headerInner mt-50">
							<div class="row">
								<div class="col-lg-8 col-md-12 col-xs-12 main-title" style="color:white">
									<h2><?=$title ? $title : "Воротные системы для вашего дома и бизнеса"?></h2>
									<p>Мы занимаемся производством, монтажом и ремонтом всех видов <b class="red">ВОРОТНЫХ СИСТЕМ</b></p>

								</div>
								<div class="col-lg-4 col-md-12 col-xs-12 small-text text-right">
									<h2  style="color:white">Выполнено более <span class="text-red">450</span> работ!</h2>
									<ul  style="color:white">
										<li><h4  style="color:white">100% гарантия качества!</h4></li>
										<li><h4  style="color:white">Высококфвалифицированные консультанты</h4></li>
										<li><h4  style="color:white">Бесплатная доставка</h4></li>
										<li><h4  style="color:white">Строгое соблюдение сроков</h4></li>
									</ul>
									<a href="#calculator" class="btn btn-default" style="display: inline-block;">
										Перейти к калькулятору
										<i class="fa fa-calculator" style="margin-left: 5px;"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</li>
			<li>
				<section id="slider2" class="parallax section header" style="background-size:cover;
				background-position:center; background-repeat:no-repeat; background-image: url('/img/mainSliders/garage-1.png')">
						<div class="container slide">
						<div class="headerInner">
							<div class="row">
								<div class="col-lg-4 col-md-8 col-xs-8 text-left" style="color:white;">
									<h3>Секционные ворота за <span style="font-size:70px">3</span> дня!</h3>
									<hr>
									<p>Как это работает:</p>
									<ul style="    padding: 0;">
										<li>Вы оставляете заявку</li>
										<li>Наш замерщик выезжает делает замер и говорит окончательную цену</li>
										<li>Оформляем договор на работу</li>
										<li>И уже через день наши ворота будут установлены у вас</li>
									</ul>
									<a class="mt-10 btn btn-success btn-block">Посмотреть линейку размеров</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</li>
			<li>
				<section id="slider3" class="parallax section header" style="background-size:cover;
				background-position:center; background-repeat:no-repeat; background-image: url('/img/mainSliders/rasp_vorota.jpg')">
					<div class="container slide">
						<div class="headerInner">
							<div class="row">
								<div class="col-lg-5 col-md-12 col-xs-12 text-left" style="color:white;">
									<h3>Секционные порота по специальной цене</h3>
									<hr>
									<ul style="padding:0">
										<li>Ширина проема: 3 000 мм, высота ворот: 2 000 мм;</li>
										<li>Толщина сэндвич-панели: 40-45 мм;</li>
										<li>Комплект электропривода (Doorhan, Nice, Came, Faac)</li>
										<li>Гарантия: 1 год</li>
										<li>Доставка и выезд замерщика: бесплатно!</li>
										<li>Звоните! Предложение ограничено!</li>
									</ul>
									<a href="#calculator" class="btn btn-default mt-20" style="display: inline-block;">
										Перейти к калькулятору
										<i class="fa fa-calculator" style="margin-left: 5px;"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</li>
			<li>
				<section id="slider4" class="parallax section header" style="background-size:cover;
				background-position:center; background-repeat:no-repeat; background-image: url('/img/mainSliders/remont.png')">
					<div class="container slide">
						<div class="headerInner">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 text-left" style="color:white;">
									<h3>Ремонт и обслуживание воротных систем<br>(распашные, секционные, отктаные)</h3>
									<p>Выезд мастера в течении часа! Оформление сопутствующих документов! Гарантия на выполненные работы!</p>
									<hr>

								</div>
								<div class="row" style="color:white">
									<div class="col-lg-4 col-md-6 col-xs-12">
										<ul>
											<li>ремонт ворот и автоматики</li>
											<li>обслуживание автоматических ворот</li>
											<li>ремонт автоматических шлагбаумов</li>
											<li>ремонт промышленных секционных ворот</li>
											<li>ремонт автоматики распашных ворот</li>
										</ul>
									</div>
									<div class="col-lg-4 col-md-6 col-xs-12">
										<ul>
											<li>ремонт откатных ворот</li>
											<li>ремонт рольставней и рольворот</li>
											<li>ремонт гаражных ворот</li>
											<li>ремонт автоматики ворот</li>
											<li>ремонт секционных ворот</li>
										</ul>
									</div>
									<div class="col-lg-4 col-md-12 col-xs-12">
										<h3 class="small-text text-right mt-30">Узнать цены:<br><?=$oSite->getMainPhone()?><br><?=$oSite->getAdditionalPhone()?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</li>
			<li>
				<section id="slider5" class="parallax section header" style="background-size:cover;
				background-position:center; background-repeat:no-repeat; background-image: url('/img/mainSliders/automatic.jpg')">
					<div class="container slide">
						<div class="headerInner">
							<div class="row">
								<div class="col-lg-5 col-md-10 col-xs-10 text-left" style="color:white;margin-top:60px;">
									<h3>Автоматические ворота<br>(распашные, секционные, отктаные)</h3>
									<hr>
									<p>Поможем подобрать электропривод согласно вашим требованиям, чтобы съкономить ваши деньги!</p>
									<a href="#calculator" class="btn btn-default" style="display: inline-block;">
										Перейти к калькулятору
										<i class="fa fa-calculator" style="margin-left: 5px;"></i>
									</a>

								</div>
								<div class="col-lg-7 col-md-12 col-xs-12 small-text text-center"></div>
							</div>
						</div>
					</div>
				</section>
			</li>
			<li>
				<section id="slider6" class="parallax section header" style="background-size:cover;
				background-position:center; background-repeat:no-repeat; background-image: url('/img/mainSliders/prom_vorota.jpg')">
					<div class="container slide">
						<div class="headerInner">
							<div class="row">
								<div class="col-lg-7 col-md-12 col-xs-12 text-left" style="color:white">
									<h2>Производство, монтаж, ремонт воротных систем</h2>
									<div class="row"><div class="col-lg-10"><hr></div></div>

								</div>
								<div class="col-lg-5 col-md-12 col-xs-12 small-text text-center">
									<h3>Наши работы <span class="text-red">НЕ РЖАВЕЮТ</span></h3>
									<ul class="mb-15 text-left" style="font-size:15px">
										<li>Каркас ворот выполнен из профтрубы 60/40
											толщиной 2 мм., ребра жесткости 40/20;</li>
										<li>Мы производим затирку и герметизацию сварочных швов швов</li>
										<li>Гарантийное обслуживание 1 год</li>
										<li>Индивидуальный подход к каждому проекту</li>
										<li>Поможем подобрать электропривод согласно вашим требованиям, чтобы съкономить ваши деньги</li>
									</ul>
									<a href="#calculator" class="btn btn-default" style="display: inline-block;">
										Перейти к калькулятору
										<i class="fa fa-calculator" style="margin-left: 5px;"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</li>
		</ul>
	</div>
</div>








<? require("blocks/skills.php") ?>

<? require("blocks/calculator.php") ?>

<? require("blocks/call_me.php") ?>

<? require ("blocks/additional_work.php")?>

<? require("blocks/best_price.php") ?>

<? require("blocks/other_information.php") ?>

<section id="pleace_call_me2"
         style="min-height: 350px;background-image: url('/img/3.jpg');background-size:cover;background-position: center"
         class="parallax trialtext-bold text-center">
    <div class="overlay"></div>
    <div class="parallax_inner">
        <div class="container">
            <div style="width:80%; margin:0 auto;">
                <h2 class="mt-10 mb-30"><span style="color:rgb(231, 190, 0)">Появились вопросы?</span> Звоните не откладывая</h2>
                <h2 class="mb-50"><i style="color:rgb(0,133,62);margin-right:10px" class="fa fa-phone-square" aria-hidden="true"></i><?=$oSite->getMainPhone()?></h2>
            </div>
        </div>
    </div>
</section>

<? require("blocks/our_works.php") ?>

<section id="paper_1" class="excellence mb-50">
	<div class="overlay-white"></div>
    <div class="container mb-30">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
<!--                        <figure class="mt-50"><img src="/img/vazhno.jpg" alt=""></figure>-->
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <h5 style="color:#000"><span style="color:rgb(0,133,62)">НЮАНСЫ</span> ПРИ УСТАНОВКЕ</h5>
                        <p>
                            Высокое качество откатных ворот Дорхан и Алютех в полной мере можно оценить при установке автоматики. Наша компания предлагает вам наиболее выгодный вариант сотрудничества — установку автоматических откатных ворот «под ключ». Стандартный комплект поставки состоит из консольно-роликовой системы крепления с несущей балкой и роликовой опорой, комплекта направляющих и противовеса. Для повышения комфорта ворота оснащаются современной автоматикой с дистанционным управлением.
                        </p>
                        <p>
                            Дополнительно могут быть установлены светодиодные индикаторы и маячки, предотвращающие развитие аварийных ситуаций, а система видеоконтроля повышает безопасность. При отключении электропитания все ворота, оснащенные автоматическим приводом, могут быть легко открыты вручную с помощью особого ключа разблокировки.
                        </p>
                        <p>
                            Если Вы хотите купить откатные ворота с механическим управлением с перспективой автоматизации в будущем мы рекомендуем вам заказывать ворота с установленной зубчатой рейкой. Для упрощения и удешевления последующего монтажа автоматики мы также рекомендуем выполнить прокладку электропроводки непосредственно в момент установки. Для дистанционного управления воротами мы предлагаем современную автоматику известных мировых брендов Nice BFT, FAAC, AN-Motors, Came и др.
                        </p>
                        <p>
                            Калитка может быть встроена непосредственно в воротное полотно.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? require("blocks/papers.php") ?>

<? require("blocks/contacts.php") ?>

<footer id="footer" class="text-center color-white text-bold">
    <span>© VokService, 2015 </span>
</footer>

<div id="share_full_container" style="margin-top: -140px; display: block;" class="hidden-xs">
    <div class="share_container_out">
        <div id="share_container_2" class="share_container" style="right: -10px;">
            <div id="share_closed_2" class="share_closed">
                <figure class="share_triangle"><i class="fa fa-angle-left" aria-hidden="true"></i></figure>
                <p>Спецакция<br>откатные ворота<br>с фундаментом</p>
            </div><br>
        </div>
    </div>
    <div class="share_container_out">
        <div id="share_container_1" class="share_container" style="background: #008543;">
            <div id="share_closed_1" class="share_closed">
                <figure class="share_triangle"><i class="fa fa-angle-left" aria-hidden="true"></i></figure>
                <p>Специальная цена<br>на секционные<br>ворота</p>
            </div><br>
        </div>
    </div>
    <div class="share_container_out">
        <div id="share_container_3" class="share_container" style="background: #e7be00;">
            <div id="share_closed_3" class="share_closed">
                <figure class="share_triangle"><i class="fa fa-angle-left" aria-hidden="true"></i></figure>
                <p>Суперцена<br>Откатные ворота<br>с двигателем</p>
            </div><br>
        </div>
    </div>
</div>
<div id="share_open_full_container" class="hidden-xs" style="display: none;">
    <div class="share_open_container clearfix" share_id="share_container_1">
        <figure class="close-block"><i class="fa fa-angle-right" aria-hidden="true"></i></figure>
        <div class="share_open_left">
            <p class="share_open_p">Секционные ворота<br>по специальной цене!</p>
            <p>Ширина проема: 3000 мм, высота ворот: 2 000 мм<br>
                Толщина сэндвич-панели: 40 мм<br>
                Комплект электропривода (Doorhan, Nice, Came, Faac)<br>
                Монтаж ворот с автоматикой</p>
            <p class="margin_top">До 25 декабря  цена всего<br><span class="share_price">65&thinsp;000&thinsp;<span class="rub" style="">P</span></span></p>
            <p class="margin_top">Звоните нам круглосуточно!<br>
                <span class="share_phone">
					<?=$oSite->getMainPhone()?>
                </span>
            </p>
        </div>
    </div>
    <div class="share_open_container clearfix" share_id="share_container_2">
        <figure class="close-block"><i class="fa fa-angle-right" aria-hidden="true"></i></figure>
        <div class="share_open_left">
            <p class="share_open_p">Специальная акция<br>при покупке откатных ворот!</p>
            <p style="margin-bottom:10px;">Предлагаем вашему вниманию лучшее предложение 2017 года на рынке ворот:</p>
            <ul class="main_ul main_ul_share">
                <li>Откатные ворота с порошковым окрашиванием с гарантией 1 год! </li>
                <li>Предназначены для установки в проемах ширирой до 4,3 м и высотой до 2,2 м.</li>
                <li>Каркас ворот изготовлен из прямоугольной профильной трубы 60х40 мм, толщина 2 мм, ребра жесткости 40х20 мм.</li>
                <li>В комплект поставки входит откатная консольная система производства Ролтэк/DoorHan.</li>
                <li>Автоматика — электропривод ведущих мировых брендов (Nice, Came, Doorhan, Faac).</li>
                <li>Обустройство фундамента под ворота. </li>
                <li>Монтаж «под ключ» с установкой и тестированием автоматики. </li>

            </ul>
            <p class="margin_top">Цена на данный комплект составляет всего<br><span class="share_price">78&thinsp;000&thinsp;<span class="rub" style="">P</span></span></p>
            <p class="margin_top">Внимание! Предложение действует до 25 декабря  2017 года.</p>
            <p>Звоните нам круглосуточно!<br>
                <span class="share_phone">
					<?=$oSite->getMainPhone()?>
                </span>
            </p>
        </div>
    </div>
    <div class="share_open_container clearfix" share_id="share_container_3">
        <figure class="close-block"><i class="fa fa-angle-right" aria-hidden="true"></i></figure>
        <div class="share_open_left">
            <p class="share_open_p">Купите откатные ворота с электроприводом<br>и установкой по суперцене! </p>
            <p class="margin_top">Только до 25 декабря  текущего года мы&nbsp;реализуем откатные ворота<br>
                с&nbsp;порошковой покраской, электроприводом и&nbsp;установкой по&nbsp;цене<br><span class="share_price">65&thinsp;000&thinsp;<span class="rub" style="">P</span></span></p>
            <p class="margin_top" style="margin-bottom:10px;">За эту цену вы получите:</p>
            <ul class="main_ul main_ul_share">
                <li>Каркас из профильной прямоугольной трубы 60х40 мм, толщина профиля 2 мм, ребра жесткости 40х20 мм.</li>
                <li>Комплект современной откатной консольной системы «Дорхан» или «Ролтэк». </li>
                <li>Комплект электропривода ведущих мировых производителей (Doorhan, Nice, Faac или Came). </li>
                <li>Профессиональный монтаж с автоматикой и настройкой. Ворота устанавливаются в проемах шириной до 4,3 м, высота ворот до 2,2 м. </li>

            </ul>
            <p class="margin_top">Ждем ваш звонок круглосуточно! <br>
                <span class="share_phone">
					<?=$oSite->getMainPhone()?>
                </span>
            </p>
        </div>
    </div>
</div>


<!--MODAL-->
<div class="modal fade" id="get-call-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title title">У вас есть вопрос?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-body">
                <p>Оставьте нам свой номер и наши специалисты свяжутся с вами</p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" id="name" placeholder="Ваше имя">
                </div>
                <div class="input-group mt-15">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input class="form-control" id="phone" required placeholder="Номер телефона">
                </div>
                <button class="btn btn-default btn-block mt-20 js-send-reques">Отправить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="article-dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title title">Хорошие ворота - залог безопасности дома</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Каждый пытается оградить свой дом, потому не есть редкостью, а есть даже необходимостью установка
						ворот. Сегодня мы попробуем разобраться, какие ворота стоит выбрать, чтобы они служили верой
					и правдой долгие годы.</p>

				<p>Очень популярны среди потребителей, на сегодняшний день, есть откатные ворота. И это совсем не удивительно, ведь они просто созданы для максимально удобной организации въезда на огражденную территорию. Стоит заметить, что в проемы таких ворот отсутствует катающийся ролик. Это дает возможность открывать ворота без особых усилий вручную. Это также обеспечивает надежную работу при автоматическом режиме. Работать они будут безупречно при любых погодных условиях. В общем можно сказать, что откатные ворота делают доступ к территории максимально комфортным.</p>

				<p>Идеальным вариантом будут откатные ворота, только консольного типа. Такие ворота сконструированы с цельного полотна, которое передвигается вдоль забора. Но, для таких ворот следует заранее побеспокоиться о фундаменте.</p>

				<p>При ремонтных работах стоит больше всего заботиться о своей безопасности и комфорте. Потому лучшим выходом для загородного дома или коттеджа будут откатные ворота. Тем более что стоимость таких ворот устроит каждого. Стоит отметить и тот факт, что эти ворота являются в качестве дополнительной охраны территории, и они совершенно не требуют к себе никаких дополнительных растрат. Говоря о современных воротах нельзя не упомянуть об их внешнем виде. Все откатные ворота имеют красивый и элегантный внешний вид при широкой гамме расцветок. Они устойчивы к износу и оборудованы надежными и проверенными системами безопасности. Они спокойно переносят на себе все воздействия осадков, отлично противостоят коррозии и механическим повреждениям. Установка откатных ворот напоминает монтаж секционных ворот – это быстро, просто и легко.</p>

				<p>Раз уж мы упомянули и секционные ворота, то стоит сказать пару слов и о них. Производят их из сэндвич-панелей, расположенных горизонтально. Секционные ворота являются также эффективными, надежными и удобными конструкциями. Но, их используют в основном, как промышленные ворота, или в качестве гаражных. Такие ворота устанавливаются в любой форме и в любом размере. Главными качествами секционных ворот есть полная адаптация под все климатические условия. Они будут работать в нормальном режиме, даже при самом сильном морозе.</p>

				<p>Заказать качественные и надежные ворота в Челнах вы сможете, воспользовавшись услугами компании «МастерВорот». Помните, что от вашего выбора зависит безопасность вашего дома.</p>
			</div>
		</div>
	</div>
</div>
<!--MODAL-->




<!--===============================
Script Source
=================================-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-scrollspy.min.js"></script>
<script ser="/js/multicarusel.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/calc_new.js"></script>
<script src="/js/main.js"></script>
<script src="/js/jquery.maskedinput.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
</body>
</html>
