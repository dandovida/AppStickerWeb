<?php

namespace frontend\modules\modulousuario\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $Id_Persona
 * @property string $Nombres
 * @property string $Apellidos
 * @property integer $Cedula
 * @property integer $Telefono
 * @property integer $Celular
 * @property string $Email
 * @property integer $Id_Empresa
 * @property integer $Nr_Solicitud
 * @property integer $Id_Rol
 *
 * @property EmpleadoAutorizado[] $empleadoAutorizados
 * @property Empresa $idEmpresa
 * @property Rol $idRol
 * @property SolicitudRegEmpresa $nrSolicitud
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombres', 'Apellidos', 'Cedula', 'Telefono', 'Email', 'Id_Empresa', 'Nr_Solicitud', 'Id_Rol'], 'required'],
            [['Cedula', 'Telefono', 'Celular', 'Id_Empresa', 'Nr_Solicitud', 'Id_Rol'], 'integer'],
            [['Nombres', 'Apellidos', 'Email'], 'string', 'max' => 45],
            [['Cedula'], 'unique'],
            [['Id_Empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Id_Empresa' => 'Id_Empresa']],
            [['Id_Rol'], 'exist', 'skipOnError' => true, 'targetClass' => Rol::className(), 'targetAttribute' => ['Id_Rol' => 'Id_Rol']],
            [['Nr_Solicitud'], 'exist', 'skipOnError' => true, 'targetClass' => SolicitudRegEmpresa::className(), 'targetAttribute' => ['Nr_Solicitud' => 'Nr_Solicitud']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Persona' => 'Id  Persona',
            'Nombres' => 'Nombres',
            'Apellidos' => 'Apellidos',
            'Cedula' => 'Cedula',
            'Telefono' => 'Telefono',
            'Celular' => 'Celular',
            'Email' => 'Email',
            'Id_Empresa' => 'Id  Empresa',
            'Nr_Solicitud' => 'Nr  Solicitud',
            'Id_Rol' => 'Id  Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleadoAutorizados()
    {
        return $this->hasMany(EmpleadoAutorizado::className(), ['Id_Persona' => 'Id_Persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['Id_Empresa' => 'Id_Empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRol()
    {
        return $this->hasOne(Rol::className(), ['Id_Rol' => 'Id_Rol']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNrSolicitud()
    {
        return $this->hasOne(SolicitudRegEmpresa::className(), ['Nr_Solicitud' => 'Nr_Solicitud']);
    }
}
