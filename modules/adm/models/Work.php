<?php

namespace app\modules\adm\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $id
 * @property integer $ownerID
 * @property string $price
 * @property string $description
 * @property string $img_src
 * @property integer $type
 *
 * @property Mytci $owner
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ownerID', 'price', 'description', 'img_src'], 'required'],
            [['ownerID', 'type'], 'integer'],
            [['description'], 'string'],
            [['price', 'img_src'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ownerID' => 'ID Митця',
            'price' => 'Ціна',
            'description' => 'Опис',
            'img_src' => 'Зображення',
            'type' => 'Тип',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Mytci::className(), ['id' => 'ownerID']);
    }
}