<?php

namespace app\models;

use app\models\behaviors\ConvertBehaviors;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tourscategory".
 *
 * @property int $id
 * @property string $name
 * @property string $images
 * @property int|null $status
 */
class Tourscategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tourscategory';
    }

    public function behaviors()
    {
        return [
            'convertBehavior' => [
                'class' => ConvertBehaviors::class,
                'attributes' => ['name']
            ],

        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Kategoriya nomi',
            'images' => 'Rasm',
            'status' => 'Status',
        ];
    }


}
