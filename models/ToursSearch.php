<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tours;

/**
 * ToursSearch represents the model behind the search form of `app\models\Tours`.
 */
class ToursSearch extends Tours
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'seen_count', 'price', 'status'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'body_uz', 'body_ru', 'body_en', 'created_date', 'updated_date', 'images', 'period'], 'safe'],
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
        $query = Tours::find();

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
            'category_id' => $this->category_id,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
            'seen_count' => $this->seen_count,
            'price' => $this->price,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'description_uz', $this->description_uz])
            ->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'body_uz', $this->body_uz])
            ->andFilterWhere(['like', 'body_ru', $this->body_ru])
            ->andFilterWhere(['like', 'body_en', $this->body_en])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'period', $this->period]);

        return $dataProvider;
    }
}
