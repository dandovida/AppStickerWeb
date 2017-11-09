<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulousuario\models\Persona */

$this->title = $model->Id_Persona;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Persona' => $model->Id_Persona, 'Id_Empresa' => $model->Id_Empresa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Persona' => $model->Id_Persona, 'Id_Empresa' => $model->Id_Empresa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Persona',
            'Nombres',
            'Apellidos',
            'Cedula',
            'Telefono',
            'Celular',
            'Email:email',
            'Id_Empresa',
            'Nr_Solicitud',
            'Id_Rol',
        ],
    ]) ?>

</div>
