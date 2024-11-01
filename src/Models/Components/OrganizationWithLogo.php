<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class OrganizationWithLogo
{
    /**
     *
     * @var OrganizationWithLogoObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\OrganizationWithLogoObject')]
    public OrganizationWithLogoObject $object;

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
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var ?int $membersCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('members_count')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $membersCount = null;

    /**
     *
     * @var int $maxAllowedMemberships
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_memberships')]
    public int $maxAllowedMemberships;

    /**
     *
     * @var ?bool $adminDeleteEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin_delete_enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $adminDeleteEnabled = null;

    /**
     *
     * @var OrganizationWithLogoPublicMetadata $publicMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\OrganizationWithLogoPublicMetadata')]
    public OrganizationWithLogoPublicMetadata $publicMetadata;

    /**
     *
     * @var OrganizationWithLogoPrivateMetadata $privateMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('private_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\OrganizationWithLogoPrivateMetadata')]
    public OrganizationWithLogoPrivateMetadata $privateMetadata;

    /**
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

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
     *
     * @var ?string $logoUrl
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('logo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $logoUrl = null;

    /**
     *
     * @var string $imageUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image_url')]
    public string $imageUrl;

    /**
     *
     * @var ?bool $hasImage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasImage = null;

    /**
     * @param  OrganizationWithLogoObject  $object
     * @param  string  $id
     * @param  string  $name
     * @param  string  $slug
     * @param  int  $maxAllowedMemberships
     * @param  OrganizationWithLogoPublicMetadata  $publicMetadata
     * @param  OrganizationWithLogoPrivateMetadata  $privateMetadata
     * @param  int  $createdAt
     * @param  int  $updatedAt
     * @param  string  $imageUrl
     * @param  ?bool  $adminDeleteEnabled
     * @param  ?string  $createdBy
     * @param  ?string  $logoUrl
     * @param  ?bool  $hasImage
     * @param  ?int  $membersCount
     */
    public function __construct(OrganizationWithLogoObject $object, string $id, string $name, string $slug, int $maxAllowedMemberships, OrganizationWithLogoPublicMetadata $publicMetadata, OrganizationWithLogoPrivateMetadata $privateMetadata, int $createdAt, int $updatedAt, string $imageUrl, ?bool $adminDeleteEnabled = null, ?string $createdBy = null, ?string $logoUrl = null, ?bool $hasImage = null, ?int $membersCount = null)
    {
        $this->object = $object;
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->maxAllowedMemberships = $maxAllowedMemberships;
        $this->publicMetadata = $publicMetadata;
        $this->privateMetadata = $privateMetadata;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->imageUrl = $imageUrl;
        $this->adminDeleteEnabled = $adminDeleteEnabled;
        $this->createdBy = $createdBy;
        $this->logoUrl = $logoUrl;
        $this->hasImage = $hasImage;
        $this->membersCount = $membersCount;
    }
}