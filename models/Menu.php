<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property int $position
 * @property int $order_by
 * @property int|null $parent
 * @property int|null $status
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'link', 'position', 'order_by'], 'required'],
            [['position', 'order_by', 'parent', 'status'], 'integer'],
            [['name', 'link'], 'string', 'max' => 255],
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
            'position' => 'Position',
            'order_by' => 'Order By',
            'parent' => 'Parent',
            'status' => 'Status',
        ];
    }
}
