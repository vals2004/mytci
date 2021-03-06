<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Vyshivka',
            'Biser',
            'Porobky',
            'Keramika',
            'Rizba',
            'Kuvannia',
            'Prykrasy',
            'Ikony',
            'Mytec',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
