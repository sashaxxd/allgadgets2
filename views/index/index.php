<?php
use yii\helpers\Html;
$this->title = 'КАТАЛОГ allgadgets';
?>
<?php
//Debug($model);
?>
<div id="allgadgets_hit">
    <div id="hit">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_hit_slogan">
                    <span id="allgadgets_uid4"><strong>САЙТ ALL GADJETS ПРЕДЛАГАЕТ СВОИМ ПОКУПАТЕЛЯМ НОВИНКИ ЭЛЕКТРОНИКИ 2017 ГОДА! ПО НИЗКИМ ЦЕНАМ!</strong></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_bor2">
    <div id="line_bor2">
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
                        <li><?= Html::a('КАТАЛОГ', '#pop_tavary' ) ?></li>
                        <li><?= Html::a('ДОСТАВКА', 'delivery' ) ?></li>
                        <li><?= Html::a('ГАРАНТИИ', 'guarantees' ) ?></li>
                        <li><?= Html::a('КОНТАКТЫ', 'contact' ) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_vk">
    <div id="contauer_vk">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_vk_link">
                    <a href="http://vk.com"><img src="images/myvk.png" id="vk_link" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_pop_tavary">
    <div id="pop_tavary">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_pop_tavary_image">
                    <img src="images/img0002.png" id="pop_tavary_image" alt="">
                </div>
            </div>
            <div class="col-2">
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
                <div id="allgadgets_contauer_pop_vn">
                    <div id="contauer_pop_vn">
                        <div class="row">
                          <?php  if(!empty($model)): ?>
                            <?  foreach ($model as $item):?>
                            <div class="col-1">
                                <div id="allgadgets_title1">
                                    <span id="allgadgets_uid5">
                                        <a href="<?= $item->link; ?>" id="allgadgets_uid6"><?= $item->title; ?></a>
                                    </span>
                                </div>
                                <div class="allgadgets_Image3">
                                    <a href="<?= $item->link; ?>" id="allgadgets_uid6"><img src="images/upload/<?= $item->image; ?>"  alt=""></a>
                                </div>
                                <hr id="Line1">
                                <div id="allgadgets_button_podrob">
                                    <a href="<?= $item->link; ?>" id="allgadgets_uid6" target="_blank"><img src="images/img0003.png" id="button_podrob" alt=""></a>
                                </div>
                            </div>
                            <?php endforeach;?>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_pol_gt">
    <div id="contauer_pol_gt">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_polez_gadget_image">
                    <img src="images/img0006.png" id="polez_gadget_image" alt="">
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_LayoutGrid11">
    <div id="LayoutGrid11">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_LayoutGrid12">
                    <div id="LayoutGrid12">
                        <div class="row">
                            <?php  if(!empty($model2)): ?>
                                <?  foreach ($model2 as $item):?>
                                    <div class="col-1">
                                        <div id="allgadgets_title1">
                                    <span id="allgadgets_uid5">
                                        <a href=" <?= yii\helpers\Url::to(['index/view', 'id' => $item->id]) ?>" id="allgadgets_uid6"><?= $item->title; ?></a>
                                    </span>
                                        </div>
                                        <div class="allgadgets_Image3">
                                            <a href=" <?= yii\helpers\Url::to(['index/view', 'id' => $item->id]) ?>" id="allgadgets_uid6"><img src="images/upload/<?= $item->getImage()?>"  alt=""></a>
                                        </div>
                                        <hr id="Line1">
                                        <div id="allgadgets_button_podrob">
                                            <a href="<?= yii\helpers\Url::to(['index/view', 'id' => $item->id]) ?>" id="allgadgets_uid6" ><img src="images/img0003.png" id="button_podrob" alt=""></a>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif; ?>
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
                    <span id="allgadgets_uid13">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo">
                    <img src="images/pay-types.png" id="image_bablo" alt="">
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
                    <span id="allgadgets_uid14">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo_mobila">
                    <img src="images/pay-types-mob.png" id="image_bablo_mobila" alt="">
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
                    <span id="allgadgets_uid15">КОНТАКТЫ:</span>
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
                    <form name="Form2" method="post" action="../send" accept-charset="UTF-8" id="Form2">
                        <input type="submit" id="send" name="" value="ОТПРАВИТЬ">
                        <input type="text" id="Editbox7" name="name" value="" placeholder="Ваше имя" required="">
                        <input type="text" id="Editbox8" name="phone" value="" placeholder="Ваш телефон" required="">
                    </form>



                    </div>
                </div>
                <div id="allgadgets_Text30">
                    <span id="allgadgets_uid20">Оставьте контакты<br>и мы вам перезвоним</span></div>
            </div>
        </div>
    </div>
</div>
