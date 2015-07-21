<?php

use yii\db\Schema;
use yii\db\Migration;

class m150721_000752_create_institucion_table extends Migration
{
    public function up()
    {
        $this->createTable('institucion', [
            'id' => Schema::TYPE_PK,
            'nombre_institucion'=>Schema::TYPE_STRING. '(100) NOT NULL',
            'rif_institucion'=>Schema::TYPE_STRING. '(20) NOT NULL',
            'sigla_institucion'=>Schema::TYPE_STRING. '(20) NOT NULL',
            'direccion_institucion'=>Schema::TYPE_TEXT. ' NOT NULL',
            'tlf_contacto_institucion'=>Schema::TYPE_STRING. '(20) NOT NULL',
            'nombre_solicitante_institucion'=>Schema::TYPE_STRING. '(50) NOT NULL',
            'correo_institucion'=>Schema::TYPE_STRING. '(100) NOT NULL',
            'tlf_institucion'=>Schema::TYPE_STRING. '(20) NOT NULL',
        ]);
        
        $this->addForeignKey('FK_role', 'usuario', 'role_id', 'role', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_cargo', 'usuario', 'cargo_id', 'cargo', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_institucion', 'usuario', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
    }

    public function down()
    {
        echo "m150721_000752_create_institucion_table cannot be reverted.\n";

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
