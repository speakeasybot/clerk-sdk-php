<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpsertTemplateRequestBody
{
    /**
     * The user-friendly name of the template
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The email subject.
     *
     * Applicable only to email templates.
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * The editor markup used to generate the body of the template
     *
     * @var ?string $markup
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('markup')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $markup = null;

    /**
     * The template body before variable interpolation
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * Whether Clerk should deliver emails or SMS messages based on the current template
     *
     * @var ?bool $deliveredByClerk
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('delivered_by_clerk')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deliveredByClerk = null;

    /**
     * The local part of the From email address that will be used for emails.
     *
     * For example, in the address 'hello@example.com', the local part is 'hello'.
     * Applicable only to email templates.
     *
     * @var ?string $fromEmailName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from_email_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $fromEmailName = null;

    /**
     * The local part of the Reply To email address that will be used for emails.
     *
     * For example, in the address 'hello@example.com', the local part is 'hello'.
     * Applicable only to email templates.
     *
     * @var ?string $replyToEmailName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reply_to_email_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $replyToEmailName = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $body
     * @param  ?string  $fromEmailName
     * @param  ?string  $replyToEmailName
     * @param  ?string  $subject
     * @param  ?string  $markup
     * @param  ?bool  $deliveredByClerk
     */
    public function __construct(?string $name = null, ?string $body = null, ?string $fromEmailName = null, ?string $replyToEmailName = null, ?string $subject = null, ?string $markup = null, ?bool $deliveredByClerk = null)
    {
        $this->name = $name;
        $this->body = $body;
        $this->fromEmailName = $fromEmailName;
        $this->replyToEmailName = $replyToEmailName;
        $this->subject = $subject;
        $this->markup = $markup;
        $this->deliveredByClerk = $deliveredByClerk;
    }
}