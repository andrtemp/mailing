<?php

use yii\db\Migration;

/**
 * Class m190605_122711_letters_box
 */
class m190605_122711_letters_box extends Migration
{
    public function up()
    {
        $this->createTable('letter',[
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'sender_id' => $this->integer()->notNull(),
            'receiver_id' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m190605_122711_letters_box reverted.\n";

        $this->dropTable('letter');

        return false;
    }
}
