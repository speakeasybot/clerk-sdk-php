<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class GetSAMLConnectionRequest
{
    /**
     * The ID of the SAML Connection
     *
     * @var string $samlConnectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=saml_connection_id')]
    public string $samlConnectionId;

    /**
     * @param  string  $samlConnectionId
     */
    public function __construct(string $samlConnectionId)
    {
        $this->samlConnectionId = $samlConnectionId;
    }
}