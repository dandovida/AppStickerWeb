<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\moduloempresa\models\search\EmpresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Empresa') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Nit') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
