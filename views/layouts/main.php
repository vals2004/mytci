<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script>document.cookie = "windH="+document.documentElement.clientHeight;</script>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

            <?= $content ?>
<?php $this->endBody() ?>
</body>
<script>
var limit = 1;
function cloNeN(){
    if(limit<10)
    {
        var objecto = $('#part').clone();
        objecto.find("input").val('');
        objecto.appendTo('#addE');
        limit++;
        $('#addN').val('Додати ще одну роботу ('+limit+' з 10)');
    }
    else alert("Ви можете відіслати одразу не більше 10 робіт. Для додавання більшої кількості повторіть процедуру");
}
document.getElementById(<?php echo $_GET['type']?>).style.background = '#795548';
</script>
</html>
<?php $this->endPage() ?>
