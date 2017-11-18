<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property string $id_curso
 * @property string $nome
 * @property string $data_criacao
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_criacao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['nome'],'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_curso' => 'Id Curso',
            'nome' => 'Nome',
            'data_criacao' => 'Data Criacao',
        ];
    }
}
