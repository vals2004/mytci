<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>

<div class="book">
<div class="mytci-newview">
<div class="GrView">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'description:html' => 
            [
                'label'=>"<img src=\"../img/WC/".$model->img_src."\" height=\"150\">",
                'value' => 'Опис: '.$model->description,
            ],
            'price',
        ],
    ]) ?>
</div>
</div>
    <div class="right-book" style="z-index: 55;"><a href="index.php?r=mytci%2Findex&type=0" class="button6" id="0" style="top: 35px;">Вишивка</a></div>
    <div class="right-book" style="z-index: 54;"><a href="index.php?r=mytci%2Findex&type=1" class="button6" id="1" style="top: 85px;">Бісер</a></div>
    <div class="right-book" style="z-index: 53;"><a href="index.php?r=mytci%2Findex&type=2" class="button6" id="2" style="top: 135px;">Поробки</a></div>
    <div class="right-book" style="z-index: 52;"><a href="index.php?r=mytci%2Findex&type=3" class="button6" id="3" style="top: 185px;">Кераміка</a></div>
    <div class="right-book" style="z-index: 51;"><a href="index.php?r=mytci%2Findex&type=4" class="button6" id="4" style="top: 235px; min-width: 184px;">Різьба по дереву</a></div>
    <div class="right-book" style="z-index: 50;"><a href="index.php?r=mytci%2Findex&type=5" class="button6" id="5" style="top: 285px;">Кування</a></div>
    <div class="right-book" style="z-index: 49;"><a href="index.php?r=mytci%2Findex&type=6" class="button6" id="6" style="top: 335px;">Прикраси</a></div>
    <div class="right-book" style="z-index: 48;"><a href="index.php?r=mytci%2Findex&type=7" class="button6" id="7" style="top: 385px;">Ікони</a></div>
    <div class="right-book" style="z-index: 47;"><a href="./" class="button6" style="top: 435px;">Головна</a></div>
    <div class="right-book-end" style="z-index: 1;"></div>
    <div class="last"></div>
</div>
<script>document.getElementById(<?php echo $_GET['type']?>).style.background = '#795548';</script>