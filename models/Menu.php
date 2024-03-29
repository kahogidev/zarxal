<?php

namespace app\models;

use app\models\behaviors\ConvertBehaviors;
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
            [['link', 'position', 'order_by'], 'required'],
            [['position', 'order_by', 'parent', 'status'], 'integer'],
            [['name'],'safe'],
            [['link'], 'string', 'max' => 255],
        ];
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
