<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rlfuser */

$this->title = 'Create Rlfuser';
$this->params['breadcrumbs'][] = ['label' => 'Rlfusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rlfuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
