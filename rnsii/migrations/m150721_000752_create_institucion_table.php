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
        $this->addForeignKey('FK_institucion', 'usuario', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
    
        $this->insert('institucion',[
            'nombre_institucion'=>'Institucion 1',
            'rif_institucion'=>'G12010120',
            'sigla_institucion'=>'I1',
            'direccion_institucion'=>'Direccion de la institucion',
            'tlf_contacto_institucion'=>'0214111111',
            'nombre_solicitante_institucion'=>'Jaime Irazabal Institucion 1',
            'correo_institucion'=>'institucion1@institucion1.com',
            'tlf_institucion'=>'02121111111'
        ]);
        $this->insert('institucion',[
            'nombre_institucion'=>'Institucion 2',
            'rif_institucion'=>'G12010111',
            'sigla_institucion'=>'I2',
            'direccion_institucion'=>'Direccion de la institucion 2',
            'tlf_contacto_institucion'=>'0214111112',
            'nombre_solicitante_institucion'=>'Jaime Irazabal Institucion 2',
            'correo_institucion'=>'institucion2@institucion2.com',
            'tlf_institucion'=>'02121111112'
        ]);
        
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
