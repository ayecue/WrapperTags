<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Multiselectplus extends DocumentTag\Multiselect {
	public function getType() {
        return "multiselectplus";
    }
}