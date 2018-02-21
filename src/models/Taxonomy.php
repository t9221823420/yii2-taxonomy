<?php
namespace yozh\taxonomy\models;

use Yii;

class Taxonomy extends \kartik\tree\models\Tree
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'taxonomy';
	}
	
	public static function find()
	{
		return new TaxonomyQuery( get_called_class() );
	}
	
	
	/**
	 * Override isDisabled method if you need as shown in the
	 * example below. You can override similarly other methods
	 * like isActive, isMovable etc.
	 */
	public function isDisabled()
	{
		/*
		if (Yii::$app->user->username !== 'admin') {
			return true;
		}
		*/
		
		return parent::isDisabled();
	}
	
	public function attributes()
	{
		$foo = static::getTableSchema()->columns;
		$bar = parent::getTableSchema()->columns;
		
		return array_keys( static::getTableSchema()->columns);
	}
	
}