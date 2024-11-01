<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class CreateOrganizationRequestBody
{
    /**
     * The name of the new organization
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The ID of the User who will become the administrator for the new organization
     *
     * @var string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    public string $createdBy;

    /**
     * Metadata saved on the organization, accessible only from the Backend API
     *
     * @var ?CreateOrganizationPrivateMetadata $privateMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('private_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Operations\CreateOrganizationPrivateMetadata|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateOrganizationPrivateMetadata $privateMetadata = null;

    /**
     * Metadata saved on the organization, read-only from the Frontend API and fully accessible (read/write) from the Backend API
     *
     * @var ?CreateOrganizationPublicMetadata $publicMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Operations\CreateOrganizationPublicMetadata|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateOrganizationPublicMetadata $publicMetadata = null;

    /**
     * A slug for the new organization.
     *
     * Can contain only lowercase alphanumeric characters and the dash "-".
     * Must be unique for the instance.
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     * The maximum number of memberships allowed for this organization
     *
     * @var ?int $maxAllowedMemberships
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_memberships')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxAllowedMemberships = null;

    /**
     * @param  string  $name
     * @param  string  $createdBy
     * @param  ?CreateOrganizationPrivateMetadata  $privateMetadata
     * @param  ?CreateOrganizationPublicMetadata  $publicMetadata
     * @param  ?string  $slug
     * @param  ?int  $maxAllowedMemberships
     */
    public function __construct(string $name, string $createdBy, ?CreateOrganizationPrivateMetadata $privateMetadata = null, ?CreateOrganizationPublicMetadata $publicMetadata = null, ?string $slug = null, ?int $maxAllowedMemberships = null)
    {
        $this->name = $name;
        $this->createdBy = $createdBy;
        $this->privateMetadata = $privateMetadata;
        $this->publicMetadata = $publicMetadata;
        $this->slug = $slug;
        $this->maxAllowedMemberships = $maxAllowedMemberships;
    }
}