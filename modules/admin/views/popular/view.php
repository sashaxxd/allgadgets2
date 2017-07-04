<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Popular */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Populars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="popular-view">

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
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::to( '/images/upload/' . $data->image  ),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:80px;'
                    ]);
                },
            ],
            'link',
        ],
    ]) ?>

</div>
