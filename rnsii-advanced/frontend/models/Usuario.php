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
 * @property string $access_token
 * @property string $auth_key
 * @property string $fecha_registro
 * @property integer $usuario_id_activo
 * @property string $fecha_login
 * @property integer $role_id
 *
 * @property InstitucionEliminacion[] $institucionEliminacions
 * @property InstitucionModificacion[] $institucionModificacions
 * @property InstitucionValidada[] $institucionValidadas
 * @property NotificacionCorreo[] $notificacionCorreos
 * @property Sii[] $siis
 * @property SiiEliminacion[] $siiEliminacions
 * @property SiiImplementacion[] $siiImplementacions
 * @property SiiModificacion[] $siiModificacions
 * @property Institucion $institucion
 * @property Role $role
 * @property UsuarioModificacion[] $usuarioModificacions
 * @property UsuarioValidado[] $usuarioValidados
 * @property UsuarioValidado[] $usuarioValidados0
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
            [['institucion_id', 'nombres', 'apellidos', 'cedula', 'cargo', 'correo', 'tlf', 'username', 'password', 'access_token', 'auth_key', 'fecha_registro', 'role_id'], 'required'],
            [['institucion_id', 'usuario_id_activo', 'role_id'], 'integer'],
            [['fecha_registro', 'fecha_login'], 'safe'],
            [['nombres', 'apellidos', 'username'], 'string', 'max' => 60],
            [['cedula'], 'string', 'max' => 10],
            [['cargo', 'password', 'access_token', 'auth_key'], 'string', 'max' => 255],
            [['correo'], 'string', 'max' => 50],
            [['tlf'], 'string', 'max' => 11],
            [['cedula'], 'unique'],
            [['correo'], 'unique'],
            [['tlf'], 'unique'],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institucion_id' => 'Institucion ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
            'cargo' => 'Cargo',
            'correo' => 'Correo',
            'tlf' => 'Tlf',
            'username' => 'Username',
            'password' => 'Password',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
            'fecha_registro' => 'Fecha Registro',
            'usuario_id_activo' => 'Usuario Id Activo',
            'fecha_login' => 'Fecha Login',
            'role_id' => 'Role ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionEliminacions()
    {
        return $this->hasMany(InstitucionEliminacion::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionModificacions()
    {
        return $this->hasMany(InstitucionModificacion::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionValidadas()
    {
        return $this->hasMany(InstitucionValidada::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotificacionCorreos()
    {
        return $this->hasMany(NotificacionCorreo::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiis()
    {
        return $this->hasMany(Sii::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiiEliminacions()
    {
        return $this->hasMany(SiiEliminacion::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiiImplementacions()
    {
        return $this->hasMany(SiiImplementacion::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiiModificacions()
    {
        return $this->hasMany(SiiModificacion::className(), ['usuario_id' => 'id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioModificacions()
    {
        return $this->hasMany(UsuarioModificacion::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioValidados()
    {
        return $this->hasMany(UsuarioValidado::className(), ['usuario_id_validado' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioValidados0()
    {
        return $this->hasMany(UsuarioValidado::className(), ['usuario_id' => 'id']);
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
