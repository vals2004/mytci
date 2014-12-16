<?php
/* @var $this yii\web\View */
use yii\bootstrap\Button;

$this->title = 'Роботи митців України';
?>
<div class="book">  
    <div class="left-book"></div>
    <div class="left-book-stripes"></div>
    <div class="center-book"><div class="book-map">
    
    <?php echo Button::widget([
    'label' => '',
    'options' => [
    'class' => 'buta', 
    'data-toggle'=>'popover', 
    'data-content'=>'На територіі харківської області: 15 митців',
    'data-placement'=>'top',
    'style'=>'margin: 193px 0px 0px 658px;'],
    ]);?>
    
    <a class="button7" href="index.php?r=site%2Fcontact">Я митець</a>
    
    <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" 
    data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki" 
    data-yashareTheme="counter" 
    data-yashareTitle ="Титул"
    data-yashareDescription="Опис"
    data-yashareImage="http://cs618828.vk.me/v618828140/1900f/dimsXQ4jPC0.jpg"  style="bottom: -22px; position: absolute;"></div>
    </div>
    
</div>
    <div class="center-right-book"></div>
    <div class="right-book" style="z-index: 55;"><a href="index.php?r=work%2Findex&type=0" class="button6" id="0" style="top: 35px;">Роботи</a></div>
    <div class="right-book" style="z-index: 54;"></div>
    <div class="right-book" style="z-index: 53;"></div>
    <div class="right-book" style="z-index: 52;"></div>
    <div class="right-book" style="z-index: 51;"><a href="index.php?r=mytci%2Findex&type=0" class="button6" id="1" style="top: 85px;">Митці</a></div>
    <div class="right-book" style="z-index: 50;"></div>
    <div class="right-book" style="z-index: 49;"></div>
    <div class="right-book" style="z-index: 48;"></div>
    <div class="right-book" style="z-index: 47;"><a href="./" class="button6" style="top: 135px; background: #795548;">Головна</a></div>
    <div class="right-book-end" style="z-index: 1;"></div>
    <div class="last"></div>
</div>

<?php
$js = <<< 'SCRIPT'
$(function () { 
    $("[data-toggle='popover']").popover(); 
});
SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);
?>




