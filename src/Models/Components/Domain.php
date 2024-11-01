<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class Domain
{
    /**
     *
     * @var DomainObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\DomainObject')]
    public DomainObject $object;

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
     * @var bool $isSatellite
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_satellite')]
    public bool $isSatellite;

    /**
     *
     * @var string $frontendApiUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('frontend_api_url')]
    public string $frontendApiUrl;

    /**
     * Null for satellite domains.
     *
     *
     *
     * @var ?string $accountsPortalUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounts_portal_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountsPortalUrl = null;

    /**
     *
     * @var ?string $proxyUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $proxyUrl = null;

    /**
     *
     * @var string $developmentOrigin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('development_origin')]
    public string $developmentOrigin;

    /**
     * $cnameTargets
     *
     * @var ?array<CNameTarget> $cnameTargets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cname_targets')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Clerk\Backend\Models\Components\CNameTarget>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $cnameTargets = null;

    /**
     * @param  DomainObject  $object
     * @param  string  $id
     * @param  string  $name
     * @param  bool  $isSatellite
     * @param  string  $frontendApiUrl
     * @param  string  $developmentOrigin
     * @param  ?string  $accountsPortalUrl
     * @param  ?string  $proxyUrl
     * @param  ?array<CNameTarget>  $cnameTargets
     */
    public function __construct(DomainObject $object, string $id, string $name, bool $isSatellite, string $frontendApiUrl, string $developmentOrigin, ?string $accountsPortalUrl = null, ?string $proxyUrl = null, ?array $cnameTargets = null)
    {
        $this->object = $object;
        $this->id = $id;
        $this->name = $name;
        $this->isSatellite = $isSatellite;
        $this->frontendApiUrl = $frontendApiUrl;
        $this->developmentOrigin = $developmentOrigin;
        $this->accountsPortalUrl = $accountsPortalUrl;
        $this->proxyUrl = $proxyUrl;
        $this->cnameTargets = $cnameTargets;
    }
}