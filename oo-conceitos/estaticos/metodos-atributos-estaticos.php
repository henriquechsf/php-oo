<?php

class Html {
    public static $mainTag = '<html>';
    const END_TAG = '</html>';

    public static function openTagHtml() {
        // self -> usado para chamar atributos estaticos da classe
        return self::$mainTag;
    }

    public static function endTagHtml() {
        return self::END_TAG;
    }
}

// metodos estaticos não precisam de instancia, é acessado direto da classe
print Html::openTagHtml();
print "\n";
print Html::endTagHtml();
print "\n";
print Html::$mainTag;
print Html::END_TAG;