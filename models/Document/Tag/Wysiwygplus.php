<?php

namespace Document\Tag;

use Document\Tag as DocumentTag;

class Wysiwygplus extends DocumentTag\Wysiwyg {
    public function getType() {
        return "wysiwygplus";
    }

    public function frontend() {
        if($this->getView()->editmode) {
            echo '<script type="text/javascript" src="/website/static/js/document/tag/wysiwygplus.js"></script>';
        }

        parent::frontend();
    }
}