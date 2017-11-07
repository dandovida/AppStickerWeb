<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulosticker\models\search\SolicitudStickerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-sticker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Solicitud_Sticker') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Fecha_Inicio') ?>

    <?= $form->field($model, 'Tipo_Area') ?>

    <?= $form->field($model, 'Comentario') ?>

    <?php // echo $form->field($model, 'Id_Empleado_Autorizado') ?>

    <?php // echo $form->field($model, 'Id_Empresa') ?>

    <?php // echo $form->field($model, 'Fecha_Fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
