<?php

namespace app\modules\admin\controllers;

use app\models\LoginForm;
use app\models\StaticFunction;
use app\models\User;
use app\models\UserSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends DefaultController
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

    public function actionLogin(){
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionIndex()
    {
        $searchModel = new UserSearch();
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
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {
            $model->generatePassword($model->password);
            if ($model->save()){
                $model->file = UploadedFile::getInstance($model, 'image');
                $model->saveAvatarImage();
                $model->image = $model->file->baseName . '.' . $model->file->extension;
//                print_r($model->file);die;
//                $model->avatar = $model->saveAvatarImage();
                if ($model->save()){
                    return $this->redirect(['index', 'id' => $model->id]);
                }else {
                    return $this->debug($model->errors);
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
        $oldImage = $model->image;
        if ($model->load(Yii::$app->request->post())) {

            $model->generatePassword($model->password);

            $model->file = UploadedFile::getInstance($model,'image');
            if (!empty($model->file)){
                $model->image = $model->saveAvatarImage();
                $model->deleteOldImage($oldImage);
            }else{
                $model->image = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                return debug($model->errors);
            }
        }

        $userAvatar = StaticFunction::getImage('user',$model->id, $model->image);

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


    protected  function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    private function debug(array $errors)
    {
    }


}
