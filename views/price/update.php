<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Price */

$this->title = 'Update Price: ' . $model->id;
?>
<div class="price-update">
 <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Обновить</h1>
                    </div>
                </div>
            </div>
        </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
