<?php

namespace Webcom\Amazon\Rest;

/**
 * Class DetailedEndpoint
 * @author Łukasz Wątor
 */
final class Endpoint
{
    protected string $id;
    protected string $name;
    protected string $countryCode;
    protected string $region;
    protected string $domain;
    protected string $mwsEndpoint;
    protected string $imagesEndpoint;
    protected string $sellerCentralEndpoint;
    protected string $sellingPartnerApiEndpoint;
    protected string $sellingPartnerApiSandboxEndpoint;

    /**
     * DetailedEndpoint constructor.
     * @param string $id
     * @param string $name
     * @param string $countryCode
     * @param string $region
     * @param string $domain
     * @param string $mwsEndpoint
     * @param string $imagesEndpoint
     * @param string $sellerCentralEndpoint
     * @param string $sellingPartnerApiEndpoint
     * @param string $sellingPartnerApiSandboxEndpoint
     */
    public function __construct(
        string $id,
        string $name,
        string $countryCode,
        string $region,
        string $domain,
        string $mwsEndpoint,
        string $imagesEndpoint,
        string $sellerCentralEndpoint,
        string $sellingPartnerApiEndpoint,
        string $sellingPartnerApiSandboxEndpoint
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->countryCode = $countryCode;
        $this->region = $region;
        $this->domain = $domain;
        $this->mwsEndpoint = $mwsEndpoint;
        $this->imagesEndpoint = $imagesEndpoint;
        $this->sellerCentralEndpoint = $sellerCentralEndpoint;
        $this->sellingPartnerApiEndpoint = $sellingPartnerApiEndpoint;
        $this->sellingPartnerApiSandboxEndpoint = $sellingPartnerApiSandboxEndpoint;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getMwsEndpoint(): string
    {
        return $this->mwsEndpoint;
    }

    /**
     * @return string
     */
    public function getImagesEndpoint(): string
    {
        return $this->imagesEndpoint;
    }

    /**
     * @return string
     */
    public function getSellerCentralEndpoint(): string
    {
        return $this->sellerCentralEndpoint;
    }

    /**
     * @return string
     */
    public function getSellingPartnerApiEndpoint(): string
    {
        return $this->sellingPartnerApiEndpoint;
    }

    /**
     * @return string
     */
    public function getSellingPartnerApiSandboxEndpoint(): string
    {
        return $this->sellingPartnerApiSandboxEndpoint;
    }
}
