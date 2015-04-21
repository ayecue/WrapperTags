<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Numericplus extends DocumentTag\Numeric {
	public function getType() {
		return "numericplus";
	}
}