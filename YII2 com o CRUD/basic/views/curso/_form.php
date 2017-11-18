<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'data_criacao')->textInput(['value' => date('Y-m-d H:i') ]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
