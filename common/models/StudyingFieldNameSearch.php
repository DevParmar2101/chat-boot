<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\StudyingFieldName;

/**
 * StudyingFieldNameSearch represents the model behind the search form of `common\models\StudyingFieldName`.
 */
class StudyingFieldNameSearch extends StudyingFieldName
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'university_id', 'user_id', 'status'], 'integer'],
            [['field_name', 'created_at'], 'safe'],
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
        $query = StudyingFieldName::find();

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
            'university_id' => $this->university_id,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'field_name', $this->field_name]);

        return $dataProvider;
    }
}
