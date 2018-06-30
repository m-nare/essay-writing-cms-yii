<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rlfuser */

$this->title = 'Update Rlfuser: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Rlfusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rlfuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
