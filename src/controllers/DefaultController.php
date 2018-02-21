<?php

namespace yozh\taxonomy\controllers;

use yozh\taxonomy\models\DefaultModel;
use yii\filters\AccessControl;
use yozh\crud\controllers\DefaultController as Controller;

use yozh\taxonomy\AssetsBundle;

class DefaultController extends Controller
{
	
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => [ '@' ],
					],
				],
			],
		];
	}
	
	public function actionIndex()
	{
		AssetsBundle::register( $this->view );
		return $this->render( 'index', [
		] );
	}
	
}
