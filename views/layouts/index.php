
<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);
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

<div id="allgadgets_header">
    <div id="header">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_logo">
                    <a href="<?= \yii\helpers\Url::to(['/'])?>"><img src="images/logo2.png" id="logo" alt=""></a>
                </div>
            </div>
            <div class="col-2">
                <div id="allgadgets_phone_nom">
                    <span id="allgadgets_uid0"><a href="tel:+79160238171" id="allgadgets_uid1">ТЕЛ: +7(916) 023-81-71</a></span>
                </div>
            </div>
            <div class="col-3">
                <div id="allgadgets_button_zz">
                    <a href="" onclick="$('#form_popur').modal('show');return false;"><div id="button_zz"><div id="button_zz_text"><span id="allgadgets_uid2">закажите бесплатный звонок</span></div></div></a>

                </div>
                <div id="allgadgets_neobaz_text">
                    <span id="allgadgets_uid3">(ни к чему не обязывает)</span>
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

<?= $content ?>
<div id="allgadgets_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_cont_footer">
                    <span id="allgadgets_uid16">Звонок по России бесплатный<br><a href="tel:+79160238171" id="allgadgets_uid17">+7(916) 023-81-71</a><br></span><span id="allgadgets_uid18"><br>ОГРН 432566436400325 МОСКВА, Ленинградский пр-т, 69 <br><br>luxurytopwatch.line@yandex.ru<br>
                       <br><?= Html::a('Политика конфиденциальности', 'politic', $options = ['id' => 'allgadgets_uid19'] ) ?><br><br><br>Все права защищены © 2010 - 2017</span>
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