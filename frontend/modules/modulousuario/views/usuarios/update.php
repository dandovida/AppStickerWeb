<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulousuario\models\Usuarios */

$this->title = 'Update Usuarios: ' . $model->Id_Usuarios;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Usuarios, 'url' => ['view', 'id' => $model->Id_Usuarios]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
