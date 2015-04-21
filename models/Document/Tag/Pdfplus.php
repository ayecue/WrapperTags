<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Pdfplus extends DocumentTag\Pdf {
	public function getType(){
		return "pdfplus";
	}
}