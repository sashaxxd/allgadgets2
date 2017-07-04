<div class="g_title" style="text-align: center; ">
<h2><?= $model->title; ?></h2>
    </div>
<br>
    <div class="g_im" style="text-align: center; max-width: 100%;">
<img src="../images/upload/<?= $model->getImage();?>"  id="img_pg" style="width: 300px; max-width: 100%; border: 2px solid #FFFFFF;
   background: #FFFFFF;
   outline: 1px solid #CCCCCC;
   padding: 0px;">
    </div>

<br>

    <div class="g_text" style="float: left;">
<?= $model->text; ?>
    </div>
