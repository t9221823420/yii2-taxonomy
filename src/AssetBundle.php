<?php

namespace yozh\taxonomy;

class AssetBundle extends \yii\web\AssetBundle
{
	
	public $sourcePath = __DIR__ .'/../assets/';
	
	public $css = [
		'css/style.css',
	];
	
	public $publishOptions = [
		'forceCopy'       => true,
	];
}