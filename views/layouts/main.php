<?
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
//\yii\web\JqueryAsset::register($this);

$this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Сайт автозапчастей"/>
	<link rel="icon" href="/favicon.png"/>
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

</head>
<body>
<?php $this->beginBody(); ?>
<header class="top-header">
	<div class="container">
		<div class="row">

			<div class="col-md-4 top_links">
				<button class="client-icon hidden-md hidden-lg hidden-sm">
					<i class="glyphicon glyphicon-user"></i>
				</button>
				<button href="basket" class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</button>
				<div class="basket-counter"><span id="counter">0</span></div>
				<div class="auth-links">
					<a href="#">Вход</a>/<a href="#">Регистрация</a>
				</div>
			</div>

			<div class="col-md-3 soc_buttons">
				<a href="https://www.facebook.com/sharer.php?u=http://part.com.ua/get-assisted-experts-stay-loaded-online"
				   target="_blank" class="social-icon"><span class="symbol">facebook</span></a>
				<a href="https://twitter.com/share?url=http://part.com.ua/get-assisted-experts-stay-loaded-online"
				   target="_blank" class="social-icon"><span class="symbol">twitter</span></a>
				<a href="https://plus.google.com/share?url=http://part.com.ua/get-assisted-experts-stay-loaded-online"
				   target="_blank" class="social-icon"><span class="symbol">googleplus</span></a>
				<a href="https://pinterest.com/pin/create/bookmarklet/?url=http://part.com.ua/get-assisted-experts-stay-loaded-online&description=Get%20Assisted%20By%20Experts%20To%20Stay%20Loaded%20Online!"
				   target="_blank" class="social-icon"><span class="symbol">pinterest</span></i></a>
			</div>
		</div>
	</div>
</header>
<header class="middle-header">
	<div class="container">
		<div class="row">
			<div class="hdr clearfix">
				<div class='col-md-2 logo'>LANA</div>

				<div class="col-md-3 col-md-push-7 rightphone hidden-xs">
					<div class="phones">
						<div class="phone">
							<i class="glyphicon glyphicon-phone"></i>
							+38 (050)32-555-23
						</div>
						<div class="phone">
							<i class="glyphicon glyphicon-phone"></i>
							+38 (067)67-67-464
						</div>
						<div class="phone">
							<i class="glyphicon glyphicon-phone"></i>
							+38 (093)939-68-68
						</div>
						<a href="#" class="callback">Заказать обратный вызов</a>
					</div>
				</div>
				<div class="col-md-7 col-md-pull-3 hidden-xs">
					<nav style="text-align: center" class="clearfix">
						<ul class="main-menu">
							<li class="active">
								<a class="nav-link" href="javascript:;">Главная</a>
							</li>
							<li>
								<a class="nav-link" href="javascript:;">Каталоги</a>
							</li>
							<li>
								<a class="nav-link" href="/site/about">О нас</a>
							</li>
							<li>
								<a href="/site/contact">Контакты</a>
							</li>

							<li id="enter"><a class="nav-link disabled" href="/site/login">Вход</a></li>

						</ul>
					</nav>

				</div>
				<div id='sandwich' class='hidden-lg hidden-md hidden-sm'>
					<div class='sw-topper'></div>
					<div class='sw-bottom'></div>
					<div class='sw-footer'></div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix title toptitle">
	<!--div class="col-md-8 col-md-offset-2"-->
	<h1 class="hidden-xs">Все, что Вам нужно находится здесь!</h1>
	<h2 class="hidden-xs">любые запчасти на автомобиль.</h2>
	<div class="col-md-6 panel-body bg-success" style="padding:50px 0;">
		<form action="find" class="form-inline" role="form">
			<input type="text" name="vin" value="" pattern="[A-Za-z0-9]{17}" class="form-control" id="vin"
			       placeholder="VIN-код">

			<button class="btn btn-success" onClick="document.forms[0].submit();">
				продолжить&nbsp;
                        <span>
                            &#187;
                        </span>
			</button>
		</form>
	</div>
	<div class="col-md-6 panel-body bg-info" style="padding:50px 0;">

		<form action="find" class="form-inline" role="form">
			<input type="text" name="oem" value="" pattern="[A-Za-z0-9]" class="form-control" id="vin"
			       placeholder="Код детали">

			<button class="btn btn-primary" onClick="document.forms[0].submit();">
				Найти!
                        <span>
                            &#187;
                        </span>
			</button>
		</form>

	</div>
</div>
<!--/div-->

