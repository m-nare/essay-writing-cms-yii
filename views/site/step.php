<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


?>






<!-- Yii::$app->request->getBaseUrl(true)  !-->
<style>

    body
    {
        margin:0;
        padding:0;
        background:#46959c;
    }
    header
    {
        text-align:center;
        background:#e91c38;
        color:#ffffff;
        padding-top:30px;
        min-height:70px;
        border-bottom:#2f4255 3px solid;
    }
    img.display {
    display:block;
    margin-left: auto;
    margin-right: auto;
}
    .center {
    margin-left: auto;
    margin-right: auto;
    display: block
    }
   

    .box
    {
        margin-top:20px;
        float:center;
        color:#fff;
        width:80%;
        padding:30px;
        text-align:justify;
        text-justify:inter-word;
        margin-left: auto;
        margin-right: auto;
        display:block;
        border:#fff 3px solid;
        background:#3a5169;
    }



</style>
<header>
    <h1><?= $step['step_id'].' - '.$step['step_header'] ;  ?></h1>
</header>



<img class="display" src="img/cardShape.png">



<br><br>

<video class="box" width="640" height="480" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
</video>

<br>


    <div class="box">
        <h3><?= $step['description'] ; ?> </h3>
    </div>

 


    










