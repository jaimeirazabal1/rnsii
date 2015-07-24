<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property integer $institucion_id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property string $cargo
 * @property string $correo
 * @property string $tlf
 * @property string $username
 * @property string $password
 * @property string $fecha_registro
 * @property integer $usuario_id_activo
 * @property string $fecha_login
 * @property integer $role_id
 *
 * @property Institucion $institucion
 * @property Role $role
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['institucion_id', 'usuario_id_activo', 'role_id'], 'integer'],
            [['nombres', 'apellidos', 'cedula', 'cargo', 'correo', 'tlf', 'username', 'password', 'fecha_registro','institucion_id','role_id'], 'required','message'=>'Este campo no puede ser vacio'],
            [['fecha_registro', 'fecha_login'], 'safe'],
            [['nombres', 'apellidos', 'username', 'password','cargo'], 'string', 'max' => 60],
            [['cedula'], 'string', 'max' => 10],
            [ 'tlf', 'string', 'max' => 11],
            [['correo'], 'string', 'max' => 50],
            ['correo','email'],
            [['cedula'], 'unique',"message"=>"El numero de cedula ya fue usado"],
            [['correo'], 'unique',"message"=>"El correo ya fue usado"],
            [['tlf'], 'unique',"message"=>"El numero de telefono ya fue usado"],
            [['tlf'],'integer','message'=>'El Numero de telefono debe ser numerico'],
            [['username'], 'unique',"message"=>"El nombre de usuario ya fue usado"]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institucion_id' => 'Institucion',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
            'cargo' => 'Cargo',
            'correo' => 'Correo',
            'tlf' => 'Tlf',
            'username' => 'Nombre de Usuario',
            'password' => 'Contraseña',
            'fecha_registro' => 'Fecha Registro',
            'usuario_id_activo' => 'Usuario Id Activo',
            'fecha_login' => 'Fecha Login',
            'role_id' => 'Role de Usuario',
        ];
    }
    public function setPassword($password){
        $hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $this->setAttribute('hash', $hash);
        $encryptedData = Yii::$app->getSecurity()->encryptByPassword($this->password, $hash);
        $this->password = $encryptedData;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucion()
    {
        return $this->hasOne(Institucion::className(), ['id' => 'institucion_id']);
    }

    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }
}
