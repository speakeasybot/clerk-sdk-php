<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class UpdateOrganizationMembershipMetadataRequest
{
    /**
     * The ID of the organization the membership belongs to
     *
     * @var string $organizationId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organization_id')]
    public string $organizationId;

    /**
     * The ID of the user that this membership belongs to
     *
     * @var string $userId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=user_id')]
    public string $userId;

    /**
     *
     * @var UpdateOrganizationMembershipMetadataRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public UpdateOrganizationMembershipMetadataRequestBody $requestBody;

    /**
     * @param  string  $organizationId
     * @param  string  $userId
     * @param  UpdateOrganizationMembershipMetadataRequestBody  $requestBody
     */
    public function __construct(string $organizationId, string $userId, UpdateOrganizationMembershipMetadataRequestBody $requestBody)
    {
        $this->organizationId = $organizationId;
        $this->userId = $userId;
        $this->requestBody = $requestBody;
    }
}