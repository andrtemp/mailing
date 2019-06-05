<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "letter".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $sender_id
 * @property int $receiver_id
 */
class Letter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'letter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'sender_id', 'receiver_id'], 'required'],
            [['content'], 'string'],
            [['sender_id', 'receiver_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'content' => 'Контент',
            'sender_id' => 'Отправитель ID',
            'receiver_id' => 'Получатель ID',
        ];
    }

    public function getSender(){
        return $this->hasOne(Address::className(), ['id' => 'sender_id']);
    }


    public function getReceiver(){
        return $this->hasOne(Address::className(), ['id' => 'receiver_id']);
    }

}
