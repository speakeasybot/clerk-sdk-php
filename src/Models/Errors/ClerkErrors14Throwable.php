<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

class ClerkErrors14Throwable extends \RuntimeException
{
    public ClerkErrors14 $container;

    public function __construct(string $message, int $statusCode, ClerkErrors14 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}