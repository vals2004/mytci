<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Work;
use yii\data\ActiveDataProvider;
?>
<div class="book-1">
<div class="mytci-newview">
<div class="GrView">
   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'description:html' => 
            [
                'label'=>"<img src=\"../img/MC/".$model->img_src."\" height=\"150\">",
                'value' => '',
            ],
            'first_name',
            'sec_name',
            'last_name',
            'adress',
            'tel_number',
        ],
    ]) ?>
</div>    
    <?= GridView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query' => Work::find()->where([
			'ownerID'=>$model->id
		 ]),
            'pagination' => array(
            'pageSize' => 5),
        ]),
        'columns' => [
            [
                'attribute'=>'',
                'format' => 'raw',
                'value' => function($data) { return Html::a(Html::img('../img/WC/'.$data->img_src, ['width'=>'50',]),null,['href' =>'index.php?r=work%2Fview&id='.$data->id.'&type='.$_GET['type'],'target'=>'_blank',]); },
            ],
            'price',
            [
                    'attribute'=>'description',
                    'format' => 'raw',
                    'value' => function($data) { return mb_substr($data->description,0,80,"utf-8").'...'; },
            ],
        ],
    ]); ?>
    
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