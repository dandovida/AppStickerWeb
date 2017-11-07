<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\modulosticker\models\SolicitudSticker */

$this->title = 'Create Solicitud Sticker';
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Stickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-sticker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
