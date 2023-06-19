<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahalla".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $status
 */
class Mahalla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahalla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Mahalla nomi',
            'status' => 'Status',
        ];
    }
}
