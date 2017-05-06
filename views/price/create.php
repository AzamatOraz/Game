<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Price */

$this->title = 'Create Price';
?>
<div class="price-create">

    <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Добавить Игру</h1>
                    </div>
                </div>
            </div>
        </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
