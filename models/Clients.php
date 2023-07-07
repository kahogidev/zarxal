<?php

namespace app\models;

use common\behaviors\ConvertBehaviors;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $client_lastname
 * @property string $client_firstname
 * @property string $client_passport_series
 * @property int $client_passport_number
 * @property int $client_phone
 * @property int $tour_id
 * @property int $sum_pay
 * @property int $sum_cash
 * @property int $sum_credit
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $status
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
//            BlameableBehavior::class
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_live_address','client_passport_given_date','client_passport_given_by','client_passport_jshir_number','client_full_name','client_lastname', 'client_firstname', 'client_passport_series', 'client_passport_number', 'client_phone', 'tour_id', 'sum_pay', 'sum_cash', 'sum_credit' ], 'required'],
            [['client_passport_number', 'client_phone', 'tour_id', 'sum_pay', 'sum_cash', 'sum_credit', 'created_at', 'updated_at', 'status'], 'integer'],
            [['client_live_address','client_passport_given_date','client_passport_given_by','client_passport_jshir_number','client_full_name','client_lastname', 'client_firstname', 'client_passport_series'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_firstname' => 'Ism',
            'client_lastname' => 'Familiya',
            'client_full_name' => 'Sharifi',
            'client_passport_series' => 'Passport Seriya',
            'client_passport_number' => 'Passport Nomer',
            'client_passport_jshir_number' => 'Passport JSHSHIR Nomer',
            'client_passport_given_by' => 'Passport berilgan joy',
            'client_passport_given_date' => 'Passport berilgan vaqt',
            'client_live_address' => 'Yashash manzil',
            'client_phone' => 'Telefon raqam',
            'tour_id' => 'Tour ID',
            'sum_pay' => 'Sum Pay',
            'sum_cash' => 'Sum Cash',
            'sum_credit' => 'Sum Credit',
            'created_at' => 'Shartnoma vaqti',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
