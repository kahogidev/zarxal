<?php

namespace app\models;

use app\models\behaviors\ConvertBehaviors;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $comment
 * @property string $images
 * @property int|null $status
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    public function behaviors()
    {
        return [
            'convertBehavior' => [
                'class' => ConvertBehaviors::class,
                'attributes' => ['comment']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'safe'],
            [['name', 'email'], 'safe'],

            [['status'], 'integer'],
            [['name', 'email', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'comment' => 'Comment',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }

}
