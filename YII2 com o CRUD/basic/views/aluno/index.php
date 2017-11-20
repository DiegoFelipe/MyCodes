<?php

use yii\helpers\Html;
use yii\grid\GridView;




/* @var $this yii\web\View */
/* @var $searchModel app\models\AlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Aluno', ['create'], ['class' => 'btn btn-success']) ?>
        <?php echo Html::a('<i class="glyphicon glyphicon-print"></i> Imprimir', ['/export/export-pdf', 'title'=>'Relatório de Alunos', 'header'=>'Alunos', 'table'=>'aluno'], [
                'class'=>'btn btn-success', 
                'target'=>'_blank', 
                'data-toggle'=>'tooltip', 
                'title'=>'Gerar relatório PDF'
            ]);?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_aluno',
            'nome',
            'data_nascimento',
            'logradouro',
            'numero',
            // 'bairro',
            // 'cidade',
            // 'estado',
            // 'data_criacao',
            // 'cep',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    
   ?>
   <a class="btn btn-lg btn-success" href="?r=repdf/index">Download em PDF</a>
        

</div>




