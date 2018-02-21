<?php

use yii\helpers\Html;
use yozh\taxonomy\models\Taxonomy;
use yozh\taxonomy\components\TreeViewWidget;
use kartik\icons\Icon;

include '_header.php';

Icon::map($this, Icon::FA);

?>
<div class="<?= "$modelId-$actionId" ?>">

    <h1><?= Html::encode( $this->title ) ?></h1>
	
	<?= TreeViewWidget::widget( [
		// single query fetch to render the tree
		// use the Product model you have in the previous step
		'query'          => Taxonomy::find(),
		'headingOptions' => [ 'label' => 'Categories' ],
		'fontAwesome'    => true,     // optional
		'isAdmin'        => false,         // optional (toggle to enable admin mode)
		'displayValue'   => 1,        // initial display value
		'hideTopRoot'    => true,        // initial display value
		'softDelete'     => true,       // defaults to true
		'cacheSettings'  => [
			'enableCache' => true   // defaults to true
		],
	] ); ?>


</div>
