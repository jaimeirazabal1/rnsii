<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134945_sii_implementacion extends Migration
{
    public function up()
    {
        $this->createTable('sii_implementacion', [
            'id' => Schema::TYPE_PK,
            'sii_id'=>Schema::TYPE_INTEGER.' NOT NULL',
            'fecha_implementacion'=>Schema::TYPE_DATE,
            'usuario_id'=>Schema::TYPE_INTEGER,
            'plan_vencido'=>Schema::TYPE_BOOLEAN,
            'enproceso'=>Schema::TYPE_BOOLEAN
        ]);
        
    }

    public function down()
    {
        echo "m150729_134945_sii_implementacion cannot be reverted.\n";

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
