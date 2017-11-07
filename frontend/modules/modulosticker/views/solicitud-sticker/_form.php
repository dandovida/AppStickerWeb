<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulosticker\models\SolicitudSticker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-sticker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'Fecha_Inicio')->textInput() ?>

    <?= $form->field($model, 'Tipo_Area')->textInput() ?>

    <?= $form->field($model, 'Comentario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Empleado_Autorizado')->textInput() ?>

    <?= $form->field($model, 'Id_Empresa')->textInput() ?>

    <?= $form->field($model, 'Fecha_Fin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
