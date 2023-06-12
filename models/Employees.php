<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int|null $phone
 * @property int $telegram
 * @property int $position_id
 * @property string|null $mahalla_id
 * @property int|null $status
 * @property int $creator
 * @property string $image
 * @property string $password
 * @property string $user_name
 */
class Employees extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'telegram', 'position_id', 'creator', 'image', 'password', 'user_name'], 'required'],
            [['phone', 'telegram', 'position_id', 'status', 'creator'], 'integer'],
            [['first_name', 'last_name', 'mahalla_id', 'image', 'password', 'user_name'], 'string', 'max' => 255],
            [['user_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
            'user_name' => 'User Name',
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
        foreach (self::find()->asArray()->all()  as $user) {
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
        return $this->password === $password;
    }
}
