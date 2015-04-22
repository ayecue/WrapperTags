<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Multihrefplus extends PimcoreModel\Document\Tag\Multihref {
	public function getType() {
		return "multihrefplus";
	}
}