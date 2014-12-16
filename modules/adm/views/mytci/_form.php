<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\adm\models\Mytci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mytci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'sec_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'img_src')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tel_number')->textInput(['maxlength' => 32]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>