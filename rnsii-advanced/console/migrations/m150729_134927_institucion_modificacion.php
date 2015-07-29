<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134927_institucion_modificacion extends Migration
{
    public function up()
    {
        $this->createTable('institucion_modificacion', [
            'id' => Schema::TYPE_PK,
            'institucion_id'=>Schema::TYPE_INTEGER,
            'campos'=>Schema::TYPE_TEXT.' NOT NULL',
            'fecha_peticion'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'activa'=>Schema::TYPE_BOOLEAN,
            'aprobada'=>Schema::TYPE_BOOLEAN,
            'usuario_id'=>Schema::TYPE_INTEGER,
            'comentario'=>Schema::TYPE_STRING,
            'respaldo'=>  Schema::TYPE_STRING
        ]);
        
    }

    public function down()
    {
        echo "m150729_134927_institucion_modificacion cannot be reverted.\n";

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
