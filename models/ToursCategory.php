<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tours_category".
 *
 * @property int $id
 * @property string $name
 * @property string $images
 * @property int|null $status
 */
class ToursCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'images'], 'required'],
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
            'name' => 'Name',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
