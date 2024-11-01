<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

use Clerk\Backend\Models\Components;
use Clerk\Backend\Utils;
/** ClerkErrors38 - Payment required */
class ClerkErrors38
{
    /**
     * $errors
     *
     * @var array<Components\ClerkError> $errors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Clerk\Backend\Models\Components\ClerkError>')]
    public array $errors;

    /**
     *
     * @var ?Meta $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Errors\Meta|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Meta $meta = null;

    /**
     * @param  array<Components\ClerkError>  $errors
     * @param  ?Meta  $meta
     */
    public function __construct(array $errors, ?Meta $meta = null)
    {
        $this->errors = $errors;
        $this->meta = $meta;
    }

    public function toException(): ClerkErrors38Throwable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new ClerkErrors38Throwable($message, (int) $code, $this);
    }
}