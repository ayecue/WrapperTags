<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Snippetplus extends PimcoreModel\Document\Tag\Snippet {
	public function getType() {
		return "snippetplus";
	}
}