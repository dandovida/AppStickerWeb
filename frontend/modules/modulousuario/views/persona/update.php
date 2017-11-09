<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulousuario\models\Persona */

$this->title = 'Update Persona: ' . $model->Id_Persona;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Persona, 'url' => ['view', 'Id_Persona' => $model->Id_Persona, 'Id_Empresa' => $model->Id_Empresa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
