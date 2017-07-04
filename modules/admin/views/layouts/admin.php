
<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AdminAsset;


AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <script>
        $(document).ready(function()
        {
            $("a[href*='#pop_tavary']").click(function(event)
            {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#allgadgets_pop_tavary').offset().top }, 600, 'linear');
            });

        });
    </script>

</head>
<body>
<?php $this->beginBody() ?>

<div id="allgadgets_header_vn">
    <div id="header_vn">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_logo">
                    <a href="<?= \yii\helpers\Url::to(['/'])?>"><img src="/images/logo2.png" id="logo" alt=""></a>
                </div>
            </div>
            <div class="col-2">
<!--                <div id="allgadgets_phone_nom">-->
<!--                    <span id="allgadgets_uid0"><a href="tel:+79160238171" id="allgadgets_uid1">ТЕЛ: +7(916) 023-81-71</a></span>-->
<!--                </div>-->
            </div>
            <div class="col-3">
                <div id="allgadgets_button_zz">
                    <a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><div id="button_zz"><div id="button_zz_text"><span id="allgadgets_uid2"><?= Yii::$app->user->identity['username']?> (Выход)</span></div></div></a>
                </div>
                <div id="allgadgets_neobaz_text">
                    <span id="allgadgets_uid3">(выход с админ панели)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_bor1">
    <div id="line_bor1">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_menu">
    <div id="line_menu">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_ResponsiveMenu">
                    <label class="toggle" for="ResponsiveMenu-submenu" id="ResponsiveMenu-title">МЕНЮ<span id="ResponsiveMenu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu-submenu">
                    <ul class="ResponsiveMenu" id="ResponsiveMenu">
                        <li><?= Html::a('АДМИНКА', '/admin' ) ?></li>
                        <li><?= Html::a('ПОПУЛЯРНЫЕ ТОВАРЫ', '/admin/popular/' ) ?></li>
                        <li><?= Html::a('ПОЛЕЗНЫЕ ГАДЖЕТЫ', '/admin/useful/' ) ?></li>
                        <li><?= Html::a('CТРАНИЧКИ', '/admin/pages/' ) ?></li>
                        <?php if(!Yii::$app->user->isGuest): ?>
                            <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><?= Yii::$app->user->identity['username']?> (Выход)</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_pop_ostov">
    <div id="contauer_pop_ostov">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_contauer_content">
                    <div id="contauer_content">
                        <div class="row">
                            <div class="col-1">
                                <hr id="Line1">
                                <div id="allgadgets_Text1">
                                    <span id="allgadgets_uid4"><?= $content ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>

<div id="allgadgets_contauer_bablo">
    <div id="contauer_bablo">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_text_bablo">
                    <span id="allgadgets_uid5">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo">
                    <img src="/images/pay-types.png" id="image_bablo" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_cm_opl">
    <div id="cm_opl">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_cm_opl_text">
                    <span id="allgadgets_uid6">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo_mobila">
                    <img src="/images/pay-types-mob.png" id="image_bablo_mobila" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_conyauer_kontakt">
    <div id="conyauer_kontakt">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_zag_cont">
                    <span id="allgadgets_uid7">КОНТАКТЫ:</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="form_popur" class="modal fade" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="allgadgets_Form2">
                    <form name="Form2" method="post" action="send" accept-charset="UTF-8" id="Form2">
                        <input type="submit" id="send" name="" value="ОТПРАВИТЬ">
                        <input type="text" id="Editbox7" name="name" value="" placeholder="Ваше имя" required="">
                        <input type="text" id="Editbox8" name="phone" value="" placeholder="Ваш телефон" required="">
                    </form>
                </div>
                <div id="allgadgets_Text30">
                    <span id="allgadgets_uid8">Оставьте контакты<br>и мы вам перезвоним</span></div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_cont_footer">
                    <span id="allgadgets_uid9">Звонок по России бесплатный<br><a href="tel:+79160238171" id="allgadgets_uid10">+7(916) 023-81-71</a><br></span><span id="allgadgets_uid11"><br>ОГРН 432566436400325 МОСКВА, Ленинградский пр-т, 69 <br><br>luxurytopwatch.line@yandex.ru<br>
                       <br><?= Html::a('Политика конфиденциальности', '/politic', $options = ['id' => 'allgadgets_uid12'] ) ?><br><br><br>Все права защищены © 2010 - 2017</span>
                </div>
            </div>
            <div class="col-2">
                <script charset="utf-8" async="" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3ApZENlXNjibaU3aFlemgWBSuAwgdkbQ90&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>