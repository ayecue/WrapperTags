<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Inputplus extends PimcoreModel\Document\Tag\Input {
	public function getType() {
		return "inputplus";
	}
}