<?php

namespace app\models;





use app\models\behaviors\ConvertBehaviors;
use app\models\behaviors\DateTimeBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property string $country
 * @property string $name
 * @property string $images
 * @property int|null $status
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }
    public function behaviors()
    {
        return [
            'convertBehavior' => [
                'class' => ConvertBehaviors::class,
                'attributes' => ['country', 'name']
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name'], 'required'],
            [['status'], 'integer'],
            [['country', 'name', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Mamlakat',
            'name' => 'Nomi',
            'images' => 'Rasm',
            'status' => 'Status',
        ];
    }
}
