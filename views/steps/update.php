<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Steps */

$this->title = 'Update Steps: ' . $model->step_id;
$this->params['breadcrumbs'][] = ['label' => 'Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->step_id, 'url' => ['view', 'id' => $model->step_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="steps-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
