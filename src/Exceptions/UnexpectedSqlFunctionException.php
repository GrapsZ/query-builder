<?php
namespace Girgias\QueryBuilder\Exceptions;

use Throwable;
use UnexpectedValueException;

/**
 * Class UndefinedSqlFunctionException
 * @package Girgias\QueryBuilder\Exceptions
 */
class UnexpectedSqlFunctionException extends UnexpectedValueException
{
    /**
     * UndefinedSqlFunctionException constructor.
     * @param string $clause
     * @param string $function
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $clause, string $function, int $code = 0, ?Throwable $previous = null)
    {
        $message = "Aggregation function `{$function}` used in {$clause} clause is invalid or unsupported.";
        parent::__construct($message, $code, $previous);
    }
}
