<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulosticker\models\SolicitudSticker */

$this->title = $model->Id_Solicitud_Sticker;
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Stickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-sticker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Solicitud_Sticker], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Solicitud_Sticker], [
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
            'Id_Solicitud_Sticker',
            'Fecha',
            'Fecha_Inicio',
            'Tipo_Area',
            'Comentario',
            'Id_Empleado_Autorizado',
            'Id_Empresa',
            'Fecha_Fin',
        ],
    ]) ?>

</div>
