<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.06.2017
 * Time: 13:20
 */

namespace app\controllers;
use app\models\Pages;
use yii\web\Controller;


class InternalController extends Controller
{
    public $layout = 'internal';

    public  function actionPolitic()
    {
        return $this->render('politic'

        );

    }
    public  function actionDelivery()
    {

        $model = Pages::findOne([
            'title' => 'ДОСТАВКА',
        ]);
//        Debug($model);
        
        return $this->render('delivery',[
                'model' => $model,
            ]

        );

    }
    public  function actionGuarantees()
    {
        $model = Pages::findOne([
            'title' => 'ГАРАНТИИ',
        ]);

        return $this->render('guarantees',[
                'model' => $model,
            ]

        );

    }
    public  function actionContact()
    {
        $model = Pages::findOne([
            'title' => 'КОНТАКТЫ',
        ]);

        return $this->render('contact',[
                'model' => $model,
            ]

        );

    }
}