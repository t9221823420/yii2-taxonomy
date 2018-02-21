<?php

namespace yozh\taxonomy\controllers;

use yozh\taxonomy\models\DefaultModel;
use yii\filters\AccessControl;
use yii\web\Controller;

use yozh\taxonomy\AssetsBundle;

class DefaultController extends Controller
{
	
	protected static function primaryModel()
	{
		return DefaultModel::className();
	}
	
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
		return $this->traitActionIndex();
	}
	
}
