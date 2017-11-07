<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\modulosticker\models\search\SolicitudStickerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud Stickers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-sticker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitud Sticker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Solicitud_Sticker',
            'Fecha',
            'Fecha_Inicio',
            'Tipo_Area',
            'Comentario',
            // 'Id_Empleado_Autorizado',
            // 'Id_Empresa',
            // 'Fecha_Fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
