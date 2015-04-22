<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Videoplus extends PimcoreModel\Document\Tag\Video {
	public function getType(){
		return "videoplus";
	}
}