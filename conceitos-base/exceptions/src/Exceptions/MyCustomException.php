<?php
namespace Code\Exceptions;

use Throwable;

class MyCustomException extends \Exception
{
    public function __construct($message = "My custom message", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}