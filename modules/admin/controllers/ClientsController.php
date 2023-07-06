<?php

namespace app\modules\admin\controllers;


use app\models\Clients;
use app\models\ClientsSearch;
use kartik\mpdf\Pdf;
use yii\base\ErrorException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;


/**
 * ClientsController implements the CRUD actions for Clients model.
 */
class ClientsController extends DefaultController
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




    public function actionIndex()
    {
        $searchModel = new ClientsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

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
    public function actionPdff($id)
    {
        return $this->render('pdf', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Clients();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view']);
            }else{
                print_r($model->errors);die();
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Clients model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Clients model.
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
     * Finds the Clients model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Clients the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     *
     */
public function actionPdf($id){
    $model = Clients::findOne($id);
    $html = $this->renderPartial('pdf_view',['model' => $model]);
    $mpdf = new \Mpdf\Mpdf();
    $mpdf ->showImageErrors = true;
    $mpdf ->SetDisplayMode('fullpage','two');
    $mpdf ->list_indent_first_level = 0;
    $mpdf ->writeHTML($html);
    $mpdf -> Output();
    exit;
}

    protected function findModel($id)
    {
        if (($model = Clients::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
