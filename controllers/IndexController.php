<?php

namespace app\controllers;


use app\models\Pop;
use app\models\Useful;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;


class IndexController extends Controller
{
    public $layout = 'index';

    public function actionIndex()
    {
        $model = Pop::find()->select('id, title, link, image')->orderBy('id ASC')->all();
        $model2 = Useful::find()->select('id, title, text, image')->orderBy('id ASC')->all();
        return $this->render('index', [
              'model' => $model,
               'model2' => $model2,
        ]);

    }


    public function actionSend()
    {


        return $this->render('send'

        );

    }

    public function actionView()
    {




        $id = Yii::$app->request->get('id');

        $model = Useful::findOne($id);
        if(empty($model)) throw new HttpException(404, 'Нет такой страницы');
        $this->layout = "main";//Шаблон для этого  экшена
        return $this->render('view',[
            'model' => $model,
        ]);
    }
}
