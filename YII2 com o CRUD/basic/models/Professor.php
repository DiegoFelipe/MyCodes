<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property string $id_professor
 * @property string $nome
 * @property string $data_nascimento
 * @property string $data_criacao
 * @property integer $fk_id_curso
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_nascimento', 'data_criacao'], 'safe'],
            [['fk_id_curso'], 'integer'],
            [['nome'], 'string', 'max' => 30],
            [['data_nascimento'], 'date', 'format' => 'yyyy-MM-dd','message' => 'Insira a data no formato ANO-MES-DIA, EX: 1991-08-16'],
            [['data_nascimento','fk_id_curso','nome','data_nascimento'],'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_professor' => 'Id Professor',
            'nome' => 'Nome',
            'data_nascimento' => 'Data Nascimento',
            'data_criacao' => 'Data Criacao',
            'fk_id_curso' => 'ID do Curso',
        ];
    }
}
