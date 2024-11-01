<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class CreateOAuthApplicationRequestBody
{
    /**
     * The name of the new OAuth application
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The callback URL of the new OAuth application
     *
     * @var string $callbackUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('callback_url')]
    public string $callbackUrl;

    /**
     * Define the allowed scopes for the new OAuth applications that dictate the user payload of the OAuth user info endpoint. Available scopes are `profile`, `email`, `public_metadata`, `private_metadata`. Provide the requested scopes as a string, separated by spaces.
     *
     * @var ?string $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $scopes = null;

    /**
     * If true, this client is public and cannot securely store a client secret.
     *
     * Only the authorization code flow with proof key for code exchange (PKCE) may be used.
     * Public clients cannot be updated to be confidential clients, and vice versa.
     *
     * @var ?bool $public
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $public = null;

    /**
     * @param  string  $name
     * @param  string  $callbackUrl
     * @param  ?string  $scopes
     * @param  ?bool  $public
     */
    public function __construct(string $name, string $callbackUrl, ?bool $public = null, ?string $scopes = 'profile email')
    {
        $this->name = $name;
        $this->callbackUrl = $callbackUrl;
        $this->scopes = $scopes;
        $this->public = $public;
    }
}