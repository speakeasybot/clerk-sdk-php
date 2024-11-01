<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class UpdatePhoneNumberRequest
{
    /**
     * The ID of the phone number to update
     *
     * @var string $phoneNumberId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=phone_number_id')]
    public string $phoneNumberId;

    /**
     *
     * @var ?UpdatePhoneNumberRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdatePhoneNumberRequestBody $requestBody = null;

    /**
     * @param  string  $phoneNumberId
     * @param  ?UpdatePhoneNumberRequestBody  $requestBody
     */
    public function __construct(string $phoneNumberId, ?UpdatePhoneNumberRequestBody $requestBody = null)
    {
        $this->phoneNumberId = $phoneNumberId;
        $this->requestBody = $requestBody;
    }
}