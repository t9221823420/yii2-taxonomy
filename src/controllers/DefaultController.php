<?php

namespace yozh\taxonomy\controllers;

use yozh\taxonomy\models\DefaultModel;
use yii\filters\AccessControl;
use yozh\crud\controllers\DefaultController as Controller;

use yozh\taxonomy\AssetBundle;

class DefaultController extends Controller
{
	
	public function actionIndex()
	{
		AssetBundle::register( $this->view );
		
		return $this->render( 'index', [] );
	}
	
}
