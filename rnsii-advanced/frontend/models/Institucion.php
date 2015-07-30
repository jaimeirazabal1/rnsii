<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institucion".
 *
 * @property integer $id
 * @property string $nombre_institucion
 * @property string $rif_institucion
 * @property string $sigla_institucion
 * @property string $direccion_institucion
 * @property string $tlf_contacto_institucion
 * @property string $nombre_solicitante_institucion
 * @property string $correo_institucion
 * @property string $tlf_institucion
 *
 * @property InstitucionEliminacion[] $institucionEliminacions
 * @property InstitucionModificacion[] $institucionModificacions
 * @property InstitucionValidada[] $institucionValidadas
 * @property Sii[] $siis
 * @property Usuario[] $usuarios
 */
class Institucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_institucion', 'rif_institucion', 'sigla_institucion', 'direccion_institucion', 'tlf_contacto_institucion', 'nombre_solicitante_institucion', 'correo_institucion', 'tlf_institucion'], 'required'],
            [['direccion_institucion'], 'string'],
            [['nombre_institucion', 'correo_institucion'], 'string', 'max' => 100],
            [['rif_institucion', 'sigla_institucion', 'tlf_contacto_institucion', 'tlf_institucion'], 'string', 'max' => 20],
            [['nombre_solicitante_institucion'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_institucion' => 'Nombre Institucion',
            'rif_institucion' => 'Rif Institucion',
            'sigla_institucion' => 'Sigla Institucion',
            'direccion_institucion' => 'Direccion Institucion',
            'tlf_contacto_institucion' => 'Tlf Contacto Institucion',
            'nombre_solicitante_institucion' => 'Nombre Solicitante Institucion',
            'correo_institucion' => 'Correo Institucion',
            'tlf_institucion' => 'Tlf Institucion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionEliminacions()
    {
        return $this->hasMany(InstitucionEliminacion::className(), ['institucion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionModificacions()
    {
        return $this->hasMany(InstitucionModificacion::className(), ['institucion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstitucionValidadas()
    {
        return $this->hasMany(InstitucionValidada::className(), ['institucion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiis()
    {
        return $this->hasMany(Sii::className(), ['institucion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['institucion_id' => 'id']);
    }
}
