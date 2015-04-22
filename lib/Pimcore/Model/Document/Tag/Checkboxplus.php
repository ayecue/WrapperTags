<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Checkboxplus extends PimcoreModel\Document\Tag\Checkbox {
	public function getType() {
		return "checkboxplus";
	}
}