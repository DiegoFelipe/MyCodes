<?php

namespace app\controllers;

use Yii;
use app\models\CadastroModel;
use yii\base\Controller;
use app\models\Pessoas;
use app\models\Aluno;
use app\models\Professor;
use yii\data\Pagination;

class ExerciciosController extends  Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();

        if($cadastroModel->load($post) && $cadastroModel->validate()){
            return $this->render('formularioconfirmacao',[
                'model' => $cadastroModel
            ]);
        } else {

            return $this->render('formulario', [
                'model' => $cadastroModel
            ]);

        }

    }
    
    public function actionAluno() {
        $aluno = Aluno::find()->orderBy('nome')->all();
        echo "<pre>";
        print_r($aluno);
    }
    
    public function actionProfessor() {
        $professor = Professor::findOne(1);
        echo $professor->nome;
        
        $query = Professor::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count()
        ]);
        
        $professor2 = $query->orderBy('nome')
                            ->offset($pagination->offset)
                            ->limit($pagination->limit)
                            ->all();
        return $this->render('professor', [
            'professor' => $professor2,
            'pagination' => $pagination
        ]);
        
    }
    
}

?>