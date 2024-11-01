<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class Saml
{
    /**
     *
     * @var SAMLVerificationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\SAMLVerificationStatus')]
    public SAMLVerificationStatus $status;

    /**
     *
     * @var SAMLVerificationStrategy $strategy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('strategy')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\SAMLVerificationStrategy')]
    public SAMLVerificationStrategy $strategy;

    /**
     *
     * @var ?string $externalVerificationRedirectUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_verification_redirect_url')]
    public ?string $externalVerificationRedirectUrl;

    /**
     *
     * @var ?SAMLErrorClerkError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\SAMLErrorClerkError')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SAMLErrorClerkError $error = null;

    /**
     *
     * @var int $expireAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expire_at')]
    public int $expireAt;

    /**
     *
     * @var ?int $attempts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attempts')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $attempts = null;

    /**
     * @param  SAMLVerificationStatus  $status
     * @param  SAMLVerificationStrategy  $strategy
     * @param  int  $expireAt
     * @param  ?string  $externalVerificationRedirectUrl
     * @param  ?SAMLErrorClerkError  $error
     * @param  ?int  $attempts
     */
    public function __construct(SAMLVerificationStatus $status, SAMLVerificationStrategy $strategy, int $expireAt, ?string $externalVerificationRedirectUrl = null, ?SAMLErrorClerkError $error = null, ?int $attempts = null)
    {
        $this->status = $status;
        $this->strategy = $strategy;
        $this->expireAt = $expireAt;
        $this->externalVerificationRedirectUrl = $externalVerificationRedirectUrl;
        $this->error = $error;
        $this->attempts = $attempts;
    }
}