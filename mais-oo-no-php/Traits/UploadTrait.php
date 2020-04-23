<?php
// reutilização de comportamento em várias classes

trait UploadTrait
{
    public function doUpload($file) {
        return true;
    }
}

class Product {
    use UploadTrait;
}

class Profile {
    use UploadTrait;
}

$product = new Product();
print $product->doUpload('arquivo...');

print "\n";

$profile = new Profile();
print $profile->doUpload('arquivo2...');