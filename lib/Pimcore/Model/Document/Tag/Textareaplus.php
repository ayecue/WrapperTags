<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Textareaplus extends PimcoreModel\Document\Tag\Textarea {
	public function getType() {
		return "textareaplus";
	}
}