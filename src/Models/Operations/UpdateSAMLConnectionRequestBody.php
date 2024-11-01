<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateSAMLConnectionRequestBody
{
    /**
     * The name of the new SAML Connection
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The domain to use for the new SAML Connection
     *
     * @var ?string $domain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domain')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $domain = null;

    /**
     * The entity id as provided by the IdP
     *
     * @var ?string $idpEntityId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('idp_entity_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $idpEntityId = null;

    /**
     * The SSO url as provided by the IdP
     *
     * @var ?string $idpSsoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('idp_sso_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $idpSsoUrl = null;

    /**
     * The x509 certificated as provided by the IdP
     *
     * @var ?string $idpCertificate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('idp_certificate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $idpCertificate = null;

    /**
     * The URL which serves the IdP metadata. If present, it takes priority over the corresponding individual properties and replaces them
     *
     * @var ?string $idpMetadataUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('idp_metadata_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $idpMetadataUrl = null;

    /**
     * The XML content of the IdP metadata file. If present, it takes priority over the corresponding individual properties
     *
     * @var ?string $idpMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('idp_metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $idpMetadata = null;

    /**
     * Define the atrtibute name mapping between Identity Provider and Clerk's user properties
     *
     * @var ?UpdateSAMLConnectionAttributeMapping $attributeMapping
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attribute_mapping')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Operations\UpdateSAMLConnectionAttributeMapping|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateSAMLConnectionAttributeMapping $attributeMapping = null;

    /**
     * Activate or de-activate the SAML Connection
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * Controls whether to update the user's attributes in each sign-in
     *
     * @var ?bool $syncUserAttributes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sync_user_attributes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $syncUserAttributes = null;

    /**
     * Allow users with an email address subdomain to use this connection in order to authenticate
     *
     * @var ?bool $allowSubdomains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_subdomains')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowSubdomains = null;

    /**
     * Enable or deactivate IdP-initiated flows
     *
     * @var ?bool $allowIdpInitiated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_idp_initiated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowIdpInitiated = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $domain
     * @param  ?string  $idpEntityId
     * @param  ?string  $idpSsoUrl
     * @param  ?string  $idpCertificate
     * @param  ?string  $idpMetadataUrl
     * @param  ?string  $idpMetadata
     * @param  ?UpdateSAMLConnectionAttributeMapping  $attributeMapping
     * @param  ?bool  $active
     * @param  ?bool  $syncUserAttributes
     * @param  ?bool  $allowSubdomains
     * @param  ?bool  $allowIdpInitiated
     */
    public function __construct(?string $name = null, ?string $domain = null, ?string $idpEntityId = null, ?string $idpSsoUrl = null, ?string $idpCertificate = null, ?string $idpMetadataUrl = null, ?string $idpMetadata = null, ?UpdateSAMLConnectionAttributeMapping $attributeMapping = null, ?bool $active = null, ?bool $syncUserAttributes = null, ?bool $allowSubdomains = null, ?bool $allowIdpInitiated = null)
    {
        $this->name = $name;
        $this->domain = $domain;
        $this->idpEntityId = $idpEntityId;
        $this->idpSsoUrl = $idpSsoUrl;
        $this->idpCertificate = $idpCertificate;
        $this->idpMetadataUrl = $idpMetadataUrl;
        $this->idpMetadata = $idpMetadata;
        $this->attributeMapping = $attributeMapping;
        $this->active = $active;
        $this->syncUserAttributes = $syncUserAttributes;
        $this->allowSubdomains = $allowSubdomains;
        $this->allowIdpInitiated = $allowIdpInitiated;
    }
}