<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RlfuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rlfusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rlfuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rlfuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'Name',
            'Email:email',
            'username',
            'password',
            // 'authkey',
            // 'date_joined',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
