<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Hrefplus extends PimcoreModel\Document\Tag\Href {
	public function getType() {
		return "hrefplus";
	}
}