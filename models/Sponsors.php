<?php

namespace app\models;

use app\models\behaviors\ConvertBehaviors;
use Yii;

/**
 * This is the model class for table "sponsors".
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string $images
 * @property int|null $status
 */
class Sponsors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sponsors';
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

            [['name'], 'safe'],
            [['status'], 'integer'],
            [['link', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'link' => 'Link',
            'images' => 'Rasm',
            'status' => 'Status',
        ];
    }
}
