<?php

namespace app\models;

use Yii;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_lastname', 'client_firstname', 'client_passport_series', 'client_passport_number', 'client_phone', 'tour_id', 'sum_pay', 'sum_cash', 'sum_credit', 'created_at', 'updated_at'], 'required'],
            [['client_passport_number', 'client_phone', 'tour_id', 'sum_pay', 'sum_cash', 'sum_credit', 'created_at', 'updated_at', 'status'], 'integer'],
            [['client_lastname', 'client_firstname', 'client_passport_series'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_lastname' => 'Client Lastname',
            'client_firstname' => 'Client Firstname',
            'client_passport_series' => 'Client Passport Series',
            'client_passport_number' => 'Client Passport Number',
            'client_phone' => 'Client Phone',
            'tour_id' => 'Tour ID',
            'sum_pay' => 'Sum Pay',
            'sum_cash' => 'Sum Cash',
            'sum_credit' => 'Sum Credit',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
