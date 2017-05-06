<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prices';
?>
<div class="price-index">

    <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Игры</h1>
                    </div>
                </div>
            </div>
        </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Price', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'game',
            'price',
            'amount',
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
