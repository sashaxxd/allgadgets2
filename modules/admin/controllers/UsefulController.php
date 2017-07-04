<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Useful;
use app\models\UsefulSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\UploadImage;
use yii\web\UploadedFile;

/**
 * UsefulController implements the CRUD actions for Useful model.
 */
class UsefulController extends AppAdminController
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Useful models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsefulSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Useful model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Useful model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Useful();
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

    /**
     * Updates an existing Useful model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = new UploadImage();


        if (Yii::$app->request->isPost) {

//      Debug($model); exit;

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

    /**
     * Deletes an existing Useful model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Useful model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Useful the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Useful::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
