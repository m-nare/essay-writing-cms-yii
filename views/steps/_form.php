<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Steps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="steps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'step_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
