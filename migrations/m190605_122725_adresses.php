<?php

use yii\db\Migration;

/**
 * Class m190605_122725_adresses
 */
class m190605_122725_adresses extends Migration
{
    public function up()
    {
        $this->createTable('address',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
            'location' => $this->string(400)->notNull()
        ]);
    }

    public function down()
    {
        echo "m190605_122725_adresses reverted.\n";

        $this->dropTable('address');

        return false;
    }
}
