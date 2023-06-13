<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\helpers\FileHelper;
use yii\web\IdentityInterface;


class User extends ActiveRecord implements IdentityInterface
{

    public $file;

    public static function tableName()
    {
        return 'user';
    }


    public function rules()
    {
        return [
            [['first_name', 'last_name', 'telegram', 'position_id', 'creator', 'image', 'password', 'username'], 'required'],
            [['phone', 'telegram', 'position_id', 'status', 'creator'], 'integer'],
            [['first_name', 'last_name', 'mahalla_id', 'image', 'password', 'username'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'telegram' => 'Telegram',
            'position_id' => 'Position ID',
            'mahalla_id' => 'Mahalla ID',
            'status' => 'Status',
            'creator' => 'Creator',
            'image' => 'Image',
            'password' => 'Password',
            'username' => 'User Name',
        ];
    }


    public static function findIdentity($id)
    {

        return !empty(self::findOne($id)) ? new static(self::findOne($id)) : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

        foreach (self::find()->asArray()->all() as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
    public static function findByUsername($username)
    {
        foreach (self::find()->asArray()->all() as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password,$this->password);
    }

    public function generatePassword($password)
    {
        return $this->password =Yii::$app->security->generatePasswordHash($password);
    }

    public function saveAvatarImage()
    {
        if ($this->validate()) {
            $catalog = "uploads/user/{$this->id}/";
//            echo $catalog; die;
            FileHelper::createDirectory($catalog);
            $this->file->saveAs($catalog . $this->file->baseName . '.' . $this->file->extension);

            return $this->file->baseName . '.' . $this->file->extension;
        } else {
            return false;
        }
    }

    public function getAvatarImage()
    {
        return "/uploads/user/{$this->id}/$this->avatar";
    }

    public function deleteOldImage($image){
        $file = "uploads/user/{$this->id}/$image";
        if (is_file($file)) {
            unlink($file);
        }
    }

}