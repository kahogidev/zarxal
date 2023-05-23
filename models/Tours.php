<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property int $category_id
 * @property string|null $body_uz
 * @property string|null $body_ru
 * @property string|null $body_en
 * @property string $created_date
 * @property string $updated_date
 * @property int|null $seen_count
 * @property string|null $images
 * @property int|null $price
 * @property string|null $period
 * @property int|null $status
 */
class Tours extends \yii\db\ActiveRecord
{
    public $translate_message;
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
            [['title_uz', 'title_ru', 'title_en', 'category_id', 'created_date', 'updated_date'], 'required'],
            [['category_id', 'seen_count', 'price', 'status'], 'integer'],
            [['body_uz', 'body_ru', 'body_en'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'images', 'period'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'description_uz' => 'Description Uz',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'category_id' => 'Category ID',
            'body_uz' => 'Body Uz',
            'body_ru' => 'Body Ru',
            'body_en' => 'Body En',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'seen_count' => 'Seen Count',
            'images' => 'Images',
            'price' => 'Price',
            'period' => 'Period',
            'status' => 'Status',
        ];
    }
}
