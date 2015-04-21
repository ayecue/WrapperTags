<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Multihrefplus extends DocumentTag\Multihref {
	public function getType() {
		return "multihrefplus";
	}
}