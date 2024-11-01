<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Models\Components;
class ListInstanceOrganizationInvitationsResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * A list of organization invitations with public organization data
     *
     * @var ?Components\OrganizationInvitationsWithPublicOrganizationData $organizationInvitationsWithPublicOrganizationData
     */
    public ?Components\OrganizationInvitationsWithPublicOrganizationData $organizationInvitationsWithPublicOrganizationData = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\OrganizationInvitationsWithPublicOrganizationData  $organizationInvitationsWithPublicOrganizationData
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\OrganizationInvitationsWithPublicOrganizationData $organizationInvitationsWithPublicOrganizationData = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->organizationInvitationsWithPublicOrganizationData = $organizationInvitationsWithPublicOrganizationData;
    }
}