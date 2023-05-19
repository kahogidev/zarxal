<?php

namespace app\modules\admin\controllers;

use app\models\Employees;
use app\models\EmployeesSearch;
use app\models\StaticFunctions;
use app\models\User;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EmployeesController implements the CRUD actions for Employees model.
 */
class EmployeesController extends DefaultController
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


    public function actionIndex()
    {
        $searchModel = new EmployeesSearch();
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


    public function actionCreate()
    {
        $model = new Employees();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_date = date("Y-m-d H:i:s");
            $model->updated_time = date("Y-m-d H:i:s");
//            $model->creator = Yii::$app->user->getId();
            $model->generatePassword($model->password);
            if ($model->save()){
                $model->file = UploadedFile::getInstance($model, 'avatar');
                $model->saveAvatarImage();
                $model->avatar = $model->file->baseName . '.' . $model->file->extension;
//                print_r($model->file);die;
//                $model->avatar = $model->saveAvatarImage();
                if ($model->save()){
                    return $this->redirect(['index', 'id' => $model->id]);
                }else {
                    return debug($model->errors);
                }
            }else{
                return debug($model->errors);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->password = "";
        $oldImage = $model->avatar;
        if ($model->load(Yii::$app->request->post())) {
            $model->updated_time = date("Y-m-d H:i:s");
            $model->generatePassword($model->password);

            $model->file = UploadedFile::getInstance($model,'avatar');
            if (!empty($model->file)){
                $model->avatar = $model->saveAvatarImage();
                $model->deleteOldImage($oldImage);
            }else{
                $model->avatar = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                return debug($model->errors);
            }
        }

        $userAvatar = StaticFunctions::getImage('user',$model->id, $model->avatar);

        return $this->render('update', [
            'model' => $model,
            'userAvatar' => $userAvatar
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }




    protected function findModel($id)
    {
        if (($model = Employees::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
