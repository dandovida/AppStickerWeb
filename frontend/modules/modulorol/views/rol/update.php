<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulorol\models\Rol */

$this->title = 'Update Rol: ' . $model->Id_Rol;
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Rol, 'url' => ['view', 'id' => $model->Id_Rol]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
