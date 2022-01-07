<?php

namespace Uvodo\Menv\Exceptions;

use Throwable;

/** @package Uvodo\Menv\Exceptions */
class InvalidEntryException extends Exception
{
    /**
     * @param string $line 
     * @param int $code 
     * @param Throwable|null $previous 
     * @return void 
     */
    public function __construct(
        string $line,
        int $code = 0,
        Throwable $previous = null
    ) {
        $msg = sprintf('<%s> is not a valid entry line.', $line);
        parent::__construct($msg, $code, $previous);
    }
}
