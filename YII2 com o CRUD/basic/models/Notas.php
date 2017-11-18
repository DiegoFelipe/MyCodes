<?php

namespace app\models;
use app\models;

use Yii;

/**
 * This is the model class for table "notas".
 *
 * @property string $id_notas
 * @property integer $nota_1
 * @property integer $nota_2
 * @property integer $nota_3
 * @property integer $nota_4
 * @property string $data_criacao
 * @property integer $fk_id_curso
 * @property integer $fk_id_aluno
 * @property integer $fk_id_professor
 */
class Notas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notas';
    }

    /**
     * @inheritdoc
     */
    
    public function rules()
    {
        $timenow = new \yii\db\Expression('NOW()');
        return [
            [['nota_1', 'nota_2', 'nota_3', 'nota_4', 'fk_id_curso', 'fk_id_aluno', 'fk_id_professor'], 'integer'],
            [['nota_1', 'nota_2', 'nota_3', 'nota_4', 'fk_id_curso', 'fk_id_aluno', 'fk_id_professor'], 'required'],
            [['data_criacao'], 'safe'],
       
        
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_notas' => 'Id Notas',
            'nota_1' => 'Nota 1',
            'nota_2' => 'Nota 2',
            'nota_3' => 'Nota 3',
            'nota_4' => 'Nota 4',
            'data_criacao' => 'Data Criacao',
            'fk_id_curso' => 'ID do Curso',
            'fk_id_aluno' => 'ID do Aluno',
            'fk_id_professor' => 'ID do Professor',
        ];
    }
}
