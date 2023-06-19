<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "positions".
 *
 * @property int $id
 * @property string|null $position_name
 * @property int|null $status
 */
class Positions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'positions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['position_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_name' => 'Lavozim',
            'status' => 'Status',
        ];
    }
}
