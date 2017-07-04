<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Useful */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Usefuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useful-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'label' => 'Картинка',
                'format' => 'html',

                'value' => function($data){
                    return Html::img($data->getImage(),['width' => 90]);
                },


            ],
            'text:html',
        ],
    ]) ?>

</div>
