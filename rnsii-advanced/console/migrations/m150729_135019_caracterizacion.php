<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_135019_caracterizacion extends Migration
{
    public function up()
    {
        $this->createTable('caracterizacion', [
            'id' => Schema::TYPE_PK,
            'caracterizacion'=>Schema::TYPE_STRING.'(30) NOT NULL',
            'fecha_registro'=>Schema::TYPE_TIMESTAMP.' DEFAULT CURRENT_TIMESTAMP',
        ]);
        /**
         * de la tabla de sii
         */
        $this->addForeignKey('FK_caracterizacion', 'sii', 'caracterizacion_id', 'caracterizacion', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_institucion_validada', 'institucion_validada', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_institucion_validada', 'institucion_validada', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_sii_eliminacion', 'sii_eliminacion', 'sii_id', 'sii', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_sii_eliminacion', 'sii_eliminacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_sii_modificacion', 'sii_modificacion', 'sii_id', 'sii', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_sii_modificacion', 'sii_modificacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_sii_implementacion', 'sii_implementacion', 'sii_id', 'sii', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_sii_implementacion', 'sii_implementacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_sii', 'sii', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_institucion_sii', 'sii', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_modificacion', 'usuario_modificacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_institucion_modificacion', 'institucion_modificacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_institucion_modificacion', 'institucion_modificacion', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_notificacion_correo', 'notificacion_correo', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_institucion_eliminacion', 'institucion_eliminacion', 'institucion_id', 'institucion', 'id','NO ACTION','NO ACTION');
        $this->addForeignKey('FK_usuario_institucion_eliminacion', 'institucion_eliminacion', 'usuario_id', 'usuario', 'id','NO ACTION','NO ACTION');

    }

    public function down()
    {
        echo "m150729_135019_caracterizacion cannot be reverted.\n";

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
