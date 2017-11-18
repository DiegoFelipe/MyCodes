<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Professor;

/**
 * ProfessorSearch represents the model behind the search form about `app\models\Professor`.
 */
class ProfessorSearch extends Professor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_professor', 'fk_id_curso'], 'integer'],
            [['nome', 'data_nascimento', 'data_criacao'], 'safe'],
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
        $query = Professor::find();

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
            'id_professor' => $this->id_professor,
            'data_nascimento' => $this->data_nascimento,
            'data_criacao' => $this->data_criacao,
            'fk_id_curso' => $this->fk_id_curso,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
