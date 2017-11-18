<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notas;

/**
 * NotaSearch represents the model behind the search form about `app\models\Notas`.
 */
class NotaSearch extends Notas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_notas', 'nota_1', 'nota_2', 'nota_3', 'nota_4', 'fk_id_curso', 'fk_id_aluno', 'fk_id_professor'], 'integer'],
            [['data_criacao'], 'safe'],
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
        $query = Notas::find();

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
            'id_notas' => $this->id_notas,
            'nota_1' => $this->nota_1,
            'nota_2' => $this->nota_2,
            'nota_3' => $this->nota_3,
            'nota_4' => $this->nota_4,
            'data_criacao' => $this->data_criacao,
            'fk_id_curso' => $this->fk_id_curso,
            'fk_id_aluno' => $this->fk_id_aluno,
            'fk_id_professor' => $this->fk_id_professor,
        ]);

        return $dataProvider;
    }
}
