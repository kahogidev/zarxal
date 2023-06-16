<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clients;

/**
 * ClientsSearch represents the model behind the search form of `app\models\Clients`.
 */
class ClientsSearch extends Clients
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_passport_number', 'client_phone', 'tour_id', 'sum_pay', 'sum_cash', 'sum_credit', 'created_at', 'updated_at', 'status'], 'integer'],
            [['client_lastname', 'client_firstname', 'client_passport_series'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Clients::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'client_passport_number' => $this->client_passport_number,
            'client_phone' => $this->client_phone,
            'tour_id' => $this->tour_id,
            'sum_pay' => $this->sum_pay,
            'sum_cash' => $this->sum_cash,
            'sum_credit' => $this->sum_credit,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'client_lastname', $this->client_lastname])
            ->andFilterWhere(['like', 'client_firstname', $this->client_firstname])
            ->andFilterWhere(['like', 'client_passport_series', $this->client_passport_series]);

        return $dataProvider;
    }
}
