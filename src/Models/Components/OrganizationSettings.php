<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


/** OrganizationSettings - Success */
class OrganizationSettings
{
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var OrganizationSettingsObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\OrganizationSettingsObject')]
    public OrganizationSettingsObject $object;

    /**
     *
     * @var bool $enabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enabled')]
    public bool $enabled;

    /**
     *
     * @var int $maxAllowedMemberships
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_memberships')]
    public int $maxAllowedMemberships;

    /**
     *
     * @var ?int $maxAllowedRoles
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_roles')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxAllowedRoles = null;

    /**
     *
     * @var ?int $maxAllowedPermissions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_permissions')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxAllowedPermissions = null;

    /**
     * The role key that a user will be assigned after creating an organization.
     *
     * @var string $creatorRole
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creator_role')]
    public string $creatorRole;

    /**
     * The default for whether an admin can delete an organization with the Frontend API.
     *
     * @var bool $adminDeleteEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin_delete_enabled')]
    public bool $adminDeleteEnabled;

    /**
     *
     * @var bool $domainsEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domains_enabled')]
    public bool $domainsEnabled;

    /**
     * $domainsEnrollmentModes
     *
     * @var array<DomainsEnrollmentModes> $domainsEnrollmentModes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domains_enrollment_modes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Clerk\Backend\Models\Components\DomainsEnrollmentModes>')]
    public array $domainsEnrollmentModes;

    /**
     * The role key that it will be used in order to create an organization invitation or suggestion.
     *
     * @var string $domainsDefaultRole
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domains_default_role')]
    public string $domainsDefaultRole;

    /**
     * @param  OrganizationSettingsObject  $object
     * @param  bool  $enabled
     * @param  int  $maxAllowedMemberships
     * @param  string  $creatorRole
     * @param  bool  $adminDeleteEnabled
     * @param  bool  $domainsEnabled
     * @param  array<DomainsEnrollmentModes>  $domainsEnrollmentModes
     * @param  string  $domainsDefaultRole
     * @param  ?int  $maxAllowedRoles
     * @param  ?int  $maxAllowedPermissions
     */
    public function __construct(OrganizationSettingsObject $object, bool $enabled, int $maxAllowedMemberships, string $creatorRole, bool $adminDeleteEnabled, bool $domainsEnabled, array $domainsEnrollmentModes, string $domainsDefaultRole, ?int $maxAllowedRoles = null, ?int $maxAllowedPermissions = null)
    {
        $this->object = $object;
        $this->enabled = $enabled;
        $this->maxAllowedMemberships = $maxAllowedMemberships;
        $this->creatorRole = $creatorRole;
        $this->adminDeleteEnabled = $adminDeleteEnabled;
        $this->domainsEnabled = $domainsEnabled;
        $this->domainsEnrollmentModes = $domainsEnrollmentModes;
        $this->domainsDefaultRole = $domainsDefaultRole;
        $this->maxAllowedRoles = $maxAllowedRoles;
        $this->maxAllowedPermissions = $maxAllowedPermissions;
    }
}