<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class Web3Signature
{
    /**
     *
     * @var Web3SignatureVerificationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\Web3SignatureVerificationStatus')]
    public Web3SignatureVerificationStatus $status;

    /**
     *
     * @var Web3SignatureVerificationStrategy $strategy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('strategy')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\Web3SignatureVerificationStrategy')]
    public Web3SignatureVerificationStrategy $strategy;

    /**
     *
     * @var Nonce $nonce
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('nonce')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\Nonce')]
    public Nonce $nonce;

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
     * @param  Web3SignatureVerificationStatus  $status
     * @param  Web3SignatureVerificationStrategy  $strategy
     * @param  Nonce  $nonce
     * @param  ?int  $attempts
     * @param  ?int  $expireAt
     */
    public function __construct(Web3SignatureVerificationStatus $status, Web3SignatureVerificationStrategy $strategy, Nonce $nonce, ?int $attempts = null, ?int $expireAt = null)
    {
        $this->status = $status;
        $this->strategy = $strategy;
        $this->nonce = $nonce;
        $this->attempts = $attempts;
        $this->expireAt = $expireAt;
    }
}