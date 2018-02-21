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
		//$this->_initQuery();
		return parent::all( $db );
	}
	
	protected function _initQuery()
	{
		
		if( isset( $this->where['id'] ) ) {
			$this->where['taxonomy.id'] = $this->where['id'];
			unset( $this->where['id'] );
		}

		return $this->select( '*' )
		            ->leftJoin( 'tree', 'taxonomy.tree_id = tree.id' )
		            ->addOrderBy( 'root, lft' )
			;
	}
	
	/**
	 * {@inheritdoc}
	 * @return HelpdeskReply|array|null
	 */
	public function one( $db = null )
	{
		//$this->_initQuery();
		return parent::one( $db );
	}
}
