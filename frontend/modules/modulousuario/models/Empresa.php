<?php

namespace frontend\modules\modulousuario\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $Id_Empresa
 * @property string $Nombre
 * @property integer $Nit
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $Email
 *
 * @property EmpleadoAutorizado[] $empleadoAutorizados
 * @property Persona[] $personas
 * @property SolicitudRegEmpresa[] $solicitudRegEmpresas
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Nit', 'Direccion', 'Telefono', 'Email'], 'required'],
            [['Nit', 'Telefono'], 'integer'],
            [['Nombre', 'Email'], 'string', 'max' => 45],
            [['Direccion'], 'string', 'max' => 20],
            [['Nit'], 'unique'],
            [['Nombre'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Empresa' => 'Id  Empresa',
            'Nombre' => 'Nombre',
            'Nit' => 'Nit',
            'Direccion' => 'Direccion',
            'Telefono' => 'Telefono',
            'Email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleadoAutorizados()
    {
        return $this->hasMany(EmpleadoAutorizado::className(), ['Id_Empresa' => 'Id_Empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['Id_Empresa' => 'Id_Empresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudRegEmpresas()
    {
        return $this->hasMany(SolicitudRegEmpresa::className(), ['Id_Empresa' => 'Id_Empresa']);
    }
}
