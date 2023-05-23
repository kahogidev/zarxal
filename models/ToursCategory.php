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
    public $translate_name;
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
//            [['images'], 'required'],
            [['status'], 'integer'],
            [['name', 'images'], 'string', 'max' => 255],
            [['translate_name'], 'safe'],
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
            'translate_name' => 'Nomi',
            'images' => 'Surati',
            'status' => 'Status',
        ];
    }

    public function getName($language = null)
    {
        $name = json_decode($this->name,true);

        if ($language) {
            if (isset($name[$language])) {
                return $name[$language];
            }else {
                return null;
            }
        }
        if (isset($name[Yii::$app->language])) {
            if ($name[Yii::$app->language]!='') {
                return $name[Yii::$app->language];
            }
            $a = null;
            foreach ($name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
