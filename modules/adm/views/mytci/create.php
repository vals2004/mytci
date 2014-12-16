<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\adm\models\Mytci */

$this->title = 'Create Mytci';
$this->params['breadcrumbs'][] = ['label' => 'Mytcis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mytci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>