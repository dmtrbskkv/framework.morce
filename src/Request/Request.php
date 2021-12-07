<?php

namespace Morce\Request;

use Morce\Middlewares\MiddlewareExecutable;

/**
 * HTTP Request
 */
class Request implements MiddlewareExecutable
{
    use RequestQuery;
    use RequestMiddleware;

    /**
     * Get instance of object with private constructor
     *
     * @return Request
     */
    public static function prepare(): Request
    {
        return new self();
    }
}