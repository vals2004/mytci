<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\adm\models\Type */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vyshivka')->textInput() ?>

    <?= $form->field($model, 'Biser')->textInput() ?>

    <?= $form->field($model, 'Porobky')->textInput() ?>

    <?= $form->field($model, 'Keramika')->textInput() ?>

    <?= $form->field($model, 'Rizba')->textInput() ?>

    <?= $form->field($model, 'Kuvannia')->textInput() ?>

    <?= $form->field($model, 'Prykrasy')->textInput() ?>

    <?= $form->field($model, 'Ikony')->textInput() ?>

    <?= $form->field($model, 'Mytec')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
