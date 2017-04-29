<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StockItems */

$this->title = 'Update Stock Items: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Stock Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
