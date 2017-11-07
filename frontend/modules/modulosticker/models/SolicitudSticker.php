<?php

namespace frontend\modules\modulosticker\models;

use Yii;

/**
 * This is the model class for table "solicitud_sticker".
 *
 * @property integer $Id_Solicitud_Sticker
 * @property string $Fecha
 * @property string $Fecha_Inicio
 * @property integer $Tipo_Area
 * @property string $Comentario
 * @property integer $Id_Empleado_Autorizado
 * @property integer $Id_Empresa
 * @property string $Fecha_Fin
 *
 * @property AreaSolicitud[] $areaSolicituds
 * @property DetalleSolicitudSticker[] $detalleSolicitudStickers
 * @property SolicitudArea[] $solicitudAreas
 * @property EmpleadoAutorizado $idEmpleadoAutorizado
 */
class SolicitudSticker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitud_sticker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'Fecha_Inicio', 'Tipo_Area', 'Id_Empleado_Autorizado', 'Id_Empresa', 'Fecha_Fin'], 'required'],
            [['Fecha', 'Fecha_Inicio', 'Fecha_Fin'], 'safe'],
            [['Tipo_Area', 'Id_Empleado_Autorizado', 'Id_Empresa'], 'integer'],
            [['Comentario'], 'string', 'max' => 45],
            [['Id_Empleado_Autorizado', 'Id_Empresa'], 'exist', 'skipOnError' => true, 'targetClass' => EmpleadoAutorizado::className(), 'targetAttribute' => ['Id_Empleado_Autorizado' => 'Id_Empleado_Autorizado', 'Id_Empresa' => 'Id_Empresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Solicitud_Sticker' => 'Id  Solicitud  Sticker',
            'Fecha' => 'Fecha',
            'Fecha_Inicio' => 'Fecha  Inicio',
            'Tipo_Area' => 'Tipo  Area',
            'Comentario' => 'Comentario',
            'Id_Empleado_Autorizado' => 'Id  Empleado  Autorizado',
            'Id_Empresa' => 'Id  Empresa',
            'Fecha_Fin' => 'Fecha  Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaSolicituds()
    {
        return $this->hasMany(AreaSolicitud::className(), ['Solicitud_Sticker_Id_Solicitud_Sticker' => 'Id_Solicitud_Sticker']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleSolicitudStickers()
    {
        return $this->hasMany(DetalleSolicitudSticker::className(), ['Id_Solicitud_Sticker' => 'Id_Solicitud_Sticker']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudAreas()
    {
        return $this->hasMany(SolicitudArea::className(), ['Id_Solicitud_Sticker' => 'Id_Solicitud_Sticker']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpleadoAutorizado()
    {
        return $this->hasOne(EmpleadoAutorizado::className(), ['Id_Empleado_Autorizado' => 'Id_Empleado_Autorizado', 'Id_Empresa' => 'Id_Empresa']);
    }
}
