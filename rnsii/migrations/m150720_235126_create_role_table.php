<?php

use yii\db\Schema;
use yii\db\Migration;

class m150720_235126_create_role_table extends Migration
{
    public function up()
    {
        $this->createTable('role', [
            'id' => Schema::TYPE_PK,
            'nombre_role' => Schema::TYPE_STRING . '(20) NOT NULL',
            'descripcion' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150720_235126_create_role_table cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
