<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Sample;

/**
 * SampleSearch represents the model behind the search form of `frontend\models\Sample`.
 */
class SampleSearch extends Sample
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'titlr', 'imagelink', 'description'], 'integer'],
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
        $query = Sample::find();

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
            'titlr' => $this->titlr,
            'imagelink' => $this->imagelink,
            'description' => $this->description,
        ]);

        return $dataProvider;
    }
}
