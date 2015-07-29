<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134849_usuario_modificacion extends Migration
{
    public function up()
    {
        $this->createTable('usuario_modificacion', [
            'id' => Schema::TYPE_PK,
            'usuario_id'=>Schema::TYPE_INTEGER,
            'campos'=>Schema::TYPE_TEXT,
            'fecha_peticion'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'activa'=>Schema::TYPE_BOOLEAN,
            'aprobada'=>Schema::TYPE_BOOLEAN,
            'respaldo'=>Schema::TYPE_TEXT,
        ]);
    
    
    }

    public function down()
    {
        echo "m150729_134849_usuario_modificacion cannot be reverted.\n";

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
