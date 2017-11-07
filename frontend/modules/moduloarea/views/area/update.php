<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\moduloarea\models\Area */

$this->title = 'Update Area: ' . $model->Id_Area;
$this->params['breadcrumbs'][] = ['label' => 'Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Area, 'url' => ['view', 'id' => $model->Id_Area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="area-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
