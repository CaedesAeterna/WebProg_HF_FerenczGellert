<?php

namespace labor_5\University;

class ThereAreStillStudentsException extends \Exception
{
    public function __construct($message = "There are still students in this" , $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}