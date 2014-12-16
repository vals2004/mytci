<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mytci".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $sec_name
 * @property string $last_name
 * @property string $img_src
 * @property string $adress
 * @property string $tel_number
 *
 * @property Type[] $types
 * @property Work[] $works
 */
class mytci extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mytci';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'sec_name', 'last_name', 'img_src', 'adress', 'tel_number'], 'required'],
            [['adress'], 'string'],
            [['first_name', 'sec_name', 'last_name', 'img_src', 'tel_number'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Ім\'я',
            'sec_name' => 'По батькові',
            'last_name' => 'Прізвище',
            'img_src' => 'Img Src',
            'adress' => 'Адреса',
            'tel_number' => 'Тел. номер',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypes()
    {
        return $this->hasMany(Type::className(), ['Mytec' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['ownerID' => 'id']);
    }
}