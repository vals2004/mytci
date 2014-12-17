<?php

namespace app\controllers;

use Yii;
use app\models\Mytci;
use app\models\Type;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class MytciController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex($type)
    {
        $argument;
        switch($type){
			 case 0:
             $argument = 'Vyshivka';
             break;
             case 1:
             $argument = 'Biser';
             break;
             case 2:
             $argument = 'Porobky';
             break;
             case 3:
             $argument = 'Keramika';
             break;
             case 4:
             $argument = 'Rizba';
             break;
             case 5:
             $argument = 'Kuvannia';
             break;
             case 6:
             $argument = 'Prykrasy';
             break;
             case 7:
             $argument = 'Ikony';
             break; 
        }
        $sql = 'SELECT `Mytec` FROM `Type` WHERE `'.$argument.'` is true';
            
        $dataProvider = new ActiveDataProvider([
            'query' => Mytci::find()->where(['id'=> Type::findBySql($sql)->column()]),
            'pagination' => [
            'pageSize' => (int)(($_COOKIE["windH"]-173)/84)>0?(int)(($_COOKIE["windH"]-173)/84):6],
]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Mytci::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
