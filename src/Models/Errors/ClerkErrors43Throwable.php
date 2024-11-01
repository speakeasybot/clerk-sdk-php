<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

class ClerkErrors43Throwable extends \RuntimeException
{
    public ClerkErrors43 $container;

    public function __construct(string $message, int $statusCode, ClerkErrors43 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}