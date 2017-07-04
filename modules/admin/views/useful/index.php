<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsefulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Гаджеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useful-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать гаджет', ['create'], ['class' => 'btn btn-success']) ?>
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
                'format' => 'html',

                'value' => function($data){
                    return Html::img($data->getImage(),['width' => 50]);
                },


            ],
//            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
