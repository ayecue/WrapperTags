<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Videoplus extends DocumentTag\Video {
	public function getType(){
		return "videoplus";
	}
}