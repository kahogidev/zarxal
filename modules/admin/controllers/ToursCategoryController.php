<?php

namespace app\modules\admin\controllers;

use app\models\ToursCategory;
use app\models\ToursCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToursCategoryController implements the CRUD actions for ToursCategory model.
 */
class ToursCategoryController extends DefaultController
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ToursCategory models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ToursCategorySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ToursCategory model.
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

    /**
     * Creates a new ToursCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ToursCategory();

        if ($model->load($this->request->post())) {
            echo "<pre>";
//            print_r($model->translate_department_name); die();
            if ($model->validate()) {
                $model->name = json_encode($model->translate_name, JSON_UNESCAPED_SLASHES);
                $model->save();
                return $this->redirect(['index']);
            } else {
                print_r($model->errors);
                die;
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ToursCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $nameValues = json_decode($model->name, true);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->validate()) {
                $model->name = json_encode($model->translate_name, JSON_UNESCAPED_SLASHES);
                $model->save();
                return $this->redirect(['index']);
            } else {
                print_r($model->errors);
                die;
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
            'nameValues' => $nameValues
        ]);
    }

    /**
     * Deletes an existing ToursCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ToursCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ToursCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ToursCategory::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
