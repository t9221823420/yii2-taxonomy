<?php

use yii\db\Migration;

include( \Yii::getAlias('@kartik/tree/migrations/m230416_200116_tree.php', false)  );

/**
 * Handles the creation of table `taxonomy`.
 */
class m180219_120209_create_taxonomy_table extends m230416_200116_tree
{
	const TABLE_NAME = '{{%taxonomy}}';
}
