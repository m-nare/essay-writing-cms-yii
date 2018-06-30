<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Steps;

/**
 * StepsSearch represents the model behind the search form about `app\models\Steps`.
 */
class StepsSearch extends Steps
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['step_id'], 'integer'],
            [['step_header', 'video_url', 'description'], 'safe'],
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
        $query = Steps::find();

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
            'step_id' => $this->step_id,
        ]);

        $query->andFilterWhere(['like', 'step_header', $this->step_header])
            ->andFilterWhere(['like', 'video_url', $this->video_url])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
