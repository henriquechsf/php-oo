<?php

require __DIR__ . '/vendor/autoload.php';

try {
    $sum = new \Code\Sum();
    print $sum->doSum(10, 30);
} catch (\Error $e) {
    print $e->getMessage();
} catch (\Exception $e) {
    print $e->getMessage();
} finally {
    print "\n Finally...";
}
