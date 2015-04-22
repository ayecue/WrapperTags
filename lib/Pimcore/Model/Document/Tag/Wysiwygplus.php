<?php

namespace Pimcore\Model\Document\Tag;

use Pimcore\Model as PimcoreModel;

class Wysiwygplus extends PimcoreModel\Document\Tag\Wysiwyg {
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