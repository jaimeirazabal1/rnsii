<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134952_sii_modificacion extends Migration
{
    public function up()
    {
        $this->createTable('sii_modificacion', [
            'id' => Schema::TYPE_PK,
            'sii_id'=>Schema::TYPE_INTEGER.' NOT NULL',
            'campos'=>Schema::TYPE_STRING,
            'fecha_registro'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'usuario_id'=>Schema::TYPE_INTEGER,
            'activa'=>Schema::TYPE_BOOLEAN,
            'aprobada'=>Schema::TYPE_BOOLEAN,
            'respaldo'=>Schema::TYPE_TEXT,
            'fecha_aprobacion'=>Schema::TYPE_DATE,
            'url_acuerdo'=>Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        echo "m150729_134952_sii_modificacion cannot be reverted.\n";

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
