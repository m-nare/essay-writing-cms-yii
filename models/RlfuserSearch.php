<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rlfuser;

/**
 * RlfuserSearch represents the model behind the search form about `app\models\Rlfuser`.
 */
class RlfuserSearch extends Rlfuser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['Name', 'Email', 'username', 'password', 'authkey', 'date_joined'], 'safe'],
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
        $query = Rlfuser::find();

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
            'user_id' => $this->user_id,
            'date_joined' => $this->date_joined,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'authkey', $this->authkey]);

        return $dataProvider;
    }
}
