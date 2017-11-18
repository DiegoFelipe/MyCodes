<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Notas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_notas',
            'nota_1',
            'nota_2',
            'nota_3',
            'nota_4',
            // 'data_criacao',
            // 'fk_id_curso',
            // 'fk_id_aluno',
            // 'fk_id_professor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
