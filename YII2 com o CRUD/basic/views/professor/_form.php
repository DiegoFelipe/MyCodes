<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\BaseArrayHelper;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Professor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="professor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimento')->textInput() ?>
    
    <?php
    $models = \app\models\Curso::find('id_curso','nome')->asArray()->all();
    $map = ArrayHelper::map($models, 'id_curso', 'nome'); 
    ?>

    <?= $form->field($model, 'fk_id_curso')->dropDownList($map) ?>
    
     <?= $form->field($model, 'data_criacao')->textInput(['value' => date('Y-m-d H:i') ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
