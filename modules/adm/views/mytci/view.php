<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\adm\models\Mytci */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mytcis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mytci-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'sec_name',
            'last_name',
            'img_src',
            'adress:ntext',
            'tel_number',
        ],
    ]) ?>

</div>