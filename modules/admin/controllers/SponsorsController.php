<?php

namespace app\modules\admin\controllers;


use app\models\Sponsors;
use app\models\SponsorsSearch;
use app\models\StaticFunctions;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SponsorsController implements the CRUD actions for Sponsors model.
 */
class SponsorsController extends DefaultController
{
    /**
     * @inheritDoc
     */
//    public function behaviors()
//    {
//        return array_merge(
//            parent::behaviors(),
//            [
//                'verbs' => [
//                    'class' => VerbFilter::className(),
//                    'actions' => [
//                        'delete' => ['POST'],
//                    ],
//                ],
//            ]
//        );
//    }

    /**
     * Lists all Sponsors models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SponsorsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sponsors model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Sponsors();

        if ($this->request->isPost) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }

            if ($model->load($this->request->post())) {
                if ($model->save()) {

                    $model->images = UploadedFile::getInstance($model,'images');
                    $model->images = StaticFunctions::saveImage('sponsors',$model->id,$model->images);

                    $model->save();

                    return $this->redirect(['index', 'id' => $model->id]);
                }else{
                    $this->debug($model->errors);die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->images;

        if ($this->request->isPost && $model->load($this->request->post())) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }

            $model->images = UploadedFile::getInstance($model,'images');

            if (!empty($model->images)){
                $model->images = StaticFunctions::saveImage('sponsors',$model->id,$model->images);
                StaticFunctions::deleteImage('sponsors',$model,$oldImage);
            }else{
                $model->images = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                debug($model->errors);die;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }



    protected function findModel($id)
    {
        if (($model = Sponsors::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