<div class="content-wellcom">
	<div class="container clearfix">

		<div class="col-md-12 title">

			<h2>НАШИ ПРЕИМУЩЕСТВА НАД КОНКУРЕНТАМИ</h2>

		</div>

		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>1. Невысокая цена</h2>
				80% предложений на рынке - посредники. И посредники посредников. Соответственно наценка
				составляет от 100 до 300%. Наша цена устанавливается непосредственно как цена производителя
			</div>
		</div>

		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>2. Нет скрытых платежей</h2>

				По телефону озвучивается привлекательная стоимость, а на деле же получается совсем другое -
				надбавка идет за любые дополнительные расходы. Деньги теряете Вы. У нас нет скрытых платежей!
			</div>
		</div>

		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>3. Ценим клиента</h2>

				Мы принимаем любую форму оплаты, которая удобна для клиента, а для постоянных заказчиков
				действуют приятные скидки. Если у вас нет возможности вывезти товар самостоятельно, мы подыщем
				транспорт по минимальной цене, проложив при этом оптимальный маршрут до пункта назначения
			</div>
		</div>

		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>4. Профессионализм</h2>

				Долгий период усиленной работы в сфере торговли автозапчастями, а также тысячи тонн отгруженного
				товара позволяют нам гарантировать качество продукции и своевременную доставку каждой партии
			</div>
		</div>
		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>5. Большой опыт</h2>

				В нашей стране этим видом топлива стали пользоваться лишь в середине 2000-х, в то время как
				европейцы и американцы активно используют пеллеты в качестве эффективного сырья для отопления
				уже в течение тридцати лет
			</div>
		</div>

		<div class="col-md-3 pan">
			<div class="text-center">
				<h2>6. Только качество</h2>

				Мы гарантируем качество каждой отгруженной партии товара и несем полную ответственность за
				продукт. Доставка крупных партий товара осуществляется в срок от 1 до 5 дней
			</div>
		</div>
	</div>
</div>
<?= $content ?>
<div class="title container" style="padding:50px 0;" id="title">

	<div class="col-md-8 col-md-offset-2">
		<h2>У вас остались вопросы?</h2>
		<form role="form" action="feedback" method="post" class="form">

			<input type="text" size="80px" name="name" value="" class="form-control" required
			       placeholder="Ваше имя">

			<input type="email" size="80px" name="email" value="" class="form-control" required
			       placeholder="Ваш E-mail">

			<input type="text" size="80px" name="subject" value="" class="form-control" placeholder="Тема">

			<textarea title="Сообщение" name="message" cols="80" rows="10" class="form-control"></textarea>
			<br/>
			<input type="submit" value="Отправить" class=" btn btn-success">

		</form>
	</div>
</div>
</div>
<div class="otzyv">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title">
				<h2>Отзывы наших клиентов</h2>
			</div>
		</div>
		<div class="row">
			<div class="feedback-box col-md-3">
				<div class="message">
					Доволен чутким отношением к клиентам.
				</div>
				<div class="client">
					<div class="quote red-text">
						<i class="glyphicon glyphicon-user"></i>
					</div>
					<div class="client-info">
						<a class="client-name" target="_blank">John Doe</a>
					</div>
				</div> <!-- / END CLIENT INFORMATION-->
			</div> <!-- / END SINGLE FEEDBACK BOX-->
			<div class="feedback-box col-md-3">
				<div class="message">
					Адекватные люди. Всегда перезванивают если видят, что у них на телефоне пропущенные вызовы!
				</div>
				<div class="client">
					<div class="quote red-text">
						<i class="glyphicon glyphicon-user"></i>
					</div>
					<div class="client-info">
						<a class="client-name" target="_blank">Олег</a>
						<a class="client-company">покупатель</a>
					</div>
				</div> <!-- / END CLIENT INFORMATION-->
			</div> <!-- / END SINGLE FEEDBACK BOX-->
			<div class="feedback-box col-md-3">
				<div class="message">
					Всегда помогают в подборе деталей, всегда вежливые, если обещали перезвонить, обязательно
					перезванивают. Всегда оговаривают сроки доставки, знаешь на что расчитывать
				</div>
				<div class="client">
					<div class="quote red-text">
						<i class="glyphicon glyphicon-user"></i>
					</div>

					<div class="client-info">
						<a class="client-name" target="_blank">PitStop</a>
						<a class="client-company">менеджер</a>
					</div>
				</div> <!-- / END CLIENT INFORMATION-->
			</div> <!-- / END SINGLE FEEDBACK BOX-->
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4" style=" color: #FFF;  padding: 10px;">


				<strong>Расписание работы</strong><br>
				Понедельник - пятница:<br>с 9:00 до 17:00 (GMT +2)<br>
				Воскресенье: выходной день<br>
				Тел: +3801231231212<br>
				<strong>Обработка заказов -&nbsp;</strong>круглосуточно<br>


			</div>
			<div class="col-md-2">
				<ul>
					<li>
						<a href="/instructions/how_to_begin">Как начать работу</a></li>
					<li>
						<a href="/instructions/how_to_order/search">Как искать товар</a></li>
					<li>
						<a href="/instructions/how_to_order/basket">Как работать с корзиной</a></li>
					<li>
						<a href="/instructions/how_to_order/order">Как оформить заказ</a></li>
					<li>
						<a href="/instructions/how_to_pay">Как оплатить заказ</a></li>
					<li>
						<a href="/instructions/how_to_send">Как отправить товар</a></li>
					<li>
						<a href="/instructions/how_to_ask_question">Как задать вопрос менеджеру</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul>
					<li>
						<a href="/instructions/discount_sheet">Объемные скидки</a></li>
					<li>
						<a href="/instructions/pricelists_sheet">Типы прайслистов</a></li>
					<li>
						<a href="/instructions/web_services">Веб-сервисы</a></li>
					<li>
						<a href="/Page/termsandconditions">Договор сотрудничества</a></li>
					<li>
						<a href="/Page/about">О компании</a></li>
					<li>
						<a href="/Page/contacts">Контакты</a></li>
					<li>
						<a href="/ContentList/site_news">Архив новостей</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="pull-left">&copy; PartCom <?= date('Y') ?></p>
			</div>
		</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


