<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134838_usuario_validado extends Migration
{
    public function up()
    {
        $this->createTable('usuario_validado', [
            'id' => Schema::TYPE_PK,
            'usuario_id'=>Schema::TYPE_INTEGER,
            'validado'=>Schema::TYPE_BOOLEAN,
            'activo'=>Schema::TYPE_BOOLEAN,
            'fecha_validacion'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'usuario_id_validado'=>Schema::TYPE_INTEGER
        ]);
        $this->addForeignKey('FK_usuario', 'usuario_validado', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_validador', 'usuario_validado', 'usuario_id_validado', 'usuario', 'id','NO ACTION','NO ACTION');
    }

    public function down()
    {
        echo "m150729_134838_usuario_validado cannot be reverted.\n";

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
