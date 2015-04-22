<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Numericplus extends PimcoreModel\Document\Tag\Numeric {
	public function getType() {
		return "numericplus";
	}
}