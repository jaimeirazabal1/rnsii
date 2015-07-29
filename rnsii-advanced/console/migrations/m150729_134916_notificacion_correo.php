<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134916_notificacion_correo extends Migration
{
    public function up()
    {
        $this->createTable('notificacion_correo', [
            'id' => Schema::TYPE_PK,
            'fecha_envio'=>Schema::TYPE_DATE. ' NOT NULL',
            'usuario_id'=>Schema::TYPE_INTEGER,
            'correo_destino'=>Schema::TYPE_STRING.'(100) NOT NULL',
            'mensaje'=>Schema::TYPE_TEXT.' NOT NULL',
            'motivo'=>Schema::TYPE_TEXT.' NOT NULL'
        ]);
         }

    public function down()
    {
        echo "m150729_134916_notificacion_correo cannot be reverted.\n";

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
