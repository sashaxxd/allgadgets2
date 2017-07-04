<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Popular */

$this->title = 'Добавить поп. товар';
$this->params['breadcrumbs'][] = ['label' => 'Populars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="popular-create">

    <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
        'model' => $model,
        'model2' => $model2,
      
    ]) ?>

</div>


