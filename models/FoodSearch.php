<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FoodModels;

/**
 * FoodSearch represents the model behind the search form of `app\models\FoodModels`.
 */
class FoodSearch extends FoodModels
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'shop_id', 'id_cat'], 'integer'],
            [['name_food', 'image', 'date_create', 'address'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = FoodModels::find();

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
            'price' => $this->price,
            'shop_id' => $this->shop_id,
            'id_cat' => $this->id_cat,
        ]);

        $query->andFilterWhere(['like', 'name_food', $this->name_food])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'date_create', $this->date_create])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
