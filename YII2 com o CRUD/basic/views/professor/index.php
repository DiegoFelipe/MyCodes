<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfessorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Professores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Professor', ['create'], ['class' => 'btn btn-success']) ?>
        <?php echo Html::a('<i class="glyphicon glyphicon-print"></i> Imprimir em PDF', ['/export/export-pdf', 'title'=>'Relatório de Professores', 'header'=>'Professor', 'table'=>'professor'], [
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

            'id_professor',
            'nome',
            'data_nascimento',
            'data_criacao',
            'fk_id_curso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
