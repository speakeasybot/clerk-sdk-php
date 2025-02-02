<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

class ClerkErrors85Throwable extends \RuntimeException
{
    public ClerkErrors85 $container;

    public function __construct(string $message, int $statusCode, ClerkErrors85 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}