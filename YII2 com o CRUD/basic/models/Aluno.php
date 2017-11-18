<?php

namespace app\models;



use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property string $id_aluno
 * @property string $nome
 * @property string $data_nascimento
 * @property string $logradouro
 * @property integer $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $data_criacao
 * @property string $cep
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_nascimento', 'data_criacao'], 'safe'],
            [['numero'], 'integer'],
            [['nome', 'bairro', 'cidade'], 'string', 'max' => 30],
            [['logradouro'], 'string', 'max' => 50],
            [['estado'], 'string', 'max' => 20],
            [['cep'], 'string', 'max' => 9],
            [['data_nascimento'], 'date', 'format' => 'yyyy-MM-dd','message' => 'Insira a data no formato ANO-MES-DIA, EX: 1991-08-16'],
            
            [['data_nascimento','numero','nome','bairro','cidade','logradouro','estado','cep'],'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_aluno' => 'Id Aluno',
            'nome' => 'Nome',
            'data_nascimento' => 'Data Nascimento',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'data_criacao' => 'Data Criacao',
            'cep' => 'Cep',
        ];
    }
}
