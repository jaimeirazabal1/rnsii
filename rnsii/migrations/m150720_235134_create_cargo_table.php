<?php

use yii\db\Schema;
use yii\db\Migration;

class m150720_235134_create_cargo_table extends Migration
{
    public function up()
    {
        $this->createTable('cargo', [
            'id' => Schema::TYPE_PK,
            'nombre_cargo' => Schema::TYPE_STRING . '(20) NOT NULL',
            'descripcion' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150720_235134_create_cargo_table cannot be reverted.\n";

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
