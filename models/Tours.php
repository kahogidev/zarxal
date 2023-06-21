<?php

namespace app\models;

use app\models\behaviors\ConvertBehaviors;
use app\models\behaviors\DateTimeBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tours".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $category_id
 * @property string|null $body
 * @property string $created_date
 * @property string $updated_date
 * @property string|null $images
 * @property int|null $price
 * @property string|null $period
 * @property int|null $status
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours';
    }

    public function behaviors()
    {
        return [

               'convertBehavior' => [
                'class' => ConvertBehaviors::class,
                'attributes' => ['title', 'description','body','period']
                ],


                TimestampBehavior::class,
                'date_publish_date' => [
                    'class' => DateTimeBehavior::class,
                    'attribute' => 'created_at', //атрибут модели, который будем менять
                    'format' => 'dd.MM.yyyy HH:mm',   //формат вывода даты для пользователя
//                'default' => 'today'
                ],


        ];


    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', ], 'required'],
            [['category_id', 'price', 'status'], 'integer'],
            [['body'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'description', 'images', 'period'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Nomi',
            'description' => "Ta'rif",
            'category_id' => 'Category ID',
            'body' => 'Body',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
            'images' => 'Rasm',
            'price' => 'Narx',
            'period' => 'Muddat',
            'status' => 'Status',
        ];
    }
}
