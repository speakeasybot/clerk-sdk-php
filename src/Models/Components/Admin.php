<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class Admin
{
    /**
     *
     * @var AdminVerificationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\AdminVerificationStatus')]
    public AdminVerificationStatus $status;

    /**
     *
     * @var VerificationStrategy $strategy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('strategy')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\VerificationStrategy')]
    public VerificationStrategy $strategy;

    /**
     *
     * @var ?int $attempts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attempts')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $attempts = null;

    /**
     *
     * @var ?int $expireAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expire_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $expireAt = null;

    /**
     * @param  AdminVerificationStatus  $status
     * @param  VerificationStrategy  $strategy
     * @param  ?int  $attempts
     * @param  ?int  $expireAt
     */
    public function __construct(AdminVerificationStatus $status, VerificationStrategy $strategy, ?int $attempts = null, ?int $expireAt = null)
    {
        $this->status = $status;
        $this->strategy = $strategy;
        $this->attempts = $attempts;
        $this->expireAt = $expireAt;
    }
}