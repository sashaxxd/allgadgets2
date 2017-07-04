<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\PopularSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Популярные товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="popular-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать популярный', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
