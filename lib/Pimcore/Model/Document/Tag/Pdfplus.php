<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Pdfplus extends PimcoreModel\Document\Tag\Pdf {
	public function getType(){
		return "pdfplus";
	}
}