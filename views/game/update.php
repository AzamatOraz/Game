<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Game */

$this->title = 'Update Game: ' . $model->id;
?>
<div class="game-update">
	<div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Обновите</h1>
                    </div>
                </div>
            </div>
        </div>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
