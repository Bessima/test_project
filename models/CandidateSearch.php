<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidate;

/**
 * CandidateSearch represents the model behind the search form of `app\models\Candidate`.
 */
class CandidateSearch extends Candidate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                [
                    'id',
                    'age',
                    'educationLevel',
                    'educationSpecialty',
                    'educationEdditional',
                    'experienceProjectWork',
                    'experienceManager',
                    'housingCondition',
                    'iq'
                ], 'integer'],
            [['name'], 'safe'],
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
        $query = Candidate::find();

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
            'age' => $this->age,
            'educationLevel' => $this->educationLevel,
            'educationSpecialty' => $this->educationSpecialty,
            'educationEdditional' => $this->educationEdditional,
            'experienceProjectWork' => $this->experienceProjectWork,
            'experienceManager' => $this->experienceManager,
            'housingCondition' => $this->housingCondition,
            'iq' => $this->iq,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
