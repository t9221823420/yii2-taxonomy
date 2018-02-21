<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 19.02.2018
 * Time: 17:39
 */

namespace yozh\taxonomy\components;

class TreeViewWidget extends \kartik\tree\TreeView
{
	public $mainTemplate = <<< HTML
<div class="row">
    <div class="col-sm-6">
        {wrapper}
    </div>
    <div class="col-sm-6">
        {detail}
    </div>
</div>
HTML;

}