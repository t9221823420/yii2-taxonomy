<?php

namespace yozh\taxonomy;

use yii\base\Module as BaseModule;



class Module extends BaseModule
{

	const MODULE_ID = 'taxonomy';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
