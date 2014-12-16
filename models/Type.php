<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Type".
 *
 * @property integer $id
 * @property integer $Vyshivka
 * @property integer $Biser
 * @property integer $Porobky
 * @property integer $Keramika
 * @property integer $Rizba
 * @property integer $Kuvannia
 * @property integer $Prykrasy
 * @property integer $Ikony
 * @property integer $Mytec
 *
 * @property Mytci $mytec
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vyshivka', 'Biser', 'Porobky', 'Keramika', 'Rizba', 'Kuvannia', 'Prykrasy', 'Ikony', 'Mytec'], 'integer'],
            [['Mytec'], 'required'],
            [['Mytec'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Vyshivka' => 'Vyshivka',
            'Biser' => 'Biser',
            'Porobky' => 'Porobky',
            'Keramika' => 'Keramika',
            'Rizba' => 'Rizba',
            'Kuvannia' => 'Kuvannia',
            'Prykrasy' => 'Prykrasy',
            'Ikony' => 'Ikony',
            'Mytec' => 'Mytec',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMytec()
    {
        return $this->hasOne(Mytci::className(), ['id' => 'Mytec']);
    }
}
