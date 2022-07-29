<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserCurrentEducation;

/**
 * UserCurrentEducationSearch represents the model behind the search form of `common\models\UserCurrentEducation`.
 */
class UserCurrentEducationSearch extends UserCurrentEducation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'education_type_id', 'university_id', 'studying_field_id', 'studying_branch_id', 'user_id'], 'integer'],
            [['last_year_percentage', 'created_at'], 'safe'],
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
        $query = UserCurrentEducation::find();

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
            'education_type_id' => $this->education_type_id,
            'university_id' => $this->university_id,
            'studying_field_id' => $this->studying_field_id,
            'studying_branch_id' => $this->studying_branch_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'last_year_percentage', $this->last_year_percentage]);

        return $dataProvider;
    }
}
