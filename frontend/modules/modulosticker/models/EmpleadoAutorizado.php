<?php

namespace frontend\modules\modulosticker\models;

use Yii;

/**
 * This is the model class for table "empleado_autorizado".
 *
 * @property integer $Id_Empleado_Autorizado
 * @property string $Cargo
 * @property integer $Estado
 * @property integer $Id_Persona
 * @property integer $Id_Empresa
 * @property integer $Id_Usuarios
 *
 * @property Empresa $idEmpresa
 * @property Persona $idPersona
 * @property Usuarios $idUsuarios
 * @property SolicitudSticker[] $solicitudStickers
 */
class EmpleadoAutorizado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado_autorizado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cargo', 'Estado', 'Id_Persona', 'Id_Empresa', 'Id_Usuarios'], 'required'],
            [['Estado', 'Id_Persona', 'Id_Empresa', 'Id_Usuarios'], 'integer'],
            [['Cargo'], 'string', 'max' => 20],
            [['Id_Empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Id_Empresa' => 'Id_Empresa']],
            [['Id_Persona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['Id_Persona' => 'Id_Persona']],
            [['Id_Usuarios'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['Id_Usuarios' => 'Id_Usuarios']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Empleado_Autorizado' => 'Id  Empleado  Autorizado',
            'Cargo' => 'Cargo',
            'Estado' => 'Estado',
            'Id_Persona' => 'Id  Persona',
            'Id_Empresa' => 'Id  Empresa',
            'Id_Usuarios' => 'Id  Usuarios',
        ];
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
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['Id_Persona' => 'Id_Persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuarios()
    {
        return $this->hasOne(Usuarios::className(), ['Id_Usuarios' => 'Id_Usuarios']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudStickers()
    {
        return $this->hasMany(SolicitudSticker::className(), ['Id_Empleado_Autorizado' => 'Id_Empleado_Autorizado', 'Id_Empresa' => 'Id_Empresa']);
    }
}
