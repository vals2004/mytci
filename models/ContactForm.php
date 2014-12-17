<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{   
    public $Fname;
    public $Sname;
    public $Lname;
    public $province;
    public $area;
    public $city;
    public $art;
    public $email;
    public $phone;
    public $about;
    public $photo;
    public $verifyCode;

    public function rules()
    {
        return [
            [['Fname', 'Sname',  'Lname', 'email', 'province', 'city', 'art', 'phone', 'about', 'photo'], 'required'],
            ['about', 'string', 'max' => 500],
            ['area', 'string', 'max' => 25],
            ['photo', 'safe'],
            ['photo', 'file', 'extensions' => 'gif, jpg',],
            ['photo', 'file', 'maxSize'=>'1000000'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Введіть у поле вказанний нижче код:',
            'Fname' => 'Ім\'я:',
            'Sname' => 'Прізвище:',
            'Lname' => 'По батькові:',
            'province' => 'Область:',
            'area' => 'Район (не обов\'язково):',
            'city' => 'Місто:',
            'art' => 'Види мистетства (оберіть одне або декілька):',
            'phone' => 'Номер телефону:',
            'email' => 'Електронна пошта:',
            'about' => 'Напишіть о собі:',
            'photo' => 'Фотографія (портрет у форматі .jpg або .png):',
        ];
    }

    public function contact($email)
    {   
        if ($this->validate() || true)
        {
                $info = explode('.',$_FILES['fphoto']['name']); 
                $uploaddir = './tmp/';
                $_FILES['fphoto']['name'] = microtime().$_FILES['fphoto']['size'].'.'.$info[1];
                $uploadfile = $uploaddir . basename($_FILES['fphoto']['name']);
                move_uploaded_file($_FILES['fphoto']['tmp_name'], $uploadfile);
                
                Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom([$this->email =>'Регістрація'])
                    ->setSubject($this->Fname." ".$this->Sname." ".$this->Lname)
                    ->setTextBody(
                    "Ім'я: ".$this->Fname.
                    "\nПрізвище: ".$this->Sname.
                    "\nПо батькові: ".$this->Lname.
                    "\nПошта: ".$this->email.
                    "\nОбласть: ".$this->province.
                    "\nРайон: ".$this->area.
                    "\nМісто: ".$this->city.
                    "\nТелефон: ".$this->phone.
                    "\nМистетства: ".implode (', ',$this->art).
                    "\nО митці: ".$this->about)
                    ->attach('tmp/'.$_FILES['fphoto']['name'])
                    ->send();
                    unlink('tmp/'.$_FILES['fphoto']['name']);
                return true;
        } 
        else { return false; }
    }
}
