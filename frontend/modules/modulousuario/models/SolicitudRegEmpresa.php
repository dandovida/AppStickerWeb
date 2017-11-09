<?php

namespace frontend\modules\modulousuario\models;

use Yii;

/**
 * This is the model class for table "solicitud_reg_empresa".
 *
 * @property integer $Nr_Solicitud
 * @property integer $Estado
 * @property string $Fecha
 * @property string $Nombre
 * @property integer $Nit
 * @property integer $Telefono
 * @property string $Direccion
 * @property string $Email
 * @property integer $Id_Empresa
 *
 * @property DetalleRegEmpresa[] $detalleRegEmpresas
 * @property Persona[] $personas
 * @property Empresa $idEmpresa
 */
class SolicitudRegEmpresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitud_reg_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Estado', 'Fecha', 'Nombre', 'Nit', 'Telefono', 'Direccion', 'Email', 'Id_Empresa'], 'required'],
            [['Estado', 'Nit', 'Telefono', 'Id_Empresa'], 'integer'],
            [['Fecha'], 'safe'],
            [['Nombre', 'Email'], 'string', 'max' => 45],
            [['Direccion'], 'string', 'max' => 20],
            [['Nombre'], 'unique'],
            [['Nit'], 'unique'],
            [['Telefono'], 'unique'],
            [['Id_Empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Id_Empresa' => 'Id_Empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nr_Solicitud' => 'Nr  Solicitud',
            'Estado' => 'Estado',
            'Fecha' => 'Fecha',
            'Nombre' => 'Nombre',
            'Nit' => 'Nit',
            'Telefono' => 'Telefono',
            'Direccion' => 'Direccion',
            'Email' => 'Email',
            'Id_Empresa' => 'Id  Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleRegEmpresas()
    {
        return $this->hasMany(DetalleRegEmpresa::className(), ['Nr_Solicitud' => 'Nr_Solicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['Nr_Solicitud' => 'Nr_Solicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['Id_Empresa' => 'Id_Empresa']);
    }
}
