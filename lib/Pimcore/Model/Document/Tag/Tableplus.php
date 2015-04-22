<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Tableplus extends PimcoreModel\Document\Tag\Table {
	public function getType() {
		return "tableplus";
	}
}