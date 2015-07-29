<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134934_sii extends Migration
{
    public function up()
    {
        $this->createTable('sii', [
            'id' => Schema::TYPE_PK,
            'institucion_id'=>Schema::TYPE_INTEGER.' NOT NULL',
            'desarrollado'=>Schema::TYPE_BOOLEAN,
            'descripcion_general'=>Schema::TYPE_TEXT.' NOT NULL',
            'restricciones_tecnicas'=>Schema::TYPE_TEXT,
            'descripcion_tecnica'=>Schema::TYPE_TEXT,
            'soporte_del_servicio'=>Schema::TYPE_TEXT,
            'datos_auditoria'=>Schema::TYPE_TEXT,
            'fecha_registro'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'usuario_id'=>Schema::TYPE_INTEGER,
            'aprobada'=>Schema::TYPE_BOOLEAN,
            'activo'=>Schema::TYPE_BOOLEAN,
            'url_document'=>Schema::TYPE_STRING,
            'caracterizacion_id'=>Schema::TYPE_INTEGER,
            'fecha_desactivacion'=>Schema::TYPE_DATE,
        
        ]);
         }

    public function down()
    {
        echo "m150729_134934_sii cannot be reverted.\n";

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
