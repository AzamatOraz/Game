<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Games';
?>
<div class="game-index">
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
        <?= Html::a('Create Game', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'game',
            'description',
            'rules',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
