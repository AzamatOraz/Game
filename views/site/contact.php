<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;


$this->title = 'Прайс-Лист';
?>
<div class="site-price">
    <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Прайс-Лист</h1>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>Игра</th>
                        <th>Цена /сутки</th>
                        <th>Кол-во Людей</th>
                        <th>Рейтинг</th>
                    </tr>
                    <?php foreach($data as $item) : ?>
                    <tr>
                        <td><?php echo $item['game']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <td><?php echo $item['amount']; ?></td>
                        <td><?php echo $item['rating']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <?php echo Html::a("Добавить игру", ['price/index'],  ['class' => 'btn'])?>

</div>
