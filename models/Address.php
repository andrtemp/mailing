<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $location
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'location'], 'required'],
            [['name', 'address'], 'string', 'max' => 255],
            [['location'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'address' => 'Почта',
            'location' => 'Место проживания',
        ];
    }

    public static function returnArray($data){
        $result = [];
        foreach ($data as $element){
            $result[$element['id']] = $element['name'];
        }
        return $result;
    }
}
