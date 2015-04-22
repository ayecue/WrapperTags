<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Dateplus extends PimcoreModel\Document\Tag\Date {
	public function getType() {
		return "dateplus";
	}
}