<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Imageplus extends PimcoreModel\Document\Tag\Image {
	public function getType() {
		return "imageplus";
	}
}