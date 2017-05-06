<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Услуги';
?>
<div class="site-about">
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Наша коллекция:</h1>
					</div>
				</div>
			</div>
		</div>
		
		<?php foreach($data as $item) : ?>
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2><?php echo $item['game']; ?></h2>
						<h3>Описание</h3>
						<p>
							<?php echo $item['description']; ?>
						</p>
						<h3>Правила</h3>	
						<p>
							<?php echo $item['rules']; ?>
						</p>						
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
        <?php echo Html::a("Добавить игру", ['game/index'],  ['class' => 'btn'])?>
		
</div>
