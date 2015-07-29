<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_135000_sii_eliminacion extends Migration
{
    public function up()
    {
        $this->createTable('sii_eliminacion', [
            'id' => Schema::TYPE_PK,
            'sii_id'=>Schema::TYPE_INTEGER.' NOT NULL',
            'usuario_id'=>Schema::TYPE_INTEGER,
            'fecha_peticion'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
            'activa'=>Schema::TYPE_BOOLEAN,
            'aprobada'=>Schema::TYPE_BOOLEAN
        ]);
        }

    public function down()
    {
        echo "m150729_135000_sii_eliminacion cannot be reverted.\n";

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
