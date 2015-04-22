<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Blockplus extends PimcoreModel\Document\Tag\Block {
	public function getType() {
		return "blockplus";
	}
}