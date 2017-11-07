<?php

namespace frontend\modules\moduloarea\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property integer $Id_Area
 * @property string $Nombre
 * @property string $Descripcion
 *
 * @property AreaSolicitud[] $areaSolicituds
 * @property SolicitudArea[] $solicitudAreas
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Nombre'], 'string', 'max' => 20],
            [['Descripcion'], 'string', 'max' => 45],
            [['Nombre'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Area' => 'Id  Area',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaSolicituds()
    {
        return $this->hasMany(AreaSolicitud::className(), ['Area_Id_Area' => 'Id_Area']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudAreas()
    {
        return $this->hasMany(SolicitudArea::className(), ['Id_Area' => 'Id_Area']);
    }
}
