<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Areaplus extends PimcoreModel\Document\Tag\Area {
	public function getType() {
		return "areaplus";
	}
}