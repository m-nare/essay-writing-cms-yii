<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Steps;
use app\models\Rlfuser;

class CmsController extends controller
{
  public function actionIndex()
  {
  	  $data['steps'] = Steps::getData() ; 
  	  $data['users'] = Rlfuser::getData() ; 
      return $this->render('index', $data) ;
  }

}

?>