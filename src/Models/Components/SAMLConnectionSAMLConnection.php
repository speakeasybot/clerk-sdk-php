<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class SAMLConnectionSAMLConnection
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $domain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     *
     * @var bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    public bool $active;

    /**
     *
     * @var string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    public string $provider;

    /**
     *
     * @var bool $syncUserAttributes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sync_user_attributes')]
    public bool $syncUserAttributes;

    /**
     *
     * @var ?bool $allowSubdomains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_subdomains')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowSubdomains = null;

    /**
     *
     * @var ?bool $allowIdpInitiated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_idp_initiated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowIdpInitiated = null;

    /**
     *
     * @var ?bool $disableAdditionalIdentifications
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disable_additional_identifications')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $disableAdditionalIdentifications = null;

    /**
     * Unix timestamp of creation.
     *
     *
     *
     * @var int $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public int $createdAt;

    /**
     * Unix timestamp of last update.
     *
     *
     *
     * @var int $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public int $updatedAt;

    /**
     * @param  string  $id
     * @param  string  $name
     * @param  string  $domain
     * @param  bool  $active
     * @param  string  $provider
     * @param  bool  $syncUserAttributes
     * @param  int  $createdAt
     * @param  int  $updatedAt
     * @param  ?bool  $allowSubdomains
     * @param  ?bool  $allowIdpInitiated
     * @param  ?bool  $disableAdditionalIdentifications
     */
    public function __construct(string $id, string $name, string $domain, bool $active, string $provider, bool $syncUserAttributes, int $createdAt, int $updatedAt, ?bool $allowSubdomains = null, ?bool $allowIdpInitiated = null, ?bool $disableAdditionalIdentifications = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->domain = $domain;
        $this->active = $active;
        $this->provider = $provider;
        $this->syncUserAttributes = $syncUserAttributes;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->allowSubdomains = $allowSubdomains;
        $this->allowIdpInitiated = $allowIdpInitiated;
        $this->disableAdditionalIdentifications = $disableAdditionalIdentifications;
    }
}