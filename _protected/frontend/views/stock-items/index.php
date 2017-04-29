<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StockItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',
            'title',
            'description:ntext',
            'image',
            // 'price',
            // 'discountprice',
            // 'instock',
            // 'size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
