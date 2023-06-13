<?php

namespace app\models;

use Yii;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'created_date', 'updated_date'], 'required'],
            [['category_id', 'price', 'status'], 'integer'],
            [['body'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
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
            'title' => 'Title',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'body' => 'Body',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'images' => 'Images',
            'price' => 'Price',
            'period' => 'Period',
            'status' => 'Status',
        ];
    }
}
