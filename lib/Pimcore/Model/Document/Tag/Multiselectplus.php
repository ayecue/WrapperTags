<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Multiselectplus extends PimcoreModel\Document\Tag\Multiselect {
	public function getType() {
        return "multiselectplus";
    }
}