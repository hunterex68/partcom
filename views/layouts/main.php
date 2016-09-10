<?
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
$this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сайт автозапчастей"/>
    <link rel="icon" href="/favicon.png"/>
    <title>Интернет-магазин автозапчастей</title>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody();?>
<header>
    <div class='col-md-2'>LANA</div>
    <!--div style="width:100%;text-align:right;margin:0;background-color:white;color:#2e6da4;line-height: 20px;">
        <a href="basket"><span style="padding:10px;" class="glyphicon glyphicon-shopping-cart"></span></a>

    </div-->





    <div class="col-md-8 content">
        <ul class="nav">
            <li>
                <a class="nav-link" href="javascript:;">Главная</a>
            </li>
            <li>
                <a class="nav-link" href="javascript:;">Каталоги</a>
            </li>
            <li >
                <a class="nav-link" href="/site/about">О нас</a>
            </li>
            <li>
                <a href="/site/contact">Контакты</a>
            </li>

            <li id="enter"><a class="nav-link disabled" href="/site/login">Вход</a></li>

        </ul>
    </div>
    <div class="col-md-2">+38 (050) 32-555-23</div>
    <!--div class="social">
        <ul class="nav">
            <li>
                <a href="https://www.facebook.com/sharer.php?u=http://part.com.ua/get-assisted-experts-stay-loaded-online" target="_blank"  class="social-icon"><span class="symbol">facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/share?url=http://part.com.ua/get-assisted-experts-stay-loaded-online" target="_blank" class="social-icon"><span class="symbol">twitter</span></a>
            </li>
            <li>
                <a href="https://plus.google.com/share?url=http://part.com.ua/get-assisted-experts-stay-loaded-online" target="_blank" class="social-icon"><span class="symbol">googleplus</span></a>
            </li>
            <li>
                <a href="https://pinterest.com/pin/create/bookmarklet/?url=http://part.com.ua/get-assisted-experts-stay-loaded-online&amp;description=Get%20Assisted%20By%20Experts%20To%20Stay%20Loaded%20Online!" target="_blank" class="social-icon"><span class="symbol">pinterest</span></i></a>
            </li>
        </ul>
    </div-->

</header>
<div style='clear:both'></div>
<div class="container">
    <section>

        <div class="title" style="margin-bottom:100px;">
            <h1>Все, что Вам нужно находится здесь!</h1>
            <h2>любые запчасти на автомобиль.</h2>
            <form action="find" id="findform" role="search">
                <input type="text" name="oem" value="" class="control" placeholder="VIN-код">

                <span class="find"><i class="glyphicon glyphicon-lupa" onClick="document.forms[0].submit();"></i></span>
                <div style="clear:both;"></div>
                <textarea placeholder="Список необходимых деталей" cols="80" rows="15">

                </textarea>
            </form>
        </div>

        <div class="content-wellcom">
            <div class="content-info clearfix">

                <div class="col-12 title">

                    <h2>НАШИ ПРЕИМУЩЕСТВА НАД КОНКУРЕНТАМИ</h2>

                </div>

                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>1. Невысокая цена</h2>
                            80% предложений на рынке - посредники. И посредники посредников. Соответственно наценка составляет от 100 до 300%. Наша цена устанавливается непосредственно как цена производителя
                        </div>
                    </div>

                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>2. Нет скрытых платежей</h2>

                            По телефону озвучивается привлекательная стоимость, а на деле же получается совсем другое - надбавка идет за любые дополнительные расходы. Деньги теряете Вы. У нас нет скрытых платежей!
                        </div>
                    </div>

                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>3. Ценим клиента</h2>

                            Мы принимаем любую форму оплаты, которая удобна для клиента, а для постоянных заказчиков действуют приятные скидки. Если у вас нет возможности вывезти товар самостоятельно, мы подыщем транспорт по минимальной цене, проложив при этом оптимальный маршрут до пункта назначения
                        </div>
                    </div>

                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>4. Профессионализм</h2>

                            Долгий период усиленной работы в сфере торговли автозапчастями, а также тысячи тонн отгруженного товара позволяют нам гарантировать качество продукции и своевременную доставку каждой партии
                        </div>
                    </div>
                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>5. Большой опыт</h2>

                            В нашей стране этим видом топлива стали пользоваться лишь в середине 2000-х, в то время как европейцы и американцы активно используют пеллеты в качестве эффективного сырья для отопления уже в течение тридцати лет
                        </div>
                    </div>

                    <div class="col-3 pan">
                        <div class="text-center">
                            <h2>6. Только качество</h2>

                            Мы гарантируем качество каждой отгруженной партии товара и несем полную ответственность за продукт. Доставка крупных партий товара осуществляется в срок от 1 до 5 дней
                        </div>
                    </div>
                </div>
            </div>
        <?= $content ?>
        <div class="title" style="padding:50px 0;">
            <h2 >У вас остались вопросы?</h2>

            <div role="form" class="feedback">
                <form action="feedback" method="post" class="form">
                    <div style="margin:0 30%;position:relative;text-align:center">
                        <input type="text" size="80px" name="name" value="" class="inputctrl" required placeholder="Ваше имя">

                        <input type="email" size="80px" name="email" value="" class="inputctrl" required placeholder="Ваш E-mail">

                        <input type="text" size="80px" name="subject" value="" class="inputctrl" placeholder="Тема">

                        <textarea name="message" cols="80" rows="10" class="inputctrl" ></textarea>
                        <br/>
                        <input type="submit" value="Отправить" class=" inputctrl btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <div class="otzyv">
            <div class="col-12 title">
                <h2>Отзывы наших клиентов</h2>
            </div>
            <div class="feedback-box col-3" style="">
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
            <div class="feedback-box col-3">
                <div class="message">
                    Адекватные люди всегда перезванивают если видят ,что у них на телефоне пропущенные вызовы!
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
            <div class="feedback-box col-3">
                <div class="message">
                    Всегда помогают в подборе деталей, всегда вежливые, если обещали перезвонить, обязательно перезванивают. Всегда оговаривают сроки доставки, знаешь на что расчитывать
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

    </section>
    <footer>
        <div class="col-3" style=" color: #FFF; text-align: center; padding: 10px;float:left">
            <div>
                <div class="SimpleText">
                    <strong>Расписание работы</strong><br>
                    Понедельник - пятница:&nbsp;с 9:00 до 17:00 (GMT +2)<br>
                    Воскресенье: выходной день<br>
                    Тел: +3801231231212<br>
                    <strong>Обработка заказов -&nbsp;</strong>круглосуточно<br type="_moz">
                </div>
            </div>
        </div>
        <div class="col-6 bottom-menu">
            <div class="SimpleText">
                <div class="row">
                    <div class="col-6">
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
                    <div class="col-6">
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



            </div>



            <div class="SimpleText">




            </div>


        </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; PartCom <?= date('Y') ?></p>
    </div>
</footer>
        <noindex>
            <script type="text/javascript" src="//cabinet.salesupwidget.com/php/1.js" charset="UTF-8" async></script >
            <script type="text/javascript">var salesupwidgetcomuid="1603";</script>
        </noindex>
        <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


