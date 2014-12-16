<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mytcis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mytci-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mytci', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'sec_name',
            'last_name',
            'img_src',
            // 'adress:ntext',
            // 'tel_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>