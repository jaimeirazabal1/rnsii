<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_135011_institucion_eliminacion extends Migration
{
    public function up()
    {
        $this->createTable('institucion_eliminacion', [
            'id' => Schema::TYPE_PK,
            'institucion_id'=>Schema::TYPE_INTEGER,
            'campos'=>Schema::TYPE_TEXT,
            'fecha_peticion'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'activa'=>Schema::TYPE_BOOLEAN,
            'aprobada'=>Schema::TYPE_BOOLEAN,
            'usuario_id'=>Schema::TYPE_INTEGER,
            'comentario'=>Schema::TYPE_TEXT,
            'respaldo'=>Schema::TYPE_TEXT
            
        ]);
        
    }

    public function down()
    {
        echo "m150729_135011_institucion_eliminacion cannot be reverted.\n";

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
