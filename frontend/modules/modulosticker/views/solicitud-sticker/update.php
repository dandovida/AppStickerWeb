<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\modulosticker\models\SolicitudSticker */

$this->title = 'Update Solicitud Sticker: ' . $model->Id_Solicitud_Sticker;
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Stickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Solicitud_Sticker, 'url' => ['view', 'id' => $model->Id_Solicitud_Sticker]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitud-sticker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
