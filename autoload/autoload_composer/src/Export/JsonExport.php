<?php
namespace Code\Export;

// importa a interface pra usar no implements
use Code\Export\Contract\Export;

class JsonExport implements Export
{
    public function doExport() {
        return 'Json exported';
    }
}