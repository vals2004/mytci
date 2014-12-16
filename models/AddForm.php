<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AddForm extends Model
{
    public $ID;
    public $photoWork;
    public $discription;
    public $price;
    
    public $Sname;
    public $email;
    public $verifyCode;

    public function rules()
    {
        return [
            [['Sname', 'email', 'ID', 'photoWork', 'discription'], 'required'],
            ['discription', 'string', 'max' => 500],
            ['price', 'string', 'max' => 25],
            ['photoWork', 'safe'],
            ['photoWork', 'image',  'notImage'=>'Завантаживати можна тільни зображення з розширеннями: jpg/png'],
            ['photoWork', 'file', 'maxSize'=>'1000000'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Введіть у поле вказанний нижче код:',
            'Sname' => 'Прізвище:',
            'email' => 'Електронна пошта:',
            
            'photoWork' => 'Фотографія роботи:',
            'discription' => 'Опис:',
            'price' => 'Ціна (нічого не пишіть, якщо виставляєте роботу на демонстрацію):',
        ];
    }

    public function contact($email)
    {   
        if ($this->validate() || true) {
                $info = explode('.',$_FILES['fphoto']['name']); 
                $uploaddir = './tmp/';
                $_FILES['fphoto']['name'] = microtime().$_FILES['fphoto']['size'].'.'.$info[1];
                $uploadfile = $uploaddir . basename($_FILES['fphoto']['name']);
                move_uploaded_file($_FILES['fphoto']['tmp_name'], $uploadfile);
                
                Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom([$this->email =>'Нова робота'])
                    ->setSubject($this->ID.".".$this->Sname)
                    ->setTextBody(
                    "Прізвище: ".$this->Sname.
                    "\nПошта: ".$this->email.
                    "\nID: ".$this->ID.
                    "\nОпис: ".$this->discription[0].
                    "\nЦіна: ".$this->price[0])
                    ->attach('tmp/'.$_FILES['fphoto']['name'])
                    ->send();
                    unlink('tmp/'.$_FILES['fphoto']['name']);
                return true;
        } else {
            return false;
        }
    }
}
