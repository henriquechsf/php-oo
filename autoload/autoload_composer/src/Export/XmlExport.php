<?php
namespace Code\Export;

// importa a interface pra usar no implements
use Code\Export\Contract\Export;

class XmlExport implements Export
{
    public function doExport() {
        return 'Xml exported';
    }
}