<?php

namespace frontend\modules\modulousuario\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $Id_Usuarios
 * @property string $Login
 * @property string $Password
 * @property integer $PrimeraVez
 *
 * @property EmpleadoAutorizado[] $empleadoAutorizados
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Login', 'Password', 'PrimeraVez'], 'required'],
            [['PrimeraVez'], 'integer'],
            [['Login', 'Password'], 'string', 'max' => 20],
            [['Login'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Usuarios' => 'Id  Usuarios',
            'Login' => 'Login',
            'Password' => 'Password',
            'PrimeraVez' => 'Primera Vez',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleadoAutorizados()
    {
        return $this->hasMany(EmpleadoAutorizado::className(), ['Id_Usuarios' => 'Id_Usuarios']);
    }
}
