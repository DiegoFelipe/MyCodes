<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_1')->textInput() ?>

    <?= $form->field($model, 'nota_2')->textInput() ?>

    <?= $form->field($model, 'nota_3')->textInput() ?>

    <?= $form->field($model, 'nota_4')->textInput() ?>

    <?= $form->field($model, 'fk_id_curso')->textInput() ?>

    <?= $form->field($model, 'fk_id_aluno')->textInput() ?>

    <?= $form->field($model, 'fk_id_professor')->textInput() ?>
    
     <?= $form->field($model, 'data_criacao')->textInput(['value' => date('Y-m-d H:i') ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
