<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

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
    
    <?php
    $models = \app\models\Curso::find('id_curso','nome')->asArray()->all();
    $map = ArrayHelper::map($models, 'id_curso', 'nome'); 
    ?>

    <?= $form->field($model, 'fk_id_curso')->dropDownList($map) ?>
    
    <?php
    $models = \app\models\Aluno::find('id_aluno','nome')->asArray()->all();
    $map = ArrayHelper::map($models, 'id_aluno', 'nome'); 
    ?>

    <?= $form->field($model, 'fk_id_aluno')->dropDownList($map) ?>
    
    <?php
    $models = \app\models\Professor::find('id_professor','nome')->asArray()->all();
    $map = ArrayHelper::map($models, 'id_professor', 'nome'); 
    ?>

    <?= $form->field($model, 'fk_id_professor')->dropDownList($map) ?>
    
     <?= $form->field($model, 'data_criacao')->textInput(['value' => date('Y-m-d H:i') ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
