<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Dateplus extends DocumentTag\Date {
	public function getType() {
		return "dateplus";
	}
}