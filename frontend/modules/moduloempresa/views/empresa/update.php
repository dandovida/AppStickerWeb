<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\moduloempresa\models\Empresa */

$this->title = 'Update Empresa: ' . $model->Id_Empresa;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Empresa, 'url' => ['view', 'id' => $model->Id_Empresa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
