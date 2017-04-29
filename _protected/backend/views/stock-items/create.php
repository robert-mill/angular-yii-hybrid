<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockItems */

$this->title = 'Create Stock Items';
$this->params['breadcrumbs'][] = ['label' => 'Stock Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
