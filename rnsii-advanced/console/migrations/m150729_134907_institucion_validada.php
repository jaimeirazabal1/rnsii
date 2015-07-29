<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_134907_institucion_validada extends Migration
{
    public function up()
    {
        $this->createTable('institucion_validada', [
            'id' => Schema::TYPE_PK,
            'institucion_id'=>Schema::TYPE_INTEGER,
            'validada'=>Schema::TYPE_BOOLEAN,
            'activa'=>Schema::TYPE_BOOLEAN,
            'fecha_validacion'=>Schema::TYPE_DATE. ' NOT NULL',
            'usuario_id'=>Schema::TYPE_INTEGER,
            'fecha_desactivacion'=>Schema::TYPE_DATE
        ]);
        }

    public function down()
    {
        echo "m150729_134907_institucion_validada cannot be reverted.\n";

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
