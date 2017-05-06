<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */

$this->title = 'Pleasure Time';
?>
 <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Наши контакты</h4>
                    </div>
                    <div class="modal-body">
                      <p>+7 701 228 ** **</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
<div class="site-index">
    
     <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(image/game1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Мир игр приветствует вас!</h2>
                                    <p class="animation animated-item-2">Вы можете арендовать любую настольную игру вместе Pleasure Time!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(image/game2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Только с нашим сервисом вы можете взять в аренду любые настольные и приставочные игры</h2>
                                    <p class="animation animated-item-2">Более 500 видов игр! На любой срок, вкус и в любое время!</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(image/game3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Дом милый дом!</h2>
                                    <p class="animation animated-item-2">Больше не надо тратить деньги на посещение кафе для того, чтобы поиграть в настольные игры или на их покупку.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section>

      <div class="section section-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="calltoaction-wrapper">
              <h3>Позвоните нам! Мы ответим вам в любое время!</h3> 
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Позвоните нам!</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="section section-white">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                  <i class="icon-dropbox"></i>
                  <h3>Игротека</h3>
                  <p>Наша коллекция игр всегда готова скрасить ваш досуг :)</p>

                  <?php echo Html::a("Читать дальше...", ['site/about'], ['class' => 'btn'])?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                  <i class="icon-money"></i>
                  <h3>Прайс-Лист</h3>
                  <p>Наши цены стараются угодить всем нашим гостям :)</p>
                  <?php echo Html::a("Читать дальше...", ['site/contact'],  ['class' => 'btn'])?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                  <i class="icon-picture"></i>
                  <h3>Галерея</h3>
                  <p>Запечатляйте свои эмоции, и делитесь ими в нашей фотогалерии :)</p>
                  <?php echo Html::a("Читать дальше...", ['site/gallery'],  ['class' => 'btn'])?>

                </div>
              </div>
            </div>
          </div>
      </div>


<hr>

        <div class="section section-white">
          <div class="container">
            <div class="row">
  
        <div class="section-title">
        <h1>Самые популярные игры</h1>
        </div>
    
    
      <ul class="grid cs-style-3">
            <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img01.jpg" alt="pleasure">
            <figcaption>
              <h3>Монополия</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
            </div>  
        <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img02.jpg" alt="pleasure">
            <figcaption>
              <h3>Activity</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img03.jpg" alt="pleasure">
            <figcaption>
              <h3>Uno</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img04.jpg" alt="pleasure">
            <figcaption>
              <h3>Alias</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img05.jpg" alt="pleasure">
            <figcaption>
              <h3>Мафия</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure>
            <img src="image/games/img06.jpg" alt="pleasure">
            <figcaption>
              <h3>Jenga</h3>
              <?php echo Html::a("Заглянуть", ['site/about'])?>
            </figcaption>
          </figure>
        </div>
      </ul>
            </div>
          </div>
      </div>


</div>
