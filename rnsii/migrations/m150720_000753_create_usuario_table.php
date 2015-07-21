<?php

use yii\db\Schema;
use yii\db\Migration;

class m150720_000753_create_usuario_table extends Migration
{
    public function up()
    {
        $this->createTable('usuario', [
            'id' => Schema::TYPE_PK,
            'institucion_id' => Schema::TYPE_INTEGER,
            'nombres' => Schema::TYPE_STRING . '(60) NOT NULL',
            'apellidos' => Schema::TYPE_STRING . '(60) NOT NULL',
            'cedula' => Schema::TYPE_STRING . '(10) NOT NULL UNIQUE',
            'cargo_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'correo' => Schema::TYPE_STRING . '(50) NOT NULL UNIQUE',
            'tlf' => Schema::TYPE_STRING . '(10) NOT NULL UNIQUE',
            'username' => Schema::TYPE_STRING . '(60) NOT NULL UNIQUE',
            'password' => Schema::TYPE_STRING . '(60) NOT NULL ',
            'fecha_registro' => Schema::TYPE_DATETIME. ' NOT NULL',
            'usuario_id_activo' => Schema::TYPE_INTEGER . ' NOT NULL',
            'fecha_login' => Schema::TYPE_DATETIME . ' NOT NULL',
            'role_id' => Schema::TYPE_INTEGER,
        ]);
        
        
    }

    public function down()
    {
        return false;
        $this->dropTable('usuario');
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
