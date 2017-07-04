<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Popular;
use app\models\PopularSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\UploadImage;
use yii\web\UploadedFile;





class PopularController extends AppAdminController
{

    
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    
    
    public function actionIndex()
    {
        $searchModel = new PopularSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    
    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    
    
	
	  public function actionCreate()
    {
        $model = new Popular();
        $model2 = new UploadImage();



        if (Yii::$app->request->isPost) {
            $file = UploadedFile::getInstance( $model2, 'image');
            $model->saveImage($model2->UploadedFile($file));
            $model2->UploadedFile($file);

        }







        if ($model->load(Yii::$app->request->post()) && $model->save() && Yii::$app->request->isPost) {




            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model2' => $model2,


            ]);
        }
    }


    
    
	
	    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = new UploadImage();


        if (Yii::$app->request->isPost) {



            $file = UploadedFile::getInstance( $model2, 'image');
//            Debug(strtolower(md5(uniqid($file->baseName))) .'.'. $file->extension);die;

$model->saveImage($model2->UploadedFile2($file, $model->image));
$model2->UploadedFile($file);

}


if ($model->load(Yii::$app->request->post()) && $model->save()) {
    return $this->redirect(['view', 'id' => $model->id]);
} else {
    return $this->render('update', [
        'model' => $model,
        'model2' => $model2,
    ]);
}
}

    
    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    
    
    protected function findModel($id)
    {
        if (($model = Popular::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
