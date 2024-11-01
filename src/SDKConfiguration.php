<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Components\Security $security = null;

    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = 'v1';

    public string $sdkVersion = '0.2.2';

    public string $genVersion = '2.445.1';

    public string $userAgent = 'speakeasy-sdk/php 0.2.2 2.445.1 v1 clerk/backend-php';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        if (isset(ClerkBackend::SERVERS[$this->serverIndex])) {
            return ClerkBackend::SERVERS[$this->serverIndex];
        } else {
            throw new \OutOfBoundsException('Server index '.$this->serverIndex.' is out of bounds');
        }
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Components\Security(
                bearerAuth: $this->securitySource->call($this)
            );

            return $security;
        } else {
            return $this->security;
        }
    }
}