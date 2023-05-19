<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment', 'images'], 'required'],
            [['comment'], 'string'],
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
