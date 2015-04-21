<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Hrefplus extends DocumentTag\Href {
	public function getType() {
		return "hrefplus";
	}
}