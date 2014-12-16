<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Додавання роботи';
?>
<div class="book">
    <div class="mytci-newview" id="101">
        <div id="102" style="width: 500px;" onmouseup="var H = document.getElementById('102').offsetHeight; document.getElementById('100').style.minHeight = H+100+'px'; document.getElementById('101').style.minHeight = H+100+'px';">
            <div id="addW">
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <h3>
                        Ваша робота вдало відправлена адміністратору!
                        Чекайте відповіді на електронну пошту.
                </h3>
                <?php else: ?>
                <h1>Додавання роботи:</h1>
                <?php $form = ActiveForm::begin(['id' => 'contact-form-add' , 'options' => ['enctype'=>'multipart/form-data']]); ?>
                <br />
                <?= $form->field($model, 'Sname') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'ID') ?>
                <div id="part">
                    <div style="padding: 10px; margin: 10px 0 10px 0; box-shadow: 0 1px 4px rgba(0, 0, 0, .2), -23px 0 15px -23px rgba(0, 0, 0, .2), 23px 0 20px -23px rgba(0, 0, 0, .2), 0 0 21px rgba(0, 0, 0, .08) inset;">
                        <?= $form->field($model, 'photoWork[]')->fileInput(['accept'=>'image/*', 'name'=>'fphoto'])?>
                        <?= $form->field($model, 'discription[]')->textArea(['rows' => 6, 'style'=>'max-width: 476px; width: 476px;']) ?>
                        <?= $form->field($model, 'price[]') ?>
                    </div>
                </div>
                <div id="addE"></div>
                <input type="button" class="btn btn-primary" id="addN" value="Додати ще одну роботу (1 з 10)" onmouseup="cloNeN()"/>
                <br /><br />
                <input type="submit" class="btn btn-primary" value="Готово" style="font-size: 25px;" />
                <?php ActiveForm::end(); ?>
                <?php endif; ?>
            </div>
        </div>             
    </div>
    <div class="decor" id="100">
        <div class="right-book" style="z-index: 55;"><a href="index.php?r=site%2Fcontact" class="button6" id="0" style="top: 35px;">Регістрація</a></div>
        <div class="right-book" style="z-index: 54;"></div>
        <div class="right-book" style="z-index: 53;"></div>
        <div class="right-book" style="z-index: 52;"></div>
        <div class="right-book" style="z-index: 51;"></div>
        <div class="right-book" style="z-index: 50;"></div>
        <div class="right-book" style="z-index: 49;"></div>
        <div class="right-book" style="z-index: 48;"></div>
        <div class="right-book" style="z-index: 47;"><a href="./" class="button6" style="top: 85px;">Головна</a></div>
        <div class="right-book-end" style="z-index: 1;"></div>
        <div class="last"></div>
    </div>
</div>

<script type="text/javascript">
    var H = document.getElementById('102').offsetHeight;
    document.getElementById('100').style.minHeight = H+100+"px";
    document.getElementById('101').style.minHeight = H+100+"px";
</script>
