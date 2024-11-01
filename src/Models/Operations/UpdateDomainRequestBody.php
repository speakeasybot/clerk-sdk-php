<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateDomainRequestBody
{
    /**
     * The new domain name. For development instances, can contain the port,
     *
     * i.e `myhostname:3000`. For production instances, must be a valid FQDN,
     * i.e `mysite.com`. Cannot contain protocol scheme.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The full URL of the proxy that will forward requests to Clerk's Frontend API.
     *
     * Can only be updated for production instances.
     *
     * @var ?string $proxyUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $proxyUrl = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $proxyUrl
     */
    public function __construct(?string $name = null, ?string $proxyUrl = null)
    {
        $this->name = $name;
        $this->proxyUrl = $proxyUrl;
    }
}