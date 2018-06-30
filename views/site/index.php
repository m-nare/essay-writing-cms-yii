<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\RlfAsset;

 RlfAsset::register($this);


$this->title = 'Royal Literary Fund';
?>


<?php 

use yii\helpers\Url; ?>



<!-- Yii::$app->request->getBaseUrl(true)  !-->
<img class="display" src="img/logo_2.png">


<br><br>






<!-- Link Swiper's CSS -->
 

 <!-- Demo styles -->
<style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #3A5169;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        color:#3A5169;
        background: #cde0dc;

        height:300px;
        width:80%;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    hr {
     height: 1px;
    color: #123455;
    background-color: #123455;
    border: none;
    }
</style>
</head>
<body>
 <!-- Swiper -->
 <div class="swiper-container">
     <div class="swiper-wrapper">
         <?php foreach($steps as $step) : ?>
            <div class="swiper-slide">
                <div class="caption">
                    <h3><?php echo $step['step_id']; ?></h3><hr>
                    <h3><?php echo $step['step_header']; ?></h3><br><br>
                    <?= Html::a('Enter', ['step', 'id' => $step->step_id], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
         <?php endforeach; ?>

     </div>
     <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
     <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
 </div>

 <!-- Swiper JS -->
 

 <!-- Initialize Swiper -->
  <script>
      var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
