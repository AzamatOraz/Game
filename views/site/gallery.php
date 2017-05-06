<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Галерея';
?>
<div class="site-gallery">

<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Галерея</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
		    <div id="main_area">
		        <!-- Slider -->
		        <div class="row">
		            <div class="col-sm-6" id="slider-thumbs">
		                <!-- Bottom switcher of slider -->
		                <ul class="hide-bullets">
		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-0">
		                            <img src="image/gallery/pleasure.jpg">
		                        </a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-1"><img src="image/gallery/pleasure15.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-2"><img src="image/gallery/pleasure1.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-3"><img src="image/gallery/pleasure2.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-4"><img src="image/gallery/pleasure3.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-5"><img src="image/gallery/pleasure4.jpg" alt="game"></a>
		                    </li>
		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-6"><img src="image/gallery/pleasure5.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-7"><img src="image/gallery/pleasure6.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-8"><img src="image/gallery/pleasure7.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-9"><img src="image/gallery/pleasure8.jpg" alt="game"></a>
		                    </li>
		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-10"><img src="image/gallery/pleasure9.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-11"><img src="image/gallery/pleasure10.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-12"><img src="image/gallery/pleasure11.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-13"><img src="image/gallery/pleasure12.jpg" alt="game"></a>
		                    </li>
		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-14"><img src="image/gallery/pleasure13.jpg" alt="game"></a>
		                    </li>

		                    <li class="col-sm-3">
		                        <a class="thumbnail" id="carousel-selector-15"><img src="image/gallery/pleasure14.jpg" alt="game"></a>
		                    </li>
		                </ul>
		            </div>
		            <div class="col-sm-6">
		                <div class="col-xs-12" id="slider">
		                    <!-- Top part of the slider -->
		                    <div class="row">
		                        <div class="col-sm-12" id="carousel-bounding-box">
		                            <div class="carousel slide" id="myCarousel">
		                                <!-- Carousel items -->
		                                <div class="carousel-inner">
		                                    <div class="active item" data-slide-number="0">
		                                        <img src="image/gallery/pleasure.jpg" alt="game"></div>

		                                    <div class="item" data-slide-number="1">
		                                        <img src="image/gallery/pleasure15.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="2">
		                                        <img src="image/gallery/pleasure1.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="3">
		                                        <img src="image/gallery/pleasure2.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="4">
		                                        <img src="image/gallery/pleasure3.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="5">
		                                        <img src="image/gallery/pleasure4.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="6">
		                                        <img src="image/gallery/pleasure5.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="7">
		                                        <img src="image/gallery/pleasure6.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="8">
		                                        <img src="image/gallery/pleasure7.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="9">
		                                        <img src="image/gallery/pleasure8.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="10">
		                                        <img src="image/gallery/pleasure9.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="11">
		                                        <img src="image/gallery/pleasure10.jpg" alt="игра"></div>
		                                    
		                                    <div class="item" data-slide-number="12">
		                                        <img src="image/gallery/pleasure11.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="13">
		                                        <img src="image/gallery/pleasure12.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="14">
		                                        <img src="image/gallery/pleasure13.jpg" alt="игра"></div>

		                                    <div class="item" data-slide-number="15">
		                                        <img src="image/gallery/pleasure14.jpg" alt="игра"></div>
		                                </div>
		                                <!-- Carousel nav -->
		                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		                                    <span class="glyphicon glyphicon-chevron-left"></span>
		                                </a>
		                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		                                    <span class="glyphicon glyphicon-chevron-right"></span>
		                                </a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--/Slider-->
		        </div>

		    </div>
		</div>
</div>
