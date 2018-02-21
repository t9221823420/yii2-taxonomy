<?php

namespace yozh\taxonomy\models;

/**
 * This is the ActiveQuery class for [[HelpdeskReply]].
 *
 * @see HelpdeskReply
 */
class TaxonomyQuery extends \kartik\tree\models\TreeQuery
{
	/**
	 * {@inheritdoc}
	 * @return HelpdeskReply[]|array
	 */
	public function all( $db = null )
	{
		$this->_initQuery();
		return parent::all( $db );
	}
	
	protected function _initQuery()
	{
		return $this->addOrderBy( 'root, lft' );
	}
	
	/**
	 * {@inheritdoc}
	 * @return HelpdeskReply|array|null
	 */
	public function one( $db = null )
	{
		$this->_initQuery();
		return parent::one( $db );
	}
}
