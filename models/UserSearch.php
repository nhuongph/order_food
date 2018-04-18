<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserModels;

/**
 * UserSearch represents the model behind the search form of `app\models\UserModels`.
 */
class UserSearch extends UserModels
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role_id'], 'integer'],
            [['username', 'password', 'fullname', 'email', 'phone', 'address', 'gender', 'date_of_brith', 'date_create', 'active'], 'safe'],
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
        $query = UserModels::find();

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
            'date_of_brith' => $this->date_of_brith,
            'role_id' => $this->role_id,
            'date_create' => $this->date_create,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'active', $this->active]);

        return $dataProvider;
    }
}
