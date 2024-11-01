<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

class ClerkErrors66Throwable extends \RuntimeException
{
    public ClerkErrors66 $container;

    public function __construct(string $message, int $statusCode, ClerkErrors66 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}