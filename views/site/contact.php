<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Регістрація';
?>

<div class="book">
    <div class="mytci-newview" id="101">
        <div id="102" style="width: 500px;" onmouseup="var H = document.getElementById('102').offsetHeight; document.getElementById('100').style.minHeight = H+100+'px'; document.getElementById('101').style.minHeight = H+100+'px';">
            <div id="reg">
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <h3 style="text-align: center;">
                    Регістрація пройшла успішно!
                    Лист з Вашою контактною інформацією відправлен нашому адміністратору.
                    Чекайте відповіді на вказану Вами електронну пошту з подальшими інструкціями.
            </h3>
            <?php else: ?>
            <h1>Регістрація:</h1>
                <?php $form = ActiveForm::begin(['id' => 'contact-form-reg' , 'options' => ['enctype'=>'multipart/form-data']]);?>
                    <br />     
                    <?= $form->field($model, 'Fname') ?>
                    <?= $form->field($model, 'Sname') ?>
                    <?= $form->field($model, 'Lname') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'province') ?>
                    <?= $form->field($model, 'area') ?>
                    <?= $form->field($model, 'city') ?>
                    <?= $form->field($model, 'phone') ?>
                    <?= $form->field($model, 'art[]')->checkboxList([
                    'вишивка'=>'Вишивка',
                    'бісер'=>'Бісер',
                    'поробки'=>'Поробки',
                    'кераміка'=>'Кераміка',
                    'різьба'=>'Різьба по дереву',
                    'кування'=>'Кування',
                    'прикраси'=>'Прикраси',
                    'ікони'=>'Ікони']) ?>
                        
                    <?= $form->field($model, 'about')->textArea(['rows' => 6, 'style'=>'max-width: 500px; width: 500px;']) ?>
                    <?= $form->field($model, 'photo')->fileInput(['accept'=>'image/*', 'name'=>'fphoto'])?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <?= Html::submitButton('Відправити', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
               <?php ActiveForm::end();?>
               <?php endif; ?>
            </div>
        </div>             
    </div>
    <div class="decor" id="100">
        <div class="right-book" style="z-index: 55;"><a href="index.php?r=site%2Faddwork" class="button6" id="0" style="top: 35px;">Додати нову роботу</a></div>
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
