<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DonHangModels;

/**
 * DonHangSearch represents the model behind the search form of `app\models\DonHangModels`.
 */
class DonHangSearch extends DonHangModels
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sodienthoai'], 'integer'],
            [['tenkhachhang', 'diachi'], 'safe'],
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
        $query = DonHangModels::find();

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
            'sodienthoai' => $this->sodienthoai,
        ]);

        $query->andFilterWhere(['like', 'tenkhachhang', $this->tenkhachhang])
            ->andFilterWhere(['like', 'diachi', $this->diachi]);

        return $dataProvider;
    }
}
