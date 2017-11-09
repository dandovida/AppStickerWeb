<?php

namespace frontend\modules\modulousuario\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $Id_Rol
 * @property string $Nombre
 * @property string $Descripcion
 *
 * @property DetalleRegEmpresa[] $detalleRegEmpresas
 * @property Persona[] $personas
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Descripcion'], 'required'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Rol' => 'Id  Rol',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleRegEmpresas()
    {
        return $this->hasMany(DetalleRegEmpresa::className(), ['Id_Rol' => 'Id_Rol']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['Id_Rol' => 'Id_Rol']);
    }
}
