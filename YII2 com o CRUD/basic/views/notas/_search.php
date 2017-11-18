<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_notas') ?>

    <?= $form->field($model, 'nota_1') ?>

    <?= $form->field($model, 'nota_2') ?>

    <?= $form->field($model, 'nota_3') ?>

    <?= $form->field($model, 'nota_4') ?>

    <?php // echo $form->field($model, 'data_criacao') ?>

    <?php // echo $form->field($model, 'fk_id_curso') ?>

    <?php // echo $form->field($model, 'fk_id_aluno') ?>

    <?php // echo $form->field($model, 'fk_id_professor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
